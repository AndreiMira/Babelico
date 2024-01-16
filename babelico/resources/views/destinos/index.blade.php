@extends('layouts.app')

@section('content')
    <style>
        .card-details {
            transition: opacity 0.5s ease-in-out, visibility 0.5s ease-in-out;
        }

        .show-details {
            opacity: 1;
            visibility: visible;
        }
    </style>

    <h1 class="text-4xl text-white text-center my-8">Destinos</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
        @foreach ($destinos as $destino)
            <div class="relative overflow-hidden">
                <div id="card-{{ $destino->id }}" class="card-container">

                    <div
                        class="text-white bg-black bg-opacity-50 rounded absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center p-4">
                        <p>{{ $destino->nombre }}</p>
                        <p>{{ $destino->ubicacion }}</p>
                    </div>

                    <img src="{{ $destino->imagen_principal }}" alt="{{ $destino->nombre }}"
                        class="w-full h-full object-cover">
                    <button
                        class="view-more-button absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-blue-500 text-white px-4 py-2 rounded"
                        onclick="toggleCardDetails('{{ $destino->id }}')">View More</button>

                    <div id="card-details-{{ $destino->id }}"
                        class="card-details absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center text-black opacity-0 visibility-hidden bg-white shadow-lg rounded-lg p-6">

                        <h5 class="mb-4 text-3xl font-semibold text-blue-800">{{ $destino->nombre }}</h5>
                        <p class="mb-2 text-gray-600"><span class="mr-2">Ubicación:</span>{{ $destino->ubicacion }}</p>
                        <p class="mb-2"><span class="mr-2">Precio:</span><span
                                class="text-green-600 font-bold">{{ $destino->precio }}€</span></p>
                        <p class="mb-2"><span class="mr-2">Fecha Ida:</span>{{ $destino->fecha_ida }}</p>
                        <p class="mb-2"><span class="mr-2">Fecha Vuelta:</span>{{ $destino->fecha_vuelta }}</p>

                        <div class="mb-4 prose max-w-full">
                            <p class="mb-2"><span class="mr-2">Descripción:</span>{{ $destino->descripcion }}</p>
                        </div>

                        <button
                            class="view-more-button absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-blue-500 text-white px-4 py-2 rounded"
                            onclick="toggleCardDetails('{{ $destino->id }}')">Close</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        function toggleCardDetails(destinoId) {
            var cardDetails = document.getElementById('card-details-' + destinoId);
            cardDetails.classList.toggle('show-details');
        }
    </script>
@endsection

@extends('layouts.app')

@section('content')
    <h1 class="text-4xl text-white text-center my-8">Destinos</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
        @foreach ($destinos as $destino)
            <div class="relative overflow-hidden cursor-pointer">
                <div id="card-container-{{ $destino->id }}"
                    class="card-container w-full h-full transition-transform duration-500 transform scale-1 hover:scale-1.1"
                    onclick="flipCard('{{ $destino->id }}')">
                    <img src="{{ $destino->imagen_principal }}" alt="{{ $destino->nombre }}"
                        class="w-full h-full object-cover">

                    <!-- View More button (initially hidden) -->
                    <button
                        class="view-more-button absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-blue-500 text-white px-4 py-2 rounded hidden"
                        onclick="flipCard('{{ $destino->id }}')">View More</button>
                </div>

                <div id="card-details-{{ $destino->id }}"
                    class="card-details absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center text-black hidden bg-white">
                    <h5 class="mb-2">{{ $destino->nombre }}</h5>
                    <p class="mb-2">{{ $destino->ubicacion }}</p>
                    <p class="mb-2">Precio: {{ $destino->precio }}</p>
                    <p class="mb-2">Fecha Ida: {{ $destino->fecha_ida }}</p>
                    <p class="mb-2">Fecha Vuelta: {{ $destino->fecha_vuelta }}</p>
                    <p class="mb-2">Descripcion: {{ $destino->descripcion }}</p>

                    <!-- Close button -->
                    <button class="close-button mt-4 px-4 py-2 bg-blue-500 text-white rounded"
                        onclick="closeCard('{{ $destino->id }}')">Close</button>
                </div>
            </div>
        @endforeach
    </div>

    <style>
        .card-container:hover {
            cursor: pointer;
        }

        .card-container:hover .view-more-button {
            opacity: 1;
        }

        .card-details {
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
            transform-origin: center center;
        }

        .card-container.flipped .card-details {
            opacity: 1;
            transform: scale(1);
        }

        .close-button {
            cursor: pointer;
        }
    </style>

    <script>
        function flipCard(id) {
            var cardContainer = document.getElementById('card-container-' + id);
            var cardDetails = document.getElementById('card-details-' + id);

            // Toggle the 'flipped' class to apply the scale and show/hide details
            cardContainer.classList.toggle('flipped');

            // Toggle the 'hidden' class to show/hide details
            cardDetails.classList.toggle('hidden');
        }

        function closeCard(id) {
            var cardContainer = document.getElementById('card-container-' + id);
            var cardDetails = document.getElementById('card-details-' + id);

            // Reset the flip card state
            cardContainer.classList.remove('flipped');
            cardDetails.classList.add('hidden');
        }
    </script>
@endsection

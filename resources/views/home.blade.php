@extends('layouts.app')
@section('content')
<style>
    .custom-carousel-img {
        height: 600px; /* Ajusta la altura según sea necesario */
        width: 800px; /* Ajusta el ancho según sea necesario */
        object-fit: cover; /* Cubrir el área del contenedor sin distorsión */
    }

    .carousel-caption {
        background: rgba(0, 0, 0, 0.5); /* Fondo semitransparente para mejorar la legibilidad */
        max-height: 100px; /* Limita la altura del caption */
        overflow: hidden;
        padding: 10px;
        text-align: center; /* Centrar el texto */
        color: white; /* Color de texto */
        margin-top: 10px; /* Espacio entre la imagen y el caption */
    }

    .carousel-caption h5,
    .carousel-caption p {
        margin: 0px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; /* Trunca el texto con puntos suspensivos si es muy largo */
        font-size: 12px; /* Tamaño de fuente más pequeño */
    }

    .custom-carousel-size {
        max-width: 800px; /* Ajusta el ancho según sea necesario */
        margin: 0 auto; /* Centrar el carrusel */
        position: relative; /* Para asegurar que los botones se posicionen correctamente */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente para mejorar la visibilidad */
        border-radius: 50%; /* Hacer los íconos circulares */
    }

    .carousel-control-prev,
    .carousel-control-next {
        max-height: 500px; /* Limita la altura del caption */
    }

    .product-details {
        padding: 20px;
        background-color: #f8f9fa; /* Color de fondo para los detalles del producto */
        border: 1px solid #ccc;
        height: 600px; /* Ajusta la altura según sea necesario */

    }
   
    
    
    
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide custom-carousel-size" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($productos as $producto)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $loop->index + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($productos as $producto)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ asset($producto->imagen_url) }}" class="d-block w-100 custom-carousel-img" alt="{{ $producto->nombre_producto }}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $producto->nombre_producto }}</h5>
                                        <p>{{ $producto->descripcion }}</p>
                                    </div>
                                    <div class="d-none product-details"
                                         data-precio="{{ $producto->precio }}"
                                         data-calificacion="{{ $producto->calificacion_promedio }}"
                                         data-categoria="{{ $producto->categoria }}"
                                         data-marca="{{ $producto->marca }}"
                                         data-modelo="{{ $producto->modelo }}"
                                         data-sku="{{ $producto->sku }}"
                                         data-upc="{{ $producto->upc }}"
                                         data-dimensiones="{{ $producto->dimensiones }}"
                                         data-color="{{ $producto->color }}"
                                         data-material="{{ $producto->material }}"
                                         data-fabricante="{{ $producto->fabricante }}"
                                    ></div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-details" id="product-details">
                        <!-- Aquí se mostrarán dinámicamente los detalles del producto activo en el carrusel -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function () {
        var carousel = document.getElementById('carouselExampleIndicators');
        var productDetails = document.getElementById('product-details');

        function mostrarDetallesProducto() {
            var activeSlide = carousel.querySelector('.carousel-item.active');
            var productName = activeSlide.querySelector('img').alt;
            var productDescription = activeSlide.querySelector('.carousel-caption p').textContent;
            
            var productPrice = activeSlide.querySelector('.product-details').getAttribute('data-precio');
            var productCalificacion = parseFloat(activeSlide.querySelector('.product-details').getAttribute('data-calificacion'));
            var productCategory = activeSlide.querySelector('.product-details').getAttribute('data-categoria');
            var productBrand = activeSlide.querySelector('.product-details').getAttribute('data-marca');
            var productModel = activeSlide.querySelector('.product-details').getAttribute('data-modelo');
            var productSKU = activeSlide.querySelector('.product-details').getAttribute('data-sku');
            var productUPC = activeSlide.querySelector('.product-details').getAttribute('data-upc');
            var productDimensions = activeSlide.querySelector('.product-details').getAttribute('data-dimensiones');
            var productColor = activeSlide.querySelector('.product-details').getAttribute('data-color');
            var productMaterial = activeSlide.querySelector('.product-details').getAttribute('data-material');
            var productManufacturer = activeSlide.querySelector('.product-details').getAttribute('data-fabricante');

            productDetails.innerHTML = '';

            var card = document.createElement('div');
            card.classList.add('card', 'mt-4');
            var cardBody = document.createElement('div');
            cardBody.classList.add('card-body');
            var cardTitle = document.createElement('h5');
            cardTitle.classList.add('card-title');
            cardTitle.textContent = productName;
            var cardDescription = document.createElement('p');
            cardDescription.classList.add('card-text');
            cardDescription.textContent = productDescription;
            var cardPrice = document.createElement('p');
            cardPrice.classList.add('card-text', 'text-muted');
            cardPrice.textContent = 'Precio: ' + productPrice;
            var cardFeatures = document.createElement('ul');
            cardFeatures.classList.add('card-text');
            cardFeatures.innerHTML = `
                <li><strong>Categoría:</strong> ${productCategory}</li>
                <li><strong>Marca:</strong> ${productBrand}</li>
                <li><strong>Modelo:</strong> ${productModel}</li>
                <li><strong>SKU:</strong> ${productSKU}</li>
                <li><strong>UPC:</strong> ${productUPC}</li>
                <li><strong>Dimensiones:</strong> ${productDimensions}</li>
                <li><strong>Color:</strong> ${productColor}</li>
                <li><strong>Material:</strong> ${productMaterial}</li>
                <li><strong>Fabricante:</strong> ${productManufacturer}</li>
            `;
            var cardReviews = document.createElement('div');
            cardReviews.classList.add('card-text', 'stars');
            cardReviews.innerHTML = 'Calificación: ' + mostrarEstrellas(productCalificacion);

            cardBody.appendChild(cardTitle);
            cardBody.appendChild(cardDescription);
            cardBody.appendChild(cardPrice);
            cardBody.appendChild(cardFeatures);
            cardBody.appendChild(cardReviews);
            card.appendChild(cardBody);

            productDetails.appendChild(card);
        }

        function mostrarEstrellas(calificacion) {
            var stars = '';
            var maxStars = 5;
            
            for (var i = 1; i <= maxStars; i++) {
                if (i <= calificacion) {
                    stars += '<i class="bi bi-star-fill"></i>';
                } else if (i - 0.5 <= calificacion) {
                    stars += '<i class="bi bi-star-half"></i>';
                } else {
                    stars += '<i class="bi bi-star"></i>';
                }
            }

            return stars;
        }

        mostrarDetallesProducto();

        carousel.addEventListener('slid.bs.carousel', mostrarDetallesProducto);
    });
</script>
</script>
@endsection

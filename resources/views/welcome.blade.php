<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros Online - Tu librería en línea</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="#" class="text-xl font-bold text-blue-600">Libros Online</a>
                </div>
                <div class="hidden md:block">
                    <ul class="ml-4 flex space-x-4">
                        <li><a href="#features" class="text-gray-600 hover:text-gray-900">Características</a></li>
                        <li><a href="#books" class="text-gray-600 hover:text-gray-900">Libros</a></li>
                        <li><a href="#contact" class="text-gray-600 hover:text-gray-900">Contacto</a></li>
                    </ul>
                </div>
                <div class="md:hidden">
                    <button class="mobile-menu-button">
                        <i class="fas fa-bars text-gray-600"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-cover bg-center h-96 flex items-center justify-center text-black" style="background-image: url('https://source.unsplash.com/1600x900/?books');">
    <div class="text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Descubre tu próxima lectura</h1>
        <p class="text-lg md:text-xl mb-6">Explora nuestra amplia selección de libros en línea</p>
        <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg text-lg font-semibold transition duration-300">Ver libros</a>
    </div>
</div>

    <!-- Features Section -->
    <div id="features" class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                <i class="fas fa-book text-4xl text-blue-600 mb-4"></i>
                <h2 class="text-xl font-semibold mb-2">Amplia selección de libros</h2>
                <p class="text-gray-700">Explora miles de títulos de diferentes géneros y autores.</p>
            </div>
            <!-- Feature 2 -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                <i class="fas fa-search text-4xl text-blue-600 mb-4"></i>
                <h2 class="text-xl font-semibold mb-2">Búsqueda avanzada</h2>
                <p class="text-gray-700">Encuentra rápidamente el libro que buscas con nuestro sistema de búsqueda avanzada.</p>
            </div>
            <!-- Feature 3 -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                <i class="fas fa-shopping-cart text-4xl text-blue-600 mb-4"></i>
                <h2 class="text-xl font-semibold mb-2">Compra fácil y segura</h2>
                <p class="text-gray-700">Realiza tu compra de forma segura y cómoda directamente desde nuestro sitio.</p>
            </div>
        </div>
    </div>

    <!-- Books Section -->
    <div id="books" class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Libros Recientes</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Book Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://m.media-amazon.com/images/I/713nEf55PkL._AC_UF1000,1000_QL80_.jpg" alt="Book" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">El Principito</h3>
                        <p class="text-gray-700">Una novela corta y la obra más famosa del escritor francés Antoine de Saint-Exupéry.</p>
                        <div class="mt-4">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg text-sm font-semibold transition duration-300">Ver detalles</a>
                        </div>
                    </div>
                </div>
                <!-- Book Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/81YOuOGFCJL.jpg" alt="Book" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">Harry Potter y la piedra filosofal</h3>
                        <p class="text-gray-700">El primer libro de la serie de Harry Potter escrita por J.K. Rowling.</p>
                        <div class="mt-4">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg text-sm font-semibold transition duration-300">Ver detalles</a>
                        </div>
                    </div>
                </div>
                <!-- Book Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/91b0C2YNSrL.jpg" alt="Book" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold mb-2">El Hobbit</h3>
                        <p class="text-gray-700">Una novela de fantasía escrita por J.R.R. Tolkien.</p><br>
                        <div class="mt-4">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg text-sm font-semibold transition duration-300">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section -->
<div id="contact" class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Contacto</h2>
                <ul class="text-lg">
                    <li><i class="fas fa-envelope text-blue-600"></i> Correo Electrónico: <a href="mailto:contacto@librosonline.com" class="ml-2">contacto@librosonline.com</a></li>
                    <li class="mt-4"><i class="fab fa-whatsapp text-blue-600"></i> WhatsApp: <a href="https://wa.me/123456789" class="ml-2">Enviar mensaje</a></li>
                </ul>
            </div>
            <div>
                <form class="mt-8">
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium">Nombre</label>
                            <input type="text" id="name" name="name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium">Correo Electrónico</label>
                            <input type="email" id="email" name="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium">Mensaje</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg text-sm font-semibold transition duration-300">Enviar mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="bg-gray-800 text-white py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <p class="text-sm">© 2023 Libros Online. Todos los derechos reservados.</p>
        <div>
            <a href="#" class="text-gray-400 hover:text-white ml-4"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-white ml-4"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-gray-400 hover:text-white ml-4"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-gray-400 hover:text-white ml-4"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script>
    // Mobile menu toggle
    const menuBtn = document.querySelector('.mobile-menu-button');
    const navMenu = document.querySelector('.hidden');

    menuBtn.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
    });
</script>

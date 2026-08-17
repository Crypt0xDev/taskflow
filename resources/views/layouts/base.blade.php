{{--
| Esqueleto HTML de todas las paginas: cabecera, SEO y assets.
| No lleva diseno (ni menu, ni sidebar, ni footer): eso lo pone cada layout.
| De aqui heredan los layouts, y de los layouts heredan las vistas.
|
| Abajo veras varios sitios donde pone yield seguido de un nombre.
| Eso es un hueco que cada vista puede rellenar con su contenido.
| Los huecos son:
|
| content .......... la pagina en si (esta es obligatoria)
| title ............ el texto de la pestana del navegador
| description ...... el resumen que sale en Google y al compartir
| keywords ......... palabras clave para buscadores
| author ........... quien firma el documento
| robots ........... si Google puede indexar la pagina o no
| canonical ........ la direccion "oficial" de esta pagina
| og_type .......... que tipo de contenido es, normalmente 'website'
| og_image ......... la imagen que aparece al compartir el enlace
| og_image_alt ..... descripcion de esa imagen
|
| Y ademas hay tres pilas que se pueden rellenar con push desde cualquier vista:
|
| head ............. etiquetas sueltas para la cabecera
| styles ........... estilos que solo necesita una pagina concreta
| scripts .......... al final para que cargue mas rapido la pagina
--}}
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO --}}
    <title>@yield('title', 'TaskFlow')</title>
    <meta name="description" content="@yield('description', 'TaskFlow - Organiza tus tareas, administra tu tiempo y aumenta tu productividad.')">
    <meta name="keywords" content="@yield('keywords', 'TaskFlow, tareas, productividad, gestión de tareas, organización')">
    <meta name="author" content="@yield('author', 'TaskFlow')">
    <meta name="robots" content="@yield('robots', 'index, follow')">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Iconos --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    {{-- Open Graph / Facebook --}}
    <meta property="og:title" content="@yield('title', 'TaskFlow')">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:description" content="@yield('description', 'TaskFlow - Organiza tus tareas y aumenta tu productividad.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="TaskFlow">
    <meta property="og:locale" content="es_ES">
    <meta property="og:image" content="@yield('og_image', asset('og-image.png'))">
    <meta property="og:image:alt" content="@yield('og_image_alt', 'TaskFlow')">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'TaskFlow')">
    <meta name="twitter:description" content="@yield('description', 'TaskFlow - Organiza tus tareas y aumenta tu productividad.')">
    <meta name="twitter:image" content="@yield('og_image', asset('og-image.png'))">
    <meta name="twitter:image:alt" content="@yield('og_image_alt', 'TaskFlow')">

    {{-- Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Meta, links y estilos extra --}}
    @stack('head')
    @stack('styles')
</head>

<body class="min-h-screen antialiased text-gray-900 bg-gray-50">
    {{-- Contenido principal --}}
    @yield('content')

    {{-- Scripts extra --}}
    @stack('scripts')
</body>

</html>

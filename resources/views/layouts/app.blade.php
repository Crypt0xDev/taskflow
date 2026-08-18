{{--
| El diseno de las paginas publicas: cabecera arriba, el contenido
| en medio y el pie abajo. Hereda del layout base, que es quien pone
| el esqueleto HTML y la cabecera del documento.
| De aqui heredan las vistas publicas: portada, contacto,
| iniciar sesion y registro.
|
| Este layout rellena el hueco content del base con esa estructura,
| y a su vez deja un hueco propio en medio para cada pagina. Ese
| hueco es:
|
| page ............. el contenido de la pagina (esta es obligatoria)
|
| Los demas huecos siguen siendo los del base y se rellenan igual,
| desde la vista, con section:
|
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
| Y las tres pilas del base tambien siguen disponibles con push:
|
| head ............. etiquetas sueltas para la cabecera
| styles ........... estilos que solo necesita una pagina concreta
| scripts .......... al final para que cargue mas rapido la pagina
|
| Una vista que herede de aqui se ve asi:
|
| extends('layouts.app')
| section('title', 'Contacto')
| section('page')
|     ... el contenido de la pagina ...
| endsection
--}}
@extends('layouts.base')

@section('content')
    {{-- Cabecera: logo, navegacion y botones de entrar / registrarse --}}
    <header>
    </header>

    {{-- Contenido principal --}}
    <main>
        @yield('page')
    </main>

    {{-- Pie de pagina --}}
    <footer>
    </footer>
@endsection

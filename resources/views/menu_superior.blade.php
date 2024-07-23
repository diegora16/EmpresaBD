<div>
    <nav class=" flex flex-col md:flex-row md:justify-center pt-5">
        <a href="/" class="{{ setActivo('inicio') }}">Inicio</a>
        <a href="/personas" class="{{ setActivo('personas') }} {{ setActivo('posts.create') }} {{ setActivo('posts.edit') }}">Personas</a>
        <a href="/contacto" class="{{ setActivo('contacto') }}">Contacto</a>
        <a href="/register" class="{{ setActivo('register') }}">Register</a>
    </nav>
</div>

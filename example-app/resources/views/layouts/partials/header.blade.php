 <header>
        <h1>JP CODE</h1>
        <nav>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cours</a></li>
            <li><a href="{{route('about')}}" class="{{request()->routeIs('about') ? 'active' : ''}}">About</a></li>
        </nav>
</header>
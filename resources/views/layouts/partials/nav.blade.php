<nav class="nav-h">
    <div class = "nav-h_logoContainer">
        <img src = '{{ Storage::url("assets/logo_EGJC.jpg") }}'  class = "nav-h_logoContainer_logo" alt="Logo EGJC">
    </div>

    <div class="nav-h_item-container">
        <li class="nav-h_item-container_item"><a href="{{ route('homepage_index') }}">Acueil</a></li>
        <li class="nav-h_item-container_item"><a href="{{ route('about_index') }}">A propos de nous</a></li>
        <li class="nav-h_item-container_item"><a href="{{ route('activity_index') }}">Activités</a></li>
        <li class="nav-h_item-container_item"><a href="{{ route('news_index') }}">Actualités</a></li>
        <li class="nav-h_item-container_item"><a href="{{ route('departement_index') }}">Département</a></li>
        <li class="nav-h_item-container_item"><a href="{{ route('event_index') }}">Evènements</a></li>
        <li class="nav-h_item-container_item"><a href="{{ route('gallery_index') }}">Gallérie</a></li>
        <li class="nav-h_item-container_item"><a href="{{ route('preaching_index') }}">Prédications</a></li>
        <li class="nav-h_item-container_item"><a href="#">Faire un don</a></li>
        <li class="nav-h_item-container_item"><a href="{{ route('contact_index') }}">Nous contacter</a></li>
        @if (Route::has('login'))
            <li class="nav-h_item-container_item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="nav-h_item-container_item"><a href="{{ url('/logout') }}">Se déconnecter</a></li>
        @endif
    </div>

</nav>
<nav class="nav-h">
    <div class = "nav-h_logoContainer">
        <img src = '{{ Storage::url("assets/logo_EGJC.jpg") }}'  class = "nav-h_logoContainer_logo" alt="Logo EGJC">
    </div>

    <div class="nav-h_item-container">
        <li class="nav-h_item-container_item"><a href="/">Acueil</a></li>
        <li class="nav-h_item-container_item"><a href="/about">A propos de nous</a></li>
        <li class="nav-h_item-container_item"><a href="/activity">Activités</a></li>
        <li class="nav-h_item-container_item"><a href="/news">Actualités</a></li>
        <li class="nav-h_item-container_item"><a href="/departement">Département</a></li>
        <li class="nav-h_item-container_item"><a href="/event">Evènements</a></li>
        <li class="nav-h_item-container_item"><a href="/gallery">Gallérie</a></li>
        <li class="nav-h_item-container_item"><a href="/preaching">Prédications</a></li>
        <li class="nav-h_item-container_item"><a href="#">Faire un don</a></li>
        <li class="nav-h_item-container_item"><a href="/contact">Nous contacter</a></li>
        @if (Route::has('login'))
            <li class="nav-h_item-container_item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="nav-h_item-container_item"><a href="{{ url('/logout') }}">Se déconnecter</a></li>
        @endif
    </div>

</nav>
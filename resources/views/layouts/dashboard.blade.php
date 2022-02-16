@extends('layouts.app')

@section('content0')

    <div class="py-12">
        <nav class="nav-h">
            <div class="nav-h_item-container">
                <li class="nav-h_item-container_item"><a href="{{ route('yearvision_create') }}">Vision de l'année</a></li>
                <li class="nav-h_item-container_item"><a href="/about">A propos de nous</a></li>
                <li class="nav-h_item-container_item"><a href="/activity">Activités</a></li>
                <li class="nav-h_item-container_item"><a href="/news">Actualités</a></li>
                <li class="nav-h_item-container_item"><a href="/departement">Département</a></li>
                <li class="nav-h_item-container_item"><a href="/event">Evènements</a></li>
                <li class="nav-h_item-container_item"><a href="/gallery">Gallérie</a></li>
                
            </div>
        
        </nav>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div> -->
            @yield('content1')
        </div>
    </div>

@endsection
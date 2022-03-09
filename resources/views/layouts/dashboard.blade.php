@extends('layouts.app')

@section('content0')

<div x-data="{ sidebarOpen: false }" class="flex bg-indigo-50 mb-10">
    <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

    <!--------------------------------------- Menu ---------------------------------------------------->
    <div  :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
        
        <div class="flex items-center justify-center mt-8 border-b-4 pb-2">
            <div class="flex items-center">
                <span class="text-white text-2xl mx-2 font-semibold">Espace de gestion</span>
            </div>
        </div>

        <nav class="mt-10">

            <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100 hover:text-amber-400" href="#">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>

                <span class="mx-3">Tableau de bord</span>
            </a>

            <div x-data = "{oppenVision : false}" >
                <div x-on:click = "oppenVision=!oppenVision" class="flex items-center mt-4 py-2 px-6 text-gray-500 bg-gray-700 bg-opacity-25 text-gray-100 hover:text-amber-400 cursor-pointer">
                    <ion-icon name="eye-outline"></ion-icon>    
                    <span class="mx-3 pr-8 flex-1 w-64">Vision de l'année</span>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
                <div x-show = "oppenVision">
                    <a class="flex items-center mt-1 py-0 pl-10 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{ route('yearvision_list') }}">
                        <ion-icon name="list-outline"></ion-icon>
                        <span class="mx-3">Les visions de toutes les années</span>
                    </a>
                    <a class="flex items-center mt-1 py-0 pl-10 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{Route('yearvision_create')}}">
                        <ion-icon name="add-circle-outline"></ion-icon>
                        <span class="mx-3">Nouvelle vision année</span>
                    </a>
                </div>
            </div>

            <div x-data = "{oppen_weektopic : false}" >
                <div x-on:click = "oppen_weektopic=!oppen_weektopic" 
                    class="flex items-center mt-4 py-2 px-6 text-gray-500 bg-gray-700 bg-opacity-25 text-gray-100 hover:text-amber-400 cursor-pointer">
                    <ion-icon name="flame-outline"></ion-icon>    
                    <span class="mx-3 pr-8 flex-1 w-64">Thème de la semaine</span>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
                <div x-show = "oppen_weektopic">
                    <a class="flex items-center mt-1 py-0 pl-10 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{ route('weektopic_all') }}">
                        <ion-icon name="list-outline"></ion-icon>
                        <span class="mx-3">Les thèmes de toutes les semaines</span>
                    </a>
                    <a class="flex items-center mt-1 py-0 pl-10 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{Route('weektopic_create')}}">
                        <ion-icon name="add-circle-outline"></ion-icon>
                        <span class="mx-3">Nouveau thème de la semaine</span>
                    </a>
                </div>
            </div>

            <!----------------------------- News ---------------------------------------->
            <div x-data = "{oppenNews : false}" >
                <div x-on:click = "oppenNews=!oppenNews" 
                    class="flex items-center mt-4 py-2 px-6 text-gray-500 bg-gray-700 bg-opacity-25 
                    text-gray-100 hover:text-amber-400 cursor-pointer">

                    <ion-icon name="newspaper-outline"></ion-icon>    
                    <span class="mx-3 pr-8 flex-1 w-64">Actualité</span>
                    <ion-icon name="chevron-forward-outline"></ion-icon>

                </div>

                <div x-show = "oppenNews" x-data = "{oppen_NewsCategory : false}">
                    
                    <!-------------------- News category ------------------>
                    <div x-on:click = "oppen_NewsCategory=!oppen_NewsCategory" 
                        class="flex items-center mt-1 py-0 pl-10 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 
                        text-gray-100 hover:text-amber-400 cursor-pointer">

                        <ion-icon name="apps-outline"></ion-icon>
                        <span class="mx-3">Catégories</span>

                    </div>

                    <div x-show = "oppen_NewsCategory" class = "px-6">
                        <a class="flex items-center mt-1 py-0 pl-10 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                            href="{{ route('newscategory_all') }}">
                            <ion-icon name="list-outline"></ion-icon>
                            <span class="mx-3">Toutes les catégories</span>
                        </a>
                        <a class="flex items-center mt-1 py-0 pl-10 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                            href="{{Route('newscategory_create')}}">
                            <ion-icon name="add-circle-outline"></ion-icon>
                            <span class="mx-3">Nouvelle catégorie</span>
                        </a>
                    </div>
                </div>

            </div>

            <!------------------------------ Departement -------------------->

            <div x-data = "{oppen_departement : false}" >
                <div x-on:click = "oppen_departement=!oppen_departement" 
                    class="flex items-center mt-4 py-2 px-6 text-gray-500 bg-gray-700 bg-opacity-25 text-gray-100 hover:text-amber-400 cursor-pointer">
                    <ion-icon name="keypad"></ion-icon>    
                    <span class="mx-3 pr-8 flex-1 w-64">Département</span>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
                <div x-show = "oppen_departement">
                    <a class="flex items-center mt-1 py-0 pl-10 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{ route('departement_all') }}">
                        <ion-icon name="list-outline"></ion-icon>
                        <span class="mx-3">Tous les départements</span>
                    </a>
                    <a class="flex items-center mt-1 py-0 pl-10 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{Route('departement_create')}}">
                        <ion-icon name="add-circle-outline"></ion-icon>
                        <span class="mx-3">Nouveau département</span>
                    </a>

                    <div class="flex items-center mt-4 py-2 px-6 text-gray-500 bg-gray-700 bg-opacity-25 text-gray-100 hover:text-amber-400 cursor-pointer">
                        <span class="mx-3 pr-8 flex-1 w-64">Roles</span>
                    </div>
                    <a class="flex items-center mt-1 py-0 pl-10 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{ route('memberRole_all') }}">
                        <ion-icon name="list-outline"></ion-icon>
                        <span class="mx-3">Tous les rôles</span>
                    </a>
                    <a class="flex items-center mt-1 py-0 pl-10 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{Route('memberRole_create')}}">
                        <ion-icon name="add-circle-outline"></ion-icon>
                        <span class="mx-3">Nouveau rôle</span>
                    </a>
                </div>

            </div>

        </nav>

    </div>

    <!--------------------------------------- Content ---------------------------------------------------->

    <div class="flex-1 flex flex-col">
        <header class="flex justify-between items-center py-5 px-6 bg-white border-b-4 border-gray-500">
            <div class="flex items-center">
                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
        
            </div>
        
            <div class="flex items-center">
        
                <div x-data="{ dropdownOpen: false }" class="relative">
                    <button @click="dropdownOpen = ! dropdownOpen"
                        class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                        <ion-icon class="h-full w-full object-cover" name="person-circle-outline"></ion-icon>
                    </button>
        
                    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                        style="display: none;">
                    </div>
        
                    <div x-show="dropdownOpen"
                        class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                        style="display: none;">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                        <a href="/login"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                    </div>
                </div>
            </div>
        </header>
        @yield('content1')
        
    </div>
</div>

@endsection
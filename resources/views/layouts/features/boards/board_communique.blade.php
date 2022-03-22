@extends('layouts.dashboard')
@section('content1')

    <div class="table w-full p-2">

        <h3 class = "h_4 text-center">Communiqués</h3>

        <table class="w-full border">
            <thead>
                <tr class="bg-gray-50 border-b">
                    
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-800">
                        <div class="flex items-center justify-center text-lg">
                            Objet
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-800">
                        <div class="flex items-center justify-center text-lg">
                            Contenu
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-800">
                        <div class="flex items-center justify-center text-lg">
                            Expiration
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-800">
                        <div class="flex items-center justify-center text-lg">
                            Catégorie
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-800">
                        <div class="flex items-center justify-center text-lg">
                            Auteur
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-800">
                        <div class="flex items-center justify-center text-lg">
                            Action
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                
                </tr>
            </thead>
            <tbody>
                
                @foreach($communiques as $communique)
                    <tr class="bg-gray-100 text-center border-b text-sm text-gray-600 hover:bg-orange-100">

                        <td class="p-2 border-r text-base text-left">{{ $communique->title }}</td>
                        <td class="p-2 border-r text-base text-left">{{ $communique->content }}</td>
                        <td class="p-2 border-r text-base text-left">{{ $communique->expiration }}</td>
                        <td class="p-2 border-r text-base text-left">{{ $communique->newscategory->name }}</td>
                        <td class="p-2 border-r text-base text-left">{{ $communique->member->firstname }}</td>

                        <td>
                            <div class = "flex justify-center justify-items-center">
                                <a href="{{ Route('communique_edit', $communique->id) }}" 
                                    class="bg-blue-500 p-2 mr-5 text-white hover:shadow-lg font-thin text-base">
                                    <ion-icon name="create"></ion-icon> Editer
                                </a>
                                <a href="{{ Route('messagebox', $communique->id .'/'.'delete'.'/'.'communique_destroy'.'/'.'communique_all') }}" 
                                    class="bg-red-500 p-2 text-white hover:shadow-lg font-thin text-base">
                                    <ion-icon name="trash-outline"></ion-icon> Supprimer
                                </a>

                            </div>
                        </td>

                    </tr>
                @endforeach
                
            </tbody>

        </table>

    </div>

@endsection
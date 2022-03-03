@extends('layouts.dashboard')
@section('content1')

    <div class="table w-full p-2">

        <h3 class = "h_4 text-center">Les catégories des actualités</h3>

        <table class="w-full border">
            <thead>
                <tr class="bg-gray-50 border-b">
                    
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Désignation
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Action
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                
                </tr>
            </thead>
            <tbody>
                
                @foreach($newscategories as $newscategory)
                    <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                        <td class="p-2 border-r">{{$newscategory->name}}</td>
                        <td>
                            <a href="{{ Route('newscategory_edit', $newscategory->id) }}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Editer</a>
                            <a href="{{ Route('messagebox', $newscategory->id .'/'.'delete'.'/'.'newscategory_destroy'.'/'.'newscategory_all') }}" 
                                class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                @endforeach
                

            </tbody>

        </table>

    </div>

@endsection
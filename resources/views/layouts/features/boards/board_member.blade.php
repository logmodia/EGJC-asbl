@extends('layouts.dashboard')
@section('content1')

    <div class="table w-full p-2">

        <h3 class = "h_4 text-center">Membres inscrits</h3>

        <table class="w-full border">
            <thead>
                <tr class="bg-gray-50 border-b">
                    
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-800">
                        <div class="flex items-center justify-center text-lg">
                            Nom
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-800">
                        <div class="flex items-center justify-center text-lg">
                            Genre
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-800">
                        <div class="flex items-center justify-center text-lg">
                            Date de naissance
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
                            Département/Rôle
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
                
                @foreach($members as $member)
                    <tr class="bg-gray-100 text-center border-b text-sm text-gray-600 hover:bg-orange-100">
                        <td class="p-2 border-r text-base text-left">{{$member->firstname.'  '.$member->lastname}}</td>
                        <td class="p-2 border-r text-base text-left">{{$member->gender}}</td>
                        <td class="p-2 border-r text-base text-left">{{$member->birthday}}</td>
                        <td class="p-2 border-r text-base text-left">{{$member->memberCategory->categ_name}}</td>
                        <td class="p-2 border-r text-base text-left">
                            @foreach($member->departements as $department)

                                <span>{{$department->dep_name}}</span>

                                @foreach($member->memberRoles as $memberRole)

                                    @if($department->dep_id === $memberRole->pivot->dep_id and 
                                        $department->pivot->memberRole_id === $memberRole->memberRole_id)
                                        <li class="ml-5" ><i>Rôle : {{$memberRole->role_name }}</i></li>
                                    @endif

                                    
                                @endforeach
                            @endforeach
                        </td>

                        <td>
                            <a href="{{ Route('assignMemberRole', $member->member_id) }}" 
                                class="bg-orange-500 p-2 mr-5 text-white hover:shadow-lg font-thin text-base">
                                <ion-icon name="create"></ion-icon> Rôles
                            </a>
                            <a href="{{ Route('member_edit', $member->member_id) }}" 
                                class="bg-blue-500 p-2 mr-5 text-white hover:shadow-lg font-thin text-base">
                                <ion-icon name="create"></ion-icon> Editer
                            </a>
                            <a href="{{ Route('messagebox', $member->member_id .'/'.'delete'.'/'.'member_destroy'.'/'.'member_all') }}" 
                                class="bg-red-500 p-2 text-white hover:shadow-lg font-thin text-base">
                                <ion-icon name="trash-outline"></ion-icon> Supprimer
                            </a>
                        </td>
                    </tr>
                @endforeach
                

            </tbody>

        </table>

    </div>

@endsection
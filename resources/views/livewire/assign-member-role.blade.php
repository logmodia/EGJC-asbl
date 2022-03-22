<div class="table w-full p-2">

    <h3 class = "h_4 text-center">Gérer les rôles de {{$member[0]->firstname.'  '.$member[0]->lastname}}</h3>

    <button type="button" wire:click="addMemberRole" 
        class="bg-green-500 p-1.5 mr-5 text-white hover:shadow-lg font-thin text-base">
        Nouveau rôle
    </button>

    <table class="w-full border">
        <thead>
            <tr class="bg-gray-50 border-b">
                
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-800">
                    <div class="flex items-center justify-center text-lg">
                        Département
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-800">
                    <div class="flex items-center justify-center text-lg">
                        Rôle
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
            
            @foreach($member[0]->departements as $department)
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">

                    <td class="py-2 px-2 border-r text-base text-left">{{$department->dep_name}}</td>
                    @foreach($member[0]->memberRoles as $memberRole)

                        @if($department->dep_id === $memberRole->pivot->dep_id and 
                            $department->pivot->memberRole_id === $memberRole->memberRole_id)
                            <td class="py-2 px-2 border-r text-base text-left">{{$memberRole->role_name }}</td>
                        @endif

                        
                    @endforeach
                        <td class="py-2 px-2 border-r text-base">
                            <button type="button" wire:click="startEdit({{ $department->dep_id }})" 
                                class="bg-green-500 p-1.5 mr-5 text-white hover:shadow-lg font-thin text-sm">
                                <ion-icon name="create"></ion-icon> Editer
                            </button>
                            <button type="button" wire:click="deletMemberRole({{ $department->pivot->id }})" 
                                class="bg-red-500 p-1.5 mr-5 text-white hover:shadow-lg font-thin text-sm">
                                <ion-icon name="trash-outline"></ion-icon> Supprimer
                            </button>
                        </td>
                        
                </tr>

                @if($editId === $department->dep_id)
                    <tr class="bg-white text-center border-b text-sm text-gray-600">
                        <td colspan = "3" class="py-2 px-2 border-r text-base text-left">
                            <livewire:form-edit-assign-member-role key="{{ now() }}" 
                                :member="$member[0]"
                                :pivot_id="$department->pivot->id"
                                :dep_id="$department->dep_id" 
                                :memberRole_id="$department->pivot->memberRole_id" 
                                :addMemberRole="$addMemberRole" />
                        </td>
                    </tr>
                @endif

            @endforeach

            @if($addMemberRole === true)
                <tr class="bg-white text-center border-b text-sm text-gray-600">
                    <td colspan = "3" class="py-2 px-2 border-r text-base text-left">
                        <livewire:form-edit-assign-member-role key="{{ now() }}" 
                            :member="$member[0]"
                            :pivot_id=0
                            :dep_id=0 
                            :memberRole_id=0 
                            :addMemberRole=true />
                    </td>
                </tr>
            @endif
            
        </tbody>

    </table>

</div>

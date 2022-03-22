@if($addMemberRole === true)
        <form wire:submit.prevent="addRole" class = "flex justify-around items-center">
@else
        <form wire:submit.prevent="updateRole" class = "flex justify-around items-center">
@endif
        <div class = "flex-1 px-11 py-2 text-base text-left">

                <select wire:model.defer="dep_id" name = "dep_id" id = "dep_id" 
                        class="border my-1 rounded-md border-gray-300 text-gray-600 bg-white 
                        hover:border-gray-400 focus:outline-none appearance-none">

                        @foreach($departements as $departement)
                                @if ($addMemberRole === true)
                                        @if ($departement->dep_id === $firstDep_id)
                                                <option value = "{{ $departement->dep_id }}" selected>
                                                        {{ $departement->dep_name }}
                                                </option>
                                        @else
                                                <option value = "{{ $departement->dep_id }}">
                                                        {{ $departement->dep_name }}
                                                </option>
                                        @endif

                                @else
                                        @if ($departement->dep_id === $dep_id)
                                                <option value = "{{ $departement->dep_id }}" selected>
                                                        {{ $departement->dep_name }}
                                                </option>
                                        @else
                                                <option value = "{{ $departement->dep_id }}">
                                                        {{ $departement->dep_name }}
                                                </option>
                                        @endif

                                @endif
                                
                        @endforeach
                </select>
                @error('dep_id') <span class="text-red-500">{{ $message }}</span> @enderror

        </div>

        <div class = "flex-1 px-11 py-2 text-base text-left">
                <select wire:model.defer="memberRole_id" name = "memberRole_id" id = "memberRole_id" 
                        class="border my-1 rounded-md border-gray-300 text-gray-600 bg-white 
                        hover:border-gray-400 focus:outline-none appearance-none">

                        @foreach($memberRoles as $memberRole)
                                @if ($addMemberRole === true)

                                        @if ($memberRole->memberRole_id === $firstMemberRole_id)
                                                <option value = "{{ $memberRole->memberRole_id }}" selected>
                                                        {{ $memberRole->role_name }}
                                                </option>
                                        @else
                                                <option value = "{{ $memberRole->memberRole_id }}">
                                                        {{ $memberRole->role_name }}
                                                </option>
                                        @endif

                                @else
                                        @if ($memberRole->memberRole_id === $memberRole_id)
                                                <option value = "{{ $memberRole->memberRole_id }}" selected>
                                                        {{ $memberRole->role_name }}
                                                </option>
                                        @else
                                                <option value = "{{ $memberRole->memberRole_id }}">
                                                        {{ $memberRole->role_name }}
                                                </option>
                                        @endif

                                @endif

                        @endforeach
                </select>
                @error('memberRole_id') <span class="text-red-500">{{ $message }}</span> @enderror
                
        </div>

        <div class = "flex-1 px-11 py-2 text-base text-left">

                @if($addMemberRole === true)
                                <button type="submit" wire:loading.attr="disabled" 
                                        class = "bg-blue-500 p-2 p-1.5 mr-5 text-white hover:shadow-lg font-thin text-sm" >
                                        Confirmer l'ajout
                                </button>                
                        @else
                                <button type="submit" wire:loading.attr="disabled" 
                                        class = "bg-green-500 p-2 p-1.5 mr-5 text-white hover:shadow-lg font-thin text-sm" >
                                        Confirmer la modiffication
                                </button>                
                @endif

                <button wire:click="cancel" 
                        class = "bg-orange-500 p-2 p-1.5 mr-5 text-white hover:shadow-lg font-thin text-sm" >
                        Annuler
                </button> 
        </div>

</form>
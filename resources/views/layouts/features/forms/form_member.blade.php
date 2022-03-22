@extends('layouts.dashboard')
@section('content1') 

        @if (Session::has('success'))
                <x-alertBox/>
        @else
                @if($formView === 'create')
                <form class="mb-5" method="post" action = "{{ Route('member_store') }}" enctype="multipart/form-data">
                @elseif($formView === 'edit')
                <form class="mb-5" x-data ="{ action : true, confirm : false}" method="post" action = "{{ Route('member_update') }}" enctype="multipart/form-data">
                @endif
                        @csrf()
                        
                        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6 font-yonane">
                                <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                                        
                                        @if($formView === 'create')
                                            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10 h_3">
                                                Nouveau membre
                                            </h1>
                                        @elseif($formView === 'edit')
                                            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10 h_3">
                                                Modiffier un membre
                                            </h1>
                                        @endif
                                        
                                        <div class="space-y-4">
                                                <div>
                                                        <label for="firstname" class="text-lx text_p6">Prénom*</label>
                                                        <input type="text" name ="firstname" id="firstname" 
                                                            value = "{{ $member ? $member->firstname:old('firstname') }}" 
                                                            class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md " 
                                                            placeholder="Prénom..."
                                                        />

                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('firstname') }}</p>
                                                        @endif
                                                </div>
                                                <div>
                                                        <label for="lastname" class="text-lx text_p6">Nom de famille*</label>
                                                        <input type="text" name ="lastname" id="lastname" 
                                                            value = "{{ $member ? $member->lastname:old('lastname') }}" 
                                                            class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md " 
                                                            placeholder="Post-nom..."
                                                        />

                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('lastname') }}</p>
                                                        @endif
                                                </div>

                                                <div>       
                                                        <label for="gender" class="text-lx text_p6">Genre*</label>
                                                        <select name = "gender" id = "gender" 
                                                                class="border rounded-md border-gray-300 text-gray-600 bg-white 
                                                                hover:border-gray-400 focus:outline-none appearance-none !m-0 !ml-2">

                                                                @if(isset($member->gender))
                                                                        @if($member->gender==='Home')
                                                                                <option value="Home" selected>Home</option>
                                                                                <option value="Femme">Femme</option>
                                                                        @else
                                                                                <option value="Home">Home</option>
                                                                                <option value="Femme" selected>Femme</option>
                                                                        @endif
                                                                @else
                                                                        <option selected></option>
                                                                        <option value="Home">Home</option>
                                                                        <option value="Femme">Femme</option>
                                                                @endif

                                                        </select>
                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('gender') }}</p>
                                                        @endif
                                                </div>

                                                <div>
                                                        <label for="birthday" class="text-lx block text_p6">Date de naissance*</label>
                                                        <input type="date" name = "birthday" id="birthday" 
                                                            value = "{{ $member ? $member->birthday:old('birthday') }}" 
                                                            class="ml-2 outline-none py-1 px-2 text-md border-1 border-gray-400 rounded-md input-UppCase" 
                                                            placeholder="date de naissance..."
                                                        />

                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('birthday') }}</p>
                                                        @endif
                                                </div>

                                                <div>       
                                                        <label for="memberCateg_id" class="text-lx text_p6">Catégorie*</label>
                                                        <select name = "memberCateg_id" id = "memberCateg_id" 
                                                                class="border rounded-md border-gray-300 text-gray-600 bg-white 
                                                                hover:border-gray-400 focus:outline-none appearance-none !m-0 !ml-2">

                                                                <option></option>

                                                                @if(isset($memberCategories))
                                                                        @foreach($memberCategories as $memberCategory)
                                                                                @if ($memberCategory->memberCateg_id == $memberCateg_id)
                                                                                        <option value = "{{ $memberCategory->memberCateg_id }}" selected>
                                                                                                {{ $memberCategory->categ_name }}
                                                                                        </option>
                                                                                @else
                                                                                        <option value = "{{ $memberCategory->memberCateg_id }}">
                                                                                                {{ $memberCategory->categ_name }}
                                                                                        </option>
                                                                                @endif
                                                                        @endforeach
                                                                @endif
                                                        </select>
                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('memberCateg_id') }}</p>
                                                        @endif
                                                </div>

                                                @if($formView === 'create')
                                                        <div>       
                                                                <label for="dep_id" class="text-lx text_p6">Département*</label>
                                                                <select name = "dep_id" id = "dep_id" 
                                                                        class="border rounded-md border-gray-300 text-gray-600 bg-white 
                                                                        hover:border-gray-400 focus:outline-none appearance-none !m-0 !ml-2">

                                                                        <option></option>

                                                                        @if(isset($departements))
                                                                                @foreach($departements as $departement)
                                                                                        @if ($departement->dep_id === $dep_id)
                                                                                                <option value = "{{ $departement->dep_id }}" selected>
                                                                                                        {{ $departement->dep_name }}
                                                                                                </option>
                                                                                        @else
                                                                                                <option value = "{{ $departement->dep_id }}">
                                                                                                        {{ $departement->dep_name }}
                                                                                                </option>
                                                                                        @endif
                                                                                @endforeach
                                                                        @endif
                                                                </select>
                                                                @if($errors->any())
                                                                        <p class = "error-txt">{{ $errors->first('dep_id') }}</p>
                                                                @endif
                                                        </div>

                                                        <div>       
                                                                <label for="memberRole_id" class="text-lx text_p6">Rôle*</label>
                                                                <select name = "memberRole_id" id = "memberRole_id" 
                                                                        class="border rounded-md border-gray-300 text-gray-600 bg-white 
                                                                        hover:border-gray-400 focus:outline-none appearance-none !m-0 !ml-2">

                                                                        <option></option>

                                                                        @if(isset($memberRoles))
                                                                                @foreach($memberRoles as $memberRole)
                                                                                        @if (isset($memberRole_id) && $memberRole->memberRole_id === $memberRole_id)
                                                                                                <option value = "{{ $memberRole->memberRole_id }}" selected>
                                                                                                        {{ $memberRole->role_name }}
                                                                                                </option>
                                                                                        @else
                                                                                                <option value = "{{ $memberRole->memberRole_id }}">
                                                                                                        {{ $memberRole->role_name }}
                                                                                                </option>
                                                                                        @endif
                                                                                @endforeach
                                                                        @endif
                                                                </select>
                                                                @if($errors->any())
                                                                        <p class = "error-txt">{{ $errors->first('memberRole_id') }}</p>
                                                                @endif
                                                        </div>
                                                @endif


                                                <div>
                                                        <label for="photo" class="text-lx text_p6">Photo</label>
                                                        <input type="file" name ="photo" id="photo" 
                                                            value = "{{ $member ? $member->photo:'' }}" 
                                                            class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md " 
                                                            accept="image/png, image/jpeg" placeholder="photo..." 
                                                        />

                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('photo') }}</p>
                                                        @endif

                                                </div>


                                                <input class = "hidden" type="number" name = "member_id" 
                                                    value = "{{ $member ? $member->member_id:'' }}"
                                                >
                                                
                                                @if($formView === 'create')
                                                        <button type="submit" 
                                                            class=" px-6 py-2 mx-auto block rounded-md text-lg text-indigo-100 bg-indigo-600  ">
                                                            Ajouter
                                                        </button>
                                                @elseif($formView === 'edit')
                                                        <div class = "text-center">
                                                                <button x-show ="confirm" type="submit" 
                                                                    class=" px-6 py-2 mx-auto rounded-md text-lg text-indigo-100 bg-indigo-600 ">
                                                                    Confirmer la modiffication
                                                                </button>
                                                                <a x-show ="confirm" href="{{$cancelRoute}}" 
                                                                    class=" px-6 py-3 mx-auto ml-5 w-20 rounded-md text-lg text-indigo-100 bg-indigo-600 form_btn ">
                                                                    Annuler
                                                                </a>
                                                                <button x-show ="action" x-on:click ="confirm = !confirm, action = !action" type="button" 
                                                                    class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600 form_btn">
                                                                    Appliquer
                                                                </button>

                                                        </div>
                                                @endif

                                        </div>
                                </div>
                        </div>

                        
                </form>

        @endif


@endsection
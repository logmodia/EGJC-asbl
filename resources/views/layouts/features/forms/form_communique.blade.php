@extends('layouts.dashboard')
@section('content1') 

        @if (Session::has('success'))
                <x-alertBox/>
        @else
                @if($formView === 'create')
                <form class="mb-5" method="post" action = "{{ Route('communique_store') }}">
                @elseif($formView === 'edit')
                <form class="mb-5" x-data ="{ action : true, confirm : false}" method="post" action = "{{ Route('communique_update') }}">
                @endif
                        @csrf()
                        
                        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6 font-yonane">
                                <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                                        
                                        @if($formView === 'create')
                                            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10 h_3">
                                                Nouveau communiqué
                                            </h1>
                                        @elseif($formView === 'edit')
                                            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10 h_3">
                                                Modiffier le communiqué
                                            </h1>
                                        @endif
                                        
                                        <div class="space-y-4">
                                                <div>
                                                        <label for="title" class="text-lx text_p6">Objet*</label>
                                                        <input type="text" name ="title" id="title" 
                                                            value = "{{ $communique ? $communique->title:old('title') }}" 
                                                            class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md " 
                                                            placeholder="Objet..."
                                                        />

                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('title') }}</p>
                                                        @endif
                                                </div>
                                                <div>
                                                        <label for="content" class="text-lx text_p6">Contenu*</label>
                                                        <textarea id="content" name="content" cols="30" rows="10"  
                                                                class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"
                                                                >{{ $communique ? $communique['content']:old('content') }}</textarea>

                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('content') }}</p>
                                                        @endif
                                                </div>

                                                <div>       
                                                        <label for="expiration" class="text-lx block text_p6">Expiration*</label>
                                                        <input type="date" name = "expiration" id="expiration" 
                                                            value = "{{ $communique ? $communique->expiration:old('expiration') }}" 
                                                            class="ml-2 outline-none py-1 px-2 text-md border-1 border-gray-400 rounded-md input-UppCase" 
                                                        />
                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('expiration') }}</p>
                                                        @endif
                                                </div>

                                                <div>       
                                                        <label for="newscategory_id" class="text-lx text_p6">Catégorie*</label>
                                                        <select name = "newscategory_id" id = "newscategory_id" 
                                                                class="border rounded-md border-gray-300 text-gray-600 bg-white 
                                                                hover:border-gray-400 focus:outline-none appearance-none !m-0 !ml-2">

                                                                <option></option>

                                                                @if(isset($newscategories))
                                                                        @foreach($newscategories as $newscategory)
                                                                                @if ($newscategory->id === $newscategory_id)
                                                                                        <option value = "{{ $newscategory->id }}" selected>
                                                                                                {{ $newscategory->name }}
                                                                                        </option>
                                                                                @else
                                                                                        <option value = "{{ $newscategory->id }}">
                                                                                                {{ $newscategory->name }}
                                                                                        </option>
                                                                                @endif
                                                                        @endforeach
                                                                @endif
                                                        </select>
                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('newscategory_id') }}</p>
                                                        @endif
                                                </div>

                                                <div>       
                                                        <label for="member_id" class="text-lx text_p6">Auteur*</label>
                                                        <select name = "member_id" id = "member_id" 
                                                                class="border rounded-md border-gray-300 text-gray-600 bg-white 
                                                                hover:border-gray-400 focus:outline-none appearance-none !m-0 !ml-2">

                                                                <option></option>

                                                                @if(isset($members))
                                                                        @foreach($members as $member)
                                                                                @if ($member->member_id === $member_id)
                                                                                        <option value = "{{ $member->member_id }}" selected>
                                                                                                {{ $member->firstname.'  '.$member->lastname }}
                                                                                        </option>
                                                                                @else
                                                                                        <option value = "{{ $member->member_id }}">
                                                                                                {{ $member->firstname.'  '.$member->lastname }}
                                                                                        </option>
                                                                                @endif
                                                                        @endforeach
                                                                @endif
                                                        </select>
                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('member_id') }}</p>
                                                        @endif
                                                </div>

                                                <input class = "hidden" type="number" name = "communique_id" 
                                                    value = "{{ $communique ? $communique->id:'' }}"
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
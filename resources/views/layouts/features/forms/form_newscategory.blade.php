@extends('layouts.dashboard')
@section('content1') 

        @if (Session::has('success'))
                <x-alertBox/>
        @else
                @if($formView === 'create')
                <form class="mb-5" method="post" action = "{{ Route('newscategory_store') }}">
                @elseif($formView === 'edit')
                <form class="mb-5" x-data ="{ action : true, confirm : false}" method="post" action = "{{ Route('newscategory_update') }}">
                @endif
                        @csrf()
                        
                        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6 font-yonane">
                                <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                                        
                                        @if($formView === 'create')
                                            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10 h_3">
                                                Nouvelle catégorie d'actualité
                                            </h1>
                                        @elseif($formView === 'edit')
                                            <h1 class="text-center text-2xl font-bold text-gray-500 mb-10 h_3">
                                                Modiffier la catégorie d'actualité
                                            </h1>
                                        @endif
                                        
                                        <div class="space-y-4">
                                                <div>
                                                        <label for="name" class="text-lx text_p6">Thème de la semaine*</label>

                                                        <input type="text" name ="name" id="name" 
                                                            value = "{{ $newscategory ? $newscategory->name:'' }}" 
                                                            class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md " 
                                                            placeholder="Thème..."
                                                        />

                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('name') }}</p>
                                                        @endif
                                                </div>
                                               

                                                <input class = "hidden" type="number" name = "id" 
                                                    value = "{{ $newscategory ? $newscategory->id:'' }}"
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
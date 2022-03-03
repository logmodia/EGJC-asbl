@extends('layouts.dashboard')
@section('content1') 

        @if (Session::has('success'))
                <x-alertBox/>
        @else
                @if($formView === 'create')
                <form class="mb-5" method="post" action = "{{ Route('yearvision_store') }}">
                @elseif($formView === 'edit')
                <form class="mb-5" x-data ="{ action : true, confirm : false}" method="post" action = "{{ Route('yearvision_update') }}">
                @endif
                        @csrf()
                        
                        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6 font-yonane">
                                <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                                        
                                        @if($formView === 'create')
                                        <h1 class="text-center text-2xl font-bold text-gray-500 mb-10 h_3">Ajouter la vision de la nouvelle année</h1>
                                        @elseif($formView === 'edit')
                                        <h1 class="text-center text-2xl font-bold text-gray-500 mb-10 h_3">Modiffier la vision de l'année</h1>
                                        @endif
                                        
                                        <div class="space-y-4">
                                                <div>
                                                        <label for="year" class="text-lx text_p6">Année*</label>
                                                        <input type="number" name ="year" id="year" value = "{{ $yearvision ? $yearvision['year']:'' }}" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md " placeholder="Année..."/>
                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('year') }}</p>
                                                        @endif
                                                </div>
                                                <div>
                                                        <label for="subject_prefix" class="text-lx text_p6">Préfixe du thème</label>
                                                        <input type="text" name = "subject_prefix" value = "{{ $yearvision ? $yearvision['subject_prefix']:'' }}" id="subject_prefix" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" placeholder="Année de la..." />
                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('subject_prefix') }}</p>
                                                        @endif
                                                </div>
                                                <div>
                                                        <label for="subject" class="text-lx text_p6">Thème de l'année</label>
                                                        <input type="text" name = "subject" id="subject" value = "{{ $yearvision ? $yearvision['subject']:'' }}" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md input-UppCase" placeholder="Thème..."/>
                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('subject_prefix') }}</p>
                                                        @endif
                                                </div>
                                                <div>
                                                        <label for="details" class="block mb-2 text-lg text_p6">Details</label>
                                                        <textarea id="details" name="details" cols="30" rows="10" placeholder="Details.." class="w-full font-serif  p-4 text-gray-600 bg-indigo-50 outline-none rounded-md">{{ $yearvision ? $yearvision['details']:'' }}</textarea>
                                                        @if($errors->any())
                                                                <p class = "error-txt">{{ $errors->first('subject_prefix') }}</p>
                                                        @endif
                                                </div>
                                                <input class = "input-UppCase hidden-input" type="number" name = "yearvision_id" value = "{{ $yearvision ? $yearvision['yearvision_id']:'' }}">
                                                
                                                
                                                @if($formView === 'create')
                                                        <button type="submit" class=" px-6 py-2 mx-auto block rounded-md text-lg text-indigo-100 bg-indigo-600  ">Ajouter</button>
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
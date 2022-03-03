@extends('layouts.dashboard')
@section('content1')

    <div class="table w-full p-2">

        <h3 class = "h_4 text-center">Les thèmes des semaines</h3>

        <table class="w-full border">
            <thead>
                <tr class="bg-gray-50 border-b">
                    
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Thème
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Verset(s)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Semaine du
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
                
                @foreach($weektopics as $weektopic)
                    <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                        <td class="p-2 border-r">{{$weektopic->topic}}</td>
                        <td class="p-2 border-r">{{$weektopic->verse}}</td>
                        <!-- In the boot function of AppServiceProvider : Carbon::setLocale(config('app.locale')) -->
                        <!-- For date and hour : translatedFormat('d F Y à H\hi') -->
                        <td class="p-2 border-r">{{\Carbon\Carbon::parse($weektopic->weekdate)->translatedFormat('l jS F Y')}}</td>
                        <td>
                            <a href="{{ Route('weektopic_edit', $weektopic->id) }}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Editer</a>
                            <a href="{{ Route('messagebox', $weektopic->id .'/'.'delete'.'/'.'weektopic_destroy'.'/'.'weektopic_all') }}" 
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
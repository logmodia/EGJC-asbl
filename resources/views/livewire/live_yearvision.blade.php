<div x-data ="{route:''}">

    <input type="radio" value="/vision/store" x-model="route">
    <input type="radio" value="/vision/update'" x-model="route">
    <input type="radio" value="/vision/delete" x-model="route">
    
    <h1>{{ $count }}</h1>
    <h1 x-text = "route"></h1>

        <form class ="formYearvision form" method="post" x-bind:action = "route" enctype="multipart/form-data">
            @csrf()

            <label class = "text_p6" for="year">Année</label>
            <input class="formYearvision_f-inputYear" type="number" name = "year" wire:model.defer="year" value = "{{ old('year')}}" placeholder = "Année...">
            <div class="formYearvision_search-YearInput">
                <button type="button" wire:click ="lw_search_yearvision">Afficher la vison de l'année</button>
            </div>
            @if($yearFound === false)
                <p class = "error-txt">L'année {{ $year }} est introuvable</p>
            @endif

            @if($errors->any())
                <p class = "error-txt">{{ $errors->first('year') }}</p>
            @endif
            
            <label class = "text_p6" for="subject">Thème</label>
            <input class = "input-UC" type="text" name = "subject" value = "{{ $subject }}">
            @if($errors->any())
                <p class = "error-txt">{{ $errors->first('subject') }}</p>
            @endif

            <label class = "text_p6" for="details">Thème</label>
            <textarea name="details" cols="30" rows="10">{{ $details }}</textarea>

            <button type="submit" class = "form_btn">Submit</button>
        </form>


</div>
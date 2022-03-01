<div class="formContainer">

    @if($formView === 'create')
        <h3 class = "h_3">Ajouter la vision de la nouvelle année</h3>
    @elseif($formView === 'edit')
        <h3 class = "h_3">Modiffier la vision de l'année</h3>
    @elseif($formView === 'destroy')
        <h3 class = "h_3">Supprimer la vision de l'année</h3>
    @endif


        @if($formView === 'create')
            <form class ="formYearvision form" method="post" action = "{{ Route('yearvision_store') }}">
                
        @elseif($formView === 'edit')
            <form x-data ="{ action : true, confirm : false}" class ="formYearvision form" method="post" action = "{{ Route('yearvision_update') }}">
        @elseif($formView === 'destroy')
            <form x-data ="{ action : true, confirm : false}" class ="formYearvision form" method="post" action = "{{ Route('yearvision_delete') }}">
        @endif

            @csrf()

            <label class = "text_p6" for="year">Année</label>
            <input class="formYearvision_f-inputYear" type="number" name = "year" wire:model.defer="year" value = "{{ $yearvison->year}}" placeholder = "Année...">
            @if($formView === 'edit' || $formView === 'destroy')
                <div class="formYearvision_search-YearInput">
                    <button type="button" wire:click ="lw_search_yearvision">Afficher la vison de l'année</button>
                </div>
            @endif
            @if($yearFound === false)
                <p class = "error-txt">L'année {{ $year }} est introuvable</p>
            @endif

            @if($errors->any())
                <p class = "error-txt">{{ $errors->first('year') }}</p>
            @endif
            
            <label class = "text_p6" for="subject_prefix">Préfixe du thème</label>
            <input class = "input-UppCase" type="text" name = "subject_prefix" value = "{{ $subject_prefix }}">
            @if($errors->any())
                <p class = "error-txt">{{ $errors->first('subject_prefix') }}</p>
            @endif

            <label class = "text_p6" for="subject">Thème</label>
            <input class = "input-UppCase" type="text" name = "subject" value = "{{ $subject }}">
            @if($errors->any())
                <p class = "error-txt">{{ $errors->first('subject') }}</p>
            @endif

            <label class = "text_p6" for="details">Thème</label>
            <textarea class = "formYearvision_details" id = "formYearvision_details" name="details" cols="30" rows="10">{{ $details ? $details : ' ' }}</textarea>

            <input class = "input-UppCase hidden-input" type="number" name = "yearvision_id" value = "{{ $yearvision_id }}">

            @if($formView === 'create')
                <button type="submit" class = "form_btn">Ajouter</button>
            @elseif($formView === 'edit')
                <button x-show ="confirm" type="submit" class = "form_btn-danger">Confirmer la modiffication</button>
                <button x-show ="action" x-on:click ="confirm = !confirm, action = !action" type="button" class = "form_btn">Appliquer</button>
            @elseif($formView === 'destroy')
                <button x-show ="confirm" type="submit" class = "form_btn-danger">Confirmer la suppression</button>
                <button x-show ="action" x-on:click ="confirm = !confirm, action = !action" type="button" class = "form_btn">Supprimer</button>
            @endif

        </form>

</div>
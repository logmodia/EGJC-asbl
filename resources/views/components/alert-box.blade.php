<div class="alertBox" x-data = {reload(){window.location.reload();}}>

    <div class="alertBox_content">

        @if(Session::get('success') === "created")
            <p class="alertBox_content_message">Ajout effectué avec succès</p>
        @elseif(Session::get('success') === "updated")
            <p class="alertBox_content_message">Modification effectuée avec succès</p>
        @elseif(Session::get('success') === "deleted")
            <p class="alertBox_content_message">Suppression accomplie avec succès</p>
        @endif


        <div class="alertBox_content_icon">
            <ion-icon class="alertBox_content_icon_ion" name="checkmark-circle-outline"></ion-icon>
        </div>
        
        @if(Session::get('success') === "created")
            <button class="alertBox_content_button" x-on:click ="reload">OK</button>
        @elseif(Session::get('success') === "updated")
            <a href="{{ Session::get('route') }}" class="link-btn">OK</a>
        @elseif(Session::get('success') === "deleted")
            <a href="{{ route('yearvision_list') }}" class="link-btn">OK</a>
        @endif

    </div>

</div>
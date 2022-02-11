@extends('layouts.app')

@section('content')
    <div class="formContainer">
        <form class="formContainer_form" method="POST" action="#">
            <label class="formContainer_form_label text_p6" for="f-name">Nom et prénom *</label>
            <input type="text" id="f-name" name="f-name" placeholder="Votre nom et prénom ...">

            <label class="formContainer_form_label text_p6" for="f-name">Email *</label>
            <input type="email" name="f-email" id="f-email">

            <label class="formContainer_form_label text_p6" for="f-age">Tranche d'âge *</label>
            <select id="f-age" name="f-age">
                <option value=""></option>
                <option value="18-25">18 - 25 ans</option>
                <option value="26-35">26 - 35 ans</option>
                <option value="18-25">36 - 50 ans</option>
                <option value="18-25">51 ans - plus</option>
            </select>

            <label class="formContainer_form_label text_p6" for="f-country">Dans quel pays résidez-vous ? *</label>
            <select id="f-country" name="f-country">
                <option value=""></option>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>

            <label class="formContainer_form_label text_p6" for="f-belief">Croyez-vous en Dieu ? *</label>
            <select id="f-belief" name="f-belief">
                <option value=""></option>
                <option value="belief_0">Non, je ne crois pas en Dieu</option>
                <option value="belief_0">Oui, et je suis chrétien(ènne)</option>
                <option value="belief_0">Oui, mais je ne suis pas chrétien(ènne)</option>
            </select>

            <label class="formContainer_form_label text_p6" for="f-message">Votre message</label>
            <textarea id="f-message" name="f-message" placeholder="Votre message..." style="height:200px"></textarea>
            
            <p class="formContainer_form_label text_p6">Protection des données *</p>
            <input type="checkbox" name="f-dataProtection" id="f-dataProtection">
            <label class="formContainer_form_label-dataProtection" for="f-dataProtection">
                J’accepte que mes données soient conservées durant le temps du traiment de ma préoccupation.
            </label>

            <div class = "formContainer_form_btnContainer">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
@endsection
@extends('layouts.app')

@section('content0')

<div class="dash-maincontainer py-12">

    <div class="dash-maincontainer_menu">

        <div class="dash-maincontainer_menu_yearVision h_4">
            <a class="dash-maincontainer_menu_yearVision_yearVision-route" href="{{ route('yearvision_create') }}">Vision de l'année</a>
            <div class="dash-maincontainer_menu_yearVision_box-InputRadio">
                <input class="dash-maincontainer_menu_yearVision_box-Input_radio" type="radio" value="/vision/store" x-model="route">
                <input class="dash-maincontainer_menu_yearVision_box-Input_radio" type="radio" value="/vision/update'" x-model="route">
                <input class="dash-maincontainer_menu_yearVision_box-Input_radio" type="radio" value="/vision/delete" x-model="route">
            </div>
        </div>
        <div class="dash-maincontainer_menu_yearVision h_4">
            <a class="dash-maincontainer_menu_yearVision_yearVision-route" href="{{ route('yearvision_create') }}">A propos de nous</a>
            <div class="dash-maincontainer_menu_yearVision_box-InputRadio">
                <input class="dash-maincontainer_menu_yearVision_box-Input_radio" type="radio" value="/vision/store" x-model="route">
                <input class="dash-maincontainer_menu_yearVision_box-Input_radio" type="radio" value="/vision/update'" x-model="route">
                <input class="dash-maincontainer_menu_yearVision_box-Input_radio" type="radio" value="/vision/delete" x-model="route">
            </div>
        </div>

    </div>

    <div class="dash-maincontainer_content">
        @yield('content1')
        
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
    <form action="" method="get" class="searchBar">

        <label for="searchInput" class="searchBar_lab-searchInput">Rechercher</label>
        <input class="searchBar_searchInput" type="search" name = "searchInput" id="searchInput" placeholder="Rechercher par thème" autocomplete="on">

        <label class="searchBar_lab-preacher" for="preacher">Filtrer par :</label>

        <select class="searchBar_selectPreacher" name="preacher" id="preacher">
            <option class="searchBar_selectPreacher_value" value="">-- Selectionner le prédicateur --</option>
            <option class="searchBar_selectPreacher_value" value="past">Pasteur Charles</option>
            <option class="searchBar_selectPreacher_value" value="rub">Papa Ruben</option>
        </select>

        <select class="searchBar_selectService" name="service" id="service">
            <option class="searchBar_selectService_value" value="">-- Selectionner le type de service --</option>
            <option class="searchBar_selectService_value" value="culte">Culte</option>
            <option class="searchBar_selectService_value" value="seminaire">Seminaire</option>
            <option class="searchBar_selectService_value" value="convention-pasc">Convention pascale</option>
        </select>

    </form>
@endsection
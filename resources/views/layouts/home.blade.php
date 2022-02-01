@extends('layouts.app')

@section('content')

    <!-- ------------------------------- A propos de nous / qui sommes-nous ? --------------------------------- -->

    <section class="about">

        <h2 class = "title-h2">Qui sommes-nous ?</h2>

        <div class = "about_bgImg-Container">
          <img src='{{Storage::url("assets/fideles_EGJC.jpg")}}' class = "about_bgImg-Container_image mask-img" alt="about image" />
        </div>

        <div class="about_textContainer">
          <p>
            Dénommée Eglise Glorieuse de Jésus-Christ (EGJC), nous sommes une Eglise chrétienne (protestante) basée à Liège (Belgique) depuis 2005. 
          </p>
          <p>
            Nous   croyons   en    Jésus-Christ comme Seigneur et Sauveur et en l’entièreté de la parole de Dieu transcrite dans la Bible.
          </p>
          <p>
            L’Eglise est concduite par le Pasteur Charles Mpoyi, porteur de la vision divine qui a donnée naissance à l’EGJC.
          </p>
          <p>
            L’EGJC lutte pour le Royaume de Dieu et veille à ne pas se laisser infiltrer par l’esprit du monde.
          </p>
          <p>
            C’est pourquoi les membres doivent avoir accepté Jésus-Christ comme Seigneur et Sauveur; ils se doivent Respect et Amour.
          </p>
          <p>
            La mission principale et les objectifs de l'EGJC ...
          </p>

          <button class = "savoir-plus">En savoir plus...</button>

        </div>

    </section>

    <!-- ------------------------------------------ Section nos valeurs --------------------------------- -->

    <section class="values">
        <h2 class = "title-h2">Nos valeurs</h2>
        
        <div class="values_containerBox">
          <div class="values_containerBox_valueCard">
              <h5 class="values_containerBox_valueCard_valueTitle">Evangile</h5>
              <img src='{{ Storage::url("assets/Bible-PNG-Isolated-Transparent.png") }}' alt="Image évangile">
              <p class = "values_containerBox_valueCard_verse">Hébreux</p>
              <p class = "values_containerBox_valueCard_verse verse_p2">4 : 12</p>
          </div>
          <div class="values_containerBox_valueCard">
              <h5 class="values_containerBox_valueCard_valueTitle">Crainte de Dieu</h5>
              <img src='{{ Storage::url("assets/picto_prayer.png") }}' alt="Image évangile">
              <p class = "values_containerBox_valueCard_verse">Ésaïe</p>
              <p class = "values_containerBox_valueCard_verse verse_p2">44 : 6</p>
          </div>
          <div class="values_containerBox_valueCard">
              <h5 class="values_containerBox_valueCard_valueTitle">La Foi</h5>
              <img src='{{ Storage::url("assets/picto_foi.png") }}' alt="Image évangile">
              <p class = "values_containerBox_valueCard_verse">Hébreux</p>
              <p class = "values_containerBox_valueCard_verse verse_p2">11 : 1</p>
          </div>
          <div class="values_containerBox_valueCard">
              <h5 class="values_containerBox_valueCard_valueTitle">Amour</h5>
              <img src='{{ Storage::url("assets/picto_heart.png") }}' alt="Image évangile">
              <p class = "values_containerBox_valueCard_verse">Matthieu</p>
              <p class = "values_containerBox_valueCard_verse verse_p2">22 : 37-39</p>
          </div>
          <div class="values_containerBox_valueCard">
              <h5 class="values_containerBox_valueCard_valueTitle">Le Salut</h5>
              <img src='{{ Storage::url("assets/witness_cross.png") }}' alt="Image évangile">
              <p class = "values_containerBox_valueCard_verse">Hébreux</p>
              <p class = "values_containerBox_valueCard_verse verse_p2">5 : 9</p>
          </div>
        </div>
    </section>

    <!-- --------------------------- Vision de l'année --------------------------- -->

    <section class = "yearVision">

      <div class="yearVision_imgBox">
        <img src='{{ Storage::url("assets/img_pasta_vision.png") }}' alt="Image vision de l'année">
      </div>
      <div class="yearVision_textBox">
        <h2 class = "yearVision_textBox_title title-h2">Vision de l'année</h2>
        <h3 class = "yearVision_textBox_h3-year">2022</h3>
        <h3 class = "yearVision_textBox_h3-year">Année de</h3>
        <h3 class = "yearVision_textBox_h3-title">FIDELITE</h3>
      </div>

    </section>

    <!-- --------------------------- Actualités --------------------------- -->
@endsection
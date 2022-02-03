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

        <img src='{{ Storage::url("assets/img_pasta_vision.png") }}' class="yearVision_img" alt="Image vision de l'année">
      <div class="yearVision_textBox">
        <h2 class = "yearVision_textBox_title title-h2">Vision de l'année</h2>
        <h3 class = "yearVision_textBox_h3-year">2022</h3>
        <h3 class = "yearVision_textBox_h3-year">Année de</h3>
        <h3 class = "yearVision_textBox_h3-title">FIDELITE</h3>
      </div>

    </section>

    <!-- --------------------------- Actualités --------------------------- -->

    <section class="news">
        <h2 class = "news_sectionTitle title-h2">Actualités</h2>
        
        <div class="news_containerBox">

          <div class="news_containerBox_newsCard">
              <h4 class="news_containerBox_newsCard_newsType">Thème de la semaine</h4>
              <div class="news_containerBox_newsCard_item">
                <h5 class="news_containerBox_newsCard_item_newsTitle">Fidèlité dans le service</h5>

                <div class="news_containerBox_newsCard_item_textBox">
                  <p class = "news_containerBox_newsCard_item_textBox_verse">Versets à méditer</p>
                  <p class = "news_containerBox_newsCard_item_textBox_verse verse_p2">1 samuel 2 : 35, 1 samuel 12 : 24</p>
                </div>

              </div>
          </div>

          <div class="news_containerBox_newsCard">
              <h4 class="news_containerBox_newsCard_newsType">Communiqués</h4>
              <div class="news_containerBox_newsCard_item">
                <h5 class="news_containerBox_newsCard_item_newsTitle">Réunion des jeunes</h5>

                <div class="news_containerBox_newsCard_item_textBox">
                  <p class = "news_containerBox_newsCard_item_textBox_statement">
                    Le département de la jeunesse informe à tous les jeunes de l’Eglise Glorieuse de Jésus-Christ .....
                  </p>
                  <p class = "news_containerBox_newsCard_item_textBox_signature verse_p2">Sr. Damaris</p>
                </div>

                <div class = "news_containerBox_newsCard_item_btnContainer">
                  <button class = "news_containerBox_newsCard_item_btnContainer_voir-plus">Voir plus</button>
                </div>

              </div>
          </div>

          <div class="news_containerBox_newsCard">
              <h4 class="news_containerBox_newsCard_newsType">Actions de grâce</h4>
              <div class="news_containerBox_newsCard_item">
                <h5 class="news_containerBox_newsCard_item_newsTitle">Anniversaire</h5>

                <div class="news_containerBox_newsCard_item_textBox">
                  <p class = "news_containerBox_newsCard_item_textBox_statement">
                    Papa Remy rend grâce à Dieu pour une année de plus dans sa vie
                  </p>
                  <p class = "news_containerBox_newsCard_item_textBox_signature verse_p2">Papa Remy</p>
                </div>

                <div class = "news_containerBox_newsCard_item_btnContainer">
                  <button class = "news_containerBox_newsCard_item_btnContainer_voir-plus">Voir plus</button>
                </div>

              </div>

          </div>

        </div>
    </section>

    <!-- ------------- Programme des activités de la semaine -------------- -->

    <section class="week-schedule">
      <h2 class = "title-h2">Programme des activités de la semaine</h2>

      <div class="week-schedule_cardContainer">

        <div class="week-schedule_cardContainer_card">
          <div class="week-schedule_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/img_culte_2.jpg") }}' class="week-schedule_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <h5 class = "week-schedule_cardContainer_card_dayName" >Dimanche</h5>
          <div class="week-schedule_cardContainer_card_hour-activity">
            <p class="week-schedule_cardContainer_card_hour-activity_hour">18h à 19h30</p>
            <p class="week-schedule_cardContainer_card_hour-activity_activity">Culte dominical d’action de grâce</p>
          </div>
        </div>

        <div class="week-schedule_cardContainer_card">
          <div class="week-schedule_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/img_prayer_2.jpg") }}' class="week-schedule_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <h5 class = "week-schedule_cardContainer_card_dayName" >Lundi et vendredi</h5>
          <div class="week-schedule_cardContainer_card_hour-activity">
            <p class="week-schedule_cardContainer_card_hour-activity_hour">10h à 13h30</p>
            <p class="week-schedule_cardContainer_card_hour-activity_activity">Prière d’intercession</p>
          </div>
        </div>

        <div class="week-schedule_cardContainer_card">
          <div class="week-schedule_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/img_prayer_1.jpg") }}' class="week-schedule_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <h5 class = "week-schedule_cardContainer_card_dayName" >Mercredi</h5>
          <div class="week-schedule_cardContainer_card_hour-activity">
            <p class="week-schedule_cardContainer_card_hour-activity_hour">18h à 20h</p>
            <p class="week-schedule_cardContainer_card_hour-activity_activity">Culte d’intercession</p>
          </div>
        </div>

        <div class="week-schedule_cardContainer_card">
          <div class="week-schedule_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/chorale_victorieuse.jpg") }}' class="week-schedule_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <h5 class = "week-schedule_cardContainer_card_dayName" >Vendredi</h5>
          <div class="week-schedule_cardContainer_card_hour-activity">
            <p class="week-schedule_cardContainer_card_hour-activity_hour">18h30 à 20h</p>
            <p class="week-schedule_cardContainer_card_hour-activity_activity">Répétition chrorale ‘’La victorieuse’’</p>
          </div>
        </div>

        <div class="week-schedule_cardContainer_card">
          <div class="week-schedule_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/chorale_glorieuse.jpg") }}' class="week-schedule_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <h5 class = "week-schedule_cardContainer_card_dayName" >Samedi</h5>
          <div class="week-schedule_cardContainer_card_hour-activity">
            <p class="week-schedule_cardContainer_card_hour-activity_hour">10h30 à 12h30</p>
            <p class="week-schedule_cardContainer_card_hour-activity_activity">Répétition chrorale ‘’La Glorieuse’’</p>
          </div>
        </div>

        <div class="week-schedule_cardContainer_card">
          <div class="week-schedule_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/img_jeunesse_1.jpg") }}' class="week-schedule_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <h5 class = "week-schedule_cardContainer_card_dayName" >Samedi</h5>
          <div class="week-schedule_cardContainer_card_hour-activity">
            <p class="week-schedule_cardContainer_card_hour-activity_hour">12h30 à 15h</p>
            <p class="week-schedule_cardContainer_card_hour-activity_activity">Activités de la jeunesse</p>
          </div>
        </div>

        <div class="week-schedule_cardContainer_card">
          <div class="week-schedule_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/img_mamans_egjc.jpg") }}' class="week-schedule_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <h5 class = "week-schedule_cardContainer_card_dayName" >Samedi</h5>
          <div class="week-schedule_cardContainer_card_hour-activity">
            <p class="week-schedule_cardContainer_card_hour-activity_hour">15h à 17h</p>
            <p class="week-schedule_cardContainer_card_hour-activity_activity">Activités des soeurs</p>
          </div>
        </div>

        <div class="week-schedule_cardContainer_card">
          <div class="week-schedule_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/les_hommes_egjc.jpg") }}' class="week-schedule_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <h5 class = "week-schedule_cardContainer_card_dayName" >Samedi</h5>
          <div class="week-schedule_cardContainer_card_hour-activity">
            <p class="week-schedule_cardContainer_card_hour-activity_hour">12h à 16h</p>
            <p class="week-schedule_cardContainer_card_hour-activity_activity">Activités des hommes</p>
          </div>
        </div>

      </div>

    </section>

    <!-- --------------- Prochains événements ----------------------------- -->

    <section class="nextEvent">

      <h2 class = "title-h2">Prochains événements</h2>
      <div class="nextEvent_eventContainer">

        <div class="nextEvent_eventContainer_event">
          <h5 class="nextEvent_eventContainer_event_title">Convention pascale</h5>
          <p class="nextEvent_eventContainer_event_date">18 avril 2022</p>
        </div>
        <div class="nextEvent_eventContainer_event">
          <h5 class="nextEvent_eventContainer_event_title">Festival Africain de Liège</h5>
          <p class="nextEvent_eventContainer_event_date">11 juillet 2022</p>
        </div>
        <div class="nextEvent_eventContainer_event">
          <h5 class="nextEvent_eventContainer_event_title">Convention des soeurs</h5>
          <p class="nextEvent_eventContainer_event_date">30 octobre 2022</p>
        </div>

      </div>

    </section>

    <!-- --------------- google map ----------------------------- -->

    <section class="sec-map">
      <h2 class = "title-h2">Nous rejoindre</h2>
      <iframe class="sec-map_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.872060269354!2d5.587449115434523!3d50.629493482329245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f1b319dfb54b%3A0x98faaff0eb434aaf!2s%C3%89glise%20Glorieuse%20de%20J%C3%A9sus%20Christ!5e0!3m2!1sfr!2sbe!4v1643929524141!5m2!1sfr!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

@endsection
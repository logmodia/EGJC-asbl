@extends("layouts.app")

@section("content0")
  @include("layouts.partials.header")
  
<section class="activity">

      <div class="activity_cardContainer">

        <div class="activity_cardContainer_card">
          <h2 class = "activity_cardContainer_card_title-h2 h_4">Culte dominical d’action de grâce</h2>
          <div class="activity_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/img_culte_2.jpg") }}' class="activity_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <div class = "activity_cardContainer_card_textBox">
              <h5 class = "activity_cardContainer_card_dayName" >Dimanche</h5>
              <div class="activity_cardContainer_card_hour-activity">
                <p class="week-schedule_cardContainer_card_hour-activity_hour">18h à 19h30</p>
                <p class="activity_cardContainer_card_hour-activity_activity">
                  Tous les diamnches nous nous réunissions dans notre temple pour rendre un culte à Dieu Tout Puissant.
                  Le culte se déroule en 7 grandes étapes :

                  La prière d’intercession et de repentance, le moment d’adorarotion et de louanges, pendant ce moment nous adorons et 
                  luons Dieu par la prière et les cantiques, le moment de la prédication (homélie), le moment des offrandes, dîmes, 
                  actions de grâce, dons, accueil des nouveaux venus, prière pour la bénédiction finale, le moment de l’agape.
                </p>
              </div>
          </div>
        </div>
        
        <div class="activity_cardContainer_card">
          <h2 class = "activity_cardContainer_card_title-h2 h_4">Prière d’intercession</h2>
          <div class="activity_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/img_prayer_2.jpg") }}' class="activity_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <div class = "activity_cardContainer_card_textBox">
              <h5 class = "activity_cardContainer_card_dayName" >Lundi et vendredi</h5>
              <div class="activity_cardContainer_card_hour-activity">
                <p class="week-schedule_cardContainer_card_hour-activity_hour">10h à 13h30</p>
                <p class="activity_cardContainer_card_hour-activity_activity">
                  Tous les lundis et les vendredis les intércesseurs se réunissent pour prier (interceder) concenant des sujets 
                  liés à la vie de l’Eglise, aux fidèles, ou encore tout autre sujet selon que l’Esprit-Saint les inspire.
                </p>
              </div>
          </div>
        </div>

        <div class="activity_cardContainer_card">
          <h2 class = "activity_cardContainer_card_title-h2 h_4">Culte d’intercession</h2>
          <div class="activity_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/img_prayer_1.jpg") }}' class="activity_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <div class = "activity_cardContainer_card_textBox">
              <h5 class = "activity_cardContainer_card_dayName" >Mercredi</h5>
              <div class="activity_cardContainer_card_hour-activity">
                <p class="week-schedule_cardContainer_card_hour-activity_hour">18h à 20h</p>
                <p class="activity_cardContainer_card_hour-activity_activity">
                Tous les mercredis nous nous réunissions dans notre temple pour rendre un culte à Dieu Tout Puissant.
                Le culte se déroule en 4 grandes étapes :
                La prière d’intercession et de repentance, le moment d’adorarotion et louanges (pendant ce moment nous adorons et 
                louons Dieu par la prière et des cantiques), le moment de l’exhortation (homélie), le moment des offrandes, dîmes, 
                actions de grâce, dons.
                </p>
              </div>
          </div>
        </div>

        <div class="activity_cardContainer_card">
          <h2 class = "activity_cardContainer_card_title-h2 h_4">Répétition chrorale ‘’La victorieuse’’</h2>
          <div class="activity_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/chorale_victorieuse.jpg") }}' class="activity_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <div class = "activity_cardContainer_card_textBox">
              <h5 class = "activity_cardContainer_card_dayName" >Vendredi</h5>
              <div class="activity_cardContainer_card_hour-activity">
                <p class="week-schedule_cardContainer_card_hour-activity_hour">18h30 à 20h</p>
                <p class="activity_cardContainer_card_hour-activity_activity">
                  C’est tous les vendredis que les choristes de la chorale la victorieuse se réunissent pour répéter,
                  s’entrainer ou apprendre des nouveaux cantiques. La particularité de cette chorale est qu’elle chante sans instruments musicaux.
                </p>
              </div>
          </div>
        </div>

        <div class="activity_cardContainer_card">
          <h2 class = "activity_cardContainer_card_title-h2 h_4">Répétition chrorale ‘’La Glorieuse’’</h2>
          <div class="activity_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/chorale_glorieuse.jpg") }}' class="activity_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <div class = "activity_cardContainer_card_textBox">
              <h5 class = "activity_cardContainer_card_dayName" >Samedi</h5>
              <div class="activity_cardContainer_card_hour-activity">
                <p class="week-schedule_cardContainer_card_hour-activity_hour">10h30 à 12h30</p>
                <p class="activity_cardContainer_card_hour-activity_activity">
                  C’est tous les samedis que les jeune de l’EGJC se réunissent dans le temple pour tenir leur réunion hebdomadaire, 
                  ou soit pour une activité culturelle ou spirituelle (prière, étude biblique ...).
                </p>
              </div>
          </div>
        </div>

        <div class="activity_cardContainer_card">
          <h2 class = "activity_cardContainer_card_title-h2 h_4">Activités de la jeunesse</h2>
          <div class="activity_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/img_jeunesse_1.jpg") }}' class="activity_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <div class = "activity_cardContainer_card_textBox">
              <h5 class = "activity_cardContainer_card_dayName" >Samedi</h5>
              <div class="activity_cardContainer_card_hour-activity">
                <p class="week-schedule_cardContainer_card_hour-activity_hour">12h30 à 15h</p>
                <p class="activity_cardContainer_card_hour-activity_activity">
                  C’est tous les samedis que les jeune de l’EGJC se réunissent dans le temple pour tenir leur réunion hebdomadaire, 
                  ou soit pour une activité culturelle ou spirituelle (prière, étude biblique ...).
                </p>
              </div>
          </div>
        </div>

        <div class="activity_cardContainer_card">
          <h2 class = "activity_cardContainer_card_title-h2 h_4">Activités des soeurs</h2>
          <div class="activity_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/img_mamans_egjc.jpg") }}' class="activity_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <div class = "activity_cardContainer_card_textBox">
              <h5 class = "activity_cardContainer_card_dayName" >Samedi</h5>
              <div class="activity_cardContainer_card_hour-activity">
                <p class="week-schedule_cardContainer_card_hour-activity_hour">15h à 17h</p>
                <p class="activity_cardContainer_card_hour-activity_activity">
                  Tous les samedis les soeurs (ou les femmes) de l’EGCJ tiennent leur réunion hebdomadaire ou organisent une activité 
                  concernant leur département.
                </p>
              </div>
          </div>
        </div>

        <div class="activity_cardContainer_card">
          <h2 class = "activity_cardContainer_card_title-h2 h_4">Activités des hommes</h2>
          <div class="activity_cardContainer_card_imgBox">
            <img src='{{ Storage::url("assets/les_hommes_egjc.jpg") }}' class="activity_cardContainer_card_imgBox_img" alt="Image du programme de la semaine">
          </div>
          <div class = "activity_cardContainer_card_textBox">
              <h5 class = "activity_cardContainer_card_dayName" >Samedi</h5>
              <div class="activity_cardContainer_card_hour-activity">
                <p class="week-schedule_cardContainer_card_hour-activity_hour">12h à 16h</p>
                <p class="activity_cardContainer_card_hour-activity_activity">
                  Tous les samedis les hommes de l’EGJC se réunissent soit pour les travaux d’entretien de notre temple, 
                  ou soit pour d’autres activités concernant leur département.
                </p>
              </div>
          </div>
        </div>

      </div>

    </section>
@endsection
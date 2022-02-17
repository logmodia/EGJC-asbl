@extends("layouts.app")

@section('content0')
    @include("layouts.partials.header")

    <section class="event">

        <h2 class="event_title title-h2">Calendrier des événements 2022</h2>
        <div class="event_imgBox">
            <img src='{{ Storage::url("assets/img_eventPage_1.jpg") }}' alt="Image calendrier des événements" class="event_imgBox_img">
        </div>

        <div class="event_calendarBox">

            <div class="event_calendarBox_mothBox">
                <h2 class="event_calendarBox_mothBox_mothName h_4">Janvier</h2>
                <div class="event_calendarBox_mothBox_eventContainer">
                    
                    <div class="event_calendarBox_mothBox_eventContainer_eventCard">
                        <h5 class="event_calendarBox_mothBox_eventContainer_eventCard_title h_5">Culte d’action de grâce pour l’an 2022</h5>
                        <div>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_date text_p6">9 janvier 2022</p>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_hour text_p6">de 10h à 13h</p>
                        </div>
                        <p class="event_calendarBox_mothBox_eventContainer_eventCard_venue text_p6">Dans notre temple</p>
                    </div>

                    <div class="event_calendarBox_mothBox_eventContainer_eventCard">
                        <h5 class="event_calendarBox_mothBox_eventContainer_eventCard_title h_5">Séminaire sur la vision de l’année 2022</h5>
                        <div>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_date text_p6">du 16 au 20 janvier 2022</p>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_hour text_p6">de 15h à 17h</p>
                        </div>
                        <p class="event_calendarBox_mothBox_eventContainer_eventCard_venue text_p6">Dans notre temple</p>
                    </div>

                    <div class="event_calendarBox_mothBox_eventContainer_eventCard">
                        <h5 class="event_calendarBox_mothBox_eventContainer_eventCard_title h_5">Visites des foyers</h5>
                        <div>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_date text_p6">du 25 au 30 janvier 2022</p>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_hour text_p6">de 15h à 20h</p>
                        </div>
                        <p class="event_calendarBox_mothBox_eventContainer_eventCard_venue text_p6">Aux domiciles de fidèles</p>
                    </div>

                </div>
            </div>

            <div class="event_calendarBox_mothBox">
                <h2 class="event_calendarBox_mothBox_mothName h_4">Février</h2>
                <div class="event_calendarBox_mothBox_eventContainer">
                    
                    <div class="event_calendarBox_mothBox_eventContainer_eventCard">
                        <h5 class="event_calendarBox_mothBox_eventContainer_eventCard_title h_5">Affermissements pour le baptême</h5>
                        <div>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_date text_p6">du 5 au 8 février 2022</p>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_hour text_p6">de 17h à 18h</p>
                        </div>
                        <p class="event_calendarBox_mothBox_eventContainer_eventCard_venue text_p6">Dans notre temple</p>
                    </div>

                    <div class="event_calendarBox_mothBox_eventContainer_eventCard">
                        <h5 class="event_calendarBox_mothBox_eventContainer_eventCard_title h_5">Atélier des femmes sur l’entretien de la maison</h5>
                        <div>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_date text_p6">du 16 au 20 février 2022</p>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_hour text_p6">de 16h à 18h</p>
                        </div>
                        <p class="event_calendarBox_mothBox_eventContainer_eventCard_venue text_p6">Dans notre temple</p>
                    </div>

                    <div class="event_calendarBox_mothBox_eventContainer_eventCard">
                        <h5 class="event_calendarBox_mothBox_eventContainer_eventCard_title h_5">Visites des foyers</h5>
                        <div>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_date text_p6">du 25 au 30 février 2022</p>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_hour text_p6">de 15h à 20h</p>
                        </div>
                        <p class="event_calendarBox_mothBox_eventContainer_eventCard_venue text_p6">Aux domiciles de fidèles</p>
                    </div>

                </div>
            </div>

            <div class="event_calendarBox_mothBox">
                <h2 class="event_calendarBox_mothBox_mothName h_4">Mars</h2>
                <div class="event_calendarBox_mothBox_eventContainer">
                    
                    <div class="event_calendarBox_mothBox_eventContainer_eventCard">
                        <h5 class="event_calendarBox_mothBox_eventContainer_eventCard_title h_5">Partage entre parents et enfants</h5>
                        <div>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_date text_p6">17 mars 2022</p>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_hour text_p6">de 16h à 17h</p>
                        </div>
                        <p class="event_calendarBox_mothBox_eventContainer_eventCard_venue text_p6">Dans le temple</p>
                    </div>

                    <div class="event_calendarBox_mothBox_eventContainer_eventCard">
                        <h5 class="event_calendarBox_mothBox_eventContainer_eventCard_title h_5">Préparation des activités des jeunes</h5>
                        <div>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_date text_p6">du 14 au 16 mars 2022</p>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_hour text_p6">de 16h à 18h</p>
                        </div>
                        <p class="event_calendarBox_mothBox_eventContainer_eventCard_venue text_p6">Dans le temple</p>
                    </div>

                </div>
            </div>

            <div class="event_calendarBox_mothBox">
                <h2 class="event_calendarBox_mothBox_mothName h_4">Avril</h2>
                <div class="event_calendarBox_mothBox_eventContainer">
                    
                    <div class="event_calendarBox_mothBox_eventContainer_eventCard">
                        <h5 class="event_calendarBox_mothBox_eventContainer_eventCard_title h_5">Convention pascale 2022</h5>
                        <div>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_date text_p6">09 avril 2022</p>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_hour text_p6">de 17h à 20h</p>
                        </div>
                        <p class="event_calendarBox_mothBox_eventContainer_eventCard_venue text_p6">Dans le temple</p>
                    </div>

                    <div class="event_calendarBox_mothBox_eventContainer_eventCard">
                        <h5 class="event_calendarBox_mothBox_eventContainer_eventCard_title h_5">Consécration des nouveaux anciens</h5>
                        <div>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_date text_p6">26 avril 2022</p>
                            <p class="event_calendarBox_mothBox_eventContainer_eventCard_hour text_p6">de 10h à 13h</p>
                        </div>
                        <p class="event_calendarBox_mothBox_eventContainer_eventCard_venue text_p6">Dans le temple</p>
                    </div>

                </div>
            </div>

        </div>

    </section>

@endsection
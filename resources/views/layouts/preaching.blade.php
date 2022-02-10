@extends('layouts.app')

@section('content')
    <form action="" method="get" class="searchBar">

        <label for="searchInput" class="searchBar_lab-searchInput text_p6">Rechercher</label>
        <input class="searchBar_searchInput" type="search" name = "searchInput" id="searchInput" placeholder="Rechercher par thème" autocomplete="on">

        <label class="searchBar_lab-preacher text_p6" for="preacher">Filtrer par :</label>
        <div class="searchBar_selectBox">
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
    
            <input class="searchBar_inputDate" type="date" name="preachingDate" id="preachingDate">

        </div>


    </form>

    <section class="preachList">

        <div class="preachBox">
    
            <div class="preachBox_preacher-topic">
    
                <div class="preachBox_preacher-topic_preacher">
                    <div class="preachBox_preacher-topic_preacher_preacherImg-container">
                        <img class="preachBox_preacher-topic_preacher_preacherImg-container_img" src='{{Storage::url("assets/pasteur_3.jpg")}}' alt="Image prédicateur">
                    </div>
                    <p class="preachBox_preacher-topic_preacher_name text_p6">Pasteur Charles</p>
                </div>
    
                <div class="preachBox_preacher-topic_topicBox">
                    <h4 class = "preachBox_preacher-topic_topicBox_topic h_4">L’offrande sacrificielle</h4>
                    <p class="preachBox_preacher-topic_topicBox_summary">
                        Alors que dans les religions assyro-babyloniennes la matière sacrificielle est simplement déposée devant la statue 
                        de la divinité, en Israël l'offrande d'un sacrifice nécessite un autel et elle  se fait par combustion.
                    </p>
                    <p class="preachBox_preacher-topic_topicBox_verse">
                        Juges 13, 19, Exode 20 : 24, Luc 21 : 1 - 4, 2 Samuel 24 : 18 - 25
                    </p>
                </div>
    
            </div>
    
            <div class="preachBox_service-date-link">
                <p class="preachBox_service-date-link_service">Culte dominical</p>
                <p class="preachBox_service-date-link_date">19 décembre 2021</p>
                <a class="preachBox_service-date-link_link" href = "#">Suivre la prédication</a>
            </div>
        </div>
    
        <div class="preachBox">
    
            <div class="preachBox_preacher-topic">
    
                <div class="preachBox_preacher-topic_preacher">
                    <div class="preachBox_preacher-topic_preacher_preacherImg-container">
                        <img class="preachBox_preacher-topic_preacher_preacherImg-container_img" src='{{Storage::url("assets/pasteur_3.jpg")}}' alt="Image prédicateur">
                    </div>
                    <p class="preachBox_preacher-topic_preacher_name text_p6">Pasteur Charles</p>
                </div>
    
                <div class="preachBox_preacher-topic_topicBox">
                    <h4 class = "preachBox_preacher-topic_topicBox_topic h_4">Le caractère spirituel de celui qui pardonne</h4>
                    <p class="preachBox_preacher-topic_topicBox_summary">
                        Alors que dans les religions assyro-babyloniennes la matière sacrificielle est simplement déposée devant la statue 
                        de la divinité, en Israël l'offrande d'un sacrifice nécessite un autel et elle  se fait par combustion.
                        Alors que dans les religions assyro-babyloniennes la matière sacrificielle est simplement déposée devant la statue 
                        de la divinité, en Israël l'offrande d'un sacrifice nécessite un autel et elle  se fait par combustion.
                        Alors que dans les religions assyro-babyloniennes la matière sacrificielle est simplement déposée devant la statue 
                        de la divinité, en Israël l'offrande d'un sacrifice nécessite un autel et elle  se fait par combustion.
                    </p>
                    <p class="preachBox_preacher-topic_topicBox_verse">
                        Philémon 1 : 7, Ephésiens 4 : 32, Colossiens 3 : 13
                    </p>
                </div>
    
            </div>
    
            <div class="preachBox_service-date-link">
                <p class="preachBox_service-date-link_service">Culte dominical</p>
                <p class="preachBox_service-date-link_date">23 novembre 2021</p>
                <a class="preachBox_service-date-link_link" href = "#">Suivre la prédication</a>
            </div>
        </div>
    
        <div class="preachBox">
    
            <div class="preachBox_preacher-topic">
    
                <div class="preachBox_preacher-topic_preacher">
                    <div class="preachBox_preacher-topic_preacher_preacherImg-container">
                        <img class="preachBox_preacher-topic_preacher_preacherImg-container_img" src='{{Storage::url("assets/diac_josephine.jpg")}}' alt="Image prédicateur">
                    </div>
                    <p class="preachBox_preacher-topic_preacher_name text_p6">Diaconesse Joséphine K.</p>
                </div>
    
                <div class="preachBox_preacher-topic_topicBox">
                    <h4 class = "preachBox_preacher-topic_topicBox_topic h_4">Bâtir l’autel</h4>
                    <p class="preachBox_preacher-topic_topicBox_summary">
                        Alors que dans les religions assyro-babyloniennes la matière sacrificielle est simplement déposée devant la statue 
                        de la divinité, en Israël l'offrande d'un sacrifice nécessite un autel et elle  se fait par combustion.
                        Alors que dans les religions assyro-babyloniennes la matière sacrificielle est simplement déposée devant la statue 
                        de la divinité, en Israël l'offrande d'un sacrifice nécessite un autel et elle  se fait par combustion.
                    </p>
                    <p class="preachBox_preacher-topic_topicBox_verse">
                        Exode 20 : 24
                    </p>
                </div>
    
            </div>
    
            <div class="preachBox_service-date-link">
                <p class="preachBox_service-date-link_service">Culte dominical</p>
                <p class="preachBox_service-date-link_date">11 novembre 2021</p>
                <a class="preachBox_service-date-link_link" href = "#">Suivre la prédication</a>
            </div>
        </div>
    
    
        <div class="preachBox">
    
            <div class="preachBox_preacher-topic">
    
                <div class="preachBox_preacher-topic_preacher">
                    <div class="preachBox_preacher-topic_preacher_preacherImg-container">
                        <img class="preachBox_preacher-topic_preacher_preacherImg-container_img" src='{{Storage::url("assets/anc_daniel.jpg")}}' alt="Image prédicateur">
                    </div>
                    <p class="preachBox_preacher-topic_preacher_name text_p6">Ancien Daniel</p>
                </div>
    
                <div class="preachBox_preacher-topic_topicBox">
                    <h4 class = "preachBox_preacher-topic_topicBox_topic h_4">La Fidélité</h4>
                    <p class="preachBox_preacher-topic_topicBox_summary">
                        Alors que dans les religions assyro-babyloniennes la matière sacrificielle est simplement déposée devant la statue 
                        de la divinité, en Israël l'offrande d'un sacrifice nécessite un autel et elle  se fait par combustion.
                        Alors que dans les religions assyro-babyloniennes la matière sacrificielle est simplement déposée devant la statue 
                        de la divinité, en Israël l'offrande d'un sacrifice nécessite un autel et elle  se fait par combustion.
                    </p>
                    <p class="preachBox_preacher-topic_topicBox_verse">
                        Juges 13, 19, Exode 20 : 24, Luc 21 : 1 - 4, 2 Samuel 24 : 18 - 25
                    </p>
                </div>
    
            </div>
    
            <div class="preachBox_service-date-link">
                <p class="preachBox_service-date-link_service">Culte dominical</p>
                <p class="preachBox_service-date-link_date">6 octobre 2021</p>
                <a class="preachBox_service-date-link_link" href = "#">Suivre la prédication</a>
            </div>
        </div>
    </section>


@endsection
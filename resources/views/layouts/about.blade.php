@extends('layouts.app')

@section('content0')
    @include("layouts.partials.header")
    
    <section class="presentation">
        <h2 class="presentation_title title-h2">Présentation de l'Eglise</h2>
        
        <div class="presentation_div">

            <div class="presentation_textContainer">

                <div class="presentation_textContainer_about">
                    <p class = "presentation_paragraph">
                        Dénommée Eglise Glorieuse de Jésus-Christ (EGJC),Nous sommes une Eglise chrétienne (protestante) basée à Liège 
                        (Belgique) depuis 2005. Nous   croyons   en    Jésus-Christ comme Seigneur et Sauveur et en l’entièreté 
                        de la parole deDieu transcrite dans la Bible.
                    </p>
                    <p class = "presentation_paragraph">
                        L’Eglise est concduite par le Pasteur Charles Mpoyi, porteur de la vision divine qui a donnée naissance à l’EGJC.
                    </p>
                    <p class = "presentation_paragraph">
                        L’EGJC lutte pour le Royaume de Dieu et veille à ne pas se laisser infiltrer par l’esprit du monde.
                        C’est pourquoi les membres doivent avoir accepté Jésus-Christ comme Seigneur et Sauveur; 
                        ils se doivent Respect et Amour.
                    </p>
                </div>

                <div class="presentation_textContainer_mission">
                    <h3 class = "h_3">Mission</h3>
                    <p class = "presentation_paragraph">
                        La mission principale d’amener le peuple belge et ceux qui séjournent en Belgique en particuclier, et tous les peuples
                        à travers le monde en général, à se tourner des ténèbres vers la lumière et du pouvoir de Satan vers Dieu, 
                        et de leur ouvrir les yeux afin qu’ils reçoivent le pardon des péchés et un héritage avec ceux qui sont sanctifiés 
                        par la foi en Jésus-Christ (Jean 3 : 16 - 18, Matthieu 28 : 19 - 20).
                    </p>
                </div>

                <div class="presentation_textContainer_objectif">
                    <h3 class = "h_3">Objectis</h3>
                    <p class = "presentation_paragraph">
                        Aporter aux hommes la solution à leurs besoins spirittuels en leurs transmettant fidèlement les enseignements de 
                        la parole de Dieu en s’organisant de manière à atteindre le public par des actions à l’extérieur de l’église et 
                        par des réunions ou des campagnes pour inciter les gens à venir au réunions de l’église et à accepter le salut.
                        Répondre aux besoins matériels des membres de l’EGJC en organisant éfficacement des oeuvres d’action sociale 
                        et culturelle.
                    </p>
                </div>

            </div>
        </div>

    </section>

    <section class="detail-value">
        <h2 class = "title-h2">Nos valeurs</h2>

        <div class="detail-value_div">

            <div class="detail-value_containerBox">
              <div class="detail-value_containerBox_valueCard">
                  <h5 class="detail-value_containerBox_valueCard_valueTitle">Evangile</h5>
                  <p class = "detail-value_containerBox_valueCard_text">
                    Nous croyons que les écrits de l’Ancien et du Nouveau Testament sont la parole de Dieu et doivent être la seule 
                    et infaillible règle de foi et de vie chrétiènne par laquelle nous serons jusgés et la seule pierre de touche pour 
                    éprouver toute tradition, toute doctrine et tout système religieux.
                  </p>
                  <p class = "detail-value_containerBox_valueCard_verse verse_p2">Hébreux</p>
                  <p class = "detail-value_containerBox_valueCard_verse verse_p2">4 : 12</p>
              </div>

              <div class="detail-value_containerBox_valueCard">
                  <h5 class="detail-value_containerBox_valueCard_valueTitle">Crainte de Dieu</h5>
                  <p class = "detail-value_containerBox_valueCard_text">
                    Nous croyons à un Dieu unique, en trois personnes : Père, Fils et Saint-Esprit; créateur de toute chose, infini, 
                    éternel, tout puissant, et méritant au plus haut degré confiance, amour, obéissance, louange et adoration.
                  </p>
                  <p class = "detail-value_containerBox_valueCard_verse verse_p2">Ésaïe : 44:6</p>
                  <p class = "detail-value_containerBox_valueCard_verse verse_p2">Jean : 1 : 1 - 14</p>
              </div>

              <div class="detail-value_containerBox_valueCard">
                  <h5 class="detail-value_containerBox_valueCard_valueTitle">La Foi</h5>
                  <p class = "detail-value_containerBox_valueCard_text">
                    Nous croyons que la vrai foi se manifeste toujours par des oeuvres agréables à Dieu, et que la justification, 
                    la régénération et la nouvelle naissance s’obtiennent par la foi dans la mort de Jésus-Christ.
                  </p>
                  <p class = "detail-value_containerBox_valueCard_verse verse_p2">--</p>
                  <p class = "detail-value_containerBox_valueCard_verse verse_p2">--</p>
              </div>

              <div class="detail-value_containerBox_valueCard">
                  <h5 class="detail-value_containerBox_valueCard_valueTitle">L'Amour</h5>
                  <p class = "detail-value_containerBox_valueCard_text">
                    Il n'y a rien en ce monde que l'on estime davantage que l'amour. Le plus malheureux des hommes serait celui qui 
                    ne serait aimé de personne.L’amour de Dieu a été manifesté envers nous en ce que Dieu a envoyé son Fils unique dans le monde afin que 
                    nous vivions par lui. L’amour de Dieu est infini, insondable et incommensurable. Rien, dans tout l’univers, ne peut être comparé à 
                    l’amour de Dieu.L’amour est le plus grand des commandements, ainsi la Bible nous recommande d’aimer Dieu, mais aussi d’aimer
                    nos prochains.
                  </p>
                  <p class = "detail-value_containerBox_valueCard_verse verse_p2">Matthieu 22 : 37-39</p>
              </div>

              <div class="detail-value_containerBox_valueCard">
                  <h5 class="detail-value_containerBox_valueCard_valueTitle">Le Salut</h5>
                  <p class = "detail-value_containerBox_valueCard_text">
                    Nous croyons que, pour être sauvé, le pécheur doit se repentir de ses péchés, accepter l’oeuvre de Jésus et 
                    s’unir à lui par la foi. Cette union produit la justi-fication, la régénération et la sanctification sans lesquelles nul ne
                    vera le Seigneur. 
                  </p>
                  <p class = "detail-value_containerBox_valueCard_verse verse_p2">--</p>
              </div>

            </div>

        </div>
    </section>

    <section class="aboutPastor">
        
        <div class="aboutPastor_textContainer">
            <div class = "aboutPastor_textContainer_imgBox">
                <img src='{{Storage::url("assets/pasteur_2.jpg")}}' class = "aboutPastor_textContainer_imgBox_image" alt="about image" />
            </div>
            <h2 class = "title-h2">Pasteur Charles Mpoyi</h2>
            <p class="aboutPastor_textContainer_text aboutPastor_textContainer_p1">
                Né à Kananga le 16/08/1970, il est l’epoux de Madame Marie Iyoli Moseka Modia et père de 3 enfants.
                Il est détenteur d’un diplôme de Master en économie à l’Université de Liège, et un autre diplôme de master 
                en théologie à l’université de Louvain est à comptabiliser dans son actif.
            </p>
            <p class="aboutPastor_textContainer_text aboutPastor_textContainer_p2">
                Le Pasteur Charles vient d’une famille chrétiènne, avec les parents très attachés aux shoses de Dieu,
                il a donc grandi dans un environnement qui lui a permis dès son jeune âge de suivre la voie de Christ.  
            </p>
            <p class="aboutPastor_textContainer_text">
                Né à Kananga le 00/00/0000, il est l’epoux de Madame Marie Iyoli Moseka Modia et père de 3 enfants.
                Il est détenteur d’un diplôme de Master en économie à l’Université de Liège, et un autre diplôme de master
                en théologie à l’université de Louvain est à comptabiliser dans son actif.

            </p>
            <p class="aboutPastor_textContainer_text">
                Alors qu’il avait encore 16, le Pasteur Charles connaissait et servait déjà Dieu grâce à ses parents,chrétiens catholiques, 
            </p>
            <p class="aboutPastor_textContainer_text">
                Le Pasteur Charles vient d’une famille chrétiènne, avec les parents très attachés aux shoses de Dieu,
                il a donc grandi dans un environnement qui lui a permis dès son jeune âge de suivre la voie de Christ.  
            </p>
        </div>

    </section>
@endsection
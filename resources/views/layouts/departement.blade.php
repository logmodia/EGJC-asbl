@extends('layouts.app')

@section('content0')
    @include("layouts.partials.header")

    <section class="vision">

        <h1 class="vision_title">La vision</h1>

        <div class="vision_imgBox">
            <img class = "vision_imgBox_img-bg" src='{{Storage::url("assets/img_jeunesse_2.jpg")}}' alt="Image departement de la jeunesse">
        </div>

        <div class="vision_textBox">
            <p class="vision_textBox_text">
                La vision que poursuit le Département de la jeunesse est celle que poursuit l’église à savoir :
            </p>
            <p class="vision_textBox_text">
                Etre un centre de réveil, d’évangélisation, de formation et de mission. Il se veut également être un centre de 
                convergence où les jeunes se rassemblent lors d’activités autour de la parole et sous la conduite de la puissance 
                de Dieu. 
            </p>
        </div>

    </section>

    <section class="functioning">

        <h1 class="functioning_title">Fontionnement</h1>

        <div class="functioning_textBox">
            La vision que poursuit le Département de la jeunesse est celle que poursuit l’église à savoir :
            être un centre de réveil, d’évangélisation, de formation et de mission. Il se veut également
            être un centre de convergence où les jeunes se rassemblent lors d’activités autour de la Pa-
            role et sous la conduite de la puissance de Dieu. 
        </div>

    </section>

    <section class="committee">
        <h1 class="committee_title">Commité de gestion</h1>

        <div class="committee_cardContainer">
            <div class="committee_cardContainer_card">
                <div class="committee_cardContainer_card_imgBox">
                    <img class="committee_cardContainer_card_imgbox_img" src='{{ Storage::url("assets/sr_damaris.png")}}' alt="">
                </div>
                <h5 class="committee_cardContainer_card_name">Sr. Damaris</h5>
                <p class="committee_cardContainer_card_role">Présidente</p>
            </div>
    
            <div class="committee_cardContainer_card">
                <div class="committee_cardContainer_card_imgBox">
                    <img class="committee_cardContainer_card_imgbox_img" src='{{ Storage::url("assets/fr_adriel.png")}}' alt="">
                </div>
                <h5 class="committee_cardContainer_card_name">Fr. Adriel</h5>
                <p class="committee_cardContainer_card_role">Vice-Présidente</p>
            </div>
    
            <div class="committee_cardContainer_card">
                <div class="committee_cardContainer_card_imgBox">
                    <img class="committee_cardContainer_card_imgbox_img" src='{{ Storage::url("assets/sr_dorcas.png")}}' alt="">
                </div>
                <h5 class="committee_cardContainer_card_name">Sr. Dorcas</h5>
                <p class="committee_cardContainer_card_role">Secrétaire</p>
            </div>
    
            <div class="committee_cardContainer_card">
                <div class="committee_cardContainer_card_imgBox">
                    <img class="committee_cardContainer_card_imgbox_img" src='{{ Storage::url("assets/sr_kerene.png")}}' alt="">
                </div>
                <h5 class="committee_cardContainer_card_name">Sr. Kerene</h5>
                <p class="committee_cardContainer_card_role">Responsable de la chorale des jeunes</p>
            </div>
    
            <div class="committee_cardContainer_card">
                <div class="committee_cardContainer_card_imgBox">
                    <img class="committee_cardContainer_card_imgbox_img" src='{{ Storage::url("assets/sr_pascale.png")}}' alt="">
                </div>
                <h5 class="committee_cardContainer_card_name">Sr. Pascale</h5>
                <p class="committee_cardContainer_card_role">Chargée de l’évangélisation</p>
            </div>
    
            <div class="committee_cardContainer_card">
                <div class="committee_cardContainer_card_imgBox">
                    <img class="committee_cardContainer_card_imgbox_img" src='{{ Storage::url("assets/sr_lavic.png")}}' alt="">
                </div>
                <h5 class="committee_cardContainer_card_name">Sr. Lavic</h5>
                <p class="committee_cardContainer_card_role">Chargée des événements</p>
            </div>
    
            <div class="committee_cardContainer_card">
                <div class="committee_cardContainer_card_imgBox">
                    <img class="committee_cardContainer_card_imgbox_img" src='{{ Storage::url("assets/fr_uriel.png")}}' alt="">
                </div>
                <h5 class="committee_cardContainer_card_name">Fr. Uriel</h5>
                <p class="committee_cardContainer_card_role">Conseiller</p>
            </div>
    
            <div class="committee_cardContainer_card">
                <div class="committee_cardContainer_card_imgBox">
                    <img class="committee_cardContainer_card_imgbox_img" src='{{ Storage::url("assets/fr_rene.png")}}' alt="">
                </div>
                <h5 class="committee_cardContainer_card_name">Fr. René</h5>
                <p class="committee_cardContainer_card_role">Chargé des enseignements</p>
            </div>

        </div>


    </section>

@endsection
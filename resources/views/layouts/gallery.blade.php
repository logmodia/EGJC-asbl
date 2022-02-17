@extends('layouts.app')

@section('content0')
    @include("layouts.partials.header")
    <section class="gallery">

        <h2 class = "title-h2">Nos cultes</h2>

        <div class = "gallery_coverImg-container">
            <img src='{{Storage::url("assets/img_culte_3.jpg")}}' class = "gallery_coverImg-container_coverImage" alt="Image culte" />
        </div>

        <div class="gallery_albumContainer">

            <div class="gallery_albumContainer_album">
                <div class="gallery_albumContainer_album_coverImg-box">
                    <img src='{{Storage::url("assets/img_culte_3.jpg")}}' class = "gallery_albumContainer_album_coverImg-box_coverImage" alt="Image album photos" />
                </div>
                <p class="gallery_albumContainer_album_title text_p6">Culte d’action de grâce du 20 décembre 2021</p>
            </div>

            <div class="gallery_albumContainer_album">
                <div class="gallery_albumContainer_album_coverImg-box">
                    <img src='{{Storage::url("assets/img_prayer_1.jpg")}}' class = "gallery_albumContainer_album_coverImg-box_coverImage" alt="Image album photos" />
                </div>
                <p class="gallery_albumContainer_album_title text_p6">Veillée du nouvel an 2022</p>
            </div>

            <div class="gallery_albumContainer_album">
                <div class="gallery_albumContainer_album_coverImg-box">
                    <img src='{{Storage::url("assets/img_culte_4.jpg")}}' class = "gallery_albumContainer_album_coverImg-box_coverImage" alt="Image album photos" />
                </div>
                <p class="gallery_albumContainer_album_title text_p6">Convention pascale 2021</p>
            </div>

        </div>

    </section>

    <section class="gallery">

        <h2 class = "title-h2">Activités des jeunes</h2>

        <div class = "gallery_coverImg-container">
            <img src='{{Storage::url("assets/img_jeunesse_1.jpg")}}' class = "gallery_coverImg-container_coverImage" alt="Image culte" />
        </div>

        <div class="gallery_albumContainer">

            <div class="gallery_albumContainer_album">
                <div class="gallery_albumContainer_album_coverImg-box">
                    <img src='{{Storage::url("assets/img_jeunesse_3.jpg")}}' class = "gallery_albumContainer_album_coverImg-box_coverImage" alt="Image album photos" />
                </div>
                <p class="gallery_albumContainer_album_title text_p6">Journée des jeunes</p>
            </div>

            <div class="gallery_albumContainer_album">
                <div class="gallery_albumContainer_album_coverImg-box">
                    <img src='{{Storage::url("assets/img_jeunesse_2.jpg")}}' class = "gallery_albumContainer_album_coverImg-box_coverImage" alt="Image album photos" />
                </div>
                <p class="gallery_albumContainer_album_title text_p6">Installation du commité</p>
            </div>

            <div class="gallery_albumContainer_album">
                <div class="gallery_albumContainer_album_coverImg-box">
                    <img src='{{Storage::url("assets/ecodim_1.jpg")}}' class = "gallery_albumContainer_album_coverImg-box_coverImage" alt="Image album photos" />
                </div>
                <p class="gallery_albumContainer_album_title text_p6">Ecole du dimanche (ECODIM)</p>
            </div>

        </div>

    </section>
@endsection
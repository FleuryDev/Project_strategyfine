<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="description" content="Améliorer votre présence en ligne avec un site web ergronomique !">
    <link rel="shortcut icon" href="{{ asset('storage/images/Stratégy-Fine-icone-1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="script/magicsuggest/magicsuggest-min.css">
    <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/start/jquery-ui.min.css" rel="stylesheet">
    <title>Strategy Fine</title>
    @vite(['resources/css/app.css', 'resources/css/root.css', 'resources/css/test.css', 'resources/js/app.js'])


</head>

<body class="container-fluid m-0">
    <div class="sf-loader">
        <img src="{{ asset('storage/images/Stratégy-FineACCl_-_copie_1-removebg-preview.png') }}" alt="Strategyfine">
        <div class="custom-loader"></div>
    </div>
    <main class="stg-container mx-auto" id="top">
        @include('partials.header')

        <div
            class="stg-body sf-ml-xs-0 sf-mr-xs-0 sf-pl-xs-0 sf-pr-xs-0 sf-ml-lg-7 sf-mr-lg-7 sf-pl-md-8 sf-pr-md-8 sf-pl-lg-9 sf-pr-lg-9 mt-5  mx-auto  sf-px-auto">
            @include('partials.mobilenav')





            <div id="social-sid" class="socialnav my-auto">
                <a href="#" id="facbg"><i class="fa-brands fa-facebook-f fa-beat"
                        style="color: aliceblue;"></i> </a>
                <a href="#" id="in"> <i class="fa-brands fa-linkedin-in fa-beat"></i></a>
                <a href="#" id="inst"><i class="fa-brands fa-square-instagram fa-beat"></i></a>
                <a href="#" id="twt"> <i class="fa-brands fa-twitter fa-beat"></i></a>
            </div>
            <a href="">
                <div id="a-btn" class="btn-circle-devis sf-d-none-SM-0" data-aos="fade" data-aos-duration="1500">

                    <span style="--i:1">D</span>
                    <span style="--i:2">e</span>
                    <span style="--i:3">m</span>
                    <span style="--i:4"> a</span>
                    <span style="--i:5">n</span>
                    <span style="--i:6">d</span>
                    <span style="--i:7">e</span>
                    <span style="--i:8">r</span>
                    <span style="--i:9"> </span>
                    <span style="--i:10">u</span>
                    <span style="--i:11">n</span>
                    <span style="--i:12"> </span>
                    <span style="--i:13">d</span>
                    <span style="--i:14">e</span>
                    <span style="--i:15">v</span>
                    <span style="--i:16">i</span>
                    <span style="--i:17">s</span>

                </div>
            </a>








            <div class="sf-dflex sf-flex-col sf-mx-auto sf-mt-3 ">
                <div class="sf-dgrid sf-pt-xs-0 sf-pt-md-3">
                    <div class="sf-fw-6  sf-fs-xs-2 sf-fs-md-3 sf-pl-xs-2 sf-pr-xs-2 sf-pl-sm-6 sf-pr-sm-6 sf-pl-md-2 sf-pr-md-2  sf-pl-lg-0 sf-pr-lg-0 text-left sf-w-xs-12 sf-w-md-10 aos-item"
                        data-aos="fade-up" data-aos-duration="1500">
                        Participez au jeu et gagnez un service gratuit.
                    </div>

                </div>
                <div class=" sf-mt-5 fs-2">
                    <div class="sf-fs-sm-2 text-center sf-pl-xs-4 sf-pr-xs-4 sf-p-md-0 sf-p-md-0 mx-auto aos-item"
                        data-aos="zoom" data-aos-duration="1500" data-aos-delay="1000">
                        Chaque trimestre, gagnez un service gratiut de la part de nos experts !
                    </div>
                </div>
                <div class="sf-dflex sf-fw-6 sf-mt-xs-3 sf-mt-lg-6 sf-fs-2  sf-pl-xs-3 sf-pl-md-0">
                    Conditions :
                </div>
                <div class="sf-dflex sf-fw-5 sf-mt-xs-2  sf-pl-xs-5 sf-pr-xs-5 sf-p-md-0 sf-p-md-0">
                    <ol class="sf-ml-lg-6">
                        <li>S'abonner à au moins deux des pages de notre agence;</li>
                        <li>Aimer, commenter, et partager le post du service que vous voulez sur deux de vos réseaux
                            sociaux</li>
                    </ol>
                </div>

                <div class="sf-d-none-xs-0  sf-dflex sf-fw-6 sf-mt-xs-3 sf-mt-lg-3 sf-mx-auto">
                    <div class="text-center  sf-mt-2 sf-mx-auto ">
                        <button id="startgame" class="sf-btn sf-btn-bg-bprimary sf-b_sd-1 sf-br-1  "
                            style=" text-decoration: none;">Je participe !</button>
                    </div>
                </div>

                <div id="dev" class="sf-w-12 sf-mx-auto sf-d-none-0">
                    <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-11 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                        <span>Développement</span>
                    </div>
                    <div
                        class="sf-box_shadox-1 sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2  sf-mt-6 sf-btn-bg-blue">
                        <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-4 mx-auto sf-mb-1">
                            <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-w-lg-12 sf-mx-auto"
                                src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">
                        </div>
                        <div class="sf-w-12 sf-w-lg-7">
                            <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                                <span>Refonte de site web</span>
                            </div>
                            <div class="my-auto sf-mt-1">
                                <div class="  sf-dflex sf-flex-col sf-ml-2" style="font-size:normal;">
                                    <h4>Pour vos 5 pages :</h4> <br>
                                    <ul>
                                        <li>Bénéficiez d’une refonte maquttée sur Figma ;
                                        </li>
                                        <li>Optimisez votre taux de conversions ;</li>
                                        <li>Respectez les règles UI/UX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div
                        class="sf-box_shadox-1 sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2  sf-mt-6 sf-btn-bg-orange">
                        <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-4 mx-auto sf-mb-1">
                            <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-w-lg-12 sf-mx-auto"
                                src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">
                        </div>
                        <div class="sf-w-12 sf-w-lg-7">
                            <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                                <span>Conception de site web</span>
                            </div>
                            <div class="my-auto sf-mt-1">
                                <div class="  sf-dflex sf-flex-col sf-ml-2" style="font-size:normal;">
                                    <h4>Pour vos 5 pages :</h4> <br>
                                    <ul>
                                        <li>Bénéficiez d’une refonte maquttée sur Figma ;
                                        </li>
                                        <li>Optimisez votre taux de conversions ;</li>
                                        <li>Respectez les règles UI/UX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="ref" class="sf-w-12 sf-mx-auto sf-d-none-0">
                    <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-1 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                        <span>Référencement</span>
                    </div>
                    <div
                        class="sf-box_shadox-1 sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2  sf-mt-6 sf-btn-bg-blue">
                        <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-4 mx-auto sf-mb-1">
                            <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-w-lg-12 sf-mx-auto"
                                src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">
                        </div>
                        <div class="sf-w-12 sf-w-lg-7">
                            <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                                <span>Référencement SEO</span>
                            </div>
                            <div class="my-auto sf-mt-1">
                                <div class="  sf-dflex sf-flex-col sf-ml-2" style="font-size:normal;">
                                    <h4>Pour vos 3 pages :</h4> <br>
                                    <ul>
                                        <li>Bénéficiez d’une refonte maquttée sur Figma ;
                                        </li>
                                        <li>Optimisez votre taux de conversions ;</li>
                                        <li>Respectez les règles UI/UX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div
                        class="sf-box_shadox-1 sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2  sf-mt-6 sf-btn-bg-orange">
                        <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-4 mx-auto sf-mb-1">
                            <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-w-lg-12 sf-mx-auto"
                                src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">
                        </div>
                        <div class="sf-w-12 sf-w-lg-7">
                            <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                                <span>Référencement SEA</span>
                            </div>
                            <div class="my-auto sf-mt-1">
                                <div class="  sf-dflex sf-flex-col sf-ml-2" style="font-size:normal;">
                                    <h4>Pour vos 5 pages :</h4> <br>
                                    <ul>
                                        <li>Bénéficiez d’une refonte maquttée sur Figma ;
                                        </li>
                                        <li>Optimisez votre taux de conversions ;</li>
                                        <li>Respectez les règles UI/UX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="des" class="sf-w-12 sf-mx-auto sf-d-none-0">
                    <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-1 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                        <span>Design UI/UX</span>
                    </div>
                    <div
                        class="sf-box_shadox-1 sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2  sf-mt-6 sf-btn-bg-gray-dark">
                        <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-4 mx-auto sf-mb-1">
                            <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-w-lg-12 sf-mx-auto"
                                src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">
                        </div>
                        <div class="sf-w-12 sf-w-lg-7">
                            <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                                <span>Refonte de site web</span>
                            </div>
                            <div class="my-auto sf-mt-1">
                                <div class="  sf-dflex sf-flex-col sf-ml-2" style="font-size:normal;">
                                    <h4>Pour vos 5 pages :</h4> <br>
                                    <ul>
                                        <li>Bénéficiez d’une refonte maquttée sur Figma ;
                                        </li>
                                        <li>Optimisez votre taux de conversions ;</li>
                                        <li>Respectez les règles UI/UX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div
                        class="sf-box_shadox-1 sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2  sf-mt-6 sf-btn-bg-orange">
                        <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-4 mx-auto sf-mb-1">
                            <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-w-lg-12 sf-mx-auto"
                                src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">
                        </div>
                        <div class="sf-w-12 sf-w-lg-7">
                            <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                                <span>Conception de site web</span>
                            </div>
                            <div class="my-auto sf-mt-1">
                                <div class="  sf-dflex sf-flex-col sf-ml-2" style="font-size:normal;">
                                    <h4>Pour vos 5 pages :</h4> <br>
                                    <ul>
                                        <li>Bénéficiez d’une refonte maquttée sur Figma ;
                                        </li>
                                        <li>Optimisez votre taux de conversions ;</li>
                                        <li>Respectez les règles UI/UX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="str" class="sf-w-12 sf-mx-auto sf-d-none-0">
                    <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                        <span>Stratégie de contenu</span>
                    </div>
                    <div
                        class="sf-box_shadox-1 sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2  sf-mt-6 sf-btn-bg-gsecondary">
                        <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-4 mx-auto sf-mb-1">
                            <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-w-lg-12 sf-mx-auto"
                                src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">
                        </div>
                        <div class="sf-w-12 sf-w-lg-7">
                            <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                                <span>Refonte de site web</span>
                            </div>
                            <div class="my-auto sf-mt-1">
                                <div class="  sf-dflex sf-flex-col sf-ml-2" style="font-size:normal;">
                                    <h4>Pour vos 5 pages :</h4> <br>
                                    <ul>
                                        <li>Bénéficiez d’une refonte maquttée sur Figma ;
                                        </li>
                                        <li>Optimisez votre taux de conversions ;</li>
                                        <li>Respectez les règles UI/UX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div
                        class="sf-box_shadox-1 sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2  sf-mt-6 sf-btn-bg-bsecondary">
                        <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-4 mx-auto sf-mb-1">
                            <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-w-lg-12 sf-mx-auto"
                                src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">
                        </div>
                        <div class="sf-w-12 sf-w-lg-7">
                            <div class=" sf-w-xs-12 sf-w-lg-7 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  sf-p-1">
                                <span>Conception de site web</span>
                            </div>
                            <div class="my-auto sf-mt-1">
                                <div class="  sf-dflex sf-flex-col sf-ml-2" style="font-size:normal;">
                                    <h4>Pour vos 5 pages :</h4> <br>
                                    <ul>
                                        <li>Bénéficiez d’une refonte maquttée sur Figma ;
                                        </li>
                                        <li>Optimisez votre taux de conversions ;</li>
                                        <li>Respectez les règles UI/UX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="sf-dflex sf-fw-5 sf-mt-xs-2  sf-pl-xs-3 sf-pl-md-0 sf-mx-auto sf-w-10">
                    <div class="swiper sf-w-12 sf-pt-3 sf-mb-3 sf-mx-auto">
                        <div class="swiper-wrapper sf-w-12 sf-mx-auto">
                            <div data-swiper-autoplay="2000"
                                class="swiper-slide sf-w30  sf-w-xs-12 sf-w-md-6 sf-w-lg-4 sf-mx-auto sf-br-1 effet-opacity-1 sf-dflex ">

                            </div>
                            <div data-swiper-autoplay="2000"
                                class="swiper-slide  sf-w30 sf-w-xs-12 sf-w-md-6 sf-w-lg-4 sf-mx-auto sf-br-1 effet-opacity-1 sf-dflex sf-btn-bg-bprimary">
                                <h2 class="sf-mx-auto text-center my-auto effet-opacity-0">Développement</h2>
                                <div class="thumb-img-description sf-br-1 sf-btn-bg-gsecondary">
                                    <div class="sf-dflex sf-flex-col">

                                        <span class="sf-mt-10">Refonte de site web</span>
                                        <span class="sf-mt-2">Conception de site web</span>
                                        <div class="text-center  sf-mt-4 sf-mx-auto ">
                                            <button id="dev1"
                                                class="sf-btn sf-btn-bg-gprimary sf-b_sd-1 sf-br-1  "
                                                style=" text-decoration: none;">voir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-swiper-autoplay="2000"
                                class="swiper-slide  sf-w-xs-12 sf-w-md-6 sf-w-lg-4 sf-mx-auto sf-br-1 effet-opacity-1 sf-dflex sf-btn-bg-gsecondary">
                                <h2 class="sf-mx-auto text-center my-auto effet-opacity-0">Référencement</h2>
                                <div class="thumb-img-description sf-btn-bg-bprimary sf-br-1">
                                    <div class="sf-dflex sf-flex-col">

                                        <span class="sf-mt-1">Référencement SEO</span>
                                        <span class="sf-mt-2">Référencement SEA </span>
                                        <div class="text-center  sf-mt-4 sf-mx-auto ">
                                            <button id="ref1"
                                                class="sf-btn sf-btn-bg-bsecondary sf-b_sd-1 sf-br-1  "
                                                style=" text-decoration: none;">voir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-swiper-autoplay="2000"
                                class="swiper-slide sf-w30 sf-w-xs-12 sf-w-md-6 sf-w-lg-4 sf-mx-auto sf-br-1 effet-opacity-1 sf-dflex sf-btn-bg-gprimary">
                                <h2 class="sf-mx-auto text-center my-auto effet-opacity-0">Design UI/UX</h2>
                                <div class="thumb-img-description sf-btn-bg-bsecondary sf-br-1">
                                    <div class="sf-dflex sf-flex-col">

                                        <span class="sf-mt-10">Refonte de site web</span>
                                        <span class="sf-mt-2">Conception de site web</span>
                                        <div class="text-center  sf-mt-4 sf-mx-auto ">
                                            <button id="des1"
                                                class="sf-btn sf-btn-bg-bprimary sf-b_sd-1 sf-br-1  "
                                                style=" text-decoration: none;">voir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div data-swiper-autoplay="2000"
                                class="swiper-slide sf-w30  sf-w-xs-12 sf-w-md-6 sf-w-lg-4 sf-mx-auto sf-br-1 effet-opacity-1 sf-dflex sf-btn-bg-bsecondary">
                                <h2 class="sf-mx-auto text-center my-auto effet-opacity-0">Stratégie de contenu</h2>
                                <div class="thumb-img-description sf-br-1 sf-btn-bg-gprimary">
                                    <div class="sf-dflex sf-flex-col">

                                        <span class="sf-mt-10">Refonte de site web</span>
                                        <span class="sf-mt-2">Conception de site web</span>
                                        <div class="text-center  sf-mt-4 sf-mx-auto ">
                                            <button id="str1"
                                                class="sf-btn sf-btn-bg-gsecondary sf-b_sd-1 sf-br-1  "
                                                style=" text-decoration: none;">voir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-swiper-autoplay="2000"
                                class="swiper-slide sf-w30  sf-w-xs-12 sf-w-md-6 sf-w-lg-4 sf-mx-auto sf-br-1 effet-opacity-1 sf-dflex ">

                            </div>

                        </div>

                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>

            </div>


        </div>
    </main>
    <div id="lkTop" class="to-top"><a href="#top"><i class="fa-solid fa-angle-right fa-rotate-270"
                style="color: #52565b;"></i></a>
    </div>

    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="script/magicsuggest/magicsuggest-min.js"></script>
    <script>
        const loader = document.querySelector('.sf-loader');
        window.addEventListener('load', () => {
            loader.classList.add('loader-out');
        });

        //var game = document.getElementById('startgame');
        //game.addEventListener('click', () => {
        //    loader.classList.remove('loader-out');
        //    setTimeout(() => {
        //        game.classList.add('sf-d-none-xs-0')
        //        $(document).ready(function () {
        //
        //            $('.swiper').removeClass('sf-d-none-xs-0');
        //
        //        })
        //        loader.classList.add('loader-out');

        //    }, 3500)
        // });
        function itemgame(strt, ender) {
            $(document).ready(function() {
                $(strt).click(function() {
                    loader.classList.remove('loader-out');
                    setTimeout(() => {
                        // $('.swiper').addClass('sf-d-none-xs-0')
                        const tab = ['#dev', '#des', '#str', '#ref']
                        for (let i = 0; i < tab.length; i++) {
                            if (!$(tab[i]).hasClass('sf-d-none-0')) {
                                $(tab[i]).addClass('sf-d-none-0')
                            }
                        }

                        $(document).ready(function() {
                            $(ender).removeClass('sf-d-none-0');
                        })
                        loader.classList.add('loader-out');

                    }, 3500)
                })
            });
        }
        itemgame('#dev1', '#dev');
        itemgame('#des1', '#des');
        itemgame('#ref1', '#ref');
        itemgame('#str1', '#str');


        AOS.init({
            easing: 'ease-in-out-sine'
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.counter-value').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3500,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

            $('#nav').click(function() {
                if ($('.mobile-nav').hasClass('nav-active')) {
                    $('.mobile-nav').removeClass('nav-active');
                } else {
                    $('.mobile-nav').addClass('nav-active');
                }
            });

            $('#inputMobi').focusin(function() {
                $('.ac-container').addClass('mobile-focus');
                $('.serach-autoComplete').addClass('autocomplete-active')
            })
            $('#inputMobi').focusout(function() {
                $('.ac-container').removeClass('mobile-focus');
                $('.serach-autoComplete').removeClass('autocomplete-active')

            })

            var availableTags = [
                "ActionScript",
                "AppleScript",
                "Asp",
                "BASIC",
                "C",
                "C++",
                "Clojure",
                "COBOL",
                "ColdFusion",
                "Erlang",
                "Fortran",
                "Groovy",
                "Haskell",
                "Java",
                "JavaScript",
                "Lisp",
                "Perl",
                "PHP",
                "Python",
                "Ruby",
                "Scala",
                "Scheme"
            ];

            function highlightText(text, $node) {
                var searchText = $.trim(text).toLowerCase(),
                    currentNode = $node.get(0).firstChild,
                    matchIndex, newTextNode, newSpanNode;
                while ((matchIndex = currentNode.data.toLowerCase().indexOf(searchText)) >= 0) {
                    newTextNode = currentNode.splitText(matchIndex);
                    currentNode = newTextNode.splitText(searchText.length);
                    newSpanNode = document.createElement("span");
                    newSpanNode.className = "highlight";
                    currentNode.parentNode.insertBefore(newSpanNode, currentNode);
                    newSpanNode.appendChild(newTextNode);
                }
            }
            $(".mobil").autocomplete({
                source: availableTags
            }).data("ui-autocomplete")._renderItem = function(ul, item) {
                var $div = $("<div></div>").text(item.label);
                highlightText(this.term, $div);
                return $("<li></li>").append($div).appendTo(ul);
            };
            $("#inputMD").autocomplete({
                source: availableTags
            }).data("ui-autocomplete")._renderItem = function(ul, item) {
                var $div = $("<div></div>").text(item.label);
                highlightText(this.term, $div);
                return $("<li></li>").append($div).appendTo(ul);
            };



        });


        $('#magicsuggest').magicSuggest({

        });
    </script>


    <!-- <script>
        const xtext = document.querySelector('.btn-circle-devis');
        xtext.innerHTML = xtext.innerText.split("").map((char, i) => {
            return '<span style="transform : translateY(-50%) rotate(' + (i + 1) * (360 / 17) + 'deg;" data="' + i +
                '">' + char + '</span>';
        }).join("");
    </script> -->
    <!-- <script>
        let i = 0;

        function changeImg() {
            tableImg = ['img/IMG-20230607-WA0009.jpg',
                'img/IMG-20230607-WA0010.jpg',
                '{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}',
                '{{ asset('storage/images/IMG-20230607-WA0012.jpg') }}',
            ]
            i++;
            var x = document.getElementById("carouselImg");
            x.setAttribute("src", tableImg[i]);
            if (i == tableImg.length) {
                i = 0;
            }
        }

        setInterval(changeImg, 6000);
    </script>
 -->

    <script>
        $(window).scroll(function() {
            var window_height, scroll_top;
            window_height = $(window).height();
            scroll_top = $(window).scrollTop();
            hdh = $(document).height();


            var $nav_bar = $('#a-btn');
            var $topelm = $('#lkTop');
            //(window_height - $nav_bar.height()) <= scroll_top ||||| hdh * 0.6
            if (scroll_top > window_height) {
                if (!$topelm.hasClass('elm-visible')) {
                    $topelm.removeClass('elm-invisible')

                    $topelm.addClass('elm-visible');
                }
            } else {
                if ($topelm.hasClass('elm-invisible')) {
                    $topelm.removeClass('elm-visible')

                    $topelm.addClass('elm-invisible');

                }
                $topelm.removeClass('elm-visible')
                $topelm.addClass('elm-invisible');

            };


            //&& scroll_top < hdh * 0.6
            $nav_bar.removeClass('elm-invisible')

            $nav_bar.addClass('elm-visible');


        });

        /* window.onscroll = function () { xxx() };
                 function xxx() {
                     if (document.body.scrollTop < 900) {
                         $('a-btn').className += 'elm-visible';
                         // document.getElementsByClassName('btn-circle-devis').style.display = 'block';
                         // alert('ok')
                     } else {
                         $('a-btn').className += 'elm-invisible';
         
                     }
                 }*/
        const next = document.querySelector('.next');
        const prev = document.querySelector('.prev');
        const slider = document.querySelector('.slider');
        var sectionIndex = 0;

        function reset() {
            for (var i = 0; i < slider.children.length; i++) {
                slider.children[i].style.opacity = 0;
                slider.children[i].style.zIndex = 0;
            }
        }

        function Next() {
            reset();
            sectionIndex = sectionIndex < slider.children.length ? sectionIndex + 1 : 0
            slider.children[sectionIndex].style.zIndex = 1;
            slider.children[sectionIndex].style.opacity = 1;
        }
        next.addEventListener('click', function() {

            Next();
        });

        setInterval(Next, 5000);
        prev.addEventListener('click', function() {
            reset();
            sectionIndex = sectionIndex > 0 ? sectionIndex - 1 : slider.children.length - 1;
            slider.children[sectionIndex].style.zIndex = 1;
            slider.children[sectionIndex].style.opacity = 1;

        });
    </script>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            autoplay: {
                delay: 1000,
            },

            spaceBetween: 30,

            effect: 'coverflow',
            coverflowEffect: {
                rotate: 60,
                slideShadows: true,
            },

            breakpoints: {
                // when window width is >= 320px
                100: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    coverflowEffect: {
                        rotate: 0,

                    },
                },
                540: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    coverflowEffect: {
                        rotate: 0,

                    },

                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                    coverflowEffect: {
                        rotate: 0,

                    },
                },
                // when window width is >= 640px
                992: {
                    slidesPerView: 3,
                    coverflowEffect: {
                        rotate: 40,

                    },
                }
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            nested: true,
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar

        });
    </script>
</body>

</html>

<!-- FLEURY DEV ON JUIN, 12 2023 AT 11:14 PM  -->
<!-- /* BY FLEURY DEV ON JUIN, 23 2023 AT 00:24 AM  */ -->

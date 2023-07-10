@extends('layouts.page')
@section('header')
    @include('partials.header')
@endsection
@section('mobilenav')
    @include('partials.mobilenav')
@endsection
@section('content')
    <div class="container">
        <div class="carousel">
            <div class="slider">
                <section class="c"><img src="{{ asset('storage/images/Stratégy-FineACCl - copie.png') }}" alt="">
                </section>
                <section>
                    <div class="div-li div-li-2 ">

                        <div class="carousel-text pt-1 aos-item " data-aos="fade-up" data-aos-duration="1500">
                            <h1>Site web</h1>
                            <div class="txt-50 mt-1">
                                Améliorer votre présence en ligne avec un site web ergronomique !
                            </div>
                            <div class="CONS"> <a href="" class="consult">Consulter <i
                                        class="fa-solid fa-angles-right" style="color: #ffffff;"></i></a></div>
                        </div>
                        <div class="carousel-img " id="stage">

                            <img id="carouselImg" class="active item img-carousel"
                                src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">

                        </div>
                    </div>
                </section>
                <section>
                    <div class="div-li div-li-2 ">

                        <div class="carousel-text pt-1 aos-item " data-aos="fade-up" data-aos-duration="1500">
                            <h1>Design </h1>
                            <div class="txt-50 mt-1">
                                Améliorer votre présence en ligne avec un site web ergronomique !
                            </div>
                            <div class="CONS"> <a href="" class="consult">Consulter <i
                                        class="fa-solid fa-angles-right" style="color: #ffffff;"></i></a></div>
                        </div>
                        <div class="carousel-img ">

                            <img class="active item img-carousel"
                                src="{{ asset('storage/images/IMG-20230607-WA0012.jpg') }}" alt="">

                        </div>
                    </div>
                </section>
                <section>
                    <div class="div-li div-li-2 ">

                        <div class="carousel-text pt-1 aos-item " data-aos="fade-up" data-aos-duration="1500">
                            <h1>Référencement</h1>
                            <div class="txt-50 mt-1">
                                Améliorer votre présence en ligne avec un site web ergronomique !
                            </div>
                            <div class="CONS"> <a href="" class="consult">Consulter <i
                                        class="fa-solid fa-angles-right" style="color: #ffffff;"></i></a></div>
                        </div>
                        <div class="carousel-img ">

                            <img class="active item img-carousel"
                                src="{{ asset('storage/images/IMG-20230607-WA0009.jpg') }}" alt="">

                        </div>
                    </div>
                </section>
                <section>
                    <div class="div-li div-li-2 ">

                        <div class="carousel-text pt-1 aos-item " data-aos="fade-up" data-aos-duration="1500">
                            <h1>Strategie de contenu </h1>
                            <div class="txt-50 mt-1">
                                Améliorer votre présence en ligne avec un site web ergronomique !
                            </div>
                            <div class="CONS"> <a href="" class="consult">Consulter <i
                                        class="fa-solid fa-angles-right" style="color: #ffffff;"></i></a></div>
                        </div>
                        <div class="carousel-img ">

                            <img class="active item img-carousel"
                                src="{{ asset('storage/images/IMG-20230607-WA0012.jpg') }}" alt="">

                        </div>
                    </div>
                </section>

            </div>
            <div class="controls">
                <button class="next"><i class="fa-solid fa-chevron-right" style="color: #a7a8a9;"></i></button>
                <button class="prev"><i class="fa-solid fa-chevron-left" style="color: #b5b5b5;"></i></button>
            </div>
        </div>
    </div>





    <hr class="hr">
    <div class="div-li txt-center mp-0">
        <div class="txt-center mx-auto txt-infos-stg txt-32 aos-item mp-0" data-aos="zoom-out" data-aos-duration="1500">
            Pour les entreprises B2B, locales, nouvelles startups, organisations.
        </div>
    </div>
    <hr class="hr">
    <div class="div-li div-li-2 p-2 ms-p border-b ">
        <div class="mx-auto">
            <a href="" class="link-blue-1  border-radius  btn  mx-auto btn_blue--secondary">Bénéficier de
                l'audit gratuit</a>
        </div>
        <div class="mx-auto">
            <a href="" class="link-blue-2   btn_blue--primary border-radius btn mx-auto">Demander un devis</a>
        </div>
    </div>
    <div id="social-sid" class="socialnav my-auto">
        <a href="#" id="facbg"><i class="fa-brands fa-facebook-f fa-beat" style="color: aliceblue;"></i> </a>
        <a href="#" id="in"> <i class="fa-brands fa-linkedin-in fa-beat"></i></a>
        <a href="#" id="inst"><i class="fa-brands fa-square-instagram fa-beat"></i></a>
        <a href="#" id="twt"> <i class="fa-brands fa-twitter fa-beat"></i></a>
    </div>







    <hr>
    <!-- <i class="fa-solid fa-arrow-right" style="color: #fafafa;"></i> -->
    <div class="div-li  li-w60 stg-info-m mt-2">
        <div class="stg-info mt-1 txt-50 aos-item" data-aos="fade-left" data-aos-duration="1500"
            data-aos-placement="center-center">
            Avec <span class="h1">Strategy</span><span class=" h1 fine">Fine</span> travaillez avec des experts
            pour créer de la
            valeur et développer votre entreprise.
        </div>
    </div>

    <div class="div-li mt-2 mobil-p-2">
        <div class="txt-50 fw-2 mt-2">
            Progets récents réalisés
        </div>
    </div>
    <div class="counters">
        <div class="mx-auto">
            <div class="counter blue-1 aos-item" data-aos="flip-up" data-aos-placement="top-bottom" data-aos-delay="200"
                data-aos-duration="1000">
                <div class="counter-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <h3>Développement</h3>
                <span class="counter-value" _msthash="660920" _msttexthash="23335">1963</span>
            </div>
        </div>
        <div class="mx-auto ">
            <div class="counter green aos-item" data-aos="flip-up" data-aos-placement="top-center" data-aos-delay="300"
                data-aos-duration="1000">
                <div class="counter-icon">
                    <i class="fa fa-rocket"></i>
                </div>
                <h3>Référencement</h3>
                <span class="counter-value" _msthash="914160" _msttexthash="23244">1854</span>
            </div>
        </div>

        <div class="mx-auto">
            <div class="counter blue aos-item" data-aos="flip-up" data-aos-placement="top-bottom" data-aos-delay="400"
                data-aos-duration="1000">
                <div class="counter-icon">
                    <i class="fa fa-solid fa-compass-drafting" style="color: #ffffff;"></i>
                </div>
                <h3>Design UI/UX</h3>
                <span class="counter-value" _msthash="6920" _msttexthash="2335">63</span>
            </div>
        </div>

        <div class="mx-auto">
            <div class="counter green-1" data-aos="flip-up" data-aos-placement="top-center" data-aos-delay="500"
                data-aos-duration="1000">
                <div class="counter-icon">
                    <i class="fa fa-solid fa-users" style="color: #ffffff;"></i>

                </div>
                <h3>Stratégie de contenu</h3>
                <span class="counter-value" _msthash="914160" _msttexthash="23244">1854</span>
            </div>
        </div>


    </div>

    <div class=" swiper2 projects-container">
        <div class="swiper-wrapper">
            <div class="project-x swiper-slide">
                <div class="img-card">
                    <img src="{{ asset('storage/images/IMG-20230607-WA0010.jpg') }}" alt="">
                    <div class="div-infos">
                        <div>
                            <a href="">Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="img-desc">
                    <span> <i class="fa-solid fa-user-doctor" style="color:#52565b;"></i> UI Design</span>
                    <span> <i class="fa-regular fa-building " style="color: #4a4c4f;"></i> Entreprise
                        name</span>
                </div>
            </div>
            <div class="project-x swiper-slide">
                <div class="img-card">
                    <img src="{{ asset('storage/images/IMG-20230607-WA0009.jpg') }}" alt="">
                    <div class="div-infos">
                        <div>
                            <a href="">Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="img-desc">
                    <span> <i class="fa-solid fa-user-doctor" style="color:#52565b;"></i> Gestion des réseaux
                        sociaux</span>
                    <span> <i class="fa-regular fa-building " style="color: #4a4c4f;"></i> Entreprise
                        name</span>
                </div>
            </div>
            <div class="project-x swiper-slide">
                <div class="img-card">
                    <img src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">
                    <div class="div-infos">
                        <div>
                            <a href="">Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="img-desc">
                    <span> <i class="fa-solid fa-user-doctor" style="color:#52565b;"></i> Référencement</span>
                    <span> <i class="fa-regular fa-building " style="color: #4a4c4f;"></i> Entreprise
                        name</span>
                </div>
            </div>
            <div class="project-x swiper-slide">
                <div class="img-card">
                    <img src="{{ asset('storage/images/IMG-20230607-WA0012.jpg') }}" alt="">
                    <div class="div-infos">
                        <div>
                            <a href="">Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="img-desc">
                    <span> <i class="fa-solid fa-user-doctor" style="color:#52565b;"></i> Site web
                        E-commerce</span>
                    <span> <i class="fa-regular fa-building " style="color: #4a4c4f;"></i> Entreprise
                        name</span>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar2"></div>
    </div>
    <div class="div-li  p-2 border-b ">

        <div class="mx-auto">
            <a href="" class="link-blue-2   btn_blue--primary border-radius btn mx-auto">Voir plus</a>
        </div>
    </div>

    <hr>
    <div class="div-li mt-2 mobil-p-2">
        <div class="txt-50  mt-2 fw-2">
            Le processus pour optimiser durablement votre présence en ligne.
        </div>
    </div>
    <div class="div-li process-detail mt-4 aos-item" data-aos="zoom-out" data-aos-duration="1500">
        <!-- <div class="pross1 txt-20 mx-auto"> Recherche &amp; Audit</div>
                                                <div class="circle mt-1">
                                                    <div class="triangle mx-auto"></div>
                                                </div>
                                                <div class="div-li div-li-2 xx">
                                                    <div class="pross2 txt-20">Suivi &amp; Adaptation</div>
                                                    <div class="pross3 txt-20">Mise en oeuvre de la Roadmap</div>
                                                </div> -->
        <img src="{{ asset('storage/images/Processus CRO SFine.svg') }}" class="w-60 mx-auto"
            alt="Pocessus pour optimiser durablement votre présence en ligne">
    </div>
    <div id="transcroller-body" class="aos-all mobil-mw-1 div-li div-li-2 fw-4 mt-4 mb-2 pl-2 ms-m-t-1">
        <div class="aos-item ml-2 ms-ml-0" data-aos="fade-up" data-aos-duration="1500">
            <div class=" aos-item__inner txt-fs-secondary  bg-green-secondary border-radius btn w-auto ">
                Recherche &amp; Audit
            </div>
            <div class="mt-2 ms-text-justify ms-p-1 ms-m-t-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero maxime amet perspiciatis rem neque
                consectetur quae.
                Rerum corrupti repudiandae totam recusandae reprehenderit unde, ea harum qui amet saepe dolorem
                obcaecati!
            </div>
            <p class="mt-2 bottom-0 ms-text-justify ms-p-1 ms-m-t-1">
                Lorem ipsum dolor sit amet, consectetur adipisicing.
            </p>
        </div>
        <div>
            <img class="aos-item ml-9 w-50 ms-w-100 md-w-100 mx-auto"
                src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" data-aos="fade-left" alt=""
                data-aos-duration="1500">
        </div>
    </div>
    <div class="div-li div-li-2 mobil-mw-1 fw-4 mt-4 mb-2 pl-2 ms-m-t-1">
        <div class="mobil-order-2 mobile-mt-3 ms-m-t-1">
            <img class="ml-2 w-50 ms-w-100 aos-item mx-auto md-w-100"
                src="{{ asset('storage/images/IMG-20230607-WA0012.jpg') }}" data-aos="fade-left"
                data-aos-duration="1500" alt="">
        </div>
        <div class="mobil-order-1 ">
            <div class="aos-item txt-fs-secondary  bg-blue-secondary border-radius btn w-auto ms-m-t-1"
                data-aos="fade-right" data-aos-duration="1500">
                Mise en oeuvre de la Roadmap
            </div>
            <div class="mt-2 aos-item ms-text-justify ms-p-1 ms-m-t-1" data-aos="fade-up-left" data-aos-duration="1500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero maxime amet perspiciatis rem neque
                consectetur quae.
                Rerum corrupti repudiandae totam recusandae reprehenderit unde, ea harum qui amet saepe dolorem
                obcaecati!
            </div>
            <p class="mt-2 bottom-0 aos-item ms-text-justify ms-m-t-1 ms-p-1 ms-m-t-1" data-aos="fade-down-left"
                data-aos-duration="1500">
                Lorem ipsum dolor sit amet, consectetur adipisicing.
            </p>
        </div>

    </div>
    <div class="div-li div-li-2 mobil-mw-1 fw-4 mb-2 mx-auto pl-2 ms-m-t-1">
        <div class="mx-auto ml-2">
            <div class="txt-fs-secondary aos-item mt-2  bg-green-secondary ms-m-t-1 border-radius btn w-auto"
                data-aos="fade-down" data-aos-duration="1500">
                Suivi &amp; Adaptation
            </div>
            <div class="mt-2 aos-item ms-text-justify ms-m-t-1 ms-p-1" data-aos="flip-right" data-aos-duration="1500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero maxime amet perspiciatis rem neque
                consectetur quae.
                Rerum corrupti repudiandae totam recusandae reprehenderit unde, ea harum qui amet saepe dolorem
                obcaecati!
            </div>
            <p class="mt-2 bottom-0 aos-item ms-text-justify ms-m-t-1 ms-p-1" data-aos="fade-left"
                data-aos-duration="1500">
                Lorem ipsum dolor sit amet, consectetur adipisicing.
            </p>
        </div>
        <div>
            <img class="w-50 mx-auto ml-9 aos-item ms-w-100 md-w-100"
                src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" data-aos="zoom-in-up" alt=""
                data-aos-duration="1500">
        </div>
    </div>

    <hr>
    <div class="div-li mt-4 mobil-p-2 ms-m-t-1">
        <div class="txt-50 fw-2 ms-m-t-1">
            Avis &amp; Recommandations
        </div>
    </div>
    <div class="avis-container mt-4 swiper mb-2 ms-m-t-1">
        <div class="swiper-wrapper">
            <div class="avis-card swiper-slide">
                <div class="symb"> <i class="fa-solid fa-quote-right"></i></div>

                <div class="user-infos">

                    <div class="image">
                        <img src="{{ asset('storage/images/user.png') }}"alt="">
                    </div>
                    <div class="user-info">
                        <span class="full-name">Joe Rully</span>
                        <span class="profession">UI Desiner</span>
                    </div>
                </div>
                <div class="notes">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="message">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla minima suscipit omnis,
                    ducimus
                    corrupti esse.
                </div>

            </div>
            <div class="avis-card swiper-slide">
                <div class="symb"> <i class="fa-solid fa-quote-right"></i></div>

                <div class="user-infos">

                    <div class="image">
                        <img src="{{ asset('storage/images/user.png') }}" alt="">
                    </div>
                    <div class="user-info">
                        <span class="full-name">Andrew A</span>
                        <span class="profession">Custumer</span>
                    </div>
                </div>
                <div class="notes">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="message">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla minima suscipit omnis,
                    ducimus
                    corrupti esse.
                </div>

            </div>
            <div class=" swiper-slide avis-card">
                <div class="symb"> <i class="fa-solid fa-quote-right"></i></div>

                <div class="user-infos">

                    <div class="image">
                        <img src="{{ asset('storage/images/user.png') }}" alt="">
                    </div>
                    <div class="user-info">
                        <span class="full-name">July Ewette</span>
                        <span class="profession">Community manager</span>
                    </div>
                </div>
                <div class="notes">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="message">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla minima suscipit omnis,
                    ducimus
                    corrupti esse.
                </div>
            </div>
            <div class=" swiper-slide avis-card">
                <div class="more-view">
                    <div class="more-link">
                        <a href="">More comments</a>
                    </div>
                </div>
            </div>



        </div>
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

    <hr>
    <div class="div-li mt-4 ms-m-t-1">
        <div class="txt-50 fw-2 mt-2 mobil-p-2">
            L'équipe dont vous avez besoin
        </div>
    </div>

    <div class="div-li p-2 mx-auto li-w30 team-container mb-2">
        <figure class="snip1445  mx-auto">
            <img src="{{ asset('storage/images/img-01.jpg') }}" alt="sample84" />
            <figcaption>
                <div>
                    <h2>Hanson Deck</h2>
                    <h4>web Designer</h4>
                </div>
            </figcaption>
            <a href="#"></a>
        </figure>
        <figure class="snip1445  mx-auto"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample21.jpg"
                alt="sample21" />
            <figcaption>
                <div>
                    <h2>Fleece Marigold</h2>
                    <h4>Community Manager</h4>
                </div>
            </figcaption>
            <a href="#"></a>
        </figure>
        <figure class="snip1445  mx-auto"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample51.jpg"
                alt="sample51" />
            <figcaption>
                <div>
                    <h2>Malcolm Tacson</h2>
                    <h4>Web Developper</h4>
                </div>
            </figcaption>
            <a href="#"></a>
        </figure>

        <figure class="snip1445 mx-auto">
            <img src="{{ asset('storage/images/img-01.jpg') }}" alt="sample84" />
            <figcaption>
                <div>
                    <h2>Hanson Deck</h2>
                    <h4>UI Designer</h4>
                </div>
            </figcaption>
            <a href="#"></a>
        </figure>
        <figure class="snip1445 mx-auto"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample21.jpg"
                alt="sample21" />
            <figcaption>
                <div>
                    <h2>Fleece Marigold</h2>
                    <h4>Web Designer</h4>
                </div>
            </figcaption>
            <a href="#"></a>
        </figure>
        <figure class="snip1445 mx-auto"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample51.jpg"
                alt="sample51" />
            <figcaption>
                <div>
                    <h2>Malcolm</h2>
                    <h4>Function</h4>
                </div>
            </figcaption>
            <a href="#"></a>
        </figure>
    </div>

    <hr>

    <div class="div-li mt-4 ms-m-t-1">
        <div class="txt-50 fw-2 mt-2 ms-m-t-1 mobil-p-2">
            Laissez-nous un message...
        </div>
    </div>
    <div class="div-li p-2 mt-2 ms-m-t-1">
        <form action="d.p" method="post">
            <div class="input-container mx-auto">

                <div class="styled-input wide">
                    <input type="text" required />
                    <label><i class="fa-regular fa-user" style="color: #9e9e9e;"></i> Name</label>
                </div>


                <div class="styled-input w-60 input-mail">
                    <input type="text" required />
                    <label><i class="fa-solid fa-at" style="color: #9e9e9e;"></i> Email</label>
                </div>

                <div class="styled-input w-40 input-tel" style="float:right;">
                    <input type="text" required />
                    <label><i class="fa-solid fa-phone" style="color: #9e9e9e;"></i> Phone Number</label>
                </div>

                <div class="styled-input wide">
                    <textarea required></textarea>
                    <label><i class="fa-solid fa-message" style="color: #9e9e9e;"></i> Message </label>
                </div>


                <button class="btn-lrg  float-right  btn_blue--primary border-radius btn">Send Message <i
                        class="fa-sharp fa-solid fa-paper-plane" style="color: #ffff;"></i></button>

            </div>
        </form>
    </div>


    </div>
@endsection
@section('footer')
    @include('partials.footer')
@endsection

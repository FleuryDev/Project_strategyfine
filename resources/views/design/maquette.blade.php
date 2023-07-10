@extends('layouts.page_index')
@section('header')
    @include('partials.header')
@endsection
@section('mobilenav')
    @include('partials.mobilenav')
@endsection
@section('content')
    <div class="sf-dflex sf-flex-col sf-mx-auto sf-mt-xs-1 sf-mt-lg-3 sf-pl-md-8 sf-pr-md-8 sf-pl-lg-0 sf-pr-lg-0 mx-auto">
        <div class="sf-dgrid sf-pt-md-3">
            <div class="sf-fw-6 sf-p-xs-2 sf-p-md-0 sf-fs-3 text-left sf-mx-auto-SM aos-item" data-aos="fade-up"
                data-aos-duration="1500">
                Maquette de site.
            </div>

        </div>
        <div class="sf-dflex sf-mt-lg-3 fs-2">
            <div class="sf-w-xs-0 sf-w-md-2 sf-w-lg-4  sf-p-xs-0 sf-pl-md-1"></div>
            <div class="sf-fs-md-2 sf-ml-xs-0 sf-ml-md-5 sf-ml-9 aos-item sf-ml-4 sf-p-xs-2 sf-p-md-2 sf-pt-xs-0 sf-pt-md-2 sf-p-lg-0 sf-w-xs-12 sf-w-md-11 sf-w-lg-8 sf-mx-auto-SM"
                data-aos="zoom" data-aos-duration="1500" data-aos-delay="1000">
                Choisisez l'option qui vous convient, et reçevez des contenus de qualité dans les délais !
            </div>
        </div>
        <div class="sf-dflex sf-fw-6 sf-mt-xs-3 sf-mt-lg-6 sf-fs-2  sf-pl-xs-3 sf-pl-md-0">
            Pr&ecirc;t et à vendre
        </div>
        <div class="swiper sf-w-xs-10 sf-w-sm-12 sf-w-md-10  sf-w-lg-12 sf-mx-auto sf-mt-6" style=" height: auto;">
            <div class="swiper-wrapper sf-w-12 sf-dgrid ">
                <div class="sf-br-1 sf-dflex sf-flex-col  sf-mx-auto sf-p-1 swiper-slide effet-opacity-1"
                    style="background-color: #d6cece;">
                    <div class="sf-fs-2 sf-fw-6 text-center sf-mt-1">
                        <h5>Thematique</h5>
                    </div>
                    <div class="sf-mx-auto sf-br-1 sf-mt-2 sf-dgrid thumb-img-container" style="background-color: white;">
                        <img src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" class="thumb-img sf-br-1"
                            loading="lazy" />
                        <div class="swiper-lazy-preloader"></div>
                        <div class="thumb-img-description ">
                            <div>
                                <h1>Element </h1>
                                <span>Description</span>
                            </div>
                        </div>
                    </div>
                    <div class="sf-btn sf-btn-bg-bprimary sf-mx-auto sf-p-1 sf-br-2 sf-mt-2">
                        Je veux <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
                <div class="sf-br-1 sf-dflex sf-flex-col  sf-mx-auto sf-p-1 swiper-slide effet-opacity-0"
                    style="background-color: #d6cece;">
                    <div class="sf-fs-2 sf-fw-6 text-center sf-mt-1">
                        <h5>Thematique</h5>
                    </div>
                    <div class="sf-mx-auto sf-br-1 sf-mt-2 sf-dgrid thumb-img-container" style="background-color: white;">
                        <img src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" class="thumb-img sf-br-1"
                            loading="lazy" />
                        <div class="swiper-lazy-preloader"></div>
                        <div class="thumb-img-description ">
                            <div>
                                <h1>Element </h1>
                                <span>Description</span>
                            </div>
                        </div>
                    </div>
                    <div class="sf-btn sf-btn-bg-bprimary sf-mx-auto sf-p-1 sf-br-2 sf-mt-2">
                        Je veux <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
                <div class="sf-br-1 sf-dflex sf-flex-col  sf-mx-auto sf-p-1 swiper-slide effet-opacity-1"
                    style="background-color: #d6cece;">
                    <div class="sf-fs-2 sf-fw-6 text-center sf-mt-1">
                        <h5>Thematique</h5>
                    </div>
                    <div class="sf-mx-auto sf-br-1 sf-mt-2 sf-dgrid thumb-img-container" style="background-color: white;">
                        <img src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" class="thumb-img sf-br-1"
                            loading="lazy" />
                        <div class="swiper-lazy-preloader"></div>
                        <div class="thumb-img-description ">
                            <div>
                                <h1>Element </h1>
                                <span>Description</span>
                            </div>
                        </div>
                    </div>
                    <div class="sf-btn sf-btn-bg-bprimary sf-mx-auto sf-p-1 sf-br-2 sf-mt-2">
                        Je veux <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
                <div class="sf-br-1 sf-dflex sf-flex-col  sf-mx-auto sf-p-1 swiper-slide effet-opacity-0"
                    style="background-color: #d6cece;">
                    <div class="sf-fs-2 sf-fw-6 text-center sf-mt-1">
                        <h5>Thematique</h5>
                    </div>
                    <div class="sf-mx-auto sf-br-1 sf-mt-2 sf-dgrid thumb-img-container" style="background-color: white;">
                        <img src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" class="thumb-img sf-br-1"
                            loading="lazy" />
                        <div class="swiper-lazy-preloader"></div>
                        <div class="thumb-img-description ">
                            <div>
                                <h1>Element </h1>
                                <span>Description</span>
                            </div>
                        </div>
                    </div>
                    <div class="sf-btn sf-btn-bg-bprimary sf-mx-auto sf-p-1 sf-br-2 sf-mt-2">
                        Je veux <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
                <div class="sf-br-1 sf-dflex sf-flex-col  sf-mx-auto sf-p-1 swiper-slide effet-opacity-0"
                    style="background-color: #d6cece;">
                    <div class="sf-fs-2 sf-fw-6 text-center sf-mt-1">
                        <h5>Thematique</h5>
                    </div>
                    <div class="sf-mx-auto sf-br-1 sf-mt-2 sf-dgrid thumb-img-container" style="background-color: white;">
                        <img src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" class="thumb-img sf-br-1"
                            loading="lazy" />
                        <div class="swiper-lazy-preloader"></div>
                        <div class="thumb-img-description ">
                            <div>
                                <h1>Element </h1>
                                <span>Description</span>
                            </div>
                        </div>
                    </div>
                    <div class="sf-btn sf-btn-bg-bprimary sf-mx-auto sf-p-1 sf-br-2 sf-mt-2">
                        Je veux <i class="fa-regular fa-heart"></i>
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

        <div class="sf-btn sf-p-1 sf-mx-auto sf-mt-4 sf-mb-4 sf-btn-bg-bprimary sf-br-1"><a
                class="sf-fw-6 sf-btn-bg-bprimary" style="text-decoration: none;" href="">Voir plus de
                contenu</a></div>

        <hr>
        <div class="sf-fs-2 sf-fw-6 sf-mt-6 sf-pl-xs-3 sf-pl-md-0">Ce que vous voulez</div>
        <div id="logo"
            class="sf-box_shadox-1 sf-w-xs-11 sf-w-md-9 sf-p-2 sf-mt-6 sf-mx-auto-MD sf-translateX-lg-3 sf-ml-lg-2 sf-brtr-4 sf-brbl-4"
            style="background-color: #d6cece;">
            <div class="sf-fs-2 sf-fw-6 sf-mt-2">Logo</div>
            <div class=" sf-ml-xs-0 sf-ml-md-5 sf-p-1 sf-mt-2 sf-fw-xs-6 sf-fw-md-5" style="background-color:white;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia aspernatur sed tempora. Ab id
                quos eius aut animi voluptates vero eveniet quam. Ex vero illum possimus doloremque! Et, culpa
                explicabo!
            </div>
            <div class="sf-fs-2 sf-fw-12">
                <div class="sf-dflex">
                    <div
                        class="sf-btn sf-mx-auto-SM  sf-translateX-md-5 sf-translateX-lg-10   sf-fw-6 sf-p-md-1 text-center sf-br-1 sf-mt-2 sf-w-md-8 sf-w-lg-6 sf-btn-bg-gsecondary">
                        Tarif
                        :
                        1
                        &euro; / 100
                        mots</div>
                </div>
                <div class="  text-center  sf-mt-2 sf-translateX-md-4  ">
                    <a class="sf-btn sf-btn-bg-bprimary sf-br-1   sf-mr-lg-0" style="  text-decoration: none;"
                        href="">Je commande</a>
                </div>
            </div>



        </div>
        <div id="charte" class="sf-box_shadox-1 sf-w-xs-11 sf-w-md-9 sf-p-2 sf-mt-6 sf-mx-auto-MD sf-brtr-4 sf-brbl-4"
            style="background-color: #d6cece;">
            <div class="sf-fs-2 sf-fw-6 sf-mt-2">Charte Graphique</div>
            <div class=" sf-ml-xs-0 sf-ml-md-5 sf-p-1 sf-mt-2 sf-fw-xs-6 sf-fw-md-5" style="background-color:white;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia aspernatur sed tempora. Ab id
                quos eius aut animi voluptates vero eveniet quam. Ex vero illum possimus doloremque! Et, culpa
                explicabo!
            </div>
            <div class="sf-fs-2 sf-fw-12">
                <div class="sf-dflex">
                    <div
                        class="sf-btn sf-mx-auto-SM  sf-translateX-md-5 sf-translateX-lg-10   sf-fw-6 sf-p-md-1 text-center sf-br-1 sf-mt-2 sf-w-md-8 sf-w-lg-6 sf-btn-bg-gsecondary">
                        Tarif
                        :
                        3
                        &euro; / 100
                        mots</div>
                </div>
                <div class="  text-center  sf-mt-2 sf-translateX-md-4  ">
                    <a class="sf-btn sf-btn-bg-bprimary sf-br-1   sf-mr-lg-0" style="  text-decoration: none;"
                        href="">Je commande</a>
                </div>
            </div>



        </div>

        <div id="affiche"
            class="sf-box_shadox-1 sf-w-xs-11 sf-w-md-9 sf-p-2 sf-mt-6 sf-mx-auto-MD sf-translateX-lg-3 sf-ml-lg-2 sf-brtr-4 sf-brbl-4"
            style="background-color: #d6cece;">
            <div class="sf-fs-2 sf-fw-6 sf-mt-2">Affiches</div>
            <div class=" sf-ml-xs-0 sf-ml-md-5 sf-p-1 sf-mt-2 sf-fw-xs-6 sf-fw-md-5" style="background-color:white;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia aspernatur sed tempora. Ab id
                quos eius aut animi voluptates vero eveniet quam. Ex vero illum possimus doloremque! Et, culpa
                explicabo!
            </div>
            <div class="sf-fs-2 sf-fw-12">
                <div class="sf-dflex">
                    <div
                        class="sf-btn sf-mx-auto-SM  sf-translateX-md-5 sf-translateX-lg-10   sf-fw-6 sf-p-md-1 text-center sf-br-1 sf-mt-2 sf-w-md-8 sf-w-lg-6 sf-btn-bg-gsecondary">
                        Tarif
                        :
                        6
                        &euro; / 100
                        mots</div>
                </div>
                <div class="  text-center  sf-mt-2 sf-translateX-md-4  ">
                    <a class="sf-btn sf-btn-bg-bprimary sf-br-1   sf-mr-lg-0" style="  text-decoration: none;"
                        href="">Je commande</a>
                </div>
            </div>


        </div>
        <div id="carousel" class="sf-box_shadox-1 sf-w-xs-11 sf-w-md-9 sf-p-2 sf-mt-6 sf-mx-auto-MD  sf-brtr-4 sf-brbl-4"
            style="background-color: #d6cece;">
            <div class="sf-fs-2 sf-fw-6 sf-mt-2">Carousel</div>
            <div class=" sf-ml-xs-0 sf-ml-md-5 sf-p-1 sf-mt-2 sf-fw-xs-6 sf-fw-md-5" style="background-color:white;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia aspernatur sed tempora. Ab id
                quos eius aut animi voluptates vero eveniet quam. Ex vero illum possimus doloremque! Et, culpa
                explicabo!
            </div>
            <div class="sf-fs-2 sf-fw-12">
                <div class="sf-dflex">
                    <div
                        class="sf-btn sf-mx-auto-SM  sf-translateX-md-5 sf-translateX-lg-10   sf-fw-6 sf-p-md-1 text-center sf-br-1 sf-mt-2 sf-w-md-8 sf-w-lg-6 sf-btn-bg-gsecondary">
                        Tarif
                        :
                        6
                        &euro; / 100
                        mots</div>
                </div>
                <div class="  text-center  sf-mt-2 sf-translateX-md-4  ">
                    <a class="sf-btn sf-btn-bg-bprimary sf-br-1   sf-mr-lg-0" style="  text-decoration: none;"
                        href="">Je commande</a>
                </div>
            </div>


        </div>


        <div class="sf-fs-2 sf-fw-6 sf-mt-6 sf-pl-xs-3 sf-pl-lg-0">Les options supplémentaires</div>
        <div class="sf-fw-6 sf-p-2 sf-fs-1 sf-pl-xs-3 sf-pl-lg-0">
            <ul class="sf-pl-xs-3 sf-pl-md-5 sf-pl-lg-8">
                <li>Meta-descriptions</li>
                <li>Images libres de droit</li>
            </ul>
        </div>
        <hr class="sf-mt-xs-3 sf-mt-md-5 sf-mt-lg-9">

        <div class="sf-dflex sf-mt-xs-1 sf-mt-lg-6 sf-mb-5 sf-mx-auto" data-aos="fade-up" data-aos-duration="1500">
            <div class="sf-dflex sf-w-12 sf-mx-auto">
                <div class="sf-w-12 sf-mt-xs-0 sf-mt-md-1 sf-mt-3 sf-fs-2 sf-fw-6 sf-p-xs-2 sf-p-lg-0 sf-mx-auto">
                    <span>Pourquoi le développement web et mobile pour votre entreprise de nos jours ?</span>
                </div>
                <div class="sf-mt-xs-0 sf-mt-md-1 sf-mt-3 sf-mx-auto">
                    <div class="sf-mt-xs-0 sf-mt-md-1 sf-p-xs-2 sf-p-md-1 sf-p-lg-0 sf-mx-auto" style="font-size:large;">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem ullam temporibus
                        similique? Facilis hic natus rerum sequi fugiat vero obcaecati tempora, corporis
                        temporibus blanditiis possimus esse! Dolorem veritatis illum, non ad porro temporibus,
                        totam pariatur facere quis neque numquam exercitationem aperiam! Quam illum repellendus
                        numquam, ut temporibus iusto quod repellat pariatur alias, animi aperiam commodi
                        mollitia enim maiores est! Repellat nam illum voluptatem, assumenda voluptates
                        exercitationem laborum eveniet. Rerum nobis laboriosam veritatis dicta. Similique
                        voluptatum at necessitatibus amet qui! Eligendi, vitae aliquid! Quas illo aliquid
                        sapiente alias, amet reiciendis voluptatum neque tempora libero, officiis fugit, nemo
                        doloribus cumque hic eum totam in eveniet modi recusandae provident sint id. Ex,
                        accusantium nisi iste reiciendis perspiciatis et similique vel sequi ut error fuga
                        blanditiis non vitae obcaecati temporibus voluptate quo, ad consequuntur fugiat
                        reprehenderit magnam eaque! Dolorem officia sint soluta totam ut dolorum accusantium id
                        vel perspiciatis, tempore pariatur quam natus cupiditate quod fuga quasi sed numquam
                        dolor repellat unde quia ullam laudantium deserunt architecto. Explicabo, quo! Suscipit
                        molestiae, laudantium quaerat fuga ab a amet alias harum dignissimos, praesentium dolor
                        facere quo aperiam nulla omnis facilis eaque totam. Explicabo corrupti iure recusandae
                        dolorum cumque possimus nostrum? Iste exercitationem quas modi porro. Error illo ipsa id
                        assumenda eligendi sequi animi numquam, quisquam quos. Voluptates ea in eos velit
                        distinctio! Consequatur beatae, provident iste assumenda placeat veniam possimus, nulla
                        ipsa fuga officia est doloremque sequi aliquid nostrum fugit eius accusantium, ipsum
                        soluta? Dignissimos omnis minus et placeat inventore harum, possimus quam quibusdam sit
                        laborum eligendi cumque voluptate aperiam soluta! Deserunt laborum consequatur
                        recusandae cum molestias, dolorum nemo nam tenetur ipsa vel omnis esse enim alias
                        officiis nobis culpa facilis, doloremque beatae nihil modi sapiente, expedita dolor
                        adipisci? Fugiat consectetur necessitatibus tempora neque ea autem adipisci cumque,
                        perspiciatis quas qui temporibus ipsum doloribus cum dignissimos exercitationem eos
                        blanditiis similique nam dolor. Repellendus ab magnam minima libero voluptas ea
                        molestias velit, ipsam amet quis! Autem illum odit aspernatur fugiat cumque, quibusdam
                        hic consectetur? Veniam provident id suscipit eos esse cupiditate ad odit, dolorem eius
                        minima iusto qui impedit omnis quod in tempora consequuntur voluptates ratione fuga
                        culpa repellendus autem? Harum enim dolore, voluptatum modi unde laudantium illo in
                        fugiat excepturi iusto incidunt inventore veritatis odio, cumque recusandae. Dolor,
                        ullam? Quaerat recusandae ab molestiae laudantium. Tenetur asperiores dolorem, ea quia
                        delectus quaerat odio vitae maiores nihil dolorum! Eveniet corporis facere nam amet
                        adipisci ipsa excepturi. Impedit, maxime placeat! Temporibus blanditiis tenetur id
                        cupiditate quia, velit unde neque, consectetur laborum maxime quam praesentium tempore
                        reiciendis magnam eos quod totam rem voluptatum beatae doloremque, placeat sunt natus ut
                        incidunt? Corporis doloremque blanditiis similique quidem, nemo quisquam nam voluptatum
                        consequuntur beatae consectetur, aut totam alias nobis suscipit sunt facilis. Nesciunt
                        vero, enim inventore expedita laudantium laborum perspiciatis totam neque pariatur
                        dolore tenetur ut vitae delectus quia quos a excepturi rem voluptatum maiores.
                        Accusantium ipsum temporibus dolor earum necessitatibus atque suscipit! Similique illo
                        ullam nam voluptas sit natus aut iusto neque minima quidem! Ab tempora et voluptas quia
                        quaerat assumenda labore?
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('footer')
    @include('partials.footer')
@endsection

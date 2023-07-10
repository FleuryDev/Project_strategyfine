@extends('layouts.page_index')
@section('header')
    @include('partials.header')
@endsection
@section('mobilenav')
    @include('partials.mobilenav')
@endsection
@section('content')
    <div class="sf-dflex sf-flex-col sf-mx-auto sf-mt-3 ">
        <div class="sf-dgrid sf-pt-xs-0 sf-pt-md-3">
            <div class="sf-fw-6  sf-fs-xs-2 sf-fs-md-3 sf-pl-xs-2 sf-pr-xs-2 sf-pl-sm-6 sf-pr-sm-6 sf-pl-md-2 sf-pr-md-2  sf-pl-lg-0 sf-pr-lg-0 text-left sf-w-xs-12 sf-w-md-10 aos-item"
                data-aos="fade-up" data-aos-duration="1500">
                Ensemble, réalisons votre
                projet Web, votre
                immagination
            </div>

        </div>
        <div class=" sf-mt-5 fs-2">
            <div class="sf-fs-sm-2 text-center sf-pl-sm-4 sf-pr-sm-4 sf-p-md-0 sf-p-md-0 mx-auto aos-item" data-aos="zoom"
                data-aos-duration="1500" data-aos-delay="1000">
                Faites le pas maintenant pour prendre ce dont vous avez besoin.
            </div>
        </div>
        <div class="sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2  sf-mt-6" data-aos="fade-up"
            data-aos-duration="1500" data-aos-delay="1500">
            <div class="sf-w-12 sf-w-lg-7">
                <div
                    class="bg-green-secondary sf-w-xs-12 sf-w-lg-6 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  text-center sf-p-1">
                    <span>Notre
                        vision</span>
                </div>
                <div class="my-auto sf-mt-3">
                    <div class="mt-5 sf-my-auto" style="font-size:normal;">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor fugiat, illum deserunt
                        perspiciatis autem soluta non molestiae culpa nobis natus, nostrum odio, fugit pariatur
                        sapiente aperiam omnis ad consequatur quam quibusdam. Quibusdam voluptate ullam odio
                        corporis accusantium voluptates nostrum temporibus, atque vero quo quaerat, quidem
                        voluptatibus! Pariatur, repellat. Nobis, vel.
                    </div>
                </div>
            </div>
            <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-5 mx-auto">
                <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-w-lg-12 sf-mx-auto"
                    src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">
            </div>
        </div>

        <div class="sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2 sf-mt-6" data-aos="fade-up"
            data-aos-duration="1200">
            <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-5 order-MD-2 mx-auto">
                <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-mx-auto sf-mt-xs-4 sf-w-lg-12 sf-mt-lg-0"
                    src="{{ asset('storage/images/IMG-20230607-WA0012.jpg') }}" alt="">
            </div>
            <div class="order-MD-1 sf-w-lg-7">
                <div class=" bg-blue-secondary sf-w-xs-12 sf-w-5 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  text-center sf-p-1">
                    <span>Engagements</span>
                </div>
                <div class=" my-auto sf-mt-3">
                    <div class=" mt-5 sf-my-auto text-justify" style="font-size:normal;">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor fugiat, illum deserunt
                        perspiciatis autem soluta non molestiae culpa nobis natus, nostrum odio, fugit pariatur
                        sapiente aperiam omnis ad consequatur quam quibusdam. Quibusdam voluptate ullam odio
                        corporis accusantium voluptates nostrum temporibus, atque vero quo quaerat, quidem
                        voluptatibus! Pariatur, repellat. Nobis, vel.
                    </div>
                </div>
            </div>

        </div>
        <div class="sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2 sf-mt-6" data-aos="fade-up"
            data-aos-duration="1500" data-aos-delay="1500">
            <div class="sf-w-12 sf-w-lg-7">
                <div
                    class="bg-green-secondary sf-w-xs-12 sf-w-lg-5 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  text-center sf-p-1">
                    <span>Satisfaction</span>
                </div>
                <div class="my-auto sf-mt-3">
                    <div class="mt-5 sf-my-auto" style="font-size:normal;">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor fugiat, illum deserunt
                        perspiciatis autem soluta non molestiae culpa nobis natus, nostrum odio, fugit pariatur
                        sapiente aperiam omnis ad consequatur quam quibusdam. Quibusdam voluptate ullam odio
                        corporis accusantium voluptates nostrum temporibus, atque vero quo quaerat, quidem
                        voluptatibus! Pariatur, repellat. Nobis, vel.
                    </div>
                </div>
            </div>
            <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-5 mx-auto">
                <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-mx-auto sf-w-lg-12"
                    src="{{ asset('storage/images/IMG-20230607-WA0011.jpg') }}" alt="">
            </div>
        </div>

        <div class="sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2 sf-mt-6" data-aos="fade-up"
            data-aos-duration="1200">
            <div class="sf-dflex sf-w-xs-11 sf-w-md-8 sf-w-lg-5 order-MD-2 sf-mx-auto">
                <img class="img-fluid sf-w-xs-10 sf-w-sm-8 sf-mx-auto sf-mt-xs-4 sf-w-lg-12 sf-mt-lg-0"
                    src="{{ asset('storage/images/IMG-20230607-WA0012.jpg') }}" alt="">
            </div>
            <div class="order-MD-1 sf-w-lg-7">
                <div class=" bg-blue-secondary sf-w-xs-12 sf-w-5 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  text-center sf-p-1">
                    <span>Relations clients</span>
                </div>
                <div class=" my-auto sf-mt-3">
                    <div class=" mt-5 sf-my-auto text-justify" style="font-size:normal;">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor fugiat, illum deserunt
                        perspiciatis autem soluta non molestiae culpa nobis natus, nostrum odio, fugit pariatur
                        sapiente aperiam omnis ad consequatur quam quibusdam. Quibusdam voluptate ullam odio
                        corporis accusantium voluptates nostrum temporibus, atque vero quo quaerat, quidem
                        voluptatibus! Pariatur, repellat. Nobis, vel.
                    </div>
                </div>
            </div>

        </div>
        <div class="sf-dflex sf-ml-sm-6 sf-mr-sm-6 sf-ml-md-2 sf-mr-md-2 sf-mt-6" data-aos="fade-up"
            data-aos-duration="1500" data-aos-delay="1500">
            <div class="sf-w-12 sf-w-lg-7">
                <div
                    class="bg-green-secondary sf-w-xs-12 sf-w-lg-12 sf-mt-3 sf-fs-2 sf-fw-6 border-radius  text-center sf-p-1">
                    <span>Vous accompagne tout au long du processus</span>
                </div>
                <div class="my-auto sf-mt-3">
                    <div class="mt-5 sf-my-auto" style="font-size:normal;">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor fugiat, illum deserunt
                        perspiciatis autem soluta non molestiae culpa nobis natus, nostrum odio, fugit pariatur
                        sapiente aperiam omnis ad consequatur quam quibusdam. Quibusdam voluptate ullam odio
                        corporis accusantium voluptates nostrum temporibus, atque vero quo quaerat, quidem
                        voluptatibus! Pariatur, repellat. Nobis, vel.
                    </div>
                </div>
            </div>
            <div class="sf-dflex sf-w-xs-11 sf-w-md-8  sf-w-lg-5 mx-auto ">
                <img class="img-fluid sf-w-xs-10 sf-w-sm-8  sf-w-lg-12 sf-mx-auto"
                    src="{{ asset('storage/images/IMG-20230607-WA0012.jpg') }}" alt="">
            </div>
        </div>
        <hr>

        <div class="sf-dflex sf-mt-xs-6 sf-mt-lg-6 sf-mb-5 sf-p-sm-4  sf-p-md-0  sf-mx-auto" data-aos="fade-up"
            data-aos-duration="1500">
            <div class="sf-w-12 sf-mx-auto">
                <div class="sf-w-12 sf-mt-xs-0 sf-mt-md-1 sf-mt-3 sf-fs-2 sf-fw-6 sf-p-xs-2 sf-p-md-0 ">
                    <span>Pourquoi le développement web et mobile pour votre entreprise de nos jours ?</span>
                </div>
                <div class="sf-mt-xs-0 sf-mt-md-1 sf-mt-3 sf-mx-auto">
                    <div class="sf-mt-xs-0 sf-mt-md-1 sf-p-xs-2 sf-p-md-1 sf-p-lg-0 sf-mx-auto" style="font-size:normal;">
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

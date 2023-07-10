<header class="stg-header-container">
    <div class="header-elms fs8">

        <!-- <img src="img/Stratégy-FineACCl_-_copie_1-removebg-preview.png" alt="" class="logo"> -->
        <a href="{{ route('home') }}" class="my-auto"><img src="{{ asset('storage/images/Strategy.svg') }}"
                alt="Logo Strategyfine" title="Strategyfine logo" class="logo"></a>


        <div class="stg-service">
            <ul class="">
                <li><a class="xElm" href="{{ route('developpement') }}">Développement </a>
                    <ul class="sous-service s1 stg-hover">
                        <li><a href="{{ route('refonte') }}"> Refonte de site</a>
                        </li>
                        <li><a href="{{ route('site') }}">Sites web</a></li>
                        <li><a href="{{ route('ecommerce') }}"> Sites E-commerces</a></li>
                        <li><a href="{{ route('applis') }}"> Applications Mobiles</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="stg-service">
            <ul>
                <li><a class="xElm" href="{{ route('ref') }}">Référencement </a>
                    <ul class="sous-service s1 stg-hover">
                        <li><a href="{{ route('refSeo') }}"> Référencement SEO</a>
                        </li>
                        <li><a href="{{ route('refSea') }}"> Référencement SEA</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="stg-service">
            <ul>
                <li><a class="xElm" href="{{ route('design') }}">Design UI/UX </a>
                    <ul class="sous-service s1 stg-hover">
                        <li><a href="{{ route('maquette') }}">Maquette de site</a>
                        </li>

                        <li><a class="xElm" href="{{ route('designGraphique') }}"> Design Graphique </a>
                            <ul class="sous-service sst txt-nowrap stg-hover">
                                <li><a href="{{ route('designGraphique') }}#logo"> Logo</a></li>
                                <li><a href="{{ route('designGraphique') }}#charte">Charte Graphique</a></li>
                                <li><a href="{{ route('designGraphique') }}#affiche">Affiche</a></li>
                                <li><a href="{{ route('designGraphique') }}#carousel">Carousel</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="stg-service txt-nowrap">
            <ul>
                <li><a class="xElm" href="{{ route('strategie') }}">Stratégie de contenu </a>
                    <ul class="sous-service s1 stg-hover">
                        <li><a href="{{ route('reseaux') }}"> Gestion des réseaux sociaux </a>
                            <!-- <ul class="sous-service  txt-nowrap sst stg-hover">
                                <li><a href="">1 post par semaine </a></li>
                                <li><a href=""> 3 posts par semaine</a></li>
                                <li><a href=""> 5 posts par semaine</a></li>
                                <li><a href=""> 7 posts par semaine</a></li>
                            </ul> -->
                        </li>

                        <li><a href="{{ route('video') }}">Montage vidéo</a></li>
                        <li><a class="xElm" href="{{ route('strategieSEO') }}"> Rédaction web SEO </a>
                            <ul class="sous-service sst txt-nowrap stg-hover">
                                <li><a href="{{ route('strategieSEO') }}#simple"> Rédaction simple</a></li>
                                <li><a href="{{ route('strategieSEO') }}#optimise"> Rédaction optimisé SEO</a></li>
                                <li><a href="{{ route('strategieSEO') }}#copy"> Rédaction premium/copywrighting</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="stg-service">
            <ul>
                <li><a class="xElm" href="">Blog </a></li>
            </ul>
        </div>
        <div class="search-bar">
            <form action="" method="get">
                <input type="search" name="" id="inputMD" placeholder="Search" value="" title="">
                <button type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #868080;"></i></button>
            </form>
        </div>
        <button id="nav" class="md-btn-nav" type="button"><i class="fa-solid fa-bars"></i></button>
    </div>
</header>

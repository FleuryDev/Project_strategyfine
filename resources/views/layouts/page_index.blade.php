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
    <style>
        .swiper-wrapper {
            position: relative;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 2rem !important;
            justify-content: space-between;
            justify-items: stretch;
            align-items: center;

        }
    </style>
</head>

<body>
    <div class="sf-loader">
        <img src="{{ asset('storage/images/Stratégy-FineACCl_-_copie_1-removebg-preview.png') }}" alt="Strategyfine">
        <div class="custom-loader"></div>
    </div>
    <main class="stg-container sf-mx-auto" id="top">
        <!-- HEADER HERE -->
        @yield('header')
        <div
            class="stg-body sf-ml-xs-0 sf-mr-xs-0 sf-pl-xs-0 sf-pr-xs-0 sf-ml-lg-7 sf-mr-lg-7 sf-pl-md-8 sf-pr-md-8 sf-pl-lg-9 sf-pr-lg-9 sf-mt-8  sf-mx-auto  sf-px-auto">
            <!-- MOBILE_NAV HERE -->
            @yield('mobilenave')
            <!-- You can update anything here before next setion -->
            <div id="social-sid" class="socialnav my-auto">
                <a href="#" id="facbg"><i class="fa-brands fa-facebook-f fa-beat"
                        style="color: aliceblue;"></i> </a>
                <a href="#" id="in"> <i class="fa-brands fa-linkedin-in fa-beat"></i></a>
                <a href="#" id="inst"><i class="fa-brands fa-square-instagram fa-beat"></i></a>
                <a href="#" id="twt"> <i class="fa-brands fa-twitter fa-beat"></i></a>
            </div>
            @yield('content')
            <!-- You can also update anything here before next setion -->
            <a href="">
                <div id="a-btn" class="btn-circle-devis " data-aos="fade" data-aos-duration="1500">

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
        </div>
    </main>
    <div id="lkTop" class="to-top"><a href="#top"><i class="fa-solid fa-angle-right fa-rotate-270"
                style="color: #52565b;"></i></a>
    </div>
    <!-- FOOTER HERE -->@yield('footer')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
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

            if (scroll_top > window_height) {
                if (!$nav_bar.hasClass('elm-visible')) {
                    $nav_bar.removeClass('elm-invisible')

                    $nav_bar.addClass('elm-visible');
                }
            } else {
                if ($nav_bar.hasClass('elm-invisible')) {
                    $nav_bar.removeClass('elm-visible')

                    $nav_bar.addClass('elm-invisible');

                }
                $nav_bar.removeClass('elm-visible')
                $nav_bar.addClass('elm-invisible');

            };

        });
    </script>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            freeMode: {
                enabled: true,
                sticky: true,
            },
            direction: 'horizontal',
            loop: true,

            slidesPerView: 3,
            spaceBetween: 30,


            autoplay: {
                delay: 5000,
            },


            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // when window width is >= 320px
                100: {
                    slidesPerView: 1,

                },
                540: {
                    slidesPerView: 2,

                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 2,
                },
                // when window width is >= 640px
                992: {
                    slidesPerView: 3,
                }
            }
            // And if we need scrollbar
            //scrollbar: {
            //  el: '.swiper-scrollbar',
            //},
        });
    </script>
</body>

</html>

<!-- FLEURY DEV ON JUIN, 12 2023 AT 11:14 PM  -->
<!-- /* BY FLEURY DEV ON JUIN, 23 2023 AT 00:24 AM  */ -->

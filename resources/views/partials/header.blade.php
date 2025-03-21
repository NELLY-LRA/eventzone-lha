<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventzone - Page d'accueil</title> <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        Personnalisation des couleurs / .btn-primary {
            background-color: #003366;/ Bleu roi / border-color: #FFD700;/ Or /
        }

        .btn-primary:hover {
            background-color: #ffd900dd;/ Or / border-color: #003366;/ Bleu roi /
        }

        .header,
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .map-container {
            height: 400px;/ Hauteur de la carte / background-color: #003366;/ Bleu roi
        }
    </style>


    <head>
        <script>
            if (window.performance && performance.mark) performance.mark("TTP")
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-language" content="en-CM">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="pinterest" content="nosearch">

        <meta name="csrf_nonce"
            content="3:1742153373:8VRmkcBJhUwicROpjj_NsA0eMdeY:b0dd387340453460b1ef7639d11c76180cc9959fbafa16ea44534664e710b996">
        <meta name="uaid_nonce"
            content="3:1742153373:C5kIP5N_pYNmhhnmPa8nn4Hl3P5x:f4073399f76a2221e647c7f702ec478a3a3dc88ebd308ed3c126da65d37dd3ba">

        <meta property="fb:app_id" content="89186614300">

        <meta name="css_dist_path" content="/ac/sasquatch/css/" />
        <meta name="dist" content="202503151742076101" />


        <script nonce="50eZUHlT/j2tfkUxA1ymIAno">
            ! function(e) {
                var r = e.__etsy_logging = {};
                r.errorQueue = [], e.onerror = function(e, o, t, n, s) {
                    r.errorQueue.push([e, o, t, n, s])
                }, r.firedEvents = [];
                r.perf = {
                    e: [],
                    t: !1,
                    MARK_MEASURE_PREFIX: "_etsy_mark_measure_",
                    prefixMarkMeasure: function(e) {
                        return "_etsy_mark_measure_" + e
                    }
                }, e.PerformanceObserver && (r.perf.o = new PerformanceObserver((function(e) {
                    r.perf.e = r.perf.e.concat(e.getEntries())
                })), r.perf.o.observe({
                    entryTypes: ["element", "navigation", "longtask", "paint", "mark", "measure", "resource",
                        "layout-shift"
                    ]
                }));
                var o = [];
                r.eventpipe = {
                    q: o,
                    logEvent: function(e) {
                        o.push(e)
                    },
                    logEventImmediately: function(e) {
                        o.push(e)
                    }
                };
                var t = !(Object.assign && Object.values && Object.fromEntries && e.Promise && Promise.prototype.finally && e
                        .NodeList && NodeList.prototype.forEach),
                    n = !!e.CefSharp || !!e.__pw_resume,
                    s = !e.PerformanceObserver || !PerformanceObserver.supportedEntryTypes || 0 === PerformanceObserver
                    .supportedEntryTypes.length,
                    a = !e.navigator || !e.navigator.sendBeacon,
                    p = t || n,
                    u = [];
                t && u.push("fp"), s && u.push("fo"), a && u.push("fb"), n && u.push("fg"), r.bots = {
                    isBot: p,
                    botCheck: u
                }
            }(window);
        </script>

        <link rel="stylesheet"
            href="https://www.etsy.com/dac/site-chrome/components/components.66f856dee175bb,site-chrome/header/header.66f856dee175bb,__modules__CategoryNav__src__/Views/ButtonMenu/Menu.8d961c48ba074a,__modules__CategoryNav__src__/Views/DropdownMenu/Menu.66f856dee175bb,site-chrome/footer/footer.66f856dee175bb,gdpr/settings-overlay.66f856dee175bb.css?variant=sasquatch"
            type="text/css" />
        <link rel="stylesheet"
            href="https://www.etsy.com/dac/vesta_homepage/vesta_homepage.66f856dee175bb,vesta_homepage/consistent_spacing.66f856dee175bb,homepage/_modules/spacing.66f856dee175bb,__modules__ShoppableHero__src__/View/css/shoppable-hero.bb887c2a38aedb,neu/modules/listing_card.66f856dee175bb,vesta_homepage/view/categories-on-home.66f856dee175bb,vesta_homepage/view/etsy-everyday.66f856dee175bb,vesta_homepage/view/daily-deals.66f856dee175bb,homepage/_modules/complex-grid.66f856dee175bb,homepage/_modules/editors-picks.66f856dee175bb,neu/modules/favorite_button_defaults.66f856dee175bb,listings/listing-card-video.66f856dee175bb,common/listing_card_text_badge.73aa3516d0565d,web-toolkit-v2/modules/video/video_previews.66f856dee175bb,homepage/_modules/common/simple-header.66f856dee175bb,vesta_homepage/view/what-is-etsy.66f856dee175bb,impact/homepage/what-is-etsy/community-impact.66f856dee175bb,web-toolkit-v2/modules/forms/checkboxes.66f856dee175bb,web-toolkit-v2/modules/action_groups/action_groups.66f856dee175bb,favorites/collection/list.66f856dee175bb,favorites/collection/row.66f856dee175bb,favorites/adaptive-height-desktop.66f856dee175bb.css?variant=sasquatch"
            type="text/css" />

        <script>
            function retryLoadingAirgap(loadAsync, attemptNumber) {
                var element = document.createElement("script");
                element.type = "text/javascript";
                element.src = "https://consent-manager.etsystatic.com/cm/ac71e058-41b7-4026-b482-3d9b8e31a6d0/airgap.js";
                if (loadAsync) {
                    element.setAttribute('data-cfasync', true);
                    element.async = true;
                }

                element.onerror = (error) => {
                    if (attemptNumber < 3) {
                        window.__etsy_logging.eventpipe.logEvent({
                            event_name: `transcend_cmp_airgap_preliminary_failure`,
                            airgap_url: 'https://consent-manager.etsystatic.com/cm/ac71e058-41b7-4026-b482-3d9b8e31a6d0/airgap.js',
                            airgap_bundle: 'control_bundle',
                            error: error,
                            retryAttempt: attemptNumber,
                            attemptWasAsyncLoad: loadAsync
                        });
                        retryLoadingAirgap(false, attemptNumber + 1);
                    } else {
                        window.__etsy_logging.eventpipe.logEvent({
                            event_name: `transcend_cmp_airgap_load_failure`,
                            airgap_url: 'https://consent-manager.etsystatic.com/cm/ac71e058-41b7-4026-b482-3d9b8e31a6d0/airgap.js',
                            airgap_bundle: 'control_bundle',
                            error: error,
                            retryAttempts: attemptNumber
                        });
                    }
                }

                var head = document.getElementsByTagName('head')[0];
                head.appendChild(element);
            }

            function handleErrorLoadingAirgap() {
                window.__etsy_logging.eventpipe.logEvent({
                    event_name: `transcend_cmp_airgap_preliminary_failure`,
                    airgap_url: 'https://consent-manager.etsystatic.com/cm/ac71e058-41b7-4026-b482-3d9b8e31a6d0/airgap.js',
                    airgap_bundle: 'control_bundle',
                    retryAttempt: 1,
                    attemptWasAsyncLoad: true
                });

                retryLoadingAirgap(true, 2);
            }
        </script>

        <script data-cfasync="true" data-ui="off"
            src="https://consent-manager.etsystatic.com/cm/ac71e058-41b7-4026-b482-3d9b8e31a6d0/airgap.js"
            onerror="(function() { handleErrorLoadingAirgap(); })()" async></script>



        <title>EventZone</title>
        <meta name="description"
            content="Shop Etsy Cameroon. Find handmade gifts, vintage & on-trend clothes, unique jewelry, and more.">




        <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebSite","url":"https://www.etsy.com/","potentialAction":{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.etsy.com/search?q={search_term_string}&utm_campaign=action_schema_markup"},"query-input":"required name=search_term_string"}}</script>

        <meta property="og:title"
            content="Etsy Cameroon - Shop for handmade, vintage, custom, and unique gifts for everyone" />
        <meta property="og:description"
            content="Shop Etsy Cameroon. Find handmade gifts, vintage & on-trend clothes, unique jewelry, and more." />
        <meta property="og:url" content="http://www.etsy.com/" />


        <meta property="og:type" content="website" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:site_name" content="Etsy" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@Etsy" />





        <link rel="preconnect" href="//i.etsystatic.com" crossorigin="anonymous" />
        <link rel="preconnect" href="//i.etsystatic.com" />


        <link rel="canonical" href="https://www.etsy.com/" />
        <link rel="alternate" href="https://www.etsy.com/" hreflang="en" />
        <link rel="alternate" href="https://www.etsy.com/fi-en/" hreflang="en-FI" />
        <link rel="alternate" href="https://www.etsy.com/au/" hreflang="en-AU" />
        <link rel="alternate" href="https://www.etsy.com/ca/" hreflang="en-CA" />
        <link rel="alternate" href="https://www.etsy.com/dk-en/" hreflang="en-DK" />
        <link rel="alternate" href="https://www.etsy.com/hk-en/" hreflang="en-HK" />
        <link rel="alternate" href="https://www.etsy.com/ie/" hreflang="en-IE" />
        <link rel="alternate" href="https://www.etsy.com/il-en/" hreflang="en-IL" />
        <link rel="alternate" href="https://www.etsy.com/in-en/" hreflang="en-IN" />
        <link rel="alternate" href="https://www.etsy.com/nz/" hreflang="en-NZ" />
        <link rel="alternate" href="https://www.etsy.com/no-en/" hreflang="en-NO" />
        <link rel="alternate" href="https://www.etsy.com/se-en/" hreflang="en-SE" />
        <link rel="alternate" href="https://www.etsy.com/sg-en/" hreflang="en-SG" />
        <link rel="alternate" href="https://www.etsy.com/uk/" hreflang="en-GB" />
        <link rel="alternate" href="https://www.etsy.com/de/" hreflang="de" />
        <link rel="alternate" href="https://www.etsy.com/at/" hreflang="de-AT" />
        <link rel="alternate" href="https://www.etsy.com/ch/" hreflang="de-CH" />
        <link rel="alternate" href="https://www.etsy.com/fr/" hreflang="fr" />
        <link rel="alternate" href="https://www.etsy.com/ca-fr/" hreflang="fr-CA" />
        <link rel="alternate" href="https://www.etsy.com/nl/" hreflang="nl" />
        <link rel="alternate" href="https://www.etsy.com/be/" hreflang="nl-BE" />
        <link rel="alternate" href="https://www.etsy.com/it/" hreflang="it" />
        <link rel="alternate" href="https://www.etsy.com/es/" hreflang="es" />
        <link rel="alternate" href="https://www.etsy.com/mx/" hreflang="es-MX" />
        <link rel="alternate" href="https://www.etsy.com/jp/" hreflang="ja" />
        <link rel="alternate" href="https://www.etsy.com/pl/" hreflang="pl" />
        <link rel="alternate" href="https://www.etsy.com/pt/" hreflang="pt" />
        <link rel="alternate" href="https://www.etsy.com/" hreflang="x-default" />

        <script nonce="50eZUHlT/j2tfkUxA1ymIAno">
            __webpack_public_path__ = "https://www.etsy.com/ac/evergreenVendor/js/en-US/";
        </script>

        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="icon" href="/images/favicon-32x32.png" type="image/png" sizes="32x32" />
        <link rel="icon" href="/images/favicon-16x16.png" type="image/png" sizes="16x16" />
        <link rel="apple-touch-icon" href="/images/apple-touch-icon.png" sizes="180x180" />
        <link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="rgb(241, 100, 30)" />
        <link rel="manifest" href="/site.webmanifest" />
        <meta name="apple-mobile-web-app-title" content="Etsy" />
        <meta name="application-name" content="Etsy" />
        <meta name="msapplication-TileColor" content="#F1641E" />
        <meta name="theme-color" content="rgb(255, 255, 255)" />

        <link type="application/opensearchdescription+xml" rel="search" href="/osdd.php" title="Etsy" />
    </head>

<body class="ui-toolkit transitional-wide etsy-has-it-design is-responsive no-touch en-US USD CM bg-white guest"
    data-language="en-US" data-currency="USD" data-region="CM">

    <script nonce="50eZUHlT/j2tfkUxA1ymIAno">
        ! function(a, b, c, d, e, f) {
            a.ddjskey = e;
            a.ddoptions = f || null;
            var m = b.createElement(c),
                n = b.getElementsByTagName(c)[0];
            m.async = 1, m.defer = 1, m.src = d, n.parentNode.insertBefore(m, n)
        }(window, document, "script", "https://www.etsy.com/include/tags.js", "D013AA612AB2224D03B2318D0F5B19", {
            endpoint: "https://www.etsy.com/include/tags.js",
            ajaxListenerPath: true,
            enableTagEvents: true,
            overrideAbortFetch: false,
            abortAsyncOnChallengeDisplay: false,
            disableAutoRefreshOnCaptchaPassed: false
        });

        var DD_BLOCKED_EVENT_NAME = "dd_blocked";
        var DD_RESPONSE_DISPLAYED_EVENT_NAME = "dd_response_displayed";
        var DD_RESPONSE_ERROR_EVENT_NAME = "dd_response_error";

        window.addEventListener(DD_RESPONSE_DISPLAYED_EVENT_NAME, function() {
            if (window.Sentry && window.Sentry.setTag) {
                window.Sentry.setTag(DD_RESPONSE_DISPLAYED_EVENT_NAME, true);
            }
        });

        window.addEventListener(DD_BLOCKED_EVENT_NAME, function() {
            if (window.Sentry && window.Sentry.setTag) {
                window.Sentry.setTag(DD_BLOCKED_EVENT_NAME, true);
            }
        });

        window.addEventListener(DD_RESPONSE_ERROR_EVENT_NAME, function() {
            if (window.Sentry && window.Sentry.setTag) {
                window.Sentry.setTag(DD_RESPONSE_ERROR_EVENT_NAME, true);
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
    const menuTrigger = document.querySelector('[data-wt-menu-trigger]');

    if (menuTrigger) {
        menuTrigger.addEventListener('click', function() {
            const expanded = menuTrigger.getAttribute('aria-expanded') === 'true';
            menuTrigger.setAttribute('aria-expanded', !expanded);
            // Ajoute ici ton code pour afficher/masquer ton menu
        });
    }
});
    </script>

    </head>

    <body>-->

        <!-- Header -->
        <!--  <header class="header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center"> <img
                    src="img/ logo.jpeg" alt="Eventzone Logo"
                    height="50" width="150"> <!-- Logo -->
        <!--   <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="recherche">Recherche</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Inscription</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header> <!-- Section principale -->
        <!-- <section class="text-center py-5">
        <div class="container">
            <h1>Trouvez vos prestataires événementiels près de chez vous</h1>
            <p>Organisez vos événements facilement en réservant des services fiables en un clic</p> <!-- Champ de recherche -->
        <!-- <div class="mb-4"> <input type="text" class="form-control" placeholder="Recherchez des prestataires">
            </div> <!-- Bouton de recherche --> <!-- <a href="#" class="btn btn-primary">Rechercher</a>
        </div>
        </section> <!-- Carte géographique -->
        <section class="map-container"> <!-- Carte ici, par exemple avec Leaflet.js ou Google Maps -->
            <!--    <p>Carte des prestataires à venir</p>
    </section> <!-- Footer
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2025 Eventzone | Contact | À propos</p>
        </div>
    </footer> <!-- Lien vers Bootstrap JS -
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0A9fmqUlBX7h2Fkw7FjlOkTQJoVAhCvQoPp0Xt8Nz4z2JS2J" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0A9fmqUlBX7h2Fkw7FjlOkTQJoVAhCvQoPp0Xt8Nz4z2JS2J" crossorigin="anonymous">
    </script>-->



            <div data-above-header class="wt-z-index-5 wt-position-relative">

            <div data-selector="header-cat-nav-wrapper" data-menu-ui="menubar">
                <div id="gnav-header"
                    class=" gnav-header global-nav v2-toolkit-gnav-header wt-z-index-6 wt-bg-white wt-position-relative "
                    data-as-version="10_12672349415_19" data-count-ajax data-show-suggested-searches-in-as=""
                    data-show-gift-card-cta-in-as="1" data-as-personalized="1"
                    data-as-extras="{&amp;quot;expt&amp;quot;:&amp;quot;all_xml&amp;quot;,&amp;quot;lang&amp;quot;:&amp;quot;en-US&amp;quot;,&amp;quot;extras&amp;quot;:[]}"
                    data-cheact="1" data-gnav-header>
                    <header id="gnav-header-inner"
                        class="global-enhancements-header wt-display-flex-xs wt-justify-content-space-between wt-align-items-center wt-width-full wt-body-max-width wt-pl-xs-2 wt-pr-xs-2 wt-pl-lg-6 wt-pr-lg-6 wt-bb-xs wt-bb-lg-none gnav-header-inner wt-pt-lg-2

"
                        role="banner">

                        <script nonce="50eZUHlT/j2tfkUxA1ymIAno">
                            ! function(e) {
                                var r = e.__etsy_logging;
                                if (r && r.perf && r.perf.prefixMarkMeasure) {
                                    var n = r.perf.prefixMarkMeasure("logo_render");
                                    e.performance && e.performance.mark && e.requestAnimationFrame((function() {
                                        setTimeout((function() {
                                            e.performance.mark(n)
                                        }))
                                    }))
                                }
                            }(window);
                        </script>
                        <div class="wt-pb-xs-1 wt-pb-lg-0 wt-pt-sm-1 wt-pt-lg-0 wt-pr-xs-0 wt-pr-sm-1"
                            data-header-logo-container>
                            <a href="index.html" elementtiming="ux-global-nav">
                                <img src="assets/img/logo-ez.jpg" alt="logo" class="logo" width="100px" height="auto">
                                <span>
                                        <path
                                            d="M6.547,3.125v6.008c0,0,2.117,0,3.25-0.086c0.891-0.156,1.055-0.242,1.219-1.133l0.328-1.305h0.969l-0.164,2.852 l0.086,2.922h-0.977l-0.242-1.141c-0.242-0.812-0.57-0.977-1.219-1.055c-0.812-0.086-3.25-0.086-3.25-0.086v5.039 c0,0.969,0.492,1.383,1.625,1.383h3.414c1.055,0,2.109-0.086,2.766-1.625l0.883-1.953h0.82c-0.086,0.406-0.492,3.984-0.57,4.789 c0,0-3.086-0.078-4.383-0.078H5.25l-3.492,0.078v-0.883l1.133-0.25c0.82-0.164,1.062-0.406,1.062-1.055 c0,0,0.086-2.195,0.086-5.852c0-3.648-0.086-5.844-0.086-5.844c0-0.727-0.242-0.891-1.062-1.055L1.758,2.555V1.664l3.414,0.07h6.5 c1.297,0,3.484-0.234,3.484-0.234s-0.078,1.375-0.164,4.625h-0.891l-0.328-1.141c-0.32-1.461-0.805-2.188-1.703-2.188H6.961 C6.547,2.797,6.547,2.875,6.547,3.125z M19.703,3.766h0.977V7.18l3.336-0.164l-0.164,1.547l-3.25-0.25v6.016 c0,1.703,0.57,2.359,1.547,2.359c0.883,0,1.539-0.492,1.781-0.898l0.484,0.57c-0.484,1.133-1.859,1.703-3.164,1.703 c-1.617,0-2.93-0.969-2.93-2.836V8.398h-1.938V7.586C18.008,7.422,19.219,6.445,19.703,3.766z M26.695,14.242l0.648,1.547 c0.242,0.648,0.812,1.305,2.109,1.305c1.383,0,1.953-0.734,1.953-1.625c0-2.766-5.445-1.953-5.445-5.688c0-2.109,1.703-3.094,3.898-3.094c0.977,0,2.438,0.164,3.172,0.492c-0.164,0.812-0.25,1.867-0.25,2.68l-0.805,0.078l-0.57-1.625 c-0.164-0.398-0.82-0.727-1.625-0.727c-0.977,0-1.953,0.406-1.953,1.461c0,2.516,5.609,1.953,5.609,5.688c0,2.117-1.867,3.25-4.148,3.25c-1.703,0-3.414-0.656-3.414-0.656c0.164-0.969,0.086-2.023,0-3.086H26.695z M33.031,22.039 c0.242-0.891,0.406-2.023,0.57-3.086l0.891-0.078l0.328,1.703c0.078,0.406,0.32,0.734,0.969,0.734c1.055,0,2.438-0.648,3.742-2.922 c-0.578-1.383-2.281-5.844-3.828-9.258c-0.406-0.898-0.484-0.977-1.047-1.141l-0.414-0.156v-0.82l2.445,0.086l3-0.164V7.75 l-0.734,0.164c-0.57,0.078-0.805,0.398-0.805,0.727c0,0.086,0,0.164,0.078,0.328c0.156,0.492,1.461,4.141,2.438,6.578c0.805-1.703,2.352-5.523,2.594-6.172c0.086-0.328,0.164-0.406,0.164-0.648c0-0.414-0.242-0.656-0.805-0.812L42.039,7.75V6.938 l2.281,0.078l2.109-0.078V7.75l-0.406,0.32c-0.812,0.328-0.898,0.406-1.219,1.062l-3.57,8.359 c-2.117,4.797-4.312,5.203-5.852,5.203C34.406,22.695,33.672,22.445,33.031,22.039z" />
                                    </span>
                            </a>
                        </div>
                        <nav class="wt-hide-xs wt-show-lg">
                            <div data-clg-id="WtMenu"
                                class="wt-menu wt-tooltip ge-menu--body-below-trigger wt-tooltip--disabled-touch dropdown-category-menu wt-menu--bottom wt-menu--left"
                                data-wt-menu data-wt-tooltip="true" data-menu-body-below-trigger="true"
                                data-close-on-select="true" data-hide-trigger-on-open="false" data-animate-in="true"
                                data-contain-focus="false" data-open-direction-vert="bottom"
                                data-open-direction-horiz="left" data-open-direction-force="true"
                                data-menu-type="action">

                                <button type="button"
                                    class="wt-menu__trigger wt-btn wt-btn--transparent header-button wt-mr-xs-1 wt-btn--small">

                                    <span class="etsy-icon wt-mr-xs-1 wt-icon--smaller">
                                        <select id="filter-category" class="form-select">
                                            <option value="">catégories</option>
                                            <option value="salle d'evenements">Salles</option>
                                            <option value="traiteur">Traiteur</option>
                                            <option value="photographie">Photographie</option>
                                            <option value="animation">Animation</option>
                                            <option value="tente">Tentes</option>
                                            <option value="chaise">Chaises</option>
                                        </select>
                                            
                                            <rect x="2" y="8" width="14" height="2" />
                                            <rect x="2" y="13" width="14" height="2" />
                                            <rect x="2" y="3" width="14" height="2" />
                                        </svg>
                                    </span>
                                    Categories
                                </button>



                                <div data-neu-spec-placeholder="1" id="bd2c69bf978c5288825b3623782eb9a1">
                                    <script type="text/json" data-neu-spec-placeholder-data="1">{"spec_name":"Etsy\\Modules\\CategoryNav\\Specs\\DropdownCatNav\\DropdownSubmenu","args":[]}</script>
                                    <div>


                                    </div>
                                </div>

                                <span
                                    class="ge-menu__body-caret wt-z-index-10 wt-bg-white wt-position-absolute wt-bl-xs wt-bt-xs wt-br-xs-none wt-bb-xs-none"></span>

                            </div>
                        </nav>

                        <div class="wt-width-full wt-display-flex-xs wt-pr-lg-3 wt-flex-lg-1 order-mobile-tablet-2"
                            data-hamburger-search-container>
                            <button data-id="hamburger"
                                class="wt-btn wt-btn--transparent wt-btn--icon wt-hide-lg
       wt-btn--transparent-flush-left
                 wt-mb-xs-2

       wt-mb-lg-0
       header-button"
                                aria-controls="mobile-catnav-overlay" tab-index="0">
                                <span class="wt-screen-reader-only">
                                    Browse
                                </span>
                                <span class="wt-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        aria-hidden="true" focusable="false">
                                        <path d="M21 7H3V5h18zm-5 6H3v-2h13zm5 6H3v-2h18z" />
                                    </svg></span>
                            </button>
                            <div
                                class="wt-display-inline-block wt-flex-xs-1 wt-pl-lg-0
        wt-mb-xs-2

wt-mb-lg-0">
                                <form id="gnav-search"
                                    class="global-enhancements-search-nav wt-position-relative wt-display-flex-xs"
                                    method="GET" action="/search.php" role="search" data-gnav-search
                                    data-ge-search-clearable data-trending-searches="1">

                                    <label for="global-enhancements-search-query"
                                        class="wt-label wt-screen-reader-only">
                                        Search for items or shops
                                    </label>
                                    <div class="search-container" data-id="search-bar">
                                        <div class="wt-input-btn-group global-enhancements-search-input-btn-group emphasized_search_bar emphasized_search_bar_grey_bg search-bar-container"
                                            data-id="search-suggestions-trigger">
                                            <input id="global-enhancements-search-query" data-id="search-query"
                                                data-search-input type="text" name="search_query"
                                                class="wt-input wt-input-btn-group__input global-enhancements-search-input-btn-group__input
            wt-pr-xs-7

            "
                                                placeholder="Search for anything" value="" autocomplete="off"
                                                autocorrect="off" autocapitalize="off" role="combobox"
                                                aria-autocomplete="both"
                                                aria-controls="global-enhancements-search-suggestions"
                                                aria-expanded="false" />
                                            <button type="button"
                                                class="wt-btn wt-btn--transparent wt-btn--icon wt-btn--small position-absolute-important wt-position-right wt-z-index-9 wt-animated  wt-animated--is-hidden

    search-close-btn-margin-right"
                                                data-search-close-btn>
                                                <span class="wt-screen-reader-only">Clear search</span>
                                                <span class="wt-icon wt-icon--smaller wt-nudge-t-1"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        aria-hidden="true" focusable="false">
                                                        <path
                                                            d="M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z" />
                                                    </svg></span>
                                            </button>
                                            <button type="submit"
                                                class="wt-input-btn-group__btn global-enhancements-search-input-btn-group__btn
        "
                                                value="Search" aria-label="Search"
                                                data-id="gnav-search-submit-button">

                                                <span class="wt-icon wt-nudge-b-2 wt-nudge-r-1"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        aria-hidden="true" focusable="false">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.5 19a8.46 8.46 0 0 0 5.262-1.824l4.865 4.864 1.414-1.414-4.865-4.865A8.5 8.5 0 1 0 10.5 19m0-2a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13" />
                                                    </svg></span>
                                            </button>
                                        </div>
                                        <div id="global-enhancements-search-suggestions"
                                            class="global-nav-menu__body
    search-suggestions-container
     wt-width-full wt-max-width-full
    "
                                            data-id="search-suggestions">
                                        </div>
                                    </div>

                                    <input id="search-js-router-enabled" type="hidden" value="true" />
                                    <input type="hidden" value="all" name="search_type" id="search-type" />

                                </form>
                            </div>
                        </div>

                        <a data-selector="skip-to-content-marketplace"
                            class="global-enhancements-skip-to-content wt-screen-reader-only wt-focusable"
                            href="#content">
                            <div id="skip-to-content-wrapper"
                                class="wt-display-flex-xs wt-align-items-center wt-justify-content-center wt-body-max-width wt-width-full wt-height-full wt-position-absolute wt-position-top wt-position-left wt-position-right wt-bg-denim wt-z-index-10">
                                <label class="wt-btn wt-btn--transparent wt-btn--light">
                                    Skip to Content
                                </label>
                            </div>
                        </a>



                        <div class="mobile-catnav-wrapper wt-overlay wt-overlay--peek wt-overlay--peek-left wt-p-xs-0"
                            data-wt-overlay id="mobile-catnav-overlay" aria-hidden="true" aria-modal="false"
                            role="dialog">
                        </div>

                        <div class="wt-flex-shrink-xs-0" data-primary-nav-container>
                            <nav aria-label="Main">
                                <ul
                                    class="wt-display-flex-xs wt-justify-content-space-between wt-list-unstyled wt-m-xs-0 wt-align-items-center">
                                    <li>
                                        <a href="{{route('login')}}"
                                            class="wt-btn wt-btn--small wt-btn--transparent wt-mr-xs-1">
                                            Sign in
                                        </a>
                                    </li>


                                    <li data-favorites-nav-container data-ge-nav-menu="favorites"
                                        data-ge-hover-event-name="gnav_hover_favorites_menu">
                                        <span class="wt-tooltip wt-tooltip--disabled-touch" data-wt-tooltip>
                                            <a href="#"
                                                class="wt-tooltip__trigger wt-tooltip__trigger--icon-only wt-btn wt-btn--transparent wt-btn--icon reduced-margin-xs header-button"
                                                data-favorites-nav-link aria-labelledby="ge-tooltip-label-favorites">
                                                <span class="etsy-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M20.877 12.52q.081-.115.147-.239A6 6 0 0 0 12 4.528a6 6 0 0 0-9.024 7.753q.066.123.147.24l.673.961a6 6 0 0 0 .789.915L12 21.422l7.415-7.025q.44-.418.789-.915zm-14.916.425L12 18.667l6.04-5.722q.293-.279.525-.61l.673-.961a.3.3 0 0 0 .044-.087 4 4 0 1 0-7.268-2.619v.003L12 8.667l-.013.004v-.002l-.006-.064a3.98 3.98 0 0 0-1.232-2.51 4 4 0 0 0-6.031 5.193q.014.045.044.086l.673.961a4 4 0 0 0 .526.61" />
                                                    </svg></span>
                                            </a>

                                            <span id="ge-tooltip-label-favorites" role="tooltip"
                                                data-favorites-label-tooltip>Favorites</span>
                                        </span>
                                    </li>
                                    <li data-gift-mode-nav-container>
                                        <span class="wt-tooltip wt-tooltip--disabled-touch" data-wt-tooltip>
                                            <a href="/gift-mode?ref=gm_utility_nav"
                                                class=" wt-tooltip__trigger wt-tooltip__trigger--icon-only wt-btn wt-btn--transparent wt-btn--icon reduced-margin-xs header-button"
                                                data-gift-mode-nav-link aria-labelledby="ge-tooltip-label-gift-mode">
                                                <span class="etsy-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.535 7A4 4 0 0 1 12 2.354 4 4 0 0 1 18.465 7H22v9h-1v6H3v-6H2V7zm9.466 0H13V5a2 2 0 1 1 2.001 2M11 5a2 2 0 1 0-2.001 2H11zm-.764 4c-.55.614-1.348 1-2.236 1v2a4.98 4.98 0 0 0 3-1v3H4V9zM13 11c.836.628 1.874 1 3 1v-2a3 3 0 0 1-2.236-1H20v5h-7zm-8 5v4h6v-4zm8 4v-4h6v4z" />
                                                    </svg></span>
                                            </a>

                                            <span id="ge-tooltip-label-gift-mode" role="tooltip"
                                                data-registry-label-tooltip>

                                                Gifts

                                            </span>
                                        </span>
                                    </li>
                                    <li data-ge-nav-menu="cart" data-ge-hover-event-name="gnav_hover_cart_menu">
                                        <span class="wt-tooltip wt-tooltip--bottom-left wt-tooltip--disabled-touch"
                                            data-wt-tooltip data-header-cart-button>
                                            <a aria-label="Cart" href="#"
                                                class="wt-tooltip__trigger wt-tooltip__trigger--icon-only wt-btn wt-btn--transparent wt-btn--icon header-button">
                                                <span
                                                    class="wt-z-index-1 wt-no-wrap wt-display-none ge-cart-badge wt-badge wt-badge--notificationPrimary wt-badge--small wt-badge--outset-top-right"
                                                    data-selector="header-cart-count" aria-hidden="true">
                                                    0
                                                </span>
                                                <span class="wt-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="m5.766 5-.618-3H1v2h2.518l2.17 10.535L6.18 17h14.307l2.4-12zM7.82 15l-1.6-8h14.227l-1.6 8z" />
                                                        <path
                                                            d="M10.667 20.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m8.333 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                    </svg></span>
                                            </a>
                                            <span role="tooltip" aria-hidden="true">Cart</span>
                                        </span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </header>


                </div>

                <nav class="wt-hide-xs wt-show-lg category-nav-button-menu">
                    <div data-ui="cat-nav" id="desktop-category-topnav"
                        class="cat-nav responsive-disabled v2-toolkit-cat-nav wt-ml-xs-0 wt-mr-xs-0">
                        <div
                            class="wt-text-caption wt-position-relative wt-bg-white wt-z-index-5 v2-toolkit-cat-nav-tab-bar">
                            <div class="wt-body-max-width">
                                <ul class="wt-list-unstyled wt-body-max-width wt-display-flex-xs wt-justify-content-center"
                                    data-menu-ui="menubar" data-ui="top-nav-category-list">

                                    <li class="wt-mr-xs-3">
                                        <a href="/gift-mode?ref=gm_global_nav"
                                            class="wt-btn wt-btn--transparent wt-btn--small " data-menu-ui="menuitem"
                                            data-ui="top-nav-category-link" data-node-id="-10">
                                            <span class="wt-icon wt-icon--smaller-xs wt-nudge-b-1 wt-nudge-r-3"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    aria-hidden="true" focusable="false">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.535 7A4 4 0 0 1 12 2.354 4 4 0 0 1 18.465 7H22v9h-1v6H3v-6H2V7zm9.466 0H13V5a2 2 0 1 1 2.001 2M11 5a2 2 0 1 0-2.001 2H11zm-.764 4c-.55.614-1.348 1-2.236 1v2a4.98 4.98 0 0 0 3-1v3H4V9zM13 11c.836.628 1.874 1 3 1v-2a3 3 0 0 1-2.236-1H20v5h-7zm-8 5v4h6v-4zm8 4v-4h6v4z" />
                                                </svg></span><span>
                                                Gifts
                                            </span>
                                        </a>
                                    </li>
                                    <li class="wt-mr-xs-3">
                                        <a href="https://www.etsy.com/c/gifts/birthday-gifts?ref=BDAY25_cat_nav"
                                            class="wt-btn wt-btn--transparent wt-btn--small " data-menu-ui="menuitem"
                                            data-ui="top-nav-category-link">
                                            Special Birthday Gifts
                                        </a>
                                    </li>
                                    <li class="wt-mr-xs-3">
                                        <a href="/featured/hub/home-favorites?ref=contentful_promo_cat_nav-4"
                                            class="wt-btn wt-btn--transparent wt-btn--small " data-menu-ui="menuitem"
                                            data-ui="top-nav-category-link" data-node-id="2">
                                            Home Favorites
                                        </a>
                                    </li>
                                    <li class="wt-mr-xs-3">
                                        <a href="/featured/hub/fashion-favorites?ref=contentful_promo_cat_nav-5"
                                            class="wt-btn wt-btn--transparent wt-btn--small " data-menu-ui="menuitem"
                                            data-ui="top-nav-category-link" data-node-id="3">
                                            Fashion Finds
                                        </a>
                                    </li>
                                    <li class="wt-mr-xs-3">
                                        <a href="{{route('register')}}"
                                            class="wt-btn wt-btn--transparent wt-btn--small ">
                                            Register
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>



            <div class="wt-overlay wt-z-index-4" aria-hidden="true" data-ui="overlay"></div>
            <noscript>
                <div
                    class="wt-body-max-width wt-pt-xs-2 wt-pl-xs-2 wt-pr-xs-2 wt-pl-md-4 wt-pr-md-4 wt-pt-md-3 wt-pb-xs-0">
                    <div id="javascript-nag" class="wt-alert wt-alert--inline wt-alert--success-01 wt-mb-xs-2">
                        <div> Take full advantage of our site features by enabling JavaScript. </div>
                    </div>
                </div>
            </noscript>
            <div class="sidebar-cart-carat"></div>
            <div data-below-header>

            </div>




            <script nonce="50eZUHlT/j2tfkUxA1ymIAno">
                var webVitals = function(e) {
                    "use strict";
                    var t, n, i, r, o, a = function() {
                            return window.performance && performance.getEntriesByType && performance.getEntriesByType(
                                "navigation")[0]
                        },
                        u = function(e) {
                            if ("loading" === document.readyState) return "loading";
                            var t = a();
                            if (t) {
                                if (e < t.domInteractive) return "loading";
                                if (0 === t.domContentLoadedEventStart || e < t.domContentLoadedEventStart)
                                    return "dom-interactive";
                                if (0 === t.domComplete || e < t.domComplete) return "dom-content-loaded"
                            }
                            return "complete"
                        },
                        c = function(e) {
                            var t = e.nodeName;
                            return 1 === e.nodeType ? t.toLowerCase() : t.toUpperCase().replace(/^#/, "")
                        },
                        s = function(e, t) {
                            var n = "";
                            try {
                                for (; e && 9 !== e.nodeType;) {
                                    var i = e,
                                        r = i.id ? "#" + i.id : c(i) + (i.classList && i.classList.value && i.classList.value
                                            .trim() && i.classList.value.trim().length ? "." + i.classList.value.trim().replace(
                                                /\s+/g, ".") : "");
                                    if (n.length + r.length > (t || 100) - 1) return n || r;
                                    if (n = n ? r + ">" + n : r, i.id) break;
                                    e = i.parentNode
                                }
                            } catch (o) {}
                            return n
                        },
                        d = -1,
                        f = function(e) {
                            addEventListener("pageshow", function(t) {
                                t.persisted && (d = t.timeStamp, e(t))
                            }, !0)
                        },
                        l = function() {
                            var e = a();
                            return e && e.activationStart || 0
                        },
                        p = function(e, t) {
                            var n = a(),
                                i = "navigate";
                            return d >= 0 ? i = "back-forward-cache" : n && (document.prerendering || l() > 0 ? i =
                                "prerender" : document.wasDiscarded ? i = "restore" : n.type && (i = n.type.replace(/_/g,
                                    "-"))), {
                                name: e,
                                value: void 0 === t ? -1 : t,
                                rating: "good",
                                delta: 0,
                                entries: [],
                                id: "v3-".concat(Date.now(), "-").concat(Math.floor(8999999999999 * Math.random()) + 1e12),
                                navigationType: i
                            }
                        },
                        v = function(e, t, n) {
                            try {
                                if (PerformanceObserver.supportedEntryTypes.includes(e)) {
                                    var i = new PerformanceObserver(function(e) {
                                        Promise.resolve().then(function() {
                                            t(e.getEntries())
                                        })
                                    });
                                    return i.observe(Object.assign({
                                        type: e,
                                        buffered: !0
                                    }, n || {})), i
                                }
                            } catch (r) {}
                        },
                        $ = function(e, t, n, i) {
                            var r, o;
                            return function(a) {
                                var u, c;
                                t.value >= 0 && (a || i) && ((o = t.value - (r || 0)) || void 0 === r) && (r = t.value, t
                                    .delta = o, t.rating = (u = t.value, u > (c = n)[1] ? "poor" : u > c[0] ?
                                        "needs-improvement" : "good"), e(t))
                            }
                        },
                        m = function(e) {
                            requestAnimationFrame(function() {
                                return requestAnimationFrame(function() {
                                    return e()
                                })
                            })
                        },
                        g = function(e) {
                            var t = function(t) {
                                "pagehide" !== t.type && "hidden" !== document.visibilityState || e(t)
                            };
                            addEventListener("visibilitychange", t, !0), addEventListener("pagehide", t, !0)
                        },
                        y = function(e) {
                            var t = !1;
                            return function(n) {
                                t || (e(n), t = !0)
                            }
                        },
                        h = -1,
                        T = function() {
                            return "hidden" !== document.visibilityState || document.prerendering ? 1 / 0 : 0
                        },
                        b = function(e) {
                            "hidden" === document.visibilityState && h > -1 && (h = "visibilitychange" === e.type ? e
                                .timeStamp : 0, S())
                        },
                        _ = function() {
                            addEventListener("visibilitychange", b, !0), addEventListener("prerenderingchange", b, !0)
                        },
                        S = function() {
                            removeEventListener("visibilitychange", b, !0), removeEventListener("prerenderingchange", b, !0)
                        },
                        E = function(e) {
                            document.prerendering ? addEventListener("prerenderingchange", function() {
                                return e()
                            }, !0) : e()
                        },
                        w = {
                            passive: !0,
                            capture: !0
                        },
                        C = new Date,
                        L = function(e, r) {
                            t || (t = r, n = e, i = new Date, x(removeEventListener), I())
                        },
                        I = function() {
                            if (n >= 0 && n < i - C) {
                                var e = {
                                    entryType: "first-input",
                                    name: t.type,
                                    target: t.target,
                                    cancelable: t.cancelable,
                                    startTime: t.timeStamp,
                                    processingStart: t.timeStamp + n
                                };
                                r.forEach(function(t) {
                                    t(e)
                                }), r = []
                            }
                        },
                        k = function(e) {
                            if (e.cancelable) {
                                var t, n, i, r, o, a = (e.timeStamp > 1e12 ? new Date : performance.now()) - e.timeStamp;
                                "pointerdown" == e.type ? (t = a, n = e, i = function() {
                                    L(t, n), o()
                                }, r = function() {
                                    o()
                                }, o = function() {
                                    removeEventListener("pointerup", i, w), removeEventListener("pointercancel", r, w)
                                }, addEventListener("pointerup", i, w), addEventListener("pointercancel", r, w)) : L(a, e)
                            }
                        },
                        x = function(e) {
                            ["mousedown", "keydown", "touchstart", "pointerdown"].forEach(function(t) {
                                return e(t, k, w)
                            })
                        },
                        P = 0,
                        B = 1 / 0,
                        D = 0,
                        N = function(e) {
                            e.forEach(function(e) {
                                e.interactionId && (B = Math.min(B, e.interactionId), P = (D = Math.max(D, e
                                    .interactionId)) ? (D - B) / 7 + 1 : 0)
                            })
                        },
                        R = function() {
                            return o ? P : performance.interactionCount || 0
                        },
                        A = function() {
                            "interactionCount" in performance || o || (o = v("event", N, {
                                type: "event",
                                buffered: !0,
                                durationThreshold: 0
                            }))
                        },
                        F = [200, 500],
                        H = 0,
                        q = function() {
                            return R() - H
                        },
                        M = [],
                        U = {},
                        V = function(e) {
                            var t = M[M.length - 1],
                                n = U[e.interactionId];
                            if (n || M.length < 10 || e.duration > t.latency) {
                                if (n) n.entries.push(e), n.latency = Math.max(n.latency, e.duration);
                                else {
                                    var i = {
                                        id: e.interactionId,
                                        latency: e.duration,
                                        entries: [e]
                                    };
                                    U[i.id] = i, M.push(i)
                                }
                                M.sort(function(e, t) {
                                    return t.latency - e.latency
                                }), M.splice(10).forEach(function(e) {
                                    delete U[e.id]
                                })
                            }
                        },
                        j = function(e, t) {
                            t = t || {}, E(function() {
                                A();
                                var n, i, r = p("INP"),
                                    o = function(e) {
                                        e.forEach(function(e) {
                                            e.interactionId && V(e), "first-input" !== e.entryType || M.some(
                                                function(t) {
                                                    return t.entries.some(function(t) {
                                                        return e.duration === t.duration && e
                                                            .startTime === t.startTime
                                                    })
                                                }) || V(e)
                                        });
                                        var t, n = M[t = Math.min(M.length - 1, Math.floor(q() / 50))];
                                        n && n.latency !== r.value && (r.value = n.latency, r.entries = n.entries, i())
                                    },
                                    a = v("event", o, {
                                        durationThreshold: null !== (n = t.durationThreshold) && void 0 !== n ? n :
                                            40
                                    });
                                i = $(e, r, F, t.reportAllChanges), a && ("interactionId" in PerformanceEventTiming
                                    .prototype && a.observe({
                                        type: "first-input",
                                        buffered: !0
                                    }), g(function() {
                                        o(a.takeRecords()), r.value < 0 && q() > 0 && (r.value = 0, r
                                            .entries = []), i(!0)
                                    }), f(function() {
                                        M = [], H = R(), r = p("INP"), i = $(e, r, F, t.reportAllChanges)
                                    }))
                            })
                        },
                        z = [2500, 4e3],
                        G = {};
                    return e.onINP = function(e, t) {
                        j(function(t) {
                            (function(e) {
                                if (e.entries.length) {
                                    var t = e.entries.sort(function(e, t) {
                                        return t.duration - e.duration || t.processingEnd - t
                                            .processingStart - (e.processingEnd - e.processingStart)
                                    })[0];
                                    e.attribution = {
                                        eventTarget: s(t.target),
                                        eventType: t.name,
                                        eventTime: t.startTime,
                                        eventEntry: t,
                                        loadState: u(t.startTime)
                                    }
                                } else e.attribution = {}
                            })(t), e(t)
                        }, t)
                    }, e.onLCP = function(e, t) {
                        var n, i;
                        n = function(t) {
                            (function(e) {
                                if (e.entries.length) {
                                    var t = a();
                                    if (t) {
                                        var n = t.activationStart || 0,
                                            i = e.entries[e.entries.length - 1],
                                            r = i.url && performance.getEntriesByType("resource").filter(function(
                                                e) {
                                                return e.name === i.url
                                            })[0],
                                            o = Math.max(0, t.responseStart - n),
                                            u = Math.max(o, r ? (r.requestStart || r.startTime) - n : 0),
                                            c = Math.max(u, r ? r.responseEnd - n : 0),
                                            d = Math.max(c, i ? i.startTime - n : 0),
                                            f = {
                                                element: s(i.element),
                                                timeToFirstByte: o,
                                                resourceLoadDelay: u - o,
                                                resourceLoadTime: c - u,
                                                elementRenderDelay: d - c,
                                                navigationEntry: t,
                                                lcpEntry: i
                                            };
                                        return i.url && (f.url = i.url), r && (f.lcpResourceEntry = r), void(e
                                            .attribution = f)
                                    }
                                }
                                e.attribution = {
                                    timeToFirstByte: 0,
                                    resourceLoadDelay: 0,
                                    resourceLoadTime: 0,
                                    elementRenderDelay: e.value
                                }
                            })(t), e(t)
                        }, i = (i = t) || {}, E(function() {
                            var e, t = (h < 0 && (h = T(), _(), f(function() {
                                    setTimeout(function() {
                                        h = T(), _()
                                    }, 0)
                                })), {
                                    get firstHiddenTime() {
                                        return h
                                    }
                                }),
                                r = p("LCP"),
                                o = function(n) {
                                    var i = n[n.length - 1];
                                    i && i.startTime < t.firstHiddenTime && (r.value = Math.max(i.startTime - l(),
                                        0), r.entries = [i], e())
                                },
                                a = v("largest-contentful-paint", o);
                            if (a) {
                                e = $(n, r, z, i.reportAllChanges);
                                var u = y(function() {
                                    G[r.id] || (o(a.takeRecords()), a.disconnect(), G[r.id] = !0, e(!0))
                                });
                                ["keydown", "click"].forEach(function(e) {
                                    addEventListener(e, function() {
                                        return setTimeout(u, 0)
                                    }, !0)
                                }), g(u), f(function(t) {
                                    r = p("LCP"), e = $(n, r, z, i.reportAllChanges), m(function() {
                                        r.value = performance.now() - t.timeStamp, G[r.id] = !0, e(!
                                            0)
                                    })
                                })
                            }
                        })
                    }, Object.defineProperty(e, "__esModule", {
                        value: !0
                    }), e
                }({});
            </script>

            <script nonce="50eZUHlT/j2tfkUxA1ymIAno">
                window.Etsy = window.Etsy || {};
                Etsy.Context = Etsy.Context || {};
                (function() {
                    function assign(firstSource, secondSource) {
                        if (!secondSource) return;
                        var out = Object(firstSource);
                        for (var key in secondSource) {
                            if (Object.prototype.hasOwnProperty.call(secondSource, key)) {
                                out[key] = secondSource[key];
                            }
                        }
                        return out;
                    }
                    Etsy.Context.feature = assign(Etsy.Context.feature ? Etsy.Context.feature : {}, {
                        "profile_dropdown_to_help_center": false,
                        "sitewide_si_mweb_gated_favoriting": false,
                        "isAppShellEnabled": true
                    });
                    Etsy.Context.data = assign(Etsy.Context.data ? Etsy.Context.data : {}, {
                        "is_mobile": false,
                        "should_auto_redirect": false,
                        "locale_settings": {
                            "language": {
                                "code": "en-US",
                                "id": 0,
                                "name": "English (US)",
                                "translation": "English (US)",
                                "is_detected": false,
                                "is_default": true
                            },
                            "currency": {
                                "currency_id": 840,
                                "code": "USD",
                                "name": "United States Dollar",
                                "number_precision": 2,
                                "symbol": "$",
                                "listing_enabled": true,
                                "browsing_enabled": true,
                                "buyer_location_restricted": false,
                                "rate_updates_enabled": true,
                                "is_detected": false,
                                "is_default": true,
                                "append_currency_symbol": false
                            },
                            "region": {
                                "code": "CM",
                                "country_id": 84,
                                "name": "Cameroon",
                                "translation": "Cameroon",
                                "is_detected": false,
                                "is_default": false,
                                "is_EU_region": false
                            },
                            "subdir_code": ""
                        },
                        "neu_api_specs_sample_rate": null,
                        "FB_GRAPHQL_VERSION": "v2.10",
                        "page_guid": "fd844546eb6.a4b3665f1785e9dd4f2b.00",
                        "primary_event_name": "home",
                        "request_uuid": "EucQ2W4rxedIU9mjyDsPLXZDah18",
                        "user_is_test_account": false,
                        "user_id": null,
                        "css_variant": "sasquatch",
                        "runtime_analysis": false,
                        "collage_shadow_dom_css_url": "https:\/\/www.etsy.com\/ac\/sasquatch\/css\/web-toolkit-v2\/web_components.66f856dee175bb.css",
                        "guest_uaid": ["V6Ro_ozBpVayuf_yGYtkzrFR5L8x", "V6Ro_ozBpVayuf_yGYtkzrFR5L8x"],
                        "is_app_shell": true,
                        "csrf_nonce": "3:1742153373:-AG_x5Nc8HVYyw5wu-WKRUMvirNi:71869e943da336db722963ffa539cedc76ed9e5aa9d4c0c32fb73c64c17e1116",
                        "uaid_nonce": "3:1742153373:C5kIP5N_pYNmhhnmPa8nn4Hl3P5x:f4073399f76a2221e647c7f702ec478a3a3dc88ebd308ed3c126da65d37dd3ba",
                        "clientlogger": {
                            "is_enabled": true,
                            "endpoint": "\/clientlog",
                            "logs_per_page": 6,
                            "id": "EucQ2W4rxedIU9mjyDsPLXZDah18",
                            "digest": "dc1eaf685f53a0b5e2f09f47d7a2561830dd4e2b",
                            "enabled_features": ["info", "warn", "error", "basic", "uncaught"]
                        },
                        "impact_tracker_should_prompt_signin": false,
                        "impact_tracker_should_direct_open": false,
                        "shop_favorites_see_all_link": "See all",
                        "shop_favorites_search_header": "Shops you follow",
                        "is_mobile_shop_search": false,
                        "show_simplified_mobile_header": false,
                        "is_eligible_for_ship_to_setting_in_global_header": false,
                        "is_eligible_for_sticky_search_bar_desktop": false,
                        "in_cart_count": 0,
                        "page_type": "home",
                        "is_desktop_mini_favorites_operational_enabled": false,
                        "clickable_nav": true,
                        "has_dropdown": true,
                        "add_vintage_node": false,
                        "images_in_l2": false,
                        "recs": [],
                        "mweb_full_screen_search_dropdown": false,
                        "relocate_cat_nav": false,
                        "zero_pane_recent_searches": [],
                        "is_eligible_to_fetch_category_suggestions": false,
                        "category_suggestions_in_autosuggest_variant": null,
                        "is_eligible_for_trending_searches_in_zero_pane_v3": false,
                        "mott_version": "cf44ab3",
                        "catnav_show_sales": false,
                        "catnav_gift_guide": "off",
                        "gifting_catnav_flyout_js": false,
                        "should_show_registry_on_nav": false,
                        "should_use_gifting_taxos_in_nav_flyout": false,
                        "impact_message": {
                            "footer_renewable_impact": {
                                "impact_name": "footer_renewable_impact",
                                "impact_themes": ["sustainability"],
                                "impact_audiences": ["buyers"]
                            },
                            "hp_whatisetsy_community": {
                                "impact_name": "hp_whatisetsy_community",
                                "impact_themes": ["general"],
                                "impact_audiences": ["buyers"]
                            }
                        },
                        "airgap_url": "https:\/\/consent-manager.etsystatic.com\/cm\/ac71e058-41b7-4026-b482-3d9b8e31a6d0\/airgap.js",
                        "airgap_bundle": "control_bundle",
                        "dual_write_enabled": false,
                        "dynamic_privacy_settings_ui_enabled": false,
                        "forced_data_regimes": "",
                        "has_forced_data_regimes": false,
                        "should_show_recipient_input_summary": false,
                        "should_hide_create_cta_enabled": true,
                        "videos_in_recs_modules_enabled": true,
                        "is_thank_you": false,
                        "hp_lazy_load_footer": false,
                        "open_overlay_instead_shipping_drawer": false,
                        "has_activity": false,
                        "include_strv_ads_sash_javascript": false,
                        "use_collection_carousel_cards": false,
                        "onsite_promos_enabled": false,
                        "is_stl_desktop_v2": false,
                        "watch_listing_impressions_enabled": true,
                        "listing_impresion_sourcesToLog": ["recs"],
                        "is_carousel_on_home_horizontal_scroll_enabled": true,
                        "data": [],
                        "show_video_in_listing_card": true,
                        "show_collage_video_in_listing_card": true,
                        "google_client_id": "296956783393-2d8r0gljo87gjmdpmvkgbeasdmelq33e.apps.googleusercontent.com",
                        "show_one_tap_modal": false,
                        "load_user_faves_option": true,
                        "update_many_faves_option": true,
                        "is_async_only_faves_option": false,
                        "guest_favorites_enabled": true,
                        "collection_count": 0,
                        "favorites_key": "",
                        "use_clearer_privacy_description": true
                    });
                })();
            </script>

            <script nonce="50eZUHlT/j2tfkUxA1ymIAno">
                __webpack_public_path__ = "https://www.etsy.com/ac/evergreenVendor/js/en-US/";
            </script>

            <script nonce="50eZUHlT/j2tfkUxA1ymIAno">
                (function() {
                    var asyncAvailable = true;
                    try {
                        eval("async () => {}");
                    } catch (e) {
                        asyncAvailable = false;
                    }

                    var falseUA = true && !asyncAvailable;
                    var primarySupportsAsync = !true && asyncAvailable;

                    var clientloggerIsEnabled = true;
                    if (clientloggerIsEnabled) {
                        if (falseUA) {
                            new Image().src = '/clientlog?falseua=1';
                        }
                        if (primarySupportsAsync) {
                            new Image().src = '/clientlog?primarysupportsasync=1';
                        }
                        if (window.__etsy_logging && window.__etsy_logging.bots && (window.__etsy_logging.bots.isBot || window
                                .__etsy_logging.bots.botCheck.length > 0)) {
                            new Image().src = '/clientlog?feisbot=1&bot_check=' + encodeURIComponent(JSON.stringify(window
                                .__etsy_logging.bots.botCheck));
                        }
                    }

                })();
            </script>

            <script nonce="50eZUHlT/j2tfkUxA1ymIAno"
                src="https://www.etsy.com/paula/v3/polyfill.min.js?etsy-v=v5&flags=gated&features=AbortController%2CDOMTokenList.prototype.@@iterator%2CDOMTokenList.prototype.forEach%2CIntersectionObserver%2CIntersectionObserverEntry%2CNodeList.prototype.@@iterator%2CNodeList.prototype.forEach%2CObject.preventExtensions%2CString.prototype.anchor%2CString.raw%2Cdefault%2Ces2015%2Ces2016%2Ces2017%2Ces2018%2Ces2019%2Ces2020%2Ces2021%2Ces2022%2Cfetch%2CgetComputedStyle%2CmatchMedia%2Cperformance.now"
                defer></script>
            <script nonce="50eZUHlT/j2tfkUxA1ymIAno"
                src="https://www.etsy.com/ac/evergreenVendor/js/en-US/vendor_bundle.de439cd03f5b2cb43029.js" defer></script>
            <script nonce="50eZUHlT/j2tfkUxA1ymIAno"
                src="https://www.etsy.com/ac/evergreenVendor/js/en-US/etsy_libs.e402a74fc87f3dd8931c.js" defer></script>
            <script nonce="50eZUHlT/j2tfkUxA1ymIAno"
                src="https://www.etsy.com/ac/evergreenVendor/js/en-US/app-shell/globals/index.9e7b3bf07a048cf70bc3.js" defer>
            </script>
            <script nonce="50eZUHlT/j2tfkUxA1ymIAno"
                src="https://www.etsy.com/ac/evergreenVendor/js/en-US/@etsy-modules/ConsentManagement/Transcend-Integration.03a91a372e403032da4b.js"
                defer></script>
            <script nonce="50eZUHlT/j2tfkUxA1ymIAno"
                src="https://www.etsy.com/ac/evergreenVendor/js/en-US/vesta_homepage/bootstrap.ee9fa0753aaf403f0234.js" defer>
            </script>
            <script nonce="50eZUHlT/j2tfkUxA1ymIAno"
                src="https://www.etsy.com/ac/evergreenVendor/js/en-US/neu/favorite-listing-button/bootstrap.d6780e9ad293192007d5.js"
                defer></script>

            <main id="content">
                <div data-async-homepage-modules>
                    <div data-appears-component-name="hp_shoppable_hero"
                        data-appears-event-data='{"image_url":"https:\/\/i.etsystatic.com\/ij\/e91394\/6724621327\/ij_fullxfull.6724621327_bkjmhuho.jpg?version=0","panels":[{"title":"Personalized Clothing","listing_ids":[],"entry_id":"6QyFeydssjCMwINlMzvAuX"}]}'>
                        <div
                            class="wt-grid wt-body-max-width wt-pr-xs-1 wt-pl-xs-1 wt-pr-md-2 wt-pl-md-2 wt-pr-lg-3 wt-pl-lg-3">

                            <div
                                class="wt-grid__item-xs-12 wt-pr-xs-1 wt-pl-xs-1 wt-pr-md-2 wt-pl-md-2 wt-pr-lg-3 wt-pl-lg-3">

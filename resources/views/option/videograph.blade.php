@include('partials.header')



<div class="wt-overlay wt-z-index-4" aria-hidden="true" data-ui="overlay"></div>

<noscript>
    <div class="wt-body-max-width wt-pt-xs-2 wt-pl-xs-2 wt-pr-xs-2 wt-pl-md-4 wt-pr-md-4 wt-pt-md-3 wt-pb-xs-0">
        <div id="javascript-nag" class="wt-alert wt-alert--inline wt-alert--success-01 wt-mb-xs-2">
            <div> Take full advantage of our site features by enabling JavaScript. </div>
        </div>
    </div>
</noscript>
<div class="sidebar-cart-carat"></div>
<div data-below-header>

</div>




<script nonce="mjoDi2yu5fTBZ67tSAisspG/">
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

<script nonce="mjoDi2yu5fTBZ67tSAisspG/">
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
            "isAppShellEnabled": true,
            "record_query_clicks_ls": false
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
            "page_guid": "fd90ee872da.d9b48e830d0e64d00f0c.00",
            "primary_event_name": "category_page",
            "request_uuid": "Eu1N24FWTGNuAgZQzrJCiLYRCoe4",
            "user_is_test_account": false,
            "user_id": null,
            "css_variant": "sasquatch",
            "runtime_analysis": false,
            "collage_shadow_dom_css_url": "https:\/\/www.etsy.com\/ac\/sasquatch\/css\/web-toolkit-v2\/web_components.9058938d506ce8.css",
            "guest_uaid": ["V6Ro_ozBpVayuf_yGYtkzrFR5L8x", "V6Ro_ozBpVayuf_yGYtkzrFR5L8x"],
            "is_app_shell": true,
            "csrf_nonce": "3:1742493244:L4m-Mu-05wRwFE3O_WJEvNLl716F:175dab8c5ec2b427421a068806891845f62d578d09745b79d485a88eac8a33e2",
            "uaid_nonce": "3:1742493244:Bj61fF1J_DYMcaOPLVMmrzm3Pq7x:652f552e51c7771cb9bfaf79444f9ae6427f03572bbd76e74638ed0f5dba762a",
            "clientlogger": {
                "is_enabled": true,
                "endpoint": "\/clientlog",
                "logs_per_page": 6,
                "id": "Eu1N24FWTGNuAgZQzrJCiLYRCoe4",
                "digest": "23767563641212fccb07440d40c4827697fa7c57",
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
            "page_type": "category_page",
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
                }
            },
            "airgap_url": "https:\/\/consent-manager.etsystatic.com\/cm\/ac71e058-41b7-4026-b482-3d9b8e31a6d0\/airgap.js",
            "airgap_bundle": "control_bundle",
            "dual_write_enabled": false,
            "dynamic_privacy_settings_ui_enabled": false,
            "forced_data_regimes": "",
            "has_forced_data_regimes": false,
            "dwell_time_as_backend_event": false,
            "admin_toolbar_additional_page_data": [],
            "is_category_desktop": true,
            "is_eligible_for_edd_filter_desktop": false,
            "is_eligible_for_reinsert_ubo_ads": false,
            "query": "",
            "collections_use_grid": true,
            "current_results_page": 1,
            "is_development": false,
            "show_ad_message": true,
            "is_eligible_for_shop_the_look": true,
            "lazy_loaded_listing_ids": [],
            "lazy_loaded_ad_ids": [],
            "lazy_loaded_ad_logging_keys": [],
            "lazy_loaded_organic_logging_keys": [],
            "should_lazy_load_on_async_searches": false,
            "search_request_params": {
                "detected_locale": {
                    "language": "fr",
                    "currency_code": "USD",
                    "region": "CM"
                },
                "locale": {
                    "language": "en-US",
                    "currency_code": "USD",
                    "region": "CM"
                },
                "name_map": {
                    "query": "q",
                    "query_type": "qt",
                    "results_per_page": "result_count",
                    "min_price": "min",
                    "max_price": "max"
                },
                "parameters": {
                    "facet": "jewelry\/chairs\/pendant-chairs",
                    "explicit": "1",
                    "ref": "hp_top_in_taxo_categories-1",
                    "utm_medium": null,
                    "placement": "wcg",
                    "page_type": "category",
                    "q": null,
                    "result_count": 48
                },
                "user_id": null
            },
            "total_pages": 250,
            "is_no_results_query": false,
            "no_results_page": false,
            "is_favorite_popover_nudge_enabled": false,
            "organic_listings_count": 1492930,
            "search_event_cache_key": null,
            "ranking_signals_event_cache_key": null,
            "user_favorite_shop_ids": [],
            "is_eligible_for_add_to_registry_cta": false,
            "is_eligible_for_add_to_cart_flyout": false,
            "is_eligible_for_add_to_cart_flyout_with_customizations": false,
            "is_eligible_for_image_and_video_carousel": false,
            "spell_corrected_query": null,
            "is_unified_impression_log_enabled": true,
            "imp_listener_timeout": 100,
            "imp_listener_sources": ["ads", "search"],
            "40777a3a39618aeb85199de3c8479704": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1651430345}}"
            },
            "listingcard:bad4508b0770a221d0ec86e525e02f8cd070a6ab:1651430345": {
                "plkey": "bad4508b0770a221d0ec86e525e02f8cd070a6ab:1651430345",
                "plkey_input_name": "plkey"
            },
            "01125905a4e5ddf2": "recs-impression",
            "3c65557fa67e42dc": "bf88fc6825a3abde4",
            "c5420ec98ed7db34": "b34948236595a116c",
            "eab1640f826b40169f9065e9059c73d5": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1332915852}}"
            },
            "listingcard:f40dc612966212e09b7d4dee4a7f6242df58cb02:1332915852": {
                "plkey": "f40dc612966212e09b7d4dee4a7f6242df58cb02:1332915852",
                "plkey_input_name": "plkey"
            },
            "91d60abe20b85b10de370f09c162a993": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1797455914}}"
            },
            "listingcard:b83972d0a841729e6c93df2162e9537e665facc4:1797455914": {
                "plkey": "b83972d0a841729e6c93df2162e9537e665facc4:1797455914",
                "plkey_input_name": "plkey"
            },
            "d2960e685b568a5532cf1506695d0d1f": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1700503487}}"
            },
            "listingcard:e0b91a9cdbbdd4f103412932ffaba65e16d6d053:1700503487": {
                "plkey": "e0b91a9cdbbdd4f103412932ffaba65e16d6d053:1700503487",
                "plkey_input_name": "plkey"
            },
            "listingcard:3c0a7e4edc61c6cef57b79db5a10d15ec4378ec8:1889340347": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1889340347-1742493243-MzoxNzQyNDkzMjQzOkM3dXdmcFoydWtySl9LMnh4RDJTVFdlOExPRzM6MDA3MDAwNDI3OTkzYWQzZTU3YTQwYThkMTQyODA0MGEzOTA5Yjg2ZjBhNzkxOTcwNDMyYWY4MzlkODgzYjBjMw==-1--42827307-1424-USD-5-w-1-1"
            },
            "listingcard:1f594a8548b9eba75fbaa3cbef81af67a253cd2e:1875357553": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1875357553-1742493243-MzoxNzQyNDkzMjQzOnNOWHIwYWRLMVRaQWk5QmVmbEJDMmhWSFBmalo6YTdmZDJkZGE5Njk4MzY3NDc0NDlhZWEyODM3MmVlNzA0OGI2MDZiNWMyMThiOTcxODI5NDc2N2FmNjhiMWVhYg==-1--56470180-2298-USD-38-w-1-2"
            },
            "listingcard:17e58e53227346eea9ee12c53e61f8d2ff6b21e2:1858067540": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1858067540-1742493243-MzoxNzQyNDkzMjQzOm91M1B6OXpVbnU0UWlBcElnZ1hmUV9jMHVqZGw6NmNjNTA4ZmU1MWM3YzljNmQ4NWFkNThjN2U3NGM1ZDcyM2Y2NzMyNjFhMmY2ZjRhZTJiMTM0OWFiM2MzMDQwOQ==-1--56733195-1428-USD-0-w-1-3"
            },
            "listingcard:a893f6fe915ef052d1f5b4249edbd7722cf298f0:1889688419": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1889688419-1742493243-MzoxNzQyNDkzMjQzOllWdThkYmNzLTRkYmhEaTlLZGhfSjVUdG5KUk06YTFhNjIyMzUxODQ3NWUzY2UxZDFlZGViZDE0NDcxMjE3ZmJlMzdjNzQwZWI4NzQ4YzRkMWEyNjg0ZWIyNjFlZQ==-1--42827307-1999-USD-0-w-1-4"
            },
            "listingcard:2afcd37dcea7e3c13170ee1e444b1974d50e1a6d:1881033913": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1881033913-1742493243-MzoxNzQyNDkzMjQzOlBXeVVBdDZMVEk3cDZHSURWXzZYTmk0YWlsNFY6ZGU4YWVhZDI5NDIwNjliMzQ1ZDMzNjkwMTc0MTNkYTdhODJiNzVkYmY3OWI0M2UwZGQwMzJlNjUwNzZhNjEyZg==-1--53861206-2705-USD-25-w-1-5"
            },
            "listingcard:c9e6aa4c41febb00d242286105ed86deb7d9a6d9:1884612953": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1884612953-1742493243-MzoxNzQyNDkzMjQzOkVXM01zMV8yQXI2MlRJWWI2WDNZRmxKR2E4TXI6Njc4NDQxOGYyNjhjY2E3NTI4OTAyNzI5MTg1MGI1YjdjNDA5MTRkMGMyYzU3NzY0M2UxM2UwZDNiYWE5ZDMyMw==-1--56144682-2051-USD-50-w-1-6"
            },
            "listingcard:8cf540cf1468753ab913a091b94cb34813096423:1842875568": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1842875568-1742493243-MzoxNzQyNDkzMjQzOlZQMEw1VFgyaUZUNFlJTExQVENRYnlkTk1VY0Y6NmY4YTI5MjkwYzg0MTQzN2Y3NzA1YWU4MDVjODZhYTUwMzMyODEzZDBhYWUzMzUyZjk4YWE4MTM0YTYwNDZjZQ==-1--56470180-2298-USD-38-w-1-7"
            },
            "listingcard:f5f67c7d843ea98ef72f6f125cb4247eacbeb864:1874338220": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1874338220-1742493243-MzoxNzQyNDkzMjQzOm05SVRmcS1ONVBLenhBZE1vZ09wUnJmeEJWdEY6M2Y3NzdjM2NjZDU2YTYxNGQ5ZTUwZmFhZjBjZTI3NDgxY2M2MmViNzMyN2QyNjlmODQ0ZTg3NzRmZGQzMWMzZA==-1--56201486-2011-USD-25-w-1-8"
            },
            "listingcard:08138f86bfeed18f392c3488b7735cb0fad40e5e:1879308503": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1879308503-1742493243-MzoxNzQyNDkzMjQzOkx1Sm14a1pBSFhtaW9mUG13NFZCaWVsTlkxZlI6MmY3N2QwZGZlZjI0YTA0ODk3YjNmZjYwZDUzMzI0NDIyNzU4NmEwYmQ2MzRjMzJiOGVlOGFmM2Q3ZGQ4MDE2NA==-1--56430674-2399-USD-0-w-1-9"
            },
            "listingcard:768fe5922ad12f531f1458b82560d3fb51cdabc0:1857033163": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1857033163-1742493243-MzoxNzQyNDkzMjQzOmI2VzdFb2plNmJiTDd5M0twOFJLcXN2MmZQTXc6YjM0YmE3OGYzNGE0NzBlY2FmOTI0NjdmNGM3MWE3YTQwMTRkZDIwN2EzZTc2YjE1NDNlMjNlZTQzZDYxZjQxNQ==-1--56470180-2298-USD-38-w-1-10"
            },
            "listingcard:0a252648181e168d192895c62710eae14267381c:1857033939": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1857033939-1742493243-MzoxNzQyNDkzMjQzOkdOM3ZLcWlSU2JDVjdCTXZYOE1ndDZxZl9ySUE6ZTBiZjAyYzkzYWE4ZGQzMzFjNzRjZmUxNjBhMDM0ZjlmNjkyOTM0YTljMmVjMTQ4ODExYzFkMDZjNzNiMTA1Mw==-1--56470180-2298-USD-38-w-1-11"
            },
            "listingcard:d8497f53fb58b84ccfdbcfdef78477683196b6f5:1573076062": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1573076062-1742493243-MzoxNzQyNDkzMjQzOmpiVUQydUxqZ1M1WEVYejRqR0dUVzhXLTlyR1E6ZjA1MGU3YzdjYTNhZjU2MTg3ODUzMGNkMGQyODkyY2RlMmZlYWNiMmU5MDYyYjg3MTc1N2M1YmQwMWUxNzk0Yg==-1--41655136-2517-USD-70-w-1-12"
            },
            "f015868bef3813704a103988a93dda7f": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1759190740}}"
            },
            "listingcard:36cbb8f7a4c7a0632ea760bf945c9a1cd4d32654:1759190740": {
                "plkey": "36cbb8f7a4c7a0632ea760bf945c9a1cd4d32654:1759190740",
                "plkey_input_name": "plkey"
            },
            "56a6a6369b29a246cc65f7fe443ef313": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1822370944}}"
            },
            "listingcard:d112634f2198251e66e2ec531007a2edc89c661f:1822370944": {
                "plkey": "d112634f2198251e66e2ec531007a2edc89c661f:1822370944",
                "plkey_input_name": "plkey"
            },
            "ecff5be3dbbbeb810ef85915c1064b35": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1820562079}}"
            },
            "listingcard:112968f113b4c737e8305717c16fa2293defcca8:1820562079": {
                "plkey": "112968f113b4c737e8305717c16fa2293defcca8:1820562079",
                "plkey_input_name": "plkey"
            },
            "680aeffc92151ae051d41c4d2bc17515": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1214765885}}"
            },
            "listingcard:494e7f9633c51d57938cddfc49c5612f5ca8c19e:1214765885": {
                "plkey": "494e7f9633c51d57938cddfc49c5612f5ca8c19e:1214765885",
                "plkey_input_name": "plkey"
            },
            "listingcard:73205c86e2bd69dafbda3b192fd0d803029d55ab:1875330032": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1875330032-1742493243-MzoxNzQyNDkzMjQzOmo2NEd4VjFKcXFFN1J6SU14cXg5X2s5LVp6ZnY6N2JiNTAyZGQ3YTcwOTA0Y2ZkOTZlZjM5ODhmZWRlOGNkMTEwNDg4NDM1YjlmZmYxNmMwNTk1OWNjYjgwNzNhOA==-1--58258906-1883-USD-50-w-1-13"
            },
            "listingcard:304f4a97020802113b871e01067b9f4183be9065:1865118122": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1865118122-1742493243-MzoxNzQyNDkzMjQzOlFnMU5HaVFNRWlZd29KQXBIbmZmN1ZsNjVhblk6OTJlOGUyNzk4M2FlNWZjZWUxMjg5ZjBmMzM4ZDNiYmU0ODQyMTNjYTA5MDQwNTA2ZmU3YTVmZTIyZGRkODIzYQ==-1--56430674-2399-USD-0-w-1-14"
            },
            "listingcard:79d14f41d4bd43ad6a489af605e183e4ef584380:1760772179": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1760772179-1742493243-MzoxNzQyNDkzMjQzOlUxaDRwTW94QzRBaUVqVWlGcHNYcEJrX3dZNFo6OWIwNzQ2MDY3ZjRmNWNiZTQ0MzM0Mzg1MGIyMjg3YmI5YzljZDU1MDYxNzNiZGUzMGEzMTExNDg3NDEyZjY4MQ==-1--53120861-1490-USD-50-w-1-15"
            },
            "listingcard:8c9db96a1c5f9aec71da826f327003cddefc5fb7:1889463085": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1889463085-1742493243-MzoxNzQyNDkzMjQzOnBVSzd6Njl6TjN4d3Z6SEtkS3JxWXBaRDktdGc6NWEyOWM0NTM5M2FmMjU0ZTkyNTNhZTk0NTk5MmM4MTZmYjE5NjY3N2U1YTY4NjRhNzlmZGEwNWI5N2RkOWY1ZA==-1--47548216-3765-USD-20-w-1-16"
            },
            "listingcard:3218b4f53567635cc38b390844a392305d1d2994:1885395059": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1885395059-1742493243-MzoxNzQyNDkzMjQzOnoyTzcxcXNVTUpUR0poeHF3R0lmZDkwOUlWRjY6OGY2YWExMmQ0ZDIxYzVhYzNhMGZlNjJlNmMwMzk2NDlkYjQzMDA4ZWJjNTNkZjdhYjQ1NzYxMDNiYzNjOGFmNw==-1--57683113-3835-USD-35-w-1-17"
            },
            "listingcard:bd851c11402e39f001d9b68d17df949395161a23:1874834104": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1874834104-1742493243-MzoxNzQyNDkzMjQzOkRYTFBscFFKSndpSkxiQ0Y1MU9kZVgxVm9hTDY6YjZlNTc0M2IyMDZjZjBhYjcxYzBiOTRiM2M3NWUyNjI0NGMyNmFjNGEwMjhmZTFiZTY2YjBlMGQ4ZjU4YTVlZQ==-1--57804596-100-USD-0-w-1-18"
            },
            "listingcard:efd894b6c2e0b8f2b2ef4e1c713aea2ae3097fea:1870724152": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1870724152-1742493243-MzoxNzQyNDkzMjQzOl83TmpvV0lzZE81NlNCaGlLVkotUkdvWVFUbGs6MjJiMDUzMjA3YTMzNTY4NjRlNmM3MDk0MmQ3ZDIyZjMzMGExM2FkM2FkY2MzNWVkMGNmNTUyMDU3NjdlY2IzOA==-1--42827307-1999-USD-0-w-1-19"
            },
            "listingcard:ce1589e339d196f5dc479171f9f420ed641fca55:1885479223": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1885479223-1742493243-MzoxNzQyNDkzMjQzOjlYV2xqcmVWV2RpQVdXTG91R0h6QmxOSmJvSkk6OWU2ZDUxYzU3YWVhMDNlMzk1OWY0NTUzMjk2NDAwNWFkYzdiNWRkYmE3ZGMzMGNlMDA2NWJkYjE3NTFmOTg0Ng==-1--49748713-2000-USD-0-w-1-20"
            },
            "listingcard:34c493ca6cf980db6a94fd32a11d333ed68bc5e2:1840382095": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1840382095-1742493243-MzoxNzQyNDkzMjQzOkpvX0pTSzBtQW9vUlhKUFp2T2R1Qno5dTF1ZGg6YzNjMWFhNTcxM2RhMjM0MGQxMTJkZDdkZjc1ZWFlZTQxNjQ0ZDIzYmE5ZWNmMzQ4ZTVmNzIyNWM1YTI1NDIyNQ==-1--56430674-2699-USD-0-w-1-21"
            },
            "listingcard:ae68e4126193696372f1b0adbed04cc17a098442:1870728248": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1870728248-1742493243-MzoxNzQyNDkzMjQzOlROSGRUUWdLWEVKUmFKLUZQZmdlSFE3ZGo1SGk6MmRhYzk3MDNmYWY1OGFmNDIxNTZhZmRlMjI2NDU4ZDQ4ZTRmNDcwNDQ0YTQ4YjJlY2Q5MmQzNDU0YWQ4OTgzNA==-1--42827307-1499-USD-0-w-1-22"
            },
            "listingcard:9783c9ff334f8075b33bdde11b639ada16b7ef33:1883941393": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1883941393-1742493243-MzoxNzQyNDkzMjQzOmJXdG1xZkl1UUNjMl9iRHlvTDgwc0pRMW9CcGk6ZTM5ZTNhMDA3ZTE0OTE2YTViZTMzZjNjZWIwMGM4Y2RkNzMxYmQ0MjAxODA4NmRmNjQxMTU3M2I4Mzk2MjgxZg==-1--57683113-3575-USD-35-w-1-23"
            },
            "listingcard:67b818291c3e3e46c8045cfe556b014e313cc51f:1882403587": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1882403587-1742493243-MzoxNzQyNDkzMjQzOjcxck9uQ1I2LUZSUmJRVnZxMTVYb3Y0bkpMYUo6ODU2MTI5YTQyYTY5OTljMDBjM2Q5Y2UwMDViNjYyMzFmZjU5MGY5NzQ5ZTBmZDcwNDZmODI4MDQ0MzkxM2U5Yg==-1--54162221-909-USD-35-w-1-24"
            },
            "daac6b70ed00c6fdec4d485125f3bdb9": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1786551786}}"
            },
            "listingcard:554615d5c7ddb576462cef68ada0848cf9a48f16:1786551786": {
                "plkey": "554615d5c7ddb576462cef68ada0848cf9a48f16:1786551786",
                "plkey_input_name": "plkey"
            },
            "66972f7214135ece2b85ca7a4e865bba": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1470772190}}"
            },
            "listingcard:3ff73e36999902cb34d7bad8efd0a95f68d7b841:1470772190": {
                "plkey": "3ff73e36999902cb34d7bad8efd0a95f68d7b841:1470772190",
                "plkey_input_name": "plkey"
            },
            "7b98963daebb3ffb8777b4bddc70cd23": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1807866594}}"
            },
            "listingcard:78e4a80d7814d444209f797397662cd1a638bebd:1807866594": {
                "plkey": "78e4a80d7814d444209f797397662cd1a638bebd:1807866594",
                "plkey_input_name": "plkey"
            },
            "51695a56ae7cef2ed612d10f86eca0ce": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1396870226}}"
            },
            "listingcard:c37909c32b4e28ce8aa69fc6b5cb8922e60c661d:1396870226": {
                "plkey": "c37909c32b4e28ce8aa69fc6b5cb8922e60c661d:1396870226",
                "plkey_input_name": "plkey"
            },
            "listingcard:df4ff442e76289598d0b183481ae29af2ea0855c:1842321836": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1842321836-1742493243-MzoxNzQyNDkzMjQzOkhvOGVaS3dlay1mU0ZUQV9zVmtrcXJveVJ0Z2E6N2JkODQ4MWY2Yzc2OTJhMTFkOWNiMTM3MmMwMWE0OTRkOGU4YmE5MjJiMGI3YzE1YTdiYzJkOGZlZTVhYTJkMw==-1--56470180-2298-USD-38-w-1-25"
            },
            "listingcard:8beba5860a3c49fe1cd87aaff2aa97d6b4dd8425:1889762333": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1889762333-1742493243-MzoxNzQyNDkzMjQzOjdtQ1VuR3hId2ozbkhxS1hlblVvRmNnWGhCcl86NDIwYjczNzAyYzkxYmI0OTYwM2JhMmI4Yjc2ODRhYWViMjQ0YzQ4YjVjZDY3NzI5ZGRiOGUyYWM2NDU3NGM5MA==-1--58101462-1319-USD-40-w-1-26"
            },
            "listingcard:6c40aba6d497a3110bb1930fb9494b83fd612b07:1888615521": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1888615521-1742493243-MzoxNzQyNDkzMjQzOjJSeDd3SDJQUEFyT0RyNkJrQ290MW15VF9NREE6YTVkYjlmMTc0NGUyNmEzNGM0ZTQ3ZDQ1NTQ5NDU5NzE5ZDFkZmFhNTA4MDQwMzk1ZmI3MjBjMjNjODIzZWVjMA==-1--27621950-2199-USD-70-w-1-27"
            },
            "listingcard:e2e93ee9b6f398b0581b2138f250cef17ebcc821:1868926374": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1868926374-1742493243-MzoxNzQyNDkzMjQzOjFGY3VNMHJ1YzVKc3VNOWdabldhVWw3d0pwNzA6NzYzMDhiNjExMzJjNmM4ZmE5NDFhNTFlZDVhNzY5MTAzMTI1ZGJlODRkYzJkYmEwOGNlZTQ5OGM2ZjU1NmM3Yg==-1--53861206-3247-USD-25-w-1-28"
            },
            "listingcard:ba5bc70c0c2ab36220065a7ee54c1bd742cbc37e:1710451666": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1710451666-1742493243-MzoxNzQyNDkzMjQzOlVmM0VyTkVCWWhLSkxwcTdrOU5mNGlfd3JYOHY6NDU3MzcwM2U0ZWZhOWZjOTI5NmFhYzM3Yzc5NTQzMjJjMTgzMzM1ZmNjYTNlODI4NTdlYThiMTBlNjdhODAxZA==-1--43363812-2656-USD-70-w-1-29"
            },
            "listingcard:462bca3774a9659b0c250556d868e2248b1f5f3e:1766694293": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1766694293-1742493243-MzoxNzQyNDkzMjQzOmo5R002QVVsLUhzNE5lTDdBVnpsUFVoRHU1dzM6NWEzMmNjZWFlZmQ5YmI2OTJlOWRkZDU0ZDE1Njc2NTM5NjVjMTBiM2ZiYmYyZTIwZGYwMzZjYzAwNjI5YTc5Zg==-1--53778112-1829-USD-10-w-1-30"
            },
            "listingcard:1f6b6e7eb490f0ff820b3fafb34910c2778fdf33:1842325682": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1842325682-1742493243-MzoxNzQyNDkzMjQzOms2QWUwbkpjY2ZIdEpqV2NBdFJMelNicmVYSkk6MTAxZDg2NjQxZjc5ODRiNTRlNTNmYTdhYzMxMmUwNTUyMTlmN2FkOGRiODc2NDA1ZGYxZTJkMWQ3NDA4MmZhMA==-1--56470180-2298-USD-38-w-1-31"
            },
            "listingcard:1cba1ddc40e3c8209f9351015706bbc2388cac8c:1880218859": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1880218859-1742493243-MzoxNzQyNDkzMjQzOm05cjJydHdJemxBaVZhYXNrRk9VV29hU1BGeGk6NDRkYzdjZGU5ZTk2N2M2OGQxYmJlN2QwODUzNzkzYmVhOGFlZDhmNmJhZjQxZGY5NDE1YzQ3MzMzZGE5YTI3ZA==-1--47453260-4500-USD-0-w-1-32"
            },
            "listingcard:7d00236b0a5f0a6a4452f50404553d8e4db0b532:1866519502": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1866519502-1742493243-MzoxNzQyNDkzMjQzOkRQMEJOVDJ1UDFraXpQUWZIRWZnWFJXUk1GWkc6YWE1OGNlOGFlNWNiZTEwOTA2ZDRkZWI0MjYzMWNhODQ3ZDc1OGI2ODczOTU0ODdjMGJmZGMzODYyYTU1MmE3OQ==-1--35104687-2099-USD-50-w-1-33"
            },
            "listingcard:2016a0028f47267338ad7b737c279772adea994d:1872190781": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1872190781-1742493243-MzoxNzQyNDkzMjQzOlA0MzF5M1o1NEJkQWwtSVNxTFJjZkg5Um1sdkg6YTBjZTRiNWFiNWRiOTI1NzU4ZjlhNTNiMmUzOWJjNmRkMmQyZTgxZjlkYjg2N2JhYjYzYzc1ZGIwMzA4MjY5Mw==-1--9797693-1099-USD-0-w-1-34"
            },
            "listingcard:a17085433f80b6f9de4669aabe687c012efb7d77:1876184103": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1876184103-1742493243-MzoxNzQyNDkzMjQzOjJmU2NnZjR5MjM5X0Q2Y1l1X3dwNUpuY0x6NVI6OTVmYWM5NzkyMjhlMWI0M2Y3ODRjNmJiZmRiYjE3MzcyZjc4NmNhMTA3ZmRkMzA1ZTVkYzJkMmEzNGFiM2MzNw==-1--56733195-941-USD-0-w-1-35"
            },
            "listingcard:e14983f17c923edadeedc488e7493b8c245345bc:1250123390": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1250123390-1742493243-MzoxNzQyNDkzMjQzOnB2azF5SGNjNUxoZVgySGVaanVOSkFsSjE3WVo6ODdmZDc1NTQ3YmRhYTZlN2NlZDQ1MWVkZGJjZDc1ZDU2N2RjNWMwZjg2NWMzMTAyMWI1YjkzMGJjMjIyNDY5OQ==-1--10932069-1706-USD-75-w-1-36"
            },
            "5752bb7e9a312e14ef4a197ed95804ae": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1890018573}}"
            },
            "listingcard:3a4835e62c1247fb97addc5dacc92ff48e5183a8:1890018573": {
                "plkey": "3a4835e62c1247fb97addc5dacc92ff48e5183a8:1890018573",
                "plkey_input_name": "plkey"
            },
            "1c06aab09240a22d3737922d5dca68df": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1702238448}}"
            },
            "listingcard:b195cdc82f23f58bd69b889f73085d01ae11cfa1:1702238448": {
                "plkey": "b195cdc82f23f58bd69b889f73085d01ae11cfa1:1702238448",
                "plkey_input_name": "plkey"
            },
            "ddb432e240490d94b38bb0ad658a277f": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1402628516}}"
            },
            "listingcard:e783d858346cd1db365aea88fdaf9ea15cba58dc:1402628516": {
                "plkey": "e783d858346cd1db365aea88fdaf9ea15cba58dc:1402628516",
                "plkey_input_name": "plkey"
            },
            "f52fc4fa3d732fb8328951b2a3a99b30": {
                "component_name": "category_listings_group",
                "event_data": "{\"common\":{\"query\":\"\",\"skip_logging\":true},\"0\":\"view\",\"view\":{\"listing_ids\":1728368986}}"
            },
            "listingcard:813fcd10b14fcce3ffc188fda1c1801d2acf4352:1728368986": {
                "plkey": "813fcd10b14fcce3ffc188fda1c1801d2acf4352:1728368986",
                "plkey_input_name": "plkey"
            },
            "listingcard:c350569648aed00f9208d022f6f539ad994d8f4f:1867666304": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1867666304-1742493243-MzoxNzQyNDkzMjQzOnZjWm9XOFdQRUFzMWlGTnVUUC1SelNiN2UtYjQ6OGRmNDU0NGRjYjBhOWE1YzdjM2FmNTQzYzk0MTI5NGRlZTU3ODg3MjU3ZDE5NTQ2NDc3NTE2ZmM0YTdmMzk3Mg==-1--56470180-2298-USD-38-w-1-37"
            },
            "listingcard:302287377d19aef3472706e8fd3ec00c0ba9e74d:1882174039": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1882174039-1742493243-MzoxNzQyNDkzMjQzOjV6V053N1hLeEJtNTBGd0p2M1pvVW1mTlpGNzE6YzEwZTkyYWNkNTdlMWUwMTA3N2FmYWViY2JlMGM0ZjEyNjk3NWYyZTcyODk1NGQ5YWZjOWMxOGFjNTJmMDg3MA==-1--53861206-2705-USD-25-w-1-38"
            },
            "listingcard:9588bb5d1b269781836b13134055dbdff45b5369:1734924289": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1734924289-1742493243-MzoxNzQyNDkzMjQzOlB3WnduVkV4c3FLQmp6bmotUTlFRW92N2hRdkQ6MjI1YTQ5MWIxNmEzMWQyZjdiMzQ0MjQyNDMxODdmMzAxZWIzNTU5ZWZjZTg4NjUzZjkwNDVlOTc2MDI5MDE1ZA==-1--35046319-1790-USD-60-w-1-39"
            },
            "listingcard:8ab889c0d86cd5a6980041cefbf5b37e848bb680:1873359200": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1873359200-1742493243-MzoxNzQyNDkzMjQzOnR5cjBPQ3hzSkQ2NVBpT3dJR21DYnEtQmVWZVk6YzAxODUzNTg0ZWZkZTY3MzcwNDExYzg2MWM1Yzk5NTAyYTAwODY4Y2E3ZWY3NDlmYzZhNjI0YWE5NzNhNzdjZA==-1--36672700-1679-USD-60-w-1-40"
            },
            "listingcard:f363fa5748db5aaa6f28825fd3f8e814a054a143:1889617469": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1889617469-1742493243-MzoxNzQyNDkzMjQzOnU5RU1CT2xtdjllRWl2RXFTX29lUWRpNkJNdDM6OTY1ZWRkNjQ1NTBjNjcwNWRhYTdmNzE5Nzc4NmQ1ZTc4ZGZjNzMxNzI2ZDJlODY5ZDQxZGVjNGI1ZWFjZTIyOA==-1--53924492-5816-USD-25-w-1-41"
            },
            "listingcard:e8681019f44c9dc4da5e622b3f64bd729c424dbf:1829758160": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1829758160-1742493243-MzoxNzQyNDkzMjQzOmZOeklRZjFsMXBjeHA3RkFPNEtXdnQyVmtoVkQ6NmY1ODkxYzE5ZmMxZTRjNDBjZmQ2ZTlkOWU1ZjZiYjFkODZkZmFkNTQ0MzdjZDk1OWQ5N2JkOGM4MjMwNGRiOA==-1--56430674-2399-USD-0-w-1-42"
            },
            "listingcard:691bc1b50d4036e9a0cc6620bac2816c1b7d7fa1:1206840291": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1206840291-1742493243-MzoxNzQyNDkzMjQzOkZNdDQ1QTVnQmF4ekl0Q3lfb1hkRDVBYXUzdkM6MjEyMjU4ZGYwYmM1NDIzN2U0MTlmYWY5NGFkMzc4MDY1MWZhZDhmZjQwM2I4NDI0ODYwNjMxZDk2MDVhNDUyMg==-1--34695844-3117-USD-25-w-1-43"
            },
            "listingcard:579ae6b8568c1c60059f6647c023a57d4acf7753:1736057229": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1736057229-1742493243-MzoxNzQyNDkzMjQzOlZYS09ILU9qbTVkT3dSZ09peFVxajhRSVM4YjM6ZDNkNGY1YmEyMDdkNjEwNjQ0YzE0NDU0YTIwNTZhNjVkNDZlMDRiMGYxNWRhZDcwYzRjZjk4MjQ1ZDExMTk2Mg==-1--35046319-2119-USD-60-w-1-44"
            },
            "listingcard:434c54bda50672b4c8e5da13fa5f2ad4a879edc6:1889980559": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1889980559-1742493243-MzoxNzQyNDkzMjQzOkc1RG1DcVZLNjRYZFdXQTMxRGlnRjdrcVFneEk6YWRjNTE1ZjlkNWE4ZDY2MDA5NTQ5ZWJhMjllNDA4ZGUzNTE3YTA4ZDI5ZDA4YTc3M2E0NDgzMGJkNTJhYTFlYQ==-1--57417115-4192-USD-25-w-1-45"
            },
            "listingcard:37d77ce7d2a36a0355532c5b7ed532a87baaba94:1785331351": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1785331351-1742493243-MzoxNzQyNDkzMjQzOlRpbGZ3T0t0U1hTc0VBX29yMVhyQ2xSLWZUaEQ6MTU5YTE5NWZjNTc0ZGViMjk4NTBmMGQ4YWQ2OWEyMWQzYjExNjAyYzQ4OWE1MjM0ZDk0ZjNjYWY0OTVmYjRhYw==-1--53120861-1490-USD-50-w-1-46"
            },
            "listingcard:582477c234bb9f53f9f2dcb8db5cb39df061be8d:1702238448": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1702238448-1742493243-MzoxNzQyNDkzMjQzOlBoU1RiRTF1Um1waDk2OXlhd2JRVkdmMlhnTkQ6ZTIxMTk2ZmMwY2Y1ZTg1NDk2ZjExYzBkMmFkMDZmYjJiYTFlNzJiM2U2MzIyMjhmYzExMmE5YzEyMGYwZTZjNg==-1--35046319-2059-USD-60-w-1-47"
            },
            "listingcard:4173083a19ce9445154da8ba907e9edebfb429d7:1844538727": {
                "plkey": null,
                "plkey_input_name": "plkey",
                "encoded_impression": "1844538727-1742493243-MzoxNzQyNDkzMjQzOmszNTBrcXBjLUVCbkphZzdqZUFKRmRCS1hDRzY6OTVjODgyMDZmNDRkOWUxOGRkNzlhOTJlODVkODM4NTVmZDVmM2NkMWNmYzIwNjM1ODE2ZDliNmNkZWJmYzdhNg==-1--56430674-2499-USD-0-w-1-48"
            },
            "ubo_bait_id": "wMWHQ",
            "is_eligible_for_live_result_filtering": false,
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

<script nonce="mjoDi2yu5fTBZ67tSAisspG/">
    __webpack_public_path__ = "https://www.etsy.com/ac/evergreenVendor/js/en-US/";
</script>

<script nonce="mjoDi2yu5fTBZ67tSAisspG/">
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

<script nonce="mjoDi2yu5fTBZ67tSAisspG/"
    src="https://www.etsy.com/paula/v3/polyfill.min.js?etsy-v=v5&flags=gated&features=AbortController%2CDOMTokenList.prototype.@@iterator%2CDOMTokenList.prototype.forEach%2CIntersectionObserver%2CIntersectionObserverEntry%2CNodeList.prototype.@@iterator%2CNodeList.prototype.forEach%2CObject.preventExtensions%2CString.prototype.anchor%2CString.raw%2Cdefault%2Ces2015%2Ces2016%2Ces2017%2Ces2018%2Ces2019%2Ces2020%2Ces2021%2Ces2022%2Cfetch%2CgetComputedStyle%2CmatchMedia%2Cperformance.now"
    defer></script>
<script nonce="mjoDi2yu5fTBZ67tSAisspG/"
    src="https://www.etsy.com/ac/evergreenVendor/js/en-US/vendor_bundle.de439cd03f5b2cb43029.js" defer></script>
<script nonce="mjoDi2yu5fTBZ67tSAisspG/"
    src="https://www.etsy.com/ac/evergreenVendor/js/en-US/etsy_libs.a80b98ce2bffb8eab9e3.js" defer></script>
<script nonce="mjoDi2yu5fTBZ67tSAisspG/"
    src="https://www.etsy.com/ac/evergreenVendor/js/en-US/app-shell/globals/index.e705855b0a479fea8f0a.js" defer>
</script>
<script nonce="mjoDi2yu5fTBZ67tSAisspG/"
    src="https://www.etsy.com/ac/evergreenVendor/js/en-US/@etsy-modules/ConsentManagement/Transcend-Integration.f35960ba99731f125513.js"
    defer></script>
<script nonce="mjoDi2yu5fTBZ67tSAisspG/"
    src="https://www.etsy.com/ac/evergreenVendor/js/en-US/search2_neu/desktop/base.36320306ae05b255b3c6.js" defer>
</script>
<script nonce="mjoDi2yu5fTBZ67tSAisspG/"
    src="https://www.etsy.com/ac/evergreenVendor/js/en-US/neu/favorite-listing-button/bootstrap.f527234949b65fcc71c5.js"
    defer></script>

<main id="content">
    <div data-async-content>

        <div
            class="wt-bg-white wt-grid__item-md-12 wt-pl-xs-1 wt-pr-xs-0 wt-pr-md-1 wt-pl-lg-0 wt-pr-lg-0 wt-mt-xs-0 wt-overflow-x-hidden wt-bb-xs-1">
            <div class="wt-body-max-width" data-above-recs-and-footer>
                <span data-25-percent></span>
                <span data-50-percent></span>
                <span data-75-percent></span>
                <div id="async-search-results-scroll-pagination" aria-hidden="true"></div>

                <div class="wt-pr-xs-1 wt-pl-xs-1 wt-pl-md-3 wt-pr-md-3">
                    <div>
                        <div class="wt-mt-xs-5">
                            <div data-taxonomy-breadcrumbs
                                class="
breadcrumb-margin wt-text-left-xs wt-text-center-md wt-mt-xs-1 ">
                                <ul class="wt-list-inline wt-mr-xs-1" breadcrumbs>
                                    <li class="wt-display-inline-block">
                                        <span class="wt-text-body-small">
                                            <a href="https://www.etsy.com/c/jewelry?explicit=1&ref=breadcrumb"
                                                title="Jewelry" class="wt-text-link-no-underline" data-async-filter
                                                data-breadcrumb-link><span class=""></span></a>
                                        </span>
                                        <span class=""></span>
                                    </li>
                                    <li class="wt-display-inline-block">
                                        <span class="wt-text-body-small">
                                            <a href="https://www.etsy.com/c/jewelry/chairs?explicit=1&ref=breadcrumb"
                                                title="chairs" class="wt-text-link-no-underline" data-async-filter
                                                data-breadcrumb-link><span class=""></span></a>
                                        </span>
                                        <span class=""></span>
                                    </li>
                                    <li class="wt-display-inline-block">
                                        <span class="wt-text-body-small">
                                            <span class="wt-text-gray"> </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="wt-mb-xs-2">
                            <div data-category-page-updated-banner-header>
                                <div class="wt-body-max-width wt-mt-xs-3 wt-mt-md-2 ">
                                    <h1
                                        class="wt-display-block wt-text-left-xs wt-text-center-md wt-mb-xs-2 wt-text-heading">
                                        videographers</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>


<div
class="js-merch-stash-check-listing v2-listing-card

       wt-mr-xs-0
wt-position-relative wt-width-full wt-rounded-02

        listing-card-experimental-style"
data-palette-listing-id="1827922233"
data-shop-id="36188039"
data-listing-id="1827922233"
data-page-type="homepage_merch_collection"
data-behat-listing-card
data-listing-card-v2



>
<a
    class="listing-link wt-display-inline-block
"
    data-listing-id="1827922233"
    data-palette-listing-image
        href="https://www.etsy.com/listing/1827922233/vintage-candle-holder-by-matthew-hilton?click_key=3d4119447b82b662bcd4aff060409566a96882a7%3A1827922233&click_sum=c37c9b84&ref=hp_editors_picks_primary-1&sts=1"
        data-listing-link

        target="etsy.1827922233"
        title="Vintage candle holder by Matthew Hilton - Metal, Mid Century Design 1970s - Stylish candle holder, gift idea, elegant table decoration"
>

            <div class="v2-listing-card__img wt-position-relative
                    listing-card-image-no-shadow
"
            >
                <div class="placeholder placeholder-square wt-rounded-02 wt-overflow-hidden  wt-rounded-01 wt-height-full

        "
>
<div class="placeholder-content placeholder placeholder-square wt-rounded-02 wt-overflow-hidden vertically-centered-placeholder
            "
        style="background-color: #4B3327;"
>
            <div class="height-placeholder">
                    <img
data-listing-card-listing-image
class="wt-width-full wt-height-full wt-display-block wt-position-absolute  wt-rounded-02 listing-card--hp-refresh-2024


    hp_editors_picks_primary-1"
alt="Vintage candle holder by Matthew Hilton - Metal, Mid Century Design 1970s - Stylish candle holder, gift idea, elegant table decoration"
src="https://i.etsystatic.com/36188039/r/il/36b0ec/6487359869/il_600x600.6487359869_8ejs.jpg"
loading="lazy"
/>


    <p class="listing-card-price-badge wt-animated wt-animated--appear-02 wt-mb-xs-2 wt-pl-xs-2 wt-pr-xs-2 wt-max-width-full wt-text-black wt-text-truncate wt-position-absolute wt-position-bottom wt-z-index-1">
<span data-clg-id="WtBadge" class="wt-badge wt-badge--default wt-badge--border wt-width-full wt-text-truncate">
                        <span><span class='currency-symbol'>USD </span><span class='currency-value'>454.96</span></span>

</span>
    </p>
            </div>
</div>
            <div data-clg-id="WtVideoPreview" class="wt-video wt-video--preview wt-display-flex-xs " data-listing-id="1827922233">
        <div class="wt-video__spinner">

<div data-clg-id="WtSpinner" class="wt-spinner wt-spinner--01" aria-live="assertive" >
    <span class="wt-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle fill="transparent" cx="12" cy="12" r="10"/></svg></span>
    Loading
</div>

        </div>

        <video
            tabindex="-1"
            muted
            preload="none"
            class="wt-video__element wt-video__element--hidden"
            aria-label="Vintage candle holder by Matthew Hilton - Metal, Mid Century Design 1970s - Stylish candle holder, gift idea, elegant table decoration"

        >
                <source src="https://v.etsystatic.com/video/upload/ac_none,du_15,q_auto:good/0001111_4_chxpbo.mp4" type="video/mp4">
        </video>

        <div class="wt-video__signal" >
            <span class="wt-icon wt-icon--smaller-xs wt-nudge-l-2" data-wt-video-play-signal=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><polygon points="4 4 4 20 20 12 4 4"/></svg></span>

        </div>
    </div>

</div>
@include('partials.footer')

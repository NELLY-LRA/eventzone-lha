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




            <script nonce="E2wVd4rYNGISw7hVQSf1UFLF">
    var webVitals=function(e){"use strict";var t,n,i,r,o,a=function(){return window.performance&&performance.getEntriesByType&&performance.getEntriesByType("navigation")[0]},u=function(e){if("loading"===document.readyState)return"loading";var t=a();if(t){if(e<t.domInteractive)return"loading";if(0===t.domContentLoadedEventStart||e<t.domContentLoadedEventStart)return"dom-interactive";if(0===t.domComplete||e<t.domComplete)return"dom-content-loaded"}return"complete"},c=function(e){var t=e.nodeName;return 1===e.nodeType?t.toLowerCase():t.toUpperCase().replace(/^#/,"")},s=function(e,t){var n="";try{for(;e&&9!==e.nodeType;){var i=e,r=i.id?"#"+i.id:c(i)+(i.classList&&i.classList.value&&i.classList.value.trim()&&i.classList.value.trim().length?"."+i.classList.value.trim().replace(/\s+/g,"."):"");if(n.length+r.length>(t||100)-1)return n||r;if(n=n?r+">"+n:r,i.id)break;e=i.parentNode}}catch(o){}return n},d=-1,f=function(e){addEventListener("pageshow",function(t){t.persisted&&(d=t.timeStamp,e(t))},!0)},l=function(){var e=a();return e&&e.activationStart||0},p=function(e,t){var n=a(),i="navigate";return d>=0?i="back-forward-cache":n&&(document.prerendering||l()>0?i="prerender":document.wasDiscarded?i="restore":n.type&&(i=n.type.replace(/_/g,"-"))),{name:e,value:void 0===t?-1:t,rating:"good",delta:0,entries:[],id:"v3-".concat(Date.now(),"-").concat(Math.floor(8999999999999*Math.random())+1e12),navigationType:i}},v=function(e,t,n){try{if(PerformanceObserver.supportedEntryTypes.includes(e)){var i=new PerformanceObserver(function(e){Promise.resolve().then(function(){t(e.getEntries())})});return i.observe(Object.assign({type:e,buffered:!0},n||{})),i}}catch(r){}},$=function(e,t,n,i){var r,o;return function(a){var u,c;t.value>=0&&(a||i)&&((o=t.value-(r||0))||void 0===r)&&(r=t.value,t.delta=o,t.rating=(u=t.value,u>(c=n)[1]?"poor":u>c[0]?"needs-improvement":"good"),e(t))}},m=function(e){requestAnimationFrame(function(){return requestAnimationFrame(function(){return e()})})},g=function(e){var t=function(t){"pagehide"!==t.type&&"hidden"!==document.visibilityState||e(t)};addEventListener("visibilitychange",t,!0),addEventListener("pagehide",t,!0)},y=function(e){var t=!1;return function(n){t||(e(n),t=!0)}},h=-1,T=function(){return"hidden"!==document.visibilityState||document.prerendering?1/0:0},b=function(e){"hidden"===document.visibilityState&&h>-1&&(h="visibilitychange"===e.type?e.timeStamp:0,S())},_=function(){addEventListener("visibilitychange",b,!0),addEventListener("prerenderingchange",b,!0)},S=function(){removeEventListener("visibilitychange",b,!0),removeEventListener("prerenderingchange",b,!0)},E=function(e){document.prerendering?addEventListener("prerenderingchange",function(){return e()},!0):e()},w={passive:!0,capture:!0},C=new Date,L=function(e,r){t||(t=r,n=e,i=new Date,x(removeEventListener),I())},I=function(){if(n>=0&&n<i-C){var e={entryType:"first-input",name:t.type,target:t.target,cancelable:t.cancelable,startTime:t.timeStamp,processingStart:t.timeStamp+n};r.forEach(function(t){t(e)}),r=[]}},k=function(e){if(e.cancelable){var t,n,i,r,o,a=(e.timeStamp>1e12?new Date:performance.now())-e.timeStamp;"pointerdown"==e.type?(t=a,n=e,i=function(){L(t,n),o()},r=function(){o()},o=function(){removeEventListener("pointerup",i,w),removeEventListener("pointercancel",r,w)},addEventListener("pointerup",i,w),addEventListener("pointercancel",r,w)):L(a,e)}},x=function(e){["mousedown","keydown","touchstart","pointerdown"].forEach(function(t){return e(t,k,w)})},P=0,B=1/0,D=0,N=function(e){e.forEach(function(e){e.interactionId&&(B=Math.min(B,e.interactionId),P=(D=Math.max(D,e.interactionId))?(D-B)/7+1:0)})},R=function(){return o?P:performance.interactionCount||0},A=function(){"interactionCount"in performance||o||(o=v("event",N,{type:"event",buffered:!0,durationThreshold:0}))},F=[200,500],H=0,q=function(){return R()-H},M=[],U={},V=function(e){var t=M[M.length-1],n=U[e.interactionId];if(n||M.length<10||e.duration>t.latency){if(n)n.entries.push(e),n.latency=Math.max(n.latency,e.duration);else{var i={id:e.interactionId,latency:e.duration,entries:[e]};U[i.id]=i,M.push(i)}M.sort(function(e,t){return t.latency-e.latency}),M.splice(10).forEach(function(e){delete U[e.id]})}},j=function(e,t){t=t||{},E(function(){A();var n,i,r=p("INP"),o=function(e){e.forEach(function(e){e.interactionId&&V(e),"first-input"!==e.entryType||M.some(function(t){return t.entries.some(function(t){return e.duration===t.duration&&e.startTime===t.startTime})})||V(e)});var t,n=M[t=Math.min(M.length-1,Math.floor(q()/50))];n&&n.latency!==r.value&&(r.value=n.latency,r.entries=n.entries,i())},a=v("event",o,{durationThreshold:null!==(n=t.durationThreshold)&&void 0!==n?n:40});i=$(e,r,F,t.reportAllChanges),a&&("interactionId"in PerformanceEventTiming.prototype&&a.observe({type:"first-input",buffered:!0}),g(function(){o(a.takeRecords()),r.value<0&&q()>0&&(r.value=0,r.entries=[]),i(!0)}),f(function(){M=[],H=R(),r=p("INP"),i=$(e,r,F,t.reportAllChanges)}))})},z=[2500,4e3],G={};return e.onINP=function(e,t){j(function(t){(function(e){if(e.entries.length){var t=e.entries.sort(function(e,t){return t.duration-e.duration||t.processingEnd-t.processingStart-(e.processingEnd-e.processingStart)})[0];e.attribution={eventTarget:s(t.target),eventType:t.name,eventTime:t.startTime,eventEntry:t,loadState:u(t.startTime)}}else e.attribution={}})(t),e(t)},t)},e.onLCP=function(e,t){var n,i;n=function(t){(function(e){if(e.entries.length){var t=a();if(t){var n=t.activationStart||0,i=e.entries[e.entries.length-1],r=i.url&&performance.getEntriesByType("resource").filter(function(e){return e.name===i.url})[0],o=Math.max(0,t.responseStart-n),u=Math.max(o,r?(r.requestStart||r.startTime)-n:0),c=Math.max(u,r?r.responseEnd-n:0),d=Math.max(c,i?i.startTime-n:0),f={element:s(i.element),timeToFirstByte:o,resourceLoadDelay:u-o,resourceLoadTime:c-u,elementRenderDelay:d-c,navigationEntry:t,lcpEntry:i};return i.url&&(f.url=i.url),r&&(f.lcpResourceEntry=r),void(e.attribution=f)}}e.attribution={timeToFirstByte:0,resourceLoadDelay:0,resourceLoadTime:0,elementRenderDelay:e.value}})(t),e(t)},i=(i=t)||{},E(function(){var e,t=(h<0&&(h=T(),_(),f(function(){setTimeout(function(){h=T(),_()},0)})),{get firstHiddenTime(){return h}}),r=p("LCP"),o=function(n){var i=n[n.length-1];i&&i.startTime<t.firstHiddenTime&&(r.value=Math.max(i.startTime-l(),0),r.entries=[i],e())},a=v("largest-contentful-paint",o);if(a){e=$(n,r,z,i.reportAllChanges);var u=y(function(){G[r.id]||(o(a.takeRecords()),a.disconnect(),G[r.id]=!0,e(!0))});["keydown","click"].forEach(function(e){addEventListener(e,function(){return setTimeout(u,0)},!0)}),g(u),f(function(t){r=p("LCP"),e=$(n,r,z,i.reportAllChanges),m(function(){r.value=performance.now()-t.timeStamp,G[r.id]=!0,e(!0)})})}})},Object.defineProperty(e,"__esModule",{value:!0}),e}({});
</script>

        <script nonce="E2wVd4rYNGISw7hVQSf1UFLF">
        window.Etsy=window.Etsy||{};
        Etsy.Context=Etsy.Context||{};
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
            Etsy.Context.feature=assign(Etsy.Context.feature ? Etsy.Context.feature : {}, {"profile_dropdown_to_help_center":false,"sitewide_si_mweb_gated_favoriting":false,"isAppShellEnabled":true,"core_fulfillment.product_level_readiness_states":false,"seller_platform_web.buyer_inquiry":false,"seller_platform_web.seller_local_time":false,"seller_platform_web.item_detail_overlay":false,"buyer_promise.issue_resolution.fee_avoidance_v2":false,"content_moderation.convo_safety.structured_convos":false});
            Etsy.Context.data=assign(Etsy.Context.data ? Etsy.Context.data : {}, {"is_mobile":false,"should_auto_redirect":false,"locale_settings":{"language":{"code":"en-US","id":0,"name":"English (US)","translation":"English (US)","is_detected":false,"is_default":true},"currency":{"currency_id":840,"code":"USD","name":"United States Dollar","number_precision":2,"symbol":"$","listing_enabled":true,"browsing_enabled":true,"buyer_location_restricted":false,"rate_updates_enabled":true,"is_detected":false,"is_default":true,"append_currency_symbol":false},"region":{"code":"NG","country_id":162,"name":"Nigeria","translation":"Nigeria","is_detected":false,"is_default":false,"is_EU_region":false},"subdir_code":""},"neu_api_specs_sample_rate":null,"FB_GRAPHQL_VERSION":"v2.10","page_guid":"fd93e415719.0337a94ae9590602330a.00","primary_event_name":"view_listing","request_uuid":"EujR0QKyLigxy5JvMqQsHaI5URda","user_is_test_account":false,"user_id":null,"css_variant":"sasquatch","runtime_analysis":false,"collage_shadow_dom_css_url":"https:\/\/www.etsy.com\/ac\/sasquatch\/css\/web-toolkit-v2\/web_components.9058938d506ce8.css","guest_uaid":["77bThXHJ0Ir5Gx-yv_YVX9oPlB7M","77bThXHJ0Ir5Gx-yv_YVX9oPlB7M"],"is_app_shell":true,"csrf_nonce":"3:1742572679:4sSW0IMWG3y87oyCA5jOu_58P8oQ:80fbaf77d9a0618c28432af07cb43c283e27d0563f16f2752484bda4f6e3ddf5","uaid_nonce":"3:1742572679:YYCz_X6irVNqM8cGrAkMiA57QXx_:7fdbaaf2713dc46e65a0093b5996ab1089b1433d6595050134e1535e20f072c1","clientlogger":{"is_enabled":true,"endpoint":"\/clientlog","logs_per_page":6,"id":"EujR0QKyLigxy5JvMqQsHaI5URda","digest":"9646017909f1b4f41383d29ba26167e5901439d6","enabled_features":["info","warn","error","basic","uncaught"]},"impact_tracker_should_prompt_signin":false,"impact_tracker_should_direct_open":false,"shop_favorites_see_all_link":"See all","shop_favorites_search_header":"Shops you follow","is_mobile_shop_search":false,"show_simplified_mobile_header":false,"is_eligible_for_ship_to_setting_in_global_header":false,"is_eligible_for_sticky_search_bar_desktop":false,"in_cart_count":0,"page_type":"view_listing","is_desktop_mini_favorites_operational_enabled":false,"clickable_nav":true,"has_dropdown":true,"add_vintage_node":false,"images_in_l2":false,"recs":[],"mweb_full_screen_search_dropdown":false,"relocate_cat_nav":false,"zero_pane_recent_searches":[],"is_eligible_to_fetch_category_suggestions":false,"category_suggestions_in_autosuggest_variant":null,"is_eligible_for_trending_searches_in_zero_pane_v3":false,"is_eligible_for_loading_spinner_in_search_bar":false,"is_eligible_for_contentful_title_on_trending_searches":false,"mott_version":"cf44ab3","catnav_show_sales":false,"catnav_gift_guide":"off","gifting_catnav_flyout_js":false,"should_show_registry_on_nav":false,"should_use_gifting_taxos_in_nav_flyout":false,"impact_message":{"footer_renewable_impact":{"impact_name":"footer_renewable_impact","impact_themes":["sustainability"],"impact_audiences":["buyers"]},"lp_impact_narrative_banner_carbon":{"impact_name":"lp_impact_narrative_banner_carbon","impact_themes":["carbon"],"impact_audiences":["buyers"]}},"airgap_url":"https:\/\/consent-manager.etsystatic.com\/cm\/ac71e058-41b7-4026-b482-3d9b8e31a6d0\/airgap.js","airgap_bundle":"control_bundle","dual_write_enabled":false,"dynamic_privacy_settings_ui_enabled":false,"forced_data_regimes":"","has_forced_data_regimes":false,"seller_is_viewing_own_listing":false,"listingId":1713702609,"listing_price":87,"shopId":21832647,"shop_id":21832647,"shop_name":"AmourLinen","custom_orders_listings2":true,"is_listing_preview":false,"checkout_decorator":"","was_landing_from_external_referrer":false,"should_collapse_neighbors":false,"should_open_single_content_toggle":false,"referring_listing_id":1713702609,"address_formats":{"0":{"postal_code_type":"postal","postal_code_pattern":null,"postal_code_placeholder":"","country_iso_code":"ZZ"},"306":{"postal_code_type":"postal","postal_code_pattern":"22\\d{3}","postal_code_placeholder":"","country_iso_code":"AX"},"57":{"postal_code_type":"Postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"AL"},"95":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"DZ"},"250":{"postal_code_type":"zip","postal_code_pattern":"(96799)(?:[ \\-](\\d{4}))?","postal_code_placeholder":"","country_iso_code":"AS"},"228":{"postal_code_type":"postal","postal_code_pattern":"AD[1-7]0\\d","postal_code_placeholder":"","country_iso_code":"AD"},"59":{"postal_code_type":"postal","postal_code_pattern":"((?:[A-HJ-NP-Z])?\\d{4})([A-Z]{3})?","postal_code_placeholder":"","country_iso_code":"AR"},"60":{"postal_code_type":"postal","postal_code_pattern":"(37)?\\d{4}","postal_code_placeholder":"","country_iso_code":"AM"},"61":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"3393","country_iso_code":"AU"},"62":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"AT"},"63":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"AZ"},"232":{"postal_code_type":"postal","postal_code_pattern":"(?:\\d|1[0-2])\\d{2}","postal_code_placeholder":"","country_iso_code":"BH"},"68":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"BD"},"237":{"postal_code_type":"Postal","postal_code_pattern":"BB\\d{5}","postal_code_placeholder":"","country_iso_code":"BB"},"71":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"BY"},"65":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"BE"},"225":{"postal_code_type":"postal","postal_code_pattern":"[A-Z]{2} ?[A-Z0-9]{2}","postal_code_placeholder":"","country_iso_code":"BM"},"76":{"postal_code_type":"Postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"BT"},"70":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"BA"},"74":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}-?\\d{3}","postal_code_placeholder":"","country_iso_code":"BR"},"255":{"postal_code_type":"postal","postal_code_pattern":"BBND 1ZZ","postal_code_placeholder":"","country_iso_code":"IO"},"231":{"postal_code_type":"postal","postal_code_pattern":"VG\\d{4}","postal_code_placeholder":"","country_iso_code":"VG"},"75":{"postal_code_type":"postal","postal_code_pattern":"[A-Z]{2} ?\\d{4}","postal_code_placeholder":"","country_iso_code":"BN"},"69":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"BG"},"135":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"KH"},"79":{"postal_code_type":"postal","postal_code_pattern":"[ABCEGHJKLMNPRSTVXY]\\d[ABCEGHJ-NPRSTV-Z] ?\\d[ABCEGHJ-NPRSTV-Z]\\d","postal_code_placeholder":"A1A 1A1","country_iso_code":"CA"},"222":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"CV"},"247":{"postal_code_type":"postal","postal_code_pattern":"KY\\d-\\d{4}","postal_code_placeholder":"","country_iso_code":"KY"},"81":{"postal_code_type":"postal","postal_code_pattern":"\\d{7}","postal_code_placeholder":"","country_iso_code":"CL"},"82":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"CN"},"257":{"postal_code_type":"postal","postal_code_pattern":"6798","postal_code_placeholder":"","country_iso_code":"CX"},"258":{"postal_code_type":"postal","postal_code_pattern":"6799","postal_code_placeholder":"","country_iso_code":"CC"},"86":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"CO"},"87":{"postal_code_type":"postal","postal_code_pattern":"\\d{4,5}|\\d{3}-\\d{4}","postal_code_placeholder":"","country_iso_code":"CR"},"118":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"HR"},"89":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"CY"},"90":{"postal_code_type":"postal","postal_code_pattern":"\\d{3} ?\\d{2}","postal_code_placeholder":"","country_iso_code":"CZ"},"93":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"DK"},"94":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"DO"},"96":{"postal_code_type":"postal","postal_code_pattern":"[A-Z]\\d{4}[A-Z]|(?:[A-Z]{2})?\\d{6}","postal_code_placeholder":"","country_iso_code":"EC"},"97":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"EG"},"187":{"postal_code_type":"postal","postal_code_pattern":"CP [1-3][1-7][0-2]\\d","postal_code_placeholder":"CP 1101","country_iso_code":"SV"},"100":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"EE"},"101":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"ET"},"262":{"postal_code_type":"postal","postal_code_pattern":"FIQQ 1ZZ","postal_code_placeholder":"","country_iso_code":"FK"},"241":{"postal_code_type":"postal","postal_code_pattern":"\\d{3}","postal_code_placeholder":"","country_iso_code":"FO"},"102":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"FI"},"103":{"postal_code_type":"postal","postal_code_pattern":"\\d{2} ?\\d{3}","postal_code_placeholder":"75000","country_iso_code":"FR"},"115":{"postal_code_type":"postal","postal_code_pattern":"9[78]3\\d{2}","postal_code_placeholder":"","country_iso_code":"GF"},"263":{"postal_code_type":"postal","postal_code_pattern":"987\\d{2}","postal_code_placeholder":"","country_iso_code":"PF"},"106":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"GE"},"91":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"80331","country_iso_code":"DE"},"226":{"postal_code_type":"postal","postal_code_pattern":"GX11 1AA","postal_code_placeholder":"","country_iso_code":"GI"},"112":{"postal_code_type":"postal","postal_code_pattern":"\\d{3} ?\\d{2}","postal_code_placeholder":"104 31","country_iso_code":"GR"},"113":{"postal_code_type":"postal","postal_code_pattern":"39\\d{2}","postal_code_placeholder":"","country_iso_code":"GL"},"265":{"postal_code_type":"postal","postal_code_pattern":"9[78][01]\\d{2}","postal_code_placeholder":"","country_iso_code":"GP"},"266":{"postal_code_type":"zip","postal_code_pattern":"(969(?:[12]\\d|3[12]))(?:[ \\-](\\d{4}))?","postal_code_placeholder":"","country_iso_code":"GU"},"114":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"GT"},"305":{"postal_code_type":"postal","postal_code_pattern":"GY\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}","postal_code_placeholder":"","country_iso_code":"GG"},"108":{"postal_code_type":"postal","postal_code_pattern":"\\d{3}","postal_code_placeholder":"","country_iso_code":"GN"},"110":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"GW"},"119":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"HT"},"267":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"HM"},"268":{"postal_code_type":"postal","postal_code_pattern":"00120","postal_code_placeholder":"","country_iso_code":"VA"},"117":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"HN"},"120":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"HU"},"126":{"postal_code_type":"postal","postal_code_pattern":"\\d{3}","postal_code_placeholder":"","country_iso_code":"IS"},"122":{"postal_code_type":"pin","postal_code_pattern":"^[1-9][0-9]{5}$","postal_code_placeholder":"110001","country_iso_code":"IN"},"121":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"ID"},"124":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}-?\\d{5}","postal_code_placeholder":"","country_iso_code":"IR"},"125":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"IQ"},"123":{"postal_code_type":"postal","postal_code_pattern":null,"postal_code_placeholder":"","country_iso_code":"IE"},"269":{"postal_code_type":"postal","postal_code_pattern":"IM\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}","postal_code_placeholder":"","country_iso_code":"IM"},"127":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}(?:\\d{2})?","postal_code_placeholder":"","country_iso_code":"IL"},"128":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"50100","country_iso_code":"IT"},"131":{"postal_code_type":"postal","postal_code_pattern":"\\d{3}-?\\d{4}","postal_code_placeholder":"100-0001","country_iso_code":"JP"},"307":{"postal_code_type":"postal","postal_code_pattern":"JE\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}","postal_code_placeholder":"","country_iso_code":"JE"},"130":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"JO"},"132":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"KZ"},"133":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"KE"},"137":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"KW"},"134":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"KG"},"138":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"LA"},"146":{"postal_code_type":"postal","postal_code_pattern":"LV-\\d{4}","postal_code_placeholder":"","country_iso_code":"LV"},"139":{"postal_code_type":"postal","postal_code_pattern":"(?:\\d{4})(?: ?(?:\\d{4}))?","postal_code_placeholder":"","country_iso_code":"LB"},"143":{"postal_code_type":"postal","postal_code_pattern":"\\d{3}","postal_code_placeholder":"","country_iso_code":"LS"},"140":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"LR"},"272":{"postal_code_type":"postal","postal_code_pattern":"(948[5-9])|(949[0-7])","postal_code_placeholder":"","country_iso_code":"LI"},"144":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"LT"},"145":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"LU"},"151":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"MK"},"149":{"postal_code_type":"postal","postal_code_pattern":"\\d{3}","postal_code_placeholder":"","country_iso_code":"MG"},"159":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"MY"},"238":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"MV"},"227":{"postal_code_type":"postal","postal_code_pattern":"[A-Z]{3} ?\\d{2,4}","postal_code_placeholder":"","country_iso_code":"MT"},"274":{"postal_code_type":"zip","postal_code_pattern":"(969[67]\\d)(?:[ \\-](\\d{4}))?","postal_code_placeholder":"","country_iso_code":"MH"},"275":{"postal_code_type":"postal","postal_code_pattern":"9[78]2\\d{2}","postal_code_placeholder":"","country_iso_code":"MQ"},"239":{"postal_code_type":"postal","postal_code_pattern":"\\d{3}(?:\\d{2}|[A-Z]{2}\\d{3})","postal_code_placeholder":"","country_iso_code":"MU"},"276":{"postal_code_type":"postal","postal_code_pattern":"976\\d{2}","postal_code_placeholder":"","country_iso_code":"YT"},"150":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"MX"},"277":{"postal_code_type":"zip","postal_code_pattern":"(9694[1-4])(?:[ \\-](\\d{4}))?","postal_code_placeholder":"","country_iso_code":"FM"},"148":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"MD"},"278":{"postal_code_type":"postal","postal_code_pattern":"980\\d{2}","postal_code_placeholder":"","country_iso_code":"MC"},"154":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"MN"},"155":{"postal_code_type":"postal","postal_code_pattern":"8\\d{4}","postal_code_placeholder":"","country_iso_code":"ME"},"147":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"MA"},"153":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"MM"},"166":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"NP"},"233":{"postal_code_type":"postal","postal_code_pattern":"988\\d{2}","postal_code_placeholder":"","country_iso_code":"NC"},"167":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"3974","country_iso_code":"NZ"},"163":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"NI"},"161":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"NE"},"162":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"NG"},"282":{"postal_code_type":"postal","postal_code_pattern":"2899","postal_code_placeholder":"","country_iso_code":"NF"},"283":{"postal_code_type":"zip","postal_code_pattern":"(9695[012])(?:[ \\-](\\d{4}))?","postal_code_placeholder":"","country_iso_code":"MP"},"165":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"NO"},"168":{"postal_code_type":"postal","postal_code_pattern":"(PC )?\\d{3}","postal_code_placeholder":"","country_iso_code":"OM"},"169":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"PK"},"284":{"postal_code_type":"zip","postal_code_pattern":"(969(?:39|40))(?:[ \\-](\\d{4}))?","postal_code_placeholder":"","country_iso_code":"PW"},"173":{"postal_code_type":"postal","postal_code_pattern":"\\d{3}","postal_code_placeholder":"","country_iso_code":"PG"},"178":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"PY"},"171":{"postal_code_type":"Postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"PE"},"172":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"PH"},"174":{"postal_code_type":"postal","postal_code_pattern":"\\d{2}-\\d{3}","postal_code_placeholder":"10-345","country_iso_code":"PL"},"177":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}-\\d{3}","postal_code_placeholder":"1000-205","country_iso_code":"PT"},"175":{"postal_code_type":"zip","postal_code_pattern":"(00[679]\\d{2})(?:[ \\-](\\d{4}))?","postal_code_placeholder":"","country_iso_code":"PR"},"304":{"postal_code_type":"postal","postal_code_pattern":"9[78]4\\d{2}","postal_code_placeholder":"","country_iso_code":"RE"},"180":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"RO"},"181":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"101000","country_iso_code":"RU"},"308":{"postal_code_type":"postal","postal_code_pattern":"9[78][01]\\d{2}","postal_code_placeholder":"","country_iso_code":"BL"},"286":{"postal_code_type":"postal","postal_code_pattern":"(ASCN|STHL) 1ZZ","postal_code_placeholder":"","country_iso_code":"SH"},"288":{"postal_code_type":"postal","postal_code_pattern":"9[78][01]\\d{2}","postal_code_placeholder":"","country_iso_code":"MF"},"289":{"postal_code_type":"postal","postal_code_pattern":"9[78]5\\d{2}","postal_code_placeholder":"","country_iso_code":"PM"},"249":{"postal_code_type":"Postal","postal_code_pattern":"VC\\d{4}","postal_code_placeholder":"","country_iso_code":"VC"},"291":{"postal_code_type":"postal","postal_code_pattern":"4789\\d","postal_code_placeholder":"","country_iso_code":"SM"},"183":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"SA"},"185":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"SN"},"189":{"postal_code_type":"postal","postal_code_pattern":"\\d{5,6}","postal_code_placeholder":"","country_iso_code":"RS"},"220":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"SG"},"191":{"postal_code_type":"postal","postal_code_pattern":"\\d{3} ?\\d{2}","postal_code_placeholder":"","country_iso_code":"SK"},"192":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"SI"},"188":{"postal_code_type":"postal","postal_code_pattern":"[A-Z]{2} ?\\d{5}","postal_code_placeholder":"","country_iso_code":"SO"},"215":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"ZA"},"294":{"postal_code_type":"postal","postal_code_pattern":"SIQQ 1ZZ","postal_code_placeholder":"","country_iso_code":"GS"},"136":{"postal_code_type":"postal","postal_code_pattern":"\\d{3}(?:\\d{2}|-\\d{3})","postal_code_placeholder":"","country_iso_code":"KR"},"99":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"28013","country_iso_code":"ES"},"142":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"LK"},"295":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"SJ"},"194":{"postal_code_type":"postal","postal_code_pattern":"[HLMS]\\d{3}","postal_code_placeholder":"","country_iso_code":"SZ"},"193":{"postal_code_type":"postal","postal_code_pattern":"\\d{3} ?\\d{2}","postal_code_placeholder":"","country_iso_code":"SE"},"80":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"CH"},"204":{"postal_code_type":"postal","postal_code_pattern":"\\d{3}(\\d{2})?","postal_code_placeholder":"","country_iso_code":"TW"},"199":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"TJ"},"205":{"postal_code_type":"postal","postal_code_pattern":"\\d{4,5}","postal_code_placeholder":"","country_iso_code":"TZ"},"198":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"TH"},"164":{"postal_code_type":"postal","postal_code_pattern":"\\d{4} ?[A-Z]{2}","postal_code_placeholder":"1105 AW","country_iso_code":"NL"},"202":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"TN"},"203":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"TR"},"200":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"TM"},"299":{"postal_code_type":"postal","postal_code_pattern":"TKCA 1ZZ","postal_code_placeholder":"","country_iso_code":"TC"},"207":{"postal_code_type":"postal","postal_code_pattern":"^([0-8][0-9]{4}|9[0-3][0-9]{3}|94[0-8][0-9]{2}|949[0-8][0-9]|9499[0-9])$","postal_code_placeholder":"","country_iso_code":"UA"},"105":{"postal_code_type":"postal","postal_code_pattern":"^(GIR ?0AA|((AB|AL|B|BA|BB|BD|BF|BH|BL|BN|BR|BS|BT|BX|CA|CB|CF|CH|CM|CO|CR|CT|CV|CW|DA|DD|DE|DG|DH|DL|DN|DT|DY|E|EC|EH|EN|EX|FK|FY|G|GL|GY|GU|HA|HD|HG|HP|HR|HS|HU|HX|IG|IM|IP|IV|JE|KA|KT|KW|KY|L|LA|LD|LE|LL|LN|LS|LU|M|ME|MK|ML|N|NE|NG|NN|NP|NR|NW|OL|OX|PA|PE|PH|PL|PO|PR|RG|RH|RM|S|SA|SE|SG|SK|SL|SM|SN|SO|SP|SR|SS|ST|SW|SY|TA|TD|TF|TN|TQ|TR|TS|TW|UB|W|WA|WC|WD|WF|WN|WR|WS|WV|YO|ZE)(\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}))|BFPO ?\\d{1,4})$","postal_code_placeholder":"NW1 6XE","country_iso_code":"GB"},"209":{"postal_code_type":"zip","postal_code_pattern":"^\\d{5}(?:-\\d{4})?$","postal_code_placeholder":"12345","country_iso_code":"US"},"302":{"postal_code_type":"zip","postal_code_pattern":"96898","postal_code_placeholder":"","country_iso_code":"UM"},"208":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"UY"},"248":{"postal_code_type":"zip","postal_code_pattern":"(008(?:(?:[0-4]\\d)|(?:5[01])))(?:[ \\-](\\d{4}))?","postal_code_placeholder":"","country_iso_code":"VI"},"210":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"UZ"},"211":{"postal_code_type":"postal","postal_code_pattern":"\\d{4}","postal_code_placeholder":"","country_iso_code":"VE"},"212":{"postal_code_type":"postal","postal_code_pattern":"\\d{6}","postal_code_placeholder":"","country_iso_code":"VN"},"224":{"postal_code_type":"postal","postal_code_pattern":"986\\d{2}","postal_code_placeholder":"","country_iso_code":"WF"},"213":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"EH"},"217":{"postal_code_type":"postal","postal_code_pattern":"\\d{5}","postal_code_placeholder":"","country_iso_code":"ZM"}},"ship_to_preference_capabilities":{"209":{"postal_code":{"is_assignable":true,"is_required":true}},"79":{"postal_code":{"is_assignable":true,"is_required":true}},"122":{"postal_code":{"is_assignable":true,"is_required":true}},"61":{"postal_code":{"is_assignable":true,"is_required":true}},"105":{"postal_code":{"is_assignable":true,"is_required":true}}},"category_id":68887416,"admin_tools_page_data":[],"currency_data":{"currency_id":840,"code":"USD","name":"United States Dollar","number_precision":2,"symbol":"$","listing_enabled":true,"browsing_enabled":true,"buyer_location_restricted":false,"rate_updates_enabled":true},"machine_translation\/listings_click_to_translate":true,"ads.prolist\/log_clicks_and_impressions":false,"mfg\/dovetail":true,"mfg\/buyer_facing_dovetail":true,"searchx\/4q18\/dwell_time_as_backend_event":false,"is_regulatory_buyer_disclosure_enabled":true,"machine_translation":{"mode":"disabled","listing_id":1713702609,"to_lang_code":"en-US","from_lang_code":"en-US","translated":null,"untranslated":null,"category_tags":null},"listing_fee":20,"presented_listing_fee":"USD 0.20 USD","listing_period_months":4,"apple_pay_api_version_number":12,"render_is_gift_section":true,"should_show_sidebar_cart_post_atc_recs":false,"is_gift_guide_flyout_enabled":false,"should_hide_sub_nav":true,"should_show_breadcrumbs":true,"listing_image_url":"","eligible_for_mini_collections_and_ignore_menu":false,"image_ids_by_listing_variation_ids":{"4442447549":5914373744},"should_show_scrollable_thumbnails":true,"shouldShowThumbnails":true,"carousel_height_percentage_relative_to_width":[80,80,80,80,80,80,80,80,80],"is_mobile_experience":false,"is_users_own_listing":false,"sale_ending_soon_countdown":false,"neu_buy_box_type":"offerings","listing_id":1713702609,"klarna_osm_js":"https:\/\/js.klarna.com\/web-sdk\/v1\/klarna.js","is_eligible_for_klarna_osm":false,"faq_ids":[714737998948],"product_details_content_toggle_selector":"[data-wt-content-toggle][aria-controls='content-toggle-product-details-read-more']","should_show_description_content_toggle":true,"use_shipping_variant_view":true,"shipping_section_default_open":true,"shipping_and_returns_is_eligible_for_sticky_buy_box":true,"estimated_shipping_is_eligible_for_sticky_buy_box":true,"is_eligible_for_shipping_and_returns_cleanup":true,"is_postal_code_empty_on_initial_load":true,"invalid_postal_codes":{"209":["000","001","002","003","004","213","269","343","345","348","353","419","428","429","517","518","519","529","533","536","552","568","569","578","579","589","621","632","642","643","659","663","682","694","695","696","697","698","699","702","709","715","732","742","771","817","818","819","839","848","849","854","858","861","862","866","867","868","869","872","886","887","888","892","896","899","909","929","987"]},"is_eligible_for_policies_in_overlay":true,"active_tab":"","allow_reviews_debug":false,"using_mweb_tabs":false,"load_tabbed_layout_js":false,"should_show_helpful_count":true,"should_default_chronological_sort":false,"should_include_subratings":true,"structured_policies_messages":{"module_name":"Shop policies","last_updated_on":"Last updated on","publish":"Publish Shop Policies","policies_save":"Save policies","policies_edit":"Edit policies","cancel":"Cancel","revert":"Use previous policies","edit":"Edit","loading":"Loading","preview_banner_kicker":"Policies preview","not_existing_policies_preview_banner_header":"Review and customize these policies so they work for you","preview_banner_body":"You can publish these to your shop or edit them if you need to make changes","preview_publish_confirm":"By clicking Publish, you'll post your Shop Policies and agree to comply with them.","revert_confirm":"Are you sure you want to revert?","leave_page_warning":"You are currently editing shop policies","private_receipt_info_title":"Private receipt info","private_receipt_info_body":"We have removed the 'Private Receipt Info' section of your policies page. You don't need to populate this section for the purposes of complying with international consumer protection laws anymore because this new Policies feature will automatically display the relevant content of your shop policies within the buyer receipt email instead.","private_receipt_info_link":"See this FAQ for more information","structured_banner_title":"Switch to simple shop policies","structured_banner_title_v2":"Set up simple shop policies","structured_banner_body":"We'll give you a quick template to create your shop policies in seconds.","structured_banner_button":"Try it now","new_simplified_policies":"Your new, simplified policies","new_policies_banner_description_1":"Buyers prefer policies that are short, clear and address their key concerns, so we've designed them that way.","new_policies_banner_description_2":"Review and customize these policies so they work for you. We've saved your previous policies, so you can always switch back.","new_policies_banner_description_3":"We've saved your previous policies, so you can always switch back.","new_policies_banner_learn_more":"Learn more","publish_policies_success":"Your new policies have been published!","publish_policies_error":"There was an error publishing your policies. Please try again.","policies_failed_to_load":"Shop policies failed to load","policies_try_again":"Try again","policies_saving":"Saving...","policies_publishing":"Publishing...","listing_preview_shipping":"This section will show shipping or download information once you publish your listing.","craft_shipping_section_title":"Shipping & policies","craft_payments_section_title":"Payments","craft_refunds_section_title":"Returns & exchanges","craft_terms_section_title":"Terms & conditions","craft_more_details_accordion_label":"+ See more...","listing_returns_and_exchanges":"See item details for return and exchange eligibility.","no_policies":"Looks like this shop doesn't have any custom policies. Have questions?","message_the_seller":"Message the seller","shipping_section_title":"Shipping","payments_section_title":"Payments","refunds_section_title":"Returns & exchanges","digital_section_title":"Downloads","terms_section_title":"Terms & conditions","more_details_accordion_label":"See more...","seller_details_section_title":"More information"},"shop_policy_selector":"[data-content-toggle-uid=shop_policies]","has_external_mobile_image_tags":false,"tag_cards_with_image":".r7g0lgy15537","load_user_faves_option":true,"update_many_faves_option":true,"is_async_only_faves_option":false,"guest_favorites_enabled":true,"collection_count":0,"favorites_key":"","use_clearer_privacy_description":true,"conditional_sale_interstitial":true,"google_client_id":"296956783393-2d8r0gljo87gjmdpmvkgbeasdmelq33e.apps.googleusercontent.com","show_one_tap_modal":false});
        })();
    </script>

        <script nonce="E2wVd4rYNGISw7hVQSf1UFLF">__webpack_public_path__ = "https://www.etsy.com/ac/primaryVendor/js/en-US/";</script>

<script nonce="E2wVd4rYNGISw7hVQSf1UFLF">(function() {
var asyncAvailable = true;
try {
    eval("async () => {}");
} catch(e) {
    asyncAvailable = false;
}

var falseUA = false && !asyncAvailable;
var primarySupportsAsync = !false && asyncAvailable;

var clientloggerIsEnabled = true;
if (clientloggerIsEnabled) {
    if (falseUA) {
        new Image().src = '/clientlog?falseua=1';
    }
    if (primarySupportsAsync) {
        new Image().src = '/clientlog?primarysupportsasync=1';
    }
    if (window.__etsy_logging && window.__etsy_logging.bots && (window.__etsy_logging.bots.isBot || window.__etsy_logging.bots.botCheck.length > 0)) {
        new Image().src = '/clientlog?feisbot=1&bot_check=' + encodeURIComponent(JSON.stringify(window.__etsy_logging.bots.botCheck));
    }
}

})();</script>

    <script nonce="E2wVd4rYNGISw7hVQSf1UFLF" src="https://www.etsy.com/paula/v3/polyfill.min.js?etsy-v=v5&flags=gated&features=AbortController%2CDOMTokenList.prototype.@@iterator%2CDOMTokenList.prototype.forEach%2CIntersectionObserver%2CIntersectionObserverEntry%2CNodeList.prototype.@@iterator%2CNodeList.prototype.forEach%2CObject.preventExtensions%2CString.prototype.anchor%2CString.raw%2Cdefault%2Ces2015%2Ces2016%2Ces2017%2Ces2018%2Ces2019%2Ces2020%2Ces2021%2Ces2022%2Cfetch%2CgetComputedStyle%2CmatchMedia%2Cperformance.now" defer></script>
    <script nonce="E2wVd4rYNGISw7hVQSf1UFLF" src="https://www.etsy.com/ac/primaryVendor/js/en-US/vendor_bundle.7829385079c4a6d5e5e3.js" defer></script>
    <script nonce="E2wVd4rYNGISw7hVQSf1UFLF" src="https://www.etsy.com/ac/primaryVendor/js/en-US/etsy_libs.1f8df0f2f5349fd0a4e4.js" defer></script>
    <script nonce="E2wVd4rYNGISw7hVQSf1UFLF" src="https://www.etsy.com/ac/primaryVendor/js/en-US/app-shell/globals/index.f9e8af9960765800d0ec.js" defer></script>
    <script nonce="E2wVd4rYNGISw7hVQSf1UFLF" src="https://www.etsy.com/ac/primaryVendor/js/en-US/@etsy-modules/ConsentManagement/Transcend-Integration.e2f0a47794e5eb4d53a0.js" defer></script>
    <script nonce="E2wVd4rYNGISw7hVQSf1UFLF" src="https://www.etsy.com/ac/primaryVendor/js/en-US/bootstrap/listings3/main.b4e3728f7f01f84db4ba.js" defer></script>

        <main id="content">
            <div data-ui="listing-breadcrumbs" class="wt-hide-xs wt-show-lg breadcrumb_nav">
    <div data-ui="cat-nav" id="desktop-category-nav" class="cat-nav  v2-toolkit-cat-nav wt-ml-xs-0 wt-mr-xs-0">
        <div class="wt-text-caption wt-position-relative wt-z-index-5 wt-pt-xs-2">
                <div class="wt-grid wt-body-max-width wt-pl-xs-2 wt-pr-xs-2 wt-pl-md-4 wt-pr-md-4 wt-pl-lg-6 wt-pr-lg-6">
                <ul class="wt-list-unstyled wt-grid__item-xs-12 wt-body-max-width wt-display-flex-xs wt-justify-content-center" data-menu-ui="menubar" data-ui="top-nav-category-list">
                        <li data-ui="list-item-breadcrumbs" class="top-nav-item wt-text-black wt-text-body-small--tight wt-pb-xs-2">
                            <a data-breadcrumb-link data-menu-ui="menuitem" tabindex="0" href="https://www.etsy.com/?ref=catnav_breadcrumb-home">Homepage</a>
                                <span class="etsy-icon arrow-separator wt-text-black wt-icon--smallest-xs"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M8 21a1 1 0 0 1-.664-1.747l8.164-7.254-8.164-7.252a1 1 0 0 1 1.328-1.494L18.5 12l-9.836 8.747A1 1 0 0 1 8 21"/></svg></span>
                        </li>
                        <li data-ui="list-item-breadcrumbs" class="top-nav-item wt-text-black wt-text-body-small--tight wt-pb-xs-2">
                            <a data-breadcrumb-link data-menu-ui="menuitem" tabindex="0" href="https://www.etsy.com/c/clothing?ref=catnav_breadcrumb-0&pro=1&frs=1&explicit=1">Clothing</a>
                                <span class="etsy-icon arrow-separator wt-text-black wt-icon--smallest-xs"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M8 21a1 1 0 0 1-.664-1.747l8.164-7.254-8.164-7.252a1 1 0 0 1 1.328-1.494L18.5 12l-9.836 8.747A1 1 0 0 1 8 21"/></svg></span>
                        </li>
                        <li data-ui="list-item-breadcrumbs" class="top-nav-item wt-text-black wt-text-body-small--tight wt-pb-xs-2">
                            <a data-breadcrumb-link data-menu-ui="menuitem" tabindex="0" href="https://www.etsy.com/c/clothing/womens-clothing?ref=catnav_breadcrumb-1&pro=1&frs=1&explicit=1">Women's Clothing</a>
                                <span class="etsy-icon arrow-separator wt-text-black wt-icon--smallest-xs"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M8 21a1 1 0 0 1-.664-1.747l8.164-7.254-8.164-7.252a1 1 0 0 1 1.328-1.494L18.5 12l-9.836 8.747A1 1 0 0 1 8 21"/></svg></span>
                        </li>
                        <li data-ui="list-item-breadcrumbs" class="top-nav-item wt-text-black wt-text-body-small--tight wt-pb-xs-2">
                            <a data-breadcrumb-link data-menu-ui="menuitem" tabindex="0" href="https://www.etsy.com/c/clothing/womens-clothing/tops-and-tees?ref=catnav_breadcrumb-2&pro=1&frs=1&explicit=1">Tops & Tees</a>
                        </li>
                </ul>
                <span class="active-nav-item-indicator wt-position-absolute wt-display-inline-block" data-ui="active-nav-item-indicator"></span>
        </div>
        </div>
    </div>
</div>



<div data-selector="listing-page-content" class="content-wrap listing-page-content">





    <div class="wt-pt-xs-5 listing-page-content-container-wider wt-horizontal-center">

        <div id="listing-right-column" class="listing-buy-box-experiment">

            <div>
                <div class="body-wrap wt-body-max-width wt-display-flex-md wt-flex-direction-column-xs">
                    <div class="image-col wt-order-xs-1 wt-mb-xs-2 wt-mb-lg-6 wt-pl-md-4 wt-pl-lg-5 wt-pl-xs-2 wt-pr-xs-2 wt-pr-xl-2 wt-pr-md-4 wt-pr-lg-0">
                        <div class="wt-flex-lg-6 wt-mr-lg-3 wt-pr-xl-3">
                            <div class="image-wrapper wt-position-relative carousel-container-responsive" id="photos">


        <div data-listing-page-badge
            style="margin-left: 78px; "
            class="wt-position-absolute wt-z-index-2 wt-position-top wt-position-left wt-mt-xs-1"
        >
            <div class="wt-popover" data-wt-popover>
    <button data-wt-popover-trigger
            class="wt-popover__trigger wt-popover__trigger--underline wt-display-inline-flex-xs wt-align-items-center wt-text-caption"
            aria-disabled="true"
            aria-describedby="etsys_pick"
    >
<span data-clg-id="WtBadge" class="wt-badge wt-badge--statusRecommendation wt-pl-xs-2">
                <span class="wt-icon wt-icon--smaller-xs wt-nudge-r-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="m15.4 14.1-3.7-1.9-1.8-3.6c-.3-.7-1.4-.7-1.8 0l-1.9 3.7-3.7 1.9c-.3.1-.5.4-.5.8q0 .6.6.9l3.7 1.9 1.9 3.7c.1.3.4.5.8.5q.6 0 .9-.6l1.9-3.7 3.7-1.9c.3-.2.6-.5.6-.9s-.3-.6-.7-.8m6-8L19 4.9l-1.2-2.4c-.3-.7-1.4-.7-1.8 0l-1.2 2.4-2.4 1.2c-.2.2-.4.5-.4.9q0 .6.6.9L15 9.1l1.2 2.4c.2.3.5.6.9.6q.6 0 .9-.6l1.2-2.4 2.4-1.2c.2-.2.4-.5.4-.9q0-.6-.6-.9"/></svg></span>Etsy’s Pick

</span>
    </button>
    <div id="etsys_pick" role="tooltip">
        Etsy’s Picks are hand selected by our style experts to highlight items from shops that have shown quality, reliability and style. <p class="wt-mt-xs-3"><a href="https://www.etsy.com/featured/hub/etsy-picks?ref=listing_etsys_pick_signal" target="_blank"> Discover More </a></p>
    </div>
</div>
        </div>


        <button
            class="btn--focus  wt-position-absolute wt-btn wt-btn--light wt-btn--small wt-z-index-2 wt-btn--filled wt-btn--icon wt-btn--fixed-floating wt-position-right wt-mr-xs-2 wt-mt-xs-2"
            data-ui="favorite-listing-button"
            data-listing-id="1713702609"
            data-accessible-btn-fave
            data-favorite-label="Add to Favorites"
            data-favorited-label="Remove from Favorites"


            data-always-show="true"

        >
            <div class="favorite-listing-button-icon-container should-animate "
                 data-source="lp_image_carousel"
                data-btn-fave
                data-neu-fave
                data-favorite-icon-container
            >
                <span class="etsy-icon wt-nudge-t-2&#10;                    &#10;                    &#10;                        &#10;                        &#10;                            wt-display-block&#10;                        &#10;                    " data-not-favorited-icon=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12,21C10.349,21,2,14.688,2,9,2,5.579,4.364,3,7.5,3A6.912,6.912,0,0,1,12,5.051,6.953,6.953,0,0,1,16.5,3C19.636,3,22,5.579,22,9,22,14.688,13.651,21,12,21ZM7.5,5C5.472,5,4,6.683,4,9c0,4.108,6.432,9.325,8,10,1.564-.657,8-5.832,8-10,0-2.317-1.472-4-3.5-4-1.979,0-3.7,2.105-3.721,2.127L11.991,8.1,11.216,7.12C11.186,7.083,9.5,5,7.5,5Z"/></svg></span>
                <span class="etsy-icon wt-nudge-t-2 wt-text-favorite-heart&#10;                    &#10;                    &#10;                        &#10;                        &#10;                            wt-display-none&#10;                        &#10;                    " data-favorited-icon=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M16.5,3A6.953,6.953,0,0,0,12,5.051,6.912,6.912,0,0,0,7.5,3C4.364,3,2,5.579,2,9c0,5.688,8.349,12,10,12S22,14.688,22,9C22,5.579,19.636,3,16.5,3Z"/></svg></span>
            </div>
            <span aria-hidden="true" class="icon"></span>
            <span class="wt-screen-reader-only" data-a11y-label>

                Add to Favorites
            </span>
            </button>



    <div class="listing-page-image-carousel-component wt-display-flex-xs wt-mb-lg-2 wt-mb-sm-8"
        data-component="listing-page-image-carousel"
        data-palette-listing-id="1713702609"
        data-shop-id="21832647"
    >

    <div class="image-carousel-container wt-position-relative wt-flex-xs-6 wt-order-xs-2

                show-scrollable-thumbnails">

        <ul class="wt-list-unstyled  wt-position-relative carousel-pane-list"
            style="padding-top: 80%;"
            data-carousel-pane-list
            tabindex="0">
                    <li class=" wt-position-absolute wt-width-full wt-height-full wt-position-top wt-position-left carousel-pane"
                        data-carousel-pane
                        data-index="0"
                        data-image-id="5914373744"
                        data-palette-listing-image
                    >
                        <img class="wt-max-width-full wt-horizontal-center wt-vertical-center carousel-image wt-rounded"
                            alt="HILO linen top. Linen clothing for women GREEN GINGHAM"
                            data-carousel-first-image
                            data-perf-group="main-product-image"
                            src="https://i.etsystatic.com/21832647/r/il/a29f31/5914373744/il_794xN.5914373744_2ds7.jpg"
                            srcset="https://i.etsystatic.com/21832647/r/il/a29f31/5914373744/il_794xN.5914373744_2ds7.jpg 1x, https://i.etsystatic.com/21832647/r/il/a29f31/5914373744/il_1588xN.5914373744_2ds7.jpg 2x"
                            fetchpriority="high"
                            data-original-image-width="1335"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/a29f31/5914373744/il_fullxfull.5914373744_2ds7.jpg"
                            data-index="0"
                        />
                    </li>
                    <li class="wt-display-none  wt-position-absolute wt-width-full wt-height-full wt-position-top wt-position-left carousel-pane"
                        data-carousel-pane
                        data-index="1"
                        data-image-id="5962458395"
                        data-palette-listing-image
                    >
                        <img class="wt-max-width-full wt-horizontal-center wt-vertical-center carousel-image wt-rounded"
                            alt="HILO linen top. Linen clothing for women image 2"
                            loading="lazy"
                            src="https://i.etsystatic.com/21832647/r/il/cc9354/5962458395/il_794xN.5962458395_7elw.jpg"
                            srcset="https://i.etsystatic.com/21832647/r/il/cc9354/5962458395/il_794xN.5962458395_7elw.jpg 1x, https://i.etsystatic.com/21832647/r/il/cc9354/5962458395/il_1588xN.5962458395_7elw.jpg 2x"
                            data-perf-group="secondary-product-image"
                            data-original-image-width="1335"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/cc9354/5962458395/il_fullxfull.5962458395_7elw.jpg"
                            data-index="1"
                        />
                    </li>
                    <li class="wt-display-none  wt-position-absolute wt-width-full wt-height-full wt-position-top wt-position-left carousel-pane"
                        data-carousel-pane
                        data-index="2"
                        data-image-id="5962458455"
                        data-palette-listing-image
                    >
                        <img class="wt-max-width-full wt-horizontal-center wt-vertical-center carousel-image wt-rounded"
                            alt="HILO linen top. Linen clothing for women image 3"
                            loading="lazy"
                            src="https://i.etsystatic.com/21832647/r/il/fbb27e/5962458455/il_794xN.5962458455_gu6s.jpg"
                            srcset="https://i.etsystatic.com/21832647/r/il/fbb27e/5962458455/il_794xN.5962458455_gu6s.jpg 1x, https://i.etsystatic.com/21832647/r/il/fbb27e/5962458455/il_1588xN.5962458455_gu6s.jpg 2x"
                            data-perf-group="secondary-product-image"
                            data-original-image-width="1335"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/fbb27e/5962458455/il_fullxfull.5962458455_gu6s.jpg"
                            data-index="2"
                        />
                    </li>
                    <li class="wt-display-none  wt-position-absolute wt-width-full wt-height-full wt-position-top wt-position-left carousel-pane"
                        data-carousel-pane
                        data-index="3"
                        data-image-id="5914373128"
                        data-palette-listing-image
                    >
                        <img class="wt-max-width-full wt-horizontal-center wt-vertical-center carousel-image wt-rounded"
                            alt="HILO linen top. Linen clothing for women image 4"
                            loading="lazy"
                            src="https://i.etsystatic.com/21832647/r/il/9d23b1/5914373128/il_794xN.5914373128_e6jg.jpg"
                            srcset="https://i.etsystatic.com/21832647/r/il/9d23b1/5914373128/il_794xN.5914373128_e6jg.jpg 1x, https://i.etsystatic.com/21832647/r/il/9d23b1/5914373128/il_1588xN.5914373128_e6jg.jpg 2x"
                            data-perf-group="secondary-product-image"
                            data-original-image-width="1335"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/9d23b1/5914373128/il_fullxfull.5914373128_e6jg.jpg"
                            data-index="3"
                        />
                    </li>
                    <li class="wt-display-none  wt-position-absolute wt-width-full wt-height-full wt-position-top wt-position-left carousel-pane"
                        data-carousel-pane
                        data-index="4"
                        data-image-id="5914373110"
                        data-palette-listing-image
                    >
                        <img class="wt-max-width-full wt-horizontal-center wt-vertical-center carousel-image wt-rounded"
                            alt="HILO linen top. Linen clothing for women image 5"
                            loading="lazy"
                            src="https://i.etsystatic.com/21832647/r/il/fd65f1/5914373110/il_794xN.5914373110_rz0n.jpg"
                            srcset="https://i.etsystatic.com/21832647/r/il/fd65f1/5914373110/il_794xN.5914373110_rz0n.jpg 1x, https://i.etsystatic.com/21832647/r/il/fd65f1/5914373110/il_1588xN.5914373110_rz0n.jpg 2x"
                            data-perf-group="secondary-product-image"
                            data-original-image-width="1335"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/fd65f1/5914373110/il_fullxfull.5914373110_rz0n.jpg"
                            data-index="4"
                        />
                    </li>
                    <li class="wt-display-none  wt-position-absolute wt-width-full wt-height-full wt-position-top wt-position-left carousel-pane"
                        data-carousel-pane
                        data-index="5"
                        data-image-id="5914373112"
                        data-palette-listing-image
                    >
                        <img class="wt-max-width-full wt-horizontal-center wt-vertical-center carousel-image wt-rounded"
                            alt="HILO linen top. Linen clothing for women image 6"
                            loading="lazy"
                            src="https://i.etsystatic.com/21832647/r/il/9cf523/5914373112/il_794xN.5914373112_e8t6.jpg"
                            srcset="https://i.etsystatic.com/21832647/r/il/9cf523/5914373112/il_794xN.5914373112_e8t6.jpg 1x, https://i.etsystatic.com/21832647/r/il/9cf523/5914373112/il_1588xN.5914373112_e8t6.jpg 2x"
                            data-perf-group="secondary-product-image"
                            data-original-image-width="1335"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/9cf523/5914373112/il_fullxfull.5914373112_e8t6.jpg"
                            data-index="5"
                        />
                    </li>
                    <li class="wt-display-none  wt-position-absolute wt-width-full wt-height-full wt-position-top wt-position-left carousel-pane"
                        data-carousel-pane
                        data-index="6"
                        data-image-id="5962458449"
                        data-palette-listing-image
                    >
                        <img class="wt-max-width-full wt-horizontal-center wt-vertical-center carousel-image wt-rounded"
                            alt="HILO linen top. Linen clothing for women image 7"
                            loading="lazy"
                            src="https://i.etsystatic.com/21832647/r/il/9a68dd/5962458449/il_794xN.5962458449_hjkr.jpg"
                            srcset="https://i.etsystatic.com/21832647/r/il/9a68dd/5962458449/il_794xN.5962458449_hjkr.jpg 1x, https://i.etsystatic.com/21832647/r/il/9a68dd/5962458449/il_1588xN.5962458449_hjkr.jpg 2x"
                            data-perf-group="secondary-product-image"
                            data-original-image-width="1335"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/9a68dd/5962458449/il_fullxfull.5962458449_hjkr.jpg"
                            data-index="6"
                        />
                    </li>
                    <li class="wt-display-none  wt-position-absolute wt-width-full wt-height-full wt-position-top wt-position-left carousel-pane"
                        data-carousel-pane
                        data-index="7"
                        data-image-id="5539398155"
                        data-palette-listing-image
                    >
                        <img class="wt-max-width-full wt-horizontal-center wt-vertical-center carousel-image wt-rounded"
                            alt="HILO linen top. Linen clothing for women image 8"
                            loading="lazy"
                            src="https://i.etsystatic.com/21832647/r/il/e497f3/5539398155/il_794xN.5539398155_ku4v.jpg"
                            srcset="https://i.etsystatic.com/21832647/r/il/e497f3/5539398155/il_794xN.5539398155_ku4v.jpg 1x, https://i.etsystatic.com/21832647/r/il/e497f3/5539398155/il_1588xN.5539398155_ku4v.jpg 2x"
                            data-perf-group="secondary-product-image"
                            data-original-image-width="2000"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/e497f3/5539398155/il_fullxfull.5539398155_ku4v.jpg"
                            data-index="7"
                        />
                    </li>
                    <li class="wt-display-none  wt-position-absolute wt-width-full wt-height-full wt-position-top wt-position-left carousel-pane"
                        data-carousel-pane
                        data-index="8"
                        data-image-id="6082367821"
                        data-palette-listing-image
                    >
                        <img class="wt-max-width-full wt-horizontal-center wt-vertical-center carousel-image wt-rounded"
                            alt="HILO linen top. Linen clothing for women image 9"
                            loading="lazy"
                            src="https://i.etsystatic.com/21832647/r/il/17fbc5/6082367821/il_794xN.6082367821_ayts.jpg"
                            srcset="https://i.etsystatic.com/21832647/r/il/17fbc5/6082367821/il_794xN.6082367821_ayts.jpg 1x, https://i.etsystatic.com/21832647/r/il/17fbc5/6082367821/il_1588xN.6082367821_ayts.jpg 2x"
                            data-perf-group="secondary-product-image"
                            data-original-image-width="2000"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/17fbc5/6082367821/il_fullxfull.6082367821_ayts.jpg"
                            data-index="8"
                        />
                    </li>
        </ul>
            <button data-carousel-nav-button
                data-direction="prev"
                class="wt-circle wt-overflow-hidden wt-position-absolute wt-vertical-center wt-position-left wt-btn wt-btn--filled wt-btn--light wt-btn--icon wt-shadow-elevation-3 wt-ml-xs-2"
                aria-label="Previous image"
            >
                <span class="etsy-icon wt-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M16,21a0.994,0.994,0,0,1-.664-0.253L5.5,12l9.841-8.747a1,1,0,0,1,1.328,1.494L8.5,12l8.159,7.253A1,1,0,0,1,16,21Z"/></svg></span>
            </button>
            <button data-carousel-nav-button
                data-direction="next"
                class="wt-circle wt-overflow-hidden wt-position-absolute wt-vertical-center wt-position-right wt-btn wt-btn--filled wt-btn--light wt-btn--icon wt-shadow-elevation-3 wt-mr-xs-2"
                aria-label="Next image"
            >
                <span class="etsy-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M8,21a1,1,0,0,1-.664-1.747L15.5,12,7.336,4.747A1,1,0,0,1,8.664,3.253L18.5,12,8.664,20.747A0.994,0.994,0,0,1,8,21Z"/></svg></span>
            </button>
    </div>

            <div>
                <div class="carousel-pagination-item-v2 wt-position-absolute wt-position-top wt-position-left wt-z-index-9"
                    data-thumbnail-scroll-up>

                </div>

                <div class="carousel-pagination-item-v2 wt-position-absolute wt-position-bottom wt-position-left wt-z-index-9"
                    data-thumbnail-scroll-down>

                </div>

                <div class="wt-position-absolute wt-overflow-scroll wt-position-top wt-position-bottom
                    wt-position-left scroll-container-no-scrollbar"
                    data-thumbnail-scroll-container>
            <ul data-carousel-pagination-list class="wt-list-unstyled wt-display-flex-xs
                wt-order-xs-1 wt-flex-direction-column-xs wt-align-items-flex-end">
                        <li data-carousel-pagination-item
                            data-index="0"
                            data-image-id="5914373744"
                            class="wt-mr-xs-1 wt-mb-xs-1 wt-bg-gray wt-flex-shrink-xs-0 wt-rounded wt-overflow-hidden carousel-pagination-item-v2"
                            tabindex="0"
                        >
                            <img class="wt-animated wt-display-none wt-max-width-full"
                                src=""
                                alt="HILO linen top. Linen clothing for women GREEN GINGHAM"
                                data-carousel-thumbnail-image
                                data-src-delay="https://i.etsystatic.com/21832647/c/1321/1049/0/474/il/a29f31/5914373744/il_75x75.5914373744_2ds7.jpg"
                                aria-label="product image GREEN GINGHAM 1 of 9"
                                data-should-fade-in-on-load="true"
                            />
                        </li>

                        <li data-carousel-pagination-item
                            data-index="1"
                            data-image-id="5962458395"
                            class="wt-mr-xs-1 wt-mb-xs-1 wt-bg-gray wt-flex-shrink-xs-0 wt-rounded wt-overflow-hidden carousel-pagination-item-v2"
                            tabindex="0"
                        >
                            <img class="wt-animated wt-display-none wt-max-width-full"
                                src=""
                                alt="HILO linen top. Linen clothing for women image 2"
                                data-carousel-thumbnail-image
                                data-src-delay="https://i.etsystatic.com/21832647/r/il/cc9354/5962458395/il_75x75.5962458395_7elw.jpg"
                                aria-label="product image 2 of 9"
                                data-should-fade-in-on-load="true"
                            />
                        </li>

                        <li data-carousel-pagination-item
                            data-index="2"
                            data-image-id="5962458455"
                            class="wt-mr-xs-1 wt-mb-xs-1 wt-bg-gray wt-flex-shrink-xs-0 wt-rounded wt-overflow-hidden carousel-pagination-item-v2"
                            tabindex="0"
                        >
                            <img class="wt-animated wt-display-none wt-max-width-full"
                                src=""
                                alt="HILO linen top. Linen clothing for women image 3"
                                data-carousel-thumbnail-image
                                data-src-delay="https://i.etsystatic.com/21832647/r/il/fbb27e/5962458455/il_75x75.5962458455_gu6s.jpg"
                                aria-label="product image 3 of 9"
                                data-should-fade-in-on-load="true"
                            />
                        </li>

                        <li data-carousel-pagination-item
                            data-index="3"
                            data-image-id="5914373128"
                            class="wt-mr-xs-1 wt-mb-xs-1 wt-bg-gray wt-flex-shrink-xs-0 wt-rounded wt-overflow-hidden carousel-pagination-item-v2"
                            tabindex="0"
                        >
                            <img class="wt-animated wt-display-none wt-max-width-full"
                                src=""
                                alt="HILO linen top. Linen clothing for women image 4"
                                data-carousel-thumbnail-image
                                data-src-delay="https://i.etsystatic.com/21832647/r/il/9d23b1/5914373128/il_75x75.5914373128_e6jg.jpg"
                                aria-label="product image 4 of 9"
                                data-should-fade-in-on-load="true"
                            />
                        </li>

                        <li data-carousel-pagination-item
                            data-index="4"
                            data-image-id="5914373110"
                            class="wt-mr-xs-1 wt-mb-xs-1 wt-bg-gray wt-flex-shrink-xs-0 wt-rounded wt-overflow-hidden carousel-pagination-item-v2"
                            tabindex="0"
                        >
                            <img class="wt-animated wt-display-none wt-max-width-full"
                                src=""
                                alt="HILO linen top. Linen clothing for women image 5"
                                data-carousel-thumbnail-image
                                data-src-delay="https://i.etsystatic.com/21832647/r/il/fd65f1/5914373110/il_75x75.5914373110_rz0n.jpg"
                                aria-label="product image 5 of 9"
                                data-should-fade-in-on-load="true"
                            />
                        </li>

                        <li data-carousel-pagination-item
                            data-index="5"
                            data-image-id="5914373112"
                            class="wt-mr-xs-1 wt-mb-xs-1 wt-bg-gray wt-flex-shrink-xs-0 wt-rounded wt-overflow-hidden carousel-pagination-item-v2"
                            tabindex="0"
                        >
                            <img class="wt-animated wt-display-none wt-max-width-full"
                                src=""
                                alt="HILO linen top. Linen clothing for women image 6"
                                data-carousel-thumbnail-image
                                data-src-delay="https://i.etsystatic.com/21832647/r/il/9cf523/5914373112/il_75x75.5914373112_e8t6.jpg"
                                aria-label="product image 6 of 9"
                                data-should-fade-in-on-load="true"
                            />
                        </li>

                        <li data-carousel-pagination-item
                            data-index="6"
                            data-image-id="5962458449"
                            class="wt-mr-xs-1 wt-mb-xs-1 wt-bg-gray wt-flex-shrink-xs-0 wt-rounded wt-overflow-hidden carousel-pagination-item-v2"
                            tabindex="0"
                        >
                            <img class="wt-animated wt-display-none wt-max-width-full"
                                src=""
                                alt="HILO linen top. Linen clothing for women image 7"
                                data-carousel-thumbnail-image
                                data-src-delay="https://i.etsystatic.com/21832647/r/il/9a68dd/5962458449/il_75x75.5962458449_hjkr.jpg"
                                aria-label="product image 7 of 9"
                                data-should-fade-in-on-load="true"
                            />
                        </li>

                        <li data-carousel-pagination-item
                            data-index="7"
                            data-image-id="5539398155"
                            class="wt-mr-xs-1 wt-mb-xs-1 wt-bg-gray wt-flex-shrink-xs-0 wt-rounded wt-overflow-hidden carousel-pagination-item-v2"
                            tabindex="0"
                        >
                            <img class="wt-animated wt-display-none wt-max-width-full"
                                src=""
                                alt="HILO linen top. Linen clothing for women image 8"
                                data-carousel-thumbnail-image
                                data-src-delay="https://i.etsystatic.com/21832647/r/il/e497f3/5539398155/il_75x75.5539398155_ku4v.jpg"
                                aria-label="product image 8 of 9"
                                data-should-fade-in-on-load="true"
                            />
                        </li>

                        <li data-carousel-pagination-item
                            data-index="8"
                            data-image-id="6082367821"
                            class="wt-mr-xs-1 wt-mb-xs-1 wt-bg-gray wt-flex-shrink-xs-0 wt-rounded wt-overflow-hidden carousel-pagination-item-v2"
                            tabindex="0"
                        >
                            <img class="wt-animated wt-display-none wt-max-width-full"
                                src=""
                                alt="HILO linen top. Linen clothing for women image 9"
                                data-carousel-thumbnail-image
                                data-src-delay="https://i.etsystatic.com/21832647/r/il/17fbc5/6082367821/il_75x75.6082367821_ayts.jpg"
                                aria-label="product image 9 of 9"
                                data-should-fade-in-on-load="true"
                            />
                        </li>

            </ul>
                </div>
            </div>

        <div
    class="wt-overlay image-overlay wt-justify-content-center"
    data-image-overlay
    data-animate-out="false"
    id="image-overlay"
    role="dialog"
    aria-hidden="true"
>
    <div class="wt-display-flex-xs wt-justify-content-center wt-height-full image-overlay-main-image-container" data-overlay-modal>
<button data-clg-id="WtButton" class="wt-btn wt-btn--filled wt-btn--icon wt-btn--light wt-position-absolute wt-position-right wt-position-top wt-mt-xs-2 wt-mr-xs-2" data-wt-overlay-close="true" aria-label="close">
                <span class="wt-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z"/></svg></span>

</button>
        <div data-overlay-main-image-container class="wt-position-relative wt-mr-xl-4 wt-mr-xs-2 wt-ml-xs-2 wt-flex-grow-xs-1 wt-mb-xs-4 wt-mt-xs-10">
<button data-clg-id="WtButton" class="wt-btn wt-btn--filled wt-btn--icon wt-btn--light wt-position-absolute wt-position-left wt-vertical-center wt-shadow-elevation-3 wt-ml-xs-2" data-image-overlay-prev="true" aria-label="previous">
                        <span class="wt-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M16,21a0.994,0.994,0,0,1-.664-0.253L5.5,12l9.841-8.747a1,1,0,0,1,1.328,1.494L8.5,12l8.159,7.253A1,1,0,0,1,16,21Z"/></svg></span>

</button>
<button data-clg-id="WtButton" class="wt-btn wt-btn--filled wt-btn--icon wt-btn--light wt-position-absolute wt-position-right wt-vertical-center wt-shadow-elevation-3 wt-mr-xs-2" data-image-overlay-next="true" aria-label="next">
                        <span class="wt-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M8,21a1,1,0,0,1-.664-1.747L15.5,12,7.336,4.747A1,1,0,0,1,8.664,3.253L18.5,12,8.664,20.747A0.994,0.994,0,0,1,8,21Z"/></svg></span>

</button>
            <ul class="wt-list-unstyled wt-overflow-hidden image-overlay-list wt-position-relative wt-vertical-center wt-display-flex-xs wt-justify-content-center"
                    style="padding-top: 80%;"
                    data-image-overlay-list
                    tabindex="0"
                >
                    <li class="wt-display-none wt-position-absolute wt-position-top wt-position-left wt-width-full wt-height-full skeleton-background wt-flex-direction-column-sm"
                        data-listing-image
                        data-index="0"
                        data-image-id="5914373744"
                    >
                        <img class="wt-rounded wt-overflow-hidden image-overlay-img wt-object-fit-contain wt-horizontal-center image-overlay-img-with-caption"
                            alt="HILO linen top. Linen clothing for women GREEN GINGHAM"

                            data-delay-src="https://i.etsystatic.com/21832647/r/il/a29f31/5914373744/il_1140xN.5914373744_2ds7.jpg"
                            data-delay-srcset="https://i.etsystatic.com/21832647/r/il/a29f31/5914373744/il_1140xN.5914373744_2ds7.jpg 1x, https://i.etsystatic.com/21832647/r/il/a29f31/5914373744/il_1588xN.5914373744_2ds7.jpg 2x"
                            data-original-image-width="1335"
                            data-original-image-height="2000"
                            data-index="0"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/a29f31/5914373744/il_fullxfull.5914373744_2ds7.jpg"
                        />
                            <div class="wt-display-flex-xs wt-flex-wrap wt-justify-content-space-between wt-mt-xs-3 wt-align-items-center">
                                <div class="wt-display-flex-sm wt-align-items-center">
                                    <span class="wt-text-caption wt-text-white">Item in the photo is in <strong>COLOR: GREEN GINGHAM</strong></span>
                                    <img data-delay-src="https://i.etsystatic.com/21832647/c/1321/1049/0/474/il/a29f31/5914373744/il_75x75.5914373744_2ds7.jpg" alt="HILO linen top. Linen clothing for women GREEN GINGHAM" class="wt-circle wt-overflow-hidden wt-ml-sm-2 image-overlay-caption-thumbnail">
                                </div>
                                <div>
<button data-clg-id="WtButton" class="wt-btn wt-btn--secondary wt-btn--light wt-btn--small" data-selector="image-caption-variation-selection-button" data-image-id="5914373744">
                                            Select this option

</button>

                                    <div class="wt-display-none" data-selector="image-caption-variation-selection-confirmation-message" data-image-id="5914373744">
                                        <div class="wt-display-inline-flex-xs wt-p-xs-1" aria-hidden="true">
                                            <span class="wt-icon wt-text-white wt-icon--smaller"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="m10.552 16.967 7.204-8.312-1.512-1.31-5.796 6.689-3.24-3.241-1.415 1.414z"/></svg></span>
                                            <p class="wt-text-caption-title wt-text-white wt-ml-xs-1">
                                                Option selected!
                                            </p>
                                        </div>
                                    </div>

                                    <div class="wt-display-none" data-selector="image-caption-variation-selection-disabled-message" data-image-id="5914373744">
                                        <div class="wt-display-inline-flex-xs wt-p-xs-1" aria-hidden="true">
                                            <span class="wt-icon wt-text-white wt-icon--smaller"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M7 20c-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4C7.6 16.9 9.9 16 12 16c2.2 0 4.4.9 5.7 2.3.4.4.4 1 0 1.4s-1 .4-1.4 0c-1-1-2.7-1.7-4.3-1.7s-3.3.7-4.3 1.7c-.2.2-.4.3-.7.3m12.6-7.9c-1.4 0-2.6-.7-3.3-1.3-.4-.4-.4-1 0-1.4s1-.4 1.4 0c.3.3 1.9 1.6 3.6 0 .4-.4 1-.4 1.4 0s.4 1 0 1.4c-1 .9-2.1 1.3-3.1 1.3m-15 0c-1.4 0-2.6-.7-3.3-1.3-.4-.4-.4-1 0-1.4s1-.4 1.4 0c.3.3 1.9 1.6 3.6 0 .4-.4 1-.4 1.4 0s.4 1 0 1.4c-1 .9-2.1 1.3-3.1 1.3"/></svg></span>
                                            <p class="wt-text-caption-title wt-text-white wt-ml-xs-1">
                                                This option is sold out.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                    <li class="wt-display-none wt-position-absolute wt-position-top wt-position-left wt-width-full wt-height-full skeleton-background"
                        data-listing-image
                        data-index="1"
                        data-image-id="5962458395"
                    >
                        <img class="wt-rounded wt-overflow-hidden image-overlay-img wt-object-fit-contain wt-vertical-center"
                            alt="HILO linen top. Linen clothing for women image 2"

                            data-delay-src="https://i.etsystatic.com/21832647/r/il/cc9354/5962458395/il_1140xN.5962458395_7elw.jpg"
                            data-delay-srcset="https://i.etsystatic.com/21832647/r/il/cc9354/5962458395/il_1140xN.5962458395_7elw.jpg 1x, https://i.etsystatic.com/21832647/r/il/cc9354/5962458395/il_1588xN.5962458395_7elw.jpg 2x"
                            data-original-image-width="1335"
                            data-original-image-height="2000"
                            data-index="1"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/cc9354/5962458395/il_fullxfull.5962458395_7elw.jpg"
                        />
                    </li>
                    <li class="wt-display-none wt-position-absolute wt-position-top wt-position-left wt-width-full wt-height-full skeleton-background"
                        data-listing-image
                        data-index="2"
                        data-image-id="5962458455"
                    >
                        <img class="wt-rounded wt-overflow-hidden image-overlay-img wt-object-fit-contain wt-vertical-center"
                            alt="HILO linen top. Linen clothing for women image 3"

                            data-delay-src="https://i.etsystatic.com/21832647/r/il/fbb27e/5962458455/il_1140xN.5962458455_gu6s.jpg"
                            data-delay-srcset="https://i.etsystatic.com/21832647/r/il/fbb27e/5962458455/il_1140xN.5962458455_gu6s.jpg 1x, https://i.etsystatic.com/21832647/r/il/fbb27e/5962458455/il_1588xN.5962458455_gu6s.jpg 2x"
                            data-original-image-width="1335"
                            data-original-image-height="2000"
                            data-index="2"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/fbb27e/5962458455/il_fullxfull.5962458455_gu6s.jpg"
                        />
                    </li>
                    <li class="wt-display-none wt-position-absolute wt-position-top wt-position-left wt-width-full wt-height-full skeleton-background"
                        data-listing-image
                        data-index="3"
                        data-image-id="5914373128"
                    >
                        <img class="wt-rounded wt-overflow-hidden image-overlay-img wt-object-fit-contain wt-vertical-center"
                            alt="HILO linen top. Linen clothing for women image 4"

                            data-delay-src="https://i.etsystatic.com/21832647/r/il/9d23b1/5914373128/il_1140xN.5914373128_e6jg.jpg"
                            data-delay-srcset="https://i.etsystatic.com/21832647/r/il/9d23b1/5914373128/il_1140xN.5914373128_e6jg.jpg 1x, https://i.etsystatic.com/21832647/r/il/9d23b1/5914373128/il_1588xN.5914373128_e6jg.jpg 2x"
                            data-original-image-width="1335"
                            data-original-image-height="2000"
                            data-index="3"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/9d23b1/5914373128/il_fullxfull.5914373128_e6jg.jpg"
                        />
                    </li>
                    <li class="wt-display-none wt-position-absolute wt-position-top wt-position-left wt-width-full wt-height-full skeleton-background"
                        data-listing-image
                        data-index="4"
                        data-image-id="5914373110"
                    >
                        <img class="wt-rounded wt-overflow-hidden image-overlay-img wt-object-fit-contain wt-vertical-center"
                            alt="HILO linen top. Linen clothing for women image 5"

                            data-delay-src="https://i.etsystatic.com/21832647/r/il/fd65f1/5914373110/il_1140xN.5914373110_rz0n.jpg"
                            data-delay-srcset="https://i.etsystatic.com/21832647/r/il/fd65f1/5914373110/il_1140xN.5914373110_rz0n.jpg 1x, https://i.etsystatic.com/21832647/r/il/fd65f1/5914373110/il_1588xN.5914373110_rz0n.jpg 2x"
                            data-original-image-width="1335"
                            data-original-image-height="2000"
                            data-index="4"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/fd65f1/5914373110/il_fullxfull.5914373110_rz0n.jpg"
                        />
                    </li>
                    <li class="wt-display-none wt-position-absolute wt-position-top wt-position-left wt-width-full wt-height-full skeleton-background"
                        data-listing-image
                        data-index="5"
                        data-image-id="5914373112"
                    >
                        <img class="wt-rounded wt-overflow-hidden image-overlay-img wt-object-fit-contain wt-vertical-center"
                            alt="HILO linen top. Linen clothing for women image 6"

                            data-delay-src="https://i.etsystatic.com/21832647/r/il/9cf523/5914373112/il_1140xN.5914373112_e8t6.jpg"
                            data-delay-srcset="https://i.etsystatic.com/21832647/r/il/9cf523/5914373112/il_1140xN.5914373112_e8t6.jpg 1x, https://i.etsystatic.com/21832647/r/il/9cf523/5914373112/il_1588xN.5914373112_e8t6.jpg 2x"
                            data-original-image-width="1335"
                            data-original-image-height="2000"
                            data-index="5"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/9cf523/5914373112/il_fullxfull.5914373112_e8t6.jpg"
                        />
                    </li>
                    <li class="wt-display-none wt-position-absolute wt-position-top wt-position-left wt-width-full wt-height-full skeleton-background"
                        data-listing-image
                        data-index="6"
                        data-image-id="5962458449"
                    >
                        <img class="wt-rounded wt-overflow-hidden image-overlay-img wt-object-fit-contain wt-vertical-center"
                            alt="HILO linen top. Linen clothing for women image 7"

                            data-delay-src="https://i.etsystatic.com/21832647/r/il/9a68dd/5962458449/il_1140xN.5962458449_hjkr.jpg"
                            data-delay-srcset="https://i.etsystatic.com/21832647/r/il/9a68dd/5962458449/il_1140xN.5962458449_hjkr.jpg 1x, https://i.etsystatic.com/21832647/r/il/9a68dd/5962458449/il_1588xN.5962458449_hjkr.jpg 2x"
                            data-original-image-width="1335"
                            data-original-image-height="2000"
                            data-index="6"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/9a68dd/5962458449/il_fullxfull.5962458449_hjkr.jpg"
                        />
                    </li>
                    <li class="wt-display-none wt-position-absolute wt-position-top wt-position-left wt-width-full wt-height-full skeleton-background"
                        data-listing-image
                        data-index="7"
                        data-image-id="5539398155"
                    >
                        <img class="wt-rounded wt-overflow-hidden image-overlay-img wt-object-fit-contain wt-vertical-center"
                            alt="HILO linen top. Linen clothing for women image 8"

                            data-delay-src="https://i.etsystatic.com/21832647/r/il/e497f3/5539398155/il_1140xN.5539398155_ku4v.jpg"
                            data-delay-srcset="https://i.etsystatic.com/21832647/r/il/e497f3/5539398155/il_1140xN.5539398155_ku4v.jpg 1x, https://i.etsystatic.com/21832647/r/il/e497f3/5539398155/il_1588xN.5539398155_ku4v.jpg 2x"
                            data-original-image-width="2000"
                            data-original-image-height="3000"
                            data-index="7"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/e497f3/5539398155/il_fullxfull.5539398155_ku4v.jpg"
                        />
                    </li>
                    <li class="wt-display-none wt-position-absolute wt-position-top wt-position-left wt-width-full wt-height-full skeleton-background"
                        data-listing-image
                        data-index="8"
                        data-image-id="6082367821"
                    >
                        <img class="wt-rounded wt-overflow-hidden image-overlay-img wt-object-fit-contain wt-vertical-center"
                            alt="HILO linen top. Linen clothing for women image 9"

                            data-delay-src="https://i.etsystatic.com/21832647/r/il/17fbc5/6082367821/il_1140xN.6082367821_ayts.jpg"
                            data-delay-srcset="https://i.etsystatic.com/21832647/r/il/17fbc5/6082367821/il_1140xN.6082367821_ayts.jpg 1x, https://i.etsystatic.com/21832647/r/il/17fbc5/6082367821/il_1588xN.6082367821_ayts.jpg 2x"
                            data-original-image-width="2000"
                            data-original-image-height="3000"
                            data-index="8"
                            data-src-zoom-image="https://i.etsystatic.com/21832647/r/il/17fbc5/6082367821/il_fullxfull.6082367821_ayts.jpg"
                        />
                    </li>
                <div class="wt-z-index-1 click-to-zoom-text wt-position-absolute wt-display-none"
                     data-click-to-zoom-toast>
<span data-clg-id="WtBadge" class="wt-badge wt-badge--default wt-text-body-01">
                        <span class="wt-icon wt-icon--smallest"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M10,2a8,8,0,1,0,8,8A8.009,8.009,0,0,0,10,2Zm0,14a6,6,0,1,1,6-6A6.007,6.007,0,0,1,10,16Z"/><path d="M14,9H11V6A1,1,0,1,0,9,6V9H6a1,1,0,0,0,0,2H9v3a1,1,0,1,0,2,0V11h3A1,1,0,0,0,14,9Z"/><path d="M21.707,20.293l-4-4a1,1,0,0,0-1.414,1.414l4,4A1,1,0,0,0,21.707,20.293Z"/></svg></span>
                    Click to zoom

</span>
                </div>
            </ul>
        </div>
            <div class="wt-overflow-y-auto wt-position-relative image-overlay-thumbnail-container wt-z-index-1 wt-pt-xs-10"
            data-thumbnail-container>
                        <ul
                            data-image-overlay-thumbnail-list
                            class="wt-z-index-1 wt-list-unstyled wt-flex-direction-row-lg wt-flex-direction-column-xs wt-display-flex-xs wt-flex-wrap wt-align-content-flex-start"
                        >
                                <li
                                    data-index="0"
                                    class="wt-rounded wt-overflow-hidden image-overlay-thumbnail wt-mb-xs-2"
                                    tabindex="0"
                                    data-image-id="5914373744"
                                >
                                    <img class="wt-skeleton-ui"
                                        alt="HILO linen top. Linen clothing for women GREEN GINGHAM"
                                        data-carousel-thumbnail-image
                                        loading="lazy"
                                        src="https://i.etsystatic.com/21832647/c/1321/1321/0/338/il/a29f31/5914373744/il_300x300.5914373744_2ds7.jpg"
                                    />
                                </li>
                                <li
                                    data-index="1"
                                    class="wt-rounded wt-overflow-hidden image-overlay-thumbnail wt-mb-xs-2"
                                    tabindex="0"
                                    data-image-id="5962458395"
                                >
                                    <img class="wt-skeleton-ui"
                                        alt="HILO linen top. Linen clothing for women image 2"
                                        data-carousel-thumbnail-image
                                        loading="lazy"
                                        src="https://i.etsystatic.com/21832647/r/il/cc9354/5962458395/il_300x300.5962458395_7elw.jpg"
                                    />
                                </li>
                                <li
                                    data-index="2"
                                    class="wt-rounded wt-overflow-hidden image-overlay-thumbnail wt-mb-xs-2"
                                    tabindex="0"
                                    data-image-id="5962458455"
                                >
                                    <img class="wt-skeleton-ui"
                                        alt="HILO linen top. Linen clothing for women image 3"
                                        data-carousel-thumbnail-image
                                        loading="lazy"
                                        src="https://i.etsystatic.com/21832647/r/il/fbb27e/5962458455/il_300x300.5962458455_gu6s.jpg"
                                    />
                                </li>
                                <li
                                    data-index="3"
                                    class="wt-rounded wt-overflow-hidden image-overlay-thumbnail wt-mb-xs-2"
                                    tabindex="0"
                                    data-image-id="5914373128"
                                >
                                    <img class="wt-skeleton-ui"
                                        alt="HILO linen top. Linen clothing for women image 4"
                                        data-carousel-thumbnail-image
                                        loading="lazy"
                                        src="https://i.etsystatic.com/21832647/r/il/9d23b1/5914373128/il_300x300.5914373128_e6jg.jpg"
                                    />
                                </li>
                                <li
                                    data-index="4"
                                    class="wt-rounded wt-overflow-hidden image-overlay-thumbnail wt-mb-xs-2"
                                    tabindex="0"
                                    data-image-id="5914373110"
                                >
                                    <img class="wt-skeleton-ui"
                                        alt="HILO linen top. Linen clothing for women image 5"
                                        data-carousel-thumbnail-image
                                        loading="lazy"
                                        src="https://i.etsystatic.com/21832647/r/il/fd65f1/5914373110/il_300x300.5914373110_rz0n.jpg"
                                    />
                                </li>
                                <li
                                    data-index="5"
                                    class="wt-rounded wt-overflow-hidden image-overlay-thumbnail wt-mb-xs-2"
                                    tabindex="0"
                                    data-image-id="5914373112"
                                >
                                    <img class="wt-skeleton-ui"
                                        alt="HILO linen top. Linen clothing for women image 6"
                                        data-carousel-thumbnail-image
                                        loading="lazy"
                                        src="https://i.etsystatic.com/21832647/r/il/9cf523/5914373112/il_300x300.5914373112_e8t6.jpg"
                                    />
                                </li>
                                <li
                                    data-index="6"
                                    class="wt-rounded wt-overflow-hidden image-overlay-thumbnail wt-mb-xs-2"
                                    tabindex="0"
                                    data-image-id="5962458449"
                                >
                                    <img class="wt-skeleton-ui"
                                        alt="HILO linen top. Linen clothing for women image 7"
                                        data-carousel-thumbnail-image
                                        loading="lazy"
                                        src="https://i.etsystatic.com/21832647/r/il/9a68dd/5962458449/il_300x300.5962458449_hjkr.jpg"
                                    />
                                </li>
                                <li
                                    data-index="7"
                                    class="wt-rounded wt-overflow-hidden image-overlay-thumbnail wt-mb-xs-2"
                                    tabindex="0"
                                    data-image-id="5539398155"
                                >
                                    <img class="wt-skeleton-ui"
                                        alt="HILO linen top. Linen clothing for women image 8"
                                        data-carousel-thumbnail-image
                                        loading="lazy"
                                        src="https://i.etsystatic.com/21832647/r/il/e497f3/5539398155/il_300x300.5539398155_ku4v.jpg"
                                    />
                                </li>
                                <li
                                    data-index="8"
                                    class="wt-rounded wt-overflow-hidden image-overlay-thumbnail wt-mb-xs-2"
                                    tabindex="0"
                                    data-image-id="6082367821"
                                >
                                    <img class="wt-skeleton-ui"
                                        alt="HILO linen top. Linen clothing for women image 9"
                                        data-carousel-thumbnail-image
                                        loading="lazy"
                                        src="https://i.etsystatic.com/21832647/r/il/17fbc5/6082367821/il_300x300.6082367821_ayts.jpg"
                                    />
                                </li>
                        </ul>
            </div>
    </div>
</div>
</div>
</div>

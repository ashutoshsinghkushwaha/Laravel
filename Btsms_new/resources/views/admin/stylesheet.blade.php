<link rel="stylesheet"
   href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/dist/css/adminlte.min2167.css?v=3.2.0') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome-free/css/all.min.css">

<script nonce="2cd057a1-42f0-42c2-a692-95f8054f1a75">
   (function(w, d) {
       ! function(a, e, t, r) {
           a.zarazData = a.zarazData || {};
           a.zarazData.executed = [];
           a.zaraz = {
               deferred: [],
               listeners: []
           };
           a.zaraz.q = [];
           a.zaraz._f = function(e) {
               return function() {
                   var t = Array.prototype.slice.call(arguments);
                   a.zaraz.q.push({
                       m: e,
                       a: t
                   })
               }
           };
           for (const e of ["track", "set", "debug"]) a.zaraz[e] = a.zaraz._f(e);
           a.zaraz.init = () => {
               var t = e.getElementsByTagName(r)[0],
                   z = e.createElement(r),
                   n = e.getElementsByTagName("title")[0];
               n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
               a.zarazData.x = Math.random();
               a.zarazData.w = a.screen.width;
               a.zarazData.h = a.screen.height;
               a.zarazData.j = a.innerHeight;
               a.zarazData.e = a.innerWidth;
               a.zarazData.l = a.location.href;
               a.zarazData.r = e.referrer;
               a.zarazData.k = a.screen.colorDepth;
               a.zarazData.n = e.characterSet;
               a.zarazData.o = (new Date).getTimezoneOffset();
               a.zarazData.q = [];
               for (; a.zaraz.q.length;) {
                   const e = a.zaraz.q.shift();
                   a.zarazData.q.push(e)
               }
               z.defer = !0;
               for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith(
                   "_zaraz_"))).forEach((t => {
                   try {
                       a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                   } catch {
                       a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                   }
               }));
               z.referrerPolicy = "origin";
               z.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a
                   .zarazData)));
               t.parentNode.insertBefore(z, t)
           };
           ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
               "DOMContentLoaded", zaraz.init)
       }(w, d, 0, "script");
   })(window, document);
</script>
<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bluethink | Log in</title>
      <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
      <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/dist/css/adminlte.min2167.css?v=3.2.0') }}">
      <!-- <script nonce="dc1902f0-e3ed-4780-a68f-cc02910269e7">
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
                     z.src = "../../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a
                         .zarazData)));
                     t.parentNode.insertBefore(z, t)
                 };
                 ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
                     "DOMContentLoaded", zaraz.init)
             }(w, d, 0, "script");
         })(window, document);
         </script> -->
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <div class="login-logo">
            <a href="../../index2.html"><b>Bluethink</b>Inc.</a>
         </div>
         <div class="card">
            <div class="card-body login-card-body">
               <h4 class="login-box-msg text-info">Stock Management System</h4>
               @if ($message = Session::get('success'))
               <div class="alert alert-success">
                  <p>{{ $message }}</p>
               </div>
               @endif
               @if ($message = Session::get('fail'))
               <div class="alert alert-danger">
                  <p>{{ $message }}</p>
               </div>
               @endif
               <form action="{{ route('login-user') }}" method="post">
                  @csrf
                  <p class="text-danger"> @error('email') {{ $message }} @enderror </p>
                  <div class="input-group mb-3">
                     <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-envelope"></span>
                        </div>
                     </div>
                  </div>
                  <p class="text-danger"> @error('password') {{ $message }} @enderror </p>
                  <div class="input-group mb-3">
                     <input type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}" >
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                     </div>
                  </div>
               </form>
               <p class="mb-1">
                  <a href="register" class="text-center">Register a new membership</a>
               </p>
            </div>
         </div>
      </div>
      <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('admin/assets/dist/js/adminlte.min2167.js?v=3.2.0') }}"></script>
   </body>
</html>
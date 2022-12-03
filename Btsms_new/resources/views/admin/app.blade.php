<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bluethink | system management system </title>
      <!-- stylesheet Start -->
      @include('admin.stylesheet')
      <!-- stylesheet End -->
   </head>
   <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('admin/assets/dist/img/AdminLTELogo.png ') }}" alt="AdminLTELogo" height="60" width="60">
         </div>
         <!-- Nav Bar Start -->
         @include('admin.navbar')
         <!-- Nav Bar End -->
         <!-- Side Bar Start -->
         @include('admin.sidebar')
         <!-- Side Bar End -->
         <div class="content-wrapper">
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0">BlueThink</h1>
                        <x-NameView/>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Dashboard </li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            @yield('hello')
            <section class="content">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                           <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                           <div class="info-box-content">
                              <span class="info-box-text">CPU Traffic</span>
                              <span class="info-box-number">
                              10
                              <small>%</small>
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                           <span class="info-box-icon bg-danger elevation-1"><i
                              class="fas fa-thumbs-up"></i></span>
                           <div class="info-box-content">
                              <span class="info-box-text">Likes</span>
                              <span class="info-box-number">41,410</span>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix hidden-md-up"></div>
                     <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                           <span class="info-box-icon bg-success elevation-1"><i
                              class="fas fa-shopping-cart"></i></span>
                           <div class="info-box-content">
                              <span class="info-box-text">erfes</span>
                              <span class="info-box-number">760</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                           <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                           <div class="info-box-content">
                              <span class="info-box-text">Total Allot System</span>
                              <span class="info-box-number">  </span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-8">
                        <div class="card">
                           <div class="card-header border-transparent">
                              <h3 class="card-title">Latest Allotment Record</h3>
                              <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                 <i class="fas fa-minus"></i>
                                 </button>
                                 <button type="button" class="btn btn-tool" data-card-widget="remove">
                                 <i class="fas fa-times"></i>
                                 </button>
                              </div>
                           </div>
                           <div class="card-body p-0">
                              <div class="table-responsive">
                                 <table class="table m-0">
                                    <thead>
                                       <tr>
                                          <th>Emp Id</th>
                                          <th>Name</th>
                                          <th>Status</th>
                                          <th>Model No.</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="card-footer clearfix">
                              <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New
                              Order</a>
                              <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All
                              Orders</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="info-box mb-3 bg-warning">
                           <span class="info-box-icon"><i class="fas fa-tag"></i></span>
                           <div class="info-box-content">
                              <span class="info-box-text">Inventory</span>
                              <span class="info-box-number">5,200</span>
                           </div>
                        </div>
                        <div class="info-box mb-3 bg-success">
                           <span class="info-box-icon"><i class="far fa-heart"></i></span>
                           <div class="info-box-content">
                              <span class="info-box-text">Mentions</span>
                              <span class="info-box-number">92,050</span>
                           </div>
                        </div>
                        <div class="info-box mb-3 bg-danger">
                           <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>
                           <div class="info-box-content">
                              <span class="info-box-text">Downloads</span>
                              <span class="info-box-number">114,381</span>
                           </div>
                        </div>
                        <div class="info-box mb-3 bg-info">
                           <span class="info-box-icon"><i class="far fa-comment"></i></span>
                           <div class="info-box-content">
                              <span class="info-box-text">Direct Messages</span>
                              <span class="info-box-number">163,921</span>
                           </div>
                        </div>
                        <div class="info-box mb-3 bg-blue">
                           <span class="info-box-icon"><i class="far fa-comment"></i></span>
                           <div class="info-box-content">
                              <span class="info-box-text">Direct Messages</span>
                              <span class="info-box-number">163,921</span>
                           </div>
                        </div>
                        <!-- <div class="card">
                           <div class="card-header">
                               <h3 class="card-title">Recently Added Products</h3>
                               <div class="card-tools">
                                   <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                       <i class="fas fa-minus"></i>
                                   </button>
                                   <button type="button" class="btn btn-tool" data-card-widget="remove">
                                       <i class="fas fa-times"></i>
                                   </button>
                               </div>
                           </div>
                           
                           <div class="card-body p-0">
                               <ul class="products-list product-list-in-card pl-2 pr-2">
                                   <li class="item">
                                       <div class="product-img">
                                           <img src="dist/img/default-150x150.png" alt="Product Image"
                                               class="img-size-50">
                                       </div>
                                       <div class="product-info">
                                           <a href="javascript:void(0)" class="product-title">Samsung TV
                                               <span class="badge badge-warning float-right">$1800</span></a>
                                           <span class="product-description">
                                               Samsung 32" 1080p 60Hz LED Smart HDTV.
                                           </span>
                                       </div>
                                   </li>
                           
                                   <li class="item">
                                       <div class="product-img">
                                           <img src="dist/img/default-150x150.png" alt="Product Image"
                                               class="img-size-50">
                                       </div>
                                       <div class="product-info">
                                           <a href="javascript:void(0)" class="product-title">Bicycle
                                               <span class="badge badge-info float-right">$700</span></a>
                                           <span class="product-description">
                                               26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                           </span>
                                       </div>
                                   </li>
                           
                                   <li class="item">
                                       <div class="product-img">
                                           <img src="dist/img/default-150x150.png" alt="Product Image"
                                               class="img-size-50">
                                       </div>
                                       <div class="product-info">
                                           <a href="javascript:void(0)" class="product-title">
                                               Xbox One <span class="badge badge-danger float-right">
                                                   $350
                                               </span>
                                           </a>
                                           <span class="product-description">
                                               Xbox One Console Bundle with Halo Master Chief Collection.
                                           </span>
                                       </div>
                                   </li>
                           
                                   <li class="item">
                                       <div class="product-img">
                                           <img src="dist/img/default-150x150.png" alt="Product Image"
                                               class="img-size-50">
                                       </div>
                                       <div class="product-info">
                                           <a href="javascript:void(0)" class="product-title">PlayStation 4
                                               <span class="badge badge-success float-right">$399</span></a>
                                           <span class="product-description">
                                               PlayStation 4 500GB Console (PS4)
                                           </span>
                                       </div>
                                   </li>
                           
                               </ul>
                           </div>
                           
                           <div class="card-footer text-center">
                               <a href="javascript:void(0)" class="uppercase">View All Products</a>
                           </div>
                           
                           </div> -->
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <aside class="control-sidebar control-sidebar-dark">
         </aside>
         // Footer
         @include('admin.footer')
         // Footer
      </div>
      // JS
      @include('admin.javascript')
      // JS
   </body>
</html>
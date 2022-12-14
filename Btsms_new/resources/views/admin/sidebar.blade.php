<style>
   #element {
   background-color: red;
   width: 200px;
   border-radius: 3px;
   }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <a href="#" class="brand-link">
   <img src="{{ asset('admin/assets/dist/img/AdminLTELogo.png') }}" style="background-color: white" id="element">
   <span class="brand-text font-weight-light"></span>
   </a>
   <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="{{ asset('admin/assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
               alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block">Shubham Sir</a>
         </div>
      </div>
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
               <a href="/dashboard" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                     Employee
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item ">
                     <a href="/addemployee" class="nav-link active">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                           Add New Employee
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="/viewemployee" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                           Employees List
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                     Allotement/Stock
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="/stock" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                           Allotment
                           <span class="right badge badge-danger">New</span>
                        </p>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a href="/viewallot" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                           View Allotment Record
                           <span class="right badge badge-danger">New</span>
                        </p>
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
      </nav>
   </div>
</aside>
<li class="nav-item {{ Route::is('users.*') || Route::is('user.*')  ? 'active' : '' }}">
 <!-- /.navbar -->
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('assets/images/logo-academia.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Academia</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('assets/images/jacob.jpg') }}" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Jacob T.</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="./index.html" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Teachers Dashboard</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="./index2.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Students Dashboard</p>
                             </a>
                         </li>
                         {{-- <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p></p>
                </a>
              </li> --}}
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="pages/widgets.html" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Widgets
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="view_instructors" class="nav-link">
                         <i class="nav-icon fas fa-users"></i>
                         <p>
                             Instructors
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="add_instructor" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="view_instructors" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>View</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-user-alt"></i>
                         <p>
                             Students
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/charts/chartjs.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/charts/flot.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>View</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-book-reader"></i>
                         <p>
                             Departments
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/UI/general.html" class="nav-link">
                                 <i class="far fa-info"></i>
                                 <p>JSS Classes</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/UI/general.html" class="nav-link">
                                 <i class="far fa-info"></i>
                                 <p>SSS Classes</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="" class="nav-link">
                         <i class="nav-icon fas fa-shopping-basket"></i>
                         <p>Results</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-blog"></i>
                         <p>
                             Blogs
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/UI/general.html" class="nav-link">
                                 <i class="far fa-info"></i>
                                 <p>Add</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/UI/general.html" class="nav-link">
                                 <i class="far fa-info"></i>
                                 <p>View</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/UI/general.html" class="nav-link">
                                 <i class="far fa-info"></i>
                                 <p>Edit</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/UI/general.html" class="nav-link">
                                 <i class="far fa-info"></i>
                                 <p>Delete</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-user-check"></i>
                         <p>
                             Subscribers
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-money-bill"></i>
                         <p>
                             Currencies
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-map"></i>
                         <p>
                             Countries
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="" class="nav-link">
                         <i class="nav-icon fas fa-credit-card"></i>
                         <p class="link"> Payments <i class="fas fa-angle-left right"></i></p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p class="link"> Payment Methods </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Payments History</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-pen-nib"></i>
                         <p>
                             Settings
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>

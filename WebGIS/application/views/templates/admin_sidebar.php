 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
         </div>
         <div class="sidebar-brand-text mx-3">Halaman Admin!</div>
     </a>

     <!-- Divider -->

     <hr class="sidebar-divider">
     <!-- Heading -->
     <div class="sidebar-heading">
         Administrator
     </div>

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="index.html">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('kelola')?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Kelola</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark" style="height:100%;" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
         <div class="sidebar-brand-icon rotate-n-15">
             Cakra
         </div>
         <div class="sidebar-brand-text mx-3">Index</div>

     </a>

     <!-- Divider -->


     <!-- Nav Item - Dashboard -->
     <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
         <a class="nav-link" href="/dashboard">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>



     <!-- Divider -->


     <!-- Heading -->
     <div class="sidebar-heading">
         Data
     </div>
     <li class="nav-item {{ Request::is('admin*') ? 'active' : '' }}">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone"
             aria-expanded="true" aria-controls="collapseone">
             <i class="fas fa-fw fa-cog"></i>
             <span>Admin</span>
         </a>
         <div id="collapseone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Inner</h6>
                 <a class="collapse-item" href="/admin">Data Admin</a>
                 <a class="collapse-item" href="/admin/create">Create</a>

             </div>
         </div>
     </li>

     <li class="nav-item {{ Request::is('absen*') ? 'active' : '' }}">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseuser"
             aria-expanded="true" aria-controls="collapseuser">
             <i class="fas fa-fw fa-wrench"></i>
             <span>Absen</span>
         </a>
         <div id="collapseuser" class="collapse" aria-labelledby="headinguser" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">All</h6>
                 <a class="collapse-item" href="/absen">Absen</a>
                 <!-- <a class="collapse-item" href="/dashboard">Data Absen</a> -->

             </div>
         </div>
     </li>


     <li class="nav-item {{ Request::is('siswa*') ? 'active' : '' }}">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>Siswa</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Inner</h6>
                 <a class="collapse-item" href="/siswa">Data Siswa</a>
                 <a class="collapse-item" href="/siswa/create">Create</a>

             </div>
         </div>
     </li>
     <!-- Divider -->


     <!-- Heading -->
     <div class="sidebar-heading">
         Report
     </div>


     <!-- Nav Item - Charts -->
     <li class="nav-item  {{ Request::is('report*') ? 'active' : '' }}">
         <a class="nav-link" href="/report">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Report</span></a>
     </li>

     <!-- Divider -->


     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>


 </ul>
 <!-- End of Sidebar -->

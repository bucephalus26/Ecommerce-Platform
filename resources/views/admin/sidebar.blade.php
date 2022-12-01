 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="../../index3.html" class="brand-link">
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex"> 
       <div class="image">
         <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">{{ Auth::user()->name }}</a>
         <a href="/userlogout" class="d-block">Logout</a>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="{{route('admin.index')}}" class="nav-link"><i class="nav-icon fas fa-home text-yellow"></i>Dashboard</a>
         </li>


         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-box-open text-blue"></i>
             <p>Orders
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{@route('admin.order.index', ['slug' => 'New'])}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>New Orders</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{@route('admin.order.index', ['slug' => 'Accepted'])}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Accepted Orders</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{@route('admin.order.index', ['slug' => 'Shipped'])}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Shipping Orders</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{@route('admin.order.index', ['slug' => 'Completed'])}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Completed Orders</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{@route('admin.order.index', ['slug' => 'Canceled'])}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Canceled Orders</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="{{route('admin.category.index')}}" class="nav-link"><i class="nav-icon fas fa-th text-yellow"></i>Categories</a>
         </li>
         <li class="nav-item">
           <a href="{{route('admin.product.index')}}" class="nav-link"><i class="nav-icon fas fa-th"></i>Products</a>
         </li>
         <li class="nav-item">
           <a href="{{route('admin.message.index')}}" class="nav-link"><i class="nav-icon fas fa-mail-bulk"></i>Messages</a>
         </li>
         <li class="nav-item">
           <a href="/admin/user" class="nav-link"><i class="nav-icon fas fa-user text-green"></i>Users</a>
         </li>
         <li class="nav-item">
           <a href="/admin/setting" class="nav-link">
             <i class="nav-icon fas fa-tools"></i>
             <p class="text">Settings</p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>
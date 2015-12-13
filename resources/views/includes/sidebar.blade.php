<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ URL::to('/') }}/images/usersilloete.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>{{Auth::user()->name}}</p>             
            </div>
          </div>
          <!-- search form -->          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu principal</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="{{ URL::to('/') }}/admin/dashboard"><i class="fa fa-circle-o"></i>Inicio</a></li>                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-users"></i> <span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/editors"><i class="fa fa-circle-o"></i>Ver editores</a></li> 
                <li><a href="{{ URL::to('/') }}/admin/editors/create"><i class="fa fa-circle-o"></i>Agregar editores</a></li> 
                <!--<li><a href="{{ URL::to('/') }}/admin/paymentprofiles/create"><i class="fa fa-circle-o"></i>Agregar perfil de pago</a></li>-->
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                
                <i class="fa fa-file"></i><span>Secciones</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/sections"><i class="fa fa-circle-o"></i>Ver secciones</a></li>
                <li><a href="{{ URL::to('/') }}/admin/sections/create"><i class="fa fa-circle-o"></i>Agregar sección</a></li>                               
              </ul>
            </li>           
            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-file"></i><span>Contenido de pagina</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/pages"><i class="fa fa-circle-o"></i>Ver paginas</a></li>
                <li><a href="{{ URL::to('/') }}/admin/pages/create"><i class="fa fa-circle-o"></i>Agregar pagina</a></li>                               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-plus-square-o"></i><span>Nodes</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/nodes"><i class="fa fa-circle-o"></i>Ver nodos</a></li>
                <li><a href="{{ URL::to('/') }}/admin/nodes/create"><i class="fa fa-circle-o"></i>Agregar nodos</a></li>                               
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-file-image-o"></i><span>Imagenes</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/images"><i class="fa fa-circle-o"></i>Ver imagenes</a></li>
                <li><a href="{{ URL::to('/') }}/admin/images/create"><i class="fa fa-circle-o"></i>Agregar imagenes</a></li>                               
              </ul>
            </li>        
            <li class="treeview">
              <a href="#">
                
                <i class="fa fa-sitemap"></i><span>Categorías</span><i class="fa fa-angle-left pull-right"></i>               
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/categories"><i class="fa fa-circle-o"></i>Ver categorias</a></li>
                <li><a href="{{ URL::to('/') }}/admin/categories/create"><i class="fa fa-circle-o"></i>Agregar categorías</a></li>                               
              </ul>
            </li>              
            <li class="treeview">
              <a href="#">                
                <i class="fa fa-picture-o"></i><span>Galerías</span><i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('/') }}/admin/galleries"><i class="fa fa-circle-o"></i>Ver galerías creadas</a></li>
                <li><a href="{{ URL::to('/') }}/admin/galleries/create"><i class="fa fa-circle-o"></i>Agregar galería</a></li>                               
              </ul>
            </li>            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
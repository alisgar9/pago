<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>PayApp ©  2018</title>
      <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
      <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
      <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
      <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
      <link href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
      <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('js/datatables/datatables.min.css')}}"/>
      <link rel="stylesheet" href="{{asset('vendors/easyautocomplete/easy-autocomplete.css')}}">
      <link rel=“stylesheet” href="{{asset('vendors/easyautocomplete/easy-autocomplete.themes.min.css')}}">
      <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
      <link href="{{asset('vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet">
      <link href="{{asset('vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet">
      <link href="{{asset('vendors/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet">
      <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
      <script type="text/javascript">
         var _userway_config = {
         // uncomment the following line to override default position
         position: 5,
         // uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)
          language: 'es',
         // uncomment the following line to override color set via widget
          //color: '#eed81e',
         account: 'WPGtFQ2cby'
         };
      </script>
      <script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>
      <script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>
   </head>
   <?php $user = Auth::id();   ?>
   <body class="nav-md">
      <div class="container body">
         <div class="main_container">
            <div class="col-md-3 left_col">
               <div class="left_col scroll-view">
                  <div class="navbar nav_title" style="border: 0;">
                     <a href="{{ url('/home')}}" class="site_title"><span>
                     <img src="{{asset('images/logo-payapp.png')}}" width="80%">
                     </span></a>
                  </div>
                  <div class="clearfix"></div>
                  <div class="profile clearfix">
                     <div class="profile_pic">
                        <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
                     </div>
                     <div class="profile_info">
                        <span>Bienvenido,</span>
                        <h2>{{ Auth::user()->cliente }}</h2>
                     </div>
                  </div>
                  <br/>
                  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                     <div class="menu_section">
                        <h3>MENÚ</h3>
                        <ul class="nav side-menu">
                        <li>
                           <a href="{{ url('recargas/')}}"><i class="fa fa-edit "></i> Recargas Electronicas</a>
                           
                        </li>
                        <li>
                           <a><i class="fa fa-edit"></i>Registar Deposito <span class="fa fa-chevron-down"></span></a>
                           <ul class="nav child_menu">
                              <li><a href="{{ url('claves/agregar-clave/')}}">Agregar</a></li>
                              <li><a href="#">Catálogo</a></li>
                           </ul>
                        </li>
                        <li>
                           <a><i class="fa fa-edit"></i> Estado de Cuenta <span class="fa fa-chevron-down"></span></a>
                           <ul class="nav child_menu">
                              <li><a href="{{ url('proveedor/agregar-proveedor/')}}">Agregar</a></li>
                              <li><a href="#">Catálogo</a></li>
                           </ul>
                        </li>
                        <li>
                           <a><i class="fa fa-user"></i> Utilerias <span class="fa fa-chevron-down"></span></a>
                           <ul class="nav child_menu">
                              <li><a href="{{ url('supervisor/agregar-supervisor/')}}">Agregar</a></li>
                              <li><a href="{{ url('supervisor/list-supervisor/')}}">Catálogo</a></li>
                           </ul>
                        </li>
                     </div>
                  </div>
                  <!-- /sidebar menu -->
                  <!-- /menu footer buttons -->
                  <div class="sidebar-footer hidden-small">
                     <a data-toggle="tooltip" data-placement="top" title="Cerrar mi sesión" href="{{ url('/logout') }}">
                     <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                     </a>
                  </div>
                  <!-- /menu footer buttons -->
               </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
               <div class="nav_menu">
                  <nav>
                     <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                     </div>
                     <ul class="nav navbar-nav navbar-right">
                     <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('images/img.jpg')}}" alt="">
                        {{ Auth::user()->name }}
                        <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                           @if(Auth::user()->hasRole('proveedor'))
                           <?php
                              $user = Auth::id();
                              $users = Auth::user();
                              $tipo = $users->tipo;
                               ?>
                           <li><a href="/proveedor/perfil/<?php echo  $user;?>"> Mi Perfil </a></li>
                           <?php if ($tipo == 1) {?>
                           <li><a href="/agregar-proveedor-moral-formato" target="_blank"> Acuse de registro al directorio</a></li>
                           <?php }else{ ?>
                           <li><a href="/agregar-proveedor-fisica-formato" target="_blank"> Acuse de registro al directorio</a></li>
                           <?php } ?>
                           @endif
                           <?php $users = Auth::id(); ?>
                           @if(Auth::user()->hasRole('administrador'))
                           <?php if ($users == 12 || $users == 15 ) {?>
                           <li><a href="{{ url('cotizador/listado-proveedores')}}"> Listado de Proveedores</a></li>
                           <?php } ?>
                           @endif
                           <!--<li><a href="javascript:;"> Configurar mi Perfil</a></li>-->
                           <!--<li>
                              <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                              </a>
                              </li>-->
                           <li><a href="javascript:;">Manual de ayuda</a></li>
                           <li>
                              <a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Cerrar mi sesión</a>
                           </li>
                        </ul>
                     </li>
                     <li role="presentation" class="dropdown">
                        <!--  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                           <i class="fa fa-envelope-o"></i>
                           <span class="badge bg-green">6</span>
                           </a>-->
                        <!--<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                           <li>
                             <a>
                               <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                               <span>
                                 <span>John Smith</span>
                                 <span class="time">3 mins ago</span>
                               </span>
                               <span class="message">
                                 Film festivals used to be do-or-die moments for movie makers. They were where...
                               </span>
                             </a>
                           </li>
                           <li>
                             <a>
                               <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                               <span>
                                 <span>John Smith</span>
                                 <span class="time">3 mins ago</span>
                               </span>
                               <span class="message">
                                 Film festivals used to be do-or-die moments for movie makers. They were where...
                               </span>
                             </a>
                           </li>
                           <li>
                             <a>
                               <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                               <span>
                                 <span>John Smith</span>
                                 <span class="time">3 mins ago</span>
                               </span>
                               <span class="message">
                                 Film festivals used to be do-or-die moments for movie makers. They were where...
                               </span>
                             </a>
                           </li>
                           <li>
                             <a>
                               <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                               <span>
                                 <span>John Smith</span>
                                 <span class="time">3 mins ago</span>
                               </span>
                               <span class="message">
                                 Film festivals used to be do-or-die moments for movie makers. They were where...
                               </span>
                             </a>
                           </li>
                           <li>
                             <div class="text-center">
                               <a>
                                 <strong>See All Alerts</strong>
                                 <i class="fa fa-angle-right"></i>
                               </a>
                             </div>
                           </li>
                           </ul>
                           </li>
                           </ul>-->
                  </nav>
               </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
            @yield('content')
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
            <div class="pull-right">
            PayApp © 2018
            </div>
            <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
      <!-- Chosen -->
      <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <!-- FastClick -->
      <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
      <!-- NProgress -->
      <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
      <!-- Chart.js -->
      <script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
      <!-- gauge.js -->
      <script src="{{asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
      <!-- bootstrap-progressbar -->
      <script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
      <!-- iCheck -->
      <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
      <!-- Skycons -->
      <script src="{{asset('vendors/skycons/skycons.js')}}"></script>
      <!-- Flot -->
      <script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
      <script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
      <script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
      <script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
      <script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
      <!-- Flot plugins -->
      <script src="{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
      <script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
      <script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
      <!-- DateJS -->
      <script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
      <!-- JQVMap -->
      <script src="{{asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
      <script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
      <script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
      <script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/datatables/datatables.js')}}"></script>
      <!-- Custom Theme Scripts -->
      <script src="{{asset('js/custom.js')}}"></script>
      <script src="{{asset('js/wizard.js')}}"></script>
      <script src="{{asset('vendors/mask/dist/jquery.mask.js')}}"></script>
      <script src="{{asset('vendors/easyautocomplete/jquery.easy-autocomplete.min.js')}}"></script>
      <!-- PNotify -->
      <script src="{{asset('vendors/pnotify/dist/pnotify.js')}}"></script>
      <script src="{{asset('vendors/pnotify/dist/pnotify.buttons.js')}}"></script>
      <script src="{{asset('vendors/pnotify/dist/pnotify.nonblock.js')}}"></script>
   </body>
</html>
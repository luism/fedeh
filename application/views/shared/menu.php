<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="display: none;">Fundación FEDEH</a>
      <div class="logo" style="background: url('http://www.fundacionfedeh.org.ar/images/logo.png');height: 50px;width: 50px;background-size: auto 36px;background-repeat: no-repeat;background-position: left center;"></div>
    </div>
    
    <!-- Menu desplegables -->
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <!-- MENU: Personas -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personas <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">

            <!-- SUBMENU: Socios -->
            <li class="dropdown-submenu">
              <a tabindex="-1" href="<?php echo URL::base('http') ?>socios/index">Socios</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo URL::base('http') ?>socios/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
                <li><a href="<?php echo URL::base('http') ?>socios/consulta"><i class="glyphicon glyphicon-search"></i>Consulta</a></li>
                <li><a href="<?php echo URL::base('http') ?>socios/index"><i class="glyphicon glyphicon-list"></i>Listado</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Fichas</li>
                <li><a href="<?php echo URL::base('http') ?>socios/descuentoplanilla"><i class="glyphicon glyphicon-edit"></i>Descuentos por planilla</a></li>
                <li><a href="<?php echo URL::base('http') ?>socios/fichas_disponibles"><i class="glyphicon glyphicon-eye-open"></i>Ver fichas disponibles</a></li>
                <li><a href="<?php echo URL::base('http') ?>"><i class="glyphicon glyphicon-eye-open"></i>Ver los movimientos de ficha</a></li>
              </ul>
            </li>

            <!-- SUBMENU: Judiciales -->
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Judiciales</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo URL::base('http') ?>judiciales/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
                <li><a href="<?php echo URL::base('http') ?>judiciales/consulta"><i class="glyphicon glyphicon-search"></i>Consulta</a></li>
                <li><a href="<?php echo URL::base('http') ?>judiciales/index"><i class="glyphicon glyphicon-list"></i>Listado</a></li>
              </ul>
            </li>

            <!-- SUBMENU: Colaboradores -->
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Colaboradores</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo URL::base('http') ?>colaboradores/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
                <li><a href="<?php echo URL::base('http') ?>colaboradores/consulta"><i class="glyphicon glyphicon-search"></i>Consulta</a></li>
                <li><a href="<?php echo URL::base('http') ?>colaboradores/index"><i class="glyphicon glyphicon-list"></i>Listado</a></li>
                <li><a href="<?php echo URL::base('http') ?>colaboradores/asignar"><i class="glyphicon glyphicon-pencil"></i>Asignar ficha a Colab.</a></li>
                <li><a href="<?php echo URL::base('http') ?>colaboradores/resumen"><i class="glyphicon glyphicon-eye-open"></i>Resumen por Colab.</a></li>
              </ul>
            </li>

            <!-- SUBMENU: Ejemplo de un submenu -->
           <!-- <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">More options</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">Second level</a></li>
                <li class="dropdown-submenu">
                  <a href="#">More..</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">3rd level</a></li>
                    <li><a href="#">3rd level</a></li>
                  </ul>
                </li>
                <li><a href="#">Second level</a></li>
                <li><a href="#">Second level</a></li>
              </ul>
            </li>-->
          </ul>
        </li>
 
        <!-- MENU: Capacitaciones -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Capacitaciones <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo URL::base('http') ?>capacitaciones/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
            <li><a href="<?php echo URL::base('http') ?>capacitaciones/index"><i class="glyphicon glyphicon-list"></i>Listado</a></li>
            <li><a href="<?php echo URL::base('http') ?>capacitaciones/inscripcion"><i class="glyphicon glyphicon-pencil"></i>Inscripción de Asist. a las Capac.</a></li>
          </ul>
        </li>
        
        <!-- MENU: Eventos -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo URL::base('http') ?>eventos/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
            <li><a href="<?php echo URL::base('http') ?>eventos/balance"><i class="glyphicon glyphicon-eye-open"></i>Ver balance de Evento</a></li>
            <li><a href="<?php echo URL::base('http') ?>eventos/index"><i class="glyphicon glyphicon-list"></i>Listado</a></li>
          </ul>
        </li>

        <!-- MENU: Notas -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notas <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo URL::base('http') ?>notas/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
            <li><a href="<?php echo URL::base('http') ?>notas/index"><i class="glyphicon glyphicon-list"></i>Listado</a></li>
          </ul>
        </li>

        <!-- MENU: Cuentas/Cuotas -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuentas/Cuotas <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo URL::base('http') ?>cuentas"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
            <li><a href="<?php echo URL::base('http') ?>cuentas"><i class="glyphicon glyphicon-eye-open"></i>Ver balance</a></li>
          </ul>
        </li>

        <!-- MENU: Otros -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Otros <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="divider"></li>
            <li class="dropdown-header">Contactos</li>
            <li><a href="<?php echo URL::base('http') ?>contactos/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
            <li><a href="<?php echo URL::base('http') ?>contactos/consulta"><i class="glyphicon glyphicon-search"></i>Consulta</a></li>
            <li><a href="<?php echo URL::base('http') ?>contactos/index"><i class="glyphicon glyphicon-list"></i>Listado</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Empresas</li>
            <li><a href="<?php echo URL::base('http') ?>empresas/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
            <li><a href="<?php echo URL::base('http') ?>empresas/index"><i class="glyphicon glyphicon-list"></i>Listado</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Pacientes</li>
            <li><a href="<?php echo URL::base('http') ?>pacientes/new"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
            <li><a href="<?php echo URL::base('http') ?>pacientes/consulta"><i class="glyphicon glyphicon-search"></i>Consulta</a></li>
            <li><a href="<?php echo URL::base('http') ?>pacientes/index"><i class="glyphicon glyphicon-list"></i>Listado</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo URL::base('http') ?>account/index"><i class="glyphicon glyphicon-list"></i>Listado</a></li>
            <li><a href="<?php echo URL::base('http') ?>account/create"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Roles</li>
            <li><a href="<?php echo URL::base('http') ?>roles/index"><i class="glyphicon glyphicon-list"></i>Listado</a></li>
            <li><a href="<?php echo URL::base('http') ?>roles/create"><i class="glyphicon glyphicon-plus-sign"></i>Nuevo</a></li>
          </ul>
        </li>

        <li><a href="#">Ayuda<i class="glyphicon glyphicon-question-sign"></i></a></li>
      </ul>

      <!-- Salir del sistema -->
      <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo URL::base('http') ?>account/logout"><span class="glyphicon glyphicon-user"></span>Salir</a></li>
      </ul>

    </div><!--/.nav-collapse -->
  </div>
</div>
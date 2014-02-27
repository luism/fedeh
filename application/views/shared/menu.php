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
              <a tabindex="-1" href="#">Socios</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="<? echo URL::base('http') ?>socios/new"><i class="glyphicon glyphicon-plus-sign"></i> Nuevo</a></li>
                <li><a href="#">Consulta</a></li>
                <li><a href="<? echo URL::base('http') ?>socios/index">Listado</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Fichas</li>
                <li><a href="<? echo URL::base('http') ?>">Descuentos por planilla</a></li>
                <li><a href="<? echo URL::base('http') ?>">Ver fichas disponibles</a></li>
                <li><a href="<? echo URL::base('http') ?>">Ver los movimientos de ficha</a></li>
              </ul>
            </li>

            <!-- SUBMENU: Judiciales -->
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Judiciales</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="<? echo URL::base('http') ?>judiciales/index">Nuevo</a></li>
                <li><a href="<? echo URL::base('http') ?>judiciales">Consultar</a></li>
                <li><a href="<? echo URL::base('http') ?>">Listado</a></li>
              </ul>
            </li>

            <!-- SUBMENU: Colaboradores -->
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Colaboradores</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="<? echo URL::base('http') ?>colaboradores/new">Nuevo</a></li>
                <li><a href="<? echo URL::base('http') ?>colaboradores/consultar">Consulta</a></li>
                <li><a href="<? echo URL::base('http') ?>colaboradores/index">Listado</a></li>
                <li><a href="<? echo URL::base('http') ?>colaboradores/asignar">Asignar ficha a Colab.</a></li>
                <li><a href="<? echo URL::base('http') ?>colaboradores/resumen">Resumen por Colab.</a></li>
              </ul>
            </li>

            <!-- SUBMENU: Ejemplo de un submenu -->
            <li class="divider"></li>
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
            </li>
          </ul>
        </li>
 
        <!-- MENU: Capacitaciones -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Capacitaciones <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<? echo URL::base('http') ?>capacitaciones/new">Nuevo</a></li>
            <li><a href="<? echo URL::base('http') ?>capacitaciones/index">Listado</a></li>
            <li><a href="<? echo URL::base('http') ?>capacitaciones/inscripcion">Inscripción de Asist. a las Capac.</a></li>
          </ul>
        </li>
        
        <!-- MENU: Eventos -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<? echo URL::base('http') ?>eventos">Nuevo</a></li>
            <li><a href="<? echo URL::base('http') ?>eventos">Ver balance de Evento</a></li>
            <li><a href="<? echo URL::base('http') ?>eventos">Listado</a></li>
          </ul>
        </li>

        <!-- MENU: Notas -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notas <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<? echo URL::base('http') ?>notas">Nuevo</a></li>
            <li><a href="<? echo URL::base('http') ?>notas">Listado</a></li>
          </ul>
        </li>

        <!-- MENU: Cuentas/Cuotas -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuentas/Cuotas <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<? echo URL::base('http') ?>cuentas">Nuevo</a></li>
            <li><a href="<? echo URL::base('http') ?>cuentas">Ver balance</a></li>
          </ul>
        </li>

        <!-- MENU: Otros -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Otros <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="divider"></li>
            <li class="dropdown-header">Contactos</li>
            <li><a href="<? echo URL::base('http') ?>contactos/nuevo">Nuevo</a></li>
            <li><a href="<? echo URL::base('http') ?>contactos/consulta">Consulta</a></li>
            <li><a href="<? echo URL::base('http') ?>contactos/listar">Listado</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Empresas</li>
            <li><a href="<? echo URL::base('http') ?>empresas/nuevo">Nuevo</a></li>
            <li><a href="<? echo URL::base('http') ?>empresas/listar">Listado</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Pacientes</li>
            <li><a href="<? echo URL::base('http') ?>pacientes/nuevo">Nuevo</a></li>
            <li><a href="<? echo URL::base('http') ?>pacientes/consultar">Consulta</a></li>
            <li><a href="<? echo URL::base('http') ?>pacientes/listar">Listado</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<? echo URL::base('http') ?>account/index">Listado</a></li>
            <li><a href="<? echo URL::base('http') ?>account/create">Nuevo</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Roles</li>
            <li><a href="<? echo URL::base('http') ?>roles/index">Listado</a></li>
            <li><a href="<? echo URL::base('http') ?>roles/create">Nuevo</a></li>
          </ul>
        </li>

        <li><a href="#">Ayuda</a></li>
      </ul>

      <!-- Salir del sistema -->
      <ul class="nav navbar-nav navbar-right">
            <li><a href="<? echo URL::base('http') ?>account/logout"><span class="glyphicon glyphicon-user"></span>Salir</a></li>
      </ul>

    </div><!--/.nav-collapse -->
  </div>
</div>
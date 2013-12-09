<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Fundación FEDEH</a>
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
                <li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-plus-sign"></i> Nuevo</a></li>
                <li><a href="#">Consulta</a></li>
                <li><a href="#">Listado</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Fichas</li>
                <li><a href="#">Descuentos por planilla</a></li>
                <li><a href="#">Ver fichas disponibles</a></li>
                <li><a href="#">Ver los movimientos de ficha</a></li>
              </ul>
            </li>

            <!-- SUBMENU: Judiciales -->
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Judiciales</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">Nuevo</a></li>
                <li><a href="#">Consultar</a></li>
                <li><a href="#">Listado</a></li>
              </ul>
            </li>

            <!-- SUBMENU: Colaboradores -->
            <li class="divider"></li>
            <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Claboradores</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">Nuevo</a></li>
                <li><a href="#">Consulta</a></li>
                <li><a href="#">Listado</a></li>
                <li><a href="#">Asignar ficha a Colab.</a></li>
                <li><a href="#">Resumen por Colab.</a></li>
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
            <li><a href="#">Nuevo</a></li>
            <li><a href="#">Listado</a></li>
            <li><a href="#">Inscripción de Asist. a las Capac.</a></li>
          </ul>
        </li>
        
        <!-- MENU: Eventos -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Nuevo</a></li>
            <li><a href="#">Ver balance de Evento</a></li>
            <li><a href="#">Listado</a></li>
          </ul>
        </li>

        <!-- MENU: Notas -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notas <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Nuevo</a></li>
            <li><a href="#">Listado</a></li>
          </ul>
        </li>

        <!-- MENU: Cuentas/Cuotas -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuentas/Cuotas <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Nuevo</a></li>
            <li><a href="#">Ver balance</a></li>
          </ul>
        </li>

        <!-- MENU: Otros -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Otros <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="divider"></li>
            <li class="dropdown-header">Contactos</li>
            <li><a href="#">Nuevo</a></li>
            <li><a href="#">Consulta</a></li>
            <li><a href="#">Listado</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Empresas</li>
            <li><a href="#">Nuevo</a></li>
            <li><a href="#">Listado</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Pacientes</li>
            <li><a href="#">Nuevo</a></li>
            <li><a href="#">Consulta</a></li>
            <li><a href="#">Listado</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<? echo URL::base('http') ?>account/index">Listado</a></li>
            <li><a href="<? echo URL::base('http') ?>account/create">Nuevo</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Roles</li>
            <li><a href="/roles/index">Listado</a></li>
            <li><a href="/roles/create">Nuevo</a></li>
          </ul>
        </li>

        <li><a href="#">Ayuda</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
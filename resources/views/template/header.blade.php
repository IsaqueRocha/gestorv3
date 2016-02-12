<!--CONTAINER (CONTÉM TUDO) -->
<div class="wrapper">
  <!-- HEADER -->
  <header class="main-header">
    <!-- LOGO -->
    <a href="{{ url('/home')}}" class="logo"><img src="{{ asset('assets/theme/img/logo-150px.png') }}"></a>
    <!-- NAVEGAÇÃO -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- BOTÃO DE NAVEGAÇÃO (ESQUERDA)-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- INFORMAÇÕES DO USUÁRIO (DIREITA) -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <!-- TRABALHOS EM ANDAMENTO -->
            <li class="dropdown tasks-menu">
              <!-- BOTÃO -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-tasks"></i>
                <span class="label label-danger">1</span>
              </a>
              <!-- DROPDOWN -->
              <ul class="dropdown-menu">
              <!-- QUANTIDADE DE PROJEOS -->
                <li class="header">Você tem 1 projeto em andamento</li>
                <li>
                  <!-- UL menu: CONTÉM OS PROJETOS -->
                  <ul class="menu">
                    <!-- PROJETO -->
                    <li>
                      <a href="#">
                        <!-- TÍTULO DO PROJETO E PROGRESSO EM TEXTO -->
                        <h3>
                          Diagramação
                          <small class="pull-right">50%</small>
                        </h3>
                        <!-- BARRA DE ROGRESSO -->
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-red" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">50% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li><!-- FIM PROJETO -->
                  </ul>
                </li>
                <!-- LINK PARA TODOS OS PROJETOS DO USUÁRIO -->
                <li class="footer">
                  <a href="#">Ver todos projetos</a>
                </li>
              </ul><!-- FIM DROPDOWN -->
            </li><!-- FIM TRABALHOS EM ANDAMENTO -->
            <!-- MENU DO URSUÁRIO -->
            <li class="dropdown user user-menu">
              <!-- BOTÃO -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- AVATAR NO BOTÃO -->
                <img src="{!! asset('assets/theme/img/user2-160x160.jpg') !!}" class="user-image" alt="User Image"/>
                <!-- NOME -->
                <span class="hidden-xs">Giulliano Kenzo</span>
              </a>
              <!-- DROPDOWN -->
              <ul class="dropdown-menu">
                <!-- AVATAR, NOME E ATUAÇÃO -->
                <li class="user-header">
                  <img src="{!! asset('assets/theme/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image" />
                  <p>
                    Giulliano Kenzo - Gerencia
                  </p>
                </li>
                <!-- ALTERAR DADOS E SAIR -->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat"> <i class="fa fa-fw fa-gear"></i> Alterar dados</a>
                  </div>
                  <div class="pull-right">
                    <a href="{!! url('/auth/logout/') !!}" class="btn btn-default btn-flat"> <i class="fa fa-fw fa-sign-out"></i> Sair</a>
                  </div>
                </li><!-- FIM ALTERAR DADOS E SAIR -->
              </ul><!-- FIM DROPDOWN -->
            </li><!-- FIM MENU DO URSUÁRIO -->
          </ul>
        </div>
      </nav><!-- FIM NAVEGAÇÃO -->
  </header><!-- FIM HEADER -->

<header @if(Auth::user())id="header"@endif>
    <!--logo start-->
    <div class="brand">
        <a href="{{ route('root') }}" class="logo">
            <i class="icon-layers"></i>
            <span>VaiQue</span>Compra
        </a>
    </div>
    <!--logo end-->
    @if(Auth::user())
    <ul class="nav navbar-nav navbar-left">
        <li class="toggle-navigation toggle-left">
            <button class="sidebar-toggle" id="toggle-left">
                <i class="fa fa-bars"></i>
            </button>
        </li>
        <li class="toggle-profile hidden-xs">
            <button type="button" class="btn btn-default" id="toggle-profile">
                <i class="icon-user"></i>
            </button>
        </li>

        <!--li class="hidden-xs hidden-sm">
            <input type="text" class="search" placeholder="Search project...">
            <button type="submit" class="btn btn-sm btn-search">
                <i class="fa fa-search"></i>
            </button>
        </li-->
    </ul>

    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown profile hidden-xs">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                <span class="meta">
                    <span class="avatar">
                        <img src="/assets/img/user.png" class="img-circle" alt="">
                    </span>
                    <span class="text">{{ Auth::user()->name }}</span>
                    <span class="caret"></span>
                </span>
            </a>
            <ul class="dropdown-menu animated fadeInRight" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <span class="icon"><i class="fa fa-sign-out"></i>
                    </span>Sair</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
        <li class="toggle-fullscreen hidden-xs">
            <button type="button" class="btn btn-default expand" id="toggle-fullscreen">
                <i class="fa fa-expand"></i>
            </button>
        </li>
    </ul>
    @endif
</header>

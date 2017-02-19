@if(Auth::user())
    <aside class="sidebar sidebar-left">
        <div class="sidebar-profile">
            <div class="avatar">
                <img class="img-circle profile-image" src=" {{  URL::to('/') }}/assets/img/avatar4.jpg" alt="profile">
                <i class="on border-dark animated bounceIn"></i>
            </div>
            <div class="profile-body dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                   aria-expanded="false"><h4>{{ Auth::user()->name }} <span class="caret"></span></h4></a>
            </div>
        </div>

        <nav>
            <h5 class="sidebar-header">Menu</h5>

            <ul class="nav nav-pills nav-stacked">
                <li class="{{ route_state('home') }}">
                    <a href="{{ route('home') }}" title="Home">
                        <i class="fa fa-fw fa-home"></i> Home
                    </a>
                </li>
                <li class="{{ route_state('company.*') }}">
                    <a href="{{ route('company.index') }}" title="Empresa">
                        <i class="fa fa-fw fa-home"></i> Empresa
                    </a>
                </li>
                <li class="{{ route_state('sale.*') }}">
                    <a href="{{ route('sale.index') }}" title="Promoção">
                        <i class="fa fa-fw fa-home"></i> Promoção
                    </a>
                </li>
            </ul>
        </nav>

    </aside>
@endif
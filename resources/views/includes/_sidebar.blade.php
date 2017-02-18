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
                    <a href="{{ url('/') }}" title="Home">
                        <i class="fa  fa-fw fa-home"></i> Home
                    </a>
                </li>
            </ul>
        </nav>

    </aside>
@endif
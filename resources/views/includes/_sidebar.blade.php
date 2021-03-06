@if(Auth::user())
<aside class="sidebar sidebar-left">
    <div class="sidebar-profile">
        <div class="avatar">
            <img class="img-circle profile-image" src="/assets/img/user.png" alt="profile">
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
            <li class="{{ route_state('home') }} {{ route_state('root') }}">
                <a href="{{ route('home') }}" title="Home">
                    <i class="fa fa-fw fa-home"></i> Home
                </a>
            </li>
            @if(Auth::user()->email == 'admin@admin.com')
            <li class="{{ route_state('company.*') }}">
                <a href="{{ route('company.index') }}" title="Empresa">
                    <i class="fa fa-fw fa-building"></i> Empresa
                </a>
            </li>
            <li class="{{ route_state('sale.*') }}">
                <a href="{{ route('sale.index') }}" title="Promoção">
                    <i class="fa fa-fw fa-tags"></i> Promoção
                </a>
            </li>
            @endif
            <li class="{{ route_state('voucher.*') }}">
                <a href="{{ route('voucher.index') }}" title="Voucher">
                    <i class="fa fa-fw fa-ticket"></i> Voucher
                </a>
            </li>
        </ul>
    </nav>
</aside>
@endif

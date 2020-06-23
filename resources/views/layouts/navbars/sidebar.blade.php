<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <div class="logo">
        <a href="https://creative-tim.com/" class="simple-text logo-normal">
        {{ __('VEGAS GRILL BURGUER') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
        <li class="nav-item dashboard">
            <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons"></i>
                <p>{{ __('Dashboard') }}</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pedido') }}">
            <i class="material-icons"></i>
                <p>{{ __('Pedido') }}</p>
            </a>
        </li>
        </ul>
    </div>
</div>

<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
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
                <p>{{ __('Pedidos') }}</p>
            </a>
        </li>
        </ul>
    </div>
</div>
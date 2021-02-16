<nav class="woocommerce-MyAccount-navigation">
    <ul style="display: inline-flex !important;">
        <li class="woocommerce-MyAccount-navigation p-3" id="li_nav1">
            <a href="{{ url('/' . $page='micuenta') }}"> <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                        </path>
                        <polyline points="9 22 9 12 15 12 15 22">
                        </polyline>
                    </svg></span> General
            </a>
        </li>
        <li class="woocommerce-MyAccount-navigation p-3"  id="li_nav2">
            <a href="{{ url('/' . $page='pedidos') }}"> <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck">
                        <rect x="1" y="3" width="15" height="13"></rect>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8">
                        </polygon>
                        <circle cx="5.5" cy="18.5" r="2.5">
                        </circle>
                        <circle cx="18.5" cy="18.5" r="2.5">
                        </circle>
                    </svg></span> Pedidos</a>
        </li>

        <li class="woocommerce-MyAccount-navigation p-3"  id="li_nav3">
            <a href="{{ url('/' . $page='misdirecciones') }}"><span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z">
                        </path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg></span> Direcciones</a>
        </li>
        <li class="woocommerce-MyAccount-navigation p-3"  id="li_nav4">
            <a href="{{ url('/' . $page='detallescuenta') }}"><span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                        </path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg></span>Detalles de la cuenta</a>
        </li>

        <li class="woocommerce-MyAccount-navigation p-3"  id="li_nav5">
            <a href="{{ url('/' . $page='metodospago') }}"><span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                        <line x1="1" y1="10" x2="23" y2="10">
                        </line>
                    </svg></span>Métodos de pago</a>
        </li>

        <li class="woocommerce-MyAccount-navigation p-3"  id="li_nav6">
            <a href="{{ url('/' . $page='cupones') }}"><span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift">
                        <polyline points="20 12 20 22 4 22 4 12">
                        </polyline>
                        <rect x="2" y="7" width="20" height="5">
                        </rect>
                        <line x1="12" y1="22" x2="12" y2="7">
                        </line>
                        <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z">
                        </path>
                        <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z">
                        </path>
                    </svg></span>
                Cupones</a>
        </li>

        <li class="woocommerce-MyAccount-navigation p-3" id="App_Login_CloseSesion">
            
        </li>
    </ul>
</nav>
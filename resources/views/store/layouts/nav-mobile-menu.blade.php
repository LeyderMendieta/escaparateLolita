<nav class="menu_mobile_nav_area">
    <ul id="menu_mobile-main-menu" class="">
        <li class="menu-item">
            <a href="{{ url('/' . $page='home') }}">
                <span>Home</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ url('/' . $page='about') }}">
                <span>About Us</span>
            </a>
        </li>
        <li class="menu-item menu-item-has-children">
            <a href="#">
                <span>Features</span>
            </a>
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="{{ url('/' . $page='features/shortcodes') }}">
                        <span>ShortCodes</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item  menu-item-has-children">
            <a href="#">
                <span>Store</span>
            </a>
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="{{ url('/' . $page='shop') }}">
                        <span>WooCommerce</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('/' . $page='shop-grid') }}">
                        <span>Ess. Grid Store</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="{{ url('/' . $page='gallery') }}">
                <span>Gallery</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ url('/' . $page='contacts') }}">
                <span>Contacts</span>
            </a>
        </li>
    </ul>
</nav>
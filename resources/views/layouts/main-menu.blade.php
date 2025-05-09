    <!-- Dashboards -->
    <li class="menu-item {{ request()->routeIs('dashboard') ? 'active open' : '' }}">
        <a href="{{ route('dashboard') }}" class="menu-link ">
            <i class="menu-icon tf-icons bx bx-home-smile"></i>
            <div class="text-truncate menuName" data-i18n="Dashboards">Dashboards</div>
        </a>
    </li>
    <!-- categories -->
    <li class="menu-item {{ request()->routeIs('category.index') ? 'active open' : '' }}">
        <a href="{{ route('category.index') }}" class="menu-link ">
            <i  class='menu-icon bx bx-category'></i>
            <div class="text-truncate" data-i18n="Dashboards"> Manage Categories</div>
        </a>
    </li>

    <!-- brands -->
    <li class="menu-item {{ request()->routeIs('brand.index') ? 'active open' : '' }}">
        <a href="{{ route('brand.index') }}" class="menu-link ">
            <i class='bx bxl-shopify menu-icon'></i>
            <div class="text-truncate" data-i18n="Dashboards"> Manage Brands</div>
        </a>
    </li>


    <!-- Layouts -->

    <li class="menu-item {{ request()->routeIs('product.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle ">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div class="text-truncate" data-i18n="Layouts">Products</div>
        </a>

        <ul class="menu-sub">
        <li class="menu-item ">
                <a href="{{route('product.create')}}" class="menu-link ">
                    <div class="text-truncate" data-i18n="Without menu">Add Product</div>
                </a>
            </li>
            <li class="menu-item ">
                <a href="{{route('product.index')}}" class="menu-link  ">
                    <div class="text-truncate" data-i18n="Without menu">All Products</div>
                </a>
            </li>
        </ul>
    </li>

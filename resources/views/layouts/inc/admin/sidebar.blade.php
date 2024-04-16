<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ Request::is('admin/dashboard' ? 'active' : '') }}">
            <a class="nav-link" href="/admin/dashboard">
                <i class="fa-sharp fa-solid fa-gauge"></i>
                <span class="menu-title ms-3">Dashboard</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/orders' ? 'active' : '') }}">
            <a class="nav-link" href="{{ url('admin/orders') }}">
                <i class="fa-brands fa-jedi-order"></i>
                <span class="menu-title ms-3">Orders</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/category*' ? 'active' : '') }}">
            <a class="nav-link" href="{{ url('admin/category') }}">
                <i class="fa-regular fa-rectangle-list"></i>
                <span class="menu-title ms-3">Category</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/brands*' ? 'active' : '') }}">
            <a class="nav-link" href="/admin/brands">
                <i class="fa-solid fa-file-medical"></i>
                <span class="menu-title ms-3">Brands</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/products*' ? 'active' : '') }}">
            <a class="nav-link" href="/admin/products">
                <i class="fa-solid fa-table-list"></i>
                <span class="menu-title ms-3">Products</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/colors*' ? 'active' : '') }}">
            <a class="nav-link" href="/admin/colors">
                <i class="fa-solid fa-eye-dropper"></i>
                <span class="menu-title ms-3">Colors</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/users*' ? 'active' : '') }}">
            <a class="nav-link" href="{{ url('admin/users') }}">
                <i class="fa-regular fa-user"></i>
                <span class="menu-title ms-3">Users</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/sliders*' ? 'active' : '') }}">
            <a class="nav-link" href="/admin/sliders">
                <i class="fa-solid fa-images"></i>
                <span class="menu-title ms-3">Home Slider</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/settings' ? 'active' : '') }}">
            <a class="nav-link" href="{{ url('admin/settings') }}">
                <i class="fa-solid fa-gear"></i>
                <span class="menu-title ms-3">Site Setting</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">
                <i class="fa-solid fa-house-user"></i>
                <span class="menu-title ms-3">Back Home</span>
            </a>
        </li>
    </ul>
</nav>

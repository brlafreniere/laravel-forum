<nav class="nav flex-column nav-pills p-3 rounded" style="background-color: #e3e3e3;">
    <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="/admin/dashboard">Dashboard</a>
    <a class="nav-link {{ request()->is('admin/topics*') ? 'active' : '' }}" href="/admin/topics">Topics</a>
</nav>
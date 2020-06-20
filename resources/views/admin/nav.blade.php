<nav class="nav flex-column nav-pills">
    <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="/admin/dashboard">Dashboard</a>
    <a class="nav-link {{ request()->is('admin/topics*') ? 'active' : '' }}" href="/admin/topics">Topics</a>
</nav>
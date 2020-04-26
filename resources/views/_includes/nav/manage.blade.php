<aside class="menu manage-side-bar p-l-30">
  <p class="menu-label p-t-20">
    General
  </p>
  <ul class="menu-list">
    <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
  </ul>
  <p class="menu-label">
    Content
  </p>
  <ul class="menu-list">
    <li><a href="{{route('posts.index')}}">Blog Posts</a></li>
    {{-- <li>
      <a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
      <ul>
        <li><a href="{{route('roles.index')}}">Roles</a></li>
        <li><a href="{{route('permissions.index')}}">Permissions</a></li>
      </ul>
    </li> --}}
  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li><a href="{{route('users.index')}}">Manage Users</a></li>
    <li>
      <a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
      <ul>
        <li><a href="{{route('roles.index')}}">Roles</a></li>
        <li><a href="{{route('permissions.index')}}">Permissions</a></li>
      </ul>
    </li>
  </ul>
  <p class="menu-label">
    Transactions
  </p>
  <ul class="menu-list">
    <li><a>Payments</a></li>
    <li><a>Transfers</a></li>
    <li><a>Balance</a></li>
  </ul>
</aside>
<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
<div class="logo">
  <a href="http://www.creative-tim.com" class="simple-text logo-mini">
    Admin Panel
  </a>
</div>
<div class="sidebar-wrapper" id="sidebar-wrapper">
  <ul class="nav">
    <li class="active ">
      <a href="{{ route('admin.index') }}">
        <i class="now-ui-icons design_app"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="">
        <a href="{{ route('admin.tournament') }}">
          <i class="now-ui-icons design_app"></i>
          <p>Tournament</p>
        </a>
      </li>
    {{-- <li class="active ">
      <a href="{{ route('admin.users') }}">
        <i class="now-ui-icons design_app"></i>
        <p>Users</p>
      </a>
    </li> --}}
  </ul>
</div>
</div>

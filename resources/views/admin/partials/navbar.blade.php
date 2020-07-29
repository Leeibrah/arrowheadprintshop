<ul class="nav navbar-nav">
  <li><a href="/">Home</a></li>
  @if (Auth::check())
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
         aria-expanded="false">Employers
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="/admin/employer">List</a></li>
        <li><a href="/admin/reports/employers">Reports</a></li>
      </ul>
 
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
         aria-expanded="false">Employees
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="/admin/employee">List</a></li>
        <li><a href="/admin/reports/employees">Reports</a></li>
      </ul>
    </li>
 
    <!-- <li @if (Request::is('admin/employer*')) class="active" @endif>
      <a href="/admin/employer">Employers</a>
    </li>
    <li @if (Request::is('admin/employee*')) class="active" @endif>
      <a href="/admin/employee">Employees</a>
    </li>
    <li @if (Request::is('admin/reports*')) class="active" @endif>
      <a href="/admin/reports/employees">Employees Reports</a>
    </li> -->
    <!-- <li @if (Request::is('admin/post*')) class="active" @endif>
      <a href="/admin/post">Posts</a>
    </li>
    <li @if (Request::is('admin/tag*')) class="active" @endif>
      <a href="/admin/tag">Tags</a>
    </li>
    <li @if (Request::is('admin/upload*')) class="active" @endif>
      <a href="/admin/upload">Uploads</a>
    </li> -->
  @endif
</ul>

<ul class="nav navbar-nav navbar-right">
  @if (Auth::guest())
    <li><a href="/auth/login">Login</a></li>
  @else
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
         aria-expanded="false">{{ Auth::user()->name }}
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="/auth/logout">Logout</a></li>
      </ul>
    </li>
  @endif
</ul>

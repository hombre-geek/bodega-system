  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-warehouse"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Bodega System <sup><i class="far fa-registered"></i></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        {{ __('Administration') }}
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" 
                href="#" data-toggle="collapse" data-target="#users"
            aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-users"></i>
            <span>{{ __('Users') }}</span>
        </a>
        <div id="users" class="collapse {{ Request::routeIs('users.index') || Request::routeIs('users.create')  ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">{{ __('Manage:') }}</h6>
                <a  class="collapse-item {{ Request::routeIs('users.index') ? 'active' : '' }}"
                    href="{{ route('users.index') }}"> {{ __('Users List') }} </a>
                <a class="collapse-item {{ Request::routeIs('users.create') ? 'active' : '' }}" href="{{ route('users.create') }}">{{ __('Create New User') }}</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::routeIs('categories.index') || Request::routeIs('categories.create')  ? 'collapsed' : '' }}" 
            href="#" data-toggle="collapse" data-target="#categories"
            aria-expanded="{{ Request::routeIs('categories.index') || Request::routeIs('categories.create')  ? 'true' : 'false' }}" aria-controls="collapseTwo">
            <i class="fas fa-folder-open"></i>
            <span>{{ __('Categories') }}</span>
        </a>
        <div id="categories" class="collapse {{ Request::routeIs('categories.index') || Request::routeIs('categories.create')  ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">{{ __('Manage:') }}</h6>
                <a  class="collapse-item {{ Request::routeIs('categories.index') ? 'active' : '' }}"
                    href="{{ route('categories.index') }}"> {{ __('Categories List') }} </a>
                <a class="collapse-item {{ Request::routeIs('categories.create') ? 'active' : '' }}"
                     href="{{ route('categories.create') }}">{{ __('Create New Category') }}</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::routeIs('resources.index') || Request::routeIs('resources.create')  ? 'collapsed' : '' }}" 
            href="#" data-toggle="collapse" data-target="#resources"
            aria-expanded="{{ Request::routeIs('resources.index') || Request::routeIs('resources.create')  ? 'true' : 'false' }}" aria-controls="collapseTwo">
            <i class="fas fa-boxes"></i>
            <span>{{ __('Resources') }}</span>
        </a>
        <div id="resources" class="collapse {{ Request::routeIs('resources.index') || Request::routeIs('resources.create')  ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">{{ __('Manage:') }}</h6>
                <a  class="collapse-item {{ Request::routeIs('resources.index') ? 'active' : '' }}"
                    href="{{ route('resources.index') }}"> {{ __('Resources List') }} </a>
                <a class="collapse-item {{ Request::routeIs('resources.create') ? 'active' : '' }}"
                     href="{{ route('resources.create') }}">{{ __('Create New Resource') }}</a>
            </div>
        </div>
    </li>

   

    <!-- Divider -->
    <hr class="sidebar-divider">

  
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="far fa-life-ring"></i>
            <span>Soporte Técnico</span></a>
    </li>

    

</ul>
<!-- End of Sidebar -->
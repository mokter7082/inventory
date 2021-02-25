<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
  @include('includeFile.basicStyle')
</head>
<body>
  <!-- ============================================================ -->
  <!-- ===========INCLUDE HEADER AREA============================= -->
  @include('includeFile.headerArea')
        <!-- page BODY -->
        <div class="page-body">
<!-- ============================================================ -->
<!-- ===========INCLUDE LEFTSIDE AREA============================= -->
          @include('includeFile.leftsideArea')
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <div class="content">
                                <!-- content HEADER -->
                                <!-- ========================================================= -->
                                <div class="content-header">
                                    <!-- leftside content header -->
                                    <div class="leftside-content-header">
                                        <ul class="breadcrumbs">
                                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                                <div class="row animated fadeInUp">
                                                @yield('content')
                                </div>
                                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            </div>
<!-- ============================================================ -->
<!-- ===========INCLUDE FOOTER AREA============================= -->
  @include('includeFile.footerArea')

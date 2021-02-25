<div class="left-sidebar">
    <!-- left sidebar HEADER -->
    <div class="left-sidebar-header">
        <div class="left-sidebar-title">Navigation</div>
        <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
            <span></span>
        </div>
    </div>
    <!-- NAVIGATION -->
    <!-- ========================================================= -->
    <div id="left-nav" class="nano">
        <div class="nano-content">
            <nav>
                <ul class="nav nav-left-lines" id="main-nav">
                    <!--HOME-->
                    <li class="active-item"><a href="{{route('dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                    <!--UI ELEMENTENTS-->
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Employees</span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="{{route('add-employee')}}">Add new</a></li>
                            <li><a href="{{route('all-employee')}}">All</a></li>
                        </ul>
                    </li>
                    <!--CHARTS-->
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-pie-chart" aria-hidden="true"></i><span>Customar</span> </a>
                        <ul class="nav child-nav level-1">
                            <li><a href="{{route('add-customar')}}">Add Customar</a></li>
                            <li><a href="{{route('all-customar')}}">All Customar</a></li>
                        </ul>
                    </li>
                    <!--FORMS-->
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-columns" aria-hidden="true"></i><span>Supplier </span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="{{route('add-supplier')}}">Add Supplier</a></li>
                            <li><a href="{{route('all-supplier')}}">All Supplier</a></li>
                        </ul>
                    </li>
                    <!--TABLES-->
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-table" aria-hidden="true"></i><span>Salary(EMP)</span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="{{route('advance-salary')}}">Advance Salary</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

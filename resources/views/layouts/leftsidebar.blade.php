<!-- Left Sidebar  -->
<?php
use App\Role;
$role = new Role();
?>
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                {{--<li class="nav-devider"></li>--}}
                {{--<li class="nav-label">Home</li>--}}
                {{--<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-primary pull-right">2</span></span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="index.html">Ecommerce </a></li>--}}
                        {{--<li><a href="index1.html">Analytics </a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                <li class="nav-label">Info</li>

                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Tables</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/computer">Computer</a></li>
                        <li><a href="/lease">Lease</a></li>
                        <li><a href="/staff">Staff</a></li>
                        <li><a href="/tariff">Tariff</a></li>
                        <li><a href="/typeComputer">Type</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>

<!-- End Left Sidebar  -->
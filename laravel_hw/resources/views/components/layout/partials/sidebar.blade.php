
<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->

        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
           
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
              
                <form class="sidebar-search " action="extra_search.html" method="POST">
                    <a href="javascript:;" class="remove">
                    <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            @php
                //dd(request()->is('product/index') );
            @endphp

                

            <li class="{{ request()->is('dashboard')==true ? 'start active open' : ''}}"> {{-- start active open --}}
                <a href="{{url('/dashboard')}}">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
                </a>
                
            </li>

            <li class="{{ request()->is('product/index')==true ? 'active' : ''}}">
                <a href="javascript:;">
                <i class="icon-basket"></i>
                <span class="title">eCommerce</span>
                <span class="selected"></span>
                <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{url('/product/index')}}">
                        <i class="icon-home"></i>
                        Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;">
                        <i class="icon-basket"></i>
                        Orders</a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="icon-tag"></i>
                        Order View</a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="icon-handbag"></i>
                        Products</a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="icon-pencil"></i>
                        Product Add</a>
                    </li>
                </ul>
            </li>
   
            <li class="heading">
                <h3 class="uppercase">More</h3>
            </li>
            <li>
                <a href="javascript:;">
                <i class="icon-logout"></i>
                <span class="title">Log Out</span>
                <span class="arrow "></span>
                </a>
            </li>


        <!-- END SIDEBAR MENU -->
    </div>
</div>

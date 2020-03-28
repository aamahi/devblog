<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="{{route('home')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{route('category')}}">
                    <i class="fa fa-tasks"></i>
                    <span>Category</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-pencil"></i>
                    <span>Post</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('write_post')}}">Write Post</a></li>
                    <li><a  href="{{route('all_post')}}">Post</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Layouts</span>
                </a>
                <ul class="sub">
                    <li><a  href="boxed_page.html">Boxed Page</a></li>
                    <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
                    <li><a  href="header-color.html">Different Color Top bar</a></li>
                    <li><a  href="mega_menu.html">Mega Menu</a></li>
                    <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
                    <li><a  href="email_template.html" target="_blank">Email Template</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>

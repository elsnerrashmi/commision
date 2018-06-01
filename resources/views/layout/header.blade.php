<div class="wthree_agile_admin_info">
    <div class="w3_agileits_top_nav">
        <ul id="gn-menu" class="gn-menu-main">
            <li class="gn-trigger">
                <a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
                @include('layout.sidebar')
            </li>
            <li class="second logo"><h1><a href="{{url('/')}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <img height="40px" width="60px"
                             src="{{asset('public/general/'.$settings['site_logo'])}}">&nbsp;{{$settings['site_name']}}
                    </a></h1></li>
            <li class="second admin-pic">
                <ul class="top_dp_agile">
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <div class="profile_img">
                                <span class="prfil-img"><img
                                            src="{{asset('public/user/profile/'.Auth::user()->profile_pic)}}"
                                            alt=""> </span>
                            </div>
                        </a>
                        <ul class="dropdown-menu drp-mnu">
                            <li style="border-bottom: 1px dotted black"><a style="cursor: text">
                                    <h3>{{Auth::user()->name}}</h3></a></li>
                            <li><a href="{{url('admin/settings')}}"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="{{url('admin/profile')}}"><i class="fa fa-user"></i> Profile</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            {{--<li class="second top_bell_nav">
                <ul class="top_dp_agile ">
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i
                                    class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge blue">4</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>Your Notifications</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                    <div class="user_img"><img src="images/a3.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>John Smith</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li class="odd"><a href="#">
                                    <div class="user_img"><img src="images/a1.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>Jasmin Leo</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>3 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user_img"><img src="images/a2.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>James Smith</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>2 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user_img"><img src="images/a4.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>James Smith</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all Notifications</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="second top_bell_nav">
                <ul class="top_dp_agile ">
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i
                                    class="fa fa-envelope-o" aria-hidden="true"></i> <span
                                    class="badge blue">3</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>Your Messages</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                    <div class="user_img"><img src="images/a3.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>John Smith</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>3 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li class="odd"><a href="#">
                                    <div class="user_img"><img src="images/a1.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>Jasmin Leo</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>2 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li><a href="#">
                                    <div class="user_img"><img src="images/a2.jpg" alt=""></div>
                                    <div class="notification_desc">
                                        <h6>James Smith</h6>
                                        <p>Lorem ipsum dolor</p>
                                        <p><span>1 hour ago</span></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all Messages</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="second top_bell_nav">
                <ul class="top_dp_agile ">
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-tasks"></i><span class="badge blue">9</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have 4 Pending tasks</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Database update</span><span
                                                class="percentage">40%</span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar yellow" style="width:40%;"></div>
                                    </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar green" style="width:90%;"></div>
                                    </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar red" style="width: 33%;"></div>
                                    </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="task-info">
                                        <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="bar  blue" style="width: 80%;"></div>
                                    </div>
                                </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all pending tasks</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>--}}

            <li class="second w3l_search pull-right" style="margin-top:7px;">

                <form action="#" method="post">
                    <input type="search" name="search" placeholder="Search here..." required="">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>

            </li>
            <li class="second full-screen">
                <section class="full-top">
                    <button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
                </section>
            </li>

        </ul>
        <!-- //nav -->

    </div>
    <div class="clearfix"></div>
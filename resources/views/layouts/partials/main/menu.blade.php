<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Tickets</a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="index.html">All</a></li>
                                    <li><a href="index-2.html">Unclosed</a></li>
                                    <li><a href="index-3.html">Closed</a></li>

                                </ul>
                            </li>
                            {{--<li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="index.html">Dashboard One</a></li>
                                    <li><a href="index-2.html">Dashboard Two</a></li>
                                    <li><a href="index-3.html">Dashboard Three</a></li>
                                    <li><a href="index-4.html">Dashboard Four</a></li>
                                    <li><a href="analytics.html">Analytics</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                </ul>
                            </li>--}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active"><a data-toggle="tab" href="#Tickets"><i class="fa fa-home"></i> Tickets</a>
                    </li>
                    <li><a data-toggle="tab" href="#knowledgeBase"><i class="fa fa-envelope-o"></i> Knowledge Base</a>
                    </li>
                    <li><a data-toggle="tab" href="#assets"><i class="fa fa-envelope-o"></i> Assets </a>
                    </li>
                    <li><a data-toggle="tab" href="#assets"><i class="fa fa-cog"></i> Administration </a>
                    </li>

                  {{--  <li><a data-toggle="tab" href="#Interface"><i class="fa fa-edit"></i> Interface</a>
                    </li>--}}
                   {{-- <li><a data-toggle="tab" href="#Charts"><i class="fa fa-area-chart"></i> Charts</a>
                    </li>--}}
                {{--    <li><a data-toggle="tab" href="#Tables"><i class="fa fa-table"></i> Tables</a>
                    </li>--}}
                    {{--<li><a data-toggle="tab" href="#Forms"><i class="fa fa-sticky-note-o"></i> Forms</a>
                    </li>--}}
                   {{-- <li><a data-toggle="tab" href="#Appviews"><i class="notika-icon notika-app"></i> App views</a>
                    </li>--}}
                {{--    <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Pages</a>
                    </li>--}}
                    {{--<li><a  href="{{route('log-out')}}"><i class="notika-icon notika-support"></i> Logout</a>
                    </li>--}}
                    <a href="{{route('ticket.create')}}" class="btn btn-cyan pull-right btn-sm btn-theme-color" style="" ><i class="fa fa-plus"></i> New Ticket</a>

                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Tickets" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">

                            <li class="active-li"><a href="index-2.html">New(1)</a>
                            </li>
                            <li><a href="index-2.html">Unclosed(1)</a>
                            </li>

                            <li><a href="index-3.html">Closed(1)</a>
                            </li>
                            <li><a href="index-2.html">Unassigned(1)</a>
                            </li>
                            <li><a href="index-2.html">Assigned To you(1)</a>
                            </li>
                            <li><a href="{{route('ticket.index')}}">All(1)</a>
                            </li>
                        </ul>
                    </div>
                   {{-- <div id="Home" class="tab-pane in  notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="index.html">Dashboard One</a>
                            </li>
                            <li><a href="index-2.html">Dashboard Two</a>
                            </li>
                            <li><a href="index-3.html">Dashboard Three</a>
                            </li>
                            <li><a href="index-4.html">Dashboard Four</a>
                            </li>
                            <li><a href="analytics.html">Analytics</a>
                            </li>
                            <li><a href="widgets.html">Widgets</a>
                            </li>
                        </ul>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
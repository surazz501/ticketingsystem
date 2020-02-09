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
                    <li class="{{ (request()->routeIs('ticket*')) ? 'active' : '' }}"><a data-toggle="tab"
                                                                                         href="#Tickets"><i
                                    class="fa fa-home"></i> Tickets</a>
                    </li>
                    <li><a data-toggle="tab" href="#knowledgeBase"><i class="fa fa-envelope-o"></i> Knowledge Base</a>
                    </li>
                    <li><a data-toggle="tab" href="#assets"><i class="fa fa-envelope-o"></i> Assets </a>
                    </li>
                    <li class="{{ (request()->routeIs('settings*')) ? 'active' : '' }}"><a
                                href="{{route('settings.index')}}"><i class="fa fa-cog"></i> Administration </a>
                    </li>
                    @if(request()->routeIs('ticket*'))
                        <a href="{{route('ticket.create')}}" class="btn pull-right btn-sm btn-theme-color" style=""><i
                                    class="fa fa-plus"></i> New Ticket</a>
                    @endif
                    @if(request()->routeIs('settings*'))
                        <a href="{{route('settings.categories.create')}}" class="btn pull-right btn-sm btn-theme-color"
                           style=""><i class="fa fa-plus"></i> New Category</a>
                    @endif
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Tickets"
                         class="tab-pane in {{ (request()->routeIs('ticket*')) ? 'active' : '' }} notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">

                            <li class="{{--active-li--}}"><a href="index-2.html">New(1)</a>
                            </li>
                            <li><a href="index-2.html">Unclosed(1)</a>
                            </li>
                            <li><a href="index-3.html">Closed(1)</a>
                            </li>
                            <li><a href="index-2.html">Unassigned(1)</a>
                            </li>
                            <li><a href="index-2.html">Assigned To you(1)</a>
                            </li>
                            <li class="{{ (request()->routeIs('ticket.index')) ? 'active-li' : '' }}"><a
                                        href="{{route('ticket.index')}}">All (2)</a>
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
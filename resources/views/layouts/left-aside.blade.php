<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="{{route('home')}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
											<span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span> </span></span></a></li>
            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Chức năng</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-list-3"></i><span class="m-menu__link-text">DataTables</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">DataTables</span></span></li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">Basic</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/basic/basic.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Basic Tables</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/basic/scrollable.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scrollable
																Tables</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/basic/headers.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Complex Headers</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/basic/paginations.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pagination
																Options</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">Advanced</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/advanced/column-rendering.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Rendering</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/advanced/multiple-controls.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Multiple
																Controls</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/advanced/column-visibility.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Visibility</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/advanced/row-callback.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row
																Callback</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/advanced/row-grouping.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Row
																Grouping</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/advanced/footer-callback.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Footer
																Callback</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">Data sources</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/data-sources/html.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">HTML</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/data-sources/javascript.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Javascript</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/data-sources/ajax-client-side.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax
																Client-side</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/data-sources/ajax-server-side.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Ajax
																Server-side</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">Search Options</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/search-options/column-search.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Column
																Search</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/search-options/advanced-search.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Advanced
																Search</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">Extensions</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/extensions/buttons.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Buttons</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/extensions/colreorder.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">ColReorder</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/extensions/keytable.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">KeyTable</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/extensions/responsive.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Responsive</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/extensions/rowgroup.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">RowGroup</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/extensions/rowreorder.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">RowReorder</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/extensions/scroller.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Scroller</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true"><a href="{{asset('crud/datatables/extensions/select.html')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Select</span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>

    <!-- END: Aside Menu -->
</div>
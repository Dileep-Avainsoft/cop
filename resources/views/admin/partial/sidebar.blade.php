<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>

        <div class="logo-wrapper"><a href="#">
            <img class="img-fluid for-light" height="150px" width="150px" src="{{asset("assets/images/logo/cop_logo5.png")}}" alt="">
            <img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="">
        </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="#"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon4.png')}}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="#"><img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Car Data</h6>
                        </div>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>

                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            <span>Dashboard</span></a>

                    </li>



                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Brand</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="{{ route('brand.create')}}">Add</a></li>
                            <li><a  href="/brand_v">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Model</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="/model">Add</a></li>
                            <li><a  href="/model_v">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Variant</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="/variant">Add</a></li>
                            <li><a  href="/variant_v">View</a></li>
                        </ul>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Feature</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="/features">Add</a></li>
                            <li><a  href="/features_v">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Sub Feature</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="/sub_features">Add</a></li>
                            <li><a  href="/sub_features_e">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Car Graphics</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="/car_images">Add</a></li>
                            <li><a  href="/car_images_v">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Banner</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="/banner">Add</a></li>
                            <li><a  href="/banner_v">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Menu</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="/menu">Add</a></li>
                            <li><a  href="/menu_v">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Sub Menu</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="/sub_menu">Add</a></li>
                            <li><a  href="/sub_menu_v">View</a></li>
                        </ul>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Car Category Data</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="/car_category_data">Add</a></li>
                            <li><a  href="/car_category_data_v">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6>Master Table</h6>
                        </div>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Car Stage</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="{{ route ('car_stage.create')}}">Add</a></li>
                            <li><a  href="{{ route('car_stage.view')}}">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Car Type </span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="{{ route('car_type.create')}}">Add</a></li>
                            <li><a  href="#">View</a></li>
                        </ul>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Specification</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="/spec">Add</a></li>
                            <li><a  href="/spec_v">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <!--                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>-->
                            </svg><span>Specification Category</span></a>
                        <ul class="sidebar-submenu">
                            <li><a  href="{{ route ('spec_cat.create')}}">Add</a></li>
                            <li><a  href="{{ route ('spec_cat.view')}}">View</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file')}}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-file')}}"></use>
                            </svg><span>File manager</span></a></li>


                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>

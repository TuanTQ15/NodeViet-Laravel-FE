        <!--header area start-->
        <header class="header-section header-gradient">
            <div class="topbar">
                <div class="container">
                    <div class="row col-md-12 align-item-center">
                        <!-- <div class="col-md-12">
                            <div class="topbar-right text-end">
                                <a href="#">Login</a>
                                <a href="#">Sign up</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="container">
                    <div class="nav-menu bg-white">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-10">
                                    <a href=" /"><img src="assets/img/Node-logo.png" alt="logo" class="logo"></a>
                            </div>
                            <div class="col-xl-6 col-lg-4 d-none d-lg-block">
                                <div class="nav-wrapper">
                                    <nav>
                                        <ul>
                                            <li><a href=" /">Home</a>
                                            </li>
                                            <li><a href=" /">Blog</a>
                                            </li>
                                            <li><a href="{{route('faucet')}}">Faucet</a></li>
                                            <li class="has-submenu"><a href="#">Tool</a>
                                                <div class="submenu-wrapper menu-list theme-megamenu">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="megamenu-item"><a href="{{route('faucet')}}">
                                                                    <div class="menu-list-wrapper d-flex align-items-center">
                                                                        <span class="icon-wrapper"><i class="fa-solid fa-server"></i></span>
                                                                        <div class="menu-list-content-right ms-3">
                                                                            <h6>Faucet<span class="badge bg-danger ms-3"></span>
                                                                            </h6>
                                                                            <span>Testnet token faucet</span>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="megamenu-item"><a href="#">
                                                                    <div class="menu-list-wrapper d-flex align-items-center">
                                                                        <span class="icon-wrapper"><i class="fa-brands fa-buffer"></i></span>
                                                                        <div class="menu-list-content-right ms-3">
                                                                            <h6>Guide<span class="badge bg-danger ms-3"></span>
                                                                            </h6>
                                                                            <span>Guide node</span>
                                                                        </div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="has-submenu"><a href="#">Social Media</a>
                                                <ul class="submenu-wrapper">
                                                    <li><a href="https://t.me/NodeValidatorVietNam" target="_blank"><span class="icon-wrapper">
                                                        <i class="fa-brands fa-telegram" style="color:#1DA1F2; font-size: 21px;"></i>
                                                    </span>&nbsp;&nbsp;Telegram Group</a>
                                                    </li><li><a href="https://www.youtube.com/@nodevalidatorvietnam">
                                                        <span class="icon-wrapper">
                                                            <i class="fa-brands fa-youtube" style="color:red; font-size: 21px;"></i>
                                                        </span>&nbsp;&nbsp;Youtube<span class="badge bg-dark ms-3"></span></a></li>
                                                    <li><a href="https://twitter.com/NodeValidatorVN">
                                                        <span class="icon-wrapper">
                                                            <i class="fa-brands fa-twitter" style="color:#1DA1F2; font-size: 21px;"></i>
                                                        </span>&nbsp;&nbsp;Twitter<span class="badge bg-dark ms-3"></span></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{route('about')}}">About</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-6">
                                <div class="header-right d-flex align-items-center justify-content-end">
                                    <div class="lang-switcher d-none d-sm-block">
                                        <a href="#"><span class="me-1"><i class="fa-solid fa-globe"></i></span>Vn</a>
                                    </div>
                                    <div class="lang-switcher d-none d-sm-block">
                                        <a href="#"><span class="me-1"></i></span>En</a>
                                    </div>
                                    <div class="header-search position-relative dropdown next">
                                        <button class="border-0" data-bs-toggle="dropdown">
                                            <svg width="16" height="16" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.421875 7.58979C0.421875 7.27212 0.421875 6.95874 0.421875 6.64107C0.451875 6.43501 0.473304 6.22466 0.507589 6.0186C0.794732 4.31433 1.5833 2.8891 2.88188 1.75149C3.82902 0.918674 4.93045 0.382065 6.16473 0.137372C6.46045 0.0772716 6.76473 0.0429287 7.06473 0C7.38188 0 7.69902 0 8.01188 0C8.2133 0.0257572 8.41902 0.0472216 8.61616 0.0815645C10.279 0.360601 11.6976 1.09897 12.8204 2.36537C14.3376 4.06964 14.9162 6.06582 14.5604 8.31958C14.3847 9.43573 13.939 10.4488 13.2619 11.3546C13.2019 11.4319 13.1462 11.5135 13.0519 11.638C13.1162 11.6809 13.1847 11.7109 13.2319 11.7582C14.8176 13.3379 16.399 14.9177 17.9762 16.5061C18.1433 16.6778 18.2676 16.8881 18.4133 17.0856C18.4133 17.1929 18.4133 17.296 18.4133 17.4033C18.3062 17.5578 18.2247 17.7467 18.079 17.8583C17.7704 18.1073 17.3847 18.0343 17.059 17.7081C15.4304 16.0811 13.8019 14.4541 12.1776 12.8271C12.1262 12.7756 12.0962 12.6983 12.0533 12.6339C11.9933 12.6854 11.9804 12.6897 11.9719 12.694C11.9119 12.7369 11.8519 12.7842 11.7876 12.8271C9.71759 14.2995 7.46759 14.6773 5.08473 13.793C2.68902 12.9044 1.20616 11.1572 0.589018 8.68018C0.511875 8.32387 0.481875 7.95469 0.421875 7.58979ZM13.1719 7.13475C13.159 4.04388 10.6862 1.52826 7.57473 1.5068C4.51473 1.48533 1.95616 3.95373 1.92188 7.09611C1.88759 10.1655 4.41188 12.7369 7.53616 12.7412C10.6176 12.7498 13.1376 10.2943 13.1719 7.13475Z" fill="#001042"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end bg-transparent border-0">
                                            <form class="header-search-form" action="#">
                                                <input type="text" placeholder="Search....">
                                                <input type="submit" value="Go">
                                            </form>
                                        </div>
                                    </div>
                                    <!-- <div class="ofcanvus-btns next">
                                        <a href="#" class="ofcanvus-btn d-none d-lg-block"><i class="fa-solid fa-bars-staggered"></i></a>
                                        <a href="#" class="mobile-menu-toggle d-lg-none"><i class="fa-solid fa-bars-staggered"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header area end-->

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

     <!-- <link rel="shortcut icon" type="image/x-icon" href="{{url('/Image/icon.png')}}" />  -->

    <title>Trischel Admin Dashboard</title>
    <link rel="apple-touch-icon" href="{{ asset('vbackend/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('vbackend/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/extensions/toastr.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/editors/quill/katex.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/editors/quill/monokai-sublime.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/vendors/css/editors/quill/quill.snow.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/themes/semi-dark-layout.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/plugins/forms/pickers/form-pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/plugins/forms/form-validation.css') }}">

    
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/plugins/forms/form-quill-editor.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/core/menu/menu-types/vertical-menu.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/plugins/forms/form-validation.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/pages/page-auth.css') }} ">

    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/core/menu/menu-types/vertical-menu.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/pages/page-profile.css') }} ">

    
 
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/app-assets/css/pages/page-blog.css') }} ">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vbackend/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

<!-- 
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet"> -->

</head>
<!-- END: Head-->


<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">

<div id="app">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow" id="topbar" v-show="$route.path === '/' || $route.path === '/register'  || $route.path === '/forget' ? false:true " style="display:none" >

        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>

                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
                </ul>
                
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>


            <ul class="nav navbar-nav align-items-center ml-auto">
          
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>

                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>

                    <li class="nav-item d-none d-lg-block">
                    
                    
                    
                    <router-link class="nav-link dropdown-toggle dropdown-user-link" to="/editProfile">
                    
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">Yohan Perera</span><span class="user-status">
                        1050 </span>
                        </div><span class="avatar"><img class="round" src="{{ asset('vBackend/app-assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    
                    </router-link>

                    
                    </li>
 
                    <router-link to="/logout" class="nav-link dropdown-toggle dropdown-user-link"  >
                        <a  href="#"><i data-feather="power"></i> 
                        </router-link>
                    </a>
                
                </li>

            </ul>
        </div>
    </nav>

    
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" v-show="$route.path === '/' || $route.path === '/register'  || $route.path === '/forget' ? false:true " id="sidebar"   style="display:none">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"> <router-link class="navbar-brand" to="/"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">TRISCHEL</h2>
                    </router-link>
                    </li>
                <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning badge-pill ml-auto mr-1">3</span></a>
                    <ul class="menu-content">

                        <li>
                        <router-link class="d-flex align-items-center"  to="/" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></router-link>
                        </li>

                        <li >
                        <router-link class="d-flex align-items-center"  to="/" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Controll</span></router-link>
                        </li>

                        <li >
                        <router-link class="d-flex align-items-center"  to="/blog" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Trischel Academy</span></router-link>
                        </li>

                    </ul>
                </li>


                <li class=" navigation-header"><span data-i18n="Sustainability">Manage Sustainability</span><i data-feather="more-horizontal"></i>
                </li>
               
                   
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="pie-chart"></i><span class="menu-title text-truncate" data-i18n="Charts">Sustainability</span><span class="badge badge-light-danger badge-pill ml-auto mr-2">5</span></a>
                        <ul class="menu-content">
                            <li>
                            <router-link class="d-flex align-items-center"  to="/manageAll" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Manage All</span></router-link>
                            </li>
                            <li>  
                            <li>
                            <router-link class="d-flex align-items-center"  to="/ene" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Energy Sources</span></router-link>
                            </li>
                            <li>  
                            <router-link class="d-flex align-items-center"  to="/water" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Water</span></router-link>
                            </li>
                            <li>
                            <router-link class="d-flex align-items-center"  to="/waste" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Waste</span></router-link>
                            </li>
                            <li>
                            <router-link class="d-flex align-items-center"  to="/production" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Production</span></router-link>
                            </li>
                        </ul>
                    </li>



                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Admins &amp; Users</span><i data-feather="more-horizontal"></i>
                </li>
               
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Manage Admins</span></a>
                        <ul class="menu-content">
                            <li>
                            <router-link class="d-flex align-items-center"  to="/show-admin" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Admin</span></router-link>
                            </li>
                            <li>  
                            <router-link class="d-flex align-items-center"  to="/store-admin" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Add Admin</span></router-link>
                            </li>

                        </ul>
                    </li>

                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Manage Users</span></a>
                    
                    <ul class="menu-content">
                        <li>
                    <router-link class="d-flex align-items-center"  to="/show-user" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Users</span></router-link>
                        </li>

                        <li>
                        <router-link class="d-flex align-items-center" to="/store-user"> <i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Add User</span></router-link>
                        </li>
                    </ul>
                </li>



                     <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Posts &amp; Categories </span><i data-feather="more-horizontal"></i>
                </li>
                    
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Manage Posts</span></a>
                        <ul class="menu-content">
                            <li>
                            <router-link class="d-flex align-items-center"  to="/blogAdd" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Posts</span></router-link>
                            </li>
                            <li>  
                            <router-link class="d-flex align-items-center"  to="/blogAdd" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Add Post</span></router-link>
                            </li>

                        </ul>

                        
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Post Categories</span></a>
                        <ul class="menu-content">
                            <li>
                            <router-link class="d-flex align-items-center"  to="/show-admin" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Categories</span></router-link>
                            </li>
                            <li>  
                            <router-link class="d-flex align-items-center"  to="/store-admin" ><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Add Category</span></router-link>
                            </li>

                        </ul>

                        
                    </li>

               


                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Profile Settings</span><i data-feather="more-horizontal"></i>
                </li>
               
                   
                  <li>
                  <router-link class="d-flex align-items-center"  to="/myProfile" ><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg><span class="menu-item text-truncate"  data-i18n="List">My Profile</span></router-link>
                  </li>

                  <li>
                  <router-link class="d-flex align-items-center"  to="/editProfile" ><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><span class="menu-item text-truncate"  data-i18n="List">Change Details</span></router-link>
                  </li>
                         


 
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->


       <!-- BEGIN: Content-->
          <router-view></router-view>
        <!-- END: Content-->



    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light"  id="fotter" v-show="$route.path === '/' || $route.path === '/register'  || $route.path === '/forget' ? false:true " style="display:none">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="https://masmalima.com/trischel-fabric-pvt-ltd/" target="_blank">Trischel Fabric</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Trischel Team<i data-feather="heart"></i></span></p>
    </footer>
    
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->
    </div>




    <!-- //vue -->
    <script src="{{asset('js/app.js') }}"></script> 

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('vbackend/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('vbackend/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>

    <!-- js alert -->
    <!-- <script src="{{ asset('vbackend/app-assets/vendors/js/extensions/toastr.min.js') }}"></script> -->
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Page Vendor JS-->
    <!-- <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script> -->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('vbackend/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('vbackend/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->
    <script src="{{ asset('vbackend/app-assets/js/scripts/pages/page-profile.js') }}"></script>


    <!-- BEGIN: Page JS-->
    <script src="{{ asset('vbackend/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <!-- END: Page JS-->

    
    <script src="{{ asset('vbackend/app-assets/js/scripts/pages/page-account-settings.js') }}"></script>

    <!-- BEGIN: Page JS-->
    <!-- <script src="{{ asset('vbackend/app-assets/js/scripts/tables/table-datatables-basic.js') }} "></script> -->
    <!-- END: Page JS-->


    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script> -->


    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

        
      let token = localStorage.getItem('token');

      if(token){
          $('#sidebar').css("display","");
          $('#topbar').css("display","");
      }

    </script>


<script>
  export default {
    props: ['message', 'onOk']
  }
</script>




</body>
<!-- END: Body-->

</html>
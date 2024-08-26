<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E-Book - Admin Dashboard </title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('temp/css/app.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('temp/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/css/components.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/bundles/select2/dist/css/select2.min.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('temp/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('temp/logo/orig_480x480.png')}}" />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav">
                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                                <i data-feather="align-justify"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>
                        <li>
                            <form class="form-inline">
                                <div class="search-element">
                                    
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>

                <div class="ml-auto">
                    <ul class="navbar-nav">
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input type="submit" value="Log out" class="btn btn-danger">
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('adminDashboard')}}"> <img alt="image" src="{{ asset('temp/logo/trans_480x480.png')}}"
                                class="header-logo" />
                            <span class="logo-name">E-Book</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown ">
                            <a href="{{ route('adminDashboard') }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown ">
                            <a href="{{ route('admin.categories.index')  }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>Categories</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('admin.posts.index') }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>Posts</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('admin.tags.index') }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>Tags</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('admin.ads.index') }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>Ads</span></a>
                        </li>



                    </ul>
                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row ">
                        @yield('content')
                    </div>

                </section>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="templateshub.net">Templateshub</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('temp/js/app.min.js')}}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('temp/bundles/apexcharts/apexcharts.min.js')}}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('temp/js/page/index.js')}}"></script>
    <!-- Template JS File -->
    <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script src="{{ asset('temp/js/scripts.js')}}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('temp/js/custom.js')}}"></script>
    <script src="{{ asset('temp/bundles/select2/dist/js/select2.full.min.js')}}"></script>

    <script type="text/javascript">
    CKEDITOR.replace('content_en', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token()])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('content_ru', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token()])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('content_uz', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token()])}}",
        filebrowserUploadMethod: 'form'
    });
    </script>


    <script>
        let url = window.location.href;

        let a = document.querySelectorAll("[href = '" + url + "']")[0]

        a.parentElement.classList.add("active");
    </script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
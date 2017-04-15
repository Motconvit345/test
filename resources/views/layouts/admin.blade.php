<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trang quản trị web bán máy tính">
    <meta name="author" content="Bạch Trung Kiên">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>May Tinh Trung Kien</title>

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- Sweet Alert  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/sweetalert/dist/sweetalert.css') }}">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('bower_components/datatables-responsive/css/responsive.dataTables.css') }}" rel="stylesheet">
    @stack('style')
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ action('HomeController@index') }}">Store Computer</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown open">
                    <a class="dropdown-toggle active" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages in">
                        <li>
                            <a href="#" class="active">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="active">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="active">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center active" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ action('Admin\HomeController@index') }}"><i class="fa fa-dashboard fa-fw"></i> Trang Chủ</a>
                        </li>
                        <li>
                            <a href="{{ action('Admin\BillController@index') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Giao Dịch</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-bar-chart-o fa-fw"></i>Sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ action('Admin\ProductController@index') }}">Sản phẩm</a>
                                </li>
                                <li>
                                    <a href="{{ action('Admin\CategoryController@index') }}">Danh mục thể loại</a>
                                </li>
                            </ul>
                        </li>                    
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-users fa-fw"></i>Tài khoản<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ action('Admin\UserController@index') }}">Ban quản trị</a>
                                </li>
                                <li>
                                    <a href="{{ action('Admin\UserController@indexMember') }}">Thành viên</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-users fa-fw"></i>Quản lí nội dung<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ action('Admin\SliderController@index') }}">Slider</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <div id="chat-home">
            <div class="row">
                <div class="col-md-12">
                    <div id="home-frame-chat">
                        <div class="panel panel-primary chat">
                            <div class="panel-heading">
                            <i class="fa fa-user" aria-hidden="true"></i> 
                            Manager
                            <span class="pull-right">
                                <a href="#" id="close-chat"><i class="fa fa-times" aria-hidden="true"></i></a>
                            </span>
                            </div>
                            @if (Auth::check())
                                <div class="box-chat">
                            
                                </div>
                                @else
                                <div class="box-chat1" style="height: 220px;">
                                    <h3><a href="">Bạn hãy đăng nhập chat với admin</a></h3>
                                </div>
                            @endif
                            <div class="panel-footer clearfix">
                                <div class="form-group">
                                    <div class="input-group">
                                        @if (Auth::check())
                                            <input type="text" class="form-control message-content" placeholder="Type your message">
                                            <input type="hidden" class="room-id" value="1">
                                            <input type="hidden" class="user-id" value="1">
                                                <div class="input-group-addon">
                                                <a href="#" id="interview-message-send" data-url="http://localhost/Project-Framgia/frsm/public/message">
                                                    Send
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="chat-home">
            <div class="row">
                <div class="col-md-12">
                    <div id="home-frame-chat">
                        <div class="panel panel-primary chat">
                            <div class="panel-heading">
                            <i class="fa fa-user" aria-hidden="true"></i> 
                            Manager
                            <span class="pull-right">
                                <a href="#" id="close-chat"><i class="fa fa-times" aria-hidden="true"></i></a>
                            </span>
                            </div>
                            <div class="box-chat">
                            
                            </div>
                            <div class="panel-footer clearfix">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control message-content" placeholder="Type your message">
                                        <input type="hidden" class="room-id" value="1">
                                        <input type="hidden" class="user-id" value="1">
                                            <div class="input-group-addon">
                                            <a href="#" id="message-send" data-url="{{ action('ChatController@store') }}"" data-room="{{ Auth::id() }}">
                                                Send
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="msg-off">
                        <h3>
                            <a href="#"><i class="fa fa-weixin" aria-hidden="true"></i> Click để chat</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    <!-- /#wrapper -->
    <script src="{{ asset('js/app-admin.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ asset('bower_components/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
</body>
@stack('script')
<script>
    $(document).ready(function() {
        $('.alert').delay(6000).slideUp();
        $('.dataTables_length').hide();
        $('.dropdown-toggle').click(function() {
      
            $(this).parent().find('ul.dropdown-menu').toggle();
        });
        $('.dropdown-menu').hide();
    });
</script>
</html>

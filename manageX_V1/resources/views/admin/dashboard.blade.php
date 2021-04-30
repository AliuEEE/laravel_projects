@extends('layouts.adminNav')

@section('content')

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="./"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Options</li>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Management</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="http://127.0.0.1:8000/createOppurtunityForm">Add New Oppurtunity</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="http://127.0.0.1:8000/editAllOppurtunity">Edit Oppurtunity</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Informatiion</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="http://127.0.0.1:8000/completedOppurtunity">Completed</a></li>
                            <li><i class="fa fa-table"></i><a href="http://127.0.0.1:8000/quoteOppurtunity">Quotes</a></li>
                            <li><i class="fa fa-table"></i><a href="http://127.0.0.1:8000/biddingOppurtunity">Bids</a></li>
                            <li><i class="fa fa-table"></i><a href="http://127.0.0.1:8000/deployedOppurtunity">Deployed</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>About</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">System Info</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
</aside>
<!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./">Project X</a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->



        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row container-fluid">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">5</span></div>
                                            <div class="stat-heading">Total</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">1</span></div>
                                            <div class="stat-heading">Completed</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">5</span></div>
                                            <div class="stat-heading">In Progress</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Widgets -->

                <div class="clearfix"></div>
                <!-- Tasks -->
                <div class="tasks container-fluid">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Oppurtunity </h4>
                                </div>
                                <div class="card-body container">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Customer</th>
                                                    <th scope="col">Service</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Partner</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="name">CBN</td>
                                                    <td class="name">bespoke</td>
                                                    <td class="name">Do a Sophos Demo</td>
                                                    <td class="name">5 Week(s)</td>
                                                    <td class="name">Mart-Networks</td>
                                                    <td>
                                                        <span class="badge badge-complete" style="background: orange;">quote</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-complete">
                                                    <a style="color: white;" href="http://127.0.0.1:8000/editOppurtunityForm/2">Edit</a>
                                                </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="name">VON</td>
                                                    <td class="name">bespoke</td>
                                                    <td class="name">Host for users to test and give feedback</td>
                                                    <td class="name">4 Week(s)</td>
                                                    <td class="name">TMB</td>
                                                    <td>
                                                        <span class="badge badge-complete" style="background: red;">bidding</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-complete">
                                                    <a style="color: white;" href="http://127.0.0.1:8000/editOppurtunityForm/3">Edit</a>
                                                </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="name">VON</td>
                                                    <td class="name">bespoke</td>
                                                    <td class="name">Carrying out Unit tests</td>
                                                    <td class="name">6 Week(s)</td>
                                                    <td class="name">TMB</td>
                                                    <td>
                                                        <span class="badge badge-complete" style="background: navy;">deployment</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-complete">
                                                    <a style="color: white;" href="http://127.0.0.1:8000/editOppurtunityForm/4">Edit</a>
                                                </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="name">CBN</td>
                                                    <td class="name">notap</td>
                                                    <td class="name">Process a payment certification</td>
                                                    <td class="name">2 Week(s)</td>
                                                    <td class="name">BC Tech</td>
                                                    <td>
                                                        <span class="badge badge-complete">complete</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-complete">
                                                    <a style="color: white;" href="http://127.0.0.1:8000/editOppurtunityForm/5">Edit</a>
                                                </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="name">CBN</td>
                                                    <td class="name">notap</td>
                                                    <td class="name">Process a payment certification</td>
                                                    <td class="name">2 Week(s)</td>
                                                    <td class="name">TMB</td>
                                                    <td>
                                                        <span class="badge badge-complete" style="background: red;">bidding</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-complete">
                                                    <a style="color: white;" href="http://127.0.0.1:8000/editOppurtunityForm/6">Edit</a>
                                                </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table ">
                                            <thead>

                                            </thead>
                                        </table>
                                    </div>
                                    <!-- /.table-stats -->
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-lg-8 -->

                    </div>
                </div>
                <!-- /.col-md-4 -->
            </div>
        </div>
        <!-- /.orders -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>



    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Ela Admin
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Colorlib</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- /.site-footer -->
@endsection
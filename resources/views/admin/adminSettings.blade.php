@extends('layouts.adminLayout')

@section('adminContent')

    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-9 main-chart">

                    <!-- THis is the settings page title -->
                    <div>
                        <div>
                            <h1>Settings</h1>
                            <small>Edit your account and profile here!</small>
                        </div>
                    </div>
                    <!-- /page title ends here -->


                    <div>
                        <form class="form-horizontal" role="form">
                            <h2 class="mgbt-xs-20"> Profile: <span class="font-semibold">$adminUsername</span> </h2>
                            <br>
                            <div class="row">
                                <div class="col-sm-3 mgbt-xs-20">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div style="margin-top:20px"> <img alt="profile image" src="assets/img/default.jpg" class="img img-responsive"> </div>
                                            <div class="form-img-action text-center mgbt-xs-20"> <a class="btn vd_btn  vd_bg-blue" href="javascript:void(0);"><i class="fa fa-cloud-upload append-icon"></i> Upload New</a> </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <h3>Account Setting</h3>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="email">EMAIL:</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="username">USERNAME:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="username" placeholder="Enter Username">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="password">PASSWORD:</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="password" placeholder="password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="confirmPassword">CONFIRM PASSWORD:</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="confirmPassword" placeholder="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <hr width="70%" align="left" style="border-color:black; margin-top:50px">


                                        <h3 style="margin-top:50px">Profile Setting</h3>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="firstName">FIRST NAME:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="lastName">LAST NAME:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="lastName" placeholder="Enter LastName">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="details">DETAILS:</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="9" style="resize:none" id="details"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <hr width="70%" align="left" style="border-color:black; margin-top:50px">
                                        <div class="form-group" style="float:right; padding-right:70px">
                                            <button class="btn btn-success btn-lg">The Fucking Button Goes Here</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>


                </div>

@endsection

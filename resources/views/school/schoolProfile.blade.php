@extends('layouts.schoolLayout')

@section('schoolContent')

    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-9 main-chart">

                    <!-- THis is the settings page title -->
                    <div>
                        <div>
                            <h1>Profile</h1>
                            <small>View your profile here!</small>
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
                                            <div style="text-align:center"> Level: Super Administrator </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div style="margin-top:40px; font-size:20px">
                                        Username: &username <br>
                                        Email: yep <br>
                                        About: <br>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>

@endsection

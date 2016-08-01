@extends('layouts.adminLayout')

@section('adminContent')

    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-9 main-chart">

                    <div class="row mtbox">
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="">

                            </div>

                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="badge bg-theme">+14</span>
                                <span class="fa fa-envelope-o"></span>

                            </div>
                            <p>14 New MESSAGE</p>


                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="badge bg-theme">+7</span>
                                <span class="fa fa-hdd-o"></span>

                            </div>
                            <p>7 CASES PENDING</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="badge bg-theme">+10</span>
                                <span class=" fa fa-bar-chart-o"></span>

                            </div>
                            <p>14 TASKS PENDING</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">

                        </div>

                    </div><!-- /row mt -->




                    <div class="col-md-12">



                        <div class="row mt">
                            <!-- SERVER STATUS PANELS -->

                            <div class="row">
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="grey-panel pn donut-chart">
                                        <div class="grey-header">
                                            <h5 style="color:black">INACTIVE SCHOOLS</h5>
                                        </div>
                                        <canvas id="serverstatus01" height="120" width="120" style="width: 120px; height: 120px;"></canvas>
                                        <script>
                                            var doughnutData = [
                                                {
                                                    value: 75,
                                                    color:"#FF6B6B"
                                                },
                                                {
                                                    value : 25,
                                                    color : "#fdfdfd"
                                                }
                                            ];
                                            var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                                        </script>
                                        <h5 style="color:black">3 SCHOOLS ARE CURRENTLY INACTIVE</h5>
                                        <div class="row">


                                        </div>
                                    </div><!-- --/grey-panel ---->
                                </div><!-- /col-md-4-->


                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="darkblue-panel pn">
                                        <div class="darkblue-header">
                                            <h5 style="color:black">SUBSCRIPTION PENDING</h5>
                                        </div>
                                        <canvas id="serverstatus02" height="120" width="120" style="width: 120px; height: 120px;"></canvas>
                                        <script>
                                            var doughnutData = [
                                                {
                                                    value: 60,
                                                    color:"#4DD0E1"
                                                },
                                                {
                                                    value : 40,
                                                    color : "#fdfdfd"
                                                }
                                            ];
                                            var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                                        </script>




                                        <footer>
                                            <div class="pull-left">

                                            </div>
                                            <div class="pull-right">

                                            </div>
                                        </footer>
                                        <h5 style="color:black">4 SUBSCRIPTIONS IN PROGRESS</h5>
                                    </div><!-- -- /darkblue panel ---->
                                </div><!-- /col-md-4 -->

                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="green-panel pn">
                                        <div class="green-header">
                                            <h5 style="color:black">ACTIVE SCHOOLS</h5>
                                        </div>
                                        <canvas id="serverstatus03" height="120" width="120" style="width: 120px; height: 120px;"></canvas>
                                        <script>
                                            var doughnutData = [
                                                {
                                                    value: 80,
                                                    color:"#BA68C8"
                                                },
                                                {
                                                    value : 20,
                                                    color : "#fffffd"
                                                }
                                            ];
                                            var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
                                        </script>
                                        <h5 style="color:black">8 SCHOOLS ARE CURRENTLY ACTIVE</h5>
                                    </div>
                                </div><!-- --/col-md-4 ---->
                            </div>
                        </div>

                    </div>

                </div>

@endsection

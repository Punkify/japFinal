@extends('layouts.schoolLayout')

@section('schoolContent')

    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-9 main-chart">
                    <article class="icon-box"><br><br><br><br>





                        <ul class="nav nav-tabs left-navi">



                            <li class="active"><a href="#lD" data-toggle="tab"> <span class="fa fa-user bg-aqua"></span> TASKS</a></li>
                        </ul>


                        <div class="tab-content">

                            <!-- The consultancy tab starts here -->


                            <!-- // The consultancy tab ends here -->

                            <!-- The student tab starts here -->
                            <article class="tab-pane active" id="lD">

                                <div class="two_third">

                                    <table class="table table-striped table-advance table-hover">


                                        <thead>
                                        <tr>
                                            <th><i class="fa fa-user bg-aqua"></i> STUDENT</th>
                                            <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span> SUBSCRIPTION LEFT</th>
                                            <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span> STATUS</th>


                                            <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span> ACTIVE/INACTIVE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#">ANMOL CHALISE</a></td>
                                            <td ><b>22 DAYS</b></td>
                                            <td><a href="index.html#">
                                                    <div class="task-info">


                                                    </div>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                            <div class="percent">80%</div>
                                                        </div>
                                                    </div>
                                                </a></td>
                                            <td>

                                                <button class="btn btn-success btn-xs" style="padding: 1px 5px;"><span class="label label-success">ACTIVE</span></button>
                                                <button class="btn btn-danger btn-xs" style="padding: 1px 5px;"><span class="label label-danger">INACTIVE</span></button>
                                                <button class="btn btn-warning btn-flat" style="padding: 1px 5px;"><span class="label label-warning">PENDING</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">RAVI KARKI </a></td>
                                            <td ><b>20 DAYS</b></td>
                                            <td><a href="index.html#">
                                                    <div class="task-info">


                                                    </div>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                            <div class="percent">80%</div>
                                                        </div>
                                                    </div>
                                                </a></td>
                                            <td>

                                                <button class="btn btn-success btn-xs" style="padding: 1px 5px;"><span class="label label-success">ACTIVE</span></button>
                                                <button class="btn btn-danger btn-xs" style="padding: 1px 5px;"><span class="label label-danger">INACTIVE</span></button>
                                                <button class="btn btn-warning btn-flat" style="padding: 1px 5px;"><span class="label label-warning">PENDING</span></button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><a href="#">DIPESH SHRESTHA</a></td>
                                            <td ><b>20 DAYS</b></td>
                                            <td><a href="index.html#">
                                                    <div class="task-info">


                                                    </div>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                            <div class="percent">80%</div>
                                                        </div>
                                                    </div>
                                                </a></td>

                                            <td>

                                                <button class="btn btn-success btn-xs" style="padding: 1px 5px;"><span class="label label-success">ACTIVE</span></button>
                                                <button class="btn btn-danger btn-xs" style="padding: 1px 5px;"><span class="label label-danger">INACTIVE</span></button>
                                                <button class="btn btn-warning btn-flat" style="padding: 1px 5px;"><span class="label label-warning">PENDING</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">ASHIM GURUNG</a></td>
                                            <td ><b>40 DAYS</b></td>
                                            <td><a href="index.html#">
                                                    <div class="task-info">


                                                    </div>
                                                    <div class="progress progress-striped">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                            <div class="percent">80%</div>
                                                        </div>
                                                    </div>
                                                </a></td>
                                            <td>

                                                <button class="btn btn-success btn-xs" style="padding: 1px 5px;"><span class="label label-success">ACTIVE</span></button>
                                                <button class="btn btn-danger btn-xs" style="padding: 1px 5px;"><span class="label label-danger">INACTIVE</span></button>
                                                <button class="btn btn-warning btn-flat" style="padding: 1px 5px;"><span class="label label-warning">PENDING</span></button>
                                            </td>
                                        </tr>

                                        </tbody>

                                    </table>

                                    <!-- This is the add school form -->


                                    <!-- // The add school form ends here -->

                                </div>

                            </article>
                            <!-- // The student tab ends here -->
                            <section class="wrapper site-min-height">



                            </section>

                        </div>
                </div>


 @endsection
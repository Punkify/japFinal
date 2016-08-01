@extends('layouts.adminLayout')

@section('adminContent')

    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-9 main-chart">
                    <article class="icon-box"><br><br><br><br>





                        <ul class="nav nav-tabs left-navi">
                            <li class="active">
                                <a href="#lB" data-toggle="tab"><span class="fa fa-fw fa-bank"></span> SCHOOL</a></li>

                            <li><a href="#lC" data-toggle="tab"> <span class="glyphicon glyphicon-th-large"></span>CONSULTENCY</a></li>

                            <li><a href="#lD" data-toggle="tab"> <span class="fa fa-user bg-aqua"></span> STUDENT</a></li>
                        </ul>


                        <div class="tab-content">
                            <article class="tab-pane active" id="lB">

                                <div class="two_third">

                                    <table class="table table-striped table-advance table-hover">


                                        <thead>
                                        <tr>
                                            <th><i class="fa fa-user bg-aqua"></i> SCHOOL</th>
                                            <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span> SUBSCRIPTION LEFT</th>
                                            <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span> STATUS</th>


                                            <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span> ACTIVE/INACTIVE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#">SETO ACADEMY</a></td>
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
                                            <td><a href="#">MOTIF ACADEMY</a></td>
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
                                            <td><a href="#">NEW LANGUAGE ACADEMY</a></td>
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
                                            <td><a href="#">OUR ACADEMY</a></td>
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

                                    <button type="button" class="btn btn-info btn-circle btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span></button>

                                    <!-- Modal -->
                                    <div id="myModal" class="modal" role="dialog">
                                        <div class="modal-dialog modal-lg">

                                            <!-- Modal content-->
                                            <div class="modal-content" style="border-radius:20px">
                                                <div class="modal-header" style="background-color:#01579b; border-top-left-radius:18px;  border-top-right-radius:18px">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">ADD SCHOOL</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2" for="schoolName">
                                                                <i class="fa fa-graduation-cap fa-fw" aria-hidden="true"></i>
                                                                SCHOOL NAME:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="schoolName" placeholder="Enter school name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2" for="address">
                                                                <i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>
                                                                ADDRESS:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="address" placeholder="Enter address">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2" for="username">
                                                                <i class="fa fa-user fa-fw" aria-hidden="true"></i>
                                                                USERNAME:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2" for="email">
                                                                <i class="fa fa-envelope fa-fw" aria-hidden="true"></i>
                                                                EMAIL:</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2" for="subscription">
                                                                <i class="fa fa-calendar fa-fw" aria-hidden="true"></i>
                                                                SUBSCRIPTION:</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" id="subscription" placeholder="Select subscription duration">
                                                                    <option value="" disabled selected>Chose the subscription duration</option>
                                                                    <option>1 Month</option>
                                                                    <option>3 Months</option>
                                                                    <option>6 Months</option>
                                                                    <option>1 Year</option>
                                                                    <option>2 Years</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2" for="details">
                                                                <i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>
                                                                DETAILS:</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" rows="9" style="resize:none" id="details"></textarea>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" name="addSchool" id="addSchool">Add School</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- // The add school form ends here -->

                                </div>

                            </article>

                            <!-- The consultancy tab starts here -->

                            <article class="tab-pane" id="lC">

                                <div class="two_third">

                                    <table class="table table-striped table-advance table-hover">


                                        <thead>
                                        <tr>
                                            <th><i class="fa fa-user bg-aqua"></i> CONSULTENCY</th>
                                            <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span> SUBSCRIPTION LEFT</th>
                                            <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span> STATUS</th>


                                            <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span> ACTIVE/INACTIVE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="#">CONSULTENCY ABC</a></td>
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
                                            <td><a href="#">THIS CONSULTENCY</a></td>
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
                                            <td><a href="#">NEW LANGUAGE CONSULTENCY</a></td>
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
                                            <td><a href="#">OUR CONSULTENCY</a></td>
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

                                </div>

                            </article>
                            <!-- // The consultancy tab ends here -->

                            <!-- The student tab starts here -->
                            <article class="tab-pane" id="lD">

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

                                </div>

                            </article>
                            <!-- // The student tab ends here -->
                            <section class="wrapper site-min-height">



                            </section>
@endsection

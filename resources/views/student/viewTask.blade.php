@extends('layouts.studentLayout')

@section('studentContent')


    <section id="main-content" class="wrapper">

            <div class="row">
                <div class="col-lg-9 main-chart">
                    <article class="icon-box"><br><br><br><br>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Students name</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>


                                    <div class=" col-md-9 col-lg-9 ">
                                        <table class="table table-user-information">
                                            <tbody>
                                            <tr>
                                                <td><b>Task title:</b></td>
                                                <td>title name goes here</td>
                                            </tr>
                                            <tr>
                                                <td><b>Description:</b></td>
                                                <td>Description goes here Description goes here Description goes here Description goes here</td>
                                            </tr>
                                            <tr>
                                                <td><b>Deadlines:</b></td>
                                                <td>01/24/1988</td>
                                            </tr>

                                            <tr>
                                                <td><div class="fileUpload btn"><b>Task 1:</b></div></td>
                                                <td>File's Name <div class="fileUpload btn btn-primary">
                                                        <span>Upload files</span>
                                                        <input type="file" class="upload" />
                                                    </div>
                                                    <a href="edit.html" data-original-title="Edit files" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><div class="fileUpload btn "><b>Task 2:</b></div></td>
                                                <td>File's Name <div class="fileUpload btn btn-primary">
                                                        <span>Upload files</span>
                                                        <input type="file" class="upload" />
                                                    </div>
                                                    <a href="edit.html" data-original-title="Edit files" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><div class="fileUpload btn "><b>Task 3:</b></div></td>
                                                <td>File's Name <div class="fileUpload btn btn-primary">
                                                        <span>Upload files</span>
                                                        <input type="file" class="upload" />
                                                    </div>
                                                    <a href="edit.html" data-original-title="Edit files" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <textarea class="form-control" id="textarea" name="textarea" placeholder="Comments:"></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                            </div>

                        </div>
                </div>


            </div>




            </section>

            </div>
            </div>



@endsection

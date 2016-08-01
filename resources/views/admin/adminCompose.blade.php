@extends('layouts.adminLayout')

@section('adminContent')

    <section id="main-content">
        <section class="wrapper">
            <br>
            <div class="row">
                <div class="col-md-3">
                    <a href="messages.html" class="btn btn-primary btn-block margin-bottom">Back to inbox</a>
                    <div class="box box-solid" style="padding: 10px">
                        <div class="box-header with-border">
                            <h3 class="box-title">Folders</h3>

                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-primary pull-right">12</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                                <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a></li>
                                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                            </ul>
                        </div><!-- /.box-body -->
                    </div><!-- /. box -->

                </div><!-- /.col -->
                <div class="col-md-9">
                    <div class="box box-primary" style="padding: 10px">
                        <div class="box-header with-border">
                            <h3 class="box-title">Compose New Message</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                <input class="form-control" placeholder="To:">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Subject:">
                            </div>
                            <div class="form-group">
                                <ul class="wysihtml5-toolbar">

                                    <li>
                                        <div class="bootstrap-wysihtml5-insert-link-modal modal fade" data-wysihtml5-dialog="createLink">
                                            <div class="modal-dialog ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <a class="close" data-dismiss="modal">×</a>
                                                        <h3>Insert link</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control" data-wysihtml5-dialog-field="href">
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Open link in new window
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </li>

                                </ul><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="display: block; border-collapse: separate; border: 1px solid rgb(210, 214, 222); clear: none; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 6px 12px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: baseline; text-align: start; box-sizing: border-box; box-shadow: none; border-radius: 0px; width: 100%; height: 300px; background-color: rgb(255, 255, 255);"></iframe>
                            </div>
                            <div class="form-group">
                                <div class="btn btn-default btn-file">
                                    <i class="fa fa-paperclip"></i> Attachment
                                    <input type="file" name="attachment">
                                </div>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-right">
                                <button class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                            </div>
                            <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div>

        </section>
    </section>


@endsection

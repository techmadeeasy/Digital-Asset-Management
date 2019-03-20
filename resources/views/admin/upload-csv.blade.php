@extends('layouts.layout')

@section('content')
    <div class="content">

        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Edit Image</h3>

                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                </div>
            </div>
            <div class="block-content">
                <form method="post" class="form-group" action="/submit-csv" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="bjO02IhospSaQEMCkONV6wuEQgC4UOm8ijHzVDdJ">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img-fluid img-thumb" style="padding-left:30%" src="https://dkmzc8tghb19s.cloudfront.net/fit-in/150x150/uploads/2019-02-21/0jun052.jpg" alt="editon cover page">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="col-form-label">Agency</label><select class=" form-control" name="contrib">
                                        <option value=""> </option>
                                        <option value="1"> Aart Verrips</option>
                                        <option value=""> </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="col-form-label" for="val-email">Title</label>
                                    <input type="text" class="form-control" id="val-email" name="name" value="Arijiju" placeholder="Title..">
                                    <input type="hidden" class="form-control" id="13" name="id" value="13" placeholder="Your valid email..">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-12" for="example-file-input">Upload csv</label>
                                    <div class="col-12">
                                        <input type="file" id="example-file-input" name="csv-file">
                                    </div>
                            </div>
                            <div style="padding-left:40%">
                                <button type="submit" class="btn btn-primary" style="margin-top:10px;">Update</button>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row"> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-12">
                                    <!-- <label for="files">Tags</label> <select class="form-control" name="month">

                                            <option value="dsds">dsddd</option>

                                        </select>   -->

                                </div>
                            </div>

                        </div>
                        <!-- END Mega Form -->
                        <!-- END Page Content -->

                    </div></form>
                <style>
                    .content {
                        width:41%;
                    }
                    .text-capital{
                        text-transform:capitalize!important;
                    }
                </style>
                <!-- END Main Container -->
            </div></div></div>
@endsection
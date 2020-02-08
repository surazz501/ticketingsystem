@extends('layouts.main')
@section('content')
    <style>
        .chosen-container-single .chosen-search input[type="text"] {
            background: white url("{{asset('theme/css/chosen/chosen-sprite.png')}}") no-repeat 100% -20px;
            /*background: url("

        {{asset('theme/css/chosen/chosen-sprite.png')}}  ") no-repeat 100% -20px;
      */
        }

        .chosen-rtl .chosen-search input[type="text"] {
            background: white url("{{asset('theme/css/chosen/chosen-sprite.png')}}") no-repeat -30px -20px;
            /*   background: url("

        {{asset('theme/css/chosen/chosen-sprite.png')}}  ") no-repeat -30px -20px;
      */
        }
    </style>

    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form method="post" action="{{route('ticket.store')}}">
                        {{csrf_field()}}
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h4>Add new Ticket</h4>
                            {{--  <p>Bootstrap-select is a jQuery plugin that utilizes Bootstrap's dropdown.js to style and bring additional functionality to standard select elements.</p>
                        --}}  </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    {{--<h2>Choose Category</h2>--}}
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" name="category">
                                        <option>Choose Category</option>
                                        <optgroup label="Technical">
                                            <option>Bug Reports</option>
                                            <option>Feature Requests</option>

                                        </optgroup>
                                        <optgroup label="Camping">
                                            <option>Malias</option>
                                            <option>Kamines</option>
                                            <option>Austranas</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn">
                                    {{--<h2>Choose Priority</h2>--}}
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" name="priority">
                                        <option>Choose Priority</option>
                                        <option>Low</option>
                                        <option>Normal</option>
                                        <option>High</option>
                                        <option>Critical</option>

                                    </select>
                                </div>
                            </div>


                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        {{--<label>Subject</label>--}}
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        {{--<label>Subject</label>--}}
                                       {{-- <div class="html-editor"></div>--}}
                                        <textarea class="form-control" id="summary-ckeditor" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                       {{-- <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-example-int">
                                    <div class="form-group">
                                        <input type="file" name="attach file">
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        <div class="form-example-int mg-t-15">
                            <button type="submit" class="btn btn-success notika-btn-success waves-effect">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
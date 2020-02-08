@extends('layouts.main')
@section('content')
    <style>

    </style>
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Tickets Table</h2>
                            {{--  <p>Basic example without any additional modification classes</p>--}}
                        </div>
                        <div class="bsc-tbl">
                            <table class="table table-sc-ex table-striped table-hover {{--table-bordered--}}">
                                <thead class="thead-grey">
                                <tr>

                                    <th>Subject</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Assigned To</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td><a href="#2">
                                        <div class="">

                                            <div class="media-body">

                                                <h4 class="title ">
                                                    Upgrate my account
                                                    <span class="pull-right label label-danger">new</span>
                                                </h4>
                                               <a href="#1"> <span><i class="fa fa-user"> Suraz Bhattarai</i></span></a>
                                                <span><i class="fa fa-list-alt"> Technical help</i></span>
                                                <span class="pull-right">#1123123</span>
                                            </div>
                                        </div>
                                        </a>
                                    </td>
                                    <td>Normal</td>
                                    <td>new</td>
                                    <td>08/02/2020 6:00 PM</td>
                                    <td>Suraz Bhattarai</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
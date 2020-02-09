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
                            <table class="table table-sc-ex {{--table-striped--}} table-hover {{--table-bordered--}}" {{--style="    box-shadow: 0 2px 10px rgba(0,0,0,.2);"--}}>
                                <thead class="thead-green">
                                <tr>

                                    <th>Subject</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Assigned To</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                    <tr>
                                        <td><a href="{{route('ticket.show',$ticket->ticket_id)}}">
                                                <div class="">

                                                    <div class="media-body">

                                                        <h4 class="title ">
                                                            {!! $ticket->title !!}
                                                            <span class="pull-right label label-danger">{{$ticket->status}}</span>
                                                        </h4>
                                                        <a href="#1" style=" color: inherit !important;"> <span><i
                                                                        class="fa fa-user"> Suraz Bhattarai</i></span></a>
                                                        <span><i class="fa fa-list-alt"> Category section </i></span>
                                                        <span class="pull-right">#{!! $ticket->ticket_id !!}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>{{$ticket->priority}}</td>
                                        <td>{{$ticket->status}}</td>
                                        <td>{{$ticket->created_at}}</td>
                                        <td>Suraz Bhattarai</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
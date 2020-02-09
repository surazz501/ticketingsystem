`@extends('layouts.main')
@section('content')
    <style>

    </style>
    <div class="normal-table-area">
        <div class="container">
           {{-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Tickets Table</h2>
                            --}}{{--  <p>Basic example without any additional modification classes</p>--}}{{--
                        </div>
                        <div class="bsc-tbl">
                            {{$ticket->title}}-#{{$ticket->ticket_id}}
                        </div>
                    </div>
                </div>
            </div>--}}
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                    <div class="tpgp-helper mg-t-30" style="min-height:200px;">
                        <div class="tpgp-hp-hd typography-mgn">
                            <h2 class="mn-hd-s">  <a href="{{--{{route('ticket.create')}}--}}" class="btn btn-info btn-xs {{--btn-theme-color--}}" style="" ><i class="fa fa-check"></i> Close Ticket</a></h2>

                        </div>
                        <div class="tpgp-al-cl">
                            <h3>{{$ticket->title}}</h3>
                            <p>{!! $ticket->message !!}</p>
                        </div>
                    </div>

                    </div>
                    <div class="row">

                        <div class="tpgp-helper mg-t-30">
                            <div class="form-group todo-flex">
                                <div class="nk-int-st">
                                    <input type="text" class="form-control chat-input" placeholder="Reply">
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-md btn-primary btn-block notika-chat-btn waves-effect">Send</button>
                                </div>
                            </div>
                        <ul class="conversation-list">
                            <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="{{asset('theme/images/default-user.jpg')}}" alt="male" class="mCS_img_loaded">

                                </div>
                                <div class="conversation-text show-page-chat">
                                    <div class="ctext-wrap">
                                        <i>John Deo</i>
                                        <span class="pull-left">
                                            <p>
                                            Hello!
                                        </p>
                                        </span>
                                        <span class="pull-right" style="margin-top: 8px;"> `10:00 pm</span>
                                    </div>

                                </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="tpgp-helper mg-t-30">
                        <div class="tpgp-hp-hd typography-mgn">
                            <h4 class="mn-hd-s">Details</h4>
                        </div>
                        <div class="tpgp-al-cl">
                            <div class="row padding-15">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                Priority:
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                <b>{{$ticket->priority}}</b>
                            </div>
                            </div>
                            <div class="row padding-15">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                Category:
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                <b>category name</b>
                            </div>
                            </div>
                            <div class="row padding-15">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                From:
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                <b>surazz501@gmail.com</b>
                            </div>
                            </div>
                            <div class="row padding-15">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                Date:
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                <b>{{$ticket->created_at}}</b>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
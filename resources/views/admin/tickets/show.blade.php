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
                                <h2 class="mn-hd-s close-ticket-header">
                                    @if($ticket->status=="open")<a href="#"
                                                       class="btn btn-info btn-xs btn-close-ticket" style=""><i
                                                class="fa fa-check"></i> Close Ticket</a>
                                @else
                                        <a href="#"
                                           class="btn btn-info btn-xs btn-close-ticket" style=""><i
                                                    class="fa fa-check"></i> Closed</a>
                                @endif</h2>

                            </div>
                            <div class="tpgp-al-cl">
                                <h3>{{$ticket->title}}</h3>
                                <p>{!! $ticket->message !!}</p>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="tpgp-helper mg-t-30">
                            <form action="{{route('store.comment')}}" id="comment-form">
                                {{--{{csrf_field()}}--}}
                                <div class="form-group todo-flex">
                                    <div class="nk-int-st">
                                        <input type="hidden" name="ticket_id" value="{{$ticket->ticket_id}}">
                                        <input type="text" class="form-control chat-input" name="comment"
                                               placeholder="Reply">
                                    </div>
                                    <div class="">
                                        <button type="submit"
                                                class="btn btn-md btn-primary btn-block notika-chat-btn waves-effect send-reply">
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div id="comment-section" style="overflow: auto;max-height: 350px;">

                            </div>
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
                                    <b>{{$ticket->category->name}}</b>
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
@section('push-script')
    <script>
        var ticket_id = "{{$ticket->ticket_id}}";
        loadComment(ticket_id);

        $(document).on("submit", "#comment-form", function (e) {

            var formData = $(this).serialize();

            var url = $(this).attr('action');

            // process the form
            var token = '<?php echo e(csrf_token()); ?>';
            $.ajax({
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',
                url: url,
                data: formData,
                dataType: 'json',
                encode: true
            })
                .done(function (result) {

                    loadComment(result.ticket_id);
                });
            e.preventDefault();
        });

        function loadComment(ticket_id) {
            $.ajax({
                url: "{{route('fetch.comment')}}",
                method: 'GET',
                data: {Id: ticket_id},
                dataType: 'json',
                success: function (data) {

                    $('#comment-section').html(data.comment);
                }
            });
        }

        $(document).on('click','.btn-close-ticket',function(e){
           // $(document).on("submit", "#comment-form",

          /// var url='close/ticket';
           $.ajax({
               url:"{{route('ticket.close')}}",
               method:'GET',
              data:{ticket_id:ticket_id},
               dataType:'json',
               success:function(data){
                   $('.btn-close-ticket').html('<i class="fa fa-check"></i> Closed');
               }
           });
           e.preventDefault();
        });
    </script>
@endsection
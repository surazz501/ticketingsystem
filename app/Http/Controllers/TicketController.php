<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tickets = Ticket::orderBy('id', 'desc')->get();
        return view('admin.tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        return view('admin.tickets.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        request()->validate([
            'subject' => 'required',
            'category' => 'required',
            'priority' => 'required',
            'message' => 'required',

        ]);
        Ticket::create([
            'user_id' => Auth::user()->id,
            'category_id' => 1,
            'ticket_id' => strtoupper(str_random(10)),
            'title' => $request->subject,
            'priority' => $request->priority,
            'message' => $request->message,
            'status' => 'open',
        ]);
        /* $notification = array(
             'message' => 'Ticket has been created successfully!',
             'alert-type' => 'success'
         );*/
        return redirect()->route('ticket.index')/*->with($notification)*/ ;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ticket = Ticket::where('ticket_id', $id)->first();
        if ($ticket) {

            return view('admin.tickets.show', compact('ticket'));
        }
        abort(404, 'Not found');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fetchComments(Request $request)
    {
        if(request()->ajax()){
            $ticket_id = $request->get('Id');

            $comments_all = Comment::where('ticket_id', $ticket_id)->orderBy('id', 'desc')->get();
          //  dd($comments_all);
            $comment='';
            foreach($comments_all as $comments){
                $comment .='<ul class="conversation-list">
                            <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="'.asset('\theme/images/default-user.jpg').'" alt="male" class="mCS_img_loaded">

                                </div>
                                <div class="conversation-text show-page-chat">
                                    <div class="ctext-wrap">
                                        <i>John Deo</i>
                                        <span class="pull-left">
                                            <p>
                                           '.$comments->comment.'
                                        </p>
                                        </span>
                                        <span class="pull-right" style="margin-top: 8px;"> '.$comments->created_at.'</span>
                                    </div>

                                </div>
                            </li>
                        </ul>';

            }
          //  dd($comment);
            return json_encode(array('comment' => $comment));

        }
        }

    public function storeComment(Request $request)
    {

        if (request()->ajax()) {

            Comment::create([
                'ticket_id' => $request['ticket_id'],
                'user_id' => Auth::user()->id,
                'comment' => $request['comment']
            ]);
            return ['success'=>'1','ticket_id'=>$request['ticket_id']];
        }
    }
}

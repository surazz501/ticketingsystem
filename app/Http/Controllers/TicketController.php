<?php

namespace App\Http\Controllers;

use App\Category;
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
        return view('admin.tickets.create',compact('categories'));
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
        return redirect()->route('ticket.index');
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
}

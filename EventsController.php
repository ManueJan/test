<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

// Import class 
use \App\Event;
use \App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // If you only want to visualise projects for a given user use $events = auth()->user()->events;
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $event = new Event();

        // $event->event_name = request('event_name');
        // $event->location = request('location');
        // $event->remarks = request('remarks');

        // $event->save();

        // Validate fields
        $this->validate($request, [
            'applicant_name'        => 'required|min:3',
            'applicant_mail'        => 'required|email', 
            'contact_name'          => 'required|min:3',
            'contact_email'         => 'required|email', 
            'contact_telefone'      => 'regex:/[0-9]{9,11}/',
            'contact_gsm'           => 'regex:/[0-9]{9,11}/',
            'intern_extern'         => 'required',
            'institute'             => 'required|min:2',
            'event_name'            => 'required|min:3',
            'event_date_start'      => 'required|date|after:tomorrow',
            'event_date_end'        => 'required|date|after_or_equal:event_date_start',
            'location'              => 'required|min:3',
            'participants'          => 'required',
        ]);

        Event::create([
            'applicant_name'        => request('applicant_name'),
            'applicant_mail'        => request('applicant_mail'),
            'contact_name'          => request('contact_name'),
            'contact_email'         => request('contact_email'),
            'contact_telefone'      => request('contact_telefone'),
            'contact_gsm'           => request('contact_gsm'),
            'intern_extern'         => request('intern_extern'),
            'institute'             => request('institute'),
            'event_name'            => request('event_name'),
            'event_date_start'      => request('event_date_start'),
            'event_date_end'        => request('event_date_end'),
            'timing'                => request('timing'),
            'location'              => request('location'),
            'participants'          => request('participants'),
            'catering'              => request('catering'),
            'catering_name'         => request('catering_name'),
            'catering_type'         => request('catering_type'),
            'remarks'               => request('remarks'),
            'status'                => Event::STATUS_NEW

        ]);


        return redirect('/events');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $Event)
    {
        //

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
        // $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Event $event)
    {
        $event->update(request(['applicant_name','applicant_mail','contact_name','contact_email','contact_telefone','contact_gsm','intern_extern','institute','event_name','event_date_start','event_date_end','timing','location','status','participants','catering','catering_name','catering_type','remarks'
        ]));
        
        return redirect('/events');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
       $event->delete();

        return redirect('/events');
    // dd('hello');
    }
}

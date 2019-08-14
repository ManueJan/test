@extends('layout')

@section('content')

<div class="card">
<h1 class="card-header text-center">Events</h1>

<table class="table table-hover">
    <thead>
        <tr>
        <!-- Status colour based on status -->
            <th>Status</th>
            <th>Applicant</th>
            <th>Contact</th>
            <th>Contact Email</th>
            <th>Institute</th>
            <th>Event</th>
            <th>Start</th>
            <th>End</th>
        </tr>
    </thead>
    @foreach ($events as $event)
    <tbody>
        <tr>
            <td>{{$event->status}}</td>
            <td>{{$event->applicant_name}}</td>
            <td>{{$event->contact_name}}</td>
            <td>{{$event->contact_email}}</td>
            <td>{{$event->institute}}</td>
            <td>{{$event->event_name}}</td>
            <td>{{$event->event_date_start}}</td>
            <td>{{$event->event_date_end}}</td>
            <td><a href="/events/{{$event->id}}/edit" class="btn btn-secondary btn-sm" role="button">Event Details</a></td>
        </tr>
    </tbody>
    @endforeach
</table>
 
    <!-- <div class="card-footer">
        
    </div> -->
</div>

@endsection
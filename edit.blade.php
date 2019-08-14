@extends('layout')

@section('content')

<div class="container col-sm-12">
    @include('error')
<form method="POST" action="/events/{{ $event->id }}" >
    @csrf
    @method('PATCH')

    <div class="card">
        <h1 class="card-header text-center">{{$event->event_name}}</h1>
        <!-- Start contact info -->
        <div class="card-body">
            <h3 class="card-title">Contact info</h3>

            <!-- Start input fields Contact info -->
            <div class="card-text">  
                <!-- Start row -->
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="applicant_name">Applicant Name</label>
                            </div> 
                        </div>
                    </div> 
                    <div class="col-4"> 
                        <div class="d-flex">                       
                            <div class="flex-fill p-2">
                                <input type="text" class="form-control input-text" placeholder="Applicant"
                                        name="applicant_name" value="{{$event->applicant_name}}">
                            </div>
                        </div> 
                    </div>
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="applicant_mail">Applicant Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">   
                            <div class="flex-fill p-2">
                                <input type="email" class="form-control input-text" placeholder="Applicant email"
                                        name="applicant_mail" value="{{$event->applicant_mail}}">
                            </div>
                        </div> 
                    </div>     
                </div> <!-- End row -->
                <!-- Start row -->
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="contact_name">Name</label>
                            </div> 
                        </div>
                    </div> 
                    <div class="col-4"> 
                        <div class="d-flex">                       
                            <div class="flex-fill p-2">
                                <input type="text" class="form-control input-text" placeholder="Contact person for event"
                                        name="contact_name" value="{{$event->contact_name}}">
                            </div>
                        </div> 
                    </div>
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="contact_email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">   
                            <div class="flex-fill p-2">
                                <input type="email" class="form-control input-text" placeholder="Contact email"
                                        name="contact_email" value="{{$event->contact_email}}">
                            </div>
                        </div> 
                    </div>     
                </div> <!-- End row -->
                <!-- Second row -->
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="contact_telefone">Telephone</label>
                            </div> 
                        </div>
                    </div> 
                    <div class="col-4"> 
                        <div class="d-flex">                           
                            <div class="flex-fill p-2">
                                <input type="tel" class="form-control input-text" placeholder="01 111 1111"
                                        name="contact_telefone" value="{{$event->contact_telefone}}"
                                        pattern="[0-9]{9}">
                            </div>
                        </div> 
                    </div>
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="contact_gsm">GSM</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">   
                            <div class="flex-fill p-2">
                                <input type="tel" class="form-control input-text" placeholder="01 111 1111"
                                        name="contact_gsm" value="{{$event->contact_gsm}}"
                                        pattern="[0-9]{9}">
                            </div>
                        </div> 
                    </div>
                </div><!-- End row -->   
                <!-- Third row -->
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="intern_extern">Intern </label>
                            </div> 
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">                    
                            <div class="flex-fill p-2">
                                <select name="intern_extern" class="form-control">
                                    <option value="" ></option>
                                    <option {{old('intern_extern',$event->intern_extern)=="Yes"? 'selected':''}}  value="Yes">Yes</option>
                                    <option {{old('intern_extern',$event->intern_extern)=="No"? 'selected':''}}  value="No">No</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <!-- TO DO: if intern is checked dropdown, if extern just input field insitute -->
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="institute">Institute</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">   
                            <div class="flex-fill p-2">
                                <input type="text" class="form-control input-text" placeholder="Institute"
                                        name="institute" value="{{$event->institute}}">
                            </div>
                        </div> 
                    </div>     
                </div> <!-- End row -->                   
            </div> <!-- End text -->
        </div>  <!-- End body -->
    </div> <!-- End card -->

    <!-- Event -->
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Event</h3>
            <div class="card-text">  
                 <!-- Start input fields Event info -->
            <div class="card-text">  
                <!-- start row -->
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="event_name">Name</label>
                            </div> 
                        </div>
                    </div> 
                    <div class="col-4"> 
                        <div class="d-flex">                       
                            <div class="flex-fill p-2">
                                <input type="text" class="form-control input-text" placeholder="Event Name"
                                        name="event_name" value="{{$event->event_name}}">
                            </div>
                        </div> 
                    </div>
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="location">Location</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">   
                            <div class="flex-fill p-2">
                                <input type="text" class="form-control input-text" placeholder="Event location"
                                        name="location" value="{{$event->location}}">
                            </div>
                        </div> 
                    </div>     
                </div> <!-- End row -->
                <!-- Second row -->
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="event_date_start">Start</label>
                            </div> 
                        </div>
                    </div> 
                    <!-- TO DO <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input"> -->
                    <div class="col-4"> 
                        <div class="d-flex">                           
                            <div class="flex-fill p-2">
                                <input class="form-control" type="date" value="{{$event->event_date_start}}" name="event_date_start">
                            </div>
                        </div> 
                    </div>
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="event_date_end">End</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">   
                        <div class="flex-fill p-2">
                                <input class="form-control" type="date" value="{{$event->event_date_end}}" name="event_date_end">
                            </div>
                        </div> 
                    </div>
                </div><!-- End row -->   
                <!-- start row -->
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="participants">Participants </label>
                            </div> 
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">                    
                            <div class="flex-fill p-2">
                                <input class="form-control" type="number" value="{{$event->participants}}" name="participants">
                            </div>
                        </div> 
                    </div>
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="catering">Catering</label>
                            </div> 
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">                    
                            <div class="flex-fill p-2">
                                <select name="catering" class="form-control">
                                    <option value="" ></option>
                                    <option {{old('catering',$event->catering)=="Yes"? 'selected':''}}  value="Yes">Yes</option>
                                    <option {{old('catering',$event->catering)=="No"? 'selected':''}}  value="No">No</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <!-- TO DO: if intern is checked dropdown, if extern just input field insitute -->
                </div> <!-- End row --> 
                <!-- Start row -->
                <!-- TO DO: Add javascript when catering is yes the catering name, and type should appear -->
                @if( $event->catering=="Yes" )
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="catering_name">Catering Name</label>
                            </div> 
                        </div>
                    </div> 
                    <div class="col-4"> 
                        <div class="d-flex">                       
                            <div class="flex-fill p-2">
                                <input type="text" class="form-control input-text" placeholder="Catering Name"
                                        name="catering_name" value="{{$event->catering_name}}">
                            </div>
                        </div> 
                    </div>
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="catering_type">Catering type</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">   
                            <div class="flex-fill p-2">
                                <input type="text" class="form-control input-text" placeholder="Catering type"
                                        name="catering_type" value="{{$event->catering_type}}">
                            </div>
                        </div> 
                    </div>     
                </div> <!-- End row -->
                @endif
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="p-2" for="remarks">Remarks</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-10"> 
                        <div class="d-flex">                       
                            <div class="flex-fill p-2">
                                <textarea class="form-control" name="remarks" placeholder="Additional question?" rows="3" >{{$event->remarks}}</textarea>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> <!-- End text -->
        </div>  <!-- End body -->
    </div> <!-- End card -->
    <!-- Submit field -->
    <div class="row">
        <div class="col-4 offset-1">
            <button type="submit" class="btn btn-block btn-primary">Update Event</button>
        </div>
        <div class="col-4 offset-2">
            <button type="button" class="btn btn-block btn-danger" 
                    onclick="event.preventDefault(); 
                    document.getElementById('delete-task-form').submit();">Delete
            </button>
        </div>
    </div>
</form>
<form action="/events/{{$event->id}}" id="delete-task-form" method="post">
    @csrf
    @method('DELETE')
</form>

</div> <!-- End container -->

@endsection

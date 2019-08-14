@extends('layout')

@section('content')
<div class="container col-sm-12">
<style>
.hide{
 display:none;
}
.show {
  display: block;
}
</style>

<script>
    function displayField() {
        if (document.getElementById("isYes").selected) {
            document.getElementById("ifyes").style.display = "block";
            document.getElementById("check").style.display = "block";
            document.getElementById("ifno").style.display = "none";
        } else if (document.getElementById("isNo").selected) {
            document.getElementById("ifno").style.display = "block";
            document.getElementById("check").style.display = "block";
            document.getElementById("ifyes").style.display = "none";
        } else {
            document.getElementById("ifno").style.display = "none";
            document.getElementById("ifyes").style.display = "none";
            document.getElementById("check").style.display = "none";
        }
    }

    //We are going to listen for any changes of the select field
    $( "#select-condition" ).change(function() {
    if(this.value == 'yes'){
        $('#label').removeClass( "hide" );
        console.log('test');

    }else if(this.value == 'No'){
        $('#label').addClass( "hide" );
        alert('You click the button');

    }
    else{
        $('#label').removeClass( "show" ).addClass("hide");
        alert('You click the button');

    }
    });
</script>




<form action="/events" method="POST">
@csrf

@include('error')
<!-- TO DO: Telephone patterns  -->
echo "<script>console.log('Debug Objects: ' );</script>";
<div class="card">
        <h1 class="card-header text-center">Create New Event</h1>

        <!-- Start contact info -->
        <div class="card-body">
            <h3 class="card-title">Contact info</h3>
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
                                <input type="text" 
                                        class="form-control input-text"
                                        placeholder="Applicant"
                                        name="applicant_name"
                                        value="{{old('applicant_name')}}"
                                        required
                                >
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
                                <input type="email" 
                                        class="form-control input-text"
                                        placeholder="Applicant email" 
                                        name="applicant_mail"
                                        value="{{old('applicant_mail')}}"
                                        required
                                >
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
                                <input type="text" 
                                        class="form-control input-text"
                                        placeholder="Contact person for event"
                                        name="contact_name" 
                                        value="{{old('applicant_mail')}}"
                                        required
                                >
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
                                <input type="email" 
                                        class="form-control input-text"
                                        placeholder="Contact email"
                                        name="contact_email" 
                                        value="{{old('applicant_mail')}}"
                                        required
                                >
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
                                <input type="tel" 
                                        class="form-control input-text"
                                        placeholder="123123123"
                                        name="contact_telefone" 
                                        pattern="[0-9]{9,11}"
                                >
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
                                <input type="tel" 
                                        class="form-control input-text" 
                                        placeholder="123123123"
                                        name="contact_gsm" 
                                        value="{{old('contact_gsm')}}"
                                        pattern="[0-9]{9,11}" 
                                >
                            </div>
                        </div> 
                    </div>
                </div><!-- End row -->   
                <!-- Start row -->
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
                                <select name="intern_extern" class="form-control" onchange="displayField()" required>
                                    <option>{{old('intern_extern')}}</option>
                                    <option id="isYes">Yes</option>
                                    <option id="isNo">No</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <!-- TO DO: if intern is checked dropdown, if extern just input field insitute -->
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1" >
                                <label id="check" style="display: none;" class="p-2" for="institute">Institute</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">   
                            <div class="flex-fill p-2">

                                <select name="institute" class="form-control" id="ifyes" style="display: none;" required>
                                    <option>{{old('institute')}}</option>
                                        <option>IRC</option>
                                        <option>PSB</option>
                                        <option>CMB</option>
                                        <option>VIB HQ</option>
                                        <option>VIB Core facility</option>
                                    </select>
                        
                                <input  style="display: none;"
                                        id="ifno"
                                        type="text" 
                                        class="form-control input-text" 
                                        placeholder="Institute"
                                        name="institute" 
                                        value="{{old('institute')}}"
                                        required
                                >
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
                                <input type="text" 
                                        class="form-control input-text" 
                                        placeholder="Event Name"
                                        name="event_name" 
                                        value="{{old('event_name')}}"
                                        required
                                >
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
                                <input type="text" 
                                        class="form-control input-text" 
                                        placeholder="Event location"
                                        name="location"
                                        value="{{old('location')}}"
                                        required
                                >
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
                                <input class="form-control" 
                                    type="date" 
                                    name="event_date_start"
                                    value="{{old('event_date_start')}}"
                                    required
                                >
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
                                <input class="form-control" 
                                        type="date" 
                                        name="event_date_end"
                                        value="{{old('event_date_end')}}"
                                        required
                                >
                            </div>
                        </div> 
                    </div>
                </div><!-- End row -->   
                <!-- start row -->
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                            <!-- TO DO: optin 0-50, 50-100 >100 -->
                                <label class="p-2" for="participants">Participants </label>
                            </div> 
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">                    
                            <div class="flex-fill p-2">
                                <input class="form-control" 
                                    type="number" 
                                    name="participants"
                                    value="{{old('participants')}}"
                                    required
                                >
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
                            <select name="catering" class="form-control" id="select-condition" required>
                                    <option>{{old('catering')}}</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <!-- TO DO: if intern is checked dropdown, if extern just input field insitute -->
                </div> <!-- End row --> 
                <!-- Start row -->
                <!-- TO DO: Add javascript when catering is yes the catering name, and type should appear -->
                <div class="row">
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                                <label class="hide p-2" for="catering_name" id="label" >Catering Name</label>
                            </div> 
                        </div>
                    </div> 
                    <div class="col-4"> 
                        <div class="d-flex">                       
                            <div class="flex-fill p-2">
                                <input  id="label"
                                        type="text" 
                                        class="form-control input-text hide" 
                                        placeholder="Catering Name"
                                        name="catering_name" 
                                        value="{{old('catering_name')}}"
                                >
                            </div>
                        </div> 
                    </div>
                    <div class="col-2">
                        <div class="d-flex">
                            <div class="p-1">
                            <label class="hide p-2" for="catering_type" id="label" >Catering Type</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"> 
                        <div class="d-flex">   
                            <div class="flex-fill p-2">
                                <input  id="label"
                                        type="text" 
                                        class="form-control input-text hide" 
                                        placeholder="Catering type"
                                        name="catering_type" 
                                        value="{{old('catering_type')}}"
                                >
                            </div>
                        </div> 
                    </div>     
                </div> <!-- End row -->

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
                                <textarea class="form-control" name="remarks" placeholder="Additional question?" rows="3">{{old('remarks')}}</textarea>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> <!-- End text -->
        </div>  <!-- End body -->
    </div> <!-- End card -->
    <!-- Submit field -->
    <div class="row">
        <div class="col-4 offset-4">
            <button type="submit" class="btn btn-primary btn-block">New Event</button>
        </div>
    </div>
  
</form>
@endsection
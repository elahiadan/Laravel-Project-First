<!-- including master.balde.php file -->
@extends('admin/master')




@section('contact')

<div class="form-container" id="headingtext6">
        <h1 id="contactform">here! You can wish me too</h1>

        <form action="contactform" class="mainform filecontact" method="POST">
        @csrf
            <div class="form" >
                <div class="form-1">
                    Name :<input type="text" name="name" placeholder="" id="form-name" class="plc" >
                </div>
                <div class="form-1">
                    Massage : <textarea name="message" id="massage" class="plc" cols="30" rows="5" ></textarea>
                </div class="form-1">
                <input type="submit" value="Send" class="btn" id="btn">
                <div>

                </div>
            </div>
        </form>
        
    </div>
@endsection
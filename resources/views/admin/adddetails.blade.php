<!-- including master.balde.php file -->
@extends('admin/master')




@section('html')
<h1 style="text-align:center; margin-bottom:50px; margin-top:50px; color:red">Student Form</h1>



<div class="form-control1 container-form">
    <h2>Create Account</h2>
    <form action="subnewform" method="POST">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="">
        </div>
        <div class="form-group">
            Name<input type="text" name="name" id="plc1" placeholder="Please Enter Your Nmae" required>
        </div>
        <div class="form-group">
            Class<input type="text" name="class" placeholder="Please Enter Your Class" required>
        </div>
        <div class="form-group">
            Roll No.<input type="text" name="roll" placeholder="Please Enter Your Roll No." required>
        </div>
        <input type="submit" class="btn-form" value="Submit">
    </form>
</div>
@endsection



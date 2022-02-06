<!-- including master.balde.php file -->

@extends('admin/master')









@section('edit')





<h1 style="text-align:center; margin-bottom:50px; margin-top:50px; color:green">Edit Form</h1>



<div class="form-control1 container-form">

    <form action="{{route('update')}}" method="POST">

        @csrf

        <div class="form-group">

            <input type="hidden" name="id" value="{{$data->id}}">

        </div>

        <div class="form-group">

            Name<input type="text" name="name"  value="{{$data->sname}}">

        </div>

        <div class="form-group">

            Class<input type="text" name="class"  value="{{$data->sclass}}">

        </div>

        <div class="form-group">

            Roll No.<input type="text" name="roll"  value="{{$data->sroll}}">

        </div>

        <input type="submit" class="btn-form" value="Update">

    </form>

</div>





@endsection
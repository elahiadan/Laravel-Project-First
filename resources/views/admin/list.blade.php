<!-- including master.balde.php file -->
@extends('admin/master')
<link rel="stylesheet" href="css/font-awesome.css">


@section('list')



<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Class</th>
            <th>Roll No.</th>
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->sname}}</td>
            <td>{{$item->sclass}}</td>
            <td>{{$item->sroll}}</td>
            <td><a href="edit/{{$item->id}}">Edit</a></td>
            <td><a href="delete/{{$item->id}}"> <i class="fa-fa-trash"></i> Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection
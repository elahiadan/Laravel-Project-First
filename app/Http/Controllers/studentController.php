<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\User;


class studentController extends Controller
{


  // After Login with Admin User
    
    public function adddetails(){
   
    return view('admin.adddetails');
    
  }



  // Inserting data into database

      public function elahi(){

        $student = new customer;
  
        $student->sname=$_POST['name'];
        $student->sclass=$_POST['class'];
        $student->sroll=$_POST['roll'];
        $student->save();

        return redirect("list");

    }


  // Fetching data from database for Listing

    public function list(){

    $data = customer::all();
    return view('admin.list',["data"=>$data]);

    }


// Fetching data from database for Edit

    public function edit($id){
    
      $data = customer::find($id);
      return view('admin.edit',["data"=>$data]);

    }



    // Update Method

    public function update(Request $req){

        $student = customer::find($req->input('id'));
  
        $student->sname=$_POST['name'];
        $student->sclass=$_POST['class'];
        $student->sroll=$_POST['roll'];
        $student->save();
        return redirect('list');

    }


    // Delete Method

    public function delete($id){
      
      customer::find($id)->delete();
      return redirect('list');

    }


    

    
}
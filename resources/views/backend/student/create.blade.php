
@extends('layouts.backend_master')
@section('title','Dashboard')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Student Management</h1>
    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    Create Student
                </div>

                <div class="card-body">
                   <form action="{{route('backend.student.store')}}" method="post" enctype="multipart/form-data">
         @csrf
                       <div class="form-group">
                           <label for="name">Name:</label>
                           <input type="text" name="name" placeholder="Enter Name" class="form-control">
                          @error('name')
                           <span class="text-danger">{{$message}}</span>
                        @enderror

                       </div>
                       <div class="form-group">
                           <label for="email">Name:</label>
                           <input type="email" name="email" placeholder="Enter Email" class="form-control">
                           @error('email')
                           <span class="text-danger">{{$message}}</span>
                           @enderror

                       </div>
                       <div class="form-group">
                           <label for="roll">Roll No:</label>
                           <input type="number" name="roll_no" placeholder="Enter roll_no" class="form-control">
                           @error('roll_no')
                           <span class="text-danger">{{$message}}</span>
                           @enderror

                       </div>
                       <div class="form-group">
                           <label for="address">Address:</label>
                           <input type="text" name="address" placeholder="Enter Address" class="form-control">
                           @error('address')
                           <span class="text-danger">{{$message}}</span>
                           @enderror

                       </div>
                       <div class="form-group">
                           <label for="name">Temp Address:</label>
                           <input type="text" name="temp_address" placeholder="Enter Temp_address" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="name">Passout Status:</label>
                           <input type="radio" name="passout_key" value="1">Yes
                           <input type="radio" name="passout_key" value="0">No
                       </div>
                       <div class="form-group">
                       <button type="submit" name="login" class="btn btn-success">Save Student</button>
                       <button type="reset" name="login" class="btn btn-danger">Clare</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
@endsection

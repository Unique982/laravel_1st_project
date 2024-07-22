
@extends('layouts.backend_master')
@section('title','Create Setting')
@section('content')

    <div  class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                Create Setting
                </div>
                <div class="card-body">
                    This card uses Bootstrap's default styling with no utility classes added. Global
                    styles are the only things modifying the look and feel of this default card example.
                </div>
            </div>
        </div>
    </div>
    <!-- From -->
    <form>
        <div class="form-group">
            <label for=""> Website Logo</label>
            <input type="file" class="form-control" id="website_logo" aria-describedby="emailHelp" placeholder="Enter website logo">
        </div>
        <div class="form-group">
            <label for="websitename">WebSite Name</label>
            <input type="text" class="form-control" id="website_name" aria-describedby="emailHelp" placeholder="Enter website name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection


@extends('layouts.backend_master')
@section('title','show ')
@section('content')



        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Student View</h1>

            <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">View</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <td>{{$student->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$student->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$student->email}}</td>
                        </tr> <tr>
                            <th>Address</th>
                            <td>{{$student->address}}</td>
                        </tr> <tr>
                            <th>Temp Address</th>
                            <td>{{$student->temp_address}}</td>
                        </tr> <tr>
                            <th>Passout Status</th>
                            <td>@include('backend.student.check_passout_status',['passout_key'=>$student->passout_key])</td>
                        </tr>


</table>


                </div>
            </div>
        </div>


    <!-- /.container-fluid -->


    <!-- End of Main Content -->
@endsection

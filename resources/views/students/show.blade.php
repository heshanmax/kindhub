@extends('layouts.dashboard')
@section('content')

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Students</h3>

            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">

            <div class="col-1">

                <div class="" style="textalign: center; font-size: medium;">
                    <a href="{{route('students.index')}}" class="btn btn-circle alpaginate " style="align-content: center;" >ALL</a><br/>
                    <a href="{{route('students.show','numeric')}}" class="btn btn-circle alpaginate" style="align-content: center">#</a><br/>
                    @foreach(range('A', 'Z') as $char)
                        <a href="{{route('students.show',$char)}}" class="btn btn-circle alpaginate" style="align-content: center">{{$char}}</a><br/>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-block">
                        <table class="table color-table table-box">
                            <a href="{{route('students.create')}}" class="btn btn-danger btn-lg">Enter New Student</a>
                        </table>
                        <div class="table-responsive">
                            <table class="table color-table inverse-table">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>Joined Year</th>
                                    <th>Class Room</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$student->student_firstname}}</td>
                                        <td>{{$student->student_lastname}}</td>
                                        <td>{{$student->gender}}</td>
                                        <td>{{$student->joined_year}}</td>
                                        <td>{{$student->classroom->class_name}}</td>
                                        <td>
                                            <a href="{{route('students.edit',$student->id)}}" class="btn btn-outline-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->


        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

    </div>


@endsection
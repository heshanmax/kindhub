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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Create A New Student</h4>
                        <div class="">
                            {{--@include('includes.form_error')--}}
                            {!! Form::open(['method'=>'POST', 'action'=>'StudentsController@store']) !!}
                            {{csrf_field()}}


                            <div class="form-group {{ $errors->has('student_firstname') ? ' has-error' : '' }} ">
                                {!! Form::label('student_firstname','First Name: ') !!}
                                {!! Form::text('student_firstname',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group {{ $errors->has('student_lastname') ? ' has-error' : '' }} ">
                                {!! Form::label('student_lastname','Last Name: ') !!}
                                {!! Form::text('student_lastname',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }} ">
                                {!! Form::label('gender','Gender: ') !!}
                                {!! Form::select('gender',['M' => 'M', 'F' => 'F'],null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group {{ $errors->has('joined_year') ? ' has-error' : '' }} ">
                                {!! Form::label('joined_year','Joined year: ') !!}
                                {!! Form::number('joined_year',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group {{ $errors->has('classroom_id') ? ' has-error' : '' }} ">
                                {!! Form::label('classroom_id','Student Class: ') !!}
                                {!! Form::select('classroom_id',['Select Class','A', 'B', 'C'],null,['class'=>'form-control']) !!}
                            </div>



                            <div class="form-group">
                                {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
                            </div>

                            {!! Form::close() !!}



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
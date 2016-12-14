@extends('Admin.index')
@section('title')
    Add Student
@endsection
@section('style')


    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    <link href="../../../public/css/jquery-ui.css" rel="stylesheet">
    <link href="../../../public/css/jquery-ui.min.css" rel="stylesheet">
    <script src="../../../public/js/jquery-ui.js" type="text/javascript"></script>
    <script src="../../../public/js/jquery-ui.min.js" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
        $(function () {
            $("#datepicker").datepicker();
        });

//        var today = new Date();
//        var dd = today.getDate();
//        var mm = today.getMonth()+2;
//
//        var yyyy = today.getFullYear();
//        if(dd<10){
//            dd='0'+dd
//        }
//        if(mm<10){
//            mm='0'+mm
//        }
//        var today = dd+'/'+mm+'/'+yyyy;
//        window.onload = function() {
//
//            document.getElementById("date").innerHTML=today;
//        }

    </script>
@endsection


@section('content')
    @if(count($errors)>0)
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach

                </ul>

            </div>

        </div>
    @endif

    <form action="{{route('save_student')}}" method="POST">
        {{--{{ csrf_field() }}--}}

        {{--<div class="top-employeeform " style="background-color:#00838f  ; light-orange;">--}}
            {{--<p style="text-align:left; color:white; font-size: 40px;  vertical-align: auto; padding-left: 10px; margin:0;">--}}
                {{--Add Student </p>--}}
            {{--<p style="text-align:left; color:white; font-size: 28px;  vertical-align: auto; padding-left: 10px; margin:0;">--}}
                {{--Form</p>--}}
        {{--</div>--}}
        <div class="container " style="padding: 5px;">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                    <div class="row">

                        <div class="card-panel teal lighten-2">
                            <h6>Student Details</h6>
                        </div>

                        <div class="row">
                            <div class="input-field nom col m4 s12">
                                <input type="text" name="std_first_name" value="" id="std_first_name">
                                <label for="std_first_name">First Name</label>
                            </div>

                            <div class="input-field nom col m4 s12">
                                <input type="text" name="std_middle_name" value="" id="std_middle_name">
                                <label for="std_middle_name">Middle Name</label>
                            </div>

                            <div class="input-field nom col m4 s12">
                                <input type="text" name="std_last_name" value="" id="std_last_name">
                                <label for="std_last_name">Last Name</label>
                            </div>
                        </div>
                        {{--<div class="row">--}}
                            {{--<div class="input-field nom col m12 s12">--}}
                                {{--<input type="text" name="id_number" value="">--}}
                                {{--<label for="id_number">ID Number</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="row">
                            <div class="input-field nom col m6 s12">
                                <input type="text" name="address" value="" id="address">
                                <label for="address">Address</label>
                            </div>
                            <div class="input-field nom col m6 s12">
                                <input type="text" name="'dob" id="datepicker" >
                                <label for="dob">Date Of Birth</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field nom col m6 s12">
                                <select multiple name="modules">

                                    @foreach($courses as $course)
                                        <tr>
                                            <option value={{$course->id}}>{{$course->name}}</option>
                                        </tr>
                                    @endforeach

                                    {{--<option value="" disabled selected>Select Course</option>--}}
                                    {{--<option value="1">MC-5832</option>--}}
                                    {{--<option value="2">MC-5825</option>--}}
                                    {{--<option value="3">MC-8325</option>--}}
                                </select>
                            </div>
                            <div class="input-field nom col m6 s12">
                                <select name="gender">
                                    <option value="" disabled selected>Gender</option>
                                    <option value="1">Female</option>
                                    <option value="2">Male</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-panel teal lighten-2">
                            <h6>Family Details</h6>
                        </div>
                        <div class="input-field nom col m4 s12">
                            <input type="text" name="prnt_guardian_id" value=""/>
                            <label for="prnt_guardian_id">Parent Guardian ID</label>
                        </div>

                        <div class="input-field nom col m4 s12">
                            <input type="text" name="prnt_first_name" value="">
                            <label for="last_name">First Name</label>
                        </div>

                        <div class="input-field nom col m4 s12">
                            <input type="text" name="prnt_last_name" value="">
                            <label for="last_name">Last Name</label>
                        </div>
                        <div class="row">
                            <div class="input-field nom col m6 s12">
                                <select name="prnt_gender">
                                    <option value="" disabled selected>Gender</option>
                                    <option value="1">Female</option>
                                    <option value="2">Male</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-panel teal lighten-2">
                            <h6>Registration Details</h6>
                        </div>
                        <div class="input-field nom col m4 s12">
                            <input type="text" name="registration_fee" value="">
                            <label for="last_name">Registration Fee</label>
                        </div>
                        <div class="input-field nom col m4 s12">
                            <input type="text" name="date" id="datepicker" >
                            <label for="last_name">Date Registered</label>
                        </div>



                        <div class="col m5">
                            <p class="right-align">
                                {{--<button id="add-student-profile" class="btn btn-large waves-effect waves-light midddle"--}}
                                        {{--style="background-color:#00838f" type="submit" name="action" value="submit">Add Student Profile--}}
                                {{--</button>--}}

                                <button type="submit" class="btn btn-default" style="float:left;  color: #d9edf7; background-color: #2a88bd" value="submit">Save</button>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red" href="">
                <i class="extar-large material-icons">home</i>
            </a>
        </div>
        <input type="hidden" name="_token" value="{{Session::token()}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
@endsection
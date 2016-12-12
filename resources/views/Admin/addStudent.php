<!DOCTYPE html>

<html>
<head>

    <title>Add Student</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+2;

        var yyyy = today.getFullYear();
        if(dd<10){
            dd='0'+dd
        }
        if(mm<10){
            mm='0'+mm
        }
        var today = dd+'/'+mm+'/'+yyyy;
        window.onload = function() {

            document.getElementById("date").innerHTML=today;
        }

    </script>

</head>

<body>

<form method="post" action="#">
    <div class="top-employeeform " style="background-color:#00838f  ; light-orange">
        <p style="text-align:left; color:white; font-size: 40px;  vertical-align: auto; padding-left: 10px; margin:0;">
            Add Student </p>
        <p style="text-align:left; color:white; font-size: 28px;  vertical-align: auto; padding-left: 10px; margin:0;">
            Form</p>
    </div>
    <div class="container " style="padding: 10px;">
        <div class="row">
            <div class="col m10 offset-m1 s12">
                <br><br>
                <div class="row">

                    <div class="card-panel teal lighten-2">
                        <h6>Student Details<h6>
                    </div>

                    <div class="row">
                        <div class="input-field nom col m4 s12">
                            <input type="text" name="first_name" value=""/>
                            <label for="first_name">First Name</label>
                        </div>

                        <div class="input-field nom col m4 s12">
                            <input type="text" name="middle_name" value=""/>
                            <label for="middle_name">Middle Name</label>
                        </div>

                        <div class="input-field nom col m4 s12">
                            <input type="text" name="last_name" value="">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field nom col m12 s12">
                            <input type="text" name="id_number" value="">
                            <label for="id_number">ID Number</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field nom col m6 s12">
                            <input type="text" name="address" value="">
                            <label for="address">Address</label>
                        </div>
                        <div class="input-field nom col m6 s12">
                            <input type="text" id="datepicker">
                            <label for="dob">Date Of Birth</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field nom col m6 s12">
                            <select multiple>
                                <option value="" disabled selected>Select Course</option>
                                <option value="1">MC-5832</option>
                                <option value="2">MC-5825</option>
                                <option value="3">MC-8325</option>
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
                        <h6>Family Details<h6>
                    </div>
                    <div class="input-field nom col m4 s12">
                        <input type="text" name="parent_guardian" value=""/>
                        <label for="first_name">Parent Guardian ID</label>
                    </div>

                    <div class="input-field nom col m4 s12">
                        <input type="text" name="first_name" value=""/>
                        <label for="middle_name">First Name</label>
                    </div>

                    <div class="input-field nom col m4 s12">
                        <input type="text" name="last_name" value="">
                        <label for="last_name">Last Name</label>
                    </div>
                    <div class="row">
                        <div class="input-field nom col m6 s12">
                            <select name="gender">
                                <option value="" disabled selected>Gender</option>
                                <option value="1">Female</option>
                                <option value="2">Male</option>
                            </select>
                        </div>
                    </div>
                        <div class="card-panel teal lighten-2">
                            <h6>Registration Details<h6>
                        </div>
                        <div class="input-field nom col m4 s12">
                            <input type="text" name="registration_fee" value="">
                            <label for="last_name">Registration Fee</label>
                        </div>
                        <div class="input-field nom col m4 s12">
                            <input type="text" name="date" id="date" >
                            <label for="last_name">Date Registered</label>
                        </div>



                        <div class="col m5">
                            <p class="right-align">
                                <button id="add-student-profile" class="btn btn-large waves-effect waves-light midddle"
                                        style="background-color:#00838f" type="submit" name="action">Add Student Profile
                                </button>
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
</form>
</body>
</html>

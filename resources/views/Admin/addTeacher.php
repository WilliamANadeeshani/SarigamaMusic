<!DOCTYPE html>

<html>
    <head>
        <title>Add Teacher</title>
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
        </script>
    </head>

    <body> 
        <form method="post" action="#">  
            <div class="top-employeeform " style="background-color:#00838f  ; light-orange">
                <p style="text-align:left; color:white; font-size: 40px;  vertical-align: auto; padding-left: 10px; margin:0;"> Add Teacher </p>
                <p style="text-align:left; color:white; font-size: 28px;  vertical-align: auto; padding-left: 10px; margin:0;">Form</p>
            </div>
            <div class="container " style="padding: 10px;">
                <div class="row">
                    <div class="col m10 offset-m1 s12">
                        <br><br>
                        <div class="row">
                            <form class="col s12">
                                <div class="row"> 
                                    <div class="input-field nom col m6 s12">
                                        <input type="text" name="first_name" value=""/>
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field nom col m6 s12">
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
                                        <input type="tel" name="tel_home" value="">
                                        <label for="tel_home">Tel-home</label>
                                    </div>

                                    <div class="input-field nom col m6 s12">
                                        <input type="tel" name="tel_mobile" value="">
                                        <label for="tel-mobile">Tel-mobile</label>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="input-field nom col m6 s12">
                                        <input type="text" name="address" value="">
                                        <label for="address">Qualification</label>
                                    </div>
                                    <div class="input-field nom col m6 s12">
                                        <input type="text" id="datepicker">
                                        <label for="dob">Date Of Birth</label>
                                    </div>
                                </div >
                                <div class="row">
                                    <select multiple>
                                        <option value="" disabled selected>Select Course</option>
                                        <option value="1">MC-5832</option>
                                        <option value="2">MC-5825</option>
                                        <option value="3">MC-8325</option>
                                    </select>  
                                    <div class="row">
                                        <div class="input-field nom col m4 s12">
                                        </div>
                                        <div class="col m5">
                                            <p class="right-align"><button id="add-student-profile" class="btn btn-large waves-effect waves-light midddle" style="background-color:#00838f" type="submit" name="action">Add Teacher Profile</button></p>
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



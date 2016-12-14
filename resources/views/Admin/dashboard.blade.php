@extends('Admin.index')
@section('title')
    Add Student
@endsection
@section('style')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <title>Admin Home</title>
    <style>
        html,body{
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body{
            position: relative;
        }

        #botom{
            position: fixed;
            width: 100%;
            height: 10px;
            bottom: 0px;
            background-color: #00838f;
        }

        #header{
            background-color: #00838f;
            width: 100%;
        }

        #left{
            position: absolute;
            width: 200px;
            height: 100%;
            float: left;
            padding: 0;
            margin: 0;
        }

        #right{
            margin-left: 200px;
            position: relative;
            height: 100%;
            width: 100%;
        }
    </style>


@endsection


@section('content')

<!-- Navbar goes here -->
<nav id="header">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">Sarigama Music School</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="btn-floating btn-large #00838f" href="">
                    <i class="extar-large material-icons">home</i>
                </a></li>
            <li><a href="#">LogOut</a></li>
        </ul>
    </div>
</nav>

<!-- Page Layout here -->

<div class="row">
    <div class="col s3" id="left">
        <!-- Side Navigation Bar-->
        <div class="collection" id="left">
            <a href="#!" class="collection-item">Student Registration</a>
            <a href="#!" class="collection-item">Update Student Details</a>
            <a href="#!" class="collection-item">Teacher Registration</a>
            <a href="#!" class="collection-item">Update Teacher Details</a>
            <a href="#!" class="collection-item">Teacher Payment</a>
        </div>

    </div>

    <div class="col 9" id="right">
        <!-- page content  -->
        <div id="right">
        <!--@yield('body')-->
        </div>
    </div>

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>


<footer class="page-footer" id="botom">

    <div class="container">

        <a class="grey-text text-lighten-4 right" href="#!"></a>
    </div>

</footer>

@endsection
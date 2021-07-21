<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            padding: 10px;
            background: #f1f1f1;
        }

        /* Header/Blog Title */
        .header {
            padding: 30px;
            text-align: center;
            background: white;
        }

        .header h1 {
            font-size: 50px;
        }

        /* Style the top navigation bar */
        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        /* Style the topnav links */
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change color on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 75%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            background-color: #f1f1f1;
            padding-left: 20px;
        }

        /* Fake image */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }

        /* Add a card effect for articles */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {
            .leftcolumn, .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }

        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
            .topnav a {
                float: none;
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Sweet Home</h1>
</div>

<div class="topnav">
    <a href="#">Home</a>
    <a href="#">Best Home</a>
    <a href="#">Life style</a>
    <a href="#">About us</a>
    <a href="#">Contact us</a>
</div>
<div class="row">
        <div class="leftcolumn">
            <div class="card">
                @foreach($list as $item)
                <div><img src="{{$item->image}}" style="width: 100%" alt=""></div>
                <div><a>{{ $item->name }}</a></div>
                <div>{{$item->information}}</div>
                <div>{{$item->address}}</div>
                <div><b>{{$item->price}}</b></div>
                @endforeach
            </div>
        </div>
    <div class="rightcolumn">
        <div class="card">
            <h3>Search By Area</h3>
            <div><a href="#">District 1</a></div>
            <div><a href="#">District 2</a></div>
            <div><a href="#">District 3</a></div>
            <div><a href="#">District 4</a></div>
            <div><a href="#">District 5</a></div>
        </div>
        <div class="card">
            <h3>Search By Price</h3>
            <div><a href="#">< 10000</a>$</div>
            <div><a href="#">10000 - 15000</a>$</div>
            <div><a href="#">15000 - 30000</a>$</div>
            <div><a href="#">30000 - 50000</a>$</div>
            <div><a href="#">> 50000</a>$</div>
        </div>
    </div>
</div>
<div class="footer">
    <p>PVHUNG © Copyright 2021</p>
</div>
{{--@include('pagination', ['pagination' => $list])--}}
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">

    <style>
     body{
         
         margin:0;
         padding: 0;
         
     }   
     #bg-image
     {
        position: fixed;
        left: 0;
        top: 0;
        z-index: -1;
        transition: all .6s;
        opacity: .6;
        filter: blur(.5px);
       
     }
     #bg-image:hover{
        
     }
    </style>
    <link rel="stylesheet" href="{{ URL::asset('css//Customstyle.css')}}">

    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.index')}}"><h3>BLU</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freelancer.worklist')}}"><h3>&nbsp;&nbsp; WorkList</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freelancer.joblist')}}"><h3>&nbsp;&nbsp;JobSearch</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freelancer.job')}}"><h3>&nbsp;&nbsp;AddWork</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freelancer.workhistory')}}"><h3>&nbsp;&nbsp;WorkHistory</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freelancer.update')}}"><h3>&nbsp;&nbsp; Update</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freelancer.security')}}"><h3>&nbsp;&nbsp; securityQue</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freelancer.invitation')}}"><h3>&nbsp;&nbsp; Invitation</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freelancer.message')}}"><h3>&nbsp;&nbsp; Message</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout.index')}}"><h3>&nbsp;&nbsp; Log Out</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freelancer.active',session('id'))}}"><h3>&nbsp;&nbsp; {{session('active')}}</h3></a>
                    </li>

                   
                   
            
                </ul>
            </nav>
    <form method="post">
        {{csrf_field()}}
        <table align="center">
            <tr>
                <td><h2>Name: {{session('fullname')}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rating:&nbsp; {{$rate}}&nbsp;&nbsp;&nbsp;&nbsp; Viewers:&nbsp;{{$see}}</h2></h3></td>
            </tr>
            <tr>
                <td><h2>Area: {{session('area')}}</h2></h3></td>
            </tr>
            <tr>
                <td><h2>Work Title: {{session('title2')}}</h2></h3></td>
            </tr>
            <tr>
                <td><h2>{{session('titledetails')}}</h2></h3></td>
            </tr>
            <tr>
                <td>&nbsp; </td>
            </tr>
            <tr>
                <td><h2>Work rate: {{session('rate2')}}</h2></h3></td>
            </tr>
            <tr>
                <td><h2>skills: {{session('skills2')}}</h2></h3></td>
            </tr>
            <tr>
                <td><h2>Available: {{session('available')}}</h2></h3></td>
            </tr>
                
        </table>
        
    </form>
            
                        
</body>
</html>
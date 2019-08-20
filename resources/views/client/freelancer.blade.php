<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css//Customstyle.css')}}">

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
     .abs{
        font-size: 20px;
     }
    </style>
    <link rel="stylesheet" href="./Customstyle.css">

    <title>All Freelancer</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('client.index')}}"><h3>Home</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout.index')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log Out</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('client.index')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp; Back</h3></a>
                    </li>
                   
                   
            
                </ul>
            </nav>
    <form method="post">
        {{csrf_field()}}
        <h3 align="center"> Freelancher List:</h3><br/>
        <table class="abs" border="2" width="60%" align="center">
            <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID</td>
            <td align="center">Username</td>
            <td align="center">Email</td>
            <td align="center">Title</td>
            <td align="center">Experience</td>
            <td align="center">Rate</td>
            <td align="center">Work Hour</td>
            <td align="center">Phone</td>
            <td align="center">Action</td>
            </tr>
            @foreach($data as $value)
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$value['id']}}</td>
                <td align="center">{{$value['username']}}</td>
                <td align="center">{{$value['email']}}</td>
                <td align="center">{{$value['worktitle']}}</td>
                <td align="center">{{$value['experience']}}</td>
                <td align="center">{{$value['rate']}}</td>
                <td align="center">{{$value['hour']}}</td>
                <td align="center">{{$value['phoneno']}}</td>
                <td align="center">
                    <a href="{{route('client.profile', $value['id'])}}">See Profile</a>
                </td>
            </tr>
            @endforeach
                
        </table>
        
    </form>
            
                        
</body>
</html>
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
        opacity: .6;
        transition: all .6s;
        filter: blur(.5px);
       
     }
     #bg-image:hover{
        
     }
     .abs{
        font-size: 20px;
     }
    </style>
    

    <title>ALL Job</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.index')}}"><h3>Home</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout.index')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log Out</h3></a>
                    </li>
                   
                   
            
                </ul>
            </nav>
    <form method="post">
        {{csrf_field()}}

        <h1 align="center">Member List:</h1><br/>
        <br/>
        <table class="abs" border="2" width="60%" align="center">
            <tr>
            <td align="center">ID</td>
            <td align="center">Name</td>
            <td align="center">Email</td>
            <td align="center">Type</td>
            <td align="center">Action</td>
            </tr>
            @foreach($data as $value)
            <tr>
                <td align="center">{{$value['id']}}</td>
                <td align="center">{{$value['name']}}</td>
                <td align="center">{{$value['email']}}</td>
                <td align="center">{{$value['type']}}</td>
                <td align="center">
                    <a href="{{route('home.delete', $value['id'])}}">Delete</a>
                </td>
            </tr>
            @endforeach
                
        </table>
        
    </form>
            
                        
</body>
</html>
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
    </style>
    <link rel="stylesheet" href="./Customstyle.css">

    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.index')}}"><h3>BLU</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('client.complain')}}"><h3>&nbsp;&nbsp; ComplainBox</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('client.freelancerall')}}"><h3>&nbsp;&nbsp; Freelancer</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('client.workhistory')}}"><h3>&nbsp;&nbsp; WorkHistory</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('client.sms')}}"><h3>&nbsp;&nbsp; Message</h3></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout.index')}}"><h3>&nbsp;&nbsp; Log Out</h3></a>
                    </li>
                </ul>
            </nav>
    <form method="post">
        {{csrf_field()}}
        <table align="center">
            <tr><td><h1>client</h1></td></tr>
                
        </table>
        
    </form>
            
                        
</body>
</html>
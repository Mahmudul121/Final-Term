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

    <title>Rating</title>
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
        <h3 align="center">Rating:</h3><br/>
        <table class="abs" width="60%" align="center">
            <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Frelancer :&nbsp;&nbsp;</td>
            <td><input type="text" name="reciever" readonly value="{{$data['email']}}"></td>
            </tr>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td></td>
            </tr>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rating :&nbsp;&nbsp;</td>
            <td><input type="text" name="rate" placeholder="0.0-10.0"></td>
            <td><h4>{{$error}}</h4></td>
            </tr>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td></td>
            </tr>
            <tr>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td><input type="submit" name="send" value="Send"></td>
            </tr>
                
        </table>
        
    </form>
            
                        
</body>
</html>
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


    <title>Rent History</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('member.home')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout.index')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log out</h3></a>
                    </li>
                    
                   
                   
            
                </ul>
            </nav>
    <form method="post">
        {{csrf_field()}}
     <table class="abs" border="2" width="60%" align="center">
            <tr>
            <td align="center">ID</td>
            <td align="center">Email</td>
            <td align="center">carname</td>
            <td align="center">Cost/$</td>
            <td align="center">Total cost</td>
            <td align="center">Total day</td>
            </tr>
            @foreach($data as $value)
            <tr>
                <td align="center">{{$value['id']}}</td>
                <td align="center">{{$value['email']}}</td>
                <td align="center">{{$value['carname']}}</td>
                <td align="center">{{$value['perdaycost']}}</td>
                <td align="center">{{$value['totalcost']}}</td>
                <td align="center">{{$value['totalday']}}</td>
            </tr>
            @endforeach
                
        </table>  
        </form>                 
</body>
</html>
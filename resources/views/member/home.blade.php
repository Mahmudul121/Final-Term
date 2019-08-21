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


    <title>Member</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('member.index')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Home</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout.index')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log out</h3></a>
                    </li>
            
                </ul>
            </nav>
    <h1 align="center"> Welcome To Online Car Rent</h1>   
    <form method="post">
           {{csrf_field()}}
           <table class="abs"  width="60%" align="center">
            <tr><td align="center">&nbsp;<h1>{{session('homee')}}<h1/></td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
            <td align="center">Carname</td>
            <td align="center">From</td>
            <td align="center">To</td>
            
            </tr>
            <tr><td>&nbsp;</td></tr>
            
            <tr>
                <td align="center">
                    <select name="carname">
                        @foreach($car as $value)
                        <option value="{{$value}}">{{$value}}</option>
                        @endforeach
                    </select>
                </td>
                <td align="center"><input type="date" name="from"></td>
                <td align="center"><input type="date" name="to"></td>
                <td align="center"><input type="submit" name="view" value="View"></td>
                
            </tr>
            
            
            

        </table> 
       </form>r 
                        
</body>
</html>
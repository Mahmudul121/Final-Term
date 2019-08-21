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


    <title>Add Car</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.index')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp; Home</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout.index')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log out</h3></a>
                    </li>
                    
                   
                   
            
                </ul>
            </nav>    
    <form method="post">
        {{csrf_field()}}
        <table class="abs" width="60%" align="center">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="carname" required></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>Categories:</td>
                <td>
                    <select name="type" required>
                      <option value="Privatecar">Private Car</option>
                      <option value="Microbus">Microbus</option>
                      <option value="Pickup">Pick-up</option>
                    </select>
                </td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>Cost per Day: </td>
                <td><input type="number" name="cost" required> </td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>Seat Number: </td>
                <td><input type="number" name="seatno" required> </td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"> </td>
            </tr>
        </table>
    </form>
</body>
</html>
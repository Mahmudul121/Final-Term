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
     .abs{
        font-size: 20px;
     }
     #bg-image:hover{
        
     }
    </style>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css//Customstyle.css')}}">

    <title>Add User</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freelancer.index')}}"><h3>Home</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout.index')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log Out</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('freelancer.worklist')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp; Back</h3></a>
                    </li>
                   
                   
            
                </ul>
            </nav>
    <form method="post">
        {{csrf_field()}}
        <h3 align="center"> ADD Freelancer:</h3><br/>
        <table class="abs"  width="60%" align="center">
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID:</td>
                <td>&nbsp;&nbsp;&nbsp;<input type="text" readonly value="{{$data['id']}}" name="id"></td>
            </tr>
            <tr> <td> &nbsp; </td> </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job Title:</td>
                <td>&nbsp;&nbsp;&nbsp;<input type="text" readonly value="{{$data['jobtitle']}}" name="jobtitle"></td>
            </tr>
            <tr> <td> &nbsp; </td> </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amount:</td>
                <td>&nbsp;&nbsp;&nbsp;<input type="text" readonly value="{{$data['amount']}}" name="amount"></td>
            </tr>
            <tr> <td> &nbsp; </td> </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Days:</td>
                <td>&nbsp;&nbsp;&nbsp;<input type="text" readonly value="{{$data['days']}}" name="day"></td>
            </tr>
            <tr> <td> &nbsp; </td> </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Client:</td>
                <td>&nbsp;&nbsp;&nbsp;<input type="text" readonly value="{{$data['client']}}" name="client"></td>
            </tr>
            <tr> <td> &nbsp; </td> </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Users:</td>
                <td>&nbsp;&nbsp;&nbsp;
                    <select name="user">
                        @foreach($user as $value)                
                        <option value="{{$value}}">{{$value}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr> <td> &nbsp; </td> </tr>
            <tr>
                <td></td>
                <td> 
                    &nbsp;&nbsp;&nbsp;<input type="submit" name="done" value="Add">
                </td>
            </tr>
                
        </table>
        
    </form>
            
                        
</body>
</html>
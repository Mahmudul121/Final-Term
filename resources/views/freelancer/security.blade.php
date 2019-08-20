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

    <title>Security</title>
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
                        <a class="nav-link" href="{{route('freelancer.index')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp; Back</h3></a>
                    </li>
                   
                   
            
                </ul>
            </nav>
    <form method="post">
        {{csrf_field()}}
        <h3 align="center">Security question:</h3><br/>
        <table class="abs" width="60%" align="center">

            <tr>
                <td>You’ll be prompted to answer your security question when we need to verify your identity, so be sure to choose a question only you know the answer to.</td>
            </tr>
            <tr>
                <td><h3>Question:</h3></td>
            </tr>
            <tr>
                <td>
                    <select name="question">
                        <option value="">Please Select...</option>
                        <option value="What is your mother name?">What is your mother name?</option>
                        <option value="Your phone number.">Your phone number.</option>
                        <option value="Favourite writer">Favourite writer</option>
                        <option value="Your nick name.">Your nick name.</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><h3>Answer:</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="answer" required id="answer" placeholder="Answer pls.."></td>
            </tr>
            <tr>
                <td><input type="checkbox" checked name="check">I understand my account will be locked if I am unable to answer this question.<br/></td>
            </tr>
            <tr>
                <td><input type="submit" name="ans" value="Answer"></td>
            </tr>
                
        </table>
        
    </form>
            
                        
</body>
</html>
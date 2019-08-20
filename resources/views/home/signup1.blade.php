<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom.css">
    <title>Sign up </title>

  </head>

  <body >
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.index')}}"><h3>Home</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log in</h3></a>
                    </li>
                </ul>
            </nav>
      <br/>
      <form method="POST" action="">
        {{csrf_field()}}
        <div class="container center">

        <div class="row">
          <div class="col-xs-8">
            <fieldset>
                    <legend> <font color="#e60000"><h3>Get Your Free Account</h3></font> </legend>
            <div class="form-row">

              <div class="col">

                <label for="fname" ><h4>First Name</h4></label> <!-- first name label -->
                <input type="text" class="form-control form-control-lg"  name="fname" placeholder="First Name" id="fname" required>  
              </div>
              <div class="col">

                <label for="lname" ><h4>Last Name</h4></label> <!-- first name label -->
                <input type="text" class="form-control form-control-lg"  name="lname" placeholder="Last Name" id="lname" required>  
              </div>
              <div class="col">
                  <label for="email"><h4>Email</h4></label> <!-- last name -->
                  <input type="email" class="form-control form-control-lg"  name="email" placeholder="anything@example.com" id="email" required>
                  </label>
                  
                </div>

            </div>
            <br/>
            
          </fieldset>  
          <br/>
              <input type="submit" class="btn btn-lg btn-success" name="register" value="Sign me up"/>
          </div>
          
        </div>
        
      </div>
      </form>
           @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach     
  </body>




</html>

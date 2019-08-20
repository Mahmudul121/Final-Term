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
                    <legend> <font color="#e60000"><h3>Complete your free account setup</h3></font> </legend>
                    <legend> <font><h3>{{session('email')}}</h3></font> </legend>
            <div class="form-row">

              <div class="col">

                <label for="Country" ><h4>Country</h4></label> <!-- first name label -->
                <select name="Country" required>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="India">India</option>
                  <option value="America">America</option>
                  <option value="Pakisthan">Pakisthan</option>
                </select>  
              </div>
              <div class="col">

                <label for="password" ><h4>Pasword</h4></label> <!-- first name label -->
                <input type="password" class="form-control form-control-lg"  name="password" placeholder="confirm password" id="password" required>  
              </div>
              <div class="col">
                  <label for="title"><h4>I want to: </h4></label> <br/><!-- last name -->
                  <input type="radio" name="title" value="Hire for a project"> Hire for a project<br>
                  <input type="radio" name="title" value="Freelancer"> Work as a Freelancer<br>
                  </label>
                  <br/>

                  <input type="checkbox"  name="condition" checked="yes" value="yes" required><label><h4>Yes, I understand and agree.</h4></label>
                  
              </div>

            </div>
          
            
          </fieldset>  
          <br/>
              <input type="submit" class="btn btn-lg btn-success" name="register" value="Create My Account"/>
          </div>
          
        </div>
        
      </div>
      </form>
               
  </body>




</html>

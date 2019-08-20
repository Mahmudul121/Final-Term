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
                    <legend> <font color="#e60000"><h3>Apply to join.</h3></font> </legend>
                    <legend> <font><h5>Admission is competitive, as there are limited spaces for freelancers. Take your time to complete the following information.<br/>

                    After you submit your application, we’ll notify you of our decision.</h5></font> </legend>
            <div class="form-row">

              <div class="col">
                <h4>Tell us about your services.</h4><br/>

                <label for="work" ><h5>What is the main service you offer to clients?</h5></label> <br/>
                <select name="work" required>
                  <option value="null">Please Select</option>
                  <option value="web,Mobile Dev">web,Mobile Dev</option>
                  <option value="IT & Networking">IT & Networking</option>
                  <option value="Engineering">Engineering</option>
                </select>  
              </div>
              <div class="col">

                <label for="skills" ><h5>What skills do you offer clients?</h5></label> <!-- first name label -->
                <input type="text" class="form-control form-control-lg"  name="skills" placeholder="" id="skills" required>  
              </div>

              <div class="col">
                  <label for="experience"><h5>What is your experience level? </h5></label> <br/><!-- last name -->
                  <input type="radio" name="experience" value="New">New  <br>
                  <input type="radio" name="experience" value="Intermediate"> Intermediate<br>
                  <input type="radio" name="experience" value="Expert"> Expert<br>
                  </label>
                  <br/>   
              </div>

            </div>
          
            
          </fieldset>  
              <br/>
              <input type="submit" class="btn btn-lg btn-success" name="register" value="Save & Continue"/>
          </div>
          
        </div>
        
      </div>
      </form>
               
  </body>




</html>

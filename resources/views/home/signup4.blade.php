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
                    <legend> <font color="#e60000"><h3>Create your profile</h3></font> </legend>
                    <legend> <font><h5>If your profile is approved, it will become the public profile you’ll use to market your freelance business to clients</h5></font> </legend>
            <div class="form-row">

              <div class="col">
                <h4>Tell us more about you</h4><br/>

                <label for="title" ><h5>Add a professional title </h5></label> <br/>
                <input type="text" name="title"> 
              </div>
              <div class="col">

                <label for="skill" ><h5>Write a professional overview</h5></label> <!-- first name label -->
                <input type="text" class="form-control form-control-lg"  name="skill" placeholder="" id="skill" required>  
              </div>

              <div class="col">
                    <label for="eng" ><h5>What is your English proficiency?</h5></label><br/>
                    <select name="english">
                      <option value="Basic">Basic</option>
                      <option value="Conversational">Conversational</option>
                      <option value="Fluent">Fluent</option>
                    </select>
              </div>
              <div class="col">

                <label for="rate" ><h5>Set your Hourly Rate</h5></label>

                Hourly Rate  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" class="form-control form-control-lg"  name="rate" placeholder="Hourly" id="rate" required> 
              </div>
              <div class="col">
                    <label for="hour" ><h5>Add your availability and location</h5></label>
                    <br/>
                    How many hours do you have available for work each week?<br/>
                    <select name="hour">
                      <option value="">Select Please..</option>
                      <option value="more than 30hr/week">more than 30hrs/week</option>
                      <option value="less than 30hr/week">less than 30hrs/week</option>
                      <option value="as needed">As Needed</option>
                    </select>
              </div>
              <div class="col">

                <label for="phone" ><h5>Phone No</h5></label>

                <input type="number" class="form-control form-control-lg"  name="phone" placeholder="" id="phone" required>
              </div>

            </div>
          
            
          </fieldset>  
              <br/>
              <input type="submit" class="btn btn-lg btn-success" name="register" value="Submit"/>
          </div>
          
        </div>
        
      </div>
      </form>
               
  </body>




</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    

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
    </style>
  

    <title>Update</title>
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
                        <a class="nav-link" href="{{route('freelancer.index')}}"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Back</h3></a>
                    </li>
                   
                   
            
                </ul>
            </nav>
   <form method="POST" action="">
        {{csrf_field()}}
        <div class="container center">

        <div class="row">
          <div class="col-xs-8">
            <fieldset>
            <div class="form-row">
                <div class="col">
                <label for="id" ><h4>ID</h4></label> 
                <input type="text" class="form-control form-control-lg"  name="id" value="{{$data['id']}}" readonly id="id" required>  
              </div>
              <div class="col">
                <label for="name" ><h4>Name</h4></label> 
                <input type="text" class="form-control form-control-lg"  name="name" value="{{$data['username']}}" placeholder="Name" id="name" required>  
              </div>
              <div class="col">

                <label for="email" ><h4>Email</h4></label> 
                <input type="email" class="form-control form-control-lg" readonly  name="email" value="{{$data['email']}}" placeholder="Last Name" id="email" required>  
              </div>
              <div class="col">

                <label for="password" ><h4>password</h4></label> 
                <input type="password" class="form-control form-control-lg"  name="password" value="{{$data['password']}}" placeholder="Last Name" id="password" required>  
              </div>
              <div class="col">

                <label for="title" ><h4>Title</h4></label> 
                <input type="text" class="form-control form-control-lg"  name="title" value="{{$data['title']}}" placeholder="Title" id="title" required>  
              </div>
              <div class="col">

                <label for="rate" ><h4>Rate</h4></label> 
                <input type="text" class="form-control form-control-lg"  name="rate" value="{{$data['rate']}}" placeholder="Last Name" id="rate" required>  
              </div>

              <div class="col">

                <label for="phoneno" ><h4>Phone No</h4></label> 
                <input type="text" class="form-control form-control-lg"  name="phoneno" value="{{$data['phoneno']}}" placeholder="phone no" id="phoneno" required>  
              </div>
              

            </div>
            <br/>
            
          </fieldset>  
          <br/>
              <input type="submit" class="btn btn-lg btn-success" name="register" value="Update"/>
          </div>
          
        </div>
        
      </div>
      </form>
            
                        
</body>
</html>
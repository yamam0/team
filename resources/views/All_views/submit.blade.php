<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style>
     .container-fluid{
         width: 75% !important;
         
     }
     h1{
         text-align: center;
     }
    </style>
    </head>
    <body>
        <div class="container-fluid">
            <h1>Testing Form For Our Team ver2</h1>

            
            @if(count($errors)>0)

                <div class="alert alert-danger">
              <ul>
              @foreach($errors->all() as $error)
               <li>  {{$error}}  </li>
              @endforeach
              </ul>
              </div>

            
            @endif
        <form action="add" method="POST">
        {{csrf_field()}} 
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="inputPassword4" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
            </div>
          
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Country</label>
                <select name="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>Damascus</option>
                  <option>Hama</option>
                  <option>Hums</option>
                  <option>Latakia</option>
                  <option>blabla</option>

                </select>
              </div>
              
            </div>
           
           <!-- <button id="button" type="button" class="btn btn-primary"  >Sign in</button> -->
           <input class="btn btn-primary" type='submit' value="submit">
          </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="main.js"></script>

</html>
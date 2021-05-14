<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Create Account</title>
    <style>
      .card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
    </style>
    
  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-light px-py-2 " style = "background-color: skyblue; ">
      <a class="navbar-brand" href="index.php" style = "color:darkblue;font-size: 30px;font-weight: 4px;">PEOPLE's BANK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item  mx-4 active">
            <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link " href="view customer.php">View Customers</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link " href="view.php">Money-Transfer</a>
          </li>
        </ul>
             
      </div>
    </nav>
     <?php
               

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    $name = $_POST['name'];
                    $user = $_POST['uname'];
                    $email = $_POST['email'];
                    $dob = $_POST['dob'];
                    $address = $_POST['address'];
                    $amount = $_POST['money'];
                    $phone = $_POST['phone'];

                     $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bank";
                  
                    $conn = mysqli_connect($servername, $username, $password,$dbname);

                    // Check connection
                    if (!$conn) {
                      die("There is some issues in the server.We are Sorry for the inconvinence Caused ");
                    }
                    else{
                      $sql = "INSERT INTO customer (name, email, username, amount, dob, phone, address) VALUES ('{$name}', '{$email}', '{$user}', '{$amount}', '{$dob}', '{$phone}', '{$address}')";
                       if (mysqli_query($conn, $sql)) {
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
  
                        } 
                        else{
                         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Failure!</strong> Server Problem Try after few minutes
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
                        }
                      }
             }       
             
          ?>
   

    <div class = "container  mt-4">
      <div class = "row">
        <div class = "col-3"></div>
        <div class = "col-6">
          <div class = "card" >
             <div class="card-body">
              <form  method="post" action = "/spark/create.php">
                 
                  
                    <h3 >Register</h3> 
                    <div class="form-group" >
                      <label >Name</label>
                      <input type="text" name = 'name' class="form-control" placeholder="Enter name"  required>
                      
                    </div>
                    <div class="form-group" >
                      <label >Email</label>
                      <input type="text" name = 'email' class="form-control" placeholder="Enter email"  required>
                      
                    </div>
                    <div class="form-group" >
                      <label >Username</label>
                      <input type="text" name = 'uname' class="form-control" placeholder="Enter username"  required>
                      
                    </div>
                    <div class="form-group" >
                      <label >Phone</label>
                      <input type="text" name = 'phone' class="form-control" placeholder="Enter Phone Number"  required>
                      
                    </div>
                    <div class="form-group" >
                      <label >Address</label>
                      <input type="text" name = 'address' class="form-control" placeholder="Enter your Address"  required> 
                      
                    </div>
                    <div class="form-group" >
                      <label >Date of Birth</label>
                      <input type="text" name = 'dob' class="form-control" placeholder="Enter Date of Birth"  required>
                      
                    </div>
                    <div class="form-group" >
                      <label >Amount</label>
                      <input type="text" name = 'money' class="form-control" placeholder="Enter amount"  required>
                      
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  
                  
                 
                  
            
          
             </div>
          </div>
        </div>
        <div class = "col-3"></div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
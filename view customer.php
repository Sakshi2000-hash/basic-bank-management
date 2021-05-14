<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Banking System</title>
    <style>
      html{
        margin:0;
        padding: 0;
      }
      body{
        margin:0;
        padding:0;
        background-color: white;
      }
     
       
       footer{
        background-color: skyblue;
        height:auto;
        margin-bottom: 0;
       }
       table{
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       }
      
    </style>
    
  </head>


  <body>

    <?php


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
          $sql = "select * from customer";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
          if($num<0){
          echo'<h2>No Data of Customer Present</h2>';
        }


        }

        ?>
     

    
    <nav class="navbar navbar-expand-lg navbar-light px-py-2 " style = "background-color: skyblue; ">
      <a class="navbar-brand" href="index.php" style = "color:darkblue;font-size: 30px;font-weight: 4px;">PEOPLE's BANK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item  mx-4 ">
            <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active mx-4">
            <a class="nav-link " href="view customer.php">View Customers</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link " href="view.php">Money-Transfer</a>
          </li>
        </ul>
             
      </div>
    </nav>
    <div class = "container">
    <table class="table table-striped mt-4">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Username</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">DOB</th>
          <th scope="col">Amount Present</th>

        </tr>
  </thead>
  <tbody>
   <?php
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
       <th scope="row"><?php echo $row['name'];?></th>
       <td><?php echo $row['username'];?></td>
       <td><?php echo $row['phone'];?></td>
       <td><?php echo $row['email'];?></td>
       <td><?php echo $row['address'];?></td>
       <td><?php echo $row['dob'];?></td>
       <td><?php echo 'Rs '.$row['amount'];?></td>
    </tr>

 <?php } ?>
    
  </tbody> 
</table>
  

  
  <!-- <center>
   
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal">
  Send Money
</button>


  
</center> -->

</div>
 <footer class = "container-fluid text-center fixed-bottom" >
      
            <h4 class = "mt-3 text-center " >&copy;Copyright 2021 by Sakshi Asati</h4>
         
       
    </footer>



    <!-- al JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
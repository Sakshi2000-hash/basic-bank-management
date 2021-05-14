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
      .carousel-item>.row>.col-4>img{
        width:100%;
        height:280px;
      }
       .cd1{
        background-image: url("Untitled design.png");
        background-repeat: no-repeat;
        overflow: hidden;
        width:100%;
        height:auto;
        background-attachment: cover;
       }
       .caro{
        background-color: white;
       }
       footer{
        background-color: skyblue;
        height:auto;
        margin-bottom: 0;
       }
       .btn:hover::after{
        
        content: ' \2192' ;

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

    <div class = "jumbotron jumbotron-fluid cd1">
      <!-- <img src = "Untitled design.png"> -->
      <div class = "container">
        <div class = "row">
          <div class = "col-sm-4 col-lg-4 col-md-4 col-xs-4 ">
              <div class="card mb-3" style="max-width: 18rem;background-color: rgb(0,255,255,0.2);border:0px;">
                <div class="card-header">Online Banking</div>
                <div class="card-body text-center">
                  <p><em>
                    A bank is a financial institution that accepts deposits from the public and creates a demand deposit while simultaneously making loans. Lending activities can be directly performed by the bank or indirectly through capital markets
                  </em>
                  </p>
                  <a href="create.php" class="btn btn-primary " style = "border-radius:15px ; ">Create Account</a>
                  
                </div>
              </div>
          </div>
          <div class = "col-sm-8 col-lg-8 col-md-8 col-xs-8 text-center mt-4">
               <h2>Alliant High-Rate Savings</h2><br>
               <h1>Rates 13.8x higher than the bank 
               industry average</h1>
          </div>
        </div>
      </div>
    </div>
     <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Stay Home ,Stay Safe, Wear Mask, Keep Social Distancing, Keep HandWashing</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class = "container-fluid text-center">
      <h2 style="color:darkblue;" class = "my-3">Why Do We Require Bank?</h2>
      
      <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
  <div class="carousel-inner my-4">
    <div class="carousel-item active">
      <div class = "row my-4">
        <div class = "col-4">
          
          <img src = "loan.png">
           <h5 class = "my-2">Bank Provide Loan at low Interest</h5>
        </div>
        <div class = "col-4">
          <img src = "moneysave.jpg">
          <h5 class = "my-2">Save Money in Bank</h5>
        </div>
        <div class = "col-4">
          <img src = "transfer money.jpg">
          <h5 class = "my-2">Easily Transfer Money</h5>
        </div>
      </div>
    
    </div>
    <div class="carousel-item">
       <div class = "row my-4">
        <div class = "col-4">
          <img src = "paymethod.jpg">
          <h5 class = "my-2">Do payment online with different medium</h5>
        </div>
        <div class = "col-4">
          <img src = "netbank.jpg">
          <h5 class = "my-2">NetBanking Anytime Anywhere</h5>
        </div>
        <div class = "col-4">
          <img src = "savedeposit.jpg">
          <h5 class = "my-2">Bank Provide Security to your deposits</h5>
        </div>
      </div>
      
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>

    <footer class = "container-fluid text-center "  >
      <div class = "row my-4">
        <div class = "col-2">
        </div>
        <div class = "col-8 my-4">
          <ul class = "mt-3 "style = "list-style: none; font-size: 20px;">
            <li class = "mt-3 text-centertext-center">Find Us on Social Media</li>
            <li class = "mt-3 text-center">

              <span class = "mx-3">
                <i class="fa fa-instagram"  aria-hidden="true"></i></span>
              <span> 
                <i class="fa fa-facebook-square" aria-hidden="true"></i></span class = "mx-3">
              <span class = "mx-3">
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
              </span>
              <span>
                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
              </span>

            </li>
            <li class = "mt-3 text-center ">Address : Raman Street 240/2 Mumbai</li>
            <li class = "mt-3 text-center " >&copy;Copyright 2021 by Sakshi Asati</li>
          </ul>
        </div>
        <div class = "col-2"></div>
      </div>
    </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<?php
  session_start();  
  
?>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="detailedstyle.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>product details</title>
</head>

<body>

<?php
include 'partials/_dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $uid = $_SESSION["user_id"];
  $pid = $_GET["product_id"];
  $sql = "INSERT INTO `cart` (`product_id`, `user_id`) VALUES ('$pid', '$uid')";
    if ($conn->query($sql) === TRUE) {
    echo '<div class="alert alert-success" role="alert" style="z-index=101;"> The item has been added to the cart! </div>';
    // redirect("signin.php");
    } else {
    echo '<div class="alert alert-danger" role="alert" style="z-index=101;"> The item already exists in your cart! </div>';
    }
}


?>
    
<nav class="navbar navbar-expand-lg navbar-light border border-5 shd">
      <div class="container-fluid container-lg hs">
        <a class="navbar-brand home-heading " href="index.php">Clarket</a>
        <form class="d-flex me-auto ms-auto">
          <button class="btn btn-outline-dark" type="submit">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="21"
              height="21"
              fill="currentColor"
              class="bi bi-search m-auto mx-1 "
              viewBox="0 0 16 16"
            >
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
              />
            </svg>
          </button>
          <input
            class="form-control widath "
            type="search"
            placeholder="Search for products such as Table,Fan,Books etc."
            aria-label="Search"
          />
        </form>
        <ul class="navbar-nav">
          <li class="nav-item me-1">
            <a
              class="nav-link rounded-pill logged-out"
              href="signin.php"
              id="Account"
              role="button"
            >
              Sign In
            </a>

            <div class="dropdown show">
              <a class="btn cbtn mb-2 dropdown-toggle logged-in" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Naman
              </a>
            
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="user_account.php">Profile</a>
                <a class="dropdown-item" href="logout.php" id="logoutbutton">Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </div>

</nav>
    <div id="alert"></div>
    <div class="main_container">
        <?php

            

            $id = $_GET['product_id'];
            $sql = "SELECT * FROM `products` WHERE product_id=$id"; 
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '
            <div class="image">
              <img src="image/'.$row["img_name"].'" alt="" class="img-fluid" id="img1">
            </div>

            <div class="desc">
            <p class="heading1">'.$row["title"].'</p>
            <span class="heading2">'.$row["college"].'</span>
            <hr>
            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrice: &nbsp&nbsp<span class="price">&#8377 '.$row["price"].'- Negotiable</span></p>
            <p>&nbsp&nbspCondition: &nbsp&nbsp'.$row["product_condition"].'.</p>
            <p>Description: &nbsp'.$row["description"].'</p>
            <hr>';

            ?>
            <div class="buttons" >
              <!-- <button class="cart cart1" onclick="addtocart()">Add to cart</button> -->
            <form method="post">
                <input type="submit" name="button2"
                        class="cart cart1" value="Add to Cart" />
                <!-- <input type="submit" name="button1"
                        class="cart cart2" value="Buy Now" /> -->
                
            </form>
                <!-- <button class="cart cart2" >Buy Now</button> -->
            </div>
        </div>

        <?php

        echo '
        <div class="seller">
            <p class="heading3">Seller information</p>
            <p>'.$row["seller_name"].'</p>
            <p>'.$row["phone"].'</p>
            <p><a href="mailto:'.$row["email"].'" class="email_link">'.$row["email"].'</a></p>
        </div>
            ';


        ?>
        <!-- <div class="desc">
            <p class="heading1">Woodworks Table Newly Polished</p>
            <span class="heading2">Netaji Subhas University of Technology</span>
            <hr>
            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrice: &nbsp&nbsp<span class="price">&#8377 3000 - Negotiable</span></p>
            <p>&nbsp&nbspCondition: &nbsp&nbspBrand new with a bit of wear on one side.</p>
            <p>Description: &nbsp&nbspCoffee brown colour with dark brown legs. &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPolished a month ago by Woodworks Co. In.</p>
            <hr>
            <div class="buttons" ><button class="cart cart1" onclick="addtocart()">Add to cart</button>
                <button class="cart cart2" >Buy Now</button>
            </div>
        </div>
        <div class="seller">
            <p class="heading3">Seller information</p>
            <p>Aditya Singh</p>
            <p>9811223344</p>
            <p><a href="mailto:aditya@gmail.com" class="email_link">aditya@gmail.com</a></p>
        </div> -->
    </div>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-3 mb-0 text-muted">© 2021 Company, Inc</p>
      
          <a href="/" class="col-md-4 d-flex home-heading align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <p class="display-5 mrg">Clarket</p><sup>©️</sup></svg>
          </a>
      
          <ul class="nav col-md-5 justify-content-end">
            <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="contact_us.html" class="nav-link px-2 text-muted" >Contact US</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About US</a></li>
          </ul>
        </footer>
      </div>
      <script type="module" src="scripts/auth.js"></script>
      <script src="scripts/index.js"></script>

      

      function addtocart() {

            <!-- var ans = "<?php
            

            ?>" -->
            <!-- console.log("triggered");
            var alertelement = document.getElementById('alert');
            alertelement.innerHTML =
              "<div class=\"alert alert-success\" role=\"alert\"> The item has been added to the cart! </div>"
            setTimeout(function () {
              var alertelement = document.getElementById('alert');
              alertelement.innerHTML = "";
            }, 2000); -->
}
      <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
          $var =  $_SESSION['username'];
          echo '<script>
          var lel = document.getElementById("dropdownMenuLink");
          lel.innerHTML = "'.$var.'";
          const loggedinelements = document.querySelectorAll(".logged-in");
          const loggedoutelements = document.querySelectorAll(".logged-out");        
          loggedinelements.forEach(element => element.style.display = "block");
          loggedoutelements.forEach(element => element.style.display = "none");
          </script>';
        }
        else{
          echo '<script>
          const loggedinelements = document.querySelectorAll(".logged-in");
          const loggedoutelements = document.querySelectorAll(".logged-out");
          console.log("logged-out");
          loggedinelements.forEach(element => element.style.display = "none");
          loggedoutelements.forEach(element => element.style.display = "block");
          </script>';
        }
      ?>
</body>

</html>
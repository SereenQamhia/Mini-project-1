<?php 
  session_start();
 
  if (!isset($_SESSION['fruits_array'])) {
    // If not set, initialize the session array as an empty array
    $_SESSION['fruits_array'] = array();
}

if (!empty($_GET['name']) && !empty($_GET['price']) && !empty($_GET['details'])) {

    $name = $_GET['name'];
    $price = $_GET['price'];
    $details = $_GET['details'];

    $data = array('name' => $name, 'price' => $price, 'details' => $details);

    $_SESSION['fruits_array'][] = $data;

    header('location:home.php');
    exit; // Ensure no further code is executed after the redirect
}
// unset($_SESSION['fruits_array'][5]);
// session_unset();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Fruits store</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/d6692547f6.js" crossorigin="anonymous"></script>
</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="./images/Logo.png" alt="logo" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#carouselExample">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#add">Add-products </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#table">Products table</a>
      </li>
    </ul>
  </div>
</nav> 


  <div id="carouselExample" class="carousel slide" data-ride="carousel" >
            <!--Carousel Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExample" data-slide-to="1"></li>
                <li data-target="#carouselExample" data-slide-to="2"></li>
            </ol>
            <!--Carousel Slides-->
            <div class="carousel-inner inner" >
                <div class="carousel-item active">
                <img class="d-block w-100" src="./images/watermelon.jpg" alt="First slide">
                    <div class="carousel-caption">
                    <h3>Watermelon</h3>
        <p>Enjoy the refreshing taste of fresh watermelons!</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="./images/strawberry.jpg"  alt="First slide">
                    <div class="carousel-caption">
                    <h3 >Strawberries</h3>
        <p>Try our fresh strawberries. You will love them!</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="./images/Apples.webp" alt="Third slide">
                    <div class="carousel-caption">
                    <h3>Apples</h3>
        <p>Discover our variety of delicious apples.</p>
                    </div>
                </div>
            </div>
            <!--Carousel Previous Next Controls-->
            <a class="carousel-control-prev" href="#carouselExample" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

  <h2 id="add">Add new fruit</h2>
  <div id="fillData">
  <form  id="fruit" action="" method="get">
      <label for="" > Add fruit name :</label>
    <input type="text" name="name" Required>  <br>
      <label for=""> Add fruit price for kilo :</label>
    <input type="text" name="price" Required>   <br>
      <label for=""> Description :</label>
    <input type="text" name="details" Required>   <br>
    <label for=""> Attach an image:</label>
    <input type="file" >     <br>
    <button type="submit" class="btn1 btn-lg" > Add fruit</button>
  </form> 
  
  <img class="Image" src="./images/fruits.jpg" >
  </div> <br><br>
  <table class="table container" id="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Details</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($_SESSION['fruits_array'])): ?>
            <?php foreach ($_SESSION['fruits_array'] as $index => $fruit): ?>
                <tr>
                    <th scope="row"><?php echo $index + 1; ?></th>
                    <td><?php echo $fruit['name']; ?></td>
                    <td><?php echo $fruit['price'] .'JD'; ?></td>
                    <td><?php echo $fruit['details']; ?></td>
                    <td> <img src="./images/fruits.jpg" style="height:40px" > </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No fruits added yet.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>  <br><br>
<form method="get" action="products.php" >
  
  <h3 class="seeProducts"> Click here to see all the fruits in the store =></h3>
    <button type="submit" class="butn btn-lg"  > See Products</button>

        </form>  <br><br>


        <footer class="text-center text-lg-start footer ">
    <div class="container p-4 pb-0">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase">Subscribe to our Newsletter</h5>
                <form action="">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Your email address" aria-label="Your email address" aria-describedby="subscribeBtn">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit" id="subscribeBtn">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase">Follow Us</h5>
                <ul class="list-unstyled d-flex justify-content-center mb-2">
                    <li class="mr-3">
                        <a href="#" class="text-dark">
                        <i class="fa-brands fa-square-facebook fa-xl"></i>
                        </a>
                    </li>
                    <li class="mr-3">
                        <a href="#" class="text-dark">
                            <i class="fab fa-twitter fa-xl"></i>
                        </a>
                    </li>
                    <li class="mr-3">
                        <a href="#" class="text-dark">
                            <i class="fab fa-instagram fa-xl"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contact Us</h5>
                <p class="mb-0">Eidon, Irbid</p>
                <p class="mb-0">Email: info@Fruitify.com</p>
                <p class="mb-0">Phone: +962775521688</p>
            </div>
        </div>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © <?php echo date('Y'); ?> Fruitify. All rights reserved.
    </div>
</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
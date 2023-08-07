<?php 

session_start();
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
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php#add">Add-products </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php#table">Products table</a>
      </li>
    </ul>
  </div>
</nav> 
<div class="container2">
        <?php  if(!empty($_SESSION['fruits_array'])): ?>
          <?php    foreach($_SESSION['fruits_array'] as $index => $fruit): ?>

            <div class="card" style="width: 18rem;">
           <img class="card-img-top" src="./images/fruits.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title"><?php echo $fruit['name']; ?></h4>
    <h5 class="card-title"><?php echo 'price for kilo: '. $fruit['price'].'JD'; ?></h5>
    <p class="card-text"><?php echo 'Description: ' . $fruit['details']; ?></p>
    <p class="card-text"><?php echo "The date of picking: ". $fruit['date']; ?></p>
  </div>
</div>

<?php endforeach; ?>
        <?php else: ?>
          <h3 style="height: 380px;">There is no products added to display </h3>
            
        <?php endif; ?>

        </div>

        
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



        


           
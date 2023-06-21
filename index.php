<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Banks</title>
</head>
<body>

  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>


      <!-- Carosoul part start -->
      <section id="top" class="top">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="d-block w-100 img-fluid"  alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Money Bank</h5>
              <p>A Safe place for your money.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1601597111158-2fceff292cdc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Transfers Money flawlessly</h5>
              <p>Transfering Money is just easy as Dialing a Phone.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1620714223084-8fcacc6dfd8d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Banking is Even Easier</h5>
              <p>Visit Our New official Website.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
      <!-- CArosoul part end -->

        <!-- middle container start-->
        <section id="services" class="services">
        <div class="container my-5">
            <h1 class="text-dark text-center my-5">Our Services</h1>
            <div class="container">
            <div class="row row-cols-2">       
              <div class="col ">
              <h3>Manage Everything at one place</h3>   
                <div class="container col my-5">
                   <p class="lead"> View all oor clients</p>
                   <a href="customer.php"><button class="btn btn-primary" type="button" >Customers</button></a>
                </div>
                <div class="container col my-5">
                   <p class="lead">View transaction history</p>
                   <a href="transaction.php"><button class="btn btn-primary" type="button" >Transactions</button></a>
                </div>
               
              </div>

              <div class="col">
              <img src="https://images.unsplash.com/photo-1616514197671-15d99ce7a6f8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="rounded img-fluid float-right" alt="...">
              </div>
            </div>
            </section>

            <section id="about" class="about">
      <div class="container">

        <div class="section-title " >
          <h1 class="text-center my-5">About Us</h1>
        </div>

        <div class="row content">
          <div class="col-lg-6 " >
            <img class="rounded img-fluid float-left" src="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" />
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 " >
            <p>
            Welcome to Sparks Bank!
            <br>

At Sparks, we believe in empowering our customers and helping them achieve their financial goals. With a rich history spanning several years, we have built a reputation as a trusted financial institution dedicated to providing exceptional banking services and personalized solutions.
    <br><br>
    Join us at Sparks Bank and experience banking with a difference. Whether you're just starting your financial journey, expanding your business, or planning for a secure future, we are here to support you every step of the way. Discover the possibilities with [Bank Name] and let us help you realize your dreams.         
  </p>

            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>
             
            </div>
          </div>
        <!-- middle container end -->

         <!-- footer  -->
        <?php require_once './include/footer.php' ?>  
</body>

      <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<title>Booking Mobil PBB</title>

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .bawah {
        text-align: center;
      }
      .tengah {
        text-align: center;
      }
    </style>

    
  </head>
  <body>
    

  <header class="navbar justify-content-center py-3" style="background-color: #e3f2fd;">
      <ul class="nav nav-pills">
      <a href="home.php" class="nav-link">Home</a>
      <a href="booking.php" class="nav-link">Booking</a>
      </ul>
    </header>

<main>
    <?php 
    $nama = "Muhammad Ihza Syuib Lubis_1202204234";
    ?> 
  <section class="py-5 text-center container">
    <div >
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 >Welcome To EAD RENT</h1>
        <p class="lead text-muted">Find Your Best Deal, Here!</p>
      </div>
    </div>
  </section>

  <div class="album bg-light py-5">
    <div class="container">

      <div class="row row-cols-1  row-cols-md-3 g-3 tengah">
        
        <div class="card" style="width: 18rem;">
            <img src="https://suarariau.co/assets/berita/2022/2022-07-14-1657770259.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Tesla</h5>
            </div>
            <div class="tengah list-group list-group-flush">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"> 4 kursi</li>
                <li class="list-group-item">1500 CC</li>
                <li class="list-group-item">Matic</li>
              </ul>
            </div>
            
            <a type="button" class="btn btn-outline-primary" href="mesen.php">Book Now</a>
          
          </div>
          <div class="card" style="width: 18rem;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Toyota_Alphard_350_V6_%28III%29_%E2%80%93_Frontansicht%2C_2._April_2018%2C_Hongkong.jpg/1200px-Toyota_Alphard_350_V6_%28III%29_%E2%80%93_Frontansicht%2C_2._April_2018%2C_Hongkong.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Alphard</h5>
            </div>
            <div class="tengah list-group list-group-flush">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"> 6 kursi</li>
                <li class="list-group-item">3500 CC</li>
                <li class="list-group-item">Mewah</li>
              </ul>
            </div>
            <a type="button" class="btn btn-outline-primary" href="mesen.php">Book Now</a>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="https://s3.ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2022/02/06140204/e36.id_.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">BMW E36</h5>
            </div>
            <div class="tengah list-group list-group-flush">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"> 4 kursi</li>
                <li class="list-group-item">2500 CC</li>
                <li class="list-group-item">Manual</li>
              </ul>
            </div>
            <a type="button" class="btn btn-outline-primary" href="mesen.php">Book Now</a>
          </div>   
       
      </div>
    </div>
  </div>

</main>

<footer>
    <div class="card-footer text-muted">
        <p class="bawah"> <?php echo $nama ?></p>
      </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

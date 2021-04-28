<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Home Page</title>

  <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="header">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background-color: #e3f2fd;">
          <h4><a class="navbar-brand" href="#">Delhi Technological University</a></h4>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <!-- <a class="nav-link" href="/se_project/login.php">Login</a> -->
                  <a class="btn btn-success btn-sm" href="/se_project/login.php" role="button">Login</a>
                </li>
              </ul>
            </form>
        </div>
        </nav>
    
    </div>

    <!-- body part-->

      <div class="body">
    
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <!-- slideshow-->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="carousel-image" src="carousel1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Changing the way things work</h5>
                <p>Using AI to automate the process that once was physical</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="carousel-image" src="carousel.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Engineers like to solve problem</h5>
                <p>An investment in knowledge always pays the best interset.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="carousel-image" src="carousel2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    
        <div class="quote">
          <div class="quote-image">
            <img class="quote_image" src="tech_quote.jpg">
          </div>
    
          <div class="quote-text">
            <h2>"We are no longer teaching people how to communicate with systems, we are teaching systems how to communicate with people"</h2>
          </div>
        </div>
    
      </div>
    
     <div class="footer">
        <div class="jumbotron">
          <h1 class="display-4">Not registered yet?</h1>
          <p class="lead">Sign up and get your queries resolved in seconds</p>
          <p>Millions of students are already avoiding long lines in the admin. When will you?</p>
          <a class="btn btn-success btn-lg" href="/se_project/register.php" role="button">Sign Up</a>
        </div>
      </div> -->
    <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
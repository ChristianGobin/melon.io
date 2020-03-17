  <!DOCTYPE html>
  <html lang="en">

  <head>
      <?php
        define("TITLE", "Melon.io")
        ?>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!--My css-->
      <link rel="stylesheet" href="./style.css" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

      <title><?php echo TITLE ?></title>
  </head>

  <body>
      <?php
        ?>
      <div class="container">
          <!--Responsive Navbar-->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Melon</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                      </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                          Search
                      </button>
                  </form>
              </div>
          </nav>
          </br>
          <!-- Flex Box Login + Brief Intro-->
          <div class="d-flex flex-column flex-md-row align-items-center border-top">
              <!--Jumbotron Brief-->
              <div class="jumbotron p-2">
                  <h1 class="display-4">Melon</h1>
                  <p class="lead">
                      Melon is a platform for people to view the current market landscape of Farming throughout the world.
                  </p>
                  <hr class="my-4" />
                  <p>
                      Built with Bootstrap4 and Flexbox.
                  </p>
                  <p class="lead">
                      <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
                  </p>
              </div>
              <!-- Login form-->
              <div class="card card-signin p-2">
                  <div class="card-body">
                      <h5 class="card-title text-center">Sign In</h5>
                      <form class="form-signin">
                          <div class="form-label-group">
                              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus />
                              <label for="inputEmail"></label>
                          </div>

                          <div class="form-label-group">
                              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required />
                              <label for="inputPassword"></label>
                          </div>

                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck1" />
                              <label class="custom-control-label" for="customCheck1">Remember password</label>
                          </div>
                          <br />
                          <button class="btn btn-lg btn-success btn-block " type="submit">
                              Sign in
                          </button>
                          <hr class="my-4" />
                      </form>
                  </div>
              </div>
          </div>
          <br />
          <!--Flex Column-->
          <div class="d-flex flex-column">
              <!--additional features-->
              <div class="card p-2">
                  <div class="card-header">
                      Featured
                  </div>
                  <div class="card-body">
                      <h5 class="card-title">Top Fruit Yields of 2020</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">More</a>
                  </div>
              </div>
              <br />
              <!--main content with sidebar-->
              <div class="d-flex flex-column flex-md-row align-items-center justify-content-around">
                  <div class="card p-2" style="width: 18rem;">
                      <img class="card-img-top" src="./images/demi-deherrera-L-sm1B4L1Ns-unsplash.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Why Altitude Isn't Everything</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                  </div>
                  <div class="card p-2" style="width: 18rem;">
                      <img class="card-img-top" src="./images/adam-wilson-6ZZh8kOyW-4-unsplash.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">South American Earners</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                  </div>
                  <div class="card p-2" style="width: 18rem;">
                      <img class="card-img-top" src="./images/yanapi-senaud-6HR8vpjYUHo-unsplash.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Bitter Blends</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                  </div>
              </div>
              <div class="jumbotron jumbotron-fluid needs">
                  <div class="container">
                      <h1 class="display-4">Your Growing Needs</h1>
                      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                  </div>
              </div>
          </div>

          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  </html>
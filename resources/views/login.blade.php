<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reg2.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>registration</title>
</head>
<body><!-- Section: Design Block -->
<section class="fon">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <div class="container">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                      </ol>
                  
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="{{ asset('images/sapiens (4) 1.png') }}" alt="Los Angeles" style="width:500px; height: 500px;">
                          <div class="carousel-caption d-none d-md-block">
                            <h3>Улучшим город вместе</h3>
                          </div>
                        </div>
                  
                        <div class="item">
                        <img src="{{ asset('images/sapiens (5) 1.png') }}" alt="Chicago" style="width:500px; height: 500px;">
                          <div class="carousel-caption d-none d-md-block">
                            <h3>Вы сообщаете мы решаем</h3>
                          </div>
                        </div>
                      
                        <div class="item">
                        <img src="{{ asset('images/sapiens (6) 1.png') }}" alt="Chicago2" style="width:500px; height: 500px;">
                          <div class="carousel-caption d-none d-md-block">
                            <h3>Делай добро, Бро!</h3>
                          </div>
                        </div>
                  
                        <div class="item">
                        <img src="{{ asset('images/sapiens (7) 1.png') }}" alt="Chicago3" style="width:500px; height: 500px;">
                          <div class="carousel-caption d-none d-md-block">
                            <h3>Это мой город</h3>
                          </div>
                        </div>
                  
                        <div class="item">
                        <img src="{{ asset('images/sapiens (8) 1.png') }}" alt="Chicago4" style="width:500px; height: 500px;">
                          <div class="carousel-caption d-none d-md-block">
                            <h3>Улучшим город вместе</h3>
                          </div>
                        </div>
                  
                        <div class="item">
                        <img src="{{ asset('images/sapiens (9) 1.png') }}" alt="Chicago5" style="width:500px; height: 500px;">
                          <div class="carousel-caption d-none d-md-block">
                            <h3>Please give us 100</h3>
                          </div>
                        </div>
                  
                      </div>
                    </div>
                  </div>
              </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="ayau"></div>
            <div class="card" >
              <div class="card-body py-5 px-md-5">
                <h2 class="fw-bold mb-2  text-center">Autorization</h2>
                <form>
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                    <input type="email" style="border-color: #3300FF;" id="form3Example3" class="form-control" placeholder="Enter your email address here" />
                  </div>
  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4" >Password</label>
                    <input type="password" style="border-color: #3300FF;" id="form3Example4" class="form-control" placeholder="Enter your password here" />
                    <a class="text-muted" href="#!" style="right: 8rem;" >Forgot password?</a>
                  
                  </div>
  
                  
                  <!-- Submit button -->
                  <div class="d-grid gap-2">
                    <button class="btn btn-secondary btn-lg btn-block" style="background-color: #3300FF;" type="button">Log in</button>
                    <button class="btn btn-secondary btn-lg btn-block" type="button" onclick="document.location='reg'">Registration</button>

                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>

        </div>
      </div>
    </div>

  </section>

  <style>
  .fon{
    background-color: #C3DBFF;
    font-family: 'Poppins', sans-serif;
}
.card{
    background-color: black;
    min-height: 80vh;
    width: 400px;
}
</style>

<script>

var items = $('.carousel-inner .item');


function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  while (0 !== currentIndex) {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}


var shuffledItems = shuffle(items);


$('.carousel-inner').empty().append(shuffledItems);


$('.carousel-inner .item:first-child').addClass('active');

 </script>   
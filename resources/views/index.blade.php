<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="BebasNeue.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Righteous&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>CineClub</title>
</head>
<body >
@include("navbar")
  <div class="contenedor">

    <h2 class="mb-0">Películas vistas recientemente</h2>
    <div class="mx-2">
      <div class="row">    
        <div class="col">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-inner" >
              <div class="carousel-item active">
                <div class="row ">
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\GatoBoots_Hor.jpg" class="card-img" alt="Movie_1">
                      <div class="card-img-overlay">
                        <h5 class="card-title">El Gato con botas</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>     
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Oblivion_Hor.jpeg" class="card-img" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Oblivion</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>    
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Interestellar_Hor.jpg" class="card-img" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Interestellar</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>    
                </div>
              </div>
              <div class="carousel-item">
                <div class="row"> 
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\MountruoParis_Hor.jpg" class="card-img" alt="Movie_1">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>    
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Oblivion_Hor.jpeg" class="card-img" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Peabody & Sherman</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Peaboy_Hor.jpg" class="card-img" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>        
                </div>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>
  
    <h2 class="mt-4 mb-0">Siguientes Fechas</h2>
    <div class="mx-2">
      <div class="row">    
        <div class="col">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\BlackWidow.jpg" class="card-img_2" alt="Movie_1">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Black Widow</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>     
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Cruella.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Cruella 2021</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>    
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Encanto.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Encanto</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>    
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Lady.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Lady Bird</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Megamente.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Megamente</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Moxie.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Moxie</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Peaboy.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Peaboy</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\BlackWidow.jpg" class="card-img_2" alt="Movie_1">
                      <div class="card-img-overlay">
                        <h5 class="card-title">El Gato con botas</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>     
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Cruella.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>    
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Encanto.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>    
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Lady.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Megamente.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Moxie.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Peaboy.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>

    <h2 class="mt-4 mb-0">Posibles Estrenos </h2>
    <div class="mx-2">
      <div class="row">    
        <div class="col">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\GatoBoots_Hor.jpg" class="card-img_2" alt="Movie_1">
                      <div class="card-img-overlay">
                        <h5 class="card-title">El Gato con botas</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>     
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Oblivion_Hor.jpeg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>    
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Interestellar_Hor.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>    
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\Oblivion_Hor.jpeg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\MountruoParis_Hor.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\MountruoParis_Hor.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                  <div class="col-md m-0 p-0">
                    <div class="card text-bg-dark">
                      <img src="Images\MountruoParis_Hor.jpg" class="card-img_2" alt="Movie_2">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Mounstruo en París</h5>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>

            </div>
          </div>
        </div>   
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
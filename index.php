<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>medicIndex</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/848830b72b.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Including our scripting file. -->
    <script type="text/javascript" src="script.js"></script>
    <!-- Script Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
      window.addEventListener("load", function () {
        document.querySelector("body").classList.add("loaded");
      });
    </script>
  </head>
  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>
    <section id="home"></section>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg p-1 fixed-top navbar-dark nav-scrolled-text-shadow" id="navToggler">
      <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">medicIndex</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto text-uppercase fs-4">
            <!-- <li class="nav-item m-auto p-3">
              <a class="nav-link bawah p-0" aria-current="page" href="#home">Medicine</a>
            </li>
            <li class="nav-item m-auto p-3">
              <a class="nav-link bawah p-0" href="#menu">Pharmaceuticals</a>
            </li>
            <li class="nav-item m-auto p-3">
              <a class="nav-link bawah p-0" href="#gallery">Drug Classes</a>
            </li>
            <li class="nav-item m-auto p-3">
              <a class="nav-link bawah p-0" href="#reviews">More</a>
            </li> -->
            <li class="nav-item m-auto p-3">
              <a class="nav-link bawah p-0" href="http://medicindex.epizy.com/databse.php">Database</a>
            </li>
            <li class="nav-item m-auto p-3">
              <a class="nav-link bawah p-0" href="https://forms.gle/niHJtzzQ8jBiLQR38">Contribute</a>
            </li>
            <li class="nav-item m-auto p-3 pe-lg-0">
              <a class="nav-link bawah p-0" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="container-fluid jumbotron">
      <div class="container">
        <div class="jumbotron-text text-center">
          <!-- <h3 class="m-0 text-muted">MEDICINDX</h3> -->
          <h1 class="m-0">Find Your</h1>
          <h1 class="m-0 fw-bold">Medicine</h1>
          <p class="m-0 pt-3">Boost your productivity and build your</p>
          <p class="m-0">mood with a glass of coffee in the morning.</p>
          <div class="main-search-input-wrap">
          
          
            <div class="main-search-input fl-wrap">
              <div class="main-search-input-item">
                <input type="text" id="search" value="" placeholder="Search Products...">
              </div>
              <div id="display"></div>
              <button class="main-search-button">Search</button>
            </div>
          
          
          </div>
          <!-- <div class="jumbotron-button text-center mt-5">
            <a href="contact.html">
              <button type="button" class="btn btn-success pe-4 ps-4 pt-3 pb-3">Get Your Now</button>
            </a>
            <a href="contact.html">
              <button type="button" class="btn btn-link ms-3 pe-4 ps-4 pt-3 pb-3 text-white">Reservation</button>
            </a>
          </div> -->
        </div>
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Menu -->
    <div class="container menu" id="menu">
      <div class="container">
        <div class="row">
          <!-- <div class="col-12 col-md-3">
             <form>
              <button class="btn btn-primary btn-lg" type="submit" formaction="1klasse.html">Medicines (General) </button>
             </form>
          </div> -->
          <div class="row text-center">
            <div class="col">
              <div class="counter">
                <i class="fa fa-lightbulb-o fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                <p class="count-text ">Medicine (General)</p>
              </div>
            </div>
            <div class="col">
              <div class="counter">
                <i class="fa fa-lightbulb fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                <p class="count-text ">Medicine (Special)</p>
              </div>
            </div>
            <div class="col">
              <div class="counter">
                <i class="fa fa-registered fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
                <p class="count-text ">Brand Name</p>
              </div>
            </div>
            <div class="col">
              <div class="counter">
                <i class="fa fa-star fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
                <p class="count-text ">Pharmaceuticals</p>
              </div>
            </div>
          </div>
        </div>
          <!-- <div class="col-sm-6 col-lg-3 counter-container">
            <a href="https://medex.com.bd/brands">
                <div class="counter">
                    <i class="fa fa-registered fa-3x"></i>
                    <h2 class="timer count-title counter-value" data-count="23761">23761</h2>
                    <p class="count-text ">Brand Names</p>
                </div>
            </a>
        </div>
          <div class="col-12 col-md-3">
            <form>
              <button class="btn btn-primary btn-lg" type="submit" formaction="1klasse.html">Medicines (Special) </button>
             </form>
          </div>
          <div class="col-12 col-md-3">
            <form>
              <button class="btn btn-primary btn-lg" type="submit" formaction="1klasse.html">Brand Name </button>
             </form>
          </div>
          <div class="col-12 col-md-3">
            <form>
              <button class="btn btn-primary btn-lg" type="submit" formaction="1klasse.html">Pharmaceuticals </button>
             </form>
          </div>
        </div>
        
      </div> -->
      <!-- Sponsor -->
      <!-- <div class="row justify-content-center sponsor">
        <div class="col-lg-2 col-3 align-items-center d-flex">
          <img src="img/logo/abc.png" alt="" class="img-fluid" />
        </div>
        <div class="col-lg-2 col-3 align-items-center d-flex">
          <img src="img/logo/ceremix.png" alt="" class="img-fluid" />
        </div>
        <div class="col-lg-2 col-3 align-items-center d-flex">
          <img src="img/logo/nescafe.png" alt="" class="img-fluid" />
        </div>
        <div class="col-lg-2 col-3 align-items-center d-flex">
          <img src="img/logo/garudafood.png" alt="" class="img-fluid" />
        </div>
      </div> -->
      <!-- Menu Content -->
      <!-- <div class="row mt-lg-5 mt-4">
        <div class="col-md-6 d-flex order-md-1 position-relative">
          <div class="menu-text ps-2 mt-lg-5">
            <div class="menu-text-header">
              <h5 class="fs-5">Our Coffee</h5>
              <h3 class="fw-bold fs-1">Choose Your</h3>
              <h3 class="fw-bold fs-1">Favorite Coffee</h3>
              <p class="text-secondary">More than 30+ type of coffee are ready to serve by our professionals.</p>
            </div> -->
            <!-- Menu list -->
            <!-- <div class="menu-list d-flex mt-4 mb-4">
              <p class="m-0">Cappucino</p>
              <span class="ms-2 me-2">-</span>
              <p class="m-0">Late</p>
              <span class="ms-2 me-2">-</span>
              <p class="m-0">Arabica</p>
            </div> -->
            <!-- Menu Dropdown -->
            <!-- <div class="dropdown mb-4">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">More Menu</button> -->
              <!-- <ul class="dropdown-menu dropdown-menu-dark mt-2" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item coffee" href="#menu">Coffee</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item desserts" href="#menu">Desserts</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item breakfast" href="#menu">Breakfast</a></li>
              </ul> -->
            <!-- </div>
          </div> -->
          <!-- <div class="right-img-menu position-absolute d-none d-lg-block"></div>
        </div> -->
        <!-- Menu Image -->
        <!-- <div id="carouselExampleFade" class="carousel slide carousel-fade col-md-6 justify-content-center d-flex position-relative" data-bs-ride="carousel">
          <div class="carousel-inner carousel-menu me-md-3"></div>
        </div> -->
      </div>
    </div>
    <!-- Akhir Menu -->

    <!-- Quotes -->
    
    <!-- Akhir Quotes -->

    <!-- Gallery -->
    <!-- <div class="container-fluid" id="gallery">
      <div class="menu-title mb-3">
        <h2 class="text-center fw-bold">Gallery</h2>
      </div>
      <div class="container-fluid gallery">
        <div class="row"> -->
          <!-- Left Landscape -->
          <!-- <div class="col-lg-4 mt-lg-5">
            <div class="row">
              <a class="landscape-gallery" href="img/gallery/landscape1.png" data-fslightbox>
                <img src="img/gallery/landscape1.png" alt="" class="img-fluid" />
              </a>
            </div>
            <h2 class="mt-3 mb-3 text-center"></h2>
            <div class="row">
              <a class="landscape-gallery" href="img/gallery/landscape2.png" data-fslightbox>
                <img src="img/gallery/landscape2.png" alt="" class="img-fluid" />
              </a>
            </div>
          </div> -->
          <!-- Potrait -->
          <!-- <div id="carouselExampleControls" class="carousel slide col-lg-4 mt-3 mb-3" data-bs-ride="carousel">
            <div class="carousel-inner potrait-gallery">
              <div class="carousel-item active">
                <img src="img/gallery/potrait1.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="img/gallery/potrait2.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="img/gallery/potrait3.png" class="d-block w-100" alt="..." />
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div> -->
          <!-- Right Landscape -->
          <!-- <div class="col-lg-4 mt-lg-5">
            <div class="row">
              <a class="landscape-gallery" href="img/gallery/landscape3.png" data-fslightbox>
                <img src="img/gallery/landscape3.png" alt="" class="img-fluid" />
              </a>
            </div>
            <h2 class="mt-3 mb-3 text-center"></h2>
            <div class="row">
              <a class="landscape-gallery" href="img/gallery/landscape4.png" data-fslightbox>
                <img src="img/gallery/landscape4.png" alt="" class="img-fluid" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Akhir Gallery -->

    <!-- Reviews -->
    <div class="container-fluid" id="reviews">
      <div class="container">
        <div class="menu-title mb-5">
          <h2 class="fw-bold text-center">Health Tips</h2>
        </div>

        <div class="row review align-items-center justify-content-center">
          <!-- 1 -->
          <div class="col-lg-6 mb-3">
            <div class="review-box">
              <div class="box-top">
                <!-- <div class="profile">
                  <div class="profile-img">
                    <img src="img/review/review1.jpg" />
                  </div>
                  <div class="name-user">
                    <strong>Olivia</strong>
                    <span>@oliviavankovic</span>
                  </div>
                </div> -->
                <!-- <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div> -->
              </div>
              <div class="customer-comment">
                <!-- <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis
                  sed atque cumque.
                </p> -->
                <div id="tip">

                </div>
                <button onclick="newTip()">New Tip</button>
              </div>
            </div>
          </div>
          <!-- 2 -->
          <!-- <div class="col-lg-6 mb-3">
            <div class="review-box">
              <div class="box-top">
                <div class="profile">
                  <div class="profile-img">
                    <img src="img/review/review2.png" />
                  </div>
                  <div class="name-user">
                    <strong>Julian Wan</strong>
                    <span>@julianwan</span>
                  </div>
                </div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
              <div class="customer-comment">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis
                  sed atque cumque.
                </p>
              </div>
            </div>
          </div> -->
          <!-- 3 -->
          <!-- <div class="col-lg-6 mb-3">
            <div class="review-box">
              <div class="box-top">
                <div class="profile">
                  <div class="profile-img">
                    <img src="img/review/review3.png" />
                  </div>
                  <div class="name-user">
                    <strong>Vicky</strong>
                    <span>@vicccryad</span>
                  </div>
                </div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
              <div class="customer-comment">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis
                  sed atque cumque.
                </p>
              </div>
            </div>
          </div> -->
          <!-- 4 -->
          <!-- <div class="col-lg-6 mb-3">
            <div class="review-box">
              <div class="box-top">
                <div class="profile">
                  <div class="profile-img">
                    <img src="img/review/review4.png" />
                  </div>
                  <div class="name-user">
                    <strong>Mila Aunda</strong>
                    <span>@aundamila05</span>
                  </div>
                </div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
              <div class="customer-comment">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis
                  sed atque cumque.
                </p>
              </div>
            </div>
          </div> -->
        </div>
        <!-- <p class="text-center text-black-50 pt-3 read-all">Read all reviews <img src="https://img.icons8.com/ios-filled/14/000000/up-right-arrow.png" /></p> -->
      </div>
    </div>
    <!-- Akhir Reviews -->
    <div class="container-fluid quote-background p-0">
      <div class="container">
        <div class="quotes d-flex justify-content-center align-items-center text-center flex-column p-2">
          <div class="quote">Go to doctor if you are feeling unwell</div>
          <div class="garisbawah"></div>
          <div class="credit">Jimmy Hopkins</div>
        </div>
      </div>
    </div>
    <!-- Scroll Up Button -->
    <a href="#" class="go-top-btn"><i class="fa fa-angle-up"></i></a>

    <!-- Footer -->
    <section id="footer"></section>
    <!-- Akhir Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- My JS -->
    <script src="js/script.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/fslightbox.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/randomtip.js"></script>
  </body>
</html>

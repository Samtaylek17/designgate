<?php 
  include 'includes/db.php';
  include 'includes/header.php';
  include 'includes/navigation.php';
?>

<?php
    function sanitize($dirty){
      return htmlentities($dirty, ENT_QUOTES, "UTF-8");
  }

  $firstname = ((isset($_POST['firstname'])) ? sanitize($_POST['firstname']) : '');
if(!preg_match("/^[a-zA-Z ]*$/",$firstname)){
    $errors[] = 'Only Letters and whitespaces are allowed';
}

$lastname = ((isset($_POST['lastname'])) ? sanitize($_POST['lastname']) : '');
if(!preg_match("/^[a-zA-Z ]*$/",$lastname)){
    $errors[] = 'Only Letters and whitespaces are allowed';
}

$email = ((isset($_POST['email']))?sanitize($_POST['email']):'');
$email = trim($email);
$message = ((isset($_POST['message']))?sanitize($_POST['message']):'');
$message = trim($message);

if($_POST){
  $con->query("INSERT INTO contact (firstname, lastname, email, message) 
VALUES ('$firstname','$lastname','$email','$message')");
}            

            
        
?>
<div id="carouselExampleCaptions" class="carousel slide" style="min-height: 0;" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="banner" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url(images/1.jpg);"></div>
                  <div class="carousel-caption d-md-block">
                    <h2 class="animated bounceInRight" style="animation-delay: 1s">We Provide End-to-end <br><span>Vdc Consultancy, Advisory and Training</span></h2>
                    <h3 class="animated bounceInLeft" style="animation-delay: 2s">Our services are the choice of leaders <br>in the AECO industry</h3>
                  </div>
                </div>
                <div class="carousel-item">
                <div class="banner" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url(images/2.jpg);"></div>
                  <div class="carousel-caption d-md-block">
                    <h2 class="animated slideInDown" style="animation-delay: 1s">We focus on Design Innovation and process <span> automation by leveraging Bim and cad capabilities</span></h2>
                    <h3 class="animated fadeInUp" style="animation-delay: 2s">Our services are the choice of leaders <br>in the AECO industry</h3>
                  </div>
                </div>
                <div class="carousel-item">
                <div class="banner" style="background-image: linear-gradient(to right, rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url(images/3.jpg);"></div>
                  <div class="carousel-caption d-md-block">
                    <h2 class="animated zoomIn" style="animation-delay: 1s">We Provide Architecture, <span>Engineering and construction solutions</span></h2>
                    <h3 class="animated bounceInLeft" style="animation-delay: 2s">Our services are the choice of leaders <br>in the AECO industry</h3>
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

      <!-- <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 mt-5">
              <h1 class="line-bottom">We provide architecture and engineering solutions</h1>
              <p>We combine our experience as construction and engineering professionals with a passion for 
                technology to improve the way construction and engineering projects are designed, built and operated.
              </p>
              <a href="#" class="btn btn-primary">Get Started</a>
            </div>
            <div class="col-lg-5 ml-auto">
              
            </div>
          </div>
        </div>
      </div>
    </div> -->

    

  
<?php 
    $result = $con->query("SELECT * FROM services");
?>

    <div class="site-section" style="background-color: #ececec;">
      <div class="container">
        <div class="row align-items-stretch">
        <?php while($service = $result->fetch_assoc()) : ?>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <h3><span><?= $service['title'] ?></span></h3>
              <p><?= $service['description'] ?></p>
            </div>
          </div>
          <?php endwhile ?>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        
        <div class="row mb-5">
          <div class="col-md-4 mr-auto">
            <h2 class="line-bottom">We Are Leaders in Complex BIM Management and Delivery</h2>
          </div>
          <div class="col-md-8 text-right">
            <nav class="custom-tab nav" role="tablist"  class="nav nav-tabs" id="nav-tab" role="tablist">
              <a href="#nav-one" class="nav-item nav-link active" data-toggle="tab" role="tab"  aria-controls="nav-one" aria-selected="true">Technology</a>
              <a href="#nav-two" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-two" aria-selected="false">Quality</a>
              <a href="#nav-three" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-three" aria-selected="false">Staff</a>
            </nav>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                <div class="row">
                  <div class="col-md-7">
                    <img src="images/TECH.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h2 class="line-bottom">Technology</h2>
                    <p>We combine our experience as construction and engineering professionals with a passion for technology
                      to improve the way construction and engineering projects are designed, built and operated.
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                <div class="row">
                  <div class="col-md-7">
                    <img src="images/QUALITY.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h2 class="line-bottom">Quality</h2>
                    <p>DesignGate works leaders in the architecture, real estate, engineering and construction industries.</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                <div class="row">
                  <div class="col-md-7">
                    <img src="images/STAFF.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h2 class="line-bottom">Staff</h2>
                    <p>We have highly driven, smart and passionate architects, engineers, cost managers, project managers and portfolio managers
                      to help transform your brief into reality.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mx-auto">
      <h2 class="line-bottom text-center">Digitizing the Built Environment</h2>
    </div>
    <div class="row justify-content-center mb-5">
    <iframe width="800" height="450" src="https://www.youtube.com/embed/SIl2CUF1TIc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    
    <div class="testimonial-area">
        <div class="container">
          <div class="row">
          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Testimonials</h2>
          </div>
            <div class="col-md-12">
              <div class="owl-carousel test-slides" id="testimonial-carousel">
                <div class="item">
                  <div class="single-testimonial">
                    <div class="img-area">
                      <img src="images/hero_1.jpg" alt="">
                    </div>
                    <div class="testi-text">
                      <h4>Jane Doe <span>Web Designer</span></h4>
                      <p>Lorem Ipsum dolo sit amet, consectetur adipisicing elit. 
                        Cumque dolorem dolores  fugit incidunt nemo voluptate.</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="single-testimonial">
                    <div class="img-area">
                      <img src="images/hero_2.jpg" alt="">
                    </div>
                    <div class="testi-text">
                      <h4>James Fisher <span>Programmer</span></h4>
                      <p>Lorem Ipsum dolo sit amet, consectetur adipisicing elit. 
                        Cumque dolorem dolores  fugit incidunt nemo voluptate.</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="single-testimonial">
                    <div class="img-area">
                      <img src="images/hero_3.jpg" alt="">
                    </div>
                    <div class="testi-text">
                      <h4>John Doe <span>Graphics Designer</span></h4>
                      <p>Lorem Ipsum dolo sit amet, consectetur adipisicing elit. 
                        Cumque dolorem dolores  fugit incidunt nemo voluptate.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- <div class="site-section">
      <div class="container">
        <div class="row mb-4">

          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Our Projects</h2>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="images/BIM design.jpg" style="height: 300px" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">BIM Design Management</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>We stand where building design and construction
                  technology intersects to positively convert your project specific goals of lean construction, BIM
                  modeling 
                </span></a>
              </div>

            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="images/Modern Kitchen Design.png" style="height: 300px;" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">Modern Kitchen Design</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>Renovate the house 2</span></a>
              </div>

            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="images/VR Simulation.jpg" style="height: 300px;" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">VR Simulation</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>Renovate the house 2</span></a>
              </div>

            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="images/VR-AR Simulation.jpg" style="height: 300px; width: 100%" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">VR &mdash; AR simulation</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>Renovate the house</span></a>
              </div>

            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="images/img_1.jpg" style="height: 300px;" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">Renovate</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>Renovate the house 2</span></a>
              </div>

            </div>
          </div>

          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="images/img_2.jpg" style="height:300px" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">Renovate</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>Renovate the house 2</span></a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div>
      <div class="container">
        <div class="row mb-4">

          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Our Blog</h2>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="https://media.licdn.com/dms/image/C4D12AQHO7A0wMc9fzQ/article-cover_image-shrink_720_1280/0?e=1583366400&v=beta&t=bQpm5sQzXiwYxjMczqKEjQZEnUfqHhfP8A95ZeO1JMo" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Selling the Benefits of BIM</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Building Information Modelling has become a buzzword in the AEC 
                  industry but while BIM is believed to enhance collaboration, increase efficiency... <a href="https://www.linkedin.com/pulse/selling-benefits-bim-design-gate/">Read More</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="https://media.licdn.com/dms/image/C4D12AQEDaItSHnEhtQ/article-cover_image-shrink_720_1280/0?e=1583366400&v=beta&t=Lny0vZakQil4IlUn-61olSN6Zod2oFGHRFXRQQYU1uU" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Digital-Disruption with BIM and Internet of Things (IoT)</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Did you know we spend 20+ hours of each day in buildings or some form of shelter? This statistics amongst other growing 
                  concerns about global warming further...<a href="https://www.linkedin.com/pulse/how-iot-impacting-construction-industry-design-gate/">Read More</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="https://media.licdn.com/dms/image/C4D12AQHKlohx715xKQ/article-inline_image-shrink_1000_1488/0?e=1583366400&v=beta&t=SOdkvHApfacR0oK57TOXi4GOy0RQ2bDL85tKGI6HboE" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Building Information Modelling</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Every process has a sequence, and BIM is not an exception. One can never discuss about BIM without reference to the 
                  levels of maturity and their significance... <a href="https://www.linkedin.com/pulse/levels-bim-design-gate/">Read More</a></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
<?php include "includes/footer.php" ?>

    
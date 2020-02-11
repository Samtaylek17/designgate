<?php 
  include "includes/db.php";
  include 'includes/header.php';
  include 'includes/navigation.php';
?>

      <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>About Us</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php 
        $result = $con->query("SELECT * FROM team ORDER BY name");
    ?>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
            <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto">
            <h2>Car Company</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit suscipit, repudiandae similique accusantium eius nulla quam laudantium sequi.</p>
            <p>Debitis voluptates corporis saepe molestias tenetur ab quae, quo earum commodi, laborum dolore, fuga aliquid delectus cum ipsa?</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5 section-2-title">
          <div class="col-md-6">
            <h2 class="mb-4">Meet Our Team</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis provident eius ratione velit, voluptas laborum nemo quas ad necessitatibus placeat?</p>
          </div>
        </div>
        <?php while($team = $result->fetch_assoc()) : ?>
        <div class="row align-items-stretch">
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/<?= $team['picture'] ?>" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2><?= $team['name'] ?></h2>
                <p><?= $team['role'] ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto">
            <h2>Our History</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit suscipit, repudiandae similique accusantium eius nulla quam laudantium sequi.</p>
            <p>Debitis voluptates corporis saepe molestias tenetur ab quae, quo earum commodi, laborum dolore, fuga aliquid delectus cum ipsa?</p>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Testimonials</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="testimonial-3">
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure id accusantium similique temporibus nihil blanditiis adipisci aperiam, sapiente suscipit vero.</blockquote>
              <div class="vcard d-flex align-items-center">
                <div class="img-wrap mr-3">
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div>
                  <span class="d-block">John Smith</span>
                  <span class="position">Client From Facebook</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial-3">
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure id accusantium similique temporibus nihil blanditiis adipisci aperiam, sapiente suscipit vero.</blockquote>
              <div class="vcard d-flex align-items-center">
                <div class="img-wrap mr-3">
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div>
                  <span class="d-block">John Smith</span>
                  <span class="position">Client From Facebook</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <?php include "includes/footer.php" ?>
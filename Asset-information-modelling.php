<?php
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
?>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerbanner" style="background-image: url('images/hero_2.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Asset Informatiom Modelling</h1>
              <p>Implementing BIM in Construction</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
            <h3>Asset Information Modelling</h3>
                <p>
                As-Built Modelling and Development
                Our Revit drafters convert blueprints and red-markup drawings with alterations in building designs and create as-built 3D models of building design plans to take informed decisions. We document every change made by sub-contractors, MEP contractors and architectural consultants in the final plans based on spatial conditions at actual sites to keep 3D BIM models updated with VDC services.

                </p>
                
                <p>Our as-built drafting and drawing services help engineers to 
                    convert scanned data of constructed facilities to digitize the 
                    actual physical conditions for refurbishment. From archaic buildings to 
                    blueprints of new construction plans, we at DesignGate, model everything for 
                    contractors to have ready information 
                    in a single digital model of the present condition of the building.

                </p>
                <h4>Our as-built modeling services include:</h4>
                    <ul>
                    	<li>Converting laser scan images to as-built 3D BIM models</li>
                    	<li>Developing building models as per LOD 500 standards</li>
                    	<li>Deliver installation plans from as-built models for efficiency</li>
                    	<li>Convert 2D architectural drafts into final accurate plans using AutoCAD Civil</li>
                    </ul>
                    <p>We help site engineers and contractors for accuracy in decisions and tackle with unforeseen circumstances by converting 2D drafts and plans into final actual as-built plans to phase construction efficiently. 
                        By partnering with us for as-built and BIM outsourcing services you are benefited across enlisted areas.
                    </P>
                    <h4>Benefits of as-built modelling</h4>
                    <ul>
                    	<li>Eliminating multiple documents for building design</li>
                    	<li>Ease in fetching actual facility conditions</li>
                    	<li>No hard copies for drawing and technicalities referrals</li>
                    	<li>Efficient installation of MEPF equipment as per space availability</li>
                    	<li>Quick decision-making during refurbishment of facilities</li>

                    </ul>
            </div>
            <div class="col-md-4 ">
                <div class="post-entry-1 h-100">
                    <img src="images/BIM-ooo.jpeg" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
            <div class="col-7 text-center mb-5">
                <h2 class="mt-5">Contact Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-5" >
                    <form action="contact.php" method="post">
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                        <input type="text" name="firstname" class="form-control" placeholder="First name" value="<?= $firstname ?>">
                        </div>
                        <div class="col-md-6">
                        <input type="text" name="lastname" class="form-control" placeholder="Last name" value="<?= $lastname ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                        <input type="text" name="email" class="form-control" placeholder="Email address" value="<?= $email ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                        <textarea name="message" id="" class="form-control" value="<?= $message ?>" placeholder="Write your message." cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 mr-auto">
                        <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-lg-4 ml-auto">
                    <div class="bg-white p-3 p-md-5">
                    <h3 class="text-black mb-4">Contact Info</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block mb-3">
                        <span class="d-block text-black">Address:</span>
                        <span>55 Moleye Street, Alagomeji, Yaba, Lagos</span></li>
                        <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+2347035157417</span></li>
                        <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>support@realdesigngate.com</span></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    
    
    <?php include 'includes/footer.php' ?>
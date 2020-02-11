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
              <h1>3D BIM Modelling</h1>
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
            <h3>3D BIM Modelling</h3>
                <p>
                    We deliver BIM project implementation plan to empower construction company profesionals gain an edge over building designs
                    and construction management processes.
                </p>
                
                <p>We hold expertise in delivering BIM services for mixed-use buildings, shopping malls, theme parks, hospitals, airports, railways, residential townships, industrial plants and much more. Our highly experts BIM teams of architects, structural, civil and MEP engineers deliver efficient 3D plans and layouts along with as-built 3D model.

                    Our experienced BIM consultants and managers leverage Autodesk Revit to deliver virtual design and construction (VDC) solutions and 3D BIM coordinated models. We help contractors, architects, consultants, engineers and manufacturers by providing clash-free 3D BIM models according to IFC and COBie standards for design visualization and taking informed decisions.

                    3D BIM modeling services offerings:
                    Convert 2D AutoCAD drafts to 3D BIM models in Revit/BDS
                    3D graphical representation of building and construction plans
                    Design coordination in Common Data Environment (CDE)
                    3D BIM coordinated models as per LOD 100 to LOD 500 AIA standards
                    Fabrication & installation drawings of MEP & HVAC elements
                    Develop 4D BIM models for construction timeline from 3D BIM models

                    Our BIM consultants’ partner with your engineering and construction companies across the USA, UK, Australia, Canada, Europe and the Middle East to eliminate interferences in designs by collaboration of all disciplines and preparing BIM-ready 3D models.

                </p>
                <h4>Benefits of 3D BIM modeling services:</h4>
                    <ul>
                    	<li>Design data management with 3D BIM objects</li>
                    	<li>Quick clash detection and resolutions</li>
                    	<li>Seamless construction planning</li>
                    	<li>Ease in transition from 3D models to 4D BIM</li>
                    	<li>Enabled offsite construction</li>
                    	<li>Minimized on-site risks</li>
                    	<li>Coordination with sheet metal contractors and fabricators</li>
                    	<li>Coordination with building product manufacturers</li>
                    	<li>Smooth workflows of general contractors and sub-contractors</li>

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
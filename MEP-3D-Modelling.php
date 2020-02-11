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
              <h1>MEP 3D Modelling and Coordination Services</h1>
              <p>MEP Drafting & Modelling</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
                <h3>MEP 3D Modelling and Coordination Services</h3>
                <p>Our MEP modeling services includes creation of 3D rendered MEP layout and Revit family creation for MEPF as well as plant room equipment along with 2D MEP coordination drawings.

                    We use Autodesk Revit MEP to develop clash free 3D models by integrating structural and architectural designs with MEP layout to create one single model for the building designs for delivering MEP coordination services outsourced to us. Being a BIM consultant, we also deliver quick clash resolutions services using Navisworks for coherent design development and avoiding reworks during construction phase. We also deliver 2D MEP coordination drawings for MEP components, HVAC equipment, duct systems and plat room layout for efficient energy consumption.

                    From converting MEP drafts into 3D models in AutoCAD, we also deliver sustainable MEP layouts for least energy consumption and effective synchronization of building elements and structural components. We create comprehensive 3D models of MEP layouts, pipework, HVAC planning and installation, risers, carriers and many more along with as-built BIM models to use Augmented Reality and Virtual Reality technology for design visualization and approvals.
                </p>
                <h4>What we offer under MEP 3D modeling services:</h4>
                    <ul>
                        <li>2D Detailed engineering drawings for MEP components</li>
                        <li>Fabrication, assembly and installation drawings in AutoCAD Civil</li>
                        <li>Revit models and BIM objects for pumps, boilers, compressors etc.</li>
                        <li>Plumbing, drainage, electrical fixtures and mechanical equipment drawings</li>
                        <li>Support for prefabrication and site installation of MEP components</li>
                        <li>Construction stage sequencing</li>
                        <li>Cost estimation and quantity takeoffs</li>
                        <li>Tender and Bidding documentation assistance with BIM</li>
                    </ul>
                    <p>Our engineers with CAD experts have delivered MEP models to industries that include educational campuses, hotels, hospital buildings, resorts, airport terminal buildings, railway stations and much more. Having gained a long-standing experience in solving engineering design bottlenecks early with 3D modeling capabilities we devise coherent construction stages resulting in profitable outcomes for construction firms and contractors.</p>
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
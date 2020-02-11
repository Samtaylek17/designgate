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
              <h1>BIM Content Creation</h1>
              <p>Revit Family Creation Experts</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
                <h4>
                    We deliver BIM project implementation plan to empower construction company profesionals gain an edge over building designs
                    and construction management processes.
                </h4>
                <h3>BIM Content Creation</h3>
                <p>We deliver BIM content creation services to engineers, architects and building product manufacturers to align their needs with building contractors in developing efficient as-built 3d models. Our Revit modelers develop BIM content and convert models from CAD to BIM for retail and commercial furniture manufactures as well as shop fitting equipment for product data templates (PDT).

Our teams of architects, MEP and structural engineers and drafters develop BIM objects for architectural ornamental products, louvers, grills, metal stairs, rails, etc., structural building products including columns, studs, foundation, pillars, roofs etc. and various plumbing fittings, electrical wires, trays and cables. Our 3D BIM modeling and consulting services are dedicated to address the needs of Virtual Reality (VR) and Augment Reality (AR) firms to achieve BIM implementation on a full scale.

                </p>
                <h4>Service offerings for BIM content creation:</h4>
                    <ul>
                        <li>Standard BIM objects of building products for direct downloads</li>
                        <li>Revit Families creation as per NBS and other open BIM standards</li>
                        <li>Cleanup manufacturing drawings and models to BIM-ready content</li>
                        <li>Developing BIM models as pore LOD standards</li>
                        <li>Translating SolidWorks models in BIM content</li>
                        <li>Converting 2D drawings to 3D BIM content and libraries</li>
                    </ul>
                <p>At DesignGate we deliver geometrical attributes for accuracy in spatial arrangement and floor space occupancy for efficiency in design planning.

                Talk to us today and we will create BIM libraries for designers and manufacturers alignment.
                </p>
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
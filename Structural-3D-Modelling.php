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
              <h1>Structural 3D Modelling</h1>
              <p>Experience with Tekla & Revit</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
                <h3>Structural 3D Modelling</h3>
                <p>Our structural 3D modeling outsourced services include everything from developing structural drawings to detailed 3D models in CAD and BIM for better visualization and coordination with architects, MEP engineers and steel fabricators on a large scale and low prices. Our Revit drafters and CAD detailers partner with engineering design firms to work closely with structural design engineers and facilitate accurate 2D & 3D drawings and structural 3D models for seamless design communication and BIM implementation needs.

                    We are a building design support company from India, endeavoring to reduce the manufacturing and construction development time by delivering comprehensive structural design models which can be visualized holistically with AR/VR technology. We deliver 3D structural models of structural elements such as foundation, beams, columns, roofs and complete as-built models of industrial, residential and commercial buildings, skyscrapers, bridges, dams, roads, highways and much more.

                </p>
                <h4>Our specialization in structural 3D modeling services:</h4>
                    <ul>
                    	<li>3D modeling of structural steel and wooden frames</li>
                    	<li>RCC modeling of villas, hotels, resorts etc.</li>
                    	<li>Precast and Prefabrication modeling in BIM</li>
                    	<li>Parametric BIM modeling</li>
                    	<li>Walls, stairs, lintel modeling</li>
                    	<li>FEA Design analysis and validation using ANSYS</li>
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
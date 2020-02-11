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
              <h1>Cobie BIM Services</h1>
              <p>Cobie BIM Data Exchange Support</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
            <h3>Cobie BIM Services</h3>
                <p>
                We deliver COBie modeling for building design and construction planning for achieving better coordination between engineers, design firms, architectural consultants and each individual stakeholder. As a complete BIM service provider, we work with our global 
                clients and deliver 3D models as per BIM standards in UK and USA as well as NIBIM standards.
                </p>
                
                <p>We use Autodesk Revit for delivering models in COBie format for data exchange across disciplines through COBie Spreadsheets and templates, enhance PDTs of various building products, and implement BIM automation as well as BIM analytics. Our in-house teams of structural and MEP engineers as well as architectural drafters partner with external manufacturers, fabricators
                    and facility managers to empower them with ready information for building construction and operations.
                </p>
                <h4>COBie Modeling service offerings:</h4>
                <p>There are very significant cost benefits that could result from an integrated system providing accurate and complete information, including the following:</p>
                    <ul>
                    	<li>Develop spreadsheets of building component details for COBie standardization</li>
                    	<li>Maintaining a database for quick data retrieval during construction, operation and maintenance</li>
                    	<li>Developing BIM 3D models with COBie format for data exchange</li>
                    	<li>Create architectural, structural and MEP models for information interchangeability</li>
                    	<li>Capture the project data and include list of parts</li>
                    	<li>Maintain part list, count, replacement/maintenance and warranties for facility management</li>
                    	<li>Full spectrum support to maintenance engineers and facility managers with ready data availability</li>
                    </ul>
                    <p>Ensure smooth your facility construction and maintenance today.</p>
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
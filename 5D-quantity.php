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
              <h1>5D BIM Quantity Take-off and Cost Estimation</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
            <h3>5D BIM Quantity Take-off and cost Estimation</h3>
                <h4>Construction Cost Estimation Experts</h4>
                <p>
                    We deliver accurate cost estimation along with quantity takeoffs 
                    using virtual as-built intelligent 3D models for building construction 
                    projects having multiple complexities. We partner with large construction companies, architects, engineers and contractors to help them evaluate near accurate costs for bidding, winning tender approvals, order quantity for prefabrication and construction billing solutions through VDC solutions.
                </p>
                
                <p>Our in-house teams of civil engineers along with teams experienced in BIM Consulting and implementation aids cost estimation through software tool help contractors predict the material requirements planning, and evaluate costs of entire project including labor costs. We develop highly interactive and virtually intelligent 
                    BIM models for execution of construction project plans, assembly and installation of components.
                </p>
                <p>
                    Our teams help design companies and quantity surveyors leverage 
                    rising technology like Blockchain and cloud computing combine by developing IFC open formant BIM models and reuse design data.
                </p>
                <h4>5D BIM construction cost estimation service offerings:</h4>
                    <ul>
                    	<li>Converting 4D BIM models to 5D for accurate cost planning</li>
                    	<li>Tagging and labeling various building elements</li>
                    	<li>Preparing BOQs, QTOs and order for lean construction</li>
                    	<li>Managing multidisciplinary projects with RFIs and other documents</li>
                    	<li>Integrate fabrication drawings with BIM models for accurate BOMs</li>
                    	<li>Deliver BIM models in IFC open format to adopt design changes</li>
                    	<li>Revit families of MEPF equipment to evaluate quantity takeoffs</li>
                    </ul>
                    <p>Having a long-standing experience and a scalable technology infrastructure, we work closely with our clients, on and offshore, requirements of cost mapping with BIM platforms. We use Autodesk Revit along with BIM cost estimating software for cost modeling of as-built 
                        building models and coordinate with cost planning divisions and sub-contractors.
                    </p>
                    <p>
                    We have executed a significant number of 5D BIM cost estimation projects. We remain a trustful partner for 5D BIM services to our clients with highly qualified teams of engineers, architects, BIM specialists and CAD drafters.
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
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
              <h1>4D BIM Services</h1>
              <p>4D Scheduling and Planning Experience</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
            <h3>4D BIM Services</h3>
                <h4>4D Scheduling and Planning Experience</h4>
                <p>
                We deliver spatial coordination and simulation videos for 4D BIM construction sequencing and plans.
                </p>
                
                <p>Our BIM experts have competence in delivering 4D 
                    planned construction sequencing and time-liner 
                    videos using Excel entities or Primavera in Navisworks for 
                    efficiently strategizing site logistics and eliminating scheduling conflicts. We deliver Revit 4D BIM services to construction firms and contractors engaged in developing hotels, hospital buildings, airports, and various residential townships along with commercial buildings.
                </p>
                <p>
                We partner closely with the site engineers to help them take informed decision with digital Gantt Charts and phasing outputs for site logistics and planning during construction stage set against predefined timelines. We create sequential 4D animation of building construction activities with timed duration and activities to visualize the progress and compare actual construction against planned.
                </p>
                <h4>4D BIM simulation services offerings:</h4>
                
                    <ul>
                        <li>Converting 3D BIM models to 4D sequencing/phasing outputs</li>
                        <li>Forecast completion and establish milestones before construction begins</li>
                        <li>Clash free mapping of construction activities</li>
                        <li>Generating efficient RFIs for interdisciplinary simultaneous activities</li>
                        <li>Construction activity phasing and planning in real-time</li>
                        <li>Monitor and track activity progress</li>
                        <li>Extract IFC reports from as-built BIM models for data sharing</li>
                    </ul>
                    <p>Our BIM managers will work closely with your engineers to deliver accurately error free construction management solutions at 
                        macro-levels and deliver augmented and virtual reality compatible BIM models.
                    </p>
                    <h4>Benefits of partnering with us for 4D BIM services</h4>
                    <ul>
                    	<li>Optimized construction scheduling for complex projects</li>
                    	<li>Eliminating reworks by developing efficient schedules</li>
                    	<li>Resolving conflicts and delays in supplies at site</li>
                    	<li>Reduced time and cost overruns by misconstructions</li>
                    	<li>Easy project management with a visual sequencing of tasks</li>
                    	<li>Smart risk management through detailed information beforehand</li>
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
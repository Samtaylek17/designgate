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
              <h1>Trainings and Advisory Services</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
            <h3>Trainings and Advisory Services</h3>
                <h4>BIM Trainings and Advisory Services</h4>
                <p>
                Building Information Modelling (BIM) is more than just working in a digital environment. 
                It’s about ensuring teams have the relevant knowledge and 
                capabilities to achieve best practice and the continued drive to commit to it.
                </p>
                
                <p>
                    Developed in conjunction with leading industry consultants and trends, 
                    our BIM training courses provide the most relevant and up-to-date information in the market. 
                    You’ll learn how to effectively manage information across all stages of your construction projects.
                </p>
                <p>
                    Wherever you are on your journey, whatever your role, we have a course to help you be more efficient at what you do.
                </p>
                <h4>Here is a list of our BIM courses:</h4>
                
                    <ul>
                    	<li>3D Architecture Modelling</li>
                    	<li>3D Structural Modelling</li>
                    	<li>3D HVAC Modelling</li>
                    	<li>3D Electrical Modelling</li>
                    	<li>3D Water Distribution Systems Modelling</li>
                    	<li>3D Fire-Fighting and Sprinklers Systems Modelling</li>
                    	<li>4D Construction Simulation</li>
                    	<li>5D Cost Management Training </li>
                    	<li>BIM for FM Training</li>
                    	<li>VR and AR Development</li>
                    	<li>Document Management and Workflow Automation</li>
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
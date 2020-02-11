<?php 
  require_once 'includes/db.php';
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
      <div class="ftco-cover-1 overlay innerbanner" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Contact Us</h1>
              <p>We are the choice of leaders in the Architecture, Engineering and Construction Industry</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Contact Us</h2>
          <p>We would love to hear from you. Kindly take a moment to fill the form below and describe 
            your project requirements. We will get back to you shortly.
          </p>
        </div>
      </div>
        <div class="row">

        <?php 
            if($_POST){
              $con->query("INSERT INTO contact (firstname, lastname, email, message) VALUES ('$firstname','$lastname','$email','$message')");
            }
              
            
        ?>

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
                  <span>55, Moleye Street, Alagomeji, Yaba, Lagos</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+2347035157417</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>support@realdesigngate.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    
    <?php include 'includes/footer.php' ?>
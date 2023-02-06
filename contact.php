<!DOCTYPE html>
<html lang="en">
<?php 
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  echo'<script>console.log("posted");</script>';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

    // the message
    $msg = "Message From " . $name . "\n" ."Email address: " . $email . "\n" . $message;

    // use wordwrap() if lines are longer than 70 characters
    //$msg = wordwrap($msg,70);

    // send email
    if(mail("jonny.whittle@sky.com",$subject,$msg)){
      echo'<script>hidecontactform();</script>';
    }
    else{
      echo'<script>console.log("email not sent");</script>';
    }

}else{
  echo'<script>console.log("not posted");</script>';
}


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <script src="https://kit.fontawesome.com/ab972f586c.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css" media="screen" type="text/css">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Jonny Whittle</title>
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg">
        <div class="container small-nav">
            <a class="navbar-brand" href="index.html">Jonny Whittle</a>
            <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><i class="fa-solid fa-burger"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link navl-left" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navl-left" href="my-work.html">My work</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Me</a>
                </li>
            </div>
        </div>
    </nav>

    <!-- My Work -->
    <div class="container container-margin-y">
        <div class="row jc mt-3">
            <div class="col text-center">
                <h1 class="main-header mb-5">Contact Me</h1>
                <p>
                    I'm seeking out opportunities to collaborate with companies / agencies / individuals.
                    <br>
                    Easily contact me using my form below.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="form-submitted"  style="display:none;">
                    <h1 class="section-header">Form Submitted (123)</h1>
                </div>
                <form id="contact-form" class="form-horizontal" onsubmit="hidecontactform()" action="" role="form" method="post">
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control" id="subject" placeholder="SUBJECT" name="subject" value="" required>
                        </div>
                    </div>
                    <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
                    <button class="black-btn w-100 mt-3" id="submit1" type="submit" value="SEND">SEND <i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="container container-margin-y">
        <div class="row ml-0">
            <h4 class="reach-out">Or reach out a different way.</h4>
        </div>
        <div class="contact-socials">
            <div class="contact-wrapped">
                <a href="mailto:jonny.whittle@sky.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                <a href="tel:07710811554" target="_blank"><i class="fa-solid fa-phone"></i></a>
                <a href="https://www.linkedin.com/in/jonny-whittle/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.facebook.com/jonny.whittle.5/" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="https://www.instagram.com/jonny_whittlee/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
            <div class="contact-wrapped ml-3">
                <a href="mailto:jonny.whittle@sky.com" target="_blank">Jonny.whittle@sky.com</a>
                <a href="tel:07710811554" target="_blank">07710811554</a>
                <a href="https://www.linkedin.com/in/jonny-whittle/" target="_blank">www.linkedin.com/in/jonny-whittle/</a>
                <a href="https://www.facebook.com/jonny.whittle.5/" target="_blank">www.facebook.com/jonny.whittle.5/</a>
                <a href="https://www.instagram.com/jonny_whittlee/" target="_blank">www.instagram.com/jonny_whittlee/</a>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
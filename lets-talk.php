<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab972f586c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="icon" type="image/x-icon" href="assets/images/new-images/favicon.png">
    <!-- <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="assets/css/style-new.css" media="screen" type="text/css">
    <title>Jonny Whittle</title>
</head>
<body class="black-bg">
    <?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }

   if (empty($errors)) {
       $toEmail = 'example@example.com';
       $emailSubject = 'New email from your contact form';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) {

           header('Location: thank-you.html');
       } else {
           $errorMessage = 'Oops, something went wrong. Please try again later';
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }
}

?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand hover" href="index.html"><img src="assets/images/new-images/jonny-logo-white.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
        </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase hover" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase hover" href="work.html">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase hover" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase nav-btn active-btn" href="lets-talk.php">Lets Talk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="black-bg">
        <div class="container container-top contact bottom-pad">
            <div class="row">
                <div class="col getintouch">
                    <img src="assets/images/new-images/me-reflected.png" alt="">
                    <div class="social-row">
                        <div class="button-btm-wrapped">
                            <a href="https://www.linkedin.com/in/jonny-whittle/" class="circle-btn hover-white" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                        <div class="button-btm-wrapped">
                            <a href="mailto:jonny.whittle@sky.com" class="circle-btn hover-white" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                        <div class="button-btm-wrapped">
                            <a href="https://github.com/Jonnywdev/Jonny_Whittle" class="circle-btn hover-white" target="_blank"><i class="fa-brands fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col contact-me">
                    <small class="grey-text text-uppercase">contact</small>
                    <h1 class="white lgit-title">Let's get in touch.</h1>
                    <form  method="post" id="contact-form">
                        <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                        <p>
                          <input name="name" type="text" placeholder="Your Name"/>
                        </p>
                        <p>
                          <input style="cursor: pointer;" name="email" type="text" placeholder="Your Email"/>
                        </p>
                        <p>
                          <textarea name="message" placeholder="Your Message"></textarea>
                        </p>
                        <p>
                          <input type="submit" value="Send Message"/>
                        </p>
                      </form>
                </div>
            </div>
        </div>
    </div>


 <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
 <script>


     const constraints = {
         name: {
             presence: { allowEmpty: false }
         },
         email: {
             presence: { allowEmpty: false },
             email: true
         },
         message: {
             presence: { allowEmpty: false }
         }
     };

     const form = document.getElementById('contact-form');
     form.addEventListener('submit', function (event) {

         const formValues = {
             name: form.elements.name.value,
             email: form.elements.email.value,
             message: form.elements.message.value
         };


         const errors = validate(formValues, constraints);
         if (errors) {
             event.preventDefault();
             const errorMessage = Object
                 .values(errors)
                 .map(function (fieldValues) {
                     return fieldValues.join(', ')
                 })
                 .join("\n");

             alert(errorMessage);
         }
     }, false);
 </script>
</body>
</html>
    
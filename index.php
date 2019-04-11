<?php

  $firstname = $name = $email = $phone = $message = "";
  $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
  $isSuccess = false;

  if (isset($_POST) && !empty($_POST)){
    $firstname = verifyInput($_POST["firstname"]);
    $name = verifyInput($_POST["name"]);
    $email = verifyInput($_POST["email"]);
    $phone = verifyInput($_POST["phone"]);
    $message = verifyInput($_POST["message"]);
    $isSuccess = true;

    if(empty($firstname)){
      $firstnameError = "Je veux connaitre votre prénom !";
      $isSuccess = flase;
    }
    if(empty($name)){
      $nameError = "Je veux connaitre votre nom !";
      $isSuccess = false;
    }
    if(!isEmail($email) || empty($email)){
      $emailError = "Je veux connaitre votre email !";
      $isSuccess = false;
    }
    if(!isPhone($phone) || empty($phone)){
      $phoneError = "veillez saisiz un numéro de téléphone!";
      $isSuccess = false;
    }
    if(empty($message)){
      $messageError = "N'oubliez pas d'écrire se que vous voulez me dire !";
      $isSuccess = false;
    }
    if($isSuccess){
      // Envoie de l'email
    }

  }

  function isPhone($var){
    return preg_match("/^[0-9 .]*$/", $var);
  }


  function isEmail($var){
    return filter_var($var, FILTER_VALIDATE_EMAIL);
  }

  function verifyInput($var){
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Formulaire Contacte</title>
</head>
<body>
    <div class="container">
      <div class="divider"></div>
      <div class="heading">
          <h2>Contactez-moi <span class="fas fa-paper-plane"></span></h2>
      </div>
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">
            <div class="row">

              <div class=" col-md-6">
                <label for="firstname">Prénom<span class="blue">*</span></label>
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>"> 
                <p class="comments"><?php echo $firstnameError; ?></p>
              </div>
              <div class=" col-md-6">
                  <label for="name">Nom<span class="blue">*</span></label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom  "value="<?php echo $name; ?>"> 
                  <p class="comments"><?php echo $nameError; ?></p>
              </div>
              <div class=" col-md-6">
                <label for="email">Email<span class="blue">*</span></label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="<?php echo $email; ?>"> 
                <p class="comments"><?php echo $emailError; ?></p>
              </div>
              <div class=" col-md-6">
                <label for="phone">Téléphone<span class="blue">*</span></label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre Téléphone" value="<?php echo $phone; ?>"> 
                <p class="comments"><?php echo $phoneError; ?></p>
              </div>

              <div class=" col-md-12">
                <label for="message">Message<span class="blue">*</span></label>
                <textarea name="message" id="message" class="form-control" placeholder="Votre message" rows="4"><?php echo $message; ?></textarea>
                <p class="comments"><?php echo $messageError; ?></p>
              </div>
              <div class="col-md-12">
                <p class="blue"><strong>* Ces informations sont requises</strong></p>
              </div>
        
              <div class="col-md-12" id="button1">
                <input type="submit" class="button1" value="Envoyer">
              </div>
                
              </div>
              <p class="thank-you" style="display:<?php if($isSuccess) echo'block'; else echo'none' ?>">Votre message a bien été envoyé. Merci de m'avoir contacté 😁 </p>
            </div>

          </form>
        </div>
      </div>
    </div>
    
</body>
</html>
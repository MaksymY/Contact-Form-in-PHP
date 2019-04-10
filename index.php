<?php

  $firstname = $name = $email = $phone = $message = "";
  if (isset($_POST) && !empty($_POST)){
    $firstname = $_POST["firstname"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
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
          <form id="contact-form" method="post" action="index.php" role="form">
            <div class="row">

              <div class=" col-md-6">
                <label for="firstname">Prénom<span class="blue">*</span></label>
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname ?>"> 
                <p class="comments">Message d'erreur</p>
              </div>
              <div class=" col-md-6">
                  <label for="name">Nom<span class="blue">*</span></label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom"> 
                  <p class="comments">Message d'erreur</p>
              </div>
              <div class=" col-md-6">
                <label for="email">Email<span class="blue">*</span></label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Votre email"> 
                <p class="comments">Message d'erreur</p>
              </div>
              <div class=" col-md-6">
                <label for="phone">Téléphone<span class="blue">*</span></label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre Téléphone"> 
                <p class="comments">Message d'erreur</p>
              </div>

              <div class=" col-md-12">
                <label for="message">Message<span class="blue">*</span></label>
                <textarea name="message" id="message" class="form-control" placeholder="Votre message" rows="4"></textarea>
                <p class="comments">Message d'erreur</p>
              </div>
              <div class="col-md-12">
                <p class="blue"><strong>* Ces informations sont requises</strong></p>
              </div>
        
              <div class="col-md-12" id="button1">
                <input type="submit" class="button1" value="Envoyer">
              </div>
                
              </div>
              <p class="thank-you">Votre message a bien été envoyé. Merci de m'avoir contacté 😁 </p>
            </div>

          </form>
        </div>
      </div>
    </div>
    
</body>
</html>
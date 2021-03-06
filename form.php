<?php
if(isset($_POST['submit'])){
    $to = "benitakatende@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $number = $_POST['number'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="aure.css">
  <style>
  @media only screen and (min-width : 800px) {
        .landing p {font-size: 24px;

        }

        .mycontainer img {float:left;padding: 5px;

        }

        .mycontainer p {font-size: 18px;text-align: left;

        }

        .container p {font-size: 18px;

        }

        .mycontainer img {width:50px;height: 50px;

        }

        .projet img {width:100%;height:450px;display:block;margin: 0 auto;

        }

        .wtf {display: none;

        }

        hr {border-width: 3px;color: black;

        }

        .max form {text-align: center;

        }

        .teamphone {display: none;

        }

        #more {display: none;

        }

        .row2 p {font-size: 18px;}

        #form input[type=submit]{border: none;outline: none;font-size: 20px;border-radius: 20px;}
        #form [type=submit]:hover{background: #ff1493;}




      }
  @media only screen and (max-width: 800px){

        .max {max-width: 300px;margin: 0 auto;

        }

        .mycontainer p {text-align: center;

        }

        .landing img {width: 140px;height: 10px;margin-top: -15px;

        }

        .projet img {width:100%;height:200px;display:block;margin: 0 auto;

        }

        .row {display: none;

        }

        hr {border-width: 2px;color: black;

        }

        .max form {text-align: center;

        }

        .row2 {display: none;

        }

        #more {display: none;

        }

        .landing h2 {width: 300px;margin-top: -20px;

        }

        #form input[type=submit]{border: none;outline: none;font-size: 20px;border-radius: 20px;background: #ff1493;display: block;margin-left: auto;margin-right: auto;}


  }

  .mycontainer:nth-child(odd) {background-color: #d9d9d9;}

  </style>
</head>
<body>
  <div id="header">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" style="color:green;">NUNATU</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="team.html">Equipe</a></li>
            <li><a href="actions.html">Actions</a></li>
            <li><a href="bene.html">Devenir B&eacute;n&eacute;vole</a></li>
            <li><a href="mailto:info@nunatu.org">&#9993 info@nunatu.org</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div id="content">
    <div class="landing" style="position:relative;text-align:center;color:white;">
      <picture>
      <source media="(max-width:799px)" srcset="formcc.jpeg">
      <source media="(min-width:800px)" srcset="form.jpeg">
        <img src="team2ccland.jpeg" style="display: block;width:100%;height:500px;margin-left:auto;margin-right:auto;margin-top:-20px;">
      </picture>
      <h2 style="position: absolute;top: 85%;left: 50%;transform: translate(-50%, -50%);background: rgb(0, 0, 0);background: rgba(0, 0, 0, 0.5);color: #f1f1f1;padding: 20px;">
      Devenir B&eacute;n&eacute;vole</h2>
    </div>
  </div>
  <br>
  <div class="container">
    <center>
    <?php
    if (isset($_POST['submit']) === TRUE) {
      echo "<p style='color:green;'>Mail envoy&eacute;. Merci " . $first_name . ", nous reviendrons vers vous dans les meilleurs d&eacute;lais.";
      $x = mail($to,$subject,$message,$headers);
      // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

    ?>
  </center>
  <div id="form">
    <h3 style="text-align:center;">Remplissez ce formulaire afin de devenir un b&eacute;n&eacute;vole Nunatu</h3>
<form action="" method="post">
  <div class="max" style="width:500px;margin: 0 auto;">
  <div class="form-group">
<p>Pr&eacute;nom:</p><input type="text" name="first_name" placeholder="Prenom" class="form-control" required>
    </div>
    <div class="form-group">
<p>Nom de famille:</p><input type="text" name="last_name" placeholder="Nom de famille" class="form-control" required>
    </div>
    <div class="form-group">
<p>Email:</p><input type="text" name="email" placeholder="Adresse email" class="form-control" required>
    </div>
    <div class="form-group">
<p>Numero:</p><input type="text" name="number" placeholder="Numero de t&eacute;l&eacute;phone" class="form-control" required>
    </div>
    <div class="form-group">
<p>Message:</p><textarea rows="5" name="message" cols="48" class="form-control"></textarea>
    </div>
<br>
<br>
<input type="submit" name="submit" value="Submit">
<br>
<br>
</div>
</form>

  </div>
  <br>
  <br>
  <br>
</div>
<div id="footer" style="background-color:#808080;">
  <div class="container">
     <div class="row-fluid">
       <div class="ubuntu">
         <div class="span8" style="margin-top:2vw;">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.6706787534026!2d4.407767515661505!3d50.81873997952778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3db33e3fe068d%3A0x640f11f8e5b0172b!2sBoulevard+des+Invalides+183%2C+1160+Auderghem!5e0!3m2!1sfr!2sbe!4v1537985267018" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>

      <div class="span4" style="color:white;">
      <h2>Nunatu Asbl</h2>
      <address>
        <strong>Nunatu, la compassion en action</strong><br>
        Boulevard des invalides 183/12<br>
        1160 Bruxelles<br>
        Belgique<br>
        &#9742 +32489 93 95 66<br>
      </address>
    </div>
  </div>
</div>
</div>
</body>
</html>

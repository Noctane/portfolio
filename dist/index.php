<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Formulaire contact site';
		$to = 'arnaud.prat@gmail.com';
		$subject = 'Message depuis le site';

		$body ="From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Veuillez saisir votre nom';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Veuillez saisir une adresse email valide';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Veuillez saisir un message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Mauvaise réponse, ';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Merci, à très bientôt</div>';
	} else {
		$result='<div class="alert alert-danger">Désolé, il y a eu une erreur dans l\'envoi de votre message. Veuillez réessayer.</div>';
	}
}
	}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Arnaud Prat - Webdesigner / Front-end Développeur</title>
    <script src="https://use.fontawesome.com/0bad4a588e.js"></script>
    <link rel="stylesheet" href="js/fullpagejs/jquery.fullpage.min.css">
    <link rel="stylesheet" href="css/main.css">

  </head>
  <body>

  <div class="navigation">
    <nav class="menu">
      <ul id="nav">
        <li data-menuanchor="Home" class="active"><a href="#Home">Home</a></li>
        <li data-menuanchor="Portfolio"><a href="#Portfolio">Portfolio</a></li>
        <li data-menuanchor="Experiences"><a href="#Experiences">Experiences</a></li>
        <li data-menuanchor="Formations"><a href="#Formations">formations</a></li>
        <li data-menuanchor="Contact"><a href="#Contact">Contact</a></li>
      </ul>
    </nav>
  </div>

  <div id="fullpage">

    <div class="section">
      <section class="intro" data-anchor="Home">
        <div class="container">
          <div class="logo">
            <img src="img/logo.svg" alt="Arnaud Prat">
          </div>
          <div class="title">
          <h1><span>.</span>arnaud prat</h1>
          <h2 class="sub">webdesigner / dev Front-end</h2>
          <div class="social">
            <ul>
              <li><a href="https://fr.linkedin.com/pub/arnaud-prat/83/5b2/bb2"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://github.com/Noctane"><i class="fa fa-github"></i></a></li>
              <li><a href="https://twitter.com/arnaudprat"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
          </div>
        </div>
      </section>
    </div>

    <div class="section">
      <section class="portfolio" data-anchor="Portfolio">
        <div class="container">
					<h2><span>.</span>portfolio</h2>
          <div class="slide" data-anchor="slide1">
            <div class="showcase">
              <div class="showcase-img">
                  <img src="img/plume-doie.jpg">
              </div>

            </div>
          </div>
          <div class="slide" data-anchor="slide2">
            <div class="showcase">
              <div class="showcase-img">
                  <img src="img/card.jpg">
              </div>

            </div>
          </div>
          <div class="slide" data-anchor="slide3">
            <div class="showcase">
              <div class="showcase-img">
                  <img src="img/juris-catalogue.jpg">
              </div>

            </div>
          </div>
					<div class="slide" data-anchor="slide4">
            <div class="showcase">
              <div class="showcase-img">
                  <img src="img/cncgp.jpg">
              </div>

            </div>
          </div>
        </div>

      </section>
    </div>

    <div class="section">
      <section class="experience" data-anchor="Experiences">
        <div class="container">
          <h2><span>.</span>experiences</h2>
          <div class="section-content">
            <div class="jobs">
              <h3><span>.</span>JurisCampus</h3>
              <h4>Responsable création/Webdesigner</h4>
              <p class="date">2011 à aujourd'hui</p>
              <p>En charge de la production graphique print et web de l'institut. <br>
              Création d'outils dédiés à l'apprentissage en ligne. <br>
              Création de templates Moodle (LMS)</p>

              <h3><span>.</span>Andil</h3>
              <h4>Stage Webmaster</h4>
              <p class="date">2011</p>
              <p>Création d'éléments graphiques et ergonomiques pour différents sites clients <br>
              Création de thème Joomla <br>
              Refonte graphique à titre évenementiel pour les 10 ans de la société</p>

              <h3><span>.</span>Frédéric Vaysse-Knitter</h3>
              <h4>Webdesigner/Intégrateur indépendant</h4>
              <p class="date">2015</p>
              <p>Création d'un thème Wordpress et webdesign</p>

            </div>
            <div class="jobs">
              <h3><span>.</span>Auberge de la Plume d'Oie</h3>
              <h4>Webdesigner/Intégrateur indépendant</h4>
              <p class="date">2015</p>
              <p>Conception du site internet HTML5/CSS3</p>

              <h3><span>.</span>CETEP ADN export</h3>
              <h4>Graphiste indépendant</h4>
              <p class="date">2013</p>
              <p>Création de logo</p>

              <h3><span>.</span>Le Clos de Morphée</h3>
              <h4>Webdesigner/Intégrateur indépendant</h4>
              <p class="date">2012</p>
              <p>Intégration sous Wordpress</p>
            </div>
          </div>
        </div>

      </section>
    </div>

    <div class="section">
      <section class="formation" data-anchor="Formations">
        <div class="container">
          <h2><span>.</span>formations</h2>

          <div class="section-content">

            <div class="courses">
              <h3><span>.</span>Formation qualifiante Webmaster</h3>
              <h4>Lycée Saliège - Balma</h4>
              <p class="date">2010 - 2011</p>

              <h3><span>.</span>L3 Arts Appliqués</h3>
              <h4>Université Jean Jaurès - Toulouse</h4>
              <p class="date">2009 - 2010</p>

              <h3><span>.</span>BTS Design de produits</h3>
              <h4>Lycée Jean Perrin - Marseille</h4>
              <p class="date">2008</p>

              <h3><span>.</span>Auto-formation</h3>
              <ul>
                <li>Javascript</li>
                <li>PHP/MySQL</li>
                <li>Ruby on rails</li>
              </ul>
            </div>
            <div class="courses">
              <h3><span>.</span>Skill set</h3>
              <ul class="skillSet">
                <li><span>Suite Adobe</span><div class="progressBar"><div class="lvl adobe"></div></div></li>
                <li><span>HTML5</span><div class="progressBar"><div class="lvl html"></div></div></li>
                <li><span>CSS3</span><div class="progressBar"><div class="lvl css"></div></div></li>
								<li><span>SASS</span><div class="progressBar"><div class="lvl sass"></div></div></li>
                <li><span>JavaScript</span><div class="progressBar"><div class="lvl js"></div></div></li>
                <li><span>jQuery</span><div class="progressBar"><div class="lvl jquery"></div></div></li>
                <li><span>Reactjs</span><div class="progressBar"><div class="lvl react"></div></div></li>
                <li><span>PHP</span><div class="progressBar"><div class="lvl php"></div></div></li>
                <li><span>MySQL</span><div class="progressBar"><div class="lvl mysql"></div></div></li>
                <li><span>Wordpress</span><div class="progressBar"><div class="lvl wp"></div></div></li>
                <li><span>Joomla</span><div class="progressBar"><div class="lvl joomla"></div></div></li>
              </ul>
            </div>
          </div>

        </div>
      </section>
    </div>

    <div class="section">
      <section class="contact" data-anchor="Contact">
        <div class="container">
          <h2><span>.</span>pour un premier contact</h2>

          <div class="section-content">
            <form class="form" method="post" action="#Contact">
              <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
								<?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
              <div class="form-group">
                <label for="email">Mail</label>
                <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
								<?php echo "<p class='text-danger'>$errEmail</p>";?>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea rows="5" name="message" id="mail"><?php echo htmlspecialchars($_POST['message']);?></textarea>
								<?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
							<div class="form-group">
								<label for="human">2 + 3 = ?</label>
								<input type="text" class="form-control" id="human" name="human" placeholder="Votre réponse">
								<?php echo "<p class='text-danger'>$errHuman</p>";?>
							</div>
              <div class="button">
                <button id="submit" name="submit" type="submit">Envoyer</button>
              </div>
							<div class="result">
								<?php echo $result; ?>
							</div>
            </form>
          </div>
        </div>
      </section>
    </div>

  </div>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/fullpagejs/jquery.fullpage.js"></script>
  <script src="js/app.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19336133-4', 'auto');
  ga('send', 'pageview');

</script>

  </body>
</html>

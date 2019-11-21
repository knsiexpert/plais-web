<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <link rel="icon" href="img/ais.gif">

    <title>Bulletins</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles -->
	<link href="css/aos.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

  </head>

  <body>
    
   <header>
	
      <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="#">
			<img src="img/ais.gif" class="img-fluid" width="75" height="50" alt="">
			PLAIS
		</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home Page</a>
            </li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Letters
				</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="letterAISpresident.html">Letter from AIS President</a>
				<a class="dropdown-item" href="lettersAndcongratulations.html">Letters & Congratulations</a>
			</div>
			</li>
            <li class="nav-item">
              <a class="nav-link" href="bylaws.html">Bylaws</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="successes.html">Successes</a>
            </li>
		    <li class="nav-item active">
              <a class="nav-link" href="bulletins.php">Bulletins</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Members
				</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="currentMembers.html">Current Members</a>
				<a class="dropdown-item" href="foundingMembers.html">Founding Members</a>
				<a class="dropdown-item" href="executiveBoard.html">Executive Board</a>
			</div>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				PLAIS Events
				</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="http://eurosymposium.eu/">EuroSymposium</a>
				<a class="dropdown-item" href="http://ictm2018.web.edukacja.wroc.pl/">ICTM</a>
				<a class="dropdown-item" href="http://emcis.eu/">EMCIS</a>
			</div>
            </li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Resources
				</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="publications.html">Publications</a>
				<a class="dropdown-item" href="conferences.html">Conferences</a>
				<a class="dropdown-item" href="documents.html">Documents</a>
				<a class="dropdown-item" href="PLAISresources.html">PLAIS Resources</a>
				<a class="dropdown-item" href="AISresources.html">AIS Resources</a>
				<a class="dropdown-item" href="links.html">Links</a>
			</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				About us
				</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="joinUs.html">Join us</a>
				<a class="dropdown-item" href="contact.html">Contact</a>
			</div>
			</li>
			<li class="nav-item">
              <a class="nav-link" href="ntie.html">NTIE</a>
			</li>
          </ul>
        </div>
      </nav>
	  
    </header>
	<!-- CONTAINER -->

    <main role="main" class="container">

      <div class="starter-template">
		<div data-aos="fade-right" data-aos-delay="300">
		<br>
        <h1>Bulletins</h1>
		</div>
		<div data-aos="fade-right" data-aos-delay="600">
			<?php include 'newestBulletin.php'?>
			<!--¯\_(ツ)_/¯-->
			<?php include 'bulletinsListener.php'?>
		</div>
	   </div>
</div>
	  <!-- FOOTER -->
	  
	  <footer class="container">
        <p>&copy; 2018 PLAIS.org &middot; <a href="contact.html">Contact</a> &middot; <a href="administrationPanel.html"><img src="img/expert.png" class="float-right img-fluid" alt="" width="110" height="110"></a>
		</p>
      </footer>
	  
	  <!-- /FOOTER -->

    </main>
	
	<!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/aos.js"></script>
	<script src="js/noRefresh.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
	<script>
    AOS.init();
	</script>
	
  </body>
</html>
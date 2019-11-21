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
	
	<!--Wypierdol te skrypty jak nie będą działać-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
	
	
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
              <a class="nav-link" href="bulletins.html">Bulletins</a>
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
			<label>Select bulletin:</label>
			<?php include 'bulletinsListener.php'?>
		</div>
		<div data-aos="fade-right" data-aos-delay="600">
        <table border=0 class="cnl">
			<tr>
            <br>
            <!--<a href="./bulletins/Bulletin 1.html" onclick="window.open("./bulletins/Bulletin 1.html", "bul1", "toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600").focus(); return false">Bulletin No 1 (26/01/2006)</a><br>-->
            <a href="#" onclick="window.open('./bulletins/Bulletin 2.html', 'bul2', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 2 (08/02/2006)</a><br>
            <a href="./bulletins/Bulletin 3.html" onclick="window.open('./bulletins/Bulletin 3.html', 'bul3', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 3 (07/03/2006)</a><br>
            <a href="./bulletins/Bulletin 4.html" onclick="window.open('./bulletins/Bulletin 4.html', 'bul4', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 4 (12/07/2006)</a><br>
            <a href="./bulletins/Bulletin 5.html" onclick="window.open('./bulletins/Bulletin 5.html', 'bul5', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 5 (17/07/2006)</a><br>
            <a href="./bulletins/Bulletin 6.html" onclick="window.open('./bulletins/Bulletin 6.html', 'bul6', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 6 (31/08/2006)</a><br>
            <a href="./bulletins/Bulletin 7.html" onclick="window.open('./bulletins/Bulletin 7.html', 'bul7', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 7 (09/12/2006)</a><br>
            <a href="./bulletins/Bulletin 8.html" onclick="window.open('./bulletins/Bulletin 8.html', 'bul8', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 8 (23/12/2006)</a><br>
            <a href="./bulletins/Bulletin 9.html" onclick="window.open('./bulletins/Bulletin 9.html', 'bul9', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 9 (24/12/2006)</a><br>
            <a href="./bulletins/Bulletin 10.html" onclick="window.open('./bulletins/Bulletin 10.html', 'bul10', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 10 (28/12/2006)</a><br>
            <a href="./bulletins/Bulletin 11.html" onclick="window.open('./bulletins/Bulletin 11.html', 'bul11', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 11 (26/01/2007)</a><br>
            <a href="./bulletins/Bulletin 12.html" onclick="window.open('./bulletins/Bulletin 12.html', 'bul12', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 12 (27/01/2007)</a><br>
            <a href="./bulletins/Bulletin 13.html" onclick="window.open('./bulletins/Bulletin 13.html', 'bul13', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 13 (12/05/2007)</a><br>
            <a href="./bulletins/Bulletin 14.html" onclick="window.open('./bulletins/Bulletin 14.html', 'bul14', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 14 (27/10/2007)</a><br>
            <a href="./bulletins/Bulletin 15.html" onclick="window.open('./bulletins/Bulletin 15.html', 'bul15', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 15 (28/12/2007)</a><br>
            <a href="./bulletins/Bulletin 16.html" onclick="window.open('./bulletins/Bulletin 16.html', 'bul16', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 16 (17/01/2008)</a><br>
            <a href="./bulletins/Bulletin 17.html" onclick="window.open('./bulletins/Bulletin 17.html', 'bul17', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 17 (31/01/2008)</a><br>
            <a href="./bulletins/Bulletin 18.html" onclick="window.open('./bulletins/Bulletin 18.html', 'bul18', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 18 (06/02/2008)</a><br>
            <a href="./bulletins/Bulletin 19.html" onclick="window.open('./bulletins/Bulletin 19.html', 'bul19', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 19 (21/02/2008)</a><br>
            <a href="./bulletins/Bulletin 20.html" onclick="window.open('./bulletins/Bulletin 20.html', 'bul20', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 20 (22/03/2008)</a><br>
            <a href="./bulletins/Bulletin 21.html" onclick="window.open('./bulletins/Bulletin 21.html', 'bul21', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 21 (22/03/2008)</a><br>
            <a href="./bulletins/Bulletin 22.html" onclick="window.open('./bulletins/Bulletin 22.html', 'bul22', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 22 (05/05/2008)</a><br>
            <a href="./bulletins/Bulletin 23.html" onclick="window.open('./bulletins/Bulletin 23.html', 'bul23', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 23 (27/08/2008)</a><br>
            <a href="./bulletins/Bulletin 24.html" onclick="window.open('./bulletins/Bulletin 24.html', 'bul24', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 24 (15/01/2009)</a><br>
            <a href="./bulletins/Bulletin 25.html" onclick="window.open('./bulletins/Bulletin 25.html', 'bul25', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 25 (20/01/2009)</a><br>
            <a href="./bulletins/Bulletin 26.html" onclick="window.open('./bulletins/Bulletin 26.html', 'bul26', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 26 (15/01/2010)</a><br>
            <a href="./bulletins/Bulletin 27.html" onclick="window.open('./bulletins/Bulletin 27.html', 'bul27', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 27 (09/03/2010)</a><br>
            <a href="./bulletins/Bulletin 28.html" onclick="window.open('./bulletins/Bulletin 28.html', 'bul28', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 28 (31/12/2010)</a><br>
            <a href="./bulletins/Bulletin 29.html" onclick="window.open('./bulletins/Bulletin 29.html', 'bul29', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 29 (21/04/2011)</a><br>
            <a href="./bulletins/Bulletin 30.html" onclick="window.open('./bulletins/Bulletin 30.html', 'bul30', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 30 (29/06/2011)</a><br>
            <a href="./bulletins/Bulletin 31.html" onclick="window.open('./bulletins/Bulletin 31.html', 'bul31', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 31 (21/10/2011)</a><br>
            <a href="./bulletins/Bulletin 32.html" onclick="window.open('./bulletins/Bulletin 32.html', 'bul32', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 32 (29/10/2011)</a><br>
            <a href="./bulletins/Bulletin 33.html" onclick="window.open('./bulletins/Bulletin 33.html', 'bul33', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 33 (16/11/2011)</a><br>
            <a href="./bulletins/Bulletin 34.html" onclick="window.open('./bulletins/Bulletin 34.html', 'bul34', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 34 (22/12/2011)</a><br>
            <a href="./bulletins/Bulletin 35.html" onclick="window.open('./bulletins/Bulletin 35.html', 'bul35', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 35 (10/01/2012)</a><br>
            <a href="./bulletins/Bulletin 36.html" onclick="window.open('./bulletins/Bulletin 36.html', 'bul36', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 36 (13/04/2012)</a><br>
            <a href="./bulletins/Bulletin 37.html" onclick="window.open('./bulletins/Bulletin 37.html', 'bul37', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 37 (21/05/2012)</a><br>
            <a href="./bulletins/Bulletin 38.html" onclick="window.open('./bulletins/Bulletin 38.html', 'bul38', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 38 (29/05/2012)</a><br>
            <a href="./bulletins/Bulletin 39.html" onclick="window.open('./bulletins/Bulletin 39.html', 'bul39', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 39 (08/06/2012)</a><br>
            <a href="./bulletins/Bulletin 40.html" onclick="window.open('./bulletins/Bulletin 40.html', 'bul40', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 40 (06/08/2012)</a><br>
            <a href="./bulletins/Bulletin 41.html" onclick="window.open('./bulletins/Bulletin 41.html', 'bul41', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 41 (06/08/2012)</a><br>
            <a href="./bulletins/Bulletin 42.html" onclick="window.open('./bulletins/Bulletin 42.html', 'bul42', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 42 (24/08/2012)</a><br>
            <a href="./bulletins/Bulletin 43.html" onclick="window.open('./bulletins/Bulletin 43.html', 'bul43', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 43 (05/10/2012)</a><br>
            <a href="./bulletins/Bulletin 44.html" onclick="window.open('./bulletins/Bulletin 44.html', 'bul44', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 44 (12/10/2012)</a><br>
            <a href="./bulletins/Bulletin 45.html" onclick="window.open('./bulletins/Bulletin 45.html', 'bul45', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 45 (10/03/2013)</a><br>
            <a href="./bulletins/Bulletin 46.html" onclick="window.open('./bulletins/Bulletin 46.html', 'bul46', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 46 (30/03/2013)</a><br>
            <a href="./bulletins/Bulletin 47.html" onclick="window.open('./bulletins/Bulletin 47.html', 'bul47', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 47 (31/10/2013)</a><br>
            <a href="./bulletins/Bulletin 48.html" onclick="window.open('./bulletins/Bulletin 48.html', 'bul48', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 48 (05/11/2013)</a><br>
            <a href="./bulletins/Bulletin 49.html" onclick="window.open('./bulletins/Bulletin 49.html', 'bul49', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 49 (21/12/2013)</a><br>
            <a href="./bulletins/Bulletin 50.html" onclick="window.open('./bulletins/Bulletin 50.html', 'bul50', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 50 (21/01/2014)</a><br>
            <a href="./bulletins/Bulletin 51.html" onclick="window.open('./bulletins/Bulletin 51.html', 'bul51', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 51 (28/01/2014)</a><br>
            <a href="./bulletins/Bulletin 52.html" onclick="window.open('./bulletins/Bulletin 52.html', 'bul52', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 52 (08/02/2014)</a><br>
            <a href="./bulletins/Bulletin 53.html" onclick="window.open('./bulletins/Bulletin 53.html', 'bul53', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 53 (13/02/2014)</a><br>
            <a href="./bulletins/Bulletin 54.html" onclick="window.open('./bulletins/Bulletin 54.html', 'bul54', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 54 (22/02/2014)</a><br>
            <a href="./bulletins/Bulletin 55.html" onclick="window.open('./bulletins/Bulletin 55.html', 'bul55', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 55 (24/02/2014)</a><br>
            <a href="./bulletins/Bulletin 56.html" onclick="window.open('./bulletins/Bulletin 56.html', 'bul56', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 56 (28/02/2014)</a><br>
            <a href="./bulletins/Bulletin 57.html" onclick="window.open('./bulletins/Bulletin 57.html', 'bul57', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 57 (02/04/2014)</a><br>
            <a href="./bulletins/Bulletin 58.html" onclick="window.open('./bulletins/Bulletin 58.html', 'bul58', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 58 (17/04/2014)</a><br>
            <a href="./bulletins/Bulletin 59.html" onclick="window.open('./bulletins/Bulletin 59.html', 'bul59', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 59 (05/05/2014)</a><br>
            <a href="./bulletins/Bulletin 60.html" onclick="window.open('./bulletins/Bulletin 60.html', 'bul60', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 60 (09/05/2014)</a><br>
            <a href="./bulletins/Bulletin 61.html" onclick="window.open('./bulletins/Bulletin 61.html', 'bul61', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 61 (08/07/2014)</a><br>
            <a href="./bulletins/Bulletin 62.html" onclick="window.open('./bulletins/Bulletin 62.html', 'bul62', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 62 (28/08/2014)</a><br>
            <a href="./bulletins/Bulletin 63.html" onclick="window.open('./bulletins/Bulletin 63.html', 'bul63', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 63 (02/10/2014)</a><br>
            <a href="./bulletins/Bulletin 64.html" onclick="window.open('./bulletins/Bulletin 64.html', 'bul64', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 64 (13/10/2014)</a><br>
            <a href="./bulletins/Bulletin 65.html" onclick="window.open('./bulletins/Bulletin 65.html', 'bul65', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 65 (16/10/2014)</a><br>
            <a href="./bulletins/Bulletin 66.html" onclick="window.open('./bulletins/Bulletin 66.html', 'bul66', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 66 (07/11/2014)</a><br>
            <a href="./bulletins/Bulletin 67.html" onclick="window.open('./bulletins/Bulletin 67.html', 'bul67', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 67 (12/11/2014)</a><br>
            <a href="./bulletins/Bulletin 68.html" onclick="window.open('./bulletins/Bulletin 68.html', 'bul68', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 68 (03/12/2014)</a><br>
            <a href="./bulletins/Bulletin 69.html" onclick="window.open('./bulletins/Bulletin 69.html', 'bul69', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 69 (04/12/2014)</a><br>
            <a href="./bulletins/Bulletin 70.html" onclick="window.open('./bulletins/Bulletin 70.html', 'bul70', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600').focus(); return false">Bulletin No 70 (05/12/2014)</a><br>
            <a href="./bulletins/Bulletin 71.html" onclick="window.open('./bulletins/Bulletin 71.html', 'bul71', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=571,height=600').focus(); return false">Bulletin No 71 (08/12/2014)</a><br>
            <a href="./bulletins/Bulletin 72.html" onclick="window.open('./bulletins/Bulletin 72.html', 'bul72', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=572,height=600').focus(); return false">Bulletin No 72 (10/12/2014)</a><br>
            <a href="./bulletins/Bulletin 73.html" onclick="window.open('./bulletins/Bulletin 73.html', 'bul73', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=573,height=600').focus(); return false">Bulletin No 73 (10/12/2014)</a><br>
            <a href="./bulletins/Bulletin 74.html" onclick="window.open('./bulletins/Bulletin 74.html', 'bul74', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 74 (12/12/2014)</a><br>
            <a href="./bulletins/Bulletin 75.html" onclick="window.open('./bulletins/Bulletin 75.html', 'bul75', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 75 (20/12/2014)</a><br>
            <a href="./bulletins/Bulletin 76.html" onclick="window.open('./bulletins/Bulletin 76.html', 'bul76', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 76 (07/01/2015)</a><br>
            <a href="./bulletins/Bulletin 77.html" onclick="window.open('./bulletins/Bulletin 77.html', 'bul77', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 77 (13/04/2015)</a><br>
            <a href="./bulletins/Bulletin 78.html" onclick="window.open('./bulletins/Bulletin 78.html', 'bul78', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 78 (14/04/2015)</a><br>
            <a href="./bulletins/Bulletin 79.html" onclick="window.open('./bulletins/Bulletin 79.html', 'bul79', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 79 (16/04/2015)</a><br>
            <a href="./bulletins/Bulletin 80.html" onclick="window.open('./bulletins/Bulletin 80.html', 'bul80', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 80 (22/04/2015)</a><br>
            <a href="./bulletins/Bulletin 81.html" onclick="window.open('./bulletins/Bulletin 81.html', 'bul81', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 81 (23/04/2015)</a><br>
            <a href="./bulletins/Bulletin 82.html" onclick="window.open('./bulletins/Bulletin 82.html', 'bul82', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 82 (27/04/2015)</a><br>
            <a href="./bulletins/Bulletin 83.html" onclick="window.open('./bulletins/Bulletin 83.html', 'bul83', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 83 (11/05/2015)</a><br>
            <a href="./bulletins/Bulletin 84.html" onclick="window.open('./bulletins/Bulletin 84.html', 'bul84', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 84 (27/05/2015)</a><br>
            <a href="./bulletins/Bulletin 85.html" onclick="window.open('./bulletins/Bulletin 85.html', 'bul85', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 85 (27/05/2015)</a><br>
            <a href="./bulletins/Bulletin 86.html" onclick="window.open('./bulletins/Bulletin 86.html', 'bul86', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 86 (28/10/2015)</a><br>
            <a href="./bulletins/Bulletin 87.html" onclick="window.open('./bulletins/Bulletin 87.html', 'bul87', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 87 (13/01/2016)</a><br>
            <a href="./bulletins/Bulletin 88.html" onclick="window.open('./bulletins/Bulletin 88.html', 'bul88', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 88 (11/02/2016)</a><br>
            <a href="./bulletins/Bulletin 89.html" onclick="window.open('./bulletins/Bulletin 89.html', 'bul89', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 89 (03/03/2016)</a><br>
            <a href="./bulletins/Bulletin 90.html" onclick="window.open('./bulletins/Bulletin 90.html', 'bul90', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 90 (23/03/2016)</a><br>
            <a href="./bulletins/Bulletin 91.html" onclick="window.open('./bulletins/Bulletin 91.html', 'bul91', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 91 (13/05/2016)</a><br>
            <a href="./bulletins/Bulletin 92.html" onclick="window.open('./bulletins/Bulletin 92.html', 'bul92', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 92 (25/05/2016)</a><br>
            <a href="./bulletins/Bulletin 93.html" onclick="window.open('./bulletins/Bulletin 93.html', 'bul93', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 93 (18/11/2016)</a><br>
            <a href="./bulletins/Bulletin 94.html" onclick="window.open('./bulletins/Bulletin 94.html', 'bul94', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 94 (22/05/2017)</a><br>
            <a href="./bulletins/Bulletin 95.html" onclick="window.open('./bulletins/Bulletin 95.html', 'bul95', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 95 (25/05/2017)</a><br>
            <a href="./bulletins/Bulletin 96.html" onclick="window.open('./bulletins/Bulletin 96.html', 'bul96', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 96 (20/03/2018)</a><br>
            <a href="./bulletins/Bulletin 97.html" onclick="window.open('./bulletins/Bulletin 97.html', 'bul97', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 97 (11/05/2018)</a><br>
            <a href="./bulletins/Bulletin 98.html" onclick="window.open('./bulletins/Bulletin 98.html', 'bul98', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 98 (16/05/2018)</a><br>
            <a href="./bulletins/Bulletin 99.html" onclick="window.open('./bulletins/Bulletin 99.html', 'bul99', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false">Bulletin No 99 (03/09/2018)</a><br>
            <a href="./bulletins/Bulletin 100.html" onclick="window.open('./bulletins/Bulletin 100.html', 'bul100', 'toolbar=no,directories=no,menubar=no,scrollbars=yes,width=574,height=600').focus(); return false" style="color:#DAA520;">Bulletin No 100 (08/09/2018)</a><br>
            <br><br><br>
			</td>
		</tr>
	</table>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/aos.js"></script>
	<script src="js/noRefresh.js"></script>
	<script>
    AOS.init();
	</script>
	
  </body>
</html>
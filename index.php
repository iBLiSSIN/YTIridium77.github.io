<!DOCTYPE HTML>

<html lang="de">
	<head>
		<meta charset="utf8">
		<link rel="stylesheet" href="formate.css">
		<title>Iridium Hosting | Angebote</title>
	</head>
	
	<body>
		<div id="header">
			<img id="logo" src="img/Iridium77logo.png" alt="Iridium77 Logo">
			<button id="login" onclick="login();">Login</button>
			<h1 class="übertitel">Iridium Server Hosting</h1>
			
			<ul id="überschrift">
				<li class="title"><a class="title" href= "">Angebote</a></li>
			</ul>
			
		</div>
		
		<div id="angebote">
		<div class="content" onclick="starterpack1();">
			<h2>Starter Pack Half day</h2>
				<p class="gros">Täglich 12 Stunden online Zeit</p>
				
			<ul class="vorteil">
				<li><p class="gros">Prozessor</p><li>
				<li class="liste">6 Kerne<li>
				<li class="liste">12 Threads<li>
				<li class="liste">2,6 GHz<li>
				<li><p class="gros">Arbeits Speicher</p><li>
				<li class="liste">6GB RAM<li>
				<li><p class="gros">Speicherplatz</p><li>
				<li class="liste">50GB HDD<li>
				<li><p class="gros">+ Server Support</p><li>
				<li><h2>25€ im Monat</h2><li>
			</ul>
			
		</div>
		
		<div class="content" onclick="starterpack2();">
			<h2>Starter Pack Full day</h2>
				<p class="gros">Täglich 24 Stunden online Zeit</p>
				
			<ul class="vorteil">
				<li><p class="gros">Prozessor</p><li>
				<li class="liste">6 Kerne<li>
				<li class="liste">12 Threads<li>
				<li class="liste">2,6 GHz<li>
				<li><p class="gros">Arbeits Speicher</p><li>
				<li class="liste">6GB RAM<li>
				<li><p class="gros">Speicherplatz</p><li>
				<li class="liste">50GB HDD<li>
				<li><p class="gros">+ Server Support</p><li>
				<li><h2>42€ im Monat</h2><li>
			</ul>
			
		</div>
		</div>
		
		<div id="footer">
			<ul id="überschrift">
				<li class="title"><a class="title" href= "html/impressum.php" target="_blank">Impressum</a></li>
			</ul>
		</div>
		
		<script>
		
				starterpack1 = function(){
					window.open("html/StarterPack1.php");
				}
				
				starterpack2 = function(){
					window.open("html/StarterPack2.php");
				}
				
				login = function(){
					open("//register.localhost.com");
					window.close();
				}
		
		</script>
		
	</body>
</html>
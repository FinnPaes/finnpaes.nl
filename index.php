<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finn Paes &mdash; Web Developer</title>
    <meta name="title" content="Finn Paes">
    <meta name="description" content="Mijn naam is Finn Paes ik ben een 18 jaar oude Web Developer uit Oosthuizen. Lees meer over mij!">
    <meta name="keywords" content="Finn Paes, Finn, Paes, finnpaes.nl, finn paes twitter, finnpaes, finn p, web developer">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Finn Paes">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css?ver=5">
    <script src="https://kit.fontawesome.com/0724c1067d.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
require_once("includes/nav.php");
$leeftijd = floor((time() - strtotime('2001-12-17')) / 31556926);
?>

<div class="welkom">
    <h1><span id="decoded2">Finn Paes</span><span id="encoded2"></span></h1>
    <p>Welkom op mijn website, scroll om meer over mij te leren</p>
</div>

<div class="over-mij" id="over-mij">
    <h2>Wie ben ik?</h2>
    <p>Mijn naam is Finn, ik ben <?php echo $leeftijd; ?> jaar oud. Sinds de middelbare school maak ik al websites, dit is altijd al mijn hobby geweest. Hierdoor wist ik ook dat ik een Web Developer wilde worden. De talen die ik op dit moment beheers zijn: HTML, CSS, Javascript, PHP en SQL.<br>Verder heb ik veel verstand van Computers; Windows, Linux en hardware. Alles aan Computers vind ik erg interessant. Op dit moment volg ik de opleiding Applicatieontwikkelaar/Software Developer op het MBO.<br><br>Je kan mij volgen op: <a href="https://www.linkedin.com/in/finnpaes/" target="_blank">LinkedIn <i class="fab fa-linkedin"></i></a> en mijn <a href="https://github.com/FinnPaes/" target="_blank">Github <i class="fab fa-github-square"></i></a> pagina.</p>
</div>

<div class="projecten" id="projecten">
    <h1>Mijn projecten</h1>
    <div class="projecten-wrapper">


        <div class="projecten-container">
            <a href="https://rekensnel.nl" target="_blank"><img src="assets/images/projecten/rekensnel.png" alt="RekenSnel.nl sommentrainer" /></a>
            <p>Een opkomend project om rekensommen te oefenen. HTML, CSS, JavaScript, PHP, SQL.</p>
        </div>
        <div class="projecten-container">
            <a href="https://github.com/FinnPaes/finnpaes.nl" target="_blank"><img src="assets/images/projecten/finnpaes.png" alt="Mijn persoonlijke portfolio website" /></a>
            <p>Dit is de website waar jij je nu bevind. HTML, CSS, PHP.</p>
        </div>
        <div class="projecten-container">
            <a href="https://github.com/FinnPaes/Supermarkt-Bani" target="_blank"><img src="assets/images/projecten/bani.png" alt="Website voor school project supermarkt Bani" /></a>
            <p>Voor mijn opleiding moest ik zelf een webshop maken. HTML, CSS, PHP, SQL.</p>
        </div>
        <div class="projecten-container">
            <a href="https://github.com/FinnPaes/Beroepsproject4" target="_blank"><img src="assets/images/projecten/alphen-aan-den-rijn.png" alt="Website voor school project Alphen Aan Den Rijn schadeclaim" /></a>
            <p>Ook een opdracht voor mijn opleiding, zelf een schade claim systeem bouwen. HTML, CSS, PHP, SQL.</p>
        </div>

    </div>
</div>


<?php
require_once("includes/footer.php");
?>

<script src="assets/scripts/text-reveal.js" type="text/javascript"></script>
</body>
</html>
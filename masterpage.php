<?php
$l=0;
    switch($lang){
        case "ar":$l=0;break;
        case "fr":$l=1;break;
        case "en":$l=2;break;
    };
    $ml = array(
    array("مهد", "mahd","mahd"),// 0
    array("الصفحة الرسمية  |", "|  ACCUEIL","Home"),// 1
    array("المنتوجات  |", "|   Nos Produits","|   Products"),// 2
    array("خريطة الموقع  |", "|   Sitemap", "|   Sitemap"),// 3
    array("الإتصال  |", "|   Contact", "|   Contact"),// 4
    array("الإنطباع  |", "|   Mentions legales", "|   Imprint"),// 5
    array("المنتوجات  |", "|   Nos Produits","|   Products"),// 6
    array("© 2013 |   Engeli & Partner", "© 2013 |   Engeli & Partner", "© 2013 |   Engeli & Partner"),// 7
    array("جميع الحقوق محفوظة", "Tout droits reservees", "All right reserved"),// 8
    array("هذا الموقع مصنع من قبل ", "Site web developpé par ", "Website developed by "),// 9
    array("صناعة  |", "|  INDUSTRIE", "|  Industry"),// 10
    array("معالجة المياه  |", "|  TRAITEMENT DE L'EAU", "|  Water Treatment"),// 11
    array("تعرف علينا  |", "|  A PROPOS DE NOUS", "|  About us"),// 12
    array("المرجع  |", "|  REFERENCE", "|  Reference"),// 13
    array("خدمات  |", "|  Services", "|  Services"),// 14
    );
?>
<!DOCTYPE html>
<html>
<head>
<title>Mediagon</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
    <script>
        function saveLang(value) {
            var exdate = new Date();
            exdate.setDate(exdate.getDate() + 365);
            var c_value = escape(value) + (false ? "" : "; expires=" + exdate.toUTCString());
            document.cookie = "lang=" + c_value;
        }
    </script>
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
      <ul class="links">
          <li><img style="float: inherit; text-align: inherit; cursor: pointer" src="images/ar.png" alt="logo" onclick="saveLang('ar'); window.location.reload()"></li>
          <li><img style="float: inherit; text-align: inherit; cursor: pointer" src="images/fr.png" alt="logo" onclick="saveLang('fr'); window.location.reload()"></li>
          <li><img style="float: inherit; text-align: inherit; cursor: pointer" src="images/en.png" alt="logo" onclick="saveLang('en'); window.location.reload()"></li>
          <li><a href="contact.php"><?php echo $ml[4][$l];?></a></li>
          <li><a href="mentions.php"><?php echo $ml[5][$l];?></a></li>
          <!--<li><a href="sitemap.php"><?php echo $ml[3][$l];?></a></li>-->
      </ul>
      <img style="float: inherit; text-align: inherit" src="images/logo.gif" alt="logo">
      <img style="float: inherit; text-align: inherit" src="images/anticalcaire_nebenlogo.png" alt="logo">
      <br><br>
      <?php if($lang=="ar"){?>
            <style>#header nav, #header nav li{float: right !important; text-align: right !important}</style>
      <?php }else{?>
            <style>#header nav, #header nav li{float: left !important; text-align: left !important}</style>
      <?php }?>
    <nav>
      <ul>
        <li><a href="index.php"><?php echo $ml[1][$l];?></a></li>
        <li><a href="produit.php"><?php echo $ml[2][$l];?></a></li>
        <li><a href="indus.php"><?php echo $ml[10][$l];?></a></li>
        <li><a href="traitement.php"><?php echo $ml[11][$l];?></a></li>
        <li><a href="ref.php"><?php echo $ml[13][$l];?></a></li>
        <li><a href="team.php"><?php echo $ml[12][$l];?></a></li>
        <li><a href="service.php"><?php echo $ml[14][$l];?></a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <?php
        echo $pagemaincontent;
    ?>
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left"><?php echo $ml[7][$l];?><br><?php echo $ml[8][$l];?></p>
    <p class="fl_right"><?php echo $ml[9][$l];?><a href="http://mahd.tn/" title="Ste mahd"><?php echo $ml[0][$l];?></a></p>
  </footer>
</div>
</body>
</html>
<?php
    ob_start();
    $lang="";
    if(isset($_COOKIE["lang"])){$lang=$_COOKIE["lang"];}
    else{$lang="ar";}

    $l=0;
    switch($lang){
        case "ar":$l=0;break;
        case "fr":$l=1;break;
        case "en":$l=2;break;
    };
    $ml = array(
    array("مهد", "mahd","mahd"),// 0
    array("شهادات مداغون" , "CERTIFICATS MEDIAGON", "Certificates Mediagon"),// 1
    array("المراجع", "Références", "References"),// 2
    array("النشرة الإعلامية", "Prospectus", "Prospectus"),// 3
    array("مراجع صناعية", "Références de l'industrie","Industry References"),// 4
    array("أجهزة مداغون مستخدمة في جميع أنحاء العالم التشغيل السليم للمعدات يزيد موثوقية العملية ويقلل من تكاليف الطاقة في البيئات الصناعية، المتطلبات الأمنية عالية. والحماية من الكلس له أهمية كبيرة بالنسبة لاستخدام المياه للتبريد والتدفئة والتنظيف", "Dans les environnements industriels, des exigences sécuritaires élevées sont de rigueur. La protection anticalcaire est d'une grande importance concernant l'utilisation de l'eau pour le refroidissement, le chauffage ou le nettoyage. Un fonctionnement adéquat des équipements accroît la fiabilité du processus et contribue à réduire les coûts énergétiques. Les appareils Mediagon sont utilisés dans le monde entier.", "In industrial environments, high security requirements are required. The calcification protection is of great importance for the use of water for cooling, heating and cleaning. Proper operation of the equipment increases process reliability and reduces energy costs. The Mediagon devices are used worldwide."),// 5
    );
?>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <aside style="float: left; text-align: left" id="left_column">
    <?php }else{?>
            <aside style="float: right; text-align: right" id="left_column">
    <?php }?>
      <nav>
        <ul>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="cerificat.php"><?php echo $ml[1][$l];?></a></li>
            <li><a style="color: #cc0700; font-size: 20px" href="#"><?php echo $ml[2][$l];?></a></li>
            <li><a style="color: #0282c1; font-size: 20px" href="prospectus.php"><?php echo $ml[3][$l];?></a></li>
        </ul>
      </nav>    
    </aside>

   <?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/ref.jpg" alt="Image">
            <h1 style="margin: 0px 0px 0px 5px; color: rgb(195, 7, 1)">Références</h1><br><br>
            <h2 style="color: #000">Hôtel Golf Résidence</h2>
            <p style="color: #000">Port Kantaoui, Sousse, Tunisie</p><br>
            <h2 style="color: #000">Buanderie Hôtel Sindibad</h2>
            <p style="color: #000">Hammam sousse, Sousse, Tunisie</p><br>
            <h2 style="color: #000">Hôtel Les Embassadeurs</h2>
            <p style="color: #000">Tunis, Tunisie</p><br>
            <h2 style="color: #000">Maison mounir ben miled</h2>
            <p style="color: #000">Tunis, Tunisie</p><br>
            <h2 style="color: #000">Abattoir avicol Attia</h2>
            <p style="color: #000">Nabeul, Tunisie</p><br>
            <h2 style="color: #000">Maison Ammar Hadj Mohamed</h2>
            <p style="color: #000">Chott Meriam, Sousse, Tunisie</p><br>
			<h2 style="color: #000">DESERT Wash</h2>
            <p style="color: #000">Monastir, Tunisie</p><br>
			<br><br><br>
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">Suiss References</h1><br><br>
            <h4>Entreprises</h4>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/Mediagon%20Clients%20Industriels%20Suisse.pdf" target="_blank">Suiss clients</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/Mediagon%20Clients%20Industriels%20Europe.pdf" target="_blank">Europe clients</a>
            <br><br>
            <h4>Suiss areas</h4>
            <h6 style="font-size: 12px">Suiss east</h6>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Appenzell_Ausserrhoden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Appenzell Rhodes-Extérieures</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Appenzell_Innerrhoden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Appenzell Rhodes-Intérieures</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Glarus_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Glaris</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Graubuenden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Grisons</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Schaffhausen_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Schaffhouse</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/St._Gallen_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Saint-Gall</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Thurgau_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Thurgovie</a><br>
            <h6 style="font-size: 12px">Suiss central</h6>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Luzern_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Lucerne</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Nidwalden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Nidwald</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Schwyz_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Schwyz</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Zug_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Zoug</a><br>
            <h6 style="font-size: 12px">Mitteland</h6>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Aargau_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Argovie</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Basel_Land_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Bâle-Campagne</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Basel_Stadt_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Bâle-Ville</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Bern_Ein-___Zweifamilienhaeuser2.pdf" target="_blank">Berne</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Solothurn_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Soleure</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Zuerich_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Zurich</a><br>
            <h6 style="font-size: 12px">Suiss romand</h6>
            <p>Fribourg<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_maisons_individuelles.pdf" title="Maisons individuelles" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_spciale_typ_z.pdf" title="Mediagon Spéciale Typ Z" target="_blank">Spéciale Typ Z</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_transformation.pdf" title="Mediagon Transformation" target="_blank">Transformation</a></p>
            <p>Genève<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/genve_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/genve_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a></p>
            <p>Jura<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/jura_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a></p>
            <p>Jura Bernois<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/jura_bernois_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/jura_bernois_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a></p>
            <p>Neuchâtel<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_spciale_typ_z.pdf" target="_blank">Spéciale Typ Z</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_transformation.pdf" target="_blank">Transformation</a></p>
            <p>Vaud<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_spciale_typ_z.pdf" target="_blank">Spéciale Typ Z</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_transformation.pdf" target="_blank">Transformation</a></p>
            <p>Valais<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_spciale_typ_z.pdf" target="_blank">Spéciale Typ Z</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_transformation.pdf" target="_blank">Transformation</a></p>
            <h6 style="font-size: 12px">Suiss neighboring countries</h6>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Fuerstentum_Liechtenstein_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Principauté de Liechtenstein</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Vorarlberg_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Vorarlberg</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/Mediagon_International.pdf" target="_blank">Mediagon international</a><br>
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/ref.jpg" alt="Image">
            <h1 style="margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">References</h1><br><br>
            <h2 style="color: #000">Hotel Golf Résidence</h2>
            <p style="color: #000">Port Kantaoui, Sûsah, Tunisia</p><br>
            <h2 style="color: #000">Laundry Hotel Sindibad</h2>
            <p style="color: #000">Hammam sousse, Sûsah, Tunisia</p><br>
            <h2 style="color: #000">Hotel Les Embassadeurs</h2>
            <p style="color: #000">Tunis, Tunisia</p><br>
            <h2 style="color: #000">House mounir ben miled</h2>
            <p style="color: #000">Tunis, Tunisia</p><br>
            <h2 style="color: #000">Slaughterhouse avicol Attia</h2>
            <p style="color: #000">Nabeul, Tunisia</p><br>
            <h2 style="color: #000">House Ammar Hadj Mohamed</h2>
            <p style="color: #000">Chott Meriam, Sûsah, Tunisia</p>
			<h2 style="color: #000">DESERT Wash</h2>
            <p style="color: #000">Monastir, Tunisia</p><br>
			<br><br><br>
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">Suiss References</h1><br><br>
            <h4>Entreprises</h4>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/Mediagon%20Clients%20Industriels%20Suisse.pdf" target="_blank">Suiss clients</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/Mediagon%20Clients%20Industriels%20Europe.pdf" target="_blank">Europe clients</a>
            <br><br>
            <h4>Suiss areas</h4>
            <h6 style="font-size: 12px">Suiss east</h6>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Appenzell_Ausserrhoden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Appenzell Rhodes-Extérieures</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Appenzell_Innerrhoden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Appenzell Rhodes-Intérieures</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Glarus_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Glaris</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Graubuenden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Grisons</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Schaffhausen_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Schaffhouse</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/St._Gallen_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Saint-Gall</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Thurgau_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Thurgovie</a><br>
            <h6 style="font-size: 12px">Suiss central</h6>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Luzern_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Lucerne</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Nidwalden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Nidwald</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Schwyz_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Schwyz</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Zug_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Zoug</a><br>
            <h6 style="font-size: 12px">Mitteland</h6>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Aargau_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Argovie</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Basel_Land_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Bâle-Campagne</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Basel_Stadt_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Bâle-Ville</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Bern_Ein-___Zweifamilienhaeuser2.pdf" target="_blank">Berne</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Solothurn_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Soleure</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Zuerich_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Zurich</a><br>
            <h6 style="font-size: 12px">Suiss romand</h6>
            <p>Fribourg<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_maisons_individuelles.pdf" title="Maisons individuelles" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_spciale_typ_z.pdf" title="Mediagon Spéciale Typ Z" target="_blank">Spéciale Typ Z</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_transformation.pdf" title="Mediagon Transformation" target="_blank">Transformation</a></p>
            <p>Genève<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/genve_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/genve_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a></p>
            <p>Jura<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/jura_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a></p>
            <p>Jura Bernois<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/jura_bernois_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/jura_bernois_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a></p>
            <p>Neuchâtel<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_spciale_typ_z.pdf" target="_blank">Spéciale Typ Z</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_transformation.pdf" target="_blank">Transformation</a></p>
            <p>Vaud<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_spciale_typ_z.pdf" target="_blank">Spéciale Typ Z</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_transformation.pdf" target="_blank">Transformation</a></p>
            <p>Valais<br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_maisons_individuelles.pdf" target="_blank">Maisons individuelles</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_installations_importantes.pdf" target="_blank">Installation importantes (Type P &amp; I)</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_spciale_typ_z.pdf" target="_blank">Spéciale Typ Z</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_transformation.pdf" target="_blank">Transformation</a></p>
            <h6 style="font-size: 12px">Suiss neighboring countries</h6>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Fuerstentum_Liechtenstein_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Principauté de Liechtenstein</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Vorarlberg_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Vorarlberg</a><br>
                - <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/Mediagon_International.pdf" target="_blank">Mediagon international</a><br>
        </div>
    <?php }elseif($lang=="ar"){?>
        <div style="display: block; width:630px; float: right; text-align: right" >
            <img id="img" width=100% style="padding: 10px" src="images/ref.jpg" alt="Image">
            <h1 style="margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">المراجع</h1><br><br>
            <h2 style="color: #000">Golf Résidence فندق</h2>
            <p style="color: #000">ميناء القنطاوي، سوسة، تونس</p><br>
            <h2 style="color: #000">مغسلة فندق سندباد</h2>
            <p style="color: #000">حمام سوسة، سوسة، تونس</p><br>
            <h2 style="color: #000">Les Embassadeurs فندق</h2>
            <p style="color: #000">تونس</p><br>
            <h2 style="color: #000">منزل منير بن ميلاد</h2>
            <p style="color: #000">تونس</p><br>
            <h2 style="color: #000">avicol Attia مسلخة</h2>
            <p style="color: #000">نابل، تونس</p><br>
            <h2 style="color: #000">منزل عمار حاج محمد</h2>
            <p style="color: #000">شط مريم، سوسة، تونس</p><br><br>
			<h2 style="color: #000">DESERT Wash</h2>
            <p style="color: #000">المنستير، تونس</p><br>
			<br><br><br>
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">في سويسرا</h1><br><br>
            <h4>المؤسسات</h4>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/Mediagon%20Clients%20Industriels%20Suisse.pdf" target="_blank">حرفاء سويسرا</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/Mediagon%20Clients%20Industriels%20Europe.pdf" target="_blank">حرفاء أوروبا</a> -
            <br><br>
            <h4>المناطق</h4>
            <h6 style="font-size: 12px">شرق سويسرا</h6>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Appenzell_Ausserrhoden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Appenzell Rhodes-Extérieures</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Appenzell_Innerrhoden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Appenzell Rhodes-Intérieures</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Glarus_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Glaris</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Graubuenden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Grisons</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Schaffhausen_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Schaffhouse</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/St._Gallen_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Saint-Gall</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Thurgau_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Thurgovie</a> -<br>
            <h6 style="font-size: 12px">وسط سويسرا</h6>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Luzern_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Lucerne</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Nidwalden_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Nidwald</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Schwyz_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Schwyz</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Zug_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Zoug</a> -<br>
            <h6 style="font-size: 12px">ميدلاند</h6>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Aargau_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Argovie</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Basel_Land_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Bâle-Campagne</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Basel_Stadt_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Bâle-Ville</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Bern_Ein-___Zweifamilienhaeuser2.pdf" target="_blank">Berne</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Solothurn_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Soleure</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Zuerich_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Zurich</a> -<br>
            <h6 style="font-size: 12px">سويسرا الناطقة بالفرنسية</h6>
            <p>Fribourg<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_maisons_individuelles.pdf" title="Maisons individuelles" target="_blank">منازل شخصية</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_installations_importantes.pdf" target="_blank">أهمّ التثبيتات نوع P و I</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_spciale_typ_z.pdf" title="Mediagon Spéciale Typ Z" target="_blank">اختصاص نوع Z</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/fribourg_transformation.pdf" title="Mediagon Transformation" target="_blank">التحويلات</a> -</p>
            <p>Genève<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/genve_maisons_individuelles.pdf" target="_blank">منازل شخصية</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/genve_installations_importantes.pdf" target="_blank">أهمّ التثبيتات نوع P و I</a> -</p>
            <p>Jura<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/jura_maisons_individuelles.pdf" target="_blank">منازل شخصية</a> -</p>
            <p>Jura Bernois<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/jura_bernois_maisons_individuelles.pdf" target="_blank">منازل شخصية</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/jura_bernois_installations_importantes.pdf" target="_blank">أهمّ التثبيتات نوع P و I</a> -</p>
            <p>Neuchâtel<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_maisons_individuelles.pdf" target="_blank">منازل شخصية</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_installations_importantes.pdf" target="_blank">أهمّ التثبيتات نوع P و I</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_spciale_typ_z.pdf" target="_blank">اختصاص نوع Z</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/neuchtel_transformation.pdf" target="_blank">التحويلات</a> -</p>
            <p>Vaud<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_maisons_individuelles.pdf" target="_blank">منازل شخصية</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_installations_importantes.pdf" target="_blank">أهمّ التثبيتات نوع P و I</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_spciale_typ_z.pdf" target="_blank">اختصاص نوع Z</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/vaud_transformation.pdf" target="_blank">التحويلات</a> -</p>
            <p>Valais<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_maisons_individuelles.pdf" target="_blank">منازل شخصية</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_installations_importantes.pdf" target="_blank">أهمّ التثبيتات نوع P و I</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_spciale_typ_z.pdf" target="_blank">اختصاص نوع Z</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/valais_transformation.pdf" target="_blank">التحويلات</a> -</p>
            <h6 style="font-size: 12px">البلدان المجاورة لسويسرا</h6>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Fuerstentum_Liechtenstein_Ein-___Zweifamilienhaeuser.pdf" target="_blank">إمارة Liechtenstein</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenzen/Vorarlberg_Ein-___Zweifamilienhaeuser.pdf" target="_blank">Vorarlberg</a> -<br>
                <a href="http://www.mediagon.ch/fileadmin/Webmaster/Dokumente/Referenz/Mediagon_International.pdf" target="_blank">العالمية Mediagon</a> -<br>
        </div>
    <?php }?>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>
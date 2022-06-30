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
    array("الصفحة الرسمية  |" , "|  ACCUEIL", "|  Home"),// 1
    array("المنتوجات  |", "|   Nos Produits", "|   Products"),// 2
    );
?>
    <script>
        function ChangeClass(id) {
            if (document.getElementById(id).getAttribute("class") == "collapsed") {
                document.getElementById("a").setAttribute("class", "collapsed");
                document.getElementById("b").setAttribute("class", "collapsed");
                document.getElementById("c").setAttribute("class", "collapsed");
                document.getElementById("d").setAttribute("class", "collapsed");
                document.getElementById(id).setAttribute("class", "expended");
            }
            else {
                document.getElementById("a").setAttribute("class", "collapsed");
                document.getElementById("b").setAttribute("class", "collapsed");
                document.getElementById("c").setAttribute("class", "collapsed");
                document.getElementById("d").setAttribute("class", "collapsed");
                document.getElementById(id).setAttribute("class", "collapsed");
            }
        }
    </script>

<?php if($lang=="fr"){?>
    <div style="float: left !important; text-align: left !important" id="homepage">
      <!-- One Quarter -->
      <section style="float: inherit; text-align: inherit;" id="latest" class="clear">
        <article class="one_quarter" style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("a")>
          <figure style="background-color: rgba(205, 6, 0, 0.8)"><img src="images/img1.jpg" width="100%" alt="Image">
            <figcaption>Maison à 1 ou 2 familles</figcaption>
          </figure>
        </article>
        <article class="one_quarter"style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("b")>
          <figure style="background-color: rgba(38, 137, 4, 0.8)"><img src="images/img2.jpg" width="100%" alt="Image">
            <figcaption>Grandes maisons et immeubles</figcaption>
          </figure>
        </article>
        <article class="one_quarter" style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("c")>
          <figure style="background-color: rgba(103, 1, 230, 0.8)"><img src="images/img3.jpg" width="100%" alt="Image">
            <figcaption>Commerce et industrie<br>&nbsp;&nbsp;&nbsp;</figcaption>
          </figure>
        </article>
        <article class="one_quarter lastbox" style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("d")>
          <figure style="background-color: rgba(230, 125, 1, 0.8)"><img src="images/img4.jpg" width="100%" alt="Image">
            <figcaption>Wellness, Hôtels et Hôpitaux</figcaption>
          </figure>
        </article>
      </section>
        <div id="a" style="background-color: rgba(205, 6, 0, 0.98); position: fixed; z-index: 110; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
                <img style="float: right; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('a')">
                <img style="float: left" src="images/logo_white_box.jpg" alt="Image">
                <div style="float: left; width: 400px">
                    <h5 style="text-transform:  none; float: left; margin: 100px 0px 0px 20px; color: #fff8f8; font-size: 20px">Maison à 1 ou 2 familles</h5>
                    <h6 style="text-transform:  none; float: left; margin: 20px; color: #fff8f8; font-size: 11px">
                        Test sans obligation d'achat pour propriétaires particuliers
                        La technologie Mediagon protège le réseau d'eau,  la robinetterie, les machines et installations, améliore le confort et protège la nature.<br><br>

                        Nous ne voulons que des clients satisfaits. Notre philosophie est: 
                        Tester d'abord, acheter après être personnellement persuadé.<br><br>
                    
                        Afin d'être persuadé que chez vous également un test sans frais d'installation est possible, une offre sur place vous est délivrée.<br>
                        Ce devis est évidemment gratuit pour vous.
                    </h6>
                </div>       
                <div style="float: left; width: 250px">
                    <h5 style="text-transform: none; color: #fff8f8; margin: 100px 0px 0px 20px;">Intéressé?</h5>

                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 12px">
                        Alors appelez-nous au: +216 73349902,+216 73349903 ou remplissez <br> 
                        notre formulaire de demande de test.<br><br>
                    </h4>
                    <a style="font-size: 18px; background-color: white; color: red; padding: 5px; cursor: pointer" href="test.php">TESTEZ MAINTENANT*</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* possible uniquement en Suisse, France et Allemagne</h6>
                </div>
            </div>
        </div>
        <div id="b" style="background-color: rgba(38, 137, 4, 0.98); position: fixed; z-index: 111; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
                <img style="float: right; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('b')">
                <img style="float: left" src="images/mediagon_logo_white_box2.jpg" alt="Image">
                <div style="float: left; width: 400px">
                    <h5 style="text-transform:  none; float: left; margin: 100px 0px 0px 20px; color: #fff8f8; font-size: 20px">Grandes maisons et immeubles</h5>
                    <h6 style="text-transform:  none; float: left; margin: 20px; color: #fff8f8; font-size: 11px">
                        La technologie Mediagon protège le réseau d'eau, la robinetterie, les machines et installations, l'embout des robinets, améliore le confort et protège la nature. Elle est performante aussi bien sur les installations neuves que anciennes.<br><br>
                        Louer avant achat<br>
                        Pour propriétaires d'immeuble, d'appartement en copropriété, architectes, nous offrons la location avant achat, afin que chacun puisse se persuader des résultats. Nous vous soumettons volontiers une offre.
                    </h6>
                </div>   
                <div style="float: left; width: 250px">
                    <h5 style="text-transform: none; color: #fff8f8; margin: 100px 0px 0px 20px;">Intéressé?</h5>

                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 11px">
                        Alors appelez-nous au: +216 73349902,+216 73349903 ou demandez sans engagement des informations détaillées.<br><br>
                        Nous vous faisons volontiers tenir la documentation nécessaire, ou vous renseignons personnellement sur place.<br><br>
                    </h4>
                    <a style="font-size: 18px; background-color: white; color: green; padding: 5px; cursor: pointer" href="contact.php">LOCATION ET VENTE*</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* possible uniquement en Suisse, France et Allemagne</h6>
                </div>
            </div>
        </div>
        <div id="c" style="background-color: rgba(103, 1, 230, 0.98); position: fixed; z-index: 112; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
              <img style="float: right; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('c')">
              <img style="float: left" src="images/mediagon_logo_white_box3.jpg" alt="Image">
              <div style="float: left; width: 400px">
                    <h5 style="text-transform:  none; float: left; margin: 100px 0px 0px 20px; color: #fff8f8; font-size: 20px">Commerces et industries</h5>
                    <h6 style="text-transform:  none; float: left; margin: 20px; color: #fff8f8; font-size: 11px">
                        La technologie Mediagon convient à toute installation industrielle avec circuit de refroidissement ou nécessitant l'énergie hydraulique. Les avantages suivant sont à attendre:<br>
                        ♦ augmentation de la sécurité de production<br>
                        ♦ refroidissement constant<br>
                        ♦ diminution des temps de nettoyage<br>
                        ♦ amélioration des temps de chauffe<br>
                        ♦ diminution des frais en énergie<br>
                        ♦ diminution des temps de maintenance et de contrôle<br>
                    </h6>
              </div>
              <div style="float: left; width: 250px">
                    <h5 style="text-transform: none; color: #fff8f8; margin: 100px 0px 0px 20px;">Intéressé?</h5>

                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 11px">
                        Alors appelez-nous au: +216 73349902,+216 73349903 ou demandez sans engagement des informations détaillées.<br>
                        Nous vous faisons volontiers tenir la documentation nécessaire, ou vous renseignons personnellement sur place.<br><br>
                    </h4>
                    <a style="font-size: 18px; background-color: white; color: blue; padding: 5px; cursor: pointer" href="contact.php">LOCATION ET VENTE*</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* possible uniquement en Suisse, France et Allemagne</h6>
                </div>
           </div>  
        </div>
        <div id="d" style="background-color: rgba(230, 125, 1, 0.98); position: fixed; z-index: 113; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
                <img style="float: right; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('d')">
                <img style="float: left" src="images/mediagon_logo_white_box4.jpg" alt="Image">
                <div style="float: left; width: 400px">
                    <h5 style="text-transform:  none; float: left; margin: 100px 0px 0px 20px; color: #fff8f8; font-size: 20px">Wellnes, Hôtels et Hôpitaux</h5>
                    <h6 style="text-transform:  none; float: left; margin: 20px; color: #fff8f8; font-size: 11px">
                        La technologie Mediagon protège les installations, la robinetterie, les machines ainsi que les embouts de robinets au contact de l'eau. Elle améliore le confort et protège l'environnement.<br>
                    </h6>
              </div>
                <div style="float: left; width: 250px">
                    <h5 style="text-transform: none; color: #fff8f8; margin: 100px 0px 0px 20px;">Intéressé?</h5>

                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 11px">
                        Alors appelez-nous au: +216 73349902,+216 73349903 ou demandez sans engagement des informations détaillées.<br>
                        Nous vous faisons volontiers tenir la documentation nécessaire, ou vous renseignons personnellement sur place.<br><br>
                    </h4>
                    <a style="font-size: 18px; background-color: white; color: rgba(230, 125, 1, 1); padding: 5px; cursor: pointer"  href="contact.php">LOCATION ET VENTE*</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* possible uniquement en Suisse, France et Allemagne</h6>
                </div>
            </div>
        </div>
      <!-- / One Quarter -->
      <section style="float: inherit; text-align: inherit;" id="shout">
        <div style="float: inherit; text-align: inherit; width: 500px">
          <h1 style="margin: 0px 0px 15px; padding: 0px; color: rgb(195, 7, 1); font-size: 17px; text-transform: uppercase; font-family: arial, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		  BIENVENU CHEZ MEDIAGON</h1>
		  <p style="margin: 0px; padding: 0px 0px 16px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		  <strong style="margin: 0px; padding: 0px;">Protéger vos 
		  installations…avant qu'il ne soit trop tard!</strong></p>
		  <p style="margin: 0px; padding: 0px 0px 16px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		  Mediagon diminue de nouveaux dépôts durs de calcaire dans les 
		  conduites et chauffe-eau, et prolonge la durée de vie des 
		  installations et appareils ménagers.<span class="Apple-converted-space">&nbsp;</span><br style="margin: 0px; padding: 0px;">
		  Le principe<span class="Apple-converted-space">&nbsp;</span>est aussi 
		  simple qu'effectif. L'eau traverse de nombreuses lignes de champs 
		  statiques et est ainsi polarisée. De ce fait, le calcaire n'a 
		  momentanément plus la possibilité de se former et de durcir. Il en 
		  résulte un dépôt notablement plus mou, lequel s'éloigne facilement 
		  avec un chiffon ou une brosse. Les lignes de champ disposées finement 
		  empêchent l'adhérence des particules ferrigineuses.<br><br>
          Lors de tests neutres, il a été prouvé que Mediagon influence positivement la vitalisation de l'eau.<br><br>
          Test sans obligation d'achat.<br><br>
              <a href="test.php"><img style="cursor: pointer" src="images/tester_fr.png" alt="Image" width="200" height="46"></a>
          </p>
        </div>
          <div style="float: inherit; text-align: inherit; width: 400px">
                <h1 style="margin: 0px 30px 15px; padding: 0px; color: rgb(195, 7, 1); font-size: 17px; text-transform: uppercase; font-family: arial, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		            NOTRE POTENTIEL<br>
                </h1>
              <h6 style="float: left; margin: 0px 30px 15px; text-transform: none; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px;">
                  <a href="waterprocessing.php">
                ♦ aucune maintenance<br>
                ♦ sans électricité, ni frais d'entretien<br>
                ♦ sans adjonction chimique<br>
                ♦ prolongation du réseau d'eau et de la robinetterie<br>
                ♦ prolongation de la vie des instruments de cuisine<br>
                ♦ notable économie d'énergie<br>
                ♦ longue garantie du fabricant<br>
                ♦ Prévention de la formation et des dépôts de calcaire / tartre sous forme incrustante<br>
                ♦ Action curative lente et progressive (nettoyage) des incrustations existantes<br>
                ♦ Suppression des dépôts de boues dans les circuits d’eau de chauffage<br>
                ♦ Amélioration des écoulements en conservant les dimensions d’origine des installations<br>
                ♦ Réduction de la corrosion et des frais de maintenance des installations<br>
                ♦ Réduction de la prolifération des algues et des champignons<br>
                ♦ Purification de l’eau au niveau bactériologique<br>
                ♦ Lutte contre la présence et le développement des légionelles<br>
                      </a>
              </h6>
			  <br><br>
			  <a style="background-color: #0094ff;padding: 15px;color: #fff;font-size: 150%;float:left" href="waterprocessing.php">Avantages du traitement de l'eau</a>
          </div>
      </section>
        <a style="background-color: #0094ff;padding: 15px;color: #fff;font-size: 150%" href="testimony.php">Témoignage</a><br><br><br>
    </div>
<br><iframe width="315" height="250" src="//www.youtube.com/embed/FrQmWzJoQjE?rel=0" frameborder="0" allowfullscreen></iframe>
    <iframe width="315" height="250" src="//www.youtube.com/embed/9oXcKII0IiU?rel=0" frameborder="0" allowfullscreen></iframe>
	<iframe width="315" height="250" src="//www.youtube.com/embed/FJZUg1Maz0k?rel=0" frameborder="0" allowfullscreen></iframe>
<!--
<br><video src="v1.webm" poster="v1.jpg" style="width: 45%; height: 350px" controls></video>
          <video src="v2.webm" poster="v2.jpg" style="width: 45%; height: 350px" controls></video>
          <video src="v3.webm" poster="v3.jpg" style="width: 80%; height: 450px" controls></video>
-->
<?php }elseif ($lang=="ar"){?>
    <div style="float: right !important; text-align: right !important" id="homepage">
      <!-- One Quarter -->
      <section style="float: inherit; text-align: inherit;" id="latest" class="clear">
        <article class="one_quarter" style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("a")>
          <figure style="background-color: rgba(205, 6, 0, 0.8)"><img src="images/img1.jpg" width="100%" alt="Image">
            <figcaption style="font-size: 18px">منزل لعائلة أو إثنين</figcaption>
          </figure>
        </article>
        <article class="one_quarter"style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("b")>
          <figure style="background-color: rgba(38, 137, 4, 0.8)"><img src="images/img2.jpg" width="100%" alt="Image">
            <figcaption style="font-size: 18px">المنازل والمباني الكبيرة</figcaption>
          </figure>
        </article>
        <article class="one_quarter" style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("c")>
          <figure style="background-color: rgba(103, 1, 230, 0.8)"><img src="images/img3.jpg" width="100%" alt="Image">
            <figcaption style="font-size: 18px">مباني تجارية وصناعية</figcaption>
          </figure>
        </article>
        <article class="one_quarter lastbox" style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("d")>
          <figure style="background-color: rgba(230, 125, 1, 0.8)"><img src="images/img4.jpg" width="100%" alt="Image">
            <figcaption style="font-size: 18px">فنادق إستحمام و مستشفيات</figcaption>
          </figure>
        </article>
      </section>
        <div id="a" style="background-color: rgba(205, 6, 0, 0.98); position: fixed; z-index: 110; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
                <img style="float: left; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('a')">
                <img style="float: right" src="images/logo_white_box.jpg" alt="Image">
                <div style="text-align: right; float: right; width: 400px">
                    <h5 style="text-transform:  none; float: right; margin: 100px 20px 0px 0px; color: #fff8f8; font-size: 23px">منزل لعائلة أو إثنين</h5>
                    <h6 style="text-transform:  none; float: right; margin: 20px; color: #fff8f8; font-size: 15px">
                        <br><br>الاختبار دون التزام بالشراء من القطاع الخاص
                         ،تكنلوجيا مداغون تحمي نظام المياه والصمامات، والآلات والمعدات، ويعزز الراحة ويحمي الطبيعة <br><br>
                        
                         نحن نريد رضى العملاء. فلسفتنا هي <br>
                         الاختبار أولا، ثم الشراء بعد الإقتناع الذاتي
                        <br><br>
                        هذه العملية تقدم لك مجانا
                    </h6>
                </div>       
                <div style="float: left; width: 250px">
                    <h5 style="text-transform: none; color: #fff8f8; margin: 100px 0px 0px 23px;">مهتم؟</h5>

                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 15px">
                        اتصل بنا على العنوان التالي: +216 73349902,+216 73349903 أو ملء <br> 
                        إستمارة طلب الإختبار<br><br>
                    </h4>
                    <a style="font-size: 20px; background-color: white; color: red; padding: 5px; cursor: pointer" href="test.php">إختبر الآن*</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* متوفر فقط في سويسرا وفرنسا وألمانيا</h6>
                </div>
            </div>
        </div>
        <div id="b" style="background-color: rgba(38, 137, 4, 0.98); position: fixed; z-index: 111; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
                <img style="float: left; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('b')">
                <img style="float: right" src="images/mediagon_logo_white_box2.jpg" alt="Image">
                <div style="float: right; width: 400px">
                    <h5 style="text-transform:  none; float: right; margin: 100px 20px 0px 0px; color: #fff8f8; font-size: 23px">المنازل والمباني الكبيرة</h5>
                    <h6 style="text-transform:  none; float: right; margin: 20px; color: #fff8f8; font-size: 16px">
                        تكنولوجيا مداغون  يحمي إمدادات المياه، والتجهيزات والمنشآت والآلات والصنابير، يحسن من الراحة ويحمي الطبيعة وهو فعال لكل جديد والمرافق القديمة.  
                        <br><br>
                        استئجر قبل أن تشتري<br>
                        لأصحاب المباني، العمارات، والمهندسين المعماريين، نقدم استئجار قبل الشراء بحيث يمكن للجميع أن يقتنع من النتائج
                    </h6>
                </div>   
                <div style="float: right; width: 250px">
                    <h5 style="text-transform: none; color: #fff8f8; margin: 100px 0px 0px 20px; font-size: 18px">مهتم؟</h5>

                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 15px">
                        اتصل بنا على العنوان التالي 
                        <br>
                        +216 73349902,+216 73349903
                        <br>
                        أو اطلب من دون التزام معلومات مفصلة<br><br>
                        <br>
                        ونسر بأخذ الوثائق الازمة و مساعدة العملاء شخصيا على الموقع<br>
                    </h4>
                    <br><br>
                    <a style="font-size: 20px; background-color: white; color: green; padding: 5px; cursor: pointer" href="contact.php">تأجير وبيع *</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* متوفر فقط في سويسرا وفرنسا وألمانيا</h6>
                </div>
            </div>
        </div>
        <div id="c" style="background-color: rgba(103, 1, 230, 0.98); position: fixed; z-index: 112; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
              <img style="float: left; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('c')">
              <img style="float: right" src="images/mediagon_logo_white_box3.jpg" alt="Image">
              <div style="float: right; width: 400px">
                    <h5 style="text-transform:  none; float: right; margin: 100px 20px 0px 0px; color: #fff8f8; font-size: 23px">مباني تجارية وصناعية</h5>
                    <h6 style="text-transform:  none; float: right; margin: 20px; color: #fff8f8; font-size: 15px">
                        تكنلوجيا مداغون مناسبة لكل منشأة صناعية مع التبريد أو التي تحتاج إلى طاقة هيدروليكية. ولها الفوائد التالية<br>
                         زيادة سلامة الانتاج♦<br>
                        تبريد ثابت ♦<br>
                        خفض مرات التنظيف ♦<br>
                        تحسين وقت التدفئة ♦<br>
                        انخفاض تكاليف الطاق ♦<br>
                        انخفاض وقت الصيانة ♦<br>
                    </h6>
              </div>
              <div style="float: left; width: 250px">
                    <h5 style="font-size: 20px; text-transform: none; color: #fff8f8; margin: 100px 20px 0px 0px;">مهتم؟</h5>
                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 15px">
                        اتصل بنا على العنوان التالي 
                        <br>
                        +216 73349902,+216 73349903
                        <br>
                        أو اطلب من دون التزام معلومات مفصلة<br><br>
                        <br>
                        ونسر بأخذ الوثائق الازمة و مساعدة العملاء شخصيا على الموقع<br>
                    </h4>
                  <br><br>
                    <a style="font-size: 18px; background-color: white; color: blue; padding: 5px; cursor: pointer"  href="contact.php">تأجير وبيع *</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* متوفر فقط في سويسرا وفرنسا وألمانيا</h6>
                </div>
           </div>  
        </div>
        <div id="d" style="background-color: rgba(230, 125, 1, 0.98); position: fixed; z-index: 113; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
                <img style="float: left; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('d')">
                <img style="float: right" src="images/mediagon_logo_white_box4.jpg" alt="Image">
                <div style="float: right; width: 400px">
                    <h5 style="text-transform:  none; float: right; margin: 100px 20px 0px 0px; color: #fff8f8; font-size: 23px">فنادق إستجمام و مستشفيات</h5>
                    <h6 style="text-transform:  none; float: right; margin: 20px; color: #fff8f8; font-size: 15px">
                        تكنلوجيا مداغون تحمي المنشآت والتجهيزات والآلات و الصمامات التي في اتصال مع الماء ويحسن الراحة ويحمي البيئة
                        <br>
                    </h6>
              </div>
                <div style="float: left; width: 250px">
                    <h5 style="font-size: 20px; text-transform: none; color: #fff8f8; margin: 100px 20px 0px 0px;">مهتم؟</h5>
                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 15px">
                        اتصل بنا على العنوان التالي 
                        <br>
                        +216 73349902,+216 73349903
                        <br>
                        أو اطلب من دون التزام معلومات مفصلة<br><br>
                        <br>
                        ونسر بأخذ الوثائق الازمة و مساعدة العملاء شخصيا على الموقع<br>
                    </h4>
                  <br><br>
                    <a style="font-size: 18px; background-color: white; color: rgba(230, 125, 1, 1); padding: 5px; cursor: pointer" href="contact.php">تأجير وبيع *</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* متوفر فقط في سويسرا وفرنسا وألمانيا</h6>
                </div>
            </div>
        </div>
      <!-- / One Quarter -->
      <section style="float: right; text-align: right;" id="shout">
        <div style="float: right; text-align: right; width: 500px">
          <h1 style="float: right; text-align: right; margin: 0px 0px 15px; padding: 0px; color: rgb(195, 7, 1); font-size: 20px; text-transform: uppercase; font-family: arial, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		  MEDIAGON مرحبا بك في </h1><br><br>
		  <p style="float: right; text-align: right; margin: 0px; padding: 0px 0px 16px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		  <strong style="float: right; text-align: right; font-size: 18px; margin: 0px; padding: 0px;">
              إحمي منشأتك قبل فوات الأوان
		  </strong></p>
		  <p style="float: right; text-align: right !Important; margin: 0px; padding: 0px 0px 16px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		  مداغون يقلل من الحجر الجيري في أنابيب وسخانات المياه، ويطيل من عمر المنشآت والأجهزة المنزلية
		  والمبدأ بسيط و فعال<br>
              يمر الماء من خلال العديد من خطوط من الحقول الثابتة، والمستقطبة  
              ولذلك، فإن الحجر الجيري لديه لحظات لإمكانية التشكيل والتصلب
            <br>
             والنتيجة هي بقايا لينة تبعد بسهولة بقطعة قماش أو فرشاة<br>
               خطوط الحقل المرتبة تمنع إلتصاق الجزيئات<br><br>
          في اختبارات محايدة، ثبت أن مداغون يؤثر بشكل إيجابي في إنعاش المياه<br><br>
          اختبار دون الإلزام بالشراء<br><br>
             <a href="test.php"><img style="cursor: pointer" src="images/tester_ar.png" alt="Image" width="200" height="46"></a>
          </p>
        </div>
          <div style="float: inherit; text-align: inherit; width: 400px">
                <h1 style="text-align: right !Important; margin: 0px 160px 15px; padding: 0px; color: rgb(195, 7, 1); font-size: 20px; text-transform: uppercase; font-family: arial, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		            امكاناتنا<br>
                </h1>
              <h6 style="text-align: right !Important; float: left; margin: 0px 30px 15px; text-transform: none; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 18px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px;">
                  <a href="waterprocessing.php">
                لا يوجد أي صيانة ♦<br>
                بدون تكاليف الكهرباء والصيانة ♦<br>
                دون إضافات كيميائية ♦<br>
                تمديد عمر أنابيب المياه والمعدات ♦<br>
                تمديد فترة حياة أدوات المطبخ ♦<br>
                توفير كبير في الطاقة ♦<br>
                ضمان طويل في الصنع ♦<br>
                منع تكون القشور و / التكلس في شكل المغلف ♦<br>
                العلاج بطيئ وتدريجي من التطعيم ♦<br>
                إزالة رواسب الحمأة في دوائر تسخين المياه ♦<br>
                تحسين تدفق صيانة المرافق الأبعاد الأصلية ♦<br>
                تخفيض تكاليف التآكل وصيانة المرافق ♦<br>
                الحد من الطحالب والفطريات ♦<br>
                تنقية المياه البكتريولوجية ♦<br>
                مضادّ للبكتيريا ♦<br>
                  </a>
              </h6>
			  <br><br>
			  <a style="background-color: #0094ff;padding: 15px;color: #fff;font-size: 150%;float:right" href="waterprocessing.php">مزايا معالجة المياه</a>
          </div>
      </section>
        <a style="background-color: #0094ff;padding: 15px;color: #fff;font-size: 150%" href="testimony.php">الشهادة</a><br><br><br>
    </div>
<br><iframe width="315" height="250" src="//www.youtube.com/embed/FrQmWzJoQjE?rel=0" frameborder="0" allowfullscreen></iframe>
    <iframe width="315" height="250" src="//www.youtube.com/embed/9oXcKII0IiU?rel=0" frameborder="0" allowfullscreen></iframe>
	<iframe width="315" height="250" src="//www.youtube.com/embed/FJZUg1Maz0k?rel=0" frameborder="0" allowfullscreen></iframe>
<!--
          <br><video src="v1.webm" poster="v1.jpg" style="width: 45%; height: 350px" controls></video>
          <video src="v2.webm" poster="v2.jpg" style="width: 45%; height: 350px" controls></video>
          <video src="v3.webm" poster="v3.jpg" style="width: 80%; height: 450px" controls></video>
-->
<?php }elseif ($lang=="en"){?>
<div style="float: left !important; text-align: left !important" id="homepage">
      <!-- One Quarter -->
      <section style="float: inherit; text-align: inherit;" id="latest" class="clear">
        <article class="one_quarter" style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("a")>
          <figure style="background-color: rgba(205, 6, 0, 0.8)"><img src="images/img1.jpg" width="100%" alt="Image">
            <figcaption>House for one or two families</figcaption>
          </figure>
        </article>
        <article class="one_quarter"style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("b")>
          <figure style="background-color: rgba(38, 137, 4, 0.8)"><img src="images/img2.jpg" width="100%" alt="Image">
            <figcaption>Large houses and buildings</figcaption>
          </figure>
        </article>
        <article class="one_quarter" style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("c")>
          <figure style="background-color: rgba(103, 1, 230, 0.8)"><img src="images/img3.jpg" width="100%" alt="Image">
            <figcaption>Trade and industry<br>&nbsp;&nbsp;&nbsp;</figcaption>
          </figure>
        </article>
        <article class="one_quarter lastbox" style="float: inherit; text-align: inherit; cursor: pointer" onclick=ChangeClass("d")>
          <figure style="background-color: rgba(230, 125, 1, 0.8)"><img src="images/img4.jpg" width="100%" alt="Image">
            <figcaption>Wellness Hotels and Hospitals</figcaption>
          </figure>
        </article>
      </section>
        <div id="a" style="background-color: rgba(205, 6, 0, 0.98); position: fixed; z-index: 110; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
                <img style="float: right; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('a')">
                <img style="float: left" src="images/logo_white_box.jpg" alt="Image">
                <div style="float: left; width: 400px">
                    <h5 style="text-transform:  none; float: left; margin: 100px 0px 0px 20px; color: #fff8f8; font-size: 20px">House for one or two families</h5>
                    <h6 style="text-transform:  none; float: left; margin: 20px; color: #fff8f8; font-size: 11px">
                        Test without obligation to purchase private owners
                        The Mediagon technology protects the water system, valves, machinery and equipment, enhances comfort and protects nature.<br><br>

                        We want satisfied customers. Our philosophy is:
                        First test, after being personally persuaded buy.<br><br>
                    
                        Afin d'être persuadé que chez vous également un test sans frais d'installation est possible, une offre sur place vous est délivrée.<br>
                        This estimate is obviously free to you.
                    </h6>
                </div>       
                <div style="float: left; width: 250px">
                    <h5 style="text-transform: none; color: #fff8f8; margin: 100px 0px 0px 20px;">Interested?</h5>

                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 12px">
                        Then call us at: +216 73349902,+216 73349903 or fill <br> 
                        our test application form.<br><br>
                    </h4>
                    <a style="font-size: 18px; background-color: white; color: red; padding: 5px; cursor: pointer" href="test.php">TEST NOW *</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* Available only in Switzerland, France and Germany</h6>
                </div>
            </div>
        </div>
        <div id="b" style="background-color: rgba(38, 137, 4, 0.98); position: fixed; z-index: 111; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
                <img style="float: right; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('b')">
                <img style="float: left" src="images/mediagon_logo_white_box2.jpg" alt="Image">
                <div style="float: left; width: 400px">
                    <h5 style="text-transform:  none; float: left; margin: 100px 0px 0px 20px; color: #fff8f8; font-size: 20px">Large houses and buildings</h5>
                    <h6 style="text-transform:  none; float: left; margin: 20px; color: #fff8f8; font-size: 11px">
                        The Mediagon technology protects the water supply, fittings, plant and machinery, the tip taps, improves comfort and protects nature. It is effective on both new as old facilities.<br><br>
                        Rent before you buy<br>
                        For building owners, apartment condominium, architects, we offer rental before purchase so that everyone can be convinced of the results. We will gladly submit an offer.
                    </h6>
                </div>   
                <div style="float: left; width: 250px">
                    <h5 style="text-transform: none; color: #fff8f8; margin: 100px 0px 0px 20px;">Interested?</h5>

                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 11px">
                        Then call us at: +216 73349902,+216 73349903 or have no obligation details.<br><br>
                        We gladly take the necessary documentation and can help customers personally on site.<br><br>
                    </h4>
                    <a style="font-size: 18px; background-color: white; color: green; padding: 5px; cursor: pointer" href="contact.php">RENTAL AND SALE *</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* Available only in Switzerland, France and Germany</h6>
                </div>
            </div>
        </div>
        <div id="c" style="background-color: rgba(103, 1, 230, 0.98); position: fixed; z-index: 112; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
              <img style="float: right; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('c')">
              <img style="float: left" src="images/mediagon_logo_white_box3.jpg" alt="Image">
              <div style="float: left; width: 400px">
                    <h5 style="text-transform:  none; float: left; margin: 100px 0px 0px 20px; color: #fff8f8; font-size: 20px">Business and industry</h5>
                    <h6 style="text-transform:  none; float: left; margin: 20px; color: #fff8f8; font-size: 11px">
                        The Mediagon technology suitable for any industrial facility with cooling or requiring hydraulic power. The following benefits are expected:<br>
                        ♦ increase production safety<br>
                        ♦ bias cooling<br>
                        ♦ decrease cleaning times<br>
                        ♦ improved heating time<br>
                        ♦ lower energy costs<br>
                        ♦ reduced maintenance time and control<br>
                    </h6>
              </div>
              <div style="float: left; width: 250px">
                    <h5 style="text-transform: none; color: #fff8f8; margin: 100px 0px 0px 20px;">Interested?</h5>

                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 11px">
                        Then call us at: +216 73349902,+216 73349903 or have no obligation details.<br>
                        We gladly take the necessary documentation and can help customers personally on site ..<br><br>
                    </h4>
                    <a style="font-size: 18px; background-color: white; color: blue; padding: 5px; cursor: pointer" href="contact.php">RENTAL AND SALE *</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* Available only in Switzerland, France and Germany</h6>
                </div>
           </div>  
        </div>
        <div id="d" style="background-color: rgba(230, 125, 1, 0.98); position: fixed; z-index: 113; left: 0px; width:100%; height:400px;" class="collapsed">
            <div class="abcdcontent">
                <img style="float: right; margin: 20px; cursor: pointer"src="images/close_btn.png" alt="Image" onclick="ChangeClass('d')">
                <img style="float: left" src="images/mediagon_logo_white_box4.jpg" alt="Image">
                <div style="float: left; width: 400px">
                    <h5 style="text-transform:  none; float: left; margin: 100px 0px 0px 20px; color: #fff8f8; font-size: 20px">Wellness Hotels and Hospitals</h5>
                    <h6 style="text-transform:  none; float: left; margin: 20px; color: #fff8f8; font-size: 11px">
                        The Mediagon technology protects installations, fittings, machines and the tips of valves in contact with water. It improves comfort and protects the environment.<br>
                    </h6>
              </div>
                <div style="float: left; width: 250px">
                    <h5 style="text-transform: none; color: #fff8f8; margin: 100px 0px 0px 20px;">Interested?</h5>

                    <h4 style="text-transform: none; margin: 5px; color: white; font-size: 11px">
                        Then call us at: +216 73349902,+216 73349903 or have no obligation details.<br>
                        We gladly take the necessary documentation and can help customers personally on site ..<br><br>
                    </h4>
                    <a style="font-size: 18px; background-color: white; color: rgba(230, 125, 1, 1); padding: 5px; cursor: pointer"  href="contact.php">RENTAL AND SALE *</a>
                    <h6 style="text-transform: none; font-size: 10px; color: white; margin: 5px">* Available only in Switzerland, France and Germany</h6>
                </div>
            </div>
        </div>
      <!-- / One Quarter -->
      <section style="float: inherit; text-align: inherit;" id="shout">
        <div style="float: inherit; text-align: inherit; width: 500px">
          <h1 style="margin: 0px 0px 15px; padding: 0px; color: rgb(195, 7, 1); font-size: 17px; text-transform: uppercase; font-family: arial, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		  WELCOME TO Mediagon</h1>
		  <p style="margin: 0px; padding: 0px 0px 16px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		  <strong style="margin: 0px; padding: 0px;">Protect your plants ... before it's too late!</strong></p>
		  <p style="margin: 0px; padding: 0px 0px 16px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		  Decreases Mediagon new hard limestone deposits in pipes and water heaters, and extends the life of appliances and installations.<span class="Apple-converted-space">&nbsp;</span><br style="margin: 0px; padding: 0px;">
		  The principle<span class="Apple-converted-space">&nbsp;</span>est aussi 
		  Simple effective. The water passes through many lines of static fields and is thus polarized.
          Therefore, the limestone has momentarily the possibility to form and harden. 
          This results in a significantly softer deposit, which easily away with a cloth or brush.    
          Field lines arranged finely prevent adhesion of particles ferrigineuses.<br><br>
          At neutral tests, it has been proven that Mediagon positively influences the vitalization of water.<br><br>
          Test no obligation to purchase.<br><br>
              <a href="test.php"><img style="cursor: pointer" src="images/tester_en.png" alt="Image" width="200" height="46"></a>
          </p>
        </div>
          <div style="float: inherit; text-align: inherit; width: 400px">
                <h1 style="margin: 0px 30px 15px; padding: 0px; color: rgb(195, 7, 1); font-size: 17px; text-transform: uppercase; font-family: arial, sans-serif; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
		            OUR POTENTIAL<br>
                </h1>
              <h6 style="float: left; margin: 0px 30px 15px; text-transform: none; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.1875px; orphans: auto; text-align: start; text-indent: 0px;">
                  <a href="waterprocessing.php">
                ♦ No maintenance<br>
                ♦ Without electricity and maintenance costs<br>
                ♦ Without chemical addition<br>
                ♦ Extension of water mains and valves<br>
                ♦ Extending the life of kitchen gadgets<br>
                ♦ Significant energy savings<br>
                ♦ Long manufacturer warranty<br>
                ♦ Preventing the formation of scale deposits and / tartar in encrusting form<br>
                ♦ Curative slow and gradual (cleaning) of existing inlays<br>
                ♦ Removing sludge deposits in water heating circuits<br>
                ♦ Improved flow maintaining the original dimensions facilities<br>
                ♦ Reduction of corrosion and maintenance costs of facilities<br>
                ♦ Reduction of algae and fungi<br>
                ♦ Purification of water bacteriological<br>
                ♦ Fight against the presence and growth of Legionella<br>
                  </a>
              </h6>
			  <br><br>
			  <a style="background-color: #0094ff;padding: 15px;color: #fff;font-size: 150%" href="waterprocessing.php">Advantages of water processing</a>
          </div>
      </section>
      <a style="background-color: #0094ff;padding: 15px;color: #fff;font-size: 150%;float:left" href="testimony.php">Testimony</a><br><br><br>
    </div>
<br><iframe width="315" height="250" src="//www.youtube.com/embed/FrQmWzJoQjE?rel=0" frameborder="0" allowfullscreen></iframe>
    <iframe width="315" height="250" src="//www.youtube.com/embed/9oXcKII0IiU?rel=0" frameborder="0" allowfullscreen></iframe>
	<iframe width="315" height="250" src="//www.youtube.com/embed/FJZUg1Maz0k?rel=0" frameborder="0" allowfullscreen></iframe>
<!--
          <br><video src="v1.webm" poster="v1.jpg" style="width: 45%; height: 350px" controls></video>
          <video src="v2.webm" poster="v2.jpg" style="width: 45%; height: 350px" controls></video>
          <video src="v3.webm" poster="v3.jpg" style="width: 80%; height: 450px" controls></video>
-->
<?php }?>
    <!-- main content -->
    <div id="content">
    </div>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>
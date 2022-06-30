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
    array("التجربة المجانية" , "Test gratuit", "Free test"),// 1
    array("الموظوع", "Titre", "Title"),// 2
    array("الشركة", "Société", "Company"),// 3
    array("اللقب*", "Prénom*", "Last Name*"),// 4
    array("الاسم*", "Nom*", "Name*"),// 5
    array("الشارع و الرقم *", "Rue et No*", "Street"),// 6
    array("الترقيم البريدي *", "Code postal*", "Postcode*"),// 7
    array("المدينة *", "Localité*", "Location"),// 8
    array("الدولة", "Pays", "Country"),// 9
    array("البريد الإلكتروني *", "E-Mail*", "E-Mail*"),// 10
    array("الهاتف *", "Téléphone*", "Phone*"),// 11
    array("الملاحظات *", "Remarque*", "Note"),// 12
    array("الرجاء الاختيار", "Prière de sélectionner", "Please select"),// 13
    array("الإتصال بي للإستعلام دون إلتزام", "Appelez-moi pour un conseil sans engagement", "Call me for advice without obligation"),// 14
    array("أرسل لي جميع المعلومات مع السعر", "Envoyez-moi toutes informations avec prix", "Send me all information with price"),// 15
    array("العنوان", "ADRESSE", "Address"),// 16
    array("فريق العمل", "Notre team", "Our Team"),// 17
    array("الموقع", "Situation", "Situation"),// 18
    array("فلسفتنا", "Notre philosophie", "Our philosophy"),// 19
    array("البحث والتطوير", "Recherche et développement", "Search and development"),// 20
    array("ترقية الموظفين", "Promotion du personnel", "Promotion of staff"),// 21
    array("مداغون معالجة المياه", "MEDIAGON Traitement de l'eau", "Mediagon Water Treatment"),// 22
    array("حي النزهة شارع البيئة 4060، القلعة الكبرى سوسة ", "CITE NOZHA BOULEVARD DE L'ENVIRONNEMENT 4060, KALAA KEBIRA, SOUSSE, TUNISIE.", "NEIGHBORHOOD NOZHA AVENUE OF THE ENVIREMENT 4060, KALAA KEBIRA, SÛSAH, TUNISIA"),// 23
    array("ساعات العمل", "Horaire d'ouverture", "Opening hours"),// 24
    array("الاثنين - السبت", "Lundi - Samedi", "Monday - Saturday"),// 25
    array("08:00 - 12:00<br>13:00 - 17:00", "08:00 - 12:00<br>13:00 - 17:00", "08:00 - 12:00<br>13:00 - 17:00"),// 26
    array("ما هو مصدرك؟ *", "Quelle est votre source ?*", "What is your source? *"),// 27
    array("في معرض / عداد", "Lors d'une foire / comptoir","At a fair / counter"),// 28
    array("جار / صديق", "Voisin / ami", "Neighbor / friend"),// 29
    array("إعلان", "Publicité", "Advertising"),// 30
    array("بحث في الإنترنت", "Recherche sur Internet", "Search the Internet"),// 31
    array("مكالمة هاتفية", "Appel téléphonique", "Telephone call"),// 32
    array("الاتصال المباشر", "Contact direct", "Direct contact"),// 33
    array("إرسال", "Envoyer", "Send"),// 34
    array("في معرض / عداد*", "Lors d'une foire / comptoir", "At a fair / counter"),// 35
    array("شركاؤنا", "Partenaires", "Partners"),// 36
    array("منزل لعائلة أو إثنين", "Pour maison à 1 ou 2 familles", "House for 1 or 2 families"),// 37
    array("أربعة أسابيع، مع عدم وجود التزام لشراء", "4 semaines, sans obligation d'achat", "Four weeks, with no obligation to purchase"),// 38
    array("الاختبار أولا، و الشراء بعد الإقتناع.", "Tester d'abord, acheter après être personnellement persuadé.", "First test, after being personally persuaded buy."),// 39
    array("أطلب نشرة أخرى أو الاتصال بنا", "Demander d'autres prospectus ou appeler nous.", "Request other prospectus or call us."),// 40
    array("الفنيين لدينا لهم خبرة واسعة في مشاكل الحجر الجيري.", "Nos techniciens ont une grande expérience au sujet des problèmes de calcaire.", "Our technicians have extensive experience on the problems of limestone."),// 41
    array("مطلب تجربة مجانية", "DEMANDE POUR ESSAI GRATUIT", "APPLICATION FOR FREE TRIAL"),// 42
    array("شركاؤنا", "Partenaires", "Partners"),// 43
    array("عذرا، ممكن فقط في سويسرا وفرنسا وألمانيا *", "* Desole, possible uniquement en Suisse, France et Allemagne", "* Sorry, Available only in Switzerland, France and Germany"),// 44
    array("الاتصال" , "CONTACT", "Contact"),// 45
    array("تعرف علينا", "Connaître Mediagon", "knowing Mediagon"),// 46
    );
?>

<script type="text/javascript">

</script>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <aside style="float: left; text-align: left" id="left_column">
    <?php }else{?>
            <aside style="float: right; text-align: right" id="left_column">
    <?php }?>
      <nav>
        <ul>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="service.php"><?php echo $ml[46][$l];?></a></li>
            <li><a style="color: #cc0700; font-size: 18px" href="#"><?php echo $ml[1][$l];?></a></li>
            <li><a style="color: #0282c1; font-size: 18px" href="partnaire.php"><?php echo $ml[43][$l];?></a></li>
        </ul>
      </nav>
    </aside>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
    <?php }else{?>
            <div style="display: block; width:630px; float: right; text-align: right" >
    <?php }?>
                <img id="img" width=100% style="padding: 10px" src="images/contact.jpg" alt="Image">
                <?php if(($lang=="fr") || ($lang=="en")){?>
                    <div style="display: block; width:450px; float: left; text-align: left" >
                <?php }else{?>
                    <div style="display: block; width:450px; float: right; text-align: right" >
                <?php }?>
                        <div style="float:inherit; width:450px">
                            <h1 style="font-size: 15px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[1][$l];?></h1>
                            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[44][$l];?></h2>
                            <a href="http://www.mediagon.ch/ch-fr/services/test-gratuit/test-mediagon.html"><h2 style="text-transform:  none; margin: 5px; color: #0282c1; font-family: arial, sans-serif; font-size: 12px">> Mediagon test</h2></a>
                        </div>
                        <br><br><br><br><br><br><br>
                    </div>

                <?php if(($lang=="fr") || ($lang=="en")){?>
                    <div style="float:left; width:150px">
                <?php }else{?>
                    <div style="float:right; width:150px">
                <?php }?>    
                        <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"> <?php echo $ml[16][$l];?></h1><br>
                        <h1 style="font-size: 15px; margin: 0px 0px 0px 0px; color: #000">
                            <?php echo $ml[22][$l];?>
                        </h1>
                        <br>
                        <h1 style="font-size: 12px; margin: 0px 0px 0px 0px; color: #000">
                            <?php echo $ml[23][$l];?>
                        </h1>
                        <br><br><br><br>
                        <h1 style="font-size: 15px; margin: 0px 0px 0px 0px; color: #000">
                            <?php echo $ml[24][$l];?>
                        </h1>
                        <br>
                        <h1 style="font-size: 12px; margin: 0px 0px 0px 0px; color: #000">
                            <?php echo $ml[25][$l];?>
                        </h1>                        
                        <h1 style="font-size: 11px; margin: 0px 0px 0px 0px; color: #000">
                            <?php echo $ml[26][$l];?>
                        </h1>
                        <br><br><br><br><br><br><br>
                    </div>
            </div>
                        <br><br><br><br><br><br><br>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>

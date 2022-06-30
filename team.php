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
    array("الاتصال" , "CONTACT", "Contact"),// 1
    array("الموظوع", "Titre", "Title"),// 2
    array("الشركة", "Société", "Company"),// 3
    array("اللقب*", "Prénom*", "Last Name"),// 4
    array("الاسم*", "Nom*", "Name"),// 5
    array("الشارع و الرقم *", "Rue et No*", "Street"),// 6
    array("الترقيم البريدي *", "Code postal*", "Postcode *"),// 7
    array("المدينة *", "Localité*", "Location"),// 8
    array("الدولة", "Pays", "Country"),// 9
    array("البريد الإلكتروني *", "E-Mail*", "E-Mail*"),// 10
    array("الهاتف *", "Téléphone*", "Phone"),// 11
    array("الملاحظات *", "Remarque*", "Note *"),// 12
    array("الرجاء الاختيار", "Prière de sélectionner", "Please select"),// 13
    array("الإتصال بي للإستعلام دون إلتزام", "Appelez-moi pour un conseil sans engagement", "Call me for advice without obligation"),// 14
    array("أرسل لي جميع المعلومات مع السعر", "Envoyez-moi toutes informations avec prix", "Send me all information with price"),// 15
    array("العنوان", "ADRESSE", "Address"),// 16
    array("فريق العمل", "Notre équipe", "Our Team"),// 17
    array("الموقع", "Situation", "Situation"),// 18
    array("فلسفتنا", "Notre philosophie", "Our Philosophy"),// 19
    array("البحث والتطوير", "Recherche et développement", "Research and development"),// 20
    array("ترقية الموظفين", "Promotion du personnel", "Promotion of staff"),// 21
    array("مداغون معالجة المياه", "MEDIAGON Traitement de l'eau", "Mediagon Water Treatment"),// 22
    array("Le Verney 14 1070 Puidoux Suisse 021 946 50 10", "Le Verney 14 1070 Puidoux Suisse 021 946 50 10", "Le Verney 14 1070 Puidoux Suisse 021 946 50 10"),// 23
    array("ساعات العمل", "Horaire d'ouverture", "Opening hours"),// 24
    array("الاثنين - الجمعة", "Lundi - Vendredi", "Monday - Friday"),// 25
    array("08:00 - 11:30", "	08:00 - 11:30", "08:00 to 11:30"),// 26
    array("ما هو مصدرك؟ *", "Quelle est votre source ?*", "What is your source? *"),// 27
    array("في معرض / عداد", "Lors d'une foire / comptoir", "At a fair / counter"),// 28
    array("جار / صديق", "Voisin / ami", "Neighbor / friend"),// 29
    array("إعلان", "Publicité", "Advertising"),// 30
    array("بحث في الإنترنت", "Recherche sur Internet", "Search the Internet"),// 31
    array("مكالمة هاتفية", "Appel téléphonique", "Telephone call"),// 32
    array("الاتصال المباشر", "Contact direct", "Direct contact"),// 33
    array("إرسال", "Envoyer", "Send"),// 34
    array("فنيين", "TECHNICIENS", "TECHNICIANS"),// 35
    array("الممثل في تونس، ليبيا، الجزائر و المغرب", "Représentant en Tunisie, Libye, Algérie et Maroc", "Representative in Tunisia, Libya, Algeria and Morocco"),// 36
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
            <li><a style="color: #cc0700; font-size: 18px" href="#"><?php echo $ml[17][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="contact.php"><?php echo $ml[1][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="situation.php"><?php echo $ml[18][$l];?></a></li>
            <li><a style="color: #0282c1; font-size: 18px" href="philo.php"><?php echo $ml[19][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="dev.php"><?php echo $ml[20][$l];?></a></li>
            <li><a style="color: #0282c1; font-size: 18px" href="prmo.php"><?php echo $ml[21][$l];?></a></li>
        </ul>
      </nav>
    </aside>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
    <?php }else{?>
            <div style="display: block; width:630px; float: right; text-align: right" >
    <?php }?>
        <?php if($lang=="fr"){?>
                <div style="display: block; width:150px; float: left; text-align: left" >
                    <div style="float:inherit; width:450px">
                        <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">Notre équipe (Basé en SUISSE)</h1>
                        <img id="img" width=25% style="padding: 10px" src="images/Thomas.jpg" alt="Image">
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Engeli Thomas</h2>
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Propriétaire et PDG</h2>
                    </div>
                </div>
                <div style="display: block; float: left; text-align: left;margin: 22px auto" >
                    <div style="float:inherit">
                        <img id="img" height="135px" style="padding: 10px" src="images/claus_troll_Export Manager.png" alt="Image">
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Claus Troll</h2>
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Directeur d'export</h2>
                    </div>
                </div>
                <div style="float:left">
                        <h1 style="font-size: 13px; margin: 0px 0px 0px 0px; color: #000">
                             L'exploitation en suisse PME est depuis 25 ans, on promouvoit la diligence et la performance de l'innovation que nos employés ont. Nous voulons que la position dominante dans le développement et la vente de systèmes de traitement physiques de l'eau accroître la sensibilisation et de renoncer au transfert de certaines SERVICES DANS LES PAYS-d'œuvre et le bon marché. Nos produits par MANOEUVRABILITÉ CONVAINCANT, la durabilité et l'élégance. c'est parfaitement FONCTIONNEL DANS L'APPLICATION ET EN PRATIQUES sens organique. NOS professionnels spécialement formés pour vous aider 
                        </h1>
                    <br>
                </div>
                <br>
                
                <div style="display: block; width:650px; float: left; text-align: left" >
                    <br><br>
                    <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">
                        <?php echo $ml[36][$l];?>
                    </h1>
                    <div style="float:inherit; width:450px">
                        <img id="img" width=28% style="padding: 10px" src="images/alibelkahla.jpg" alt="Image">
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Ali Belkahla</h2>
                    </div>
                </div>
        <?php }elseif($lang=="en"){?>

                <div style="width: 800px;height: 200px">
                <div style="display: block; width:150px; float: left; text-align: left" >
                    <div style="float:inherit; width:450px">
                        <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">Our Team (Based in SUISS)</h1>
                        <img id="img" width=25% style="padding: 10px" src="images/Thomas.jpg" alt="Image">
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Engeli Thomas</h2>
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Owner and CEO</h2>
                    </div>
                </div>
                <div style="display: block; float: left; text-align: left;margin: 22px auto" >
                    <div style="float:inherit">
                        <img id="img" height="135px" style="padding: 10px" src="images/claus_troll_Export Manager.png" alt="Image">
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Claus Troll</h2>
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Export Manager</h2>
                    </div><br><br><br>
                </div>
                <div style="float:left">
                        <h1 style="font-size: 13px; margin: 0px 0px 0px 0px; color: #000">
                            AS SWISS SME OPERATING FOR OVER 25 YEARS WE PROMOTE DILIGENCE, AND INNOVATION PERFORMANCE WILL OUR EMPLOYEES. WE WANT THE LEADING POSITION IN THE DEVELOPMENT AND SALE OF PHYSICAL WATER TREATMENT SYSTEMS IN SWITZERLAND EXPAND AWARENESS AND WAIVE THE TRANSFER OF CERTAIN DEPARTMENTS IN CHEAP LABOR COUNTRIES. OUR PRODUCTS BY CONVINCING MANOEUVRABILITY, DURABILITY AND ELEGANCE. YOU ARE PERFECTLY FUNCTIONAL IN THE APPLICATION, AND PRACTICAL ORGANIC SENSE. OUR SPECIALLY TRAINED PROFESSIONALS TO HELP YOU
                        </h1>
                        <br>
                </div></div><br>
                
                <div style="display: block; width:650px; float: left; text-align: left" >
                    <br><br>
                    <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">
                        <?php echo $ml[36][$l];?>
                    </h1>
                    <div style="float:inherit; width:450px">
                        <img id="img" width=28% style="padding: 10px" src="images/alibelkahla.jpg" alt="Image">
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Ali Belkahla</h2>
                    </div>
                </div>
        <?php }else{?>
                <div style="display: block; width:150px; float: right; text-align: right" >
                    <div style="float:inherit; width:450px">
                        <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">(فريق العمل (في سويسرا</h1>
                        <img id="img" width=25% style="padding: 10px" src="images/Thomas.jpg" alt="Image">
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Engeli Thomas</h2>
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">رئيس مدير عام</h2>
                    </div>
                </div>
                <div style="display: block; float: right;margin-bottom: 50px;margin: 22px auto" >
                    <div style="float:inherit">
                        <img id="img" height="135px" style="padding: 10px" src="images/claus_troll_Export Manager.png" alt="Image">
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">Claus Troll</h2>
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 12px">مدير التصدير</h2>
                    </div>
                </div>
                <div style="float:right">
                        <h1 style="font-size: 15px; margin: 0px 0px 0px 0px; color: #000">
                            الشركات الصغيرة والمتوسطة تعمل لمدة أكثر من 25 عاما نشجع الاجتهاد و حسن الأداء و الابتكار في موظفينا
                             <br>
                            نسعى لمكانة رائدة في تطوير و بيع نظم معالجة المياه و توسيع نطاق الوعي بأهميته في دول أخرى
                            ولدينا الفنيين المدربين خصيصا للمساعدة
                        </h1>
                </div>
                
                <div style="display: block; width:650px; float: right; text-align: right" >
                    <br><br>
                    <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">
                        <?php echo $ml[36][$l];?>
                    </h1>
                    <div style="float:inherit; width:450px">
                        <img id="img" width=28% style="padding: 10px" src="images/alibelkahla.jpg" alt="Image">
                        <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px">علي بلكحلاء</h2>
                    </div>
                </div>
        <?php }?>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>

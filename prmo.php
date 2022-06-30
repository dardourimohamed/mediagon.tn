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
    array("الممثل في تونس, ليبيا و الجزائر", "Représentant en Tunisie, Libye et Algérie", "Representative in Tunisia, Libya and Algeria"),// 36
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
            <li><a style="color: #0282c1; font-size: 18px" href="team.php"><?php echo $ml[17][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="contact.php"><?php echo $ml[1][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="situation.php"><?php echo $ml[18][$l];?></a></li>
            <li><a style="color: #0282c1; font-size: 18px" href="philo.php"><?php echo $ml[19][$l];?></a></li>
            <li><a style="color: #0282c1; font-size: 18px" href="dev.php"><?php echo $ml[20][$l];?></a></li>
            <li><a style="color: #cc0700; font-size: 18px" href="#"><?php echo $ml[21][$l];?></a></li>
        </ul>
      </nav>
    </aside>

    <?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">PERFECTIONNEMENT DU PERSONNEL</h1><br><br>
            <div style="float:inherit; width:650px">
                <h2 style="color: #000; font-size: 13px">Du personnel bien formé et motivé est la meilleure garantie pour le succès à long terme d'une entreprise. </h2>
                <p style="color: #000">
                    Afin de souligner le rôle de leadership, nos employés se forment en permanence. De même, la santé est importante. Dans l'entreprise l'eau et les pommes sont mises gratuitement à disposition et pour le bien-être de chacun, un centre de mise en forme privé est également à la discrétion de chacun.<br><br><br><br><br><br><br><br><br><br>
                </p>
            </div>
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">STAFF DEVELOPMENT</h1><br><br>
            <div style="float:inherit; width:650px">
                <h2 style="color: #000; font-size: 13px">Well-trained and motivated staff is the best guarantee for long-term success of a company.</h2>
                <p style="color: #000">
                    To highlight the role of leadership, our employees form permanently. Similarly, health is important. In the company of water and apples are available free of charge and for the welfare of each center private setting form is also at the discretion of each.<br><br><br><br><br><br><br><br><br><br>
                </p>
            </div>
        </div>     
    <?php }elseif($lang=="ar"){?>
        <div style="display: block; width:630px; float: right; text-align: right" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">تنمية قدرات الموظفين</h1><br><br>
            <div style="float:inherit; width:650px">
                <h2 style="color: #000; font-size: 13px">الموظفين المدربين تدريبا جيدا هو أفضل ضمان للنجاح على المدى الطويل للشركة</h2><br>
                <p style="color: #000">
                  التأكيد على اهمية دور القيادة, وكذلك تدرييب الموظفين خاصة في مجال الصحة وهو الأكثر أهمية في مجال معالجة المياه  <br><br><br><br><br><br><br><br><br><br><br><br>
                </p>
            </div>
        </div>
    <?php }?>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>

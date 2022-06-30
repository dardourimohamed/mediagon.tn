
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
    array("حي النزهة شارع البيئة 4060، القلعة الكبرى سوسة", "Cite Nozha Boulevard de l'environnement 4060, Kalaa Kebira, Sousse, Tunisie.", "Neighborhood Nozha Avenue of the envirement 4060, Kalaa Kebira, Sûsah, Tunisia."),// 23
    array("ساعات العمل", "Horaire d'ouverture", "Opening hours"),// 24
    array("الاثنين - السبت", "Lundi - Samedi", "Monday - Saturday"),// 25
    array("08:00 - 12:00<br>13:00 - 17:00", "08:00 - 12:00<br>13:00 - 17:00", "08:00 - 12:00<br>13:00 - 17:00"),// 26
    array("؟ MEDIAGON كيف / أين وجدت", "Où / Comment avez vous trouvé MEDIAGON ?", "Where / How did you find MEDIAGON ?"),// 27
    array("في معرض / عداد", "Lors une foire / comptoir","At a fair / counter"),// 28
    array("جار / صديق", "Voisin / ami", "Neighbor / friend"),// 29
    array("إعلان", "Publicité", "Advertising"),// 30
    array("بحث في الإنترنت", "Recherche sur Internet", "Search the Internet"),// 31
    array("مكالمة هاتفية", "Appel téléphonique", "Telephone call"),// 32
    array("الاتصال المباشر", "Contact direct", "Direct contact"),// 33
    array("إرسال", "Envoyer", "Send"),// 34
    array("في معرض / عداد*", "Lors une foire / comptoir", "At a fair / counter"),// 35
    array("شكرا لقد تمّ إرسال البيانات", "Merci, votre message a été envoyé avec succès", "Thank you, your message was sent successfully."),// 36
    );
?>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <aside style="float: left; text-align: left" id="left_column">
    <?php }else{?>
            <aside style="float: right; text-align: right" id="left_column">
    <?php }?>
      <nav>
        <ul>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="team.php"><?php echo $ml[17][$l];?></a></li>          
            <li><a style="color: #0282c1; font-size: 20px" href="contact.php"><?php echo $ml[1][$l];?></a></li>
            <li class="last"><a style="color: #cc0700; font-size: 18px" href="#"><?php echo $ml[18][$l];?></a></li>
            <li><a style="color: #0282c1; font-size: 18px" href="philo.php"><?php echo $ml[19][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="dev.php"><?php echo $ml[20][$l];?></a></li>
        </ul>
      </nav>
    </aside>
         <iframe width="960" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?sll=35.883380999997826,10.530648250559818&amp;sspn=0.013473412513442877,0.034332619931575076&amp;t=m&amp;q=Unnamed+Rd,+Kalaa+Kebira,+Tunisia&amp;dg=opt&amp;ie=UTF8&amp;ll=35.885365,10.536146&amp;spn=0.03477,0.082312&amp;z=14&amp;output=embed"></iframe>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>

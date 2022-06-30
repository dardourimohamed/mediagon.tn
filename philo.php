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
            <li><a style="color: #cc0700; font-size: 18px" href="#"><?php echo $ml[19][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="dev.php"><?php echo $ml[20][$l];?></a></li>
            <li><a style="color: #0282c1; font-size: 18px" href="prmo.php"><?php echo $ml[21][$l];?></a></li>
        </ul>
      </nav>
    </aside>

    <?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[19][$l];?></h1>
            <div style="float:inherit; width:450px">
                <br><h2 style="color: #000; font-size: 13px">SWISS MADE s'écrit en grand. Là se trouve toute la recherche. Développement et production avec grande conviction exclusivement en Suisse.</h2>
                <p style="color: #000">
                    Nous voulons renforcer notre position de leader dans le développement et la vente de matériels de traitement d'eau en Suisse et consciemment éviter la délocalisation des différents départements en des pays à bas salaire.<br><br>
                    Grâce à nos standards de qualité très élevés, nous exportons nos développements dans la quasi totalités des pays européens, mais également au Japon, en Chine et diverses autres nations asiatiques.<br><br>
                    Tandis qu'en Suisse les ventes et le service sont assumés par notre propre personnel, en Europe et en Asie les marchés sont assumés en franchise par nos partenaires.<br><br>
                    Nous répondons aux besoins des clients et offrons des solutions économiques.<br><br>
                    Nos produits convainques par la facilité de mise en place, la durabilité et l'élégance. Ils sont fonctionnellement irréprochables, d'une application pratique et écologiquement parfaits.<br><br>
                    Notre vaste stock permet le traitement des commandes avec rapidité et sans problème.<br><br>
                    Nous considérons la qualité de tous nos services comme condition préalable à la réussite de nos produits et services, ainsi qu'à la prospérité de notre Société.<br><br>
                </p>
                <img src="images/RTEmagicC_swisslabel_07.png.png" alt="img"><br><br>
            </div>
            <div style="margin: 5px; float:inherit; width:150px">
                <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">Document</h1>
                <a href="Zertifikat-Swisslabel.pdf"><p>Swiss Made (de)</p></a>
            </div>
    </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[19][$l];?></h1>
            <div style="float:inherit; width:450px">
                <h2 style="color: #000; font-size: 11px">SWISS MADE is writ large. There is any research. Development and production with great conviction exclusively in Switzerland.</h2>
                <p style="color: #000">
                    We want to strengthen our leading position in the development and sale of water treatment equipment in Switzerland and consciously avoid the relocation of various departments of the low-wage countries.<br><br>
                    Thanks to our very high quality standards, we export our developments when almost the entire European countries, but also in Japan, China and several other Asian nations.<br><br>
                    While in Switzerland the sales and service are covered by our own staff in Europe and Asia markets are assumed duty by our partners.<br><br>
                    We respond to customer needs and offer cost-effective solutions.<br><br>
                    Our products convainques by the ease of installation, durability and elegance. They are functionally flawless, a practical and environmentally perfect application.<br><br>
                    Our large inventory allows processing orders quickly and easily.<br><br>
                    We consider the quality of our services as a prerequisite to the success of our products and services provided, and the prosperity of our Company.<br><br>
                </p>
                <img src="images/RTEmagicC_swisslabel_07.png.png" alt="img"><br><br>
            </div>
            <div style="margin: 5px; float:inherit; width:150px">
                <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">Document</h1>
                <a href="Zertifikat-Swisslabel.pdf"><p>Swiss Made (de)</p></a>
            </div>          
    <?php }elseif($lang=="ar"){?>
            <div style="display: block; width:630px; float: right; text-align: right" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[19][$l];?></h1>
            <div style="float:inherit; width:450px">
                <h2 style="color: #000; font-size: 13px">حرص شديد على البحث والتطوير</h2>
                <p style="color: #000">
                    نريد تعزيز مكانتنا الرائدة في تطوير وبيع معدات معالجة المياه في سويسرا<br><br>
                    بفضل معايير الجودة العالية جدا, نحن نصدر للبلدان الأوروبية، وأيضا في اليابان، الصين ومختلف الأمم الآسيوية الأخرى<br><br>
                    بينما في سويسرا تتم تغطية المبيعات والخدمات من قبل موظفينا في أوروبا وأسواق آسيا<br><br>
                    نستجيب لاحتياجات العملاء ونقديم حلول فعالة من حيث التكلفة<br><br>
                    منتجاتنا
                    منتجاتنا سهلة التركيب ومتينة وأنيقة. لا تشوبه شائبة وظيفيا، تحافظ على للبيئة<br><br>
                    لدينا مخزون كبير يسمح  بالتجهيز بسرعة وسهولة<br><br>
                    نعتبر أن جودة خدماتنا كشرط أساسي لنجاح منتجاتنا والخدمات المقدمة، وازدهار شركتنا<br><br>
                </p>
                <img src="images/RTEmagicC_swisslabel_07.png.png" alt="img"><br><br>
            </div>
            <div style="margin: 5px; float:inherit; width:150px">
                <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">الوثائق</h1>
                <a href="Zertifikat-Swisslabel.pdf"><p>Swiss Made (de)</p></a>
            </div>
            </div>
    <?php }?>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>

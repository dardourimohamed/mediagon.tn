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
            <li><a style="color: #cc0700; font-size: 18px" href="#"><?php echo $ml[20][$l];?></a></li>
            <li><a style="color: #0282c1; font-size: 18px" href="prmo.php"><?php echo $ml[21][$l];?></a></li>
        </ul>
      </nav>
    </aside>

    <?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[20][$l];?></h1>
            <div style="float:inherit; width:650px">
                <h2 style="color: #000; font-size: 13px">Deux mots qui marquent le caractère de notre Entreprise</h2>
                <p style="color: #000">
                    Tout d'abord, nous sommes une Entreprise avec plus de vingt-cinq ans de tradition, spécialisée dans le développement d'équipements de traitement d'eau physique. Deuxièment, une exploitation suisse de PME ayant des propriétés typiques, tels que le travail, la motivation acharnée et l'innovation.<br><br>
                    De hautes exigences obligent. Par conséquent, très tôt nous avons créé notre propre département de recherches et développement en Suisse. La marque Mediagon est, bien au-delà des frontières de notre pays, un symbole de qualité et de progrès dans le traitement physique de l'eau.<br><br>
                    Notre Société est un leader dans le développement de produits de haute qualité écologique pour les maisons individuelles, les immeubles et pour des applications industrielles. Ceci est étroitement lié à la vision et l'ingéniosité de nos ingénieurs et physiciens, qui ont tous à leur manière, contribué au progrès pour le bien de notre environnement.<br><br><br><br>
                </p>
            </div>
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[20][$l];?></h1>
            <div style="float:inherit; width:650px">
                <h2 style="color: #000; font-size: 13px">Two words that define the character of our Company</h2>
                <p style="color: #000">
                    First, we are a company with over twenty-five years of tradition, specializing in the development of equipment for physical water treatment. Secondly, a Swiss SMEs operating with typical properties, such as labor, fierce motivation and innovation<br><br>
                    High demands require. Therefore, early we created our own research and development department in Switzerland. Mediagon the brand is well beyond the borders of our country, a symbol of quality and progress in physical water treatment.<br><br>
                    Our Company is a leader in the development of high quality ecological products for individual homes, buildings and industrial applications. This is closely related to the vision and ingenuity of our engineers and physicists, who all in their own way, contributed to the progress for the sake of our environment.<br><br><br><br><br>
                </p>
            </div>
        </div>       
    <?php }elseif($lang=="ar"){?>
        <div style="display: block; width:630px; float: right; text-align: right" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[20][$l];?></h1>
            <div style="float:inherit; width:650px">
                <h2 style="color: #000; font-size: 13px">كلمتين لتحدد طابع شركتنا</h2><br>
                <p style="color: #000">
                    أولا، نحن شركة مع أكثر من خمسة وعشرين عاما من التقليد، والمتخصصة في تطوير معدات لمعالجة المياه<br><br>
                    لذلك، في وقت مبكر أنشأنا البحوث الخاصة بنا وإدارة التنمية في سويسرا. مداغون العلامة التجارية هي أيضا خارج حدود بلدنا، ورمز للجودة والتقدم في مجال معالجة المياه المادية<br><br>
                    شركتنا هي الشركة الرائدة في تطوير منتجات ذات جودة عالية الإيكولوجية للمنازل الفردية والمباني والتطبيقات الصناعية. ويرتبط هذا ارتباطا وثيقا الرؤية والإبداع لدينا مهندسين وعلماء الفيزياء، الذي كل على طريقته، ساهمت في التقدم من أجل بيئتنا<br><br><br><br><br><br><br><br>
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

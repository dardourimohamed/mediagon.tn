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
    array("المراجع", "Références", "Referances"),// 2
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
            <li class="last"><a style="color: #cc0700; font-size: 20px" href="#"><?php echo $ml[1][$l];?></a></li>
            
            <li><a style="color: #0282c1; font-size: 20px" href="prospectus.php"><?php echo $ml[3][$l];?></a></li>
        </ul>
      </nav>    
    </aside>

    <?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/ref.jpg" alt="Image">
            <h1 style="margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">
            <?php echo $ml[1][$l];?>
            </h1><br><br>
            <h2 style="color: #000">Hagalis</h2>
            <p style="color: #000"><a href="http://www.hagalis.de/indexneu.html">Hagalis S.A.</a> est un laboratoire international pour l'analyse de la qualité dans le domaine de l'alimentation, de l'eau et des objets d'usage quotidien. Avec l'aide de la nouvelle méthode d'analyse des cristaux, il est possible de renseigner le consommateur, de rendre compréhensible et transparent la qualité des produits.</p>
            <a href="frHagalis.pdf">Certificat Mediagon de Hagalis</a><br><br>

            <h2 style="color: #000">ISO 9001</h2>
            <p style="color: #000">Dans <a href="http://www.swissts.ch/de/zertifizierung-von-unternehmen/produkte/iso-9001/">ISO 9001</a> sont spécifiés les qualités d'un système de management. Les exigences sont si généralement formulées que l'application pour les entreprises / organisations / institutions de tous le secteurs est assurée.</p>
            <a href="ISO.pdf">Certificat Mediagon ISO 9001</a><br><br><br>

            <h2 style="color: #000">TÜV SÜD</h2>
            <p style="color: #000"><a href="http://www.tuev-sued.de/home_de">TÜV SÜD</a>, fondé il y a 145 ans en Allemagne, avec siège principal à Munich, est devenu l'un des laeder mondiaux de la société en services techniques. Aujourd'hui, avec plus de 17'000 employés dans plus de 800 sites, il s'engage auprès de clients, partout dans le monde.</p>
            <a href="Tuev.pdf">Certificat Mediagon TÜV SÜD</a><br><br><br>
 
            <h2 style="color: #000">SWISS Label</h2>
            <p style="color: #000"><a href="http://www.swisslabel.ch/de">SWISS LABEL</a>, la Société pour la promotion des produits et services suisses est une association en vertu des articles 60 et suivants du Code civil suisse. LABEL SUISSE traite essentiellement de l'étiquette de marque et de soins. Sa marque est l'arbalète. Selon une enquête de Isopublic d'Octobre 2001, l'arbalète est vue par 80% des personnes interrogées comme une marque de la meileure qualité.</p>
            <a href="Zertifikat-Swisslabel.pdf">Certificat Mediagon SWISS Label</a><br><br><br><br>
            
            <h1 style="margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">Références</h1><br><br>
            
            <h2 style="color: #000">Hôtel Golf Résidence</h2>
            <p style="color: #000">Port Kantaoui, Sousse, Tunisie</p><br><br><br>
            
            <h2 style="color: #000">Buanderie Hôtel Sindibad</h2>
            <p style="color: #000">Hammam sousse, Sousse, Tunisie</p><br><br><br>
            
            <h2 style="color: #000">Hôtel Les Embassadeurs</h2>
            <p style="color: #000">Tunis, Tunisie</p><br><br><br>
            
            <h2 style="color: #000">Maison mounir ben miled</h2>
            <p style="color: #000">Tunis, Tunisie</p><br><br><br>
            
            <h2 style="color: #000">Abattoir avicol Attia</h2>
            <p style="color: #000">Nabeul, Tunisie</p><br><br><br>
            
            <h2 style="color: #000">Maison Ammar Hadj Mohamed</h2>
            <p style="color: #000">Chott Meriam, Sousse, Tunisie</p>
     </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/ref.jpg" alt="Image">
            <h1 style="margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">
            <?php echo $ml[1][$l];?>
            </h1><br><br>
            <h2 style="color: #000">Hagalis</h2>
            <p style="color: #000"><a href="http://www.hagalis.de/indexneu.html">Hagalis S.A.</a> is an international laboratory for quality analysis in the field of food, water and objects of daily use. With the help of the new method of analysis of the crystals, it is possible to inform the consumer, make it understandable and transparent product quality.</p>
            <br><a href="frHagalis.pdf">Certificate of Mediagon Hagalis</a><br><br>

            <h2 style="color: #000">ISO 9001</h2>
            <p style="color: #000">In <a href="http://www.swissts.ch/de/zertifizierung-von-unternehmen/produkte/iso-9001/">ISO 9001</a> specified the qualities of a management system. The requirements are usually made ​​if the application for companies / organizations / institutions in all the sectors is provided.</p>
            <a href="ISO.pdf">Certificate of Mediagon ISO 9001</a><br><br><br>

            <h2 style="color: #000">TÜV SÜD</h2>
            <p style="color: #000"><a href="http://www.tuev-sued.de/home_de">TÜV SÜD</a>, founded 145 years ago in Germany, with headquarters in Munich, has become one of the world Laeder society in technical services. Today, with more than 17,000 employees in more than 800 sites, it engages with customers around the world.</p>
            <a href="Tuev.pdf">Certificate of Mediagon TÜV SÜD</a><br><br><br>
 
            <h2 style="color: #000">SWISS Label</h2>
            <p style="color: #000"><a href="http://www.swisslabel.ch/de">SWISS LABEL</a>, the Society for the Promotion of Swiss products and services is an association under Articles 60 and following of the Swiss Civil Code. SWISS LABEL deals mainly with brand label and care. His trademark is the crossbow. According to a survey Isopublic of October 2001, the crossbow is seen by 80% of respondents as a mark of the best quality for.</p>
            <a href="Zertifikat-Swisslabel.pdf">Certificate of Mediagon SWISS Label</a><br><br><br><br>
            
            <h1 style="margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">References</h1><br><br>
            
            <h2 style="color: #000">Hotel Golf Résidence</h2>
            <p style="color: #000">Port Kantaoui, Sûsah, Tunisia</p><br><br><br>
            
            <h2 style="color: #000">Laundry Hotel Sindibad</h2>
            <p style="color: #000">Hammam sousse, Sûsah, Tunisia</p><br><br><br>
            
            <h2 style="color: #000">Hotel Les Embassadeurs</h2>
            <p style="color: #000">Tunis, Tunisia</p><br><br><br>
            
            <h2 style="color: #000">House mounir ben miled</h2>
            <p style="color: #000">Tunis, Tunisia</p><br><br><br>
            
            <h2 style="color: #000">Slaughterhouse avicol Attia</h2>
            <p style="color: #000">Nabeul, Tunisia</p><br><br><br>
            
            <h2 style="color: #000">House Ammar Hadj Mohamed</h2>
            <p style="color: #000">Chott Meriam, Sûsah, Tunisia</p>
     </div>
    <?php }else{?>    
            <div style="display: block; width:630px; float: right; text-align: right !important" >
            <img id="img" width=100% style="padding: 10px" src="images/ref.jpg" alt="Image">
            <h1 style="margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">
            <?php echo $ml[1][$l];?>
            </h1><br><br>
            <h2 style="color: #000">Hagalis</h2>
                <br><a href="http://www.hagalis.de/indexneu.html">Hagalis S.A.</a><br>
            <p style="color: #000"> هو مختبر دولي لتحليل نوعية  الغذاء والماء والكائنات في مجال الاستخدام اليومي. مع مساعدة بطريقة جديدة للتحليل ، فمن الممكن إعلام المستهلك، وجعلها مفهومة وذات جودة </p>
            <a href="frHagalis.pdf">(شهادة) Mediagon Hagalis</a><br><br>

            <h2 style="color: #000">ISO 9001</h2>
                <br><a href="http://www.swissts.ch/de/zertifizierung-von-unternehmen/produkte/iso-9001/">ISO 9001</a><br>
            <p style="color: #000">في إزو 2009 تحديد صفات نظام الإدارة. عادة ما تكون المتطلبات  مصنوعةإذا تم تقديم الطلب للشركات / مؤسسات / المؤسسات في جميع القطاعات</p>
            <a href="ISO.pdf">(شهادة) Mediagon ISO 9001</a><br><br><br>

            <h2 style="color: #000">TÜV SÜD</h2>
                <br><a href="http://www.tuev-sued.de/home_de">TÜV SÜD</a><br>
            <p style="color: #000"> تأسست قبل 145 عاما في ألمانيا، ومقره في ميونيخ، أصبحت واحدة من المجتمع زعيم في الحركة العالمية في الخدمات التقنية. اليوم، مع أكثر من 17،000 موظف في أكثر من 800 موقع، كما تعمل مع العملاء في جميع أنحاء العالم</p>
            <a href="Tuev.pdf">(شهادة) Mediagon TÜV SÜD</a><br><br><br>
 
            <h2 style="color: #000">SWISS Label</h2>
            <p style="color: #000"><a href="http://www.swisslabel.ch/de">SWISS LABEL</a> جمعية الترويج للمنتجات والخدمات السويسرية هي جمعية بموجب المواد 60 وما يليها من القانون المدني السويسري.</p>
            <a href="Zertifikat-Swisslabel.pdf">(شهادة) Mediagon SWISS Label</a><br><br><br><br>
            
            <h1 style="margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">المراجع</h1><br><br>
            
            <h2 style="color: #000">Golf Résidence فندق</h2>
            <p style="color: #000">ميناء القنطاوي، سوسة، تونس</p><br><br><br>
            
            <h2 style="color: #000">مغسلة فندق سندباد</h2>
            <p style="color: #000">حمام سوسة، سوسة، تونس</p><br><br><br>
            
            <h2 style="color: #000">Les Embassadeurs فندق</h2>
            <p style="color: #000">تونس</p><br><br><br>
            
            <h2 style="color: #000">منزل منير بن ميلاد</h2>
            <p style="color: #000">تونس</p><br><br><br>
            
            <h2 style="color: #000">avicol Attia مسلخة</h2>
            <p style="color: #000">نابل، تونس</p><br><br><br>
            
            <h2 style="color: #000">منزل عمار حاج محمد</h2>
            <p style="color: #000">شط مريم، سوسة، تونس</p>
     </div>
    <?php }?>   
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>
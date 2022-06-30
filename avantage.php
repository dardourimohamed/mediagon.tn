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
    array("نوع المنتج" , "Type de produits", "Products type"),// 1
    array("D نوع -", "- type D", "- type D"),// 2
    array("Z نوع -", "- type Z", "- type Z"),// 3
    array("I نوع -", "- type I", "- type I"),// 4
    array("P نوع -", "- type P", "- type P"),// 5
    array("طريقة العمل", "Mode de fonctionnement", "Function Mode"),// 6
    array("الفوائد", "Avantages", "Advantage"),// 7
    array("حماية من الصدأ والجير", "Protection calcaire et anti rouille", "Limestone and anti rust protection"),// 8
    );
?>

<script type="text/javascript">
        $imgname = 0;
        onload = setInterval(function changeimage() {
            if ($imgname < 3) {
                $imgname = $imgname + 1;
            }
            else {
                $imgname = 1;
            }
            document.getElementById("img").src = "images/p" + $imgname + ".jpg";
        }, 3000);
    </script>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <aside style="float: left; text-align: left" id="left_column">
    <?php }else{?>
            <aside style="float: right; text-align: right" id="left_column">
    <?php }?>
         
      <nav>
        <ul>
          <li><a style="color: #0282c1; font-size: 18px" href="produit.php"><?php echo $ml[1][$l];?></a></li>
          <li><a style="color: #0282c1" href ="typed.php"><?php echo $ml[2][$l];?></a></li>
          <li><a style="color: #0282c1" href="typez.php"><?php echo $ml[3][$l];?></a></li>
          <li><a style="color: #0282c1" href="typei.php"><?php echo $ml[4][$l];?></a></li>
          <li><a style="color: #0282c1" href="typep.php"><?php echo $ml[5][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="mode.php"><?php echo $ml[6][$l];?></a></li>
            <li class="last"><a style="color: #cc0700; font-size: 20px" href="mode.php"><?php echo $ml[7][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="protection.php"><?php echo $ml[8][$l];?></a></li>
        </ul>
      </nav>    
    </aside>

    <?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[7][$l];?></h1>
            <div style="float:inherit; width:450px">
                <h2 style="color: #000; font-size: 11px">10 raisons d'opter pour Mediagon, notre protection anticalcaire et anticorrosion sans chimie: <br><br> 1. Montage</h2>
                <p style="color: #000">Montage simple</p>
                <img src="images/mentage.jpg" alt="img"><br><br>
                <h2 style="color: #000; font-size: 11px">2. Entretien</h2>
                <p style="color: #000">Sans aucun entretien</p>
                <h2 style="color: #000; font-size: 11px">3. Garantie</h2>
                <p style="color: #000">Garantie de longue durée, selon appareil et besoin, minimum 10 ans.</p>
                <h2 style="color: #000; font-size: 11px">4. Protection calcaire</h2>
                <p style="color: #000">Protection de toutes installations et appareils utilisant l'eau, en industrie et en ménage.</p>
                <h2 style="color: #000; font-size: 11px">5. Protection anticorrosion</h2>
                <p style="color: #000">Favoriser une pellicule de protection dans le réseau, afin d'éviter l'augmentation de la corrosion.</p>
                <h2 style="color: #000; font-size: 11px">6. Eau de boisson</h2>
                <p style="color: #000">Les minéraux importants (calcium et magnésium) restent dans l'eau et favorisent santé et bien-être</p>
                <h2 style="color: #000; font-size: 11px">7. Economie</h2>
                <p style="color: #000">Entretien et réparations de vos appareils comme boiler, lave-vaisselle, lave-linge et machine à café sont nettement espacés et réduits. Diminution des produits de lavage et d'entretien.</p>
                <h2 style="color: #000; font-size: 11px">8. Temps</h2>
                <p style="color: #000">Qui ne désir pas gagner du temps? Vous économisez beaucoup de temps lors des nettoyages et n'êtes plus confronté au problème du calcaire.</p>
                <h2 style="color: #000; font-size: 11px">9. Dormir</h2>
                <p style="color: #000">Vous pouvez dormir en toute quiétude, car vous ne polluez plus inutilement l'environnement. Vous ne devez plus penser à l'entretien des appareils, tout en profitant d'une protection optimale contre le calcaire.</p>
                <h2 style="color: #000; font-size: 11px">10. Enjeu</h2>
                <p style="color: #000">Notre appareil convient pour l'habitat individuel, comme pour l'habitat multiple. Il donne également d'excellents résultats dans le commerce et l'industrie.</p>
            </div>
            <div style="float:inherit; width:150px">
                <img src="images/avantage.jpg" alt="img">
            </div>
    </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[7][$l];?></h1>
            <div style="float:inherit; width:450px">
                <h2 style="color: #000; font-size: 11px">10 reasons to choose Mediagon our limescale and corrosion protection without chemicals:<br><br> 1. Mounting</h2>
                <p style="color: #000">Simple installation</p>
                <img src="images/mentage.jpg" alt="img"><br><br>
                <h2 style="color: #000; font-size: 11px">2. Interview</h2>
                <p style="color: #000">No maintenance</p>
                <h2 style="color: #000; font-size: 11px">3. Warranty</h2>
                <p style="color: #000">Extended warranty, depending on device and need a minimum of 10 years.</p>
                <h2 style="color: #000; font-size: 11px">4. limestone protection</h2>
                <p style="color: #000">Protection of all facilities and equipment using water, industry and household.</p>
                <h2 style="color: #000; font-size: 11px">5. corrosion protection</h2>
                <p style="color: #000">Promote a protective film on the network, to avoid an increase in corrosion.</p>
                <h2 style="color: #000; font-size: 11px">6. Drinking water</h2>
                <p style="color: #000">Important minerals (calcium and magnesium) remain in the water and promote health and well-being</p>
                <h2 style="color: #000; font-size: 11px">7. Economy</h2>
                <p style="color: #000">Maintenance and repair your equipment as boiler, dishwasher, washing machine and coffee maker are clearly separated and reduced. Decrease detergents and maintenance.</p>
                <h2 style="color: #000; font-size: 11px">8. Time</h2>
                <p style="color: #000">Who does not want to save time? You save a lot of time when cleaning and are increasingly facing the problem of scale.</p>
                <h2 style="color: #000; font-size: 11px">9. Sleeping</h2>
                <p style="color: #000">You can sleep in peace because you unnecessarily pollute the environment more. You no longer need to think about the maintenance of the equipment, while enjoying the best protection against the limestone.</p>
                <h2 style="color: #000; font-size: 11px">10. Issue</h2>
                <p style="color: #000">Our unit is suitable for individual housing, as multiple habitat. It also gives excellent results in trade and industry.</p>
            </div>
            <div style="float:inherit; width:150px">
                <img src="images/avantage.jpg" alt="img">
            </div>
    </div>          
    <?php }elseif($lang=="ar"){?>
            <div style="display: block; width:630px; float: right; text-align: right" >
                <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
                <h1 style="font-size: 20px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[7][$l];?></h1>
            <div style="float:inherit; width:450px">
                <h2 style="color: #000; font-size: 13px"> أسباب لاختيار مداغون للحمايتنا من التآكل من دون مواد كيميائية <br><br>التركيب</h2>
                <p style="color: #000">سهلة التركيب</p>
                <img src="images/mentage.jpg" alt="img"><br><br>
                <h2 style="color: #000; font-size: 13px">صيانة</h2>
                <p style="color: #000">لا صيانة</p>
                <h2 style="color: #000; font-size: 13px">ضمان</h2>
                <p style="color: #000">تمديد الضمان، اعتمادا على الجهاز وكحد الأدنى 10 سنوات</p>
                <h2 style="color: #000; font-size: 13px">حماية من الحجر الجيري</h2>
                <p style="color: #000">حماية جميع المنشآت والمعدات التي تستخدم المياه، والصناعة والاستخدام المنزلي.</p>
                <h2 style="color: #000; font-size: 13px">الحماية من التآكل</h2>
                <p style="color: #000">تجنب الزيادة في التآكل</p>
                <h2 style="color: #000; font-size: 13px">مياه الشرب</h2>
                <p style="color: #000">تظل المعادن الهامة (الكالسيوم والمغنيسيوم) في الماء وتعزز الصحة والرفاه</p>
                <h2 style="color: #000; font-size: 13px">اقتصاد</h2>
                <p style="color: #000">صيانة واصلاح المعدات الخاصة بك، غسالة صحون، غسالة, آلة صنع القهوة. انخفاض المنظفات والصيانة</p>
                <h2 style="color: #000; font-size: 13px">وقت</h2>
                <p style="color: #000"> توفر الكثير من الوقت عند التنظيف</p>
                <h2 style="color: #000; font-size: 13px">النوم</h2>
                <p style="color: #000">يمكنك النوم في سلام لأنك لا تلوث البيئة. لم تعد بحاجة إلى التفكير في صيانة المعدات، في حين تتمتع بأفضل حماية ضد الحجر الجيري</p>
                <h2 style="color: #000; font-size: 13px">قضية</h2>
                <p style="color: #000"> يعطي نتائج ممتازة في مجال التجارة والصناعة</p>
            </div>
            <div style="float:inherit; width:150px">
                <img src="images/avantage.jpg" alt="img">
            </div>
            </div>
    <?php }?>

<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>
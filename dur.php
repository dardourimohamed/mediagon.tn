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
    array("أسطورة الماء" , "MYTHE DE L'EAU", "Mythe of water"),// 1
    array("توضيحات حول الحجر الجيري", "Explications sur le calcaire", "Explanations on limestone"),// 2
    array("صلابة المياه", "Dureté de l'eau", "Water hardness"),// 3
    array("إنعاش المياه", "Vitalisation de l'eau","Vitalization of water"),// 4
    array("أجهزة مداغون مستخدمة في جميع أنحاء العالم التشغيل السليم للمعدات يزيد موثوقية العملية ويقلل من تكاليف الطاقة في البيئات الصناعية، المتطلبات الأمنية عالية. والحماية من الكلس له أهمية كبيرة بالنسبة لاستخدام المياه للتبريد والتدفئة والتنظيف", "Dans les environnements industriels, des exigences sécuritaires élevées sont de rigueur. La protection anticalcaire est d'une grande importance concernant l'utilisation de l'eau pour le refroidissement, le chauffage ou le nettoyage. Un fonctionnement adéquat des équipements accroît la fiabilité du processus et contribue à réduire les coûts énergétiques. Les appareils Mediagon sont utilisés dans le monde entier.", "In industrial environments, high security requirements are required. The calcification protection is of great importance for the use of water for cooling, heating and cleaning. Proper operation of the equipment increases process reliability and reduces energy costs. The Mediagon devices are used worldwide."),// 5
    array("الوثائق", "DOCUMENTS", "Documents"),// 6
    array("Hagalis", "Hagalis", "Hagalis"),// 7
    array("شرح عن الحجر الجيري - كربونات الكالسيوم", "EXPLICATIONS SUR LE CALCAIRE (CARBONATE DE CALCIUM)", "EXPLANATION ON LIMESTONE (Calcium Carbonate)"),// 8
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
        <aside style="display: block; float: left; text-align: left" id="left_column">
    <?php }else{?>
            <aside style="float: right; text-align: right" id="left_column">
    <?php }?>
         
      <nav>
        <ul>
          <li><a style="color: #0282c1; font-size: 18px" href="traitement.php"><?php echo $ml[1][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="explication.php"><?php echo $ml[2][$l];?></a></li>
            <li class="last"><a style="color: #cc0700; font-size: 20px" href="#"><?php echo $ml[3][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="vital.php"><?php echo $ml[4][$l];?></a></li>
        </ul>
      </nav>    
    </aside>
<?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">DURETÉ DE L'EAU ET SES REPERCUSSIONS</h1><br><br>
            <div style="float:inherit; width:650px">
                <h2 style="color: #000; font-size: 13px">Dureté de l'eau</h2><br><br>
                <p style="color: #000">
                    Ceci est à considérer:<br><br>
                    Le calcaire n'est souvent pas seulement sous forme de roche dans la nature, mais également dissout dans l'eau. Plus l'eau est calcaire, plus elle est dure. La dureté de l'eau – la mesure de la quantité dissoute de calcaire et de magnésium dans l'eau – est mesurée en degrés de dureté français (+fH).<br><br>
                    L'eau est un extraordinaire solvant et moyen de transport. Dans la nature, l'eau coule sur les pierres, ballast et au travers du sous-sol. Elle se charge ainsi de minéraux précieux, comme le magnésium et le carbonate de calcaire, plus connu sous la dénomination calcaire. Plus l'eau se charge de calcaire et de magnésium, plus elle est dure. Ceci n'influence nullement la qualité de l'eau, au contraire elle en favorise son goût.<br><br>
                </p>
                    <h2 style="color: #000; font-size: 13px">Répercussion de l'eau dure</h2><br><br>
                <p style="color: #000">
                    Des problèmes peuvent apparaître avec de l'eau chargée de calcaire au niveau des installations domestiques. Trop de calcaire dans l'eau dérange lorsqu'elle est en contact avec des substances alcaline, tel le savon ou quand elle est portée à ébulition et s'évapore. Le calcaire se précipite alors et cré le tartre. Cela concerne souvent les chaudières, machines à laver, embouts de robinets et conduites d'eau chaude. Cela signifie que les appareils ménagers doivent être entretenus et observés et que le dosage en produits de lessive doit être adapté en conséquence.<br><br>
                    très dure	> 38 °fh<br><br>
                    Pour de plus amples renseignements sur l'eau dure chez vous:<br><br>
                </p>
                    <a href="http://www.wasserqualitaet.ch/francais/pagesnav/frames.htm">Le service des eaux de votre commune saura vous renseigner.</a><br><br>
            </div>
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">WATER HARDNESS AND ITS EFFECTS</h1><br><br>
            <div style="float:inherit; width:650px">
                <h2 style="color: #000; font-size: 13px">Water hardness</h2><br><br>
                <p style="color: #000">
                    This is to consider:<br><br>
                    Limestone is often not only in the form of rock in nature, but also dissolves in water. More water is hard, it is more difficult. The hardness of the water - measuring the amount of dissolved calcium and magnesium in water - is measured in degrees of hardness French (+ fH).<br><br>
                    Water is a great solvent and means of transport. In nature, water flowing over stones, ballast and through the basement. She and loading of precious minerals such as magnesium and best known under the name limestone carbonate limestone. More water is responsible for calcium and magnesium, the more it is hard. This does not affect the water quality, on the contrary she promotes her liking.<br><br>
                </p>
                    <h2 style="color: #000; font-size: 13px">Effect of hard water</h2><br><br>
                <p style="color: #000">
                    Problems may arise with water containing lime in domestic installations. Too much calcium in the water disturbed when in contact with alkaline substances, such as soap or when it is brought to a boil and evaporate. Limestone and then rushes created calculus. This often involves boilers, washing machines, taps and fittings of hot water pipes. This means that appliances must be maintained and observed and that the dosage detergents must be adapted accordingly.<br><br>
                    For more information about hard water in your area:<br><br>
                </p>
                    <a href="http://www.wasserqualitaet.ch/francais/pagesnav/frames.htm">The water department in your municipality will inform you.</a><br><br>
            </div>
        </div>       
    <?php }elseif($lang=="ar"){?>
        <div style="display: block; width:630px; float: right; text-align: right" >
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">صلابة المياه وآثاره</h1><br><br>
            <div style="float:inherit; width:650px">
                <h2 style="color: #000; font-size: 13px">صلابة المياه</h2><br><br>
                <p style="color: #000">
                    هذا هو النظر<br><br>
                    الحجر الجيري هو في كثير من الأحيان ليس فقط في شكل الصخور في الطبيعة، ولكن أيضا يذوب في الماء. أكثر المياه هي الصعبة، بل هو أكثر صعوبة. يقاس في درجة صلابة الفرنسية - صلابة من الماء - قياس كمية الكالسيوم المذاب والمغنيسيوم في الماء<br><br>
                    المياه هو مذيب وهو من وسائل النقل. في طبيعة، كالمياه التي تتدفق أكثر من الحجارة، <br><br>
                </p>
                    <h2 style="color: #000; font-size: 13px">تأثير الماء العسر</h2><br><br>
                <p style="color: #000">
                    قد تنشأ مشاكل مع المياه التي تحتوي على الجير في المنشآت المحلية. الكثير من الكالسيوم في الماء يزعاج عندما تكون في اتصال مع المواد القلوية مثل الصابون أو عندما يتم إحضارها للغلي والتبخر.<br><br>
                    لمزيد من المعلومات حول الماء العسر في منطقتك<br><br>
                </p>
                    <a href="http://www.wasserqualitaet.ch/francais/pagesnav/frames.htm">قسم المياه في البلدك الخاص</a><br><br><br><br><br><br><br><br>
            </div>
        </div> 
    <?php }?>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>
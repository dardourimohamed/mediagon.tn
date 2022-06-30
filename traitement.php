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
          <li><a style="color: #cc0700; font-size: 18px" href="#"><?php echo $ml[1][$l];?></a></li>
          <li class="last"><a style="color: #0282c1; font-size: 20px" href="explication.php"><?php echo $ml[2][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="dur.php"><?php echo $ml[3][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="vital.php"><?php echo $ml[4][$l];?></a></li>
        </ul>
      </nav>    
    </aside>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
    <?php }else{?>
            <div style="display: block; width:630px; float: right; text-align: right" >
    <?php }?>
        <br><br>
        <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">
            <?php echo $ml[1][$l];?>
        </h1>
        <br><br>
    <?php if($lang=="fr"){?>
            <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[1][$l];?></h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                Notre qualité de vie est dépendante directement de la qualité de l'eau que nous consommons.<br>
                La structure cristaline de l'eau de source démontre une vivacité organique et variée qui, dans les réseaux d'eau est souvent très affaiblie. Mettre en réserve et transférer énergie et informations, sont des capacités que la science aujourd'hui ne peut encore expliquer. Il est pourtant prouvé que dans l'eau se trouvent des forces durables pouvant influencer notre bien-être.
            </h2>
            <br>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px">
                L'eau – notre source de vie. 
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                Les 2/3 de la surface de la terre est reouverte d'eau. Pourtant seul environ 0,6% de réserve d'eau est à la disposition de l'homme. Jour après jour le besoin exsiste en tous domaines de notre vie. L'eau tombe du ciel et remplit mers et lacs. Elle sort du robinet et devient une partie de nous. Elle humidifie l'eil lors d'une promesse de mariage ou à la naissance d'un enfant.<br><br>
                Mediagon soutient la philosophie, gérer l'eau dans tous les domaines qui le mérite. Alors que nous modifions souvent la consommation alimentaire solide, nous ingurgitons journellement toujours la même eau. La qualité de l'eau est plus essentielle pour l'organisme par rapport à l'aliment solide. La qualité ne s'exprime pas seulement   en l'absence de substances nocives, mais également lors de la présence de vitalité.
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px">
                Vitalité, énergie et bienêtre
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                <br>
                La technologie énergie, vitalité, biologique (BET) donne à l'eau une nouvelle force et soutien :<br><br>
                ♦ les fonctions cellulaires des organes humains<br>
                ♦ une alimentation consciemment saine<br>
                ♦ une hydratation consciente de la peau<br>
            </h2><br><br>
            <img style="float:inherit; padding: 10px" src="images/RTEmagicC_BET_logo_01.gif" alt="Image">
            <img style="float:inherit; padding: 10px" src="images/RTEmagicC_hagalis_01.gif" alt="Image">
        </div>
    <?php }elseif($lang=="en"){?>
            <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[1][$l];?></h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                Our quality of life is directly dependent on the quality of the water we consume.<br>
                The crystalline structure of the water source shows an organic and varied liveliness in water systems is often very weak. Set aside and transfer energy and information are abilities that science today can not yet explain. It is however shown that in water are sustainable forces that influence our well-being.
            </h2>
            <br>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px">
                Water - the source of our life. 
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                2/3 of the surface of the earth water is reopened. Yet only about 0.6% of water storage is available to man. Day after day the need exsiste in all areas of our lives. Water falls from the sky and fills the seas and lakes. It out of the tap and becomes a part of us. It humidifies eil on a promise of marriage or the birth of a child.<br><br>
                Mediagon supports the philosophy, water management in all areas which merit. While we often modify the solid food consumption, we are ingesting daily always the same water. The quality of the water is essential for the body relative to the solid food. Quality is not only expressed in the absence of harmful substances, but also in the presence of vitality.
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px">
                Vitality, energy and wellbeing
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                <br>
                The energy technology, vitality, biological (BET) gives the water a new strength and support:<br><br>
                ♦ Cellular functions of human organs<br>
                ♦ A consciously healthy diet<br>
                ♦ Conscious skin hydration<br>
            </h2><br><br>
            <img style="float:inherit; padding: 10px" src="images/RTEmagicC_BET_logo_01.gif" alt="Image">
            <img style="float:inherit; padding: 10px" src="images/RTEmagicC_hagalis_01.gif" alt="Image">
        </div>
    <?php }else{?>
            <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 16px"><?php echo $ml[1][$l];?></h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 14px">
                .نوعية الحياة لدينا تعتمد اعتمادا مباشرا على نوعية المياه التي نستهلكها<br>
                .التركيب البلوري  للمياه يظهر حيوية عضوية ومتنوعة في شبكات المياه غالبا ما تكون ضعيفة جدا

            </h2>
            <br>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px">
                .الماء - مصدر الحياة لدينا 
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                <br><br>
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px">
                حيوية، و طاقة و عافية
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                <br>
                <br><br>
            </h2><br><br>
            <img style="float:inherit; padding: 10px" src="images/RTEmagicC_BET_logo_01.gif" alt="Image">
            <img style="float:inherit; padding: 10px" src="images/RTEmagicC_hagalis_01.gif" alt="Image">
        </div>
                <br><br><br><br><br>
    <?php }?>
    <div style="float:inherit; width:150px">
            <img style="float:inherit; padding: 10px" src="images/vital_01.jpg" alt="Image">
            <h1 style="font-size: 15px; margin: 0px 0px 0px 0px; padding: 10px; color: rgb(195, 7, 1)">
                <?php echo $ml[6][$l];?>
            </h1>
            <a href="#" style="padding: 10px"><?php echo $ml[7][$l];?></a><br><br><br><br>
        </div>
     </div>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>
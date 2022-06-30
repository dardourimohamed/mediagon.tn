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
            <li class="last"><a style="color: #cc0700; font-size: 20px" href="#"><?php echo $ml[2][$l];?></a></li>
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
            <?php echo $ml[8][$l];?>
        </h1>
        <br><br>
    <?php if($lang=="fr"){?>
            <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                Le calcaire, c.à.d. le carbonate de calcium est un sel d'acide carbonique. De nombreuses régions, tels le Jura, les Alpes, les Dolomites sont essentiellement composées de pierre calcaire<br><br>
                Très souvent se trouvent dans ces régions des fossiles d'anciens animaux marins. Il y a des millions d'années, le niveau des mers submergeait les montagnes existantes. Le cycle ci-dessous de l'eau doit démontrer la création des montagnes<br>
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px">
                Cycle de l'eau <br>
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                Dans notre atmosphère existe toujours, en petite quantité, le gaz carbonique. Celui-ci se dissout facilement dans l'eau, raison pour laquelle la pluie et l'eau de source contiennent toujours du gaz carbonique ou de l'acide carbonique dissout.
                <br><br>1er pas du cycle: gaz carbonique + eau -› acide carbonique<br>
                Si l'eau contenant de l'acide carbonique coule sur la pierre calcaire, le calcaire est décomposé par l'acide soluble dans l'eau en hydrogénocarbonate de calcium.<br><br>
                2ème pas:  acide carbonique + carbonate de calcium -› hydrogénocarbonate de calcium <br>
                L'eau hydrogénocarbonate de calcium (eau dure) est emporté de la nappe phréatique. Partout où l'eau s'évapore ou est portée à ébulition, l'hydrogénocarbonate de calcium se précipite à nouveau en calcaire ou gaz carbonique. Ainsi les 2 premiers pas sont inversés.<br><br>
                3ème pas: hydrogénocarbonate de calcium -› carbonate de calcium + gaz carbonique + eau.<br>
                Ce processus prend place dans la nature, en particulier dans les grottes. Sur la stalactite, l'eau s'évapore lentement et crée le calcaire dur. <br><br>
                La grande masse de calcaire provient cependant des animaux marins, comme les coraux, escargots et coquillages. A l'aide de l'eau dure, ils construisent leur habitat et déposent ainsi le gaz carbonique et l'eau dans l'environnement. Ainsi se termine le cycle du calcaire. Les montagnes calcaire se sont créées de cette manière!<br>
            </h2>
        </div>
    <?php }elseif($lang=="en"){?>
            <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                Limestone, ie calcium carbonate is a carbonic acid salt. Many areas, such as the Jura, the Alps, the Dolomites are mainly composed of limestone.
                <br><br>Often found in these regions fossils of ancient marine animals. There are millions of years, sea levels submerged existing mountains. The cycle below the water must demonstrate the creation of the mountains.
            </h2>
            <br>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px">
                Water cycle<br>
            </h2>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 11px">
                In our atmosphere still exists in small amounts, carbon dioxide. It dissolves readily in water, which is why the rain and spring water always contain carbon dioxide or carbonic acid dissolves.
                <br><br>Step 1 cycle: carbon dioxide + water -> carbonic acid<br>
                If water containing carbonic acid flowing over the limestone, limestone is decomposed by the acid soluble in water of calcium hydrogen carbonate.
                <br><br>Step 2: carbonic acid + calcium carbonate -> calcium hydrogen<br>
                The calcium bicarbonate water (hard water) is taken away from the water table. Wherever the water evaporates or is brought to a boil, hydrogen is again precipitated calcium limestone or carbon dioxide. And the first two are reversed.
                <br>Step 3: calcium hydrogen -> calcium carbonate + carbon dioxide + water.<br><br>
                This process takes place in nature, especially in the caves. The stalactite, the water evaporates slowly and creates the hard limestone.
                <br><br>The great mass of limestone, however, comes from marine animals, such as corals, snails and shells. Using hard water, they build their habitat and thus lay the carbon dioxide and water in the environment. This completes the cycle of limestone. The limestone mountains are created in this way!
            </h2>
        </div>
    <?php }else{?>
            <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px">
                <br><br>الحجر الجيري، أي كربونات الكالسيوم هو ملح حمض الكربونيك. موجود في العديد من المجالات، مثل جبال الألب، والدولوميت، تتكون أساسا من الحجر الجيري.<br><br>
كثيرا ما وجدت في هذه المناطق أحافير الحيوانات البحرية القديمة
            </h2>
            <br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    <?php }?>
    <div style="float:inherit; width:150px">
        <img style="float:inherit; padding: 10px; width: 270px" src="images/casarole.jpg" alt="Image"><br>
        <img style="float:inherit; padding: 10px; width: 270px" src="images/exp.jpg" alt="Image"><br>
        </div>
     </div>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>
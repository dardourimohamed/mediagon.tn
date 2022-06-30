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
    array("مشاكل الحجر الجيري", "Problèmes calcaires", "Referances"),// 6
    array("مظاد الحجر الجيري", "Anticalcaire + Anticorrosion", "Anti limestone + Anti corrosion"),// 7
    array("مداغون تجميع", "Mediagon combiné", "combined Mediagon"),// 8
    array("اختبار الفعالية", "Testez l'efficacité", "Effecacity test"),// 9
    );
?>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <aside style="float: left; text-align: left" id="left_column">
    <?php }else{?>
            <aside style="float: right; text-align: right" id="left_column">
    <?php }?>
      <nav>
        <ul>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="referance.php"><?php echo $ml[1][$l];?></a></li>
            <li><a style="color: #cc0700; font-size: 20px" href="#"><?php echo $ml[3][$l];?></a></li>
        </ul>
      </nav>    
    </aside>
    <?php if(($lang=="fr")||($lang=="en")){?>
        <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[3][$l];?></h1><br>
        <table border="0">
            <tr>
                <td>
                    <a href="problemes_calcaires.pdf"><img style="padding: 10px" src="images/problemes_calcaires.jpg" alt="Image"></a>
                </td>
                <td>
                    <h1 style="font-size: 11px; margin: 0px 0px 0px 0px; color: #000"><?php echo $ml[6][$l];?></h1>
                </td>
                <td>
                    <a href="anticalcaire.pdf"><img style="padding: 10px" src="images/anticalcaire.jpg" alt="Image"></a>
                </td>
                <td>
                    <h1 style="font-size: 11px; margin: 0px 0px 0px 0px; color: #000"><?php echo $ml[7][$l];?></h1>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="combination.pdf"><img style="padding: 10px" src="images/combination.jpg" alt="Image"></a>
                </td>
                <td>
                    <h1 style="font-size: 11px; margin: 0px 0px 0px 0px; color: #000"><?php echo $ml[8][$l];?></h1>
                </td>
                <td>
                    <a href="eff.pdf"><img style="padding: 10px" src="images/eff.jpg" alt="Image"></a>
                </td>
                <td>
                    <h1 style="font-size: 11px; margin: 0px 0px 0px 0px; color: #000"><?php echo $ml[9][$l];?></h1>
                </td>
            </tr>
        </table>        
    <?php }else{?>    
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1); float: right"><?php echo $ml[3][$l];?></h1><br>
        <table style="float: right" border="0">
            <tr>
                <td>
                    <a href="problemes_calcaires.pdf"><img style="float: right; padding: 10px" src="images/problemes_calcaires.jpg" alt="Image"></a>
                </td>
                <td>
                    <h1 style="float: right; font-size: 15px; margin: 0px 0px 0px 0px; color: #000"><?php echo $ml[6][$l];?></h1>
                </td>
                <td>
                    <a href="anticalcaire.pdf"><img style="float: right; padding: 10px" src="images/anticalcaire.jpg" alt="Image"></a>
                </td>
                <td>
                    <h1 style="float: right; font-size: 15px; margin: 0px 0px 0px 0px; color: #000"><?php echo $ml[7][$l];?></h1>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="combination.pdf"><img style="float: right; padding: 10px" src="images/combination.jpg" alt="Image"></a>
                </td>
                <td>
                    <h1 style="float: right; font-size: 15px; margin: 0px 0px 0px 0px; color: #000"><?php echo $ml[8][$l];?></h1>
                </td>
                <td>
                    <a href="eff.pdf"><img style="float: right; padding: 10px" src="images/eff.jpg" alt="Image"></a>
                </td>
                <td>
                    <h1 style="float: right; font-size: 15px; margin: 0px 0px 0px 0px; color: #000"><?php echo $ml[9][$l];?></h1>
                </td>
            </tr>
        </table>
    <?php }?>   
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>
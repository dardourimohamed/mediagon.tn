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
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="dur.php"><?php echo $ml[3][$l];?></a></li>
            <li class="last"><a style="color: #cc0700; font-size: 20px" href="#"><?php echo $ml[4][$l];?></a></li>
        </ul>
      </nav>    
    </aside>
<?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">MEDIAGON DONNE UNE NOUVELLE FORCE A L'EAU</h1><br><br>
            <div style="float:inherit; width:650px">
                <p style="color: #000">
                    Par une série de tests indépendants, l'efficacité technologique de Mediagon a été mise à l'épreuve. Il en résulte que l'eau vitalisée réagit bénéfiquement sur l'organisme et, ensemble avec une nourriture saine et des soins corporels adéquats, elle est hautement recommandée. Des réactions positives sont également à attendre auprès des animaux domestiques, ainsi que des  plantes.<br><br>
                </p>
                <h2 style="color: #000; font-size: 13px">L'eau vitalisée</h2><br><br>
                <p style="color: #000">
                    Le but de la vitalisation de l'eau réside à redonner à celle-ci la force et le naturel qu'elle avait d'origine, comme si elle provenait d'une source cristaline claire et fraîche, sans avoir subit les aléas et influences des contingences matérielles inévitables.<br><br>
                </p>
                    <h2 style="color: #000; font-size: 13px">Bien-être</h2><br><br>
                <p style="color: #000">
                    Les minéraux calcium et magnésium restent dans l'eau. Il est démontré que ceux-ci luttent efficacement contre l'ostéoporose et soutiennent la désintoxication et la purification du corps. Selon les études de l'institut Hagalis, l'eau du réseau atteint à nouveau le niveau d'une eau cristalline pure de source.<br><br>
                </p>
                <h2 style="color: #000; font-size: 13px">Wellness</h2><br><br>
                <p style="color: #000">
                    L'eau est plus douce et moins agressive pour la peau. Ceci se vérifie surtout sur une peau délicate ou sèche. Vous utilisez nettement moins de gel-douche, shampoing, body lotion et crème pour les mains.<br><br>
                </p>
                <h2 style="color: #000; font-size: 13px">Protection de l'environnement</h2><br><br>
                <p style="color: #000">
                    Avec moins d'énergie et de produits chimiques, vous soulager les eaux usées et l'environnement.<br><br>
                </p>
            </div>
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">Mediagon GIVES A NEW FORCE IN WATER</h1><br><br>
            <div style="float:inherit; width:650px">
                <p style="color: #000">
                    Through a series of independent tests, technological efficiency Mediagon was tested. As a result vitalised water reacts beneficially on the body and, together with a healthy diet and adequate physical care, it is highly recommended. Positive reactions are also expected to pets and plants.<br><br>
                </p>
                <h2 style="color: #000; font-size: 13px">Water vitalized</h2><br><br>
                <p style="color: #000">
                    The purpose of the vitalization of water lies to restore to it the strength and she had natural origin, as if it came from a clear and fresh crystalline source without undergoing the risks and influences material contingencies inevitable.<br><br>
                </p>
                    <h2 style="color: #000; font-size: 13px">Well-being</h2><br><br>
                <p style="color: #000">
                    The minerals calcium and magnesium remain in the water. It is shown that they effectively fight against osteoporosis and support detoxification and cleansing the body. According to studies by the Institute Hagalis, mains water again reaches the level of a crystal pure water source.<br><br>
                </p>
                <h2 style="color: #000; font-size: 13px">Wellness</h2><br><br>
                <p style="color: #000">
                    The water is softer and less aggressive to the skin. This is especially true on a sensitive or dry skin. You clearly use less shower gel, shampoo, body lotion and hand cream.<br><br>
                </p>
                <h2 style="color: #000; font-size: 13px">Environmental Protection</h2><br><br>
                <p style="color: #000">
                    With less energy and chemicals, you relieve the sewage and the environment.<br><br>
                </p>
            </div>
        </div>       
    <?php }elseif($lang=="ar"){?>
        <div style="display: block; width:630px; float: right; text-align: right" >
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">مداغون تعطي حيوية جديدة للهياه</h1><br><br>
            <div style="float:inherit; width:650px">
                <p style="color: #000">
                    من خلال سلسلة من اختبارات مستقلة، تم اختبار كفائة التكنولوجية مداغون. وكنتيجة لذلك يتفاعل الماء المفيد للجسم جنبا إلى جنب مع اتباع نظام غذائي صحي والرعاية المادية الكافية. ومن المتوقع أيضا أن للحيوانات الأليفة والنباتات ردود فعل إيجابية معه<br><br>
                </p>
                <h2 style="color: #000; font-size: 13px">في تنشيط المياه</h2><br><br>
                <p style="color: #000">
                    الغرض من إنعاش المياه يكمن في استعادة القوة الطبيعية والأصلية، كما لو أنها جاءت من مصدر بلورية واضحة وجديدة دون الخضوع للمخاطر والتأثيرات <br><br>
                </p>
                    <h2 style="color: #000; font-size: 13px">رفاهية</h2><br><br>
                <p style="color: #000">
                    تبقى المعادن والكالسيوم والمغنيسيوم في الماء. هو مبين أنهم مكافحة فعالة ضد هشاشة العظام ودعم إزالة السموم وتطهير الجسم<br><br>
                </p>
                <h2 style="color: #000; font-size: 13px">العافية</h2><br><br>
                <p style="color: #000">
                    الماء هو أكثر ليونة وأقل عدوانية على الجلد. هذا ينطبق بشكل خاص على البشرة الحساسة أو الجافة هذا. كنت تستخدم بوضوح أقل هلام الاستحمام والشامبو وغسول الجسم وكريم اليد.<br><br>
                </p>
                <h2 style="color: #000; font-size: 13px">حماية البيئة</h2><br><br>
                <p style="color: #000">
                    مع كميات أقل من الطاقة والمواد الكيميائية، يمكنك تخفيف مياه الصرف الصحي<br><br>
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
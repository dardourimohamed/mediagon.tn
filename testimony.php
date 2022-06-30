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
    array("الشهادة" , "Témoignage", "Testimony"),// 1
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    );
?>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <aside style="float: left; text-align: left" id="left_column">
    <?php }else{?>
            <aside style="float: right; text-align: right" id="left_column">
    <?php }?>
      <nav>
        <ul>
            <li class="last"><a style="color: #cc0700; font-size: 20px"><?php echo $ml[1][$l];?></a></li>
        </ul>
      </nav>    
    </aside>

    <?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <iframe width="480" height="360" src="//www.youtube.com/embed/yXhIX89EKv4?rel=0" frameborder="0" allowfullscreen></iframe>
            <br><br>
            <img src="images/testimony.jpg" width="480px" alt="témoignage">
			<br><br>
			<img src="images/att_golf.jpg" width="480px" alt="témoignage">
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <iframe width="480" height="360" src="//www.youtube.com/embed/yXhIX89EKv4?rel=0" frameborder="0" allowfullscreen></iframe>
            <br><br>
            <img src="images/testimony.jpg" width="480px" alt="témoignage">
			<br><br>
			<img src="images/att_golf.jpg" width="480px" alt="témoignage">
        </div>
    <?php }else{?>    
        <div style="display: block; width:630px; float: right; text-align: right !important" >
            <iframe width="480" height="360" src="//www.youtube.com/embed/yXhIX89EKv4?rel=0" frameborder="0" allowfullscreen></iframe>
            <br><br>
            <img src="images/testimony.jpg" width="480px" alt="témoignage">
			<br><br>
			<img src="images/att_golf.jpg" width="480px" alt="témoignage">
        </div>
    <?php }?>   
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>
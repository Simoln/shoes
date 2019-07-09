<?php  
    include('connect_php.php');

    $sql1 = "select * from shoes where shoes_id=1";
    $result1 = mysqli_query($con, $sql1);
    $re1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

        ob_start();
        echo $re1['shoes_name'];
        $name1 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['shoes_url'];
        $image1 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['shoes_level'];
        $level1 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['shoes_price'];
        $price1 = ob_get_contents();
        ob_end_clean();
        
        ob_start();
        echo $re1['shoes_brand'];
        $brand1 = ob_get_contents();
        ob_end_clean();
// --------------------------------------------------------------------------------------------------------------------------------------------------------
        ob_start();
        echo $re1['brand_logo'];
        $logo1 = ob_get_contents();
        ob_end_clean();
        
        ob_start();
        echo $re1['level_view'];
        $view1 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['level_wear'];
        $wear1 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['level_fight'];
        $fight1 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['offical_url'];
        $offical1 = ob_get_contents();
        ob_end_clean();
        
        ob_start();
        echo $re1['taobao_url'];
        $taobao1 = ob_get_contents();
        ob_end_clean();
        
        ob_start();
        echo $re1['bili_url'];
        $bili1 = ob_get_contents();
        ob_end_clean();
        
        ob_start();
        echo $re1['shoes_des'];
        $des1 = ob_get_contents();
        ob_end_clean();
        

// ------------------------------------------------------------------------------------------------------------        
    $sql2 = "select * from shoes where shoes_id=2";
    $result2 = mysqli_query($con, $sql2);
    $re2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

    ob_start();
    echo $re2['shoes_name'];
    $name2 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re2['shoes_url'];
    $image2 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re2['shoes_level'];
    $level2 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re2['shoes_price'];
    $price2 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re2['shoes_brand'];
    $brand2 = ob_get_contents();
    ob_end_clean();
// --------------------------------------------------------------------------------------------------------------------------------------------------------
    ob_start();
    echo $re2['brand_logo'];
    $logo2 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re2['level_view'];
    $view2 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re2['level_wear'];
    $wear2 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re2['level_fight'];
    $fight2 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re2['offical_url'];
    $offical2 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re2['taobao_url'];
    $taobao2 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re2['bili_url'];
    $bili2 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re2['shoes_des'];
    $des2 = ob_get_contents();
    ob_end_clean();
    

// ------------------------------------------------------------------------------------------------------------        
    $sql3 = "select * from shoes where shoes_id=3";
    $result3 = mysqli_query($con, $sql3);
    $re3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);

    ob_start();
    echo $re3['shoes_name'];
    $name3 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re3['shoes_url'];
    $image3 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re3['shoes_level'];
    $level3 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re3['shoes_price'];
    $price3 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re3['shoes_brand'];
    $brand3 = ob_get_contents();
    ob_end_clean();
// --------------------------------------------------------------------------------------------------------------------------------------------------------
    ob_start();
    echo $re3['brand_logo'];
    $logo3 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re3['level_view'];
    $view3 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re3['level_wear'];
    $wear3 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re3['level_fight'];
    $fight3 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re3['offical_url'];
    $offical3 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re3['taobao_url'];
    $taobao3 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re3['bili_url'];
    $bili3 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re3['shoes_des'];
    $des3 = ob_get_contents();
    ob_end_clean();
    

// ------------------------------------------------------------------------------------------------------------        
    $sql4 = "select * from shoes where shoes_id=4";
    $result4 = mysqli_query($con, $sql4);
    $re4 = mysqli_fetch_array($result4, MYSQLI_ASSOC);

    ob_start();
    echo $re4['shoes_name'];
    $name4 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re4['shoes_url'];
    $image4 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re4['shoes_level'];
    $level4 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re4['shoes_price'];
    $price4 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re4['shoes_brand'];
    $brand4 = ob_get_contents();
    ob_end_clean();

    // --------------------------------------------------------------------------------------------------------------------------------------------------------
    ob_start();
    echo $re4['brand_logo'];
    $logo4 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re4['level_view'];
    $view4 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re4['level_wear'];
    $wear4 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re4['level_fight'];
    $fight4 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re4['offical_url'];
    $offical4 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re4['taobao_url'];
    $taobao4 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re4['bili_url'];
    $bili4 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re4['shoes_des'];
    $des4 = ob_get_contents();
    ob_end_clean();




// --------------------------------------------------------------------------------------------------------------------------------------------------------
   
    $sql5 = "select * from shoes where shoes_id=5";
    $result5 = mysqli_query($con, $sql5);
    $re5 = mysqli_fetch_array($result5, MYSQLI_ASSOC);

    ob_start();
    echo $re5['shoes_name'];
    $name5 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re5['shoes_url'];
    $image5 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re5['shoes_level'];
    $level5 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re5['shoes_price'];
    $price5 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re5['shoes_brand'];
    $brand5 = ob_get_contents();
    ob_end_clean();
    

// ------------------------------------------------------------------------------------------------------------        
    $sql6 = "select * from shoes where shoes_id=6";
    $result6 = mysqli_query($con, $sql6);
    $re6 = mysqli_fetch_array($result6, MYSQLI_ASSOC);

    ob_start();
    echo $re6['shoes_name'];
    $name6 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re6['shoes_url'];
    $image6 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re6['shoes_level'];
    $level6 = ob_get_contents();
    ob_end_clean();

    ob_start();
    echo $re6['shoes_price'];
    $price6 = ob_get_contents();
    ob_end_clean();
    
    ob_start();
    echo $re6['shoes_brand'];
    $brand6 = ob_get_contents();
    ob_end_clean();
// --------------------------------------------------------------------------------------------------------------------------------------------------------

    
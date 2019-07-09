<?php  
    include('connect_php.php');

    $sql1 = "select * from shoes_image where shoes_id=1";
    $result1 = mysqli_query($con, $sql1);
    $re1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

        ob_start();
        echo $re1['image_url1'];
        $url11 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['image_des1'];
        $des11 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['image_url2'];
        $url12 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['image_des2'];
        $des12 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['image_url3'];
        $url13 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['image_des3'];
        $des13 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['image_url4'];
        $url14 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re1['image_des4'];
        $des14 = ob_get_contents();
        ob_end_clean();

        
// -------------------------------------------------------------------------------------------------------------------------------------------------
    $sql2 = "select * from shoes_image where shoes_id=2";
    $result2 = mysqli_query($con, $sql2);
    $re2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

        ob_start();
        echo $re2['image_url1'];
        $url21 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re2['image_des1'];
        $des21 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re2['image_url2'];
        $url22 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re2['image_des2'];
        $des22 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re2['image_url3'];
        $url23 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re2['image_des3'];
        $des23 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re2['image_url4'];
        $url24 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re2['image_des4'];
        $des24 = ob_get_contents();
        ob_end_clean();


// -------------------------------------------------------------------------------------------------------------------------------------------------
    $sql3 = "select * from shoes_image where shoes_id=3";
    $result3 = mysqli_query($con, $sql3);
    $re3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);

        ob_start();
        echo $re3['image_url1'];
        $url31 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re3['image_des1'];
        $des31 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re3['image_url2'];
        $url32 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re3['image_des2'];
        $des32 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re3['image_url3'];
        $url33 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re3['image_des3'];
        $des33 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re3['image_url4'];
        $url34 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re3['image_des4'];
        $des34 = ob_get_contents();
        ob_end_clean();


// -------------------------------------------------------------------------------------------------------------------------------------------------

    $sql4 = "select * from shoes_image where shoes_id=4";
    $result4 = mysqli_query($con, $sql4);
    $re4 = mysqli_fetch_array($result4, MYSQLI_ASSOC);

        ob_start();
        echo $re4['image_url1'];
        $url41 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re4['image_des1'];
        $des41 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re4['image_url2'];
        $url42 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re4['image_des2'];
        $des42 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re4['image_url3'];
        $url43 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re4['image_des3'];
        $des43 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re4['image_url4'];
        $url44 = ob_get_contents();
        ob_end_clean();

        ob_start();
        echo $re4['image_des4'];
        $des44 = ob_get_contents();
        ob_end_clean();

<?php
    include("../confige.php");
    if(isset($_POST['choose'])){
        $TestID = $_GET['TestID'];
        $JavobID = $_POST['Javob'];
        $sql1 = "SELECT * FROM `cours_test_javob` WHERE `TestID`='".$TestID."' AND `JavobID`='".$JavobID."' AND `Status`='true'";
        $res1 = $conn->query($sql1);
        $num_rows = $res1->rowCount();
        if($num_rows>0){
            header("location: ../../lissen_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&oke=true");
        }else{
            header("location: ../../lissen_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&err=true");
        }
    }elseif(isset($_POST['chechbox'])){
        $TestID = $_GET['TestID'];
        $sql2 = "SELECT * FROM `cours_test_javob` WHERE `TestID`='".$TestID."' AND `Status`='true'";
        $res2 = $conn->query($sql2);
        $num_rows = $res2->rowCount();
        $sql3 = "SELECT * FROM `cours_test_javob` WHERE `TestID`='".$TestID."'";
        $res3 = $conn->query($sql3);
        $T = 0;
        $N = 0;
        while ($row3 = $res3->fetch()) {
            if(isset($_POST[$row3['JavobID']])){
                if($row3['Status']==='true'){
                    $T++;
                }else{
                    $N++;
                }
            }
        }
        if($N>0){
            header("location: ../../lissen_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&err=true");
        }elseif($T===$num_rows){
            header("location: ../../lissen_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&oke=true");
        }else{
            header("location: ../../lissen_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&err=true");
        }
    }elseif(isset($_POST['insert'])){
        $TestID = $_GET['TestID'];
        $Javob = str_replace("'","`",$_POST['Javob']);
        $sql2 = "SELECT * FROM `cours_test_javob` WHERE `TestID`='".$TestID."' AND `Javob`='".$Javob."' AND `Status`='true'";
        $res2 = $conn->query($sql2);
        $num_rows = $res2->rowCount();
        echo $num_rows;
        if($num_rows>0){
            header("location: ../../lissen_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&oke=true");
        }else{
            header("location: ../../lissen_test.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."&err=true");
        }
    }else{
        header("location: ../../kabinet.php");
    }

?>
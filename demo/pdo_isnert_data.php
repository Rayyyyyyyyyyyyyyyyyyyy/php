<?php

require_once "PDO_connect.php";



if($_FILES["myFile"]["error"]==0){
        if(move_uploaded_file($_FILES["myFile"]["tmp_name"],
            "./img/".$_FILES["myFile"]["name"])){
        //     echo "Upload success";
    
        }else{
            "fail!!";
        }
    
    }
        $photo_name = $_FILES["myFile"]["name"];

        $sql_photo="INSERT INTO photo(name)VALUES(?)";
        $stmt_photo=$db_host->prepare($sql_photo);
        $stmt_photo->execute([$photo_name]);

        $photooo="SELECT id FROM photo WHERE name ="."'$photo_name'";
        $stmtphoto=$db_host->prepare($photooo);
        try{
                $stmtphoto->execute();
                while ($rowphoto = $stmtphoto->fetch()) {
                        $photoid=$rowphoto['id'];
                        // echo $photoid;
        }


        }catch (PDOException $e) {
                echo "預處理陳述式執行失敗！ <br/>";
                echo "Error: " . $e->getMessage() . "<br/>";
                $db_host = NULL;
                exit;
            }

        $job_name=$_POST['job'];

        $sql_job="INSERT INTO job(name)VALUES(?)";
        $stmt_job=$db_host->prepare($sql_job);
        $stmt_job->execute([$job_name]);

        $job="SELECT id FROM job WHERE name ="."'$job_name'";
        $stmt_jobbb=$db_host->prepare($job);
        try{
                $stmt_jobbb->execute();
                while ($rowjob = $stmt_jobbb->fetch()) {
                        $jobid=$rowjob['id'];
                        // echo $photoid;
        }


        }catch (PDOException $e) {
                echo "預處理陳述式執行失敗！ <br/>";
                echo "Error: " . $e->getMessage() . "<br/>";
                $db_host = NULL;
                exit;
            }





$sql="INSERT INTO member(
        photo,
        name,
        pas,
        gender,
        birth_date,
        phone,
        address,
        email,
        job
        )
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt=$db_host->prepare($sql);

$name= $_POST["name"];
$pas= $_POST["pas"];
$gender=$_POST["gender"];
$birth_date=$_POST["birth_date"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$email=$_POST["email"];
$stmt->execute([$photoid, $name, $pas, $gender, $birth_date, $phone, $address, $email, $jobid]);





echo "<script> alert('新增了');history.go(-1);</script>";


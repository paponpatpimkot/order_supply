<?php
    include 'connect.php';
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(($username=='')||($password=='')){
            echo "<scrip>alert('กรุณากรอก  username หรือ password')</script>";
        }
            $sql="SELECT * FROM student WHERE std_id='$username' AND card_id='$password'";
            $result=$connect->query($sql);
            $num_row=mysqli_num_rows($result);     
            $fetch = mysqli_fetch_array($result);   
        
        if($num_row == 0){            
            echo "<script>alert('username หรือ password ไม่ถูกต้อง');window.history.back();</script>";
        }else if($num_row != 0){
            $_SESSION['std_id'] = $fetch['std_id'];
            $_SESSION['grp']=$fetch['grp'];
            header("location:pages/index.php");
        }
?>

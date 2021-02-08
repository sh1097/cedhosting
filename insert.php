<?php include 'connect.php' ?>

 <?php
    session_start();


    $mob = $_SESSION['mobile'];

    $email_id = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $select = $_POST['select'];
    $anser = $_POST['ans'];
    class User
    {
        public function registration($con, $mob, $email_id, $name, $password, $select, $anser)
        {
            $sql1 = ("select *from tbl_user where email='$email_id'or mobile='$mob'");
            $result = mysqli_query($con, $sql1);

            if (mysqli_num_rows($result) > 0) {
                echo "record already exists";
            } else {

                $sql = $con->query("INSERT INTO `tbl_user` ( `email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`,  `password`, `security_question`, `security_answer`) VALUES ( '$email_id', '$name', '$mob', 1, 1, 1, 0, '$password','$select', '$anser')");

                echo "registration success";
                return $sql;
            }
        }
    }
    $user = new User();


    $user->registration($con, $mob, $email_id, $name, $password, $select, $anser);








    ?>
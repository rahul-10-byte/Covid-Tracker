<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}


$con = mysqli_connect('localhost','root');

    mysqli_select_db($con,'quizdatabase');


    if(isset($_POST['submit'])){

        if(!empty($_POST['quizcheck'])){

            $count = count($_POST['quizcheck']);

            echo "Out of 5, you have attempted ".$count. "options.";

            $result = 0;
            $i = 1;

            $selected = $_POST['quizcheck'];
            print_r($selected);

            $q = "select* from questions";
            $query = mysqli_query($con, $q);

            while( $rows = mysqli_fetch_array($query)) {
                print_r($rows['ans_id']);

                $checked = $rows['ans_id'] == $selected[$i];

                if($checked){
                    $result++;
                }
                $i++;
            }

            echo "<br> Your total score is ".$result;

        }
    }


?>
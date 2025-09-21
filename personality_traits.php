<?php
    ini_set('display_errors', 'TRUE');
    require('Config/connection.php');
    session_start();
    // echo "<pre>";
    // print_r($_SESSION);
    // die;

    if (!empty($_POST)) {
            // $conn = connectToDB();
            // $q1 = "select * from contacts";
            // $result = mysqli_query($conn, $q1);
            // closeConnection($conn);
            // $user = mysqli_fetch_assoc($result);
            // echo "<pre>";
            // print_r($_POST);
            // die;

            $date = $_POST['date']; 
            $day = date("d", strtotime($date)); 
            //echo "Day is: " . $day. "<br>";  
    }



    switch($day)
    {
        case 1:
            echo "Enthusiasm, natural leader, don't like partnerships, logical";
            break;
        case 2:
            echo "Intutive, helpful, emotional, friendly";
            break;
        case 3:
            echo "Imaginations, more successful, socially, good in relationships";
            break;
        case 4:
            echo "Hardworker, challenging person, highly responsible";
            break;
        case 5:
            echo "Need freedom, well-adjusted, business lover, outing";
            break;
        case 6:
            echo "Emotional, caring, positive, sensitive";
            break;
        case 7:
            echo "Unique, loss of love, secretive, R & D type person";
            break;
        case 8:
            echo "Ambitious, practical, money-maker hardworker, motivated";
            break;
        case 9:
            echo "Rich - imagination, broad-minded, idealistic";
            break;
        case 10:
            echo "Confident, relaxation, good in management, master destiny no.";
            break;
        default:
            echo "No information";
            break;
    }
?>
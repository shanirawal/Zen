<?php
    ini_set('display_errors', 'TRUE');
    require('Config/connection.php');
    session_start();
    // echo "<pre>";
    // print_r($_SESSION);
    // die;

    if (!empty($_POST)) {

            $date = $_POST['dob']; 
            $day = date("d", strtotime($date));
            echo "Day is: " . $day. "<br>";  
            
        switch($day)
        {
            case 1:
            case 10:
            case 19:
            case 28:
                echo "Your ruling planet is SUN. Medical related, Metals related!";
                break;
            case 2:
            case 11:
            case 20:
            case 29:
                echo "Your ruling planet is MOON. Silver related, emotional related!";
                break;
            case 3:
            case 12:
            case 21:
            case 30:
                echo "Your ruling planet is JUPITER. Higher education";
                break;
            case 4:
            case 13:
            case 22:
            case 31:
                echo "Your ruling planet is RAHU. All types of business, All in one!";
                break;
            case 5:
            case 14:
            case 23:
                echo "Your ruling planet is MERCURY. Education -> primary, secondary!";
                break;
            case 6:
            case 15:
            case 24:
                echo "Your ruling planet is VENUS. Designing related, luxury business!";
                break;
            case 7:
            case 16:
            case 25:
                echo "Your ruling planet is KETU. Ocult science related work!";
                break;
            case 8:
            case 17:
            case 26:
                echo "Your ruling planet is SATURN. Iron related work!";
                break;
            case 9:
            case 18:
            case 27:
                echo "Your ruling planet is MARS. Fighting, Police, Army";
                break;
            default:
                echo "No information";
                break;
        }
    }
?>
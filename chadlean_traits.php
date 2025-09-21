<?php
    ini_set('display_errors', 'TRUE');
    require('Config/connection.php');
    session_start();
    //echo "<pre>";
    //print_r($_SESSION);
    //die;

    if (!empty($_POST)) {

            $name = $_POST['fullName']; 
            echo "Your Full Name is : " . $name. "<br>"; 
            $dob = $_POST['date']; 
        
            // Chaldean number mapping
            $chaldeanMap = [
            'A'=>1, 'I'=>1, 'J'=>1, 'Q'=>1, 'Y'=>1,
            'B'=>2, 'K'=>2, 'R'=>2,
            'C'=>3, 'G'=>3, 'L'=>3, 'S'=>3,
            'D'=>4, 'M'=>4, 'T'=>4,
            'E'=>5, 'H'=>5, 'N'=>5, 'X'=>5,
            'U'=>6, 'V'=>6, 'W'=>6,
            'O'=>7, 'Z'=>7,
            'F'=>8, 'P'=>8
        ];

            // Example Birth–Name Compatibility Matrix
            // (You should fill actual values from your chart image here)
            $compatibilityMatrix = [
                1 => [1=>"Excellent", 2=>"Neutral", 3=>"Friendly", 4=>"Challenging", 5=>"Supportive", 6=>"Neutral", 7=>"Spiritual", 8=>"Material", 9=>"Powerful"],
                2 => [1=>"Balanced", 2=>"Excellent", 3=>"Supportive", 4=>"Friendly", 5=>"Challenging", 6=>"Neutral", 7=>"Spiritual", 8=>"Material", 9=>"Powerful"],
                3 => [1=>"Friendly", 2=>"Challenging", 3=>"Excellent", 4=>"Neutral", 5=>"Supportive", 6=>"Friendly", 7=>"Spiritual", 8=>"Material", 9=>"Powerful"],
                4 => [1=>"Challenging", 2=>"Supportive", 3=>"Neutral", 4=>"Excellent", 5=>"Friendly", 6=>"Challenging", 7=>"Spiritual", 8=>"Material", 9=>"Powerful"],
                5 => [1=>"Supportive", 2=>"Friendly", 3=>"Challenging", 4=>"Neutral", 5=>"Excellent", 6=>"Supportive", 7=>"Spiritual", 8=>"Material", 9=>"Powerful"],
                6 => [1=>"Neutral", 2=>"Supportive", 3=>"Friendly", 4=>"Challenging", 5=>"Supportive", 6=>"Excellent", 7=>"Spiritual", 8=>"Material", 9=>"Powerful"],
                7 => [1=>"Spiritual", 2=>"Friendly", 3=>"Challenging", 4=>"Neutral", 5=>"Supportive", 6=>"Challenging", 7=>"Excellent", 8=>"Material", 9=>"Powerful"],
                8 => [1=>"Material", 2=>"Challenging", 3=>"Friendly", 4=>"Supportive", 5=>"Neutral", 6=>"Friendly", 7=>"Spiritual", 8=>"Excellent", 9=>"Powerful"],
                9 => [1=>"Powerful", 2=>"Supportive", 3=>"Friendly", 4=>"Challenging", 5=>"Neutral", 6=>"Supportive", 7=>"Spiritual", 8=>"Material", 9=>"Excellent"]
            ];

            // Function to calculate Name Number
            function calculateNameNumber($name, $map) {
            $name = strtoupper(preg_replace('/[^A-Z]/', '', $name));
            $sum = 0;
            foreach (str_split($name) as $char) {
                if (isset($map[$char])) {
                    $sum += $map[$char];
                }
            }
            // Reduce to single digit (1–9)
            while ($sum > 9) {
                $sum = array_sum(str_split($sum));
            }
            return $sum;
        }

            // Function to calculate Birth Number
            function calculateBirthNumber($dob) {
                // Expect format YYYY-MM-DD
                $day = (int)date("d", strtotime($dob));
                $sum = $day;
                while ($sum > 9) {
                    $sum = array_sum(str_split($sum));
                }
                return $sum;
            }

            // Example Usage:
            // $name = "Rahul Sharma";
            // $dob = "1995-08-18"; // YYYY-MM-DD format

            $nameNum = calculateNameNumber($name, $chaldeanMap);
            $birthNum = calculateBirthNumber($dob);

            // Get relation from chart
            $relation = $compatibilityMatrix[$birthNum][$nameNum];

            echo "Full Name: $name<br>";
            echo "Date of Birth: $dob<br>";
            echo "Birth Number: $birthNum<br>";
            echo "Name Number: $nameNum<br>";
            echo "Compatibility: $relation<br>";

    }
?>
<?php
    ini_set('display_errors', 'TRUE');
    require('Config/connection.php');
    session_start();
    // echo "<pre>";
    // print_r($_SESSION);
    // die;

    if (!empty($_POST)) {
            $date = $_POST['date']; 
            $day = date("d", strtotime($date)); 
            //echo "Day is: " . $day. "<br>";  
    



    switch($day)
    {
        case 1:
            echo "Enthusiastic, natural leader, confident, independent, enjoys taking initiative.";
            break;
        case 2:
            echo "Intuitive, empathetic, cooperative, sensitive to others' feelings, values harmony.";
            break;
        case 3:
            echo "Creative, expressive, sociable, fun-loving, enjoys sharing ideas and connecting with people.";
            break;
        case 4:
            echo "Disciplined, responsible, hardworking, organized, values stability and structure.";
            break;
        case 5:
            echo "Adventurous, freedom-loving, curious, dynamic, loves exploring new opportunities.";
            break;
        case 6:
            echo "Caring, nurturing, compassionate, family-oriented, strives to help others.";
            break;
        case 7:
            echo "Analytical, introspective, thoughtful, enjoys research and deep thinking, values privacy.";
            break;
        case 8:
            echo "Ambitious, practical, goal-oriented, strong-willed, motivated to achieve success.";
            break;
        case 9:
            echo "Idealistic, imaginative, broad-minded, creative thinker, focuses on personal growth.";
            break;
        case 10:
            echo "Confident, decisive, strategic, good at leadership and managing responsibilities.";
            break;
        case 11:
            echo "Visionary, independent, innovative, likes to take risks, forward-thinking.";
            break;
        case 12:
            echo "Friendly, sociable, communicative, expressive, values friendships and social connections.";
            break;
        case 13:
            echo "Practical, reliable, methodical, disciplined, prefers stability and consistency.";
            break;
        case 14:
            echo "Energetic, adventurous, versatile, enjoys travel and new experiences, optimistic.";
            break;
        case 15:
            echo "Compassionate, supportive, empathetic, family and community-focused, peace-loving.";
            break;
        case 16:
            echo "Creative, artistic, sensitive, introspective, enjoys reflection and thoughtful pursuits.";
            break;
        case 17:
            echo "Ambitious, confident, goal-driven, enjoys leadership roles and recognition.";
            break;
        case 18:
            echo "Generous, kind, idealistic, values helping others and contributing to society.";
            break;
        case 19:
            echo "Confident, strategic, problem-solving, enjoys challenges, visionary thinker.";
            break;
        case 20:
            echo "Diplomatic, intuitive, relationship-focused, avoids conflicts, seeks harmony.";
            break;
        case 21:
            echo "Dynamic, enthusiastic, adventurous, strong-willed, enjoys excitement and variety.";
            break;
        case 22:
            echo "Organized, disciplined, responsible, long-term planner, values security and order.";
            break;
        case 23:
            echo "Creative, sociable, communicative, charming, enjoys expressing ideas and networking.";
            break;
        case 24:
            echo "Caring, empathetic, nurturing, family-oriented, strives to create harmony.";
            break;
        case 25:
            echo "Independent, ambitious, goal-oriented, confident in making decisions, pragmatic.";
            break;
        case 26:
            echo "Analytical, detail-oriented, introspective, enjoys problem-solving and learning.";
            break;
        case 27:
            echo "Charismatic, creative, social, expressive, naturally attracts attention and followers.";
            break;
        case 28:
            echo "Responsible, hardworking, reliable, disciplined, values stability and long-term planning.";
            break;
        case 29:
            echo "Sensitive, spiritual, intuitive, reflective, seeks personal growth and understanding.";
            break;
        case 30:
            echo "Optimistic, energetic, outgoing, adventurous, enjoys new challenges and experiences.";
            break;
        case 31:
            echo "Independent, creative, confident, adventurous, enjoys freedom and taking initiative.";
            break;
        default:
            echo "No information";
            break;
    }
}
?>
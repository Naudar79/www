<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drill exo</title>
</head>
<body>
    
    <?php
        /*
        // 1.1 Clean your room Exercise 
        $room_is_filthy = true;

        if( $room_is_filthy == true ){
            echo "Yuk, Room is dirty : let's clean it up !";
            cleanup_room();
            echo "<br>Room is now clean!";
            $room_is_filthy = false;
        } else {
            echo "<br>Nothing to do, room is neat.";
        }
        */
        //**************************************************************** 
       /*
        // 1.2 Clean your room Exercise, improved

        // Create the array of possible states
        $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

        // When testing, change the index value to navigate to the possible array values
        $room_filthiness = $possible_states[3]; 

        if( $room_filthiness == $possible_states[0] ){
            echo "Yuk, Room is Disgusting! Let's clean it up !";
        } else if( $room_filthiness == $possible_states[1] ){
            echo "Yuk, Room is filthy : let's clean it up !";
        } else if( $room_filthiness == $possible_states[2] ){
        echo "Yuk, Room is dirty : let's clean it up !";
        } else if( $room_filthiness == $possible_states[3] ){
            echo "Yuk, Room is clean : good job !";
        } else {
            echo "<br>Nothing to do, room is neat.";
        }
        //**************************************************************** 
        */
        // 2. "Different greetings according to time" Exercise

        $now = date("H:i"); // How to get the current time in PHP ? Google is your friend ;-)

        // Test the value of $now and display the right message according to the specifications.
        if( $now >= "05:00" && $now <= "09:00" ){
            echo "Good morning !";
        }
        else if( $now >= "09:01" && $now <= "12:00" ){
            echo "Good day !";
        }
        else if( $now >= "12:01" && $now <= "16:00" ){
            echo "Good morning !";
        }
        else if( $now >= "16:01" && $now <= "21:00" ){
            echo "Good morning !";
        } else {
            echo "Good night !";
        }
        //**************************************************************** 
    ?>
    
</body>
</html>
<?php 

 $redirectLocation = '';

    $dayOfWeek = date('l'); // A full textual representation of the day of the week
    $weekendDays = array('Saturday', 'Sunday'); // Array of weekend days
    $currentTime = (date('G').date('i'))*1; // Get current time in the form of numbers

    // If is weekend, redirect to weekend.php
    if(in_array( $dayOfWeek, $weekendDays )) {
        $redirectLocation = 'https://www.m.ac.ke';
    }

    // Else handle weekday day time (7.30 - 17.00)
    else if( $currentTime >= 0730 && $currentTime <= 1700 ) {
        $redirectLocation = 'http://d.d.co.ke/adm/public';
    }


    // Else handle weekday evening time
    else {
        $redirectLocation = 'https://www.dev.d.co.ke/adm/';
    }

    // Do the redirecting
    header("Location: ".$redirectLocation);
    exit();// <- important!

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Form With Get Variable</title>
</head>
<body>

<h2>
    <?php


    function convertMonthToNumber($month){

        if($month == 'January'){
            $val = 1;
        }else
            if($month == 'February') {
                $val = 2;
            }else
                if($month == 'March'){
                    $val = 3;
                }else
                    if($month == 'April') {
                        $val = 4;
                    }else
                        if($month == 'May') {
                            $val = 5;
                        }else
                            if($month == 'June') {
                                $val = 6;
                            }else
                                if($month == 'July') {
                                    $val = 7;
                                }else
                                    if($month == 'August'){
                                        $val = 8;
                                    }else
                                        if($month == 'September'){
                                            $val = 9;
                                        }else
                                            if($month == 'October') {
                                                $val = 10;
                                            }else
                                                if($month == 'November'){
                                                    $val = 11;
                                                }else
                                                    if($month == 'December'){
                                                        $val = 12;
                                                  }
        return $val;
    }


    function zodiac($month, $day) {

        $zodiac = "";

        if     ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) { $zodiac = "Aries"; }
        elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) { $zodiac = "Taurus"; }
        elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) { $zodiac = "Gemini"; }
        elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) { $zodiac = "Cancer"; }
        elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) { $zodiac = "Leo"; }
        elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) { $zodiac = "Virgo"; }
        elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) { $zodiac = "Libra"; }
        elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) { $zodiac = "Scorpio"; }
        elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) { $zodiac = "Sagittarius"; }
        elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) { $zodiac = "Capricorn"; }
        elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) { $zodiac = "Aquarius"; }
        elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) { $zodiac = "Pisces"; }

        return $zodiac;
    }

    echo nl2br("The Result of the PHP Form with Get Variable is: \n\n");
    if (isset($_GET['Submit'])) {
        $fName = $_GET['fName'];
        $lName = $_GET['lName'];
        echo nl2br("Your Name is: " . $fName ." ". $lName . " !\n");

        $monthName = $_GET['bMonth'];
        echo $monthName;
        $month = convertMonthToNumber($monthName);
        echo $month;
        $day = $_GET['bDay'];
        if (isset($_GET['bDay']) && $_GET['bMonth']!='') {
            $zodiac = zodiac($month, $day);
            echo  " Your zodiac is:  " . $zodiac ;
        }

    }

    ?>
</h2>
</body>
</html>

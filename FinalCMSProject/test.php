<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

    <?php

    $sTestString = 'This  is a stringwith    lots of 	odd spaces and tabs .and some newlines too lets see if this works.';

    $sPattern = '/\s*/m';
    $sReplace = '';
    $sTestString . '<br />';
    $sTestString =  preg_replace( $sPattern, $sReplace, $sTestString );
    echo $sTestString;
    ?>

</body>
</html>
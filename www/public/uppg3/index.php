<!doctype html>
<html>
<head lang="sv"></head>
<body>
<?php include('header.html');?>

<?php
     	$ans1 = $_POST['q1'];
     	$ans2 = $_POST['q2'];
        $ans3 = $_POST['q3'];
        $ans4 = $_POST['q4'];
        $ans5 = $_POST['q5'];
        $userName = $_POST['userName'];
     	$points = 0;
     	
     	if($ans1 == 9)
           $points++;
     	if($ans2 == 15)
           $points++;
        if($ans3 == 12)
           $points++;
        if($ans4 == 3)
           $points++;
        if($ans5 == 100)
           $points++;

     	
     	echo("<p>$userName fick " . $points . " av 5 möjliga</p>");
?>
</body>
</html>
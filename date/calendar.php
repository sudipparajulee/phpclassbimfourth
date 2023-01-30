<?php
$months = array(1=>"Jan",2=>"Feb",3=>"Mar",4=>"Apr",5=>"May",6=>"Jun",7=>"Jul",8=>"Aug",9=>"Sep",10=>"Oct",11=>"Nov",12=>"Dec");
$days = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
?>
<html>
    <head>
        <title>Calendar Example</title>
    </head>
    <body>
        <form action="" method="POST">
            <select name="month" id="">
                <?php
                    foreach($months as $num=>$month){
                        echo "<option value='$num'>$month</option>";
                    }
                ?>
            </select>
            <select name="year" id="">
                <?php
                    for($i=date('Y'),$maxyear = date('Y')+5;$i<=$maxyear;$i++){
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <input type="submit" name="submit" value="Show Calendar">
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    $year = $_POST['year'];
    $month = $_POST['month'];
    echo "<h4>$months[$month] , $year</h4>";
    echo "<table border='1' cellspacing='0' cellpadding='4'>";
    echo "<tr>";
    foreach($days as $day){
        echo "<th>$day</th>";
    }
    echo "</tr>";
    $start = mktime(12,00,00,$month,1,$year);
    // echo $start;
    // foreach(getdate($start) as $s=>$t){
    //     echo $s.'='.$t;
    //     echo '<br>';
    // }
    // die();
    for($count=0; $count<6*7; $count++){
        $dayArray = getdate($start);
        if($count%7 == 0){
            if($dayArray['mon'] != $month)
        {
            break;
        }
        else{
            echo "<tr>";
        }
        }


        if($count < $dayArray['wday'] || $dayArray['mon'] != $month){
        echo "<td></td>";
        }
        else
        {
            print "<td>".$dayArray['mday']."</td>";
            $start += 60*60*24;
        }
    }
    echo "</table>";
}
?>
<?php
$vote = $_REQUEST['vote'];
boolval(set_time_limit(60*60*24*7));

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$teamCap = $array[0];
$teamIronMan = $array[1];

if ($vote == 0) {
    $teamCap = $teamCap + 1;
}
if ($vote == 1) {
    $teamIronMan = $teamIronMan + 1;
}

//insert votes to txt file
$insertvote = $teamCap."||".$teamIronMan;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>
<script src="pollcookie.js"></script>
<script>
    <style>
    table; {
        border-spacing: 20px;;;
        border-radius: 25px;;;
    };;;;
    .box; {
        /*width:300px;
         height:300px;*/
        fixed;
        margin-left:-150px;;; /* half of width */
        margin-top:-2500px;;;  /* half of height */
        50 %;
        55 %;
    };;;;
    </style>

</script>
<br/><br/><br/>
<div id="transbox" align="center">
    <h2 align="center"><font size="20px" color="black">The current poll status :</font></h2>
</div>

<table align="center"  bgcolor="#08837e" class="box">
    <tr>
        <td>Team Cap:</td>
        <td>

            <img src="yes.jpg"
                 width='<?php echo(100*round($teamCap/($teamIronMan+$teamCap),2)); ?>'
                 height='20'>
            <?php echo(100*round($teamCap/($teamIronMan+$teamCap),2)); ?>%
        </td>
    </tr>
    <tr>
        <td>Team iron man:</td>
        <td>

            <img src="no.jpg"
                 width='<?php echo(100*round($teamIronMan/($teamIronMan+$teamCap),2)); ?>'
                 height='20'>
            <?php echo(100*round($teamIronMan/($teamIronMan+$teamCap),2)); ?>%
        </td>
    </tr>
</table>




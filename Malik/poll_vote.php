<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
    $yes = $yes + 1;
}
if ($vote == 1) {
    $no = $no + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<script>
    <style>
    table {
        border-spacing: 20px;
        border-radius: 25px;
    }
    .box {
        /*width:300px;
         height:300px;*/
        position:fixed;
        margin-left:-150px; /* half of width */
        margin-top:-2500px;  /* half of height */
        top:50%;
        left:55%;
    }
    </style>
</script>
<br/><br/><br/>
<h2 align="center"><font size="20px" color="#afafaf">The current poll status :</font></h2>
<table align="center"  bgcolor="#08837e" class="box">
    <tr>
        <td>Yes:</td>
        <td>

            <img src="yes.jpg"
                 width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
                 height='20'>
            <?php echo(100*round($yes/($no+$yes),2)); ?>%
        </td>
    </tr>
    <tr>
        <td>No:</td>
        <td>

            <img src="no.jpg"
                 width='<?php echo(100*round($no/($no+$yes),2)); ?>'
                 height='20'>
            <?php echo(100*round($no/($no+$yes),2)); ?>%
        </td>
    </tr>
</table>

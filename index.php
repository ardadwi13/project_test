<html>
    <title>Projek Test</title>
    <link rel="stylesheet" href="style.css">
    <body>
    <?php
error_reporting(0);
?>
<!-- input1 -->

<?php
$string1 = $_POST['text'];
$newString1 = '';
$length = strlen($string1);
for ($i=0 ; $i<$length ; $i++) {
    if (isset($_POST['submit'])&&($string1[$i] >= 'A' && $string1[$i] <= 'Z')) {
        $newString1 .= strtolower($string1[$i]);
    } else if (isset($_POST['submit'])&&($string1[$i] >= 'a' && $string1[$i] <= 'z')) {
        $newString1 .= strtoupper($string1[$i]);
    } else {
        $newString1 .= $string1[$i];
    }
}
?>
<!-- input2 -->
<?php 
$string2 = $_POST['text'];
if(isset($_POST['submit'])){
$trans = array("a"=> "","e"=>"","i"=>"","o"=>"","u"=>"","A"=> "",
                "E"=>"","I"=>"","O"=>"","U"=>"");
}
?>

<div class="form-action">
<form action="index.php" method="post">
    <h2>Input </h2>
<input type="text" name="text" class="input" value=""/>
<!-- <input type="submit" name="submit" value="submit"> -->
</br>
<p class="output"><?php echo"<b>Output : </b>".$newString1; ?></p>
</br>
<p class="output"><?php echo"<b>Output : </b> ".strtr($string2,$trans);?></p>
</br>
<input type="submit" name="submit" class="submit" value="submit">
</form>
</div>
</body>


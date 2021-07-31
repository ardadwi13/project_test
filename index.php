<html>
<title>Projek Test</title>
<link rel="stylesheet" href="style.css">
<body>
<?php error_reporting(0);?>
<!-- input1 -->
<?php 
$myText = $_POST['text'];
function LowerCaseUpperCase($myText){
    $split = str_split($myText);
    foreach($split as $s){
       if(isset($_POST['submit'])&&($s >= 'A' && $s <= 'Z' )){
            echo strtolower($s);
       }elseif(isset($_POST['submit'])&&($s >= 'a' && $s <= 'z')){
        echo strtoupper($s); 
       }else{
           echo $s;
        }
     }
}
ob_start();
LowerCaseUpperCase($myText);
$output = ob_get_clean();
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
</br>
<p class="output"><?php echo"<b>Output : </b>".$output; ?></p>
</br>
<p class="output"><?php echo"<b>Output : </b> ".strtr($string2,$trans);?></p>
</br>
<input type="submit" name="submit" class="submit" value="submit">
</form>
</div>
</body>
</html>


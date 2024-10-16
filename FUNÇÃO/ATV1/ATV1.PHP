
<?php
    $temp = $_POST['temp'];
    if(isset($_POST['btn']))
    FtoC($temp);
    {
function FtoC ($temp){
return ($temp-32)*5/9;
}
echo "A temperatura é: ".FtoC($temp);
}   
?>


<?php

    $dolla = $_POST['dola'];
    if(isset($_POST['dola']))
    DtoR($dolla);
    {
function DtoR ($dolla){
return ($dolla*5.66 );
}
echo "$dolla Dolares".DtoR($dolla), " Reais";
}   
?>
    

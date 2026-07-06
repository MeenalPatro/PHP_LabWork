<?php
    //outer loop  
for($i=1;$i<=3;$i++){

}
        //inner loop  
for ($j=1;$j<=3;$j++){
if(!($i==$j)){
    continue;//skip when i and j does not have same values  
}
echo $i.$j;
echo "</br>";
}
?>

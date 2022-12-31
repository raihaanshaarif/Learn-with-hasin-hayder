<?php 
//delimeter
//implode(),explode(),join(),preg_split()

$vegetables="brinjal, bolsam, cucumber, pumkin, betal";
$strToarr=explode(", ",$vegetables); // String theke Array
// $arrTostr=join(", ",$vegetables); // Array theke string

for($i=0;$i<count($strToarr);$i++){
    echo $strToarr[$i].PHP_EOL;
}
echo "======================\n";

$arr=["This","is","nazrul","rafi"];
$arrToStr=join(" ",$arr);
echo $arrToStr.PHP_EOL;

echo "======================\n";
//multiple delimeter
$vegetables="brinjal, bolsam, cucumber, pumkin, betal,onionn,ginger,cardamon,cinnamon,cumin";
$strToarr=preg_split("/, |,/",$vegetables);
foreach($strToarr as $key => $val){
    echo $key."==>".$val.PHP_EOL;
}

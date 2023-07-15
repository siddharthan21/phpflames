<?php 
function sendtobody($aa,$ba){
    
    $a=str_split(strtolower($aa));
    $b=str_split(strtolower($ba));
  
    for($i=0;$i<strlen($aa);$i++){
        for($j=0;$j<strlen($ba);$j++){
            if($aa[$i]==$ba[$j]){
                $aa[$i]=$ba[$j]="#";
            }
        }
    }
    $combine=$aa.$ba;
for($i=0;$i<strlen($aa);$i++){
    if($combine[$i]=="#"){
        $combine =preg_replace('/#/', '', $combine);
    }
}
    $count=strlen($combine);
    $flame='flames';
    while(strlen($flame)!=2){
        $dif=$count%strlen($flame);
        if($dif==0){
            $dif=strlen($flame)-1;
        }
        else{
            $dif--;
        }
        $flame[$dif]="#";
        list($f1, $f2)=preg_split("/#/",$flame);
        $flame=$f2.$f1;
    }
    $n=strlen($flame);
        if($n%2==0){
            $res =substr($flame, 1);
        }
        else{
            $res=substr($flame, 0);
        }
    return $res;
    
    }
  
?><?php
?>
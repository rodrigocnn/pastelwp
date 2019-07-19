<?php 


function format_date($data){
    $y = substr($data, 0, 4);
    $m = substr($data, 4, 2);
    $d = substr($data, 6, 2);

   return $data_formatada = $d.'/'.$m.'/'.$y;
}



?>
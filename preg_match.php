<?php
// ~[^\.]*~  --вырезает и забирает до точки

preg_match('~[^\.]*~','vbvbivb.ughfg',$m);

print_r($m);

/*
$otv = "5hghgngn.jpg";
$otv = substr($otv, 0, strpos($otv, "."));
echo $otv;
*/


/*
echo $row_start="namr_fiаlr._jpg";
echo "<br>";
$str=strpos($row_start, ".");
echo $row=substr($row_start, 0, $str);// все до символа
     $width_str =strlen($row);
echo "<br>";
echo $rest = substr($row_start, $width_str); // все после символа вместе с точкой
*/
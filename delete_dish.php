<?php
$id_point = 2;
$id_dish = 13;

//echo $path_to_delete = 'ready/'.$id_point.'/'.$id_dish;
echo "<br>";
echo $path_to_dir_where_delete='ready/'.$id_point.'/dish';
echo "<br>";
$files = scandir($path_to_dir_where_delete,1);
array_pop ($files);
array_pop ($files);

print_r($files);
echo "<br>";

for ($i=0; $i< count($files); $i++ ){

     preg_match('~[^\.]*~',$files[$i],$m);
    if ($m[0] == $id_dish) {
        echo " совпадение".$m[0];
        echo "<br>";
      echo  $path_to_delete = $path_to_dir_where_delete.'/'.$files[$i];


        $del = unlink("$path_to_delete");
      if  ($del) {echo "файл $files[$i] удален";}
        break;
    }
      echo " файла с таким именем тут нет";
}
<?php
$act = $_POST;

$id_point = 5;
$id_dish = 2;

function saveImgForPoint($id, $path)
{
    $name = 'ready/'.$id;
    if (!file_exists($name)) {  mkdir($name, 0777);}


    //определяет расширение файла и забирает вместе с точкой

      $row_start=$path;

    $str=strpos($row_start, ".");
     $row=substr($row_start, 0, $str);
    $width_str =strlen($row);

    $rest = substr($row_start, $width_str);
 //

   echo $new_file = $name . "/main".$rest;   // теперь с первоначальными расширениями

    rename($path, $new_file);
}

function saveImgForDish($id_point, $id_dish, $path)
{
    $name = 'ready/' . $id_point . '/dish';
    mkdir($name, 0777);
    $new_file = $name . "/" . $id_dish . ".jpeg";
    rename($path, $new_file);
}

function deleteImgForDish($id_point, $id_dish){

     $path_to_dir_where_delete='ready/'.$id_point.'/dish';

    $files = scandir($path_to_dir_where_delete,1);
    array_pop ($files);
    array_pop ($files);


    for ($i=0; $i< count($files); $i++ ){

        preg_match('~[^\.]*~',$files[$i],$m);
        if ($m[0] == $id_dish) {

             $path_to_delete = $path_to_dir_where_delete.'/'.$files[$i];

            $del = unlink("$path_to_delete");
            if  ($del) {echo "файл $files[$i] удален";}
            break;
        }
        echo " файла с таким именем тут нет";
    }
}


function deleteImgForPoint($id_point){
    $dir = "ready/.$id_point";
        if ($objs = glob($dir."/*")) {
            foreach($objs as $obj) {

                is_dir($obj) ? removeDirectory($obj) : unlink($obj);

            }
        }
        rmdir($dir);

}


saveImgForPoint($id_point, $act['path_img']);

if (empty($json)) {
    $json = 'запрос не отбработан';
}
echo $json;
<?php
/*
* 接收文件的服&#21153;器中的PHP
*/

//接收到的文件名
$filename=$_FILES['userfile']['name'];
	
//把接收到的文件&#22797;制到指定保存的路径中
copy($_FILES['userfile']['tmp_name'],"/input/".$filename);

	
?>
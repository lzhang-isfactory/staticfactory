<?php
/*
* Ú¾¶I&#21153;íIPHP
*/

//Ú¾I¶¼
$filename=$_FILES['userfile']['name'];
	
//cÚ¾I¶&#22797;§wèÛ¶IHa
copy($_FILES['userfile']['tmp_name'],"/input/".$filename);

	
?>
<?php
/*
* �ڝ������I��&#21153;�풆�IPHP
*/

//�ڝ����I������
$filename=$_FILES['userfile']['name'];
	
//�c�ڝ����I����&#22797;�����w��ۑ��I�H�a��
copy($_FILES['userfile']['tmp_name'],"/input/".$filename);

	
?>
<?php	
/*
* ����&#21457;���[
*/


//��&#20041;�ڝ��[�IURL
 $url="http://......";
 
//�擾��&#20256;�����I�H�a�a������
 $filepath=$_FILES['files']['tmp_name'];
 $filename=$_FILES['files']['name'];
//�擾��&#20256;�����I���e
 $file=file_get_contents($filepath);
 
//boundary��&#20041;
 $boundary = '--------------------------'.microtime(true);
 
//header�쐬
�@$headers=[
�@	     'Content-Type: multipart/form-data; boundary='.$boundary
	     ];

//�������a�������e�I�쐬
  $content='--'.$boundary."\r\n".
	     	      'Content-Disposition: form-data; name="userfile"; filename="'. $filename . '"' . "\r\n" .
	     	      'Content-Type: text/plain'."\r\n\r\n".
	     	       $file ."\r\n".
	     	       '--'.$boundary.'--'."\r\n";

//���M�����쐬
    $opts['http'] =[
	     	 'method' => 'POST',
             'header' => implode("\r\n", $headers),
             'content' => $content,
	     	 ];
	     $context=stream_context_create($opts);
	     
//&#21457;��
�@�@$contents=file_get_contents($url,false,$context);
?>
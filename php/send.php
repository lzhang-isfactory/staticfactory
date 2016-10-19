<?php	
/*
* 文件&#21457;送端
*/


//定&#20041;接收端的URL
 $url="http://......";
 
//取得上&#20256;文件的路径和文件名
 $filepath=$_FILES['files']['tmp_name'];
 $filename=$_FILES['files']['name'];
//取得上&#20256;文件的内容
 $file=file_get_contents($filepath);
 
//boundary定&#20041;
 $boundary = '--------------------------'.microtime(true);
 
//header作成
　$headers=[
　	     'Content-Type: multipart/form-data; boundary='.$boundary
	     ];

//文件名和文件内容的作成
  $content='--'.$boundary."\r\n".
	     	      'Content-Disposition: form-data; name="userfile"; filename="'. $filename . '"' . "\r\n" .
	     	      'Content-Type: text/plain'."\r\n\r\n".
	     	       $file ."\r\n".
	     	       '--'.$boundary.'--'."\r\n";

//送信数据作成
    $opts['http'] =[
	     	 'method' => 'POST',
             'header' => implode("\r\n", $headers),
             'content' => $content,
	     	 ];
	     $context=stream_context_create($opts);
	     
//&#21457;送
　　$contents=file_get_contents($url,false,$context);
?>
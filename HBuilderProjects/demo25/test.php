<?php
	header('Content-Type:text/html;charset=UTF-8');
	echo '<h1>hello word</h1>';
	$name = '定义变量';
	$arr = array('1','2','3','4');
//	获取json
	$json = file_get_content('../json/news.json');
////	然后把json对象转成json字符串
//	$json = json_incode($json);
//	json字符串转换成json对象
	$json = json_decode($json);
	for($i=0;$i<count($arr);$i++){
		print '现在是第'+$i+'个';
	}
?>
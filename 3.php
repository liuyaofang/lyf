<?php
	//php的数组的重要函数
	//count函数：计算数组中共有多少个元素
	$a=array(1,2,3);
	$r=count($a);
	echo $r;
	echo "<br/>";
	//对字符串进行分割
	$str="北京 天津 我";
	print_r($str) ;
	echo "<br/>";
	$arr=explode(" ", $str);
	print_r($arr) ;
	//foreach遍历
	echo "<br/>";
	$arr=array(1,90,'hello');
	foreach ($arr as $key=> $val){
		echo $key."=>".$val.'<br/>';
	}
	//unset 删除 
?>
<?php
	$hens[0]=3;	
	$hens[1]=5;
	$hens[2]=1;
	
	$allweight=0;
	//遍历整个数组
	echo "共有".count($hens)."只鸡"."<br/>";
	for ($i=0;$i<count($hens);$i++){
		echo "第".$i."只鸡体重=".$hens[$i]."<br/>";
		$allweight+=$hens[$i];
	}
	echo '<br/>总体重是'.$allweight."平均体重是".$allweight/count($hens);
	echo "<br/>";
	//foreach遍历
	$arr=array(1,90,'hello');
	foreach ($arr as $key=> $val){
		echo $key."=".$val.'<br/>';
	}
	echo "<br/>";
	$arr=array(1,2,'hello');
	print_r($arr);
	echo "<br/>";
	//数组的动态增加
	$a=array(2,3);
	$a[2]=4;
	echo $a[2];

	?>
<?php
	//php���������Ҫ����
	//count���������������й��ж��ٸ�Ԫ��
	$a=array(1,2,3);
	$r=count($a);
	echo $r;
	echo "<br/>";
	//���ַ������зָ�
	$str="���� ��� ��";
	print_r($str) ;
	echo "<br/>";
	$arr=explode(" ", $str);
	print_r($arr) ;
	//foreach����
	echo "<br/>";
	$arr=array(1,90,'hello');
	foreach ($arr as $key=> $val){
		echo $key."=>".$val.'<br/>';
	}
	//unset ɾ�� 
?>
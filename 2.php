<?php
	$hens[0]=3;	
	$hens[1]=5;
	$hens[2]=1;
	
	$allweight=0;
	//������������
	echo "����".count($hens)."ֻ��"."<br/>";
	for ($i=0;$i<count($hens);$i++){
		echo "��".$i."ֻ������=".$hens[$i]."<br/>";
		$allweight+=$hens[$i];
	}
	echo '<br/>��������'.$allweight."ƽ��������".$allweight/count($hens);
	echo "<br/>";
	//foreach����
	$arr=array(1,90,'hello');
	foreach ($arr as $key=> $val){
		echo $key."=".$val.'<br/>';
	}
	echo "<br/>";
	$arr=array(1,2,'hello');
	print_r($arr);
	echo "<br/>";
	//����Ķ�̬����
	$a=array(2,3);
	$a[2]=4;
	echo $a[2];

	?>
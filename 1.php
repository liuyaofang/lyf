<?php
	echo "hello world";
	//дһ����HTML����
	?>
	<h1>hello</h1>
	<?php 
	echo '<br/>';
	//�������ڲ��ı�������ִ��
	//˫���Ż�ִ��
	$name = 'hello';
	echo "the $name";
	//����� the hello
	echo '<br/>';
	$name = 'hello';
	echo 'the $name';
	echo '<br/>';
	$a=30;
	$A=40;
	echo "a=".$a;
	echo 'A='.$A;
	echo '<br/>';
	$b;
	echo $b;
	echo '<br/>';
	$c=7/3;
	echo '���='.$c;
	echo '<br/>';
	//����
	$a=30;
	$b=5;
	if ($a%$b==0){
		echo '������';
	}else {
		echo '��������';
	}
	//�Ƚϴ�С
	echo '<br/>';
	$a=2;
	$b=8;
	if ($a>$b){
		echo '$a>$b';
		}elseif ($a==$b){
			echo '$a==$b';
		}elseif ($a<$b) {
			echo '$a<$b';
		}
	echo '<br/>';
	$a=13;
	$b=3;
	$c=$a>$b?1:0;
	$d=$a<$b?2:3;
	echo "$c";
	echo $d;
	//switch��֧
	echo '<br/>';
	$mychar="a";
	switch ($mychar) {
		case "a":
			echo '����һ';
		break;
		case "b":
			echo '���ڶ�';
		break;
		default:
			echo "û��ƥ�������";
		break;
	}
	//forѭ��
	for ($i=0;$i<3;$i++){
		echo "<br/>haha";
	}
	//whileѭ��
	$i=0;//ѭ�����Ʊ���
	while ($i<3){
		echo '<br/>hehe';
		$i++;
	}
	//do..whileѭ��
	$i=0;
	do {
		echo '<br/>heihei';
		$i=$i+1;
	}while ($i<3);
	//���峣��
	echo '<br/>';
	define("lyf",'����');
	echo lyf;
	
?>
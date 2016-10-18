<?php
	echo "hello world";
	//写一部分HTML代码
	?>
	<h1>hello</h1>
	<?php 
	echo '<br/>';
	//单引号内部的变量不会执行
	//双引号会执行
	$name = 'hello';
	echo "the $name";
	//会输出 the hello
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
	echo '结果='.$c;
	echo '<br/>';
	//整除
	$a=30;
	$b=5;
	if ($a%$b==0){
		echo '能整除';
	}else {
		echo '不能整除';
	}
	//比较大小
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
	//switch分支
	echo '<br/>';
	$mychar="a";
	switch ($mychar) {
		case "a":
			echo '星期一';
		break;
		case "b":
			echo '星期二';
		break;
		default:
			echo "没有匹配的日期";
		break;
	}
	//for循环
	for ($i=0;$i<3;$i++){
		echo "<br/>haha";
	}
	//while循环
	$i=0;//循环控制变量
	while ($i<3){
		echo '<br/>hehe';
		$i++;
	}
	//do..while循环
	$i=0;
	do {
		echo '<br/>heihei';
		$i=$i+1;
	}while ($i<3);
	//定义常量
	echo '<br/>';
	define("lyf",'好人');
	echo lyf;
	
?>
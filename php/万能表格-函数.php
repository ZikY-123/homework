<?php
function table($arr) {
    $sex=array('女','男');
	foreach ($arr as $key => $value) {
	    echo '<tr align=center>';
	    $arr=array_keys($value);
        global $len;
	    for ($i=0; $i <$len; $i++) {
		    if ($arr[$i]=='sex'){
                echo '<td>'.$sex[$value[$arr[$i]]].'</td>';
		    } else {
		        echo '<td>'.$value[$arr[$i]].'</td>';
	        }
        }
    }
    echo '</tr>';
}
function arry1 () {
    $arr=array(
        array('banji'=>01,'waihao'=>'张三','qianshu'=>10,'sex'=>0, 'defen'=>60),
        array('banji'=>02,'waihao'=>'李四','qianshu'=>20,'sex'=>1, 'defen'=>71),
        array('banji'=>03,'waihao'=>'王五','qianshu'=>30,'sex'=>0, 'defen'=>55),
        array('banji'=>04,'waihao'=>'赵六','qianshu'=>40,'sex'=>1, 'defen'=>96),
        array('banji'=>05,'waihao'=>'马七','qianshu'=>50,'sex'=>0, 'defen'=>86),
        array('banji'=>06,'waihao'=>'羊八','qianshu'=>60,'sex'=>1, 'defen'=>66),
    );
    return $arr;
}
function arry2 () {
    $arr=array(
		array('id'=>1,'name'=>'张三','age'=>31,'sex'=>0,'score'=>40),
		array('id'=>2,'name'=>'李四','age'=>26,'sex'=>1,'score'=>40),
		array('id'=>3,'name'=>'王五','age'=>24,'sex'=>0,'score'=>40),
		array('id'=>4,'name'=>'赵六','age'=>40,'sex'=>1,'score'=>40),
		array('id'=>5,'name'=>'马七','age'=>30,'sex'=>0,'score'=>40),
		array('id'=>6,'name'=>'羊八','age'=>18,'sex'=>1,'score'=>40),
		array('id'=>7,'name'=>'天山童姥','age'=>38,'sex'=>0,'score'=>40),
		array('id'=>8,'name'=>'玄冥二老','age'=>73,'sex'=>1,'score'=>40),
		array('id'=>9,'name'=>'张无忌','age'=>20,'sex'=>0,'score'=>40),
		array('id'=>10,'name'=>'慕容婉儿','age'=>16,'sex'=>1,'score'=>40),
		array('id'=>11,'name'=>'郭靖','age'=>44,'sex'=>0,'score'=>40),
		array('id'=>12,'name'=>'黄蓉','age'=>36,'sex'=>1,'score'=>40),
		array('id'=>13,'name'=>'王晓晓','age'=>24,'sex'=>0,'score'=>40),
	);
    return $arr;
}
?>
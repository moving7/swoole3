<?php 

require('TrieTree.php');

	  //干扰因子集合
    $disturbList = ['&', '*','#'];

    //敏感词汇集合
    $data = ['19','大'];
    
    //实例化类
    $wordObj = new TrieTree($disturbList);

    //添加敏感词汇
    $wordObj->addWords($data);

    // //要检测的文字
    $txt = "要召开19大了";

    // //查找对应敏感词
    $words = $wordObj->search($txt);
    // print_r($words);
    
    //替换过后的文字显示
    $txt = $wordObj->filtesr($txt);
    echo $txt, "\n";


 ?>
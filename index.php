<?php
  //コメント

  /* コメント
  */

  // echo(123);
  // echo('<br>');
  // echo('hello');
  // echo('<br>');  
  // echo("hello");
  // echo('<br>');
  // echo('hell""o');
  // echo('<br>');
  // echo('test');
  // echo('<br>');

  // 変数
  // $test = 123;
  // $test = 'テストです';


  // var_dump($test);
  // echo $test;

  // $test_1 = 123;
	// $test_2 = 456;
	
	// $test_3 = $test_1.$test_2;
	// var_dump($test_3);

  // const MAX = 10;
  // echo MAX;

  // $array_1 = ['あああ', 1, 2, 3];

  // $array_2 = [
  //   ['A', 'B', 'C'],
  //   ['D', 'E', 'F']
  // ];

  // echo '<pre>';
  // var_dump($array);
  // echo '<pre>';
  // echo $array_2[1][1];

  // $array_member = [
  //   'name' => '伊藤',
  //   'height' => 180,
  //   'hobby' => 'サッカー'
  // ];

  // echo $array_member['hobby'];

  // echo '<pre>';
  // var_dump($array_member);
  // echo '<pre>';

  // $array_member = [
  //   '本田' => [
  //     'height' => 188,
  //     'hobby' => 'バスケ'
  //   ], 
  //   '香川' => [
  //     'height' => 170,
  //     'hobby' => '野球'
  //   ]
  // ];

  // echo $array_member['香川']['height'];

  // $array_member = [
  //   'class_1' => [
  //     '本田' => [
  //       'height' => 188,
  //       'hobby' => 'バスケ'
  //     ], 
  //     '香川' => [
  //       'height' => 170,
  //       'hobby' => '野球'
  //     ]
  //   ],
  //   'class_2' => [
  //     '永田' => [
  //       'height' => 181,
  //       'hobby' => 'サッカー'
  //     ], 
  //     '伊藤' => [
  //       'height' => 176,
  //       'hobby' => '野球'
  //     ]
  //   ]
  // ];

  // echo $array_member['class_1']['香川']['hobby'];

  // echo '<pre>';
  // var_dump($array_member);
  // echo '<pre>';

  // $test_1 = 2;
  // $test_2 = 3;
  // $test_3 = $test_1 % $test_2;

  // echo $test_3;

  // $height = '180';
  
  // if ($height === 180){
  //   echo '身長' . $height . 'cmです。';
  // } else{
  //   echo '型が一致しません'; 
  // }

  // $test_1 = '';

  // if(empty($test_1)){
  //   echo '変数は空です';
  // }

  // $test_2 = 1;

  // if(!empty($test_2)){
  //   echo '変数は' . $test . 'です';
  // }

  // $math = 80;
  // $comment = ($math >= 80)? 'good' : 'not good';
  // echo $comment;

  // $members = [
  //   'name' => '平田',
  //   'height' => '162',
  //   'hobby' => 'キャンプ'
  // ];

  // $members = [
  //   '本田' => [
  //     'height' => 180,
  //     'hobby' => 'サッカー'
  //   ], 
  //   '香川' => [
  //     'height' => 189,
  //     'hobby' => 'サッカー'
  //   ]
  //   ];

  // foreach($members as $member){
  //   foreach($member as $key => $value){
  //     echo $key . 'は' . $value . 'です';
  //     echo '<br>';
  //   };
  // };

  // foreach($members as $key => $value){
  //   echo $key . 'は' . $value . 'です';
  //   echo '<br>';
  // };

  // for($i = 0; $i < 10; $i++){
  //   if($i === 5){
  //     break;
  //   }
  //   echo $i;
  // };

  // echo '<br>';

  // for($i = 0; $i < 10; $i++){
  //   if($i === 5){
  //     continue;
  //   }
  //   echo $i;
  // };

  // echo '<br>';

  // $j = 0;
  // while($j < 5){
  //   echo $j;
  //   $j++;
  // };

  $date = '1';
  switch($date){
    case $date === 1:
      echo '1です';
      break;
    case 2:
      echo '2です';
      break;
    default:
      echo 'その他';
  }





?>
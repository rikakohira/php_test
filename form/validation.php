<?php

function validation($request) 
{
  $errors = [];

  if(empty($request['name']) || 20 < mb_strlen($request['name'])){
    $errors[] = '氏名は必須です。20文字以内で入力してください。';
  }

  if(){
    
  }


  if(!isset($request['gender'])){
    $errors[] = '性別は必須です。';
  }

  if(empty($request['age']) || 6 < ($request['age'])){
    $errors[] = '年齢は必須です。';
  }

  if(empty($request['contact']) || 200 < mb_strlen($request['contact'])){
    $errors[] = 'お問合せない内容は必須です。200文字以内で入力してください。';
  }

  if(empty($request['caution'])){
    $errors[] = '注意事項をご確認ください。'
  }



  return $errors;
}
?>
<?php

class Product {
  // アクセス修飾子
  
  
  // 変数
  private $product = [];

  // 関数
  function __construct($product) {
    $this->product = $product;
  }

  public function getProduct(){
    echo $this->product;
  }

  public function addProduct($item)
  {
    $this->product = $item;
  }

  public static function getStaticProduct($str)
  {
    echo $str;
  }
}

  $instance = new Product('テスト');

  $instance->getProduct();

  $instance->addProduct('追加分');

  $instance->getProduct();

  // クラス名::関数名
  Product::getStaticProduct('静的');



  

<?php

// 親クラス
class BaseProduct {
  public function parentsProduct(){
    echo '親クラスです';
  }

  // オーバーライド
  public function getProduct() {
    echo '親クラスの関数です';
  }
}

// 子クラス
class Product extends BaseProduct {
  // アクセス修飾子
  
  
  // 変数
  private $product = [];

  // 関数
  function __construct($product) {
    $this->product = $product;
  }

  // public function getProduct() {
  //   echo $this->product;
  // }

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

  $instance->parentsProduct();

  // クラス名::関数名
  Product::getStaticProduct('静的');




  

<?php

namespace App\Services;

class CategoryListServices
{
  public static function CategoryList()
  {
    $categoryList = array(
        'tops' => 'トップス',
        'jacket' => 'ジャケット',
        'vest' => 'ベスト',
        'hat' => '帽子',
        'pants' => 'パンツ',
        'necktie' => 'ネクタイ',
        'gloves' => 'グローブ',
        'under_wear' => '下着',
        'socks' => 'ソックス',
        'shoes' => 'シューズ',
        'bag' => 'バッグ',
        'watch' => '時計',
        'accessory' => 'アクセサリー',
        'item' => 'アイテム',
        'swim_wear' => '水泳着',
        'goggles' => 'ゴーグル',
        'swim_cap' => '水泳帽',
        'other' => 'その他',
        'racket' => 'ラケット',
        'bat' => 'バット',
        'ball' => 'ボール',
        'spike' => 'スパイク',
    );
    return $categoryList;
    
  }
}

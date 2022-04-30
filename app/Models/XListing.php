<?php

namespace App\Models;

class Listing
{
  public static function all()
  {
    return [
      [
        'id' => '1',
        'title' => 'Judil ke satu',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate delectus laudantium aliquid atque eaque soluta deserunt quaerat illo dolorum? Magnam in ipsa natus quisquam nemo nihil incidunt fuga laborum autem.'
      ],
      [
        'id' => '2',
        'title' => 'Judil ke dua',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate delectus laudantium aliquid atque eaque soluta deserunt quaerat illo dolorum? Magnam in ipsa natus quisquam nemo nihil incidunt fuga laborum autem.'
      ],
    ];
  }

  public static function find($id)
  {
    $listings = self::all();
    foreach ($listings as $listing) {
      if ($listing['id'] == $id) {
        return $listing;
      }
    }
  }
}
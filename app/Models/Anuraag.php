<?php

namespace App\Models;

class Anuraag {
    // to return all companies
    public static function all() {
        return [
            [
                'id'=> 1,
                'title'=> 'Anuraag 1',
                'description' => 'Anuraag 1 Description'
            ],
            [
                'id'=> 2,
                'title'=> 'Anuraag 2',
                'description' => 'Anuraag 2 Description'
            ]

        ];
    }

    public static function find($id) {
         $anuraags = self::all();

         foreach($anuraags as $anuraag) {
            if($anuraag['id'] == $id) {
                return $anuraag;
            }
         }
    }
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Person extends Entity {

    protected $_accessible = [ //送られたフォームのデータをまとめてエンティティにしたいときに、一括代入できるかどうかを項目毎に設定する。
        'name' => true,
        'mail' => true,
        'age' => true
    ];
}
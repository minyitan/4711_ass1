<?php
namespace App\Models;
use App\Models\Simple\XMLModel;
/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Singer extends XMLModel{
/*
    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => '杨千嬅',
            'city' => 'HongKong China.',
            'image' => 'yang.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => '陈奕迅',
            'city' => 'HongKong China.',
            'image' => 'cheng.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => '张学友',
            'city' => 'HongKong China.',
            'image' => 'zhang.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => '刘德华',
             'city' => 'HongKong China.',
            'image' => 'liu.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => '梅艳芳',
            'city' => 'HongKong China.',
            'image' => 'mei.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }
 * */

    protected $origin = WRITEPATH .'data/SingerData.xml';
    protected $keyField = 'id';
    protected $validationRules = [];


}

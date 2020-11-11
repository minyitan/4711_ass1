<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;


/**
 * Description of Places
 *
 * @author Admin
 */
class Places extends \CodeIgniter\Controller{
    //put your code here
    public function index() {
        //connect to the model
        $places = new \App\Models\Places();
        //retrieve all the records
        $records = $places->findAll();
        //JSON encode and return the result
        return json_encode($records);
    }
}

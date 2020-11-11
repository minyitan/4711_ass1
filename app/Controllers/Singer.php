<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Controllers;

class Singer  extends BaseController{
    //put your code here
    public function  index() {
        // connect to the model
       $singers = new \App\Models\Singer();
        // retrieve all the records
       $records = $singers->findAll();
       
       $parser= \Config\Services::parser();
      // return $parser ->setData(['records' => $records])
             //  ->render('singerlist');
       
       $table = new \CodeIgniter\View\Table();
       
       $headings = $singers->fields;
       $displayHeadings = array_slice($headings, 1, 2);
       $table->setHeading(array_map('ucfirst', $displayHeadings));
       foreach ($records as $record) {
        $nameLink = anchor("singer/showme/$record->id",$record->name);
       
        $table->addRow($nameLink,$record->city,$record->image);
       }
      
        $template = [
        'table_open' => '<table cellpadding="5px">',
        'cell_start' => '<td style="border: 1px solid #dddddd;">',
        'row_alt_start' => '<tr style="background-color:#dddddd">',
        ];
        $table->setTemplate($template);
        
        $fields = [
            'title' => 'singer Destinations',
             'heading' => 'singer Destinations',
             'footer' => 'Copyright Tanminyi'
         ];
        
        return $parser->setData($fields)
                      ->render('templates\top') .
               $table->generate() .
               $parser->setData($fields)
                      ->render('templates\bottom');



    }
    public function showme($id){
    
        //connect to the model
        $singers= new \App\Models\Singer();
        //retrieve all the records
        $record=$singers->find($id);
        //get a template parser
        $parser= \Config\Services::parser();
        //tell it about the substitions
       // return $parser->setData($record)
                //and have it render the template with those
               // ->render('onesinger');
        
         $fields = [
            'title' => 'Singer Destinations',
             'heading' => 'Singer Destinations',
             'footer' => 'Copyright Tanminyi'
         ];
       return $parser->setData($fields)
                      ->render('templates\top') .
               $parser->setData($record)
                //and have it render the template with those
                     ->render('onesinger')  .
               $parser->setData($fields)
                      ->render('templates\bottom');
    }
}



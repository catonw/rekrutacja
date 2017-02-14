<?php

namespace frontend\models;

use Yii;
use yii\base\Model;


class GeneratorForm extends Model
{
    public $message;
    public $contracts;
    public $reply;
    public $firstname;
    public $titlebutton;
    public $generator;
    
    public function rules()
    {
       return [

            [['message','contracts','reply'], 'required'],

        ];
    }

}  
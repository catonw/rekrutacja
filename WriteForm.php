<?php

namespace frontend\models;

use yii\base\Model;
use common\models\User;

class WriteForm extends Model {
 
    public $firstname;
    public $lastname;
    public $name;
    public $numberhoues;
    public $firstnames;
    public $lastnames;
    public $names;
    public $numberhouses;
    public $postalcodes;
    public $pesels;
    public $nips;
    public $places;
    public $streets;
    public $series;
    public $idnumber;
//-------------------------    

    public $concludedon;
    public $place;
    public $companyname;
    public $legalform;
    public $street;
    public $postalcode;
    public $thenumberoffaculty;
    public $registrycourt;
    public $krs;
    public $nip;
    public $capital;
    public $function;
    public $issuingauthority;
    public $pesel;
    public $descriptionofactivities;
    public $options1; //doprecyzowanie od 1 do 4
    public $options2;
    public $options3;
    public $options4;
    public $companyoptions1;
    public $companyoptions2;
    public $companyoptions3;
    public $companyoptions4;
    public $theamountnumerically;
    public $amountinwords;
    public $accountnumber;
    public $yes;
    public $no;
    public $action;

    public function rules() {
        return [
            [['concludedon', 'firstname', 'lastname', 'name', 'place', 'companyname', 'legalform', 'street',
            'postalcode', 'thenumberoffaculty', 'registrycourt', 'krs', 'nip', 'capital', 'function', 'issuingauthority',
            'pesel', 'descriptionofactivities', 'options1', 'options2', 'options3', 'options4', 'companyoptions1', 'companyoptions2',
            'companyoptions2', 'companyoptions3', 'companyoptions4', 'theamountnumerically', 'amountinwords', 'accountnumber'], 'required'],
        ];
    }

}
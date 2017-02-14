<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\helpers\BaseFileHelper;

use frontend\models\GeneratorForm;
use yii\db\ActiveQuery;
use common\models\Generator;

class MyController extends Controller {
    public function actionIndex(){
                
                $noweDanes  = Yii::$app->request->get();
                $noweDane = explode(',', $noweDanes['param']);
                $noweDane1 = explode(',', $noweDanes['param2']);

                $nowa =  '<body marginwidth="100" marginheight="100" size="7" face="Arial"><i>';   
                $nowa .='<br/><br/>';
                $nowa .=  '<i>';
                $nowa .=  '<center><b>'.$noweDane[0].'</b></center>';
                $sp = explode(":", $noweDane[2]);
                $sp1 = explode(' ', $noweDane[5]);
                $sp2 = explode(' ', $noweDane[10]);
                $sp3 = explode(' ', $noweDane[11]);
                $sp4 = explode(' ', $noweDane[17]);
                $sp5 = explode(' ', $noweDane[18]);
                $sp6 = explode(' ', $noweDane[19]);
                $sp7 = explode(' ',$noweDane1[2]);
                $options = explode('.', $sp7[5]);
                
                $nowa .=  '<p leftmargin="4440" rightmargin="4440" align="left">'.str_replace('data', date('d-m-Y'), $noweDane[1]).','.$sp[0].':</p>';
                $sp = explode(' ', $sp[1]);
                $nowa .=  '<b>'.$sp[0].',</b> '.$sp[1].''.$sp[2].' '.$sp[3].' '.$sp[4].' '.$noweDane[3];
                $nowa .=  $noweDane[4].' '.$sp1[1].' '.$sp1[2].' '.$sp1[3].' '.$sp1[4].' '.$sp1[5].' '.$sp1[6].' ';
                $nowa .=  $sp1[7].' '.$sp1[8].' '.$sp1[9].' '.$sp1[10].' '.$sp1[11].' '.$sp1[12].' '.$sp1[13].' '.$sp1[14];//.' '.$sp1[15].' '.$sp1[16].'<br />';
                $nowa .=  $noweDane[6].' '.$noweDane[7].'<br />'.$noweDane[8].' '.$noweDane[9];
                $nowa .=  '<br /><br />';
                $nowa .=  $sp2[0].' '.$sp2[1].' <b>'.$sp2[2].'</b>'.' '.$sp3[1].' '.$sp3[2];
                $nowa .=  '<br /><br />';
                $nowa .=  $sp3[3].' '.$sp3[4];
                if(!empty($sp3[5]) & !empty($sp3[6]) & !empty($sp3[7])){
                    $nowa .=  ' '.$sp3[5].' '.$sp3[6].' '.$sp3[7];
                }
                $nowa .=  '<br /><br />';
                $nowa .=  'a';
                $nowa .=  '<br /><br />';
 
                $nowa .=  $noweDane[12];
                $nowa .=  ' '.$noweDane[14].' '.$noweDane[15].'<br />'.$noweDane[16];
                $nowa .=  '<br /><br />';
                $nowa .=  $sp4[1].' '.$sp4[2].' <b>'.$sp4[3].'</b>';
                $nowa .=  '<br /><br />';
                $nowa .=  $sp4[4].' '.$sp4[5].' '.$sp4[6].' '.$sp4[7].' '.$sp4[8].' '.$sp4[9].' <b>'.$sp4[10].'</b>';
                $nowa .=  $sp5[1].' '.$sp5[2].' '.$sp5[3].' '.$sp5[4].' <b>'.' '.$sp5[5].'</b>, ';
                $nowa .=  $sp6[1].'<br /> '.$sp6[2].' '.$sp6[3].' '.$sp6[4].' '.$sp6[5].' '.str_replace('„Umowa”', '<b>„Umowa”</b>', $sp6[6]);
                $nowa .=  ' '.$sp6[7].' '.$sp6[8].' '.$sp6[9];
                $nowa .=  '<br /><br />';
                $nowa .=  '<center><b>$1</b></center>';
                $nowa .=  '<br /><br />';
                $nowa .=  $noweDane = $noweDane1[0].' '.$noweDane1[1].' '.$sp7[1].' '.$sp7[2].' '.$sp7[3];
                
                $nowa .=  '<br />'.$sp7[4].' ';
                if(is_array($options)){        
                    foreach ($options as $value) {
                        $nowa .=  $value;
                    }
                }
                else {
                    
                    $nowa .=  $sp[7];
                
                }
                if(!empty($p7[5])) {
                    $nowa .= $sp7[5];
                }
                
                $nowa .= '</i></body>';
                
                echo $nowa;
       }
    }

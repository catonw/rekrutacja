<?php
/* @var $commonmodels \yii\common\models */
?>
<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

//use frontend\models\GeneratorForm;
use yii\db\ActiveQuery;
use common\models\Generator;



class GeneratorController extends Controller
{
    private $key;//zmienna do usunięcia -> w chwili obecnej tylko dla testów
    
    public function actionIndex() {
        
            $this->key = \Yii::$app->request->cookieValidationKey;
            if(!$this->key) {
                throw new NotFoundHttpException('Trwają prace, prosimy o cierpliwość',404);
            }
            

            $models = new Generator();
            $results = $models->getAll();
	    for($i=0; $i<count($results); ++$i) {
               return $this->render('index',['result'=>$results[$i]['titlebutton']]);
            }
    }
    
    public function actionGenerator() {

            $this->key = \Yii::$app->request->cookieValidationKey;
            if(!$this->key) {
                throw new NotFoundHttpException(404);
            }

            $models = new Generator();
            $post = \Yii::$app->request->post();
            $db = $models->getOne(1);
            
            return $this->render('generator',array('title'=>$db[0]['title'],'db'=>$db[0],'r'=>$post));

    }
       
   public function actionWrite() {
       $this->key = \Yii::$app->request->cookieValidationKey;

       // Yii::$app->registerCoreScript('jquery'); // Rejestrowanie biblioteki jquery 
//        Yii::$app->clientScript->registerCoreScript('jquery.ui'); //Rejestrowanie jquery ui 

       
       if(!$this->key) {
           throw new NotFoundHttpException(404);
       }
            return $this->render('write');
   }
}

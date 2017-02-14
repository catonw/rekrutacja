<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use \frontend\models\GeneratorForm;

$this->title = Html::encode($title);
$this->params['breadcrumbs'][] = $this->title;
?>

<h1 class="text-center"><?= $this->title ?></h1>
<div class="row">
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%">
            <span class="sr-only">70% Complete</span>
        </div>
    </div>
</div>
<div class="container">
    <div class="well pull-left col-lg-7">
        <?php
        $form = ActiveForm::begin(['id' => 'generator-form']);
        $model = new GeneratorForm();

        if (yii::$app->request->post()) {
            if (yii::$app->request->post()['WriteForm']['concludedon']) {
                ?>
                <textarea rows="15" cols="80"> 

                    <?php
                    $db = explode('§', $db['context']);

                    $db1 = explode(',', $db[1]);
                    $wynik = str_replace('data', date('d-m-Y'), $db[0]);
                    $wynik = str_replace('locality', $r['WriteForm']['place'], $wynik);
                    $wynik = str_replace('companyname', $r['WriteForm']['companyname'], $wynik);

                    $wynik = str_replace('adress', $r['WriteForm']['street'], $wynik);

                    $wynik = str_replace('pesels', $r['WriteForm']['pesel'], $wynik);

                    $wynik = str_replace('postalcode', $r['WriteForm']['postalcode'] . ' ' . $r['WriteForm']['place'], $wynik);

                    $wynik = str_replace('registrycourt', $r['WriteForm']['registrycourt'], trim(str_replace("_", " ", $wynik)));

                    $wynik = str_replace('thenumberoffaculty', $r['WriteForm']['thenumberoffaculty'], $wynik);
                    $wynik = str_replace('number-krs', $r['WriteForm']['krs'], $wynik);
                    $wynik = str_replace('number-nip', $r['WriteForm']['nip'], $wynik);
                    $wynik = str_replace('capital', $r['WriteForm']['capital'], trim(str_replace("_", " ", $wynik)));
                    $wynik = str_replace('function', $r['WriteForm']['function'], trim(str_replace("_", " ", $wynik)));
                    $wynik = str_replace('firstname', $r['WriteForm']['firstname'], $wynik);
                    $wynik = str_replace('lastname', $r['WriteForm']['lastname'], $wynik);
                    $wynik = str_replace('name', $r['WriteForm']['name'], $wynik);
                    $wynik = str_replace('firstnames', $r['WriteForm']['firstnames'], $wynik);
                    $wynik = str_replace('lastnames', $r['WriteForm']['lastnames'], $wynik);
                    $wynik = str_replace('names', $r['WriteForm']['names'], $wynik);
                    $wynik = str_replace('localitys', $r['WriteForm']['places'], $wynik);
                    $wynik = str_replace('streets', $r['WriteForm']['streets'], $wynik);
                    $wynik = str_replace('postalcodes', str_replace("_", " ", $r['WriteForm']['postalcodes']) . ' ' . $r['WriteForm']['places'], $wynik);
                    $wynik = str_replace('numberhouses', $r['WriteForm']['numberhouses'], $wynik);
                    $wynik = str_replace('places', $r['WriteForm']['places'], $wynik);
                    $wynik = str_replace('series', $r['WriteForm']['series'], $wynik);
                    $wynik = str_replace('idnumber', $r['WriteForm']['idnumber'], $wynik);
                    $exp = explode('options', $db1[1]);
                    $wynik = $wynik . $db1[0] . $exp[0];
                    $wynik = $wynik . $exp[1];
                    $wynik = $wynik . $r['WriteForm']['options1'];
                    $wynik = $wynik . $db1[2];
                    if (!empty($r['WriteForm']['options1']) | isset($r['WriteForm']['options2']) | isset($r['WriteForm']['options3'])) {
                        $wynik = $wynik . $r['WriteForm']['options1'];
                        $wynik = $wynik . $r['WriteForm']['options2'];
                        $wynik = $wynik . $r['WriteForm']['options3'];
                    }
                    $wynik = $wynik . $db1[3];
                    $wynik = $wynik . $db1[4];

                    echo $wynik;
                }
            }
            ?>
        </textarea>
            <?php if (yii::$app->request->post()) {
                if (yii::$app->request->post()['WriteForm']['concludedon']) {
                    ?>
                <div class="form-group">
                <?= $form->field($model, 'generator')->hiddenInput(['options' => $wynik])->label(false) ?>

                </div>

                <div class="form-group">               
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary hide', 'name' => 'save-button']) ?>            
                </div>
                <div class="form-group">
                    <?= Html::a('Print', ['/my/index', 'param' => $wynik, 'param2' => $db[1]], ['data-method' => 'post', 'class' => 'btn btn-primary', 'name' => 'print-button']) ?>
                </div>
                <?php }
            }
            ?>
        <?php ActiveForm::end(); ?>
        <?php if (empty($wynik)) { ?> 
            <div class="form-group">
            <?= Html::a('Write', ['generator/write'], ['class' => 'btn btn-primary', 'name' => 'print-button']) ?>    
            </div>
            <?php } ?>
    </div>
        <?php if (isset($wynik) & !empty($wynik)) { ?> 
        <div class="row col-lg-5 pull-right">
            <div class=" pull-right well">
    <?php
    $form = ActiveForm::begin(['id' => 'generator-form']);
    $model = new GeneratorForm();
    ?>
                <div class="form-group">
                <?= $form->field($model, 'contracts')->textarea(['rows' => 5, 'cols' => 30])->label('Napisz umowę') ?>      
                </div>
                <div class="form-group">
    <? Html::submitButton('Send', ['class' => 'btn btn-primary', 'name' => 'send-button']) ?>
                </div>
                    <?php ActiveForm::end(); ?>
            </div>
            <div class=" pull-right well">
    <?php
    $form = ActiveForm::begin(['id' => 'generator-form']);
    $model = new GeneratorForm();
    ?>
                <div class="form-group">
                <?= $form->field($model, 'contracts')->textarea(['rows' => 5, 'cols' => 30])->label('Napisz umowę') ?>       
                </div>
                    <?php ActiveForm::end(); ?>
            </div>
            <?php } ?>
    </div>
</div>

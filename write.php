<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\WriteForm;
use yii\widgets\MaskedInput;

$this->title = 'Write';
$this->params['breadcrumbs'][] = $this->title;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h1 class="text-center"><? $this->title ?></h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 pull-left">
            <?php
            $form = ActiveForm::begin(['id' => 'generator-form', 'action' => '?r=generator%2Fgenerator']);
            $model = new WriteForm();
            ?>
    <div class="well stepone show">
            <div class="form-group col-lg-4" id="concludedon">
                <?= $form->field($model, 'concludedon')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '99-99-2099'])->textInput(['placeholder' => "Zawarta w dniu"])->label('Zawarta w dniu') ?> 
            </div>    
            <div class="form-groupl col-lg-5" id="place">
                <?= $form->field($model, 'place')->textInput(['placeholder' => "Nazwa miejscowości"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaa aaaaaaaaaa'])->label('Miejscowość') ?> 
            </div>    
            <div class="form-group col-lg-7">
                <?= $form->field($model, 'companyname')->textInput(['placeholder' => "Podaj nazwę spólki"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaaa Aaaaaaaaaaa Aaaaaaaaa'])->label('Nazwa spółki') ?> 
            </div>    
            <div class="form-group col-lg-12">
                <?= $form->field($model, 'legalform')->textInput(['placeholder' => "Jaka jest forma prawna ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaaaaaaaaaaaa Aaaaaaaaaaaaaaaaaaaa Aaaaaaaaaaaaaaaaaaaa'])->label('Forma prawne') ?> 
            </div>    
        <a href="#" id="next" class="btn btn-primary">Next</a>
    </div>
        <div class="well steptwo hide">
            <div class="form-group col-lg-8">
                <?= $form->field($model, 'street')->textInput(['placeholder' => "Ulica"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaaaaaaaaaaaa Aaaaaaaaaaaaaaaaaaaa'])->label('Ulica') ?> 
            </div>    
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'postalcode')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '99-999'])->textInput(['placeholder' => "Kod pocztowy"]) ?> 
            </div>
            <div class="form-group col-lg-10">
                <?= $form->field($model, 'registrycourt')->textInput(['placeholder' => "Nazwa sądu"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaaaaaaaaaaa Aaaaaaaaaaaaaa Aaaaaaaaaaaaaaa'])->label('Sąd Rejonowy') ?> 
            </div>
            <div class="form-group col-lg-2">
                <?= $form->field($model, 'thenumberoffaculty')->textInput(['placeholder' => "Jaki jest numer wydziału"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'AAA'])->label('Numer wydziału') ?> 
            </div>
        </div>    
        <div class="well stepthrid hide">
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'krs')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '9999999999'])->textInput(['placeholder' => "Podaj numer KRS"])->label('KRS') ?> 
            </div>
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'nip')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '9999999999'])->textInput(['placeholder' => "Podaj numer NIP"])->label('NIP') ?> 
            </div>
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'capital')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '999999999'])->textInput(['placeholder' => "Wysokość kapitału zakładowego"])->label('Wysokość kapitał zakładowego') ?> 
            </div>    
            <div class="form-group col-lg-4">
                <?= $form->field($model, 'function')->textInput(['placeholder' => "Jakie stanowisko zajmujesz ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'aaaaaaaaaaaaaaaaaaaa'])->label('Funkcja') ?> 
            </div>
        </div>    
        <div class="stepfour well hide">    
            <div class="form-group col-lg-12">
                <?= $form->field($model, 'issuingauthority')->textInput(['placeholder' => "Jak nazywa się instytut wydający ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaaaaaaaaaaaa Aaaaaaaaaaaaaaaaaaaa Aaaaaaaaaaaaaaaaaaaa'])->label('Nazwa instytutu wydającego') ?> 
            </div>            
            <div class="form-group col-lg-4">
                <?= $form->field($model, 'pesel')->textInput(['placeholder' => "Podaj numer PESEL"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => '99999999999'])->label('PESEL') ?> 
            </div>                      
            <div class="form-group col-lg-6">
                <?= $form->field($model, 'descriptionofactivities')->textarea(['rows' => 4, 'col' => 6])->label('Ogólny opis czynności') ?> 
            </div>
            <div class="form-group col-lg-6">
                <?= $form->field($model, 'options1')->textInput()->label('Doprecyzowanie') ?> 
            </div>
        </div> 
        <div class="stepfive well hide">
            <div class="form-group col-lg-6">
                <?= $form->field($model, 'options2')->textInput()->label('Doprecyzowanie') ?> 
            </div>
            <div class="form-group col-lg-6">
                <?= $form->field($model, 'options3')->textInput()->label('Doprecyzowanie') ?> 
            </div>
            <div class="form-group col-lg-6">
                <?= $form->field($model, 'options4')->textInput()->label('Doprecyzowanie') ?> 
            </div>
            <div class="form-group col-lg-6">
                <?= $form->field($model, 'options1')->textarea(['rows' => 8, 'col' => 8])->label('Ogólny opis czynności') ?> 
            </div>
            <div class="form-group col-lg-6">
                <?= $form->field($model, 'options2')->textarea(['rows' => 8, 'col' => 8])->label('Ogólny opis czynności') ?> 
            </div>
        </div>
        <div class="stepsix well hide">    
            <div class="form-group col-lg-6">
                <?= $form->field($model, 'companyoptions1')->textarea(['rows' => 8, 'col' => 8])->label('Ogólny opis czynności') ?> 
            </div>   
            <div class="form-group col-lg-6">
                <?= $form->field($model, 'companyoptions2')->textarea(['rows' => 8, 'col' => 8])->label('Ogólny opis czynności') ?> 
            </div>
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'theamountnumerically')->textInput(['placeholder' => "Jaka jest wysokość kapitału zakładowego ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => '9999999999'])->label('Kwota liczbowo') ?> 
            </div>
            <div class="form-group col-lg-5">
                <?= $form->field($model, 'amountinwords')->textInput(['placeholder' => "Jaka jest wysokość kapitału zakładowego ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaaaaaaaaaaaa'])->label('Kwota słownie') ?> 
            </div>         
        </div>
        <div class="stepseven well hide">    
            <div class="form-group col-lg-8">
                <?= $form->field($model, 'accountnumber')->textInput(['placeholder' => "Jaki jest numer rachunu bankowego ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => '99-99-99-99-99-99-99-99-99-99-99-99-99'])->label('Numer racunku') ?> 
            </div>         
            <div class="form-group col-lg-2">
                <?= $form->field($model, 'yes')->checkbox()->label('Podlega ubezpieczeniu') ?> 
            </div>   
            <div class="form-group col-lg-2">
                <?= $form->field($model, 'no')->checkbox()->label('Nie podlega ubezpieczeniu') ?> 
            </div>   
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'firstname')->textInput(['placeholder' => "Jak mas na imię ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaaa'])->label('Imię') ?> 
            </div>
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'lastname')->textInput(['placeholder' => "Jak brzmi Twoje drugie imie ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaa'])->label('Drugie imie') ?> 
            </div>
        </div>
        <div class="stepeight well hide">            
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'name')->textInput(['placeholder' => "Jak masz na nazwisko ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaaaaaaaaaaaa'])->label('Nazwisko') ?> 
            </div>
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'firstnames')->textInput(['placeholder' => "Jak ma na imię zleceniobiorca ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaa'])->label('Imię') ?> 
            </div>
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'lastnames')->textInput(['placeholder' => "Jak brzmi drugie imię zleceniobiorcy ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaa'])->label('Drugie imie') ?> 
            </div>
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'names')->textInput(['placeholder' => "Jak brzmi nazwisko zleceniobiorcy ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaaaaaaaaaaaa'])->label('Nazwisko') ?> 
            </div>
        </div>                    
        <div class="stepnine well hide">
            <div class="form-group col-lg-4">
                <?= $form->field($model, 'streets')->textInput(['placeholder' => "Ulica ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaa'])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaaaaaaaaaaaa'])->label('Ulica') ?> 
            </div>    
            <div class="form-group col-lg-2">
                <?= $form->field($model, 'numberhouses')->textInput(['placeholder' => "Numer domu"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => '999'])->label('Numer domu') ?> 
            </div>   
            <div class="form-group col-lg-2">
                <?= $form->field($model, 'postalcodes')->textInput(['placeholder' => "Kod pocztowy ?"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => '99-999'])->label('Kod pocztowy') ?> 
            </div>
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'pesels')->textInput(['placeholder' => "Numer PESEL"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => '99999999999'])->label('PESEL') ?> 
            </div>
        </div>
        <div class="stepten well hide">
            <div class="form-group col-lg-3">
                <?= $form->field($model, 'nips')->textInput(['placeholder' => "Numer NIP"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => '9999999999'])->label('Numer NIP') ?> 
            </div>
            <div class="form-groupl col-lg-5">
                <?= $form->field($model, 'places')->textInput(['placeholder' => "Miejscowość"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'Aaaaaaaaaaaaaaaaaaaa Aaaaaaaaaaaaaaaaaaaa'])->label('Miejscowość') ?> 
            </div>   
            <div class="form-groupl col-lg-2">
                <?= $form->field($model, 'series')->widget(\yii\widgets\MaskedInput::className(), ['mask' => 'AAA'])->label('Seria dowodu sosbistedo') ?> 
            </div>   
            <div class="form-groupl col-lg-3">
                <?= $form->field($model, 'idnumber')->textInput(['placeholder' => "Numer dowodu osobistego"])->widget(\yii\widgets\MaskedInput::className(), ['mask' => '999999'])->label('Numer dowodu osobistego') ?> 
            </div>   
            <div class="form-group col-lg-4">                           
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'save-button']) ?>
            </div>
        </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
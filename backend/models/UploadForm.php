<?php
namespace backend\models;

use yii\base\Model;
use Yii;
use yii\web\UploadedFile;

/**
* UploadForm is the model behind the upload form.
*/
class UploadForm extends Model
{
/**
* @var UploadedFile file attribute
*/
public $file;

/**
* @return array the validation rules.
*/
public function rules()
{
return [
    [['file'], 'file'],

];

}
    public function attributeLabels(){
        return[
          'file' => '首页轮播图上传'
        ];
    }
}
<?php

namespace davidxu\uppy;
use davidxu\base\helpers\StringHelper;
use davidxu\base\widgets\InputWidget;
use yii\helpers\Html;
use yii\i18n\PhpMessageSource;

class Uppy extends InputWidget
{
//    public $lang;
    public $maxFiles = 9;
    public $maxFilesize;
    public $acceptedFiles;
    public $url;

    private $_encodedClientOptions;
    private $_encodedMetaData;

    public function init()
    {
        $_view = $this->getView();
        $this->registerTranslations();
        $this->registerAssets($_view);
        parent::init();
    }

    public function run()
    {
        $this->registerScripts();
    }

    protected function registerScripts()
    {
        $js = /** @lang JavaScript */ <<< JS
const uppy = Uppy.Uppy()
console.log(FileInput)

uppy.use(FileInput, {
    // Options
  
})
JS;

    }

    protected function getFieldId()
    {
        return $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : StringHelper::getInputId($this->name);
    }

    protected function registerTranslations()
    {
        $i18n = Yii::$app->i18n;
        $i18n->translations['uppy*'] = [
            'class' => PhpMessageSource::class,
            'sourceLanguage' => 'en-US',
            'basePath' => Yii::getAlias('@davidxu/uppy/messages'),
            'fileMap' => [
                'dropzone' => 'uppy.php',
            ],
        ];
    }
}

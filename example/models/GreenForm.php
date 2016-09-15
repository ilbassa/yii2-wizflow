<?php

namespace app\models;

use Yii;
use yii\base\Model;
use raoul2000\workflow\validation\WorkflowScenario;

/**
 * ContactForm is the model behind the contact form.
 */
class GreenForm extends Model
{
    public $greenStuff;
    public $status;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['greenStuff'], 'required'],
        ];
    }
    public function summary()
    {
    	return 'green stuff : '.$this->greenStuff;
    }
}
<?php

namespace app\models;

use Yii;
use yii\base\Model;

class UserForm extends Model
{
  public $name;
  public $email;

  public function rules()
  {
    return [
      [['name'], 'required','message' => 'Name must be inserted.'],
      [['email'], 'required', 'message' => 'Email must be inserted.'],
      ['email','email', 'message' => 'Invalid email format.'],
    ];
  }
}
?>

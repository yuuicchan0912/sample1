<?php
class User extends AppModel {
  // バリデーションの記述
  public $validate = array(
    'name' => array(
      array(
        'rule' => 'notBlank',//notEmptyではなく新しい関数notBlankを使う
        'message' => '名前は必ず入力してください',
      ),
      array(
        'rule' => array('maxLength' , 32),
        'message' =>'名前が長すぎます'
      ),
      array(
        'rule' => 'alphaNumeric',
        'message' =>'名前は半角英数字で入力してください'
      ),

    ),
    'description' => array(
      array(
        'rule' => array('maxLength' , 200),
        'message' => '備考が長すぎます'
      ),
    ),
  );
}
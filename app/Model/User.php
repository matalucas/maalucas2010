<?php

// app/Model/User.php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
public $name = 'User';
public $validate = array(
             'email' => array(
'rule' => array('email'),
'message' => 'formato de email incorreto'

),
    
'username' => array(
'unique' => array(
'rule' => 'isUnique',
'message' => 'Esse username ja existe, escolha outro'
)),
    
//’login’ => array(
//’rule’ => ’alphaNumeric’,
//’message’ => ’Usernames must only contain letters and numbers.’
//)    
    
'password' => array(
'Not empty' => array(
'rule' => array('notEmpty'),
'message' => 'Introduza a password'
),
    'Match passwords'=>array(
        'rule'=>'matchPasswords',
        'message'=>'passwords nao conscidem'
    )
),
    'password_confirmation' => array(
'Not empty' => array(
'rule' => array('notEmpty'),
'message' => 'confirme a password'
)
)

);

public function matchPasswords($data){
 if($data['password']==$this->data['User']['password_confirmation']){
 return true;    
 }
 $this->invalidate('password_confirmation', 'as passwords nao conscidem');
 return false;
}

public function beforeSave($options = array()) {
$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
return true;
}



/*public function beforeSave($options = array()) {
if (isset($this->data[$this->alias]['password'])) {
$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);}
return true;
}
 */

}
?>

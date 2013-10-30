<?php

// app/Controller/UsersController.php
class UsersController extends AppController {
public $name="Users";
    var $components=array('Search');
   function beforeFilter() {
       parent::beforeFilter();
       $this->Auth->allow('inicio');
       $this->Auth->allow('');
       $this->Auth->allow('');
        
//if ($this->action == 'view') {
//if (!$this->Session->check('User')) {
//$this->redirect('/users/login');
//}}
}

   public function inicio(){
        $this->set ('a',$this->User->find('all'));
       } 

public function isAuthorized($user) {
    if($user['role']== 'admin')
        return true;
    if (in_array($this->action, array('edit','delete'))) {
        if($user['id']!=$this->request->params['pass'][0]){
         return false;   
        }
        //Admin pode acessar todas actions
    }
     return true; // O resto não pode
}

 public function edit($id = null) {
       if($this->data){
           if($this->User->save($this->data))
               $this->Session->setFlash('DADOS EDITADOS COM SUCESSO');
              $this->redirect(array('action' => 'index'));
       }else{
           $this->data =$this->User->read(null,$id);
       }
      
           
   }


public function delete($id) {
if ($this->request->is('post')) {
throw new MethodNotAllowedException();
}
if ($this->User->delete($id)) {
$this->Session->setFlash('O Utilizador COM ID: ' . $id . ' FOI Apagado.');
$this->redirect(array('action' => 'index'));
}
}



             public function view($id) {
$this->User->id = $id;
$this->set('a', $this->User->read());
}

public function add() {
if ($this->request->is('post')) {
$this->User->create();
if ($this->User->save($this->request->data)) {
$this->Session->setFlash(__('*UTILIZADOR REGISTADO COM SUCESSO'));
//$this->redirect(array('action' => 'index'));
} else {
$this->Session->setFlash(__('*NÃO FOI POSSIVEL REGISTAR O UTILIZADOR. TENTE NOVAMENTE'));
}}}


public function login() {
    
   // para mostrar primeiro o login $this->layout = 'login';

    if ($this->request->is('post')) {
        $this->Session->setFlash('*BEM VINDO AO NOSSO CLUBE DO COSTA DO SOL*');
if ($this->Auth->login()) {

   $this->redirect($this->Auth->redirect());

} else {
$this->Session->setFlash(__('*USERNAME OU PASSWORD INCORRECTO'));
}
}
}


public function logout() {

$this->Session->setFlash('*Sessao terminada, entre novamente');
$this->redirect($this->Auth->logout());
$this->redirect(array('controller' => 'users','action' => 'inicio'));
}

  public function pesquisa(){
        $this->set ('a',$this->User->find('all'));
       }


    public function index() {
   
 $conditions=$this->Search->getConditions();
$this->set('pages', $this->paginate(null,$conditions));     
        $this->paginate=array('limit'=>4);
          $users=$this->User->find('all');
         $users= $this->paginate('User');
  $this->set(compact('users'));
        
    }
    
     public function form(){
        $this->set ('a',$this->User->find('all'));
       }

}
    
?>

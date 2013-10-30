<?php

class JogadoresController extends  AppController {
    public $name="Jogadores";
       // public $scaffold;
          function add() {
        if (!empty($this->data)) {
            if ($this->Jogadore->save($this->data)) {
                $this->Session->setFlash('DADOS ADICIONADOS COM SUCESSO');
               $this->redirect(array('action' => 'index'));
            }
            
        }
          }
          
          
          public function view($id) {
$this->Jogadore->id = $id;
$this->set('a', $this->Jogadore->read());
}

 public function index(){
        $this->set ('a',$this->Jogadore->find('all'));
            $this->paginate=array('limit'=>4);
           
		$a=$this->Jogadore->find('all');
                 $a=$this->paginate('Jogadore');
		$this->set(compact('a'));    
      }


 public function ver(){
        $this->set ('a',$this->Jogadore->find('all'));
            $this->paginate=array('limit'=>4);
           
		$a=$this->Jogadore->find('all');
                 $a=$this->paginate('Jogadore');
		$this->set(compact('a'));
     
      }
   public function delete($id) {
if ($this->request->is('post')) {
throw new MethodNotAllowedException();
}
if ($this->Jogadore->delete($id)) {
$this->Session->setFlash('O ENCARREGADO COM ID: ' . $id . ' FOI REMOVIDO.');
$this->redirect(array('action' => 'index'));
}
}

 public function edit($id = null) {
       if($this->data){
           if($this->Jogadore->save($this->data))
               $this->Session->setFlash('DADOS EDITADOS COM SUCESSO');
              $this->redirect(array('action' => 'index'));
       }else{
           $this->data =$this->Jogadore->read(null,$id);
       }
        
   }
   
   
   }
?>

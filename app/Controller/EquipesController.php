<?php

class EquipesController extends  AppController {
    public $name="Equipes";
       // public $scaffold;
    
    
          function add() {
        if (!empty($this->data)) {
            if ($this->Equipe->save($this->data)) {
                $this->Session->setFlash('DADOS ADICIONADOS COM SUCESSO');
              // $this->redirect(array('action' => 'index'));
            }
            
        }
          }
  
    public function index(){
        $this->set ('a',$this->Equipe->find('all'));
            $this->paginate=array('limit'=>4);
           
		$a=$this->Equipe->find('all');
                 $a=$this->paginate('Equipe');
		$this->set(compact('a'));
     
      }
      
           public function view($id) {
$this->Equipe->id = $id;
$this->set('a', $this->Equipe->read());
}

 public function edit($id = null) {
       if($this->data){
           if($this->Equipe->save($this->data))
               $this->Session->setFlash('DADOS EDITADOS COM SUCESSO');
          $this->redirect(array('action' => 'index'));
       }else{
           $this->data =$this->Equipe->read(null,$id);
       }
        
   }
    
          
          
          public function delete($id) {
                            if ($this->request->is('post')) {
                             throw new MethodNotAllowedException();
}
                          if ($this->Equipe->delete($id)) {
                          $this->Session->setFlash('A equipe  COM ID: ' . $id . ' FOI REMOVIDA.');
                         $this->redirect(array('action' => 'index'));
}
}
   }
?>

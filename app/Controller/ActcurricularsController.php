<?php

class ActcurricularsController extends AppController{
   public $name="Actcurriculars";
  // public $scaffold;
    function add() {
        if (!empty($this->data)) {
            if ($this->Actcurricular->save($this->data)) {
                $this->Session->setFlash('DADOS ADICIONADOS COM SUCESSO');
                $this->redirect(array('action' => 'index'));
            }
        }
 
} 

 public function index(){
        $this->set ('a',$this->Actcurricular->find('all'));
            $this->paginate=array('limit'=>4);
           
		$a=$this->Actcurricular->find('all');
                 $a=$this->paginate('Actcurricular');
		$this->set(compact('a'));
     
      }
   public function delete($id) {
if ($this->request->is('post')) {
throw new MethodNotAllowedException();
}
if ($this->Actcurricular->delete($id)) {
$this->Session->setFlash('A ACTIVIDADE COM ID: ' . $id . ' FOI REMOVIDA.');
$this->redirect(array('action' => 'index'));
}
}

 public function edit($id = null) {
       if($this->data){
           if($this->Actcurricular->save($this->data))
               $this->Session->setFlash('DADOS EDITADOS COM SUCESSO');
            $this->redirect(array('action' => 'index'));
       }else{
           $this->data =$this->Actcurricular->read(null,$id);
       }
      
           
   }
   
   
   
   }
?>
<?php

class TreinadoresController extends AppController{
   public $name="Treinadores";
  // public $scaffold;
    function add() {
        if (!empty($this->data)) {
            if ($this->Treinadore->save($this->data)) {
                $this->Session->setFlash('DADOS ADICIONADOS COM SUCESSO');
                $this->redirect(array('action' => 'index'));
            }
        }
    }                 
   

          public function view($id) {
$this->Treinadore->id = $id;
$this->set('a', $this->Treinadore->read());
}

 public function index(){
        $this->set ('a',$this->Treinadore->find('all'));
            $this->paginate=array('limit'=>4);
           
		$a=$this->Treinadore->find('all');
                 $a=$this->paginate('Treinadore');
		$this->set(compact('a'));    
      }


 public function ver(){
        $this->set ('a',$this->Treinadore->find('all'));
            $this->paginate=array('limit'=>4);
           
		$a=$this->Treinadore->find('all');
                 $a=$this->paginate('Treinadore');
		$this->set(compact('a'));
     
      }
   public function delete($id) {
if ($this->request->is('post')) {
throw new MethodNotAllowedException();
}
if ($this->Treinadore->delete($id)) {
$this->Session->setFlash('O ENCARREGADO COM ID: ' . $id . ' FOI REMOVIDO.');
$this->redirect(array('action' => 'index'));
}
}

 public function edit($id = null) {
       if($this->data){
           if($this->Treinadore->save($this->data))
               $this->Session->setFlash('DADOS EDITADOS COM SUCESSO');
              $this->redirect(array('action' => 'index'));
       }else{
           $this->data =$this->Treinadore->read(null,$id);
       }
        
   }
   
   
   
   }
?>

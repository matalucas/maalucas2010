<?php

class EncarregadosController extends AppController{
   public $name="Encarregados";
  // public $scaffold;
    function add() {
        if (!empty($this->data)) {
            if ($this->Encarregado->save($this->data)) {
                $this->Session->setFlash('DADOS ADICIONADOS COM SUCESSO');
                $this->redirect(array('action' => 'index'));
            }
        }
    }                 
   

          public function view($id) {
$this->Encarregado->id = $id;
$this->set('a', $this->Encarregado->read());
}

 public function index(){
        $this->set ('a',$this->Encarregado->find('all'));
            $this->paginate=array('limit'=>4);
           
		$a=$this->Encarregado->find('all');
                 $a=$this->paginate('Encarregado');
		$this->set(compact('a'));    
      }


 public function ver(){
        $this->set ('a',$this->Encarregado->find('all'));
            $this->paginate=array('limit'=>4);
           
		$a=$this->Encarregado->find('all');
                 $a=$this->paginate('Encarregado');
		$this->set(compact('a'));
     
      }
   public function delete($id) {
if ($this->request->is('post')) {
throw new MethodNotAllowedException();
}
if ($this->Encarregado->delete($id)) {
$this->Session->setFlash('O ENCARREGADO COM ID: ' . $id . ' FOI REMOVIDO.');
$this->redirect(array('action' => 'index'));
}
}

 public function edit($id = null) {
       if($this->data){
           if($this->Encarregado->save($this->data))
               $this->Session->setFlash('DADOS EDITADOS COM SUCESSO');
              $this->redirect(array('action' => 'index'));
       }else{
           $this->data =$this->Encarregado->read(null,$id);
       }
        
   }
   
   
   
   }
?>

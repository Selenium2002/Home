<?php
class ParentClass {
    protected $message = "Hello from Parent";
  
    protected function showMessage() {
        return $this->message;
    }
}

class ChildClass extends ParentClass {
    public function getMessage() {
        return $this->showMessage();  
    }
}

$obj = new ChildClass();
echo $obj->getMessage();  
echo $obj->message;    
?>
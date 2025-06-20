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
echo $obj->getMessage();  //Hello from Parent

echo $obj->message;    
// ( ! ) Fatal error: Uncaught Error: Cannot access protected property ChildClass::$message in D:\Ismail\Back End\OOP\Practice\samples\ProtectedVar.php on line 18
// ( ! ) Error: Cannot access protected property ChildClass::$message in D:\Ismail\Back End\OOP\Practice\samples\ProtectedVar.php on line 18
?>
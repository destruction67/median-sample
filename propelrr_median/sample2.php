<?php 

class medianArray {

    public $a;
  
    public function __construct($a) {
      $this->a = $a;
    }
  }
  
  
  class median extends medianArray
  {
  
      public function __construct($a)
      {
          parent::__construct($a);
      }
      
      
       
  }
  
  $new = new median("hello");
  echo $new->a; 
  
?>

<?php
class snake{
 private $count=0;
 private $startposition=0;
 private $previousposition;
 public function welcome(){
   echo "Welcome to Snake And Ladder Game \n";
   echo "Any Player starts from $this->startposition";
 }
}
$obj=new snake();
$obj->welcome();
?>
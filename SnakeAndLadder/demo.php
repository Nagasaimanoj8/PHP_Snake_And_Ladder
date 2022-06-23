<?php
class snake{
 private $count=0;
 private $startposition=0;
 private $previousposition;
 public function welcome(){
   echo "Welcome to Snake And Ladder Game \n";
   echo "Any Player starts from $this->startposition"."\n";
 }
 public function play()
{
    $previousposition=$this->startposition;
    $this->startposition=rand(1, 6);
    echo" the next position after dice rolled is:$this->startposition"."\n";
    return $this->startposition;
    $this->nextMove($this->startposition);
 }
}
$obj=new snake();
$obj->welcome();
$obj->play();
?>
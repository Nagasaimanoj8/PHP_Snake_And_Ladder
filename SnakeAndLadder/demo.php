<?php
class snake{
 private $count=0;
 private $startposition=0;
 private $previousposition;
 public function welcome(){
   echo "Welcome to Snake And Ladder Game";
   echo "Any Player starts from $this->startposition \n";
 }
 public function play()
{
    $previousposition=$this->startposition;
    $this->startposition=rand(1, 6);
    echo" the next position after dice rolled is :$this->startposition"."\n";
    return $this->startposition;
    $this->nextMove($this->startposition);
 }
 //create function to check option for NO Play,Ladder,Snake
 public function nextMove()
 {
     $option = rand(1, 3);
     switch ($option) {
         case 1:
             echo " player on Ladder move to next position " . $this->previousposition += $this->startposition;
             echo "\n";
             break;
         case 2:
             echo " player on snake move to previous Position " . $this->previousposition -= $this->startposition;
             echo "\n";
             break;
         default:
             echo " No Play " . $this->previousposition = $this->previousposition;
             echo "\n";
     }
     echo "Current Position is:" . $this->previousposition . "\n";
 }
}
$obj=new snake();
$obj->welcome();
$obj->play();
$obj->nextMove();
?>
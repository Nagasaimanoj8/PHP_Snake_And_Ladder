<?php
class snake{
 private $count=0;
 private $startposition=0;
 private $previousposition;
 public function welcome(){
   echo "Welcome to Snake And Ladder Game \n";
   echo "Any Player starts from $this->startposition \n";
 }
 public function play()
{
    $previousposition=$this->startposition;
    $this->count++;
    $this->startposition=rand(1, 6);
     //  echo" the next position after dice rolled is :$this->startposition"."\n";
    return $this->startposition;
    $this->nextMove($this->startposition);
 }
 public function option(){ 
  
   return rand(1,3);
 
}
 //create function to check option for NO Play,Ladder,Snake
 public function nextMove($option)
 {
   while($this->startingposition!=100){

   
      switch ($option) {
         case 1:          
            
            echo " No Play " . $this->previousposition = $this->startpositionposition;
            echo "\n";
             break;
         case 2:
            echo " player on Ladder move to next position " ;
            $this->position += $this->startposition;
          echo "\n";
               break;
         case 3:
            echo "player taker the snake";  
            $this->previousposition -= $this->startposition;
            echo "\n";
            echo "\n";
              break; 
         }  
         echo "Current Position is:" . $this->previousposition . "\n";
            
          
   }
}
}

$obj=new snake();
$obj->welcome();      
//$obj->play();
$option =$obj->option();
$obj->nextMove($option);

?>
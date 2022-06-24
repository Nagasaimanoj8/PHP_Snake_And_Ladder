<?php
class snake{
 private $count=0;
 public$startposition=0;
 private $rolldice;
 private $previousposition;
 public function welcome(){
   echo "Welcome to Snake And Ladder Game \n";
   echo "Any Player starts from $this->startposition \n";
 }
 public function play()
{
    $previousposition=$this->startposition;
    $this->count++;
    $this->rolldice=rand(1, 6);
    //  echo" the next position after dice rolled is :$this->startposition"."\n";
    return $this->startposition;
    
 }
 public function option(){ 
     return rand(1,3);
}
 //create function to check option for NO Play,Ladder,Snake
 public function nextMove($option)
 {
   
               

              $this->previousposition = $this->startposition;
              switch ($option) {
 
             case 1:
                 $this->startposition = $this->startposition;
                 echo "Previous Position : $this->previousposition & StartPosition :  $this->startposition \n";
                 break;

             case 2:
                
                 $this->startposition += $this->rolldice;
                 if($this->startposition < 100){
                     echo "Previous Position : $this->previousposition & StartPosition : $this->startposition \n";
                 }

                 elseif($this->startposition > 100){
                     $this->startposition = $this->previousposition;
                     echo "Previous Position : $this->previousposition & StartPosition :  $this->startposition  \n";
                 }
                 elseif($this->startposition == 100){
                     echo "Previous Position : $this->previousposition & StartPosition :  $this->startposition \n";
                     echo "Player won the game";
                 }
                 break;

             case 3:
                 $this->startposition -= $this->rolldice;
                 if($this->startposition < 0){
                     $this->startposition = 0;
                 }
                 echo "Previous Position : $this->previousposition & StartPosition :  $this->startposition . \n";
                 break;
         }
        
      }
}

$obj=new snake();//object create
$obj->welcome();//call function
while($obj->startposition!=100 ){
$obj->play();
$option =$obj->option();
$obj->nextMove($option);
}
?>
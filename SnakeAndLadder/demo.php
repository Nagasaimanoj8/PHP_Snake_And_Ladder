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
     $this->count++;
    $this->rolldice=rand(1, 6);
      echo" number of times dice rolled is :$this->rolldice"."\n";
    return $this->rolldice;
    
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
                echo"NoPlay";
                 $this->startposition = $this->startposition;
                 echo "Previous Position : $this->previousposition & StartPosition :  $this->startposition \n";
                 break;

             case 2:
                echo " player on snake move to previous Position";
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
                echo " player on Ladder move to next position";
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
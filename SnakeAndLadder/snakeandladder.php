<?php
//UC1
class snake
{
    const LADDER = 3;
    const SNAKE = 2;
    const NOPLAY = 1;
    public $position = 0;
    public $count =0;//Use for roll count
   
   

 
    /*function for palyer roll a die and
     get number between 1 to 6*/
    function snakeandladder()
    {
        $startPosition = 0;
        echo "Player at starting position:" . $startPosition . "\n";
        echo "Rolling a die ";
        $rollDie = rand(1, 6);
       // $startPosition+=$rollDie;
       // echo "current position is:".$startPosition;
       // $this->nextMove($rollDie);
       echo "getting a die number is:".$rollDie;
       return $rollDie;
    }
     //create function to check option for NO Play,Ladder,Snake
     public function nextMove()
     {
           
            $rollDie=$this->snakeandladder();
        
        $option = rand(1, 3);
        $this->count++;
         switch ($option) {
             case snake::LADDER:
                 echo " player on Ladder move to next position "; 
                 if( $this->position + $rollDie>100)
                 {
                    $this->position=$this->position;
                 }
                 else{
                    $this->position+=$rollDie;
                 }
                 echo "\n";
                 break;
             case snake::SNAKE:
                 echo " player on snake move to previous Position " ;
                  $this->position -= $rollDie;
                  if($this->position<=0)
                  {
                    $this->position=0;
                  }
                 echo "\n";
                 break;
             default:
                 echo " No Play " . $this->position = $this->position;
                 echo "\n";
        }
         return  "Current Position is:" . $this->position . "\n";
    
       
        echo "Time of the die Rolls:".$this->count;
    }
    function winner()
    {
        $playerposition1=0;
        $playerposition2=0;
        $rollDie=$this->snakeandladder();
 
        if( $this->position1+ $rollDie>100 && $this->position2+ $rollDie )
                 {
                    $this->position1=$this->position1;
                 }
                 else{
                    $this->position1+=$rollDie;
                 }
    }
}
$obj = new snake();
$obj->snakeandladder();
$obj->nextMove();
echo "\n"."Player won the game" ;
$obj->winner();
?>
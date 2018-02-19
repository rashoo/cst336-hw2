<?php
   function displayPoints($rock, $paper, $sci)
   {
        if($rock == $paper && $sci)
        {
            echo "won";
        }
        else
        {
            echo "Try Again";
        }
                
    }
 function displaySymbol($randomValue, $iHelper)
 {
        switch ($randomValue) 
        {
            case 0: $symbol = "rock";
                break;
            case 1: $symbol = "paper";
                break;
            case 2: $symbol = "sci";
                break;
        }
             echo "<img id ='reel$iHelper' src='img/$symbol.png' alt = '$symbol' title = '".ucfirst($symbol)."' width='70' />";
}
    function play()
    {
        
        for($i=1; $i<4;$i++)
    {
        
        ${"randomValue". $i} = rand(0,3); 
        displaySymbol(${"randomValue".$i}, $i);
    }
    
        displayPoints($rock, $paper, $sci);
     
    }
?>
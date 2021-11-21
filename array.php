<?php

      $marks=array("bhagirath"=>array("math"=>50,"phy"=>40,"che"=>30));
      $result=array("jainil"=>array("math"=>50,"phy"=>30,"che"=>40));
      
     //print_r($marks);
     echo "Marks of bhagirath in math is ". 
     $marks["bhagirath"]["math"]. " and in Physics is ". $marks["bhagirath"]["phy"]." 
     in Chemistry is " .$marks["bhagirath"]["che"]."<br>";

     echo "Marks of Jainil in math is ".$result["jainil"]["phy"]."<br>";
     echo "Marks of Jainil in Physics is ".$result["jainil"]["che"]."<br>";
     echo "Marks of Jainil in Chemistry is ".$result["jainil"]["math"]."<br>";
       
       
       $number=array(1,2,3,4,5);
       foreach($number as $value)
       {
           echo "Value is $value <br>";
       }
?>





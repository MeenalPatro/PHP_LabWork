<?php  
    function static_var()  
    {  
        static $num1 = 3;       //static variable  
        $num2 = 6;          //Non-static variable  
        //increment in non-static variable  
        $num1++;  
        //increment in static variable  
        $num2++;  
        echo "Static: " .$num1 ."</br>";  
        echo "Non-static: " .$num2 ."</br>";  
    }        
//first function call  
    static_var();  
//second function call  
    static_var();  
?> 

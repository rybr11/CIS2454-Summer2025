<?php
    function get_topping_count($pizza_toppings) {
        $topping_count = 0;
        
        foreach ($pizza_toppings as $topping) {
            $topping_count++;
        }
        
        return $topping_count;
    }
    
    function get_toppings($pizza_toppings) {
        return join(', ', $pizza_toppings);
    }
    
    function get_cost($size, $topping_count) {
        define('SMALL', 5.0);
        define('MEDIUM', 7.0);
        define('LARGE', 9.0);
        
        if ($size == 'Small') {
            return SMALL + 0.5 * $topping_count;
        } 
        else if ($size == 'Medium') {
            return MEDIUM + 1 * $topping_count;
        } 
        else if ($size == 'Large') {
            return LARGE + 1.5 * $topping_count;
        }
    }



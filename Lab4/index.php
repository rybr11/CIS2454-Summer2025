<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Order Pizza</title>
    </head>
    <body>        
        <?php

            require_once('model/order_calc.php');
            

            $pizza_size = filter_input(INPUT_POST, 'pizza_size');
            $pizza_toppings = filter_input(INPUT_POST, 'pizza_toppings',
                    FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
            $action = filter_input(INPUT_POST, 'action');
            
            if ($pizza_size) {
                $toppings_string = '';
                $topping_count = 0;
                
                if ($pizza_toppings) {
                    $topping_count = get_topping_count($pizza_toppings);
                }
                
                if ($topping_count == 0) {
                $toppings_string = 'No Toppings';
                } 
                else {
                    $toppings_string = get_toppings($pizza_toppings);
                }
                
                $total_cost = get_cost($pizza_size, $topping_count);
                
                include('views/pizza_order.php');
            
            } else if ($action){
                include('views/error.php');
            }
            
            include('views/pizza_form.php');
            
        ?>
    </body>
</html>

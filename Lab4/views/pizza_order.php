<?php    
    echo '<h2>Your Order</h2>'
        . $pizza_size . ' Pizza '
        . 'with ' . $toppings_string . '</br>'
        . 'Total Cost: $' . number_format($total_cost, 2)
        . '<br>';


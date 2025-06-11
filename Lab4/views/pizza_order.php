<?php    
    echo '<h2>Your Order</h2>'
        . 'You have selected a'
        . $pizza_size . ' Pizza '
        . 'with ' . $toppings_string . '</br>'
        . 'Your Total Comes To: $' . number_format($total_cost, 2)
        . '<br>';


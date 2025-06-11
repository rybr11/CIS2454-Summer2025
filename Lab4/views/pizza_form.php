<h2>Pizza Order</h2>
<form action="index.php" method="post">
    <h3>Pizza Size</h3>
    <input type="radio" name="pizza_size" value="Small">
    <label>Small ($5.00)</label></br>
    <input type="radio" name="pizza_size" value="Medium">
    <label>Medium ($7.00)</label></br>
    <input type="radio" name="pizza_size" value="Large">
    <label>Large ($9.00)</label></br>
    </br>
    <h3>Pizza Toppings</h3>
    <p>Small: $0.50 | Medium: $1.00 | Large: $1.50 per Topping</p>
    <input type="checkbox" name="pizza_toppings[]" value="Pepperoni">
    <label>Pepperoni</label></br>
    <input type="checkbox" name="pizza_toppings[]" value="Sausage">
    <label>Sausage</label></br>
    <input type="checkbox" name="pizza_toppings[]" value="Bacon">
    <label>Bacon</label></br>
    <input type="checkbox" name="pizza_toppings[]" value="Ham">
    <label>Ham</label></br>
    <input type="checkbox" name="pizza_toppings[]" value="Peppers">
    <label>Green Peppers</label></br>
    <input type="checkbox" name="pizza_toppings[]" value="Onions">
    <label>Onions</label></br>
    <input type="checkbox" name="pizza_toppings[]" value="Mushrooms">
    <label>Mushrooms</label></br>
    <input type="checkbox" name="pizza_toppings[]" value="Pineapple">
    <label>Pineapple</label></br>
    <input type="checkbox" name="pizza_toppings[]" value="Olives">
    <label>Black Olives</label></br>
    <input type="checkbox" name="pizza_toppings[]" value="Anchovies">
    <label>Anchovies</label></br>
    </br>
    <input type="submit" value="Order">
    <input type="hidden" name="action" value="form_submit">
</form>

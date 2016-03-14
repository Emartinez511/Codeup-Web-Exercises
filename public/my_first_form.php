<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My First HTML Form</title>
</head>
<body>
	<form method="POST" action="/my_first_form.php">
	<h2>User Login</h2>
		<p>
			<label for="username">Username</label>
			<input id="username" name="username" type="text" placeholder="username">
		</p>
		<p>
			<label for="password">Password</label>
			<input id="password" name="password" type="text" placeholder="password">
		</p>
		<p>
			<button type="submit">Login</button>
		</p>
	</form>

	<form method="POST" action="/my_first_form.php">
	<h2>Compose an Email</h2>
		<p>
			<label for="to">To:</label>
			<input id="to" name="to" type="email">
		</p>
		<p>
			<label for="from">From:</label>
			<input id="from" name="from" type="email">
		</p>
		<p>
			<label for="re">Re:</label>
			<input id="subject" name="subject" type="text" placeholder="subject">
		</p>
		<p>
			<textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="compose"></textarea>
		</p>
		<p>
			<input type="checkbox" id="save_email" name="save_email" value="yes" checked>
			<label for="save_email">Save Email</label>
		</p>
			<button type="submit">Send</button>
	</form>

	<form method="POST" action="/my_first_form.php">
	<h2>Multiple Choice Test</h2>
		<p>
			Who is the US President in 2015?
		</p>
			<label>
				<input type="radio" name="q1" value="bush">Bush</label>
			<label>
				<input type="radio" name="q1" value="obama">Obama</label>
			<label>
				<input type="radio" name="q1" value="clinton">Clinton</label>
		<p>
			Which is a State?
		</p>
			<label>
				<input type="radio" name="q2" value="ohio">Ohio</label>
			<label>
				<input type="radio" name="q2" value="san antonio">San Antonio</label>
			<label>
				<input type="radio" name="q2" value="little rock">Little Rock</label>
		<p>
			Which pizza toppings do you like?
		</p>
			<label>
				<input type="checkbox" id="toppings" name="toppings[]" value="pepperoni">pepperoni
			</label>
			<label>
				<input type="checkbox" id="toppings" name="toppings[]" value="mushroom">mushroom
			</label>
			<label>
				<input type="checkbox" id="toppings" name="toppings[]" value="bacon">bacon
			</label>
        <br>
            <label for="cities">Which are Cities in Texas?</label>
            <select id="cities" name="cities[]" multiple>
                <option value="austin">Austin</option>
                <option value="dallas">Dallas</option>
                <option value="miami">Miami</option>
                <option value="sa">San Antonio</option>
            </select>
			<button type="submit">Send</button>	
	</form>

    <form>
    <h2>Select Testing</h2>
        
            <label for="pizza">Do you like Pizza?</label>
            <select id="pizza" name="pizza">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <button type="submit">Send</button>
    </form>								
</body>
</html>
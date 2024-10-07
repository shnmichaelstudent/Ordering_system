<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Order Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            max-width: 400px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        label, select, input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            text-align: center;
        }
        .receipt {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Menu</h2>
    <form method="post" action="process.php">
        <label for="order">Select an order:</label>
        <select id="order" name="order">
            <option value="burger">Burger - 50</option>
            <option value="fries">Fries - 75</option>
            <option value="steak">Steak - 150</option>
        </select>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>

        <label for="cash">Cash:</label>
        <input type="number" id="cash" name="cash" min="1" required>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>

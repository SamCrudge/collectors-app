<?php
require_once "php/functions.php";
if (!empty($_GET['error'])){
    Echo "Please make sure all Field's are correct.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Add More Bread
    </title>
</head>
    <body>
        <nav>
            <a href="index.php">
                Home
            </a>
        </nav>
        <form action="php/createItem.php" method="GET">
            <h1>
                Please fill all Fields.
            </h1>
            <label>
                Name of Bread:
                <input type="text" name="name" required>
            </label>
            <label>
                Type of bread:
                <select id="bread" name="type">
                    <option value="wheat">Wheat</option>
                    <option value="5 Grain">5 Grain</option>
                    <option value="Sourdough">Sourdough</option>
                    <option value="Rye">Rye</option>
                    <option value="cornflour">Cornflour</option>
                </select>
            </label>
            <label>
                Rating out of 10:
                <input type=range name="rating" min=1 max=10 step=1 list=>
                <datalist id=tickmarks>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </datalist>
            </label>
            <label>
                Description of bread:
                <input type="text" name="desc" required>
            </label>
            <label>
                Image url:
                <input type="text" name="imgurl" required>
            </label>
            <input type="submit" name="submit">
        </form>
    </body>
</html>

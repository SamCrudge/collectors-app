<?php
require_once "php/functions.php";
if (!empty($_GET['error'])){
    echo "Please make sure all Field's are correct.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Add More Bread
    </title>
    <link rel="stylesheet" type="text/css" href="css/justAddBread.css">
    <script src="https://kit.fontawesome.com/4b810358f2.js" crossorigin="anonymous"></script>
</head>
    <body>

        <header>
            Just add bread..
        </header>
        <nav>
            <a href="index.php">
                <div class="icon">
                    <i class="fas fa-bread-slice"></i>
                </div>
            </a>
        </nav>
        <div class="breadform">
            <form action="php/createItem.php" method="POST">

                <div class="formitem">
                    <label>Name of Bread:</label>
                    <input type="text" name="name" required>
                </div>
                <div class="formitem">
                    <label>Type of bread:</label>
                    <input type="text" name="type" required>
                </div>
                <div class="formitem">
                    <label>Rating out of 10:</label>
                    <select id="range" name="range">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5">6</option>
                        <option value="5">7</option>
                        <option value="5">8</option>
                        <option value="5">9</option>
                        <option value="5">10</option>
                    </select>
                </div>
                <div class="formitem">
                    <label>Description of bread:</label>
                    <input type="text" name="desc" required>
                </div>
                <div class="formitem">
                    <label>Image url:</label>
                    <input type="text" name="imgurl" required>
                </div>
                <div class="formbutton">
                    <input type="submit" class="formbutton1" name="submit">
                </div>
            </form>
        </div>
    </body>
</html>

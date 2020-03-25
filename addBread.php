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
                    <select id="bread" name="type">
                        <option value="wheat">Wheat</option>
                        <option value="5 Grain">5 Grain</option>
                        <option value="Sourdough">Sourdough</option>
                        <option value="Rye">Rye</option>
                        <option value="cornflour">Cornflour</option>
                    </select>
                </div>
                <div class="formitem">
                    <label>Rating out of 10:</label>
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

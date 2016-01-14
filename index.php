<?php include_once 'function.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Temperature Conversion</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>      
        <h1>TEMPERATURE CONVERSION</h1>
        <div id="container">
            <div id="form_section">
                <form action="" method="post">
                    <?php  
                    $name = array("Fahrenheit","Celsius", "Kelvin");
                    ?>
                    <select name="first_selected_name" id="first_select">
                        <?php foreach($name as $value): ?>
                        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="number" name="given_value" id="given_value" />
                    <select name="second_selected_name" id="first_select">
                        <?php foreach($name as $value): ?>
                        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="submit" name="btn" value="Submit" id="submit" />
                </form>
            </div>    
            <div id="output_section">
                <div class="output">
                    <?php
                       echo form_processing();
                    ?> 
                </div>
            </div>
        </div>
    </body>
</html>

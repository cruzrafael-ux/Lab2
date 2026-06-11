<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action-"index.php" method="get">
            <label> Pay Rate: </label>
            <input type="number" name="pay_rate"/><br/>
            <label> Number of Hours: </label>
            <input type="number" name="num_hrs"/><br/>
            <label> Tax Rate: </label>
            <input type="number" name="tax_rate"/><br/>
            <input type="submit" value="submit"/>
        </form>
        
        <?php
        echo "Hello world from PHP file";
        ?>
    </body>
</html>

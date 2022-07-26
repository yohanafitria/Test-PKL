<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <form action="" method="post">
                    <td>Input</td>
                    <td>:</td>
                    <td><input type="text" name="input"></td>
                </tr>
            <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="PROSES"></td>
                </tr>
            </table>
            <br>
    </form>

    
    <?php
    if(isset($_POST['proses'])){
        $input = $_POST['input'];

        echo "input : .$input";
    }
        
    ?>
    </center>

</body>
</html>
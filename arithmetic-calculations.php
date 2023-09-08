<html>
    <head>
        <title>Arithmetic Calculations</title>
        <style>
            h1{
                font-family: 'Poppins', sans-serif;
                font-size: 30px;
                font-weight: bold;
                color: #1f2122;
                margin-bottom: 25px;
            }
            table{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            td{
                padding:5px;
            }
            label{
                color:#1f2122;
            }
            .container{
                margin-top:60px;
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .form{
                background:url(joakim-nadell-pW1w3RfUJEs-unsplash.jpg);
                background-size:cover;
                text-align: center;
                padding: 60px;
                width: 380px;
                height: 430px;
                border-radius: 23px;
            }
            .submit{
                background-color: #fff;
                font-weight: 400;
                border-radius: 12px;
                border-color: #e75e8d;
            }

            .submit:hover{
                font-weight: 400;
                background-color: #e75e8d;
                color: #1f2122;
                transition: all ease-in-out 0.1s;
            }
            
            input[type=text], input[type=submit] {
                padding: 5px 12px 5px 12px;
                border: solid 1px #888;
                border-radius: 6px;
            }

            .footer{
                display: flex;
                justify-content: center;
            }

        </style>
    </head>
    <body>
        <?php
            if(!empty($_POST['submit'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $submit = $_POST['submit'];

                switch($submit){
                    case "+":
                        $result = $num1 + $num2;
                        break;
                    case "-":
                        $result = $num1 - $num2;
                        break;
                    case "*":
                        $result = $num1 * $num2;
                        break;
                    case "/":
                        $result = $num1 / $num2;
                        break;
                    }
            }
        ?>
        <div class="container">
            <form name="arithmetic" action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="form">
                <h1>Arithmetic Calculations</h1>
                <table border="0" align="center">
                    <tr>
                        <td><label for="num1">First number</label></td>
                        <td><input type="text" name="num1" value="<?php if(!empty($_POST['submit'])){echo $num1;}?>" required></td>
                    </tr>
                    <tr>
                        <td><label for="num2">Second number</label></td>
                        <td><input type="text" name="num2" value="<?php if(!empty($_POST['submit'])){echo $num2;}?>" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="+" class="submit">
                            <input type="submit" name="submit" value="-" class="submit">
                            <input type="submit" name="submit" value="*" class="submit">
                            <input type="submit" name="submit" value="/" class="submit">
                        </td>
                    </tr>
                    <tr>
                        <td><label>Result</label></td>
                        <td>
                            <input type="text" name="result" value="<?php if(!empty($_POST['submit'])){echo $result;}else{echo "";}?>" readonly>
                        </td>
                    </tr>
                </table>
            </form><br>
        </div>
        <span class="footer">&#169; Muhammad Sultan Alhakim. All Rights Reserved</span>
    </body>
</html>
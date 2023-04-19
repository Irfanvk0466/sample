<?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value1="";

    if(isset($_POST['num']))
    {
    $num=$_POST['input'].$_POST['num'];
    }
    else{
        $num="";

    }
    if(isset($_POST['op']))
    {
        $cookie_value1=$_POST['input'];
        setcookie($_cookie_name1,$_cookie_value1, time()+(86400*30),"/");

        $cookie_value2=$_POST['op'];
        setcookie($_cookie_name2,$_cookie_value2, time()+(86400*30),"/");
        $num="";

    }
    if(isset($_POST['equal']))
    {
        $num=$_POST['input'];
        switch($_COOKIE['op'])
        {
            case"+"
                $result=$_COOKIE['num']+$num;
                break;
                case "-"
                    $result=$_COOKIE['num']-$num;
                    break;
                    case "*"
                        $result=$_COOKIE['num']*$num;
                        break;
                        case "/"
                            $result=$_COOKIE['num']/$num;
                            break;
        }
        $num=$result;
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>calculator</title>
        <style>
            body{
                background-color: azure;
            }

            .calc{
                margin: auto;
                background-color: black;
                border: 2px solid whitesmoke;
                width: 24%;
                height: 630px;
                border-radius: 20px;
                box-shadow: 10px 10px 40px;
            }
            .maininput{
                background-color: black;
                border: 1px solid rgb(97, 94, 94);
                height: 125px;
                width: 98.2%;
                font-size: 80px;
                color: whitesmoke;
                font-family: 00;
            }
            .numbtn{
                padding: 12px 35px;
                border-radius: 25px;
                font-weight: 500;
                font-size: small;
                background-color: rgb(243, 238, 238);
            }
                
            .numbtn:hover{
                    background-color: rgb(103, 101, 100);
                    color:rgb(0, 0, 0)
            }

            .calbtn{
                    padding: 9px 30px;
                    border-radius: 50px;
                    font-weight: 500;
                    font-size: 30px;
                    background-color: orange;
            }

            .calbtn:hover{
                background-color: rgb(226, 226, 216);
                color: rgb(118, 46, 46);
            }
            .c{
                padding: 9px 35px;
                border-radius: 50px;
                font-weight: 600;
                font-size: large;
                background-color: red;

            }
            .c:hover{
                background-color: rgb(78, 76, 76);
                color:whitesmoke;
            }
            .equal{
                padding: 30px 35px;
                border-radius: 50px;
                font-weight: 600;
                font-size: large;
                background-color: greenyellow;
            }
            .equal:hover{
                background-color: rgb(65, 67, 65);
                color:whitesmoke;
            }
            
        </style>
    </head>
    <body>
            <div class="calc">
                <form action="" method="post">
                    <br>
                    <input type="text" class="maininput" value="<?php echo @$num ?>"> <br><br>
                    <input type="submit" class="numbtn" name="num"value="7">
                    <input type="submit" class="numbtn" name="num"value="8">
                    <input type="submit" class="numbtn" name="num"value="9">
                    <input type="submit" class="calbtn" name="op"value="+"> <br> <br>
                    <input type="submit" class="numbtn" name="num"value="4">
                    <input type="submit" class="numbtn" name="num"value="5">
                    <input type="submit" class="numbtn" name="num"value="6">
                    <input type="submit" class="calbtn" name="op"value="-"> <br> <br>
                    <input type="submit" class="numbtn" name="num"value="1">
                    <input type="submit" class="numbtn" name="num"value="2">
                    <input type="submit" class="numbtn" name="num"value="3">
                    <input type="submit" class="calbtn" name="op"value="*"> <br> <br>
                    <input type="submit" class="c" name="num"value="c">
                    <input type="submit" class="numbtn" name="num"value="0">
                    <input type="submit" class="numbtn" name="num"value=".">
                    <input type="submit" class="equal" name="num"value="=">
                    <input type="submit" class="calbtn" name="op"value="/">


                </form>
            </div>
    </body>

</html>
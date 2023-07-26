<?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value2="";

    if(isset($_POST['num']))
    {
     $num=$_POST['input'].$_POST['num'] ;
    }
    else{
        $num="";
    }
    if(isset($_POST['op']))
    {
        $cookie_value1=$_POST['input'];
        setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

        $cookie_value2=$_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
        $num="";
    }
    if(isset($_POST['equal']))
    {
        $num=$_POST['input'];
        switch($_COOKIE['op'])
        {
            case "+":
                $result=$_COOKIE['num']+$num;
                break;
                case "-":
                    $result=$_COOKIE['num']-$num;
                    break;
                    case "*":
                        $result=$_COOKIE['num']*$num;
                        break;
                        case "/":
                            $result=$_COOKIE['num']/$num;
                            break;
        }
        $num=$result;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins',sans-serif;
            box-sizing: border-box;
        }
        .container{
            width: 100%;
            height: 100vh;
            background: #e3f9ff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .calculator{
            background: #3a4452 ;
            padding: 20px;
            border-radius: 15px;
        }
        .calculator h2{
            text-align: center;
            font-family: Calibri;
            font-size: 35px;
            text-transform: uppercase;
            color: rgba(4, 168, 250, 0.448);
          
            text-shadow: 1px 1px 1px #7aa2f1,
                1px 2px 1px #0f13dd,
                1px 3px 1px #00b3ff,
                1px 4px 1px #3ec2fa,
                1px 5px 1px #e8f2f3,
                1px 6px 1px #b1e3c2,
                1px 7px 1px #4ac9ff,
            1px 18px 6px rgba(16,16,16,0.4),
            1px 22px 10px rgba(16,16,16,0.2),
            1px 25px 35px rgba(16,16,16,0.2),
            1px 30px 60px rgba(16,16,16,0.4);
        }
        .calculator h2:hover{
            text-align: center;
            color: rgba(236, 51, 18, 0.596);
        }
        .calculator p{
            text-align: center;
            font-family: Calibri;
            font-size: 20px;
            color: rgba(4, 168, 250, 0.448);
        }
        .calculator form input{
            border: 0;
            outline: 0;
            width: 60px;
            height: 60px;
            border-radius: 50px;
            box-shadow: 5px 5px 15px rgba(4, 168, 250, 0.448) ;
            background: transparent;
            font-size: 20px;
            cursor: pointer;
            margin: 10px;
            color: #fff;
        }
        .calculator form input:hover{
            box-shadow: -8px -8px 15px rgba(220, 239, 50, 0.596);
            color: aqua;
        }
        form .display{
            display: flex;
            justify-content: flex-end;
            margin: 20px ,0px;
            padding-bottom: 20px;
        }
        form .display input{
            text-align: right;
            flex: 1;
            font-size: 25px;
            border-radius: 20px;
            padding-right: 6px;
        }
        form input.operator{
            color: #00ffa6;
        }
        form input.operator:hover{
            color: #ffffff;
        }
    </style>
</head>
  <body>
    <div class="container">
        <div class="calculator">
            <h2>Project Calculator</h2>
            <p>Using HTML,CSS,PHP</p>
            <form action="" method="POST">
                <div class="display">
                    <input type="text" name="input" value="<?php echo @$num ?>" >
                </div>
                <div>
                    <input type="submit" name="num" value="7" >
                    <input type="submit" name="num" value="8">
                    <input type="submit" name="num" value="9">
                    <input type="submit" name="op" value="/" class="operator" >
                </div>
                <div>
                    <input type="submit" name="num" value="4"  >
                    <input type="submit" name="num" value="5"  >
                    <input type="submit" name="num" value="6"  >
                    <input type="submit" name="op" value="*" class="operator" >
                </div>
                <div>
                    <input type="submit" name="num" value="1" >
                    <input type="submit" name="num" value="2" >
                    <input type="submit" name="num" value="3" >
                    <input type="submit" name="op" value="-" class="operator" >
                </div>
                <div>
                    <input type="submit" name=" " value="c" >
                    <input type="submit" name="num" value="0" >
                    <input type="submit" name="equal" value="=" class="operator" >
                    <input type="submit" name="op" value="+" onclick="display.value += '+'" class="operator" >
                </div>                    
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
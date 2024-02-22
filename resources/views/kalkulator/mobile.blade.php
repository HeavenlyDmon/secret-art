<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: darkgray;

    }
    table {
        align-content: center;
        margin: auto;
        border-collapse: collapse;
        border: none;
        outline: 5px solid white;
        border: 10px solid black;
        background-color: grey;
        width: 20%;
        padding: 100%;
        border-radius: 10px 10px;
    }
    .display {
        background: grey;
        text-align: center;;
        width: 20%;
        padding: 10px;
        border: 2px solid white;
        cursor: pointer;
        border-radius: 10px;
        font-size: large;
        font-weight: bold;

}
    .display:hover{
        background-color: yellow;
        border-radius: 10px;
        border: 2px solid white;
    }
    td {
        width: 30px;
        padding: 10px;
    }
    tr{
        width: 30px;
        padding: 10px;
    }
    input[type="button"] {
        width: 50px;
        height: 50px;
        background-color: lightgray;
        border: 2px solid black;
        border-radius: 5px;
        font-size: 20px;
        cursor: pointer;
}

        input[type="button"]:hover {
        background-color: yellow;
        border: 2px solid blue;
        color: black;
}


</style>

</head>
<body>
    <h1><center>CALCULATOR</center></h1>
    <center>
    <form name="form1" action="" method="post">
        <input class="display" type="text" name="display" id="">
        <br>
        <br>
<table>
    <tr>
    <td><input type="button" value="AC" onclick="form1.display.value=''" class="operator"></td>
    <td><input type="button" value="." onclick="form1.display.value+='.'"></td>
    <td><input type="button" value="=" onclick="form1.display.value=eval(form1.display.value)"></td>
    <td><input type="button" value="+" onclick="form1.display.value+='+'"></td>
    </tr>
    <tr>
    <td><input type="button" value="1" onclick="form1.display.value+='1'"></td>
    <td><input type="button" value="2" onclick="form1.display.value+='2'"></td>
    <td><input type="button" value="3" onclick="form1.display.value+='3'"></td>
    <td><input type="button" value="x" onclick="form1.display.value+='*'"></td>
    </tr>
    <tr>
    <td><input type="button" value="4" onclick="form1.display.value+='4'"></td>
    <td><input type="button" value="5" onclick="form1.display.value+='5'"></td>
    <td><input type="button" value="6" onclick="form1.display.value+='6'"></td>
    <td><input type="button" value="/" onclick="form1.display.value+='/'"></td>
    </tr>
    <tr>
    <td><input type="button" value="7" onclick="form1.display.value+='7'"></td>
    <td><input type="button" value="8" onclick="form1.display.value+='8'"></td>
    <td><input type="button" value="9" onclick="form1.display.value+='9'"></td>
    <td><input type="button" value="0" onclick="form1.display.value+='0'"></td>
    </tr>
</table>
    </form>
    </center>
</body>
</html>
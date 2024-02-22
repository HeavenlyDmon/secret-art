<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <h1><center>KALKULATOR SEDERHANA</center></h1>
    <center>
        <from action="{{ route('proses.store')}}" method="post">
            @csrf
    <br>
    <table border='1' height='300'>
        <tr>
            <td colspan="2"><center>Angka Pertama : <input type="number" name="nbr1" id=""></center></td>
            <td colspan="2" rowspan="2"><input type="reset"></td>
        </tr>
        <tr>
            <td colspan="2"><center>Angka Kedua   : <input type="number" name="nbr2" id=""></center></td>
        </tr>
        <tr>
            <td colspan="4"><center><label class="hasil">HASIL</label></center></td>
        </tr>
        <tr>
            <td><input type="submit" value="+" name="op"></td>
            <td><input type="submit" value="-" name="op"></td>
            <td><input type="submit" value="x" name="op"></td>
            <td><input type="submit" value="/" name="op"> </td>
        </tr>
        <tr>
            <td colspan="4"><center>
                NAMA     :     Rian Junior
                <br>
                KELAS    :     XII
            </center></td>
        </tr>
    </table>
                            

</center>    
</from>
</body>
</html>
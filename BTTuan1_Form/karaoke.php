<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

        td{
                text-align:center;
                border: solid 1px;
                width: 250px;
                height: 30px;
            }
        h3 {
            color :brown;
            text-align:center;
            font-size: 25px;
            margin-top:10px;
        }
        table{
            margin-top: 50px;
            margin-left:500px;
        }
        #kq{
            color:white;
            font-weight:blod;
        }


</style>
<body>
<?php
        $tong_tien = 0;
        if(isset($_POST["tg_bd"]) && isset($_POST["tg_kt"]))
        {
            $tg_bd = $_POST["tg_bd"];
            $tg_kt = $_POST["tg_kt"];

        }
        else
        {
            $tg_bd = 0;
            $tg_kt = 0;
        }

        if(isset($_POST['tinh']))
        {
             //th1 10-24h
             if ($tg_bd >= 10 && $tg_kt > 10 && $tg_bd <24 && $tg_kt <= 24)
             {   
                 //tg_bd < tg kt
                if ($tg_bd < $tg_kt)
                {
                     //gio ketthuc nho hon hoac bầng 17
                    if ($tg_kt <= 17) {
                        $tong_tien = ($tg_kt - $tg_bd)*20000;
                    }
                    else if($tg_bd<17 && $tg_kt>17){
                        $t1 = (17-$tg_bd)*20000;
                        $t2 = ($tg_kt -17)*45000;
                        $tong_tien = $t1 + $t2;
                    }
                    else {
                        $tong_tien = ($tg_kt - $tg_bd)*45000;
                    }     
              }
                else $tong_tien = 0;
            }
            else $tong_tien = 10;
        }
        else 
        {
            $tong_tien=0;
        }

        if(isset($_POST['tinh'])) {
            if ($tg_bd >= $tg_kt) {
                $ket_qua = "Thời gian bắt đầu phải nhỏ hơn thời gian kết thúc";
            }
            else {
                $ket_qua = "Số tiền bạn cần thành toán:". $tong_tien;
            }
                         //th1 10-24h
        } else {
            $ket_qua="";
        }

             
    ?>
    
    <form action="karaoke.php" id="form1" name= "form1" method ="post">

        <table  align="center">
        <tr bgcolor="red">
    
            <th colspan="2" align="center"><h3><font color="blue">THANH TOÁN TIỀN KARAOKE</font></h3></th>
    
        </tr>
    
        <tr>
            <td width="50px" >Giờ Bắt Đầu</td>
            <td>
                <label for="tg_bd"></label>
                <input type="text " id="tg_bd" size="40" name="tg_bd" value="<?php echo $tg_bd;?>">
            </td>
        </tr>

        <tr>
            <td width="50px" >Giờ Kết Thúc</td>
            <td>
                <label for="tg_kt"></label>
                <input type="text " id="tg_kt" size="40" name="tg_kt" value="<?php echo $tg_kt;?>">
            </td>
        </tr>

        <tr>
            <td width="50px">Tiền Thanh Toán</td>
            <td>
                <label for="tong_tien"></label>
                <input type="text " id="tong_tien" disabled="disabled" size="40" name="tong_tien" value="<?php echo $tong_tien ?>" style="background-color:aqua;" />
            </td>
        </tr>

      

        <tr>
            <td colspan="2" align="center"><input type="submit"  value="Tính Tiền" name="tinh" /></td>
        </tr>
        </table>
        <table width="400" border ="0" align ="center" bgcolor="blue">
            <tr>
                <td><div id = "kq"><?php  echo $ket_qua?></td>
            </tr>
        </table>
        </form>
</body>
</html>
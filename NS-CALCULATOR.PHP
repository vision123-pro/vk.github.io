<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="NS--CALCULATOR.css">

</head>

<body>
    <div class="main">
        <h2>Number System Calculator</h2>
        <div class="main1">
            <form action="" method="post">
                <div class="convt1">


                    <h3>Select Conversion</h3>
                    <select name="calculate" id="box1">
                        <option value="">Select</option>
                        <optgroup label="Decimal Conversion">

                            <option value="Decimal-Binary">Decimal-Binary</option>
                            <option value="Decimal-Octal">Decimal-Octal</option>
                            <option value="Decimal-Hexadecimal">Decimal-Hexadecimal</option>

                        </optgroup>
                        <optgroup label="Binary Conversion">

                            <option value="Binary-Decimal">Binary-Decimal</option>


                        </optgroup>



                        <optgroup label="Octal Conversion">

                            <!-- <option value="Octal-Binary">Octal-Binary</option> -->
                            <option value="Octal-Decimal">Octal-Decimal</option>
                            <!-- <option value="Octal-HexaDecimal">Octal-HexaDecimal</option> -->

                        </optgroup>


                        <optgroup label="Hexadecimal Conversion">

                            <!-- <option value="Hexadecimal-Binary">Hexadecimal-Binary</option> -->
                            <!-- <option value="Hexadecimal-Octal">Hexadecimal-Octal</option> -->
                            <option value="Hexadecimal-Decimal">Hexadecimal-Decimal</option>

                        </optgroup>




                    </select>
                </div>
                <!-- <div class="convt2">


                <h3>To</h3>
                <select name="converter2" id="box2">
                    <option value="Binary">Binary</option>
                    <option value="Decimal">Decimal</option>
                    <option value="Octa">Octa</option>
                    <option value="Hexadecimal">Hexadecimal</option>
                </select>
            </div> -->

        </div>
        <h3 class="enternumber">Enter Number</h3>
        <div class="inputbox">

            <form action="" method="post">



                <input type="text" class="input" name="number"> <br>
                <input type="submit" value="Convert" class="btn" name="submit">

                <input type="reset" class="btn">
            </form>
            <h3 class="result1">Your Result</h3>
            <div class="result">

                <?php

                if (isset($_POST['submit'])) {
                    if (!empty($_POST['number'])) {
                        $inputstored = $_POST['number'];
                        $calculate = $_POST['calculate'];
                        switch ($calculate) {

                            case "Decimal-Binary":
                                $result = decbin($inputstored);
                                echo $result;
                                break;


                            case "Decimal-Octal":
                                $result = decoct($inputstored);
                                echo $result;
                                break;

                            case "Decimal-Hexadecimal":
                                $result = dechex($inputstored);
                                echo $result;
                                break;


                            case "Binary-Decimal":
                                $result = bindec($inputstored);
                                echo $result;
                                break;

                            case "Octal-Decimal":
                                $result = octdec($inputstored);
                                echo $result;
                                break;


                            case "Hexadecimal-Decimal":
                                $result = hexdec($inputstored);
                                echo $result;
                                break;



                            default:
                        }
                    }
                }
                ?>

            </div>
        </div>


    </div>



</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            background-color: rgb(0, 129, 119);
        }

        .main {
            width: 80%;
            height: 325px;
            background-color: cadetblue;
            margin: 0px auto;

        }

        .main h2 {
            text-align: center;
            padding: 8px;
        }

        .main1 {
            width: 80%;
            background-color: rgb(218, 214, 0);
            margin: 0 auto;
            text-align: center;
            display: flex;
            padding: 10px;
            justify-content: center;

        }

        #box1,
        #box2 {
            background-color: rgb(53, 49, 53);
            padding: 7px;
            font-size: 18px;
            margin-left: 12px;
            color: white;

        }

        .convt1 h3 {
            text-align: center;
            color: darkblue;
            font-size: 20px;
            letter-spacing: 1px;

        }

        .enternumber {
            text-align: center;
            padding: 15px 0px 5px 0px;
        }

        .input {
            width: 20%;
            background-color: rgb(224, 220, 224);
            height: 35px;
            margin: 0px auto;
            border: none;
            outline: none;
            border: 2px solid black;
            text-align: center;
        }

        .inputbox {

            text-align: center;
        }

        .btn {

            padding: 6px 10px;
            font-size: 15px;
            margin: 5px;
        }

        .result1 {
            padding: 7px;

        }

        .result {
            width: 20%;
            height: 35px;
            background-color: rgb(231, 217, 220);
            text-align: center;
            margin: 0px auto;
            padding: 10px;
            border: 2px solid black;

        }
    </style>

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
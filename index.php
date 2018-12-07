<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="shortcut icon" href="./style/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Online Number Converter | Decimal to Binary, hex and octal </title>
    <meta name="description" content ="Online calculator and number convertor to all base. Binary, decimal, hex, octal converting.">
</head>
<body>

    <?php include './parts/header.php' ?>
    
    <div class="container-fluid">
    <div class="main">
    <center><h1>Online number converter: Binary, Decimal, Hex, Octal</h1></center>
    </div>
        
        <div class="row justify-content-center main">
                <div class="col-12 col-md-5">
                    <form class="verticalform" id="form1" onsubmit="return false">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Decimal</strong> (10): </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="decimal" placeholder="Enter the number here.." autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Binary</strong> (2): </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="binary">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Octal</strong> (8): </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="octal">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><strong>Hex</strong> (16): </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="hex">
                            </div>
                        </div>

                        <center><button type="submit" id="button1" class="btn btn-outline-dark">Enter!</button></center>
                    </form>
                </div>

                <div class="col-12 col-md-7">
                    <form class="verticalform" id="form2" onsubmit="return false">

                        <div class="form-row">
                                <div class="form-group col-md-8">
                                <label>Number:</label>
                                <input type="text" class="form-control" id="number" placeholder="Enter the number here..">
                                </div>
                                <div class="form-group col-md-2">
                                <label>Base From:</label>
                                <input type="number" class="form-control" id="basefrom" min="2" max="32" value="10">
                                </div>
                                <div class="form-group col-md-2">
                                <label>Base To:</label>
                                <input type="number" class="form-control" id="baseto" min="2" max="32" value="2">
                        </div>
                        <div class="form-group col-md-8">
                            <label>Result:</label>
                            <input type="text" class="form-control" id="result">
                        </div>
                            </div>
                        <center><button type="submit" id="button2" class="btn btn-outline-dark">Enter!</button></center>
                    </form>
                </div>
    </div>

</body>
    <?php include './parts/footer.php' ?>
    <script src="./jsfiles/homepage/liveCalc4.js"></script>
    <script src="./jsfiles/homepage/frombasetobase.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR CODE</title>
</head>
<body>
    
    <div>
        <div class="logo">
            <img src="{{url('/Photo/logo.jpg')}}" alt="Image">
        </div>
        
        <div class="my-box">
            {!! QrCode::size(100)->generate($str); !!}
        </div>
        <p class="text">Printed <b>{{\Carbon\Carbon::now()}}</b></p>
        <p class="text">Printed By {!! $name !!}</p>
        <hr class="text" style="border-top: dotted 1px; width: 50mm" />
        <p class="text"><b>FUN PLACE TO GRILL</b></p>
        <hr class="text" style="border-top: dotted 1px; width: 50mm" />
    </div>

</body>
</html>

<style>

    body{
        width: 74mm;
        height: 105mm;
        border: 5px solid black;
    }

    img {
        border-radius: 4px;
        padding: 5px;
        width: 100px;
    }

    .my-box{
        width: 100px;
        padding: 10px;
        border: 5px solid black;
        border-radius: 25px;
        margin: auto;
    }

    .logo {
        margin: auto;
        display: flex; justify-content: center;
    }
    
    .text {
        text-align:center;
    }

}

</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>weather</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        *,
        *:after,
        *:before {
            box-sizing: border-box;
        }

        body {
            background-image: url('https://thumbs.gfycat.com/ForcefulSpiffyAppaloosa-mobile.mp4');
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 98vh;
        }

        .widget {
            background: linear-gradient(to bottom right, #ffffff3f 20%, rgba(255, 255, 255, 0.178));
            width: 900px;
            height: 450px;
            border-radius: 30px;
            box-shadow: 0px 60px 80px -20px rgba(0, 0, 0, 0.4);
            position: relative;
            overflow: hidden;
        }

        .pictoBackdrop {
            position: absolute;
            height: 560px;
            width: 560px;
            border-radius: 50%;
            right: -40px;
            top: -90px;
        }

        .pictoFrame {
            position: absolute;
            background: #34373e;
            border-radius: 50%;
            box-shadow: 0px 50px 60px -20px rgb(0, 0, 0);
            height: 336px;
            width: 336px;
            right: 80px;
            top: 25px;
        }

      
        

        .details {
            font-family: Roboto, sans-serif;
            display: flex;
            flex-direction: column;
            margin-top: 30px;
            margin-left: 60px;
        }

        .temperature {
            color: rgb(0, 0, 0);
            font-weight: 300;
            font-size: 10em;
        }

        .summary {
            color: #000000;
            font-size: 2em;
            font-weight: 300;
            width: 260px;
            margin-top: -16px;
            padding-bottom: 16px;
            border-bottom: 2px solid #00ccff;
            margin-left: 8px;
        }

        .summaryText {
            margin: 0;
            margin-left: 0;
        }

        .precipitation,
        .wind {
            color: #000000;
            font-size: 1.6em;
            font-weight: 300;
            margin-left: 8px;
        }

        .precipitation {
            margin-top: 16px;
        }

        .wind {
            margin-top: 4px;
        }
    </style>
</head>

<body>
      
    <div class="container">
        <div>
            <div class="widget"> <form style="margin-left:30px;"  method="get">
        <input
                type="text" name="search" style="height:30px;width:200px;margin-left:25px;border-radius:10px" placeholder="Enter city name" >
        </form>
                <div class="details"><b style="font-size: 20">{{ $json['name'] }}, {{ $json['sys']['country'] }}
                 
                        </b>
                    <div class="temperature">
                        {{ $json['main']['temp'] }}°c</div>
                    <div class="summary">
                        <div class="summaryText">{{ $json['weather']['0']['description'] }}</div>
                    </div>
                    <div class="precipitation">Pressure: {{ $json['main']['pressure'] }}</div>
                    <div class="wind">Wind: {{ $json['wind']['speed'] }}</div>
                    <div class="wind">Visibility: {{ $json['visibility'] / 1000 }} km</div>
                </div>
            </div>
        </div>


</body>



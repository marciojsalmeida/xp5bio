<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XP5bio - {{ $title }}</title>

    <style type="text/css">
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
            font-family: Helvetica, Arial;
            color: {{ $font_color }};
            background: {{ $bg }};
        
        }
        .profileImage img{
            widows: auto;
            height: 100px;
        }
        .profileTitle{
            font-size: 17px;
            font-weight: bold;
            margin-top: 10px;
        }
        .profileDescription{
            font-size: 15px;
            margin-top: 5px;
        }
        .linkArea{
            width: 100%;
            margin: 50px 0;
        }
        .linkArea a{
            display: block;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .linkArea .linksquare{
            border-radius: 0;
        }

        .linkArea .linkrounded{
            border-radius: 50px;
        }
        .banner a{
            color: {{ $font_color }}
        }
    </style>
</head>
<body>

    <div class="profileImage">
        <img src="{{ $profile_image }}" alt="">
    </div>
    <div class="profileTitle">
        {{ $title }}
    </div>
    <div class="profileDescription">
        {{ $description }}
    </div>
    <div class="linkArea">
        @foreach($links as $link)
        <a 
            href="{{ $link->href }}"
            class="link{{$link->op_border_type}}"
            style="background-color: {{ $link->op_bg_color }};color:{{ $link->op_text_color}}"
            target="_blank"
        >
        {{ $link->title }}
        </a>
        @endforeach
    </div>

    <div class="banner">
       <p>Feito com ♥ por <a href="">Xp5 Sistemas</a> </p> 
    </div>
    
    @if(!empty($fb_pixel))

        {{-- // código do pixel do faceboo vai aqui --}}
        {{-- {{ $fb_pixel}} --}}

    @endif
</body>
</html>
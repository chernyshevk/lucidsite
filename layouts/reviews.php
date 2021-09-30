<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <title>blablablka</title>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
<!---->
<!--</head>-->
<!--<style>-->
<!--    #slider{ /*положение слайдера*/-->
<!--        position: relative;-->
<!--        text-align: center;-->
<!--        /*top: 10px;*/-->
<!--    }-->
<!--    #slider{ /*центровка слайдера*/-->
<!--        margin: 0 auto;-->
<!--    }-->
<!--    #slider article{ /* все изображения справа друг от друга*/-->
<!--        width: 20%;-->
<!--        float: left;-->
<!--    }-->
<!--    #slider .image{ /*устанавливает общий размер блока с изображением*/-->
<!--        width: 100%;-->
<!--        line-height: 0;-->
<!--    }-->
<!--    #overflow{ /*скрывает все, что находится за пределами блока*/-->
<!--        width: 100%;-->
<!--        overflow: hidden;-->
<!--    }z-->
<!--    article img{ /*размер изображений слайдера*/-->
<!--        width: 100%;-->
<!--    }-->
<!--    #desktop:checked ~ #slider{ /* размер своего слайдера*/-->
<!--        max-width: 1170px; /*макс длинна*/-->
<!--    }-->
<!--    /* настройка переключения для левой стрелки*/-->
<!--    /*если свич1-5 активны, то идет обращение в лейблу из блока с ид контролс*/-->
<!--    #switch1:checked ~ #controls label:nth-child(5),-->
<!--    #switch2:checked ~ #controls label:nth-child(1),-->
<!--    #switch3:checked ~ #controls label:nth-child(2),-->
<!--    #switch4:checked ~ #controls label:nth-child(3),-->
<!--    #switch5:checked ~ #controls label:nth-child(4){-->
<!--        background: #16151B no-repeat; /*заливка фона картинкой без повторений*/-->
<!--        float: left;-->
<!--        margin: 0 0 0 -84px; /*сдвиг слева*/-->
<!--        display: block;-->
<!--        height: 68px;-->
<!--        width: 68px;-->
<!--    }-->
<!--    /*переключения для правой стрелки*/-->
<!--    #switch1:checked ~ #controls label:nth-child(2),-->
<!--    #switch2:checked ~ #controls label:nth-child(3),-->
<!--    #switch3:checked ~ #controls label:nth-child(4),-->
<!--    #switch4:checked ~ #controls label:nth-child(5),-->
<!--    #switch5:checked ~ #controls label:nth-child(1){-->
<!--        background: #16151B no-repeat;-->
<!--        float: right;-->
<!--        margin: 0 -84px 0 0; /*сдвиг вправо*/-->
<!--        display: block;-->
<!--        height: 68px;-->
<!--        width: 68px;-->
<!--    }-->
<!--    label, a{ /*при наведении на стрелки или переключетали - курсор изменится*/-->
<!--        cursor: pointer;-->
<!--    }-->
<!--    .all input{ /*скрывает стандартные инпуты на странице*/-->
<!--        display: none;-->
<!--    }-->
<!--    /*позиция изображения при активации  переключателя*/-->
<!--    #switch1:checked ~ #slides .image{-->
<!--        margin-left: 0;-->
<!--    }-->
<!--    #switch2:checked ~ #slides .image{-->
<!--        margin-left: -100%;-->
<!--    }-->
<!--    #switch3:checked ~ #slides .image{-->
<!--        margin-left: -200%;-->
<!--    }-->
<!--    #switch4:checked ~ #slides .image{-->
<!--        margin-left: -300%;-->
<!--    }-->
<!--    #switch5:checked ~ #slides .image{-->
<!--        margin-left: -400%;-->
<!--    }-->
<!--    /*положение блока всех управляющих элементов*/-->
<!--    #controls{-->
<!--        margin: -25% 0 0 0;-->
<!--        width: 100%;-->
<!--        height: 50px;-->
<!--    }-->
<!--    #active label{ /*стиль отдельного переключателя*/-->
<!--        border-radius: 10px; /*округление углов*/-->
<!--        display: inline-block; /*расположение в строку*/-->
<!--        width: 15px;-->
<!--        height: 15px;-->
<!--        background-color: blue;-->
<!--    }-->
<!--    #active{ /*расположение блока с переклюючателями*/-->
<!--        margin: 23% 0 0;-->
<!--        text-align: center;-->
<!--    }-->
<!--    #active  label:hover{ /*поведение чекбоксатпри наведении*/-->
<!--        background-color: #328CA6;-->
<!--        border-color: #777; !important;-->
<!--    }-->
<!--    /*цвет активного лейбла при активации чекбокса*/-->
<!--    #switch1:checked ~ #active label:nth-child(1),-->
<!--    #switch2:checked ~ #active label:nth-child(2),-->
<!--    #switch3:checked ~ #active label:nth-child(3),-->
<!--    #switch4:checked ~ #active label:nth-child(4),-->
<!--    #switch5:checked ~ #active label:nth-child(5){-->
<!--        background: #18a3dd;-->
<!--        border-color: #18a3dd; !important;-->
<!--    }-->
<!--    #slider .image{ /*анимация пролистывания изображений*/-->
<!--        transition: all 800ms  cubic-bezier(0.770, 0.000, 0.175, 1.000);-->
<!--    }-->
<!--    #controls label:hover{ /*прозрачность стрелок при наведении*/-->
<!--        opacity: 0.6;-->
<!--    }-->
<!--    #controls label{ /*прозрачность стрекло при отводе курсора*/-->
<!--        transition: opacity 0.2s ease-out;-->
<!--    }-->
<!---->
<!--</style>-->
<!--<body>-->
<!--        <div class="all">-->
<!--            <input checked type="radio" name="respond" id="desktop" label="">-->
<!--            <article id="slider">-->
<!--                <input checked type="radio" name="respond" id="desktop">-->
<!--                <input type="radio" name="respond" id="desktop">-->
<!--                <input type="radio" name="respond" id="desktop">-->
<!--                <input type="radio" name="respond" id="desktop">-->
<!--                <input type="radio" name="respond" id="desktop">-->
<!---->
<!--                <div id="slides">-->
<!--                    <div id="overflow">-->
<!--                        <div class="image">-->
<!--                            <article><img src="images/header_bg.jpg"></article>-->
<!--                            <article><img src="images/header_bg.jpg"></article>-->
<!--                            <article><img src="images/header_bg.jpg"></article>-->
<!--                            <article><img src="images/header_bg.jpg"></article>-->
<!--                            <article><img src="images/header_bg.jpg"></article>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div id="controls">-->
<!--                    <label for="switch1"></label>-->
<!--                    <label for="switch2"></label>-->
<!--                    <label for="switch3"></label>-->
<!--                    <label for="switch4"></label>-->
<!--                    <label for="switch5"></label>-->
<!--                </div>-->
<!---->
<!--                <div id="active">-->
<!--                    <label for="switch1"></label>-->
<!--                    <label for="switch2"></label>-->
<!--                    <label for="switch3"></label>-->
<!--                    <label for="switch4"></label>-->
<!--                    <label for="switch5"></label>-->
<!--                </div>-->
<!--            </article>-->
<!--        </div>-->
<!--</body>-->
<!--</html>-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!--<style>-->
<!--    body{-->
<!--        margin: 0;-->
<!--        padding: 0;-->
<!--        border-color: #16151B;-->
<!--    }-->
<!--    .slider{-->
<!--        width: 100%;-->
<!--        height: 600px;-->
<!--        overflow: hidden;-->
<!--        /*border: 10px solid red;*/-->
<!--    }-->
<!--    .middle{-->
<!--        position: absolute;-->
<!--        /*top: 50%;*/-->
<!--        /*left: 50%;*/-->
<!--        /*transform: translate(-50%, -50%);*/-->
<!--    }-->
<!--    .navigation{-->
<!--        position: absolute;-->
<!--        bottom: 16px;-->
<!--        left: 50%;-->
<!--        transform: translateX(-50%);-->
<!--        display: flex;-->
<!--    }-->
<!--    .bar{-->
<!--        height: 8px;-->
<!--        width: 30px;-->
<!--        margin: 6px;-->
<!--        cursor: pointer;-->
<!--        background-color: #16151B;-->
<!--        opacity: .7;-->
<!--        border-radius: 10px;-->
<!--        transition: all .4s ease;-->
<!--    }-->
<!--    .bar:hover{-->
<!--        opacity: .8;-->
<!--        transform: scale(1.1);-->
<!--    }-->
<!--    input[name="r"]{-->
<!--        position: absolute;-->
<!--        visibility: hidden;-->
<!--    }-->
<!--    .slides{-->
<!--        width: 400%;-->
<!--        height: 100%;-->
<!--        display: flex;-->
<!--    }-->
<!--    .slide{-->
<!--        width: 25%;-->
<!--        transition: all .6s ease;-->
<!--    }-->
<!--    .slide img{-->
<!--        width: 100%;-->
<!--        height: 100%;-->
<!--    }-->
<!---->
<!--    #r1:checked ~ .s1{-->
<!--        margin-left: 0%;-->
<!--    }-->
<!--    #r2:checked ~ .s1{-->
<!--        margin-left: 25%;-->
<!--    }-->
<!--    #r3:checked ~ .s1{-->
<!--        margin-left: 50%;-->
<!--    }-->
<!--    #r4:checked ~ .s1{-->
<!--        margin-left: 75%;-->
<!--    }-->
<!--</style>-->
<!--<body>-->
<!--    <div class="slider middle">-->
<!---->
<!--        <div class="slides">-->
<!---->
<!--            <input type="radio" name="r" id="r1" checked>-->
<!--            <input type="radio" name="r" id="r2">-->
<!--            <input type="radio" name="r" id="r3">-->
<!--            <input type="radio" name="r" id="r4">-->
<!---->
<!--            <div class="slide s1"><img src="images/header_bg.jpg" alt=""></div>-->
<!--            <div class="slide"><img src="images/macbook.jpeg" alt=""></div>-->
<!--            <div class="slide"><img src="images/header_bg.jpg" alt=""></div>-->
<!--            <div class="slide"><img src="images/header_bg.jpg" alt=""></div>-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="navigation">-->
<!--            <label for="r1" class="bar"></label>-->
<!--            <label for="r2" class="bar"></label>-->
<!--            <label for="r3" class="bar"></label>-->
<!--            <label for="r4  " class="bar"></label>-->
<!--        </div>-->
<!---->
<!--    </div>-->

<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:700px; background-image: url('./images/quality_bg.png')">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-12">
                    <a href="#"><p align="center">PRODUCT OVERVIEW</p></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <H1 align="center" style="color: #EEEEEE">List of Amazing Features</H1>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <p style="color: #EEEEEE">Once upon a time all the rivers combined to protest <br>
                            against the action of the Sea in making their water salt. <br>
                            "When we come to you", said they to the Sea</p>
                        <img src="images/LegoHead.png" alt="" style="float: left">
                        <p style="color: #EEEEEE; float: left"> John Doe</p> <br>
                        <h5 style="color: #EEEEEE; float: left">CEO, THE REVERS COMPANY</h5>
                    </div>
                    <div class="col-5">
                        <p style="color: #EEEEEE">Once upon a time all the rivers combined to protest <br>
                            against the action of the Sea in making their water salt. <br>
                            "When we come to you", said they to the Sea</p>
                        <img src="images/BoyHead.png" alt="" style="float: left">
                        <p  style="float: left; color: #EEEEEE"> John Doe</p> <br>
                        <h5 style="color: #EEEEEE">CEO, THE REVERS COMPANY</h5>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div class="carousel-item" style="height: 600px">
            </div>
            <div class="carousel-item" style="height: 600px">
                <img src="" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</body>
</html>
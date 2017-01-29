<!DOCTYPE html>
<html>
<head>
    
    <link href="themes/3/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/3/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .cap  {width:190px;height:240px;display:inline-block;background:white url(images/caption1.gif) no-repeat 0 0;border-radius:4px;}
        .cap2 {background-image:url(images/caption2.gif)}
        .cap3 {background-image:url(images/caption3.gif)}
        .cap4 {background-image:url(images/caption4.gif)}
    </style>
</head>
<body>

    <div id="sliderFrame">
        <div id="slider">
            <img src="images/slider-1.jpg" alt="#htmlcaption1" /></a>
            <a class="lazyImage" href="images/slider-2.jpg" title="#htmlcaption2">slide 2</a>
                <b data-src="images/slider-3.jpg" data-alt="#htmlcaption3">Image Slider</b>
            </a>
            <a class="lazyImage" href="images/slider-4.jpg" title="#htmlcaption4">slide 4</a>
        </div>
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb"><img src="images/thumb-1.gif" /></div>
            <div class="thumb"><img src="images/thumb-2.gif" /></div>
            <div class="thumb"><img src="images/thumb-3.gif" /></div>
            <div class="thumb"><img src="images/thumb-4.gif" /></div>
        </div>
        <!--captions-->
        <div style="display: none;">
            <div id="htmlcaption1">
                <div class="cap"></div>
            </div>
            <div id="htmlcaption2">
                <div class="cap cap2"></div>
            </div>
            <div id="htmlcaption3">
                <div class="cap cap3"></div>
            </div>
            <div id="htmlcaption4">
                <div class="cap cap4"></div>
            </div>
        </div>
    </div>


</body>
</html>

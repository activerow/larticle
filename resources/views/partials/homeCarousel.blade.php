<div id="carouselDemo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#carouselDemo" data-slide-to="0" class="active"></li>
        <li data-target="#carouselDemo" data-slide-to="1"></li>
        <li data-target="#carouselDemo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/homeCarousel/carousel-1.jpg') }}" class="img-fluid">
            <div class="carousel-caption">
                <h3>Caption Header 1</h3>
                <p>Caption Content 1</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/homeCarousel/carousel-2.jpg') }}" class="img-fluid">
            <div class="carousel-caption">
                <h3>Caption Header 2</h3>
                <p>Caption Content 2</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/homeCarousel/carousel-3.jpg') }}" class="img-fluid">
            <div class="carousel-caption">
                <h3>Caption Header 3</h3>
                <p>Caption Content 3</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a href="#carouselDemo" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a href="#carouselDemo" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

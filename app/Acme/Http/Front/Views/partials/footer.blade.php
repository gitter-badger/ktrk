<footer class="footer">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <ul>
                                <li><a href="#">{{ trans('site.Homepage') }}</a></li>
                                <li><a href="#">КТРК</a></li>
                                <li><a href="#">Видеопортал</a></li>
                                <li><a href="#">Телепрограмма</a></li>
                                <li><a href="#">{{ trans('site.BaikoochuKenesh') }}</a></li>
                                <li><a href="#">{{ trans('site.RedKenesh') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12 copy"><i class="fa fa-copyright"></i>2015 {{ trans('site.TradeMark') }}</div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>

<script>
    $(document).ready(function(){
        $(".search-toggle").click(function(){
            $(".logo-block").addClass("search-show");
            $(".form-search").addClass("visible");
        });
        $(".close-search").click(function(){
            $(".logo-block").removeClass("search-show");
            $(".form-search").removeClass("visible");
        });
    });
</script>

<script type="text/javascript" src="{{ asset('filter/js/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('filter/js/jquery.mixitup.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

<!--Carousel-->
<script>
    $('.carousel-post').slick({
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
    $('.carousel-reporter').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
    });
    $('.carousel-slick').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500
    });
    $('.carousel-director').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000
    });
</script>

<!--<script src="{{-- asset('jwplayer/jwplayer.js') --}}"></script>
<script>jwplayer.key="tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>

<script type="text/javascript">

    var playerInstance = jwplayer("player");

//    $('#playerPlay').click(function(){
//        playerInstance.play();
//    });
    $('#playerStop').click(function(){
        playerInstance.stop();
    });

    playerInstance.setup({
        playlist: [{
            image: "{{-- asset('images/live_bg.png') --}}",
            sources: [{
                file: "rtmp://212.112.96.233:1936/live/ktrk.stream"
            }]
        }],
        width: "640",
        height: "360",
        aspectratio: "16:9",
        primary: "flash",
        skin: {
            name: "five"
        },
        stretching: "exactfit"
    });
</script> -->

<script>
    var toggleSlide = function(){
        $(".main-nav ul.active").removeClass('active')
                .next().add(".main-nav ul:first").last().addClass("active");
    }
    setInterval(toggleSlide, 5000);
</script>

@yield('footerScript')

</body>
</html>
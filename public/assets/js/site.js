(function($) {
    $.extend($.fx.step,{
        backgroundPosition: function(fx) {
            if (fx.state === 0 && typeof fx.end == 'string') {
                var start = $.curCSS(fx.elem,'backgroundPosition');
                start = toArray(start);
                fx.start = [start[0],start[2]];
                var end = toArray(fx.end);
                fx.end = [end[0],end[2]];
                fx.unit = [end[1],end[3]];
            }
            var nowPosX = [];
            nowPosX[0] = ((fx.end[0] - fx.start[0]) * fx.pos) + fx.start[0] + fx.unit[0];
            nowPosX[1] = ((fx.end[1] - fx.start[1]) * fx.pos) + fx.start[1] + fx.unit[1];
            fx.elem.style.backgroundPosition = nowPosX[0]+' '+nowPosX[1];

            function toArray(strg){
                strg = strg.replace(/left|top/g,'0px');
                strg = strg.replace(/right|bottom/g,'100%');
                strg = strg.replace(/([0-9\.]+)(\s|\)|$)/g,"$1px$2");
                var res = strg.match(/(-?[0-9\.]+)(px|\%|em|pt)\s(-?[0-9\.]+)(px|\%|em|pt)/);
                return [parseFloat(res[1],10),res[2],parseFloat(res[3],10),res[4]];
            }
        }
    });
})(jQuery);





$(window).bind('scroll',parallaxScroll);

    var show = false;
    var w = ($(window).width() / 2)-50;
    var h = ($(window).height() * 0.95)-200;
    var nbb = 70;
    var $document = $(document);
    $('#menu').bind('click', function(e){
        e.preventDefault();

        menuOpen();
        return false;
    });
    Grid.init();

    var $topMenu = $('#topMenuArea ul.nav');

    function showTopMenu() {
        if(! isMobileDevice()) {
            $topMenu.show().delay(500).fadeTo(1000, 1);
        } else {
            $topMenu.hide();
        }
    }

    function isMobileDevice()
    {
        return $document.width() <= 768
    }

    showTopMenu();
    function menuOpen() {
        expand();
        $('#menuArea').transition({height:h+'px'});
        $topMenu.hide();
        $('#menuClose').delay(400).transition({x:'-'+nbb+'px'}).bind('click', menuClose);
        $('#mainMenu li').each(function(k){
            if(k !== 0) {
                $(this).delay(k*100).transition({y:k*50+'px',opacity:1})
            } else {
                $(this).transition({opacity:1})
            }
            if(k === $('#mainMenu li').length-1) {
                $('#socialLinks').delay(k*150).fadeIn();
            }
        });
    }
    function menuClose(a) {
        if(a !== undefined) {
            show = false;
        } else {
            show = true;
        }

        //console.log('menuclose scroll', show)
        contract(show);
        $('#menuArea').delay(500).transition({height:'0px'});
        $('#mainMenu li').each(function(k){
            if(k !== 0) {
                var n = $('#mainMenu li').length - k;
                $(this).delay(n*100).transition({y:'0px',opacity:0})
            } else {
                $(this).transition({opacity:0})
            }
            
        });
    }
    function parallaxScroll(){

            var scrolled = window.pageYOffset;
            var $img = $('.carousel-inner > .item > .img');
            var toScroll = (50 - ( (scrolled/$img.height()*1.9)*100 )) ;

            $img.css('background-position','50% '+(toScroll )+'%');
            var max = 100;
            if(scrolled > max && show === false) {
                contract();
            }
            //console.log('paralax scroll', show)
            if(scrolled < max && show === true) {
                expand();
            }

    }
    function contract(a) {

                show = (a !==undefined) ? false : true;
                var nbw = w - 120;
                $('#socialLinks').fadeOut();
                $('.navbar-wrapper .navbar ').transition({ paddingTop: '0px',paddingBottom: '0px', opacity:'0.8'}).transition({ height:'50px'}).find('#menu').find('i').eq(1).delay(200).transition({x:'-'+nbb+'px'}).end().eq(0).delay(400).transition({x:'-'+nbb+'px'}).end().eq(2).delay(600).transition({x:'-'+nbb+'px'});
                $('#lgo').transition({ width:'50px',height:'50px'}).transition({x:'-'+w+'px'});

                $('.navbar-brand').transition({y:'-35px'}).transition({x:'-'+nbw+'px'}).find('span').transition({opacity:'0'});
                $('#menuArea').transition({height:'0px'});
                $('#menuClose').delay(100).transition({x:'0px'});
                $('.og-open').delay(100).transition({x:'-'+nbb+'px'});
                $topMenu.css('opacity', 0).hide();

    }
    function expand() {
                show = false;
                var logoWidth = isMobileDevice() ? 100 : 200;
                $('.navbar-wrapper .navbar ').css({ height:'auto' }).transition({ paddingTop: '0px',paddingBottom: '0', opacity:'1'}).find('#menu').find('i').eq(1).transition({x:'0px'}).end().eq(0).delay(200).transition({x:'0px'}).end().eq(2).delay(400).transition({x:'0px'});
                $('#lgo').transition({x:'0'}).transition({ width:logoWidth+'px',height:logoWidth+'px'});
                $('.navbar-brand').transition({x:'0px'}).transition({y:'0px'}).transition({opacity:'1'}).find('span').transition({opacity:'1'});
                $('.og-open').delay(100).transition({x:'0px'});
                showTopMenu();
    }




$(function() {
    var scrollTo = true;
    var oldArticleGoes = '-';
    var newArticleGoes = '+';
    var amount = $(document).width() + $('article').width();
    $(document).pjax('.js-pjax-menu a, .pjax a', '#pjax-container', {
            fragment: '#pjax-container',
            timeout:5000
        })
        .on('pjax:click',function(a){
            $('a').removeClass('active');
            $(a.target).addClass('active');
            $.pjax.defaults.scrollTo = 0;
            if($(a.target).parent().parent().hasClass('pager') || $(a.target).hasClass('inline')) {
                $.pjax.defaults.scrollTo = false;
                scrollTo = false;
                oldArticleGoes = $(a.target).attr('rel') == 'next' ? '-' : '+';
                newArticleGoes = $(a.target).attr('rel') == 'next' ? '+' : '-';
            }

        })
        .on('pjax:start',function(){
            if(!scrollTo){
                $('article.blog-post').transition({x:oldArticleGoes+amount+'px'}).transition({ opacity: 0 });
            }
        }).on('pjax:end',function(){
        if(!scrollTo){
            $('article.blog-post').css('transform', 'translate('+newArticleGoes+amount+'px, 0px)').transition({x:newArticleGoes+'0px'}).transition({ opacity: 1 });
        }
        menuClose();
        setTimeout(function(){
            Grid.init();
        },1000);

    });
    $.goup();
});


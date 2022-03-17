(function($) {
   
    $(document).ready(function(){
        $('.select-beneficios').on('click', function(){
            if(!$(this).hasClass('activo')) {
                var pointer = $(this).attr('class').split(' ').pop();
                // console.log(pointer);
                $('.contenido-beneficios.activo').fadeOut(300);
                $('.contenido-beneficios.activo').removeClass('activo');
                $('.contenido-beneficios.' + pointer).addClass('activo');
                $('.contenido-beneficios.activo').delay(300).fadeIn(300);
                $('.select-beneficios.activo').removeClass('activo');
                $(this).addClass('activo');
            }
        });

        $('.arrow-slider').on('click', function(){
            
            var target = $(this).data('target');
            console.log(target);
            if($(this).hasClass('left')) {
                $('.' + target + ' .slider').flickity('previous');
            } else if ($(this).hasClass('right')) {
                $('.' + target + ' .slider').flickity('next');
            }
        });


    //Play al triggerear el popup

        $('.boton-video').on('click', function(){
            var popup = $(this).attr('href');
            $(popup + ' video').trigger('play');
        })

        $('.banner-video').on('click', function(){
            var popup = $(this).find('a').attr('href');
            $(popup + ' video').trigger('play');
        }) 

    //Pause al hacer click fuera del popup / cerrarlo

        $('body').on('click', '.mfp-wrap', function(e){
            if($('.mfp-wrap').find('div[id^="video-"]')) {
                if (!$(e.target).is("video")) {
                    $('div[id^="video-"] video').trigger('pause');
                }
            }
        });
    });
})( jQuery );
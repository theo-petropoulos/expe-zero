$(function(){
    let ordre = 1
    let carrousel_interval
    let run_carrousel = function(){
        carrousel_interval = setInterval(() => {
            ordre ++
            if(ordre > $('.carousel_picture').length) ordre = 1
            $('.carousel_picture').not('#carousel_picture_' + ordre).each(function(){
                $(this).animate({opacity:0})
            })
            $('#carousel_picture_' + ordre).animate({opacity:1})
        }, 4500)
    }
    run_carrousel()
})
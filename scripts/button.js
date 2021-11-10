$(function(){
    $(document).on('click', '.uk-button', function(){
        let location = 
            $($(this).children('a')[1]).attr('href').search('/expe-zero/') >=0 ? 
            $($(this).children('a')[1]).attr('href') : 
            $($(this).children('a')[0]).attr('href')
        // console.log($($(this).children('a')))
        // $(this).children()[1].click()
        window.location = location
    })
})
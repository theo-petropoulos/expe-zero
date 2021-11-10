$(function(){
    $(document).on('click', '.uk-button', function(){
        console.log($(this).children()[1])
        $(this).children()[1].click()
    })
})
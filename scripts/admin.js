$(function(){
    $(document).on('click', '.delete_article', function(e){
        let loc = window.location.href.split('/')
        let table = loc[loc.length - 1].replace('modify_', '')
        let handler = '/expe-zero/controller/admin/JSHandler.php';
        console.log()
        let id = $(this).parent().attr('id').split('_')[2]
        $.post(
            handler,
            {delete:1, id, table},
            (res)=>{
                // console.log(res)
            }
        )
        .done(()=>{
            let div = '#' + $(this).parents('section').attr('id')
            $(div).load(' ' + div)
        })
    })
})
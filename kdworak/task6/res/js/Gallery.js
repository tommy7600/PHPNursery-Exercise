$(document).ready(function(){
    
    $("li > img").click(function(){
        var link = $(this).attr('src');
        $('#fullImage').attr('src', link);
        
        $("li > img").each(function(){
            $(this).css('border', '0');
        })
        
        $(this).css('border', '2px solid blue');
    });
    
});
var images = 
    [
        "res/img/slider/microsoft.png",
        "res/img/slider/apple.png",
        "res/img/slider/oracle.png"
    ];
    
var descriptions =
    [
        '<h4>Microsoft</h4><p>Micrososft - opis</p>',
        '<h4>Apple</h4><p>Apple - opis</p>',
        '<h4>Oracle</h4><p>Oracle - opis</p>'
    ];
                
var index = 0;
            
function setArrowsPosition()
{
    var sliderPosition = $('#sliderImage').position();
    $('.leftArrow')
        .css('top', sliderPosition.top + 130 + ' px')
        .css('left', sliderPosition.left + 10 + ' px');
                    
    $('.rightArrow')
        .css('top', sliderPosition.top + 130 + ' px')
        .css('left', sliderPosition.left + $('#sliderImage').width() - 57 + ' px');
}
            
function setImageOfSlider()
{
    $('#sliderImage').fadeOut(100, function(){
        $('#caption').html(descriptions[index]);
        $('#sliderImage').attr('src', images[index]);
        $('#sliderImage').fadeIn(100, null);
    });
    
}
            
$(document).ready(function(){
               
    $('.leftArrow').click(function(){
        index--;
        if(index < 0)
        {
            index = images.length - 1;
        }
                    
        setImageOfSlider();
    });
                
    $('.rightArrow').click(function(){
        index++;
        if(index >= images.length)
        {
            index = 0;
        }
        
        setImageOfSlider();
    });
    
    setArrowsPosition();
});
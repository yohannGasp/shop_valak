$(function(){
    $('.link_with_text').mousemove(function(){
        var showntext = $(this).attr('showntext');
        $('#linktext').text(showntext).show();
    }).mouseout(function(){
        $('#linktext').hide();
    });
});

$('.uno_btn').click(function(){
    if($('.form-uno').hasClass('hide'))
    {
        $('.form-bin').toggleClass('hide');
        $('.form-uno').toggleClass('hide');
    }
});
$('.bin_btn').click(function(){
    if($('.form-bin').hasClass('hide'))
    {
        $('.form-bin').toggleClass('hide');
        $('.form-uno').toggleClass('hide');
    }
});
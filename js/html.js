

//nav開啟
$(document).ready(function () {
    $('.mobile_btn').on('click',function(){
        $('.mobile_nav').toggleClass('active');
    })
    $('.close_nav').on('click',function(){
        $('.mobile_nav').toggleClass('active');
    })
});
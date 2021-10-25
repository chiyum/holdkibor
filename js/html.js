

//nav開啟
$(document).ready(function () {
    $('.mobile_btn').on('click',function(){
        $('.mobile_nav').toggleClass('active');
    })
    $('.close_nav').on('click',function(){
        $('.mobile_nav').toggleClass('active');
    })
    
    $('.gotop').click(function(e){
        $('html,body').animate({scrollTop:0},800)
    })
});

let gotop = document.querySelector('.gotop');

// console.log(document.body.offsetHeight)

window.addEventListener('scroll',function(){

    if(this.scrollY > 300){
        gotop.classList.remove('active')
    }else{
        gotop.classList.add('active')
    }

})
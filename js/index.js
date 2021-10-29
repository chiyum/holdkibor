

let img_btn = document.querySelectorAll('.activeBtn li');//點選按鈕
let img = document.querySelectorAll('.img img');
let img_active = 0;//指定輪播數字

set_img_active(img_active)
function set_img_active(num){
    
    //按鈕
    for(let i of img_btn){
        i.classList.remove('active');
        img_btn[num].classList.add('active');
        //一開始先將所有選項隱藏
        //套入的數字，將使指定數字的img套上顯示class
    };

    //圖片
    for(let i of img){
        i.classList.remove('active');
        img[num].classList.add('active');
    };
};

//點擊切換
for(let j = 0;j<img.length; j++){

    img_btn[j].addEventListener('click',function(){
        set_img_active(j);
        img_active = j;
    });
    //這邊的邏輯是，讓每個按鈕都能夠接收到event
    //當點擊到按鈕，J就會變成指定按鈕的數字
    //再將指定按鈕的數字套入轉換圖片的set_img_active中指定圖片
};

//計時器
function takeTurn(){

    if(img_btn.length - 1 == img_active){
        img_active = 0;
        set_img_active(img_active)
    }else{
        img_active++
        set_img_active(img_active)
    }
}

(function(){
    setInterval('takeTurn();', 10000);
}())

// 做法是每指定秒數執行taketurn()，而taketurn會偵測目前指定img_active，
// 也就是圖片目前的順序是多少，若等於最大數，那將從0開始，若不是則+1


//nav開啟
$(document).ready(function () {
    $('.mobile_btn').on('click',function(){
        $('.mobile_nav').toggleClass('active');
    })
    $('.close_nav').on('click',function(){
        $('.mobile_nav').toggleClass('active');
    })
});


//前往分頁
let index_go_html = document.querySelectorAll('.content ul li');
console.log(index_go_html);

index_go_html[0].addEventListener('click',function(){
    window.location.href = 'https://chiyum.github.io/holdkibor/html/fornt.html';
});

index_go_html[1].addEventListener('click',function(){
    window.location.href = 'https://chiyum.github.io/holdkibor/html/end.html';
});

index_go_html[2].addEventListener('click',function(){
    window.location.href = 'https://chiyum.github.io/holdkibor/html/api.html';
});



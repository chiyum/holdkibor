
<!-- 樣板 -->
@extends('system.layouts.default')
<!-- 導入預設的HTML的框架 -->

@section('js')
<!-- 個別的JS 可在此導入以及碼程式碼 -->
<!-- 型態:<script src="{{ asset('js/檔名.js?每次更新後的日期or亂數') }}"></script> -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/vue@next"></script>
<script>
   
   const table_data =[
    {
      id:'a',
      name:'電氣工程',
      child_id:'a_0',
      class:'table_list1',
      parent_icon:'aboveAll_hide',
      onStock:true,//是否有icon
      icon_onStock:false,//子元素隱藏icon
      hide:false,//收合時顯示與否
      isOpen_Stock:false,//收合時icon翻轉
      isSearch:false,
    },
    {
      id:'a_0',
      parentid:'a',
      name:'A_低壓配電盤設備工程',
      child_id:'a_01',
      class:'table_list2',
      parent_icon:'aboveAll_hide',
      onStock:true,
      icon_onStock:false,
      hide:true,
      isOpen_Stock:false,
      isSearch:false,
    },
    {
      id:'a_01',
      parentid:'a_0',
      name:'(一)_P1.P1-1台電受電箱',
      child_id:['a_02','a_03','a_04','a_05'],
      class:'table_list3',
      parent_icon:'aboveAll_hide',
      onStock:true,
      icon_onStock:false,
      hide:true,
      isOpen_Stock:false,
      isSearch:false,
    },
    {
      parentid:'a_01',
      id:'a_02',
      name:'1_CASE 600W*2000H*600D SPHC 2.0屋內粉體塗裝',//名稱
      unit:'座', //單位
      price:1727,//價格
      quantity:2, //數量
      total: 3454,//複數
      profit:'',//利潤
      materials:'',//物料
      manpower:'',//人力
      manage:'',//管理
      device:'',//設備
      class:'table_list4',//list階梯序
      onStock:false,//子元素不會有箭頭icon
      icon_onStock:true,//隱藏icon
      main_onStock:true,//隱藏後推padding-left:10px與上層對齊
      hide:true,//收合時顯示與否
      isSearch:false,
    },
    {
      parentid:'a_01',
      id:'a_03',
      name:'NBF 3P 400AF 400AT 380V 30KA',
      unit:'只',  
      price:121,
      quantity:11590, 
      total: 1402390,
      profit:'',
      materials:'',
      manpower:'',
      manage:'',
      device:'',
      class:'table_list4',
      onStock:false,
      icon_onStock:true,
      main_onStock:true,
      hide:true,
      isSearch:false,
    },
    {
      parentid:'a_01',
      id:'a_04',
      name:'NBF 3P 400AF 400AT 380V 30KA',
      unit:'只',  
      price:181,
      quantity:8721, 
      total: 1578501,
      profit:'',
      materials:'',
      manpower:'',
      manage:'',
      device:'',
      class:'table_list4',
      onStock:false,
      icon_onStock:true,
      main_onStock:true,
      hide:true,
      isSearch:false,
    },
    {
      parentid:'a_01',
      id:'a_05',
      name:'NBF 3P 400AF 400AT 380V 30KA',
      unit:'只',  
      price:421,
      quantity:2869, 
      total: 1207849,
      profit:'',
      materials:'',
      manpower:'',
      manage:'',
      device:'',
      class:'table_list4',
      onStock:false,
      icon_onStock:true,
      main_onStock:true,
      hide:true,
      isSearch:false,
    },
    // 
    {
      id:'b',
      name:'電氣工程',
      child_id:'b_0',
      class:'table_list1',
      parent_icon:'aboveAll_hide',
      onStock:true,
      icon_onStock:false,
      hide:false,
      isOpen_Stock:false,
      isSearch:false,
    },
    {
      id:'b_0',
      parentid:'b',
      name:'A_低壓配電盤設備工程',
      child_id:'b_01',
      class:'table_list2',
      parent_icon:'aboveAll_hide',
      onStock:true,
      icon_onStock:false,
      hide:true,
      isOpen_Stock:false,
      isSearch:false,
    },
    {
      id:'b_01',
      parentid:'b_0',
      name:'(一)_P1.P1-1台電受電箱',
      child_id:['b_02','b_03','b_04','b_05'],
      class:'table_list3',
      parent_icon:'aboveAll_hide',
      onStock:true,
      icon_onStock:false,
      hide:true,
      isOpen_Stock:false,
      isSearch:false,
    },
    {
      parentid:'b_01',
      id:'b_02',
      name:'1_CASE 600W*2000H*600D SPHC 2.0屋內粉體塗裝',
      unit:'座',  
      price:1727,
      quantity:2, 
      total: 3454,
      profit:'',
      materials:'',
      manpower:'',
      manage:'',
      device:'',
      class:'table_list4',
      onStock:false,
      icon_onStock:true,
      main_onStock:true,
      hide:true,
      isSearch:false,
    },
    {
      parentid:'b_01',
      id:'b_03',
      name:'NBF 3P 400AF 400AT 380V 30KA',
      unit:'只',  
      price:121,
      quantity:11590, 
      total: 1402390,
      profit:'',
      materials:'',
      manpower:'',
      manage:'',
      device:'',
      class:'table_list4',
      onStock:false,
      icon_onStock:true,
      main_onStock:true,
      hide:true,
      isSearch:false,
    },
    {
      parentid:'b_01',
      id:'b_04',
      name:'NBF 3P 400AF 400AT 380V 30KA',
      unit:'只',  
      price:181,
      quantity:8721, 
      total: 1578501,
      profit:'',
      materials:'',
      manpower:'',
      manage:'',
      device:'',
      class:'table_list4',
      onStock:false,
      icon_onStock:true,
      main_onStock:true,
      hide:true,
      isSearch:false,
    },
    {
      parentid:'b_01',
      id:'b_05',
      name:'NBF 3P 400AF 400AT 380V 30KA',
      unit:'只',  
      price:421,
      quantity:2869, 
      total: 1207849,
      profit:'',
      materials:'',
      manpower:'',
      manage:'',
      device:'',
      class:'table_list4',
      onStock:false,
      icon_onStock:true,
      main_onStock:true,
      hide:true,
      isSearch:false,
    },
  ];
// vue

Vue.createApp({
  data(){
    return{
      product:[],
      text:'測試文字',
      temp_search:'',
    };
  },
  created(){
    this.product = table_data;
    this.listColor_reset();
  },
  methods:{
    toggle_child(iteam){
      //展開開關
      // iteam是點選的元素本身
      if(typeof(iteam.child_id)=='object'){//若有多個子元素
        for(let i of iteam.child_id){
          //這邊的 i 是iteam的各個子元素
          this.product.forEach((data,j)=>{//掃過整個檔案
            if(i == data.id){//找尋對應id
              //這邊的data是product的所有物件 i則是對應的順序
              if(this.product[j].hide == true){//隱藏則開啟
                this.product[j].hide = false;//子元素開啟
                iteam.isOpen_Stock = true;//父元素icon翻轉
              }else{//若為開啟狀態則隱藏
                this.product[j].hide = true;//子元素隱藏
                iteam.isOpen_Stock = false; //父元素icon翻轉
              }
            };
          });
        };
      }else{//只有一個子元素
        this.product.forEach((data,j)=>{
          if(iteam.child_id == data.id){
            if(this.product[j].hide==true){
              this.product[j].hide = false
              iteam.isOpen_Stock = true
            }else{
              this.product[j].hide = true
              iteam.isOpen_Stock = false
            };
          };
        });
      };
      setTimeout(() => {
        //當父元素關閉，子元素也關閉
        this.product.forEach((data,j)=>{
          if(data.hide == true){//第一層判斷是否為關閉狀態
            if(typeof(data.child_id)=='object'){//抓出關閉狀態的子元素
              for(let i of data.child_id){
                // console.log(i +'關閉狀態的子元素(物件)');
                this.product.forEach((res,k)=>{
                  if(res.id == i){
                    this.product[k].hide = true
                  }
                })
              };
            }else{
              // console.log(data.child_id + '關閉狀態的子元素');
              this.product.forEach((res,k)=>{
                  if(res.id == data.child_id){
                    this.product[k].hide = true
                  }
              });
            }
          }
        });
      }, 0);
        //li顏色重整
        this.listColor_reset();
    },
    listColor_reset(){
      setTimeout(() => {
        let temp_ary = [];
        let li = document.querySelectorAll('.table_main ul li');
        for(let i = 0;i<li.length;i++){
          if(li[i].className!='aboveAll_hide'){//判斷是否為隱藏，若隱藏則不加入轉換名單中
            //就算只抓取非隱藏起來的DOM，他們在陣列中的順序也是不會改變的，所以需要想辦法抓取新的順序
            //抓取歸抓取但還是不能打亂原先的順序，因此在抓取新的順序並賦予值以後，還需要賦予以後讓他們回歸並套用新的樣式
            temp_ary.push(li[i]);
          };     
        };
        temp_ary.forEach((data,i)=>{
          if(i % 2 ==0){ //透過餘數去偵測每個li的順序
            //餘數為0為偶數
            data.style['background'] = '#ffffff';
            data.style['transition'] = 'all 0.4s';
          }else{
            data.style['background'] = '#cdcdcd';
            data.style['transition'] = 'all 0.4s';
          };
        });
        //目前發現的問題是，掃for迴圈時，抓不到開啟的那一些元素，所以使用settimeout解決
      }, 10);
    },
    open_all(){
      this.product.forEach((data,i)=>{
        this.product[i].hide = false
        this.listColor_reset();
      })
    },
    search(){
      let value = this.temp_search;
      let math_ary = [];
      //打開並將含有關鍵字的li變更樣式
      this.product.forEach((data,i)=>{
        this.product[i].isSearch = false;
        if(data.name.indexOf(value)>=0 ){//indexOf的用法是型態是:array.indexOf(關鍵字),若有符合關鍵字會回傳0，那麼在if底下array中有符合的都可以抓取出來
          this.product[i].isSearch = true;
          this.product[i].hide = false;
          math_ary.push(this.product[i].parentid)
        };
      });
      console.log(math_ary + '抓到的')

      math_ary.forEach((data,g)=>{
        let test;
        this.product.forEach((iteams,o)=>{
          if(data==iteams.id){
            this.product[o].hide= false;
            if(this.product[o].parentid){
              console.log(this.product[o].parentid)
            }
          }
        })
      })

      //這邊應該寫一個開啟父層的專屬function，若偵測到有父層執行一次，就不會這樣跑迴圈地獄

      // for(let o=0;o<this.product.length;o++){

        
      //   if(math_ary[o] == this.product[o].id){
      //     console.log(math_ary[o]);
      //     this.product[o].hide = false;
      //     if(this.product[o].parentid){
      //       console.log(this.product[o].parentid);
      //     };
      //   };
      // }
      
      this.listColor_reset();
    }
  },
}).mount('#v_mainId')

// vue-end
  const table_data_operate ={
    data(){
      return{
        table_data:{},
      }
    },
    created(){
      this.table_data = table_data;
    },
    methods:{
      change_data(){
        document.querySelectorAll('.table_main input');
        for(let i of document.querySelectorAll('.table_main input')){
          i.classList.remove('hide');
        };
        for(let i of document.querySelectorAll('.table_data_right')){
          i.classList.add('hide')
        };
      },
      change_data_end(){
        document.querySelectorAll('.table_main input');
        for(let i of document.querySelectorAll('.table_main input')){
          i.classList.add('hide');
        };
        for(let i of document.querySelectorAll('.table_data_right')){
          i.classList.remove('hide');
        };
      },
    },
  };

table_data_operate.created();
const methods = table_data_operate.methods;
document.querySelector('#editId').addEventListener('click',table_data_operate.methods.change_data);
document.querySelector('#edit_endId').addEventListener('click',table_data_operate.methods.change_data_end);
document.onkeyup = (e)=>{//當按下enter後關閉編輯模式
  if(e.keyCode == '13'){
    methods.change_data_end();
  };
};
</script>
@endsection



@section('css')
<!-- 於此導入個別CSS及程式碼 -->

<style>
* {
  padding: 0;
  margin: 0;
}

li {
  list-style: none;
}

.main {
  position: relative;
  top: 4px;
  margin: 0 10px;
  margin-bottom: -9px;
  width: 99%;
  height: calc(85.8vh);
  overflow: hidden;
  background-color: white;
}

.main .head {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 100%;
  height: 52px;
  background: #cdcdcd;
}

.main .head ul {
  margin-bottom: 0;
}

.main .head .head_left {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  width: 50%;
}

.main .head .head_left li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.main .head .head_left li h2 {
  color: #4e4e4e;
  font-size: 28px;
  margin: 0 10px;
}

.main .head .head_left li select {
  padding-left: 10px;
  width: 20vw;
  max-width: 546px;
  min-width: 184px;
  height: 32px;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: none;
  border-radius: 6px;
  border: none;
}

.main .head .head_left li .select_icon {
  position: relative;
  right: 30px;
  top: 4px;
  color: #717171;
  font-size: 28px;
  cursor: pointer;
}

.main .head .head_left li .icon {
  font-size: 30px;
  color: white;
}

.main .head .head_left li:nth-child(3) {
  position: relative;
  right: 15px;
  height: 32px;
  padding: 0 8px;
  color: white;
  font-size: 18px;
  font-family: 600;
  background: #01659c;
  border-radius: 6px;
  cursor: pointer;
}

.main .head .head_left li:nth-child(3) .opne_icon {
  font-size: 28px;
  color: white;
}

.main .head .head_right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  margin-right: 10px;
  width: 50%;
}

.main .head .head_right li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.main .head .head_right li:nth-child(1), .main .head .head_right li:nth-child(2) {
  margin: 0 3px;
  padding: 0 8px;
  height: 32px;
  font-size: 18px;
  font-weight: 500;
  border-radius: 6px;
  color: white;
  background: #01659c;
  cursor: pointer;
}

.main .head .head_right li:nth-child(3) {
  margin-left: 5px;
  position: relative;
}

.main .head .head_right li:nth-child(3) input {
  padding-left: 10px;
  height: 32px;
  width: 20vw;
  max-width: 546px;
  outline: none;
  border-radius: 6px;
  border: none;
}

.main .head .head_right li:nth-child(3) .search_icon {
  position: absolute;
  right: 5px;
  font-size: 20px;
  color: #575855;
  cursor: pointer;
}

.main .list {
  width: 100%;
}

.main .list .table_title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-weight: 500;
}

.main .list .table_title .title_name {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 47.6%;
  font-size: 1.2em;
  font-size: bold;
  background-color: #9a9a9a;
}

.main .list .table_title .title_list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  width: 52.4%;
  margin: 0;
  padding: 0;
}

.main .list .table_title .title_list .title_list_top {
  height: 50%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.main .list .table_title .title_list .title_list_top p {
  height: 100%;
  font-size: 1.2em;
  margin: 0;
  padding: 0;
  padding: 12px 0;
}

.main .list .table_title .title_list .title_list_top p:nth-child(1) {
  width: 45%;
  background-color: #ed5e25;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.main .list .table_title .title_list .title_list_top p:nth-child(2) {
  width: 55%;
  background-color: #07a3c5;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.main .list .table_title .title_list .title_list_bottom {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  height: 50%;
  background-color: #9a9a9a;
}

.main .list .table_title .title_list .title_list_bottom p {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
  margin: 0;
  padding: 0;
  width: 5.83%;
  white-space: nowrap;
}

.main .list .table_title .title_list .title_list_bottom p span {
  font-size: .9em;
}

.main .list .table_main {
  overflow: auto;
  height: 72.9vh;
}

.main .list .table_main ul {
  margin: 0;
  width: 100%;
  background-size: 100% 69.5px;
}

.main .list .table_main ul li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
  padding: 5px 0;
  min-height: 40px;
}

.main .list .table_main ul li .table_name {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 47.6%;
  overflow: hidden;
}

.main .list .table_main ul li .table_name i {
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.main .list .table_main ul li .table_name i .table_name_icon {
  font-size: 25px;
}

.main .list .table_main ul li .table_data {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 52.4%;
}

.main .list .table_main ul li .table_data p {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
  margin: 0;
  width: 11.2%;
  text-align: center;
  overflow-x: auto;
}

.main .list .table_main ul li .table_data p input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  text-align: center;
  border: 1.5px solid #717171;
  background: rgba(255, 255, 255, 0);
  z-index: 1;
}

.icon_blue {
  color: #0068a0;
}

.table_list1 {
  padding-left: 10px !important;
}

.table_list2 {
  padding-left: 20px !important;
}

.table_list3 {
  padding-left: 30px !important;
}

.table_list4 {
  padding-left: 40px !important;
}

.table_list5 {
  padding-left: 50px !important;
}

.table_list6 {
  padding-left: 60px !important;
}

.table_list_main {
  padding-left: 10px;
}

.table_none {
  padding: 0;
  height: 34px;
}

.icon_hide {
  visibility: hidden;
}

.hide {
  display: none;
}

.aboveAll_hide {
  display: none !important;
}

.aboveAll_flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
}

.opne_icon_active {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
  -webkit-transition: all 0.15s;
  transition: all 0.15s;
}

.search_result {
  color: red !important;
}
/*# sourceMappingURL=tender.css.map */
</style>
@endsection



@section('wrapper-head')
<!-- //導入layouts內的head，包含有導入的JS、CSS等 -->
<div class="wrapper-contentTitle" style="position: relative;top:4px"> 標單管理</div>
<!-- title名稱輸入區 -->
@endsection



@section('wrapper-main')
<!-- html標籤輸入區 -->
<div class="main" id="v_mainId">
        <div class="head">
            <ul class="head_left">
                <li>
                    <h2>選擇標單</h2>
                </li>
                <li>
                    <select name="project" id="projectId">
                        <option value="成大瑞豪機電工程">成大瑞豪機電工程</option>
                    </select>
                    <span class="select_icon"><ion-icon name="caret-down-outline"></span>
                </li>
                <li v-on:click="open_all">
                    全展開<ion-icon name="help-circle-outline" class="opne_icon"></ion-icon>
                </li>
            </ul>
            <ul class="head_right">
                <li id="editId"><ion-icon name="create"></ion-icon>編輯</li>
                <li id="edit_endId"><ion-icon name="cloud-upload"></ion-icon>儲存</li>
                <li><ion-icon class="search_icon" name="search" v-on:click="search"></ion-icon><input type="text" class="search" v-model="temp_search"></li>
            </ul>
        </div>
        <div class="list">
           <div class="table_title">
             <div class="title_name">
               項次_項目名稱
             </div>
             <div class="title_list">
               <div class="title_list_top">
                 <p>契約預估</p>
                 <p>成本規劃</p>
               </div>
               <div class="title_list_bottom">
                 <p>單位</p>
                 <p>單價</p>
                 <p>數量</p>
                 <p>複價</p>
                 <p>利潤(%)</p>
                 <p>物料(%)</p>
                 <p>人力(%)</p>
                 <p>管理(%)</p>
                 <p>設備(%)</p>
               </div>
             </div>
           </div>
           <div class="table_main">
             <ul>
               <li v-for="i in product" :key="i.id" v-bind:class="{aboveAll_hide:i.hide,search_result:i.isSearch}" :title="i.name">
                   <div class="table_name" v-bind:class="i.class" >
                   <i v-bind:class="{opne_icon_active:i.isOpen_Stock}">
                    <ion-icon name="caret-forward-outline" v-bind:class="{icon_blue:i.onStock,aboveAll_hide:i.icon_onStock}" class="table_name_icon"  v-on:click="toggle_child(i)">
                    </ion-icon>
                   </i>
                   <span v-bind:class="{table_list_main:i.main_onStock}">@{{i.name}}</span>
                   </div>
                   <div class="table_data">
                      <p>@{{i.unit}}</p>
                      <p>@{{i.price}}</p>
                      <p>@{{i.quantity}}</p>
                      <p>@{{i.total}}</p>
                      <p><span class="table_data_right">@{{i.profit}}</span><input type="text" class="hide" v-bind:class="i.parent_icon" v-model="i.profit"></p>
                      <p><span class="table_data_right">@{{i.materials}}</span><input type="text" class="hide" v-bind:class="i.parent_icon" v-model="i.materials"></p>
                      <p><span class="table_data_right">@{{i.manpower}}</span><input type="text" class="hide" v-bind:class="i.parent_icon" v-model="i.manpower"></p>
                      <p><span class="table_data_right">@{{i.manage}}</span><input type="text" class="hide" v-bind:class="i.parent_icon" v-model="i.manage"></p>
                      <p><span class="table_data_right">@{{i.device}}</span><input type="text" class="hide" v-bind:class="i.parent_icon" v-model="i.device"></p>
                    </div>
                </li>
                <!-- <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li>
                <li class="table_none"></li> -->
             </ul>
           </div>
        </div>
    </div>
@endsection

<!-- 

  未完成:
  標單切換
  // 將接收到的資料加入id等基本vue操作資料
  並套入product內即可

  搜尋模式
  //找資料之後bg/color改樣式

  全展開
 -->
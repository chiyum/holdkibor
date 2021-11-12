
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
      onStock:true,
      icon_onStock:false,
      hide:false,
      isOpen_Stock:false,
    },
    {
      id:'a_0',
      name:'A_低壓配電盤設備工程',
      child_id:'a_01',
      class:'table_list2',
      parent_icon:'aboveAll_hide',
      onStock:true,
      icon_onStock:false,
      hide:true,
      isOpen_Stock:false,
    },
    {
      id:'a_01',
      name:'(一)_P1.P1-1台電受電箱',
      child_id:['a_02','a_03','a_04','a_05'],
      class:'table_list3',
      parent_icon:'aboveAll_hide',
      onStock:true,
      icon_onStock:false,
      hide:true,
      isOpen_Stock:false,
    },
    {
      parentid:'a_01',
      id:'a_02',
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
    },
    {
      id:'b_0',
      name:'A_低壓配電盤設備工程',
      child_id:'b_01',
      class:'table_list2',
      parent_icon:'aboveAll_hide',
      onStock:true,
      icon_onStock:false,
      hide:true,
      isOpen_Stock:false,
    },
    {
      id:'b_01',
      name:'(一)_P1.P1-1台電受電箱',
      child_id:['b_02','b_03','b_04','b_05'],
      class:'table_list3',
      parent_icon:'aboveAll_hide',
      onStock:true,
      icon_onStock:false,
      hide:true,
      isOpen_Stock:false,
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
    },
  ]
// vue

Vue.createApp({
  data(){
    return{
      product:[],
      text:'測試文字',
    }
  },
  created(){
    this.product = table_data;
  },
  methods:{
    toggle_child(iteam){
        if(typeof(iteam.child_id)=='object'){//若有多個子元素
          for(let i of iteam.child_id){
            this.product.forEach((data,j)=>{
              if(i == data.id){
                if(this.product[j].hide == true){
                  this.product[j].hide = false;
                  iteam.isOpen_Stock = true
                }else{
                  this.product[j].hide = true;
                  iteam.isOpen_Stock = false
                }
              };
            });
          };
        }else{
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
    },
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
        }
      },
      change_data_end(){
        document.querySelectorAll('.table_main input');
        for(let i of document.querySelectorAll('.table_main input')){
          i.classList.add('hide');
        }
      }
    }
  }
table_data_operate.created();
const methods = table_data_operate.methods;
document.querySelector('#editId').addEventListener('click',table_data_operate.methods.change_data);
document.querySelector('#edit_endId').addEventListener('click',table_data_operate.methods.change_data_end);
document.onkeyup = (e)=>{
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
}

.main .list .table_title .title_list .title_list_bottom p span {
  position: absolute;
  bottom: 0;
  left: 32px;
  font-size: 12px;
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
  height: 24px;
  z-index: 1;
}

.main .list .table_main ul li:nth-child(odd) {
  background-color: #cdcdcd;
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
                <li>
                    全展開<ion-icon name="help-circle-outline" class="opne_icon"></ion-icon>
                </li>
            </ul>
            <ul class="head_right">
                <li id="editId"><ion-icon name="create"></ion-icon>編輯</li>
                <li id="edit_endId"><ion-icon name="cloud-upload"></ion-icon>儲存</li>
                <li><ion-icon class="search_icon" name="search"></ion-icon><input type="text" class="search"></li>
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
                 <p>利潤<span>(%)</span></p>
                 <p>物料<span>(%)</span></p>
                 <p>人力<span>(%)</span></p>
                 <p>管理<span>(%)</span></p>
                 <p>設備<span>(%)</span></p>
               </div>
             </div>
           </div>
           <div class="table_main">
             <ul>
               <li v-for="i in product" :key="i.id" v-bind:class="{aboveAll_hide:i.hide}" :title="i.name">
                   <div class="table_name" v-bind:class="i.class" >
                   <i v-bind:class="{opne_icon_active:i.isOpen_Stock}">
                    <ion-icon name="caret-forward-outline" v-bind:class="{icon_blue:i.onStock}":class="{aboveAll_hide:i.icon_onStock}" class="table_name_icon"  v-on:click="toggle_child(i)">
                    </ion-icon>
                   </i>
                   <span v-bind:class="{table_list_main:i.main_onStock}">@{{i.name}}</span>
                   </div>
                   <div class="table_data">
                      <p>@{{i.unit}}</p>
                      <p>@{{i.price}}</p>
                      <p>@{{i.quantity}}</p>
                      <p>@{{i.total}}</p>
                      <p>@{{i.profit}}<input type="text" class="hide" v-bind:class="i.parent_icon" v-model="i.profit"></p>
                      <p>@{{i.materials}}<input type="text" class="hide" v-bind:class="i.parent_icon" v-model="i.materials"></p>
                      <p>@{{i.manpower}}<input type="text" class="hide" v-bind:class="i.parent_icon" v-model="i.manpower"></p>
                      <p>@{{i.manage}}<input type="text" class="hide" v-bind:class="i.parent_icon" v-model="i.manage"></p>
                      <p>@{{i.device}}<input type="text" class="hide" v-bind:class="i.parent_icon" v-model="i.device"></p>
                    </div>
                </li>
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
                <li class="table_none"></li>
                <li class="table_none"></li>
             </ul>
           </div>
        </div>
    </div>
@endsection
<!-- tr是每一層，內的td,th是層內的每一格 ex.th是標題 -->
<!--
    資料來源 
    data來源是後端，主要以呈現為主
    可開啟層設置一個icon，當點擊icon時display:block展開下子層
    偵測每層的td子孫元素有幾個，接著推padding or margin及是否置入icon
-->

<!-- 
  補充選單:當打開子選單時，去判斷class狀態 or parentid/childid，假設沒childid class賦予child推擠padding or 統一以list1.2.3.4...去做每層的推擠，在渲染時就給予其class
  或是可以考慮若已經到達子層，listclass賦予+1
-->

<!-- 
    rwd
    這版若是說要使用rwd的話，只能縮左邊的大小，然後超出範圍的字使用...取代。
-->

<!-- 
    操作功能跟跟rwd先做出來，資料怎麼取，怎麼輸出排後位。
    僅讓list向下卷軸滾動
    整個table則是左右
-->

<!-- 

  若是有多個標單資料，只要在切換時將新的陣列資料導入product即可。

 -->

<!-- 樣板 -->
@extends('system.layouts.default')


@section('js')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- 導入的JS -->
<!-- 型態:<script src="{{ asset('js/檔名.js?每次更新後的日期or亂數') }}"></script> -->


<script>
    
    const data = [

        {
            companyName:'宏義工程股份有限公司',
            position:'經理',
            name:'康民治',
            cardid:'A146019079',
            id:'A00001',
            sex:'男',
            blood:'AB',
            aborad:'否',
            birthday:'1960/10/10',
            phoneNumber:'0800-092000',
            email:'abc123456@gmail.com',
            address:'台中市北區一中街125巷10號5樓3室',
            contactPerson:'許小姐',
            contactNumber:'0980-153699',
            isClose:false,
            isShow:true,
        },
        {
            companyName:'宏義工程股份有限公司',
            position:'工地主任',
            name:'吳來福',
            cardid:'L104728170',
            id:'A00002',
            sex:'男',
            blood:'O',
            aborad:'否',
            birthday:'1960/10/10',
            phoneNumber:'0800-092000',
            email:'abc123456@gmail.com',
            address:'台中市北屯區中山路一段125巷10號5樓',
            contactPerson:'汪小姐',
            contactNumber:'0988-593699',
            isClose:false,
            isShow:true,
        },
        {
            companyName:'宏義工程股份有限公司',
            position:'施工人員',
            name:'王欽興',
            cardid:'L104728170',
            id:'A00003',
            sex:'男',
            blood:'B',
            aborad:'否',
            birthday:'1960/10/10',
            phoneNumber:'0800092000',
            email:'abc123456@gmail.com',
            address:'台中市北區一中街125巷10號5樓3室',
            contactPerson:'黃小姐',
            contactNumber:'0975-697531',
            isClose:false,
            isShow:true,
        },
        {
            companyName:'宏義工程股份有限公司',
            position:'施工人員',
            name:'王嘉興',
            cardid:'M110394010',
            id:'A00004',
            sex:'男',
            blood:'O',
            aborad:'否',
            birthday:'1960/10/10',
            phoneNumber:'0800092000',
            email:'abc123456@gmail.com',
            address:'台中市南區工學路一段230號10樓之2號',
            contactPerson:'趙小姐',
            contactNumber:'0975-697531',
            isClose:false,
            isShow:true,
        },
        {
            companyName:'唐宋工程股份有限公司',
            position:'施工人員',
            name:'李白',
            cardid:'M110394010',
            id:'A00005',
            sex:'男',
            blood:'A',
            aborad:'是',
            birthday:'701/5/19',
            phoneNumber:'0800092000',
            email:'abc123456@gmail.com',
            address:'台中市西區英才路432號12樓',
            contactPerson:'李小姐',
            contactNumber:'0975-697531',
            isClose:false,
            isShow:true,
        },
        {
            companyName:'宏義工程股份有限公司',
            position:'施工人員',
            name:'謝宇賀',
            cardid:'N127819354',
            id:'A00006',
            sex:'男',
            blood:'O',
            aborad:'否',
            birthday:'1960/10/10',
            phoneNumber:'0800-092000',
            email:'abc123456@gmail.com',
            address:'台中市北區一中街125巷10號5樓3室',
            contactPerson:'黃小姐',
            contactNumber:'0975-697531',
            isClose:false,
            isShow:true,
        },
        {
            companyName:'宏義工程股份有限公司',
            position:'施工人員',
            name:'謝芷菱',
            cardid:'M129819314',
            id:'A00007',
            sex:'女',
            blood:'AB',
            aborad:'否',
            birthday:'1960/10/10',
            phoneNumber:'0800-092000',
            email:'abc123456@gmail.com',
            address:'台中市南屯區向心南路906巷55號2樓之7號',
            contactPerson:'魏小姐',
            contactNumber:'0975-697531',
            isClose:false,
            isShow:true,
        },
        {
            companyName:'宏義工程股份有限公司',
            position:'施工人員',
            name:'魏佳慧',
            cardid:'M294467154',
            id:'A00008',
            sex:'女',
            blood:'O',
            aborad:'否',
            birthday:'1960/10/10',
            phoneNumber:'0800-092000',
            email:'abc123456@gmail.com',
            address:'台中市南屯區向心南路906巷55號2樓之7號',
            contactPerson:'謝小姐',
            contactNumber:'0975-697531',
            isClose:false,
            isShow:true,
        },
        

    ];

    Vue.createApp({
        data(){
            return{
                peopleData:[],
                temp_obj:{},//彈窗占存用
                temp_num:'',//占存刪除用
                search:'',
                popupShow:false,//總彈窗
                popup_delShow:false,//刪除彈窗
                popup_editShow:false,//編輯新增彈窗
                popup_edit_title:'編輯',
            };
        },
        created(){
            this.peopleData = data;
        },
        methods:
        {
            switchOpen(iteam){
                if(iteam.isClose){//為關閉的話
                    iteam.isClose = false;//切換為打開
                }else{
                    iteam.isClose = true;//切換為關閉
                };
            },
            searchKeyWord(){
                let value  = this.search;//使用者輸入文字
                // let num = 0;
                if(value ==''||!value){return}//若為空值則return
                this.peopleData.forEach( data => {
                    data.isShow = false;
                    if(data.companyName.indexOf(value.toUpperCase())>=0||data.companyName.indexOf(value.toLowerCase())>=0||data.position.indexOf(value.toUpperCase())>=0||data.position.indexOf(value.toLowerCase())>=0||data.name.indexOf(value.toUpperCase())>=0||data.name.indexOf(value.toLowerCase())>=0||data.cardid.indexOf(value.toUpperCase())>=0||data.cardid.indexOf(value.toLowerCase())>=0||data.id.indexOf(value.toUpperCase())>=0||data.id.indexOf(value.toLowerCase())>=0){
                        data.isShow = true;
                    }
                    // else if(data.companyName.indexOf(value.toUpperCase())!=0||data.companyName.indexOf(value.toLowerCase())!=0||data.position.indexOf(value.toUpperCase())!=0||data.position.indexOf(value.toLowerCase())!=0||data.name.indexOf(value.toUpperCase())!=0||data.name.indexOf(value.toLowerCase())!=0||data.cardid.indexOf(value.toUpperCase())!=0||data.cardid.indexOf(value.toLowerCase())!=0||data.id.indexOf(value.toUpperCase())!=0||data.id.indexOf(value.toLowerCase())!=0){
                    //     num++
                    // };
                });
                // if(num == this.peopleData.length){
                //     alert('搜尋紀錄')//此為搜尋無此紀錄時跳彈窗
                // }
                // num = 0;//清空
                this.search = '';//清空輸入框
            },
            deldata_popup(iteam){//刪除彈窗跳出及取得欲刪除序列
                this.peopleData.find( (data,i) => {
                    if(iteam.id == data.id){
                        this.temp_num = i;//占存刪除的檔案位址
                    }
                });
                this.popupShow = true;//呼叫總彈窗
                this.popup_delShow = true;//呼叫彈窗
            },
            deldata(){//刪除
                this.peopleData.splice(this.temp_num,1);//將資料刪除
                this.temp_num = '';//reset
                this.popupShow = false;//選單隱藏
                this.popup_delShow = false;
            },
            cxlDeldata(){//選單隱藏
                this.popupShow = false;//選單隱藏
                this.popup_delShow = false;
            },
            
        },
    }).mount('.main');


</script>
@endsection



@section('css')
<style>
* {
  margin: 0;
  padding: 0;
}

p {
  margin: 0;
  padding: 0;
}

.main {
  margin-left: 3px;
  width: 100%;
  height: 82vh;
  background: #cccccc;
  border-radius: 5px 0px 0 0;
  overflow: hidden;
}

.main .table_head .shop {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
}

.main .table_head .shop .create_btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 23%;
  max-width: 350px;
  height: 30px;
  color: #ffffff;
  font-weight: bold;
  background: -webkit-gradient(linear, left top, left bottom, from(#07d895), to(#04b87f));
  background: linear-gradient(to bottom, #07d895, #04b87f);
  cursor: pointer;
}

.main .table_head .shop .create_btn .create_btn_icon {
  font-size: 23px;
  font-weight: bolder;
}

.main .table_head .shop .search {
  margin-right: 1.8px;
  margin-top: 2px;
  width: 20%;
  max-width: 300px;
  height: 28px;
  white-space: nowrap;
}

.main .table_head .shop .search input {
  padding-left: 5px;
  width: 100%;
  height: 100%;
  border: none;
  outline: none;
  border-radius: 5px;
}

.main .table_head .shop .search .search_btn {
  position: relative;
  right: 26px;
  top: 1.5px;
  font-size: 18px;
  cursor: pointer;
}

.main .table_head .title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding-right: 1px;
  background: #808080;
}

.main .table_head .title p {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 5px 0;
  width: 25%;
  font-size: 18px;
  font-weight: bolder;
}

.main .table_main ul {
  overflow: auto;
  height: 75vh;
}

.main .table_main ul li:nth-child(odd) {
  background: #ffffff;
}

.main .table_main ul li:nth-child(even) {
  background: #dbd6d6;
}

.main .table_main ul li {
  background-color: #ffffff;
}

.main .table_main ul li .list_top {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.main .table_main ul li .list_top .list_top_icon {
  position: absolute;
  left: 0px;
  top: 4px;
  font-size: 25px;
  color: #999999;
  cursor: pointer;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.main .table_main ul li .list_top .list_top_icon_edit {
  position: absolute;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  right: 5px;
  bottom: 1.5px;
  width: 45px;
  font-size: 20px;
  color: #0267a2;
}

.main .table_main ul li .list_top .list_top_icon_edit .edit_btn {
  cursor: pointer;
}

.main .table_main ul li .list_top .list_top_icon_edit .del_btn {
  cursor: pointer;
}

.main .table_main ul li .list_top p {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 5px 0;
  width: 25%;
  font-size: 18px;
  font-weight: 500;
}

.main .table_main ul li .list_bottom .list_bottom_title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: #a1e6df;
  padding: 5px 0;
  font-weight: bold;
}

.main .table_main ul li .list_bottom .list_bottom_title p:nth-child(1), .main .table_main ul li .list_bottom .list_bottom_title p:nth-child(2) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 5%;
}

.main .table_main ul li .list_bottom .list_bottom_title p:nth-child(3), .main .table_main ul li .list_bottom .list_bottom_title p:nth-child(4) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 7.5%;
}

.main .table_main ul li .list_bottom .list_bottom_title p:nth-child(5) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 10%;
}

.main .table_main ul li .list_bottom .list_bottom_title p:nth-child(6), .main .table_main ul li .list_bottom .list_bottom_title p:nth-child(7) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 20%;
}

.main .table_main ul li .list_bottom .list_bottom_title p:nth-child(8) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 10%;
}

.main .table_main ul li .list_bottom .list_bottom_title p:nth-child(9) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 15%;
}

.main .table_main ul li .list_bottom .list_bottom_data {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: #bef2ef;
  padding: 5px 0;
  font-weight: 500;
}

.main .table_main ul li .list_bottom .list_bottom_data p:nth-child(1), .main .table_main ul li .list_bottom .list_bottom_data p:nth-child(2) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 5%;
}

.main .table_main ul li .list_bottom .list_bottom_data p:nth-child(3), .main .table_main ul li .list_bottom .list_bottom_data p:nth-child(4) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 7.5%;
}

.main .table_main ul li .list_bottom .list_bottom_data p:nth-child(5) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 10%;
}

.main .table_main ul li .list_bottom .list_bottom_data p:nth-child(6), .main .table_main ul li .list_bottom .list_bottom_data p:nth-child(7) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 20%;
}

.main .table_main ul li .list_bottom .list_bottom_data p:nth-child(8) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 10%;
}

.main .table_main ul li .list_bottom .list_bottom_data p:nth-child(9) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 15%;
}

.main .popup {
  position: fixed;
  top: 0;
  left: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 100vw;
  height: 100vh;
  background: rgba(10, 10, 10, 0.25);
  z-index: 9999;
}

.main .popup .edit_popup {
  background-color: white;
}

.main .popup .del_popup {
  width: 288px;
  color: white;
}

.main .popup .del_popup .del_popup_title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 0 10px;
  height: 35px;
  border-radius: 10px 10px 0 0;
  background: #e93925;
}

.main .popup .del_popup .del_popup_title h2 {
  margin: 0;
  font-size: 18px;
}

.main .popup .del_popup .del_popup_title .close_icon {
  font-size: 25px;
  font-weight: bolder;
  cursor: pointer;
}

.main .popup .del_popup .del_popup_main {
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
  height: 83px;
  background: #ffffff;
  border-radius: 0 0 10px 10px;
  color: black;
}

.main .popup .del_popup .del_popup_main p {
  text-align: center;
  font-weight: bolder;
}

.main .popup .del_popup .del_popup_main div {
  position: relative;
  top: 8px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  width: 80%;
}

.main .popup .del_popup .del_popup_main div span {
  padding: 3px 10px;
  margin: 0 1px;
  cursor: pointer;
}

.main .popup .del_popup .del_popup_main div span:nth-child(1) {
  background-color: #f2f2f2;
}

.main .popup .del_popup .del_popup_main div span:nth-child(1):hover {
  background-color: #999999;
}

.main .popup .del_popup .del_popup_main div span:nth-child(2) {
  background-color: #0aa1c7;
  color: #ffffff;
}

.main .popup .del_popup .del_popup_main div span:nth-child(2):hover {
  background-color: #0cbbe7;
}

.open {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

.hide {
  display: none;
}
/*# sourceMappingURL=people.css.map */
</style>
@endsection



@section('wrapper-head')
<div class="wrapper-contentTitle"> 使用者總表</div>
<!-- 預設樣式 -->
@endsection



@section('wrapper-main')
<!-- html -->
<div class="container-fluid">
    <div class="main">
        <div class="popup" v-if="popupShow" @click.self="cxlDeldata">
            <div class="del_popup">
                <div class="del_popup_title" v-if="popup_delShow">
                    <h2>刪除</h2>
                    <ion-icon name="close-outline" class="close_icon" @click="cxlDeldata"></ion-icon>
                </div>
                <div class="del_popup_main">
                    <p>是否確定要刪除此資料?</p>
                    <div>
                        <span @click="cxlDeldata">取消</span>
                        <span @click="deldata">刪除</span>
                    </div>
                </div>
            </div>
            <div class="deit_popup" v-if="popup_editShow"></div>
        </div>
        <div class="table_head">
            <div class="shop">
                <div class="create_btn"><ion-icon name="add-sharp" class="create_btn_icon"></ion-icon>新增人員列表</div>
                <div class="search">
                    <input type="text" v-model="search" v-on:keyup.enter="searchKeyWord">
                    <span class="search_btn" @click="searchKeyWord"><ion-icon name="search-outline"></ion-icon></span>
                </div>
            </div>
            <div class="title">
                <p>公司名稱</p>
                <p>職稱</p>
                <p>姓名</p>
                <p>身分證字號</p>
                <p>帳號</p>
            </div>
        </div>
        <div class="table_main">
            <ul>
                <li v-for="iteam in peopleData" :key="iteam.id" v-show="iteam.isShow">
                    <div class="list_top">
                        <div class="list_top_icon" v-on:click="switchOpen(iteam)" :class="{open:iteam.isClose}">
                            <ion-icon name="caret-forward-outline"></ion-icon>
                        </div>
                        <p>@{{iteam.companyName}}</p>
                        <p>@{{iteam.position}}</p>
                        <p>@{{iteam.name}}</p>
                        <p>@{{iteam.cardid}}</p>
                        <p>@{{iteam.id}}</p>
                        <div class="list_top_icon_edit">
                            <div class="edit_btn"><ion-icon name="pencil-outline"></ion-icon></div>
                            <div class="del_btn" @click="deldata_popup(iteam)"><ion-icon name="trash-outline"></ion-icon></div>
                        </div>
                    </div>
                    <div class="list_bottom" v-if="iteam.isClose">
                        <div class="list_bottom_title">
                            <p>性別</p>
                            <p>血型</p>
                            <p>是否為移工</p>
                            <p>生日</p>
                            <p>連絡電話</p>
                            <p>信箱</p>
                            <p>通訊地址</p>
                            <p>緊急聯絡人</p>
                            <p>緊急連絡人電話</p>
                        </div>
                        <div class="list_bottom_data">
                            <p>@{{iteam.sex}}</p>
                            <p>@{{iteam.blood}}</p>
                            <p>@{{iteam.abroad}}</p>
                            <p>@{{iteam.birthday}}</p>
                            <p>@{{iteam.phoneNumber}}</p>
                            <p>@{{iteam.email}}</p>
                            <p>@{{iteam.address}}</p>
                            <p>@{{iteam.contactPerson}}</p>
                            <p>@{{iteam.contactNumber}}</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
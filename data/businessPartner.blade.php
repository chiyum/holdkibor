
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
            name:'宏義工程',
            companyTel:'04-22288967',
            companyFax:'04-22288168',
            id:'896706634',
            address:'台中市龍井區工業路256巷10號/台北市三重區興德路100號8樓',
            service:'消防排煙/空調設備/防爆馬達(德國)/驅動器',
            contactPerson1:'許小姐',
            jobTitle1:'會計',
            contactTel1:'04-22280513',
            contactNumber1:'0980-092777',
            contactEamil1:'abc999052@gmail.com',
            contactPerson2:'謝小姐',
            jobTitle2:'業務',
            contactTel2:'04-22287794',
            contactNumber2:'0980-092566',
            contactEamil2:'abc123456@gmail.com',
            isClose:false,
            isShow:true,
            isbgw:false,
            isbgg:false,
        },
        {
            companyName:'瑞展工程股份有限公司',
            name:'瑞展工程',
            companyTel:'04-22899738',
            companyFax:'04-22420458',
            id:'21452829',
            address:'台中市龍井區工業路256巷10號/台北市三重區興德路100號8樓',
            service:'切割鑽孔/植筋/道路切割',
            contactPerson1:'黃先生',
            jobTitle1:'總經理',
            contactTel1:'04-22920458',
            contactNumber1:'0932594115',
            contactEamil1:'holdkibor09@gmail.com',
            contactPerson2:'賴小姐',
            jobTitle2:'副總',
            contactTel2:'04-22287794',
            contactNumber2:'0980-092566',
            contactEamil2:'kpi123456@gmail.com',
            isClose:false,
            isShow:true,
            isbgw:false,
            isbgg:false,
        },
        {
            companyName:'微風實業股份有限公司',
            name:'微風實業',
            companyTel:'04-22288967',
            companyFax:'04-22288168',
            id:'89676633',
            address:'台中市龍井區工業路256巷10號/台北市三重區興德路100號8樓',
            service:'消防排煙/空調設備/防爆馬達(德國)/驅動器',
            contactPerson1:'許小姐',
            jobTitle1:'會計',
            contactTel1:'04-22280513',
            contactNumber1:'0980-092777',
            contactEamil1:'abc999052@gmail.com',
            contactPerson2:'謝小姐',
            jobTitle2:'業務',
            contactTel2:'04-22287794',
            contactNumber2:'0980-092566',
            contactEamil2:'abc123456@gmail.com',
            isClose:false,
            isShow:true,
            isbgw:false,
            isbgg:false,
        },
        {
            companyName:'長春醫療股份有限公司',
            name:'長春醫療',
            companyTel:'04-22288967',
            companyFax:'04-22288168',
            id:'89670632',
            address:'台中市龍井區工業路256巷10號/台北市三重區興德路100號8樓',
            service:'消防排煙/空調設備/防爆馬達(德國)/驅動器',
            contactPerson1:'許小姐',
            jobTitle1:'會計',
            contactTel1:'04-22280513',
            contactNumber1:'0980-092777',
            contactEamil1:'abc999052@gmail.com',
            contactPerson2:'謝小姐',
            jobTitle2:'業務',
            contactTel2:'04-22287794',
            contactNumber2:'0980-092566',
            contactEamil2:'abc123456@gmail.com',
            isClose:false,
            isShow:true,
            isbgw:false,
            isbgg:false,
        },
        {
            companyName:'國泰建設股份有限公司',
            name:'國泰建設',
            companyTel:'04-92421737',
            companyFax:'04-22288168',
            id:'89706631',
            address:'台中市龍井區工業路256巷10號/台北市三重區興德路100號8樓',
            service:'消防排煙/空調設備/防爆馬達(德國)/驅動器',
            contactPerson1:'許小姐',
            jobTitle1:'會計',
            contactTel1:'04-22280513',
            contactNumber1:'0980-092777',
            contactEamil1:'abc999052@gmail.com',
            contactPerson2:'謝小姐',
            jobTitle2:'業務',
            contactTel2:'04-22287794',
            contactNumber2:'0980-092566',
            contactEamil2:'abc123456@gmail.com',
            isClose:false,
            isShow:true,
            isbgw:false,
            isbgg:false,
        },
        {
            companyName:'國泰建設股份有限公司',
            name:'國泰建設',
            companyTel:'04-92421737',
            companyFax:'04-22288168',
            id:'89706641',
            address:'台中市龍井區工業路256巷10號/台北市三重區興德路100號8樓',
            service:'消防排煙/空調設備/防爆馬達(德國)/驅動器',
            contactPerson1:'許小姐',
            jobTitle1:'會計',
            contactTel1:'04-22280513',
            contactNumber1:'0980-092777',
            contactEamil1:'abc999052@gmail.com',
            contactPerson2:'謝小姐',
            jobTitle2:'業務',
            contactTel2:'04-22287794',
            contactNumber2:'0980-092566',
            contactEamil2:'abc123456@gmail.com',
            isClose:false,
            isShow:true,
            isbgw:false,
            isbgg:false,
        },
        {
            companyName:'國泰建設股份有限公司',
            name:'國泰建設',
            companyTel:'04-22288967',
            companyFax:'04-22288168',
            id:'89706641',
            address:'台中市龍井區工業路256巷10號/台北市三重區興德路100號8樓',
            service:'消防排煙/空調設備/防爆馬達(德國)/驅動器',
            contactPerson1:'許小姐',
            jobTitle1:'會計',
            contactTel1:'04-22280513',
            contactNumber1:'0980-092777',
            contactEamil1:'abc999052@gmail.com',
            contactPerson2:'謝小姐',
            jobTitle2:'業務',
            contactTel2:'04-22287794',
            contactNumber2:'0980-092566',
            contactEamil2:'abc123456@gmail.com',
            isClose:false,
            isShow:true,
            isbgw:false,
            isbgg:false,
        },
    ];

    Vue.createApp({
        data(){
            return{
                peopleData:[],
                temp_obj:{
                  companyName:'',//必填
                  name:'',
                  companyTel:'',//必填
                  companyFax:'',
                  id:'',//必填
                  address:'',//必填
                  service:'',//必填
                  contactPerson1:'',//必填
                  jobTitle1:'',
                  contactTel1:'',//必填
                  contactNumber1:'',//必填
                  contactEamil1:'',
                  contactPerson2:'',
                  jobTitle2:'',
                  contactTel2:'',
                  contactNumber2:'',
                  contactEamil2:'',
                  isClose:false,
                  isShow:true,
                  isbgw:false,
                  isbgg:false,
                },//彈窗占存用
                temp_num:'',//占存刪除用
                search:'',
                popupShow:false,//總彈窗
                popup_delShow:false,//刪除彈窗
                popup_editShow:false,//編輯新增彈窗
                popup_edit_resetShow:false,//編輯新增彈窗
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
                if(value ==''||!value){//若為空值 清除顏色及取消全部隱藏
                  this.peopleData.forEach( (data,i) => {
                    data.isShow = true;//顯示資料
                    // data.isbgg = false;//灰色設定關閉
                    // data.isbgw = false;//白色設定關閉
                  });
                  return
                }//若為空值則return
                // let num = 1;//顏色計數用
                this.peopleData.forEach( (data,i) => {
                    data.isShow = false;//先將所有的資料都隱藏
                    if(data.companyName.indexOf(value.toUpperCase())>=0||data.companyName.indexOf(value.toLowerCase())>=0||data.name.indexOf(value.toUpperCase())>=0||data.name.indexOf(value.toLowerCase())>=0||data.companyTel.indexOf(value.toUpperCase())>=0||data.companyTel.indexOf(value.toLowerCase())>=0||data.companyFax.indexOf(value.toUpperCase())>=0||data.companyFax.indexOf(value.toLowerCase())>=0||data.id.indexOf(value.toUpperCase())>=0||data.id.indexOf(value.toLowerCase())>=0){
                        data.isShow = true;//將符合關鍵字的資料顯示
                        // num++//計數+1
                        // if(num % 2 == 0){//若計數為偶數
                        //   data.isbgw = true;//顏色切換白
                        // }else if(num %2 !=0){//若計數為奇術
                        //   data.isbgg = true;//顏色切灰
                        // }
                    };
                });
                // num = 1;//reset計數
                // this.search = '';//清空輸入框
            },
            deldata_popup(iteam){//刪除彈窗跳出及取得欲刪除序列
                this.peopleData.find( (data,i) => {
                    if(iteam.id == data.id){
                        this.temp_num = i;//占存刪除的檔案位址
                        this.temp_obj.companyName = data.companyName;
                    }
                });
                $('#delModal').modal('show');
            },
            deldata(){//刪除
                this.peopleData.splice(this.temp_num,1);//將資料刪除
                this.temp_num = '';//reset
                $('#delModal').modal('hide');
            },
            cxlDeldata(){//選單隱藏
                $('#delModal').modal('hide')
                $('#editModal').modal('hide')
            },
            edit_popup(item){
              this.edit_popup_reset();//reset殘留資料
              $('#editModal').modal('show');
              this.popup_edit_title = '編輯';
              this.popup_edit_resetShow = true;//清除選單開啟
              this.temp_obj.companyName = item.companyName;
              this.temp_obj.name = item.name;
              this.temp_obj.companyTel = item.companyTel;
              this.temp_obj.companyFax = item.companyFax;
              this.temp_obj.id = item.id;
              this.temp_obj.address = item.address;
              this.temp_obj.service = item.service;
              this.temp_obj.contactPerson1 = item.contactPerson1;
              this.temp_obj.jobTitle1 = item.jobTitle1;
              this.temp_obj.contactTel1 = item.contactTel1;
              this.temp_obj.contactNumber1 = item.contactNumber1;
              this.temp_obj.contactEamil1 = item.contactEamil1;
              this.temp_obj.contactPerson2 = item.contactPerson2;
              this.temp_obj.jobTitle2 = item.jobTitle2;
              this.temp_obj.contactTel2 = item.contactTel2;
              this.temp_obj.contactNumber2 = item.contactNumber2;
              this.temp_obj.contactEamil2 = item.contactEamil2;
              this.temp_obj.isClose = false;
              this.temp_obj.isShow = true;
              this.temp_obj.isbgw = false;
              this.temp_obj.isbgg = false;
              this.peopleData.find( (data,i) => {//取得資料位置
                    if(item.id == data.id){
                        this.temp_num = i;//占存刪除的檔案位址
                    };
              });
            },
            edit_popup_reset(){ //清除
              this.temp_obj.companyName = '';
              this.temp_obj.name = '';
              this.temp_obj.companyTel = '';
              this.temp_obj.companyFax = '';
              this.temp_obj.id = '';
              this.temp_obj.address = '';
              this.temp_obj.service = '';
              this.temp_obj.contactPerson1 = ''
              this.temp_obj.jobTitle1 = '';
              this.temp_obj.contactTel1 = '';
              this.temp_obj.contactNumber1 = '';
              this.temp_obj.contactEamil1 = '';
              this.temp_obj.contactPerson2 = '';
              this.temp_obj.jobTitle2 = '';
              this.temp_obj.contactTel2 = '';
              this.temp_obj.contactNumber2 = '';
              this.temp_obj.contactEamil2 = '';
            },
            edit_popup_change(){ //儲存
              if(this.temp_obj.companyName ==''||this.temp_obj.companyTel ==''||this.temp_obj.id ==''||this.temp_obj.address ==''||this.temp_obj.service ==''||this.temp_obj.contactPerson1 ==''||this.temp_obj.contactTel1 ==''||this.temp_obj.contactNumber1 ==''){
                alert('儲存失敗!必填欄位請填寫。')
                return
              }
              if(this.temp_num ===''){//偵測不到位置為新增
                let obj = {...this.temp_obj};//轉移資料
                obj.isClose = true;//打開子列表
                this.peopleData.push(obj);//上傳至檔案群組
                obj = {};//清空臨時列表
                this.edit_popup_reset();
              }else{
                this.peopleData[this.temp_num].companyName = this.temp_obj.companyName;
                this.peopleData[this.temp_num].name = this.temp_obj.name;
                this.peopleData[this.temp_num].companyTel = this.temp_obj.companyTel;
                this.peopleData[this.temp_num].companyFax = this.temp_obj.companyFax;
                this.peopleData[this.temp_num].id = this.temp_obj.id;
                this.peopleData[this.temp_num].address = this.temp_obj.address;
                this.peopleData[this.temp_num].service = this.temp_obj.service;
                this.peopleData[this.temp_num].contactPerson1 = this.temp_obj.contactPerson1;
                this.peopleData[this.temp_num].jobTitle1 = this.temp_obj.jobTitle1;
                this.peopleData[this.temp_num].contactTel1 = this.temp_obj.contactTel1;
                this.peopleData[this.temp_num].contactNumber1 = this.temp_obj.contactNumber1;
                this.peopleData[this.temp_num].contactEamil1 = this.temp_obj.contactEamil1;
                this.peopleData[this.temp_num].contactPerson2 = this.temp_obj.contactPerson2;
                this.peopleData[this.temp_num].jobTitle2 = this.temp_obj.jobTitle2;
                this.peopleData[this.temp_num].contactTel2 = this.temp_obj.contactTel2;
                this.peopleData[this.temp_num].contactNumber2 = this.temp_obj.contactNumber2;
                this.peopleData[this.temp_num].contactEamil2 = this.temp_obj.contactEamil2;
                this.peopleData[this.temp_num].isClose = true;//打開面板
                this.temp_num = '';//reset抓取位置

              }
              this.cxlDeldata();//隱藏選單
              this.edit_popup_reset();//清除預設
            },
            create_popup(){
              this.popup_edit_resetShow = false;//清除選單開啟
              this.temp_num = '';//新增前先清空位置
              this.edit_popup_reset();//清空臨時資料
              this.popup_edit_title = '新增';//更改視窗名稱
              $('#editModal').modal('show');
            }
        },
    }).mount('.container-fluid');


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
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
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
  height: 40px;
  font-size: 18px;
  color: #ffffff;
  font-weight: bold;
  background: -webkit-gradient(linear, left top, left bottom, from(#07d895), to(#04b87f));
  background: linear-gradient(to bottom, #07d895, #04b87f);
  cursor: pointer;
}

.main .table_head .shop .create_btn .create_btn_icon {
  font-size: 18px;
  margin-right: 5px;
  font-weight: bolder;
}

.main .table_head .shop .search {
  margin-right: 1.8px;
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
  padding: 0 30px;
  background: #808080;
}

.main .table_head .title p {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  padding: 5px 0;
  width: 25%;
  font-size: 18px;
  font-weight: bolder;
}

.main .table_main ul {
  overflow: auto;
  height: 74vh;
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
  padding: 0 30px;
}

.main .table_main ul li .list_top .list_top_icon {
  position: absolute;
  left: 0px;
  top: 2.5px;
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

.main .table_main ul li .list_top .list_top_icon_edit .edit_btn img {
  position: relative;
  bottom: 3px;
  width: 95%;
}

.main .table_main ul li .list_top .list_top_icon_edit .del_btn {
  cursor: pointer;
}

.main .table_main ul li .list_top .list_top_icon_edit .del_btn img {
  position: relative;
  bottom: 4px;
  width: 95%;
}

.main .table_main ul li .list_top p {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  padding: 5px 0;
  width: 20%;
  font-size: 18px;
  font-weight: 500;
}

.main .table_main ul li .list_bottom {
  padding: 0 30px;
  background: #C9E2DE;
}

.main .table_main ul li .list_bottom div {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  font-size: 18px;
}

.main .table_main ul li .list_bottom div p {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  padding: 3px 0;
  width: 20%;
  font-size: 18px;
  white-space: normal;
  word-wrap: break-word;
  word-break: break-all;
}

.main .table_main ul li .list_bottom div p span {
  white-space: nowrap;
}

.main .table_main ul li .list_bottom div:nth-child(3) p {
  width: 50%;
}

.main .table_main ul li .list_bottom div:nth-child(3) p strong {
  display: block;
  font-weight: 400;
}

.main .table_main ul li .list_bottom div:nth-child(3) p strong:nth-child(1) {
  white-space: nowrap;
}

.main .table_main ul li .list_bottom div:nth-child(3) p:nth-child(1) {
  width: 40%;
}

.main .table_main ul li .list_bottom div:nth-child(3) p:nth-child(2) {
  width: 60%;
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
  width: 864px;
}

.main .popup .edit_popup .edit_popup_title {
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
  height: 45px;
  color: #ffffff;
  border-radius: 10px 10px 0 0;
  background-color: #0167a0;
}

.main .popup .edit_popup .edit_popup_title h2 {
  font-size: 18px;
  position: relative;
  top: 5px;
}

.main .popup .edit_popup .edit_popup_title .close_icon {
  margin-top: 2px;
  font-size: 24px;
  font-weight: bolder;
  cursor: pointer;
}

.main .popup .edit_popup .edit_popup_main {
  background-color: #ffffff;
  border-radius: 0 0 10px 10px;
}

.main .popup .edit_popup .edit_popup_main input {
  padding-left: 5px;
}

.main .popup .edit_popup .edit_popup_main .col {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding-top: 10px;
  padding-left: 20px;
  padding-right: 20px;
  margin-bottom: 20px;
}

.main .popup .edit_popup .edit_popup_main .col div {
  width: 246px;
  white-space: nowrap;
}

.main .popup .edit_popup .edit_popup_main .col div select {
  padding-left: 5px;
  height: 26px;
  width: 223px;
  font-size: 15px;
  border-radius: 1px;
  border-top: 0.5px solid #efecec;
  -webkit-box-shadow: 1px 2px 3px 1px #c3c3c3;
          box-shadow: 1px 2px 3px 1px #c3c3c3;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: none;
  border: none;
}

.main .popup .edit_popup .edit_popup_main .col div .select_icon {
  position: relative;
  right: 30px;
  top: 6px;
  font-size: 22px;
  color: #b2b2b2;
}

.main .popup .edit_popup .edit_popup_main .col div input {
  height: 25px;
  border: none;
  border-top: 0.5px solid #efecec;
  outline: none;
  -webkit-box-shadow: 1px 2px 3px 1px #c3c3c3;
          box-shadow: 1px 2px 3px 1px #c3c3c3;
}

.main .popup .edit_popup .edit_popup_main .col .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.main .popup .edit_popup .edit_popup_main .col .row div p {
  margin-bottom: 3px;
}

.main .popup .edit_popup .edit_popup_main .col .row div input {
  width: 113px;
}

.main .popup .edit_popup .edit_popup_main .col .row div:nth-child(2) {
  position: relative;
}

.main .popup .edit_popup .edit_popup_main .col .middle {
  position: relative;
  top: 2px;
  width: 262px;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
}

.main .popup .edit_popup .edit_popup_main .col .right p {
  position: relative;
  top: 3px;
  margin-bottom: 6px;
}

.main .popup .edit_popup .edit_popup_main .col .right input {
  width: 100%;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(2) p {
  margin-bottom: 5px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(2) div:nth-child(1) input {
  width: 220px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(2) div:nth-child(2) {
  position: relative;
  right: 8px;
  width: 246px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(2) div:nth-child(2) input {
  width: 100%;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(2) div:nth-child(3) {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(2) div:nth-child(3) div {
  position: relative;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(2) div:nth-child(3) div select {
  width: 100px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(2) div:nth-child(3) div span {
  position: absolute;
  bottom: -5px;
  right: 25px;
  color: #b2b2b2;
  font-size: 22px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(2) div:nth-child(3) div:nth-child(2) {
  left: 22px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(3) p {
  margin-bottom: 5px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(3) div:nth-child(1) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(3) div:nth-child(1) div:nth-child(1) {
  position: relative;
  display: block;
  width: 200px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(3) div:nth-child(1) div:nth-child(1) select {
  width: 75px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(3) div:nth-child(1) div:nth-child(1) span {
  position: absolute;
  right: 40px;
  bottom: -5px;
  font-size: 22px;
  color: #b2b2b2;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(3) div:nth-child(1) div:nth-child(2) {
  position: relative;
  right: 15px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(3) div:nth-child(1) div:nth-child(2) input {
  width: 125px;
  height: 27px;
  font-size: 13px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(3) div:nth-child(2) {
  position: relative;
  right: 8px;
  width: 246px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(3) div:nth-child(2) input {
  width: 100%;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(3) div:nth-child(3) {
  width: 246px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(3) div:nth-child(3) input {
  width: 100%;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(4) {
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(4) p {
  margin-bottom: 5px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(4) div textarea {
  width: 223px;
  height: 61px;
  padding-left: 5px;
  border: none;
  border-top: 0.5px solid #efecec;
  -webkit-box-shadow: 1px 2px 3px 1px #c3c3c3;
          box-shadow: 1px 2px 3px 1px #c3c3c3;
  outline: none;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(4) div:nth-child(2) {
  position: relative;
  right: 8px;
  width: 246px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(4) div:nth-child(2) input {
  width: 100%;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(4) div:nth-child(3) {
  width: 246px;
}

.main .popup .edit_popup .edit_popup_main .col:nth-child(4) div:nth-child(3) input {
  width: 100%;
}

.main .popup .edit_popup .edit_popup_main .btn {
  position: relative;
  bottom: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0 20px;
}

.main .popup .edit_popup .edit_popup_main .btn span {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 6px;
  padding: 3px 10px;
  margin: 0px 2.5px;
  margin-top: -25px;
  cursor: pointer;
}

.main .popup .edit_popup .edit_popup_main .btn span:nth-child(1) {
  background-color: #e62d18;
  color: #ffffff;
}

.main .popup .edit_popup .edit_popup_main .btn span:nth-child(1):hover {
  background-color: #ff1900;
  color: #ffffff;
}

.main .popup .edit_popup .edit_popup_main .btn span:nth-child(2) {
  background-color: #0aa0c8;
  color: #ffffff;
}

.main .popup .edit_popup .edit_popup_main .btn span:nth-child(2):hover {
  background-color: #0cbbe7;
  color: #ffffff;
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

.must {
  margin-left: 2px;
  color: red !important;
  font-size: 16px !important;
  position: relative !important;
  bottom: 0px;
  right: 0px;
}

.must_fix {
  right: 0 !important;
}

.isbgG {
  background: #dbd6d6 !important;
}

.isbgW {
  background: #ffffff !important;
}

.bold {
  font-weight: bold;
}

.delModal {
  max-width: 420px;
}

.delModal .modal-content {
  background: none;
}

.delModal .modal-header {
  padding: 5px;
  color: #ffffff;
  border-bottom: none;
  border-radius: 10px 10px 0 0;
  background-color: #e62d18;
}

.delModal .modal-header button {
  margin-top: 3px !important;
  margin-right: 5px !important;
  font-size: 18px;
  opacity: 1;
}

.delModal .modal-header button span {
  color: #ffffff;
}

.delModal .modal-header .close {
  padding: 0;
  margin: 0;
}

.delModal .modal-header h5 {
  font-size: 18px;
  position: relative;
  left: 10px;
  top: 0px;
}

.delModal .modal-body {
  text-align: center;
  font-family: bolder;
  font-size: 18px;
  background: #ffffff;
}

.delModal .modal-footer {
  padding: 0;
  border-top: none;
  border-radius: 0 0 10px 10px;
  background: #ffffff;
}

.delModal .modal-footer button {
  position: relative;
  bottom: 10px;
  right: 5px;
  padding: 1px 15px;
  border-radius: 0px;
  border: none;
}

.delModal .modal-footer button:nth-child(1) {
  margin-right: -4px;
  color: #686868;
  background: #f3f3f3;
}

.delModal .modal-footer button:nth-child(1):hover {
  background: #efecec;
}

.delModal .modal-footer button:nth-child(2) {
  background: #0aa0c8;
}

.delModal .modal-footer button:nth-child(2):hover {
  background: #08aad6;
}

.editModal {
  max-width: 864px;
}

.editModal .modal-content {
  background: none;
}

.editModal .modal-header {
  height: 60px;
  color: #ffffff;
  border-radius: 10px 10px 0 0;
  background-color: #0167a0;
}

.editModal .modal-header button {
  opacity: 1;
}

.editModal .modal-header button span {
  color: #ffffff;
}

.editModal .modal-footer {
  display: none;
}

.editModal .modal-body {
  padding: 0;
  border: none;
}

.editModal .modal-body .edit_popup_title {
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
  height: 45px;
  color: #ffffff;
  border-radius: 10px 10px 0 0;
  background-color: #0167a0;
}

.editModal .modal-body .edit_popup_title h2 {
  font-size: 18px;
  position: relative;
  top: 5px;
}

.editModal .modal-body .edit_popup_title .close_icon {
  margin-top: 2px;
  font-size: 24px;
  font-weight: bolder;
  cursor: pointer;
}

.editModal .modal-body .edit_popup_main {
  background-color: #ffffff;
  border-radius: 0 0 10px 10px;
}

.editModal .modal-body .edit_popup_main input {
  padding-left: 5px;
}

.editModal .modal-body .edit_popup_main .col {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding-top: 10px;
  padding-left: 20px;
  padding-right: 20px;
  margin-bottom: 20px;
}

.editModal .modal-body .edit_popup_main .col div {
  width: 246px;
  white-space: nowrap;
}

.editModal .modal-body .edit_popup_main .col div select {
  padding-left: 5px;
  height: 26px;
  width: 223px;
  font-size: 15px;
  border-radius: 1px;
  border-top: 0.5px solid #efecec;
  -webkit-box-shadow: 1px 2px 3px 1px #c3c3c3;
          box-shadow: 1px 2px 3px 1px #c3c3c3;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: none;
  border: none;
}

.editModal .modal-body .edit_popup_main .col div .select_icon {
  position: relative;
  right: 30px;
  top: 6px;
  font-size: 22px;
  color: #b2b2b2;
}

.editModal .modal-body .edit_popup_main .col div input {
  height: 25px;
  border: none;
  border-top: 0.5px solid #efecec;
  outline: none;
  -webkit-box-shadow: 1px 2px 3px 1px #c3c3c3;
          box-shadow: 1px 2px 3px 1px #c3c3c3;
}

.editModal .modal-body .edit_popup_main .col .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.editModal .modal-body .edit_popup_main .col .row div p {
  margin-bottom: 3px;
}

.editModal .modal-body .edit_popup_main .col .row div input {
  width: 113px;
}

.editModal .modal-body .edit_popup_main .col .row div:nth-child(2) {
  position: relative;
}

.editModal .modal-body .edit_popup_main .col .middle {
  position: relative;
  top: 2px;
  width: 262px;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
}

.editModal .modal-body .edit_popup_main .col .right p {
  position: relative;
  top: 3px;
  margin-bottom: 6px;
}

.editModal .modal-body .edit_popup_main .col .right input {
  width: 100%;
}

.editModal .modal-body .edit_popup_main .col:nth-child(1) div {
  width: 110px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(1) div input {
  width: 100%;
}

.editModal .modal-body .edit_popup_main .col:nth-child(1) div:nth-child(1), .editModal .modal-body .edit_popup_main .col:nth-child(1) div:nth-child(5) {
  width: 200px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(2) p, .editModal .modal-body .edit_popup_main .col:nth-child(3) p {
  margin-bottom: 5px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(2) div, .editModal .modal-body .edit_popup_main .col:nth-child(3) div {
  width: 110px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(2) div input, .editModal .modal-body .edit_popup_main .col:nth-child(3) div input {
  width: 100%;
}

.editModal .modal-body .edit_popup_main .col:nth-child(2) div:nth-child(5), .editModal .modal-body .edit_popup_main .col:nth-child(3) div:nth-child(5) {
  width: 270px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(4) {
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}

.editModal .modal-body .edit_popup_main .col:nth-child(4) div {
  margin-right: 85px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(4) div textarea {
  outline: none;
  border: none;
  -webkit-box-shadow: 1px 2px 3px 1px #c3c3c3;
          box-shadow: 1px 2px 3px 1px #c3c3c3;
  border-top: 0.5px solid #efecec;
  height: 60px;
  width: 280px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(4) div:nth-child(1) textarea {
  width: 300px;
}

.editModal .modal-body .edit_popup_main .btn {
  position: relative;
  bottom: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0 20px;
}

.editModal .modal-body .edit_popup_main .btn span {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 6px;
  padding: 3px 10px;
  margin: 0px 2.5px;
  margin-top: -25px;
  cursor: pointer;
}

.editModal .modal-body .edit_popup_main .btn span:nth-child(1) {
  background-color: #e62d18;
  color: #ffffff;
}

.editModal .modal-body .edit_popup_main .btn span:nth-child(1):hover {
  background-color: #ff1900;
  color: #ffffff;
}

.editModal .modal-body .edit_popup_main .btn span:nth-child(2) {
  background-color: #0aa0c8;
  color: #ffffff;
}

.editModal .modal-body .edit_popup_main .btn span:nth-child(2):hover {
  background-color: #0cbbe7;
  color: #ffffff;
}
/*# sourceMappingURL=conpany.css.map */
</style>
@endsection



@section('wrapper-head')
<div class="wrapper-contentTitle"> 公司總表</div>
<!-- 預設樣式 -->
@endsection



@section('wrapper-main')
<!-- html -->
<div class="container-fluid">
    <div class="main">
        <div class="table_head">
            <div class="shop">
                <div class="create_btn" @click="create_popup" ><span class="create_btn_icon">✚</span>新增廠商資訊</div>
                <div class="search">
                    <input type="text" v-model="search" v-on:keyup.enter="searchKeyWord">
                    <span class="search_btn" @click="searchKeyWord"><ion-icon name="search-outline"></ion-icon></span>
                </div>
            </div>
            <div class="title">
                <p>公司名稱</p>
                <p>短名稱</p>
                <p>電話</p>
                <p>傳真</p>
                <p>公司統編</p>
            </div>
        </div>
        <div class="table_main">
            <ul>
                <template v-for="iteam in peopleData" :key="iteam.id">
                  <li v-if="iteam.isShow" :class="{isbgW:iteam.isbgw,isbgG:iteam.isbgg}">
                      <div class="list_top">
                          <div class="list_top_icon" v-on:click="switchOpen(iteam)" :class="{open:iteam.isClose}">
                              <ion-icon name="caret-forward-outline"></ion-icon>
                          </div>
                          <p>@{{iteam.companyName}}</p>
                          <p>@{{iteam.name}}</p>
                          <p>@{{iteam.companyTel}}</p>
                          <p>@{{iteam.companyFax}}</p>
                          <p>@{{iteam.id}}</p>
                          <div class="list_top_icon_edit">
                              <div class="edit_btn" @click="edit_popup(iteam)" ><img src="{{ asset('img/ICON/edit_icon.svg') }}" alt="圖標"></div>
                              <div class="del_btn" @click="deldata_popup(iteam)"><img src="{{ asset('img/ICON/del_icon.svg') }}" alt="圖標"></div>
                          </div>
                      </div>
                      <div class="list_bottom" v-if="iteam.isClose">
                             <div>
                               <p><span>聯絡人1：</span>@{{iteam.contactPerson1}}</p>
                               <p><span>職稱：</span>@{{iteam.jobTitle1}}</p>
                               <p><span>電話：</span>@{{iteam.contactTel1}}</p>
                               <p><span>手機：</span>@{{iteam.contactNumber1}}</p>
                               <p><span>信箱：</span>@{{iteam.contactEamil1}}</p>
                             </div>
                             <div>
                             <p><span>聯絡人1：</span>@{{iteam.contactPerson2}}</p>
                               <p><span>職稱：</span>@{{iteam.jobTitle2}}</p>
                               <p><span>電話：</span>@{{iteam.contactTel2}}</p>
                               <p><span>手機：</span>@{{iteam.contactNumber2}}</p>
                               <p><span>信箱：</span>@{{iteam.contactEamil2}}</p>
                             </div>
                             <div>
                               <p><strong>服務/產品：</strong><strong>@{{iteam.service}}</strong></p>
                               <p><strong>通訊地址：</strong><strong>@{{iteam.address}}</strong></p>
                             </div>
                      </div>
                  </li>
                </template>
            </ul>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog editModal modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">@{{popup_edit_title}}人員資料</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <div class="edit_popup_main">
                        <div class="col">
                            <div>
                                <p>公司名稱<span class="must">*</span></p>
                                <input type="text" v-model="temp_obj.companyName">
                            </div>
                            <div>
                                <p>短名稱</p>
                                <input type="text" v-model="temp_obj.name">
                            </div>
                            <div>
                                <p>電話<span class="must">*</span></p>
                                <input type="text" v-model="temp_obj.companyTel">
                            </div>
                            <div>
                                <p>傳真</p>
                                <input type="text" v-model="temp_obj.companyFax">
                            </div>
                            <div>
                                <p>公司統編<span class="must">*</span></p>
                                <input type="text" v-model="temp_obj.id">
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p>聯絡人1<span class="must">*</span></p>
                                <input type="text" v-model="temp_obj.contactPerson1"></input>
                            </div>
                            <div>
                                <p>職稱</p>
                                <input type="text" v-model="temp_obj.jobTitle1"></input>
                            </div>
                            <div>
                                <p>電話<span class="must">*</span></p>
                                <input type="text" v-model="temp_obj.contactTel1">
                            </div>
                            <div>
                                <p>手機<span class="must">*</span></p>
                                <input type="text" v-model="temp_obj.contactNumber1">
                            </div>
                            <div>
                                <p>信箱</p>
                                <input type="text" v-model="temp_obj.contactEamil1">
                            </div>
                        </div>
                        <div class="col">
                        <div>
                                <p>聯絡人2</p>
                                <input type="text" v-model="temp_obj.contactPerson2"></input>
                            </div>
                            <div>
                                <p>職稱</p>
                                <input type="text" v-model="temp_obj.jobTitle2"></input>
                            </div>
                            <div>
                                <p>電話</p>
                                <input type="text" v-model="temp_obj.contactTel2">
                            </div>
                            <div>
                                <p>手機</p>
                                <input type="text" v-model="temp_obj.contactNumber2">
                            </div>
                            <div>
                                <p>信箱</p>
                                <input type="text" v-model="temp_obj.contactEamil2">
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p>通訊地址<span class="must">*</span></p>
                                <textarea name="" id="" cols="28" rows="4" v-model="temp_obj.address"></textarea>
                            </div>
                            <div>
                                <p>產品/服務<span class="must">*</span></p>
                                <textarea name="" id="" cols="28" rows="4" v-model="temp_obj.service"></textarea>
                            </div>
                        </div>
                        <div class="btn">
                            <span v-on:click="edit_popup_reset" v-show="popup_edit_resetShow"><ion-icon name="trash"></ion-icon>清除</span>
                            <span @click="edit_popup_change"><ion-icon name="cloud-upload"></ion-icon>儲存</span>
                        </div>
                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
          <button type="button" class="btn btn-primary">確定</button>
        </div>
      </div>
    </div>
  </div>
  <!-- 刪除彈窗 -->
  <div class="modal fade" id="delModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered delModal">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title">刪除</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        確認是否刪除<span class="bold">@{{temp_obj.companyName}}</span>的資料資料?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" @click="deldata">確定</button>
      </div>
    </div>
  </div>
  </div>
</div>

@endsection
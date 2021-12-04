
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
            line_userid:'lineabc123',
            isbgw:false,
            isbgg:false,
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
            line_userid:'lineabc123',
            isbgw:false,
            isbgg:false,
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
            line_userid:'lineabc123',
            isbgw:false,
            isbgg:false,
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
            line_userid:'lineabc123',
            isbgw:false,
            isbgg:false,
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
            birthday:'1701/05/19',
            phoneNumber:'0800092000',
            email:'abc123456@gmail.com',
            address:'台中市西區英才路432號12樓',
            contactPerson:'李小姐',
            contactNumber:'0975-697531',
            isClose:false,
            isShow:true,
            line_userid:'lineabc123',
            isbgw:false,
            isbgg:false,
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
            line_userid:'lineabc123',
            isbgw:false,
            isbgg:false,
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
            line_userid:'lineabc123',
            isbgw:false,
            isbgg:false,
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
            birthday:'1992/10/10',
            phoneNumber:'0800-092000',
            email:'abc123456@gmail.com',
            address:'台中市南屯區向心南路906巷55號2樓之7號',
            contactPerson:'謝小姐',
            contactNumber:'0975-697531',
            isClose:false,
            isShow:true,
            line_userid:'lineabc123',
            isbgw:false,
            isbgg:false,
        },
        {
            companyName:'宏義工程股份有限公司',
            position:'施工人員',
            name:'鐵木阿棒',
            cardid:'M294467154',
            id:'A00009',
            sex:'女',
            blood:'O',
            aborad:'是',
            birthday:'1992/10/10',
            phoneNumber:'0800-092000',
            email:'abc123456@gmail.com',
            address:'台中市南屯區向心南路906巷55號2樓之7號',
            contactPerson:'謝小姐',
            contactNumber:'0975-697531',
            isClose:false,
            isShow:true,
            line_userid:'lineabc123',
            isbgw:false,
            isbgg:false,
        },
    ];

    Vue.createApp({
        data(){
            return{
                peopleData:[],
                temp_obj:{
                  companyName:'',
                  position:'',
                  name:'',
                  cardid:'',
                  id:'',
                  line_userid:'',
                  sex:'',
                  blood:'',
                  aborad:'',
                  birthday:'',
                  phoneNumber:'',
                  email:'',
                  address:'',
                  contactPerson:'',
                  contactNumber:'',
                  isClose:false,
                  isShow:true,
                  isbgg:false,
                  isbgw:false,
                },//彈窗占存用
                temp_num:'',//占存刪除用
                search:'',
                popupShow:false,//總彈窗
                popup_delShow:false,//刪除彈窗
                popup_editShow:false,//編輯新增彈窗
                popup_edit_resetShow:false,//編輯新增彈窗
                popup_edit_title:'編輯',
                popup_edit_btn:'清除',
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
                    data.isbgg = false;//灰色設定關閉
                    data.isbgw = false;//白色設定關閉
                  });
                  return
                }//若為空值則return
                let num = 1;//顏色計數用
                this.peopleData.forEach( (data,i) => {
                    data.isShow = false;//先將所有的資料都隱藏
                    if(data.companyName.indexOf(value.toUpperCase())>=0||data.companyName.indexOf(value.toLowerCase())>=0||data.position.indexOf(value.toUpperCase())>=0||data.position.indexOf(value.toLowerCase())>=0||data.name.indexOf(value.toUpperCase())>=0||data.name.indexOf(value.toLowerCase())>=0||data.cardid.indexOf(value.toUpperCase())>=0||data.cardid.indexOf(value.toLowerCase())>=0||data.id.indexOf(value.toUpperCase())>=0||data.id.indexOf(value.toLowerCase())>=0){
                        data.isShow = true;//將符合關鍵字的資料顯示
                        num++//計數+1
                        if(num % 2 == 0){//若計數為偶數
                          data.isbgw = true;//顏色切換白
                        }else if(num %2 !=0){//若計數為奇術
                          data.isbgg = true;//顏色切灰
                        }
                    };
                });
                num = 1;//reset計數
                // this.search = '';//清空輸入框
            },
            deldata_popup(iteam){//刪除彈窗跳出及取得欲刪除序列
                this.peopleData.find( (data,i) => {
                    if(iteam.id == data.id){
                        this.temp_num = i;//占存刪除的檔案位址
                        this.temp_obj.name = data.name;
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
              this.edit_popup_reset();//清空臨時資料
              this.popup_edit_title = '編輯';
              this.popup_edit_btn = '重製密碼';
              this.popup_edit_resetShow = false;//清除icon關閉
              let birthday = item.birthday;//生日字串轉換
              birthday = birthday.split('/');
              birthday = birthday.join('-')
              this.temp_obj.birthday = item.birthday;//取得生日
              this.temp_obj.companyName = item.companyName;//取得公司名稱
              this.temp_obj.position = item.position;//取得職位
              this.temp_obj.name = item.name;//取得名字
              this.temp_obj.cardid = item.cardid;//取得身分證號
              this.temp_obj.id = item.id;//取得帳號
              this.temp_obj.sex = item.sex;//取得性別
              this.temp_obj.blood = item.blood;//取得血型
              this.temp_obj.aborad = item.aborad;//取得移工與否資訊
              this.temp_obj.phoneNumber = item.phoneNumber;//取得手機號碼
              this.temp_obj.email = item.email;//取得email
              this.temp_obj.address = item.address;//取得地址
              this.temp_obj.contactPerson = item.contactPerson;//取得緊急人
              this.temp_obj.contactNumber = item.contactNumber;//取得緊急電話
              this.temp_obj.line_userid = item.line_userid;//取得line id
              this.peopleData.find( (data,i) => {//取得資料位置
                    if(item.id == data.id){
                        this.temp_num = i;//占存儲存的檔案位址
                    };
              });
            },
            edit_popup_reset(){ //清除
              this.temp_obj.companyName = '';
              this.temp_obj.position = '';
              this.temp_obj.name = '';
              this.temp_obj.cardid = '';
              this.temp_obj.id = '';
              this.temp_obj.line_userid = '';
              this.temp_obj.sex = '';
              this.temp_obj.blood = '';
              this.temp_obj.aborad = '';
              this.temp_obj.birthday = '';
              this.temp_obj.phoneNumber = '';
              this.temp_obj.email = '';
              this.temp_obj.address = '';
              this.temp_obj.contactPerson = '';
              this.temp_obj.contactNumber = '';
            },
            popup_btnFn(){
              if(this.popup_edit_btn == '清除'){//若為清除則清除內容
                this.edit_popup_reset();
              }else{//若為重設則啟動重啟密碼的功能
                alert('密碼已成功修改成預設密碼')
              };
            },
            edit_popup_change(){ //儲存
              if(this.temp_obj.companyName == ''||this.temp_obj.name == ''||this.temp_obj.cardid == ''||this.temp_obj.sex == ''||this.temp_obj.blood == ''||this.temp_obj.aborad == ''||this.temp_obj.contactPerson == ''||this.temp_obj.contactNumber == ''){
                alert('儲存失敗!請確認必填欄位填寫正確');
                return;
              }
              if(this.temp_num ===''){//偵測不到位置為新增
                let obj = {...this.temp_obj};//轉移資料
                obj.isClose = true;//打開子列表
                obj.birthday = obj.birthday.split('-').join('/');
                this.peopleData.push(obj);//上傳至檔案群組
                obj = {};//清空臨時列表
                this.edit_popup_reset();
                this.temp_num = '';
              }else{
                this.peopleData[this.temp_num].isClose = true;
                this.peopleData[this.temp_num].companyName = this.temp_obj.companyName;
                this.peopleData[this.temp_num].position = this.temp_obj.position;
                this.peopleData[this.temp_num].name = this.temp_obj.name;
                this.peopleData[this.temp_num].cardid = this.temp_obj.cardid;
                this.peopleData[this.temp_num].id = this.temp_obj.id;
                this.peopleData[this.temp_num].line_userid = this.temp_obj.line_userid;
                this.peopleData[this.temp_num].sex = this.temp_obj.sex;
                this.peopleData[this.temp_num].blood = this.temp_obj.blood;
                this.peopleData[this.temp_num].aborad = this.temp_obj.aborad;
                this.peopleData[this.temp_num].birthday = this.temp_obj.birthday.split('-').join('/');//將生日的間隔符號更改
                this.peopleData[this.temp_num].phoneNumber = this.temp_obj.phoneNumber;
                this.peopleData[this.temp_num].email = this.temp_obj.email;
                this.peopleData[this.temp_num].address = this.temp_obj.address;
                this.peopleData[this.temp_num].contactPerson = this.temp_obj.contactPerson;
                this.peopleData[this.temp_num].contactNumber = this.temp_obj.contactNumber;
                this.temp_num = '';
              }
              this.cxlDeldata();//隱藏選單
              this.edit_popup_reset();//清除預設
            },
            create_popup(){
              this.temp_num = '';//新增前先清空位置
              this.edit_popup_reset();//清空臨時資料
              this.popup_edit_title = '新增';//更改視窗名稱
              this.popup_edit_btn = '清除';
              this.popup_edit_resetShow = true;//清除icon開啟
              $('#editModal').modal('show');
            },
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
  color: #ffffff;
  font-weight: bold;
  background: -webkit-gradient(linear, left top, left bottom, from(#07d895), to(#04b87f));
  background: linear-gradient(to bottom, #07d895, #04b87f);
  cursor: pointer;
}

.main .table_head .shop .create_btn .create_btn_icon {
  margin-right: 5px;
  font-size: 18px;
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

.select_set {
  position: relative !important;
  background: none !important;
  z-index: 10 !important;
}

.delModal {
  max-width: 288px;
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
  background: none;
}

.editModal .modal-content {
  background: none;
}

.editModal .modal-content button {
  opacity: 1;
}

.editModal .modal-content button span {
  color: #ffffff;
}

.editModal .modal-header {
  border-radius: 10px 10px 0 0;
  background: #0167a0;
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

.editModal .modal-body .edit_popup_main .col:nth-child(2) p {
  margin-bottom: 5px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(2) div:nth-child(1) input {
  width: 220px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(2) div:nth-child(2) {
  position: relative;
  right: 8px;
  width: 246px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(2) div:nth-child(2) input {
  width: 100%;
}

.editModal .modal-body .edit_popup_main .col:nth-child(2) div:nth-child(3) {
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

.editModal .modal-body .edit_popup_main .col:nth-child(2) div:nth-child(3) div {
  position: relative;
}

.editModal .modal-body .edit_popup_main .col:nth-child(2) div:nth-child(3) div select {
  width: 100px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(2) div:nth-child(3) div span {
  position: absolute;
  bottom: -5px;
  right: 25px;
  color: #b2b2b2;
  font-size: 22px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(2) div:nth-child(3) div:nth-child(2) {
  left: 22px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(3) p {
  margin-bottom: 5px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(3) div:nth-child(1) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.editModal .modal-body .edit_popup_main .col:nth-child(3) div:nth-child(1) div:nth-child(1) {
  position: relative;
  display: block;
  width: 200px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(3) div:nth-child(1) div:nth-child(1) select {
  width: 75px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(3) div:nth-child(1) div:nth-child(1) span {
  position: absolute;
  right: 40px;
  bottom: -5px;
  font-size: 22px;
  color: #b2b2b2;
}

.editModal .modal-body .edit_popup_main .col:nth-child(3) div:nth-child(1) div:nth-child(2) {
  position: relative;
  right: 15px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(3) div:nth-child(1) div:nth-child(2) input {
  width: 125px;
  height: 27px;
  font-size: 13px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(3) div:nth-child(2) {
  position: relative;
  right: 8px;
  width: 246px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(3) div:nth-child(2) input {
  width: 100%;
}

.editModal .modal-body .edit_popup_main .col:nth-child(3) div:nth-child(3) {
  width: 246px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(3) div:nth-child(3) input {
  width: 100%;
}

.editModal .modal-body .edit_popup_main .col:nth-child(4) {
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.editModal .modal-body .edit_popup_main .col:nth-child(4) p {
  margin-bottom: 5px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(4) div textarea {
  width: 223px;
  height: 61px;
  padding-left: 5px;
  border: none;
  border-top: 0.5px solid #efecec;
  -webkit-box-shadow: 1px 2px 3px 1px #c3c3c3;
          box-shadow: 1px 2px 3px 1px #c3c3c3;
  outline: none;
}

.editModal .modal-body .edit_popup_main .col:nth-child(4) div:nth-child(2) {
  position: relative;
  right: 8px;
  width: 246px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(4) div:nth-child(2) input {
  width: 100%;
}

.editModal .modal-body .edit_popup_main .col:nth-child(4) div:nth-child(3) {
  width: 246px;
}

.editModal .modal-body .edit_popup_main .col:nth-child(4) div:nth-child(3) input {
  width: 100%;
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
        <div class="table_head">
            <div class="shop">
                <div class="create_btn" @click="create_popup" ><span class="create_btn_icon">✚</span>新增人員列表</div>
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
                <li v-for="iteam in peopleData" :key="iteam.id" v-show="iteam.isShow" :class="{isbgW:iteam.isbgw,isbgG:iteam.isbgg}">
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
                            <div class="edit_btn" @click="edit_popup(iteam)" ><img src="{{ asset('img/ICON/edit_icon.svg') }}" alt="圖標"></div>
                            <div class="del_btn" @click="deldata_popup(iteam)"><img src="{{ asset('img/ICON/del_icon.svg') }}" alt="圖標"></div>
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
                            <p>@{{iteam.aborad}}</p>
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
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog editModal modal-dialog-centered">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title edit_popup_title" >@{{popup_edit_title}}人員資料</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <div class="edit_popup_main">
                        <div class="col">
                            <div>
                                <p>公司名稱<span class="must">*</span></p>
                                <select v-model="temp_obj.companyName" class="select_set">
                                    <option value="宏義工程股份有限公司">宏義工程股份有限公司</option>
                                    <option value="唐宋工程股份有限公司">唐宋工程股份有限公司</option>
                                </select> 
                                <span class="select_icon" @click="click_company">
                                    <ion-icon name="caret-down-outline"></ion-icon>
                                </span>
                            </div>
                            <div class="row middle">
                                <div>
                                    <p>職稱</p>
                                    <input type="text" v-model="temp_obj.position" id="testId">
                                </div>
                                <div>
                                    <p>姓名<span class="must">*</span></p>
                                    <input type="text" v-model="temp_obj.name">
                                </div>
                            </div>
                            <div class="right">
                                <p>LINE ID</p>
                                <input type="text" v-model="temp_obj.line_userid">
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p>身分證字號<span class="must">*</span></p>
                                <input type="text" v-model="temp_obj.cardid"></input>
                            </div>
                            <div>
                                <p>帳號</p>
                                <input type="text" v-model="temp_obj.id" ></input>
                            </div>
                            <div>
                                <div>
                                    <p>性別<span class="must must_fix">*</span></p>
                                    <select v-model="temp_obj.sex" class="select_set">
                                        <option value="男">男</option>
                                        <option value="女">女</option>
                                    </select>
                                    <span>
                                        <ion-icon name="caret-down-outline"></ion-icon>
                                    </span>
                                </div>
                                <div>
                                    <p>血型<span class="must must_fix">*</span></p>
                                    <select v-model="temp_obj.blood" class="select_set">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="O">O</option>
                                        <option value="AB">AB</option>
                                    </select>
                                    <span>
                                        <ion-icon name="caret-down-outline"></ion-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                          <div>
                            <div>
                                <p>是否為移工<span class="must must_fix">*</span></p>
                                <select v-model="temp_obj.aborad" class="select_set">
                                    <option value="否">否</option>
                                    <option value="是">是</option>
                                </select>
                                <span>
                                    <ion-icon name="caret-down-outline"></ion-icon>
                                </span>
                            </div>
                            <div>
                                <p>生日</p>
                                <input type="date" v-model="temp_obj.birthday">
                            </div>
                          </div>
                          <div>
                              <p>連絡電話</p>
                              <input type="text" v-model="temp_obj.phoneNumber">
                          </div>
                          <div>
                            <p>信箱</p>
                            <input type="text" v-model="temp_obj.email">
                        </div>
                        </div>
                        <div class="col">
                            <div>
                                <p>通訊地址</p>
                                <textarea name="" id="" cols="28" rows="4" v-model="temp_obj.address"></textarea>
                            </div>
                            <div>
                                <p>緊急聯絡人<span class="must">*</span></p>
                                <input type="text" v-model="temp_obj.contactPerson">
                            </div>
                            <div>
                                <p>緊急連絡人電話<span class="must">*</span></p>
                                <input type="text" v-model="temp_obj.contactNumber">
                            </div>
                        </div>
                        <div class="btn">
                            <span v-on:click="popup_btnFn"><ion-icon name="trash" v-show="popup_edit_resetShow"></ion-icon>@{{this.popup_edit_btn}}</span>
                            <!-- 重製預設密碼會是固定的密碼 只需要回傳伺服器修改成功或是失敗的訊息即可 -->
                            <span @click="edit_popup_change"><ion-icon name="cloud-upload"></ion-icon>儲存</span>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
          <button type="button" class="btn btn-primary">確定</button>
        </div>
    </div>
  </div>
  <!-- 刪除彈窗 -->
  <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog delModal modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">刪除</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        確認是否刪除<span class="bold">@{{temp_obj.name}}</span>的資料?
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
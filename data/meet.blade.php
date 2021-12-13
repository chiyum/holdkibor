
<!-- 樣板 -->
@extends('system.layouts.default')


@section('js')
<!-- 導入的JS -->



<script>
  
  // const data = {
  //       //tree資料基礎結構 typefolder為資料夾 data為資料
  //       parentid:'',//父層id
  //       id:'#',//本身id
  //       text:'主選單',//名稱
  //       type:'folder',//種類 預計靠種類來給予icon及子層數量顯示與否
  //       nodes:[//子層
  //           {
  //               parentid:'#',
  //               id:'B',
  //               text:'1月會議',
  //               type:'folder',
  //               nodes:[
  //                 {
  //                   parentid:'B',
  //                   id:'B1',
  //                   text:'2022/1/15 尾牙地點討論',
  //                   type:'data',
  //                 }
  //               ]
  //           },
  //           {
  //               parentid:'#',
  //               id:'A',
  //               text:'2月會議',
  //               type:'folder',
  //               nodes:[
  //                 {
  //                   parentid:'A',
  //                   id:'A1',
  //                   text:'2022/2/10 專案討論',
  //                   type:'data',
  //                 }
  //               ]
  //           },
  //       ]
  // };         
  //最基本架構

  const data = {
        //tree資料基礎結構 typefolder為資料夾 data為資料
        parentid:'',//父層id
        id:'#',//本身id
        text:'主選單',//名稱
        type:'folder',//種類 預計靠種類來給予icon及子層數量顯示與否
        nodes:[//子層
            {
                parentid:'#',
                id:'B',
                text:'1月會議',
                type:'folder',
                nodes:[
                  {
                    parentid:'B',
                    id:'B1',
                    text:'2022/1/15 尾牙地點討論',
                    type:'data',
                    data:{
                      title:'新方向討論',
                      date:'2022-01-21',
                      hour:'13',
                      minute:'01',
                      place:'公司會議室',
                      host:[{
                        id:'A0001',
                        companyid:'宏義工程股份有限公司',
                        first_name:'高',
                        last_name:'民志',
                        job_title:'經理',
                      }],
                      recorder:[{
                        id:'A0012',
                        companyid:'宏義工程股份有限公司',
                        first_name:'許',
                        last_name:'美惠',
                        job_title:'秘書',
                      }],
                      member:[
                        {
                          id:'A0002',
                          companyid:'宏義工程股份有限公司',
                          first_name:'吳',
                          last_name:'來福',
                          job_title:'工地主任',
                        },
                        {
                          id:'A0003',
                          companyid:'宏義工程股份有限公司',
                          first_name:'王',
                          last_name:'欽興',
                          job_title:'工程師',
                        },
                        {
                          id:'A0004',
                          companyid:'宏義工程股份有限公司',
                          first_name:'謝',
                          last_name:'宇賀',
                          job_title:'工程師',
                        },
                        {
                          id:'A0005',
                          companyid:'宏義工程股份有限公司',
                          first_name:'謝',
                          last_name:'芷菱',
                          job_title:'工程師',
                        },
                      ],
                      discussion:[
                        {
                          subject:'尾牙地點討論',
                          decision:'与玥樓',
                        },
                        {
                          subject:'價格預算',
                          decision:'尾牙套餐',
                        }
                      ]
                    },
                  }
                ]
            },
            {
                parentid:'#',
                id:'A',
                text:'2月會議',
                type:'folder',
                nodes:[
                  {
                    parentid:'A',
                    id:'A1',
                    text:'2022/2/10 專案討論',
                    type:'data',
                    data:{
                      title:'新方向討論',
                      date:'2022-01-21',
                      hour:'13',
                      minute:'01',
                      place:'公司會議室',
                      host:[{
                        id:'A0001',
                        companyid:'宏義工程股份有限公司',
                        first_name:'高',
                        last_name:'民志',
                        job_title:'經理',
                      }],
                      recorder:[{
                        id:'A0012',
                        companyid:'宏義工程股份有限公司',
                        first_name:'許',
                        last_name:'美惠',
                        job_title:'秘書',
                      }],
                      member:[
                        {
                          id:'A0002',
                          companyid:'宏義工程股份有限公司',
                          first_name:'吳',
                          last_name:'來福',
                          job_title:'工地主任',
                        },
                        {
                          id:'A0003',
                          companyid:'宏義工程股份有限公司',
                          first_name:'王',
                          last_name:'欽興',
                          job_title:'工程師',
                        },
                        {
                          id:'A0004',
                          companyid:'宏義工程股份有限公司',
                          first_name:'謝',
                          last_name:'宇賀',
                          job_title:'工程師',
                        },
                        {
                          id:'A0005',
                          companyid:'宏義工程股份有限公司',
                          first_name:'謝',
                          last_name:'芷菱',
                          job_title:'工程師',
                        },
                      ],
                      discussion:[
                        {
                          subject:'尾牙地點討論',
                          decision:'与玥樓',
                        },
                        {
                          subject:'價格預算',
                          decision:'尾牙套餐',
                        }
                      ]
                    },
                  }
                ]
            },
        ]
  };         
  


  const app = Vue.createApp({
    data(){
      return{
        treedata:{},//tree結構及會議資料
        people:[],//人員資料
        isedit:false,//編輯模式boolean 切換用
        hour_list:[],
        minute_list:[],
        temp_list:{      
          parentid:'',
          id:'',
          text:'',
          type:'',
          data:{
            title:'',
            date:'',
            hour:'',
            minute:'',
            place:'',
            host:[],
            recorder:[],
            member:[],
            discussion:[]
          },
        },//右欄顯示用
      }
    },
    created(){
      this.treedata = data;//導入資料 這邊之後用axios帶入
      this.giveFunction(this.treedata.nodes);//帶入子層陣列 給予功能boolean
      this.treedata.isOpen = false;//主選單給予 收合boolean
      this.treedata.isHover = false;//主選單給予 滑過boolean
      this.treedata.isActive = false;//主選單給予 點擊boolean
      this.treedata.level = 1;//預設層級
      this.hourANDminute_set();
    },
    methods:{
      giveFunction(item,level = 1){//給予資料功能
        let num = level + 1;// 第一層為自動帶入1，之後每層+1來決定不同階層
        item.forEach( data =>{
            data.isOpen = false;//子層收合
            data.isHover = false;//是否被hover
            data.isActive = false;//是否被點選
            data.level = num;//給予層級
            if(data.nodes){this.giveFunction(data.nodes,num)}//若有子層再次執行
        })
      },
      edit_store(){
        this.isedit = false;
        // 功能待寫
      },
      active(item){//點選的資料回傳到參數中
        console.log('外層觸發');
        if(item.id ==this.treedata.id){ //若點選的為主層
          this.treedata.isActive = true;//樣式改為被點選
          this.remove_active(this.treedata.nodes);//並將底下的樣式都改為非點選
        }else{//若非主層則向下尋找
          this.active_search(this.treedata.nodes,item);
          this.treedata.isActive = false;//樣式改為非點選
        }
        //tree部分完成，下半部分就是將資料給打到右欄顯示內
        //因為資料是從主元件傳遞，所以主元件資料更改，底層資料也會更改。
        //所以這邊只需要更改主層資料即可。
        if(item.type == 'data'){//若為會議記錄檔才將資料輸入
          this.temp_list = item;//將資料輸入至temp顯示至右欄
        }

      },
      active_search(ary,item){//ary為陣列 最一開始會從主元件的treedata開始找 item則是要尋找的對象
      
        ary.forEach( data => {
          data.isActive = false;//同層的都改為非點選
          if(item.id == data.id){//若該層物件內有符合點選的資訊
            data.isActive = true;//將樣式改為被點選
            if(data.nodes){//若有子層則將子層也改為非點選狀態
              this.remove_active(data.nodes);
            }
          }else if(data.nodes){//若該層沒有找到符合資訊並且有子層就向下尋找並且item也繼續往下帶
            this.active_search(data.nodes,item);
          };
        });
        //這邊的邏輯是執行的陣列中，都先給予非點選狀態。
        //接著若有符合則改為點選狀態，並且子層都改為非點選狀態
        //若不符合且有子層則繼續往下找。
        //而今天我點選A層的第二層，會讓B層的第二層移除狀態的原因是
        //forEach是會執行到底的，當A層在執行data.isActive=false時，B層也會處理
        //呈上範例，在我點選A層第二層符合if item.id == data.id的時候
        //B層則也會執行這段，只是因為不符合，所以只會執行在開頭的data.isActive = false;
      },
      remove_active(item){//更改子層非選取狀態
        item.forEach( data => {
          data.isActive = false;//將該層狀態更改為非選取狀態
          if(data.nodes){this.remove_active(data.nodes)}//若有子層則向下繼續動作
        });
      },
      hourANDminute_set(){//此為設定時間用
        for(let i = 0;i < 24 ;i++){

          if(i < 9){
            this.hour_list.push('0'+ i);
          }else{
            this.hour_list.push( i );
          }
        };
        for(let i = 0; i<60;i++){
         
          if(i < 10){
            this.minute_list.push('0'+ i);
          }else{
            this.minute_list.push( i );
          }
        }
      }
    },
  })

  app.component('item',{
    template:`
    <li>
      <div @mouseenter="hover_enter" @mouseout="hover_left" @click="thisactive(treedata)" :class="{isHover:treedata.isHover,isActive:treedata.isActive}" :style="{paddingLeft: treedata.level * 15 + 'px'}">
        <span @mouseenter="hover_enter" @mouseout="hover_left"  class="icon"  @click.stop="toggle" :class="{isOpen:treedata.isOpen}" onselectstart="return false">▶</span>
        <img  @mouseenter="hover_enter" @mouseout="hover_left" ondragstart="return false" src="{{ asset('img/fileIcon/FILE.svg') }}" alt="" v-if="treedata.type == 'folder'" v-show="treedata.isOpen == false">
        <img  @mouseenter="hover_enter" @mouseout="hover_left" ondragstart="return false" src="{{ asset('img/fileIcon/FILEOPEN.svg') }}" alt="" v-if="treedata.type == 'folder'" v-show="treedata.isOpen == true">
        <p @mouseenter="hover_enter" @mouseout="hover_left" class="text">@{{treedata.text}}</p>
        <p @mouseenter="hover_enter" @mouseout="hover_left" class="file_length" v-if="treedata.type == 'folder'">(@{{treedata.nodes.length}})</p>
      </div>
      <ul v-if="treedata.nodes && treedata.nodes.length > 0"  v-show="treedata.isOpen">
          <item  v-on:remove="thisactive" v-for="node in treedata.nodes" :treedata="node" :key="node.id"></item>
      </ul>
    </li>
    `,
    props:['treedata'],
    methods:{
      toggle(){//開關
        if(this.treedata.nodes && this.treedata.nodes.length > 0){//邏輯是當如果有nodes並且nodes大於0的話，決定開關
          this.treedata.isOpen = !this.treedata.isOpen;//父層收合
          this.treedata.nodes.forEach( data => {//當父層收何時子層亦收合
              data.isOpen = false;
          });
        }
      },
      hover_enter(){
        // console.log('hover開始')
        this.treedata.isHover = true;
      },
      hover_left(){
        // console.log('hover結束')
        this.treedata.isHover = false;
      },
      thisactive(item){
        
        this.$emit('remove',item);
        //目前是透過第一層觸發active這個function
        //其他層則是透過觸發層層thisactive傳遞直到第一層的thisactive
        //讓第一層的thisactive觸發active

        // console.log('觸發次數')
        //從觸發次數可以看到，假設點選的節點是在第三層，那麼thisactive就會觸發3次
        //而我們設定每個thisactive都會將自己的資料套入參數中，
        //那為何傳到最外層的資訊是我們點選的而非被其他層給取代呢?
        //原因是我們只有點選一次thisactive並將資料給套入
        //而其他的thisactive則是透過emit觸發的，只會不停地向外傳遞資料及觸發事件
        //並不會把資料給套入，所以我們點選的資料就一層一層的向外傳遞。

        //預想
        //這邊就需要使用到emit將資訊導入外部function
        //先將id導入外部，接著跑for讓所有被點過的isActive轉為false
        //接著讓導出的id的isActive開啟
        console.log('內層觸發');
      }
    }
  })

  app.mount('.main');

  //使按鈕不能被複製文字 如此當使用者點選按鈕就不會因為預設功能將按鈕文字給框起
  // document.querySelectorAll('button').forEach( data => {
  //   data.addEventListener('dragstart',()=> false )
  // });
  // document.querySelectorAll('.btn').forEach( data => {
  //   data.addEventListener('dragstart',()=> false )
  // });
  // document.querySelectorAll('.BTN').forEach( data => {
  //   data.addEventListener('dragstart',()=> false )
  // });
  // document.querySelector('#addeventId').addEventListener('click',()=>{

  // })


  const golist = ()=>{
    window.open('http://v2.com/viewtest/list')
  }

</script>
@endsection



@section('css')
<style>
* {
  margin: 0;
  padding: 0;
}

li {
  list-style: none;
}

p, div, h1, h2, h3, h4, h5, input, select {
  margin: 0;
  padding: 0;
}

input, button, select, textarea {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

.main {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-left: 3px;
  width: 100%;
  height: 82vh;
  overflow: hidden;
}

.main .left {
  position: relative;
  width: 392px;
  -webkit-box-shadow: 1px 0px 3px 3px #8b8585;
          box-shadow: 1px 0px 3px 3px #8b8585;
  z-index: 1;
}

.main .left .left_head {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #ffffff;
  background: #b3b3b3;
  height: 52px;
}

.main .left .left_head .btn {
  padding: 2px 8px;
  border-radius: 6px;
  margin: 0 2.5px;
  color: #ffffff;
  cursor: pointer;
}

.main .left .left_head .btn .icon {
  position: relative;
  top: 1px;
  right: 1px;
  width: 18px;
  height: 18px;
}

.main .left .left_head .create {
  background: #01c486;
  margin-left: 10px;
}

.main .left .left_head .create .icon {
  top: 2.5px;
  width: 16px;
  height: 16px;
}

.main .left .left_head .create:active {
  background: #05b87f;
}

.main .left .left_head .del {
  background: #e52c17;
}

.main .left .left_head .del:active {
  background: #d41803;
}

.main .left .left_main {
  height: 93%;
  overflow: auto;
  background: #ffffff;
}

.main .left .left_main ul li {
  cursor: pointer;
}

.main .left .left_main ul li div {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 100%;
  padding: 5px 0;
}

.main .left .left_main ul li div .icon {
  margin-right: 3px;
  position: relative;
  color: #7e7e7e;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.main .left .left_main ul li div .file_length {
  color: #4f4f4f;
}

.main .left .left_main ul li div .text {
  margin: 0 5px;
}

.main .left .left_main ul li div img {
  width: 24px;
}

.main .right {
  position: relative;
  width: calc(100% - 392px);
}

.main .right .right_head {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding-left: 20px;
  padding-right: 0px;
  height: 52px;
  background: #b3b3b3;
}

.main .right .right_head .search {
  position: relative;
}

.main .right .right_head .search input {
  padding: 4px 10px;
  width: 280px;
  font-size: 16px;
  border-radius: 3px;
  border: none;
  -webkit-box-shadow: #969595 1.5px 1.5px 1.5px 1.5px;
          box-shadow: #969595 1.5px 1.5px 1.5px 1.5px;
  outline: none;
}

.main .right .right_head .search .search_btn {
  position: absolute;
  top: 7px;
  right: 5px;
  width: 19px;
  height: 19px;
}

.main .right .right_head .btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.main .right .right_head .btn .BTN {
  padding: 3px 8px;
  border-radius: 6px;
  margin: 0 2.5px;
  color: #ffffff;
  cursor: pointer;
}

.main .right .right_head .btn .BTN .icon {
  position: relative;
  top: 1px;
  right: 1px;
  width: 18px;
  height: 18px;
}

.main .right .right_head .btn .edit_b, .main .right .right_head .btn .print {
  background: #01c486;
}

.main .right .right_head .btn .edit_b:active, .main .right .right_head .btn .print:active {
  background: #05b87f;
}

.main .right .right_head .btn .del {
  background: #e52c17;
}

.main .right .right_head .btn .del:active {
  background: #d41803;
}

.main .right .right_head .btn .send, .main .right .right_head .btn .send_record {
  background: #0167a1;
}

.main .right .right_head .btn .store {
  background: #0167a1;
}

.main .right .right_head .btn .store .icon {
  width: 20px;
  height: 20px;
}

.main .right .right_head .btn .send:active, .main .right .right_head .btn .send_record:active, .main .right .right_head .btn .store:active {
  background: #035a8d;
}

.main .right .right_main {
  height: 93%;
  background: #f3f3f3;
  overflow: auto;
}

.main .right .right_main .meet_data {
  position: relative;
  margin: 0 auto;
  margin-top: 50px;
  margin-bottom: 20px;
  padding: 0 50px;
  padding-top: 30px;
  padding-bottom: 70px;
  width: 794px;
  border: 1px solid #c1bbbb;
  background: #ffffff;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

.main .right .right_main .meet_data .addevent {
  position: absolute;
  top: 30px;
  right: 51px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 150px;
  height: 26px;
  color: #ffffff;
  border-radius: 6px;
  background: #0167a1;
  cursor: pointer;
}

.main .right .right_main .meet_data .addevent .icon {
  width: 16px;
  height: 16px;
}

.main .right .right_main .meet_data .addevent:active {
  background: #035a8d;
}

.main .right .right_main .meet_data h1 {
  margin-bottom: 35px;
  font-size: 32px;
  text-align: center;
}

.main .right .right_main .meet_data div {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 2.5px 0;
  font-size: 17px;
}

.main .right .right_main .meet_data div span {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.main .right .right_main .meet_data div input {
  height: 24px;
  outline: none;
}

.main .right .right_main .meet_data div select {
  height: 24px;
  font-size: 14px;
  outline: none;
}

.main .right .right_main .meet_data div button {
  margin-left: 8px;
  padding: 2px 7px;
  color: #ffffff;
  border: none;
  border-radius: 6px;
  background: #0167a1;
  cursor: pointer;
}

.main .right .right_main .meet_data div button .icon {
  position: relative;
  top: 1px;
  width: 16px;
  height: 16px;
}

.main .right .right_main .meet_data div button:active {
  background: #035a8d;
}

.main .right .right_main .meet_data div .discussion {
  font-size: 16px;
}

.main .right .right_main .meet_data .list li {
  margin: 20px 0;
}

.main .right .right_main .meet_data .list li div {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  margin: 5px 0;
}

.main .right .right_main .meet_data .list li div strong {
  color: #035a8d;
}

.main .right .right_main .meet_data .list li div .title {
  white-space: nowrap;
}

.main .right .right_main .meet_data .list li div .para {
  position: relative;
  top: 0px;
  white-space: normal;
  word-wrap: break-word;
  word-break: break-all;
}

.main .right .right_main .meet_data .list li div textarea {
  width: 629.77px;
  min-height: 24px;
}

.main .right .right_main .meet_data .attached {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  min-height: 250px;
}

.main .right .right_main .meet_data .attached p strong {
  color: #0c77bc;
  cursor: pointer;
}

.main .right .right_main .meet_data .attached p strong:hover {
  color: #075386;
}

.main .right .right_main .meet_data .attached ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  margin-top: 20px;
  width: 100%;
}

.main .right .right_main .meet_data .attached ul li {
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
  width: 140px;
}

.main .right .right_main .meet_data .attached ul li img {
  width: 90px;
}

.main .right .right_main .meet_data .attached ul li p {
  width: 100%;
  text-align: center;
  font-size: 15px;
}

.ess {
  position: relative;
  bottom: 5px;
  color: #e52c17;
  font-size: 25px;
}

.remove {
  position: relative;
  bottom: 1px;
  margin: 0 2px;
  padding: 1.5px 5.5px;
  color: #ffffff;
  font-size: 14px;
  background: #e52c17;
  border-radius: 50%;
  cursor: pointer;
}

.ul_border {
  border: 1px solid;
}

.isOpen {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

.isHover {
  background: #e8f0ff;
}

.isActive {
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #beebff), to(#a8e4ff));
  background: linear-gradient(to bottom, #beebff 0, #a8e4ff 100%);
}

.border {
  border: 1px solid #c1bbbb;
}
/*# sourceMappingURL=meet.css.map */
</style>
@endsection



@section('wrapper-head')
<div class="wrapper-contentTitle"> 會議記錄</div>
<!-- 預設樣式 -->
@endsection



@section('wrapper-main')
<!-- html -->
<div class="container-fluid">
  <div class="main">
    <div class="left">
        <div class="left_head">
            <div class="create btn">
                <div class="icon anicon add"></div>新增
            </div>
            <div class="del btn">
                <div class="icon anicon ashbin"></div>刪除
            </div>
            <!-- <div class="download">
                <div class="icon anicon download"></div>下載
            </div> -->
        </div>
        <div class="left_main">
            <ul class="root">
                <item :treedata="treedata" v-on:remove="active"></item>
                <!-- <li>
                    <div>
                        <span class="icon isOpen">▶</span>
                        <img src="{{ asset('img/fileIcon/FILEOPEN.svg') }}" alt="">
                        <p class="text">主選單</p>
                        <p class="file_length">(3)</p>
                    </div>
                    <ul>
                        <li>
                            <div>
                                <span class="icon isOpen">▶</span>
                                <img src="{{ asset('img/fileIcon/FILEOPEN.svg') }}" alt="">
                                <p class="text">子選單</p>
                                <p class="file_length">(3)</p>
                            </div>
                            <ul>
                                <li>
                                    <div>
                                        <span class="icon isOpen">▶</span>
                                        <img src="{{ asset('img/fileIcon/FILEOPEN.svg') }}" alt="">
                                        <p class="text">孫選單</p>
                                        <p class="file_length">(3)</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <div>
                                                <span class="icon">▶</span>
                                                <img src="" alt="">
                                                <p class="text">2022/01/21 會議</p>
                                                <p class="file_length">(3)</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
    <div class="right">
        <div class="right_head" style="padding-right: 10px;">
            <div class="search">
                <input type="text">
                <span class="search_btn anicon search"></span>
            </div>
            <div class="btn">
                <div class="BTN edit_b" @click="isedit = true"  v-if="!isedit">
                    <div class="icon anicon edit"></div>編輯
                </div>
                <div class="BTN print"  v-if="!isedit">
                    <div class="icon anicon printer"></div>列印
                </div>
                <div class="BTN del"  v-if="!isedit">
                    <div class="icon anicon ashbin"></div>刪除
                </div>
                <div class="BTN send"  v-if="!isedit">
                    <div class="icon anicon sendMail"></div>寄信
                </div>
                <div class="BTN send_record"  v-if="!isedit">
                    <div class="icon anicon sendMail"></div>寄件紀錄
                </div>
                <div class="BTN store"  v-if="isedit" @click="edit_store">
                    <div class="icon anicon upload"></div>儲存
                </div>
            </div>
        </div>
        <div class="right_main">
            <div class="meet_data" v-if="temp_list.id != ''">
                <div class="addevent" id="addeventId" onselectstart="return false" onclick="golist()">
                    <div class="icon anicon add"></div>
                    創建代辦事項
                </div>
                <h1>會議記錄</h1>
                <div>
                    <span><strong class="ess">⁎</strong> 主旨：</span>
                    <span v-if="!isedit">@{{temp_list.data.title}}</span>
                    <input type="text" v-if="isedit">
                </div>
                <div>
                    <span><strong class="ess">⁎</strong> 日期：</span>
                    <span v-if="!isedit">@{{temp_list.data.date.split('-').join('/')}}</span>
                    <input type="date" v-if="isedit" v-model="temp_list.data.date">
                </div>
                <div>
                    <span><strong class="ess">⁎</strong> 時間：</span>
                    <span v-if="!isedit">@{{temp_list.data.hour + '：' + temp_list.data.minute}}</span>
                    <strong v-if="isedit">時:</strong>
                    <select v-if="isedit" v-model="temp_list.data.hour">
                        <option v-for="item in hour_list" :value="item" :key="item">@{{item}}</option>
                    </select>
                    <strong v-if="isedit">分:</strong>
                    <select v-if="isedit" v-model="temp_list.data.minute">
                      <option v-for="item in minute_list" :value="item" :key="item">@{{item}}</option>
                    </select>
                </div>
                <div>
                    <span><strong class="ess">⁎</strong>地點：</span>
                    <span v-if="!isedit">@{{temp_list.data.place}}</span>
                    <input type="text" v-if="isedit">
                </div>
                <div>
                    <span><strong class="ess">⁎</strong>主席：</span>
                    <template v-for="item in temp_list.data.host">
                      <span v-if="isedit">@{{item.job_title + '一' +item.first_name + item.last_name}}<strong class="remove">✕</strong></span>
                      <!-- 使用v-for跑編輯 ^ -->
                    </template>
                    <button type="button" v-if="isedit"><div class="icon anicon add"></div>相關人員</button>
                    <template v-for="item in temp_list.data.host">
                      <span v-if="!isedit">
                          <!-- 非編輯這邊使用陣列.join將人員顯現 -->
                          @{{item.job_title + '一' +item.first_name + item.last_name}}
                          <em v-if="temp_list.data.host > 1">、</em>
                      </span>
                    </template>
                    
                </div>
                <div>
                    <span><strong class="ess">⁎</strong>紀錄：</span>
                    <template v-for="item in temp_list.data.recorder">
                      <span v-if="isedit">@{{item.job_title + '一' +item.first_name + item.last_name}}<strong class="remove">✕</strong></span>
                      <!-- 使用v-for跑編輯 ^ -->
                    </template>
                    <button type="button" v-if="isedit"><div class="icon anicon add"></div>相關人員</button>
                    <template v-for="item in temp_list.data.recorder">
                      <span v-if="!isedit">
                        @{{item.job_title + '一' +item.first_name + item.last_name}}
                        <em v-if="temp_list.data.recorder > 1">、</em>
                      </span>
                    </template>
                    
                </div>
                <div>
                    <span><strong class="ess">⁎</strong>與會人員：</span>
                    <template v-for="item in temp_list.data.member">
                      <span v-if="isedit">@{{item.job_title + '一' +item.first_name + item.last_name}}<strong class="remove">✕</strong></span>
                      <!-- 使用v-for跑編輯 ^ -->
                    </template>
                    <button type="button" v-if="isedit"><div class="icon anicon add"></div>相關人員</button>
                    <template v-for="item in temp_list.data.member">
                      <span v-if="!isedit">
                          <!-- 非編輯這邊使用陣列.join將人員顯現 -->
                          @{{item.job_title + '一' +item.first_name + item.last_name}}
                          <em v-if="temp_list.data.member.length > 1">、</em>
                      </span>
                    </template>
                </div>
                <div v-if="!isedit">
                    <span><strong class="ess" style="visibility: hidden;">⁎</strong>應出席人員：</span>
                    <span></span>
                    <!-- 編輯模式消失 從勾選的出席人員判斷 -->
                </div>
                <div v-if="!isedit">
                    <span><strong class="ess" style="visibility: hidden;">⁎</strong>已出席人員：</span>
                    <span></span>
                    <!-- 編輯模式消失 -->
                </div>
                <div v-if="!isedit">
                    <span><strong class="ess" style="visibility: hidden;">⁎</strong>未出席人員：</span>
                    <span></span>
                    <!-- 編輯模式消失 -->
                </div>
                <div>
                    <span><strong class="ess">⁎</strong>會議內容：</span>
                    <button type="button" class="discussion" v-if="isedit"><div class="icon anicon add"></div>新增會議資訊</button>
                </div>
                <ul class="list">
                    <li>
                       <div>
                            <strong>▶</strong>
                            <span class="title">議題1:</span>
                            <p class="para" v-if="!isedit">尾牙地點討論</p>
                            <textarea rows="1" v-if="isedit"></textarea>
                       </div>
                       <div>
                            <strong style="visibility: hidden;">▶</strong>
                            <span class="title">決議1:</span>
                            <p class="para" v-if="!isedit">与玥樓年菜套餐</p>
                            <textarea rows="1" v-if="isedit"></textarea>
                        </div>
                    </li>
                </ul>
                <div class="attached" :class="{border:isedit}">
                    <p>其他附件：<strong onselectstart="return false">新增附件</strong></p>
                    <ul>
                        <li>
                            <img src="http://v2.com/img/fileIcon/PDF.svg" alt="icon" title="与玥樓福氣豪華年菜一菜單" ondragstart="return false">
                            <p title="与玥樓福氣豪華年菜一菜單">与玥樓福氣豪華年菜一菜單</p>
                        </li>
                        <li>
                            <img src="http://v2.com/img/fileIcon/PDF.svg" alt="icon" title="与玥樓福氣豪華年菜一菜單" ondragstart="return false">
                            <p title="与玥樓福氣豪華年菜一菜單">与玥樓福氣豪華年菜一菜單</p>
                        </li>
                        <li>
                            <img src="http://v2.com/img/fileIcon/PDF.svg" alt="icon" title="与玥樓福氣豪華年菜一菜單" ondragstart="return false">
                            <p title="与玥樓福氣豪華年菜一菜單">与玥樓福氣豪華年菜一菜單</p>
                        </li>
                        <!-- <li>
                            <img src="http://v2.com/img/fileIcon/PDF.svg" alt="icon" title="与玥樓福氣豪華年菜一菜單" ondragstart="return false">
                            <p title="与玥樓福氣豪華年菜一菜單">与玥樓福氣豪華年菜一菜單</p>
                        </li>
                        <li>
                            <img src="http://v2.com/img/fileIcon/PDF.svg" alt="icon" title="与玥樓福氣豪華年菜一菜單" ondragstart="return false">
                            <p title="与玥樓福氣豪華年菜一菜單">与玥樓福氣豪華年菜一菜單</p>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection

<!-- 
  tree資料基礎結構
  let treedata = [
    {
        parentid:'#',//父層id
        id:'B',//本身id
        text:'選單B',//名稱
        type:'folder',//種類 預計靠種類來給予icon及子層數量顯示與否
        isOpen:false,//開關子層
        nodes:[//子層
            {
                parentid:'B',
                id:'B1_0',
                text:'子層B',
                type:'data',
                isOpen:false,
            },
        ]
    },            
  ]

  預計功能:
    拖曳、右鍵選單

 -->
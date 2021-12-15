
<!-- 樣板 -->
@extends('system.layouts.default')


@section('js')
<!-- 導入的JS -->

<script>
        function get_project_id(){
            let pid = $('#project_id option:selected').attr('data-id');
            return pid
        }
        // 這個用途是會回傳目前專案的id，讓你去判斷該跟後台要哪一個專案的資料
</script>


<script>
  

  const data = {
        //tree資料基礎結構 typefolder為資料夾 data為資料
        parentid:'',//父層id
        id:'#',//本身id
        text:'主選單',//資料夾名稱 若為檔案則為空值
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
                    text:'',
                    type:'data',
                    data:{
                      title:'尾牙地點討論',
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
                    text:'',
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
                          isOpen:true,
                        },
                        {
                          subject:'價格預算',
                          decision:'尾牙套餐',
                          isOpen:true,
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
        addbtn_isOpen:false,//新增節點用
        created_text:'',
        Search_text:'',
        active_num:'',
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
        },//右欄顯示用 選擇狀態的檔案
        temp_list_folder:{},//選擇狀態的資料夾
      }
    },
    created(){
      this.treedata = data;//導入資料 這邊之後用axios帶入
      this.giveFunction(this.treedata.nodes);//帶入子層陣列 給予功能boolean
      this.treedata.isOpen = false;//主選單給予 收合boolean
      this.treedata.isHover = false;//主選單給予 滑過boolean
      this.treedata.isActive = false;//主選單給予 點擊boolean
      this.treedata.isRename = false;//主選單給予 Rename boolean
      this.treedata.isSearch = false;//主選單給予 搜尋boolean
      this.treedata.level = 1;//預設層級
      this.hourANDminute_set();
    },
    methods:{
      giveFunction(item,level = 1){//給予資料功能
        let num = level + 1;// 第一層為自動帶入1，之後每層+1來決定不同階層
        item.forEach( data => {
            data.isOpen = false;//子層收合
            data.isHover = false;//是否被hover
            data.isActive = false;//是否被點選
            data.isRename = false;//主選單給予 Rename boolean
            data.isSearch = false;//給予搜尋boolean
            data.level = num;//給予層級
            if(data.nodes){this.giveFunction(data.nodes,num)}//若有子層再次執行
        })
      },
      active(item){//點選的資料回傳到參數中
        // console.log('外層觸發');
        if(item.id ==this.treedata.id){ //若點選的為主層
          this.treedata.isActive = true;//樣式改為被點選
          this.remove_active(this.treedata.nodes);//並將底下的樣式都改為非點選
        }else{//若非主層則向下尋找
          this.active_search(this.treedata.nodes,item);
          // this.treedata.isRename = false;//rename狀態移除
          this.treedata.isActive = false;//樣式改為非點選
        }
        //tree部分完成，下半部分就是將資料給打到右欄顯示內
        //因為資料是從主元件傳遞，所以主元件資料更改，底層資料也會更改。
        //所以這邊只需要更改主層資料即可。

        if(item.type == 'data'){//若為會議記錄檔才將資料輸入
          this.temp_list = {};//清空資料
          this.temp_list = item;//將資料輸入至temp顯示至右欄 因為參考路徑的關係 所以temp的修改就會修改原本的內容
        }else if(item.type =='folder'){
          this.temp_list_folder = {};//reset
          this.temp_list_folder = item;//導入資料庫中
        }
        //這邊只是從純粹從左邊點選獲得資料，與被點選狀態並無關連
        //點選是active_search的function所處理的功能
        //邏輯是這樣的，我們從最底層觸發thisactive一層打一層，直接最外層則觸發active並將資料給帶入
      },
      active_search(ary,item){//ary為陣列 最一開始會從主元件的treedata開始找 item則是要尋找的對象
        ary.forEach( data => {
          data.isActive = false;//同層的都改為非點選
          // data.isRename = false;//關閉rename
          if(item.id == data.id){//若該層物件內有符合點選的資訊
            data.isActive = true;//將樣式改為被點選
            this.active_num = data.id;//取得目前被點選的資料
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
          // data.isRename = false;//關閉rename
          if(data.nodes){this.remove_active(data.nodes)}//若有子層則向下繼續動作
        });
      },
      //以上為點選功能 下面開始為基礎功能API

      siwtch_fn(ary,item,file,switchFn,boolean = false){//功能區 底層找尋id並帶入資料
        //ary 為執行for的陣列 item為id file為資料 switch為功能 boolean是否開啟相關功能
        switch (switchFn) {
          case 'create_folder'://新建資料夾API
            if(item.id ==this.treedata.id){//若點選的是主選單
              let push_list ={
                parentid:'#',
                id: new Date().getTime(),//創造唯一性id,
                text:this.created_text,//抓取文字
                type:'folder',//新增資料夾
                level:2,//因為是主選單所以給予 2 level
                isActive:false,//給予基本資料
                isHover:false,
                isOpen:false,
                isRename:false,
                isSearch:false,
                nodes:[],//因是資料夾所以有子層
              }
              //這邊給予物件之後可以在外部設定好格式後使用深層複製套入。
              //如此當需要更動格式時就不需要一個一個改。
              this.created_text = '';//reset文字
              $('#create_folder_Modal').modal('hide');//彈窗收回
              ary.push(push_list);//將資料輸入至主選單
              this.treedata.isOpen = true;//打開選單
            }else{
              ary.forEach( data => {
                if(data.id == item.id){
                  let push_list ={
                    parentid:data.id,
                    id: new Date().getTime(),//創造唯一性id,
                    text:this.created_text,//抓取文字
                    type:'folder',//新增資料夾
                    level: item.level + 1,//選單level + 1
                    isActive:false,//給予基本資料
                    isHover:false,
                    isOpen:false,
                    isRename:false,
                    isSearch:false,
                    nodes:[],//因是資料夾所以有子層
                  }
                  this.created_text = '';//reset文字
                  data.isOpen = true;//開啟選單
                  $('#create_folder_Modal').modal('hide');//彈窗收回
                  item.nodes.push(push_list);//將資料輸入至該層底下的nodes
                }else{//若沒有符合目標，則繼續往下搜尋
                  if(data.nodes){
                    this.siwtch_fn(data.nodes,item,'','create_folder');
                  }
                };
              });
            };
            break;
          case 'create_file'://新增檔案API
            if(item.id == this.treedata.id){//若點選的是主選單
              let push_list ={
                parentid:'#',
                id: new Date().getTime(),//創造唯一性id,
                text:this.created_text,//抓取文字
                type:'data',//新增資料夾
                level:2,//因為是主選單所以給予 2 level
                isActive:false,//給予基本資料
                isHover:false,
                isOpen:false,
                isRename:false,
                isSearch:false,
                data:{
                  title:'新建會議記錄',
                  date:'',
                  hour:'',
                  minute:'',
                  place:'',
                  host:[],
                  recorder:[],
                  member:[],
                  discussion:[]
                },
              };
              ary.push(push_list);//將資料輸入至主選單
              this.treedata.isOpen = true;//打開選單
              $('#add_btn').hide();//新增類別彈窗隱藏
            }else{
              ary.forEach( data => {
                
                if(data.id == item.id){
                  let push_list ={
                  parentid:data.id,
                  id: new Date().getTime(),//創造唯一性id,
                  text:this.created_text,//抓取文字
                  type:'data',//新增資料夾
                  level:item.level + 1,//子層給予 level + 1
                  isActive:false,//給予基本資料
                  isHover:false,
                  isOpen:false,
                  isRename:false,
                  isSearch:false,
                  data:{
                    title:'新建會議記錄',
                    date:'',
                    hour:'',
                    minute:'',
                    place:'',
                    host:[],
                    recorder:[],
                    member:[],
                    discussion:[]
                  },
                };
                  data.nodes.push(push_list);//將資料輸入至主選單
                  data.isOpen = true;//打開選單
                  $('#add_btn').hide();//新增類別彈窗隱藏
                }else{
                  if(data.nodes){
                    this.siwtch_fn(data.nodes,item,'','create_file');
                  }
                }

              });
            }
            break;
          case 'search'://搜尋API
            // console.log(item);//這邊的item會是搜尋的關鍵字
            this.siwtch_fn(ary,'','isSearch','remove_isState');//reset狀態
            if(item == ''){return};//如果為空值則清空後不做任何動作
            if(this.treedata.text.indexOf(item.toUpperCase())>=0||this.treedata.text.indexOf(item.toLowerCase())>=0){
              this.treedata.isSearch = true;//先掃過主選單
            };
            ary.forEach( search_data => {
              if(search_data.type == 'data'){//如果type為data就使用data資料做搜尋
                if(search_data.data.date.split('-').join('/').indexOf(item.toLowerCase())>=0||search_data.data.date.split('-').join('/').indexOf(item.toUpperCase())>=0||search_data.data.title.indexOf(item.toLowerCase())>=0||search_data.data.title.indexOf(item.toUpperCase())>=0){
                  search_data.isSearch = true;//將當層被搜尋狀態開啟
                  // this.siwtch_fn(this.treedata.nodes,search_data.id,'isOpen','add_isState');
                  this.siwtch_fn(this.treedata.nodes,search_data.parentid,'isOpen','add_isState',true);
                  //讓父層以上開啟 這邊第二個帶入父層id
                  //add_isState的用途是開啟狀態，若無代入id則全部帶入，若有代入id則只開啟指定id
                };
              }else{
                if(search_data.text.indexOf(item.toUpperCase())>=0||search_data.text.indexOf(item.toLowerCase())>=0){
                  search_data.isSearch = true;
                  this.siwtch_fn(this.treedata.nodes,search_data.parentid,'isOpen','add_isState',true);
                };
              };
              if(search_data.nodes){this.siwtch_fn(search_data.nodes,item,'','search')}
              //若有子層則繼續搜尋
            });

            //搜尋的邏輯是使用indexOf找尋字串字元，若有符合則會回傳0
            //接著使用if的特性將符合的資料給予isSearch屬性true的key
            //而其中的toUpperCase及toLowerCase則是讓輸入進來的字元大小寫轉換
            //讓關鍵字可以搜尋到不管大小寫，只要符合的字元。
            
            //如果要讓搜尋時子層打開，父層也跟著跟著開。
            //那搜尋的結果目標找到以後，
            //搜尋目標若是資料夾就開啟，搜尋目標若非資料夾就開啟父層資料夾。
            //接著從主選單往下判斷子層是否開啟，若子層開啟則開啟自己，依此類推。
            break;

            case 'remove_isState':
                //remove_isState的作用是reset給予指定狀態 可以指定id也可以全部給予
                //可指定id移除狀態也可以將指定id的父層以上都移除狀態
                //ary 搜尋陣列 / item 指定id / file 欲收回(關閉)狀態 / switch功能 / boolean 是否向上層開啟相同狀態
              if(item !=''){//若有指定id
               
                if(item == this.treedata.id){//若代入的是主選單
                  this.treedata[`${file}`] = false;
                }else{//若代入的id非主選單

                  ary.forEach( data => {//從代入的陣列去執行for找尋指定的代入id
                    
                    if(data.id == item){
                      data[`${file}`] = false;//移除狀態
                      if(data.parentid && boolean){//若有開啟功能boolean且有父層就向上尋找並給予父層狀態
                        if(data.parentid == this.treedata.id){//若代入id的父層已經是主選單，那就不須搜索直接移除主選單狀態
                          this.treedata[`${file}`] = false;
                        }else{
                          this.siwtch_fn(this.treedata.nodes,item,file,'remove_isState',boolean);
                          //如果非主選單則從主選單的子層開始找起指定id並給予狀態
                          //item、file、boolean一樣是延續最初給予的id、狀態、功能是否開啟
                        };
                      };
                    };

                  });
                };
              }else{
                this.treedata[`${file}`] = false;//主選單reset
                ary.forEach( data => {//子層reset
                  data[`${file}`] = false;
                  if(data.nodes){this.siwtch_fn(data.nodes,'',file,'remove_isState')};
                });
              }
              break;
            
            case 'add_isState':
              //add_isState的作用是給予指定狀態，與remove相反
              //差別在於item如果代入條件，則會限定給予狀態。
              //ary 搜尋陣列 / item 指定id / file 欲開啟狀態 / switch功能 / boolean 是否向上層開啟相同狀態
              if(item !=''){//item代入條件 這邊的條件指id
                if(item == this.treedata.id){//若代入的id為主選單
                  this.treedata[`${file}`] = true;
                }else{//若代入的id非主選單
                  ary.forEach( data => {//從代入的陣列中開始執行for
                    if(data.id == item){//如果有找到指定id
                      data[`${file}`] = true;//開啟狀態
                      if(data.parentid && boolean){//若父層id及有開啟向上給予功能的話
                        if(data.parentid == this.treedata.id){//若父層已經是主選單
                          this.treedata[`${file}`] = true;
                        }else{//若非主選單則再繼續向上開
                          this.siwtch_fn(this.treedata.nodes,item,file,'add_isState',boolean);
                        }
                        //之所以這邊會分成兩個區塊的原因是因為，若data的上層已經是主選單，自然不可能再搜尋
                        //因為搜尋都是從主選單的子選單下去搜尋
                      }
                    }
                    if(data.nodes){this.siwtch_fn(data.nodes,item,file,'add_isState',boolean);}//子層搜尋

                  });
                }               

              }else{//若沒有代條件則全部給予狀態
                this.treedata[`${file}`] = true;//主選單給予
                ary.forEach( data => {//子層給予
                  data[`${file}`] = true;
                  if(data.nodes){this.siwtch_fn(data.nodes,'',file,'add_isState')};
              } );
              }
             
              break;

          case 'del':
            //代入指定id，從資料庫尋找後並刪除
            //ary 搜尋陣列 / item 指定id / switch功能
            console.log(item)
            console.log(file)

            break;
        
          // default:
          //   break;
        }
       //邏輯:
       //通過switchFn來決定功能。ary第一層都是主物件的子物件。
       //所以一開始會先判斷主物件是否符合，不符合才往下搜尋。
       //若主物件的子選單沒有符合，那就再次執行一次此fn並將一系列資料帶下去直到找到。

      },
      //以上為tree用
      edit_store(){//儲存會議資料用
        this.isedit = false;
        // 功能待寫
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
      },
    },
  })

  app.component('item',{
    template:`
    <li>
      <div @mouseenter="hover_enter" @mouseout="hover_left" @click="thisactive(treedata)" :class="{isHover:treedata.isHover,isActive:treedata.isActive,isSearch:treedata.isSearch}" :style="{paddingLeft: treedata.level * 20 + 'px'}">
        <span @mouseenter="hover_enter" @mouseout="hover_left"  class="icon"  @click.stop="toggle" :class="{isOpen:treedata.isOpen,isData:treedata.type == 'data'}" onselectstart="return false">▶</span>
        <img  @mouseenter="hover_enter" @mouseout="hover_left" ondragstart="return false" src="{{ asset('img/fileIcon/PDF.svg') }}" alt="" v-if="treedata.type == 'data'">
        <img  @mouseenter="hover_enter" @mouseout="hover_left" ondragstart="return false" src="{{ asset('img/fileIcon/FILE.svg') }}" alt="" v-if="treedata.type == 'folder'" v-show="treedata.isOpen == false">
        <img  @mouseenter="hover_enter" @mouseout="hover_left" ondragstart="return false" src="{{ asset('img/fileIcon/FILEOPEN.svg') }}" alt="" v-if="treedata.type == 'folder'" v-show="treedata.isOpen == true">
        <p @mouseenter="hover_enter" @mouseout="hover_left" class="text" v-show="!treedata.isRename" >@{{treedata.text == '' ? treedata.data.date.split('-').join('/') + ' ' + treedata.data.title :treedata.text}}</p>
        <p @mouseenter="hover_enter" @mouseout="hover_left" class="file_length" v-show="!treedata.isRename" v-if="treedata.type == 'folder'">(@{{treedata.nodes.length}})</p>
        <input type="text" v-model="treedata.text" v-if="treedata.isRename" @keyup.enter="treedata.isRename = false">
      </div>
      <ul v-if="treedata.nodes && treedata.nodes.length > 0"  v-show="treedata.isOpen">
          <item  v-on:remove="thisactive" v-for="node in treedata.nodes" :treedata="node" :key="node.id"></item>
      </ul>
    </li>
    `,
    //emit解釋:目前共有設置兩個item，一個是在HTML的item一個則是在template
    //而我們使用emit時是前內後外。前面是這層的function。後面是觸發外層的function
    //除了HTML的item的父元件是主元件外，其他的原件都是依附在item的元件
    //所以如果我們要將HTML的item傳遞資料到主元件，就需要在HTML內使用emit
    //並且外層的function是要存在的
    //而若是依附在item元件，那自然是沒辦法觸發到主元件的function
    //所以依附item元件的會不斷的觸發thisactive並且將資料往上帶，
    //直接最外層的item也觸發。也就是依附在HTML底下的item觸發時。
    //讓此item觸發主元件的active，如此完成一個資料傳遞。

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
        // console.log('內層觸發');
      }
    }
  })

  app.mount('#wrapId');

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
  $('#add_btn').hide();//新增類別彈窗隱藏
  $('.create').click(()=>{//新增類別彈窗跳出
    $('#add_btn').toggle();
  });
  $(document).click((e)=>{//點選類別彈窗則隱藏
    if(e.target.dataset.type !== 'addBtn'){
      $('#add_btn').hide();
    }
  });


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
  position: relative;
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
  position: relative;
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

.main .left .left_head ul {
  position: absolute;
  top: 36px;
  left: 49px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 165px;
  height: 80px;
  color: #717171;
  border-radius: 6px;
  -webkit-box-shadow: #b1b1b1 1px 1px 5px 0px;
          box-shadow: #b1b1b1 1px 1px 5px 0px;
  background: #ffffff;
  white-space: nowrap;
  z-index: 1;
}

.main .left .left_head ul li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  padding: 5px;
  width: 100%;
  font-size: 15px;
  cursor: pointer;
}

.main .left .left_head ul li span {
  position: relative;
  top: 2px;
}

.main .left .left_head ul li .icon {
  margin-right: 5px;
  width: 30px;
  height: 30px;
}

.main .left .left_head ul li:nth-child(1) {
  border-radius: 6px 6px 0 0;
}

.main .left .left_head ul li:nth-child(2) {
  border-radius: 0 0 6px 6px;
}

.main .left .left_head ul li:hover {
  background: rgba(153, 148, 148, 0.1);
}

.main .left .left_head ul .line {
  margin-left: 2.5px;
  padding: 0.5px;
  width: 95%;
  background: #c7c7c7;
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

.main .left .left_main ul li div input {
  width: 80px;
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
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
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
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  cursor: pointer;
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

.isData {
  visibility: hidden;
}

.create_folder_Modal {
  width: 330px;
}

.create_folder_Modal .modal-content {
  background: none;
  border-radius: 10px 10px 0 0;
}

.create_folder_Modal .modal-content .modal-header {
  padding: 5px;
  color: #ffffff;
  border-bottom: none;
  border-radius: 10px 10px 0 0;
  background-color: #0167a0;
}

.create_folder_Modal .modal-content .modal-header button {
  margin-top: 3px !important;
  margin-right: 5px !important;
  font-size: 18px;
  opacity: 1;
}

.create_folder_Modal .modal-content .modal-header button span {
  color: #ffffff;
}

.create_folder_Modal .modal-content .modal-header .close {
  padding: 0;
  margin: 0;
}

.create_folder_Modal .modal-content .modal-header h5 {
  font-size: 18px;
  position: relative;
  left: 10px;
  top: 0px;
}

.create_folder_Modal .modal-content .modal-body {
  background: #ffffff;
}

.create_folder_Modal .modal-content .modal-body input {
  padding-left: 5px;
  width: 100%;
  outline: none;
}

.create_folder_Modal .modal-content .modal-footer {
  padding: 0;
  border-top: none;
  border-radius: 0 0 10px 10px;
  background: #ffffff;
}

.create_folder_Modal .modal-content .modal-footer button {
  position: relative;
  bottom: 10px;
  right: 5px;
  padding: 1px 15px;
  border-radius: 0px;
  border: none;
}

.create_folder_Modal .modal-content .modal-footer button:nth-child(1) {
  margin-right: -4px;
  color: #686868;
  background: #f3f3f3;
}

.create_folder_Modal .modal-content .modal-footer button:nth-child(1):hover {
  background: #efecec;
}

.create_folder_Modal .modal-content .modal-footer button:nth-child(2) {
  background: #0aa0c8;
}

.create_folder_Modal .modal-content .modal-footer button:nth-child(2):hover {
  background: #08aad6;
}

.isSearch
{
    font-weight: bolder;
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
<div class="container-fluid" id="wrapId">
  <div class="main">
    <div class="left">
        <div class="left_head">
            <div class="create btn" data-type="addBtn">
                <div id="add_btn_icon" class="icon anicon add" data-type="addBtn"></div>新增
            </div>
            <ul id="add_btn" data-type="addBtn">
              <li data-type="addBtn" onclick="$('#create_folder_Modal').modal('show');">
                  <div class="icon anicon addFolder" data-type="addBtn"></div>
                  <span data-type="addBtn">新增資料夾</span>
              </li>
              <li class="line" data-type="addBtn"></li>
              <li class="add_btn_li" data-type="addBtn" @click="siwtch_fn(this.treedata.nodes,temp_list_folder,'','create_file')">
                  <div class="icon anicon addFile" data-type="addBtn"></div>新增會議紀錄
              </li>
            </ul>
            <div class="del btn" @click="siwtch_fn(0,temp_list,temp_list_folder,'del')">
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
                <input type="text" @keyup.enter="siwtch_fn(treedata.nodes,Search_text,'','search')" v-model="Search_text">
                <span class="search_btn anicon search" @click="siwtch_fn(treedata.nodes,Search_text,'','search')" ></span>
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
                    <input type="text" v-if="isedit" v-model="temp_list.data.title">
                </div>
                <div>
                    <span><strong class="ess">⁎</strong> 日期：</span>
                    <span v-if="!isedit">@{{temp_list.data.date.split('-').join('/')}}</span>
                    <input type="date" v-if="isedit" v-model="temp_list.data.date">
                </div>
                <div>
                    <span><strong class="ess">⁎</strong> 時間：</span>
                    <span v-if="!isedit">@{{temp_list.data.hour !=='' ? temp_list.data.hour + '：' + temp_list.data.minute : ''}}</span>
                    <select v-if="isedit" v-model="temp_list.data.hour">
                        <option v-for="item in hour_list" :value="item" :key="item">@{{item}}</option>
                    </select>
                    <strong v-if="isedit">時</strong>
                    <select v-if="isedit" v-model="temp_list.data.minute">
                      <option v-for="item in minute_list" :value="item" :key="item">@{{item}}</option>
                    </select>
                    <strong v-if="isedit">分</strong>
                </div>
                <div>
                    <span><strong class="ess">⁎</strong>地點：</span>
                    <span v-if="!isedit">@{{temp_list.data.place}}</span>
                    <input type="text" v-if="isedit" v-model="temp_list.data.place">
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
                    <template v-for="(item , index) in temp_list.data.member">
                      <span v-if="!isedit">
                          <!-- 非編輯這邊使用陣列.join將人員顯現 -->
                          @{{item.job_title + '一' +item.first_name + item.last_name}}
                          <em v-if="temp_list.data.member.length > 1" v-show="temp_list.data.member[index] !== temp_list.data.member.length - 1">、</em>
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
                    <li v-for="(item,index) in temp_list.data.discussion" :key="index">
                       <div>
                            <strong :class="{isOpen:item.isOpen}" @click="item.isOpen = item.isOpen == true ? false : true" onselectstart="return false">▶</strong>
                            <span class="title">議題@{{index + 1}}:</span>
                            <p class="para" v-if="!isedit">@{{item.subject}}</p>
                            <textarea rows="1" v-if="isedit" v-model="item.subject" ></textarea>
                       </div>
                       <div v-show="item.isOpen">
                            <strong style="visibility: hidden;">▶</strong>
                            <span class="title">決議@{{index + 1}}:</span>
                            <p class="para" v-if="!isedit">@{{item.decision}}</p>
                            <textarea rows="1" v-if="isedit" v-model="item.decision"></textarea>
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
  <div class="modal fade" id="create_folder_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog create_folder_Modal modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">新增資料夾</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" v-model="created_text">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
          <button type="button" class="btn btn-primary" @click="siwtch_fn(treedata.nodes,temp_list_folder,'','create_folder')">確定</button>
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


@extends('system.layouts.default')


@section('js')
<!-- 導入的JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        let b =`[{"id":"0","text":"選單","icon":"http://v2.volkssii.com/img/fileIcon/FILE.svg","li_attr":{"id":"0"},"a_attr":{"href":"#","id":"0_anchor"},"state":{"loaded":true,"opened":true,"selected":false,"disabled":false},"data":{},"parent":"#","type":"file"},{"id":"1","text":"群益數位","icon":"http://v2.volkssii.com/img/fileIcon/FILE.svg","li_attr":{"id":"1"},"a_attr":{"href":"#","id":"1_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{},"parent":"0","type":"file"},{"id":"j1_10","text":"公司聯絡資訊","icon":"https://v2.volkssii.com/img/fileIcon/WORD.svg","li_attr":{"id":"j1_10"},"a_attr":{"href":"#","id":"j1_10_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{"time":"2021-11-3","fack":"https://v2.volkssii.com/img/fileIcon/JPG.svg"},"parent":"1","type":"word"},{"id":"2","text":"設計圖","icon":"http://v2.volkssii.com/img/fileIcon/FILE.svg","li_attr":{"id":"2"},"a_attr":{"href":"#","id":"2_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{},"parent":"0","type":"file"},{"id":"j1_8","text":"一樓大廳","icon":"https://v2.volkssii.com/img/fileIcon/PNG.svg","li_attr":{"id":"j1_8"},"a_attr":{"href":"#","id":"j1_8_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{"time":"2021-11-3","fack":"https://v2.volkssii.com/img/fileIcon/PDF.svg"},"parent":"2","type":"png"},{"id":"j1_9","text":"客房布局","icon":"https://v2.volkssii.com/img/fileIcon/XLS.svg","li_attr":{"id":"j1_9"},"a_attr":{"href":"#","id":"j1_9_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{"time":"2021-11-3","fack":"https://v2.volkssii.com/img/fileIcon/PDF.svg"},"parent":"2","type":"pdf"},{"id":"3","text":"施工圖","icon":"http://v2.volkssii.com/img/fileIcon/FILE.svg","li_attr":{"id":"3"},"a_attr":{"href":"#","id":"3_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{},"parent":"0","type":"file"},{"id":"j1_6","text":"地基鋪設","icon":"https://v2.volkssii.com/img/fileIcon/JPG.svg","li_attr":{"id":"j1_6"},"a_attr":{"href":"#","id":"j1_6_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{"time":"2021-11-3","fack":"https://v2.volkssii.com/img/fileIcon/PNG.svg"},"parent":"3","type":"jpg"},{"id":"4","text":"契約書","icon":"http://v2.volkssii.com/img/fileIcon/FILE.svg","li_attr":{"id":"4"},"a_attr":{"href":"#","id":"4_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{},"parent":"0","type":"file"},{"id":"5","text":"廠商資訊","icon":"http://v2.volkssii.com/img/fileIcon/FILE.svg","li_attr":{"id":"5"},"a_attr":{"href":"#","id":"5_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{},"parent":"0","type":"file"},{"id":"6","text":"瑞展工程行","icon":"http://v2.volkssii.com/img/fileIcon/FILE.svg","li_attr":{"id":"6"},"a_attr":{"href":"#","id":"6_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{},"parent":"5","type":"file"},{"id":"6_1","text":"報價單","icon":"http://v2.volkssii.com/img/fileIcon/FILE.svg","li_attr":{"id":"6_1"},"a_attr":{"href":"#","id":"6_1_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{},"parent":"6","type":"file"},{"id":"j1_5","text":"大廳牆面切割","icon":"https://v2.volkssii.com/img/fileIcon/JPG.svg","li_attr":{"id":"j1_5"},"a_attr":{"href":"#","id":"j1_5_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{"time":"2021-11-3","fack":"https://v2.volkssii.com/img/fileIcon/PNG.svg"},"parent":"6_1","type":"jpg"},{"id":"7","text":"漢堂建設","icon":"http://v2.volkssii.com/img/fileIcon/FILE.svg","li_attr":{"id":"7"},"a_attr":{"href":"#","id":"7_anchor"},"state":{"loaded":true,"opened":true,"selected":false,"disabled":false},"data":{},"parent":"5","type":"file"},{"id":"8","text":"大宇建設","icon":"http://v2.volkssii.com/img/fileIcon/FILE.svg","li_attr":{"id":"8"},"a_attr":{"href":"#","id":"8_anchor"},"state":{"loaded":true,"opened":false,"selected":false,"disabled":false},"data":{},"parent":"5","type":"file"}]`
        let dataAry = JSON.parse(localStorage.getItem('資料'))|| localStorage.setItem('資料',b);//若前者有資料，那取得資料。若沒有則取得後者。
        if(dataAry == undefined){//若無資料重整
            window.location.reload();
        };
        if(dataAry == 0){ //全刪後賦與值
          localStorage.setItem('資料',b)
          window.location.reload();
        };
        //尚未建立資料庫，故先以locastorage替代。
        $('#tree').jstree({
            "core": {
                "expand_selected_onload" : false,
                "animation": 200,
                "check_callback": true,
                // "themes": { "ellipsis": false },
                "data": dataAry,
            },
            //樣式套用
            "types": {
                "default": { //default表示默認，未設置都會套用
                    "icon": "{{ asset('img/fileIcon/FILEOPEN.svg') }}"
                },
                "file": { 
                    "icon":  "{{ asset('img/fileIcon/FILE.svg') }}"
                    
                },
                "avi":{
                    "valid_children": [""],
                    //子節點限制的type 空值等同於無法新增子節點
                    "icon":  "{{ asset('img/fileIcon/AVI.svg') }}"
                },
                "gif":{
                    "valid_children": [""],
                    "icon":  "{{ asset('img/fileIcon/GIF.svg') }}"
                },
                "jpg":{
                    "valid_children": [""],
                    "icon":  "{{ asset('img/fileIcon/JPG.svg') }}",
                },
                "mov":{
                    "valid_children": [""],
                    "icon":  "{{ asset('img/fileIcon/MOV.svg') }}"
                },
                "mp4":{
                    "valid_children": [""],
                    "icon":  "{{ asset('img/fileIcon/MP4.svg') }}"
                },
                "pdf":{
                    "valid_children": [""],
                    "icon":  "{{ asset('img/fileIcon/PDF.svg') }}"
                },
                "png":{
                    "valid_children": [""],
                    "icon": "{{ asset('img/fileIcon/PNG.svg') }}"
                },
                "rar":{
                    "valid_children": [""],
                    "icon":  "{{ asset('img/fileIcon/RAR.svg') }}"
                },
                "txt":{
                    "valid_children": [""],
                    "icon":  "{{ asset('img/fileIcon/TXT.svg') }}"
                },
                "word":{
                    "valid_children": [""],
                    "icon": "{{ asset('img/fileIcon/WORD.svg') }}"
                },
                "xls":{
                    "valid_children": [""],
                    "icon":  "{{ asset('img/fileIcon/XLS.svg') }}"
                },
                "zip":{
                    "valid_children": [""],
                    "icon":  "{{ asset('img/fileIcon/ZIP.svg') }}"
                },
            },
            //右鍵選單
            "contextmenu": {
                "items": function(node) {
                var defaultItems = $.jstree.defaults.contextmenu.items();
                defaultItems.create.label = "新增資料夾";
                defaultItems.create.action = function(){
                  let ref = $('#tree').jstree(true);
                  let DOM = getDOM(); 
                  DOM = ref.create_node(DOM, { "type": "file" });
                  if (DOM) {
                      ref.edit(DOM);
                  };
                };
                defaultItems.rename.label = "命名";//命名
                defaultItems.remove.label = "刪除";
                defaultItems.ccp.label = "編輯";
                defaultItems.ccp.submenu.cut.label = "剪下";
                defaultItems.ccp.submenu.paste.label = "貼上";
                delete defaultItems.ccp.submenu.copy;//刪除複製功能
                return defaultItems;
                }
            },
            "dnd":{
              "copy":false

            },
            "plugins": [
                "contextmenu", "dnd", "search", "types", "wholerow",
            ],
            "checkbox":{
              // "visible":false,
              "three_state":false,
              // "whole_node":false,
              // "cascade_to_disabled":true
            }
        });
      console.log(' (~￣▽￣)~');
      let now;
      function date_get(iteam){
      let today = new Date();
      let year = today.getFullYear();
      let month = today.getMonth();
      let day = today.getDate();
      return iteam = `${year}-${month+1}-${day}`
      };
      now = date_get(now);
        // 取得節點用函式
        function getDOM() {
            let ref = $('#tree').jstree(true);//指向tree
            sel = ref.get_selected();//獲取選取的tree節點
            // sel = sel[0];
            //單純指則一
            //若不選擇若有多選項時則多選
            return sel; //return以便後續使用
        };
        //選擇新建類型
        let addChooseBtn = document.querySelector('.addBtn');//選擇新建類型按鈕
        addChooseBtn.addEventListener('click',addChoose);
        function addChoose(){//選單打開
            let addChoose = document.querySelector('.addChooseList');
            addChoose.classList.toggle('active');    
        };
        //開啟選擇新增檔案or新增資料夾視窗
        let addChooseList = document.querySelector('.addChooseList');
        addChooseList.addEventListener('click',ChooseFileAndDocument);
        function ChooseFileAndDocument(e){
            let OpenBtn = document.querySelectorAll('.addChooseList li');//獲取選單按鈕
            let filebtn = OpenBtn[0];//選單按鈕一
            let Documentbtn = OpenBtn[1];//選單按鈕二
            let addfile = document.querySelector('.addFile');
            let addDocument = document.querySelector('.addDocument');
            if(e.target === filebtn){//點的是新增資料夾選項
                addfile.classList.remove('active');
                addDocument.classList.add('active');
            }else if(e.target === Documentbtn){//點的是新增檔案選項
                addDocument.classList.remove('active');
                addfile.classList.add('active');
            };
        };
        //點非區塊關閉視窗
        window.addEventListener('click',dontChoose,true);
        // 這邊得透過從向外抓，否則會與打開衝突
        function dontChoose(e){
            let addChooseList = document.querySelector('.addChooseList');
            if(e.target.className!='addChooseList'||e.target.className!='addBtn'){
                addChooseList.classList.add('active');
            };
        };
        //點選事窗內叉叉icon，關閉視窗
        let addDontCloseBtn = document.querySelectorAll('.close')
        for(let i of addDontCloseBtn){
            i.addEventListener('click',addDontClose);
        };
        function addDontClose(e){
            let addDocument = document.querySelector('.addDocument');
            addDocument.classList.add('active');
            if(e.target.className =='close'|| e.target.className =='md hydrated'){
                 // let addDocument = document.querySelector('');
                let addFile = document.querySelector('.addFile');
                addFile.classList.add('active');
            };
        };
        // tree新建資料
        let addFileBtn = document.querySelector('#fileBtnId');//子視窗中新增資料夾按鍵
        addFileBtn.addEventListener('click',createNewfile);
        function createNewfile() {
            let addfile_Value = document.querySelector('.addFile input')
            let ref = $('#tree').jstree(true);
            let DOM = getDOM();//獲取點選tree節點
            if(DOM.length == 0||ref.get_node(DOM).type!=='file'){//當沒指定時指定父層
              ref.select_node(document.querySelector('.column').getAttribute('data-num'));
              ref.open_node(document.querySelector('.column').getAttribute('data-num'));
              DOM = document.querySelector('.column').getAttribute('data-num');
            }; 
            DOM = ref.create_node(DOM, { "type": "file" });
            //型態:create_node(父節點,[節點名稱,(有last,first)],function(創建後調用函式))
            if (DOM) {
                ref.edit(DOM,addfile_Value.value);//啟用編輯模式
            };
            addChoose();//輸入後關閉
            updata();//將檔案發送
            addfile_Value.value = '';
        };
        let addDocument = document.querySelector('#documentBtnId');//子視窗中新增檔案鍵
        addDocument.addEventListener('click',createNewdocument);
        function createNewdocument() { //新增檔案節點 
            // console.log(doc_return);
            let clickDom = document.querySelector('#h2Id');
            let addDocument_Value = document.querySelector('.addDocument input').value
            let ref = $('#tree').jstree(true);
            let DOM = getDOM();//獲取點選tree節點
            if(doc_return == undefined||doc_return == ''){//判斷是否已上傳檔案
                alert('請先上傳檔案');
                return;
            };
            if(addDocument_Value == ''|| addDocument_Value == undefined){//檔名輸入偵測
              alert('請輸入檔名');
              return;
            };
            if(DOM.length == 0||ref.get_node(DOM).type!=='file'){//當沒指定時指定父層
              ref.select_node(document.querySelector('.column').getAttribute('data-num'));
              ref.open_node(document.querySelector('.column').getAttribute('data-num'));
              DOM = document.querySelector('.column').getAttribute('data-num');
            }; 
            addDocument_Value = addDocument_Value.split(',');//分割字串
            for(let i = 0 ; i < doc_return.length;i++){
              DOM = getDOM();//重新賦予刷新的DOM
              doc_return[i].return_obj['text'] = addDocument_Value[i];
              DOM = ref.create_node(DOM, doc_return[i].return_obj);//創造節點並賦予type
              // ref.edit(DOM,addDocument_Value[i]);//啟用編輯模式
              DOM = ref.get_node(DOM);
              DOM.data = {time:now,fack:'https://v2.volkssii.com/img/fileIcon/PNG.svg'};//暫時載入假檔
              clickDom.click();//離開輸入框
            };
            addChoose();//輸入後關閉
            updata();//資料輸入及重整右邊介面
            document.querySelector('#addFile').setAttribute('data-text','');//顯示第一個欲上傳檔名
            document.querySelector('.addDocument input').value = '';
            document.querySelector('.tip').classList.remove('active');//上傳中彈窗
            document.querySelector('.loading').classList.remove('active');
            setTimeout(function(){close_tipLoading()},60000)//一定時間到後自動關閉
            let files_number = document.querySelectorAll('.file_length');//彈窗數字
            for(let i of files_number){
              i.innerHTML = doc_return.length;
            };
            doc_return = '';//reset
        };
        function add_document_cancel(){//取消上傳檔案
          document.querySelector('#addFile').setAttribute('data-text',`${''}`);//顯示第一個欲上傳檔名
          document.querySelector('.addDocument input').value = '';
        };
        function add_file_cancel(){//取消上傳檔案
          document.querySelector('.addFile input').value = '';
        };
        document.querySelector('#addFile').addEventListener('input',typeJudge);//分類副檔名並回傳
        let doc_return;//檔案物件本身
        // let fileReader = new FileReader();//讀取
        function typeJudge(e){
            // let qq = fileReader.readAsDataURL(this.files);
            doc_return = e.target.files;//擷取的檔案物件
            let doc_return_type;//副檔名
            let doc_return_name = e.target.files[0].name;//檔名
            let addfile_input = document.querySelector('#addFile');//上傳input
            addfile_input.setAttribute('data-text',`${doc_return_name||''}`);//顯示第一個欲上傳檔名
            let tree;//tree載體
            let ref = $('#tree').jstree(true);//獲取樹
            let DOM = getDOM();//獲取點選tree節點
            for(let i of doc_return){
              doc_return_name = i.name.split('.');//分割字串
              doc_return_type = doc_return_name[doc_return_name.length - 1];//抓出副檔名
              // console.log(doc_return_name);
              doc_return_name.pop();//移除副檔名
              doc_return_name = doc_return_name.join('.');
              i.return_name = doc_return_name;
              i.return_type = doc_return_type;
              if(doc_return_type == 'docx'){
                i.return_obj = {"type": "word"};
              }else if(doc_return_type == 'jpeg'){
                i.return_obj = {"type": "jpg"};
              }
              else{
                i.return_obj = {"type": doc_return_type};
              };
            };
        };
        //reset開啟的新增類型子視窗
        addChooseBtn.addEventListener('click',resetaddChoose);
        function resetaddChoose(e){
            let addfile = document.querySelector('.addFile');
            let addDocument = document.querySelector('.addDocument');
            if(e.target.className == 'addBtn'){
                addfile.classList.add('active');
                addDocument.classList.add('active');
            };
        };
        //tree刪除
        function del(ary) { 
            let ref = $('#tree').jstree(true);
            let DOM = getDOM();
            if(DOM.length == 0 ){//不是點選資料夾的話
              //del刪除
              let active_length = get_targetId();//取得點選的檔案ID
              ref.delete_node(active_length)
            }else{
              ref.delete_node(DOM);//指定ID執行刪除
            };
            updata()//將檔案發送
        };
        // 更新tree
        function updata() {
            let ref = $('#tree').jstree(true);//指向tree
            let data = ref.get_json('#', { 'flat': true,"no_state":true});//將取來的節點都物件化並且不取狀態
            dataAry = JSON.stringify(data) //dataAry是儲存data的陣列，這邊是將data轉為字串後轉入塞入dataAry
            localStorage.setItem('資料',dataAry)//將dataAry放入local  ex.已有function當重整時載入dataAry
            resetLeftHeight();//維持頁面高度
            right_list_update(document.querySelector('.column').getAttribute('data-num'));//重整右邊介面

        };
        // -----畫面調整-----
        // treeNav滾動
        let left = document.querySelector('.left');
        let left_nav = document.querySelector('.left_nav');
        // let right = document.querySelector('.right');
        let cou = document.querySelector('.column');
        let right_nav = document.querySelector('.right_nav');
        // left_nav寬度自適應
        window.onresize = function () {
            left_nav.style['width'] = left.offsetWidth + 'PX';
            right_nav.style['width'] = cou.offsetWidth + 'PX';
            resetLeftHeight();
        };
        //nav 突出時自適應
        let nav = document.querySelector('.nav-item');
        nav.addEventListener('click',function(){
            let bodyclass = document.querySelector('body').className;
            if(bodyclass == 'sidebar-mini layout-navbar-fixed layout-fixed'||bodyclass == 'sidebar-mini layout-navbar-fixed layout-fixed sidebar-open'){
                // 開
                setTimeout(function(){navReset ()}, 450);
            }
            else if(bodyclass == 'sidebar-mini layout-navbar-fixed layout-fixed sidebar-collapse'||bodyclass =='sidebar-mini layout-navbar-fixed layout-fixed sidebar-closed sidebar-collapse'){
                // 關
                setTimeout(function(){navReset ()}, 450);
            }else{
                console.log('都不是')
            };
        });
        navLoadReset() //當畫面調整時重整大小
        function navLoadReset(){
            // let bodyclass = document.querySelector('body').className;
            setTimeout(() => {
                left_nav.style['width'] = left.offsetWidth + 'px';
                right_nav.style['width'] = cou.offsetWidth + 'px';
                right_nav.style['width'] = cou.offsetWidth + 'px';
                right_nav.style['top'] = 57 + 'px'
                // right_nav.style['transition'] = 'all 0.4s'
               }, 450); 
              
        };
        window.addEventListener('scroll',navReset);
        function navReset () {
          let tree = document.querySelector('#tree');
            if (window.scrollY > left.offsetTop ) {
                left_nav.classList.add('active');
                left_nav.style['width'] = left.offsetWidth + 'px';
                left_nav.style['top'] = 57 + 'px';
                tree.style['padding-top'] = 52 + 'px';
                right_nav.classList.add('active');
                right_nav.style['width'] = cou.offsetWidth + 'px';
                right_nav.style['top'] = 57 + 'px';
                document.querySelector('.column').style['padding-top'] = 52 + 'px'
                document.querySelector('.addIcon').classList.add('active');  
            } else {
                document.querySelector('.addIcon').classList.remove('active');  
                document.querySelector('.column').style['padding-top'] = 6 + 'px' 
                left_nav.classList.remove('active');
                left_nav.style['top'] = 0 + 'px'
                tree.style['padding-top'] = 10 + 'px';
                left_nav.style['width'] = left.offsetWidth + 'px';
                right_nav.style['width'] = cou.offsetWidth + 'px';
                right_nav.style['top'] = 0 + 'px'
                right_nav.classList.remove('active');
            };
        };
        //確保畫面不會被裁切
        resetLeftHeight();
        function resetLeftHeight(){
            let right = document.querySelector('#rightId');
            let column = document.querySelector('.column');
            if(right.clientHeight > left.clientHeight){
              left.style['height'] = right.clientHeight + 'px';
              document.querySelector('#tree').style['height'] = right.clientHeight + 'px';
            }
            else if(right.clientHeight < 1000){
              left.style['height'] = 100 +'vh';
              document.querySelector('#tree').style['height'] = 100 +'vh';
            };
        };
        //說明:判斷是判斷左邊的高弱小於右邊的話，與右同高。
        //這邊會比較慢執行，因為要等右邊高度變化後才能抓取到正確變化的值。
        let column = document.querySelector('.column');
        column.ondragstart =(e)=>{//禁止拖動icon
          if(e.target.nodeName){
            return false;
          };
        };
        let body = document.querySelector('body');
        body.addEventListener('dragover',function(e){
          e.preventDefault();
        });
        body.addEventListener('drop',function(e){
          e.preventDefault();
          column.classList.remove('active');
        });
        column.addEventListener('dragover',function(e){//抓取檔案
            e.preventDefault();
            column.classList.add('active');
            // console.log('觸發成功');
        });
        //這裡差判斷式 if判斷副檔名是否符合，否則打斷
        column.addEventListener('drop',function(e){
            e.preventDefault();
            var clickDom = document.querySelector('#h2Id');
            column.classList.remove('active');//背景恢復
            let ref = $('#tree').jstree(true);
            let DOM = getDOM();//獲取點選tree節點
            let doc_return;//檔案物件本身
            let doc_return_name;//檔名
            let doc_return_type;//副檔名
            let str_length; //數字長度
            let doc = e.dataTransfer.files;//擷取的檔案
            let tree;//tree載體
            // console.log(doc.length);
            if(DOM.length == 0){//當沒指定時指定父層
              ref.select_node(document.querySelector('.column').getAttribute('data-num'));
              ref.open_node(document.querySelector('.column').getAttribute('data-num'));
              DOM[0] = document.querySelector('.column').getAttribute('data-num');
            };
            if(doc.length == 0){//第一層檢測，上傳的是否是檔案
                  alert('請確認上傳的檔案格式符合規範')
                  return
            };
            //這編寫判斷式，先掃過檔名確定檔名無誤後再執行，否則跳錯誤並return
            for(let i = 0; i < doc.length; i++){
              doc_return = doc[i];//檔案物件本身
              doc_return_name = doc[i].name;//抓取檔名
              str_length = doc_return_name.length;//抓取字數
              doc_return_type = doc[i].name.split('.');//分割字串
              doc_return_type = doc_return_type[doc_return_type.length - 1];//抓出副檔名
              if(doc_return_type == 'jpeg'){
                doc_return_name = doc_return_name.substring(0, str_length - 5);
              }else if(doc_return_type == 'docx'){
                doc_return_name = doc_return_name.substring(0, str_length - 5);
              }else{
                doc_return_name = doc_return_name.substring(0, str_length - 4);
              }
              if(doc_return_type == 'jpeg'||doc_return_type == 'jpg'||doc_return_type == 'png'||doc_return_type == 'gif'||doc_return_type == 'avi'||doc_return_type == 'mov'||doc_return_type == 'mp4'||doc_return_type == 'pdf'||doc_return_type == 'docx'||doc_return_type == 'xls'||doc_return_type == 'txt'||doc_return_type == 'zip'||doc_return_type == 'rar'){
                // console.log('通過')
              }else{
                alert('上傳的檔案中資料有錯誤，請確認上傳的檔案格式符合規範')
                return
              };
              if(doc_return_type == 'jpeg'){
                // doc_return_name = doc_return_name.substring(0, str_length - 5);
                tree = ref.create_node(DOM,{ "type": "jpg","text":`${doc_return_name}`})
              }else if(doc_return_type == 'docx'){
                // doc_return_name = doc_return_name.substring(0, str_length - 5);
                tree = ref.create_node(DOM,{ "type": "word","text":`${doc_return_name}`})
              }else{
                // doc_return_name = doc_return_name.substring(0, str_length - 4);
                tree = ref.create_node(DOM,{ "type":doc_return_type,"text":`${doc_return_name}`})
              };
              tree = ref.get_node(tree)//將tree轉換物件
              tree.data = {time:now,fack:'https://v2.volkssii.com/img/sidebar_logo/01.svg'}//暫時載入假檔
              clickDom.click();//因為啟用編輯模式會使後續的新增失效，故使用.click取消，這樣跑下一次的迴圈時就不會阻擋新增。
              updata();//將資料儲存入數據庫
            };
            document.querySelector('.tip').classList.remove('active');//上傳中彈窗
            document.querySelector('.loading').classList.remove('active');
            setTimeout(function(){close_tipLoading()},60000)//一定時間到後自動關閉
            let files_number = document.querySelectorAll('.file_length');//彈窗數字
            for(let i of files_number){
              i.innerHTML = doc.length;
            };
           
            // 目前就差擷取檔案後AJAX傳送出去以及當檔案上傳成功後回傳跳出提示彈窗。
        });
        //搜尋左欄部分
        let list = document.querySelector('.column .list');
        let searchBtn = document.querySelector('#searchBtn');
        let searchEnter = document.querySelector('#searchValueId');
        let document_List = document.querySelector('.document_List');
        searchEnter.addEventListener('change',search)
        searchBtn.addEventListener('click',search);
        function search(){
          let ref = $('#tree').jstree(true);
          let value = document.querySelector('#searchValueId').value;
          if(!value){return}//空值return
          ref.search(value);//搜尋jstree列表
          searchRight(value);
          resetLeftHeight();//重整列表高
        };
        function searchRight(value){//search因為要偵測字，所以無法代入update
          let docStr = '';
          let str = '';
          let ref = $('#tree').jstree(true);
          let data = ref.get_json('#', { 'flat': true,"no_state":true});
          console.log(data)
          let files;
          for(let i of data){
            if(i.text.indexOf(value)>= 0 && i.type == 'file'){
              files = ref.get_node(i).children.length;
              str+=`
                  <li data-type="${i.type}" data-num="${i.id}">
                        <div class="top" data-type="${i.type}" data-num="${i.id}">
                            <img src="{{ asset('./img/fileIcon/${i.type.toUpperCase()}.svg') }}" alt="icon" data-type="${i.type}" data-num="${i.id}">
                        </div>
                        <div class="bottom" data-type="${i.type}" data-num="${i.id}">
                            <div class="title" data-type="${i.type}" data-num="${i.id}">
                                ${i.text}
                            </div>
                            <p data-type="file" data-num="${i.id}">
                                <span data-type="file">${files} files</span>
                            </p>
                        </div>
                    </li>
                  `
            };
            if(i.text.indexOf(value)>= 0 && i.type !='file'){
              docStr+=`
                  <li data-type="doc" data-num="${i.id}">
                    <a href="${i.icon}" data-lightbox="comment-1">
                        <div class="top" data-type="doc" data-num="${i.id}">
                            <img src="{{ asset('./img/fileIcon/${i.type.toUpperCase()}.svg') }}" alt="icon" data-type="doc" data-num="${i.id}">
                        </div>
                        <div class="bottom" data-type="doc" data-num="${i.id}">
                            <div class="title" data-type="doc" data-num="${i.id}">
                                ${i.text}
                            </div>
                            <p data-type="file" data-num="${i.id}">
                                <span data-type="doc">${i.data.time} </span>
                            </p>
                        </div>
                    </a>
                  </li>`
            };
          };
          list.innerHTML= str;
          document_List.innerHTML = docStr;
        };
        let tip_closeIcon = document.querySelectorAll('.tip_close');//關閉icon
        tip_closeIcon[0].addEventListener('click',close_tipLoading);
        tip_closeIcon[1].addEventListener('click',close_tipFinish);
        //關閉等待圖示
        function close_tipLoading(){
            let tip = document.querySelector('.tip');//通知container
            let tip_loading = document.querySelector('.loading');//等待通知
            let tip_finish = document.querySelector('.finish');//完成通知
            if(tip_finish.className =='finish active'){
                tip.classList.add('active');
                tip_loading.classList.add('active');
                return
            };
            tip_loading.classList.add('active');
        };
        //關閉完成圖示
        function close_tipFinish(){
            let tip = document.querySelector('.tip');//通知container
            let tip_finish = document.querySelector('.finish');//完成通知
            let tip_loading = document.querySelector('.loading');//等待通知
            if(tip_loading.className =='loading active'){
                tip.classList.add('active');
                tip_loading.classList.add('active');
                return
            };
            tip_finish.classList.add('active');
        };
        //右欄點選進入子節點
        list.addEventListener('dblclick',function(e){
          if(e.target.dataset.type !=='file'){
            return
          }//雙擊type非file的話return
          let id = e.target.dataset.num;
          let ref = $('#tree').jstree(true);
          ref.deselect_all();//取消所有已選取節點
          ref.select_node(id);//jstree點選的指定id
          ref.open_node(0);//打開主菜單子節點
          ref.open_node(id);//打開指定id節點
          right_list_update(id);//刷新列表
        },true);
        //帶入id去挑出data內的資料
        function right_list_update(id){
          let ref = $('#tree').jstree(true);
          let files;
          let str ='';
          let docStr = '';
          let data = JSON.parse(localStorage.getItem('資料'));
          for(let i of data){
            if(id == i.parent && i.type =='file'){
              files = ref.get_node(i).children.length;
              str += `
                  <li data-type="${i.type}" data-num="${i.id}">
                        <div class="top" data-type="file" data-num="${i.id}">
                            <img src="{{ asset('./img/fileIcon/${i.type.toUpperCase()}.svg') }}" alt="icon" data-type="file" data-num="${i.id}">
                        </div>
                        <div class="bottom" data-type="file" data-num="${i.id}">
                            <div class="title" data-type="file" data-num="${i.id}">
                                ${i.text}
                            </div>
                            <p data-type="file" data-num="${i.id}">
                                <span data-type="file">${files} files </span>
                            </p>
                        </div>
                    </li>
            `
            };
            if(id == i.parent && i.type !=='file'){
              docStr += `
                    <li data-type="doc" data-num="${i.id}">
                      <a href="${i.icon}" data-lightbox="comment-1">
                        <div class="top" data-type="doc" data-num="${i.id}">
                            <img src="{{ asset('./img/fileIcon/${i.type.toUpperCase()}.svg') }}" alt="icon" data-type="doc" data-num="${i.id}">
                        </div>
                        <div class="bottom" data-type="doc" data-num="${i.id}">
                            <div class="title" data-type="doc" data-num="${i.id}">
                                ${i.text}
                            </div>
                            <p data-type="doc" data-num="${i.id}">
                                <span data-type="doc">${i.data.time} </span>
                            </p>
                        </div>
                      </a>
                    </li>`
            };
          };
          document_List.innerHTML = docStr;
          list.innerHTML = str;
          resetLeftHeight();
        };
        //tree點選顯示右欄
        // document.querySelector('#tree').addEventListener('click',right_Sync);
        // function right_Sync(){
        //   let ref = $('#tree').jstree(true);
        //   let dom = getDOM();//獲取點選tree節點
        //   dom = dom[0];
        //   let type = ref.get_node(dom).type;
        //   if(type !='file'){return}//若type不等於file的話，停止執行。
        //   document.querySelector('.column').setAttribute('data-num',dom);
        //   right_list_update(dom)
        // };
        //關閉選單
        function resetTree(){
          let ref = $('#tree').jstree(true);
          ref.close_all();
        };
        let down_data = [];
        document_List.addEventListener('click',download_add_id);
        function download_reset_active(){
          let active_length = document.querySelectorAll('#documentList li .bottom');
          for(let i of active_length){
            i.classList.remove('active');
          };
        };
        let get_targetId = () => {//取得有被點選的檔案
          let active_length = document.querySelectorAll('#documentList li .bottom');
          let down_data = [];
          for(let i = 0; i < active_length.length ;i++){//掃過所有.bottom 查看是否有active
            if(active_length[i].className =='bottom active'){
              down_data.push(active_length[i].getAttribute('data-num'));//取得有active的id
            };
          };
          return down_data;
        };
        function download_get_id(){//取得置入陣列的下載id
          let ref = $('#tree').jstree(true);
          let DOM = getDOM();
          let data_open;
          for(let i = 0; i < DOM.length ;i++){
              data_open = ref.get_node(DOM[i]).data.fack;//取得data內的檔案資訊
              // window.open(data_open);
              download(data_open,ref.get_node(DOM[i]).text);
          };
        };

        function download(url,fileName = 'fileName'){//連接外部網站的檔案會直接開啟預覽
          let a = document.createElement('a');//新增標籤
          a.setAttribute('href',`${url}`);//新增下載url
          a.setAttribute('download',fileName);//檔名
          a.style.display = 'none';//隱藏標籤
          document.body.appendChild(a);//上傳標籤
          a.click();//觸發
          document.body.removeChild(a);//移除標籤
        };
        function download_add_id(e){
          down_data.splice(0, down_data.length);//重新開始時清空資料
          let num = e.target.dataset.num;
          let dom = e.target;
          let ref = $('#tree').jstree(true);
          ref.deselect_all();
          // 多選id
          if(e.ctrlKey){
            if(dom.nodeName =='UL'){return}
              if(dom.className == "bottom"){
                //點選到bottom
                console.log('點到bottom')
                if(dom.className =="bottom active"){
                  dom.className='bottom';
                }else{
                  dom.className='bottom active';
                }
              }else if(dom.className =='top'){
                //點到top
                console.log('點到top')
                if(dom.nextElementSibling.className =="bottom active"){
                  dom.nextElementSibling.className='bottom';
                }else{
                  dom.nextElementSibling.className='bottom active';
                }
              }else if(dom.nodeName == 'SPAN'){
                //點到span
                console.log('點到span')
                if(dom.parentNode.parentNode.className =="bottom active"){
                  dom.parentNode.parentNode.className='bottom';
                }else{
                  dom.parentNode.parentNode.className='bottom active';
                }
              }else if(dom.nodeName == 'P'){
                //點到p
                console.log('點到p')
                if(dom.parentNode.className == "bottom active"){
                   dom.parentNode.className = 'bottom';
                }else{
                   dom.parentNode.className = 'bottom active';
                }
              }else if(dom.className =='title'){
                //點到title class
                console.log('點到title')
                if(dom.parentNode.className == "bottom active"){
                  dom.parentNode.className = 'bottom';
                }else{
                  dom.parentNode.className = 'bottom active';
                }
              }else if(dom.nodeName =='IMG'){
                if(dom.parentNode.nextElementSibling.className == "bottom active"){
                  dom.parentNode.nextElementSibling.className = 'bottom';
                }else{
                  dom.parentNode.nextElementSibling.className = 'bottom active';
                }
              };
          }else{
            //單選選擇id
            download_reset_active();//刪除all_active
            if(dom.nodeName =='UL'){return}
            if(dom.className == "bottom"){
              //點選到bottom
              dom.className='bottom active';
            }else if(dom.className =='top'){
              //點到top
              dom.nextElementSibling.className ='bottom active';
            }else if(dom.nodeName == 'SPAN'){
              //點到span
              dom.parentNode.parentNode.className ='bottom active';
            }else if(dom.nodeName == 'P'){
              //點到p
              dom.parentNode.className ='bottom active';
            }else if(dom.className =='title'){
              //點到title class
              dom.parentNode.className ='bottom active';
            }else if(dom.nodeName =='IMG'){
              dom.parentNode.nextElementSibling.className ='bottom active';
            };
          };
        };
        window.onbeforeunload=function(e){//離開時關閉節點
          resetTree();
        };
        //右鍵開啟選單
        // let context_num;
        // let context_store_num;
        // document.querySelector('.column').oncontextmenu = (e) =>{
        //   e.preventDefault(e);
        //   context_num = e.target.dataset.num;
        //   document.querySelector('.rename').classList.add('active');//關閉命名彈窗
        //   let menu = document.querySelector('.contextMenu');
        //   // if(e.target.dataset.type == undefined){
        //   //   menu.classList.remove('active');//關閉menu
        //   //   return
        //   // };
        //   menu.classList.toggle('active');
        //   menu.style.left = (e.clientX - 100) + 'px';//選單位至
		    //   menu.style.top = (e.clientY - 55) + 'px';//選單位至
        // };
        document.onclick = (e) =>{
          // document.querySelector('.contextMenu').classList.remove('active');//關閉右鍵選單
          if(e.target.dataset.type !=='doc'){
            download_reset_active();
          }
          if(e.target.className =='renameBtn'||e.target.dataset.rename == '0'){
           return
          };
          // document.querySelector('.rename').classList.add('active');//關閉命名彈窗
        };
        // let contextMenuList = document.querySelectorAll('.contextMenu li');//右鍵選單選項
        // contextMenuList[0].onclick =()=>{
        //   document.querySelector('.rename').classList.remove('active');//開啟命名彈窗
        //   console.log('觸發命名')
        // };
        // document.querySelector('#rename_cxl_btn').onclick = (e)=>{//關閉按鈕
        //   document.querySelector('.rename').classList.add('active');//關閉命名彈窗
        // };
        // document.querySelector('#rename_add_btn').onclick =(e)=>{
        //   let name = document.querySelector('#rename_newName_Id');
        //   let ref = $('#tree').jstree(true);
        //   ref.edit(context_num,name.value);
        //   updata();
        //   document.querySelector('#h2Id').click();
        //   name.value = '';
        // };
        // contextMenuList[2].onclick =(e)=>{//貼上
        //   let ref = $('#tree').jstree(true);
        //   ref.move_node (context_store_num,context_num||document.querySelector('.column').dataset.num)
        //   updata();
        // };
        // contextMenuList[1].onclick =(e)=>{//剪下
        //   context_store_num = context_num;
        // };
        // contextMenuList[1].onclick =()=>{//刪除節點
        //   let ref = $('#tree').jstree(true);
        //   ref.delete_node(context_num);
        //   updata();
        // };
        // JQ

        // delete_node.jstree 刪除 / create_node.jstree 創建 / rename_node.jstree 命名 / move_node.jstree 移動 //  啟動後觸發事件
        $(document).ready(function () {
          setTimeout(() => {
          right_list_update(0);
          // resetTree();
          document.querySelector('.column').setAttribute('data-num',0);
          resetLeftHeight();
        }, 1000);
        });
        $(function () { 
         $('#tree').on('move_node.jstree', function (e,parent,node) {
              updata();
            });
          //移動
          $('#tree').on('delete_node.jstree', function (e,parent,node) {
              updata();
          });
          //刪除
          $('#tree').on('create_node.jstree', function (e,parent,node) {
              updata();
          });
          //新增
          $('#tree').on('rename_node.jstree', function (e,parent,node) {
              updata();
              navLoadReset();
          });
          //命名
          $('#tree').on('open_node.jstree',()=>{
              navLoadReset();
          });
          let select_num = 0;
          $('#tree').on('select_node.jstree', function (e,node,selected) {
              let ref = $('#tree').jstree(true);
               if(node.node.type != 'file'){//點擊一次跳到父層
                let parent = node.node.parent;//父層id
                document.querySelector('.column').setAttribute('data-num',parent);//設置column父層id
                setTimeout(() => {
                  right_list_update(parent);//刷新背景
                }, 0);
                //刷新雙擊次數
                select_num++;
                setTimeout(() => {
                  select_num=0;
                }, 200);
               }else{
                 document.querySelector('.column').setAttribute('data-num',node.node.id);
                  right_list_update(node.node.id);
                  select_num =0;
               };
               if(select_num ==2){
                  // download(node.node.data.fack);
                  //開啟燈箱
                  let a = document.createElement('a');
                  a.setAttribute('href',`${node.node.icon}`)
                  a.setAttribute('data-lightbox','comment-2')
                  a.style.display ='none';
                  document.body.appendChild(a);
                  a.click();
                  document.body.removeChild(a);
                  select_num =0;
               };
          });
          $('#close_all_id').click(()=>{
            let ref = $('#tree').jstree(true);
            ref.close_all(0);
          });
          $('#open_all_id').click(()=>{
            let ref = $('#tree').jstree(true);
            ref.open_all(0);
          });
        });
    </script>
@endsection



@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<style>
/* 現在開始copy新增的部分及部分微調，一些操作版型會跑掉，所以不全部複製 */

.jstree-default .jstree-anchor
{
  overflow:hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  /* padding-right:50%; */
  /* width: 100%; */
  /* 點選範圍 */
}

.vakata-context {
  z-index: 999 !important;//jstree顯示
}

/* .jstree-anchor {
  white-space : normal !important;
  height : auto !important;
  padding-right : 24px;
} */

.main {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-left: 10px;
  margin-bottom: -9px;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.main * {
  padding: 0;
  margin: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

.main a {
  color: black;
  text-decoration: none;
}

.main a:link {
  color: black;
}

.main a:visited {
  color: black;
}

.main li {
  list-style: none;
}

.main .left {
  position: relative;
  width: calc(392px);
  background: #ffffff;
  z-index: 1;
  -webkit-box-shadow: 1px 0px 3px 3px #8b8585;
          box-shadow: 1px 0px 3px 3px #8b8585;
  /* overflow:hidden; */
}

.main .left #tree {
  position: relative;
  padding-top: 10px;
  /* min-height: 100vh;
  height: 100%; */
  overflow:scroll;
}

.main .left #tree.active {
  padding-top: 62px;
}

.main .left .left_nav.active {
  position: fixed;
  z-index: 2;
}

.main .left .left_nav {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  background: #b3b3b3;
  height: 52px;
  top: 0px;
  z-index: 1;
  /* -webkit-transition: all 0.4s;
  transition: all 0.4s;
  transition-delay:0.2s;
  -webkit-transition-delay:0.2s; */
}

.main .left .left_nav div {
  cursor: pointer;
}

.main .left .left_nav div:nth-child(1) {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 15px;
  font-weight: 500;
  color: #ffffff;
  height: 24px;
  width: 71px;
  border-radius: 20px;
  background: #00c486;
}

.main .left .left_nav div:nth-child(1) .addChooseList {
  position: absolute;
  top: 20px;
  left: 50px;
  color: black;
  -webkit-box-shadow: #969595 0.5px 0.5px 0.5px 0.5px;
          box-shadow: #969595 0.5px 0.5px 0.5px 0.5px;
  cursor: default;
}

.main .left .left_nav div:nth-child(1) .addChooseList li {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding-left: 5px;
  width: 150px;
  height: 40px;
  font-size: 16px;
  background-color: white;
  border: 0.1px solid #969595;
  cursor: pointer;
}

.main .left .left_nav div:nth-child(1) .addChooseList li img {
  width: 16px;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addFile.active {
  display: none;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addFile {
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
  -ms-flex-pack: distribute;
      justify-content: space-around;
  z-index: 1;
  position: absolute;
  top: 20px;
  left: 130px;
  width: 275px;
  height: 100px;
  border: 1px #bbb7b7 solid;
  border-radius: 3px;
  -webkit-box-shadow: #969595 0.5px 0.5px 0.5px 0.5px;
          box-shadow: #969595 0.5px 0.5px 0.5px 0.5px;
  background-color: white;
  cursor: default;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addFile input {
  padding-left: 2px;
  width: 240px;
  height: 22px;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addFile input:focus {
  outline: none;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addFile p {
  color: black;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addFile p:nth-child(1) {
  position: relative;
  right: 83px;
  top: 5px;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addFile p:nth-child(1) .close {
  position: absolute;
  left: 230px;
  bottom: 0px;
  font-size: 20px;
  cursor: pointer;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addFile p:nth-child(3) {
  position: relative;
  left: 70px;
  bottom: 5px;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addFile p:nth-child(3) span {
  font-size: 14px;
  padding: 5px 10px;
  cursor: pointer;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addFile p:nth-child(3) span:nth-child(1) {
  background-color: #efefef;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addFile p:nth-child(3) span:nth-child(2) {
  background-color: #04a6c8;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument.active {
  display: none;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument {
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
  -ms-flex-pack: distribute;
      justify-content: space-around;
  z-index: 1;
  position: absolute;
  top: 20px;
  left: 130px;
  width: 275px;
  height: 100px;
  border: 1px #bbb7b7 solid;
  border-radius: 3px;
  -webkit-box-shadow: #969595 0.5px 0.5px 0.5px 0.5px;
          box-shadow: #969595 0.5px 0.5px 0.5px 0.5px;
  background-color: white;
  cursor: default;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument input {
  padding-left: 2px;
  width: 240px;
  height: 22px;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument input:focus {
  outline: none;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument #addFile {
  position: absolute;
  bottom: 8px;
  left: 14px;
  width: 123px;
  height: auto;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument #addFile::after {
 /* content:attr(data-name) */
 content:attr(data-text);
 position: absolute;
 top: 5px;
 right: -3px;
 width: 45px;
 color: #00c486;
 text-overflow: ellipsis;
 overflow:hidden;
 white-space: nowrap;
 z-index: 1;

}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument p {
  color: black;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument p .explain
{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    position: absolute;
    left: 63px;
    top: 2px;
    color: #f8f9fa;
    font-size: 18px;
    border-radius: 50%;
    background: #00c486;
    cursor: pointer;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument p:nth-child(1) {
  position: relative;
  right: 90px;
  top: 5px;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument p:nth-child(1) .close {
  position: absolute;
  left: 230px;
  bottom: 0px;
  font-size: 20px;
  cursor: pointer;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument p:nth-child(3) {
  position: relative;
  left: 70px;
  bottom: 5px;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument p:nth-child(3) span {
  font-size: 14px;
  padding: 5px 10px;
  cursor: pointer;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument p:nth-child(3) span:nth-child(1) {
  background-color: #efefef;
}

.main .left .left_nav div:nth-child(1) .addChooseList li .addDocument p:nth-child(3) span:nth-child(2) {
  background-color: #04a6c8;
}

.main .left .left_nav div:nth-child(1) .addChooseList li:hover {
  color: #00c486;
  background-color: #f5f3f3;
}

.main .left .left_nav div:nth-child(1) .addChooseList li:nth-child(2) {
  border-top: none;
}

.main .left .left_nav div:nth-child(1) .addChooseList.active {
  display: none;
}

.main .left .left_nav div:nth-child(2) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 15px;
  font-weight: 500;
  color: #ffffff;
  height: 24px;
  width: 71px;
  border-radius: 20px;
  background: #e52d17;
}

.main .left .left_nav div:nth-child(3) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 15px;
  font-weight: 500;
  color: #ffffff;
  height: 24px;
  width: 71px;
  border-radius: 20px;
  background: #14a1c5;
}

.main .left::-webkit-scrollbar {
  display: none;
}

.main .right {
  position: relative;
  z-index: 0;
  width: 76.2%;
  width: calc(100%-392px);
}

.main .right .right_nav.active {
  position: fixed;
  z-index: 2;
  top: 57px;
}

.main .right .right_nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding-left: 30px;
  height: 52px;
  background: #c3c0c0;
  /* -webkit-transition: all 0.4s;
  transition: all 0.4s;
  transition-delay:0.2s;
  -webkit-transition-delay:0.2s; */
}

.main .right .right_nav .search {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 34px;
}

.main .right .right_nav .search input {
  padding: 0px 10px;
  width: 358px;
  border-radius: 8px;
  border: none;
  -webkit-box-shadow: #969595 1.5px 1.5px 1.5px 1.5px;
          box-shadow: #969595 1.5px 1.5px 1.5px 1.5px;
}

.main .right .right_nav .search input:focus {
  outline: none;
}

.main .right .right_nav .search .btn {
  position: absolute;
  height: 34px;
  font-size: 20px;
  right: 7px;
  top: 3px;
  cursor: pointer;
}

.main .right .right_nav .icons {
  position: relative;
  top: 5px;
  right: 20px;
  width: 70px;
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

.main .right .right_nav .icons .img_menuIcon {
  font-size: 30px;
  color: #666666;
  cursor: pointer;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.main .right .right_nav .icons .list_menuIcon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  height: 24px;
  cursor: pointer;
}

.main .right .right_nav .icons .list_menuIcon div {
  position: relative;
  bottom: 3.5px;
  width: 28px;
  height: 3px;
  background-color: #979696;
  border-radius: 20px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.main .right .right_nav .icons .img_menuIcon:hover {
  color: #474747;
}

.main .right .right_nav .icons .list_menuIcon:hover div {
  background: #474747;
}

.main .right .column.active
{
  background-color: #c6e6ff;
}
.main .right .column {
  position: relative;
  height: 100%;
  padding-left: 30px;
  padding-top: 6px;
  background-color: #f2f2f2;
}


.main .right .column .addIcon{
  position: absolute;
  width: 200px;
  height: 300px;
  top: 50%;
  left:50%;
  transform:translate(-50%,-50%);
}

.main .right .column .addIcon .bg{
  width: 200px;
  height: 200px;
  background: url("{{ asset('img/fileIcon/bg.svg') }}");
  background-size:cover;
}
.main .right .column .addIcon p{
  color: #cccccc;
}

.main .right .column .addIcon.active{
  transform:translate(-50%,calc(-50% + 52px));
}

.main .right .column h2 {
  font-size: 22px;
  position: relative;
  z-index: 1;
}

.main .right .column ul {
  position: relative;
  z-index: 1;
  margin-top: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  overflow: auto;
}



.main .right .column ul li {
  margin: 18px;
  width: 172px;
  height: 172px;
  text-overflow:ellipsis;
  border-radius: 10px;
  cursor: pointer;
  overflow:hidden;
}



/* .main .right .column ul li:hover .bottom{
  background: #0066a1;
} */

.main .right .column ul li .top {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 106px;
  background: #ffffff;
  /* background: #0066a1; */
  border-radius: 10px 10px 0px 0px;
  -webkit-box-shadow: 1.5px 1.5px 1.5px 1.5px #cac9c9;
          box-shadow: 1.5px 1.5px 1.5px 1.5px #cac9c9;
}

.main .right .column ul li .top img {
  width: 90px;
}

.main .right .column ul li .bottom.active{

  background: #0066a1;
  color:#ffffff;
}


.main .right .column ul li .bottom {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: left;
      -ms-flex-align: left;
          align-items: left;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  /* padding-left: 25px; */
  padding: 0 25px;
  /* padding-right:25px; */
  height: 62px;
  background: #dce6f8;
  border-radius: 0px 0px 10px 10px;
  -webkit-box-shadow: 1.5px 2.5px 1.5px 1.5px #cac9c9;
          box-shadow: 1.5px 2.5px 1.5px 1.5px #cac9c9;
}

.main .right .column ul li .bottom .title {
  font-size: 15px;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow:hidden;
}

.main .right .column ul li .bottom p {
  color: #95979a;
  font-size: 14px;
}

.main .contextMenu{
  display: none;
  position: absolute;
  width: 168px;
  height: 80px;
  background: #ffffff;
  z-index: 10;
  box-shadow: 1px 2px 2px 2px #c3c3c3;
}


.main .contextMenu li{
  display: flex;
  align-items: center;
  justify-content: flex-start;
  padding-left:45px;
  /* padding:0 10px; */
  width: 100%;
  height: 40px;
  cursor: pointer;
  /* border-left: 1px solid rgba(22, 10, 10, 0.1); */
  /* border-bottom: 1px solid rgba(22, 10, 10, 0.1); */
}

.main .contextMenu li:hover{
  background: #e8eff7;
}

.main .contextMenu li:nth-child(1){
  border-bottom: 1px solid rgba(22, 10, 10, 0.1);
}

.main .contextMenu li:nth-child(3){
  border-bottom: 1px solid rgba(22, 10, 10, 0.1);
}

.main .contextMenu li span{
  display: flex;
  justify-content: center;
  align-items: center;
  padding-left: 10px;
  height: 100%;
  border-left: 1px solid rgba(22, 10, 10, 0.1);
}


.main .contextMenu.active{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.main .tip.active {
  display: none;
}

.main .tip {
  position: fixed;
  right: 10px;
  bottom: 10px;
  -webkit-transition: all 1s;
  transition: all 1s;
  z-index: 10;
}

.main .tip .finish {
  width: 364px;
}

.main .tip .finish .top {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 0 20px;
  width: 100%;
  height: 35px;
  color: white;
  background: #0066a1;
  border-radius: 5px 5px 0 0;
}

.main .tip .finish .top p:nth-child(2) {
  position: relative;
  top: 2px;
  left: 10px;
  font-size: 20px;
  cursor: pointer;
}

.main .tip .finish .bottom {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 0 20px;
  width: 100%;
  height: 42px;
  background: #ffffff;
  border-radius: 0 0 5px 5px;
}

.main .tip .finish .bottom p {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.main .tip .finish .bottom p img {
  width: 22px;
  height: 22px;
  margin-right: 5px;
}

.main .tip .finish .bottom p:nth-child(1) {
  color: black;
  font-weight: bolder;
}

.main .tip .finish .bottom p:nth-child(2) {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background-color: yellowgreen;
  border-radius: 50%;
  color: white;
  font-size: 21px;
  width: 23px;
  height: 23px;
  font-weight: bolder;
}

.main .tip .finish.active {
  display: none;
}

.main .tip .loading.active {
  display: none;
}

.main .tip .loading {
  width: 364px;
}

.main .tip .loading .top {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 0 20px;
  width: 100%;
  height: 35px;
  color: white;
  background: #0066a1;
  border-radius: 5px 5px 0 0;
}

.main .tip .loading .top p:nth-child(2) {
  position: relative;
  top: 2px;
  left: 10px;
  font-size: 20px;
  cursor: pointer;
}

.main .tip .loading .bottom {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 0 20px;
  width: 100%;
  height: 42px;
  background: #ffffff;
  border-radius: 0 0 5px 5px;
}

.main .tip .loading .bottom p {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.main .tip .loading .bottom p img {
  width: 22px;
  height: 22px;
  margin-right: 5px;
}

.main .tip .loading .bottom p:nth-child(1) {
  color: black;
  font-weight: bolder;
}

.main .tip .loading .bottom p:nth-child(2) {
  position: relative;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: linear-gradient(45deg, transparent, transparent 40%, black);
  -webkit-animation: animate 1s linear infinite;
          animation: animate 1s linear infinite;
}



@-webkit-keyframes animate {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes animate {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

.main .tip .loading .bottom p:nth-child(2)::before {
  content: '';
  position: absolute;
  top: 4px;
  left: 4px;
  right: 4px;
  bottom: 4px;
  background: #ffffff;
  border-radius: 50%;
}

.main .right .column .rename.active{
  display: none;
}

.main .right .column .rename{
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  position: absolute;
  left:50%;
  top:45%;
  padding: 0 10px;
  width: 275px;
  height: 100px;
  font-size:15px;
  transform:translate(-50%,-50%);
  border: 1px #bbb7b7 solid;
  border-radius: 3px;
  box-shadow: #969595 0.5px 0.5px 0.5px 0.5px;
  background-color: white;
  z-index: 10;
}
.main .right .column .rename input{
  padding-left:2px;
  width: 100%;
  height: 23px;
  border: 0.5px solid ;
}

.main .right .column .rename input:focus{
  outline: none;
}

.main .right .column .rename p:nth-child(1){
  position: relative;
  top: 9px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}


.main .right .column .rename p:nth-child(3){
  position: relative;
  bottom: 4px;
  display: flex;
  justify-content: flex-end;
}

.main .right .column .rename p:nth-child(3) span{
  margin:0 5px;
  padding:5px 10px;
}

.main .right .column .rename p:nth-child(3) span:nth-child(1){
  background-color: #efefef;
}

.main .right .column .rename p:nth-child(3) span:nth-child(2){
  background-color: #04a6c8;
}

    

@media (max-width: 1670px) {
  .main .left {
    width: 392px;
  }
}

@media (max-width: 1060px) {
  .main .right .column {
    padding-left: 20px;
  }
  .main .right .right_nav .search input {
    width: 100%;
  }
  .main .left {
    width: 392px;
  }
}
/*# sourceMappingURL=index.css.map */
</style>
@endsection

@section('wrapper-head')
<div class="wrapper-contentTitle"> 檔案管理</div>
<!-- 預設樣式 -->
@endsection

@section('wrapper-main')
<!-- html -->
<div class="main">
        <!-- <ul class="contextMenu">
          <li class="renameBtn"><span>重新命名</span></li>
          <li><span>刪除</span></li>
        </ul> -->
        <div class="tip active">
            <div class="loading active">
                <div class="top">
                    <p>正在上傳<span class="file_length">1</span>個項目</p>
                    <p class="tip_close"><ion-icon name="close-outline"></ion-icon></p>
                </div>
                <div class="bottom">
                    <p><img src="{{ asset('img/fileIcon/file.svg') }}" alt="icon"><span class="file_length">1</span>個檔案</p>
                    <p></p>
                </div>
            </div>
            <div class="finish active">
                <div class="top">
                    <p>成功上傳項目</p>
                    <p class="tip_close"><ion-icon name="close-outline"></ion-icon></p>
                </div>
                <div class="bottom">
                    <p><img src="{{ asset('img/fileIcon/file.svg') }}" alt=""><span class="file_length">1</span>個檔案</p>
                    <p><ion-icon name="checkmark-outline"></ion-icon></p>
                </div> 
            </div>
        </div>
        <div class="left">
            <div class="left_nav">
            <div  class="addBtn">
                    <ion-icon name="add-outline"></ion-icon>新增
                    <ul class="addChooseList active">
                        <li>
                            <img src="{{ asset('img/fileIcon/fileIcon.svg') }}" alt="資料夾圖標"> 新增資料夾
                            <div class="addFile active">
                                <p>新增資料夾  <i class="close"><ion-icon name="close-outline"></ion-icon></i></p>
                                <input type="text" placeholder="請輸入資料夾名稱">
                                <p>
                                    <span onclick="add_file_cancel()">取消</span>
                                    <span id="fileBtnId">建立</span>
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/fileIcon/document.svg') }}" alt="檔案圖標"> 新增檔案
                            <div class="addDocument active">
                                <p>新增檔案 <i class="close"><ion-icon name="close-outline"></ion-icon></i></p>
                                <input type="text" placeholder="請輸入檔案名稱">
                                <p>
                                    <span onclick="add_document_cancel()">取消</span>
                                    <span id="documentBtnId">建立</span>
                                </p>
                                <input type="file" id="addFile" accept=".jpg, .jpeg, .png, .gif, .pdf, .txt, .zip, .rar, .docx, .xls, .mp4, .avi, .mov">
                                <!-- multiple="true" -->
                            </div>
                        </li>
                    </ul>
                </div>
                <div onclick="del()"><ion-icon name="trash"></ion-icon>刪除</div>
                <div onclick="download_get_id()"><ion-icon name="cloud-download"></ion-icon>下載</div>
            </div>
            <div id="tree"></div>
        </div>
        <div class="right" id="rightId">
            <div class="right_nav">
                <div class="search">
                    <input type="text" placeholder="搜尋全目錄/文件" id="searchValueId">
                    <div class="btn" id="searchBtn">
                        <ion-icon name="search-outline"></ion-icon>
                    </div>
                </div>
               <div class="icons">
                   <div class="img_menuIcon" id="close_all_id">
                    <ion-icon name="grid"></ion-icon>
                   </div>
                   <div class="list_menuIcon" id="open_all_id">
                    <div></div>
                    <div></div>
                    <div></div>
                   </div>
               </div>
            </div>
            <div class="column">
                <!-- <div class="rename active" data-rename='0'>
                  <p data-rename='0'>重新命名 <i class="close" data-rename='0'><ion-icon name="close-outline"></ion-icon></i></p>
                  <input type="text" id="rename_newName_Id" data-rename='0'>
                  <p data-rename='0'>
                    <span id="rename_cxl_btn" data-rename='0'>取消</span>
                    <span id="rename_add_btn" data-rename='0'>確定</span>
                  </p>
                </div> -->
                <div class="addIcon">
                  <div class="bg"></div>
                  <p>
                    欲上傳，請將檔案拖曳至此!
                    <br>
                    限定格式: jpg .jpeg .png .gif .pdf .txt .zip .rar .docx .xls .mp4 .avi .mov 
                  </p>
                </div>
                <h2 id="h2Id">檔案夾</h2>
                <ul class="list">
                    <li>
                        <div class="top">
                            <img src="{{ asset('img/fileIcon/file.svg') }}" alt="icon">
                            <!-- 定位使用絕對領域 asset定在public -->
                        </div>
                        <div class="bottom">
                            <div class="title">
                                loading...
                            </div>
                            <p>
                                <span>loading... </span>
                            </p>
                        </div>
                    </li>
                    <!-- {{ asset('./img/fileIcon/fileOpen.svg') }} 檔案位置-->
                    <li>
                        <div class="top">
                            <img src="{{ asset('./img/fileIcon/fileOpen.svg') }}" alt="icon">
                        </div>
                        <div class="bottom">
                            <div class="title">
                                loading...
                            </div>
                            <p>
                                <span>loading... </span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="top">
                            <img src="{{ asset('./img/fileIcon/JPG.svg') }}" alt="icon">
                        </div>
                        <div class="bottom">
                            <div class="title">
                                loading...
                            </div>
                            <p>
                                <span>loading... </span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="top">
                            <img src="{{ asset('./img/fileIcon/RAR.svg') }}" alt="icon">
                        </div>
                        <div class="bottom">
                            <div class="title">
                                loading...
                            </div>
                            <p>
                                <span>loading... </span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="top">
                            <img src="{{ asset('./img/fileIcon/WORD.svg') }}" alt="icon">
                        </div>
                        <div class="bottom">
                            <div class="title">
                                loading...loading...
                            </div>
                            <p>
                                <span>loading...loading...</span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="top">
                            <img src="{{ asset('./img/fileIcon/AVI.svg') }}" alt="icon">
                        </div>
                        <div class="bottom">
                            <div class="title">
                                loading...
                            </div>
                            <p>
                                <span>loading... </span>
                            </p>
                        </div>
                    </li>
                </ul>
                <h2 id="doc_h2Id">檔案</h2>
                <ul class="document_List" id = "documentList">
                    <li>
                        <div class="top">
                            <img src="{{ asset('./img/fileIcon/AVI.svg') }}" alt="icon">
                        </div>
                        <div class="bottom">
                            <div class="title">
                                loading...
                            </div>
                            <p>
                                <span>loading... </span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="top">
                            <img src="{{ asset('./img/fileIcon/word.svg') }}" alt="icon">
                        </div>
                        <div class="bottom">
                            <div class="title">
                                loading...
                            </div>
                            <p>
                                <span>loading... </span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="top">
                            <img src="{{ asset('./img/fileIcon/JPG.svg') }}" alt="icon">
                        </div>
                        <div class="bottom">
                            <div class="title">
                                loading...
                            </div>
                            <p>
                                <span>loading... </span>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection


<!-- 待完成:

  *傳送資料為新增、修改、刪除
  //資料格式
  //{
  //  id:,
  //  parentId:父層id,
  //  name:名稱,
  //  type:檔案或資料夾,
  //  extention:副檔名,
  //  url:檔案網址
  //}
  //移動move 給新父id、移動id
  //命名給id、name
  //傳送使用axios
  //先傳檔案，取得回傳url將url置入資料格式中再上傳一次資料庫
  //使用jstree新增、修改、刪除等事件時觸發event取得此次修改資訊

  *單選檔案差提示窗

  緩急順序由上至下，排名越高越優先。

    *下載功能 (待debug 只會下載一次)
    //跟後端溝通，當前端將檔案及列表陣列傳送至後端後，請後端將檔案加入data內，以此來使用版本更新等。

    *jstree 設定預設不開啟 (已完成，待AJAX)
    //離開時關閉可以生效，但開啟時又會自動打開
    //當將所有json格式存入local時也會儲存當下tree的開啟情況(於li_attr內有個state記錄著節點的狀況，所以在上傳使用時要注意這點)

    *檔案的版本控制/同text的情況下是覆蓋及新增新版本(暫時不加入)
    //右鍵節點的話可以跳出版本下載的選項
    //將上傳的檔案塞入data中

    *右欄多點選取得id，並以id對接後端取得載點連接。(完成 待AJAX)
    //因為innerHTML後的標籤無法觸發事件，故得寫判斷式，並用物件屬性的方式塞入class
    //2021-10-21 已測試 是可以偵測active的，故可以執行。
    
    *上傳中關閉網頁提示，預計是判斷是否再上傳，若在上傳時離開觸發提示(待AJAX)

    *列表轉換選單及功能(已完成功能，轉換的部分先擱置)
    //這邊的思路是，當雙擊點開資料夾以後，取得data資料將data資料顯示在介面上
    

    *拖曳方式新增檔案及上傳(已完成，待AJAX及AJAX後的event) //需血一層for.if判斷檔名再繼續。
    //ok思路是這樣的，原生file支援拖曳，不必靠點擊。接著可以使用onchange，在input改變的時候觸發事件。
    在這個事件中，會將檔案給傳送出去以外，同時也要在jstree中新增id及資料，並更新節點。
    為了讓使用者感受提升，當檔案上傳後擷取檔案資訊，並使用彈窗等的div跳出提示，讓使用者知道自己已經上傳。
    預計這兩天會先新增檔案樣本，之後再套入原本的樣式中。
    //2021-10-14 檔案樣本已經完成，差設計樣板的套入，待設計稿。
    //2021-10-15 設計版已套入，差新增時同步匯入jstree 
    //2021-10-15 拖曳方式無法偵測到資料夾及rar的type，需要想辦法解決。
    以及jstree無法同時接收多個檔案，呈現在資料內。可能的解決辦法有，先新增物件，打入資料庫後再呈現。
    //2021-10-18 jstree跑for無法新增多個檔案是因為....
    目前這個解決方案較好，因為需要搭配AJAX
    另外jstree更新是檔案上傳到資料庫時再更新，還是先更新也是一個問題，目前覺得前者更好，剛好可以同時跳出提示視窗，
    //另外完成彈窗的部分，預計會在資料上傳至後端後彈出，若上傳失敗，跳出提示彈窗並將已經輸入的data給刪除。

    *jstree 更動後更新tree(已完成，待AJAX。目前先儲存至local端)
    //在一版，是透過傳送陣列過去後端後，後端回傳後再套入tree
    新版目前預想的功能是，在新版進行一系列的操作後，再將整個data傳送過去資料庫
    目前遇到的難點是無法取得新建等一系列操作的data暫存檔
    //2021-10-13已找到獲取暫存檔方式，透過get_json，之後目標便嘗試將JSON輸出到localstorage。
    //同時簡單的整理了操作說明

    ---完成---

    *jstree檔名過長時改成...(已完成)
    //改為使用卷軸

    *檔案夾的子資料數量(已完成)
    //偵測parent數量

    *右欄右鍵選單，進行刪除、剪下、貼上、命名(已完成 待AJAX)
    //偵測data-num並以此取得節點操作
    //刪除好處理 命名則跳出個命名框 onchnge後取值改名
    //但剪下貼上就比較麻煩一些，首先點選進入資料夾時，column要新增個data-num，這個data-num會是資料夾的id
    //剪下的話就是取得右欄選取的檔案，貼上的話跳轉至欲貼上的資料夾，然後使用data-num取得id，使用move_node來移動。

    *左欄tree點選檔案類型跳到父節點(已完成) 
    //思路是這樣，當節點被選擇以後偵測type，type不是file的話，執行事件
    //思路是這樣的：click點節點觸發點其父節點,dblclick的話開啟網址，連結後端後在data內會有資料，就連data，但目前沒有，就先用假資料塞入data
    //修改功能，無法雙擊下載，而是透過右邊點選後下載，之後右邊多出個右鍵點擊出現選單


    *重新寫一個參數代入file的function，將資料重整過後打回去。(已完成)

     *判斷式重寫，以name後面的副檔名去判斷。(已完成)
    //分割後，檔案可以丟到data內，
     let b = 'javsa.eqwdsadwa.jpg';
        let c = b.split('.');
        let num = c.length;
        c = c[c.length -1 ];
        console.log("."+c)
    以這個方式去讀寫分割name,一邊去當副檔名判斷，另一邊輸入於jstree的名稱
    //樣板已完成，待加入檔案內
    //判斷式已加入拖曳檔案內，點選input待加入，但判斷類型的if似乎出現bug，待bebuff

    *在左欄新增檔案中取消時提示也清空 (已完成)

    *搜尋功能(已完成)
    //待列表功能完成才能搜尋，大概率是透過data去尋找後，把尋找出來的結果印在畫面上

    *時間上傳功能(已完成)

    *拖曳上傳的時候須跳到拖曳上傳的資料夾方便使用者查閱，以及若在右邊要上傳時，自動幫使用者定位上傳的指定資料夾(已完成)
    //思路是這樣的，jstree有一個select_node的方式可以選擇節點，將click之後的id輸入後，應該就可以了。

    *jstree位置更新(已完成)
    //目前get_json只能存取到新增、刪除，尚無法移動位置，後面需使用到dnd的event及剪下貼上的event


    *新增檔案以拖曳的方式(已完成)

    *jstree 右鍵選單剪下、貼上(已完成)

    *jstree透過switch選擇icon(已完成)
    //再data出去時已經完成賦予type

    *新增檔案及資料夾實際功能
    //思路之一為抓取text的value後，將value值直接套入新建的檔案/資料夾命名中
    2021-10-8 新增子節點的新增檔案再php端無法啟動，待debug及type完善,新增資料夾已完成，差type新增(已完成)


    *新增資料夾 or 上傳檔案選單 版面及點選出現視窗功能(已完成)

    *文件區卷軸滾動overflow(已完成)

      //menu選單開關class
        //開
            // 大 sidebar-mini layout-navbar-fixed layout-fixed
            // 中 sidebar-mini layout-navbar-fixed layout-fixed sidebar-open
            // 小 sidebar-mini layout-navbar-fixed layout-fixed sidebar-open
        //關
            // 大 sidebar-mini layout-navbar-fixed layout-fixed sidebar-collapse
            // 中 sidebar-mini layout-navbar-fixed layout-fixed sidebar-closed sidebar-collapse
            // 小 sidebar-mini layout-navbar-fixed layout-fixed sidebar-closed sidebar-collapse
            //到小以後，會直接覆蓋，且不會出現左邊小icon圖案

-->
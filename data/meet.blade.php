
<!-- 樣板 -->
@extends('system.layouts.default')


@section('js')
<!-- 導入的JS -->



<script>
    //JS
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
  padding-left: 10px;
  height: 93%;
  overflow: auto;
  background: #ffffff;
}

.main .left .left_main ul {
  margin: 10px;
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
}

.main .right .right_main .meet_data div select {
  height: 24px;
  font-size: 14px;
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
  width: 100px;
}

.main .right .right_main .meet_data .attached ul li img {
  width: 90%;
}

.main .right .right_main .meet_data .attached ul li p {
  width: 100%;
  font-size: 15px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.ess {
  position: relative;
  bottom: 3px;
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
                    <ul>
                        <li>主選單
                            <ul>
                                <li>
                                    子選單
                                    <ul>
                                        <li>孫選單</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="right_head" style="padding-right: 10px;">
                    <div class="search">
                        <input type="text" style="padding: 7px 10px;">
                        <span class="search_btn anicon search"></span>
                    </div>
                    <div class="btn">
                        <div class="BTN edit_b">
                            <div class="icon anicon edit"></div>編輯
                        </div>
                        <div class="BTN print">
                            <div class="icon anicon printer"></div>列印
                        </div>
                        <div class="BTN del">
                            <div class="icon anicon ashbin"></div>刪除
                        </div>
                        <div class="BTN send">
                            <div class="icon anicon sendMail"></div>寄信
                        </div>
                        <div class="BTN send_record">
                            <div class="icon anicon sendMail"></div>寄件紀錄
                        </div>
                        <div class="BTN store">
                            <div class="icon anicon upload"></div>儲存
                        </div>
                    </div>
                </div>
                <div class="right_main">
                    <div class="meet_data">
                        <div class="addevent">
                            <div class="icon anicon add"></div>創建代辦事項
                        </div>
                        <h1>會議記錄</h1>
                        <div>
                            <span><strong class="ess">⁎</strong> 主旨：</span>
                            <span>今年尾牙吃甚麼?</span>
                            <input type="text">
                        </div>
                        <div>
                            <span><strong class="ess">⁎</strong> 日期：</span>
                            <span>2022/01/21</span>
                            <input type="date">
                        </div>
                        <div>
                            <span><strong class="ess">⁎</strong> 時間：</span>
                            <span>13:00</span>
                            時:
                            <select>
                                <option value="01">01</option>
                            </select>
                            秒:
                            <select>
                                <option value="01">01</option>
                            </select>
                        </div>
                        <div>
                            <span><strong class="ess">⁎</strong>地點：</span>
                            <span>公司會議室</span>
                            <input type="text">
                        </div>
                        <div>
                            <span><strong class="ess">⁎</strong>主席：</span>

                            <span>主任一林富強<strong class="remove">✕</strong></span>
                            <!-- 使用v-for跑編輯 ^ -->
                            <button type="button"><div class="icon anicon add"></div>相關人員</button>
                            <span>
                                <!-- 非編輯這邊使用陣列.join將人員顯現 -->
                            </span>
                        </div>
                        <div>
                            <span><strong class="ess">⁎</strong>紀錄：</span>
                            <span>經理秘書一許雅芳<strong class="remove">✕</strong></span>
                            <!-- 使用v-for跑編輯 ^ -->
                            <button type="button"><div class="icon anicon add"></div>相關人員</button>
                            <span>
                                <!-- 非編輯這邊使用陣列.join將人員顯現 -->
                            </span>
                        </div>
                        <div>
                            <span><strong class="ess">⁎</strong>與會人員：</span>
                            <span>工程師一康民治<strong class="remove">✕</strong></span>
                            <!-- 使用v-for跑編輯 ^ -->
                            <button type="button"><div class="icon anicon add"></div>相關人員</button>
                            <span>
                                <!-- 非編輯這邊使用陣列.join將人員顯現 -->
                            </span>
                        </div>
                        <div>
                            <span><strong class="ess" style="visibility: hidden;">⁎</strong>應出席人員：</span>
                            <span></span>
                            <!-- 編輯模式消失 從勾選的出席人員判斷 -->
                        </div>
                        <div>
                            <span><strong class="ess" style="visibility: hidden;">⁎</strong>已出席人員：</span>
                            <span></span>
                            <!-- 編輯模式消失 -->
                        </div>
                        <div>
                            <span><strong class="ess" style="visibility: hidden;">⁎</strong>未出席人員：</span>
                            <span></span>
                            <!-- 編輯模式消失 -->
                        </div>
                        <div>
                            <span><strong class="ess">⁎</strong>會議內容：</span>
                            <button type="button" class="discussion"><div class="icon anicon add"></div>新增會議資訊</button>
                        </div>
                        <ul class="list">
                            <li>
                               <div>
                                    <strong>▶</strong>
                                    <span class="title">議題1:</span>
                                    <!-- <p class="para" style="top: 2px;">asdasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p> -->
                                    <textarea rows="1"></textarea>
                               </div>
                               <div>
                                    <strong style="visibility: hidden;">▶</strong>
                                    <span class="title">決議1:</span>
                                    <!-- <p class="para" style="top: 2px;">asdasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p> -->
                                    <textarea rows="1"></textarea>
                                </div>
                            </li>
                            <li>
                                <div>
                                     <strong>▶</strong>
                                     <span class="title">議題1:</span>
                                     <!-- <p class="para" style="top: 2px;">asdasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p> -->
                                     <textarea rows="1"></textarea>
                                </div>
                                <div>
                                     <strong style="visibility: hidden;">▶</strong>
                                     <span class="title">決議1:</span>
                                     <!-- <p class="para" style="top: 2px;">asdasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p> -->
                                     <textarea rows="1"></textarea>
                                 </div>
                             </li>
                        </ul>
                        <div class="attached">
                            <p>其他附件：<strong>新增附件</strong></p>
                            <ul>
                                <li>
                                    <img src="http://v2.com/img/fileIcon/PDF.svg" alt="icon" title="与玥樓福氣豪華年菜一菜單">
                                    <p title="与玥樓福氣豪華年菜一菜單">与玥樓福氣豪華年菜一菜單</p>
                                </li>
                                <li>
                                    <img src="http://v2.com/img/fileIcon/PDF.svg" alt="icon" title="与玥樓福氣豪華年菜一菜單">
                                    <p title="与玥樓福氣豪華年菜一菜單">与玥樓福氣豪華年菜一菜單</p>
                                </li>
                                <li>
                                    <img src="http://v2.com/img/fileIcon/PDF.svg" alt="icon" title="与玥樓福氣豪華年菜一菜單">
                                    <p title="与玥樓福氣豪華年菜一菜單">与玥樓福氣豪華年菜一菜單</p>
                                </li>
                                <li>
                                    <img src="http://v2.com/img/fileIcon/PDF.svg" alt="icon" title="与玥樓福氣豪華年菜一菜單">
                                    <p title="与玥樓福氣豪華年菜一菜單">与玥樓福氣豪華年菜一菜單</p>
                                </li>
                                <li>
                                    <img src="http://v2.com/img/fileIcon/PDF.svg" alt="icon" title="与玥樓福氣豪華年菜一菜單">
                                    <p title="与玥樓福氣豪華年菜一菜單">与玥樓福氣豪華年菜一菜單</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
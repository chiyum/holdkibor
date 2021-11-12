
<!-- 樣板 -->
@extends('system.layouts.default')
<!-- 導入預設的HTML的框架 -->

@section('js')
<!-- 個別的JS 可在此導入以及碼程式碼 -->
<!-- 型態:<script src="{{ asset('js/檔名.js?每次更新後的日期or亂數') }}"></script> -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    //JS 導入區
    
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
  width: 99%;
  height: 86.9vh;
  margin: 0 10px;
  margin-bottom: -9px;
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
  width: 20vw;
  max-width: 546px;
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
}

.main .head .head_right li:nth-child(3) {
  margin-left: 5px;
  position: relative;
}

.main .head .head_right li:nth-child(3) input {
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
}

.main .list {
  overflow-y: hidden;
  height: 80.5vh;
}

.main .list table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0px;
}

.main .list table tr:nth-child(odd) {
  background-color: #cdcdcd;
}

.main .list table td {
  padding-top: 5px;
  padding-bottom: 5px;
}

.main .list table td input {
  height: 100%;
  width: 100%;
}

.main .list table .title {
  text-align: center;
  font-weight: bold;
  font-size: 1.2em;
}

.main .list table .title td:nth-child(1) {
  width: 47.6%;
  background: #999999;
}

.main .list table .title td:nth-child(2) {
  background: #f25c24;
}

.main .list table .title td:nth-child(3) {
  background: #07a3c5;
}

.main .list table .title_bottom {
  text-align: center;
}

.main .list table .title_bottom td {
  width: 5.82%;
  background: #999999;
}

.main .list table tbody:nth-child(2) {
  overflow: auto;
}

.icon_blue {
  color: #0068a0;
}

.table_list1 {
  padding-left: 10px;
}

.table_list2 {
  padding-left: 20px;
}

.table_list3 {
  padding-left: 30px;
}

.table_list4 {
  padding-left: 40px;
}

.table_list5 {
  padding-left: 50px;
}

.table_list6 {
  padding-left: 60px;
}

.table_content {
  text-align: center;
}

.table_none {
  padding: 0;
  height: 29px;
}

.icon_hide {
  visibility: hidden;
}

.hide {
  display: none;
}
/*# sourceMappingURL=tender.css.map */
</style>
@endsection



@section('wrapper-head')
<!-- //導入layouts內的head，包含有導入的JS、CSS等 -->
<div class="wrapper-contentTitle"> 專案即時資訊</div>
<!-- title名稱輸入區 -->
@endsection



@section('wrapper-main')
<!-- html標籤輸入區 -->
<div class="main">
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
                <li><ion-icon name="create"></ion-icon>編輯</li>
                <li><ion-icon name="cloud-upload"></ion-icon>儲存</li>
                <li><ion-icon class="search_icon" name="search"></ion-icon><input type="text" class="search"></li>
            </ul>
        </div>
        <div class="list">
            <table>
              <tbody>
                <tr class="title">
                    <td rowspan="2">項次_項目名稱</td>
                    <td colspan="4">契約預估</td>
                    <td colspan="5">成本規劃</td>
                </tr>
                <tr class="title_bottom">
                    <td style="--i:1">單位</td>
                    <td style="--i:2">單價</td>
                    <td style="--i:3">數量</td>
                    <td style="--i:4">複價</td>
                    <td style="--i:5">利潤(%)</td>
                    <td style="--i:6">物料(%)</td>
                    <td style="--i:7">人力(%)</td>
                    <td style="--i:8">管理(%)</td>
                    <td style="--i:9">設備(%)</td>
                </tr>
              </tbody>
                <tr class="list_main">
                    <td colspan="10" class="table_list1">
                        <ion-icon name="caret-down-outline" class="icon_blue"></ion-icon>
                        電氣工程
                        <tr>
                            <td class="table_list2" colspan="10">
                                <ion-icon name="caret-down-outline" class="icon_blue"></ion-icon>
                                A_低壓配電盤設備工程
                                <tr>
                                    <td class="table_list3" colspan="10">
                                        <ion-icon name="caret-down-outline" class="icon_blue"></ion-icon>
                                        (一)_P1.P1-1台電受電箱
                                        <tr>
                                            <td class="table_list4">
                                                <ion-icon name="caret-down-outline" class="icon_hide"></ion-icon>
                                                1_CASE 600W*2000H*600D SPHC 2.0屋內粉體塗裝
                                            </td>
                                            <td class="table_content">座</td>
                                            <td class="table_content">$1727</td>
                                            <td class="table_content">2</td>
                                            <td class="table_content">3454</td>
                                            <td><input type="text" class="hide"></td>
                                            <td><input type="text" class="hide"></td>
                                            <td><input type="text" class="hide"></td>
                                            <td><input type="text" class="hide"></td>
                                            <td><input type="text" class="hide"></td>
                                        </tr>
                                        <tr>
                                            <td class="table_list4">
                                                <ion-icon name="caret-down-outline" class="icon_hide"></ion-icon>
                                                NBF 3P 400AF 400AT 380V 30KA
                                            </td>
                                            <td class="table_content">只</td>
                                            <td class="table_content">$121</td>
                                            <td class="table_content">11590</td>
                                            <td class="table_content">1402390</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table_list4">
                                                <ion-icon name="caret-down-outline" class="icon_hide"></ion-icon>
                                                NBF 3P 400AF 400AT 380V 30KA
                                            </td>
                                            <td class="table_content">只</td>
                                            <td class="table_content">$181</td>
                                            <td class="table_content">8721</td>
                                            <td class="table_content">1578501</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table_list4">
                                                <ion-icon name="caret-down-outline" class="icon_hide"></ion-icon>
                                                NBF 3P 400AF 400AT 380V 30KA
                                            </td>
                                            <td class="table_content">只</td>
                                            <td class="table_content">$421</td>
                                            <td class="table_content">2869</td>
                                            <td class="table_content">1207849</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </td>
                                </tr>
                            </td>
                        </tr>
                    </td>
                    <td colspan="10" class="table_list1">
                        <ion-icon name="caret-down-outline" class="icon_blue"></ion-icon>
                        電氣工程
                        <tr>
                            <td class="table_list2" colspan="10">
                                <ion-icon name="caret-down-outline" class="icon_blue"></ion-icon>
                                A_低壓配電盤設備工程
                                <tr>
                                    <td class="table_list3" colspan="10">
                                        <ion-icon name="caret-down-outline" class="icon_blue"></ion-icon>
                                        (一)_P1.P1-1台電受電箱
                                        <tr>
                                            <td class="table_list4">
                                                <ion-icon name="caret-down-outline" class="icon_hide"></ion-icon>
                                                1_CASE 600W*2000H*600D SPHC 2.0屋內粉體塗裝
                                            </td>
                                            <td class="table_content">座</td>
                                            <td class="table_content">$1727</td>
                                            <td class="table_content">2</td>
                                            <td class="table_content">3454</td>
                                            <td><input type="text" class="hide"></td>
                                            <td><input type="text" class="hide"></td>
                                            <td><input type="text" class="hide"></td>
                                            <td><input type="text" class="hide"></td>
                                            <td><input type="text" class="hide"></td>
                                        </tr>
                                        <tr>
                                            <td class="table_list4">
                                                <ion-icon name="caret-down-outline" class="icon_hide"></ion-icon>
                                                NBF 3P 400AF 400AT 380V 30KA
                                            </td>
                                            <td class="table_content">只</td>
                                            <td class="table_content">$121</td>
                                            <td class="table_content">11590</td>
                                            <td class="table_content">1402390</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table_list4">
                                                <ion-icon name="caret-down-outline" class="icon_hide"></ion-icon>
                                                NBF 3P 400AF 400AT 380V 30KA
                                            </td>
                                            <td class="table_content">只</td>
                                            <td class="table_content">$181</td>
                                            <td class="table_content">8721</td>
                                            <td class="table_content">1578501</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table_list4">
                                                <ion-icon name="caret-down-outline" class="icon_hide"></ion-icon>
                                                NBF 3P 400AF 400AT 380V 30KA
                                            </td>
                                            <td class="table_content">只</td>
                                            <td class="table_content">$421</td>
                                            <td class="table_content">2869</td>
                                            <td class="table_content">1207849</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </td>
                                </tr>
                            </td>
                        </tr>
                    </td>
                </tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                <tr class="table_none"><td colspan="10"></td></tr>
                
            </table>
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
    rwd
    這版若是說要使用rwd的話，只能縮左邊的大小，然後超出範圍的字使用...取代。
 -->

<!-- 
    操作功能跟跟rwd先做出來，資料怎麼取，怎麼輸出排後位。
    僅讓list向下卷軸滾動
    整個table則是左右
 -->
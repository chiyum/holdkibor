
        const app = Vue.createApp({

            components:{
                
            }
             
        })
        
        app.component('treelist',{
            data(){
                return{
                    treedata:tree,//導入外部tree結構
                }
            },
                    //此元件為根目錄
            template:`<ul>
                        <item :treedata="treedata"></item>
                      </ul>`
                      //這邊使用props將tree結構導入到item
                      //component的用法是掛載元件以後，在HTML建立元件標籤將tmeplate的標籤及資料渲染到畫面上。
                      //template就等於元件標籤的內容。
                      //所以這個元件的用途是將treedata的資料給導入到item中
                      //這邊的目的是建立一個根目錄。
        })

        app.component('item',{
            template:`
            <li @click.stop="toggle">
                {{treedata.text}}
                <ul v-if="treedata.nodes && treedata.nodes.length > 0"  v-show="treedata.isOpen">
                    <item v-for="(node, index) in treedata.nodes" :treedata="node" :key="index"></item>
                </ul>
            </li>
            `,
            //item的用途則是產生子目錄，原理是這樣的:
            //首先treedata.text好理解，導入資料後自然抓地到物件的資料。
            //ul內的v-if判斷是 若有nodes這個key，並且nodeskey大於0的話就顯示，如果沒有就不顯示
            //item的部分因為item本身就是一個li，所以外層並不需要再包一層li
            //v-for的部分是如何做到無限子層的呢?
            //首先我們要先理解根目錄用item的時候就已經產生一個li的子目錄，而子目錄內有個產生孫目錄的li
            //而在這個li內也有一個產生曾孫目錄的li依此類推，所以可以有無限子層。
            //那資料是怎麼傳遞的呢?
            //呈上範例先從子層說起，子層接收到父層這個好理解，那孫層是怎麼接收到子層的資料的呢?
            //接收資料從頭到尾只有子層，而子層使用for的時候，這個孫層的item(li)已經是孫層那一格資料了。
            //所以孫層會去判斷ul的v-if是否有子層來產生下一層。若有子層item就會再延續，而v-for跑出來的item就會是孫層的那一層資料了，依此類推。
            //至於v-show則是顯示與否。
            props:['treedata'],//prors導入的資料。接收從treelist層所導入到標籤的資料
            methods: {
              toggle(){
                if(this.treedata.nodes && this.treedata.nodes.length > 0){//邏輯是當如果有nodes並且nodes大於0的話，決定開關
                  this.treedata.isOpen = !this.treedata.isOpen;//父層收合
                  this.treedata.nodes.forEach( data => {//當父層收何時子層亦收合
                      data.isOpen = false;
                  });
                }
              },
            }
        })

        app.mount('#Vtree')
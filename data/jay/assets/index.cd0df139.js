var e;import{u as t,c as o,i as s,d as a,p as n,o as l,r as i,a as c,w as r,b as u,e as d,f as p,g as v,h as m,j as f,k as h,n as _,F as g,l as b,m as y,t as w,q as x,s as k,v as S,x as T,y as E,z as M,A as L,B as j,C as P,D as O,E as C,S as A,G as I,H as N,P as B,I as z,J as D,K as H,L as $,M as q,N as F,O as R,Q as V,R as Y,T as K}from"./vendor.64e2434d.js";!function(){const e=document.createElement("link").relList;if(!(e&&e.supports&&e.supports("modulepreload"))){for(const e of document.querySelectorAll('link[rel="modulepreload"]'))t(e);new MutationObserver((e=>{for(const o of e)if("childList"===o.type)for(const e of o.addedNodes)"LINK"===e.tagName&&"modulepreload"===e.rel&&t(e)})).observe(document,{childList:!0,subtree:!0})}function t(e){if(e.ep)return;e.ep=!0;const t=function(e){const t={};return e.integrity&&(t.integrity=e.integrity),e.referrerpolicy&&(t.referrerPolicy=e.referrerpolicy),"use-credentials"===e.crossorigin?t.credentials="include":"anonymous"===e.crossorigin?t.credentials="omit":t.credentials="same-origin",t}(e);fetch(e.href,t)}}();var X=(e,t)=>{const o=e.__vccOpts||e;for(const[s,a]of t)o[s]=a;return o};var U=X({setup(){const e=t(),i=o((()=>{if(s(e.state.route.path))return null;return a("layout-error")(n(["meta","layout"],e.state.route))}));return l((()=>{})),{layout:i}}},[["render",function(e,t,o,s,a,n){const l=i("router-view");return d(),c(u(s.layout),null,{default:r((()=>[p(l,null,{default:r((({Component:e})=>[(d(),c(u(e)))])),_:1})])),_:1})}],["__scopeId","data-v-afc09dba"]]);const W={setup(){const e=v(),t=m({nav:[{text:"關於我們",path:"/about",height:0,isActive:!1,drops:[{text:"公司理念",path:"/about"}]},{text:"門市資訊",path:"/store",height:0,isActive:!1,drops:[{text:"北部門市",path:"/store"},{text:"中部門市",path:"/store"}]},{text:"線上購物",path:"/shoping",height:0,isActive:!1,drops:[{text:"寵物用品",path:"/shoping"},{text:"水族用品",path:"/shoping"}]},{text:"最新消息",path:"/news"}],promote:[{text:"YouTube",icon:"you",link:"https://www.youtube.com/channel/UCeFI4lgYrSJZ3hCEiLmN-7w/featured?view_as=subscriber"},{text:"LINE",icon:"lin",link:"https://line.me/R/ti/p/%40jfz8787k"},{text:"FaceBook",icon:"fb",link:"https://www.facebook.com/petsmall.com.tw/"},{text:"instagram",icon:"ig",link:"https://www.instagram.com/petsmall_fish"}],footerNav:[{text:"門市資訊",icon:"store",path:"/store"},{text:"客服信箱",icon:"service",link:"https://www.joo.com.tw/petsmall/index.php?action=contact"}],mobileShowMenu:!1});return{shop:t,hover:e=>{(null==e?void 0:e.drops)&&(0===e.height?e.height=40*e.drops.length:e.height=0)},goTop:()=>{document.querySelector(".layout__head").scrollIntoView({block:"start",behavior:"smooth",inline:"center"})},active:o=>{(null==o?void 0:o.drops)||(e.push(o.path),t.mobileShowMenu=!1),t.nav.forEach((e=>{o.text===e.text?e.isActive=!o.isActive:e.isActive=!1}))},toPath:o=>{o.path?(e.push(o.path),t.mobileShowMenu=!1):o.link&&(window.location.href=o.link)}}}},J={class:"layout__head"},G=[h("span",{class:"top__bun"},null,-1),h("span",{class:"stuffing"},null,-1),h("span",{class:"bottom__bun"},null,-1)],Q={class:"head__logo"},Z={class:"head__nav"},ee=["onMouseover","onMouseout","onClick"],te=["onClick"],oe={class:"mobile__nav__list"},se=h("div",{class:"title"},"MENU",-1),ae={class:"item"},ne=["onClick"],le={key:0,class:"drop"},ie=["onClick"],ce={class:"slot"},re={class:"layout__footer"},ue={class:"footer__line"},de={class:"footer__main"},pe={class:"promote"},ve=h("div",{class:"name"},"魚中魚寵物水族",-1),me={class:"text"},fe=["href"],he={class:"link"},_e={class:"title"},ge={key:0,class:"list"},be={class:"link__contact"},ye={class:"text"};var we=X(W,[["render",function(e,t,o,s,a,n){const l=i("router-link");return d(),f(g,null,[h("div",J,[h("div",{class:_(["head__nav__mobile",{active:s.shop.mobileShowMenu}]),onClick:t[0]||(t[0]=e=>s.shop.mobileShowMenu=!s.shop.mobileShowMenu)},G,2),h("div",Q,[p(l,{to:"/home"})]),h("ul",Z,[(d(!0),f(g,null,b(s.shop.nav,(e=>(d(),f("li",{key:e.text,onMouseover:t=>s.hover(e),onMouseout:t=>s.hover(e),onClick:t=>s.toPath(e)},[h("div",null,w(e.text),1),(null==e?void 0:e.drops)?(d(),f("div",{key:0,class:"drop",style:x({height:e.height+"px"})},[(d(!0),f(g,null,b(e.drops,(e=>(d(),f("a",{onClick:k((t=>s.toPath(e)),["prevent"]),key:e.text},w(e.text),9,te)))),128))],4)):S("",!0)],40,ee)))),128))]),h("div",{class:_(["mobile__nav",{active:s.shop.mobileShowMenu}])},[h("div",oe,[se,h("ul",null,[(d(!0),f(g,null,b(s.shop.nav,(e=>(d(),f("li",{key:e.text,class:_({active:e.isActive})},[h("div",ae,[h("span",null,w(e.text),1),h("span",{class:_(["icon",{active:e.isActive}]),onClick:t=>s.active(e)},null,10,ne)]),(null==e?void 0:e.drops)&&e.isActive?(d(),f("div",le,[(d(!0),f(g,null,b(e.drops,(e=>(d(),f("a",{key:e.text,onClick:k((t=>s.toPath(e)),["prevent"])},w(e.text),9,ie)))),128))])):S("",!0)],2)))),128))])]),h("div",{class:"mobile__nav__btn",onClick:t[1]||(t[1]=e=>s.shop.mobileShowMenu=!1)})],2)]),h("div",ce,[y(e.$slots,"default")]),h("div",re,[h("div",ue,[h("div",{class:"footer__line__gotop",onClick:t[2]||(t[2]=(...e)=>s.goTop&&s.goTop(...e))})]),h("div",de,[h("div",pe,[ve,h("ul",null,[(d(!0),f(g,null,b(s.shop.promote,(e=>(d(),f("li",{key:e.text},[h("div",{class:_(["icon",e.icon])},null,2),h("div",me,w(e.text),1),h("a",{href:e.link},null,8,fe)])))),128))])]),h("div",he,[h("ul",null,[(d(!0),f(g,null,b(s.shop.nav,(e=>T((d(),f("li",{key:e.text},[h("div",_e,w(e.text),1),(null==e?void 0:e.drops)?(d(),f("div",ge,[(d(!0),f(g,null,b(e.drops,(e=>(d(),f("a",{key:e.text,onClick:t[3]||(t[3]=k((()=>{}),["prevent"]))},w(e.text),1)))),128))])):S("",!0)])),[[E,null==e?void 0:e.drops]]))),128))]),h("div",be,[(d(!0),f(g,null,b(s.shop.footerNav,(e=>(d(),f("div",{key:e.text},[h("a",{class:_(["icon",e.icon])},null,2),h("a",ye,w(e.text),1)])))),128))])])])])],64)}]]);const xe={"../layouts/layout-default.vue":Object.freeze(Object.defineProperty({__proto__:null,default:we},Symbol.toStringTag,{value:"Module"}))},ke=[];for(let Nt in xe){const e=Nt.replace("../layouts/","").toLowerCase().replace(".vue","");ke.push({componentName:e,component:xe[Nt].default})}const Se={install:e=>{ke.forEach((t=>{e.component(t.componentName,t.component)}))}},Te={},Ee=[];for(let Nt in Te){const e=Nt.replace("../components/","").toLowerCase().replace(".vue","");Ee.push({componentName:e,component:Te[Nt].default})}const Me={install:e=>{Ee.forEach((t=>{e.component(t.componentName,t.component)}))}},Le={"read/recommendIndex"({commit:e},t){e("set/recommendIndex",t)}};const je={"set/helloword"(e,t){e.helloword=t}};const Pe={"../store/app/actions.js":Object.freeze(Object.defineProperty({__proto__:null,default:Le},Symbol.toStringTag,{value:"Module"})),"../store/app/mutations.js":Object.freeze(Object.defineProperty({__proto__:null,default:je},Symbol.toStringTag,{value:"Module"})),"../store/app/state.js":Object.freeze(Object.defineProperty({__proto__:null,default:()=>({helloword:"hello"})},Symbol.toStringTag,{value:"Module"}))};let Oe={};const Ce=(e,t,o)=>{const[s,...a]=e;return a.length?{[s]:{namespaced:!0,modules:Ce(a,t,o)}}:{[s]:{namespaced:!0,[t]:o}}};for(let Nt in Pe){const e=Nt.replace("../store/","").toLowerCase().replace(".js","").split("/");Oe=j(Oe,Ce(L(e),M(e),Pe[Nt].default))}const Ae=P({modules:Oe,state:()=>({})}),Ie={},Ne=function(e,t){return t&&0!==t.length?Promise.all(t.map((e=>{if((e=`./${e}`)in Ie)return;Ie[e]=!0;const t=e.endsWith(".css"),o=t?'[rel="stylesheet"]':"";if(document.querySelector(`link[href="${e}"]${o}`))return;const s=document.createElement("link");return s.rel=t?"stylesheet":"modulepreload",t||(s.as="script",s.crossOrigin=""),s.href=e,document.head.appendChild(s),t?new Promise(((t,o)=>{s.addEventListener("load",t),s.addEventListener("error",(()=>o(new Error(`Unable to preload CSS for ${e}`))))})):void 0}))).then((()=>e())):e()};const Be={setup:()=>({images:["./assets/about_01.c396ea73.jpeg","./assets/about_02.da28f02a.png"]})},ze={class:"news articleModule"},De=(e=>(O("data-v-7b21398c"),e=e(),C(),e))((()=>h("div",{class:"moduleTitle"},[h("div",{class:"text"},"最新消息"),h("div",{class:"line"}),h("div",{class:"text en"},"news")],-1))),He=["src"];var $e=X(Be,[["render",function(e,t,o,s,a,n){return d(),f("div",ze,[De,(d(!0),f(g,null,b(s.images,((e,t)=>(d(),f("div",{class:"img",key:t},[h("img",{src:e},null,8,He)])))),128))])}],["__scopeId","data-v-7b21398c"]]),qe=Object.freeze(Object.defineProperty({__proto__:null,default:$e},Symbol.toStringTag,{value:"Module"})),Fe="./assets/article_01.6345aa82.jpeg",Re="./assets/article_02.609c9332.jpeg",Ve="./assets/article_03.0abc5ee9.jpeg",Ye="./assets/article_04.4ced7d55.png",Ke="./assets/article_05.28183073.jpeg",Xe="./assets/article_06.6a0c3491.png";const Ue=["src"];var We=X({components:{Swiper:A,SwiperSlide:I},setup:()=>({images:["./assets/banner_01.966350e3.jpeg","./assets/banner_02.9ea041f8.png"],modules:[N,B]})},[["render",function(e,t,o,s,a,n){const l=i("Swiper-slide"),u=i("Swiper");return d(),c(u,{slidesPerView:1,spaceBetween:30,loop:!0,pagination:{clickable:!0},navigation:!1,modules:s.modules,class:"mySwiper"},{default:r((()=>[(d(!0),f(g,null,b(s.images,((e,t)=>(d(),c(l,{key:t},{default:r((()=>[h("img",{src:e},null,8,Ue)])),_:2},1024)))),128))])),_:1},8,["modules"])}]]);const Je={class:"article"},Ge={class:"img"},Qe={key:0,class:"tag"},Ze=["src"],et={class:"content"},tt={class:"date"},ot={class:"title"};var st=X({props:{list:Array},setup(){}},[["render",function(e,t,o,s,a,n){return d(),f("div",Je,[(d(!0),f(g,null,b(o.list,(e=>(d(),f("div",{class:"article__item",key:e.title},[h("div",Ge,[(null==e?void 0:e.tag)?(d(),f("div",Qe,w(e.tag),1)):S("",!0),h("img",{src:e.img},null,8,Ze)]),h("div",et,[h("p",tt,w(e.date),1),h("p",ot,w(e.title),1)])])))),128))])}],["__scopeId","data-v-4769bdde"]]);const at={components:{Banner:We,Article:st},setup:()=>({article:[{tag:"Hot",date:"2022.04.29",title:"2022夏日毛孩節",img:Fe},{tag:"Hot",date:"2022.05.15",title:"健康生活飲食開始",img:Re},{tag:"Hot",date:"2022.06.27",title:"寵毛孩一起享美食",img:Ve},{date:"2022.03.11",title:"囤貨季必備好物一起送",img:Ye},{date:"2022.02.28",title:"毛孩外出救星",img:Ke},{tag:"News",date:"2022.05.30",title:"6月會員生日禮",img:Xe}]})},nt={class:"banner"},lt={class:"news articleModule"},it=(e=>(O("data-v-a1b2ab0e"),e=e(),C(),e))((()=>h("div",{class:"moduleTitle"},[h("div",{class:"text"},"最新消息"),h("div",{class:"line"}),h("div",{class:"text en"},"news")],-1))),ct={class:"btn"},rt=z("查看更多");var ut=X(at,[["render",function(e,t,o,s,a,n){const l=i("Banner"),c=i("Article"),u=i("router-link");return d(),f(g,null,[h("div",nt,[p(l)]),h("div",lt,[it,p(c,{list:s.article},null,8,["list"]),h("div",ct,[p(u,{to:"/news"},{default:r((()=>[rt])),_:1})])])],64)}],["__scopeId","data-v-a1b2ab0e"]]),dt=Object.freeze(Object.defineProperty({__proto__:null,default:ut},Symbol.toStringTag,{value:"Module"}));const pt={components:{Article:st},setup:()=>({article:[{tag:"Hot",date:"2022.04.29",title:"2022夏日毛孩節",img:Fe},{tag:"Hot",date:"2022.05.15",title:"健康生活飲食開始",img:Re},{tag:"Hot",date:"2022.06.27",title:"寵毛孩一起享美食",img:Ve},{date:"2022.03.11",title:"囤貨季必備好物一起送",img:Ye},{date:"2022.02.28",title:"毛孩外出救星",img:Ke},{tag:"News",date:"2022.05.30",title:"6月會員生日禮",img:Xe}]})},vt={class:"news articleModule"},mt=h("div",{class:"moduleTitle"},[h("div",{class:"text"},"最新消息"),h("div",{class:"line"}),h("div",{class:"text en"},"news")],-1);var ft=X(pt,[["render",function(e,t,o,s,a,n){const l=i("Article");return d(),f("div",vt,[mt,p(l,{list:s.article},null,8,["list"])])}]]),ht=Object.freeze(Object.defineProperty({__proto__:null,default:ft},Symbol.toStringTag,{value:"Module"}));const _t={props:["num"],setup(){const e=D("$swal");l((()=>{setTimeout((()=>{let t=document.querySelector(".buy__card"),o=document.querySelector("#app"),s={left:o.offsetLeft,right:o.offsetLeft+o.offsetWidth-t.offsetWidth,top:o.offsetTop,bottom:o.offsetTop+o.offsetHeight-t.offsetHeight},a=0,n=0,l=0,i=0;function c(e){l=(new Date).getTime(),window.clickFalg=!1,e.changedTouches?(a=e.changedTouches[0].clientX-t.offsetLeft,n=e.changedTouches[0].clientY-t.offsetTop):(a=e.clientX-t.offsetLeft,n=e.clientY-t.offsetTop),document.addEventListener("mousemove",r),document.addEventListener("mouseup",u),document.addEventListener("touchmove",r,{passive:!1}),document.addEventListener("touchend",u)}function r(e){let o,l;e.preventDefault(),e.changedTouches?(o=e.changedTouches[0].clientX-a,l=e.changedTouches[0].clientY-n):(o=e.clientX-a,l=e.clientY-n),o=Math.max(Math.min(o,s.right),s.left),l=Math.max(Math.min(l,s.bottom),s.top),t.style.left=o+"px",t.style.top=l+"px"}function u(){document.removeEventListener("mousemove",r),document.removeEventListener("mouseup",u),document.removeEventListener("touchmove",r),document.removeEventListener("touchend",u),i=(new Date).getTime(),i-l<200&&(window.clickFalg=!0)}window.clickFalg=!0,t.addEventListener("click",(function(){if(!window.clickFalg)return;e.fire({title:"提示",text:"購物車還沒有內容，先挑一件喜歡的吧！",icon:"warning",confirmButtonText:"前往購物"})})),t.addEventListener("mousedown",c),t.addEventListener("touchstart",c)}),1e3)}))}},gt=[(e=>(O("data-v-2c7baac6"),e=e(),C(),e))((()=>h("div",{class:"product__num"},"0",-1)))];const bt={components:{Buoy:X(_t,[["render",function(e,t,o,s,a,n){return d(),f("div",{class:"buy__card",onClick:t[0]||(t[0]=(...t)=>e.toBuy&&e.toBuy(...t))},gt)}],["__scopeId","data-v-2c7baac6"]])},setup(){}},yt=H('<div class="news articleModule" data-v-c8eb8a0c><div class="moduleTitle" data-v-c8eb8a0c><div class="text" data-v-c8eb8a0c>線上商城</div><div class="line" data-v-c8eb8a0c></div><div class="text en" data-v-c8eb8a0c>online store</div></div><div class="isNot" data-v-c8eb8a0c>非常抱歉。頁面開發中～</div></div>',1);var wt=X(bt,[["render",function(e,t,o,s,a,n){const l=i("Buoy");return d(),f(g,null,[yt,p(l)],64)}],["__scopeId","data-v-c8eb8a0c"]]),xt=Object.freeze(Object.defineProperty({__proto__:null,default:wt},Symbol.toStringTag,{value:"Module"}));const kt={setup(){}},St={class:"news articleModule"},Tt=[H('<div class="moduleTitle" data-v-5955055c><div class="text" data-v-5955055c>門市資訊</div><div class="line" data-v-5955055c></div><div class="text en" data-v-5955055c>store</div></div><div class="isNot" data-v-5955055c>非常抱歉。頁面準備中～</div>',2)];var Et=X(kt,[["render",function(e,t,o,s,a,n){return d(),f("div",St,Tt)}],["__scopeId","data-v-5955055c"]]),Mt=Object.freeze(Object.defineProperty({__proto__:null,default:Et},Symbol.toStringTag,{value:"Module"}));const Lt={"../pages/about.vue":()=>Ne((()=>Promise.resolve().then((function(){return qe}))),void 0),"../pages/home.vue":()=>Ne((()=>Promise.resolve().then((function(){return dt}))),void 0),"../pages/news.vue":()=>Ne((()=>Promise.resolve().then((function(){return ht}))),void 0),"../pages/shoping.vue":()=>Ne((()=>Promise.resolve().then((function(){return xt}))),void 0),"../pages/store.vue":()=>Ne((()=>Promise.resolve().then((function(){return Mt}))),void 0)},jt={"../pages/about.vue":qe,"../pages/home.vue":dt,"../pages/news.vue":ht,"../pages/shoping.vue":xt,"../pages/store.vue":Mt},Pt=[];for(let Nt in Lt){let t=Nt.replace("../pages","").toLowerCase().replace(".vue","");t=t.replace(/\/index$/,""),t=t.replace(/\/_+/g,"/:"),Pt.push({path:t,name:t,meta:{layout:jt[Nt].default.layout||"layout-default",title:null!=(e=jt[Nt].default.title)?e:""},component:Lt[Nt]})}const Ot=q({history:F("./"),routes:(Ct={defaultPath:"/home"},[{path:"/",name:"default-path",redirect:{name:$({defaultPath:"/"},Ct).defaultPath}},...Pt,{path:"/404",name:"not-found",meta:{layout:"layout-error"},component:{template:null}},{path:"/:pathMatch(.*)*",name:"not-match",redirect:{name:"not-found"}}])});var Ct;Ot.beforeEach((async(e,t,o)=>{o()}));const At=R.mixin({reverseButtons:!0,heightAuto:!1,focusConfirm:!1,allowOutsideClick:!1,allowEnterKey:!1,allowEscapeKey:!1,customClass:"swal2-wrap",confirmButtonText:"確定",cancelButtonText:"取消",didOpen(e){const t=e.querySelector(".swal2-cancel");e.querySelector(".swal2-confirm").blur(),t.blur()}});const It=V(U);It.provide("$storage",Y),It.provide("$swal",At),It.use(Se),It.use(Me),It.use(Ae),It.use(Ot),K(Ae,Ot),It.mount("#app");
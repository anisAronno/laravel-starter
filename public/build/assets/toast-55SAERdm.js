import{c as V,a as W,f as b}from"./app-xjzHzSru.js";var q={exports:{}};/*!
 * Toastify js 1.12.0
 * https://github.com/apvarun/toastify-js
 * @license MIT licensed
 *
 * Copyright (C) 2018 Varun A P
 */(function(c){(function(a,e){c.exports?c.exports=e():a.Toastify=e()})(V,function(a){var e=function(t){return new e.lib.init(t)},B="1.12.0";e.defaults={oldestFirst:!0,text:"Toastify is awesome!",node:void 0,duration:3e3,selector:void 0,callback:function(){},destination:void 0,newWindow:!1,close:!1,gravity:"toastify-top",positionLeft:!1,position:"",backgroundColor:"",avatar:"",className:"",stopOnFocus:!0,onClick:function(){},offset:{x:0,y:0},escapeMarkup:!0,ariaLive:"polite",style:{background:""}},e.lib=e.prototype={toastify:B,constructor:e,init:function(t){return t||(t={}),this.options={},this.toastElement=null,this.options.text=t.text||e.defaults.text,this.options.node=t.node||e.defaults.node,this.options.duration=t.duration===0?0:t.duration||e.defaults.duration,this.options.selector=t.selector||e.defaults.selector,this.options.callback=t.callback||e.defaults.callback,this.options.destination=t.destination||e.defaults.destination,this.options.newWindow=t.newWindow||e.defaults.newWindow,this.options.close=t.close||e.defaults.close,this.options.gravity=t.gravity==="bottom"?"toastify-bottom":e.defaults.gravity,this.options.positionLeft=t.positionLeft||e.defaults.positionLeft,this.options.position=t.position||e.defaults.position,this.options.backgroundColor=t.backgroundColor||e.defaults.backgroundColor,this.options.avatar=t.avatar||e.defaults.avatar,this.options.className=t.className||e.defaults.className,this.options.stopOnFocus=t.stopOnFocus===void 0?e.defaults.stopOnFocus:t.stopOnFocus,this.options.onClick=t.onClick||e.defaults.onClick,this.options.offset=t.offset||e.defaults.offset,this.options.escapeMarkup=t.escapeMarkup!==void 0?t.escapeMarkup:e.defaults.escapeMarkup,this.options.ariaLive=t.ariaLive||e.defaults.ariaLive,this.options.style=t.style||e.defaults.style,t.backgroundColor&&(this.options.style.background=t.backgroundColor),this},buildToast:function(){if(!this.options)throw"Toastify is not initialized";var t=document.createElement("div");t.className="toastify on "+this.options.className,this.options.position?t.className+=" toastify-"+this.options.position:this.options.positionLeft===!0?(t.className+=" toastify-left",console.warn("Property `positionLeft` will be depreciated in further versions. Please use `position` instead.")):t.className+=" toastify-right",t.className+=" "+this.options.gravity,this.options.backgroundColor&&console.warn('DEPRECATION NOTICE: "backgroundColor" is being deprecated. Please use the "style.background" property.');for(var s in this.options.style)t.style[s]=this.options.style[s];if(this.options.ariaLive&&t.setAttribute("aria-live",this.options.ariaLive),this.options.node&&this.options.node.nodeType===Node.ELEMENT_NODE)t.appendChild(this.options.node);else if(this.options.escapeMarkup?t.innerText=this.options.text:t.innerHTML=this.options.text,this.options.avatar!==""){var l=document.createElement("img");l.src=this.options.avatar,l.className="toastify-avatar",this.options.position=="left"||this.options.positionLeft===!0?t.appendChild(l):t.insertAdjacentElement("afterbegin",l)}if(this.options.close===!0){var i=document.createElement("button");i.type="button",i.setAttribute("aria-label","Close"),i.className="toast-close",i.innerHTML="&#10006;",i.addEventListener("click",(function(g){g.stopPropagation(),this.removeElement(this.toastElement),window.clearTimeout(this.toastElement.timeOutValue)}).bind(this));var o=window.innerWidth>0?window.innerWidth:screen.width;(this.options.position=="left"||this.options.positionLeft===!0)&&o>360?t.insertAdjacentElement("afterbegin",i):t.appendChild(i)}if(this.options.stopOnFocus&&this.options.duration>0){var r=this;t.addEventListener("mouseover",function(g){window.clearTimeout(t.timeOutValue)}),t.addEventListener("mouseleave",function(){t.timeOutValue=window.setTimeout(function(){r.removeElement(t)},r.options.duration)})}if(typeof this.options.destination<"u"&&t.addEventListener("click",(function(g){g.stopPropagation(),this.options.newWindow===!0?window.open(this.options.destination,"_blank"):window.location=this.options.destination}).bind(this)),typeof this.options.onClick=="function"&&typeof this.options.destination>"u"&&t.addEventListener("click",(function(g){g.stopPropagation(),this.options.onClick()}).bind(this)),typeof this.options.offset=="object"){var d=T("x",this.options),u=T("y",this.options),p=this.options.position=="left"?d:"-"+d,O=this.options.gravity=="toastify-top"?u:"-"+u;t.style.transform="translate("+p+","+O+")"}return t},showToast:function(){this.toastElement=this.buildToast();var t;if(typeof this.options.selector=="string"?t=document.getElementById(this.options.selector):this.options.selector instanceof HTMLElement||typeof ShadowRoot<"u"&&this.options.selector instanceof ShadowRoot?t=this.options.selector:t=document.body,!t)throw"Root element is not defined";var s=e.defaults.oldestFirst?t.firstChild:t.lastChild;return t.insertBefore(this.toastElement,s),e.reposition(),this.options.duration>0&&(this.toastElement.timeOutValue=window.setTimeout((function(){this.removeElement(this.toastElement)}).bind(this),this.options.duration)),this},hideToast:function(){this.toastElement.timeOutValue&&clearTimeout(this.toastElement.timeOutValue),this.removeElement(this.toastElement)},removeElement:function(t){t.className=t.className.replace(" on",""),window.setTimeout((function(){this.options.node&&this.options.node.parentNode&&this.options.node.parentNode.removeChild(this.options.node),t.parentNode&&t.parentNode.removeChild(t),this.options.callback.call(t),e.reposition()}).bind(this),400)}},e.reposition=function(){for(var t={top:15,bottom:15},s={top:15,bottom:15},l={top:15,bottom:15},i=document.getElementsByClassName("toastify"),o,r=0;r<i.length;r++){m(i[r],"toastify-top")===!0?o="toastify-top":o="toastify-bottom";var d=i[r].offsetHeight;o=o.substr(9,o.length-1);var u=15,p=window.innerWidth>0?window.innerWidth:screen.width;p<=360?(i[r].style[o]=l[o]+"px",l[o]+=d+u):m(i[r],"toastify-left")===!0?(i[r].style[o]=t[o]+"px",t[o]+=d+u):(i[r].style[o]=s[o]+"px",s[o]+=d+u)}return this};function T(t,s){return s.offset[t]?isNaN(s.offset[t])?s.offset[t]:s.offset[t]+"px":"0px"}function m(t,s){return!t||typeof s!="string"?!1:!!(t.className&&t.className.trim().split(/\s+/gi).indexOf(s)>-1)}return e.lib.init.prototype=e.lib,e})})(q);var M=q.exports;const f=W(M),n=(()=>{const c=(a,e={})=>f({text:`<div>${a}</div>`,escapeMarkup:!1,...e}).showToast();return c.success=(a,e={})=>f({text:`
        <div class="flex items-center gap-2">
          ${e.icon||b.icons.check.toSvg({width:"16",height:"16"})}
          <div>${a}</div>
        </div>
      `,escapeMarkup:!1,className:"toastify-success",...e}).showToast(),c.danger=(a,e={})=>f({text:`
        <div class="flex items-center gap-2">
          ${e.icon||b.icons.x.toSvg({width:"16",height:"16"})}
          <div>${a}</div>
        </div>
      `,escapeMarkup:!1,className:"toastify-danger",...e}).showToast(),c.warning=(a,e={})=>f({text:`
        <div class="flex items-center gap-2">
          ${e.icon||b.icons["alert-triangle"].toSvg({width:"16",height:"16"})}
          <div>${a}</div>
        </div>
      `,escapeMarkup:!1,className:"toastify-warning",...e}).showToast(),c.info=(a,e={})=>f({text:`
        <div class="flex items-center gap-2">
          ${e.icon||b.icons.info.toSvg({width:"16",height:"16"})}
          <div>${a}</div>
        </div>
      `,escapeMarkup:!1,className:"toastify-info",...e}).showToast(),c})(),h=document.querySelector("#btn-trigger-toast"),y=document.querySelector("#btn-trigger-toast-success"),v=document.querySelector("#btn-trigger-toast-danger"),w=document.querySelector("#btn-trigger-toast-warning"),k=document.querySelector("#btn-trigger-toast-info"),C=document.querySelector("#btn-trigger-toast-tr"),L=document.querySelector("#btn-trigger-toast-tl"),E=document.querySelector("#btn-trigger-toast-tc"),S=document.querySelector("#btn-trigger-toast-br"),I=document.querySelector("#btn-trigger-toast-bl"),N=document.querySelector("#btn-trigger-toast-bc"),H=document.querySelector("#btn-trigger-toast-closeable"),x=document.querySelector("#btn-trigger-custom-toast"),R=`
  <button id="btn-trigger-toast" class="btn btn-primary" type="button">
    Show Toast
  </button>

  <script type="module">
    import toast from "./js/components/toast";
    const btnTriggerToast = document.querySelector('#btn-trigger-toast');

    if(btnTriggerToast) {
      btnTriggerToast.addEventListener('click', () => toast('Hello, I am a Toast'));
    }
  <\/script>
`,j=`
  <button id="btn-trigger-toast-success" class="btn btn-success" type="button">Toast Success</button>
  <button id="btn-trigger-toast-danger" class="btn btn-danger" type="button">Toast Danger</button>
  <button id="btn-trigger-toast-warning" class="btn btn-warning" type="button">Toast Warning</button>
  <button id="btn-trigger-toast-info" class="btn btn-info" type="button">Toast Info</button>

  <script type="module">
    import toast from "./js/components/toast";

    const btnTriggerToastSuccess = document.querySelector('#btn-trigger-toast-success');
    const btnTriggerToastDanger  = document.querySelector('#btn-trigger-toast-danger');
    const btnTriggerToastWarning = document.querySelector('#btn-trigger-toast-warning');
    const btnTriggerToastInfo    = document.querySelector('#btn-trigger-toast-info');

    if(btnTriggerToastSuccess) {
      btnTriggerToastSuccess.addEventListener('click', () => toast.success('Hello, I am a Success Toast'));
    }

    if(btnTriggerToastDanger) {
      btnTriggerToastDanger.addEventListener('click', () => toast.danger('Hello, I am a Danger Toast'));
    }

    if(btnTriggerToastWarning) {
      btnTriggerToastWarning.addEventListener('click', () => toast.warning('Hello, I am a Warning Toast'));
    }

    if(btnTriggerToastInfo) {
      btnTriggerToastInfo.addEventListener('click', () => toast.info('Hello, I am an Info Toast'));
    }
  <\/script>
`,D=`
  <button id="btn-trigger-toast-tr" class="btn btn-primary" type="button">Top Right</button>
  <button id="btn-trigger-toast-tc" class="btn btn-primary" type="button">Top Center</button>
  <button id="btn-trigger-toast-tl" class="btn btn-primary" type="button">Top Left</button>
  <button id="btn-trigger-toast-br" class="btn btn-primary" type="button">Bottom Right</button>
  <button id="btn-trigger-toast-bc" class="btn btn-primary" type="button">Bottom Center</button>
  <button id="btn-trigger-toast-bl" class="btn btn-primary" type="button">Bottom Left</button>

  <script type="module">
    import toast from "./js/components/toast";

    const btnTriggerToastTR = document.querySelector('#btn-trigger-toast-tr');
    const btnTriggerToastTL = document.querySelector('#btn-trigger-toast-tl');
    const btnTriggerToastTC = document.querySelector('#btn-trigger-toast-tc');
    const btnTriggerToastBR = document.querySelector('#btn-trigger-toast-br');
    const btnTriggerToastBL = document.querySelector('#btn-trigger-toast-bl');
    const btnTriggerToastBC = document.querySelector('#btn-trigger-toast-bc');

    if(btnTriggerToastTR) {
      btnTriggerToastTR.addEventListener('click', () => {
        toast('Hello, I am a Toast', {
          gravity: 'top',
          position: 'right'
        })
      });
    }

    if(btnTriggerToastTC) {
      btnTriggerToastTC.addEventListener('click', () => {
        toast('Hello, I am a Toast', {
          gravity: 'top',
          position: 'center'
        })
      });
    }

    if(btnTriggerToastTL) {
      btnTriggerToastTL.addEventListener('click', () => {
        toast('Hello, I am a Toast', {
          gravity: 'top',
          position: 'left'
        })
      });
    }

    if(btnTriggerToastBR) {
      btnTriggerToastBR.addEventListener('click', () => {
        toast('Hello, I am a Toast', {
          gravity: 'bottom',
          position: 'right'
        })
      });
    }
    
    if(btnTriggerToastBC) {
      btnTriggerToastBC.addEventListener('click', () => {
        toast('Hello, I am a Toast', {
          gravity: 'bottom',
          position: 'center'
        })
      });
    }
    
    if(btnTriggerToastBL) {
      btnTriggerToastBL.addEventListener('click', () => {
        toast('Hello, I am a Toast', {
          gravity: 'bottom',
          position: 'left'
        })
      });
    }
  <\/script>
`,F=`
  <button id="btn-trigger-toast-closeable" class="btn btn-primary" type="button">
    Show Toast
  </button>

  <script type="module">
    import toast from "./js/components/toast";

    const btnTriggerToastCloseable = document.querySelector('#btn-trigger-toast-closeable');
    if(btnTriggerToastCloseable) {
      btnTriggerToastCloseable.addEventListener('click', () => {
        toast('Hello, I am a Toast', {
          close: true
        })
      });
    }
  <\/script>
`,P=`
  <button id="btn-trigger-custom-toast" class="btn btn-primary" type="button">
    Show Toast
  </button>

  <script type="module">
    import toast from "./js/components/toast";

    const btnTriggerToastCustom    = document.querySelector('#btn-trigger-custom-toast');
    if(btnTriggerToastCustom) {
      btnTriggerToastCustom.addEventListener('click', () => {
        toast('Hello, I am a <strong>Custom Toast</strong>', {
          style: {
            background: '#a855f7',
            color: '#fff'
          }
        });
      });
    }
  <\/script>
`,$=createCodeViewer("#toast-basic-code-viewer",R),A=createCodeViewer("#toast-type-code-viewer",j),z=createCodeViewer("#toast-placement-code-viewer",D),_=createCodeViewer("#toast-closeable-code-viewer",F),G=createCodeViewer("#toast-custom-code-viewer",P);h&&h.addEventListener("click",()=>n("Hello, I am a Toast"));y&&y.addEventListener("click",()=>{n.success("Hello, I am a Success Toast")});v&&v.addEventListener("click",()=>{n.danger("Hello, I am a Danger Toast")});w&&w.addEventListener("click",()=>{n.warning("Hello, I am a Warning Toast")});k&&k.addEventListener("click",()=>{n.info("Hello, I am an Info Toast")});C&&C.addEventListener("click",()=>{n("Hello, I am a Toast",{gravity:"top",position:"right"})});E&&E.addEventListener("click",()=>{n("Hello, I am a Toast",{gravity:"top",position:"center"})});L&&L.addEventListener("click",()=>{n("Hello, I am a Toast",{gravity:"top",position:"left"})});S&&S.addEventListener("click",()=>{n("Hello, I am a Toast",{gravity:"bottom",position:"right"})});N&&N.addEventListener("click",()=>{n("Hello, I am a Toast",{gravity:"bottom",position:"center"})});I&&I.addEventListener("click",()=>{n("Hello, I am a Toast",{gravity:"bottom",position:"left"})});H&&H.addEventListener("click",()=>{n("Hello, I am a Toast",{close:!0})});x&&x.addEventListener("click",()=>{n("Hello, I am a <strong>Custom Toast</strong>",{style:{background:"#a855f7",color:"#fff"}})});$.render();A.render();z.render();_.render();G.render();

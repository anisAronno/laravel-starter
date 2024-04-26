import{t}from"./app-BHHSBNjI.js";const e=document.querySelector("#btn-trigger-toast"),o=document.querySelector("#btn-trigger-toast-success"),r=document.querySelector("#btn-trigger-toast-danger"),n=document.querySelector("#btn-trigger-toast-warning"),s=document.querySelector("#btn-trigger-toast-info"),a=document.querySelector("#btn-trigger-toast-tr"),i=document.querySelector("#btn-trigger-toast-tl"),c=document.querySelector("#btn-trigger-toast-tc"),g=document.querySelector("#btn-trigger-toast-br"),b=document.querySelector("#btn-trigger-toast-bl"),l=document.querySelector("#btn-trigger-toast-bc"),T=document.querySelector("#btn-trigger-toast-closeable"),u=document.querySelector("#btn-trigger-custom-toast"),d=`
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
`,m=`
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
`,p=`
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
`,y=`
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
`,f=`
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
`,v=createCodeViewer("#toast-basic-code-viewer",d),S=createCodeViewer("#toast-type-code-viewer",m),C=createCodeViewer("#toast-placement-code-viewer",p),L=createCodeViewer("#toast-closeable-code-viewer",y),I=createCodeViewer("#toast-custom-code-viewer",f);e&&e.addEventListener("click",()=>t("Hello, I am a Toast"));o&&o.addEventListener("click",()=>{t.success("Hello, I am a Success Toast")});r&&r.addEventListener("click",()=>{t.danger("Hello, I am a Danger Toast")});n&&n.addEventListener("click",()=>{t.warning("Hello, I am a Warning Toast")});s&&s.addEventListener("click",()=>{t.info("Hello, I am an Info Toast")});a&&a.addEventListener("click",()=>{t("Hello, I am a Toast",{gravity:"top",position:"right"})});c&&c.addEventListener("click",()=>{t("Hello, I am a Toast",{gravity:"top",position:"center"})});i&&i.addEventListener("click",()=>{t("Hello, I am a Toast",{gravity:"top",position:"left"})});g&&g.addEventListener("click",()=>{t("Hello, I am a Toast",{gravity:"bottom",position:"right"})});l&&l.addEventListener("click",()=>{t("Hello, I am a Toast",{gravity:"bottom",position:"center"})});b&&b.addEventListener("click",()=>{t("Hello, I am a Toast",{gravity:"bottom",position:"left"})});T&&T.addEventListener("click",()=>{t("Hello, I am a Toast",{close:!0})});u&&u.addEventListener("click",()=>{t("Hello, I am a <strong>Custom Toast</strong>",{style:{background:"#a855f7",color:"#fff"}})});v.render();S.render();C.render();L.render();I.render();

(()=>{var e,t={6094:(e,t,n)=>{n(9138),n(1531),n(3678),n(4145);let o=[];const r=()=>{document.removeEventListener("DOMContentLoaded",r);for(const e of o)e();o=[]};!function(e){if("loading"!==document.readyState)return e();0==o.length&&document.addEventListener("DOMContentLoaded",r,!1),o.push(e)}((()=>{function e(e){const t=getComputedStyle(e),n=e.querySelector(".folder-content");e.style.maxHeight=parseInt(t.maxHeight)+n.scrollHeight+"px"}function t({currentTarget:t}){const n=t.closest(".folder");"200px"===getComputedStyle(n).maxHeight?(t.innerText="收起",e(n)):(t.innerText="展开",n.style.maxHeight="200px")}document.querySelectorAll(".expand-button").forEach((e=>{e.addEventListener("click",t,!0)})),document.addEventListener("click",(async t=>{const n=t.target;if(n?.classList.contains("load-more")){const t=await fetch(n.getAttribute("data-href")+"&_wpnonce="+_iro.nonce,{method:"POST"}),o=await t.json(),r=document.createElement("div");for(r.innerHTML=o;r.childNodes.length>0;)n.parentNode.appendChild(r.childNodes[0]);e(n.closest(".folder")),n.remove()}}))}))}},n={};function o(e){var r=n[e];if(void 0!==r)return r.exports;var i=n[e]={exports:{}};return t[e].call(i.exports,i,i.exports,o),i.exports}o.m=t,e=[],o.O=(t,n,r,i)=>{if(!n){var a=1/0;for(d=0;d<e.length;d++){for(var[n,r,i]=e[d],c=!0,s=0;s<n.length;s++)(!1&i||a>=i)&&Object.keys(o.O).every((e=>o.O[e](n[s])))?n.splice(s--,1):(c=!1,i<a&&(a=i));if(c){e.splice(d--,1);var l=r();void 0!==l&&(t=l)}}return t}i=i||0;for(var d=e.length;d>0&&e[d-1][2]>i;d--)e[d]=e[d-1];e[d]=[n,r,i]},o.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={306:0};o.O.j=t=>0===e[t];var t=(t,n)=>{var r,i,[a,c,s]=n,l=0;if(a.some((t=>0!==e[t]))){for(r in c)o.o(c,r)&&(o.m[r]=c[r]);if(s)var d=s(o)}for(t&&t(n);l<a.length;l++)i=a[l],o.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return o.O(d)},n=globalThis.webpackChunksakurairo_scripts=globalThis.webpackChunksakurairo_scripts||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))})();var r=o.O(void 0,[8538],(()=>o(6094)));r=o.O(r)})();
//# sourceMappingURL=page-bilibilifav.js.map
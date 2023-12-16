(()=>{var e,t={1016:(e,t,r)=>{"use strict";r.r(t);var o=r(9307);const n=window.wp.blocks;var a=r(1984),s=r(5430);const i=JSON.parse('{"name":"woocommerce/order-confirmation-status","version":"1.0.0","title":"Order Status","description":"Display a \\"thank you\\" message, or a sentence regarding the current order status.","category":"woocommerce","keywords":["WooCommerce"],"supports":{"multiple":false,"align":["wide","full"],"html":false,"typography":{"fontSize":true,"lineHeight":true,"__experimentalFontFamily":true,"__experimentalTextDecoration":true,"__experimentalFontStyle":true,"__experimentalFontWeight":true,"__experimentalLetterSpacing":true,"__experimentalTextTransform":true,"__experimentalDefaultControls":{"fontSize":true}},"color":{"background":true,"text":true,"gradients":true,"__experimentalDefaultControls":{"background":true,"text":true}},"spacing":{"padding":true,"margin":true,"__experimentalDefaultControls":{"margin":false,"padding":false}}},"attributes":{"align":{"type":"string","default":"wide"},"className":{"type":"string","default":""}},"textdomain":"woocommerce","apiVersion":2,"$schema":"https://schemas.wp.org/trunk/block.json"}'),l=window.wp.blockEditor;var c=r(5736);r(5351);(0,n.registerBlockType)(i,{icon:{src:(0,o.createElement)(a.Z,{icon:s.Z,className:"wc-block-editor-components-block-icon"})},attributes:{...i.attributes},edit:()=>{const e=(0,l.useBlockProps)({className:"wc-block-order-confirmation-status"});return(0,o.createElement)("div",{...e},(0,o.createElement)("p",null,(0,c.__)("Thank you. Your order has been received.","woocommerce")))},save:()=>null})},5351:()=>{},9307:e=>{"use strict";e.exports=window.wp.element},5736:e=>{"use strict";e.exports=window.wp.i18n},444:e=>{"use strict";e.exports=window.wp.primitives}},r={};function o(e){var n=r[e];if(void 0!==n)return n.exports;var a=r[e]={exports:{}};return t[e].call(a.exports,a,a.exports,o),a.exports}o.m=t,e=[],o.O=(t,r,n,a)=>{if(!r){var s=1/0;for(u=0;u<e.length;u++){for(var[r,n,a]=e[u],i=!0,l=0;l<r.length;l++)(!1&a||s>=a)&&Object.keys(o.O).every((e=>o.O[e](r[l])))?r.splice(l--,1):(i=!1,a<s&&(s=a));if(i){e.splice(u--,1);var c=n();void 0!==c&&(t=c)}}return t}a=a||0;for(var u=e.length;u>0&&e[u-1][2]>a;u--)e[u]=e[u-1];e[u]=[r,n,a]},o.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return o.d(t,{a:t}),t},o.d=(e,t)=>{for(var r in t)o.o(t,r)&&!o.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),o.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.j=6112,(()=>{var e={6112:0};o.O.j=t=>0===e[t];var t=(t,r)=>{var n,a,[s,i,l]=r,c=0;if(s.some((t=>0!==e[t]))){for(n in i)o.o(i,n)&&(o.m[n]=i[n]);if(l)var u=l(o)}for(t&&t(r);c<s.length;c++)a=s[c],o.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return o.O(u)},r=self.webpackChunkwebpackWcBlocksJsonp=self.webpackChunkwebpackWcBlocksJsonp||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var n=o.O(void 0,[2869],(()=>o(1016)));n=o.O(n),((this.wc=this.wc||{}).blocks=this.wc.blocks||{})["order-confirmation-status"]=n})();
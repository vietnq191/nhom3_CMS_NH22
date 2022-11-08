(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[13],{108:function(e,t,n){"use strict";var o=n(0);t.a=function(e){let{icon:t,size:n=24,...s}=e;return Object(o.cloneElement)(t,{width:n,height:n,...s})}},267:function(e,t){},278:function(e,t,n){"use strict";n.d(t,"a",(function(){return l}));var o=n(1),s=n(7),c=n(6),r=n(17),a=n(32),i=n(202);const l=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";const{cartCoupons:t,cartIsLoading:n}=Object(a.a)(),{createErrorNotice:l}=Object(s.useDispatch)("core/notices"),{createNotice:p}=Object(s.useDispatch)("core/notices"),{setValidationErrors:u}=Object(i.b)(),{applyCoupon:d,removeCoupon:m,isApplyingCoupon:b,isRemovingCoupon:h}=Object(s.useSelect)((e,t)=>{let{dispatch:n}=t;const o=e(c.CART_STORE_KEY),s=n(c.CART_STORE_KEY);return{applyCoupon:s.applyCoupon,removeCoupon:s.removeCoupon,isApplyingCoupon:o.isApplyingCoupon(),isRemovingCoupon:o.isRemovingCoupon(),receiveApplyingCoupon:s.receiveApplyingCoupon}},[l,p]),g=t=>{d(t).then(n=>{!0===n&&p("info",Object(o.sprintf)(
/* translators: %s coupon code. */
Object(o.__)('Coupon code "%s" has been applied to your cart.',"woocommerce"),t),{id:"coupon-form",type:"snackbar",context:e})}).catch(e=>{u({coupon:{message:Object(r.decodeEntities)(e.message),hidden:!1}}),receiveApplyingCoupon("")})},v=t=>{m(t).then(n=>{!0===n&&p("info",Object(o.sprintf)(
/* translators: %s coupon code. */
Object(o.__)('Coupon code "%s" has been removed from your cart.',"woocommerce"),t),{id:"coupon-form",type:"snackbar",context:e})}).catch(t=>{l(t.message,{id:"coupon-form",context:e}),receiveApplyingCoupon("")})};return{appliedCoupons:t,isLoading:n,applyCoupon:g,removeCoupon:v,isApplyingCoupon:b,isRemovingCoupon:h}}},279:function(e,t){},281:function(e,t,n){"use strict";n.d(t,"a",(function(){return c}));var o=n(0),s=n(202);n(267);const c=e=>{let{errorMessage:t="",propertyName:n="",elementId:c=""}=e;const{getValidationError:r,getValidationErrorId:a}=Object(s.b)();if(!t||"string"!=typeof t){const e=r(n)||{};if(!e.message||e.hidden)return null;t=e.message}return Object(o.createElement)("div",{className:"wc-block-components-validation-error",role:"alert"},Object(o.createElement)("p",{id:a(c)},t))}},282:function(e,t,n){"use strict";n.d(t,"b",(function(){return r})),n.d(t,"a",(function(){return a}));var o=n(31),s=n(211);const c=function(){let e=arguments.length>0&&void 0!==arguments[0]&&arguments[0];const{paymentMethods:t,expressPaymentMethods:n,paymentMethodsInitialized:c,expressPaymentMethodsInitialized:r}=Object(s.b)(),a=Object(o.a)(t),i=Object(o.a)(n);return{paymentMethods:e?i:a,isInitialized:e?r:c}},r=()=>c(!1),a=()=>c(!0)},284:function(e,t,n){"use strict";var o=n(12),s=n.n(o),c=n(0),r=n(4),a=n.n(r);const i=e=>"wc-block-components-payment-method-icon wc-block-components-payment-method-icon--"+e;var l=e=>{let{id:t,src:n=null,alt:o=""}=e;return n?Object(c.createElement)("img",{className:i(t),src:n,alt:o}):null},p=n(47);const u=[{id:"alipay",alt:"Alipay",src:p.l+"payment-methods/alipay.svg"},{id:"amex",alt:"American Express",src:p.l+"payment-methods/amex.svg"},{id:"bancontact",alt:"Bancontact",src:p.l+"payment-methods/bancontact.svg"},{id:"diners",alt:"Diners Club",src:p.l+"payment-methods/diners.svg"},{id:"discover",alt:"Discover",src:p.l+"payment-methods/discover.svg"},{id:"eps",alt:"EPS",src:p.l+"payment-methods/eps.svg"},{id:"giropay",alt:"Giropay",src:p.l+"payment-methods/giropay.svg"},{id:"ideal",alt:"iDeal",src:p.l+"payment-methods/ideal.svg"},{id:"jcb",alt:"JCB",src:p.l+"payment-methods/jcb.svg"},{id:"laser",alt:"Laser",src:p.l+"payment-methods/laser.svg"},{id:"maestro",alt:"Maestro",src:p.l+"payment-methods/maestro.svg"},{id:"mastercard",alt:"Mastercard",src:p.l+"payment-methods/mastercard.svg"},{id:"multibanco",alt:"Multibanco",src:p.l+"payment-methods/multibanco.svg"},{id:"p24",alt:"Przelewy24",src:p.l+"payment-methods/p24.svg"},{id:"sepa",alt:"Sepa",src:p.l+"payment-methods/sepa.svg"},{id:"sofort",alt:"Sofort",src:p.l+"payment-methods/sofort.svg"},{id:"unionpay",alt:"Union Pay",src:p.l+"payment-methods/unionpay.svg"},{id:"visa",alt:"Visa",src:p.l+"payment-methods/visa.svg"},{id:"wechat",alt:"WeChat",src:p.l+"payment-methods/wechat.svg"}];var d=n(49);n(279),t.a=e=>{let{icons:t=[],align:n="center",className:o}=e;const r=(e=>{const t={};return e.forEach(e=>{let n={};"string"==typeof e&&(n={id:e,alt:e,src:null}),"object"==typeof e&&(n={id:e.id||"",alt:e.alt||"",src:e.src||null}),n.id&&Object(d.a)(n.id)&&!t[n.id]&&(t[n.id]=n)}),Object.values(t)})(t);if(0===r.length)return null;const i=a()("wc-block-components-payment-method-icons",{"wc-block-components-payment-method-icons--align-left":"left"===n,"wc-block-components-payment-method-icons--align-right":"right"===n},o);return Object(c.createElement)("div",{className:i},r.map(e=>{const t={...e,...(n=e.id,u.find(e=>e.id===n)||{})};var n;return Object(c.createElement)(l,s()({key:"payment-method-icon-"+e.id},t))}))}},294:function(e,t){},295:function(e,t,n){"use strict";var o=n(18),s=n.n(o),c=n(0),r=n(1),a=n(5),i=n(2),l=n(126),p=n(30);class u extends a.Component{constructor(){super(...arguments),s()(this,"state",{errorMessage:"",hasError:!1})}static getDerivedStateFromError(e){return{errorMessage:e.message,hasError:!0}}render(){const{hasError:e,errorMessage:t}=this.state,{isEditor:n}=this.props;if(e){let e=Object(r.__)("We are experiencing difficulties with this payment method. Please contact us for assistance.","woocommerce");(n||i.CURRENT_USER_IS_ADMIN)&&(e=t||Object(r.__)("There was an error with this payment method. Please verify it's configured correctly.","woocommerce"));const o=[{id:"0",content:e,isDismissible:!1,status:"error"}];return Object(c.createElement)(l.a,{additionalNotices:o,context:p.c.PAYMENTS})}return this.props.children}}u.defaultProps={isEditor:!1},t.a=u},317:function(e,t){},318:function(e,t,n){"use strict";var o=n(0),s=n(1),c=n(346),r=n(282),a=n(29),i=n(211),l=n(25),p=n.n(l),u=n(295);t.a=()=>{const{isEditor:e}=Object(a.a)(),{setActivePaymentMethod:t,setExpressPaymentError:n,activePaymentMethod:l,paymentMethodData:d,setPaymentStatus:m}=Object(i.b)(),b=Object(c.a)(),{paymentMethods:h}=Object(r.a)(),g=Object(o.useRef)(l),v=Object(o.useRef)(d),y=Object(o.useCallback)(e=>()=>{g.current=l,v.current=d,m().started(),t(e)},[l,d,t,m]),j=Object(o.useCallback)(()=>{m().pristine(),t(g.current,v.current)},[t,m]),O=Object(o.useCallback)(e=>{m().error(e),n(e),t(g.current,v.current)},[t,m,n]),E=Object(o.useCallback)((function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";p()("Express Payment Methods should use the provided onError handler instead.",{alternative:"onError",plugin:"woocommerce-gutenberg-products-block",link:"https://github.com/woocommerce/woocommerce-gutenberg-products-block/pull/4228"}),e?O(e):n("")}),[n,O]),f=Object.entries(h),w=f.length>0?f.map(t=>{let[n,s]=t;const c=e?s.edit:s.content;return Object(o.isValidElement)(c)?Object(o.createElement)("li",{key:n,id:"express-payment-method-"+n},Object(o.cloneElement)(c,{...b,onClick:y(n),onClose:j,onError:O,setExpressPaymentError:E})):null}):Object(o.createElement)("li",{key:"noneRegistered"},Object(s.__)("No registered Payment Methods","woocommerce"));return Object(o.createElement)(u.a,{isEditor:e},Object(o.createElement)("ul",{className:"wc-block-components-express-payment__event-buttons"},w))}},341:function(e,t,n){"use strict";var o=n(0),s=n(13);const c=Object(o.createElement)(s.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(o.createElement)(s.Path,{fillRule:"evenodd",d:"M5.5 9.5v-2h13v2h-13zm0 3v4h13v-4h-13zM4 7a1 1 0 011-1h14a1 1 0 011 1v10a1 1 0 01-1 1H5a1 1 0 01-1-1V7z",clipRule:"evenodd"}));t.a=c},346:function(e,t,n){"use strict";n.d(t,"a",(function(){return I}));var o=n(1),s=n(41),c=n(0),r=n(4),a=n.n(r),i=n(13),l=Object(c.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(c.createElement)("g",{fill:"none",fillRule:"evenodd"},Object(c.createElement)("path",{d:"M0 0h24v24H0z"}),Object(c.createElement)("path",{fill:"#000",fillRule:"nonzero",d:"M17.3 8v1c1 .2 1.4.9 1.4 1.7h-1c0-.6-.3-1-1-1-.8 0-1.3.4-1.3.9 0 .4.3.6 1.4 1 1 .2 2 .6 2 1.9 0 .9-.6 1.4-1.5 1.5v1H16v-1c-.9-.1-1.6-.7-1.7-1.7h1c0 .6.4 1 1.3 1 1 0 1.2-.5 1.2-.8 0-.4-.2-.8-1.3-1.1-1.3-.3-2.1-.8-2.1-1.8 0-.9.7-1.5 1.6-1.6V8h1.3zM12 10v1H6v-1h6zm2-2v1H6V8h8zM2 4v16h20V4H2zm2 14V6h16v12H4z"}),Object(c.createElement)("path",{stroke:"#000",strokeLinecap:"round",d:"M6 16c2.6 0 3.9-3 1.7-3-2 0-1 3 1.5 3 1 0 1-.8 2.8-.8"}))),p=Object(c.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(c.createElement)(i.Path,{fillRule:"evenodd",d:"M18.646 9H20V8l-1-.5L12 4 5 7.5 4 8v1h14.646zm-3-1.5L12 5.677 8.354 7.5h7.292zm-7.897 9.44v-6.5h-1.5v6.5h1.5zm5-6.5v6.5h-1.5v-6.5h1.5zm5 0v6.5h-1.5v-6.5h1.5zm2.252 8.81c0 .414-.334.75-.748.75H4.752a.75.75 0 010-1.5h14.5a.75.75 0 01.749.75z",clipRule:"evenodd"})),u=Object(c.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(c.createElement)(i.Path,{d:"M3.25 12a8.75 8.75 0 1117.5 0 8.75 8.75 0 01-17.5 0zM12 4.75a7.25 7.25 0 100 14.5 7.25 7.25 0 000-14.5zm-1.338 4.877c-.314.22-.412.452-.412.623 0 .171.098.403.412.623.312.218.783.377 1.338.377.825 0 1.605.233 2.198.648.59.414 1.052 1.057 1.052 1.852 0 .795-.461 1.438-1.052 1.852-.41.286-.907.486-1.448.582v.316a.75.75 0 01-1.5 0v-.316a3.64 3.64 0 01-1.448-.582c-.59-.414-1.052-1.057-1.052-1.852a.75.75 0 011.5 0c0 .171.098.403.412.623.312.218.783.377 1.338.377s1.026-.159 1.338-.377c.314-.22.412-.452.412-.623 0-.171-.098-.403-.412-.623-.312-.218-.783-.377-1.338-.377-.825 0-1.605-.233-2.198-.648-.59-.414-1.052-1.057-1.052-1.852 0-.795.461-1.438 1.052-1.852a3.64 3.64 0 011.448-.582V7.5a.75.75 0 011.5 0v.316c.54.096 1.039.296 1.448.582.59.414 1.052 1.057 1.052 1.852a.75.75 0 01-1.5 0c0-.171-.098-.403-.412-.623-.312-.218-.783-.377-1.338-.377s-1.026.159-1.338.377z"})),d=n(341),m=n(108),b=n(49),h=n(19);n(294);const g={bank:p,bill:u,card:d.a,checkPayment:l};var v=e=>{let{icon:t="",text:n=""}=e;const o=!!t,s=Object(c.useCallback)(e=>o&&Object(b.a)(e)&&Object(h.b)(g,e),[o]),r=a()("wc-block-components-payment-method-label",{"wc-block-components-payment-method-label--with-icon":o});return Object(c.createElement)("span",{className:r},s(t)?Object(c.createElement)(m.a,{icon:g[t]}):t,n)},y=n(284),j=n(2),O=n(25),E=n.n(O),f=n(139),w=n(281),k=n(32),C=n(278),S=n(30),P=n(36),x=n(211),_=n(69),R=n(50);const M=(e,t)=>{const n=[],s=(t,n)=>{const o=n+"_tax",s=Object(h.b)(e,n)&&Object(b.a)(e[n])?parseInt(e[n],10):0;return{key:n,label:t,value:s,valueWithTax:s+(Object(h.b)(e,o)&&Object(b.a)(e[o])?parseInt(e[o],10):0)}};return n.push(s(Object(o.__)("Subtotal:","woocommerce"),"total_items")),n.push(s(Object(o.__)("Fees:","woocommerce"),"total_fees")),n.push(s(Object(o.__)("Discount:","woocommerce"),"total_discount")),n.push({key:"total_tax",label:Object(o.__)("Taxes:","woocommerce"),value:parseInt(e.total_tax,10),valueWithTax:parseInt(e.total_tax,10)}),t&&n.push(s(Object(o.__)("Shipping:","woocommerce"),"total_shipping")),n};var A=n(67);const I=()=>{const{isCalculating:e,isComplete:t,isIdle:n,isProcessing:r,onCheckoutBeforeProcessing:a,onCheckoutValidationBeforeProcessing:i,onCheckoutAfterProcessingWithSuccess:l,onCheckoutAfterProcessingWithError:p,onSubmit:u,customerId:d}=Object(P.b)(),{currentStatus:m,activePaymentMethod:b,onPaymentProcessing:h,setExpressPaymentError:g,shouldSavePayment:O}=Object(x.b)(),{shippingErrorStatus:I,shippingErrorTypes:z,onShippingRateSuccess:T,onShippingRateFail:N,onShippingRateSelectSuccess:V,onShippingRateSelectFail:D}=Object(_.b)(),{shippingRates:B,isLoadingRates:L,selectedRates:F,isSelectingRate:W,selectShippingRate:H,needsShipping:G}=Object(A.a)(),{billingAddress:Y,shippingAddress:J,setShippingAddress:U}=Object(R.b)(),{cartItems:K,cartFees:X,cartTotals:q,extensions:Q}=Object(k.a)(),{appliedCoupons:Z}=Object(C.a)(),{noticeContexts:$,responseTypes:ee}=Object(S.d)(),te=Object(c.useRef)(M(q,G)),ne=Object(c.useRef)({label:Object(o.__)("Total","woocommerce"),value:parseInt(q.total_price,10)});Object(c.useEffect)(()=>{te.current=M(q,G),ne.current={label:Object(o.__)("Total","woocommerce"),value:parseInt(q.total_price,10)}},[q,G]);const oe=Object(c.useCallback)((function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";E()("setExpressPaymentError should only be used by Express Payment Methods (using the provided onError handler).",{alternative:"",plugin:"woocommerce-gutenberg-products-block",link:"https://github.com/woocommerce/woocommerce-gutenberg-products-block/pull/4228"}),g(e)}),[g]);return{activePaymentMethod:b,billing:{appliedCoupons:Z,billingAddress:Y,billingData:Y,cartTotal:ne.current,cartTotalItems:te.current,currency:Object(s.getCurrencyFromPriceResponse)(q),customerId:d,displayPricesIncludingTax:Object(j.getSetting)("displayCartPricesIncludingTax",!1)},cartData:{cartItems:K,cartFees:X,extensions:Q},checkoutStatus:{isCalculating:e,isComplete:t,isIdle:n,isProcessing:r},components:{LoadingMask:f.a,PaymentMethodIcons:y.a,PaymentMethodLabel:v,ValidationInputError:w.a},emitResponse:{noticeContexts:$,responseTypes:ee},eventRegistration:{onCheckoutAfterProcessingWithError:p,onCheckoutAfterProcessingWithSuccess:l,onCheckoutBeforeProcessing:a,onCheckoutValidationBeforeProcessing:i,onPaymentProcessing:h,onShippingRateFail:N,onShippingRateSelectFail:D,onShippingRateSelectSuccess:V,onShippingRateSuccess:T},onSubmit:u,paymentStatus:m,setExpressPaymentError:oe,shippingData:{isSelectingRate:W,needsShipping:G,selectedRates:F,setSelectedRates:H,setShippingAddress:U,shippingAddress:J,shippingRates:B,shippingRatesLoading:L},shippingStatus:{shippingErrorStatus:I,shippingErrorTypes:z},shouldSavePayment:O}}},442:function(e,t,n){"use strict";n.r(t);var o=n(0),s=n(32),c=n(4),r=n.n(c),a=n(1),i=n(282),l=n(30),p=n(36),u=n(211),d=n(126),m=n(139),b=n(318);n(317);var h=()=>{const{paymentMethods:e,isInitialized:t}=Object(i.a)(),{noticeContexts:n}=Object(l.d)(),{isCalculating:s,isProcessing:c,isAfterProcessing:r,isBeforeProcessing:h,isComplete:g,hasError:v}=Object(p.b)(),{currentStatus:y}=Object(u.b)();if(!t||t&&0===Object.keys(e).length)return null;const j=c||r||h||g&&!v;return Object(o.createElement)(o.Fragment,null,Object(o.createElement)(m.a,{isLoading:s||j||y.isDoingExpressPayment},Object(o.createElement)("div",{className:"wc-block-components-express-payment wc-block-components-express-payment--cart"},Object(o.createElement)("div",{className:"wc-block-components-express-payment__content"},Object(o.createElement)(d.a,{context:n.EXPRESS_PAYMENTS}),Object(o.createElement)(b.a,null)))),Object(o.createElement)("div",{className:"wc-block-components-express-payment-continue-rule wc-block-components-express-payment-continue-rule--cart"},Object(a.__)("Any","woocommerce")))};t.default=e=>{let{className:t}=e;const{cartNeedsPayment:n}=Object(s.a)();return n?Object(o.createElement)("div",{className:r()("wc-block-cart__payment-options",t)},Object(o.createElement)(h,null)):null}}}]);
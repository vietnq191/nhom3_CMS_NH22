(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[32],{138:function(e,t,n){"use strict";var c=n(0);n(199),t.a=()=>Object(c.createElement)("span",{className:"wc-block-components-spinner","aria-hidden":"true"})},139:function(e,t,n){"use strict";var c=n(0),o=n(1),s=n(4),a=n.n(s),r=(n(201),n(138));t.a=e=>{let{children:t,className:n,screenReaderLabel:s,showSpinner:i=!1,isLoading:l=!0}=e;return Object(c.createElement)("div",{className:a()(n,{"wc-block-components-loading-mask":l})},l&&i&&Object(c.createElement)(r.a,null),Object(c.createElement)("div",{className:a()({"wc-block-components-loading-mask__children":l}),"aria-hidden":l},t),l&&Object(c.createElement)("span",{className:"screen-reader-text"},s||Object(o.__)("Loading…","woocommerce")))}},199:function(e,t){},201:function(e,t){},267:function(e,t){},271:function(e,t,n){"use strict";var c=n(12),o=n.n(c),s=n(0),a=n(4),r=n.n(a);n(272),t.a=e=>{let{children:t,className:n,headingLevel:c,...a}=e;const i=r()("wc-block-components-title",n),l="h"+c;return Object(s.createElement)(l,o()({className:i},a),t)}},272:function(e,t){},278:function(e,t,n){"use strict";n.d(t,"a",(function(){return l}));var c=n(1),o=n(7),s=n(6),a=n(17),r=n(32),i=n(202);const l=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";const{cartCoupons:t,cartIsLoading:n}=Object(r.a)(),{createErrorNotice:l}=Object(o.useDispatch)("core/notices"),{createNotice:p}=Object(o.useDispatch)("core/notices"),{setValidationErrors:u}=Object(i.b)(),{applyCoupon:m,removeCoupon:d,isApplyingCoupon:b,isRemovingCoupon:h}=Object(o.useSelect)((e,t)=>{let{dispatch:n}=t;const c=e(s.CART_STORE_KEY),o=n(s.CART_STORE_KEY);return{applyCoupon:o.applyCoupon,removeCoupon:o.removeCoupon,isApplyingCoupon:c.isApplyingCoupon(),isRemovingCoupon:c.isRemovingCoupon(),receiveApplyingCoupon:o.receiveApplyingCoupon}},[l,p]),g=t=>{m(t).then(n=>{!0===n&&p("info",Object(c.sprintf)(
/* translators: %s coupon code. */
Object(c.__)('Coupon code "%s" has been applied to your cart.',"woocommerce"),t),{id:"coupon-form",type:"snackbar",context:e})}).catch(e=>{u({coupon:{message:Object(a.decodeEntities)(e.message),hidden:!1}}),receiveApplyingCoupon("")})},v=t=>{d(t).then(n=>{!0===n&&p("info",Object(c.sprintf)(
/* translators: %s coupon code. */
Object(c.__)('Coupon code "%s" has been removed from your cart.',"woocommerce"),t),{id:"coupon-form",type:"snackbar",context:e})}).catch(t=>{l(t.message,{id:"coupon-form",context:e}),receiveApplyingCoupon("")})};return{appliedCoupons:t,isLoading:n,applyCoupon:g,removeCoupon:v,isApplyingCoupon:b,isRemovingCoupon:h}}},279:function(e,t){},281:function(e,t,n){"use strict";n.d(t,"a",(function(){return s}));var c=n(0),o=n(202);n(267);const s=e=>{let{errorMessage:t="",propertyName:n="",elementId:s=""}=e;const{getValidationError:a,getValidationErrorId:r}=Object(o.b)();if(!t||"string"!=typeof t){const e=a(n)||{};if(!e.message||e.hidden)return null;t=e.message}return Object(c.createElement)("div",{className:"wc-block-components-validation-error",role:"alert"},Object(c.createElement)("p",{id:r(s)},t))}},282:function(e,t,n){"use strict";n.d(t,"b",(function(){return a})),n.d(t,"a",(function(){return r}));var c=n(31),o=n(211);const s=function(){let e=arguments.length>0&&void 0!==arguments[0]&&arguments[0];const{paymentMethods:t,expressPaymentMethods:n,paymentMethodsInitialized:s,expressPaymentMethodsInitialized:a}=Object(o.b)(),r=Object(c.a)(t),i=Object(c.a)(n);return{paymentMethods:e?i:r,isInitialized:e?a:s}},a=()=>s(!1),r=()=>s(!0)},284:function(e,t,n){"use strict";var c=n(12),o=n.n(c),s=n(0),a=n(4),r=n.n(a);const i=e=>"wc-block-components-payment-method-icon wc-block-components-payment-method-icon--"+e;var l=e=>{let{id:t,src:n=null,alt:c=""}=e;return n?Object(s.createElement)("img",{className:i(t),src:n,alt:c}):null},p=n(47);const u=[{id:"alipay",alt:"Alipay",src:p.l+"payment-methods/alipay.svg"},{id:"amex",alt:"American Express",src:p.l+"payment-methods/amex.svg"},{id:"bancontact",alt:"Bancontact",src:p.l+"payment-methods/bancontact.svg"},{id:"diners",alt:"Diners Club",src:p.l+"payment-methods/diners.svg"},{id:"discover",alt:"Discover",src:p.l+"payment-methods/discover.svg"},{id:"eps",alt:"EPS",src:p.l+"payment-methods/eps.svg"},{id:"giropay",alt:"Giropay",src:p.l+"payment-methods/giropay.svg"},{id:"ideal",alt:"iDeal",src:p.l+"payment-methods/ideal.svg"},{id:"jcb",alt:"JCB",src:p.l+"payment-methods/jcb.svg"},{id:"laser",alt:"Laser",src:p.l+"payment-methods/laser.svg"},{id:"maestro",alt:"Maestro",src:p.l+"payment-methods/maestro.svg"},{id:"mastercard",alt:"Mastercard",src:p.l+"payment-methods/mastercard.svg"},{id:"multibanco",alt:"Multibanco",src:p.l+"payment-methods/multibanco.svg"},{id:"p24",alt:"Przelewy24",src:p.l+"payment-methods/p24.svg"},{id:"sepa",alt:"Sepa",src:p.l+"payment-methods/sepa.svg"},{id:"sofort",alt:"Sofort",src:p.l+"payment-methods/sofort.svg"},{id:"unionpay",alt:"Union Pay",src:p.l+"payment-methods/unionpay.svg"},{id:"visa",alt:"Visa",src:p.l+"payment-methods/visa.svg"},{id:"wechat",alt:"WeChat",src:p.l+"payment-methods/wechat.svg"}];var m=n(49);n(279),t.a=e=>{let{icons:t=[],align:n="center",className:c}=e;const a=(e=>{const t={};return e.forEach(e=>{let n={};"string"==typeof e&&(n={id:e,alt:e,src:null}),"object"==typeof e&&(n={id:e.id||"",alt:e.alt||"",src:e.src||null}),n.id&&Object(m.a)(n.id)&&!t[n.id]&&(t[n.id]=n)}),Object.values(t)})(t);if(0===a.length)return null;const i=r()("wc-block-components-payment-method-icons",{"wc-block-components-payment-method-icons--align-left":"left"===n,"wc-block-components-payment-method-icons--align-right":"right"===n},c);return Object(s.createElement)("div",{className:i},a.map(e=>{const t={...e,...(n=e.id,u.find(e=>e.id===n)||{})};var n;return Object(s.createElement)(l,o()({key:"payment-method-icon-"+e.id},t))}))}},294:function(e,t){},295:function(e,t,n){"use strict";var c=n(18),o=n.n(c),s=n(0),a=n(1),r=n(5),i=n(2),l=n(126),p=n(30);class u extends r.Component{constructor(){super(...arguments),o()(this,"state",{errorMessage:"",hasError:!1})}static getDerivedStateFromError(e){return{errorMessage:e.message,hasError:!0}}render(){const{hasError:e,errorMessage:t}=this.state,{isEditor:n}=this.props;if(e){let e=Object(a.__)("We are experiencing difficulties with this payment method. Please contact us for assistance.","woocommerce");(n||i.CURRENT_USER_IS_ADMIN)&&(e=t||Object(a.__)("There was an error with this payment method. Please verify it's configured correctly.","woocommerce"));const c=[{id:"0",content:e,isDismissible:!1,status:"error"}];return Object(s.createElement)(l.a,{additionalNotices:c,context:p.c.PAYMENTS})}return this.props.children}}u.defaultProps={isEditor:!1},t.a=u},317:function(e,t){},318:function(e,t,n){"use strict";var c=n(0),o=n(1),s=n(346),a=n(282),r=n(29),i=n(211),l=n(25),p=n.n(l),u=n(295);t.a=()=>{const{isEditor:e}=Object(r.a)(),{setActivePaymentMethod:t,setExpressPaymentError:n,activePaymentMethod:l,paymentMethodData:m,setPaymentStatus:d}=Object(i.b)(),b=Object(s.a)(),{paymentMethods:h}=Object(a.a)(),g=Object(c.useRef)(l),v=Object(c.useRef)(m),y=Object(c.useCallback)(e=>()=>{g.current=l,v.current=m,d().started(),t(e)},[l,m,t,d]),j=Object(c.useCallback)(()=>{d().pristine(),t(g.current,v.current)},[t,d]),O=Object(c.useCallback)(e=>{d().error(e),n(e),t(g.current,v.current)},[t,d,n]),E=Object(c.useCallback)((function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";p()("Express Payment Methods should use the provided onError handler instead.",{alternative:"onError",plugin:"woocommerce-gutenberg-products-block",link:"https://github.com/woocommerce/woocommerce-gutenberg-products-block/pull/4228"}),e?O(e):n("")}),[n,O]),f=Object.entries(h),k=f.length>0?f.map(t=>{let[n,o]=t;const s=e?o.edit:o.content;return Object(c.isValidElement)(s)?Object(c.createElement)("li",{key:n,id:"express-payment-method-"+n},Object(c.cloneElement)(s,{...b,onClick:y(n),onClose:j,onError:O,setExpressPaymentError:E})):null}):Object(c.createElement)("li",{key:"noneRegistered"},Object(o.__)("No registered Payment Methods","woocommerce"));return Object(c.createElement)(u.a,{isEditor:e},Object(c.createElement)("ul",{className:"wc-block-components-express-payment__event-buttons"},k))}},341:function(e,t,n){"use strict";var c=n(0),o=n(13);const s=Object(c.createElement)(o.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(c.createElement)(o.Path,{fillRule:"evenodd",d:"M5.5 9.5v-2h13v2h-13zm0 3v4h13v-4h-13zM4 7a1 1 0 011-1h14a1 1 0 011 1v10a1 1 0 01-1 1H5a1 1 0 01-1-1V7z",clipRule:"evenodd"}));t.a=s},346:function(e,t,n){"use strict";n.d(t,"a",(function(){return A}));var c=n(1),o=n(41),s=n(0),a=n(4),r=n.n(a),i=n(13),l=Object(s.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(s.createElement)("g",{fill:"none",fillRule:"evenodd"},Object(s.createElement)("path",{d:"M0 0h24v24H0z"}),Object(s.createElement)("path",{fill:"#000",fillRule:"nonzero",d:"M17.3 8v1c1 .2 1.4.9 1.4 1.7h-1c0-.6-.3-1-1-1-.8 0-1.3.4-1.3.9 0 .4.3.6 1.4 1 1 .2 2 .6 2 1.9 0 .9-.6 1.4-1.5 1.5v1H16v-1c-.9-.1-1.6-.7-1.7-1.7h1c0 .6.4 1 1.3 1 1 0 1.2-.5 1.2-.8 0-.4-.2-.8-1.3-1.1-1.3-.3-2.1-.8-2.1-1.8 0-.9.7-1.5 1.6-1.6V8h1.3zM12 10v1H6v-1h6zm2-2v1H6V8h8zM2 4v16h20V4H2zm2 14V6h16v12H4z"}),Object(s.createElement)("path",{stroke:"#000",strokeLinecap:"round",d:"M6 16c2.6 0 3.9-3 1.7-3-2 0-1 3 1.5 3 1 0 1-.8 2.8-.8"}))),p=Object(s.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(s.createElement)(i.Path,{fillRule:"evenodd",d:"M18.646 9H20V8l-1-.5L12 4 5 7.5 4 8v1h14.646zm-3-1.5L12 5.677 8.354 7.5h7.292zm-7.897 9.44v-6.5h-1.5v6.5h1.5zm5-6.5v6.5h-1.5v-6.5h1.5zm5 0v6.5h-1.5v-6.5h1.5zm2.252 8.81c0 .414-.334.75-.748.75H4.752a.75.75 0 010-1.5h14.5a.75.75 0 01.749.75z",clipRule:"evenodd"})),u=Object(s.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(s.createElement)(i.Path,{d:"M3.25 12a8.75 8.75 0 1117.5 0 8.75 8.75 0 01-17.5 0zM12 4.75a7.25 7.25 0 100 14.5 7.25 7.25 0 000-14.5zm-1.338 4.877c-.314.22-.412.452-.412.623 0 .171.098.403.412.623.312.218.783.377 1.338.377.825 0 1.605.233 2.198.648.59.414 1.052 1.057 1.052 1.852 0 .795-.461 1.438-1.052 1.852-.41.286-.907.486-1.448.582v.316a.75.75 0 01-1.5 0v-.316a3.64 3.64 0 01-1.448-.582c-.59-.414-1.052-1.057-1.052-1.852a.75.75 0 011.5 0c0 .171.098.403.412.623.312.218.783.377 1.338.377s1.026-.159 1.338-.377c.314-.22.412-.452.412-.623 0-.171-.098-.403-.412-.623-.312-.218-.783-.377-1.338-.377-.825 0-1.605-.233-2.198-.648-.59-.414-1.052-1.057-1.052-1.852 0-.795.461-1.438 1.052-1.852a3.64 3.64 0 011.448-.582V7.5a.75.75 0 011.5 0v.316c.54.096 1.039.296 1.448.582.59.414 1.052 1.057 1.052 1.852a.75.75 0 01-1.5 0c0-.171-.098-.403-.412-.623-.312-.218-.783-.377-1.338-.377s-1.026.159-1.338.377z"})),m=n(341),d=n(108),b=n(49),h=n(19);n(294);const g={bank:p,bill:u,card:m.a,checkPayment:l};var v=e=>{let{icon:t="",text:n=""}=e;const c=!!t,o=Object(s.useCallback)(e=>c&&Object(b.a)(e)&&Object(h.b)(g,e),[c]),a=r()("wc-block-components-payment-method-label",{"wc-block-components-payment-method-label--with-icon":c});return Object(s.createElement)("span",{className:a},o(t)?Object(s.createElement)(d.a,{icon:g[t]}):t,n)},y=n(284),j=n(2),O=n(25),E=n.n(O),f=n(139),k=n(281),w=n(32),S=n(278),_=n(30),C=n(36),x=n(211),P=n(69),R=n(50);const M=(e,t)=>{const n=[],o=(t,n)=>{const c=n+"_tax",o=Object(h.b)(e,n)&&Object(b.a)(e[n])?parseInt(e[n],10):0;return{key:n,label:t,value:o,valueWithTax:o+(Object(h.b)(e,c)&&Object(b.a)(e[c])?parseInt(e[c],10):0)}};return n.push(o(Object(c.__)("Subtotal:","woocommerce"),"total_items")),n.push(o(Object(c.__)("Fees:","woocommerce"),"total_fees")),n.push(o(Object(c.__)("Discount:","woocommerce"),"total_discount")),n.push({key:"total_tax",label:Object(c.__)("Taxes:","woocommerce"),value:parseInt(e.total_tax,10),valueWithTax:parseInt(e.total_tax,10)}),t&&n.push(o(Object(c.__)("Shipping:","woocommerce"),"total_shipping")),n};var N=n(67);const A=()=>{const{isCalculating:e,isComplete:t,isIdle:n,isProcessing:a,onCheckoutBeforeProcessing:r,onCheckoutValidationBeforeProcessing:i,onCheckoutAfterProcessingWithSuccess:l,onCheckoutAfterProcessingWithError:p,onSubmit:u,customerId:m}=Object(C.b)(),{currentStatus:d,activePaymentMethod:b,onPaymentProcessing:h,setExpressPaymentError:g,shouldSavePayment:O}=Object(x.b)(),{shippingErrorStatus:A,shippingErrorTypes:I,onShippingRateSuccess:z,onShippingRateFail:T,onShippingRateSelectSuccess:V,onShippingRateSelectFail:L}=Object(P.b)(),{shippingRates:D,isLoadingRates:B,selectedRates:F,isSelectingRate:W,selectShippingRate:H,needsShipping:U}=Object(N.a)(),{billingAddress:G,shippingAddress:Y,setShippingAddress:J}=Object(R.b)(),{cartItems:K,cartFees:X,cartTotals:q,extensions:Q}=Object(w.a)(),{appliedCoupons:Z}=Object(S.a)(),{noticeContexts:$,responseTypes:ee}=Object(_.d)(),te=Object(s.useRef)(M(q,U)),ne=Object(s.useRef)({label:Object(c.__)("Total","woocommerce"),value:parseInt(q.total_price,10)});Object(s.useEffect)(()=>{te.current=M(q,U),ne.current={label:Object(c.__)("Total","woocommerce"),value:parseInt(q.total_price,10)}},[q,U]);const ce=Object(s.useCallback)((function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";E()("setExpressPaymentError should only be used by Express Payment Methods (using the provided onError handler).",{alternative:"",plugin:"woocommerce-gutenberg-products-block",link:"https://github.com/woocommerce/woocommerce-gutenberg-products-block/pull/4228"}),g(e)}),[g]);return{activePaymentMethod:b,billing:{appliedCoupons:Z,billingAddress:G,billingData:G,cartTotal:ne.current,cartTotalItems:te.current,currency:Object(o.getCurrencyFromPriceResponse)(q),customerId:m,displayPricesIncludingTax:Object(j.getSetting)("displayCartPricesIncludingTax",!1)},cartData:{cartItems:K,cartFees:X,extensions:Q},checkoutStatus:{isCalculating:e,isComplete:t,isIdle:n,isProcessing:a},components:{LoadingMask:f.a,PaymentMethodIcons:y.a,PaymentMethodLabel:v,ValidationInputError:k.a},emitResponse:{noticeContexts:$,responseTypes:ee},eventRegistration:{onCheckoutAfterProcessingWithError:p,onCheckoutAfterProcessingWithSuccess:l,onCheckoutBeforeProcessing:r,onCheckoutValidationBeforeProcessing:i,onPaymentProcessing:h,onShippingRateFail:T,onShippingRateSelectFail:L,onShippingRateSelectSuccess:V,onShippingRateSuccess:z},onSubmit:u,paymentStatus:d,setExpressPaymentError:ce,shippingData:{isSelectingRate:W,needsShipping:U,selectedRates:F,setSelectedRates:H,setShippingAddress:J,shippingAddress:Y,shippingRates:D,shippingRatesLoading:B},shippingStatus:{shippingErrorStatus:A,shippingErrorTypes:I},shouldSavePayment:O}}},461:function(e,t,n){"use strict";n.r(t);var c=n(0),o=n(32),s=n(1),a=n(282),r=n(30),i=n(36),l=n(211),p=n(29),u=n(126),m=n(271),d=n(139),b=n(2),h=n(318);n(317);var g=()=>{const{isCalculating:e,isProcessing:t,isAfterProcessing:n,isBeforeProcessing:o,isComplete:g,hasError:v}=Object(i.b)(),{currentStatus:y}=Object(l.b)(),{paymentMethods:j,isInitialized:O}=Object(a.a)(),{isEditor:E}=Object(p.a)(),{noticeContexts:f}=Object(r.d)();if(!O||O&&0===Object.keys(j).length)return E||b.CURRENT_USER_IS_ADMIN?Object(c.createElement)(u.a,{context:f.EXPRESS_PAYMENTS}):null;const k=t||n||o||g&&!v;return Object(c.createElement)(c.Fragment,null,Object(c.createElement)(d.a,{isLoading:e||k||y.isDoingExpressPayment},Object(c.createElement)("div",{className:"wc-block-components-express-payment wc-block-components-express-payment--checkout"},Object(c.createElement)("div",{className:"wc-block-components-express-payment__title-container"},Object(c.createElement)(m.a,{className:"wc-block-components-express-payment__title",headingLevel:"2"},Object(s.__)("Express checkout","woocommerce"))),Object(c.createElement)("div",{className:"wc-block-components-express-payment__content"},Object(c.createElement)(u.a,{context:f.EXPRESS_PAYMENTS}),Object(c.createElement)("p",null,Object(s.__)("In a hurry? Use one of our express checkout options:","woocommerce")),Object(c.createElement)(h.a,null)))),Object(c.createElement)("div",{className:"wc-block-components-express-payment-continue-rule wc-block-components-express-payment-continue-rule--checkout"},Object(s.__)("Or continue below","woocommerce")))};t.default=e=>{let{className:t}=e;const{cartNeedsPayment:n}=Object(o.a)();return n?Object(c.createElement)("div",{className:t},Object(c.createElement)(g,null)):null}}}]);
<div class="tygh-footer clearfix" id="tygh_footer">
    <div class="container-fluid ty-footer-grid">
        <div class="row-fluid ">
            <div class="span16 ty-footer-grid__full-width home-info-pnj">
                <div class="row-fluid ">
                    <div class="span16 ">
                        <div class="ty-wysiwyg-content">
                            <div class="span16 img-logo-footer"> 
                                <?php dynamic_sidebar( 'logo_footer' );?>                                          
                            </div>
                            <div class="ty-wysiwyg-content">
                                <div class="info-item span5 footer-store-grid information-pnj">
                                    <?php dynamic_sidebar( 'footer-widget-col-one' );?>
                                </div>
                                <div class="info-item span3 footer-store-grid footer-about-pnj">
                                    <?php dynamic_sidebar( 'footer-widget-col-two' );?>
                                </div>
                                <div class="info-item span4 footer-store-grid footer-servies">
                                    <?php dynamic_sidebar( 'footer-widget-col-three' );?>
                                </div>
                                    <div class="span4 footer-store-grid connection-pnj">
                                        <?php dynamic_sidebar( 'footer-widget-col-four' );?>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                    <div class="row-fluid ">
                        <div class="span16 ">
                            <div class="ty-wysiwyg-content">
                                <style>
                                   
                                </style>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
            
        </div>
        <!--tygh_container-->
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" data-no-defer></script>
<script data-no-defer>
if (!window.jQuery) {
    document.write(
        '<script type="text/javascript" src="https://www.pnj.com.vn/js/lib/jquery/jquery.min.js?ver=4.5.1" ><\/script>'
    );
}
</script>
<script type="text/javascript" src="https://cdn.pnj.io/assets/js/tygh/scripts-999e2d162930e8ad65d312eef8a7a73e.js">
</script>
<script type="text/javascript" src="//static.accesstrade.vn/js/trackingtag/tracking.min.js"></script>
<script type="text/javascript">
(function(_, $) {
    _.tr({
        cannot_buy: 'B???n kh??ng th??? mua c??c s???n ph???m v???i c??c t??y ch???n',
        no_products_selected: 'Ch??a c?? s???n ph???m so s??nh',
        error_no_items_selected: 'Kh??ng c?? m???c ???????c ch???n! Ph???i ch???n ??t nh???t m???t h???p ki???m ????? th???c hi???n h??nh ?????ng n??y.',
        delete_confirmation: 'B???n c?? ch???c b???n mu???n x??a c??c kho???n m???c ???? ch???n kh??ng?',
        text_out_of_stock: 'H???t h??ng',
        items: 's???n ph???m',
        text_required_group_product: 'Vui l??ng ch???n m???t s???n ph???m cho nh??m y??u c???u [group_name]',
        save: 'L??u',
        close: '????ng',
        notice: 'Th??ng b??o',
        warning: 'C???nh b??o',
        error: 'L???i',
        empty: 'Tr???ng',
        text_are_you_sure_to_proceed: 'B???n c?? ch???c b???n mu???n ti???p t???c kh??ng?',
        text_invalid_url: 'B???n ???? nh???p m???t URL kh??ng h???p l???',
        error_validator_email: '?????a ch??? email trong m???c <b>[field]<\/b> l?? kh??ng h???p l???.',
        error_validator_username: 'B???n vui l??ng nh???p h??? t??n c??ch nhau b???ng kho???ng tr???ng',
        error_validator_phone: 'S??? ??i???n tho???i trong m???c <b>[field]<\/b> l?? kh??ng h???p l???.',
        error_validator_integer: 'Gi?? tr??? c???a m???c <b>[field]<\/b> l?? kh??ng h???p l???. N?? ph???i l?? s??? nguy??n.',
        error_validator_multiple: 'M???c <b>[field]<\/b> kh??ng ch???a c??c t??y ch???n ???????c ch???n.',
        error_validator_password: 'M???t kh???u trong c??c m???c <b>[field2]<\/b> v?? <b>[field]<\/b> kh??ng kh???p.',
        error_validator_required: 'M???c <b>[field]<\/b> l?? b???t bu???c.',
        error_validator_zipcode: 'ZIP/M?? b??u ??i???n trong m???c <b>[field]<\/b> l?? kh??ng ch??nh x??c. ?????nh d???ng ????ng l?? [extra].',
        error_validator_message: 'Gi?? tr??? c???a m???c <b>[field]<\/b> l?? kh??ng h???p l???.',
        text_page_loading: '??ang t???i... Y??u c???u c???a b???n ??ang ???????c x??? l??, xin vui l??ng ch???.',
        error_ajax: 'R???t ti???c, m???t c??i g?? ???? ???? sai ([error]). Xin vui l??ng th??? l???i.',
        text_changes_not_saved: 'Thay ?????i c???a b???n ???? kh??ng ???????c l??u.',
        text_data_changed: 'Thay ?????i c???a b???n ch??a ???????c l??u. B???m OK ????? ti???p t???c, ho???c h???y b??? ????? ??? l???i tr??n trang hi???n t???i.',
        placing_order: '?????t ????n h??ng',
        file_browser: 'Duy???t t???p tin',
        browse: 'Duy???t...',
        more: 'Th??m',
        text_no_products_found: 'Kh??ng t??m th???y s???n ph???m',
        cookie_is_disabled: '????? c?? m???t tr???i nghi???m mua s???m ?????y ?????, xin vui l??ng <a href=\"http://www.wikihow.com/Enable-Cookies-in-Your-Internet-Web-Browser\" target=\"_blank\"> thi???t l???p tr??nh duy???t c???a b???n ????? ch???p nh???n cookie<\/a>'
    });
    $.extend(_, {
        index_script: 'index.php',
        changes_warning: 'N',
        currencies: {
            'primary': {
                'decimals_separator': '.',
                'thousands_separator': '.',
                'decimals': '0'
            },
            'secondary': {
                'decimals_separator': '.',
                'thousands_separator': '.',
                'decimals': '0',
                'coefficient': '1.00000'
            }
        },
        default_editor: 'ckeditor',
        default_previewer: 'magnific',
        current_path: '',
        current_location: 'https://www.pnj.com.vn',
        images_dir: 'https://www.pnj.com.vn/design/themes/responsive/media/images',
        notice_displaying_time: 0,
        cart_language: 'vi',
        language_direction: 'ltr',
        default_language: 'vi',
        cart_prices_w_taxes: false,
        theme_name: 'pnjrovski',
        regexp: [],
        current_url: 'https://www.pnj.com.vn/',
        current_host: 'www.pnj.com.vn',
        init_context: ''
    });
    $(document).ready(function() {
        $.runCart('C');
    }); /* CSRF form protection key */
    _.security_hash = '66effec656c473fd706d36112c66a589';
}(Tygh, Tygh.$));
</script>
<script type="text/javascript">
(function(_, $) {
    _.tr({
        lbl_title_buy_now: '_mp_buy_now_instalment_title',
        select_state: 'Ch???n T???nh/TP',
        select_district: 'Ch???n Qu???n/Huy???n',
        not_find_store: 'Khu v???c Qu?? kh??ch ???? ch???n t???m h???t h??ng.<\/br>Qu?? kh??ch vui l??ng ch???n khu v???c kh??c ho???c g???i ??i???n ?????n s??? hotline 1800545457 ????? ???????c t?? v???n.',
        product_filters_text: 'B??? l???c'
    });
}(Tygh, Tygh.$));
var lang_code = 'vi';
var product_onskin = '';
var dispatch = 'index.index';
var device = 'desktop';
var date_time_tracking = '2022-11-02';
var screenWidth = $(window).width();
var product_id = null;
var product_code = null;
var product_price = null;
var total = null;
var amount = null;
var is_reset_consultant_price = false;
var change_shipping_buy_now = false;
var is_click_page = false;
var is_load_account = false;
var is_load_recently_product = false;
var expires_cookie = '30';
var time_view_recently = '5';
var time_out_lazy_load_cat_menu = '3';
var prefix_credit_card_number =
    '356480,356481,403013,436361,436438,450255,455376,461137,461140,462842,462843,462844,466243,469672,469673,469676,472074,472075,486265,489516,489517,489518,510235,512341,512824,513094,513892,521341,526830,526887,545579,552332,55462,51309494,411153,41115380,41115399,4286950,4286957,530515,5151100,5151108,427126,402460,436545,436546,476636,523611,540392,537158,405082,437420,437421,450180,450181,546022,437841,445094,445093,411111';
var dataLayer = dataLayer || [];
if (dispatch == "products.view") {
    var product_id = '';
    var product_code = '';
    var product_price = '';
    var amount = '';
}
if (dispatch == "index.index") {
    var google_tag_params = {
        dynx_pagetype: 'home'
    };
} else if (dispatch == "categories.view") {
    var google_tag_params = {
        dynx_pagetype: 'categories'
    };
} else if (dispatch == "products.view") {
    var google_tag_params = {
        dynx_itemid: product_id,
        dynx_itemid2: product_code,
        dynx_pagetype: 'offerdetail',
        dynx_totalvalue: parseFloat(product_price)
    };
} else if (dispatch == "products.search") {
    var google_tag_params = {
        dynx_pagetype: 'searchresults'
    };
} else if (dispatch == "checkout.checkout") {
    var google_tag_params = {
        dynx_pagetype: 'conversionintent',
        dynx_totalvalue: parseFloat()
    };
} else if (dispatch == "checkout.complete") {
    var google_tag_params = {
        dynx_pagetype: 'conversion',
        dynx_totalvalue: parseFloat()
    };
} else {
    var google_tag_params = {
        dynx_pagetype: 'other'
    };
}

$(document).ready(function() {
    setTimeout(function() {
        if (dispatch != 'call_requests.complete' && dispatch != 'call_requests.complete') {
            loadScript('//www.googleadservices.com/pagead/conversion.js');
        }
    }, 1e4);
    var $des = $('.desktop .mp_product_promotion_description > p');
    if ($des.length > 0) {
        $des.dotdotdot();
        var api_des = $des.data('dotdotdot');
        api_des.truncate();
        api_des.watch();
    }
    if (dispatch != "products.search" && dispatch != "categories.view" && dispatch != "products.view" &&
        dispatch != "checkout.complete") {
        dataLayer.push({
            'event': 'remarketing'
        });
    }
});

$(document).ready(function() {
    setTimeout(function() {
        var i = 1;
        var data = new Array();
        $.each($('form.product_datalayer .mp_product_promotion_name'), function() {
            var data_obj = $(this).find('a');
            var product_sku = data_obj.attr('data-sku');
            var product_id = data_obj.attr('data-id');
            var product_price = data_obj.attr('data-price');
            var product_name = data_obj.attr('title');
            var product_category = data_obj.attr('data-category');
            var product_brand = data_obj.attr('data-brand');
            var item = {
                'name': product_name,
                'id': product_sku,
                'price': product_price,
                'brand': product_brand,
                'category': product_category,
                'variant': '',
                'list': 'Home',
                'position': i
            };
            i++;
            data.push(item);
        });
        $.each($('form.product_datalayer .product-container'), function() {
            var data_obj = $(this).find('a');
            var product_sku = data_obj.attr('data-sku');
            var product_id = data_obj.attr('data-id');
            var product_price = data_obj.attr('data-price');
            var product_name = data_obj.attr('title');
            var product_category = data_obj.attr('data-category');
            var product_brand = data_obj.attr('data-brand');
            var item = {
                'name': product_name,
                'id': product_sku,
                'price': product_price,
                'brand': product_brand,
                'category': product_category,
                'variant': '',
                'list': 'Home',
                'position': i
            };
            i++;
            data.push(item);
        });
        dataLayer.push({
            'ecommerce': {
                'currencyCode': 'VND',
                'impressions': [data]
            }
        });
    }, );
});

/* <![CDATA[ */
var google_conversion_id = 944546602;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true; /* ]]> */
</script>
<script type="text/javascript">
var _portalId = "1132";
var _propId = "564990245";
var _CDP_DELIVERY_TRIGGER = true;
(function() {
    var w = window;
    if (w.web_event) return;
    var a = window.web_event = function() {
        a.queue.push(arguments);
    }
    a.propId = _propId;
    a.track = a;
    a.queue = [];
    var e = document.createElement("script");
    e.type = "text/javascript", e.async = !0, e.src = "//st-a.cdp.asia/insight.js";
    var t = document.getElementsByTagName("script")[0];
    t.parentNode.insertBefore(e, t)
})();
</script>
<script type="text/javascript">
$("#suggest-search .m-inner-box-close").click(function() {
    $('#suggest-search').hide();
    check_overlay_search(false);
});
</script>
<script type="text/javascript">
AT.init({
    "campaign_id": 274,
    "is_reoccur": 1,
    "is_lastclick": 1
});
AT.track();
</script> <!-- Inline scripts -->
<script>
! function(w, d, t) {
    w.TiktokAnalyticsObject = t;
    var ttq = w[t] = w[t] || [];
    ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group",
        "enableCookie", "disableCookie"
    ], ttq.setAndDefer = function(t, e) {
        t[e] = function() {
            t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
        }
    };
    for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
    ttq.instance = function(t) {
        for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
        return e
    }, ttq.load = function(e, n) {
        var i = "https://analytics.tiktok.com/i18n/pixel/events.js";
        ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = i, ttq._t = ttq._t || {}, ttq._t[e] = +new Date, ttq
            ._o = ttq._o || {}, ttq._o[e] = n || {};
        var o = document.createElement("script");
        o.type = "text/javascript", o.async = !0, o.src = i + "?sdkid=" + e + "&lib=" + t;
        var a = document.getElementsByTagName("script")[0];
        a.parentNode.insertBefore(o, a)
    };

    ttq.load('C8PVH07V9S6N3MLDBPU0');
    ttq.page();
}(window, document, 'ttq');
</script>
// <script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "name": "Trang S???c Cao C???p N???c Jewelry",
    "alternateName": "Jewelry t??? h??o l?? c??ng ty ch??? t??c v?? b??n l??? trang s???c h??ng ?????u t???i ch??u ?? ??????Kh??ch h??ng l?? tr???ng t??m ??????Mua Online nhanh ch??ng, ????n gi???n ??????1800545457 (Mi???n Ph??)",
    "url": "https://jewelry-cms.com/"
}
// </script>
<script src="//rum-static.pingdom.net/pa-62ce88b10d7ce50011000faf.js" async></script>
<script async="null" src="https://www.googletagmanager.com/gtag/js?id=AW-747797356"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments)
}
gtag("js", new Date);
gtag("config", "AW-747797356");
gtag("config", "G-3S12QVTD78");
</script>
<script src="https://www.googleoptimize.com/optimize.js?id=OPT-NFM8DXC"></script>
<script src="https://track.pnj.com.vn/js/tracking.js"></script>
<script>
if (location.href.indexOf("#viet_danh_gia") != -1) {
    let idElement = $('div.ty-discussion-post__buttons.buttons-container > a').attr('data-ca-target-id');
    $('#' + idElement).ceDialog('open', {
        'width': 'auto'
    });
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    if ($('body').hasClass('desktop')) {
        $('.hot-categories-outer.owl-carousel').owlCarousel({
            loop: true,
            navigation: true,
            navigationText: ["", ""],
            pagination: false,
            items: 6
        })
    }
});
</script>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>
<script type="text/javascript">
/* $(document).ready(function () {$("#search_input").attr("placeholder", "Gi???m 5% nh???p m?? NGAYDOI88 t???i web");});*/
$(document).on('click', '.icon-main', function() {
    if ($(this).hasClass('open')) {
        $('.list-support').show();
        $('.icon-main.close-support').show();
        $('.icon-main.open').hide();
        var bottom = $('.icon-main.close-support').height();
        $('.let-call .list-support').css("bottom", bottom);
    } else {
        $('.list-support').hide();
        $('.icon-main.close-support').hide();
        $('.icon-main.open').show();
        $('.let-call .list-support').css("bottom", "-500px");
    }
});
setTimeout(function() {
    $('.v1-let-call').show();
}, 5000);
document.getElementById("v1_let_call").addEventListener("touchmove", function(event) {
    event.preventDefault();
    let xPosition = event.changedTouches[0].clientX;
    let yPosition = event.changedTouches[0].clientY;
    document.getElementById("v1_let_call").style.right = "unset";
    document.getElementById("v1_let_call").style.bottom = "unset";
    document.getElementById("v1_let_call").style.top = yPosition - 25 + "px";
    document.getElementById("v1_let_call").style.left = xPosition - 25 + "px";
});
</script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lf1V54aAAAAALskGUiFYjvEhRmclO0f001x-6fv"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6Lf1V54aAAAAALskGUiFYjvEhRmclO0f001x-6fv', {
        action: 'contact'
    }).then(function(token) {
        var recaptchaResponse1 = document.getElementById('recaptchaResponse1');
        recaptchaResponse1.value = token;
        var recaptchaResponse2 = document.getElementById('recaptchaResponse2');
        recaptchaResponse2.value = token;
    });
});
</script>
<script>
const SECURITY_HASH = '66effec656c473fd706d36112c66a589';
</script>
<script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script> 
<!--Single -->



<!--Single -->


 <?php wp_footer(); ?>
</body>


</html>
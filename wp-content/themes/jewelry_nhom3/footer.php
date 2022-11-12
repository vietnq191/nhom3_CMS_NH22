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
            <div id="stock"></div> <!-- Inline script moved to the bottom of the page -->
            <!-- Inline script moved to the bottom of the page -->
            <!--tygh_main_container-->
        </div>
        <!--tygh_container-->
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" data-no-defer=""></script>
    <script data-no-defer="">
        if (!window.jQuery) {
            document.write(
                '<script type="text/javascript" src="https://www.pnj.com.vn/js/lib/jquery/jquery.min.js?ver=4.5.1" ><\/script>'
                );
        }
    </script>
    <script type="text/javascript" src="https://cdn.pnj.io/assets/js/tygh/scripts-809471b5bc1d9f07a71f1f70fdbc766e.js">
    </script>
    <script type="text/javascript" src="//static.accesstrade.vn/js/trackingtag/tracking.min.js"></script>
    <script type="text/javascript">
        (function (_, $) {
            _.tr({
                cannot_buy: 'Bạn không thể mua các sản phẩm với các tùy chọn',
                no_products_selected: 'Chưa có sản phẩm so sánh',
                error_no_items_selected: 'Không có mục được chọn! Phải chọn ít nhất một hộp kiểm để thực hiện hành động này.',
                delete_confirmation: 'Bạn có chắc bạn muốn xóa các khoản mục đã chọn không?',
                text_out_of_stock: 'Hết hàng',
                items: 'sản phẩm',
                text_required_group_product: 'Vui lòng chọn một sản phẩm cho nhóm yêu cầu [group_name]',
                save: 'Lưu',
                close: 'Đóng',
                notice: 'Thông báo',
                warning: 'Cảnh báo',
                error: 'Lỗi',
                empty: 'Trống',
                text_are_you_sure_to_proceed: 'Bạn có chắc bạn muốn tiếp tục không?',
                text_invalid_url: 'Bạn đã nhập một URL không hợp lệ',
                error_validator_email: 'Địa chỉ email trong mục <b>[field]<\/b> là không hợp lệ.',
                error_validator_username: 'Bạn vui lòng nhập họ tên cách nhau bằng khoảng trắng',
                error_validator_phone: 'Số điện thoại trong mục <b>[field]<\/b> là không hợp lệ.',
                error_validator_integer: 'Giá trị của mục <b>[field]<\/b> là không hợp lệ. Nó phải là số nguyên.',
                error_validator_multiple: 'MỤc <b>[field]<\/b> không chứa các tùy chọn được chọn.',
                error_validator_password: 'Mật khẩu trong các mục <b>[field2]<\/b> và <b>[field]<\/b> không khớp.',
                error_validator_required: 'Mục <b>[field]<\/b> là bắt buộc.',
                error_validator_zipcode: 'ZIP/Mã bưu điện trong mục <b>[field]<\/b> là không chính xác. Định dạng đúng là [extra].',
                error_validator_message: 'Giá trị của mục <b>[field]<\/b> là không hợp lệ.',
                text_page_loading: 'Đang tải... Yêu cầu của bạn đang được xử lý, xin vui lòng chờ.',
                error_ajax: 'Rất tiếc, một cái gì đó đã sai ([error]). Xin vui lòng thử lại.',
                text_changes_not_saved: 'Thay đổi của bạn đã không được lưu.',
                text_data_changed: 'Thay đổi của bạn chưa được lưu. Bấm OK để tiếp tục, hoặc hủy bỏ để ở lại trên trang hiện tại.',
                placing_order: 'Đặt đơn hàng',
                file_browser: 'Duyệt tập tin',
                browse: 'Duyệt...',
                more: 'Thêm',
                text_no_products_found: 'Không tìm thấy sản phẩm',
                cookie_is_disabled: 'Để có một trải nghiệm mua sắm đầy đủ, xin vui lòng <a href=\"http://www.wikihow.com/Enable-Cookies-in-Your-Internet-Web-Browser\" target=\"_blank\"> thiết lập trình duyệt của bạn để chấp nhận cookie<\/a>'
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
            $(document).ready(function () {
                $.runCart('C');
            }); /* CSRF form protection key */
            _.security_hash = 'f572862c523429fb2900db69bb167cbd';
        }(Tygh, Tygh.$));
    </script>
    <script type="text/javascript">
        (function (_, $) {
            _.tr({
                lbl_title_buy_now: '_mp_buy_now_instalment_title',
                select_state: 'Chọn Tỉnh/TP',
                select_district: 'Chọn Quận/Huyện',
                not_find_store: 'Khu vực Quý khách đã chọn tạm hết hàng.<\/br>Quý khách vui lòng chọn khu vực khác hoặc gọi điện đến số hotline 1800545457 để được tư vấn.',
                product_filters_text: 'Bộ lọc'
            });
        }(Tygh, Tygh.$));
        var lang_code = 'vi';
        var product_onskin = '';
        var dispatch = 'index.index';
        var device = 'desktop';
        var date_time_tracking = '2022-11-11';
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

        $(document).ready(function () {
            setTimeout(function () {
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

        $(document).ready(function () {
            setTimeout(function () {
                var i = 1;
                var data = new Array();
                $.each($('form.product_datalayer .mp_product_promotion_name'), function () {
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
                $.each($('form.product_datalayer .product-container'), function () {
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
            }, 1e4);
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
        (function () {
            var w = window;
            if (w.web_event) return;
            var a = window.web_event = function () {
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
        $("#suggest-search .m-inner-box-close").click(function () {
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
        ! function (w, d, t) {
            w.TiktokAnalyticsObject = t;
            var ttq = w[t] = w[t] || [];
            ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias",
                "group", "enableCookie", "disableCookie"
            ], ttq.setAndDefer = function (t, e) {
                t[e] = function () {
                    t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                }
            };
            for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
            ttq.instance = function (t) {
                for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[
                n]);
                return e
            }, ttq.load = function (e, n) {
                var i = "https://analytics.tiktok.com/i18n/pixel/events.js";
                ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = i, ttq._t = ttq._t || {}, ttq._t[e] = +
                    new Date, ttq._o = ttq._o || {}, ttq._o[e] = n || {};
                var o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.src = i + "?sdkid=" + e + "&lib=" + t;
                var a = document.getElementsByTagName("script")[0];
                a.parentNode.insertBefore(o, a)
            };

            ttq.load('C8PVH07V9S6N3MLDBPU0');
            ttq.page();
        }(window, document, 'ttq');
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Trang Sức Cao Cấp PNJ | Cty Cổ Phần Vàng Bạc Đá Quý Phú Nhuận",
            "alternateName": "PNJ tự hào là công ty chế tác và bán lẻ trang sức hàng đầu tại châu Á ❤️Khách hàng là trọng tâm ✔️Mua Online nhanh chóng, đơn giản ☎️1800545457 (Miễn Phí)",
            "url": "https://www.pnj.com.vn/"
        }
    </script>
    <script src="//rum-static.pingdom.net/pa-62ce88b10d7ce50011000faf.js" async=""></script>
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
        $(document).ready(function () {
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
    <div id="app" class="zs"></div>
    <script type="text/javascript">
        /* $(document).ready(function () {$("#search_input").attr("placeholder", "Giảm 5% nhập mã NGAYDOI88 tại web");});*/
        $(document).on('click', '.icon-main', function () {
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
        setTimeout(function () {
            $('.v1-let-call').show();
        }, 5000);
        document.getElementById("v1_let_call").addEventListener("touchmove", function (event) {
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
        grecaptcha.ready(function () {
            grecaptcha.execute('6Lf1V54aAAAAALskGUiFYjvEhRmclO0f001x-6fv', {
                action: 'contact'
            }).then(function (token) {
                var recaptchaResponse1 = document.getElementById('recaptchaResponse1');
                recaptchaResponse1.value = token;
                var recaptchaResponse2 = document.getElementById('recaptchaResponse2');
                recaptchaResponse2.value = token;
            });
        });
    </script>
    <script>
        const SECURITY_HASH = 'f572862c523429fb2900db69bb167cbd';
    </script>
    <script>
        const PAGE_ID = 0;
    </script> <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-messaging.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/firebase.js"></script>
    <div class="hidden" title="undefined" id="null">
        <!--null-->
    </div>
    <div>
        <div class="grecaptcha-badge" data-style="bottomright"
            style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
            <div class="grecaptcha-logo"><iframe title="reCAPTCHA"
                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lf1V54aAAAAALskGUiFYjvEhRmclO0f001x-6fv&amp;co=aHR0cHM6Ly93d3cucG5qLmNvbS52bjo0NDM.&amp;hl=vi&amp;v=jF-AgDWy8ih0GfLx4Semh9UK&amp;size=invisible&amp;cb=6cf4xyq6mvhk"
                    width="256" height="60" role="presentation" name="a-n0d6ohm1k77u" frameborder="0" scrolling="no"
                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
            </div>
            <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response"
                class="g-recaptcha-response"
                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
        </div><iframe style="display: none;"></iframe>
    </div>
    <gdiv class="ginger-extension-writer" style="display: none;">
        <gdiv class="ginger-extension-writer-frame"><iframe
                src="chrome-extension://kdfieneakcjfaiglcfcgkidlkmlijjnh/writer/index.html"></iframe></gdiv>
    </gdiv>
    <gdiv id="ginger-floatingG-container" style="position: absolute; top: 0px; left: 0px;">
        <gdiv class="ginger-floatingG ginger-floatingG-closed" style="display: none;">
            <gdiv class="ginger-floatingG-disabled-main">
                <gdiv class="ginger-floatingG-bar-tool-tooltip">Enable Ginger</gdiv>
            </gdiv>
            <gdiv class="ginger-floatingG-offline-main">
                <gdiv class="ginger-floatingG-bar-tool-tooltip"><em>Cannot connect to Ginger</em> Check your internet
                    connection<br> or reload the browser</gdiv>
            </gdiv>
            <gdiv class="ginger-floatingG-enabled-main">
                <gdiv class="ginger-floatingG-bar">
                    <gdiv class="ginger-floatingG-bar-tool ginger-floatingG-bar-tool-disable">
                        <ga></ga>
                        <gdiv class="ginger-floatingG-bar-tool-tooltip">Disable in this text field</gdiv>
                    </gdiv>
                    <gdiv
                        class="ginger-floatingG-bar-tool ginger-floatingG-bar-tool-rephrase ginger-floatingG-bar-tool-rephrase_big-circle">
                        <ga class="ginger-floatingG-bar-tool-rephrase__btn"
                            id="ginger__floatingG-bar-tool-rephrase__btn">Rephrase</ga>
                        <gdiv class="ginger-floatingG-bar-tool-tooltip ginger-floatingG-bar-tool-tooltip_rephrase">
                            Rephrase current sentence</gdiv>
                    </gdiv>
                    <gdiv class="ginger-floatingG-bar-tool ginger-floatingG-bar-tool-mistakes">
                        <ga><span class="ginger-floatingG-bar-tool-mistakes-count"></span></ga>
                        <gdiv class="ginger-floatingG-bar-tool-tooltip">Edit in Ginger</gdiv>
                    </gdiv>
                </gdiv>
            </gdiv>
            <gdiv class="ginger-floatingG-contentPopup">
                <gdiv class="ginger-floatingG-contentPopup-wrap">
                    <ga class="ginger-floatingG-contentPopup-close">×</ga>
                    <gdiv class="ginger-floatingG-contentPopup-frame"><iframe scrolling="no"></iframe></gdiv>
                </gdiv>
            </gdiv>
        </gdiv>
    </gdiv>
    <script type="text/javascript" id="">
        "undefined" === typeof fbq && (! function (b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function () {
                    a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
                }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e
                .createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode
                .insertBefore(c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js"), fbq("init",
            "345695236274873"), fbq("init", "525617047969670"), fbq("track", "PageView"));
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=345695236274873&amp;ev=PageView&amp;noscript=1">
    </noscript>

    <script type="text/javascript" id="">
        ! function (b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function () {
                    a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
                }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e
                .createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode
                .insertBefore(c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "525617047969670");
        fbq("track", "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=525617047969670&amp;ev=PageView&amp;noscript=1"></noscript>
    <div style="display: none; visibility: hidden;">
        <script async="null" src="https://www.googletagmanager.com/gtag/js?id=AW-747797356"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments)
            }
            gtag("js", new Date);
            gtag("config", "AW-747797356");
        </script>
    </div>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "PNJ",
            "url": "https://www.pnj.com.vn",
            "logo": "https://www.pnj.com.vn/images/thumbnails/142/62/logo/pnj.com.vn.png",
            "email": "pnj@pnj.com.vn",
            "sameAs": [
                "https://www.wikidata.org/wiki/Q61129183",
                "https://vi.wikipedia.org/wiki/PNJ",
                "https://www.facebook.com/PNJ.COM.VN",
                "https://www.linkedin.com/company/pnj/",
                "https://www.instagram.com/pnj_jewelry/",
                "https://www.youtube.com/user/PhuNhuanJewelry",
                "https://www.pinterest.com/pnj_jewelry/"
            ],
            "contactPoint": [{
                    "@type": "ContactPoint",
                    "contactType": "customer service",
                    "email": "pnj@pnj.com.vn",
                    "url": "https://www.pnj.com.vn"
                },
                {
                    "@type": "ContactPoint",
                    "telephone": "1800545457",
                    "contactType": "customer service"
                }
            ]
        }
    </script>
    <meta name="p:domain_verify" content="cb99f5e4a5406fbaecd53fa134d64e91">
    <script type="text/javascript" id="">
        (function (a, e, b, f, g, c, d) {
            a[b] = a[b] || function () {
                (a[b].q = a[b].q || []).push(arguments)
            };
            c = e.createElement(f);
            c.async = 1;
            c.src = "https://www.clarity.ms/tag/" + g;
            d = e.getElementsByTagName(f)[0];
            d.parentNode.insertBefore(c, d)
        })(window, document, "clarity", "script", "a7yrsoum3d");
    </script>
    <script type="text/javascript" id="">
        ! function (d, g, e) {
            d.TiktokAnalyticsObject = e;
            var a = d[e] = d[e] || [];
            a.methods = "page track identify instances debug on off once ready alias group enableCookie disableCookie"
                .split(" ");
            a.setAndDefer = function (b, c) {
                b[c] = function () {
                    b.push([c].concat(Array.prototype.slice.call(arguments, 0)))
                }
            };
            for (d = 0; d < a.methods.length; d++) a.setAndDefer(a, a.methods[d]);
            a.instance = function (b) {
                b = a._i[b] || [];
                for (var c = 0; c < a.methods.length; c++) a.setAndDefer(b, a.methods[c]);
                return b
            };
            a.load = function (b, c) {
                var f = "https://analytics.tiktok.com/i18n/pixel/events.js";
                a._i = a._i || {};
                a._i[b] = [];
                a._i[b]._u = f;
                a._t = a._t || {};
                a._t[b] = +new Date;
                a._o = a._o || {};
                a._o[b] = c || {};
                c = document.createElement("script");
                c.type = "text/javascript";
                c.async = !0;
                c.src = f + "?sdkid\x3d" + b + "\x26lib\x3d" + e;
                b = document.getElementsByTagName("script")[0];
                b.parentNode.insertBefore(c, b)
            };
            a.load("C8TT9MLV1H48C4QEAPD0");
            a.page()
        }(window, document, "ttq");
    </script>
    <script type="text/javascript" id="">
        if (-1 < window.location.href.indexOf("checkout.complete")) {
            var totalPrice = 0,
                transactionId = "";
            totalPrice = document.querySelector(".item-line.total").innerText.replace(/[^0-9]/g, "");
            transactionId = document.querySelector(".info-cart \x3e span").innerText.replace(
                "TH\u00d4NG TIN \u0110\u01a0N H\u00c0NG ", "");
            dataLayer.push({
                event: "purchase",
                transactionValue: parseFloat(totalPrice),
                transactionId: transactionId
            })
        };
    </script>
      <script type='text/javascript' src='<?php bloginfo('template_directory') ?>/script.js'></script>
      <?php wp_footer(); ?>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration><iframe
    id="__JSBridgeIframe_1.0__" title="jsbridge___JSBridgeIframe_1.0__" style="display: none;"></iframe><iframe
    id="__JSBridgeIframe_SetResult_1.0__" title="jsbridge___JSBridgeIframe_SetResult_1.0__"
    style="display: none;"></iframe><iframe id="__JSBridgeIframe__" title="jsbridge___JSBridgeIframe__"
    style="display: none;"></iframe><iframe id="__JSBridgeIframe_SetResult__"
    title="jsbridge___JSBridgeIframe_SetResult__" style="display: none;"></iframe>

</html>
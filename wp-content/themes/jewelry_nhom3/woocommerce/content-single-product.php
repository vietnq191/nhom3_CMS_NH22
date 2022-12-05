<?php 
$product = wc_get_product($post);
?>
 
    <section style="padding:0" class="product container">

        <div class="product-content row" style="padding-bottom: 40px;margin-left:40px; width: 1075px;">
          <div id="magnifying_area" class="product-content-left col-md-6">
              <img id="magnifying_img" src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="" />
          </div>
          <div class="product-content-right col-md-6">
            <div class="product-content-right-product-name row">
              <h1>  <?php the_title(); ?></h1>
              <span class="col-md-4">Mã: <?php echo $substr = substr(get_the_title(), -11); ?></span>
              <span class="col-md-4" style="text-align:center"><i class="ty-stars__icon ty-icon-star" style="color: orange;" aria-hidden="true"></i>      <?php $rating  = $product->get_average_rating(); ?> <?php echo floor($rating) ?> (<?php echo get_comments_number(); ?>) </span>
              <span class="col-md-4" style="text-align:right"> <?php echo $product->total_sales ?>  đã bán</span>
            </div>
            <div class="product-content-right-product-price">
              <p> <?php echo $price = number_format($product->get_price(), 0, ',' , '.')  ?><span> đ</span></p>
            </div>
              <?php if ($product->get_attribute('size')) { ?>
                    
              <form>
                     <div class="product-content-right-product-size">
             <p>Chọn chiều dài (cm):</p>
             <div class="size">
                <?php
                    $attributes = $product->get_attributes('size');
                    $count_first = 0;
                    foreach ( $attributes as $attribute ):
                        $terms = $attribute->get_terms("pa_size");
                        foreach ( $terms as $term ) { ?>
                        <span style="padding-right:10px"> 
                        <input type="radio" id="choose-size-<?php echo $term->slug; ?>" name="choose-size" <?php if($count_first == 0) echo "checked" ?> />
                        <label class="checkmark" for="choose-size-<?php echo $term->slug; ?>"><?php echo $term->name; ?></label>
                        </span>
                    <?php
                        $count_first++;
                    }
                    endforeach;
                    ?>
              </div>
            </div>
               <?php } ?>

            <div class="product-content-right-product-voucher">
              <div class="voucher">
                <p >Ưu đãi: </p>
              </div>
              <span ><i class="fa fa-check" aria-hidden="true"></i> Nhập mã DEALSOC giảm đến 999k khi thanh toán VNPAY-QR</span> </br>
              <span><i class="fa fa-check" aria-hidden="true"></i> Giảm 100k với đơn từ 3.000.000 khi thanh toán ngay qua Payoo bằng thẻ Quốc Tế. </span>
            </div>
            <div class="product-content-right-product-button">
                <a href="<?php echo esc_url(home_url( '/' ));?>cart/?add-to-cart=<?php the_ID();?>">
                <span class="buynow">THÊM VÀO GIỎ HÀNG</span>
                <span class="freeship">Miễn phí giao hàng tận nhà hoặc nhận tại cửa hàng</span>
                </a>
            </div>
              </form>
            <div class="product-content-right-bottom">
              Tư vấn ngay: <span style="color: #ad2a36;font-weight: bold;">123 456 789</span>  (miễn phí)
            </div>
            <div class="product-content-right-promo">
              <span><i class="fa fa-check" aria-hidden="true"> </i> Giá sản phẩm thay đổi tuỳ trọng lượng vàng và đá</span> </br>
              <span> <i class="fa fa-check" aria-hidden="true"></i> Đổi sản phẩm trong 48h tại hệ thống cửa hàng Nọc Jewelry</span> </br>
              <span><i class="fa fa-check" aria-hidden="true"></i> Miễn phí giao nhanh Toàn Quốc 1-7 ngày</span>
            </div>
    

          </div>
        </div>
  
    </section>
<script>
 var magnifying_area = document.getElementById("magnifying_area");
 var magnifying_img = document.getElementById("magnifying_img");
 magnifying_area.addEventListener("mousemove",function(event){
     clientX = event.clientX-magnifying_area.offsetLeft
     clientY = event.clientY-magnifying_area.offsetTop
     mWidth = magnifying_area.offsetWidth
     mHeight = magnifying_area.offsetHeight
     clientX=clientX/mWidth*100
     clientY=clientY/mHeight*100
     magnifying_img.style.transform = 'translate(-'+clientX+'%, -'+clientY+'%) scale(1.7)'
 })
  magnifying_area.addEventListener("mouseleave",function(){
     magnifying_img.style.transform = 'translate(-50%,-50%) scale(1)'
 })
</script>
<!--Thong so va mo ta-->
<div class="tygh-content clearfix">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span16">

      </div>
    </div>
    <div class="row-fluid">

        <div class="wysiwyg-content">
          <div class="post-detail-content">
            <div class="pages-pnj">
              <div
                class="myAccordion mp-outer-popup mp-product-description-general-v2 mp-gold mp-column-1 mpcolumn"
                id="mp-product-description-general-v2">
                <div class="item">
                  <div class="question">
                    <span class=""></span>
                    <h2>Thông số và Mô tả</h2>
                  </div>
                  <div class="answer">
                    <div class="layout-content">
                      <div style="border-top:1px solid rgb(0, 51, 104, 0.4); " class="panel_sub">
                        <?php echo $product->description ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Inline script moved to the bottom of the page -->
        </div>
      <div class="row-fluid">
        <div class="span16">
          <div class="ty-wysiwyg-content">
           
          </div>
          <div class="ty-wysiwyg-content">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Binh luan-->
<div class="tygh-content clearfix">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span16">

      </div>
    </div>
    <div class="row-fluid">
        <div class="wysiwyg-content">
          <div class="post-detail-content">
            <div class="pages-pnj">
              <div
                class="myAccordion mp-outer-popup mp-product-description-general-v2 mp-gold mp-column-1 mpcolumn"
                id="mp-product-description-general-v2">
                <div class="item">
                  <div class="question">
                    <span class=""></span>
                    <h2>Bình luận</h2>
                  </div>
                  <div class="answer">
                    <div class="layout-content"   >
                      <div style="border-top:1px solid rgb(0, 51, 104, 0.4);" class="panel_sub" >
                        <?php
if(comments_open( ) || get_comments_number( )){
    comments_template( );}?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Inline script moved to the bottom of the page -->
        </div>
      <div class="row-fluid">
        <div class="span16">
          <div class="ty-wysiwyg-content">
           
          </div>
          <div class="ty-wysiwyg-content">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Dich vu sau mua-->
<div class="tygh-content clearfix">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span16">

      </div>
    </div>
    <div class="row-fluid">
        <div class="wysiwyg-content">
          <div class="post-detail-content">
            <div class="pages-pnj">
              <div
                class="myAccordion mp-outer-popup mp-product-description-general-v2 mp-gold mp-column-1 mpcolumn"
                id="mp-product-description-general-v2">
                <div class="item">
                  <div class="question">
                    <span class=""></span>
                    <h2>Dịch vụ sau mua</h2>
                  </div>
                  <div class="answer">
                    <div class="layout-content">
                      <div style="border-top:1px solid rgb(0, 51, 104, 0.4);" class="panel_sub">
<div class="mp-product-bhtd-detail"> <div class="group-item"> <h3 id="expand-bh-16" class="main-title"> <span class="text">Bảo hành miễn phí 6 tháng</span> </h3> <div class="des"> Bảo hành 6 tháng lỗi kỹ thuật, nước xi. </div> </div> <div class="group-item"> <h3 id="expand-bh-17" class="main-title"> <span class="text">Miễn phí siêu âm và đánh bóng bằng máy chuyên dụng trọn đời</span> </h3> <div class="des"> <div class="group-text"> <ul> <li>Đối với sản phẩm bị oxy hóa, xuống màu, sẽ được siêu âm làm sạch bằng máy chuyên dụng (siêu âm, không xi) miễn phí trọn đời tại cửa hàng.&ZeroWidthSpace;</li> <li>Miễn phí đánh bóng trọn đời . Nhẫn cưới sẽ được bảo hành, làm mới, đánh bóng, xi miễn phí trọn đời.&ZeroWidthSpace;</li> </ul> </div> </div> </div> <div class="group-item"> <h3 id="expand-bh-19" class="main-title"> <span class="text">Miễn phí thay đá CZ và đá tổng hợp</span> </h3> <div class="des"> <div class="group-text"> <p>Miễn phí thay đá CZ và đá tổng hợp trong suốt thời gian bảo hành.&ZeroWidthSpace;&ZeroWidthSpace;</p> <p>* Không áp dụng bảo hành cho các trường hợp sau:&ZeroWidthSpace;</p> <ul> <p>- Dây chuyền, lắc chế tác bị đứt gãy; bị biến dạng hoặc hư hỏng nặng.&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;</p> <p>- Khách hàng cung cấp thông tin truy lục hóa đơn không chính xác.&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;</p> </ul> </div> <div class="group-text italic-text"> <p>Lưu ý:</p> <ul> <li>Nọc Jewelry bảo hành các sản phẩm thuộc hệ thống cửa hàng kênh lẻ và online của Nọc Jewelry. &ZeroWidthSpace;&ZeroWidthSpace;</li> <li>Chế độ bảo hành sản phẩm có thể thay đổi theo chính sách của Nọc Jewelry đối với các dòng hàng và chương trình khuyến mãi vào từng thời điểm.&ZeroWidthSpace;</li> </ul> </div> </div> </div> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Inline script moved to the bottom of the page -->
        </div>
      <div class="row-fluid">
        <div class="span16">
          <div class="ty-wysiwyg-content">
           
          </div>
          <div class="ty-wysiwyg-content">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Cau hoi thuong gap-->
<div class="tygh-content clearfix">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span16">

      </div>
    </div>
    <div class="row-fluid">
        <div class="wysiwyg-content">
          <div class="post-detail-content">
            <div class="pages-pnj">
              <div
                class="myAccordion mp-outer-popup mp-product-description-general-v2 mp-gold mp-column-1 mpcolumn"
                id="mp-product-description-general-v2">
                <div class="item">
                  <div class="question">
                    <span class=""></span>
                    <h2>Câu hỏi thường gặp</h2>
                  </div>
                  <div class="answer">
                    <div class="layout-content">
                         <div style="border-top:1px solid rgb(0, 51, 104, 0.4);" class="panel_sub">
   <div id="content_questions" class="ty-wysiwyg-content content-questions active"> <div class="question-list-outer"> 
   <div class=""> <h3>Mua Online có ưu đãi gì đặc biệt cho tôi?</h3> <p>Nọc Jewelry mang đến nhiều trải nghiệm mua sắm hiện đại khi mua Online:<br> - Ưu đãi độc quyền Online với hình thức thanh toán đa dạng.<br> - Đặt giữ hàng Online, nhận tại cửa hàng.<br> - Miễn phí giao hàng từ 1-7 ngày trên toàn quốc và giao hàng trong 3 giờ tại một số khu vực trung tâm với các sản phẩm có gắn nhãn <img class="img-lazyload pnj4h-deliver" src="https://jewelry-cms.com/wp-content/uploads/2022/11/1.png" style="max-width:40px;"><br> - Trả góp 0% lãi suất với đơn hàng từ 3 triệu.<br> - Làm sạch trang sức trọn đời, khắc tên miễn phí theo yêu cầu (tùy kết cấu sản phẩm) và chính sách bảo hành, đổi trả dễ dàng tại hệ thống Nọc Jewelry trên toàn quốc.<br> Nọc jewelry hân hạnh phục vụ quý khách qua Hotline <a href="tel:123 456 789" style="font-weight:600;color:#2e74b5;">123 456 789</a> (08:00-21:00, miễn phí cuộc gọi).</p> </div> <div class=""> <h3>Nọc Jewelry có thu mua lại trang sức không?</h3> <p>Nọc Jewelry có dịch vụ thu đổi trang sức Nọc Jewelry tại hệ thống cửa hàng trên toàn quốc. Chi tiết xem tại: <a href="https://jewelry-cms.com/dich-vu-khach-hang/chinh-sach-bao-hang-thu-doi/" target="_blank"> https://jewelry-cms.com/dich-vu-khach-hang/chinh-sach-bao-hang-thu-doi/</a></p> </div> <div class=""> <h3>Nếu đặt mua Online mà sản phẩm không đeo vừa thì có được đổi không?</h3> <p>Nọc jewelry có chính sách thu đổi trang sức vàng trong vòng 48 giờ, đổi ni/ size trang sức bạc trong vòng 72 giờ. Quý khách sẽ được áp dụng đổi trên hệ thống Nọc Jewelry toàn quốc.</p> </div> <div class=""> <h3>Sản phẩm đeo lâu có xỉn màu không, bảo hành như thế nào?</h3> <p>Do tính chất hóa học, sản phẩm có khả năng oxy hóa, xuống màu. Nọc jewelry có chính sách bảo hành miễn phí về lỗi kỹ thuật, nước xi:</p> <p>- Trang sức vàng: 6 tháng.</p> <p>- Trang sức bạc: 3 tháng.</p> <p>Ngoài ra, Nọc jewelry cũng cung cấp dịch vụ siêu âm làm sạch bằng máy chuyên dụng (siêu âm, không xi) miễn phí trọn đời tại hệ thống cửa hàng.</p> </div> <div class=""> <h3>Tôi muốn xem trực tiếp, cửa hàng nào còn hàng?</h3> <p>Với hệ thống cửa hàng trải rộng khắp toàn quốc, quý khách vui lòng liên hệ Hotline <a href="tel:123456789" style="font-weight:600;color:#2e74b5;">123 456 789</a> (08:00-21:00, miễn phí cuộc gọi) để kiểm tra cửa hàng còn hàng và tư vấn chương trình khuyến mãi Online trước khi đến cửa hàng.</p> </div> <div class="btn-fqa"> <a href="https://jewelry-cms.com/dich-vu-khach-hang/cau-hoi-thuong-gap/" target="_blank">Câu hỏi khác</a> </div> </div> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Inline script moved to the bottom of the page -->
        </div>
      <div class="row-fluid">
        <div class="span16">
          <div class="ty-wysiwyg-content">
           
          </div>
          <div class="ty-wysiwyg-content">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
p {
    margin:0 !important;
}
    .product {
    padding:100px 0;
}
.product-top {
    margin-bottom: 30px;
}
.product-top p {
      font-family: Roboto,sans-serif;
    margin:0 12px;
    font-size: 12px;
}
.product-content-left {
    width: 530px;
    height:530px;
    overflow:hidden;
    border: 3px solid #fff;
    position:relative;
     background-image: linear-gradient(#fdfdfd, #f7f7f7);
}
.product-content-left img{
    max-width:100%;
    min-width:100%;
    position:absolute;
    left:50%;
    top:50%;
    transform:translate(-50%,-50%);
    /*background-position: center;*/
    /*transition: 1s;*/
    cursor: zoom-in;
}

.product-content-right {

    padding-right: 10px;
    
}
.product-content-left-big-img {
    background-color: #fbfbfb;
    width: 50%;
    padding-right:20px
}
.product-content-left-big-img img {
    max-width: 100%;
    height: auto;
    vertical-align: middle;
    font-size: 0;
    width: 485px;
}

.product-content-right {
    width: 50%;
    padding-left:20px
}

.product-content-right-product-name h1 {
        font-family: Roboto,sans-serif;
    font-size: 18px;
    padding-left: 14px;
}
.product-content-right-product-name p {
    font-size: 13px;
}
.product-content-right-product-name span {
    font-size: 13px;
}
.product-content-right-product-price {

    font-size: 18px;
    color: #003468;
font-weight: bold;
    font-family: Roboto,sans-serif;
font-weight: 400;
padding-top: 5px;
}

.product-content-right-product-price p span{ 
        font-size: 18px;
    color: #003468;
font-weight: bold;
    font-family: Roboto,sans-serif;
font-weight: 400;
padding-top: 5px;
}

.product-content-right-product-size p {
    font-size: 13px;
    color: #4c4c4c;
}
.product-content-right-product-size input {
  display: none;
}
.checkmark {
display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: 0;
    width: 24px;
    height: 27px;
    border-radius: 5px;
    border: 1px solid #4c4c4c;
    font-size: 11px;
    cursor: pointer;
}

input[type="radio"]:checked + label {
    color: #fff;
    background: #003468;
    border-color: #003468;
    font-weight: 600;
}

.product-content-right-product-voucher{
    margin-top: 15px;
    border-radius: 5px;
    border: 1px solid #003468;
    padding: 0 10px 10px;
    box-sizing: border-box;
}
.voucher{
    background-color: #f2f2f2;
    margin: 0 -10px;
    border-radius: 5px;
    padding: 2px 6px;
    justify-content: center;
    font-family: Roboto,sans-serif;
}
.product-content-right-product-voucher p{
    font-size: 14px;
}
.product-content-right-product-voucher p span{
    font-size: 14px;
}

.product-content-right-product-button a{
    display:block;
margin: 20px 0 12px;
background: #ad2a36 ;
color: #fff;
border-radius: 5px;
width: 100%;
font-size: 15px;
margin-bottom: 10px;
border: none;
    box-sizing: border-box;
    text-align:center;
    text-decoration: none
}

.buynow {

    font-size: 13px;
    font-weight: 700;
}
.freeship {
    font-size: 11px;
    text-transform: none;
    font-style: italic;
    position: relative;
    top: -2px;
    display: inline-block;
    width: 100%;
    font-weight: 400;
    line-height: initial;
}

.product-content-right-product-icon-item {
    display: flex;
    margin-right: 12px;
    justify-content: center ;
    align-items: center;
}
.fa-check{
    font-size: 12px;
    margin-right: 6px
}
.product-content-right-bottom{
    text-align: center;
    margin-top: 10px;
    font-weight: 400;
    margin-bottom: 10px;
    color: #4c4c4c;
    font-size: 14px;
}
.product-content-right-promo p{
    color: #4c4c4c;
    font-weight: 400;
    font-size: 14px;
    margin: 3px;
    padding: 0;
    
}
.fa-check{
    background-color: #003468;
    color: white;
    border-radius:50% ;
    font-size: 12px;
}
span {
    transform: none !important;
}
</style>
 <style>
 .panel_sub{
     padding-top:10px;
 }
              .general .wysiwyg-content .params-new.mp-detail-blog {
                display: none;
              }
#mp-product-description-general-v2 {
    margin: 0;
    padding:0;
}

              .general
                #mp-product-description-general-v2.myAccordion
                .question
                .icon {
                    
              }

              .general #mp-product-description-general-v2.myAccordion .answer {
            
              }

              .general#blog .post-detail-content ul,
              .general#mp_video .post-detail-content ul {
                padding-left: 20px;
                box-sizing: border-box;
              }

              .general .pages-pnj {
                max-width: 800px;
                margin: auto;
              }

              .general#blog .post-detail-content ul li,
              .general#mp_video .post-detail-content ul li {
                list-style: disc;
              }

              .layout-content .note {
                font-style: italic;
              }

              .general#blog .post-detail-content .pages-pnj .text.giaidoan {
                text-align: center;
                color: #003368 !important;
                font-weight: 600;
              }

              .general#blog #mp-product-description-general-v2 p,
              .general#blog .post-detail-content .pages-pnj p.text-content,
              .general#blog .post-detail-content .pages-pnj p.text-content em,
              .general#mp_video #mp-product-description-general-v2 p {
                font-size: 15px;
              }

              .general#blog .post-detail-content .pages-pnj p.accordion_sub,
              .general#blog .post-detail-content .pages-pnj p.cauhoi {
                font-weight: 600 !important;
                cursor: pointer;
                transition: 0.4s;
                padding-left: 10px;
                padding-right: 10px;
              }

              .general#blog .post-detail-content .pages-pnj .panel_sub {
                padding: 0 10px;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
              }

              .general#blog.desktop
                .post-detail-content
                .pages-pnj
                p.image
                img {
                max-width: 500px;
              }

              #mp-product-description-general-v2 p {
                text-align: left;
              }

              #mp-product-description-general-v2 h3,
              #mp-product-description-general-v2 h4 {
                font-weight: 600;
                margin-bottom: 0;
              }

              .general#blog .post-detail-content .pages-pnj *,
              .general#mp_video .post-detail-content .pages-pnj * {
                line-height: 20px;
              }

              #mp-product-description-general-v2 a,
              .general#blog .pages-pnj p a,
              #mp-product-description-general-v2 p a {
                color: #337ab7 !important;
                font-weight: 400;
              }

              .general.desktop .wysiwyg-content .table {
                /*max-width:445px!important;*/
                overflow-x: auto;
                margin: auto;
              }

              .general#blog.desktop .post-title,
              .general#mp_video .post-title {
                font-size: 26px;
                text-align: center;
                font-weight: bold;
                color: #0f3564;
              }

              .general
                #mp-product-description-general-v2.myAccordion
                .question-child {
                cursor: pointer;
              }

              .general
                #mp-product-description-general-v2.myAccordion
                .answer
                .layout-content {
                max-width: none;
                padding: 0 10px;
                
              }
              .answer{
                  width:100%;
              }

              .general .ty-tygh h4.title {
                font-weight: bold;
              }

              .general#blog.desktop
                #mp-product-description-general-v2
                .mp-images,
              #mp-product-description-general-v2 img {
                max-width: 70%;
              }

              .general
                #mp-product-description-general-v2.myAccordion
                .expanded.question-child:before {
                display: inline-block;
                content: "-";
                width: 15px;
              }

              .general
                #mp-product-description-general-v2.myAccordion
                .question-child:before {
                display: inline-block;
                content: "+";
                width: 15px;
              }

              .general#blog #mod-sp-customer #customerCont .left {
                max-width: none;
                float: none;
              }

              .general#blog .pages-pnj .question h2.special {
                filter: hue-rotate(190deg) contrast(152%);
                -webkit-filter: hue-rotate(190deg) contrast(152%);
                -moz-filter: hue-rotate(190deg) contrast(152%);
                
         
              }

              .general#blog .ty-mainbox-container h1.ty-mainbox-title {
                font-size: 30px;
                color: #0f3564;
                text-align: center;
                position: relative;
                text-transform: uppercase;
                border-bottom: none;
                font-weight: bold;
              }

              .general #mp-product-description-general-v2.myAccordion .item {
                border: 1px solid rgb(0, 51, 104, 0.4);
                border-radius: 10px;
              }

              .general
                #mp-product-description-general-v2.myAccordion
                .question {
                background: transparent;
                display: block;
                margin: 0 5px;
              }

             .post-detail-content .pages-pnj .question h2 {
                font-size: 16px;
                display: block;
                position: relative;
                text-transform: none;
                padding: 0 15px;
                text-align: left;
                position: relative;
                box-sizing: border-box;
                font-weight: bold;
                margin: 12px 0 12px;
                color: #4a4a4a !important;
                cursor: pointer;
              }

              .general#blog .post-detail-content .pages-pnj .question.expanded {
                border-bottom: 1px solid rgb(0, 51, 104, 0.4);
              }

              .general#blog.desktop
                .post-detail-content
                .pages-pnj
                .question
                h2 {
                padding-right: 46px;
              }

              .general #mod-sp-customer #customerCont .the-step ul {
                list-style: disc;
                padding-left: 25px;
              }

              .general #mod-sp-customer #customerCont .text-step ul li {
                font-weight: normal;
              }

              .general #mod-sp-customer #customerCont .the-step table td ul {
                text-align: left;
              }

              .general#blog
                #mp-product-description-general-v2.myAccordion
                .question
                .icon {
                display: inline-block;
                background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMC43MDciIGhlaWdodD0iMTAuNzA3IiB2aWV3Qm94PSIwIDAgMjAuNzA3IDEwLjcwNyI+CiAgPGcgaWQ9Ikdyb3VwXzEyMyIgZGF0YS1uYW1lPSJHcm91cCAxMjMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUuMzU0IDAuMzU0KSI+CiAgICA8bGluZSBpZD0iTGluZV8zNyIgZGF0YS1uYW1lPSJMaW5lIDM3IiB4Mj0iMTAiIHkyPSIxMCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTUpIiBmaWxsPSJub25lIiBzdHJva2U9IiMwMDM0NjgiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLXdpZHRoPSIwLjUiLz4KICAgIDxsaW5lIGlkPSJMaW5lXzM4IiBkYXRhLW5hbWU9IkxpbmUgMzgiIHkxPSIxMCIgeDI9IjEwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAzNDY4IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS13aWR0aD0iMC41Ii8+CiAgPC9nPgo8L3N2Zz4K) !important;
                background-repeat: no-repeat;
                background-position: 0px 0px;
                width: 21px;
                height: 12px;
                margin-left: 20px;
                margin-left: 0;
                position: absolute;
                top: 60%;
                right: 0;
              }

              .general#blog
                #mp-product-description-general-v2.myAccordion
                .question.expanded
                .icon {
                background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMC43MDciIGhlaWdodD0iMTAuNzA3IiB2aWV3Qm94PSIwIDAgMTAuNzA3IDEwLjcwNyI+CiAgPGcgaWQ9Ikdyb3VwXzEzMSIgZGF0YS1uYW1lPSJHcm91cCAxMzEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC00LjE0NiAtMjg3LjE0NikiPgogICAgPGxpbmUgaWQ9IkxpbmVfMzciIGRhdGEtbmFtZT0iTGluZSAzNyIgeDI9IjEwIiB5Mj0iMTAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQuNSAyODcuNSkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMzQ2OCIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2Utd2lkdGg9IjAuNSIvPgogICAgPGxpbmUgaWQ9IkxpbmVfMzgiIGRhdGEtbmFtZT0iTGluZSAzOCIgeTE9IjEwIiB4Mj0iMTAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQuNSAyODcuNSkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMzQ2OCIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2Utd2lkdGg9IjAuNSIvPgogIDwvZz4KPC9zdmc+Cg==) !important;
                background-position: center center;
              }

              .general#blog .author,
              .general#mp_video .author {
                margin: 20px auto !important;
                max-width: 800px;
                display: block;
              }

              .general#blog .mp-param-cover,
              .general#mp_video .mp-param-cover {
                max-width: 800px;
                display: block;
                margin-left: auto;
                margin-right: auto;
              }
              .general .myAccordion .answer {
    /*display: none;*/
    padding: 0 10px !important;
}
            </style>
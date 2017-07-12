@include('header');
<?php 
// $partnerInfo = array();
//       $partnerInfo['location'] = $partnerInfoFromOffer['location'];
//       $partnerInfo['partner_gallery_image'] = $partnerInfoFromOffer['partner_gallery_image']; 
//       $partnerInfo['partner_menu_image'] = $partnerInfoFromOffer['partner_menu_image'];    
?>
<center>
<section id="works" class="works clearfix" style="width: 80%;margin-top: 100px;margin-bottom:50px;background-color: #e3e5e8">

<div style="width: 100%">

	<div style="width: 66%;height: 500px;float: left">
		<div class="image-viewer"  style="border-radius: 8px">
      <a class="example-image-link" href="images/menu/menu1.jpg" data-lightbox="example-set"><img class="example-image" src="{{ $partnerInfo['partner_gallery_image'] }}" alt="" style="width:100%;height: 500px;"/></a>
      <a class="example-image-link" href="images/menu/menu2.jpg" data-lightbox="example-set"></a>
      <a class="example-image-link" href="images/menu/menu3.jpg" data-lightbox="example-set"></a>
    </div>
	</div>

	<div style="border-radius: 8px;height: 500px;width: 33%;float: left;">
		<iframe src="{{ $partnerInfo['location'] }}" width="100%" height="100%" frameborder="0" style="border:0; border-radius: 8px" allowfullscreen></iframe>
	</div>	

	<div style="text-align: center;width: 66%;float: left;height: 300px">

	<div class="countdown countdown-container container" style="background-color: #333333;border-radius: 4px;width: 100%;height: 100%;padding-top: 50px">
    <div class="clock row">
        <div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas-days" class="clock-canvas"></div>

                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-days type-time">DAYS</p>
                    </div><!-- /.text -->
                </div><!-- /.inner -->
            </div><!-- /.wrap -->
        </div><!-- /.clock-item -->

        <div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas-hours" class="clock-canvas"></div>

                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-hours type-time">HOURS</p>
                    </div><!-- /.text -->
                </div><!-- /.inner -->
            </div><!-- /.wrap -->
        </div><!-- /.clock-item -->

        <div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas-minutes" class="clock-canvas"></div>

                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-minutes type-time">MINUTES</p>
                    </div><!-- /.text -->
                </div><!-- /.inner -->
            </div><!-- /.wrap -->
        </div><!-- /.clock-item -->

        <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas-seconds" class="clock-canvas"></div>

                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-seconds type-time">SECONDS</p>
                    </div><!-- /.text -->
                </div><!-- /.inner -->
            </div><!-- /.wrap -->
        </div><!-- /.clock-item -->
    </div><!-- /.clock -->
</div><!-- /.countdown-wrapper -->
	
</div>



	
	<div style="text-align: center;width: 33%;float: left;">
		<div class="image-viewer">
      <a class="example-image-link" href="images/menu/menu1.jpg" data-lightbox="example-set"><img class="example-image" src="{{ $partnerInfo['partner_menu_image'] }}" width="95%" height="100%" alt=""/></a>
      <a class="example-image-link" href="images/menu/menu2.jpg" data-lightbox="example-set"></a>
      <a class="example-image-link" href="images/menu/menu3.jpg" data-lightbox="example-set"></a>
    </div>
  </div>  

</div>

</section>



<section id="works" class="works clearfix" style="width: 80%;margin-top: 100px;margin-bottom:50px;background-color: #e3e5e8">

<div style="width: 100%">

    <div style="width: 66%;height: 500px;float: left">
        <div class="image-viewer"  style="border-radius: 8px">
      <a class="example-image-link" href="images/menu/menu1.jpg" data-lightbox="example-set"><img class="example-image" src="{{ $partnerInfo['partner_gallery_image'] }}" alt="" style="width:100%;height: 500px;"/></a>
      <a class="example-image-link" href="images/menu/menu2.jpg" data-lightbox="example-set"></a>
      <a class="example-image-link" href="images/menu/menu3.jpg" data-lightbox="example-set"></a>
    </div>
    </div>

    <div style="border-radius: 8px;height: 250px;width: 33%;float: left;">
        <iframe src="{{ $partnerInfo['location' ]}}" width="100%" height="100%" frameborder="0" style="border:0; border-radius: 8px" allowfullscreen></iframe>
    </div>  




    
    <div style="text-align: center;width: 33%;float: left;height: 250px">
        <div class="image-viewer">
      <a class="example-image-link" href="images/menu/menu1.jpg" data-lightbox="example-set"><img class="example-image" src="{{$partnerInfo['partner_menu_image']}}" width="95%" height="96%" alt=""/></a>
      <a class="example-image-link" href="images/menu/menu2.jpg" data-lightbox="example-set"></a>
      <a class="example-image-link" href="images/menu/menu3.jpg" data-lightbox="example-set"></a>
    </div>
  </div>  

</div>

</section>

<section id="works" class="works clearfix" style="width: 80%;margin-top: 100px;margin-bottom:50px;background-color: #e3e5e8">

   <section id="cd-placeholder-5" class="cd-section cd-container">
    <div class="content-md container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2 style="text-align: center;">Facilities</h2>
                <!-- <p>This restaurant provides these facilities:</p> -->
            </div>
        </div>
        <!--// end row -->

        <!-- Swiper Clients -->
        <div class="row">
            <div class="col-md-3">
                <div class="swiper-slide">
                    <li class="list__primary__item"><span class="glyphicon glyphicon-ok"></span> Wi-Fi available</li>
                </div>
                <div class="swiper-slide">
                    <li class="list__primary__item"><span class="glyphicon glyphicon-ok"></span> Kids Play Area</li>
                </div>
            </div>
            <div class="col-md-3">
                <div class="swiper-slide">
                    <li class="list__primary__item"><span class="glyphicon glyphicon-ok"></span> Air Conditioned</li>
                </div>
                <div class="swiper-slide">
                    <li class="list__primary__item"><span class="glyphicon glyphicon-ok"></span> Outdoor Sitting Area</li>
                </div>
            </div>
            <div class="col-md-3">
                <div class="swiper-slide">
                    <li class="list__primary__item"><span class="glyphicon glyphicon-ok"></span> Takes Reservation</li>
                </div>
                <div class="swiper-slide">
                    <li class="list__primary__item"><span class="glyphicon glyphicon-ok"></span> Accepts Card Payments</li>
                </div>
            </div>
            <div class="col-md-3">
                <div class="swiper-slide">
                    <li class="list__primary__item"><span class="glyphicon glyphicon-ok"></span> Smoking Area</li>
                </div>
            </div>
        </div>
        <!-- End Swiper Clients -->
    </div>
</section> <!-- #cd-placeholder-5 -->
</section>

</center>

<script src="js/lightbox-plus-jquery.min.js"></script>




<script type="text/javascript">  
    $('document').ready(function() {
        'use strict';
        
    	$('.countdown').final_countdown({
            'start': 1362139200,
            'end': 1388461320,
            'now': 1387461323        
        });
    });
</script>

@include('footer');

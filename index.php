<?php require_once('head.php') ?>
		
		<div id="primaryContent">
			<div class="content">
			
          <img src="images/banner-text-top.png" alt="Helping With Property Needs" />
          
          <img src="images/man.png" alt="The Man" style="position:absolute; top:100px; right:50px; z-index:100;" />  	
                
         <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="images/slider-image01.png" alt="" />
                <img src="images/slider-image02.png" alt="" />
                <img src="images/slider-image03.png" alt="" />
                <img src="images/slider-image04.png" alt="" />
                <img src="images/slider-image05.png" alt="" />
                <img src="images/slider-image06.png" alt="" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>
        </div>
                
                
	<img src="images/banner-text-bottom.png" alt="Services We Offer" />
				
<div class="servicesSlider" id="js-serviceblock">


		<div class="sliderViewport">
			<div class="serviceItem n01">
			<h2>Property Settlements</h2>

			<p>Understand that this is one of the most important transactions any one or family can make. Strong communication and having everything...</p>
			<p class="serviceLink">				<a href="/services#Service01" title="read more about this service">read more about this service</a>
		
</p>
		</div>
	
			<div class="serviceItem n02">
			<h2>Deceased Estates</h2>
			<p>At Plus Your Settlements, we understand that dealing with deceased loved one's affairs can be a challenge and we have extensive experience in this area...</p>

			<p class="serviceLink">				<a href="/services#Service05" title="read more about this service">read more about this service</a>
		
</p>
		</div>
	
			<div class="serviceItem n03">
			<h2>Subdivisions</h2>
			<p>Having dealt with many developers over the years, we would naturally like to help you with your project needs as well. Lead by our Licensee, who has extensive ...</p>
            
			<p class="serviceLink">				<a href="/services#Service06" title="read more about this service">read more about this service</a>

		
</p>
		</div>
		</div>
	
		<div class="sliderViewport">
			<div class="serviceItem n04">
			<h2>Family Transfer</h2>
			<p>Whether they be properties that are being gifted between parties or family court orders, they can be stressful. With our experience in related ...</p>
            
			<p class="serviceLink">				<a href="/services#Service03" title="read more about this service">read more about this service</a>

		
</p>
		</div>
	
			<div class="serviceItem n05">
			<h2>Change of Name</h2>
			<p>Use our experience to ensure things are right and done properly - let the headaches stay with us. </p>
            
			<p class="serviceLink">				<a href="/services#Service04" title="read more about this service">read more about this service</a>
		

</p>
		</div>
	
			<div class="serviceItem n06">
			<h2>Title Searches</h2>
			<p>Always happy to help you with your search needs - just talk with our team and we can arrange for you.</p>
            
			<p class="serviceLink">				<a href="/services#Service07" title="read more about this service">read more about this service</a>
		
</p>

		</div>
		</div>
	
				
</div>

<p class="clearer" id="js-show-service-p" style="display:none">
	<span class="but-more" id="js-more-service-link">
		<img src="images/but-more-services-en.gif" alt="view more services" /><span>view more services</span>
	</span>
	<span class="but-more" id="js-less-service-link">

		<img src="images/but-less-services-en.gif" alt="view less services" /><span>view less services</span>
	</span>
</p>

<script type="text/javascript">
$(document).ready(function(){
	$("#js-show-service-p").show();
	$("#js-less-service-link").hide();
	$("#js-serviceblock").height(147);
	$("#js-serviceblock").css("overflow","hidden");
	
	$("#js-more-service-link").css("cursor", "pointer").click(function(){
		$(this).hide();
		if(!$.browser.safari){$("#js-less-service-link").show();}
		var h = $("#js-serviceblock").height();
		$("#js-serviceblock").animate({"height": "+=178px"}, "normal", "swing");
	});	
	$("#js-less-service-link").css("cursor", "pointer").click(function(){
		$(this).hide();
		$("#js-more-service-link").show();
		var h = $("#js-serviceblock").height();
		$("#js-serviceblock").animate({"height": "-=178px"}, "normal", "swing");
	});	
});
</script>
			</div>
		</div>
        </div>
        

<div id="secondaryContent">

	<div class="content">

		<div class="aboutStroke">
			

<div class="box">
	<h2>Why work with us?</h2>
	
	
		<h3>We make things simple</h3>
		<p><img src="images/img-reason-confusion.png" alt="We make things simple" width="64" height="64" style="margin-right:5px;" />We take the confusion out of the settlement process.</p>
	
	
	<p><a href="/services" class="button" title="read all the reasons to work with us"><img src="images/but-readall-reasons-en.gif" alt="read all the reasons to work with us" /><span>read all the reasons to work with us</span></a></p>

</div>

			<div class="box" id="middle">
				
					<h2>Do you have any questions?</h2>
					<h3>Need some extra info?</h3>
					<p><img src="images/img-question.png" alt="Contact Form" width="64" height="64" style="margin-right:5px;" />Whether you would like us to work for you or just want to ask us a question?</p>
				
				<p><a href="/contact" class="button" title="Contact Form"><img src="images/but-talk-to-us-en.gif" alt="Contact Form" /><span>Talk to us</span></a></p>
			</div>

			
			<div class="box addressBox">
	<h2>How to get in touch with us?</h2>
		<h3>Plus Your Settlements</h3>
        <p><img src="images/img-address-en.png" alt="Call us for a quote" width="64" height="64" style="margin-right:5px;" /></p>
	<div>
		<p>11 The Crescent<br />Midland WA 6056</p>
		<p class="address">Call us: (08) 9274 2833</p>

		<p class="address">
			<script type="text/javascript"><!--
			q1e='<a href="mai';e4w="plusyoursettlements.com.au";h2j="sam";document.write(q1e,'lto:',h2j,'@',e4w,'">','e-mail',' us',
			'</', 'a>'); // --></script>
                </p>
	</div>
</div>
		</div>

	</div>
</div>
		
<?php require_once('tail.php') ?>

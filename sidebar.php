<div class="right">

	<div class="rightBlock">
		<h3>Contact Us</h3>
		<form class="myform" id="contactform" action="/contact/submit" method="post">
       	 		<fieldset>
				<input type="hidden" name="csrf_token" id="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
                		<p>
					<label for="name">Your Name:</label>
					<input type="text" name="name" id="name" required="required" class="textfield" />
				</p>
                		<p>
					<label for="phone">Your Contact Number:</label>
					<input type="text" name="phone" id="phone" class="textfield" />
				</p>
                		<p>
					<label for="email">Your Email Address:</label>
					<input type="text" name="email" id="email" class="textfield" />
				</p>
				<p>                     
					Are you buying or selling?<br />
					<label for="buying">Buying<input type="radio" name="buyingselling" id="buying" value="buying" required="required" /></label>
					&nbsp;&nbsp;
					<label for="selling">Selling<input type="radio" name="buyingselling" id="selling" value="selling" required="required" /></label>
					&nbsp;&nbsp;
					<label for="neither">Neither<input type="radio" name="buyingselling" id="neither" value="neither" required="required" /></label>
				</p>  
                		<p>
					<label for="comments">Comments:</label>
					<textarea class="textfield" name="comments" required="required"></textarea>
				</p>
				<p>
					<button type="submit">Submit Request</button>
       				</p>
			</fieldset>
		</form>
	</div>

        <div class="rightBlock">
        	<h3>Our services</h3>
        	<ul>
                	<li><a href="/services#Service01" title="Service01">Residential Property Settlements</a></li>
                        <li><a href="/services#Service02" title="Service02">Commercial Property Settlements</a></li>
                        <li><a href="/services#Service03" title="Service03">Family/Related Transfers</a></li>
                        <li><a href="/services#Service04" title="Service04">Change of Name</a></li>
                        <li><a href="/services#Service05" title="Service05">Deceased Estates</a></li>
                        <li><a href="/services#Service06" title="Service06">Subdivisions</a></li>
                        <li><a href="/services#Service07" title="Service07">Title Searches</a></li>
        	</ul>
	</div>

	<div class="rightBlock">
        	<h4>A word from our clients</h4>
	        <p><img src="images/icn-testimonial.png" alt="" style="float:left; margin-right:5px;"/>Read our customer testimonials to find out why our clients are satisfied with our services. <a href="/testimonials" title="customer testimonials"  style="margin-left:69px"><img src="images/but-testimonial-en.gif" title="customer testimonials" alt="customer testimonials"/></a></p>
	</div>

</div>

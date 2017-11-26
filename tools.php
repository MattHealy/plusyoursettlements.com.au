<?php $pagetitle = 'Tools' ?>
<?php require_once('head.php') ?>

		<div id="primaryContent">
			<div class="content">
				<div class="pageTop">
					<div class="pageTitle">
						<h1>Financial Tools</h1>
					</div>
					<div class="breadCrumbs">
						You are here: <a href="/" title="Home">Home</a>

						&raquo;&nbsp;<span class="active">Financial Tools</span>
							
					</div>					
					<div class="clearer"></div>
				</div>
				
				<div class="left">
											
					<p class="intro-text">Use the handy calculator below to calculate Stamp Duty costs for buying a property</p>
						
					<form id="myform">
						<fieldset>
							<p>
								<label for="price">Purchase Price:</label>
								<input type="text" name="price" id="price" title="Enter a whole dollar amount" required="required" class="textfield" /> 
							</p>
							<p>
								Are you a first home buyer?
								<label for="fhortrue">Yes<input type="radio" name="fhor" id="fhortrue" value="true" required="required" /></label>
								&nbsp;&nbsp;
								<label for="fhorfalse">No<input type="radio" name="fhor" id="fhorfalse" value="false" /></label>
							</p>
							<p>
								Will the property be your primary residence?
								<label for="residentialtrue">Yes<input type="radio" name="residential" id="residentialtrue" value="true" required="required" /> </label>
								&nbsp;&nbsp;
								<label for="residentialfalse">No<input type="radio" name="residential" id="residentialfalse" value="false" /> </label>
							</p>
							<p>
								Is the property Vacant Land?
								<label for="vacanttrue">Yes<input type="radio" name="vacant" id="vacanttrue" value="true" required="required" /> </label>
								&nbsp;&nbsp;
								<label for="vacantfalse">No<input type="radio" name="vacant" id="vacantfalse" value="false" /> </label>
							</p>
							<p>
								<label for="stampduty">Stamp Duty:</label>
								<input type="text" readonly="readonly" name="stampduty" id="stampduty" class="textfield" /> </p>
							<p>
								<button type="submit" id="calculate1">Calculate Duty</button>
								<button type="reset">Reset</button>
							</p>
						</fieldset>
					</form>



										
			  </div>
				
		
<?php require_once('sidebar.php') ?>

		   </div>
		</div>
		</div>
		
<script type="text/javascript">
$(document).ready(function() {

	$('#myform').validate({

		submitHandler: function(form) {

			var residential = $('input[name=residential]:checked', '#myform').val()
			var fhor = $('input[name=fhor]:checked', '#myform').val()
			var vacant = $('input[name=vacant]:checked', '#myform').val()

			var rateType;

			if (fhor == 'true' && residential == 'true') {
				if (vacant == 'true') {
					rateType = 'fhor_vacant';
				} else {
					rateType = 'fhor_established';
				}
			} else if (residential == 'true') {
				rateType = 'residential';
			} else {
				rateType = 'general';
			}

			$('#stampduty').val(CalculateStampDuty(rateType,$('#price').val()));

			return false;

		}
		
	});

});
</script>

<?php require_once('tail.php') ?>

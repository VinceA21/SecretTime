<section class="Footer OnlyWeb">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<ul>
					<li><a href="javascript:void(0)">About</a></li>
					<li><a href="javascript:void(0)">Mobile</a></li>
					<li><a href="javascript:void(0)">Terms</a></li>
					<li><a href="javascript:void(0)">Privacy</a></li>
					<li><a href="javascript:void(0)">Help</a></li>
					<li><a href="javascript:void(0)">Press</a></li>
				</ul>
			</div>
			<div class="col-md-6">
				<p class="text-md-right text-center">2021 Secret Time</p>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	$(function(){
		$('#mylodaer').hide();
	})
	$(document).ajaxStart(function(){ 
        $('#mylodaer').show(); 
    });
  	$(document).ajaxStop(function(){ 
        $('#mylodaer').hide(); 
    });
</script>
<script src="<?php echo base_url('assets/frontend/script/script.js') ?>"></script>
<script src="https://andreruffert.github.io/rangeslider.js/assets/rangeslider.js/dist/rangeslider.min.js"></script>
</body>
</html>
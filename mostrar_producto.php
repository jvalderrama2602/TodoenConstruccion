<? include('header.php'); ?>


<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
				
</head>
<body>
 
   
				<!-- start product_slider -->
				     <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/t1.jpg" />
									<img class="etalage_source_image" src="images/t2.jpg" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t2.jpg" />
								<img class="etalage_source_image" src="images/t2.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t3.jpg" />
								<img class="etalage_source_image" src="images/t3.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t4.jpg" />
								<img class="etalage_source_image" src="images/t4.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t5.jpg" />
								<img class="etalage_source_image" src="images/t5.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t6.jpg" />
								<img class="etalage_source_image" src="images/t6.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t1.jpg" />
								<img class="etalage_source_image" src="images/t1.jpg" />
							</li>
						</ul>
					
					
			<!-- end product_slider -->
	
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>				
  

       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>




<? include('footer.php'); ?>
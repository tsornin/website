
</div> <!--end content_sub-->
</div> <!--end content-->

		<div id="container_content_clear">
		</div> <!--end container_content_clear-->

	</div> <!--end container_content-->

<?php include("footer.php"); ?>

</div> <!--end container_all-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$(".slide_content").hide();
	$(".slide_header").click(function(){
		$(this).next().slideToggle("fast", "linear");
		$(this).children().first().html(($(this).children().first().html() == "[-]") ? "[+]" : "[-]");
	});
});
</script>

</body>
</html>
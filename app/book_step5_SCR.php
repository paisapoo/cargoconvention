<script>
	$('input[name="confirm_checkbok"').change(function (){
			 if(this.checked) {
			 	$(".btn.btn-lg.pull-right").removeClass("disabled");
			 	$(".btn.btn-lg.pull-right").attr("disabled",false);
			 }else{
			 	$(".btn.btn-lg.pull-right").addClass("disabled");
			 	$(".btn.btn-lg.pull-right").attr("disabled",true);
			 }

	})
</script>
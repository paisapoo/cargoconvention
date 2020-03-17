<script>
	var allspon = JSON.parse($("input[name='allspon']").val());
	console.log(allspon[0]);

	$('#moreSpon').hasClass()	
	$('.checkspon').click(function(){
		var sponItem = JSON.parse($(this).val());
		if(this.checked){
	
		var html = '<tr class='+sponItem.input+'>'+
		'<td>'+sponItem.name+'</td>'+
					'<td>1</td>'+
					'<td><input type="text" class="form-control" name="'+sponItem.
					input+'"></td>'+
					'</tr>';

		$('#moreSpon').append(html);	
		}else{
			
			$('#moreSpon .'+sponItem.input).remove();
		}
		
	});

		$('.checkadver').click(function(){
		var sponItem2 = JSON.parse($(this).val());
		if(this.checked){
	
		var html2 = '<tr class='+sponItem2.input+'>'+
		'<td>'+sponItem2.name+'</td>'+
					'<td><input type="number" class="form-control" name="ok"></td>'+
					'<td><input type="text" class="form-control" name="'+sponItem2.
					input+'"></td>'+
					'</tr>';

		$('#moreSpon').append(html2);	
		}else{
			
			$('#moreSpon .'+sponItem2.input).remove();
		}
		
	})

</script>
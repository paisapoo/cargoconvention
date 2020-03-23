<script>
	var allspon = JSON.parse($("input[name='allspon']").val());
	console.log(allspon[0]);

	$('#moreSpon').hasClass()	
	$('.checkspon').click(function(){
		var sponItem = JSON.parse($(this).val());
		if(this.checked){
	
		var html = '<tr class='+sponItem.input+'>'+
		"<input name='"+sponItem.input+"' class='form-control' type='hidden' value='"+sponItem.input+"'/>"+
		'<td>'+sponItem.name+'</td>'+
					'<td>1</td>'+
					'<td><input type="text" class="form-control" name="'+sponItem.
					input+'_pr"></td>'+
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
		       "<input name='"+sponItem2.input+"' class='form-control' type='hidden' value='"+sponItem2.input+"'/>"+
		'<td>'+sponItem2.name+'</td>'+
					'<td><input type="number" class="form-control" name="'+sponItem2.
					input+'_qu"></td>'+
					'<td><input type="text" class="form-control" name="'+sponItem2.
					input+'_pr"></td>'+
					'</tr>';

		$('#moreSpon').append(html2);	
		}else{
			
			$('#moreSpon .'+sponItem2.input).remove();
		}
		
	})

</script>
<link rel="stylesheet" type="text/css" href="css/croppie.css" />
<script type="text/javascript" src="js/croppie.js"></script>

<script type="text/javascript">


$('#upload-demo').css("display","none");
$('.upload-result').css("display","none");
$uploadCrop = $('#upload-demo').croppie({

    enableExif: true,

    viewport: {

        width: 150,

        height: 150,

        type: 'square'

    },

    boundary: {

        width: 200,

        height: 200

    }

});


$('#upload').on('change', function () { 
    
$uploadCrop.css("display","block")
$('.upload-result').css("display","block");
$('#show_current').css("display","none");
$('#clear').css("display","none");
	$("#upload-demo-i").css("display","none")
	var reader = new FileReader();

    reader.onload = function (e) {

    	$uploadCrop.croppie('bind', {

    		url: e.target.result

    	}).then(function(){

    		console.log('jQuery bind complete');

    	});

    	

    }

    reader.readAsDataURL(this.files[0]);

});


$('.upload-result').on('click', function (ev) {

	$uploadCrop.croppie('result', {

		type: 'canvas',

		size: 'viewport'

	}).then(function (resp) {   


		$.ajax({

			url: "upload_image_company",

			type: "POST",

			data: {"image":resp},

			success: function (data) {
            html = '<img src="' + resp + '" />';
        $("#upload-demo-i").css("display","block")
				$("#upload-demo-i").html(html);
                $('#upload-demo').css("display","none");
                $('.upload-result').css("display","none");
                $('#upload').val(null);
                $("#path_file").val(data);
			}

		});

	});

});


</script>
      
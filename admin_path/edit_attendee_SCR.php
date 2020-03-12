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

			url: "upload_image",

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
      
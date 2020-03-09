<script>
function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}


</script>

<script>


$(".multi-check1").change(function() {
    if(this.checked) {
       $('.multi1').show(); 
       $(".multi1 input").val(0);
       $('.multi1 .amount').html("$0");   
      }
      else{
        $('.multi1').hide();
        $(".multi1 input").val(0);
      }
});
var price1 = $("input[name='att_pass[]']").val();
       
       $(".multi1 input[name='multiple-number']").change(function (){
        let attendee = $(this).val(); 
        let amount = (attendee * parseInt(price1));

       
       $('.multi1 .amount').html("$"+numberWithCommas(amount));
       })

var check1 = $( ".multi-check1" ).prop( "checked");

 if(check1){
    $('.multi1').show();
    let attendee = $(".multi1 input[name='multiple-number']").val();
    let amount = (attendee * parseInt(price1));
    console.log(amount);
    $('.multi1 .amount').html("$"+numberWithCommas(amount)); 
 }


$(".multi-check2").change(function() {
    if(this.checked) {
       $('.multi2').show();
      }
      else{
        $('.multi2').hide();
         $(".multi2 input").val(0);
      }
});

var price2 = $(".multi-check2").val();

       
       $(".multi2 input[name='multiple-spouse']").change(function (){
        let attendee = $(this).val(); 
        let amount = attendee * price2;
       
       $('.multi2 .amount').html("$"+numberWithCommas(amount));
       });

var check2 = $( ".multi-check2" ).prop( "checked");

 if(check2){
    $('.multi2').show();
    let attendee = $(".multi2 input[name='multiple-spouse']").val();
    let amount = (attendee * parseInt(price2));
    console.log(amount);
    $('.multi2 .amount').html("$"+numberWithCommas(amount)); 
 }


$(".multi-check3").change(function() {
    if(this.checked) {
       $('.multi3').show();
      }
      else{
        $('.multi3').hide();
         $(".multi3 input").val(0);
      }
});

var price3 = $(".multi-check3").val();

       
       $(".multi3 input[name='multiple-table']").change(function (){
        let attendee = $(this).val(); 
        let amount = attendee * price3;
       
       $('.multi3 .amount').html("$"+numberWithCommas(amount));
       });

var check3 = $( ".multi-check3" ).prop( "checked");

 if(check3){
    $('.multi3').show();
    let attendee = $(".multi3 input[name='multiple-table']").val();
    let amount = (attendee * parseInt(price3));
    console.log(amount);
    $('.multi3 .amount').html("$"+numberWithCommas(amount)); 
 }

</script>
<!-- format comma -->

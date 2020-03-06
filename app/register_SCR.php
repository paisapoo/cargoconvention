
<script>
$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
      navNext = $('div.setup-panel div'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn'),
          allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.addClass('btn-default').removeClass('btn-active-form');
          $item.addClass('btn-active-form');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });
  
  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
          
         
          prevStepWizard.removeClass('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='checkbox'],input[type='url'],input[type='text']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest("tr").addClass("has-error");

          }else{
             $(curInputs[i]).closest("tr").removeClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeClass('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-active-form').trigger('click');
});

// check box step 1
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
var price1 = $("input[name='earlyBird']").val();
       
       $(".multi1 input[name='multiple-number']").change(function (){
        let attendee = $(this).val(); 
        let amount = attendee * price1;
       
       $('.multi1 .amount').html("$"+numberWithCommas(amount)+ " - (10%) : "+"<b>$"+numberWithCommas(amount - (amount*0.10))+"</b>");
       })
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



</script>
<!-- format comma -->
<script>
function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}


</script>

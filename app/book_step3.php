    <div class="row setup-content" id="step-3">
         <div class="col-md-12 ">
        <div class="form-group">
         <p class="form-title"> Personal Information</p>
          <hr class="or-line">
            </div>
            </div> 
        <div class="col-md-12">
          <div id="accordion1"></div>
          <script>
             $(".multi1 input[name='multiple-number']").change(function (){
            let attendee = $(this).val();
            var all_attendee =[]; 
         
                  for(var i = 1 ;i <= attendee; i++){
                     var show = i==1?"show":"";
                      all_attendee[i] = '<div class="form-group">'+
                    '<p class="form-title-sec" data-toggle="collapse" data-target="#collapseAtt'+i+'" aria-expanded="true" aria-controls="collapse'+i+'">Attendee Details No. '+i+'<span class="float-right">+</span></p>'+
                '</div>'+         
                '<div id="collapseAtt'+i+'" class="collapse form-boder '+show+'" aria-labelledby="headingOne" data-parent="#accordion1">'+
                 '<div class="col-md-12 ">'+
                  '<div class="form-group">'+
                    '<div class="form-row">'+
                        '<div class="form-group col-md-2">'+
                          '<label for="inputEmail4">Title</label>'+
                           '<select class="custom-select" id="inputGroupSelect02" name="titleName[]">'+

                           '<option value="Mr">Mr</option>'+
                            '<option value="Miss">Miss</option>'+
                            '<option value="Mrs">Mrs</option>'+
                           
                          '</select>'+
                        '</div>'+
                        '<div class="form-group col-md-5">'+
                         '<label for="inputPassword4">First Name</label>'+
                          '<input type="text" class="form-control" placeholder="Please enter your first name" name="firstName[]">'+
                        '</div>'+
                        '<div class="form-group col-md-5">'+
                          '<label for="inputPassword4">Last Name</label>'+
                          '<input type="text" class="form-control"  placeholder="Please enter your last name" name="lastName[]">'+
                        '</div>'+
                        '<div class="form-group col-md-5">'+
                          '<label for="inputPassword4">Position</label>'+
                          '<input type="text" class="form-control"  placeholder="Your Position" name="position[]">'+
                        '</div>'+
                      '</div>'+
                   '</div>'+
                   '<!-- end form-firstname -->'+
        '<div class="form-group">'+  
            '<p class="form-title-th">Dietary Restrictions</p>'+
            '<div class="row">'+
              '<div class="col-md-6">'+
                '<table>'+
                  '<tr>'+
                '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="vegetarian[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                  '<span class="label-t-form">Vegetarian</span>'+
                '</td>'+
                '<td>'+
               
                '</td>'+
                '<td></td>'+
              '</tr>'+
              '<tr>'+
                '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="vegan[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                  '<span class="label-t-form">Vegan</span>'+
                '</td>'+
                '<td>'+
                  
                '</td>'+
                '<td></td>'+
              '</tr>'+
              '<tr>'+
               '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="halal[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                  '<span class="label-t-form">Halal</span>'+
                '</td>'+
                '<td>'+
                '</td>'+
                '<td></td>'+
              '</tr>'+
              '<tr>'+
                '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="kosher[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                  '<span class="label-t-form">Kosher</span>'+
                '</td>'+
                '<td>'+
                '</td>'+
                '<td></td>'+
              '</tr>'+


            '</table>'+
              '</div>'+
              '<div class="col-md-6">'+
                             '<table>'+
                  '<tr>'+
                '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="glute[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                 '<span class="label-t-form">Gluten-free</span>'+
                '</td>'+
                '<td>'+
                  
                '</td>'+
                '<td></td>'+
              '</tr>'+
              '<tr>'+
                '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="lactose[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                  '<span class="label-t-form">Lactose Intolerant</span>'+
                '</td>'+
                '<td>'+
                 
                '</td>'+
                '<td></td>'+
              '</tr>'+
              '<tr>'+
                '<td>'+
                  '<span class="label-t-form">Others:</span>'+
                '</td>'+
                '<td>'+
                  '<input type="text" name="otherStep3[]" class="form-control" placeholder="Please enter your specific restrictions">'+
                '</td>'+
                '<td></td>'+
              '</tr>'+
            '</table>'+
              '</div>'+
            '</div>'+
            
          '</div>'+
          '<!-- end dietary -->'+
            '<div class="form-group">'+
            '<p class="form-title-th">Food Allergies</p>'+
            '<div class="row">'+
              '<div class="col-md-12">'+
                '<input type="text" class="form-control" name="allergies[]" placeholder="Food Allergies">'+
               '<br>'+
              '</div>'+
            '</div>'+
            
          '</div>'+
          '<!-- end food all -->'+

                 '</div>'+
                 '<!-- end col-md-12 -->'+
               '</div>'+
                '<!-- end collap one -->';
                
                  }
                
              
                   $("#accordion1").html(all_attendee);
            });
          </script>
          <div id="accordion2"></div>
            <script>
             $(".multi2 input[name='multiple-spouse']").change(function (){
            let attendee = $(this).val();
            var all_attendee =[]; 
         
                  for(var i = 1 ;i <= attendee; i++){
                     var show = i==1?"show":"";
                      all_attendee[i] = '<div class="form-group">'+
                    '<p class="form-title-sec" data-toggle="collapse" data-target="#collapse'+i+'" aria-expanded="true" aria-controls="collapse'+i+'">Spouse Details No. '+i+'<span class="float-right">+</span></p>'+
                '</div> '+                
               
                '<div id="collapse'+i+'" class="collapse form-boder " aria-labelledby="headingOne" data-parent="#accordion2">'+
                 '<div class="col-md-12 ">'+
                  '<div class="form-group">'+
                    '<div class="form-row">'+
                        '<div class="form-group col-md-2">'+
                          '<label for="inputEmail4">Title</label>'+
                           '<select class="custom-select" id="inputGroupSelect02" name="titleS[]">'+

                            '<option value="Mr">Mr</option>'+
                            '<option value="Miss">Miss</option>'+
                            '<option value="Mrs">Mrs</option>'+
                           
                          '</select>'+
                        '</div>'+
                        '<div class="form-group col-md-5">'+
                          '<label for="inputPassword4">First Name</label>'+
                          '<input type="text" class="form-control" placeholder="Please enter your first name" name="fisrtS[]">'+
                        '</div>'+
                        '<div class="form-group col-md-5">'+
                          '<label for="inputPassword4">Last Name</label>'+
                          '<input type="text" class="form-control"  placeholder="Please enter your last name" name="lastS[]">'+
                        '</div>'+
                      '</div>'+
                   '</div>'+
                   '<!-- end form-firstname -->'+
        '<div class="form-group">'+  
            '<p class="form-title-th">Dietary Restrictions</p>'+
            '<div class="row">'+
              '<div class="col-md-6">'+
                '<table>'+
                  '<tr>'+
                '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="vegetarianS[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                  '<span class="label-t-form">Vegetarian</span>'+
                '</td>'+
                '<td>'+
               
                '</td>'+
                '<td></td>'+
              '</tr>'+
              '<tr>'+
                '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="veganS[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                  '<span class="label-t-form">Vegan</span>'+
                '</td>'+
                '<td>'+
                  
                '</td>'+
                '<td></td>'+
              '</tr>'+
              '<tr>'+
                '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="halalS[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                  '<span class="label-t-form">Halal</span>'+
                '</td>'+
                '<td>'+
                '</td>'+
                '<td></td>'+
              '</tr>'+
              '<tr>'+
                '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="koshorS[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                  '<span class="label-t-form">Kosher</span>'+
                '</td>'+
                '<td>'+
                '</td>'+
                '<td></td>'+
              '</tr>'+


            '</table>'+
              '</div>'+
              '<div class="col-md-6">'+
                             '<table>'+
                  '<tr>'+
                '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="gluteS[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                  '<span class="label-t-form">Gluten-free</span>'+
                '</td>'+
                '<td>'+
                  
                '</td>'+
                '<td></td>'+
              '</tr>'+
              '<tr>'+
                '<td>'+
                  '<label class="check-input">'+
                  '<input type="checkbox" name="lactoseS[]" class="form-check-input">'+
                  '<span class="checkmark"></span>'+
                '</label>'+
                '</td>'+
                '<td>'+
                  '<span class="label-t-form">Lactose Intolerant</span>'+
                '</td>'+
                '<td>'+
                 
                '</td>'+
                '<td></td>'+
              '</tr>'+
              '<tr>'+
                '<td>'+
                  '<span class="label-t-form">Others:</span>'+
                '</td>'+
                '<td>'+
                  '<input type="text" name="otherStep3S[]" class="form-control" placeholder="Please enter your specific restrictions">'+
                '</td>'+
                '<td></td>'+
              '</tr>'+
            '</table>'+
              '</div>'+
            '</div>'+
          '</div>'+
          '<!-- end dietary -->'+
            '<div class="form-group">'+
            '<p class="form-title-th">Food Allergies</p>'+
            '<div class="row">'+
              '<div class="col-md-12">'+
                '<input type="text" class="form-control" name="allergiesS[]" placeholder="Food Allergies" >'+
               '<br>'+
              '</div>'+
            '</div>'+
            
          '</div>'+
          '<!-- end food all -->'+

                 '</div>'+
                 '<!-- end col-md-12 -->'+
                '</div>'+
                '<!-- end collap one -->';
                    }
                    $("#accordion2").html(all_attendee);
                  });
                </script>
            
        </div>




        <div class="col-md-12">
        <p class="b-center">
          <button class="btn btn-active-pre prevBtn btn-lg pull-left" type="button">Back</button>
         <a href="#top-form"> <button class="btn btn-active-form nextBtn btn-lg pull-right" type="button">Next Step</button></a>
        </p>
      </div>
    </div>

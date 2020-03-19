<style>
  .stepwizard-step button{
    cursor: default!important;
  }
  .stepwizard-step .btn-circle:hover, .stepwizard-step .btn-active-form:hover{
    background-color: #fff;
        color: #212529;
  }
</style>
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <button href="register" type="button" class="btn btn-circle btn-active-form">1</button>
        <p>select plan</p>
      </div>
      <div class="stepwizard-step">
        <button href="book_step2" type="button" class="btn btn-default btn-circle ">2</button>
        <p>sponsorship</p>
      </div>
      <div class="stepwizard-step">
        <button href="book_step3" type="button" class="btn btn-default btn-circle" >3</button>
        <p>personal info</p>
      </div>
         <div class="stepwizard-step">
        <button href="book_step4" type="button" class="btn btn-default btn-circle">4</button>
        <p>company info</p>
      </div>
         <div class="stepwizard-step">
        <button href="book_step5" type="button" class="btn btn-default btn-circle" >5</button>
        <p>submit</p>
      </div>
    </div>
</div>

<?php
$sessionlifetime = 20; //กำหนดเป็นนาที
 
if(isset($_SESSION["timeLasetdActive"])){
  $seclogin = (time()-$_SESSION["timeLasetdActive"])/60;
  //หากไม่ได้ Active ในเวลาที่กำหนด
  if($seclogin>$sessionlifetime){
    //goto logout page
    session_destroy();
    header("location:register");
    exit;
  }else{
    $_SESSION["timeLasetdActive"] = time();
  }
}else{
  $_SESSION["timeLasetdActive"] = time();
}
?>
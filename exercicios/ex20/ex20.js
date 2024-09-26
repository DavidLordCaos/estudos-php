$(document).ready(function(){
   var showMessage = $('#showMessage');
   var helpBlock = $('.help-block');
   var formGroup = $('.form-group');

   showMessage.hide();
   helpBlock.hide();
   formGroup.removeClass("has-error");

   $("form").submit(function(event){
      event.preventDefault();

      helpBlock.removeClass("has-error");
      showMessage.hide();
      helpBlock.hide();

      $.ajax({
         type: "POST",
         url: "message.php",
         data: $("form").serialize(),
         dataType: "JSON",
         success: function(data){
             console.log(data);

             if(data.success){
                 showMessage.show();
                 showMessage.find("#matriz").html(data.matriz);
                 showMessage.find('#impar').html(data.impar);
                 showMessage.find('#pares').html(data.pares);
             } else {
                 helpBlock.show();
                 $('#errNum').html(data.errors.nums);
                 formGroup.addClass('has-error');
             }
         }
      });
   });
});
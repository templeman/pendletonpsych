// Menu

$(function(){
  $("nav li a").bind("mouseenter focusin", function() {
    if(!($(this).hasClass('current'))) {
      $(this).stop().animate( {
        color: '#fff',
        backgroundColor: '#3a6d22',
          borderLeftColor: '#084003',
          borderRightColor: '#084003',
          borderTopColor: '#084003',
          borderBottomColor: '#084003'
      }, 'fast');
    }
  });

  $("nav li a").bind("mouseleave focusout", function() {
    if(!($(this).hasClass('current'))) {
      $(this).stop().animate( {
        color: '#fff',
          backgroundColor: '#084003',
          borderLeftColor: '#fff',
          borderRightColor: '#fff',
          borderTopColor: '#fff',
          borderBottomColor: '#fff'
      }, 'fast');
    }
  });


// Scroll to top

  $("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "fast");
    return false;
  });



// Ajax form feedback
/*
$("#name").keyup(function() {
  if($("#name").val().length >= 4) {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>send_contact/check_name",
      data: "name="+$("#name").val(),
      success: function(msg) {
        if(msg == "true") {
          $("#usr_verify").css({ "background-image" : "url('<?php echo base_url(); ?>image/validation-checkmark.png')" });
        } else {
          $("#usr_verify").css({ "background-image" : "url('<?php echo base_url(); ?>image/validation-x.png')" });
        }
      }
    });
  } else {
    $("#usr_verify").css({ "background-image" : "none" });
  }
});
*/


});

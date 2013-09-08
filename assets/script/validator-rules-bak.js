$(function() {

	var check_empty = ['name', 'message'],
      passed      = ['phone', 'email'],
      success     = ['phone', 'email', 'name', 'message'];

	// disable submit only if validator-rules.js is accessible
	$("#button").attr('disabled', 'disabled');

	// test if form is okay for submission
	function check_passed(passed) {
		if($(success).not(passed).length == 0 && $(passed).not(success).length == 0) {
			$("#button").removeAttr('disabled');
		} else {
			$("#button").attr('disabled', 'disabled');
		}
	}

	// checking name input
	$("#name").change(function() {
		var name = $("#name").val();
			if(name) {
				$("#name_verify").css({ "background-image": "url('/image/yes.png')" });
				check_empty = ['message'];
				if(!(($.inArray('name', passed)) >= 0)) {
					passed.push('name');
				}
			} else {
				$("#name_verify").css({ "background-image": "url('/image/no.png')" });
				passed.splice(passed.indexOf('name'),1);
			}
		check_passed(passed);
	});

	// checking phone input
	$("#phone").change(function() {
		var name = $("#name").val();
		if(($.inArray('name', check_empty)) >= 0) {
			if(name) {
				$("#name_verify").css({ "background-image": "url('/image/yes.png')" });
				check_empty = ['message'];
			} else {
				$("#name_verify").css({ "background-image": "url('/image/no.png')" });
			}
		}
	});

	// checking email input
	$("#email").change(function() {
		var email = $("#email").val();

		if(($.inArray('name', check_empty)) >= 0) {
			$("#name_verify").css({ "background-image": "url('/image/no.png')" });
		}

		if(email) {

			if(isValidEmailAddress(email)) {
				$("#email_verify").css({ "background-image": "url('/image/yes.png')" });
				if(!(($.inArray('email', passed)) >= 0)) {
					passed.push('email');
				}
			} else {
				$("#email_verify").css({ "background-image": "url('/image/no.png')" });
				if(($.inArray('email', passed)) >= 0) {
					passed.splice(passed.indexOf('email'),1);
				}
			}

		} else {
			$("#email_verify").css({ "background-image": "none" });
			if(!(($.inArray('email', passed)) >= 0)) {
				passed.push('email');
			}
		}

		check_passed(passed);
	});

	// checking message input
	document.getElementById('message').onkeyup = function() {
    var message = $("#message").val();
    if(message) {
      $("#message_verify").css({ "background-image": "url('/image/yes.png')" });
      if(!(($.inArray('message', passed)) >= 0)) {
        passed.push('message');
      }
      check_passed(passed);
    }
	};

  // check message input again if textarea loses focus
  $('#message').blur(function() {
    var message = $("#message").val();
    var name = $("#name").val();
    if(message) {
      if(($.inArray('name', check_empty)) >= 0) {
        $("#name_verify").css({ "background-image": "url('/image/no.png')" });
      }
      $("#message_verify").css({ "background-image": "url('/image/yes.png')" });
      if(!(($.inArray('message', passed)) >= 0)) {
        passed.push('message');
      }
    } else {
      $("#message_verify").css({ "background-image": "url('/image/no.png')" });
      passed.splice(passed.indexOf('message'),1);
    }

    check_passed(passed);
  });


	// regex functions
	function isValidEmailAddress(emailAddress) {
		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		return pattern.test(emailAddress);
	}

});

phpbb.recaptcha = {
	button: null,
	ready: false,

	token: $('input[name="recaptcha_token"]'),
	form: $('.g-recaptcha').closest('form'),
	v3: $('[data-recaptcha-v3]'),

	load: function() {
		phpbb.recaptcha.bindButton();
		phpbb.recaptcha.bindForm();
	},
	bindButton: function() {
		phpbb.recaptcha.form.find('button[type="submit"]').on('click', function() {
			// Listen to all the submit buttons for the form that has reCAPTCHA protection,
			// and store it so we can click the exact same button later on when we are ready.
			phpbb.recaptcha.button = this;
		});
	},
	bindForm: function() {
		phpbb.recaptcha.form.on('submit', function(e) {
			 // If ready is false, it means the user pressed a submit button.
			 // And the form was not submitted by us, after the token was loaded.
			if (!phpbb.recaptcha.ready) {
				 // If version 3 is used, we need to make a different execution,
				 // including the action and the site key.
				if (phpbb.recaptcha.v3.length) {
					grecaptcha.execute(
						phpbb.recaptcha.v3.data('recaptcha-v3'),
						{action: phpbb.recaptcha.v3.val()}
					).then(function(token) {
						// Place the token inside the form
						phpbb.recaptcha.token.val(token);

						// And now we submit the form.
						phpbb.recaptcha.submitForm();
					});
				} else {
					// Regular version 2 execution
					grecaptcha.execute();
				}

				// Do not submit the form
				e.preventDefault();
			}
		});
	},
	submitForm: function() {
		// Now we are ready, so set it to true.
		// so the 'submit' event doesn't run multiple times.
		phpbb.recaptcha.ready = true;

		if (phpbb.recaptcha.button) {
			// If there was a specific button pressed initially, trigger the same button
			phpbb.recaptcha.button.click();
		} else {
			if (typeof phpbb.recaptcha.form.submit !== 'function') {
				// Rename input[name="submit"] so that we can submit the form
				phpbb.recaptcha.form.submit.name = 'submit_btn';
			}

			phpbb.recaptcha.form.submit();
		}
	}
};

// reCAPTCHA v2 doesn't accept callback functions nested inside objects
// so we need to make this helper functions here
window.phpbbRecaptchaOnLoad = function() {
	phpbb.recaptcha.load();
};

window.phpbbRecaptchaOnSubmit = function() {
	phpbb.recaptcha.submitForm();
};

/**
* Apply code editor to all textarea elements with data-bbcode attribute
*/
$(function() {
	// reCAPTCHA v3 needs to be initialized
	if (phpbb.recaptcha.v3.length) {
		phpbb.recaptcha.load();
	}
});
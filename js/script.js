// $(function() {
// 	var lang;
// 	lang = navigator.language.split("-") || navigator.userLanguage.split("-");
// 	language = (lang[0]);
// 	console.log('lang: ' + language);

//   console.log("Sprache (root): %s", language);


// });


// i18n.init(function(t) {
//   // translate nav
//   $(".nav").i18n();

//   // programatical access
//   var appName = t("app.name");
// });


 	$(function() {
 		console.log('FUNC');
	    $('#formmail').submit(function() 
		{
			console.log("formail");
	        $("#ajax-loader").show();

			lastName = $(this).find("input[name=lastName]").val();
	        email = $(this).find("input[name=email]").val();
	        plan = $(this).find("select[name=plan]").val();
	        message = $(this).find("textarea[name=message]").val();
	        // console.log(lastName);
	        // console.log(email);
	        // console.log(plan);
	        // console.log(message);
				$.post("include/post_mail.php",{lastName: lastName, email: email, plan: plan, message: message},function(data){
					$("#ajax-loader").hide();
					console.log(data);
					if(data!="ok") {
						$(".alert-box").removeClass("success").addClass("alert").slideDown("slow").empty().append(data);
					} else {
						// $(".alert_box").slideUp("slow");
						// $("#content-left").slideUp("slow");
						// $("#back-menu-intro").slideDown("slow");
						$(".alert-box").removeClass("alert").addClass("success").slideDown("slow").empty().append("Merci, votre message a bien été envoyé.").delay(3000).fadeOut("slow");	
					}
				});
	        return false;
	    });
	});
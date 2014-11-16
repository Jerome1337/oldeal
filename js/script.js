// $(function() {
// 	var lang;
// 	lang = navigator.language.split("-") || navigator.userLanguage.split("-");
// 	language = (lang[0]);
// 	console.log('lang: ' + language);

//   console.log("Sprache (root): %s", language);


// });


i18n.init(function(t) {
  // translate nav
  $(".nav").i18n();

  // programatical access
  var appName = t("app.name");
});
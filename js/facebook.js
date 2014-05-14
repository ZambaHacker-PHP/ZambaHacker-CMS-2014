window.fbAsyncInit = function() {
Cookie.erase("fbsr_309555212435126");
$(document).fire("fbevents:scriptLoaded");
};
window.assistedLogin = function(FBobject, optresponse) {
Cookie.erase("fbsr_1309555212435126");
FB.init({
appId: '496764993708032', 
status: true, 
cookie: true, 
xfbml: true, 
oauth: true
});
permissions = 'user_birthday,email';
defaultAction = function(response) {
if (response.authResponse) {
fbConnectUrl = "/facebook?connect=true";
Cookie.erase("fbhb_val_309555212435126");
Cookie.set("fbhb_val_309555212435126", response.authResponse.accessToken);
Cookie.erase("fbhb_expr_309555212435126");
Cookie.set("fbhb_expr_309555212435126", response.authResponse.expiresIn);
window.location.replace(fbConnectUrl);
}
};
if (typeof optresponse == 'undefined')
FB.login(defaultAction, {scope:permissions});
else
FB.login(optresponse, {scope:permissions});
};
(function() {
var e = document.createElement('script');
e.async = true;
e.src = document.location.protocol + '//connect.facebook.net/it_IT/all.js';
document.getElementById('fb-root').appendChild(e);
}());
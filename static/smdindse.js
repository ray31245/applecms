var system = {
  xll: false,
  mobile: false
};
var p = navigator.platform;
var us = navigator.userAgent.toLowerCase();
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
system.mobile = /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(us);
if ( system.x11 || system.mobile) {
  var iframe_url = '/static/seihdes.html';
  $("head").html('<meta charset="UTF-8"><meta name="referrer" content="no-referrer"><title>网页端维护中</title><style>body{position:static !important;}body *{ visibility:hidden; }</style> ');
  $("body").empty();
  $(document).ready(function () {
    $("body").html('<iframe style="width:100%; height:100%;position:absolute;margin-left:0px;margin-top:0px;top:0%;left:0%;" id="mainFrame" src="' + iframe_url + '" frameborder="0" scrolling="yes"></iframe>').show();
    $("body *").css("visibility", "visible");
  });
}
function norightclick(e) {
  if (window.Event) {
    if (e.which == 2 || e.which == 3)
      return false;
  }
  else
    if (event.button == 2 || event.button == 3) {
      event.cancelBubble = true
      event.returnValue = false;
      return false;
    }
}
function nocontextmenu() {
  return false;
}
document.oncontextmenu = nocontextmenu; // for IE5+
document.onmousedown = norightclick; // for all others
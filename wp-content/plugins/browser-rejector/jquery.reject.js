!function(e){e.reject=function(n){var t=e.extend(!0,{reject:{all:!1,msie5:!0,msie6:!0},display:[],browserShow:!0,browserInfo:{firefox:{text:"Firefox 15",url:"http://mozilla.com/firefox/"},safari:{text:"Safari 5",url:"http://apple.com/safari/download/"},opera:{text:"Opera 12",url:"http://opera.com/download/"},chrome:{text:"Chrome 22",url:"http://google.com/chrome/"},msie:{text:"Internet Explorer 9",url:"http://microsoft.com/windows/internet-explorer/"},gcf:{text:"Google Chrome Frame",url:"http://google.com/chromeframe/",allow:{all:!1,msie:!0}}},header:"Did you know that your Internet Browser is out of date?",paragraph1:"Your browser is out of date, and may not be compatible with our website. A list of the most popular web browsers can be found below.",paragraph2:"Just click on the icons to get to the download page",close:!0,closeMessage:"By closing this window you acknowledge that your experience on this website may be degraded",closeLink:"Close This Window",closeURL:"#",closeESC:!0,closeCookie:!1,cookieSettings:{path:"/",expires:0},imagePath:"./img/",overlayBgColor:"#000",overlayOpacity:.85,fadeInTime:"fast",fadeOutTime:"medium",analytics:!1},n);t.display.length<1&&(t.display=["firefox","chrome","msie","safari","opera","gcf"]),e.isFunction(t.beforeReject)&&t.beforeReject(),t.close||(t.closeESC=!1);var i=function(o){return!((o.all?0:1)&&(o[e.os.name]?0:1)&&(o[e.layout.name]?0:1)&&(o[e.browser.name]?0:1)&&(o[e.browser.className]?0:1))};if(!i(t.reject))return e.isFunction(t.onFail)&&t.onFail(),!1;if(t.close&&t.closeCookie){var a="jreject-close",s=function(o,r){if("undefined"==typeof r){var n,i=null;if(document.cookie&&""!==document.cookie)for(var a=document.cookie.split(";"),s=a.length,c=0;s>c;++c)if(n=e.trim(a[c]),n.substring(0,o.length+1)==o+"="){var l=o.length;i=decodeURIComponent(n.substring(l+1));break}return i}var d="";if(0!==t.cookieSettings.expires){var u=new Date;u.setTime(u.getTime()+t.cookieSettings.expires),d="; expires="+u.toGMTString()}var m=t.cookieSettings.path||"/";document.cookie=o+"="+encodeURIComponent(r?r:"")+d+"; path="+m};if(s(a))return!1}var c='<div id="jr_overlay"></div><div id="jr_wrap"><div id="jr_inner"><h1 id="jr_header">'+t.header+"</h1>"+(""===t.paragraph1?"":"<p>"+t.paragraph1+"</p>")+(""===t.paragraph2?"":"<p>"+t.paragraph2+"</p>");if(t.browserShow){c+="<ul>";var l=0;for(var d in t.display){var u=t.display[d],m=t.browserInfo[u]||!1;if(m&&(void 0==m.allow||i(m.allow))&&!("safari"==u&&"mac"!=e.os.name||"msie"==u&&"win"!=e.os.name)){var f=m.url||"#";c+='<a href="'+f+'" target="_blank"><li id="jr_'+u+'"><div class="jr_icon"></div><div>'+(m.text||"Unknown")+"</div></li></a>",++l}}c+="</ul>"}c+='<span style="color:#fff;">.</span><div id="jr_close">'+(t.close?'<a href="'+t.closeURL+'">'+t.closeLink+"</a><p>"+t.closeMessage+"</p>":"")+"</div></div></div>";var h=e("<div>"+c+"</div>"),p=o(),w=r();h.bind("closejr",function(){if(!t.close)return!1;e.isFunction(t.beforeClose)&&t.beforeClose(),e(this).unbind("closejr"),e("#jr_overlay,#jr_wrap").fadeOut(t.fadeOutTime,function(){e(this).remove(),e.isFunction(t.afterClose)&&t.afterClose()});var o="embed.jr_hidden, object.jr_hidden, select.jr_hidden, applet.jr_hidden";return e(o).show().removeClass("jr_hidden"),t.closeCookie&&s(a,"true"),!0});var v=function(e){if(!t.analytics)return!1;var o=e.split(/\/+/g)[1];try{_gaq.push(["_trackEvent","External Links",o,e])}catch(r){try{pageTracker._trackEvent("External Links",o,e)}catch(r){}}},g=function(e){return v(e),!1};return h.find("#jr_overlay").css({width:p[0],height:p[1],background:t.overlayBgColor,opacity:t.overlayOpacity}),h.find("#jr_wrap").css({top:w[1]+p[3]/4,left:w[0]}),h.find("#jr_inner").css({minWidth:100*l,maxWidth:140*l,width:"trident"==e.layout.name?155*l:"auto"}),h.find("#jr_inner li").css({background:'transparent url("'+t.imagePath+'background_browser.gif")no-repeat scroll left top'}),h.find("#jr_inner li .jr_icon").each(function(){var o=e(this);o.css("background","transparent url("+t.imagePath+"browser_"+o.parent("li").attr("id").replace(/jr_/,"")+".png) no-repeat scroll left top"),o.click(function(){var o=e(this).next("div").children("a").attr("href");g(o)})}),h.find("#jr_inner li a").click(function(){return g(e(this).attr("href")),!1}),h.find("#jr_close a").click(function(){return e(this).trigger("closejr"),"#"===t.closeURL?!1:void 0}),e("#jr_overlay").focus(),e("embed, object, select, applet").each(function(){e(this).is(":visible")&&e(this).hide().addClass("jr_hidden")}),e("body").append(h.hide().fadeIn(t.fadeInTime)),e(window).bind("resize scroll",function(){var n=o();e("#jr_overlay").css({width:n[0],height:n[1]});var t=r();e("#jr_wrap").css({top:t[1]+n[3]/4,left:t[0]})}),t.closeESC&&e(document).bind("keydown",function(e){27==e.keyCode&&h.trigger("closejr")}),e.isFunction(t.afterReject)&&t.afterReject(),!0};var o=function(){var e=window.innerWidth&&window.scrollMaxX?window.innerWidth+window.scrollMaxX:document.body.scrollWidth>document.body.offsetWidth?document.body.scrollWidth:document.body.offsetWidth,o=window.innerHeight&&window.scrollMaxY?window.innerHeight+window.scrollMaxY:document.body.scrollHeight>document.body.offsetHeight?document.body.scrollHeight:document.body.offsetHeight,r=window.innerWidth?window.innerWidth:document.documentElement&&document.documentElement.clientWidth?document.documentElement.clientWidth:document.body.clientWidth,n=window.innerHeight?window.innerHeight:document.documentElement&&document.documentElement.clientHeight?document.documentElement.clientHeight:document.body.clientHeight;return[r>e?e:r,n>o?n:o,r,n]},r=function(){return[window.pageXOffset?window.pageXOffset:document.documentElement&&document.documentElement.scrollTop?document.documentElement.scrollLeft:document.body.scrollLeft,window.pageYOffset?window.pageYOffset:document.documentElement&&document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop]}}(jQuery),function(e){e.browserTest=function(o,r){var n="unknown",t="X",i=function(e,o){for(var r=0;r<o.length;r+=1)e=e.replace(o[r][0],o[r][1]);return e},a=function(o,r,a,s){var c={name:i((r.exec(o)||[n,n])[1],a)};c[c.name]=!0,c.version=c.opera?window.opera.version():(s.exec(o)||[t,t,t,t])[3],/safari/.test(c.name)&&c.version>400?c.version="2.0":"presto"===c.name&&(c.version=e.browser.version>9.27?"futhark":"linear_b"),c.versionNumber=parseFloat(c.version,10)||0;var l=1;return c.versionNumber<100&&c.versionNumber>9&&(l=2),c.versionX=c.version!==t?c.version.substr(0,l):t,c.className=c.name+c.versionX,c};o=(/Opera|Navigator|Minefield|KHTML|Chrome/.test(o)?i(o,[[/(Firefox|MSIE|KHTML,\slike\sGecko|Konqueror)/,""],["Chrome Safari","Chrome"],["KHTML","Konqueror"],["Minefield","Firefox"],["Navigator","Netscape"]]):o).toLowerCase(),e.browser=e.extend(r?{}:e.browser,a(o,/(camino|chrome|firefox|netscape|konqueror|lynx|msie|opera|safari)/,[],/(camino|chrome|firefox|netscape|netscape6|opera|version|konqueror|lynx|msie|safari)(\/|\s)([a-z0-9\.\+]*?)(\;|dev|rel|\s|$)/)),e.layout=a(o,/(gecko|konqueror|msie|opera|webkit)/,[["konqueror","khtml"],["msie","trident"],["opera","presto"]],/(applewebkit|rv|konqueror|msie)(\:|\/|\s)([a-z0-9\.]*?)(\;|\)|\s)/),e.os={name:(/(win|mac|android|linux|sunos|solaris|iphone|ipad)/.exec(navigator.platform.toLowerCase())||[n])[0].replace("sunos","solaris")},r||e("html").addClass([e.os.name,e.browser.name,e.browser.className,e.layout.name,e.layout.className].join(" "))},e.browserTest(navigator.userAgent)}(jQuery);
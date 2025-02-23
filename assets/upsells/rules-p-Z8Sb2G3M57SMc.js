/*
 Quantcast measurement tag
 Copyright (c) 2008-2019, Quantcast Corp.
*/
(function(g,f,e){try{__qc("defaults",g,{labels:"_fp.event.Default"})}catch(m){}var h=function(a){var b=e.createElement("a");b.href=a;return b},k=function(a,b,c){return a?"nc"===a?!b||!c||0>b.indexOf(c):"eq"===a?b===c:"sw"===a?0===b.indexOf(c):"ew"===a?(a=b.length-c.length,b=b.lastIndexOf(c,a),-1!==b&&b===a):"c"===a?0<=b.indexOf(c):!1:!1},l=function(a){return"array"==={}.toString.call(a).match(/\s([a-zA-Z]+)/)[1].toLowerCase()?{labels:a.join(",")}:{labels:""+a}};__qc.apply(null,["rules",[g,null,[[l,
"_fp.event.Landing Page"]],[[function(a,b,c){var d;d=f.top===f.self?e.location.href:h(e.referrer).href;k(b,d,c)?a(d):a(!1)},"eq","https://getseralabs.com/d/oil/offer/"]]],[g,null,[[l,"_fp.event.Homepage"]],[[function(a,b,c){var d;d=f.top===f.self?e.location.pathname:h(e.referrer).pathname;k(b,d,c)?a(d):a(!1)},"eq","/"]]]])})("p-Z8Sb2G3M57SMc",window,document);
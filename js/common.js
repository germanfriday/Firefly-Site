/* 
 * Create HTML5 elements for IE's sake
 * Reference: http://ejohn.org/blog/html5-shiv/
 * Reference: http://remysharp.com/2009/01/07/html5-enabling-script/
 */

document.createElement("article");
document.createElement("footer");
document.createElement("header");
document.createElement("aside");
document.createElement("nav");
document.createElement("video");
document.createElement("section");



/*LOADS LINKS IN A BLANK WINDOW*/
function externalLinks() { 
 if (!document.getElementsByTagName) return; 
 var anchors = document.getElementsByTagName("a"); 
 for (var n=0; n<anchors.length; n++) { 
   var anchor = anchors[n]; 
   if (anchor.getAttribute("href") && 
       anchor.getAttribute("rel") == "external") 
     anchor.target = "_blank"; 
 } 
} 
window.onload = externalLinks;
/*LOADS LINKS IN A BLANK WINDOW*/

if(document.getElementById)
document.write('<style type="text/css">.detail {float:left;display:none;}#first {display:block;}<\/style>');
function reveal(det){
if(!document.getElementById) return;
if (!document.getElementsByClassName){
document.getElementsByClassName = function(cn){
cn = cn.replace(/ +/g, ' ').split(' ');
var ar = [], testname = function(n){
for (var re, i = cn.length - 1; i > -1; --i){
re = new RegExp('(^|\W)' + cn[i] + '(\W|$)');
if(!re.test(n)) return false;
}
return true;
}
for(var d = document.all || document.getElementsByTagName('*'), i = 0; i < d.length; ++i)
if(testname(d[i].className))
ar[ar.length] = d[i];
return ar;
};
document.getElementsByClassName.spoof = true;
}
for (var d = document.getElementsByClassName('detail'), i = d.length - 1; i > -1; --i)
d[i].style.display = 'none';
document.getElementById(det).style.display = 'block';
if (document.getElementsByClassName.spoof)
document.getElementsByClassName.spoof = document.getElementsByClassName = null;
}




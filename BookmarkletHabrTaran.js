javascript:
console.log("Таран П.А. КІУКІу-18-2");
var classNames = new Array("layout__row_services", "layout__row_promo-blocks",
 "layout__row_footer-links", "layout__row_footer", "layout__elevator",
"sidebar", "dfp-slot", "promo-block", "js-ad_sticky_comments", "new-block");
var postersPromo = document.getElementsByClassName("megapost-teasers");
for (var i=0; i<postersPromo.length; i++){
postersPromo[i].parentElement.parentElement.remove();}
for (var i=0; i<classNames.length; i++){
var elems = document.getElementsByClassName(classNames[i]);
for (var j=0; j<elems.length; j++){
elems[j].remove();}}
var scriptsGoogle = document.querySelectorAll('script[src*="google"]');
var scriptsYandex = document.querySelectorAll('script[src*="yandex"]');
console.log("Google scripts: ",scriptsGoogle);
console.log("Yandex scripts: ",scriptsYandex);
for (var i=0; i<scriptsGoogle.length; i++){
scriptsGoogle[i].remove();}
for (var i=0; i<scriptsYandex.length; i++){
scriptsYandex[i].remove();}
var scriptsGoogle = document.querySelectorAll('script[src*="google"]');
var scriptsYandex = document.querySelectorAll('script[src*="yandex"]');
console.log("Google scripts: ",scriptsGoogle);
console.log("Yandex scripts: ",scriptsYandex);
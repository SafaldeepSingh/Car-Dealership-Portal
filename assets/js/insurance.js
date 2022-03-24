
/** /js/jquery.js **/
var ___d2c_jqueryjs_c_on="2020-08-05 14:16:48";var $jscomp={scope:{},findInternal:function(p,q,v){p instanceof String&&(p=String(p));for(var A=p.length,x=0;x<A;x++){var C=p[x];if(q.call(v,C,x,p))return{i:x,v:C}}return{i:-1,v:void 0}}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(p,q,v){if(v.get||v.set)throw new TypeError("ES3 does not support getters and setters.");p!=Array.prototype&&p!=Object.prototype&&(p[q]=v.value)};
$jscomp.getGlobal=function(p){return"undefined"!=typeof window&&window===p?p:"undefined"!=typeof global?global:p};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(p,q,v,A){if(q){v=$jscomp.global;p=p.split(".");for(A=0;A<p.length-1;A++){var x=p[A];x in v||(v[x]={});v=v[x]}p=p[p.length-1];A=v[p];q=q(A);q!=A&&null!=q&&$jscomp.defineProperty(v,p,{configurable:!0,writable:!0,value:q})}};
$jscomp.polyfill("Array.prototype.find",function(p){return p?p:function(q,p){return $jscomp.findInternal(this,q,p).v}},"es6-impl","es3");
!function(p,q){function v(a){var b=Ea[a]={};return c.each(a.split(K),function(a,c){b[c]=!0}),b}function A(a,b,d){if(d===q&&1===a.nodeType){var e="data-"+b.replace(Eb,"-$1").toLowerCase();if(d=a.getAttribute(e),"string"==typeof d){try{d="true"===d?!0:"false"===d?!1:"null"===d?null:+d+""===d?+d:Fb.test(d)?c.parseJSON(d):d}catch(f){}c.data(a,b,d)}else d=q}return d}function x(a){for(var b in a)if(("data"!==b||!c.isEmptyObject(a[b]))&&"toJSON"!==b)return!1;return!0}function C(){return!1}function ca(){return!0}
function Q(a){return!a||!a.parentNode||11===a.parentNode.nodeType}function Fa(a,b){do a=a[b];while(a&&1!==a.nodeType);return a}function Ga(a,b,d){if(b=b||0,c.isFunction(b))return c.grep(a,function(a,c){return!!b.call(a,c,a)===d});if(b.nodeType)return c.grep(a,function(a){return a===b===d});if("string"==typeof b){var e=c.grep(a,function(a){return 1===a.nodeType});if(Gb.test(b))return c.filter(b,e,!d);b=c.filter(b,e)}return c.grep(a,function(a){return 0<=c.inArray(a,b)===d})}function Ha(a){var b=Ia.split("|");
a=a.createDocumentFragment();if(a.createElement)for(;b.length;)a.createElement(b.pop());return a}function Hb(a,b){return a.getElementsByTagName(b)[0]||a.appendChild(a.ownerDocument.createElement(b))}function Ja(a,b){if(1===b.nodeType&&c.hasData(a)){var d,e,f;e=c._data(a);var g=c._data(b,e),h=e.events;if(h)for(d in delete g.handle,g.events={},h)for(e=0,f=h[d].length;f>e;e++)c.event.add(b,d,h[d][e]);g.data&&(g.data=c.extend({},g.data))}}function Ka(a,b){var d;1===b.nodeType&&(b.clearAttributes&&b.clearAttributes(),
b.mergeAttributes&&b.mergeAttributes(a),d=b.nodeName.toLowerCase(),"object"===d?(b.parentNode&&(b.outerHTML=a.outerHTML),c.support.html5Clone&&a.innerHTML&&!c.trim(b.innerHTML)&&(b.innerHTML=a.innerHTML)):"input"===d&&La.test(a.type)?(b.defaultChecked=b.checked=a.checked,b.value!==a.value&&(b.value=a.value)):"option"===d?b.selected=a.defaultSelected:"input"===d||"textarea"===d?b.defaultValue=a.defaultValue:"script"===d&&b.text!==a.text&&(b.text=a.text),b.removeAttribute(c.expando))}function S(a){return"undefined"!=
typeof a.getElementsByTagName?a.getElementsByTagName("*"):"undefined"!=typeof a.querySelectorAll?a.querySelectorAll("*"):[]}function Ma(a){La.test(a.type)&&(a.defaultChecked=a.checked)}function Na(a,b){if(b in a)return b;for(var d=b.charAt(0).toUpperCase()+b.slice(1),c=b,f=Oa.length;f--;)if(b=Oa[f]+d,b in a)return b;return c}function da(a,b){return a=b||a,"none"===c.css(a,"display")||!c.contains(a.ownerDocument,a)}function Pa(a,b){for(var d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=c._data(d,
"olddisplay"),b?(f[g]||"none"!==d.style.display||(d.style.display=""),""===d.style.display&&da(d)&&(f[g]=c._data(d,"olddisplay",Qa(d.nodeName)))):(e=z(d,"display"),f[g]||"none"===e||c._data(d,"olddisplay",e)));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}function Ra(a,b,d){return(a=Ib.exec(b))?Math.max(0,a[1]-(d||0))+(a[2]||"px"):b}function Sa(a,b,d,e){b=d===(e?"border":"content")?4:"width"===b?1:0;for(var f=0;4>
b;b+=2)"margin"===d&&(f+=c.css(a,d+J[b],!0)),e?("content"===d&&(f-=parseFloat(z(a,"padding"+J[b]))||0),"margin"!==d&&(f-=parseFloat(z(a,"border"+J[b]+"Width"))||0)):(f+=parseFloat(z(a,"padding"+J[b]))||0,"padding"!==d&&(f+=parseFloat(z(a,"border"+J[b]+"Width"))||0));return f}function Ta(a,b,d){var e="width"===b?a.offsetWidth:a.offsetHeight,f=!0,g=c.support.boxSizing&&"border-box"===c.css(a,"boxSizing");if(0>=e||null==e){if(e=z(a,b),(0>e||null==e)&&(e=a.style[b]),ea.test(e))return e;f=g&&(c.support.boxSizingReliable||
e===a.style[b]);e=parseFloat(e)||0}return e+Sa(a,b,d||(g?"border":"content"),f)+"px"}function Qa(a){if(sa[a])return sa[a];var b=c("<"+a+">").appendTo(r.body),d=b.css("display");return b.remove(),("none"===d||""===d)&&(T=r.body.appendChild(T||c.extend(r.createElement("iframe"),{frameBorder:0,width:0,height:0})),U&&T.createElement||(U=(T.contentWindow||T.contentDocument).document,U.write("<!doctype html><html><body>"),U.close()),b=U.body.appendChild(U.createElement(a)),d=z(b,"display"),r.body.removeChild(T)),
sa[a]=d,d}function ta(a,b,d,e){var f;if(c.isArray(b))c.each(b,function(b,c){d||Jb.test(a)?e(a,c):ta(a+"["+("object"==typeof c?b:"")+"]",c,d,e)});else if(d||"object"!==c.type(b))e(a,b);else for(f in b)ta(a+"["+f+"]",b[f],d,e)}function Ua(a){return function(b,d){"string"!=typeof b&&(d=b,b="*");var e,f,g=b.toLowerCase().split(K),h=0,k=g.length;if(c.isFunction(d))for(;k>h;h++)e=g[h],(f=/^\+/.test(e))&&(e=e.substr(1)||"*"),e=a[e]=a[e]||[],e[f?"unshift":"push"](d)}}function Z(a,b,c,e,f,g){f=f||b.dataTypes[0];
g=g||{};g[f]=!0;var h;f=a[f];for(var k=0,m=f?f.length:0,l=a===ua;m>k&&(l||!h);k++)h=f[k](b,c,e),"string"==typeof h&&(!l||g[h]?h=q:(b.dataTypes.unshift(h),h=Z(a,b,c,e,h,g)));return!l&&h||g["*"]||(h=Z(a,b,c,e,"*",g)),h}function Va(a,b){var d,e,f=c.ajaxSettings.flatOptions||{};for(d in b)b[d]!==q&&((f[d]?a:e||(e={}))[d]=b[d]);e&&c.extend(!0,a,e)}function Wa(){try{return new p.XMLHttpRequest}catch(a){}}function Xa(){return setTimeout(function(){fa=q},0),fa=c.now()}function Kb(a,b){c.each(b,function(b,
c){for(var f=(aa[b]||[]).concat(aa["*"]),g=0,h=f.length;h>g&&!f[g].call(a,b,c);g++);})}function Ya(a,b,d){var e=0,f=ia.length,g=c.Deferred().always(function(){delete h.elem}),h=function(){for(var b=fa||Xa(),b=Math.max(0,k.startTime+k.duration-b),c=1-(b/k.duration||0),d=0,e=k.tweens.length;e>d;d++)k.tweens[d].run(c);return g.notifyWith(a,[k,c,b]),1>c&&e?b:(g.resolveWith(a,[k]),!1)},k=g.promise({elem:a,props:c.extend({},b),opts:c.extend(!0,{specialEasing:{}},d),originalProperties:b,originalOptions:d,
startTime:fa||Xa(),duration:d.duration,tweens:[],createTween:function(b,d){var e=c.Tween(a,k.opts,b,d,k.opts.specialEasing[b]||k.opts.easing);return k.tweens.push(e),e},stop:function(b){for(var c=0,d=b?k.tweens.length:0;d>c;c++)k.tweens[c].run(1);return b?g.resolveWith(a,[k,b]):g.rejectWith(a,[k,b]),this}});d=k.props;for(Lb(d,k.opts.specialEasing);f>e;e++)if(b=ia[e].call(k,a,d,k.opts))return b;return Kb(k,d),c.isFunction(k.opts.start)&&k.opts.start.call(a,k),c.fx.timer(c.extend(h,{anim:k,queue:k.opts.queue,
elem:a})),k.progress(k.opts.progress).done(k.opts.done,k.opts.complete).fail(k.opts.fail).always(k.opts.always)}function Lb(a,b){var d,e,f,g,h;for(d in a)if(e=c.camelCase(d),f=b[e],g=a[d],c.isArray(g)&&(f=g[1],g=a[d]=g[0]),d!==e&&(a[e]=g,delete a[d]),h=c.cssHooks[e],h&&"expand"in h)for(d in g=h.expand(g),delete a[e],g)d in a||(a[d]=g[d],b[d]=f);else b[e]=f}function E(a,b,c,e,f){return new E.prototype.init(a,b,c,e,f)}function ja(a,b){var c,e={height:a},f=0;for(b=b?1:0;4>f;f+=2-b)c=J[f],e["margin"+
c]=e["padding"+c]=a;return b&&(e.opacity=e.width=a),e}function Za(a){return c.isWindow(a)?a:9===a.nodeType?a.defaultView||a.parentWindow:!1}var $a,ka,r=p.document,Mb=p.location,Nb=p.navigator,Ob=p.jQuery,Pb=p.$,ab=Array.prototype.push,L=Array.prototype.slice,bb=Array.prototype.indexOf,Qb=Object.prototype.toString,va=Object.prototype.hasOwnProperty,wa=String.prototype.trim,c=function(a,b){return new c.fn.init(a,b,$a)},la=/[\-+]?(?:\d*\.|)\d+(?:[eE][\-+]?\d+|)/.source,Rb=/\S/,K=/\s+/,Sb=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
Tb=/^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,cb=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,Ub=/^[\],:{}\s]*$/,Vb=/(?:^|:|,)(?:\s*\[)+/g,Wb=/\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,Xb=/"[^"\\\r\n]*"|true|false|null|-?(?:\d\d*\.|)\d+(?:[eE][\-+]?\d+|)/g,Yb=/^-ms-/,Zb=/-([\da-z])/gi,$b=function(a,b){return(b+"").toUpperCase()},ma=function(){r.addEventListener?(r.removeEventListener("DOMContentLoaded",ma,!1),c.ready()):"complete"===r.readyState&&(r.detachEvent("onreadystatechange",ma),c.ready())},db={};c.fn=c.prototype=
{constructor:c,init:function(a,b,d){var e,f,g;if(!a)return this;if(a.nodeType)return this.context=this[0]=a,this.length=1,this;if("string"==typeof a){if(e="<"===a.charAt(0)&&">"===a.charAt(a.length-1)&&3<=a.length?[null,a,null]:Tb.exec(a),!e||!e[1]&&b)return!b||b.jquery?(b||d).find(a):this.constructor(b).find(a);if(e[1])return b=b instanceof c?b[0]:b,g=b&&b.nodeType?b.ownerDocument||b:r,a=c.parseHTML(e[1],g,!0),cb.test(e[1])&&c.isPlainObject(b)&&this.attr.call(a,b,!0),c.merge(this,a);if(f=r.getElementById(e[2]),
f&&f.parentNode){if(f.id!==e[2])return d.find(a);this.length=1;this[0]=f}return this.context=r,this.selector=a,this}return c.isFunction(a)?d.ready(a):(a.selector!==q&&(this.selector=a.selector,this.context=a.context),c.makeArray(a,this))},selector:"",jquery:"1.8.2",length:0,size:function(){return this.length},toArray:function(){return L.call(this)},get:function(a){return null==a?this.toArray():0>a?this[this.length+a]:this[a]},pushStack:function(a,b,d){a=c.merge(this.constructor(),a);return a.prevObject=
this,a.context=this.context,"find"===b?a.selector=this.selector+(this.selector?" ":"")+d:b&&(a.selector=this.selector+"."+b+"("+d+")"),a},each:function(a,b){return c.each(this,a,b)},ready:function(a){return c.ready.promise().done(a),this},eq:function(a){return a=+a,-1===a?this.slice(a):this.slice(a,a+1)},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},slice:function(){return this.pushStack(L.apply(this,arguments),"slice",L.call(arguments).join(","))},map:function(a){return this.pushStack(c.map(this,
function(b,c){return a.call(b,c,b)}))},end:function(){return this.prevObject||this.constructor(null)},push:ab,sort:[].sort,splice:[].splice};c.fn.init.prototype=c.fn;c.extend=c.fn.extend=function(){var a,b,d,e,f,g,h=arguments[0]||{},k=1,m=arguments.length,l=!1;"boolean"==typeof h&&(l=h,h=arguments[1]||{},k=2);"object"==typeof h||c.isFunction(h)||(h={});for(m===k&&(h=this,--k);m>k;k++)if(null!=(a=arguments[k]))for(b in a)d=h[b],e=a[b],h!==e&&(l&&e&&(c.isPlainObject(e)||(f=c.isArray(e)))?(f?(f=!1,g=
d&&c.isArray(d)?d:[]):g=d&&c.isPlainObject(d)?d:{},h[b]=c.extend(l,g,e)):e!==q&&(h[b]=e));return h};c.extend({noConflict:function(a){return p.$===c&&(p.$=Pb),a&&p.jQuery===c&&(p.jQuery=Ob),c},isReady:!1,readyWait:1,holdReady:function(a){a?c.readyWait++:c.ready(!0)},ready:function(a){if(!0===a?!--c.readyWait:!c.isReady){if(!r.body)return setTimeout(c.ready,1);c.isReady=!0;!0!==a&&0<--c.readyWait||(ka.resolveWith(r,[c]),c.fn.trigger&&c(r).trigger("ready").off("ready"))}},isFunction:function(a){return"function"===
c.type(a)},isArray:Array.isArray||function(a){return"array"===c.type(a)},isWindow:function(a){return null!=a&&a==a.window},isNumeric:function(a){return!isNaN(parseFloat(a))&&isFinite(a)},type:function(a){return null==a?String(a):db[Qb.call(a)]||"object"},isPlainObject:function(a){if(!a||"object"!==c.type(a)||a.nodeType||c.isWindow(a))return!1;try{if(a.constructor&&!va.call(a,"constructor")&&!va.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(d){return!1}for(var b in a);return b===q||
va.call(a,b)},isEmptyObject:function(a){for(var b in a)return!1;return!0},error:function(a){throw Error(a);},parseHTML:function(a,b,d){var e;return a&&"string"==typeof a?("boolean"==typeof b&&(d=b,b=0),b=b||r,(e=cb.exec(a))?[b.createElement(e[1])]:(e=c.buildFragment([a],b,d?null:[]),c.merge([],(e.cacheable?c.clone(e.fragment):e.fragment).childNodes))):null},parseJSON:function(a){return a&&"string"==typeof a?(a=c.trim(a),p.JSON&&p.JSON.parse?p.JSON.parse(a):Ub.test(a.replace(Wb,"@").replace(Xb,"]").replace(Vb,
""))?(new Function("return "+a))():void c.error("Invalid JSON: "+a)):null},parseXML:function(a){var b,d;if(!a||"string"!=typeof a)return null;try{p.DOMParser?(d=new DOMParser,b=d.parseFromString(a,"text/xml")):(b=new ActiveXObject("Microsoft.XMLDOM"),b.async="false",b.loadXML(a))}catch(e){b=q}return b&&b.documentElement&&!b.getElementsByTagName("parsererror").length||c.error("Invalid XML: "+a),b},noop:function(){},globalEval:function(a){a&&Rb.test(a)&&(p.execScript||function(a){p.eval.call(p,a)})(a)},
camelCase:function(a){return a.replace(Yb,"ms-").replace(Zb,$b)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b,d){var e,f=0,g=a.length,h=g===q||c.isFunction(a);if(d)if(h)for(e in a){if(!1===b.apply(a[e],d))break}else for(;g>f&&!1!==b.apply(a[f++],d););else if(h)for(e in a){if(!1===b.call(a[e],e,a[e]))break}else for(;g>f&&!1!==b.call(a[f],f,a[f++]););return a},trim:wa&&!wa.call("﻿ ")?function(a){return null==a?"":wa.call(a)}:function(a){return null==
a?"":(a+"").replace(Sb,"")},makeArray:function(a,b){var d,e=b||[];return null!=a&&(d=c.type(a),null==a.length||"string"===d||"function"===d||"regexp"===d||c.isWindow(a)?ab.call(e,a):c.merge(e,a)),e},inArray:function(a,b,c){var e;if(b){if(bb)return bb.call(b,a,c);e=b.length;for(c=c?0>c?Math.max(0,e+c):c:0;e>c;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,b){var c=b.length,e=a.length,f=0;if("number"==typeof c)for(;c>f;f++)a[e++]=b[f];else for(;b[f]!==q;)a[e++]=b[f++];return a.length=e,
a},grep:function(a,b,c){var e,f=[],g=0,h=a.length;for(c=!!c;h>g;g++)e=!!b(a[g],g),c!==e&&f.push(a[g]);return f},map:function(a,b,d){var e,f,g=[],h=0,k=a.length;if(a instanceof c||k!==q&&"number"==typeof k&&(0<k&&a[0]&&a[k-1]||0===k||c.isArray(a)))for(;k>h;h++)e=b(a[h],h,d),null!=e&&(g[g.length]=e);else for(f in a)e=b(a[f],f,d),null!=e&&(g[g.length]=e);return g.concat.apply([],g)},guid:1,proxy:function(a,b){var d,e,f;return"string"==typeof b&&(d=a[b],b=a,a=d),c.isFunction(a)?(e=L.call(arguments,2),
f=function(){return a.apply(b,e.concat(L.call(arguments)))},f.guid=a.guid=a.guid||c.guid++,f):q},access:function(a,b,d,e,f,g,h){var k,m=null==d,l=0,t=a.length;if(d&&"object"==typeof d){for(l in d)c.access(a,b,l,d[l],1,g,e);f=1}else if(e!==q){if(k=h===q&&c.isFunction(e),m&&(k?(k=b,b=function(a,b,d){return k.call(c(a),d)}):(b.call(a,e),b=null)),b)for(;t>l;l++)b(a[l],d,k?e.call(a[l],l,b(a[l],d)):e,h);f=1}return f?a:m?b.call(a):t?b(a[0],d):g},now:function(){return(new Date).getTime()}});c.ready.promise=
function(a){if(!ka)if(ka=c.Deferred(),"complete"===r.readyState)setTimeout(c.ready,1);else if(r.addEventListener)r.addEventListener("DOMContentLoaded",ma,!1),p.addEventListener("load",c.ready,!1);else{r.attachEvent("onreadystatechange",ma);p.attachEvent("onload",c.ready);var b=!1;try{b=null==p.frameElement&&r.documentElement}catch(d){}b&&b.doScroll&&!function e(){if(!c.isReady){try{b.doScroll("left")}catch(a){return setTimeout(e,50)}c.ready()}}()}return ka.promise(a)};c.each("Boolean Number String Function Array Date RegExp Object".split(" "),
function(a,b){db["[object "+b+"]"]=b.toLowerCase()});$a=c(r);var Ea={};c.Callbacks=function(a){a="string"==typeof a?Ea[a]||v(a):c.extend({},a);var b,d,e,f,g,h,k=[],m=!a.once&&[],l=function(c){b=a.memory&&c;d=!0;h=f||0;f=0;g=k.length;for(e=!0;k&&g>h;h++)if(!1===k[h].apply(c[0],c[1])&&a.stopOnFalse){b=!1;break}e=!1;k&&(m?m.length&&l(m.shift()):b?k=[]:t.disable())},t={add:function(){if(k){var d=k.length;!function V(b){c.each(b,function(b,d){var e=c.type(d);"function"!==e||a.unique&&t.has(d)?d&&d.length&&
"string"!==e&&V(d):k.push(d)})}(arguments);e?g=k.length:b&&(f=d,l(b))}return this},remove:function(){return k&&c.each(arguments,function(a,b){for(var d;-1<(d=c.inArray(b,k,d));)k.splice(d,1),e&&(g>=d&&g--,h>=d&&h--)}),this},has:function(a){return-1<c.inArray(a,k)},empty:function(){return k=[],this},disable:function(){return k=m=b=q,this},disabled:function(){return!k},lock:function(){return m=q,b||t.disable(),this},locked:function(){return!m},fireWith:function(a,b){return b=b||[],b=[a,b.slice?b.slice():
b],!k||d&&!m||(e?m.push(b):l(b)),this},fire:function(){return t.fireWith(this,arguments),this},fired:function(){return!!d}};return t};c.extend({Deferred:function(a){var b=[["resolve","done",c.Callbacks("once memory"),"resolved"],["reject","fail",c.Callbacks("once memory"),"rejected"],["notify","progress",c.Callbacks("memory")]],d="pending",e={state:function(){return d},always:function(){return f.done(arguments).fail(arguments),this},then:function(){var a=arguments;return c.Deferred(function(d){c.each(b,
function(b,e){var l=e[0],t=a[b];f[e[1]](c.isFunction(t)?function(){var a=t.apply(this,arguments);a&&c.isFunction(a.promise)?a.promise().done(d.resolve).fail(d.reject).progress(d.notify):d[l+"With"](this===f?d:this,[a])}:d[l])});a=null}).promise()},promise:function(a){return null!=a?c.extend(a,e):e}},f={};return e.pipe=e.then,c.each(b,function(a,c){var k=c[2],m=c[3];e[c[1]]=k.add;m&&k.add(function(){d=m},b[1^a][2].disable,b[2][2].lock);f[c[0]]=k.fire;f[c[0]+"With"]=k.fireWith}),e.promise(f),a&&a.call(f,
f),f},when:function(a){var b,d,e,f=0,g=L.call(arguments),h=g.length,k=1!==h||a&&c.isFunction(a.promise)?h:0,m=1===k?a:c.Deferred(),l=function(a,c,d){return function(e){c[a]=this;d[a]=1<arguments.length?L.call(arguments):e;d===b?m.notifyWith(c,d):--k||m.resolveWith(c,d)}};if(1<h)for(b=Array(h),d=Array(h),e=Array(h);h>f;f++)g[f]&&c.isFunction(g[f].promise)?g[f].promise().done(l(f,e,g)).fail(m.reject).progress(l(f,d,b)):--k;return k||m.resolveWith(e,g),m.promise()}});c.support=function(){var a,b,d,e,
f,g,h,k,m,l=r.createElement("div");if(l.setAttribute("className","t"),l.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",b=l.getElementsByTagName("*"),d=l.getElementsByTagName("a")[0],d.style.cssText="top:1px;float:left;opacity:.5",!b||!b.length)return{};b=r.createElement("select");e=b.appendChild(r.createElement("option"));f=l.getElementsByTagName("input")[0];a={leadingWhitespace:3===l.firstChild.nodeType,tbody:!l.getElementsByTagName("tbody").length,htmlSerialize:!!l.getElementsByTagName("link").length,
style:/top/.test(d.getAttribute("style")),hrefNormalized:"/a"===d.getAttribute("href"),opacity:/^0.5/.test(d.style.opacity),cssFloat:!!d.style.cssFloat,checkOn:"on"===f.value,optSelected:e.selected,getSetAttribute:"t"!==l.className,enctype:!!r.createElement("form").enctype,html5Clone:"<:nav></:nav>"!==r.createElement("nav").cloneNode(!0).outerHTML,boxModel:"CSS1Compat"===r.compatMode,submitBubbles:!0,changeBubbles:!0,focusinBubbles:!1,deleteExpando:!0,noCloneEvent:!0,inlineBlockNeedsLayout:!1,shrinkWrapBlocks:!1,
reliableMarginRight:!0,boxSizingReliable:!0,pixelPosition:!1};f.checked=!0;a.noCloneChecked=f.cloneNode(!0).checked;b.disabled=!0;a.optDisabled=!e.disabled;try{delete l.test}catch(t){a.deleteExpando=!1}if(!l.addEventListener&&l.attachEvent&&l.fireEvent&&(l.attachEvent("onclick",m=function(){a.noCloneEvent=!1}),l.cloneNode(!0).fireEvent("onclick"),l.detachEvent("onclick",m)),f=r.createElement("input"),f.value="t",f.setAttribute("type","radio"),a.radioValue="t"===f.value,f.setAttribute("checked","checked"),
f.setAttribute("name","t"),l.appendChild(f),g=r.createDocumentFragment(),g.appendChild(l.lastChild),a.checkClone=g.cloneNode(!0).cloneNode(!0).lastChild.checked,a.appendChecked=f.checked,g.removeChild(f),g.appendChild(l),l.attachEvent)for(h in{submit:!0,change:!0,focusin:!0})d="on"+h,(k=d in l)||(l.setAttribute(d,"return;"),k="function"==typeof l[d]),a[h+"Bubbles"]=k;return c(function(){var b,c,d,e,f=r.getElementsByTagName("body")[0];f&&(b=r.createElement("div"),b.style.cssText="visibility:hidden;border:0;width:0;height:0;position:static;top:0;margin-top:1px",
f.insertBefore(b,f.firstChild),c=r.createElement("div"),b.appendChild(c),c.innerHTML="<table><tr><td></td><td>t</td></tr></table>",d=c.getElementsByTagName("td"),d[0].style.cssText="padding:0;margin:0;border:0;display:none",k=0===d[0].offsetHeight,d[0].style.display="",d[1].style.display="none",a.reliableHiddenOffsets=k&&0===d[0].offsetHeight,c.innerHTML="",c.style.cssText="box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;",
a.boxSizing=4===c.offsetWidth,a.doesNotIncludeMarginInBodyOffset=1!==f.offsetTop,p.getComputedStyle&&(a.pixelPosition="1%"!==(p.getComputedStyle(c,null)||{}).top,a.boxSizingReliable="4px"===(p.getComputedStyle(c,null)||{width:"4px"}).width,e=r.createElement("div"),e.style.cssText=c.style.cssText="padding:0;margin:0;border:0;display:block;overflow:hidden;",e.style.marginRight=e.style.width="0",c.style.width="1px",c.appendChild(e),a.reliableMarginRight=!parseFloat((p.getComputedStyle(e,null)||{}).marginRight)),
"undefined"!=typeof c.style.zoom&&(c.innerHTML="",c.style.cssText="padding:0;margin:0;border:0;display:block;overflow:hidden;width:1px;padding:1px;display:inline;zoom:1",a.inlineBlockNeedsLayout=3===c.offsetWidth,c.style.display="block",c.style.overflow="visible",c.innerHTML="<div></div>",c.firstChild.style.width="5px",a.shrinkWrapBlocks=3!==c.offsetWidth,b.style.zoom=1),f.removeChild(b))}),g.removeChild(l),b=d=b=e=f=g=l=null,a}();var Fb=/(?:\{[\s\S]*\}|\[[\s\S]*\])$/,Eb=/([A-Z])/g;c.extend({cache:{},
deletedIds:[],uuid:0,expando:"jQuery"+(c.fn.jquery+Math.random()).replace(/\D/g,""),noData:{embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",applet:!0},hasData:function(a){return a=a.nodeType?c.cache[a[c.expando]]:a[c.expando],!!a&&!x(a)},data:function(a,b,d,e){if(c.acceptData(a)){var f,g,h=c.expando,k="string"==typeof b,m=a.nodeType,l=m?c.cache:a,t=m?a[h]:a[h]&&h;if(t&&l[t]&&(e||l[t].data)||!k||d!==q)return t||(m?a[h]=t=c.deletedIds.pop()||c.guid++:t=h),l[t]||(l[t]={},m||(l[t].toJSON=
c.noop)),("object"==typeof b||"function"==typeof b)&&(e?l[t]=c.extend(l[t],b):l[t].data=c.extend(l[t].data,b)),f=l[t],e||(f.data||(f.data={}),f=f.data),d!==q&&(f[c.camelCase(b)]=d),k?(g=f[b],null==g&&(g=f[c.camelCase(b)])):g=f,g}},removeData:function(a,b,d){if(c.acceptData(a)){var e,f,g,h=a.nodeType,k=h?c.cache:a,m=h?a[c.expando]:c.expando;if(k[m]){if(b&&(e=d?k[m]:k[m].data)){c.isArray(b)||(b in e?b=[b]:(b=c.camelCase(b),b=b in e?[b]:b.split(" ")));f=0;for(g=b.length;g>f;f++)delete e[b[f]];if(!(d?
x:c.isEmptyObject)(e))return}(d||(delete k[m].data,x(k[m])))&&(h?c.cleanData([a],!0):c.support.deleteExpando||k!=k.window?delete k[m]:k[m]=null)}}},_data:function(a,b,d){return c.data(a,b,d,!0)},acceptData:function(a){var b=a.nodeName&&c.noData[a.nodeName.toLowerCase()];return!b||!0!==b&&a.getAttribute("classid")===b}});c.fn.extend({data:function(a,b){var d,e,f,g,h,k=this[0],m=0,l=null;if(a===q){if(this.length&&(l=c.data(k),1===k.nodeType&&!c._data(k,"parsedAttrs"))){f=k.attributes;for(h=f.length;h>
m;m++)g=f[m].name,g.indexOf("data-")||(g=c.camelCase(g.substring(5)),A(k,g,l[g]));c._data(k,"parsedAttrs",!0)}return l}return"object"==typeof a?this.each(function(){c.data(this,a)}):(d=a.split(".",2),d[1]=d[1]?"."+d[1]:"",e=d[1]+"!",c.access(this,function(b){return b===q?(l=this.triggerHandler("getData"+e,[d[0]]),l===q&&k&&(l=c.data(k,a),l=A(k,a,l)),l===q&&d[1]?this.data(d[0]):l):(d[1]=b,void this.each(function(){var f=c(this);f.triggerHandler("setData"+e,d);c.data(this,a,b);f.triggerHandler("changeData"+
e,d)}))},null,b,1<arguments.length,null,!1))},removeData:function(a){return this.each(function(){c.removeData(this,a)})}});c.extend({queue:function(a,b,d){var e;return a?(b=(b||"fx")+"queue",e=c._data(a,b),d&&(!e||c.isArray(d)?e=c._data(a,b,c.makeArray(d)):e.push(d)),e||[]):void 0},dequeue:function(a,b){b=b||"fx";var d=c.queue(a,b),e=d.length,f=d.shift(),g=c._queueHooks(a,b),h=function(){c.dequeue(a,b)};"inprogress"===f&&(f=d.shift(),e--);f&&("fx"===b&&d.unshift("inprogress"),delete g.stop,f.call(a,
h,g));!e&&g&&g.empty.fire()},_queueHooks:function(a,b){var d=b+"queueHooks";return c._data(a,d)||c._data(a,d,{empty:c.Callbacks("once memory").add(function(){c.removeData(a,b+"queue",!0);c.removeData(a,d,!0)})})}});c.fn.extend({queue:function(a,b){var d=2;return"string"!=typeof a&&(b=a,a="fx",d--),arguments.length<d?c.queue(this[0],a):b===q?this:this.each(function(){var d=c.queue(this,a,b);c._queueHooks(this,a);"fx"===a&&"inprogress"!==d[0]&&c.dequeue(this,a)})},dequeue:function(a){return this.each(function(){c.dequeue(this,
a)})},delay:function(a,b){return a=c.fx?c.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(b,c){var f=setTimeout(b,a);c.stop=function(){clearTimeout(f)}})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var d,e=1,f=c.Deferred(),g=this,h=this.length,k=function(){--e||f.resolveWith(g,[g])};"string"!=typeof a&&(b=a,a=q);for(a=a||"fx";h--;)(d=c._data(g[h],a+"queueHooks"))&&d.empty&&(e++,d.empty.add(k));return k(),f.promise(b)}});var O,fb,gb,hb=/[\t\r\n]/g,ac=/\r/g,bc=/^(?:button|input)$/i,
cc=/^(?:button|input|object|select|textarea)$/i,dc=/^a(?:rea|)$/i,ib=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,jb=c.support.getSetAttribute;c.fn.extend({attr:function(a,b){return c.access(this,c.attr,a,b,1<arguments.length)},removeAttr:function(a){return this.each(function(){c.removeAttr(this,a)})},prop:function(a,b){return c.access(this,c.prop,a,b,1<arguments.length)},removeProp:function(a){return a=c.propFix[a]||
a,this.each(function(){try{this[a]=q,delete this[a]}catch(b){}})},addClass:function(a){var b,d,e,f,g,h,k;if(c.isFunction(a))return this.each(function(b){c(this).addClass(a.call(this,b,this.className))});if(a&&"string"==typeof a)for(b=a.split(K),d=0,e=this.length;e>d;d++)if(f=this[d],1===f.nodeType)if(f.className||1!==b.length){g=" "+f.className+" ";h=0;for(k=b.length;k>h;h++)0>g.indexOf(" "+b[h]+" ")&&(g+=b[h]+" ");f.className=c.trim(g)}else f.className=a;return this},removeClass:function(a){var b,
d,e,f,g,h,k;if(c.isFunction(a))return this.each(function(b){c(this).removeClass(a.call(this,b,this.className))});if(a&&"string"==typeof a||a===q)for(b=(a||"").split(K),h=0,k=this.length;k>h;h++)if(e=this[h],1===e.nodeType&&e.className){d=(" "+e.className+" ").replace(hb," ");f=0;for(g=b.length;g>f;f++)for(;0<=d.indexOf(" "+b[f]+" ");)d=d.replace(" "+b[f]+" "," ");e.className=a?c.trim(d):""}return this},toggleClass:function(a,b){var d=typeof a,e="boolean"==typeof b;return this.each(c.isFunction(a)?
function(d){c(this).toggleClass(a.call(this,d,this.className,b),b)}:function(){if("string"===d)for(var f,g=0,h=c(this),k=b,m=a.split(K);f=m[g++];)k=e?k:!h.hasClass(f),h[k?"addClass":"removeClass"](f);else("undefined"===d||"boolean"===d)&&(this.className&&c._data(this,"__className__",this.className),this.className=this.className||!1===a?"":c._data(this,"__className__")||"")})},hasClass:function(a){a=" "+a+" ";for(var b=0,c=this.length;c>b;b++)if(1===this[b].nodeType&&0<=(" "+this[b].className+" ").replace(hb,
" ").indexOf(a))return!0;return!1},val:function(a){var b,d,e,f=this[0];if(arguments.length)return e=c.isFunction(a),this.each(function(d){var f,k=c(this);1===this.nodeType&&(f=e?a.call(this,d,k.val()):a,null==f?f="":"number"==typeof f?f+="":c.isArray(f)&&(f=c.map(f,function(a){return null==a?"":a+""})),b=c.valHooks[this.type]||c.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&b.set(this,f,"value")!==q||(this.value=f))});if(f)return b=c.valHooks[f.type]||c.valHooks[f.nodeName.toLowerCase()],b&&
"get"in b&&(d=b.get(f,"value"))!==q?d:(d=f.value,"string"==typeof d?d.replace(ac,""):null==d?"":d)}});c.extend({valHooks:{option:{get:function(a){var b=a.attributes.value;return!b||b.specified?a.value:a.text}},select:{get:function(a){var b,d,e,f=a.selectedIndex,g=[],h=a.options,k="select-one"===a.type;if(0>f)return null;b=k?f:0;for(d=k?f+1:h.length;d>b;b++)if(e=h[b],!(!e.selected||(c.support.optDisabled?e.disabled:null!==e.getAttribute("disabled"))||e.parentNode.disabled&&c.nodeName(e.parentNode,
"optgroup"))){if(a=c(e).val(),k)return a;g.push(a)}return k&&!g.length&&h.length?c(h[f]).val():g},set:function(a,b){var d=c.makeArray(b);return c(a).find("option").each(function(){this.selected=0<=c.inArray(c(this).val(),d)}),d.length||(a.selectedIndex=-1),d}}},attrFn:{},attr:function(a,b,d,e){var f,g,h,k=a.nodeType;if(a&&3!==k&&8!==k&&2!==k)return e&&c.isFunction(c.fn[b])?c(a)[b](d):"undefined"==typeof a.getAttribute?c.prop(a,b,d):(h=1!==k||!c.isXMLDoc(a),h&&(b=b.toLowerCase(),g=c.attrHooks[b]||
(ib.test(b)?fb:O)),d!==q?null===d?void c.removeAttr(a,b):g&&"set"in g&&h&&(f=g.set(a,d,b))!==q?f:(a.setAttribute(b,d+""),d):g&&"get"in g&&h&&null!==(f=g.get(a,b))?f:(f=a.getAttribute(b),null===f?q:f))},removeAttr:function(a,b){var d,e,f,g,h=0;if(b&&1===a.nodeType)for(e=b.split(K);h<e.length;h++)(f=e[h])&&(d=c.propFix[f]||f,g=ib.test(f),g||c.attr(a,f,""),a.removeAttribute(jb?f:d),g&&d in a&&(a[d]=!1))},attrHooks:{type:{set:function(a,b){if(bc.test(a.nodeName)&&a.parentNode)c.error("type property can't be changed");
else if(!c.support.radioValue&&"radio"===b&&c.nodeName(a,"input")){var d=a.value;return a.setAttribute("type",b),d&&(a.value=d),b}}},value:{get:function(a,b){return O&&c.nodeName(a,"button")?O.get(a,b):b in a?a.value:null},set:function(a,b,d){return O&&c.nodeName(a,"button")?O.set(a,b,d):void(a.value=b)}}},propFix:{tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",
usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"},prop:function(a,b,d){var e,f,g,h=a.nodeType;if(a&&3!==h&&8!==h&&2!==h)return g=1!==h||!c.isXMLDoc(a),g&&(b=c.propFix[b]||b,f=c.propHooks[b]),d!==q?f&&"set"in f&&(e=f.set(a,d,b))!==q?e:a[b]=d:f&&"get"in f&&null!==(e=f.get(a,b))?e:a[b]},propHooks:{tabIndex:{get:function(a){var b=a.getAttributeNode("tabindex");return b&&b.specified?parseInt(b.value,10):cc.test(a.nodeName)||dc.test(a.nodeName)&&a.href?0:q}}}});fb={get:function(a,
b){var d,e=c.prop(a,b);return!0===e||"boolean"!=typeof e&&(d=a.getAttributeNode(b))&&!1!==d.nodeValue?b.toLowerCase():q},set:function(a,b,d){var e;return!1===b?c.removeAttr(a,d):(e=c.propFix[d]||d,e in a&&(a[e]=!0),a.setAttribute(d,d.toLowerCase())),d}};jb||(gb={name:!0,id:!0,coords:!0},O=c.valHooks.button={get:function(a,b){var c;return c=a.getAttributeNode(b),c&&(gb[b]?""!==c.value:c.specified)?c.value:q},set:function(a,b,c){var e=a.getAttributeNode(c);return e||(e=r.createAttribute(c),a.setAttributeNode(e)),
e.value=b+""}},c.each(["width","height"],function(a,b){c.attrHooks[b]=c.extend(c.attrHooks[b],{set:function(a,c){return""===c?(a.setAttribute(b,"auto"),c):void 0}})}),c.attrHooks.contenteditable={get:O.get,set:function(a,b,c){""===b&&(b="false");O.set(a,b,c)}});c.support.hrefNormalized||c.each(["href","src","width","height"],function(a,b){c.attrHooks[b]=c.extend(c.attrHooks[b],{get:function(a){a=a.getAttribute(b,2);return null===a?q:a}})});c.support.style||(c.attrHooks.style={get:function(a){return a.style.cssText.toLowerCase()||
q},set:function(a,b){return a.style.cssText=b+""}});c.support.optSelected||(c.propHooks.selected=c.extend(c.propHooks.selected,{get:function(a){a=a.parentNode;return a&&(a.selectedIndex,a.parentNode&&a.parentNode.selectedIndex),null}}));c.support.enctype||(c.propFix.enctype="encoding");c.support.checkOn||c.each(["radio","checkbox"],function(){c.valHooks[this]={get:function(a){return null===a.getAttribute("value")?"on":a.value}}});c.each(["radio","checkbox"],function(){c.valHooks[this]=c.extend(c.valHooks[this],
{set:function(a,b){return c.isArray(b)?a.checked=0<=c.inArray(c(a).val(),b):void 0}})});var xa=/^(?:textarea|input|select)$/i,kb=/^([^\.]*|)(?:\.(.+)|)$/,ec=/(?:^|\s)hover(\.\S+|)\b/,fc=/^key/,gc=/^(?:mouse|contextmenu)|click/,lb=/^(?:focusinfocus|focusoutblur)$/,mb=function(a){return c.event.special.hover?a:a.replace(ec,"mouseenter$1 mouseleave$1")};c.event={add:function(a,b,d,e,f){var g,h,k,m,l,t,n,p,r;if(3!==a.nodeType&&8!==a.nodeType&&b&&d&&(g=c._data(a))){d.handler&&(n=d,d=n.handler,f=n.selector);
d.guid||(d.guid=c.guid++);(k=g.events)||(g.events=k={});(h=g.handle)||(g.handle=h=function(a){return"undefined"==typeof c||a&&c.event.triggered===a.type?q:c.event.dispatch.apply(h.elem,arguments)},h.elem=a);b=c.trim(mb(b)).split(" ");for(g=0;g<b.length;g++)m=kb.exec(b[g])||[],l=m[1],t=(m[2]||"").split(".").sort(),r=c.event.special[l]||{},l=(f?r.delegateType:r.bindType)||l,r=c.event.special[l]||{},m=c.extend({type:l,origType:m[1],data:e,handler:d,guid:d.guid,selector:f,needsContext:f&&c.expr.match.needsContext.test(f),
namespace:t.join(".")},n),(p=k[l])||(p=k[l]=[],p.delegateCount=0,r.setup&&!1!==r.setup.call(a,e,t,h)||(a.addEventListener?a.addEventListener(l,h,!1):a.attachEvent&&a.attachEvent("on"+l,h))),r.add&&(r.add.call(a,m),m.handler.guid||(m.handler.guid=d.guid)),f?p.splice(p.delegateCount++,0,m):p.push(m),c.event.global[l]=!0;a=null}},global:{},remove:function(a,b,d,e,f){var g,h,k,m,l,t,n,q,p,r,v,z=c.hasData(a)&&c._data(a);if(z&&(q=z.events)){b=c.trim(mb(b||"")).split(" ");for(g=0;g<b.length;g++)if(h=kb.exec(b[g])||
[],k=m=h[1],l=h[2],k){p=c.event.special[k]||{};k=(e?p.delegateType:p.bindType)||k;r=q[k]||[];t=r.length;l=l?new RegExp("(^|\\.)"+l.split(".").sort().join("\\.(?:.*\\.|)")+"(\\.|$)"):null;for(n=0;n<r.length;n++)v=r[n],!f&&m!==v.origType||d&&d.guid!==v.guid||l&&!l.test(v.namespace)||e&&e!==v.selector&&("**"!==e||!v.selector)||(r.splice(n--,1),v.selector&&r.delegateCount--,p.remove&&p.remove.call(a,v));0===r.length&&t!==r.length&&(p.teardown&&!1!==p.teardown.call(a,l,z.handle)||c.removeEvent(a,k,z.handle),
delete q[k])}else for(k in q)c.event.remove(a,k+b[g],d,e,!0);c.isEmptyObject(q)&&(delete z.handle,c.removeData(a,"events",!0))}},customEvent:{getData:!0,setData:!0,changeData:!0},trigger:function(a,b,d,e){if(!d||3!==d.nodeType&&8!==d.nodeType){var f,g,h,k,m,l,t,n=a.type||a;k=[];if(!lb.test(n+c.event.triggered)&&(0<=n.indexOf("!")&&(n=n.slice(0,-1),f=!0),0<=n.indexOf(".")&&(k=n.split("."),n=k.shift(),k.sort()),d&&!c.event.customEvent[n]||c.event.global[n]))if(a="object"==typeof a?a[c.expando]?a:new c.Event(n,
a):new c.Event(n),a.type=n,a.isTrigger=!0,a.exclusive=f,a.namespace=k.join("."),a.namespace_re=a.namespace?new RegExp("(^|\\.)"+k.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,k=0>n.indexOf(":")?"on"+n:"",d){if(a.result=q,a.target||(a.target=d),b=null!=b?c.makeArray(b):[],b.unshift(a),m=c.event.special[n]||{},!m.trigger||!1!==m.trigger.apply(d,b)){if(t=[[d,m.bindType||n]],!e&&!m.noBubble&&!c.isWindow(d)){g=m.delegateType||n;f=lb.test(g+n)?d:d.parentNode;for(h=d;f;f=f.parentNode)t.push([f,g]),h=f;h===(d.ownerDocument||
r)&&t.push([h.defaultView||h.parentWindow||p,g])}for(g=0;g<t.length&&!a.isPropagationStopped();g++)f=t[g][0],a.type=t[g][1],(l=(c._data(f,"events")||{})[a.type]&&c._data(f,"handle"))&&l.apply(f,b),(l=k&&f[k])&&c.acceptData(f)&&l.apply&&!1===l.apply(f,b)&&a.preventDefault();return a.type=n,e||a.isDefaultPrevented()||m._default&&!1!==m._default.apply(d.ownerDocument,b)||"click"===n&&c.nodeName(d,"a")||!c.acceptData(d)||k&&d[n]&&("focus"!==n&&"blur"!==n||0!==a.target.offsetWidth)&&!c.isWindow(d)&&(h=
d[k],h&&(d[k]=null),c.event.triggered=n,d[n](),c.event.triggered=q,h&&(d[k]=h)),a.result}}else for(g in d=c.cache,d)d[g].events&&d[g].events[n]&&c.event.trigger(a,b,d[g].handle.elem,!0)}},dispatch:function(a){a=c.event.fix(a||p.event);var b,d,e,f,g,h,k,m=(c._data(this,"events")||{})[a.type]||[],l=m.delegateCount,t=L.call(arguments),n=!a.exclusive&&!a.namespace,r=c.event.special[a.type]||{},V=[];if(t[0]=a,a.delegateTarget=this,!r.preDispatch||!1!==r.preDispatch.call(this,a)){if(l&&(!a.button||"click"!==
a.type))for(d=a.target;d!=this;d=d.parentNode||this)if(!0!==d.disabled||"click"!==a.type){f={};g=[];for(b=0;l>b;b++)h=m[b],k=h.selector,f[k]===q&&(f[k]=h.needsContext?0<=c(k,this).index(d):c.find(k,this,null,[d]).length),f[k]&&g.push(h);g.length&&V.push({elem:d,matches:g})}m.length>l&&V.push({elem:this,matches:m.slice(l)});for(b=0;b<V.length&&!a.isPropagationStopped();b++)for(f=V[b],a.currentTarget=f.elem,d=0;d<f.matches.length&&!a.isImmediatePropagationStopped();d++)h=f.matches[d],(n||!a.namespace&&
!h.namespace||a.namespace_re&&a.namespace_re.test(h.namespace))&&(a.data=h.data,a.handleObj=h,e=((c.event.special[h.origType]||{}).handle||h.handler).apply(f.elem,t),e!==q&&(a.result=e,!1===e&&(a.preventDefault(),a.stopPropagation())));return r.postDispatch&&r.postDispatch.call(this,a),a.result}},props:"attrChange attrName relatedNode srcElement altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:["char",
"charCode","key","keyCode"],filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,e,f,g=b.button,h=b.fromElement;return null==a.pageX&&null!=b.clientX&&(c=a.target.ownerDocument||r,e=c.documentElement,f=c.body,a.pageX=b.clientX+(e&&e.scrollLeft||f&&f.scrollLeft||0)-(e&&e.clientLeft||f&&f.clientLeft||0),a.pageY=
b.clientY+(e&&e.scrollTop||f&&f.scrollTop||0)-(e&&e.clientTop||f&&f.clientTop||0)),!a.relatedTarget&&h&&(a.relatedTarget=h===a.target?b.toElement:h),a.which||g===q||(a.which=1&g?1:2&g?3:4&g?2:0),a}},fix:function(a){if(a[c.expando])return a;var b,d,e=a,f=c.event.fixHooks[a.type]||{},g=f.props?this.props.concat(f.props):this.props;a=c.Event(e);for(b=g.length;b;)d=g[--b],a[d]=e[d];return a.target||(a.target=e.srcElement||r),3===a.target.nodeType&&(a.target=a.target.parentNode),a.metaKey=!!a.metaKey,
f.filter?f.filter(a,e):a},special:{load:{noBubble:!0},focus:{delegateType:"focusin"},blur:{delegateType:"focusout"},beforeunload:{setup:function(a,b,d){c.isWindow(this)&&(this.onbeforeunload=d)},teardown:function(a,b){this.onbeforeunload===b&&(this.onbeforeunload=null)}}},simulate:function(a,b,d,e){a=c.extend(new c.Event,d,{type:a,isSimulated:!0,originalEvent:{}});e?c.event.trigger(a,null,b):c.event.dispatch.call(b,a);a.isDefaultPrevented()&&d.preventDefault()}};c.event.handle=c.event.dispatch;c.removeEvent=
r.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){b="on"+b;a.detachEvent&&("undefined"==typeof a[b]&&(a[b]=null),a.detachEvent(b,c))};c.Event=function(a,b){return this instanceof c.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||!1===a.returnValue||a.getPreventDefault&&a.getPreventDefault()?ca:C):this.type=a,b&&c.extend(this,b),this.timeStamp=a&&a.timeStamp||c.now(),void(this[c.expando]=!0)):
new c.Event(a,b)};c.Event.prototype={preventDefault:function(){this.isDefaultPrevented=ca;var a=this.originalEvent;a&&(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){this.isPropagationStopped=ca;var a=this.originalEvent;a&&(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=ca;this.stopPropagation()},isDefaultPrevented:C,isPropagationStopped:C,isImmediatePropagationStopped:C};c.each({mouseenter:"mouseover",
mouseleave:"mouseout"},function(a,b){c.event.special[a]={delegateType:b,bindType:b,handle:function(a){var e,f=a.relatedTarget,g=a.handleObj;g.selector;return(!f||f!==this&&!c.contains(this,f))&&(a.type=g.origType,e=g.handler.apply(this,arguments),a.type=b),e}}});c.support.submitBubbles||(c.event.special.submit={setup:function(){return c.nodeName(this,"form")?!1:void c.event.add(this,"click._submit keypress._submit",function(a){a=a.target;(a=c.nodeName(a,"input")||c.nodeName(a,"button")?a.form:q)&&
!c._data(a,"_submit_attached")&&(c.event.add(a,"submit._submit",function(a){a._submit_bubble=!0}),c._data(a,"_submit_attached",!0))})},postDispatch:function(a){a._submit_bubble&&(delete a._submit_bubble,this.parentNode&&!a.isTrigger&&c.event.simulate("submit",this.parentNode,a,!0))},teardown:function(){return c.nodeName(this,"form")?!1:void c.event.remove(this,"._submit")}});c.support.changeBubbles||(c.event.special.change={setup:function(){return xa.test(this.nodeName)?(("checkbox"===this.type||
"radio"===this.type)&&(c.event.add(this,"propertychange._change",function(a){"checked"===a.originalEvent.propertyName&&(this._just_changed=!0)}),c.event.add(this,"click._change",function(a){this._just_changed&&!a.isTrigger&&(this._just_changed=!1);c.event.simulate("change",this,a,!0)})),!1):void c.event.add(this,"beforeactivate._change",function(a){a=a.target;xa.test(a.nodeName)&&!c._data(a,"_change_attached")&&(c.event.add(a,"change._change",function(a){!this.parentNode||a.isSimulated||a.isTrigger||
c.event.simulate("change",this.parentNode,a,!0)}),c._data(a,"_change_attached",!0))})},handle:function(a){var b=a.target;return this!==b||a.isSimulated||a.isTrigger||"radio"!==b.type&&"checkbox"!==b.type?a.handleObj.handler.apply(this,arguments):void 0},teardown:function(){return c.event.remove(this,"._change"),!xa.test(this.nodeName)}});c.support.focusinBubbles||c.each({focus:"focusin",blur:"focusout"},function(a,b){var d=0,e=function(a){c.event.simulate(b,a.target,c.event.fix(a),!0)};c.event.special[b]=
{setup:function(){0===d++&&r.addEventListener(a,e,!0)},teardown:function(){0===--d&&r.removeEventListener(a,e,!0)}}});c.fn.extend({on:function(a,b,d,e,f){var g,h;if("object"==typeof a){"string"!=typeof b&&(d=d||b,b=q);for(h in a)this.on(h,b,d,a[h],f);return this}if(null==d&&null==e?(e=b,d=b=q):null==e&&("string"==typeof b?(e=d,d=q):(e=d,d=b,b=q)),!1===e)e=C;else if(!e)return this;return 1===f&&(g=e,e=function(a){return c().off(a),g.apply(this,arguments)},e.guid=g.guid||(g.guid=c.guid++)),this.each(function(){c.event.add(this,
a,e,d,b)})},one:function(a,b,c,e){return this.on(a,b,c,e,1)},off:function(a,b,d){var e,f;if(a&&a.preventDefault&&a.handleObj)return e=a.handleObj,c(a.delegateTarget).off(e.namespace?e.origType+"."+e.namespace:e.origType,e.selector,e.handler),this;if("object"==typeof a){for(f in a)this.off(f,b,a[f]);return this}return(!1===b||"function"==typeof b)&&(d=b,b=q),!1===d&&(d=C),this.each(function(){c.event.remove(this,a,d,b)})},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,
null,b)},live:function(a,b,d){return c(this.context).on(a,this.selector,b,d),this},die:function(a,b){return c(this.context).off(a,this.selector||"**",b),this},delegate:function(a,b,c,e){return this.on(b,a,c,e)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)},trigger:function(a,b){return this.each(function(){c.event.trigger(a,b,this)})},triggerHandler:function(a,b){return this[0]?c.event.trigger(a,b,this[0],!0):void 0},toggle:function(a){var b=arguments,
d=a.guid||c.guid++,e=0,f=function(d){var f=(c._data(this,"lastToggle"+a.guid)||0)%e;return c._data(this,"lastToggle"+a.guid,f+1),d.preventDefault(),b[f].apply(this,arguments)||!1};for(f.guid=d;e<b.length;)b[e++].guid=d;return this.click(f)},hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}});c.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),
function(a,b){c.fn[b]=function(a,c){return null==c&&(c=a,a=null),0<arguments.length?this.on(b,null,a,c):this.trigger(b)};fc.test(b)&&(c.event.fixHooks[b]=c.event.keyHooks);gc.test(b)&&(c.event.fixHooks[b]=c.event.mouseHooks)});(function(a,b){function d(a,b,c,d){c=c||[];b=b||R;var e,f,g,h,k=b.nodeType;if(!a||"string"!=typeof a)return c;if(1!==k&&9!==k)return[];if(g=D(b),!g&&!d&&(e=Y.exec(a)))if(h=e[1])if(9===k){if(f=b.getElementById(h),!f||!f.parentNode)return c;if(f.id===h)return c.push(f),c}else{if(b.ownerDocument&&
(f=b.ownerDocument.getElementById(h))&&u(b,f)&&f.id===h)return c.push(f),c}else{if(e[2])return G.apply(c,ga.call(b.getElementsByTagName(a),0)),c;if((h=e[3])&&Z&&b.getElementsByClassName)return G.apply(c,ga.call(b.getElementsByClassName(h),0)),c}return v(a.replace(B,"$1"),b,c,d,g)}function e(a){return function(b){return"input"===b.nodeName.toLowerCase()&&b.type===a}}function f(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function g(a){return M(function(b){return b=
+b,M(function(c,d){for(var e,f=a([],c.length,b),g=f.length;g--;)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function h(a,b,c){if(a===b)return c;for(a=a.nextSibling;a;){if(a===b)return-1;a=a.nextSibling}return 1}function k(a,b){var c,e,f,g,h,k,l;if(h=H[w][a])return b?0:h.slice(0);h=a;k=[];for(l=y.preFilter;h;){c&&!(e=T.exec(h))||(e&&(h=h.slice(e[0].length)),k.push(f=[]));c=!1;(e=U.exec(h))&&(f.push(c=new pb(e.shift())),h=h.slice(c.length),c.type=e[0].replace(B," "));for(g in y.filter)!(e=S[g].exec(h))||l[g]&&
!(e=l[g](e,R,!0))||(f.push(c=new pb(e.shift())),h=h.slice(c.length),c.type=g,c.matches=e);if(!c)break}return b?h.length:h?d.error(a):H(a,k).slice(0)}function m(a,b,c){var d=b.dir,e=c&&"parentNode"===b.dir,f=F++;return b.first?function(b,c,f){for(;b=b[d];)if(e||1===b.nodeType)return a(b,c,f)}:function(b,c,g){if(g)for(;b=b[d];){if((e||1===b.nodeType)&&a(b,c,g))return b}else for(var h,k=na+" "+f+" ",nb=k+E;b=b[d];)if(e||1===b.nodeType){if((h=b[w])===nb)return b.sizset;if("string"==typeof h&&0===h.indexOf(k)){if(b.sizset)return b}else{if(b[w]=
nb,a(b,c,g))return b.sizset=!0,b;b.sizset=!1}}}}function l(a){return 1<a.length?function(b,c,d){for(var e=a.length;e--;)if(!a[e](b,c,d))return!1;return!0}:a[0]}function q(a,b,c,d,e){for(var f,g=[],h=0,k=a.length,l=null!=b;k>h;h++)(f=a[h])&&(!c||c(f,d,e))&&(g.push(f),l&&b.push(h));return g}function n(a,b,c,e,f,g){return e&&!e[w]&&(e=n(e)),f&&!f[w]&&(f=n(f,g)),M(function(g,h,k,l){if(!g||!f){var m,n,p=[],r=[],ob=h.length;if(!(n=g)){n=b||"*";for(var u=k.nodeType?[k]:k,w=[],N=0,v=u.length;v>N;N++)d(n,
u[N],w,g);n=w}u=!a||!g&&b?n:q(n,p,a,k,l);w=c?f||(g?a:ob||e)?[]:h:u;if(c&&c(u,w,k,l),e)for(n=q(w,r),e(n,[],k,l),k=n.length;k--;)(m=n[k])&&(w[r[k]]=!(u[r[k]]=m));if(g)for(k=a&&w.length;k--;)(m=w[k])&&(g[p[k]]=!(h[p[k]]=m));else w=q(w===h?w.splice(ob,w.length):w),f?f(null,h,w,l):G.apply(h,w)}})}function p(a){var b,c,d,e=a.length,f=y.relative[a[0].type];c=f||y.relative[" "];for(var g=f?1:0,h=m(function(a){return a===b},c,!0),k=m(function(a){return-1<O.call(b,a)},c,!0),q=[function(a,c,d){return!f&&(d||
c!==oa)||((b=c).nodeType?h(a,c,d):k(a,c,d))}];e>g;g++)if(c=y.relative[a[g].type])q=[m(l(q),c)];else{if(c=y.filter[a[g].type].apply(null,a[g].matches),c[w]){for(d=++g;e>d&&!y.relative[a[d].type];d++);return n(1<g&&l(q),1<g&&a.slice(0,g-1).join("").replace(B,"$1"),c,d>g&&p(a.slice(g,d)),e>d&&p(a=a.slice(d)),e>d&&a.join(""))}q.push(c)}return l(q)}function r(a,b){var c=0<b.length,e=0<a.length,f=function(g,h,k,l,n){var m,p,r=[],w=0,u="0",N=g&&[],v=null!=n,eb=oa,V=g||e&&y.find.TAG("*",n&&h.parentNode||
h),z=na+=null==eb?1:Math.E;for(v&&(oa=h!==R&&h,E=f.el);null!=(n=V[u]);u++){if(e&&n){for(m=0;p=a[m];m++)if(p(n,h,k)){l.push(n);break}v&&(na=z,E=++f.el)}c&&((n=!p&&n)&&w--,g&&N.push(n))}if(w+=u,c&&u!==w){for(m=0;p=b[m];m++)p(N,r,h,k);if(g){if(0<w)for(;u--;)N[u]||r[u]||(r[u]=L.call(l));r=q(r)}G.apply(l,r);v&&!g&&0<r.length&&1<w+b.length&&d.uniqueSort(l)}return v&&(na=z,oa=eb),N};return f.el=0,c?M(f):f}function v(a,b,c,d,e){var f,g,h,l,n,m=k(a);f=0;if("undefined"!=typeof m&&null!=m&&(f=m.length),!d&&
1===f){if(g=m[0]=m[0].slice(0),2<g.length&&"ID"===(h=g[0]).type&&9===b.nodeType&&!e&&y.relative[g[1].type]){if(b=y.find.ID(h.matches[0].replace(ba,""),b,e)[0],!b)return c;a=a.slice(g.shift().length)}for(f=S.POS.test(a)?-1:g.length-1;0<=f&&(h=g[f],!y.relative[l=h.type]);f--)if((n=y.find[l])&&(d=n(h.matches[0].replace(ba,""),Q.test(g[0].type)&&b.parentNode||b,e))){if(g.splice(f,1),a=d.length&&g.join(""),!a)return G.apply(c,ga.call(d,0)),c;break}}return A(a,m)(d,b,e,c,Q.test(a)),c}function z(){}var E,
x,y,pa,D,u,A,N,ha,oa,C=!0,w=("sizcache"+Math.random()).replace(".",""),pb=String,R=a.document,P=R.documentElement,na=0,F=0,L=[].pop,G=[].push,ga=[].slice,O=[].indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(this[b]===a)return b;return-1},M=function(a,b){return a[w]=null==b||b,a},I=function(){var a={},b=[];return M(function(c,d){return b.push(c)>y.cacheLength&&delete a[b.shift()],a[c]=d},a)},K=I(),H=I(),J=I(),I="\\[[\\x20\\t\\r\\n\\f]*((?:\\\\.|[-\\w]|[^\\x00-\\xa0])+)[\\x20\\t\\r\\n\\f]*(?:([*^$|!~]?=)[\\x20\\t\\r\\n\\f]*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+
"(?:\\\\.|[-\\w]|[^\\x00-\\xa0])+".replace("w","w#")+")|)|)[\\x20\\t\\r\\n\\f]*\\]",ya=":((?:\\\\.|[-\\w]|[^\\x00-\\xa0])+)(?:\\((?:(['\"])((?:\\\\.|[^\\\\])*?)\\2|([^()[\\]]*|(?:(?:"+I+")|[^:]|\\\\.)*|.*))\\)|)",B=RegExp("^[\\x20\\t\\r\\n\\f]+|((?:^|[^\\\\])(?:\\\\.)*)[\\x20\\t\\r\\n\\f]+$","g"),T=/^[\x20\t\r\n\f]*,[\x20\t\r\n\f]*/,U=/^[\x20\t\r\n\f]*([\x20\t\r\n\f>+~])[\x20\t\r\n\f]*/,X=new RegExp(ya),Y=/^(?:#([\w\-]+)|(\w+)|\.([\w\-]+))$/,Q=/[\x20\t\r\n\f]*[+~]/,aa=/h\d/i,ca=/input|select|textarea|button/i,
ba=/\\(?!\\)/g,S={ID:/^#((?:\\.|[-\w]|[^\x00-\xa0])+)/,CLASS:/^\.((?:\\.|[-\w]|[^\x00-\xa0])+)/,NAME:/^\[name=['"]?((?:\\.|[-\w]|[^\x00-\xa0])+)['"]?\]/,TAG:new RegExp("^("+"(?:\\\\.|[-\\w]|[^\\x00-\\xa0])+".replace("w","w*")+")"),ATTR:new RegExp("^"+I),PSEUDO:new RegExp("^"+ya),POS:/:(even|odd|eq|gt|lt|nth|first|last)(?:\([\x20\t\r\n\f]*((?:-\d)?\d*)[\x20\t\r\n\f]*\)|)(?=[^-]|$)/i,CHILD:/^:(only|nth|first|last)-child(?:\([\x20\t\r\n\f]*(even|odd|(([+-]|)(\d*)n|)[\x20\t\r\n\f]*(?:([+-]|)[\x20\t\r\n\f]*(\d+)|))[\x20\t\r\n\f]*\)|)/i,
needsContext:/^[\x20\t\r\n\f]*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\([\x20\t\r\n\f]*((?:-\d)?\d*)[\x20\t\r\n\f]*\)|)(?=[^-]|$)/i},W=function(a){var b=R.createElement("div");try{return a(b)}catch(c){return!1}finally{}},I=W(function(a){return a.appendChild(R.createComment("")),!a.getElementsByTagName("*").length}),da=W(function(a){return a.innerHTML="<a href='#'></a>",a.firstChild&&"undefined"!==typeof a.firstChild.getAttribute&&"#"===a.firstChild.getAttribute("href")}),ea=W(function(a){a.innerHTML=
"<select></select>";a=typeof a.lastChild.getAttribute("multiple");return"boolean"!==a&&"string"!==a}),Z=W(function(a){return a.innerHTML="<div class='hidden e'></div><div class='hidden'></div>",a.getElementsByClassName&&a.getElementsByClassName("e").length?(a.lastChild.className="e",2===a.getElementsByClassName("e").length):!1}),fa=W(function(a){a.id=w+0;a.innerHTML="<a name='"+w+"'></a><div name='"+w+"'></div>";P.insertBefore(a,P.firstChild);var b=R.getElementsByName&&R.getElementsByName(w).length===
2+R.getElementsByName(w+0).length;return x=!R.getElementById(w),P.removeChild(a),b});try{ga.call(P.childNodes,0)[0].nodeType}catch(Mc){ga=function(a){for(var b,c=[];b=this[a];a++)c.push(b);return c}}d.matches=function(a,b){return d(a,null,null,b)};d.matchesSelector=function(a,b){return 0<d(b,null,null,[a]).length};pa=d.getText=function(a){var b,c="",d=0;if(b=a.nodeType)if(1===b||9===b||11===b){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=pa(a)}else{if(3===
b||4===b)return a.nodeValue}else for(;b=a[d];d++)c+=pa(b);return c};D=d.isXML=function(a){return(a=a&&(a.ownerDocument||a).documentElement)?"HTML"!==a.nodeName:!1};u=d.contains=P.contains?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!!(d&&1===d.nodeType&&c.contains&&c.contains(d))}:P.compareDocumentPosition?function(a,b){return b&&!!(16&a.compareDocumentPosition(b))}:function(a,b){for(;b=b.parentNode;)if(b===a)return!0;return!1};d.attr=function(a,b){var c,
d=D(a);return d||(b=b.toLowerCase()),(c=y.attrHandle[b])?c(a):d||ea?a.getAttribute(b):(c=a.getAttributeNode(b),c?"boolean"==typeof a[b]?a[b]?b:null:c.specified?c.value:null:null)};y=d.selectors={cacheLength:50,createPseudo:M,match:S,attrHandle:da?{}:{href:function(a){return a.getAttribute("href",2)},type:function(a){return a.getAttribute("type")}},find:{ID:x?function(a,b,c){if("undefined"!==typeof b.getElementById&&!c)return(a=b.getElementById(a))&&a.parentNode?[a]:[]}:function(a,c,d){if("undefined"!==
typeof c.getElementById&&!d)return(c=c.getElementById(a))?c.id===a||"undefined"!==typeof c.getAttributeNode&&c.getAttributeNode("id").value===a?[c]:b:[]},TAG:I?function(a,b){return"undefined"!==typeof b.getElementsByTagName?b.getElementsByTagName(a):void 0}:function(a,b){var c=b.getElementsByTagName(a);if("*"===a){for(var d,e=[],f=0;d=c[f];f++)1===d.nodeType&&e.push(d);return e}return c},NAME:fa&&function(a,b){return"undefined"!==typeof b.getElementsByName?b.getElementsByName(name):void 0},CLASS:Z&&
function(a,b,c){return"undefined"===typeof b.getElementsByClassName||c?void 0:b.getElementsByClassName(a)}},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(ba,""),a[3]=(a[4]||a[5]||"").replace(ba,""),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1]?(a[2]||d.error(a[0]),a[3]=+(a[3]?a[4]+(a[5]||1):2*("even"===
a[2]||"odd"===a[2])),a[4]=+(a[6]+a[7]||"odd"===a[2])):a[2]&&d.error(a[0]),a},PSEUDO:function(a){var b,c;return S.CHILD.test(a[0])?null:(a[3]?a[2]=a[3]:(b=a[4])&&(X.test(b)&&(c=k(b,!0))&&(c=b.indexOf(")",b.length-c)-b.length)&&(b=b.slice(0,c),a[0]=a[0].slice(0,c)),a[2]=b),a.slice(0,3))}},filter:{ID:x?function(a){return a=a.replace(ba,""),function(b){return b.getAttribute("id")===a}}:function(a){return a=a.replace(ba,""),function(b){return(b="undefined"!==typeof b.getAttributeNode&&b.getAttributeNode("id"))&&
b.value===a}},TAG:function(a){return"*"===a?function(){return!0}:(a=a.replace(ba,"").toLowerCase(),function(b){return b.nodeName&&b.nodeName.toLowerCase()===a})},CLASS:function(a){var b=K[w][a];return b||(b=K(a,new RegExp("(^|[\\x20\\t\\r\\n\\f])"+a+"([\\x20\\t\\r\\n\\f]|$)"))),function(a){return b.test(a.className||"undefined"!==typeof a.getAttribute&&a.getAttribute("class")||"")}},ATTR:function(a,b,c){return function(e){e=d.attr(e,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:
"^="===b?c&&0===e.indexOf(c):"*="===b?c&&-1<e.indexOf(c):"$="===b?c&&e.substr(e.length-c.length)===c:"~="===b?-1<(" "+e+" ").indexOf(c):"|="===b?e===c||e.substr(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d){return"nth"===a?function(a){var b,e;b=a.parentNode;if(1===c&&0===d)return!0;if(b)for(e=0,b=b.firstChild;b&&(1!==b.nodeType||(e++,a!==b));b=b.nextSibling);return e-=d,e===c||0===e%c&&0<=e/c}:function(b){var c=b;switch(a){case "only":case "first":for(;c=c.previousSibling;)if(1===c.nodeType)return!1;
if("first"===a)return!0;c=b;case "last":for(;c=c.nextSibling;)if(1===c.nodeType)return!1;return!0}}},PSEUDO:function(a,b){var c,e=y.pseudos[a]||y.setFilters[a.toLowerCase()]||d.error("unsupported pseudo: "+a);return e[w]?e(b):1<e.length?(c=[a,a,"",b],y.setFilters.hasOwnProperty(a.toLowerCase())?M(function(a,c){for(var d,f=e(a,b),g=f.length;g--;)d=O.call(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:M(function(a){var b=[],c=[],d=A(a.replace(B,"$1"));return d[w]?M(function(a,
b,c,e){var f;c=d(a,null,e,[]);for(e=a.length;e--;)(f=c[e])&&(a[e]=!(b[e]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),!c.pop()}}),has:M(function(a){return function(b){return 0<d(a,b).length}}),contains:M(function(a){return function(b){return-1<(b.textContent||b.innerText||pa(b)).indexOf(a)}}),enabled:function(a){return!1===a.disabled},disabled:function(a){return!0===a.disabled},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&
a.parentNode.selectedIndex,!0===a.selected},parent:function(a){return!y.pseudos.empty(a)},empty:function(a){var b;for(a=a.firstChild;a;){if("@"<a.nodeName||3===(b=a.nodeType)||4===b)return!1;a=a.nextSibling}return!0},header:function(a){return aa.test(a.nodeName)},text:function(a){var b,c;return"input"===a.nodeName.toLowerCase()&&"text"===(b=a.type)&&(null==(c=a.getAttribute("type"))||c.toLowerCase()===b)},radio:e("radio"),checkbox:e("checkbox"),file:e("file"),password:e("password"),image:e("image"),
submit:f("submit"),reset:f("reset"),button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},input:function(a){return ca.test(a.nodeName)},focus:function(a){var b=a.ownerDocument;return!(a!==b.activeElement||b.hasFocus&&!b.hasFocus()||!a.type&&!a.href)},active:function(a){return a===a.ownerDocument.activeElement},first:g(function(){return[0]}),last:g(function(a,b){return[b-1]}),eq:g(function(a,b,c){return[0>c?c+b:c]}),even:g(function(a,b){for(var c=0;b>
c;c+=2)a.push(c);return a}),odd:g(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:g(function(a,b,c){for(b=0>c?c+b:c;0<=--b;)a.push(b);return a}),gt:g(function(a,b,c){for(c=0>c?c+b:c;++c<b;)a.push(c);return a})}};N=P.compareDocumentPosition?function(a,b){return a===b?(ha=!0,0):(a.compareDocumentPosition&&b.compareDocumentPosition?4&a.compareDocumentPosition(b):a.compareDocumentPosition)?-1:1}:function(a,b){if(a===b)return ha=!0,0;if(a.sourceIndex&&b.sourceIndex)return a.sourceIndex-b.sourceIndex;
var c,d,e=[],f=[];c=a.parentNode;d=b.parentNode;var g=c;if(c===d)return h(a,b);if(!c)return-1;if(!d)return 1;for(;g;)e.unshift(g),g=g.parentNode;for(g=d;g;)f.unshift(g),g=g.parentNode;c=e.length;d=f.length;for(g=0;c>g&&d>g;g++)if(e[g]!==f[g])return h(e[g],f[g]);return g===c?h(a,f[g],-1):h(e[g],b,1)};[0,0].sort(N);C=!ha;d.uniqueSort=function(a){var b,c=1;if(ha=C,a.sort(N),ha)for(;b=a[c];c++)b===a[c-1]&&a.splice(c--,1);return a};d.error=function(){};A=d.compile=function(a,b){var c,d=[],e=[],f=J[w][a];
if(!f){b||(b=k(a));for(c="undefined"==typeof b?0:b.length;c--;)f=p(b[c]),f[w]?d.push(f):e.push(f);f=J(a,r(e,d))}return f};R.querySelectorAll&&!function(){var a,b=v,c=/'|\\/g,e=/\=[\x20\t\r\n\f]*([^'"\]]*)[\x20\t\r\n\f]*\]/g,f=[":focus"],g=[":active",":focus"],h=P.matchesSelector||P.mozMatchesSelector||P.webkitMatchesSelector||P.oMatchesSelector||P.msMatchesSelector;W(function(a){a.innerHTML="<select><option selected=''></option></select>";a.querySelectorAll("[selected]").length||f.push("\\[[\\x20\\t\\r\\n\\f]*(?:checked|disabled|ismap|multiple|readonly|selected|value)");
a.querySelectorAll(":checked").length||f.push(":checked")});W(function(a){a.innerHTML="<p test=''></p>";a.querySelectorAll("[test^='']").length&&f.push("[*^$]=[\\x20\\t\\r\\n\\f]*(?:\"\"|'')");a.innerHTML="<input type='hidden'/>";a.querySelectorAll(":enabled").length||f.push(":enabled",":disabled")});f=new RegExp(f.join("|"));v=function(a,d,e,g,h){if(!(g||h||f&&f.test(a))){var l,n,m=!0,q=w;n=d;l=9===d.nodeType&&a;if(1===d.nodeType&&"object"!==d.nodeName.toLowerCase()){l=k(a);(m=d.getAttribute("id"))?
q=m.replace(c,"\\$&"):d.setAttribute("id",q);q="[id='"+q+"'] ";for(n=l.length;n--;)l[n]=q+l[n].join("");n=Q.test(a)&&d.parentNode||d;l=l.join(",")}if(l)try{return G.apply(e,ga.call(n.querySelectorAll(l),0)),e}catch(p){}finally{m||d.removeAttribute("id")}}return b(a,d,e,g,h)};h&&(W(function(b){a=h.call(b,"div");try{h.call(b,"[test!='']:sizzle"),g.push("!=",ya)}catch(c){}}),g=new RegExp(g.join("|")),d.matchesSelector=function(b,c){if(c=c.replace(e,"='$1']"),!(D(b)||g.test(c)||f&&f.test(c)))try{var k=
h.call(b,c);if(k||a||b.document&&11!==b.document.nodeType)return k}catch(l){}return 0<d(c,null,null,[b]).length})}();y.pseudos.nth=y.pseudos.eq;y.filters=z.prototype=y.pseudos;y.setFilters=new z;d.attr=c.attr;c.find=d;c.expr=d.selectors;c.expr[":"]=c.expr.pseudos;c.unique=d.uniqueSort;c.text=d.getText;c.isXMLDoc=d.isXML;c.contains=d.contains})(p);var hc=/Until$/,ic=/^(?:parents|prev(?:Until|All))/,Gb=/^.[^:#\[\.,]*$/,qb=c.expr.match.needsContext,jc={children:!0,contents:!0,next:!0,prev:!0};c.fn.extend({find:function(a){var b,
d,e,f,g,h,k=this;if("string"!=typeof a)return c(a).filter(function(){b=0;for(d=k.length;d>b;b++)if(c.contains(k[b],this))return!0});h=this.pushStack("","find",a);b=0;for(d=this.length;d>b;b++)if(e=h.length,c.find(a,this[b],h),0<b)for(f=e;f<h.length;f++)for(g=0;e>g;g++)if(h[g]===h[f]){h.splice(f--,1);break}return h},has:function(a){var b,d=c(a,this),e=d.length;return this.filter(function(){for(b=0;e>b;b++)if(c.contains(this,d[b]))return!0})},not:function(a){return this.pushStack(Ga(this,a,!1),"not",
a)},filter:function(a){return this.pushStack(Ga(this,a,!0),"filter",a)},is:function(a){return!!a&&("string"==typeof a?qb.test(a)?0<=c(a,this.context).index(this[0]):0<c.filter(a,this).length:0<this.filter(a).length)},closest:function(a,b){for(var d,e=0,f=this.length,g=[],h=qb.test(a)||"string"!=typeof a?c(a,b||this.context):0;f>e;e++)for(d=this[e];d&&d.ownerDocument&&d!==b&&11!==d.nodeType;){if(h?-1<h.index(d):c.find.matchesSelector(d,a)){g.push(d);break}d=d.parentNode}return g=1<g.length?c.unique(g):
g,this.pushStack(g,"closest",a)},index:function(a){return a?"string"==typeof a?c.inArray(this[0],c(a)):c.inArray(a.jquery?a[0]:a,this):this[0]&&this[0].parentNode?this.prevAll().length:-1},add:function(a,b){var d="string"==typeof a?c(a,b):c.makeArray(a&&a.nodeType?[a]:a),e=c.merge(this.get(),d);return this.pushStack(Q(d[0])||Q(e[0])?e:c.unique(e))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});c.fn.andSelf=c.fn.addBack;c.each({parent:function(a){return(a=
a.parentNode)&&11!==a.nodeType?a:null},parents:function(a){return c.dir(a,"parentNode")},parentsUntil:function(a,b,d){return c.dir(a,"parentNode",d)},next:function(a){return Fa(a,"nextSibling")},prev:function(a){return Fa(a,"previousSibling")},nextAll:function(a){return c.dir(a,"nextSibling")},prevAll:function(a){return c.dir(a,"previousSibling")},nextUntil:function(a,b,d){return c.dir(a,"nextSibling",d)},prevUntil:function(a,b,d){return c.dir(a,"previousSibling",d)},siblings:function(a){return c.sibling((a.parentNode||
{}).firstChild,a)},children:function(a){return c.sibling(a.firstChild)},contents:function(a){return c.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:c.merge([],a.childNodes)}},function(a,b){c.fn[a]=function(d,e){var f=c.map(this,b,d);return hc.test(a)||(e=d),e&&"string"==typeof e&&(f=c.filter(e,f)),f=1<this.length&&!jc[a]?c.unique(f):f,1<this.length&&ic.test(a)&&(f=f.reverse()),this.pushStack(f,a,L.call(arguments).join(","))}});c.extend({filter:function(a,b,d){return d&&(a=":not("+
a+")"),1===b.length?c.find.matchesSelector(b[0],a)?[b[0]]:[]:c.find.matches(a,b)},dir:function(a,b,d){var e=[];for(a=a[b];a&&9!==a.nodeType&&(d===q||1!==a.nodeType||!c(a).is(d));)1===a.nodeType&&e.push(a),a=a[b];return e},sibling:function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c}});var Ia="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",kc=/ jQuery\d+="(?:null|\d+)"/g,
za=/^\s+/,rb=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,sb=/<([\w:]+)/,lc=/<tbody/i,mc=/<|&#?\w+;/,nc=/<(?:script|style|link)/i,oc=/<(?:script|object|embed|option|style)/i,Aa=new RegExp("<(?:"+Ia+")[\\s/>]","i"),La=/^(?:checkbox|radio)$/,tb=/checked\s*(?:[^=]|=\s*.checked.)/i,pc=/\/(java|ecma)script/i,qc=/^\s*<!(?:\[CDATA\[|\-\-)|[\]\-]{2}>\s*$/g,D={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],thead:[1,"<table>","</table>"],
tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],area:[1,"<map>","</map>"],_default:[0,"",""]},ub=Ha(r),Ba=ub.appendChild(r.createElement("div"));D.optgroup=D.option;D.tbody=D.tfoot=D.colgroup=D.caption=D.thead;D.th=D.td;c.support.htmlSerialize||(D._default=[1,"X<div>","</div>"]);c.fn.extend({text:function(a){return c.access(this,function(a){return a===q?c.text(this):this.empty().append((this[0]&&
this[0].ownerDocument||r).createTextNode(a))},null,a,arguments.length)},wrapAll:function(a){if(c.isFunction(a))return this.each(function(b){c(this).wrapAll(a.call(this,b))});if(this[0]){var b=c(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]);b.map(function(){for(var a=this;a.firstChild&&1===a.firstChild.nodeType;)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){return this.each(c.isFunction(a)?function(b){c(this).wrapInner(a.call(this,
b))}:function(){var b=c(this),d=b.contents();d.length?d.wrapAll(a):b.append(a)})},wrap:function(a){var b=c.isFunction(a);return this.each(function(d){c(this).wrapAll(b?a.call(this,d):a)})},unwrap:function(){return this.parent().each(function(){c.nodeName(this,"body")||c(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,!0,function(a){1!==this.nodeType&&11!==this.nodeType||this.appendChild(a)})},prepend:function(){return this.domManip(arguments,!0,function(a){1!==
this.nodeType&&11!==this.nodeType||this.insertBefore(a,this.firstChild)})},before:function(){if(!Q(this[0]))return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this)});if(arguments.length){var a=c.clean(arguments);return this.pushStack(c.merge(a,this),"before",this.selector)}},after:function(){if(!Q(this[0]))return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this.nextSibling)});if(arguments.length){var a=c.clean(arguments);return this.pushStack(c.merge(this,
a),"after",this.selector)}},remove:function(a,b){for(var d,e=0;null!=(d=this[e]);e++)(!a||c.filter(a,[d]).length)&&(b||1!==d.nodeType||(c.cleanData(d.getElementsByTagName("*")),c.cleanData([d])),d.parentNode&&d.parentNode.removeChild(d));return this},empty:function(){for(var a,b=0;null!=(a=this[b]);b++)for(1===a.nodeType&&c.cleanData(a.getElementsByTagName("*"));a.firstChild;)a.removeChild(a.firstChild);return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return c.clone(this,
a,b)})},html:function(a){return c.access(this,function(a){var d=this[0]||{},e=0,f=this.length;if(a===q)return 1===d.nodeType?d.innerHTML.replace(kc,""):q;if(!("string"!=typeof a||nc.test(a)||!c.support.htmlSerialize&&Aa.test(a)||!c.support.leadingWhitespace&&za.test(a)||D[(sb.exec(a)||["",""])[1].toLowerCase()])){a=a.replace(rb,"<$1></$2>");try{for(;f>e;e++)d=this[e]||{},1===d.nodeType&&(c.cleanData(d.getElementsByTagName("*")),d.innerHTML=a);d=0}catch(g){}}d&&this.empty().append(a)},null,a,arguments.length)},
replaceWith:function(a){return Q(this[0])?this.length?this.pushStack(c(c.isFunction(a)?a():a),"replaceWith",a):this:c.isFunction(a)?this.each(function(b){var d=c(this),e=d.html();d.replaceWith(a.call(this,b,e))}):("string"!=typeof a&&(a=c(a).detach()),this.each(function(){var b=this.nextSibling,d=this.parentNode;c(this).remove();b?c(b).before(a):c(d).append(a)}))},detach:function(a){return this.remove(a,!0)},domManip:function(a,b,d){a=[].concat.apply([],a);var e,f,g,h=0,k=a[0],m=[],l=this.length;
if(!c.support.checkClone&&1<l&&"string"==typeof k&&tb.test(k))return this.each(function(){c(this).domManip(a,b,d)});if(c.isFunction(k))return this.each(function(e){var f=c(this);a[0]=k.call(this,e,b?f.html():q);f.domManip(a,b,d)});if(this[0]){if(e=c.buildFragment(a,this,m),g=e.fragment,f=g.firstChild,1===g.childNodes.length&&(g=f),f)for(b=b&&c.nodeName(f,"tr"),e=e.cacheable||l-1;l>h;h++)d.call(b&&c.nodeName(this[h],"table")?Hb(this[h],"tbody"):this[h],h===e?g:c.clone(g,!0,!0));g=f=null;m.length&&
c.each(m,function(a,b){b.src?c.ajax?c.ajax({url:b.src,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0}):c.error("no ajax"):c.globalEval((b.text||b.textContent||b.innerHTML||"").replace(qc,""));b.parentNode&&b.parentNode.removeChild(b)})}return this}});c.buildFragment=function(a,b,d){var e,f,g,h=a[0];return b=b||r,b=!b.nodeType&&b[0]||b,b=b.ownerDocument||b,!(1===a.length&&"string"==typeof h&&512>h.length&&b===r&&"<"===h.charAt(0))||oc.test(h)||!c.support.checkClone&&tb.test(h)||!c.support.html5Clone&&
Aa.test(h)||(f=!0,e=c.fragments[h],g=e!==q),e||(e=b.createDocumentFragment(),c.clean(a,b,e,d),f&&(c.fragments[h]=g&&e)),{fragment:e,cacheable:f}};c.fragments={};c.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){c.fn[a]=function(d){var e,f=0,g=[];d=c(d);var h=d.length;e=1===this.length&&this[0].parentNode;if((null==e||e&&11===e.nodeType&&1===e.childNodes.length)&&1===h)return d[b](this[0]),this;for(;h>f;f++)e=(0<f?this.clone(!0):
this).get(),c(d[f])[b](e),g=g.concat(e);return this.pushStack(g,a,d.selector)}});c.extend({clone:function(a,b,d){var e,f,g,h;if(c.support.html5Clone||c.isXMLDoc(a)||!Aa.test("<"+a.nodeName+">")?h=a.cloneNode(!0):(Ba.innerHTML=a.outerHTML,Ba.removeChild(h=Ba.firstChild)),!(c.support.noCloneEvent&&c.support.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||c.isXMLDoc(a)))for(Ka(a,h),e=S(a),f=S(h),g=0;e[g];++g)f[g]&&Ka(e[g],f[g]);if(b&&(Ja(a,h),d))for(e=S(a),f=S(h),g=0;e[g];++g)Ja(e[g],f[g]);return h},
clean:function(a,b,d,e){var f,g,h,k,m,l,q,n=b===r&&ub,p=[];b&&"undefined"!=typeof b.createDocumentFragment||(b=r);for(f=0;null!=(h=a[f]);f++)if("number"==typeof h&&(h+=""),h){if("string"==typeof h)if(mc.test(h)){n=n||Ha(b);l=b.createElement("div");n.appendChild(l);h=h.replace(rb,"<$1></$2>");g=(sb.exec(h)||["",""])[1].toLowerCase();k=D[g]||D._default;m=k[0];for(l.innerHTML=k[1]+h+k[2];m--;)l=l.lastChild;if(!c.support.tbody)for(m=lc.test(h),k="table"!==g||m?"<table>"!==k[1]||m?[]:l.childNodes:l.firstChild&&
l.firstChild.childNodes,g=k.length-1;0<=g;--g)c.nodeName(k[g],"tbody")&&!k[g].childNodes.length&&k[g].parentNode.removeChild(k[g]);!c.support.leadingWhitespace&&za.test(h)&&l.insertBefore(b.createTextNode(za.exec(h)[0]),l.firstChild);h=l.childNodes;l.parentNode.removeChild(l)}else h=b.createTextNode(h);h.nodeType?p.push(h):c.merge(p,h)}if(l&&(h=l=n=null),!c.support.appendChecked)for(f=0;null!=(h=p[f]);f++)c.nodeName(h,"input")?Ma(h):"undefined"!=typeof h.getElementsByTagName&&c.grep(h.getElementsByTagName("input"),
Ma);if(d)for(a=function(a){return!a.type||pc.test(a.type)?e?e.push(a.parentNode?a.parentNode.removeChild(a):a):d.appendChild(a):void 0},f=0;null!=(h=p[f]);f++)c.nodeName(h,"script")&&a(h)||(d.appendChild(h),"undefined"!=typeof h.getElementsByTagName&&(q=c.grep(c.merge([],h.getElementsByTagName("script")),a),p.splice.apply(p,[f+1,0].concat(q)),f+=q.length));return p},cleanData:function(a,b){for(var d,e,f,g,h=0,k=c.expando,m=c.cache,l=c.support.deleteExpando,q=c.event.special;null!=(f=a[h]);h++)if((b||
c.acceptData(f))&&(e=f[k],d=e&&m[e])){if(d.events)for(g in d.events)q[g]?c.event.remove(f,g):c.removeEvent(f,g,d.handle);m[e]&&(delete m[e],l?delete f[k]:f.removeAttribute?f.removeAttribute(k):f[k]=null,c.deletedIds.push(e))}}});(function(){var a,b;c.uaMatch=function(a){a=a.toLowerCase();a=/(chrome)[ \/]([\w.]+)/.exec(a)||/(webkit)[ \/]([\w.]+)/.exec(a)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(a)||/(msie) ([\w.]+)/.exec(a)||0>a.indexOf("compatible")&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(a)||[];
return{browser:a[1]||"",version:a[2]||"0"}};a=c.uaMatch(Nb.userAgent);b={};a.browser&&(b[a.browser]=!0,b.version=a.version);b.chrome?b.webkit=!0:b.webkit&&(b.safari=!0);c.browser=b;c.sub=function(){function a(b,c){return new a.fn.init(b,c)}c.extend(!0,a,this);a.superclass=this;a.fn=a.prototype=this();a.fn.constructor=a;a.sub=this.sub;a.fn.init=function(f,g){return g&&g instanceof c&&!(g instanceof a)&&(g=a(g)),c.fn.init.call(this,f,g,b)};a.fn.init.prototype=a.fn;var b=a(r);return a}})();var z,T,U,
Ca=/alpha\([^)]*\)/i,rc=/opacity=([^)]*)/,sc=/^(top|right|bottom|left)$/,tc=/^(none|table(?!-c[ea]).+)/,vb=/^margin/,Ib=new RegExp("^("+la+")(.*)$","i"),ea=new RegExp("^("+la+")(?!px)[a-z%]+$","i"),uc=new RegExp("^([-+])=("+la+")","i"),sa={},vc={position:"absolute",visibility:"hidden",display:"block"},wb={letterSpacing:0,fontWeight:400},J=["Top","Right","Bottom","Left"],Oa=["Webkit","O","Moz","ms"],wc=c.fn.toggle;c.fn.extend({css:function(a,b){return c.access(this,function(a,b,f){return f!==q?c.style(a,
b,f):c.css(a,b)},a,b,1<arguments.length)},show:function(){return Pa(this,!0)},hide:function(){return Pa(this)},toggle:function(a,b){var d="boolean"==typeof a;return c.isFunction(a)&&c.isFunction(b)?wc.apply(this,arguments):this.each(function(){(d?a:da(this))?c(this).show():c(this).hide()})}});c.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=z(a,"opacity");return""===c?"1":c}}}},cssNumber:{fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":c.support.cssFloat?
"cssFloat":"styleFloat"},style:function(a,b,d,e){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var f,g,h,k=c.camelCase(b),m=a.style;if(b=c.cssProps[k]||(c.cssProps[k]=Na(m,k)),h=c.cssHooks[b]||c.cssHooks[k],d===q)return h&&"get"in h&&(f=h.get(a,!1,e))!==q?f:m[b];if(g=typeof d,"string"===g&&(f=uc.exec(d))&&(d=(f[1]+1)*f[2]+parseFloat(c.css(a,b)),g="number"),!(null==d||"number"===g&&isNaN(d)||("number"!==g||c.cssNumber[k]||(d+="px"),h&&"set"in h&&(d=h.set(a,d,e))===q)))try{m[b]=d}catch(l){}}},css:function(a,
b,d,e){var f,g,h,k=c.camelCase(b);return b=c.cssProps[k]||(c.cssProps[k]=Na(a.style,k)),h=c.cssHooks[b]||c.cssHooks[k],h&&"get"in h&&(f=h.get(a,!0,e)),f===q&&(f=z(a,b)),"normal"===f&&b in wb&&(f=wb[b]),d||e!==q?(g=parseFloat(f),d||c.isNumeric(g)?g||0:f):f},swap:function(a,b,c){var e,f={};for(e in b)f[e]=a.style[e],a.style[e]=b[e];c=c.call(a);for(e in b)a.style[e]=f[e];return c}});p.getComputedStyle?z=function(a,b){var d,e,f,g,h=p.getComputedStyle(a,null),k=a.style;return h&&(d=h[b],""!==d||c.contains(a.ownerDocument,
a)||(d=c.style(a,b)),ea.test(d)&&vb.test(b)&&(e=k.width,f=k.minWidth,g=k.maxWidth,k.minWidth=k.maxWidth=k.width=d,d=h.width,k.width=e,k.minWidth=f,k.maxWidth=g)),d}:r.documentElement.currentStyle&&(z=function(a,b){var c,e,f=a.currentStyle&&a.currentStyle[b],g=a.style;return null==f&&g&&g[b]&&(f=g[b]),ea.test(f)&&!sc.test(b)&&(c=g.left,e=a.runtimeStyle&&a.runtimeStyle.left,e&&(a.runtimeStyle.left=a.currentStyle.left),g.left="fontSize"===b?"1em":f,f=g.pixelLeft+"px",g.left=c,e&&(a.runtimeStyle.left=
e)),""===f?"auto":f});c.each(["height","width"],function(a,b){c.cssHooks[b]={get:function(a,e,f){return e?0===a.offsetWidth&&tc.test(z(a,"display"))?c.swap(a,vc,function(){return Ta(a,b,f)}):Ta(a,b,f):void 0},set:function(a,e,f){return Ra(a,e,f?Sa(a,b,f,c.support.boxSizing&&"border-box"===c.css(a,"boxSizing")):0)}}});c.support.opacity||(c.cssHooks.opacity={get:function(a,b){return rc.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":b?"1":""},set:function(a,
b){var d=a.style,e=a.currentStyle,f=c.isNumeric(b)?"alpha(opacity="+100*b+")":"",g=e&&e.filter||d.filter||"";d.zoom=1;1<=b&&""===c.trim(g.replace(Ca,""))&&d.removeAttribute&&(d.removeAttribute("filter"),e&&!e.filter)||(d.filter=Ca.test(g)?g.replace(Ca,f):g+" "+f)}});c(function(){c.support.reliableMarginRight||(c.cssHooks.marginRight={get:function(a,b){return c.swap(a,{display:"inline-block"},function(){return b?z(a,"marginRight"):void 0})}});!c.support.pixelPosition&&c.fn.position&&c.each(["top",
"left"],function(a,b){c.cssHooks[b]={get:function(a,e){if(e){var f=z(a,b);return ea.test(f)?c(a).position()[b]+"px":f}}}})});c.expr&&c.expr.filters&&(c.expr.filters.hidden=function(a){return 0===a.offsetWidth&&0===a.offsetHeight||!c.support.reliableHiddenOffsets&&"none"===(a.style&&a.style.display||z(a,"display"))},c.expr.filters.visible=function(a){return!c.expr.filters.hidden(a)});c.each({margin:"",padding:"",border:"Width"},function(a,b){c.cssHooks[a+b]={expand:function(c){var e="string"==typeof c?
c.split(" "):[c],f={};for(c=0;4>c;c++)f[a+J[c]+b]=e[c]||e[c-2]||e[0];return f}};vb.test(a)||(c.cssHooks[a+b].set=Ra)});var xc=/%20/g,Jb=/\[\]$/,xb=/\r?\n/g,yc=/^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,zc=/^(?:select|textarea)/i;c.fn.extend({serialize:function(){return c.param(this.serializeArray())},serializeArray:function(){return this.map(function(){return this.elements?c.makeArray(this.elements):this}).filter(function(){return this.name&&
!this.disabled&&(this.checked||zc.test(this.nodeName)||yc.test(this.type))}).map(function(a,b){var d=c(this).val();return null==d?null:c.isArray(d)?c.map(d,function(a){return{name:b.name,value:a.replace(xb,"\r\n")}}):{name:b.name,value:d.replace(xb,"\r\n")}}).get()}});c.param=function(a,b){var d,e=[],f=function(a,b){b=c.isFunction(b)?b():null==b?"":b;e[e.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(b===q&&(b=c.ajaxSettings&&c.ajaxSettings.traditional),c.isArray(a)||a.jquery&&!c.isPlainObject(a))c.each(a,
function(){f(this.name,this.value)});else for(d in a)ta(d,a[d],b,f);return e.join("&").replace(xc,"+")};var X,B,Ac=/#.*$/,Bc=/^(.*?):[ \t]*([^\r\n]*)\r?$/gm,Cc=/^(?:GET|HEAD)$/,Dc=/^\/\//,yb=/\?/,Ec=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,Fc=/([?&])_=[^&]*/,zb=/^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,Ab=c.fn.load,ua={},Bb={};try{B=Mb.href}catch(a){B=r.createElement("a"),B.href="",B=B.href}X=zb.exec(B.toLowerCase())||[];c.fn.load=function(a,b,d){if("string"!=typeof a&&Ab)return Ab.apply(this,
arguments);if(!this.length)return this;var e,f,g,h=this,k=a.indexOf(" ");return 0<=k&&(e=a.slice(k,a.length),a=a.slice(0,k)),c.isFunction(b)?(d=b,b=q):b&&"object"==typeof b&&(f="POST"),c.ajax({url:a,type:f,dataType:"html",data:b,complete:function(a,b){d&&h.each(d,g||[a.responseText,b,a])}}).done(function(a){g=arguments;h.html(e?c("<div>").append(a.replace(Ec,"")).find(e):a)}),this};c.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "),function(a,b){c.fn[b]=function(a){return this.on(b,
a)}});c.each(["get","post"],function(a,b){c[b]=function(a,e,f,g){return c.isFunction(e)&&(g=g||f,f=e,e=q),c.ajax({type:b,url:a,data:e,success:f,dataType:g})}});c.extend({getScript:function(a,b){return c.get(a,q,b,"script")},getJSON:function(a,b,d){return c.get(a,b,d,"json")},ajaxSetup:function(a,b){return b?Va(a,c.ajaxSettings):(b=a,a=c.ajaxSettings),Va(a,b),a},ajaxSettings:{url:B,isLocal:/^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/.test(X[1]),global:!0,type:"GET",contentType:"application/x-www-form-urlencoded; charset=UTF-8",
processData:!0,async:!0,accepts:{xml:"application/xml, text/xml",html:"text/html",text:"text/plain",json:"application/json, text/javascript","*":"*/*"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText"},converters:{"* text":p.String,"text html":!0,"text json":c.parseJSON,"text xml":c.parseXML},flatOptions:{context:!0,url:!0}},ajaxPrefilter:Ua(ua),ajaxTransport:Ua(Bb),ajax:function(a,b){function d(a,b,d,g){var m,p,t,y,x,F=b;if(2!==A){A=2;k&&clearTimeout(k);
h=q;f=g||"";u.readyState=0<a?4:0;if(d){y=n;g=u;var C,G,B,L,M=y.contents,I=y.dataTypes,O=y.responseFields;for(G in O)G in d&&(g[O[G]]=d[G]);for(;"*"===I[0];)I.shift(),C===q&&(C=y.mimeType||g.getResponseHeader("content-type"));if(C)for(G in M)if(M[G]&&M[G].test(C)){I.unshift(G);break}if(I[0]in d)B=I[0];else{for(G in d){if(!I[0]||y.converters[G+" "+I[0]]){B=G;break}L||(L=G)}B=B||L}y=B?(B!==I[0]&&I.unshift(B),d[B]):void 0}if(200<=a&&300>a||304===a)if(n.ifModified&&(x=u.getResponseHeader("Last-Modified"),
x&&(c.lastModified[e]=x),x=u.getResponseHeader("Etag"),x&&(c.etag[e]=x)),304===a)F="notmodified",m=!0;else{var H;a:{d=n;m=y;var K,J;t=d.dataTypes.slice();x=t[0];F={};C=0;if(d.dataFilter&&(m=d.dataFilter(m,d.dataType)),t[1])for(H in d.converters)F[H.toLowerCase()]=d.converters[H];for(;p=t[++C];)if("*"!==p){if("*"!==x&&x!==p){if(H=F[x+" "+p]||F["* "+p],!H)for(K in F)if(J=K.split(" "),J[1]===p&&(H=F[x+" "+J[0]]||F["* "+J[0]])){!0===H?H=F[K]:!0!==F[K]&&(p=J[0],t.splice(C--,0,p));break}if(!0!==H)if(H&&
d["throws"])m=H(m);else try{m=H(m)}catch(Q){H={state:"parsererror",error:H?Q:"No conversion from "+x+" to "+p};break a}}x=p}H={state:"success",data:m}}m=H;F=m.state;p=m.data;t=m.error;m=!t}else t=F,(!F||a)&&(F="error",0>a&&(a=0));u.status=a;u.statusText=(b||F)+"";m?z.resolveWith(r,[p,F,u]):z.rejectWith(r,[u,F,t]);u.statusCode(D);D=q;l&&v.trigger("ajax"+(m?"Success":"Error"),[u,n,m?p:t]);E.fireWith(r,[u,F]);l&&(v.trigger("ajaxComplete",[u,n]),--c.active||c.event.trigger("ajaxStop"))}}"object"==typeof a&&
(b=a,a=q);b=b||{};var e,f,g,h,k,m,l,p,n=c.ajaxSetup({},b),r=n.context||n,v=r!==n&&(r.nodeType||r instanceof c)?c(r):c.event,z=c.Deferred(),E=c.Callbacks("once memory"),D=n.statusCode||{},x={},y={},A=0,C="canceled",u={readyState:0,setRequestHeader:function(a,b){if(!A){var c=a.toLowerCase();a=y[c]=y[c]||a;x[a]=b}return this},getAllResponseHeaders:function(){return 2===A?f:null},getResponseHeader:function(a){var b;if(2===A){if(!g)for(g={};b=Bc.exec(f);)g[b[1].toLowerCase()]=b[2];b=g[a.toLowerCase()]}return b===
q?null:b},overrideMimeType:function(a){return A||(n.mimeType=a),this},abort:function(a){return a=a||C,h&&h.abort(a),d(0,a),this}};if(z.promise(u),u.success=u.done,u.error=u.fail,u.complete=E.add,u.statusCode=function(a){if(a){var b;if(2>A)for(b in a)D[b]=[D[b],a[b]];else b=a[u.status],u.always(b)}return this},n.url=((a||n.url)+"").replace(Ac,"").replace(Dc,X[1]+"//"),n.dataTypes=c.trim(n.dataType||"*").toLowerCase().split(K),null==n.crossDomain&&(m=zb.exec(n.url.toLowerCase())||!1,n.crossDomain=m&&
m.join(":")+(m[3]?"":"http:"===m[1]?80:443)!==X.join(":")+(X[3]?"":"http:"===X[1]?80:443)),n.data&&n.processData&&"string"!=typeof n.data&&(n.data=c.param(n.data,n.traditional)),Z(ua,n,b,u),2===A)return u;if(l=n.global,n.type=n.type.toUpperCase(),n.hasContent=!Cc.test(n.type),l&&0===c.active++&&c.event.trigger("ajaxStart"),!n.hasContent&&(n.data&&(n.url+=(yb.test(n.url)?"&":"?")+n.data,delete n.data),e=n.url,!1===n.cache)){m=c.now();var B=n.url.replace(Fc,"$1_="+m);n.url=B+(B===n.url?(yb.test(n.url)?
"&":"?")+"_="+m:"")}(n.data&&n.hasContent&&!1!==n.contentType||b.contentType)&&u.setRequestHeader("Content-Type",n.contentType);n.ifModified&&(e=e||n.url,c.lastModified[e]&&u.setRequestHeader("If-Modified-Since",c.lastModified[e]),c.etag[e]&&u.setRequestHeader("If-None-Match",c.etag[e]));u.setRequestHeader("Accept",n.dataTypes[0]&&n.accepts[n.dataTypes[0]]?n.accepts[n.dataTypes[0]]+("*"!==n.dataTypes[0]?", */*; q=0.01":""):n.accepts["*"]);for(p in n.headers)u.setRequestHeader(p,n.headers[p]);if(n.beforeSend&&
(!1===n.beforeSend.call(r,u,n)||2===A))return u.abort();C="abort";for(p in{success:1,error:1,complete:1})u[p](n[p]);if(h=Z(Bb,n,b,u)){u.readyState=1;l&&v.trigger("ajaxSend",[u,n]);n.async&&0<n.timeout&&(k=setTimeout(function(){u.abort("timeout")},n.timeout));try{A=1,h.send(x,d)}catch(N){if(!(2>A))throw N;d(-1,N)}}else d(-1,"No Transport");return u},active:0,lastModified:{},etag:{}});var Cb=[],Gc=/\?/,qa=/(=)\?(?=&|$)|\?\?/,Hc=c.now();c.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=Cb.pop()||
c.expando+"_"+Hc++;return this[a]=!0,a}});c.ajaxPrefilter("json jsonp",function(a,b,d){var e,f,g,h=a.data,k=a.url,m=!1!==a.jsonp,l=m&&qa.test(k),r=m&&!l&&"string"==typeof h&&!(a.contentType||"").indexOf("application/x-www-form-urlencoded")&&qa.test(h);return"jsonp"===a.dataTypes[0]||l||r?(e=a.jsonpCallback=c.isFunction(a.jsonpCallback)?a.jsonpCallback():a.jsonpCallback,f=p[e],l?a.url=k.replace(qa,"$1"+e):r?a.data=h.replace(qa,"$1"+e):m&&(a.url+=(Gc.test(k)?"&":"?")+a.jsonp+"="+e),a.converters["script json"]=
function(){return g||c.error(e+" was not called"),g[0]},a.dataTypes[0]="json",p[e]=function(){g=arguments},d.always(function(){p[e]=f;a[e]&&(a.jsonpCallback=b.jsonpCallback,Cb.push(e));g&&c.isFunction(f)&&f(g[0]);g=f=q}),"script"):void 0});c.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/javascript|ecmascript/},converters:{"text script":function(a){return c.globalEval(a),a}}});c.ajaxPrefilter("script",function(a){a.cache===
q&&(a.cache=!1);a.crossDomain&&(a.type="GET",a.global=!1)});c.ajaxTransport("script",function(a){if(a.crossDomain){var b,c=r.head||r.getElementsByTagName("head")[0]||r.documentElement;return{send:function(e,f){b=r.createElement("script");b.async="async";a.scriptCharset&&(b.charset=a.scriptCharset);b.src=a.url;b.onload=b.onreadystatechange=function(a,e){(e||!b.readyState||/loaded|complete/.test(b.readyState))&&(b.onload=b.onreadystatechange=null,c&&b.parentNode&&c.removeChild(b),b=q,e||f(200,"success"))};
c.insertBefore(b,c.firstChild)},abort:function(){b&&b.onload(0,1)}}}});var Y,Da=p.ActiveXObject?function(){for(var a in Y)Y[a](0,1)}:!1,Ic=0;c.ajaxSettings.xhr=p.ActiveXObject?function(){var a;if(!(a=!this.isLocal&&Wa()))a:{try{a=new p.ActiveXObject("Microsoft.XMLHTTP");break a}catch(b){}a=void 0}return a}:Wa;(function(a){c.extend(c.support,{ajax:!!a,cors:!!a&&"withCredentials"in a})})(c.ajaxSettings.xhr());c.support.ajax&&c.ajaxTransport(function(a){if(!a.crossDomain||c.support.cors){var b;return{send:function(d,
e){var f,g,h=a.xhr();if(a.username?h.open(a.type,a.url,a.async,a.username,a.password):h.open(a.type,a.url,a.async),a.xhrFields)for(g in a.xhrFields)h[g]=a.xhrFields[g];a.mimeType&&h.overrideMimeType&&h.overrideMimeType(a.mimeType);a.crossDomain||d["X-Requested-With"]||(d["X-Requested-With"]="XMLHttpRequest");try{for(g in d)h.setRequestHeader(g,d[g])}catch(k){}h.send(a.hasContent&&a.data||null);b=function(d,g){var l,p,n,r,v;try{if(b&&(g||4===h.readyState))if(b=q,f&&(h.onreadystatechange=c.noop,Da&&
delete Y[f]),g)4!==h.readyState&&h.abort();else{l=h.status;n=h.getAllResponseHeaders();r={};(v=h.responseXML)&&v.documentElement&&(r.xml=v);try{r.text=h.responseText}catch(x){}try{p=h.statusText}catch(x){p=""}l||!a.isLocal||a.crossDomain?1223===l&&(l=204):l=r.text?200:404}}catch(x){g||e(-1,x)}r&&e(l,p,r,n)};a.async?4===h.readyState?setTimeout(b,0):(f=++Ic,Da&&(Y||(Y={},c(p).unload(Da)),Y[f]=b),h.onreadystatechange=b):b()},abort:function(){b&&b(0,1)}}}});var fa,ra,Jc=/^(?:toggle|show|hide)$/,Kc=new RegExp("^(?:([-+])=|)("+
la+")([a-z%]*)$","i"),Lc=/queueHooks$/,ia=[function(a,b,d){var e,f,g,h,k,m,l=this,p=a.style,n={},q=[],r=a.nodeType&&da(a);d.queue||(k=c._queueHooks(a,"fx"),null==k.unqueued&&(k.unqueued=0,m=k.empty.fire,k.empty.fire=function(){k.unqueued||m()}),k.unqueued++,l.always(function(){l.always(function(){k.unqueued--;c.queue(a,"fx").length||k.empty.fire()})}));1===a.nodeType&&("height"in b||"width"in b)&&(d.overflow=[p.overflow,p.overflowX,p.overflowY],"inline"===c.css(a,"display")&&"none"===c.css(a,"float")&&
(c.support.inlineBlockNeedsLayout&&"inline"!==Qa(a.nodeName)?p.zoom=1:p.display="inline-block"));d.overflow&&(p.overflow="hidden",c.support.shrinkWrapBlocks||l.done(function(){p.overflow=d.overflow[0];p.overflowX=d.overflow[1];p.overflowY=d.overflow[2]}));for(e in b)(f=b[e],Jc.exec(f))&&(delete b[e],f!==(r?"hide":"show"))&&q.push(e);if(f=q.length)for(g=c._data(a,"fxshow")||c._data(a,"fxshow",{}),r?c(a).show():l.done(function(){c(a).hide()}),l.done(function(){var b;c.removeData(a,"fxshow",!0);for(b in n)c.style(a,
b,n[b])}),e=0;f>e;e++)b=q[e],h=l.createTween(b,r?g[b]:0),n[b]=g[b]||c.style(a,b),b in g||(g[b]=h.start,r&&(h.end=h.start,h.start="width"===b||"height"===b?1:0))}],aa={"*":[function(a,b){var d,e,f=this.createTween(a,b),g=Kc.exec(b),h=f.cur(),k=+h||0,m=1,l=20;if(g){if(d=+g[2],e=g[3]||(c.cssNumber[a]?"":"px"),"px"!==e&&k){k=c.css(f.elem,a,!0)||d||1;do m=m||".5",k/=m,c.style(f.elem,a,k+e);while(m!==(m=f.cur()/h)&&1!==m&&--l)}f.unit=e;f.start=k;f.end=g[1]?k+(g[1]+1)*d:d}return f}]};c.Animation=c.extend(Ya,
{tweener:function(a,b){c.isFunction(a)?(b=a,a=["*"]):a=a.split(" ");for(var d,e=0,f=a.length;f>e;e++)d=a[e],aa[d]=aa[d]||[],aa[d].unshift(b)},prefilter:function(a,b){b?ia.unshift(a):ia.push(a)}});c.Tween=E;E.prototype={constructor:E,init:function(a,b,d,e,f,g){this.elem=a;this.prop=d;this.easing=f||"swing";this.options=b;this.start=this.now=this.cur();this.end=e;this.unit=g||(c.cssNumber[d]?"":"px")},cur:function(){var a=E.propHooks[this.prop];return a&&a.get?a.get(this):E.propHooks._default.get(this)},
run:function(a){var b,d=E.propHooks[this.prop];return this.pos=b=this.options.duration?c.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),d&&d.set?d.set(this):E.propHooks._default.set(this),this}};E.prototype.init.prototype=E.prototype;E.propHooks={_default:{get:function(a){var b;return null==a.elem[a.prop]||a.elem.style&&null!=a.elem.style[a.prop]?(b=c.css(a.elem,
a.prop,!1,""),b&&"auto"!==b?b:0):a.elem[a.prop]},set:function(a){c.fx.step[a.prop]?c.fx.step[a.prop](a):a.elem.style&&(null!=a.elem.style[c.cssProps[a.prop]]||c.cssHooks[a.prop])?c.style(a.elem,a.prop,a.now+a.unit):a.elem[a.prop]=a.now}}};E.propHooks.scrollTop=E.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}};c.each(["toggle","show","hide"],function(a,b){var d=c.fn[b];c.fn[b]=function(e,f,g){return null==e||"boolean"==typeof e||!a&&c.isFunction(e)&&
c.isFunction(f)?d.apply(this,arguments):this.animate(ja(b,!0),e,f,g)}});c.fn.extend({fadeTo:function(a,b,c,e){return this.filter(da).css("opacity",0).show().end().animate({opacity:b},a,c,e)},animate:function(a,b,d,e){var f=c.isEmptyObject(a),g=c.speed(b,d,e);b=function(){var b=Ya(this,c.extend({},a),g);f&&b.stop(!0)};return f||!1===g.queue?this.each(b):this.queue(g.queue,b)},stop:function(a,b,d){var e=function(a){var b=a.stop;delete a.stop;b(d)};return"string"!=typeof a&&(d=b,b=a,a=q),b&&!1!==a&&
this.queue(a||"fx",[]),this.each(function(){var b=!0,g=null!=a&&a+"queueHooks",h=c.timers,k=c._data(this);if(g)k[g]&&k[g].stop&&e(k[g]);else for(g in k)k[g]&&k[g].stop&&Lc.test(g)&&e(k[g]);for(g=h.length;g--;)h[g].elem!==this||null!=a&&h[g].queue!==a||(h[g].anim.stop(d),b=!1,h.splice(g,1));!b&&d||c.dequeue(this,a)})}});c.each({slideDown:ja("show"),slideUp:ja("hide"),slideToggle:ja("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){c.fn[a]=function(a,
c,f){return this.animate(b,a,c,f)}});c.speed=function(a,b,d){var e=a&&"object"==typeof a?c.extend({},a):{complete:d||!d&&b||c.isFunction(a)&&a,duration:a,easing:d&&b||b&&!c.isFunction(b)&&b};return e.duration=c.fx.off?0:"number"==typeof e.duration?e.duration:e.duration in c.fx.speeds?c.fx.speeds[e.duration]:c.fx.speeds._default,(null==e.queue||!0===e.queue)&&(e.queue="fx"),e.old=e.complete,e.complete=function(){c.isFunction(e.old)&&e.old.call(this);e.queue&&c.dequeue(this,e.queue)},e};c.easing={linear:function(a){return a},
swing:function(a){return.5-Math.cos(a*Math.PI)/2}};c.timers=[];c.fx=E.prototype.init;c.fx.tick=function(){for(var a,b=c.timers,d=0;d<b.length;d++)a=b[d],a()||b[d]!==a||b.splice(d--,1);b.length||c.fx.stop()};c.fx.timer=function(a){a()&&c.timers.push(a)&&!ra&&(ra=setInterval(c.fx.tick,c.fx.interval))};c.fx.interval=13;c.fx.stop=function(){clearInterval(ra);ra=null};c.fx.speeds={slow:600,fast:200,_default:400};c.fx.step={};c.expr&&c.expr.filters&&(c.expr.filters.animated=function(a){return c.grep(c.timers,
function(b){return a===b.elem}).length});var Db=/^(?:body|html)$/i;c.fn.offset=function(a){if(arguments.length)return a===q?this:this.each(function(b){c.offset.setOffset(this,a,b)});var b,d,e,f,g,h,k,m={top:0,left:0},l=this[0],p=l&&l.ownerDocument;if(p)return(d=p.body)===l?c.offset.bodyOffset(l):(b=p.documentElement,c.contains(b,l)?("undefined"!=typeof l.getBoundingClientRect&&(m=l.getBoundingClientRect()),e=Za(p),f=b.clientTop||d.clientTop||0,g=b.clientLeft||d.clientLeft||0,h=e.pageYOffset||b.scrollTop,
k=e.pageXOffset||b.scrollLeft,{top:m.top+h-f,left:m.left+k-g}):m)};c.offset={bodyOffset:function(a){var b=a.offsetTop,d=a.offsetLeft;return c.support.doesNotIncludeMarginInBodyOffset&&(b+=parseFloat(c.css(a,"marginTop"))||0,d+=parseFloat(c.css(a,"marginLeft"))||0),{top:b,left:d}},setOffset:function(a,b,d){var e=c.css(a,"position");"static"===e&&(a.style.position="relative");var f,g,h=c(a),k=h.offset(),m=c.css(a,"top"),l=c.css(a,"left"),p={},n={};("absolute"===e||"fixed"===e)&&-1<c.inArray("auto",
[m,l])?(n=h.position(),f=n.top,g=n.left):(f=parseFloat(m)||0,g=parseFloat(l)||0);c.isFunction(b)&&(b=b.call(a,d,k));null!=b.top&&(p.top=b.top-k.top+f);null!=b.left&&(p.left=b.left-k.left+g);"using"in b?b.using.call(a,p):h.css(p)}};c.fn.extend({position:function(){if(this[0]){var a=this[0],b=this.offsetParent(),d=this.offset(),e=Db.test(b[0].nodeName)?{top:0,left:0}:b.offset();return d.top-=parseFloat(c.css(a,"marginTop"))||0,d.left-=parseFloat(c.css(a,"marginLeft"))||0,e.top+=parseFloat(c.css(b[0],
"borderTopWidth"))||0,e.left+=parseFloat(c.css(b[0],"borderLeftWidth"))||0,{top:d.top-e.top,left:d.left-e.left}}},offsetParent:function(){return this.map(function(){for(var a=this.offsetParent||r.body;a&&!Db.test(a.nodeName)&&"static"===c.css(a,"position");)a=a.offsetParent;return a||r.body})}});c.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,b){var d=/Y/.test(b);c.fn[a]=function(e){return c.access(this,function(a,e,h){var k=Za(a);return h===q?k?b in k?k[b]:k.document.documentElement[e]:
a[e]:void(k?k.scrollTo(d?c(k).scrollLeft():h,d?h:c(k).scrollTop()):a[e]=h)},a,e,arguments.length,null)}});c.each({Height:"height",Width:"width"},function(a,b){c.each({padding:"inner"+a,content:b,"":"outer"+a},function(d,e){c.fn[e]=function(e,g){var h=arguments.length&&(d||"boolean"!=typeof e),k=d||(!0===e||!0===g?"margin":"border");return c.access(this,function(b,d,e){var f;return c.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(f=b.documentElement,Math.max(b.body["scroll"+a],
f["scroll"+a],b.body["offset"+a],f["offset"+a],f["client"+a])):e===q?c.css(b,d,e,k):c.style(b,d,e,k)},b,h?e:q,h,null)}})});p.jQuery=p.$=c;"function"==typeof define&&define.amd&&define.amd.jQuery&&define("jquery",[],function(){return c})}(window);
/** /js/jquery.cookie.js **/
var ___d2c_jquerycookiejs_c_on="2020-08-05 14:10:29";(function(e,k,l){function m(b){return b}function n(b){try{return decodeURIComponent(b.replace(f," "))}catch(c){try{return decodeURIComponent(unescape(b).replace(f," "))}catch(a){return console&&console.log&&console.log(a.message),b}}}var f=/\+/g,d=e.cookie=function(b,c,a){if(c!==l){a=e.extend({},d.defaults,a);null===c&&(a.expires=-1);"number"===typeof a.expiresInMinutes&&(a.expires=a.expiresInMinutes/1440);if("number"===typeof a.expires){var g=a.expires,h=a.expires=new Date;h.setTime(+h+864E5*g)}c=
d.json?JSON.stringify(c):String(c);return k.cookie=[encodeURIComponent(b),"=",d.raw?c:encodeURIComponent(c),a.expires?"; expires="+a.expires.toUTCString():"",a.path?"; path="+a.path:"",a.domain?"; domain="+a.domain:"",a.secure?"; secure":""].join("")}c=d.raw?m:n;a=k.cookie.split("; ");g=0;for(h=a.length;g<h;g++){var f=a[g].split("=");if(c(f.shift())===b)return b=c(f.join("=")),d.json?JSON.parse(b):b}return null};d.defaults={};e.removeCookie=function(b,c){return null!==e.cookie(b)?(e.cookie(b,null,
c),!0):!1}})(jQuery,document);
/** /js/jquery.base64.js **/
var ___d2c_jquerybase64js_c_on="2020-08-05 14:10:20";jQuery.base64=function(h){function e(a,c){var b="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".indexOf(a.charAt(c));if(-1===b)throw"Cannot decode base64";return b}function f(a,c){var b=a.charCodeAt(c);if(255<b)throw"INVALID_CHARACTER_ERR: DOM Exception 5";return b}return{decode:function(a){var c=0,b,d,g=a.length,f=[];a=String(a);if(0===g)return a;if(0!==g%4)throw"Cannot decode base64";"="===a.charAt(g-1)&&(c=1,"="===a.charAt(g-2)&&(c=2),g-=4);for(b=0;b<g;b+=4)d=e(a,b)<<18|e(a,
b+1)<<12|e(a,b+2)<<6|e(a,b+3),f.push(String.fromCharCode(d>>16,d>>8&255,d&255));switch(c){case 1:d=e(a,b)<<18|e(a,b+1)<<12|e(a,b+2)<<6;f.push(String.fromCharCode(d>>16,d>>8&255));break;case 2:d=e(a,b)<<18|e(a,b+1)<<12,f.push(String.fromCharCode(d>>16))}return f.join("")},encode:function(a){if(1!==arguments.length)throw"SyntaxError: exactly one argument required";a=String(a);var c,b,d=[],e=a.length-a.length%3;if(0===a.length)return a;for(c=0;c<e;c+=3)b=f(a,c)<<16|f(a,c+1)<<8|f(a,c+2),d.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(b>>
18)),d.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(b>>12&63)),d.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(b>>6&63)),d.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(b&63));switch(a.length-e){case 1:b=f(a,c)<<16;d.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(b>>18)+"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(b>>12&63)+"==");break;case 2:b=
f(a,c)<<16|f(a,c+1)<<8,d.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(b>>18)+"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(b>>12&63)+"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(b>>6&63)+"=")}return d.join("")},VERSION:"1.0"}}(jQuery);
/** /js/jquery.darktooltip.js **/
var ___d2c_jquerydarktooltipjs_c_on="2020-08-05 14:10:40";var $jscomp={scope:{},findInternal:function(b,c,a){b instanceof String&&(b=String(b));for(var d=b.length,e=0;e<d;e++){var f=b[e];if(c.call(a,f,e,b))return{i:e,v:f}}return{i:-1,v:void 0}}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(b,c,a){if(a.get||a.set)throw new TypeError("ES3 does not support getters and setters.");b!=Array.prototype&&b!=Object.prototype&&(b[c]=a.value)};
$jscomp.getGlobal=function(b){return"undefined"!=typeof window&&window===b?b:"undefined"!=typeof global?global:b};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(b,c,a,d){if(c){a=$jscomp.global;b=b.split(".");for(d=0;d<b.length-1;d++){var e=b[d];e in a||(a[e]={});a=a[e]}b=b[b.length-1];d=a[b];c=c(d);c!=d&&null!=c&&$jscomp.defineProperty(a,b,{configurable:!0,writable:!0,value:c})}};
$jscomp.polyfill("Array.prototype.find",function(b){return b?b:function(b,a){return $jscomp.findInternal(this,b,a).v}},"es6-impl","es3");
(function(b){function c(a,b){this.bearer=a;this.options=b;this.hideEvent;this.hiding=!1;this.mouseOverMode="hover"==this.options.trigger||"mouseover"==this.options.trigger||"onmouseover"==this.options.trigger}c.prototype={show:function(){var a=this;this.options.modal&&this.modalLayer.css("display","block");this.tooltip.css("display","block");a.mouseOverMode&&(this.tooltip.mouseover(function(){clearTimeout(a.hideEvent);a.hiding=!1}),this.tooltip.mouseout(function(){clearTimeout(a.hideEvent);a.hide();
a.hiding=!1}))},hide:function(){var a=this;a.hiding||(a.hiding=!0,this.hideEvent=setTimeout(function(){a.hiding=!1;a.tooltip.hide()},100),a.options.modal&&(a.hiding=!1,a.modalLayer.hide()),this.options.onClose())},toggle:function(){this.tooltip.is(":visible")?this.hide():this.show()},addAnimation:function(){switch(this.options.animation){case "fadeIn":this.tooltip.addClass("animated");this.tooltip.addClass("fadeIn");break;case "flipIn":this.tooltip.addClass("animated"),this.tooltip.addClass("flipIn")}},
setContent:function(){b(this.bearer).css("cursor","pointer");if(this.options.content)this.content=this.options.content;else if(this.bearer.attr("data-tooltip"))this.content=this.bearer.attr("data-tooltip");else return;if("#"==this.content.charAt(0)){if(this.options.delete_content){var a=b(this.content).html();b(this.content).html("");this.content=a;delete a}else b(this.content).hide(),this.content=b(this.content).html();this.contentType="html"}else this.contentType="text";a=""!=this.bearer.attr("id")&&
"undefined"!=this.bearer.attr("id")?"id='darktooltip-"+this.bearer.attr("id")+"'":"id='darktooltip-"+(Date.now()+Math.floor(Math.random()*Math.floor(1E4)))+"'";0===b("INS.darktooltip-modal-layer").length&&(this.modalLayer=b("<ins class='darktooltip-modal-layer'></ins>"));this.tooltip=b("<ins "+a+" class = 'dark-tooltip "+this.options.theme+" "+this.options.size+" "+this.options.gravity+"'><div>"+this.content+"</div><div class = 'tip'></div></ins>");this.tip=this.tooltip.find(".tip");b("body").append(this.modalLayer);
b("body").append(this.tooltip);"html"==this.contentType&&this.tooltip.css("max-width","none");this.tooltip.css("opacity",this.options.opacity);this.addAnimation();this.options.confirm&&this.addConfirm()},setPositions:function(){var a=this.bearer.offset().left,b=this.bearer.offset().top;switch(this.options.gravity){case "south":a+=this.bearer.outerWidth()/2-this.tooltip.outerWidth()/2;b+=-this.tooltip.outerHeight()-this.tip.outerHeight()/2;break;case "west":a+=this.bearer.outerWidth()+this.tip.outerWidth()/
2;b+=this.bearer.outerHeight()/2-this.tooltip.outerHeight()/2;break;case "north":a+=this.bearer.outerWidth()/2-this.tooltip.outerWidth()/2;b+=this.bearer.outerHeight()+this.tip.outerHeight()/2;break;case "east":a+=-this.tooltip.outerWidth()-this.tip.outerWidth()/2,b+=this.bearer.outerHeight()/2-this.tooltip.outerHeight()/2}this.options.autoLeft&&this.tooltip.css("left",a);this.options.autoTop&&this.tooltip.css("top",b)},setEvents:function(){var a=this,d=a.options.hoverDelay,c;if(a.mouseOverMode)this.bearer.mouseenter(function(){c=
setTimeout(function(){a.setPositions();a.show()},d)}).mouseleave(function(){clearTimeout(c);a.hide()});else if("click"==this.options.trigger||"onclik"==this.options.trigger)this.tooltip.click(function(a){a.stopPropagation()}),this.bearer.click(function(b){b.preventDefault();a.setPositions();a.toggle();b.stopPropagation()}),b("html").click(function(){a.hide()})},activate:function(){this.setContent();this.content&&this.setEvents()},addConfirm:function(){this.tooltip.append("<ul class = 'confirm'><li class = 'darktooltip-yes'>"+
this.options.yes+"</li><li class = 'darktooltip-no'>"+this.options.no+"</li></ul>");this.setConfirmEvents()},setConfirmEvents:function(){var a=this;this.tooltip.find("li.darktooltip-yes").click(function(b){a.onYes();b.stopPropagation()});this.tooltip.find("li.darktooltip-no").click(function(b){a.onNo();b.stopPropagation()})},finalMessage:function(){if(this.options.finalMessage){var a=this;a.tooltip.find("div:first").html(this.options.finalMessage);a.tooltip.find("ul").remove();a.setPositions();setTimeout(function(){a.hide();
a.setContent()},a.options.finalMessageDuration)}else this.hide()},onYes:function(){this.options.onYes(this.bearer);this.finalMessage()},onNo:function(){this.options.onNo(this.bearer);this.hide()}};b.fn.darkTooltip=function(a){return this.each(function(){a=b.extend({},b.fn.darkTooltip.defaults,a);(new c(b(this),a)).activate()})};b.fn.darkTooltip.defaults={animation:"none",confirm:!1,content:"",finalMessage:"",finalMessageDuration:1E3,gravity:"south",hoverDelay:0,modal:!1,no:"No",onNo:function(){},
onYes:function(){},opacity:.9,size:"medium",theme:"dark",trigger:"hover",yes:"Yes",autoTop:!0,autoLeft:!0,onClose:function(){}}})(jQuery);
/** /js/jquery.validity.js **/
/*
 * jQuery.validity v1.1.1
 * http://validity.thatscaptaintoyou.com/
 * http://code.google.com/p/validity/
 * 
 * Copyright (c) 2010 Wyatt Allen
 * Dual licensed under the MIT and GPL licenses.
 *
 * Date: 2010-08-16 (Tuesday, 16 August 2010)
 * Revision: 134
 */
(function($) {
	
	// Default settings:
	////////////////////////////////////////////////////////////////
	
	var defaults = {
					// The default output mode is label because it requires no dependencies:
					outputMode:"label",
					
					// The css class on the output
					cssClass:"error",

					// The this property is set to true, validity will scroll the browser viewport
					// so that the first error is visible when validation fails:
					scrollTo:false,

					// If this setting is true, modal errors will disappear when they are clicked on:
					modalErrorsClickable:true,

					// If a field name cannot be otherwise inferred, this will be used:
					defaultFieldName:"This field",
					
					// jQuery selector to filter down to validation-supported elements:
					elementSupport:":text, [type=tel], [type=email], [type=date], :password, textarea, select, :radio, :checkbox",
					
					// Function to stringify argments for use when generating error messages.
					// Primarily, it just generates pretty date strings:
					argToString:function(val) {
							return val.getDate ?
									(val.getMonth() + 1) + "/" + val.getDate() + "/" + val.getFullYear() :
									val;
					}
			};
	
	// Static functions and properties:
	////////////////////////////////////////////////////////////////
	
	$.validity = {

			// Clone the defaults. They can be overridden with the setup function:
			settings:$.extend(defaults, {}),

			// Built-in library of format-checking tools for use with the 
			// match validator as well as the nonHtml validator:
			patterns:{
					integer:/^\d+$/,
					
					// Used to use Date.parse(), which was the cause of Issue 9, 
					// where the function would accept 09/80/2009 as parseable.
					// The fix is to use a RegExp that will only accept American Middle-Endian form.
					// See the Internationalization section in the documentation for how to
					// cause it to support other date formats:
					date:/^((0?\d)|(1[012]))\/([012]?\d|30|31)\/\d{1,4}$/, 
					
					email:/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
					usd:/^\$?(\d{1,3},?(\d{3},?)*\d{3}(\.\d{0,2})?|\d{1,3}(\.\d{0,2})?|\.\d{1,2}?)$/,
					url:/^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i,
					
					// Number should accept floats or integers, be they positive or negative.
					// It should also support scientific-notation, written as a lower or capital 'E' followed by the radix.
					// Number assumes base 10. 
					// Unlike the native parseFloat or parseInt functions, this should not accept trailing Latin characters.
					number:/^[+-]?(\d+(\.\d*)?|\.\d+)([Ee]\d+)?$/,
					
					zip:/^\d{5}(-\d{4})?$/,
					phone:/^[2-9]\d{2}-\d{3}-\d{4}$/,
					guid:/^(\{?([0-9a-fA-F]){8}-(([0-9a-fA-F]){4}-){3}([0-9a-fA-F]){12}\}?)$/,
					time12:/^[01]?\d:[0-5]\d?\s?[aApP]\.?[mM]\.?$/,
					time24:/^(20|21|22|23|[01]\d|\d)(([:][0-5]\d){1,2})$/,

					nonHtml:/^[^<>]*$/
			},

			// Built-in set of default error messages (for use when a message isn't specified):
			messages:{
					areacode: "#{field} accepts only local area codes",
					require:"#{field} is required.",
					// Format validators:
					match:"#{field} is in an invalid format.",
					integer:"#{field} must be a positive, whole number.",
					date:"#{field} must be formatted as a date.",
					email:"#{field} must be formatted as an email.",
					usd:"#{field} must be formatted as a US Dollar amount.",
					url:"#{field} must be formatted as a URL.",
					number:"#{field} must be formatted as a number.",
					zip:"#{field} must be formatted as a zipcode ##### or #####-####.",
					phone:"#{field} must be formatted as a phone number ###-###-####.",
					guid:"#{field} must be formatted as a guid like {3F2504E0-4F89-11D3-9A0C-0305E82C3301}.",
					time24:"#{field} must be formatted as a 24 hour time: 23:00.",
					time12:"#{field} must be formatted as a 12 hour time: 12:00 AM/PM",

					// Value range messages:
					lessThan:"#{field} must be less than #{max}.",
					lessThanOrEqualTo:"#{field} must be less than or equal to #{max}.",
					greaterThan:"#{field} must be greater than #{min}.",
					greaterThanOrEqualTo:"#{field} must be greater than or equal to #{min}.",
					range:"#{field} must be between #{min} and #{max}.",

					// Value length messages:
					tooLong:"#{field} cannot be longer than #{max} characters.",
					tooShort:"#{field} cannot be shorter than #{min} characters.",

					// Composition validators:
					nonHtml:"#{field} cannot contain HTML characters.",
					alphabet:"#{field} contains disallowed characters.",

					minCharClass:"#{field} cannot have more than #{min} #{charClass} characters.",
					maxCharClass:"#{field} cannot have less than #{min} #{charClass} characters.",
					
					// Aggregate validator messages:
					equal:"Values don't match.",
					distinct:"A value was repeated.",
					sum:"Values don't add to #{sum}.",
					sumMax:"The sum of the values must be less than #{max}.",
					sumMin:"The sum of the values must be greater than #{min}.",

					// Radio validator messages:
					radioChecked:"The selected value is not valid.",
					
					generic:"Invalid."
			},
			
			// Character classes can be used to determine the quantity
			// of a given type of character in a string:
			charClasses:{
					alphabetical:/\w/g,
					numeric:/\d/g,
					alphanumeric:/[A-Za-z0-9]/g,
					symbol:/[^A-Za-z0-9]/g
			},

			// Object to contain the output modes. The three built-in output modes are installed
			// later on in this script.
			outputs:{},

			// Override the default settings with user-specified ones.
			setup:function(options) {
					this.settings = $.extend(this.settings, options);
									return this;
							},

			// Object to store information about ongoing validation.
			// When validation starts, this will be set to a report object.
			// When validators fail, they will inform this object.
			// When validation is completed, this object will contain the 
			// information of whether it succeeded:
			report:null,

			// Determine whether validity is in the middle of validation:
			isValidating:function() {
					return !!this.report;
			},

			// Function to prepare validity to start validating:
			start:function() {
					// The output mode should be notified that validation is starting.
					// This usually means that the output mode will erase errors from the 
					// document in whatever way the mode needs to:
					if (this.outputs[this.settings.outputMode] &&
							this.outputs[this.settings.outputMode].start) {
							this.outputs[this.settings.outputMode].start();
					}

					// Initialize the report object:
					this.report = { errors:0, valid:true };
			},

			// Function called when validation is over to examine the results and clean-up:
			end:function() {
					// Null coalescence: fix for Issue 5:
					var results = this.report || { errors: 0, valid: true };

					this.report = null;
					
					// Notify the current output mode that validation is over:
					if (this.outputs[this.settings.outputMode] &&
							this.outputs[this.settings.outputMode].end) {
							this.outputs[this.settings.outputMode].end(results);
					}
					
					return results;
			},

			// Remove validiation errors:
			clear:function() {
					this.start();
					this.end();
			}
	};
	
	// jQuery instance methods:
	////////////////////////////////////////////////////////////////

	$.fn.extend({

			// The validity function is how validation can be bound to forms.
			// The user may pass in a validation function or, as a shortcut, 
			// pass in a string of a CSS selector that grabs all the inputs to 
			// require:
			validity:function(arg) {
			
					return this.each(
					
							function() {
							
									// Only operate on forms:
									if (this.tagName.toLowerCase() == "form") {
											var f = null;

											// If the user entered a string to select the inputs to require,
											// then make the validation logic ad hoc:
											if (typeof (arg) == "string") {
													f = function() {
															$(arg).require();
													};
											}

											// If the user entered a validation function then just call
											// that at the appropriate time:
											else if ($.isFunction(arg)) {
													f = arg;
											}

											if (arg) {
													$(this).bind(
															"submit",
															function() {
																	$.validity.start();
																	f();
																	return $.validity.end().valid;
															}
													);
											}
									}
							}
					);
			},

			// Validators:
			////////////////////////////////////////////////

			// Common validators:
			////////////////////////////////
			
			// Validate whether the field has a value.
			// http://validity.thatscaptaintoyou.com/Demos/index.htm#Require
			require:function(msg) {
					return validate(
							this,
							function(obj) {
									var val = $(obj).val();										
									var res = $.trim(val).length;										
									return res;
							},
							msg || $.validity.messages.require
					);
			},

			// Validate whether the field matches a regex.
			// http://validity.thatscaptaintoyou.com/Demos/index.htm#Match
			match:function(rule, msg) {

					// If a default message is to be used:
					if (!msg) {
							// First grab the generic one:
							msg = $.validity.messages.match;

							// If there's a more specific one, use that.
							if (typeof (rule) === "string" && $.validity.messages[rule]) {
									msg = $.validity.messages[rule];
							}
					}

					// If the rule is named, rather than specified:
					if (typeof (rule) == "string") {
							rule = $.validity.patterns[rule];
					}

					return validate(
							this,

							// Some of the named rules can be functions, such as 'date'.
							// If the discovered rule is a function use it as such.
							// Otherwise, assume it's a RegExp.
							$.isFunction(rule) ?

									function(obj) {
											return !obj.value.length || rule(obj.value);
									} :

									function(obj) {
											// Fix for regexes where the global flag is set.
											// Make sure to test from the start of the string.
											if (rule.global) {
													rule.lastIndex = 0;
											}
									
											return !obj.value.length || rule.test(obj.value);
									},

							msg
					);
			},

			// http://validity.thatscaptaintoyou.com/Demos/index.htm#Range
			range:function(min, max, msg) {
					return validate(
							this,

							min.getTime && max.getTime ?

									// If both arguments are dates then use them that way.
									function(obj) {
											var d = new Date(obj.value);
											return d >= new Date(min) && d <= new Date(max);
									} :

									min.substring && max.substring && Big ?

											// If both arguments are strings then parse them 
											// using the Arbitrary-Precision library.
											function(obj) {
													var n = new Big(obj.value);
													return (
															n.greaterThanOrEqualTo(new Big(min)) && 
															n.lessThanOrEqualTo(new Big(max))
													);
											} :

											// Otherwise treat them like floats.
											function(obj) {
													var f = parseFloat(obj.value);
													return f >= min && f <= max;
											},

							msg || format(
									$.validity.messages.range, {
											min:$.validity.settings.argToString(min),
											max:$.validity.settings.argToString(max)
									}
							)
					);
			},

			// http://validity.thatscaptaintoyou.com/Demos/index.htm#GreaterThan
			greaterThan:function(min, msg) {
					return validate(
							this,

							min.getTime ?
									function(obj) {
											return new Date(obj.value) > min;
									} :

									min.substring && Big ?

											function(obj) {
												 return new Big(obj.value).greaterThan(new Big(min)); 
											} :

											function(obj) {
													return parseFloat(obj.value) > min;
											},

							msg || format(
									$.validity.messages.greaterThan, {
											min:$.validity.settings.argToString(min)
									}
							)
					);
			},

			// http://validity.thatscaptaintoyou.com/Demos/index.htm#GreaterThan
			greaterThanOrEqualTo:function(min, msg) {
					return validate(
							this,

							min.getTime ?
									function(obj) {
											return new Date(obj.value) >= min;
									} :

									min.substring && Big ?

											function(obj) {
													return new Big(obj.value).greaterThanOrEqualTo(new Big(min));
											} :

											function(obj) {
													return parseFloat(obj.value) >= min;
											},

							msg || format(
									$.validity.messages.greaterThanOrEqualTo, {
											min:$.validity.settings.argToString(min)
									}
							)
					);
			},

			// http://code.google.com/p/validity/wiki/Validators#LessThan
			lessThan:function(max, msg) {
					return validate(
							this,

							max.getTime ?
									function(obj) {
											return new Date(obj.value) < max;
									} :

									max.substring && Big ?

											function(obj) {
													return new Big(obj.value).lessThan(new Big(max));
											} :

											function(obj) {
													return parseFloat(obj.value) < max;
											},

							msg || format(
									$.validity.messages.lessThan, {
											max:$.validity.settings.argToString(max)
									}
							)
					);
			},

			// http://validity.thatscaptaintoyou.com/Demos/index.htm#LessThan
			lessThanOrEqualTo:function(max, msg) {
					return validate(
							this,

							max.getTime ?
									function(obj) {
											return new Date(obj.value) <= max;
									} :

									max.substring && Big ?

											function(obj) {
													return new Big(obj.value).lessThanOrEqualTo(new Big(max));
											} :

											function(obj) {
													return parseFloat(obj.value) <= max;
											},

							msg || format(
									$.validity.messages.lessThanOrEqualTo, {
											max:$.validity.settings.argToString(max)
									}
							)
					);
			},

			// http://validity.thatscaptaintoyou.com/Demos/index.htm#LessThan
			maxLength:function(max, msg) {
					return validate(
							this,
							function(obj) {
									return obj.value.length <= max;
							},
							msg || format(
									$.validity.messages.tooLong, {
											max:max
									}
							)
					);
			},

			// http://validity.thatscaptaintoyou.com/Demos/index.htm#Length
			minLength:function(min, msg) {
					return validate(
							this,
							function(obj) {
									return obj.value.length >= min;
							},
							msg || format(
									$.validity.messages.tooShort, {
											min:min
									}
							)
					);
			},
			
			// TODO: Document
			alphabet:function(alpha, msg) {
					var chars = [];
					
					return validate(
							this,
							function(obj) {
							
									// For each character in the string, ensure that 
									// it's in the alphabet definition:
									for (var idx = 0; idx < obj.value.length; ++idx) {
											if (alpha.indexOf(obj.value.charAt(idx)) == -1) {
													chars.push(obj.value.charAt(idx));
													return false;
											}
									}
									
									return true;
							},
							msg || format(
									$.validity.messages.alphabet, {
											chars:chars.join(", ")
									}
							)
					);
			},
			
			// TODO: Document
			minCharClass:function(charClass, min, msg) {
					if (typeof(charClass) == "string") {
							charClass = charClass.toLowerCase();
					
							if ($.validity.charClasses[charClass]) {
									charClass = $.validity.charClasses[charClass];
							}
					}
					
					return validate(
							this,
							function(obj) {
									return (obj.value.match(charClass) || []).length >= min;
							},
							msg || format(
									$.validity.messages.minCharClass, {
											min:min,
											charClass:charClass
									}
							)
					);
			},
			
			// TODO: Document
			maxCharClass:function(charClass, max, msg) {
					if (typeof(charClass) == "string") {
							charClass = charClass.toLowerCase();
					
							if ($.validity.charClasses[charClass]) {
									charClass = $.validity.charClasses[charClass];
							}
					}
					
					return validate(
							this,
							function(obj) {
									return (obj.value.match(charClass) || []).length <= max;
							},
							msg || format(
									$.validity.messages.maxCharClass, {
											max:max,
											charClass:charClass
									}
							)
					);
			},
			
			// TODO: Document
			password:function(opts, msg) {
					opts = $.extend({
									alphabet:null,
					
									minLength:0,
									maxLength:0,
									
									minSymbol:0,
									minAlphabetical:0,
									minNumeric:0,
									minAlphaNumeric:0
							}, 
							opts
					);
					
					if (opts.alphabet) {
							this.alphabet(opts.alphabet);
					}
					
					if (opts.minLength) {
							this.minLength(opts.minLength);
					}
					
					if (opts.maxLength) {
							this.maxLength(opts.maxLength);
					}
					
					if (opts.minSymbol) {
							this.minCharClass("symbol", opts.minSymbol);
					}
					
					if (opts.minAlphabetical) {
							this.minCharClass("alphabetical", opts.minAlphabetical);
					}
					
					if (opts.minNumeric) {
							this.minCharClass("numeric", opts.minNumeric);
					}
					
					if (opts.minAlphanumeric) {
							this.minCharClass("alphanumeric", opts.minAlphanumeric);
					}
					
					return this;
			},
			
			// Validate that the input does not contain potentially dangerous strings.
			// http://validity.thatscaptaintoyou.com/Demos/index.htm#NonHtml
			nonHtml:function(msg) {
					return validate(
							this,

							function(obj) {
									return $.validity.patterns.nonHtml.test(obj.value);
							},

							msg || $.validity.messages.nonHtml
					);
			},
			
			// Aggregate validators:
			////////////////////////////////
			
			// Validate that all matched elements bear the same values.
			// Accepts a function to transform the values for testing.
			// http://validity.thatscaptaintoyou.com/Demos/index.htm#Equal
			equal:function(arg0, arg1) {
					var 
							// If a reduced set is attached, use it.
							// Also, remove unsupported elements.
							$reduction =	(this.reduction || this).filter($.validity.settings.elementSupport),

							transform = function(val) {
									return val;
							},

							msg = $.validity.messages.equal;

					if ($reduction.length) {

							// Figure out what arguments were specified.
							if ($.isFunction(arg0)) {
									transform = arg0;

									if (typeof (arg1) == "string") {
											msg = arg1;
									}
							}

							else if (typeof (arg0) == "string") {
									msg = arg0;
							}

							var 
									map = $.map(
											$reduction,
											function(obj) {
													return transform(obj.value);
											}
									),

									// Get the first value.
									first = map[0],
									valid = true;

							// If any value is not equal to the first value,
							// then they aren't all equal, and it's not valid.
							for (var i in map) {
									if (map[i] != first) {
											valid = false;
									}
							}

							if (!valid) {
									raiseAggregateError($reduction, msg);

									// The set reduces to zero valid elements.
									this.reduction = $([]);
							}
					}

					return this;
			},

			// Validate that all matched elements bear distinct values.
			// Accepts an optional function to transform the values for testing.
			// http://validity.thatscaptaintoyou.com/Demos/index.htm#Distinct
			distinct:function(arg0, arg1) {
					var 
							// If a reduced set is attached, use it.
							// Also, remove unsupported elements.
							$reduction =	(this.reduction || this).filter($.validity.settings.elementSupport),

							transform = function(val) {
									return val;
							},

							msg = $.validity.messages.distinct,

							// An empty array to store already-examined values
							subMap = [],

							valid = true;

					if ($reduction.length) {

							// Figure out what arguments were specified.
							if ($.isFunction(arg0)) {
									transform = arg0;

									if (typeof (arg1) == "string") {
											msg = arg1;
									}
							}

							else if (typeof (arg0) == "string") {
									msg = arg0;
							}

							// Map all the matched values into an array.		
							var map = $.map(
									$reduction,
									function(obj) {
											return transform(obj.value);
									}
							);

							// For each transformed value:
							for (var i1 = 0; i1 < map.length; ++i1) {
									// Unless it's an empty string:
									if (map[i1].length) {
											// For each value we've already looked at:
											for (var i2 = 0; i2 < subMap.length; ++i2) {
													// If we've already seen the transformed value:
													if (subMap[i2] == map[i1]) {
															valid = false;
													}
											}

											// We looked at the value.
											subMap.push(map[i1]);
									}
							}

							if (!valid) {
									raiseAggregateError($reduction, msg);

									// The set reduces to zero valid elements.
									this.reduction = $([]);
							}
					}

					return this;
			},

			// Validate that the numeric sum of all values is equal to a given value.
			// http://validity.thatscaptaintoyou.com/Demos/index.htm#Sum
			sum:function(sum, msg) {
					// If a reduced set is attached, use it.
					// Also, remove unsupported elements.
					var $reduction =	(this.reduction || this).filter($.validity.settings.elementSupport);

					if ($reduction.length && sum != numericSum($reduction)) {
							raiseAggregateError(
									$reduction,
									msg || format(
											$.validity.messages.sum,
											{ sum:sum }
									)
							);

							// The set reduces to zero valid elements.
							this.reduction = $([]);
					}

					return this;
			},

			// Validates an inclusive upper-bound on the numeric sum of the values of all matched elements.
			// http://validity.thatscaptaintoyou.com/Demos/index.htm#Sum
			sumMax:function(max, msg) {
					// If a reduced set is attached, use it.
					// Also, remove unsupported elements.
					var $reduction =	(this.reduction || this).filter($.validity.settings.elementSupport);

					if ($reduction.length && max < numericSum($reduction)) {
							raiseAggregateError(
									$reduction,
									msg || format(
											$.validity.messages.sumMax,
											{ max:max }
									)
							);

							// The set reduces to zero valid elements.
							this.reduction = $([]);
					}

					return this;
			},

			// Validates an inclusive lower-bound on the numeric sum of the values of all matched elements.
			// http://validity.thatscaptaintoyou.com/Demos/index.htm#Sum
			sumMin:function(min, msg) {
					// If a reduced set is attached, use it.
					// Also, remove unsupported elements.
					var $reduction =	(this.reduction || this).filter($.validity.settings.elementSupport);

					if ($reduction.length && min < numericSum($reduction)) {
							raiseAggregateError(
									$reduction,
									msg || format(
											$.validity.messages.sumMin,
											{ min:min }
									)
							);

							// The set reduces to zero valid elements.
							this.reduction = $([]);
					}

					return this;
			},
			
			// Radio group validators:
			////////////////////////////////
			
			// TODO: Document
			radioChecked:function(val, msg) {
					// If a reduced set is attached, use it.
					// Also, remove unsupported elements.
					var $reduction =	(this.reduction || this).filter($.validity.settings.elementSupport);
					
					if ($reduction.is(":radio") && $reduction.find(":checked").val() != val) {
							raiseAggregateError(
									$reduction,
									msg || $.validity.messages.radioChecked
							);
					}
			},
			
			// TODO: Document
			radioNotChecked:function(val, msg) {
					// If a reduced set is attached, use it.
					// Also, remove unsupported elements.
					var $reduction =	(this.reduction || this).filter($.validity.settings.elementSupport);
					
					if ($reduction.is(":radio") && $reduction.filter(":checked").val() == val) {
							raiseAggregateError(
									$reduction,
									msg || $.validity.messages.radioChecked
							);
					}
			},
			
			// Checkbox validators:
			////////////////////////////////
			
			// TODO: Document
			checkboxChecked:function(msg) {
					// If a reduced set is attached, use it.
					// Also, remove unsupported elements.
					var $reduction =	(this.reduction || this).filter($.validity.settings.elementSupport);
					
					if ($reduction.is(":checkbox") && !$reduction.is(":checked")) {
							raiseAggregateError(
									$reduction,
									msg || $.validity.messages.radioChecked
							);
							if( $("div").hasClass("text155chk") )
							{
								$(".text155chk").addClass("validity-erroneous");
							}
					}
			},
			
			// Specialized validators:
			////////////////////////////////

			// If expression is a function, it will be called on each matched element.
			// Otherwise, it is treated as a boolean, and the determines the validity 
			// of elements in an aggregate fashion.
			// http://validity.thatscaptaintoyou.com/Demos/index.htm#Assert
			assert:function(expression, msg) {
					// If a reduced set is attached, use it.
					// Do not reduce to supported elements.
					var $reduction = this.reduction || this;

					if ($reduction.length) {

							// In the case that 'expression' is a function, 
							// use it as a regimen on each matched element individually:
							if ($.isFunction(expression)) {
									return validate(
											this,
											expression,
											msg || $.validity.messages.generic
									);
							}

							// Otherwise map it to a boolean and consider this as an aggregate validation:
							else if (!expression) {

									raiseAggregateError(
											$reduction,
											msg || $.validity.messages.generic
									);

									// The set reduces to zero valid elements.
									this.reduction = $([]);
							}
					}

					return this;
			}
	});

	
	/* D2C Custom jQuery instance methods: */
	/*_____________________________________________________________*/			 
	$.fn.extend({
					validAllorNone: function(msg){

							var $Set =	(this.reduction || this).filter($.validity.settings.elementSupport);
							var valid = true;
							var message = '';
							$Set.each(function(){
									if( $(this).val() != '' ){
											$Set.each(function(){
													if( $(this).val() == '' ){
															valid = false;
															raiseError(this,format(message, { field:infer(this) }));
													}
											});
											return false;
									}
							});
							return this;
					},
					requireWithWatermark: function(msg){										
							return validate(
									this,
									function (obj){
											var basicRequire = function(val) {
													return (val.trim().length > 0);
											}
									
											var WaterMark = $(obj).attr('alt');
											var Value = $(obj).val().trim();
											if( !WaterMark )
													return basicRequire(Value);
											if( WaterMark == Value )
													return false;
											return basicRequire(Value);
									},
									msg || $.validity.messages.require
							)
					},
					requirePostalCode: function(msg){
							return validate(
									this,
									function(el){
											var code = $(el).val().replace(/\s/g,'').replace(/[^A-z0-9]/g,'0').toUpperCase();
											
											if( code.length == 0 ) return true;	// Don't validate blanks
											if( code.length	< 5 ) return false; // Greater than 1 but less than 5, invalid
											
											ZipRegex = $.validity.patterns['zip'];
											if( code.match( ZipRegex ) != null ) return true;
											
											var l = 'ABCEGHJKLMNPRSTVWXYZ';
											CanadaPostRegex = RegExp( "["+l+"][0-9]["+l+"][0-9]["+l+"][0-9]" );
											if( code.match( CanadaPostRegex ) != null ){
													$(el).val(code.substring(0,3)+' '+code.substring(3,6));
													return true;
											}
											
											return false;
									},
									msg || $.validity.messages.require
							);
					},
					/* depricated. used validatePhone instead * /
					requireAreaCode: function(msg){
							//Does not validate blank values, use .require() for that									 
					

							var ValidAreaCodes = [ 438,514,450,579,819,249,705,226,
																													 519,289,365,905,416,437,647,343,
																													 613,709,873,418,581,506,902 ];
							return validate(
									this,									 
									function( el ){
											var phone = $(el).val().replace(/[^0-9]+/gi, '');
											if( phone.length == 0 ){
													return true;
											}
											if( phone[0] == '1' ){
													phone = phone.substring( 1 );
											}
											var areaCode = parseInt( phone.substring(0,3) );
											if( typeof ValidAreaCodes.indexOf != 'undefined' ){
													if( ValidAreaCodes.indexOf( areaCode ) == -1 ){
															return false;
													}
											}
											return true;
									},
									msg || $.validity.messages.areacode
							)
					},
					/**/
					validEmailAddress: function( msg ){
						var self = this;
						var ValidDomains = ['.com','.ca','.net','.biz','.quebec','.co','.info','.mobi','.org' ]; //DWP-1616
						if($('#ADMIN_GENERAL_BLOCK_FR_DOMAIN_CHECK').length == 1 && $('#ADMIN_GENERAL_BLOCK_FR_DOMAIN_CHECK').val()!="1"){
							ValidDomains.push('.fr');												
						}
						
						var isValid = validate(
							this,
							function(obj) {
								rule = $.validity.patterns['email'];
								// Fix for regexes where the global flag is set.
								// Make sure to test from the start of the string.
								if (rule.global) {
										rule.lastIndex = 0;
								}
								return !obj.value.length || rule.test(obj.value);
							},
							''
						);
						
						if( !isValid ){
							return ( msg || $.validity.messages.email );
						}																	
						
						return validate(
							this,
							function( el ){
								var email = $(el).val().toLowerCase();
								var validDomain = false;
								
								if( !email.length ) {
									return true;
								}
									
								if (!String.prototype.endsWith){	// CRAPPY IE!
									String.prototype.endsWith = function(pattern) {
										var d = this.length - pattern.length;
										return d >= 0 && this.lastIndexOf(pattern) === d;
									};
								}
										
								for (var i = 0; i < ValidDomains.length; i++)
								{
									if( email.toLowerCase().endsWith(ValidDomains[i])) validDomain = true;
								}

								if(validDomain == false) return false;

								if( typeof emailHandler !== 'undefined' ){
									//return !!(emailHandler.validateEmail( email ));
									var valid = true; //assume valid until we discover its invalid
									emailHandler.validateEmail( email ).done(function(data) {
										if (data.status === 'invalid') valid = false;
									});
									return valid;
								}
								else {
									return true;
								}
										
								return true;
							},
							msg || $.validity.messages.email
						)
					},
					radioOptionChosen:function( msg ) {
							// If a reduced set is attached, use it.
							// Also, remove unsupported elements.
							var $reduction =	(this.reduction || this).filter($.validity.settings.elementSupport);
							
							var RadioGroups = {};
							$reduction.each(function(){
									var n = $(this).attr('name');
									if( typeof RadioGroups[ n ] == 'undefined' ){
											RadioGroups[ n ] = [];
									}
									RadioGroups[ n ].push( this );
							});
							
							for( var i in RadioGroups ){
									if( 0 == $(RadioGroups[i]).filter(':radio').filter(':checked').length ){
											raiseAggregateError(
															$(RadioGroups[i]),
															msg || $.validity.messages.radioChecked
											);
									}
							}
	},
					oneOrMoreChecked: function(msg){
							var $reduction =	(this.reduction || this).filter($.validity.settings.elementSupport);
							$reduction.each(function(){
									var checked = $reduction.filter(function(){
											if( $(this).is('[type=checkbox]:checked') ){
													return true;
											}
											return false;
									}).length;
									
									//console.log( $reduction, checked );
									
									if( 0 == checked ){
											$reduction.parents('ul').first().addClass("validity-erroneous");
											raiseAggregateError(
															$reduction,
															msg || $.validity.messages.radioChecked
											);
									}
									
									
							});
							
					},

					 validateMobile: function(msg){
							var $reduction =	(this.reduction || this).filter($.validity.settings.elementSupport);
							var toReturn = true;
							var phone = '';
							var loop = $($reduction).size();
							var ValidAreaCodes = [ 438,514,263,450,579,819,249,705,226,
																		 519,289,365,905,416,437,647,343,
																		 613,709,873,418,581,506,902 ];
							/*
							some forms have 3 inputs for phone number, some just one.
							The goal is to get whole phone number to validate.										 
							If ajax call failed try to use area code at least.
							 */
							for (var i = 0;i <= loop; i++) {																						
									if(i<loop){
											phone +=$($($reduction)[i]).val();
									}else{
											phone = phone.replace(/[^0-9]+/gi, '');																											 
										 
											if( phone[0] == '1' ){
													phone = phone.substring( 1 );
											}
										 
											var areaCode = parseInt( phone.substring(0,3) );
											
											$.ajax({
													url: 'https://rest.d2cmedia.ca/sites/svc/validatePhoneNumber.php',
													type: 'GET',
													async: false, //need to find a solution to make this async
													timeout:2000,	
													dataType: 'json',
													data: {phone: phone,'mobile':1},
											})
											.success(function(res) {																
													if (typeof res.isOk !== 'undefined'){
													 if (res.phoneNumberIsValid === false) {
															//console.log('phone '+phone+' is invalid');
															toReturn = false;
													 }else{
															//console.log('phone '+phone+' is valid');
													 }
													}else{
															//console.log("validity validatePhoneNumber script error");
															// validate areacode at least
															if( typeof ValidAreaCodes.indexOf != 'undefined' &&	ValidAreaCodes.indexOf( areaCode ) == -1 ) return false;																																						
													}

													return validate(
															$reduction,
															function( el ){
																	return toReturn;
															},
															msg || $.validity.messages.phone
													)
											})
											.error(function(error) {
													// validate areacode at least
													if( typeof ValidAreaCodes.indexOf != 'undefined' &&	ValidAreaCodes.indexOf( areaCode ) == -1 ){
													 toReturn = false;																				
													}
													//console.log("validity validatePhoneNumber network error");

													return validate(
															$reduction,
															function( el ){
																	return toReturn;
															},
															msg || $.validity.messages.phone
													)
											});																
											//console.log('toReturn',toReturn);
									}
							}
					},

					validatePhone: function(msg){
							var $reduction =	(this.reduction || this).filter($.validity.settings.elementSupport);
							var toReturn = true;
							var phone = '';
							var loop = $($reduction).size();
							
							var ValidAreaCodes = [ 438,514,263,450,579,819,249,705,226,
																		 519,289,365,905,416,437,647,343,
																		 613,709,873,418,581,506,902 ];
							/*
							some forms have 3 inputs for phone number, some just one. 
							The goal is to get whole phone number to validate.										 
							If ajax call failed try to use area code at least.
							 */
							for (var i = 0;i <= loop; i++) {																						
								if(i<loop){
									phone +=$($($reduction)[i]).val();
								}else{
									phone = phone.replace(/[^0-9]+/gi, '');																											 
									if(typeof emailHandler!='undefined' && this.hasClass('required')) {
										emailHandler.phoneMandatory=true;
									}
									if( phone[0] == '1' ){
										phone = phone.substring( 1 );
									}
									
									var areaCode = parseInt( phone.substring(0,3) );
									
									$.ajax({
										url: 'https://autoaubaine.com/services/validatePhoneNumber.php',
										type: 'GET',
										async: false,
										timeout:2000,	
										dataType: 'json',
										data: {phone: phone},
									})
									.success(function(res) {
										if (typeof res.isOk !== 'undefined'){
											if (res.phoneNumberIsValid === false) {
												//console.log('phone '+phone+' is invalid');
												if(typeof emailHandler!='undefined' && emailHandler.phoneMandatory ) {
													emailHandler.phoneValidationAttempts++;
												}
												toReturn = false;
											}else{
													//console.log('phone '+phone+' is valid');
											}
										 }else{
											//console.log("validity validatePhoneNumber script error");
										 // validate areacode at least
											if( typeof ValidAreaCodes.indexOf != 'undefined' &&	ValidAreaCodes.indexOf( areaCode ) == -1 ){
												return false;
											}
										}

										return validate(
											$reduction,
											function( el ){
												return toReturn;
											},
											msg || $.validity.messages.phone
										)
									})
									.error(function(error) {
										// validate areacode at least
										if( typeof ValidAreaCodes.indexOf != 'undefined' &&	ValidAreaCodes.indexOf( areaCode ) == -1 ){
										if(typeof emailHandler!='undefined'	&& emailHandler.phoneMandatory) emailHandler.phoneValidationAttempts++;
											toReturn = false;
										}
										//console.log("validity validatePhoneNumber network error");

										return validate(
											$reduction,
											function( el ){
												return toReturn;
											},
											msg || $.validity.messages.phone
										)
									});
											//console.log('toReturn',toReturn);
								}
							}
					}
	});

			
			
	// Private utilities:
	////////////////////////////////////////////////////////////////

	// Do non-aggregate validation.
	// Subject each element in $obj to the regimen.
	// Raise the specified error on failures.
	// This function is the heart of validity:
	function validate($obj, regimen, message) {
			var 
					// If a reduced set is attached, use it
					// Also, remove any unsupported elements.
					$reduction = ($obj.reduction || $obj).filter($.validity.settings.elementSupport),

					// Array to store only elements that pass the regimen.
					elements = [];
					
			if( $obj.length < 1 )
			{
				console.log( 'Could not validate element', $obj );
				return $obj;
			}

			// For each in the reduction.
			$reduction.each(
					function() {
							// If the element passes the regimen, include it in the reduction.
							if (regimen(this)) {
									elements.push(this);
							}

							// Else give the element an error message.
							else {
									raiseError(
											this,
											format(message, {
													field:infer(this)
											})
									);
							}
					}
			);

			// Attach a (potentially) reduced set of only elements that passed.
			$obj.reduction = $(elements);

			// Return the full set with attached reduction.
			return $obj;
	}

	// Inform the report object that there was a failure.
	function addToReport() {
			if ($.validity.isValidating()) {
					$.validity.report.errors++;
					$.validity.report.valid = false;
			}
	}

	// Inform the report of a failure and display an error according to the 
	// idiom of the current ouutput mode.
	function raiseError(obj, msg) {
			addToReport();

			if ($.validity.outputs[$.validity.settings.outputMode] &&
					$.validity.outputs[$.validity.settings.outputMode].raise) {
					$.validity.outputs[$.validity.settings.outputMode].raise($(obj), msg);
			}
	}

	// Inform the report of a failure and display an aggregate error according to the 
	// idiom of the current output mode.
	function raiseAggregateError($obj, msg) {
			addToReport();

			if ($.validity.outputs[$.validity.settings.outputMode] &&
					$.validity.outputs[$.validity.settings.outputMode].raiseAggregate) {
					$.validity.outputs[$.validity.settings.outputMode].raiseAggregate($obj, msg);
			}
	}

	// Yield the sum of the values of all fields matched in obj that can be parsed.
	function numericSum(obj) {
			var accumulator = 0;
			obj.each(
					function() {
							var n = parseFloat(this.value);

							accumulator += isNaN(n) ? 0 : n;
					}
			);
			return accumulator;
	}

	// Using the associative array supplied as the 'obj' argument,
	// replace tokens of the format #{<key>} in the 'str' argument with
	// that key's value.
	function format(str, obj) {
			for (var p in obj) {
					str = str.replace("#{" + p + "}", obj[p]);
			}
			return capitalize(str);
	}

	// Infer the field name of the passed DOM element.
	// If a title is specified, its value is returned.
	// Otherwise, attempt to parse a field name out of the id attribute.
	// If that doesn't work, return the default field name in the configuration.
	function infer(field) {
			var 
					$f = $(field),
					ret = $.validity.settings.defaultFieldName;

			// Check for title.
			if ( typeof $f.attr("title") !== "undefined" && $f.attr('title').length ) {
					ret = $f.attr("title");
			}

			// Check for UpperCamelCase.
			else if (/^([A-Z0-9][a-z]*)+$/.test(field.id)) {
					ret = field.id.replace(/([A-Z0-9])[a-z]*/g, " $&");
			}

			// Check for lowercase_separated_by_underscores
			else if (/^[a-z0-9_]*$/.test(field.id)) {
					var arr = field.id.split("_");

					for (var i = 0; i < arr.length; ++i) {
							arr[i] = capitalize(arr[i]);
					}

					ret = arr.join(" ");
			}

			return ret;
	}

	// Capitolize the first character of the string argument.
	function capitalize(sz) {
			return sz.substring ?
					sz.substring(0, 1).toUpperCase() + sz.substring(1, sz.length) :
					sz;
	}

})(jQuery);

// Output modes:
////////////////////////////////////////////////////////////////

// Each output mode gets its own closure, 
// distinct from the validity closure.

// Install the label output.
(function($) {
		function getIdentifier($obj) {
				return $obj.attr('id').length ?
						$obj.attr('id') :
						$obj.attr('name');
		}

		$.validity.outputs.label = {
				start:function() {
						// Remove all the existing error labels.
						$("label." + $.validity.settings.cssClass).remove();
				},
				
				end:function(results) {
						// If not valid and scrollTo is enabled, scroll the page to the first error.
						if (!results.valid && $.validity.settings.scrollTo) {
								location.hash = $("label." + $.validity.settings.cssClass + ":eq(0)").attr('for');
						}
				},

				raise:function($obj, msg) {
						var 
								labelSelector = "label." + $.validity.settings.cssClass + "[for='" + getIdentifier($obj) + "']";

						// If an error label already exists for the bad input just update its text:
						if ($(labelSelector).length) {
								$(labelSelector).text(msg);
						}

						// Otherwize create a new one and stick it after the input:
						else {
								$("<label/>")
										.attr("for", getIdentifier($obj))
										.addClass($.validity.settings.cssClass)
										.text(msg)

										// In the case that the element does not have an id
										// then the for attribute in the label will not cause
										// clicking the label to focus the element. This line 
										// will make that happen.
										.click(function() {
												if ($obj.length) {
														$obj[0].select();
												}
										})

										.insertAfter($obj);
						}
				},

				raiseAggregate:function($obj, msg) {
						// Just raise the error on the last input.
						if ($obj.length) {
								this.raise($($obj.get($obj.length - 1)), msg);
						}
				}
		};
})(jQuery);

// Install the modal output.
(function($) {
		var 
				// Class to apply to modal errors.
				errorClass = "validity-modal-msg",
				
				// The selector for the element where modal errors will me injected semantically.
				container = "body";
				
		$.validity.outputs.modal = {
				start:function() {
						// Remove all the existing errors.
						$("." + errorClass).remove();
				},
				
				end:function(results) {
						// If not valid and scrollTo is enabled, scroll the page to the first error.
						if (!results.valid && $.validity.settings.scrollTo) {
								location.hash = $("." + errorClass + ":eq(0)").attr('id');
						}
				},

				raise:function($obj, msg) {
						if ($obj.length) {
								var 
										off = $obj.offset(),
										obj = $obj.get(0),

										// Design a style object based off of the input's location.
										errorStyle = {
												left:parseInt(off.left + $obj.width() + 4, 10) + "px",
												top:parseInt(off.top - 10, 10) + "px"
										};
										
								// Create one and position it next to the input.
								$("<div/>")
										.addClass(errorClass)
										.css(errorStyle)
										.text(msg)
										.click($.validity.settings.modalErrorsClickable ?
												function() { $(this).remove(); } : null
										)
										.appendTo(container);
						}
				},

				raiseAggregate:function($obj, msg) {
						// Just raise the error on the last input.
						if ($obj.length) {
								this.raise($($obj.get($obj.length - 1)), msg);
						}
				}
		};
})(jQuery);

// Install the summary output.
(function($) {
		var 
				// Container contains the summary. This is the element that is shown or hidden.
				container = ".validity-summary-container",
				
				// Erroneous refers to an input with an invalid value,
				// not the error message itself.
				erroneous = "validity-erroneous",
				
				// Selector for erroneous inputs.
				errors = "." + erroneous,
				
				// The wrapper for entries in the summary.
				wrapper = "<li/>",

				// Buffer to contain all the error messages that build up during validation.
				// When validation ends, it'll be flushed into the summary.
				// This way, the summary doesn't flicker empty then fill up.
				buffer = [];

		$.validity.outputs.summary = {
				start:function() {
						$(errors).removeClass(erroneous);
						buffer = [];
				},

				end:function(results) {
						// Hide the container and empty its summary.
						$(container)
								.hide()
								.find("ul")
										.html('');

						// If there are any errors at all:
						// (Otherwise the container shouldn't be shown):
						if (buffer.length) {
								// Use integer based iteration for solution to Issue 7.
								for (var i = 0; i < buffer.length; ++i) {
										$(wrapper)
												.text(buffer[i])
												.appendTo(container + " ul");
								}

								$(container).show();
								
								// If scrollTo is enabled, scroll the page to the first error.
								if ($.validity.settings.scrollTo) {
										location.hash = $(errors + ":eq(0)").attr("id");
								}
						}
				},

				raise:function($obj, msg) {
					buffer.push(msg);
										var jqtxDone = $obj.closest('form').hasClass('jqtransformdone');
										if ($obj.parent().is('div') && jqtxDone) {
												$obj.parent().addClass(erroneous);
												$obj.parent().parent().addClass(erroneous);
										} else {
												$obj.addClass(erroneous);
										}
				},

				raiseAggregate:function($obj, msg) {
						this.raise($obj, msg);
				},
				
				container:function() {
						document.write(
								"<div class=\"validity-summary-container\">" + 
										"The form didn't submit for the following reason(s):" +
										"<ul></ul>" +
								"</div>"
						);
				}
		};
})(jQuery);

// Install the popup output.
(function(){
		
		$.validity.outputs.quickmail = {
				start:function(){
				},
				end: function(results){
				},
				raise:function($obj, msg){
						if(typeof $obj.Watermark != 'undefined' && $obj.attr('alt') != 'undefined' ){
								$obj.Watermark( $obj.attr('alt'), '#FFBABA');
								var reset = function(event){
										$obj.Watermark( $obj.attr('alt'));
								}
						}else{
								$obj.css("background-color","#ff7e79");
								var reset = function(event){
										tmp = (tmp) ? tmp : 'transparent';
										$obj.css("background-color",tmp);
								}
						}
						
						$(document).on('mousedown', reset);
				},
				container:function() {
						// Nothing
				}
		}
		
		
		
		// The output mode will be named whatever you assign it to.
		// In this example, since we're assigning it to 'myOutputMode'
		// it will be called 'myOutputMode'.
		$.validity.outputs.popup = {

				// The start function will be called when validation starts.
				// This allows you to prepare the page for validation, for instance
				// you might remove any validation messages that are already on the page.
				start:function(){

				},

				// The end function is called when validation has concluded.
				// This allows you to flush any buffers or do anything you need to
				// after all of the validators have been called.
				// results will be the results object.
				// results.valid is a boolean representing whether the form is valid.
				// results.errors is an integer of how many errors there are.
				end:function(results) {
						if(!results.valid){
								$(document).one( 'mousedown',	function(event){
										$('.validity-erroneous').removeClass('validity-erroneous');
								});
						}
						return results;
				},

				// The raise function is called to raise an error for a specific input.
				// The first argument is a jQuery object of the input to raise the error message for.
				// The second argument is the string of the error message.
				raise:function($obj, msg){
						
						var jqtxDone = $obj.closest('form').hasClass('jqtransformdone');
						if ($obj.parent().is('div') && jqtxDone) {
								$obj.parent().addClass('validity-erroneous');
								$obj.parent().parent().addClass('validity-erroneous');							
						} else {
								$obj.addClass('validity-erroneous');
						}
				},

				// The raiseAggregate function is similar to the raise function, except that
				// the $obj argument will be a jQuery object of several inputs,
				// all of which are invalid aggregately.
				raiseAggregate:function($obj, msg){
						console.log( $obj );
						if( $obj.is(':radio') && $obj.is('.jqTransformHidden') ){
								$obj.parent().parent().addClass('validity-erroneous');
						}
				}
		}
})();

//	Install the css Only output
(function ($) {

    $.validity.outputs.cssOnly = {
        start: function () {
            //	remove all existing error classes
            $($.validity.settings.cssClass).removeClass($.validity.settings.cssClass);
        },

		end: function (results) {
        	//	if not valid and scrollTo is enabled, scroll the page to the first error.
			if (!results.valid && $.validity.settings.scrollTo) {
				location.hash = $($.validity.settings.cssClass + ":eq(0)").attr("id");
			}
		},

		raise: function ($obj, msg) {
            $($obj).addClass($.validity.settings.cssClass);
		},

		raiseAggregate: function ($obj, msg) {
            // Just raise the error on the last input.
            if ($obj.length) {
                this.raise($($obj.get($obj.length - 1)), msg);
            }
		}
    };
})(jQuery);
/** /js/jquery.jqtransform.js **/
/*
 *
 * jqTransform
 * by mathieu vilaplana mvilaplana@dfc-e.com
 * Designer ghyslain armand garmand@dfc-e.com
 *
 *
 * Version 1.0 25.09.08
 * Version 1.1 06.08.09
 * Add event click on Checkbox and Radio
 * Auto calculate the size of a select element
 * Can now, disabled the elements
 * Correct bug in ff if click on select (overflow=hidden)
 * No need any more preloading !!
 *
 ******************************************** */

(function($){
  var defaultOptions = {preloadImg:true};
  var jqTransformImgPreloaded = false;

  var jqTransformPreloadHoverFocusImg = function(strImgUrl) {
    //guillemets to remove for ie
    strImgUrl = strImgUrl.replace(/^url\((.*)\)/,'$1').replace(/^\"(.*)\"$/,'$1');
    var imgHover = new Image();
    imgHover.src = strImgUrl.replace(/\.([a-zA-Z]*)$/,'-hover.$1');
    var imgFocus = new Image();
    imgFocus.src = strImgUrl.replace(/\.([a-zA-Z]*)$/,'-focus.$1');
  };


  /***************************
    Labels
  ***************************/
  var jqTransformGetLabel = function(objfield){
    var selfForm = $(objfield.get(0).form);
    var oLabel = objfield.next();
    if(!oLabel.is('label')) {
      oLabel = objfield.prev();
      if(oLabel.is('label')){
        var inputname = objfield.attr('id');
        if(inputname){
          oLabel = selfForm.find('label[for="'+inputname+'"]');
        }
      }
    }
    if(oLabel.is('label')){return oLabel.css('cursor','pointer');}
    return false;
  };

  /* Hide all open selects */
  var jqTransformHideSelect = function(oTarget){
    var ulVisible = $('.jqTransformSelectWrapper ul:visible');
    ulVisible.each(function(){
      var oSelect = $(this).parents(".jqTransformSelectWrapper:first").find("select").get(0);
      //do not hide if click on the label object associated to the select
      if( !(oTarget && oSelect.oLabel && oSelect.oLabel.get(0) == oTarget.get(0)) ){$(this).hide();}
    });
  };
  /* Check for an external click */
  var jqTransformCheckExternalClick = function(event) {
    if ($(event.target).parents('.jqTransformSelectWrapper').length === 0) { jqTransformHideSelect($(event.target)); }
  };

  /* Apply document listener */
  var jqTransformAddDocumentListener = function (){
    $(document).mousedown(jqTransformCheckExternalClick);

    //this will stop scroll propagation on body when jqTransform list has own scroll
    $('.jqTransformSelectWrapper ul').on('DOMMouseScroll mousewheel', function(ev) {

        var $this = $(this),
            scrollTop = this.scrollTop,
            scrollHeight = this.scrollHeight,
            height = $this.height(),
            delta = (ev.type == 'DOMMouseScroll' ?
                ev.originalEvent.detail * -40 :
                ev.originalEvent.wheelDelta),
            up = delta > 0;

        var prevent = function() {
            ev.stopPropagation();
            ev.preventDefault();
            ev.returnValue = false;
            return false;
        }

        if (!up && -delta > scrollHeight - height - scrollTop) {
            // Scrolling down, but this will take us past the bottom.
            $this.scrollTop(scrollHeight);
            return prevent();
        } else if (up && delta > scrollTop) {
            // Scrolling up, but this will take us past the top.
            $this.scrollTop(0);
            return prevent();
        }
    });

  };

  /* Add a new handler for the reset action */
  var jqTransformReset = function(f){
    var sel;
    $('.jqTransformSelectWrapper select', f).each(function(){sel = (this.selectedIndex<0) ? 0 : this.selectedIndex; $('ul', $(this).parent()).each(function(){$('a:eq('+ sel +')', this).click();});});
    $('a.jqTransformCheckbox, a.jqTransformRadio', f).removeClass('jqTransformChecked');
    $('input:checkbox, input:radio', f).each(function(){if(this.checked){$('a', $(this).parent()).addClass('jqTransformChecked');}});
  };

  /***************************
    Buttons
   ***************************/
  $.fn.jqTransInputButton = function(){
    return this.each(function(){
      var newBtn = $('<button id="'+ this.id +'" name="'+ this.name +'" type="'+ this.type +'" class="'+ this.className +' jqTransformButton"><span><span>'+ $(this).attr('value') +'</span></span>')
        .hover(function(){newBtn.addClass('jqTransformButton_hover');},function(){newBtn.removeClass('jqTransformButton_hover')})
        .mousedown(function(){newBtn.addClass('jqTransformButton_click')})
        .mouseup(function(){newBtn.removeClass('jqTransformButton_click')})
      ;
      $(this).replaceWith(newBtn);
    });
  };

  /***************************
    Text Fields
   ***************************/
  $.fn.jqTransInputText = function(){
    return this.each(function(){
      var $input = $(this);

      if($input.hasClass('jqtranformdone') || !$input.is('input')) {return;}
      $input.addClass('jqtranformdone');

      var oLabel = jqTransformGetLabel($(this));
      oLabel && oLabel.bind('click',function(){$input.focus();});

      var inputSize=$input.width();
      if($input.attr('size')){
        inputSize = $input.attr('size')*10;
        $input.css('width',inputSize);
      }

      $input.addClass("jqTransformInput").wrap('<div class="jqTransformInputWrapper"><div class="jqTransformInputInner"><div></div></div></div>');
      var $wrapper = $input.parent().parent().parent();
      $wrapper.css("width", inputSize+10);
      $input
        .focus(function(){$wrapper.addClass("jqTransformInputWrapper_focus");})
        .blur(function(){$wrapper.removeClass("jqTransformInputWrapper_focus");})
        .hover(function(){$wrapper.addClass("jqTransformInputWrapper_hover");},function(){$wrapper.removeClass("jqTransformInputWrapper_hover");})
      ;

      /* If this is safari we need to add an extra class */
      $.browser.safari && $wrapper.addClass('jqTransformSafari');
      $.browser.safari && $input.css('width',$wrapper.width()+16);
      this.wrapper = $wrapper;

    });
  };

  /***************************
    Check Boxes
   ***************************/
  $.fn.jqTransCheckBox = function(){
    return this.each(function(){
      if($(this).hasClass('jqTransformHidden')) {return;}

      var $input = $(this);
      var inputSelf = this;

      //set the click on the label
      var oLabel=jqTransformGetLabel($input);
      oLabel && oLabel.click(function(){aLink.trigger('click');});

      var aLink = $('<a href="#" class="jqTransformCheckbox"></a>');
      //wrap and add the link
      $input.addClass('jqTransformHidden').wrap('<span class="jqTransformCheckboxWrapper"></span>').parent().prepend(aLink);
      //on change, change the class of the link
      $input.change(function(){
        this.checked && aLink.addClass('jqTransformChecked') || aLink.removeClass('jqTransformChecked');
        return true;
      });
      // Click Handler, trigger the click and change event on the input
      aLink.click(function(){
        //do nothing if the original input is disabled
        if($input.attr('disabled')){return false;}
        //trigger the envents on the input object
        $input.trigger('click').trigger("change");
        return false;
      });

      // set the default state
      this.checked && aLink.addClass('jqTransformChecked');
    });
  };
  /***************************
    Radio Buttons
   ***************************/
  $.fn.jqTransRadio = function(){
    return this.each(function(){
      if($(this).hasClass('jqTransformHidden')) {return;}

      var $input = $(this);
      var inputSelf = this;

      if( $input.hasClass('ignore') == true ) { return; }

      oLabel = jqTransformGetLabel($input);
      oLabel && oLabel.click(function(){aLink.trigger('click');});

      var aLink = $('<a href="#" class="jqTransformRadio" rel="'+ this.name +'"></a>');
      $input.addClass('jqTransformHidden').wrap('<span class="jqTransformRadioWrapper"></span>').parent().prepend(aLink);

      $input.change(function(){
        inputSelf.checked && aLink.addClass('jqTransformChecked') || aLink.removeClass('jqTransformChecked');
        return true;
      });
      // Click Handler
      aLink.click(function(){
        if($input.attr('disabled')){return false;}
        $input.trigger('click').trigger('change');

        // uncheck all others of same name input radio elements
        $('input[name="'+$input.attr('name')+'"]',inputSelf.form).not($input).each(function(){
          $(this).attr('type')=='radio' && $(this).trigger('change');
        });

        return false;
      });
      // set the default state
      inputSelf.checked && aLink.addClass('jqTransformChecked');
    });
  };

  /***************************
    TextArea
   ***************************/
  $.fn.jqTransTextarea = function(){
    return this.each(function(){
      var textarea = $(this);

      if(textarea.hasClass('jqtransformdone')) {return;}
      textarea.addClass('jqtransformdone');

      oLabel = jqTransformGetLabel(textarea);
      oLabel && oLabel.click(function(){textarea.focus();});

      var strTable = '<table cellspacing="0" cellpadding="0" border="0" class="jqTransformTextarea">';
      strTable +='<tr><td class="jqTransformTextarea-tl"></td><td class="jqTransformTextarea-tm"></td><td class="jqTransformTextarea-tr"></td></tr>';
      strTable +='<tr><td class="jqTransformTextarea-ml">&nbsp;</td><td class="jqTransformTextarea-mm"><div></div></td><td class="jqTransformTextarea-mr">&nbsp;</td></tr>';
      strTable +='<tr><td class="jqTransformTextarea-bl"></td><td class="jqTransformTextarea-bm"></td><td class="jqTransformTextarea-br"></td></tr>';
      strTable +='</table>';
      var oTable = $(strTable)
          .insertAfter(textarea)
          .hover(function(){
            !oTable.hasClass('jqTransformTextarea-focus') && oTable.addClass('jqTransformTextarea-hover');
          },function(){
            oTable.removeClass('jqTransformTextarea-hover');
          })
        ;

      textarea
        .focus(function(){oTable.removeClass('jqTransformTextarea-hover').addClass('jqTransformTextarea-focus');})
        .blur(function(){oTable.removeClass('jqTransformTextarea-focus');})
        .appendTo($('.jqTransformTextarea-mm div',oTable))
      ;
      this.oTable = oTable;
      if($.browser.safari){
        $('.jqTransformTextarea-mm',oTable)
          .addClass('jqTransformSafariTextarea')
          .find('div')
            .css('height',textarea.height())
            .css('width',textarea.width())
        ;
      }
    });
  };

  /***************************
    Select
   ***************************/
  $.fn.jqTransSelect = function(){
    return this.each(function(index){
      var $select = $(this);

      if($select.hasClass('jqTransformHidden')) {return;}
      if($select.attr('multiple')) {return;}

      var oLabel  =  jqTransformGetLabel($select);
      /* First thing we do is Wrap it */
      var $wrapper = $select
        .addClass('jqTransformHidden')
        .wrap('<div class="jqTransformSelectWrapper"></div>')
        .parent()
        .css({zIndex: 30-index})

      ;

      /* Now add the html for the select */
      $wrapper.prepend('<div><span></span><a href="#" aria-label="Select" class="jqTransformSelectOpen"></a></div><ul></ul>');
      var $ul = $('ul', $wrapper).css('width',$select.width()).hide();
      /* Now we add the options */
      $('option', this).each(function(i){
        var oLi = $('<li><a href="#" index="'+ i +'">'+ $(this).html() +'</a></li>');
        $ul.append(oLi);
      });

      /* Add click handler to the a */
      $ul.find('a').click(function(){
          $('a.selected', $wrapper).removeClass('selected');
          $(this).addClass('selected');
          /* Fire the onchange event */
          if ($select[0].selectedIndex != $(this).attr('index') && $select[0].onchange) { $select[0].selectedIndex = $(this).attr('index'); $select[0].onchange(); }
          $select[0].selectedIndex = $(this).attr('index');
          $('span:eq(0)', $wrapper).html($(this).html());
          $ul.hide();
          return false;
      });
      /* Set the default */
      $('a:eq('+ this.selectedIndex +')', $ul).click();
      $('span:first', $wrapper).click(function(){$("a.jqTransformSelectOpen",$wrapper).trigger('click');});
      oLabel && oLabel.click(function(){$("a.jqTransformSelectOpen",$wrapper).trigger('click');});
      this.oLabel = oLabel;

      /* Apply the click handler to the Open */
      var oLinkOpen = $('a.jqTransformSelectOpen', $wrapper)
        .click(function(){
          //Check if box is already open to still allow toggle, but close all other selects
          if( $ul.css('display') == 'none' ) {jqTransformHideSelect();}
          if($select.attr('disabled')){return false;}

          $ul.slideToggle('fast', function(){
            var offSet = ($('a.selected', $ul).offset().top - $ul.offset().top);
            $ul.animate({scrollTop: offSet});
          });
          return false;
        })
      ;

      // Set the new width
      var iSelectWidth = $select.outerWidth();
      var oSpan = $('span:first',$wrapper);
      var newWidth = (iSelectWidth > oSpan.innerWidth())?iSelectWidth+oLinkOpen.outerWidth():$wrapper.width();
      $wrapper.css('width',newWidth-2); /* DWP-3863 */
      $ul.css('width',newWidth-4); /* DWP-3863 */
      oSpan.css({width:iSelectWidth});

      // Calculate the height if necessary, less elements that the default height
      //show the ul to calculate the block, if ul is not displayed li height value is 0
      $ul.css({display:'block',visibility:'hidden'});
      var iSelectHeight = ($('li',$ul).length)*($('li:first',$ul).height());//+1 else bug ff
      (iSelectHeight < $ul.height()) && $ul.css({height:iSelectHeight,'overflow':'hidden'});//hidden else bug with ff
      $ul.css({display:'none',visibility:'visible'});

    });
  };
  $.fn.jqTransform = function(options){
    var opt = $.extend({},defaultOptions,options);

    /* each form */
     return this.each(function(){
      var selfForm = $(this);
      if(selfForm.hasClass('jqtransformdone')) {return;}
      selfForm.addClass('jqtransformdone');

      $('input:submit, input:reset, input[type="button"]', this).jqTransInputButton();
      $('input:text, input:password, input[type="tel"], input[type="email"]', this).jqTransInputText();
      $('input:checkbox', this).jqTransCheckBox();
      $('input:radio', this).jqTransRadio();
      $('textarea', this).jqTransTextarea();

      if( $('select', this).jqTransSelect().length > 0 ){jqTransformAddDocumentListener();}
      selfForm.bind('reset',function(){var action = function(){jqTransformReset(this);}; window.setTimeout(action, 10);});

      //preloading dont needed anymore since normal, focus and hover image are the same one
      /*if(opt.preloadImg && !jqTransformImgPreloaded){
        jqTransformImgPreloaded = true;
        var oInputText = $('input:text:first', selfForm);
        if(oInputText.length > 0){
          //pour ie on eleve les ""
          var strWrapperImgUrl = oInputText.get(0).wrapper.css('background-image');
          jqTransformPreloadHoverFocusImg(strWrapperImgUrl);
          var strInnerImgUrl = $('div.jqTransformInputInner',$(oInputText.get(0).wrapper)).css('background-image');
          jqTransformPreloadHoverFocusImg(strInnerImgUrl);
        }

        var oTextarea = $('textarea',selfForm);
        if(oTextarea.length > 0){
          var oTable = oTextarea.get(0).oTable;
          $('td',oTable).each(function(){
            var strImgBack = $(this).css('background-image');
            jqTransformPreloadHoverFocusImg(strImgBack);
          });
        }
      }*/


    }); /* End Form each */

  };/* End the Plugin */

})(jQuery);
/** /js/main.js **/
jQuery.noConflict = function(){
	/*
	*	Do not relinquish control of $ under any circumstances!
	*/
	return jQuery;
}

jQuery.expr[':'].reallyVisible = function(a) {
	try{
		if( a == document.body ) return true;
		var e = jQuery(a);
		return ( e.is(':visible') &&
						e.css('visibility') !== 'hidden' &&
						e.parent(':reallyVisible').length > 0);
	} catch( err ) {
		console.log( err.message, err );
		return false;
	}
};

// https://tc39.github.io/ecma262/#sec-array.prototype.find
if (!Array.prototype.find) {
	Object.defineProperty(Array.prototype, 'find', {
		value: function(predicate) {
			// 1. Let O be ? ToObject(this value).
			if (this == null) {
				throw TypeError('"this" is null or not defined');
			}

			var o = Object(this);

			// 2. Let len be ? ToLength(? Get(O, "length")).
			var len = o.length >>> 0;

			// 3. If IsCallable(predicate) is false, throw a TypeError exception.
			if (typeof predicate !== 'function') {
				throw TypeError('predicate must be a function');
			}

			// 4. If thisArg was supplied, let T be thisArg; else let T be undefined.
			var thisArg = arguments[1];

			// 5. Let k be 0.
			var k = 0;

			// 6. Repeat, while k < len
			while (k < len) {
				// a. Let Pk be ! ToString(k).
				// b. Let kValue be ? Get(O, Pk).
				// c. Let testResult be ToBoolean(? Call(predicate, T, « kValue, k, O »)).
				// d. If testResult is true, return kValue.
				var kValue = o[k];
				if (predicate.call(thisArg, kValue, k, o)) {
					return kValue;
				}
				// e. Increase k by 1.
				k++;
			}

			// 7. Return undefined.
			return undefined;
		},
		configurable: true,
		writable: true
	});
}

var debug = function(){
	// if the domain isn't dealer*, be quiet.
	if( debugEnabled() ){
		var c = console,x = arguments;
		if( typeof c.log == 'function' ) c.log.apply(c, x);
	}
}

var debugEnabled = function(){
	var h = document.location.host;
	var C = (function(m){
		if (m == null) return false;
		return m[1];
	})(document.cookie.match(/testing=([^;]+)/i));
	return ( C || /^dealer/.test(h) || /^demo/.test(h) && C != 'off' );
}

var enableDebug = function(){
	$.cookie('testing', 'on');
}

var disableDebug = function(){
	$.cookie('testing', 'off');
}

var AlertBar = function(options){

	var sections = options.sections.toLowerCase();
  var current = options.current.toLowerCase();
	var cookieName = 'alertMessageClosed';
	var $pushDown = $('#mainDiv');
	var $alert = $('#alertMsgContainer');
	var $body = $('body');
	var $topLink = $('.AddedTopLinkDiv');

	var expiry = new Date();
	var expiryTime = 60; //time in minutes
	expiry.setTime(expiry.getTime() + (expiryTime * 60 * 1000));

	var show = function(){
		$alert.css({
			backgroundColor: options.color
		});
		$('.close', $alert).on('click', close );

		$pushDown.css('margin-top', $alert.height()+'px');
		$body.css({'background-position-y': $alert.height()+'px'});

		if ($topLink.length > 0) {
			$topLink.css('margin-top', $alert.height()+'px');
		}

		$alert.show();
	}

	var close = function(){
		$.cookie(cookieName, 1, {path: '/', expires: expiry});
		$alert.hide();
		$pushDown.css({ marginTop: 0 });
		$body.css('background-position-y', '');

		if ($topLink.length > 0) {
			$topLink.css('margin-top', '');
		}
	}

	if (sections.indexOf(current) > -1 && !$.cookie(cookieName)) {
		show();
  }
}

// used cars carproof report
function LeadGenADF(sVIN, sInfo, sYear, sMake, sModel, color, stock, url ){
	if( typeof carproofHandler ){
		return carproofHandler.leadGen.apply( carproofHandler, arguments );
	}
}

function runImagePopupFireworks(){
		if(typeof FireworkTimer != 'undefined'){
			imageFireworks = true;
			FireworkTimer("bgImage", "FFFFFF", 200, 200); // white
			FireworkTimer("bgImage", "FF0000", 380, 250, 1000); // red
	    FireworkTimer("bgImage", "00ff11", 90, 170, 2000); // green
			FireworkTimer("bgImage", "44cdff", 320, 250, 3000, 0, 0.8); //blue
			setTimeout(function(){runImagePopupFireworks()},10000);
		}
}

/**
* To be moved once we have a JS that is added with all pages
*
* @param event
*/
function handleActionClick(event){
	// Ensures that all the links for the action boxes are pointing in the right direction
	// Request test drive
	event = event || window.event;
	var target = event.currentTarget || event.srcElement;
  	var url = window.location.href.substring(window.location.href.lastIndexOf("/")+1);
    var carSection = 'used';
    var carContext = '';

	var href = '';

	if (window.location.href.indexOf('-id') == -1){

		var urlSplitted = url.replace('.html', '').split("-");

		if(urlSplitted.length < 3 || url.indexOf('search') > -1 || url.indexOf('find-') > -1 || url.indexOf('recherche') > -1 ||
			url.indexOf('prix-') > -1 || url.indexOf('price-') > -1 ||
			url.indexOf('essais-routier-') > -1 || url.indexOf('test-drive-') > -1 ||
			url.indexOf('vehicule-echange-') > -1 || url.indexOf('trade-in-') > -1 ||
			url.indexOf('pneus-pieces-') > -1 || url.indexOf('car-parts-') > -1 ||
			url.indexOf('rendez-vous-') > -1 || url.indexOf('-appointment') > -1 ||
			url.indexOf('credit') > -1 || url.indexOf('financement') > -1 ||
			url.indexOf('pre-appro') > -1 || url.indexOf('new-west') > -1	||
			url.indexOf('confidentialite') > -1 || url.indexOf('privacy-policy') > -1 ||
			url.indexOf('termes-et-conditions') > -1 || url.indexOf('terms-and-conditions') > -1
		){
      		carContext = '.html';

	    } else {

	      	var yearNow = new Date().getFullYear();
	      	if(typeof urlSplitted[2] != 'undefined' && (yearNow == urlSplitted[2] || yearNow + 1 == urlSplitted[2])){
				carSection = 'new';
	      	}

	      	carContext = '/' + url;
	    }

	    href = target.getAttribute('targetURI').replace('.html', carContext);



	} else {

		switch(target.getAttribute('action'))
		{
			case 'TestDriveActionBox':
				href = $('#testDriveFolder').val() + url;
				break;
			case 'PriceActionBox':
				href = $('#priceRequestFolder').val() + url;
				break;
			case 'EvalActionBox':
				href = $('#evalCarFolder').val() + url;
				break;
			case 'FinanceActionBox':
				href = $('#FinanceFolder').val() + url;
				break;
			default:
				if (typeof $(target).attr('folder') != 'undefined') href = $(target).attr('folder');
				else if (typeof $(target).attr('targeturi') != 'undefined') href = $(target).attr('targeturi');
				break;

		}

    	$.cookie("fromdetailspage","1", {path: "/"});
	}

	if (typeof href != 'undefined' && href != null && href.length > 0)
	{

		var entries = new Array();
		var htmlFile = d2cmedia.htmlFile(false, true);
		entries = htmlFile.split("-");

		var make = '';
		var model = '';
		var year = '';

		if (entries.length > 0) make = entries[0];
		if (entries.length > 1) model = entries[1];
		if (entries.length > 2) year = entries[2];


		if (make.length > 0 && model.length > 0 && year.length > 0 && !isNaN(year) && year.toString().length == 4 &&  href.indexOf('.htm') > -1)
			{
			// we need to replace the html page with the make model year link
			var folder = target.getAttribute('folder');
			var newURL = '';

			if (typeof folder != 'undefined' && folder != null) newURL = folder;
			else newURL = href.substring(0,href.lastIndexOf('/')+1);

			newURL = newURL.replace('.html','/')+htmlFile + '.html';

			href = newURL;
		}

		if($(target).hasClass('tradeinLink') &&
			(target.getAttribute('targetURI').indexOf('tradeinvalues')>0
				|| target.getAttribute('targetURI').indexOf('instantoffer.accu-trade.com')>0
			)
		){
				showTradeInPopup(target.getAttribute('targetURI'));
    	} else {

				if(carSection == 'new'){
					href = href.replace('occasion', 'neuf').replace('used', 'new');
			  }
				window.location.href = href;
    	}
	}

}

function openFinanceMultistepFormOnCurrentPage(e, make, model, year, stockNumber,id){
	e.preventDefault();
	e.stopPropagation();
	if(make){
        $('#popupmakeMultistepForm').val(make);
    } else if($(body).attr('id') == 'NEWCARDETAILS'){
        $('#popupmakeMultistepForm').val($('.brandemail').val());
	} else if($('#PAGEID').val() == 'cardetail.html'){
        $('#popupmakeMultistepForm').val($('#phonemake').val());
	}
    if(model){
        $('#popupmodelMultistepForm').val(model);
    } else if($(body).attr('id') == 'NEWCARDETAILS'){
        $('#popupmodelMultistepForm').val($('.modelemail').val());
	} else if($('#PAGEID').val() == 'cardetail.html'){
        $('#popupmodelMultistepForm').val($('#phonemodel').val());
    }
    if(year){
        $('#popupyearMultistepForm').val(year);
    } else if($(body).attr('id') == 'NEWCARDETAILS'){
        $('#popupyearMultistepForm').val($('.yearemail').val());
	} else if($('#PAGEID').val() == 'cardetail.html'){
        $('#popupyearMultistepForm').val($('#phonemyear').val());
    }
    if(stockNumber){
        $('#popupstocknumberMultistepForm').val(stockNumber);
    } else if($(body).attr('id') == 'NEWCARDETAILS'){
        $('#popupstocknumberMultistepForm').val('');
	} else if($('#PAGEID').val() == 'cardetail.html'){
        $('#popupstocknumberMultistepForm').val($('#phonestocknumber').val());
    }
    if(id){
        $('#topcaridMultistepForm').val(id);
    } else if($(body).attr('id') == 'NEWCARDETAILS'){
        $('#topcaridMultistepForm').val('');
    }
    $("#financeMultistepPopupContainer").popupize().setTrigger("click").open(1);
}

function MenuFixer(){
	var self = this;
	var loop_count = 0;
	var interval = false;
	var _events = {};

	var execute = function(){
		var $u = $('.up_menu.full_width');
		if( $u.length < 1 ){
			interval = clearInterval( interval );
			return "Not enabled";
		}
		var $li = $('#nav').children('li');
		var self = this;

		var adjust = function( amt, cbk ){
			$li.addClass('nofx');
      var min = -1;

			//var rem = differece()*amt;
			var rem = differece()*amt;

			//console.log('rem',rem);

			if( rem > ($li.length*2) ){
				var p2add = Math.floor( (rem/$li.length)/2 )*amt;
				/* Add padding to each side */
				$li.each( function(){
					var $a = $(this).children('a');
					var lp = parseInt( $a.css('padding-left') );
					var rp = parseInt( $a.css('padding-right') );
					$a.css('padding-left' , (lp+p2add)+'px');
					$a.css('padding-right', (rp+p2add)+'px');

					rem = rem - (p2add*2);
				});
			//	debug( 'After type 1 px:', rem );
				return setTimeout(cbk,50);
			}

			if( rem > $li.length ){
				/* Add padding to the right side */
				$li.each( function(){
					var $a = $(this).children('a');
					var tgt = 'padding-right';
					$a.css(tgt, (parseInt( $a.css(tgt) )+amt)+'px');
					rem--;
				});

				//debug( 'After type 2 px:', rem );
				return setTimeout(cbk,50);
			}

			//debug( 'Beofre Type 3', 'Remain:', rem, 'Minimum:', min );
			if( rem > min ){
				$li.each( function(){
					if( --rem < min ) return false;
					var $a = $(this).children('a');
					var tgt = 'padding-left';
					$a.css(tgt, (parseInt( $a.css(tgt) )+amt)+'px');
				});
				//debug( 'After type 3 px:', rem );
			}
		}

		var narrow = function(){
			//debug( 'Still too Narrow' );
			var r = adjust( 1, narrow );
			$li.removeClass('nofx');

			return r;
		}

		var wide = function(){
		//	debug( 'Still too Wide' );
			var r = adjust( -1, wide );
			$li.removeClass('nofx');

			return r;
		}

		var differece = function(){
			var x = [];
			$li.map(function(k,v,a){
				x.push( $(v)[0].getBoundingClientRect().width );
			});
			var elemWidth = x.reduce(function(p,c,i,a){
				return p+c;
			},0);
			/*
			console.log({
				total: $u.width(),
				used: elemWidth,
				lis: x
			});
			*/
			return Math.floor(($u.width() - elemWidth))-1;
		}

		var rem = differece();
		_menuBar();

		if( ++loop_count > 10 ){
			interval = clearInterval( interval );
			emit('complete');
			return;
		}

		//console.log('rem',rem);

		if( Math.ceil( rem ) < 1 ) {
			//console.log('rem < 0 ', rem);
			return wide();
		}
		if( Math.floor( rem ) > 3 ) {
			//console.log('rem > 1 ', rem);
			return narrow();
		}

		//console.log( 'done with rem: ' + rem );

		emit('complete');
		interval = clearInterval( interval );
	}

	function _menuBar() {
		if($('#fullWidthMenuBar').length){
			var windowWidth = $( window ).width();
			var parentWidth = $('#fullWidthMenuBar').parent().width();
			var leftOffset = (windowWidth - parentWidth) / 2;
			$('#fullWidthMenuBar').width(windowWidth);
			$('#fullWidthMenuBar').css('left', '-'+leftOffset+'px');
		}
	}

	function _run() {
		if ( interval > 0 ) {
			console.log('Already an interval', interval);
			return false;
		}

		setTimeout(execute, 500);
		interval = setInterval(execute, 50);
	}

	function _reset() {
		loop_count = 0;
		interval = clearInterval( interval );
	}

	//register events
	function _on(name, cb) {
		if (!_events[name]) {
			_events[name] = []
		}

		_events[name].push(cb);
	}

	//emit events
	function emit(name, data) {
		var events = _events[name];
		if(events) {
			for(var i = 0; i < events.length; i++) {
				events[i](data);
			}
		}
	}

	_run();
	this.run = _run;
	this.menuBarFix = _menuBar;
	this.reset = _reset;
	this.on = _on;

	return {
		on: _on,
		run: _run,
		menuBarFix: _menuBar,
		reset: _reset
	};
};


var d2cmedia = (d2cmedia||{});

d2cmedia.scrollTo = function(element,adjustment,duration) {
	if(typeof duration == 'undefined')  duration = 1000;
	if(typeof adjustment == 'undefined')  adjustment = 0;
	$('html, body').animate( { scrollTop: $(element).offset().top - adjustment }, duration );
	return false;
}

/**
 * This object contains all properties and methods to manipulate URL.
 */
d2cmedia.url = {
	// Indicates if data is automatically sanitized
	_sanitize: true,

	/**
	 * This method desanitizes data for URL.
	 * It accepts both strings and objects.
	 * Data is desanitized by replacing underscores (_) by dashes (-).
	 */
	desanitize: function(param) {
		if (typeof param === 'string') {
			return param.replace(/_/g, '-');
		}
		if (typeof param === 'object') {
			for (var key in param) {
				param[key] = this.desanitize(param[key]);
			}
			return param;
		}
	},

	/**
	 * This method generates a proper URL from parameters.
	 * Every parameter is sanitized if needed.
	 * Parameters are separated by dashes (-) and an additional suffix is added
	 * to the resulting URL (.html).
	 * It accepts any number of parameters.
	 */
	generate: function() {
		var result = '';
		if (this._sanitize) {
			arguments = this.sanitize(arguments);
		}
		for (i = 0; i < (arguments.length - 1); i++) {
			result += arguments[i] + '-';
		}
		return result + arguments[i] + '.html';
	},

	/**
	 * This method parses the current URL to extract the car informations.
	 * It extracts the make, the model and the year of the car.
	 * Here is the list of the different configuration matched:
	 *   - make-model-year
	 *   - make-model
	 *   - make-year
	 *   - make
	 */
	parse: function() {
		url = decodeURIComponent(document.URL);
		strParam = url.substring(url.lastIndexOf('/'));
		objParam = {'make': null, 'model': null, 'year': null, 'id': null};
		found = false;

		var match, m;

		/* Revert the wacky year-make-model to make-model-year */
		//debug( strParam );
		if( (m = strParam.match( /^\/(20[0-9]{2}|19[0-9]{2})-([^-]+-[^-\.]+)(.*\.html)/)) != null ){

			strParam = '/'+m[2]+'-'+m[1]+m[3];
		}
		//debug( strParam, m );

		/* A */
		match = strParam.match(/\/([^/]*)-(.*)-(\d{4})(-id(\d*))?.html/);
		if (!found && match !== null) {
			objParam.make = match[1];
			objParam.model = match[2];
			objParam.year= match[3];
			objParam.id= match[5];
			found = true;
		}

		/* B */
		match = strParam.match(/\/([^/]*)-(.*)-(\d{4})(-c\d*)?.html/);
		if (!found && match !== null) {
			objParam.make = match[1];
			objParam.model = match[2];
			objParam.year= match[3];
			found = true;
		}

		/* C */
		match = strParam.match(/\/([^/]*)-(\d{4}).html/);
		if (!found && match !== null) {
			objParam.make = match[1];
			objParam.year= match[2];
			found = true;
		}

		/* D */
		match = strParam.match(/\/([^/]*)-([^.]*).html/);
		if (!found && match !== null) {
			objParam.make = match[1];
			objParam.model = match[2];
			found = true;
		}

		/* E */
		match = strParam.match(/\/([^/]*).html/);
		if (!found && match !== null) {
			objParam.make = match[1];
			found = true;
		}

		if (this._sanitize) {
			objParam = this.desanitize(objParam);
		}

		return objParam;
	},

	/**
	 * This method sanitizes data for URL.
	 * It accepts both strings and objects.
	 * Data is sanitized by replacing dashes (-) by underscores (_).
	 */
	sanitize: function(param) {
		if (typeof param === 'string') {
			return param.replace(/-/g, '_');
		}
		if (typeof param === 'object') {
			for (var key in param) {
				param[key] = this.sanitize(param[key]);
			}
			return param;
		}
	}
}

d2cmedia.getHttpText = function() {
	if ('https:' == document.location.protocol && $("#topdeploymenttype").length && $("#topdeploymenttype").val() == "live") return "https";
	return "http";
}

d2cmedia.capitaliseFirstLetter = function(string) {
  if (typeof string == "undefined") return "";
  return string.charAt(0).toUpperCase() + string.slice(1);
}

d2cmedia.capitaliseFirstLetterOfEveryWord = function(string) {
  if (typeof string == "undefined") return ""

	return string.split(" ").reduce(function(a, b){
		c = d2cmedia.capitaliseFirstLetter( b );
		return ( a ) ? a+' '+c : c;
	},'');
}

d2cmedia.htmlFile = function(clean, englishYearFirst){
	var m;
	var file = window.location.pathname.substring( window.location.pathname.lastIndexOf('/')+1 )
	
	try{
		var htmlFile = decodeURIComponent(file);
	} catch( e ) {
		// Decode failed, we must have accent chars, let's hit them with a manual replacement.
		var accent_encoded = {
			'%C0':'&Agrave;',
			'%C1':'&Aacute;',
			'%C2':'&Acirc;',
			'%C3':'&Atilde;',
			'%C4':'&Auml;',
			'%C5':'&Aring;',
			'%C6':'&AElig;',
			'%C7':'&Ccedil;',
			'%C8':'&Egrave;',
			'%C9':'&Eacute;',
			'%CA':'&Ecirc;',
			'%CB':'&Euml;',
			'%CC':'&Igrave;',
			'%CD':'&Iacute;',
			'%CE':'&Icirc;',
			'%CF':'&Iuml;',
			'%D0':'&ETH;',
			'%D1':'&Ntilde;',
			'%D2':'&Ograve;',
			'%D3':'&Oacute;',
			'%D4':'&Ocirc;',
			'%D5':'&Otilde;',
			'%D6':'&Ouml;',
			'%D8':'&Oslash;',
			'%D9':'&Ugrave;',
			'%DA':'&Uacute;',
			'%DB':'&Ucirc;',
			'%DC':'&Uuml;',
			'%DD':'&Yacute;',
			'%DE':'&THORN;',
			'%DF':'&szlig;',
			'%E0':'&agrave;',
			'%E1':'&aacute;',
			'%E2':'&acirc;',
			'%E3':'&atilde;',
			'%E4':'&auml;',
			'%E5':'&aring;',
			'%E6':'&aelig;',
			'%E7':'&ccedil;',
			'%E8':'&egrave;',
			'%E9':'&eacute;',
			'%EA':'&ecirc;',
			'%EB':'&euml;',
			'%EC':'&igrave;',
			'%ED':'&iacute;',
			'%EE':'&icirc;',
			'%EF':'&iuml;',
			'%F0':'&eth;',
			'%F1':'&ntilde;',
			'%F2':'&ograve;',
			'%F3':'&oacute;',
			'%F4':'&ocirc;',
			'%F5':'&otilde;',
			'%F6':'&ouml;',
			'%F7':'&divide;',
			'%F8':'&oslash;',
			'%F9':'&ugrave;',
			'%FA':'&uacute;',
			'%FB':'&ucirc;',
			'%FC':'&uuml;',
			'%FD':'&yacute;',
			'%FE':'&thorn;',
			'%FF':'&yuml;',
		}
		
		htmlFile = file.replace(/%[0-9A-F]{2}/ig, function( match ){
			if( typeof accent_encoded[match] == 'undefined' )
			{
				return decodeURIComponent(match);
			}
			var el = document.createElement('span');
			el.innerHTML = accent_encoded[match];
			return el.innerText;
		});
	}
	
	htmlFile = htmlFile.substring(0,htmlFile.indexOf('.htm'));
	if( clean ){
		htmlFile = htmlFile.replace(/\ /g,'_').replace(/\'/g, '').replace('.html','');
	}
	if( (m = htmlFile.match( /^(19[0-9]{2}|20[0-9]{2})-([^-]+-[^-]+)(.*)$/)) != null ){
		htmlFile = m[2]+'-'+m[1]+m[3];

        var curLang = $('#activesitelanguage').val() == 'ENGLISH' ? 'ENGLISH' : 'FRENCH';

        //On English page vehicle URL should be YEAR-MAKE-MODEL
        if(curLang == 'ENGLISH' && englishYearFirst)
            htmlFile = m[1]+ '-' + m[2] + m[3];
	}
	return htmlFile;
}

d2cmedia.isHomepage = function(){
	var path = window.location.pathname;
	return (path == '/' || path == '/eng/' || path == '/fr/');
}

d2cmedia.pageDepartment = function(){
	var d = $('#defaultDepartment').val();
	if( d == 'OTHER' && d2cmedia.isHomepage() ){
		return 'HOMEPAGE';
	}
	return d;
}

var js_d2c_get_val = (js_d2c_get_val || function (id){
	try{
		el = document.getElementById(id);
		return el ? el.value : '';
	}catch(ex){
		if (console && console.log) console.log("System failed while retrieving replacement value: " + ex.message, ex);
		return id;
	}
});

/*
* .noD2CReplace is supposed to be removed by JS parser, but if it isn't,
* should just return the string like it's totally nothing.
*/
String.prototype.noD2CReplace = function(){
	return this.valueOf();
}

d2cBGClick = function(settings){
	var self = this;
	$.extend( self, settings );

	this.set = function(currentMake){
		if(typeof(currentMake) == 'undefined') {
			currentMake = false;
		}

		var bgImgUrl        = self.bgImgUrl;
		var bgImgPath       = self.bgImgPath;
		var bgImgFixed      = self.bgImgFixed;
		var bgImgResponsive = self.bgImgResponsive;
		var make            = self.make;
		var curURL          = document.location.pathname.replace(/-/g , '');

		var pageLang = ($('#activesitelanguage').val() ? $('#activesitelanguage').val().toLowerCase() : 'french');
		var redirectURL = '';
		var isBackgroundSet = false;

		if(currentMake!=false){
			make = currentMake.toLowerCase();
		}

		var _bgIMG = '';
		var _bgAddedStyle = '';
		if (make){

			if(bgImgPath.hasOwnProperty(make)){
				_bgIMG        = bgImgPath[make];
				_bgAddedStyle = bgImgFixed[make] + bgImgResponsive[make]
				isBackgroundSet = true;
			} else if(bgImgPath.hasOwnProperty('all')) {
				_bgIMG        = bgImgPath['all']
				_bgAddedStyle = bgImgFixed['all'] + bgImgResponsive['all'];
				isBackgroundSet = true;
			} else {
				if(bgImgPath.hasOwnProperty(pageLang)){
					_bgIMG        = bgImgPath[pageLang];
					_bgAddedStyle = bgImgFixed[pageLang] + bgImgResponsive[pageLang];
				}
			}
		}else if(bgImgPath.hasOwnProperty(pageLang) && isBackgroundSet == false){
			_bgIMG        = bgImgPath[pageLang];
			_bgAddedStyle = bgImgFixed[pageLang] + bgImgResponsive[pageLang];
		}

		if( _bgIMG ){
			self.bgImg = _bgIMG.split('/').pop();
			$('body').attr('style', 'background-image: url(\'' + _bgIMG +  '\'); background-position: top center; background-repeat: no-repeat;' + _bgAddedStyle );
		}

		for (var key in bgImgUrl){
			if (curURL.indexOf(key, curURL) != -1){
				redirectURL = bgImgUrl[key];
				break;
			}

		if(key == pageLang){
			redirectURL = bgImgUrl[key];
			break;
		}
	}

	if(redirectURL.length == 0){
		if(bgImgUrl.hasOwnProperty(make)){
			redirectURL = bgImgUrl[make];
		} else if (bgImgUrl.hasOwnProperty('all')){
			redirectURL = bgImgUrl['all'];
		}
	}

	if(redirectURL.length > 0){
		var divWidth = ($(window).width() / 2) - ($(".wrapper").width() / 2);
		var secondDivLeft = ($(window).width() / 2) + ($(".wrapper").width() / 2);
		$("#bgClick1").remove();
		$("#bgClick2").remove();
		$('body').append("<div id='bgClick1' style='z-index:100;cursor:pointer;width:"+divWidth+"px;height:100%;position:fixed;left:0px;top:0px;'></div>");
		$('body').append("<div id='bgClick2' style='z-index:100;cursor:pointer;width:"+divWidth+"px;height:100%;position:fixed;left:"+secondDivLeft+"px;top:0px;'></div>");
		$('#bgClick1').on('click', function(){
			self.redirect( redirectURL );
		});
		$('#bgClick2').on('click', function(){
			self.redirect( redirectURL );
		});
	 }
	}

	this.reset = function( e ){
		self.set();
	}

	this.redirect = function(url) {
		if (self.deploymentType == 'live') {
			gaTrack('_trackEvent', 'Cliques', 'Image-de-fond', self.bgImg, 1);
			gaTrack('c._trackEvent', 'Cliques', 'Image-de-fond', self.bgImg, 1);
			if( typeof self.d2cEvent == 'function' ){
				self.d2cEvent.call(self, self.bgImg);
			}
		}
		window.open(url);
	}


	$(window).on('resize', self.reset);
	return this;
}

function rhsPromoImage( data ){
	var self = this;

	self.data = data;

	var promoImages = [];
	var index = -1;
	var loc = window.location;

	var path = decodeURIComponent(loc.pathname+loc.search).toLowerCase();
	for( search in self.data ){
		if( search=='default' || path.indexOf( decodeURIComponent((search+'').toLowerCase()) ) != -1){
			for( i = 0;i < self.data[search].length; i++ ){
				promoImages.push( self.data[search][i] );
			}
		}
	}

	self.rotate = function(){
		if( ++index > promoImages.length - 1 ){
			index = 0;
		}

		var current = promoImages[ index ];
		var img = $('<img />').attr({
			src: current.i,
			style: 'width:100%; max-width:280px; border-radius: 5px; cursor:pointer;',
			alt: ''
		});

		$('div#rightPromoImage').html( img );

		if( current.u != null && current.u.length > 0 ){
			$('div#rightPromoImage').attr('onclick', 'window.location = \'' + current.u+'\'');
		}
		$('div#rightPromoImage').show();

		if( promoImages.length == 1 ) return;
		setTimeout( self.rotate, current.delay );
	}

	if( promoImages.length > 0){
		self.rotate();
	}
}

function cleanText(textToClean){
	textToClean = textToClean.replace(/[\x60]/g,"'");
	textToClean = textToClean.replace(/’/g,"'");
	textToClean = textToClean.replace(/`/g,"'");
	textToClean = textToClean.replace(/[\u2019]’/g,"'");
  //textToClean = textToClean.replace(/\r\n/g,"<br\/>");
  //textToClean = textToClean.replace(/\n/g,"<br\/>");
	return textToClean;
}

function encodeText(text){
	var textToClean = text;
	try{
		textToClean = $.base64.encode(text);
	}catch(ex){
		console.log( ex.message, ex );
	  // Most likely due to an invalid character
	  var newValue = '';
	  for (var i=0;i<textToClean.length;i++){
	    var char1 = textToClean.charAt(i);
	    var cc = char1.charCodeAt(0);

	    if((cc>47 && cc<58) || (cc>64 && cc<91) || (cc>96 && cc<123)){
	      newValue+= char1;
	    }else{
	      try{
	        $.base64.encode(char1);
	        newValue+= char1;
	      }catch(ex){
	        //if (typeof console != 'undefined' && typeof console.log != 'undefined')console.log(char1);
	      }
	    }
	  }
	  textToClean = $.base64.encode(newValue);
	}
	return textToClean;
}

function cleanAndEncodeText(text){
	try{
		var textToClean = '';
		if (typeof text == 'undefined') return '';
		if (typeof text != 'string') textToClean = text.toString();
		else textToClean = text;

		textToClean = cleanText(textToClean);
		textToClean = encodeText(textToClean);

	  return textToClean;
	}catch(ex){
		console.log( ex.message, ex );
		return text;
	}
}

function ExPhone(e){
	switch(e.type){
		case 'mouseenter':
			$('.extendedPhone').show();
			return
		case 'mouseleave':
			$('.extendedPhone').hide();
			return;
	}
}

function getResizedImages() {
	if(!debugEnabled()){
		return false;
	}

	/* do nothing */
	return false;

	var $$ = $(this);
	var p = {
		width: parseInt( $$.width() ),
		height: parseInt(  $$.height() )
	}
	var imgSrc = $$.attr('src');

	var newImg = new Image();
  newImg.onload = function() {
    var height = parseInt( newImg.height );
    var width = parseInt( newImg.width );
		if( p.width < width || p.height < height){
			//debug( 'Resized Image:', $$.get(0), "\n On Page:", p.height, 'x', p.width, "Natural:", height, 'x', width );
		}
  }
  newImg.src = imgSrc;

	return true;
}

function changeHomeActionBackImage(obj, image){
 $(obj).css({
    'background':'url('+image+')',
     'backgroundRepeat':'no-repeat',
     'backgroundSize': '240px 121px'
     });
}

function takeCurrentPrintscreen(siteId) {
	var o = $("#hiddenSkipOnloadPrintscreen");
	if (o.length > 0) {
		if (o.val() == "DO_SKIP_POPUP") {
			//we take a printscreen!
			html2canvas(document.body, {
				onrendered: function(canvas) {
					var img = "";
					try {
						img = canvas.toDataURL("image/jpeg");
					} catch(ex) {
						console.log( ex.message, ex );
					}

					var key = $("#hiddenPrintscreenKey");
					key = key.length > 0 ? key.val() : "";

					$.ajax({
						type: "POST",
						url: '/fr/php/take.printscreen.php',
						data: {img: img, siteID: siteId, key: key, page: 0},

						success: function(data) {
							//console.log("success: " + data);
						}
					});


			}});

		}
	}
}


var __currentThreashold;
function threadholdScrollPercent()
{
	if(!__currentThreashold)
	{
		__currentThreashold = ( $(window).height() + $(document).scrollTop()) / $(document).height();
		setTimeout('__currentThreashold = null', 333);
	}
	return __currentThreashold;
}

/**
Execute a callback at a given scroll point (threshold).

Threshold is a value from 0-1 (0.8 = 80%)
**/
function thresholdExec(threshold, callback, callback_args){
	var interval = null;
	var callback_args = callback_args ? callback_args : [];

	if( typeof threshold != 'function' ){
		var input = Math.round( threshold * 10000 ) / 10000;
		if( input > 1 ){
			input = input/100;
		}
		threshold = function(){
			return input;
		}

	}

	var check = function(){
		/**
		// Don't spam the console! This will fire 3x/sec * triggers
		if( 42 == Math.round(Math.random()*50)){
			console.log(scrollPercent(), threshold());
		}
		**/
		if( threadholdScrollPercent() > threshold() ){
			try{
				callback.apply(null, callback_args);
			}catch( e ){
				console.log( e );
			}
			interval = clearInterval( interval );
		}
	}

	$(function(){
		setTimeout(function(){
			interval = setInterval(check,333);
		},2000);
	});

};

function scrollupExec(callback){
    var interval = null;
    var lastScrollTop = 0;

    var check = function(){
        $(window).scroll(function(event){
            var st = $(this).scrollTop();
            if (st < lastScrollTop){
            	callback.call(null);
                interval = clearInterval( interval );
            }
            lastScrollTop = st;
        });
    }

    $(function(){
        interval = setInterval(check,333);
    });
}

/**
* Dynamic helper for thresholdExec
**/
function inViewExec( selector, callback ){
	thresholdExec(function(){
		var element = $(selector);
		try{
			/*
			 * if it's literally at the top of the page, why is this method be needed?
			 * It's probably just a display bug.
			 * 1.00 is the bottom of the page.
			*/
			if( !element.length || element.is(':hidden') || element.offset().top == 0 ){
				return 0.95;
			}
			return ( element.offset().top / $(document).height() );
		}catch( e ){
			/* If the el cannot be found, fallback to 95% */
			return 0.95;
		}
	}, callback, [ selector ] );
}

/* IE8 support functions */

//check if broser is below IE9
var lt_IE9 = (typeof(document.addEventListener) != 'function' ? true : false);

//check if broser is below IE11
var lt_IE11 = (!document.all == false);

function isIE(){
	var tmp = document.documentMode, e, isIE;

	// Try to force this property to be a string.
 try{document.documentMode = "";}
 catch(e){ };

 // If document.documentMode is a number, then it is a read-only property, and so
 // we have IE 8+.
 // Otherwise, if conditional compilation works, then we have IE < 11.
 // Otherwise, we have a non-IE browser.
 isIE = typeof document.documentMode == "number" || new Function("return/*@cc_on!@*/!1")( );

	// Switch back the value to be unobtrusive for non-IE browsers.
 try{document.documentMode = tmp;}
 catch(e){ };

 return isIE;
}

var t = 0;
__start = function(){
	t = (new Date()).getTime();
}
__stop = function(){
	var e = (new Date()).getTime();
	console.log('took',( e - t )/1000);
}



//console
var alertFallback = true;
if (typeof console === "undefined" || typeof console.log === "undefined") {
    console = {};
    if (alertFallback) {
        console.log = function(msg) {
            //alert(msg);
        };
    } else {
        console.log = function() {};
    }
}

/**
 * Polyfill of array.map
**/
if (!Array.prototype.map) {
  Array.prototype.map = function (callback, thisArg) {
    var T, A, k;
    if (this == null) {
      throw new TypeError(" this is null or not defined");
    }

    // 1. Let O be the result of calling ToObject passing the |this| value as the argument.
    var O = Object(this);

    // 2. Let lenValue be the result of calling the Get internal method of O with the argument "length".
    // 3. Let len be ToUint32(lenValue).
    var len = O.length >>> 0;

    // 4. If IsCallable(callback) is false, throw a TypeError exception.
    // See: http://es5.github.com/#x9.11
    if (typeof callback !== "function") {
      throw new TypeError(callback + " is not a function");
    }

    // 5. If thisArg was supplied, let T be thisArg; else let T be undefined.
    if (arguments.length > 1) {
      T = thisArg;
    }

    // 6. Let A be a new array created as if by the expression new Array( len) where Array is
    // the standard built-in constructor with that name and len is the value of len.
    A = new Array(len);

    // 7. Let k be 0
    k = 0;

    // 8. Repeat, while k < len
    while (k < len) {
      var kValue, mappedValue;
      // a. Let Pk be ToString(k).
      //   This is implicit for LHS operands of the in operator
      // b. Let kPresent be the result of calling the HasProperty internal method of O with argument Pk.
      //   This step can be combined with c
      // c. If kPresent is true, then
      if (k in O) {

        // i. Let kValue be the result of calling the Get internal method of O with argument Pk.
        kValue = O[k];

        // ii. Let mappedValue be the result of calling the Call internal method of callback
        // with T as the this value and argument list containing kValue, k, and O.
        mappedValue = callback.call(T, kValue, k, O);

        // iii. Call the DefineOwnProperty internal method of A with arguments
        // Pk, Property Descriptor {Value: mappedValue, Writable: true, Enumerable: true, Configurable: true},
        // and false.

        // In browsers that support Object.defineProperty, use the following:
        // Object.defineProperty( A, k, { value: mappedValue, writable: true, enumerable: true, configurable: true });

        // For best browser support, use the following:
        A[k] = mappedValue;
      }
      // d. Increase k by 1.
      k++;
    }
    // 9. return A
    return A;
  };
}

/**
* Polyfill for array.indexOf
* IE8 does not support indexOf on an array
* This adds it
*/
if (!Array.prototype.indexOf) {
  Array.prototype.indexOf = function(obj, start) {
		for (var i = (start || 0), j = this.length; i < j; i++) {
			if (this[i] === obj) { return i; }
    }
    return -1;
  }
}

//Polyfill for array.reduce
//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/Reduce?v=b#Polyfill
// Production steps of ECMA-262, Edition 5, 15.4.4.21
// Reference: http://es5.github.io/#x15.4.4.21
// https://tc39.github.io/ecma262/#sec-array.prototype.reduce
if (!Array.prototype.reduce) {
    Object.defineProperty(Array.prototype, 'reduce', {
        value: function(callback /*, initialValue*/) {
            if (this === null) {
                throw new TypeError( 'Array.prototype.reduce ' +
                    'called on null or undefined' );
            }
            if (typeof callback !== 'function') {
                throw new TypeError( callback +
                    ' is not a function');
            }

            // 1. Let O be ? ToObject(this value).
            var o = Object(this);

            // 2. Let len be ? ToLength(? Get(O, "length")).
            var len = o.length >>> 0;

            // Steps 3, 4, 5, 6, 7
            var k = 0;
            var value;

            if (arguments.length >= 2) {
                value = arguments[1];
            } else {
                while (k < len && !(k in o)) {
                    k++;
                }

                // 3. If len is 0 and initialValue is not present,
                //    throw a TypeError exception.
                if (k >= len) {
                    throw new TypeError( 'Reduce of empty array ' +
                        'with no initial value' );
                }
                value = o[k++];
            }

            // 8. Repeat, while k < len
            while (k < len) {
                // a. Let Pk be ! ToString(k).
                // b. Let kPresent be ? HasProperty(O, Pk).
                // c. If kPresent is true, then
                //    i.  Let kValue be ? Get(O, Pk).
                //    ii. Let accumulator be ? Call(
                //          callbackfn, undefined,
                //          « accumulator, kValue, k, O »).
                if (k in o) {
                    value = callback(value, o[k], k, o);
                }

                // d. Increase k by 1.
                k++;
            }

            // 9. Return accumulator.
            return value;
        }
    });
}

// Production steps of ECMA-262, Edition 5, 15.4.4.18
// Reference: http://es5.github.io/#x15.4.4.18
if (!Array.prototype.forEach) {

    Array.prototype.forEach = function(callback/*, thisArg*/) {

        var T, k;

        if (this == null) {
            throw new TypeError('this is null or not defined');
        }

        // 1. Let O be the result of calling toObject() passing the
        // |this| value as the argument.
        var O = Object(this);

        // 2. Let lenValue be the result of calling the Get() internal
        // method of O with the argument "length".
        // 3. Let len be toUint32(lenValue).
        var len = O.length >>> 0;

        // 4. If isCallable(callback) is false, throw a TypeError exception.
        // See: http://es5.github.com/#x9.11
        if (typeof callback !== 'function') {
            throw new TypeError(callback + ' is not a function');
        }

        // 5. If thisArg was supplied, let T be thisArg; else let
        // T be undefined.
        if (arguments.length > 1) {
            T = arguments[1];
        }

        // 6. Let k be 0.
        k = 0;

        // 7. Repeat while k < len.
        while (k < len) {

            var kValue;

            // a. Let Pk be ToString(k).
            //    This is implicit for LHS operands of the in operator.
            // b. Let kPresent be the result of calling the HasProperty
            //    internal method of O with argument Pk.
            //    This step can be combined with c.
            // c. If kPresent is true, then
            if (k in O) {

                // i. Let kValue be the result of calling the Get internal
                // method of O with argument Pk.
                kValue = O[k];

                // ii. Call the Call internal method of callback with T as
                // the this value and argument list containing kValue, k, and O.
                callback.call(T, kValue, k, O);
            }
            // d. Increase k by 1.
            k++;
        }
        // 8. return undefined.
    };
}

/**
 * Returns an object of all data- attributes from an element
 * Ex. { name: "Bob", age: "21"}
 * @param el
 * @returns {DOMStringMap|string|*}
 */
function getDataAttributes ( el ) {
    return el.dataset || [].slice.call( el.attributes ).reduce(function ( o, a ) {
        return /^data-/.test( a.name ) && ( o[ a.name.substr( 5 ) ] = a.value ), o;
    }, {} );
}

function getParameterByName(name) {
	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
	results = regex.exec(location.search);
	return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function showTradeInPopup(link){
  //if ($("#disablePopups").length==0 || $("#disablePopups").val()==0){
	    if($("#tradeinLinkPopupContainer").length==0){
	    	var w = '750px';
				var h = '570px';
	    	if(/Mobi/.test(navigator.userAgent)==true){
	    		var w = '300px';
					var h = '600px';
	    	}
    	$('body').append('<div id="tradeinLinkPopupContainer" style="width: '+w+'; height: '+h+'"><div class="close-reveal-modal">&#215;</div><iframe src="'+link+'" allowtransparency="true"  class="-t0 -l0 -w100p -h100p" id="tradeinLinkPopupIframe"></iframe></div>');
	  }
  	$("#tradeinLinkPopupContainer").popupize().setTrigger("click").open();
	//}
}

function currentPromoRedirect(){
	switch(true){
		case typeof showPopupWidget == "function":
			showPopupWidget();
			break;
		case typeof($("#ViewPromoActionBoxLink").attr("href")) != "undefined":
			$("#ViewPromoActionBoxLink")[0].click();
			break;
		case typeof($("#promotionSideVButton a").attr("href")) != "undefined":
			$("#promotionSideVButton a")[0].click();
			break;
		case typeof($("#ViewCustomPromoActionBoxLink").attr("href")) != "undefined":
			$("#ViewCustomPromoActionBoxLink")[0].click();
			break;
	}
}

function showNewRebateCodePopup() {
	if ($("#disablePopups").length==0 || $("#disablePopups").val()==0){
		$("#ImagePopupContainer_newrebate").popupize().setTrigger("click").open();
	}
}

function showNewBestPriceVdpPopup() {
	if ($("#disablePopups").length==0 || $("#disablePopups").val()==0){
		$('#bestPriceVdpNewPopupContainer').popupize().setTrigger('click').open();
	}
}

function print_promo_prev(obj) {
	var shown = false;
	var parent = $(obj).parents('.promos');
	var title = parent.find('.promo-title').html();
	var desc  = parent.find('.promo-desc').html();
	var img   = parent.find('.promo-image img').attr('data-print-src');

	$('#promoToPrint').remove();
	$('#promoToPrintWrap').remove();

	$('body').append('<div class="toprint" id="promoToPrint"><img border="0" style="width:100%;" src="' + img + '" alt="" id="promoImg"><br><br><b>' + title + '</b><br>'+desc+'</div>');

	$('#promoImg').on('load', function(){
		if(!shown) $('#promoToPrint').printElement();
		shown = true;
	});

	setTimeout(function(){
		if(!shown) $('#promoToPrint').printElement();
		shown = true;
	},1000);

	return false;
}

function getMultipleAddressPhone(obj){
	$('.multiAddressPhone').slideUp();
	var multiAddress = $('.multiAddressPhone', $($(obj).parent()));
	if($(multiAddress).is(':hidden')){
		$(multiAddress).slideDown();
	}else{
		$(multiAddress).slideUp();
	}
}

jQuery(function($){

	/* LiveChat Ticket Callback */
	(function(){



		LC_API = window.LC_API || {};
		LC_API.on_ticket_created = function(data){
			try{
				function getUUID(){
					var uuid = (typeof window.activeProfileID !== 'undefined') ? window.activeProfileID : null;
					return (uuid == null) ? $.cookie('uuid') : uuid;
				}

				(function( uuid ){
					if (uuid == null) return;

					var img    = 'https://stats.d2cmedia.ca/service/contact.gif';
					var params = 'tc=' + data.ticket_id + '&u=' + uuid;
					var style  = 'width:1px;height:1px;right:10px;top:10px;position:absolute;';
					var html   = '<img src="'+img+'?'+params+'" style="'+style+'" />';

					$('body').append(html);
				})(getUUID());

			}catch(ex){
				/* Do nothing as this is not critical */
			}
		}
	})();


	if( typeof onConfirmSubmit == 'function' ){
		$('.confirm_html').on('submit', onConfirmSubmit );
	}

	try{
		$('img:visible').each(getResizedImages);

		if (typeof $('#slider.nivoSlider').attr('id') != 'undefined'){
			var manualAdvanceOption = false;
			var videoOnLoopOption = false;
			var hideControlOption = false;
			var hideInfoOption = false;
			var fullWidthOption = false;
			var muteVideoOption = false;
			var videoBrightnessOption = 100;
            if($('#banner_search_bar_container').length){
                manualAdvanceOption = true;
                videoOnLoopOption = true;
                hideControlOption = true;
                hideInfoOption = true;
                fullWidthOption = true;
                muteVideoOption = true;
                videoBrightnessOption = $('#BANNER_SEARCH_BAR_VIDEO_OPACITY').length ? $('#BANNER_SEARCH_BAR_VIDEO_OPACITY').val() : 100;
            }

            setTimeout(function() {
				$('#slider.nivoSlider').nivoSlider({
					effect: 'fade',
					beforeChange: function () {
						$('#parallaxWrapper').enllax();
					},
					afterChange: function () {
						$('#slider.nivoSlider').trigger('nivoSliderChanged');
					},
					afterLoad: function () {
						$('#slider.nivoSlider').trigger('nivoSliderLoaded');
						$('#parallaxWrapper').enllax();
						if ($('#banner_search_bar_container').length) {
							//$('#slider.nivoSlider').data('nivo:vars').stop = true;
							$('#slider.nivoSlider').data('nivo:vars').stop
							$('.nivo-controlNav').hide();
							$('.nivo-directionNav').hide();
							$('#slider').css('z-index', -10);
							this.startYoutube();
						}
					},
					manualAdvance: manualAdvanceOption,
					videoOnLoop: videoOnLoopOption,
					hideControl: hideControlOption,
					hideInfo: hideInfoOption,
					fullWidth: fullWidthOption,
					muteVideo: muteVideoOption,
					videoBrightness: videoBrightnessOption
				});
			}, 750);
        }

		if (typeof $('.extendedPhoneTrigger').attr('id') != 'undefined') $('.extendedPhoneTrigger').hover(ExPhone,ExPhone);

		var loadMenuImages = function(){
			/*
			if( typeof $.fn.lazyload == 'undefined' )
				return;
			$('.up_menu').find('img').lazyload({
				container: '.up_menu',
				event: 'mousemove',
				hairTrigger: true,
				skip_invisible: false
			});
			*/
		}

		// show tradein in popup
		$(".tradeinLink").on('click', function(){
			if($(this).attr('targetURI') && $(this).attr('targetURI').length>6){
    		showTradeInPopup($(this).attr('targetURI'));
     		return false;
     	}
    });

		$('.up_menu').one('mouseover',loadMenuImages);
		setTimeout( loadMenuImages, 10000 );

		(function(){
			/* Image menu Style 2 JS tweaks */
			var menu = $('#MainMenu_NEW');
			if( menu.length == 0 ){
				return;
			}
			var first = $('.img_menu.up_menu ul#nav > li#MainMenu_NEW > ul.sub > li.firstItem');
			var timeout = false;
			if( first.length == 0 ){
				return;
			}
			$('#MainMenu_NEW').find('.price').css('cursor', 'pointer').on('click',function(){
				var a = $(this).siblings().first();
				window.location = a.attr('href');
			});
			$('#MainMenu_NEW').on('mouseenter',function(){
				clearTimeout( timeout );
				first.addClass('hover');
			});
			first.siblings().
				on('mouseenter', function(){
					clearTimeout( timeout );
					first.removeClass('hover');
				}).
				on('mouseleave', function(){
					timeout = setTimeout(function(){
						first.addClass('hover');
					},300);
				});
		})();

		$('img[errorimg]').error(function(){
			var $i = $(this);
			 $i.attr('src', $i.attr('errorimg'));
		});

		var $locker = $('.up_menu');
		if( $locker.length > 0 && !$locker.hasClass('nolock') ){
			$locker.data('abstop', $locker.offset().top );
			var AffixMenu = function(){


				var top = $(document).scrollTop(),
						origTop = $locker.data('abstop'),
						fixed = $locker.hasClass('fixed' );
				/* Conditional expressions */
				( fixed && top < origTop && $locker.removeClass('fixed'));
				( !fixed && top > origTop && $locker.addClass('fixed'));

				fixed = $locker.hasClass('fixed' );

				if( fixed && $('#alertMsgContainer').is(':visible')){
					$locker.css({top: $('#alertMsgContainer').height()+'px' });
				} else {
					$locker.attr('style', '' );
				}
				var $pullout = $('.pullouts.side_top:visible');


				if( fixed && $pullout.length > 0 ){

					$pullout.filter('.pullout-opened').css({
						top: $locker.height()+'px'
					});
					$pullout.filter('.pullout-closed').each(function(){
						var $this = $(this);
						var widget = get_pow($this.attr('id'));
						( !$this.data('posY') && $this.data('posY', -widget.position ));

						var ntop = $this.data('posY') + $locker.height();
						$this.css({
							top: ntop+'px'
						});
					});

				} else {


					$pullout.filter('.pullout-opened').css({
						top: 0
					});
					if( $pullout.filter('.pullout-closed').data('posY') ){
						$pullout.filter('.pullout-closed').each(function(){
							$(this).css({
								top: $(this).data('posY')+'px'
							});
						});
					}
				}
			}
			$(document).on('scroll', AffixMenu );
		}

		var tradeInBarFloatFunc = function(){
            if ($('#tradeinBarFloat').length ==0){
                $('body').append('<div id="tradeinBarFloat" style="text-align:center;position: fixed;width: 100%;z-index: 100;display:none;"></div>');
                $( "#tradeInBar" ).clone(true,true).appendTo( "#tradeinBarFloat" ).trigger('tradeInBar.cloned');

                var topVal  = 48;
                if($('#alertMsgContainer').length>0 && $('#alertMsgContainer').is(":visible")){
                    topVal  = topVal+$('#alertMsgContainer').height();
                }

                if($('#tradeInBarStickyBottom').length && $('#tradeInBarStickyBottom').val() == '1'){
                    $('#tradeinBarFloat').css('bottom','-2px');

	                //	update the kia certified footer height when there is a floating bar, so it can be seen
	                var footerHeight = $(".certified-footer").height();
	                var barHeight 	 = $("#tradeinBarFloat").height();

	                $(".certified-footer").height(footerHeight + barHeight);
                }else{
                    $('#tradeinBarFloat').css('top',topVal);
                }
                $('#tradeinBarFloat .-pb10').css({'display':'inline-table','width':$('#mainDiv').width()});
            }
            if(!$('#tradeInBar').isInViewport()) {
                $('#tradeinBarFloat').show();
            }else{
                $('#tradeinBarFloat').hide();
            }
            if($('#alertMsgContainer').length>0 && $('#alertMsgContainer').is(":hidden") && $('#tradeinBarFloat').css('top') != 48 && $('#tradeInBarStickyBottom').length && $('#tradeInBarStickyBottom').val() != '1'){
				$('#tradeinBarFloat').css('top',48);
			}
		}

		if($('#tradeInBar').length){
            $(document).on('scroll', tradeInBarFloatFunc );
        }


		var $List = $('ul#nav > li > ul > li > ul');

		/* Reset the scroll on mouseenter */
		$List.each(function(){
			$(this).parent().on('mouseenter', function(ev){
				$('ul', this).scrollTop(0);
			});
		});


		/* Prevent Page scroll on div scroll end */
		$List.on('DOMMouseScroll mousewheel',function(ev){
			var $this = $(this),
					scrollTop = this.scrollTop,
					scrollHeight = this.scrollHeight,
					height = $this.height(),
					oe = ev.originalEvent,
					delta = (ev.type == 'DOMMouseScroll' ? oe.detail * -40 : oe.wheelDelta),
					up = delta > 0;

			var prevent = function(scrollTo) {
				$this.scrollTop(scrollTo);
				ev.stopPropagation();
				ev.preventDefault();
				ev.returnValue = false;
				return true;
			}

			return !(
					( !up && -delta > scrollHeight - height - scrollTop && prevent(scrollHeight) )
					||
					( up && delta > scrollTop && prevent( 0 ) )
					);
		});

	} catch( e ) {
		console.log( 'Error', e );
	}

	if( $('.up_menu.img_menu').length ) {
		var NewMenu = $('.img_style_1 #MainMenu_NEW').children('.sub');
		var FirstSub = NewMenu.find('.firstItem').find('.sub');
		NewMenu.children('li').on({
			mouseenter: function(){
				( !$(this).is('.hasSub') && FirstSub.hide() );
			},
			mouseleave: function(){
				( !$(this).is('.hasSub') && FirstSub.show() );
			}
		});
	}

	var fix = new MenuFixer();
	var resizerTimeout;
	var resizing = false;


	fix.on('complete', function() {
		//DWP=6888 calculation is done on the fly now, when user mouses over menu item
		//MenuHandler().fixSubMenuWidths();
	});

	function fixerResize() {
		if(!resizing)
		{
			fix.reset();
			resizing = true;
			fix.run();
		}
		//Only rerun MenuFixer after small lapse in run resize
		clearTimeout(resizerTimeout);
		resizerTimeout = setTimeout(function() {
			fix.reset();
			fix.run();
			resizing = false;
		}, 500);
	}

	$(window).resize(fixerResize);

	$(".numeric").on('keypress',function(event) {
		if ((event.keyCode < 48 || event.keyCode > 57)){
   		event.returnValue = false;
		}
	});

  if(("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch)){
		// Fix for iphone and ipad. Otherwise,  requires 2 clicks.
  	$('.left_box a').on('tap',
		  function(e){

		 		var obj = $(this);
		 		if(obj.attr('type') != 'radio'){
			 		if(obj.attr('onclick')){
			 			obj.trigger("click");
			 			return false;
			 		}

			 		/** /
			 		if(obj.attr('href').indexOf('javascript') == -1){
			  			window.location.replace(obj.attr('href'));
			  			return false;
				  	}
					/**/
			    }
		  }
		);

		// manu hover fix for touch devices
		$('.hasItems > a, .hasSub > a').on('click', function(event){

			if(event.type != 'click') return true;

			var clickCount = $(this).data('clickCount');
			if(typeof clickCount== 'undefined' || clickCount=='0'){
				$('#nav li.hasItems a, #nav li.hasSub a').data('clickCount','0'); // reset all!
				$(this).data('clickCount','1');
				event.preventDefault();
			} else {
				document.location = $(this).attr('href');
				$(this).data('clickCount','0');
				return true;
			}
		});

		// Force 'touchstart' to also be a click on 'a' elements
		// May cause double-invocation
		// $('.up_menu').on('touchstart','a',function(e){
		// 	$(this).trigger('click');
		// });
//		/* Force a page navigation on an 'a' click */
//		$('.up_menu').on('click', 'a', function(e){
//			console.log( 'Click 0');
//
//			event.preventDefault();
//
//			var $$ = $(this);
//			if( $$.parent().is('.hasItems') || $$.parent().is('.hasSub') ){
//				console.log( 'Click 1', 'false');
//				return false;
//			}
//			if(!$$.attr('href')){
//				console.log( 'Click 2', 'false');
//				return false;
//			}
//			console.log( 'Click 3', $$.attr('href'));
//			document.location = $$.attr('href');
//		})


	}

	try{
		$('.addtt').each(function(){
			/**
			 *  evals:
			 *  on-close, on-yes, on-no
			 */
			var evals = ['onClose','onYes','onNo'];
			var $el = $(this);
			var options = $el.data();
			var settings = {};
			for(var i in options ){
				settings[i] = (function(param,value){
					if( evals.indexOf( param ) != -1 ){
						return function(){ eval( value ) }
					}
					return value;
				})(i, options[i]);
			}
			$el.darkTooltip( settings );
		});
	}catch( e ){
		console.log( e.message, e );
	}

});

/**
 * Checks to see if child node is in within parent node
 * @param c Node child - the element we are checking
 * @param p Node parent - the containing element
 * @returns {boolean}
 */
function childOf(c,p){while((typeof c !== 'undefined' && c!==null)&&(c=c.parentNode)&&c!==p);return !!c}

/*********************** STYLE 4 MENU *****************************
 * @author Paul Windsor
 */
var MenuHandler;
(function () {
    var self;

    //singleton pattern
    MenuHandler = function MenuHandler() {
        if (self) {
            return self;
        }

        self = this;

        var that = this;
        //Public properties
        this.menu = $('.menu5, .menu6');
        this.specsAjax = $.get('/json/newcarsdetails_' + ($('#activesitelanguage').val() == 'ENGLISH' || $('#new_translated_titles').val() === '0' ? 'en' : 'fr') + '.json');
        this.cars = {
            details: {},
            findById: function(id) {

                var modelFound = {};
                $.each(this.details.makes, function(makeKey, make) {

                    $.each(make.models, function(modelKey, model) {

                        //loop through expanded styles
                        if (model.isseries == 1 || model.isClass == 1) {

                            $.each(model.styles, function(styleKey, style) {

                                if (style.id == id) {
                                    modelFound = style;
                                    return;
                                }

                            });

                        }
                        else if (model.id == id) {
                            modelFound = model;
                            return;
                        }
                    });

                    if (!$.isEmptyObject(modelFound)) {
                        return;
                    }
                });

                return modelFound;
            }
        };

        this.specsAjax.done(function(data) {
            MenuHandler().cars.details = data;
        });


        this.positions = function(context, e, menuspecs) {
            return {
                target: $(e.currentTarget),
                secondLevelMenu: null,
                windowHeight: null,
                secondLevelMenuTop: null,
                secondLevelMenuBottom: null,
                subMenuItemTop: null,
                subMenuItemHeight: null,
                subMenuItemBottom: null,
                bottomAlign: null,
                specs: null,
                specsTop: null,
                specsHeight: null,
                specsBottom: null,
				customSecondLevelMenu: null,

                update: function() {
					if (typeof this.customSecondLevelMenu == 'function') {
						this.secondLevelMenu =  this.customSecondLevelMenu();
					}
					else {
						this.secondLevelMenu = this.target.find('ul.sub:first');
					}

                    try {
                        this.windowHeight = $(window).height();
                        this.secondLevelMenuTop = this.secondLevelMenu.offset().top;
                        this.secondLevelMenuHeight = this.secondLevelMenu.outerHeight();
                        this.secondLevelMenuBottom = this.secondLevelMenuTop + this.secondLevelMenuHeight;
                    } catch (error) {

                    }

                    try {
                        this.subMenuItemTop = $(context).offset().top;
                        this.subMenuItemHeight = $(context).outerHeight();
                        this.subMenuItemBottom = this.subMenuItemHeight + this.subMenuItemTop;
                        this.bottomAlign = ($(context).parent('ul').outerHeight() + $(context).parent('ul').offset().top) - this.secondLevelMenuBottom;
                    } catch (error) {

                    }

                    try {
                        this.specs = menuspecs;
                        this.specsTop = this.specs.offset().top;
                        this.specsHeight = this.specs.outerHeight();
                        this.specsBottom = this.specsTop + this.specsHeight;
                    } catch (error) {

                    }
                },

                adjustSecondLevel: function() {
                    //If bottom of the 2nd submenu goes out the window, add an overflow to it (greater than 80%)
                    if ((this.windowHeight * .65) < (this.secondLevelMenuHeight)) {

                        this.secondLevelMenu.removeAttr('style');
                        this.secondLevelMenu.css('height', this.windowHeight * .65);
                        //Adds scrolling, but on the left side
						this.secondLevelMenu.css({'overflow-y': 'auto', 'width': '400px', 'position': 'static', 'direction': 'rtl'});
						//Fixes the RTL in previous step to re-align text/images to proper formatting
						this.secondLevelMenu.find('> li').css({direction: 'ltr'});

                        if ($(context).children('.mainmenu-submenu').length == 0) {

                            var wrapper = $('<div/>');
                            wrapper.addClass('mainmenu-submenu');

                            wrapper.append(this.secondLevelMenu);
                            $(e.currentTarget).append(wrapper.fadeIn(200));
                        }
                    }

                    //If bottom of the 2nd menu is above the submenu item link move it down to have both menus bottom aligned
                    if (this.secondLevelMenuBottom < this.subMenuItemTop) {
                        $(context).addClass('align-level');
                        this.update();
                        var top = 0;

                        if (this.secondLevelMenuBottom < ($(context).parent('ul').outerHeight() + $(context).parent('ul').offset().top)) {
                            //Align bottom of 2nd level menu with bottom of submenu item
                            top = ($(context).outerHeight() + $(context).offset().top) - this.secondLevelMenuBottom;
                        } else {
                            //Align Bottom of both menus
                            top = ($(context).parent('ul').outerHeight() + $(context).parent('ul').offset().top) - this.secondLevelMenuBottom;
                        }

                        //Only add this once
                        if (typeof this.secondLevelMenu.attr('style') === 'undefined') {
                            this.secondLevelMenu.css('top', top);
                        }
                    }
                    //if the bottom of the 2nd menu is in between the top and bottom of the item menu link, shift the menu down to match the bottom of the link
					else if (this.secondLevelMenuBottom > this.subMenuItemTop && this.subMenuItemBottom > this.secondLevelMenuBottom) {
						this.secondLevelMenu.offset({top: Math.abs(this.secondLevelMenuBottom - this.subMenuItemBottom) + this.secondLevelMenuTop});
					}


                }
            };
        };

        //mainmenu listener
        this.menu.on('hover', 'ul#nav > li', function(e) {
            var _self = this;
            //var list = $(e.currentTarget).children('ul.sub');

            var positions = self.positions(_self, e);
            positions.update();

			//Bottom of the menu exceeds window bounds add a class that will reduce the padding
			if ((positions.secondLevelMenuBottom - $(window).scrollTop()) > positions.windowHeight) {
				positions.secondLevelMenu.addClass('slim-submenu');
			}
			else {
				positions.secondLevelMenu.removeClass('slim-submenu');
			}
	
			if (e.type !== 'mouseleave') {
				var child = $(this).find('> ul'); //find direct child
				if (child.length && !child.data('calculated')) {
					var parentWidth = $(this).outerWidth();
			
					//Set the child width to parent width
					var childWidth = child.outerWidth();
			
					if (childWidth < parentWidth) {
						child.css('width', parentWidth + 1);
					}
					child.data('calculated', true);
				}
			}

        });


        //1st submenu listener
        this.menu.on('hover', '#MainMenu_NEW > ul.sub > li', function(e) {
            var _self = this;
            //$(_self).removeClass('align-level');
            //var newMenu
            var positions = self.positions(_self, e);

            //avoid 'hover lag' when mousing over items
            if ($(e.currentTarget).find('ul.sub > li').length == 0 || e.type == 'mouseleave') {
                return;
            }

            positions.update();
            positions.adjustSecondLevel();

        });

		//1st submenu listener for multi-location dealerships
		this.menu.on('hover', '#MainMenu_DEALERSHIPS > ul.sub li.location-names', function(e) {
			var _self = this;
			//$(_self).removeClass('align-level');
			//var newMenu
			var positions = self.positions(_self, e);

			positions.customSecondLevelMenu = function() {
				return $(e.currentTarget).find('.location-details');
			};

			//avoid 'hover lag' when mousing over items
			if ($(e.currentTarget).find('.location-details').length == 0 || e.type == 'mouseleave') {
				return;
			}

			positions.update();
			positions.adjustSecondLevel();

		});

			this.menu.on('hover', '#MainMenu_TAB_COMMERCIAL > ul.sub > #MainMenu_SUB_TAB_COMMERCIAL_COMMER', function(e) {
		    var _self = this;


		    var positions = self.positions(_self, e);

		    if ($(e.currentTarget).find('ul.sub > li').length == 0 || e.type == 'mouseleave') {
		    	$(this).find('.mainmenu-submenu').css('opacity', 0);
		    	$(this).find('.mainmenu-submenu').css('visibility', 'hidden');
			$(this).find(".mainmenu-submenu").find(".sub").css('display', 'none');
		        return;
		    } else {
		    	$(this).find('.mainmenu-submenu').css('opacity', 1);
		    	$(this).find('.mainmenu-submenu').css('visibility', 'visible');
			$(this).find('.mainmenu-submenu').find('.sub').css('display', 'block');
		    }

		    positions.update();
		    positions.adjustSecondLevel();

		});

        //2nd submenu listener - this adds the tech specs for the car
        this.menu.on('hover', '#MainMenu_NEW > ul.sub > li > ul.sub > li > ul.sub > li, #MainMenu_NEW > ul.sub > li > .mainmenu-submenu > ul.sub > li > ul.sub > li', function(e) {

            //avoid 'hover lag' when mousing over items
            if (e.type == 'mouseleave') {
                return;
            }

            var template = $(this).find('.menu-tech-specs');

            if (template.length == 0) {
                template = $('#menu-specs-template').clone();
            }

            var _self = this;

            //Add tech specs just once
            if ($(_self).children('.menu-tech-specs').length == 0) {

                var title = $(_self).find('a:nth-of-type(2)').text();

                //Build and price
                var carLink = $(_self).find('a:first-child').attr('href');
                var slashIndex = carLink.lastIndexOf('/') + 1;
                carLinkTrimmed = carLink.substring(slashIndex, carLink.length); //trim off '/new/'
				var bnp =  $('#txtBuildAndPriceFolderPath');
                var bnpLink = bnp.val() + carLinkTrimmed; //create link

                $(template).find('.menu-spec-bnp').attr('href', bnpLink);
                $(template).find('.menu-spec-link').attr('href', carLink);


                $(template).removeAttr('id');
                $(template).children('.menu-specs-title').append(title);

                var car = {};

                if ($.isEmptyObject(MenuHandler().cars.details)) {
                    $.when( MenuHandler().specsAjax ).done(function (data) {
                        car = MenuHandler().cars.findById($(_self).data('modelid'));
                    });
                }
                else {
                    car = MenuHandler().cars.findById($(_self).data('modelid'));
                }

                if (!$.isEmptyObject(car)) {

                	var bnpTextName = self.shouldUseFrenchNames() ? car.name : car.model;
                	
                    //expanded cars wont have a base_style
                    if (car.hasOwnProperty('base_style')) {
                        car = car.base_style;
						bnpTextName = car.model;
                    }

                    var lang = $('#textLanguage').val();

                    //NA translations
                    var na  = lang == 'FRENCH' ? 'N/D' : 'N/A';

                    var displacement = car.displacement == '' ? na : car.displacement;
                    var cityFuel = car.cityFuel == '' ? na : car.cityFuel;
                    var hwyFuel = car.hwyFuel == '' ? na : car.hwyFuel;
                    var msrp = car.msrp;
                    var bnpText = $(template).find('.menu-spec-bnp').text().trim();
                    bnpText = bnpText.replace('$MODEL', bnpTextName);

                    var price = '$' + msrp.toLocaleString();

                    if ($(_self).children('.price').length > 0) {
                        //price = promo price with scratch where applicable
                        //wrapper
                        $(template).find('.menu-spec-price').text('');
                        var priceWrapper = $('<div class="price"/>');
                        var scratch = $('<span class="price_amt"/>');
                        var scratchPrice = $('<span class="price_scratched"/>');
                        var promoPrice = $('<span class="price_promo"/>');
                        var hasScratch = $(_self).children('.price').children('.price-scratch').length > 0;


                        if (hasScratch) {
                            scratchPrice.text( $(_self).children('.price').children('.price_amt').text() );
                            scratch.append(scratchPrice);
                            scratch.css({
                                'text-decoration': 'line-through',
                                color: 'red'
                            });
                        }
                        else {
                            scratch.text( $(_self).children('.price').children('.price_amt').text() );
                        }
                        priceWrapper.append(scratch);


                        if ( $(_self).children('.price').children('.price_promo').length > 0 ) {
                            promoPrice.text( $(_self).children('.price').children('.price_promo').text() );
                            promoPrice.css({
                                color: 'red'
                            });
                            priceWrapper.append(promoPrice);
                        }

                        $(template).find('.menu-spec-price').append(priceWrapper);
                    }
                    else {
                        $(template).find('.menu-spec-price').text(price);
                    }

                    $(template).find('.menu-spec-hp').text(car.hpAtRPM);
                    $(template).find('.menu-spec-power').text(displacement);
                    $(template).find('.menu-spec-fuel-city').text(cityFuel);
                    $(template).find('.menu-spec-fuel-highway').text(hwyFuel);
                    $(template).find('.menu-spec-drivetrain').text(car.driveTrain);
                    $(template).find('.menu-spec-bnp').contents().filter(function(){ return this.nodeType == 3; }).last().replaceWith(bnpText);

                     if(car.id<500000000 ){
                    	$(_self).append(template.fadeIn(200));
                    }
                }


            }

            var positions = self.positions(_self, e, $(template));
            positions.update();


            //Align specs menu
            var currentSubMenu = $(_self).parent('ul.sub').parent().parent(); //ugg, this targeting
            var currentSubMenuTop = currentSubMenu.offset().top;
            var currentSubMenuHeight = currentSubMenu.outerHeight();
            var currentSubMenuBottom = currentSubMenuTop + currentSubMenuHeight;

            //If bottom of menu is above _self, bottom align it
            if (positions.specsBottom < positions.subMenuItemTop) {
                $(template).css('top', currentSubMenuHeight - positions.specsHeight);
            }
            //if top of specs is below current item - move it up to be in-line
            if (positions.subMenuItemTop < positions.specsTop) {
                $(template).css('top', positions.specsTop - positions.subMenuItemTop);
            }

            //if specs menu bottom is inbetween current item bump it down
            if (positions.subMenuItemTop < positions.specsBottom && positions.subMenuItemBottom > positions.specsBottom) {
                $(template).css('top', positions.subMenuItemBottom - positions.specsBottom);
            }




            delete car;
        });
	
		$('#MainMenu_FINANCE').on('hover', function(e) {
		
			//Add class to keep the menu open, this is to prevent menu closing when mousing over things like form autocomplete
			if ($('#MainMenu_FINANCE.isOpen').length === 0 && e.type !== 'mouseleave') {
				$('#MainMenu_FINANCE').addClass('isOpen');
			}
		
			//Remove the class that keeps the menu open when mousing out of the menu
			if (e.type === 'mouseleave') {
				if (e.fromElement === $('.creditScorePopupForm')[0] || e.fromElement === $('#MainMenu_FINANCE > a.top_link')[0]) {
					$('#MainMenu_FINANCE').removeClass('isOpen');
				}
			
				var isCalendar = $(e.toElement).hasClass('nebCal') || $(e.toElement).closest('.nebCal').length;
				var isGooglePlaces = $(e.toElement).hasClass('pac-container');
			
				//If the mouse hover is currently NOT a child element of the menu and google places calendar are not the target, close menu
				if (e.toElement !== null && !childOf(e.toElement, $('.up_menu')[0]) && !isCalendar && !isGooglePlaces) {
					//Try to hide calendar when moving off of the menu
					if ($('.nebCal').is(':visible')) {
						var plugin = $('.finance-menu-freecredit .creditScoreBirthdate').data('nebCal');
						if (plugin) {
							plugin.hide();
						}
					}
				
					$('#MainMenu_FINANCE').removeClass('isOpen');
				}
			}
		
		});
	
		$('#MainMenu_FINANCE').on('hover', function(e) {
		
			//Add class to keep the menu open, this is to prevent menu closing when mousing over things like form autocomplete
			if ($('#MainMenu_FINANCE.isOpen').length === 0 && e.type !== 'mouseleave') {
				$('#MainMenu_FINANCE').addClass('isOpen');
			}
		
			//Remove the class that keeps the menu open when mousing out of the menu
			if (e.type === 'mouseleave') {
				if (e.fromElement === $('.creditScorePopupForm')[0] || e.fromElement === $('#MainMenu_FINANCE > a.top_link')[0]) {
					$('#MainMenu_FINANCE').removeClass('isOpen');
				}
			
				var isCalendar = $(e.toElement).hasClass('cal-wrapper') || $(e.toElement).children().hasClass('cal-wrapper');
				var isGooglePlaces = $(e.toElement).hasClass('pac-container');
			
				//If the mouse hover is currently NOT a child element of the menu, then contactus menu should close
				if (e.toElement !== null && !childOf(e.toElement, $('.up_menu')[0]) && !isCalendar && !isGooglePlaces) {
					$('#MainMenu_FINANCE').removeClass('isOpen');
				}
			}
		
		});

		//Determine if the short contact for is there and adjust its submenu if the contactus menu item order is higher up in the list
		if ($('.menu5 .contactus-form.contact-short'.length > 0)) {
			var menuItems = $('.menu5 #nav > li');
			var menuItemsCount = menuItems.length;
			var contactusMenuItem = $('#MainMenu_CONTACT');
			var contactusMenuItemIdx = -1;

			//get the position of contactus menu
			menuItems.each(function(index, elem) {
				if ($(elem).is(contactusMenuItem)) {
					contactusMenuItemIdx = index;
				}
			});

			//Contactus submenu can be to far right to access, change css so the submenu appears right under the contactus menu
			if (contactusMenuItemIdx > -1 && ((contactusMenuItemIdx / menuItemsCount ) >= 0.5 )) {
				contactusMenuItem.find('.contactus-form.contact-short').css({right: 'inherit'});
			}
		}
	
		/**
		 * Determine if french titles should be used
		 * @returns {boolean|boolean}
		 */
		this.shouldUseFrenchNames = function() {
			return $('#activesitelanguage').val() == 'FRENCH' && $('#new_translated_titles').val() === '1';
		};
		
        //set menu express form select
        this.setMenuExpressFormSelectedOption = function() {
            var url = window.location.href;
            //find if we are on new or used page
            var isUsedPage = /used|occasion/.test(url);
            var isNewPage  = /new|neufs/.test(url);
            var isFinancePage = /financement|credit/.test(url);
			var isServicePage = /service|accessories|tire|pneus|bodyshop|body-shop|carosserie/.test(url);

            var selectValue = '';

            if (isNewPage) {
                selectValue = 'new';
            }
            else if (isUsedPage) {
                selectValue = 'used';
            }
			else if (isFinancePage) {
            	selectValue = 'finance';
			}
			else if (isServicePage) {
            	selectValue = 'service';
			}

            if (selectValue == '') return;

            var formSelect = $('.menu #quickEmailDepartment'); // original select for jqTransform
            $(' option[value="'+selectValue+'"]',formSelect).attr('selected', 'selected'); // set original select
            var index = $("option:selected",formSelect).index(); // get index of selected option
            formSelect.prev('ul').find('li').eq(index).find('a').click(); // update jqTransform
        };
        //allow jqTransform to do its thing
        setTimeout(function() {
            self.setMenuExpressFormSelectedOption();
        }, 10);

    };
})();

$(function() {
  window.menuHandler = new MenuHandler();
});

//Get active page for banner clicked event
var getActivePage = function(){
    var currentPage = '';

    if (typeof activePage === 'undefined') {
    	activePage = '';
	}

    switch(activePage){
        case 'HOMEPAGE':
            currentPage = 'Accueil';
            break;
        case 'CARDETAILS':
            currentPage = 'Occasion-VDP';
            break;
        case 'USEDCARS':
            currentPage = 'Occasion-SRP';
            break;
        case 'NEWCARS':
            currentPage = 'Neuf-SRP';
            break;
        case 'NEWCARDETAILS':
            currentPage = 'Neuf-VDP';
            break;
        default:
            break;
    }
    return currentPage;
}


//Send google analytic call for banner clicked event
var sendGoogleAnalyticBannerClickedEvent = function(currentPage, url){
    gaTrack('_trackEvent', 'Cliques Banniere', currentPage, url, 1);
    gaTrack('b._trackEvent', 'Cliques Banniere', currentPage, url, 1);
    gaTrack('c._trackEvent', 'Cliques Banniere', currentPage, url, 1);
}

//google tracking for slider banners
$(document).on('click', '#homepage-banner #slider > a', function(e){
    var currentPage = getActivePage();
    if (!currentPage) return;
    var url = $(this).attr('href') != '' ? $(this).attr('href') : 'Popup';
    sendGoogleAnalyticBannerClickedEvent(currentPage, url);
});

//google tracking for mobile slider banners
$(document).on('click', '#mobileSlider #mobileSlider2 > a', function(e){
    var currentPage = getActivePage();
    if (!currentPage) return;
    var url = $(this).attr('href') != '' ? $(this).attr('href') : 'Popup';
    sendGoogleAnalyticBannerClickedEvent(currentPage, url);
});

//google tracking for popup banners
$(document).on('click', '#topBannerImage', function(e){
    var currentPage = getActivePage();
    if (!currentPage) return;
    var url = 'Popup';
    sendGoogleAnalyticBannerClickedEvent(currentPage, url);
});

//DWP-7871
//Desktop
var homePageBannerView = [];
$(document).on('click', '#homepage-banner #slider > a',  function(e){
	var currentPage = getActivePage();
	if (!currentPage || currentPage != 'Accueil') return;
	var bannerPosition = $('#slider').data('nivo:vars').currentSlide + 1;
	gaTrack('c._trackEvent', 'Home-page slider', 'Desktop-click', bannerPosition, 1);
});
$(document).on('nivoSliderChanged nivoSliderLoaded', '#homepage-banner #slider', function(e){
	var currentPage = getActivePage();
	if (!currentPage || currentPage != 'Accueil') return;
	if ($(document).scrollTop() > 500) return;
	var bannerPosition = $('#slider').data('nivo:vars').currentSlide + 1;
	if($.inArray(bannerPosition, homePageBannerView) < 0){
		homePageBannerView.push(bannerPosition);
		gaTrack('c._trackEvent', 'Home-page slider', 'Desktop-view', bannerPosition, 1);
	}
});

//Mobile
$(document).on('click', '#mobileSlider #mobileSlider2 > a', function(e){
	var currentPage = getActivePage();
	if (!currentPage || currentPage != 'Accueil') return;
	var bannerPosition = $('#mobileSlider2').data('nivo:vars').currentSlide + 1;
	gaTrack('c._trackEvent', 'Home-page slider', 'Mobile-click', bannerPosition, 1);
});
$(document).on('nivoSliderChanged nivoSliderLoaded', '#mobileSlider #mobileSlider2', function(e){
	var currentPage = getActivePage();
	if (!currentPage || currentPage != 'Accueil') return;
	if ($(document).scrollTop() > 350) return;
	var bannerPosition = $('#mobileSlider2').data('nivo:vars').currentSlide + 1;
	if($.inArray(bannerPosition, homePageBannerView) < 0){
		homePageBannerView.push(bannerPosition);
		gaTrack('c._trackEvent', 'Home-page slider', 'Mobile-view', bannerPosition, 1);
	}
});

function thresholdPopup(){ //DWP-3861

	var get = getUrlVars();
	if($.cookie('popupShown')==null || typeof get.debug !='undefined'){
		showPopupWidget({doNotRedirect:true});
		$.cookie('popupShown',"1",{expires : 90 , path:"/"});
	}
}

$(document).on('ready',function(){
    var firstTime = true;
    $(window).on("scroll", function() {
        var scrollHeight = $(document).height();
        var scrollPosition = $(window).height() + $(window).scrollTop();
        if ((scrollHeight - scrollPosition) / scrollHeight < 0.05) {
        	if(firstTime){
        		firstTime = false;
                gaTrack('_trackEvent', 'Bottom of page reached', $('input[name="targetPage"]').val(), window.location.href, 1);
                gaTrack('b._trackEvent', 'Bottom of page reached', $('input[name="targetPage"]').val(), window.location.href, 1);
                gaTrack('c._trackEvent', 'Bottom of page reached', $('input[name="targetPage"]').val(), window.location.href, 1);
            }
        }
    });


	$('.embed-container-youtube').parent('.wrapper').removeClass('wrapper'); // hack for home page youtube full width

	var promoTopBtn =  $('.promoTopBtn:visible');
	if($('#headerPromoFloatButtonInBody').length==0 && promoTopBtn.length>0){
		var addedClass = $(promoTopBtn).hasClass('dealerLineButton') ? 'dealerLineButton' : '';
		$('body').append('<div id="floatPromoTopBtnContainer"><div class="promoTopBtn '+addedClass+'" style="z-index:999999;display:none;box-shadow: 0 4px 2px -2px #ccc;top:0;margin-top:-5px;position: fixed; width: 100%; " id="floatPromoTopBtn">'+$(promoTopBtn).html()+'</div></div>');
		var floatPromoTopBtn=  $('#floatPromoTopBtn');
		var promoTopBtnPosTop =  $(promoTopBtn).position().top;

		$( window ).on('scroll',function() {
			var scroll = $(window).scrollTop();
			if(scroll>=promoTopBtnPosTop){
				$(floatPromoTopBtn).show();
			}else{
				$(floatPromoTopBtn).hide();
			}

            fixed = floatPromoTopBtn.is(':visible');

            var $pullout = $('.pullouts.side_top:visible');
            if( fixed && $pullout.length > 0 ){
                $pullout.filter('.pullout-opened').css({
                    top: floatPromoTopBtn.height()+'px'
                });
                $pullout.filter('.pullout-closed').each(function(){
                    var $this = $(this);
                    var widget = get_pow($this.attr('id'));
                    ( !$this.data('posY') && $this.data('posY', -widget.position ));

                    var ntop = $this.data('posY') + floatPromoTopBtn.height();
                    $this.css({
                        top: ntop+'px'
                    });
                });
            } else {
                var menuHeight = $('.topnav').height() + $('#promoTopBtn').height();
                $pullout.filter('.pullout-opened').css({
                    top: 0
                });
                if( $pullout.filter('.pullout-closed').data('posY') ){
                    $pullout.filter('.pullout-closed').each(function(){
                        $(this).css({
                            top: $(this).data('posY') + 'px'
                        });
                    });
                }
            }
		});
	}

	if($('#isBrandPage').length){
        var urlParams = getUrlVars();
        if(urlParams['kw'] && urlParams['kw'].toLowerCase().indexOf('canada') != -1){
        	var currentLang = $('#activesitelanguage') && $('#activesitelanguage').val() == 'ENGLISH' ? 'en' : 'fr';
        	var titleBanner = currentLang == 'en' ? 'Here we offer the best prices' : 'Ici on offre les meilleurs prix';
        	var textBanner = currentLang == 'en' ? 'on '+$('#isBrandPage').val()+'\'s in Canada' : $('#isBrandPage').val()+' au Canada';
            $('#defaultTopBannerTitle').text(titleBanner);
            $('#defaultTopBannerText').text(textBanner);
        }
	}

	//Change tradesii z-index to hide when a popup is open
	if($('.tradesii-root').text().length > 0){
        $('.tradesii-root').css('z-index', 1000);
    } else {
		setTimeout(function(){
            $('.tradesii-root').css('z-index', 1000);
		}, 1000)
	}
});

/**
 * Generate a google static map
 * Pass in a json object containing google static map params
 * or set params as an attribute (ex. data-zoom="10")
 * https://developers.google.com/maps/documentation/static-maps/intro
 *
 * To use:
 *
 *(html)
 * <img id="myImg" src="blank.png" data-lat="33.333" data-long="44.4444"/>
 *
 * (js)
 *
 * $('#myImg').googleStaticMap();
 *
 * To call public a method use this syntax: $('#myImg').googleStaticMap('methodName', optionalArgs);
 *
 * public methods:
 * getUrl  = return a google url for the static img based on settings
 * destroy = remove the plugin from the element
 *
 * @author Paul Windsor
 */
(function($) {

	var defaults = {
		lat: '',
		long: '',
		postal: '',
		ratio: 0.6885,
		width: 'auto' //auto = calculates the parents width
	};

	function StaticMap( element, options ) {

		var self = this;
		self.el = element;
		self.$el = $(element);
		if (options === undefined || typeof options === 'object') {
			self.settings = $.extend(defaults, options);
    }
		self.init();
	}

	/*
		To Create private methods append _ to the function name (ex. _myPrivateFunction: function() {... } )
	 */

	StaticMap.prototype = {

		init: function() {
			var attr = this.$el.is('.lazyload') ? 'data-src' : 'src';
			this.$el.attr(attr, this.getUrl());
		},

		isVisible: function() {
			var width = this.$el.attr('width');
			var height = this.$el.attr('height');

			return !(height === '0px' || width === '0px');
		},

		getWidth: function() {
			this.$el.attr('width');
			var width = 0;

			if (this.settings.width === 'auto' || this.$el.data('width') === 'auto') {
				//Get the parents width
				width = this.$el.parent().css('width');
			}
			else {
				if (!isNaN(parseInt(this.settings.width))) {
					width = this.settings.width;
				}
				else if (this.$el.attr('width') !== undefined) {
					width = this.$el.attr('width');
				}
			}

			//set width attribute on element
			this.$el.attr('width', width);

			return parseInt(width.replace('px', ''));
		},

		getHeight: function() {
			var height = 0;

			if (this.settings.width === 'auto' || this.$el.data('width') === 'auto') {
				//Get the parents width
				height = Math.round(this.getWidth() * this.settings.ratio) + 'px';
			}
			else {
				height = this.$el.parent().css('height');
			}

			//set width attribute on element
			this.$el.attr('height', height);

			return parseInt(height.replace('px', ''));
		},

		getUrl: function() {
            var data = getDataAttributes(this.el);
			var width = this.getWidth();
			var height = this.getHeight();

			var latLong = data.lat + ',' + data.long;

			var icon = data.hasOwnProperty('markerIcon') ? 'icon:' + data.markerIcon + '|' : '';
            var markers = icon + latLong;

			data = $.extend({
				size: width + 'x' + height,
				center: latLong,
				zoom: '12',
				markers: markers
			}, data);

            return 'https://maps.googleapis.com/maps/api/staticmap?' + $.param(data);
        },

		destroy: function() {
			this.$el.removeData();
		}

	};

	$.fn.googleStaticMap = function ( options ) {
		var args = arguments;

		if( this.length < 1 ){
			return this;
		}

		this.each(function() {
				// Creates a new plugin instance, for each selected element, and
				// stores a reference withint the element's data
				if (!$.data(this, 'plugin_staticMap')) {
					$.data(this, 'plugin_staticMap', new StaticMap(this, options));
					return this;
				}
		});

		if (typeof options === 'string' && options[0] !== '_' && options !== 'init') {
			if( this.length > 1 ){
				console.log('googleStaticMap warning code 1');
			}
			var instance = $.data(this.first()[0], 'plugin_staticMap');
			return instance[options].apply(instance, Array.prototype.slice.call(args, 1));
		}else{
			return this;
		}
	}

}( jQuery ));

/* Functions */
function parseQuery( str ){
	if( str.length < 1 ) return {}
	var vars = {}, v;
	var qs = str.split('&');
	for( var i=0; i < qs.length; i++){
		v = explode( qs[i], '=', 1);
		vars[v[0]] = v[1];
	}
	return vars;
}

function decodeString(string,times)
{
	if(times == "" || times == "undefined")
	{
		times = 1;
	}
	for(i=0;i<times;i++)
	{
		string = decodeURIComponent(string);
	}
	return string;
}


function explode(str, separator, limit) {
	str = str.split(separator);
	if(str.length <= limit) return str;
	var ret = str.splice(0, limit);
	ret.push(str.join(separator));
	return ret;
}

function getUrlVars()
{
	var qs = (window.location.search).substring(1);
	return parseQuery( qs );
}

function getCookie(c_name)
{
	try{
		var regex = new RegExp('\\b'+c_name+'=([^;]+);');
		var cMatch = (document.cookie+'').match(regex);
		if( cMatch == null ){
			return null;
		}
		return unescape( cMatch[1] );
	}catch( e ){
		console.log( e.getMessage() );
		return null;
	}
}

function setCookie(c_name,value,exdays)
{
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString()) + "; path=/";
	document.cookie=c_name + "=" + c_value ;
}

function setSessionCookie(c_name,value)
{
	var exdays = null;
	var c_value=escape(value) + ";expires=0;path=/";
	document.cookie=c_name + "=" + c_value ;
}

/* LiveChat Custom Params */
function initLCI(params, n){
	if( n > 20 ) return n;
	var n = (n) ? n : 0;
	if(typeof LC_API == 'undefined' || typeof LC_Invite == 'undefined' ){
		setTimeout( function(){ initLCI(params, ++n); },500 );
		return;
	}
	if( typeof LC_API != 'undefined' && typeof LC_Invite != 'undefined' && params ){
		return LC_API.set_custom_variables(params);
	}
}

function getReferrerVarFunction(referer){
	return function() {
		if( '' == referer ) referer = document.referrer;
		var qs, qsindex = referer.indexOf('?')+1;
		if( qsindex > 0) {
			var qs = referer.slice( qsindex );
			return parseQuery( qs );
		}
		return {}
	}
}

/**
 * Google Places Loader
 * @author Paul Windsor
 */
(function($) {

	var scriptLoader = {
		callbacks: [],
		hasScript: function() {
			//find script
			var script = $('head script[src*="maps.js.php"]');

			//Script there?
			if (script.length == 0) {
				return false;
			}
			//Check if it has places
			else {
				return /maps\.js/.test(script.attr('src'));
			}

			return true;
		},
		load: function(cb) {

			if (!scriptLoader.hasScript()) {
				scriptLoader.callbacks.push(cb);
				try{
					var curLang = $('#activesitelanguage').val() == 'ENGLISH' ? 'en' : 'fr';
					(function(w,d,t,g,r){
						if( w[r] ) return;
						var e = d.createElement(t),m = d.getElementsByTagName(t)[0];
						e.src=g;
						e.async=false;

						e.addEventListener('load', function(event) {
							//call all registered callbacks when the script has finished loading in
							if (document.readyState === 'complete') {
								for(var i = 0;i < scriptLoader.callbacks.length;i++){
									scriptLoader.callbacks[i].call();
								}
							}
						});

						//e.onload = cb;
						m.parentNode.insertBefore(e,m)
					})(window,document,'script','/js/maps.js.php?lang='+curLang, 'google');
				} catch( e ){
					console.log( e );
				}
			}
			else {
				if (typeof google === 'undefined') {
					//register callback for when script finally loads
					scriptLoader.callbacks.push(cb);
				}
				else {
					//script exists, so just execute callback
					cb();
				}
			}
		}
	};

	var defaults = {
		googleOptions: {
			componentRestrictions: {country: 'ca'}
		},
		circle: {
			radius: 100000 //100 kilometers
		}
	};

	//Now we can create the places plugin
	var Places = function(element, options) {
		var self = this;
		self.el = element;
		self.$el = $(element);
		self.settings = $.extend(defaults, options);
		self.address = {
			city: '',
			street_number: '',
			street: '',
			sublocality: '',
			province: '',
			country: '',
			postal: ''
		};

		// don't init until the box is focused.
		self.$el.one('focus', function(){
			self.init();
		});
	}

	Places.prototype = {

		/**
		 * Checks to see if maps script is loaded, if not, then loads it
		 * @private
		 */
		_checkForGoogleMaps: function(cb) {
			if (typeof google === 'undefined') {
				//Add script to page
				scriptLoader.load(cb);
			} else {
				if( typeof cb === 'function' )
				{
					cb.call();
				}
			}
		},

		/**
		 * Returns an array with address information
		 * @returns array
		 */
		getAddress: function() {
			return this.address;
		},

		/**
		 * @param place Google place address_components
		 * @private
		 */
		_setAddress: function(addressComponents) {
			var self = this;

			$.each(addressComponents, function(key, val) {

				switch (true) {
					case ($.inArray('street_number', val.types) > -1):
						self.address.street_number = val;
						break;
					case ($.inArray('route', val.types) > -1):
						self.address.street = val;
						break;
					case ($.inArray('sublocality', val.types) > -1):
						self.address.sublocality = val;
						break;
					case ($.inArray('locality', val.types) > -1):
						self.address.city = val;
						break;
					case ($.inArray('administrative_area_level_1', val.types) > -1):
						self.address.province = val;
						break;
					case ($.inArray('country', val.types) > -1):
						self.address.country = val;
						break;
					case ($.inArray('postal_code', val.types) > -1):
						self.address.postal = val;
						break;
				}

			});

		},

		init: function() {
			var self = this;

			self._checkForGoogleMaps(function() {

				var geocoder = new google.maps.Geocoder();
				var autoComplete = new google.maps.places.Autocomplete(self.el, self.settings.autoComplete);

				//Set the area for autocomplete to START looking (addresses can still go outside of bounds)
				//The starting area will be around the dealers address
				if (typeof footerMapAddress !== 'undefined' && footerMapAddress.length > 0) {
					geocoder.geocode({'address': footerMapAddress[0].address}, function(result, status) {
						var geoLocation = new google.maps.LatLng(result[0].geometry.location.lat(), result[0].geometry.location.lng());
						var circle = new google.maps.Circle({
							center: geoLocation,
							radius: self.settings.circle.radius
						});

						autoComplete.setBounds(circle.getBounds());
					});
				}

				google.maps.event.addListener(autoComplete, 'place_changed', function() {
					var place = autoComplete.getPlace();
					self._setAddress(place.address_components);
					self.$el.val(place.formatted_address); //set input to a fully qualified address
					//Manually triggering input event so vue.js is able to update the model associated to the element
					var event = new Event('input');
					self.el.dispatchEvent(event);
					self.$el.trigger('focus');
				});

			});
		},

	};

	$.fn.googlePlaces = function ( options ) {
		var args = arguments;

		if (options === undefined || typeof options === 'object') {
			// Creates a new plugin instance, for each selected element, and
			// stores a reference withint the element's data
			return this.each(function() {
				if (!$.data(this, 'plugin_places')) {
					$.data(this, 'plugin_places', new Places(this, options));
				}
			});
		} else if (typeof options === 'string' && options[0] !== '_' && options !== 'init') {
			var instance = $.data(this[0], 'plugin_places');
			return instance[options].apply(instance, Array.prototype.slice.call(args, 1));
		}
	}

})( jQuery );

function showBannerPopup(target){

	try
	{
		if($(target).hasClass('tradeinLink') &&
			(target.getAttribute('targetURI').indexOf('tradeinvalues')>0
				|| target.getAttribute('targetURI').indexOf('instantoffer.accu-trade.com')>0
			)
		){
			showTradeInPopup(target.getAttribute('targetURI'));
			return;
		}

		if($("#bannerPopupContainer").length>0){
			$("#bannerPopupContainer").popupize().setTrigger("click").open();
		}
	}catch(ex)
	{
		if (console && console.log) console.log("Unable to display tradeinvalues iframe. Error: " + ex.message);
	}
}


$(function() {
	//Now load all inputs with places plugin
	if($('input[data-google-places="true"]').length>0){
		$('input[data-google-places="true"]').googlePlaces();
	}

	if (typeof $.fn.darkTooltip !== 'undefined') {
		$('#social_media_icons_div a, .gRating-icon').darkTooltip({ gravity: 'north', opacity: 1 });
		$('.social-media-icons [data-tooltip]').darkTooltip({ gravity: 'south', opacity: 1 });

		$("#mitsubishiCertifiedFooter a.social-media__icon, #hyundaiCertifiedFooter a.social-media__icon")
			.darkTooltip({ gravity: "south", opacity: 1 });
	}

	//DWP-4818 Hides this box when its empty (wasn't sure of a good place to put this, but resides on new/used VDP)
	var phoneDetails = $('.graybox.usedDetailsPhone, .graybox.newDetailsPhone');
	if (phoneDetails.children().length === 0 && phoneDetails.text().trim().length === 0) {
		phoneDetails.hide();
	}
});


/**
 * Lior ---
 *
Polyfill to adda noD2CReplace method
to all objects. Does nothing
except tell the compiler to not
replace any variables on JS LINE

I've REMOVED the polyfill due to conflicts with google maps
Use noD2CReplace in your JS and the compiler will ignore
that line of code but only after removing your noD2CReplace()
method


if (!Object.prototype.noD2CReplace){
	Object.prototype.noD2CReplace = function(){
		return this;
	}
}

*/


/* execute popupizer */
$(window).on('load', function(){
    try{
        var promoParam = getParameterByName('promo');
        if (promoParam) {
            var popupDiv = (activatedPopupDivID.length > 0) ? activatedPopupDivID : false;
            if(popupDiv && popupDiv.length > 0) {
                var currentPopup = $("#" + popupDiv).popupize({
                    priority : 100,
                    endPopupQueue : true
                });
                popupSupervisor.register(currentPopup);
            }
        }

        if(typeof popupSupervisor =='object'){
            //Added delay, otherwise there was a race condition between the popups calling popupSupervisor.register and the popupSupervisor.show call
            setTimeout(
                popupSupervisor.show,
                500
            )

        }
    }catch( ex ){
        console.log( ex );
    }
});


//Logging menu clicks - TEXT and URL
$(function() {
    $('#nav a').on('click', function(event){
        if ( typeof activeUserProfileMng != 'undefined' && typeof activeUserProfileMng.logPageViewEvent != 'undefined') {
            var clickedUrl = $(this).attr('href');
            if (clickedUrl) {
                activeUserProfileMng.logPageViewEvent(clickedUrl, 'MENU_clicked_URL');
            }
            var aElementText = clickedUrl == '/' ? 'Home' : $(this).text();
            if (aElementText) {
                activeUserProfileMng.logPageViewEvent(aElementText, 'MENU_clicked_INFO');
            }
        }
	});
});

//price formatter and round numbers
var D2CUtils = {
	Lang: {
		isEN: function(){
			return !(typeof $ === 'function' && $('BODY').hasClass('FRENCH'));
		}
	},
	Format: {
		toNumber: function(s){
			var x = s.toString().split('.');
			var rgx = /(\d+)(\d{3})/;
			while (rgx.test(x[0])) {
				x[0] = x[0].replace(rgx, '$1' + ',' + '$2');
			}
			return x[0];
		},
		toPrice: function(s){
			return (Math.round(s) === 0) ? '' : D2CUtils.Lang.isEN() ? '$' + D2CUtils.Format.toNumber(s) : D2CUtils.Format.toNumber(s) + ' $';
		}
	},
	Number: {
		roundDown: function (n) {
			var r = (arguments.length === 2) ? parseInt(arguments[1]) : 1; //rounded
			return Math.floor(n / r) * r;
		},
		roundUp: function (n) {
			var r = (arguments.length === 2) ? parseInt(arguments[1]) : 1; //rounded
			return Math.ceil(n / r) * r;
		}
	},
	Arrays: {
		find: function(a, k, v) {
			var len = a.length;
			if(len > 0){
				for(var i = 0; i < len; i++){
					if (a[i][k] == v) {
						return a[i];
					}
				}
			}
			return -1;
		}

	},
};

/**
 * Changes elements href to special link
 * @param element
 * @param vehicle
 */
function setupFinancingLink(element, vehicle) {

	var siteID = $('#siteID').val() || $('#topsiteid').val();

	//DWP-4647
	//When its a clearance vehicle and a specific site, use that dealers custom financing link from the menu
	if (siteID == 485 && vehicle.clearance) {
		var financeBtn = element;

		if (financeBtn.length > 0) {
			var customFinanceLink = $('#MainMenu_f482baab-aac4-eda6-6b52-3 > a');

			//Not there? Maybe we are in mobile, menu is laid out differently
			if (customFinanceLink.length == 0) {
				customFinanceLink = $('.CLEARANCE').parent().find('.submenuItem:first-child');
			}

			if (customFinanceLink.length > 0) {
				var link = customFinanceLink.attr('href');
				if (link !== '') {
					financeBtn.attr('href', link);
				}
			}
		}
	}
}

//Override window.open and store collections
var openWindows = [];
var windowOpenOG = window.open;
/**
 * Override window.open function to allow us to get reference that window
 * when a third party triggers winow.open
 */
window.open = function() {
	var win = windowOpenOG.apply(this, arguments);
	var context = {window: win, args: arguments};
	openWindows.push(context); //collect

	//trigger
	if (typeof jQuery !== 'undefined') {
		jQuery(document).trigger('window.open', context);
	}

	return win;
}

$(function() {
	/**
	 * Find carproof's open window so we can manipulate the size of it
	 */
	$(document).on('window.open', function(e, context) {
		var args = context.args;
		var carfax = false;

		//Look for carfax url
		for (var i = 0; i < args.length; i++) {
			if (args[i].indexOf('carfax') > -1 || args[i].indexOf('carproof')) {
				carfax = true;
				break;
			}
		}

		//Carfax window was found, now change the size of it DWP-4937
		if (carfax) {
			var height = window.screen.availHeight || window.innerHeight
				|| document.documentElement.clientHeight
				|| document.body.clientHeight;

			//Set the height of the window.open to 95% of screen height, but keep the same width that was set
			try {
				context.window.resizeTo(context.window.outerWidth, Math.round(height * 0.95));
			}catch(e){
				//sometimes it can comes from an amp-iframe
			}
		}

	});
});

$(function() {

	//The min amount of space (in px) that should be between menu and side btn
	var SPACING = 75;

	/**
	 * Moves the promo btn to always be under the menu
	 */
	var movePromoBtn = function() {

		//Get dimensions of menu
		var menu = $('.up_menu');
		var menuOffset = menu.offset();
		var menuBottom = menuOffset.top + menu.outerHeight();

		//If menu is outside of viewport adjust where 'bottom' is (top of view port)
		if (menuBottom < $(document).scrollTop()) {
			menuBottom = $(document).scrollTop();
		}

		//get promo btn info
		var siteBtnParent = $('#promotionSideVButton');
		var sideBtn = $('.promotionSideBtnA');
		var sideBtnOffset = sideBtn.offset();
		//because sideBtn is rotated
		var sideBtnDelta = siteBtnParent.offset().top - sideBtnOffset.top;

		siteBtnParent.css({
			top: ((menuBottom + SPACING + sideBtnDelta) - $(document).scrollTop()) + 'px'
		});

		//Move text-us btn to fit under promo btn
		var $textUs = $('#slideit > label[for="open-item"]');
		var sideBtnBottom = sideBtn.offset().top + sideBtn.outerWidth(); //because its rotated (width will get us height here)
		$textUs.css({
			top: (sideBtnBottom + 1) - $(document).scrollTop() + 'px'
		});

	};

	//Really only care if the promotions btn is there
	var eventTimeout = null;
	var execMove = function() {
		if ($('#promotionSideVButton').length > 0 && eventTimeout === null) {
			eventTimeout = setTimeout(function () {
				movePromoBtn();
				eventTimeout = null;
			});
		}
	};

	$(window).on('resize', execMove);
	$(window).on('scroll', execMove);

	//Initial move
	if ($('#promotionSideVButton').length > 0) {
		setTimeout(movePromoBtn, 1000);
	}

});

function replaceUsedVehicleModelDisplay(string){
    if (typeof string === 'string' || string instanceof String){
        if(!(typeof $ === 'function' && $('BODY').hasClass('FRENCH'))){
            if(string.indexOf('Hybride') !== -1){
                string = string.replace('Hybride', 'Hybrid');
            }
        }
    }

    return string;
}

$(function() {
	if($('.paypal_button_html').length){
		var lang = $('BODY').hasClass('FRENCH') ? 'fr' : 'en';
		var CTAText = $('BODY').hasClass('FRENCH') ? 'Réservez-le avec PayPal !' : 'Reserve it  with PayPal !';
		$('.paypal_button_html').find('input[type="image"][name="submit"]').attr('src','/images/continue_with_paypal_'+lang+'.png');
		$('.paypal_button_html').find('form').attr('target', 'paypalIframe');
		$('.paypal_button_html').find('table tr:first td').contents().filter(function(){ return this.nodeType == 3 }).first().replaceWith(CTAText);
		$('.paypal_button_html form').find('[name="item_name"]').remove();
		$('.paypal_button_html form').find('[name="item_number"]').remove();
		var item_name = '<input type="hidden" name="item_name" value="'+$('#phonemake').val()+' '+$('#phonemodel').val()+' '+$('#phonemyear').val()+' Stock(#'+$('#phonestocknumber').val()+')">';
		$('.paypal_button_html form').append(item_name);

        $('.paypal_button_html').find('input[type="image"][name="submit"]').on('click', function(){
            gaTrack('c._trackEvent', 'Cliques PayPal', 'Occasion', $('#hiddenDealerName').val()+'-'+$('#phonemake').val()+'-'+$('#phonemodel').val()+'-'+$('#phonemyear').val()+'-'+$('#phonestocknumber').val(), 1);
		});

		$('#paypalPopup').detach().appendTo('body');

        $('.paypal_button_html input[name="submit"]').on('click', function(){
        	$('#paypalPopup').popupize().setTrigger('click').open();
		});

        $('.paypal_button_html').show();
	}

	if($('#testDriveType').length){
		if($('#testDriveType').val() == 'Virtual' || $('#testDriveType').val() == 'Virtuel'){
			$('.preferedVirtualTool').show();
		}
	}
});

function pageViewCountGoogleEvent(){
    var path = window.location.pathname;
    var sessionStorageID = 'VDPMV-'+path;
    var viewCount = sessionStorage.getItem(sessionStorageID);
    var newViewCount = viewCount == null ? 1 : parseInt(viewCount) + 1;
    var department = $('#newSectionOverride').val() == '1' ? 'NEW' : $('#defaultDepartment').val();
    if(viewCount == null){
        gaTrack('c._trackEvent', 'VDP multiple views', department, '1x', 1);
    } else if(viewCount == 1){
        gaTrack('c._trackEvent', 'VDP multiple views', department, '2x', 1);
    } else {
        gaTrack('c._trackEvent', 'VDP multiple views', department, '3x+', 1);
    }

    sessionStorage.setItem(sessionStorageID, newViewCount);
}

$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
};

function setPopupOpenOnClick(){
	$("[data-popupid]").each(function(){
		var popupid = $(this).attr('data-popupid');
		$(this).on('click tap', function(e){
			e.preventDefault();
			$('#'+popupid).popupize().setTrigger('click').open();
		});
	});
}

function addDealerInsideScript(){
	if($('.dealer-inside-cta-action-box').length){
		var idDealer = $('.dealer-inside-cta-action-box').attr('data-idDealer');
		var lang = $('.dealer-inside-cta-action-box').attr('data-lang');
		var buttonType = $('.dealer-inside-cta-action-box').attr('data-button-type');
		var fileref=document.createElement('script');
		fileref.setAttribute("type","text/javascript");
		fileref.setAttribute("src","https://dealerinsideapp.com/widgets/dealer_inside_call.js?dealerId="+idDealer+"&lang="+lang+"&buttonType="+buttonType);
		document.getElementsByTagName("head")[0].appendChild(fileref);
		//$("head").append("<script type='text/javascript' src='https://dealerinsideapp.com/widgets/dealer_inside_call.js'></script>")
	}
}

$(function() {
    setPopupOpenOnClick();
    addDealerInsideScript();
});

function motoinsightShopGoogleOptimize(){
	if($('#js-motoinsightShopPopupContainer-input').length && $('.js-motoinsightShopPopupContainer').length){
		$('.js-motoinsightShopPopupContainer').attr('data-motoinsightshopiframeurl', $('#js-motoinsightShopPopupContainer-input').val());
	}
}

//DWP-7754
if(!$.cookie('outdatedBrowserShown')){
	//Set cookie now + 30 minutes
	var date = new Date();
	var minutes = 30;
	date.setTime(date.getTime() + (minutes * 60 * 1000));
	$.cookie('outdatedBrowserShown', '1', { expires: date, path: '/' });

	setTimeout(function(){
		if(typeof outdatedBrowser === "function"){
			outdatedBrowser({
				bgColor: '#e60000',
				color: '#ffffff',
				lowerThan: 'Edge',
				languagePath: ''
			});
		}
	}, 5000);
};
/** /js/lazysizes.min.js **/
var ___d2c_lazysizesminjs_c_on="2020-08-05 14:16:58";/*! lazysizes - v4.1.5 */
!function(a,b){var c=b(a,a.document);a.lazySizes=c,"object"==typeof module&&module.exports&&(module.exports=c)}(window,function(a,b){"use strict";if(b.getElementsByClassName){var c,d,e=b.documentElement,f=a.Date,g=a.HTMLPictureElement,h="addEventListener",i="getAttribute",j=a[h],k=a.setTimeout,l=a.requestAnimationFrame||k,m=a.requestIdleCallback,n=/^picture$/i,o=["load","error","lazyincluded","_lazyloaded"],p={},q=Array.prototype.forEach,r=function(a,b){return p[b]||(p[b]=new RegExp("(\\s|^)"+b+"(\\s|$)")),p[b].test(a[i]("class")||"")&&p[b]},s=function(a,b){r(a,b)||a.setAttribute("class",(a[i]("class")||"").trim()+" "+b)},t=function(a,b){var c;(c=r(a,b))&&a.setAttribute("class",(a[i]("class")||"").replace(c," "))},u=function(a,b,c){var d=c?h:"removeEventListener";c&&u(a,b),o.forEach(function(c){a[d](c,b)})},v=function(a,d,e,f,g){var h=b.createEvent("Event");return e||(e={}),e.instance=c,h.initEvent(d,!f,!g),h.detail=e,a.dispatchEvent(h),h},w=function(b,c){var e;!g&&(e=a.picturefill||d.pf)?(c&&c.src&&!b[i]("srcset")&&b.setAttribute("srcset",c.src),e({reevaluate:!0,elements:[b]})):c&&c.src&&(b.src=c.src)},x=function(a,b){return(getComputedStyle(a,null)||{})[b]},y=function(a,b,c){for(c=c||a.offsetWidth;c<d.minSize&&b&&!a._lazysizesWidth;)c=b.offsetWidth,b=b.parentNode;return c},z=function(){var a,c,d=[],e=[],f=d,g=function(){var b=f;for(f=d.length?e:d,a=!0,c=!1;b.length;)b.shift()();a=!1},h=function(d,e){a&&!e?d.apply(this,arguments):(f.push(d),c||(c=!0,(b.hidden?k:l)(g)))};return h._lsFlush=g,h}(),A=function(a,b){return b?function(){z(a)}:function(){var b=this,c=arguments;z(function(){a.apply(b,c)})}},B=function(a){var b,c=0,e=d.throttleDelay,g=d.ricTimeout,h=function(){b=!1,c=f.now(),a()},i=m&&g>49?function(){m(h,{timeout:g}),g!==d.ricTimeout&&(g=d.ricTimeout)}:A(function(){k(h)},!0);return function(a){var d;(a=!0===a)&&(g=33),b||(b=!0,d=e-(f.now()-c),d<0&&(d=0),a||d<9?i():k(i,d))}},C=function(a){var b,c,d=99,e=function(){b=null,a()},g=function(){var a=f.now()-c;a<d?k(g,d-a):(m||e)(e)};return function(){c=f.now(),b||(b=k(g,d))}};!function(){var b,c={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:!0,expFactor:1.5,hFac:.8,loadMode:2,loadHidden:!0,ricTimeout:0,throttleDelay:125};d=a.lazySizesConfig||a.lazysizesConfig||{};for(b in c)b in d||(d[b]=c[b]);a.lazySizesConfig=d,k(function(){d.init&&F()})}();var D=function(){var g,l,m,o,p,y,D,F,G,H,I,J,K,L,M=/^img$/i,N=/^iframe$/i,O="onscroll"in a&&!/(gle|ing)bot/.test(navigator.userAgent),P=0,Q=0,R=0,S=-1,T=function(a){R--,a&&a.target&&u(a.target,T),(!a||R<0||!a.target)&&(R=0)},U=function(a,c){var d,f=a,g="hidden"==x(b.body,"visibility")||"hidden"!=x(a.parentNode,"visibility")&&"hidden"!=x(a,"visibility");for(F-=c,I+=c,G-=c,H+=c;g&&(f=f.offsetParent)&&f!=b.body&&f!=e;)(g=(x(f,"opacity")||1)>0)&&"visible"!=x(f,"overflow")&&(d=f.getBoundingClientRect(),g=H>d.left&&G<d.right&&I>d.top-1&&F<d.bottom+1);return g},V=function(){var a,f,h,j,k,m,n,p,q,r=c.elements;if((o=d.loadMode)&&R<8&&(a=r.length)){f=0,S++,null==K&&("expand"in d||(d.expand=e.clientHeight>500&&e.clientWidth>500?500:370),J=d.expand,K=J*d.expFactor),Q<K&&R<1&&S>2&&o>2&&!b.hidden?(Q=K,S=0):Q=o>1&&S>1&&R<6?J:P;for(;f<a;f++)if(r[f]&&!r[f]._lazyRace)if(O)if((p=r[f][i]("data-expand"))&&(m=1*p)||(m=Q),q!==m&&(y=innerWidth+m*L,D=innerHeight+m,n=-1*m,q=m),h=r[f].getBoundingClientRect(),(I=h.bottom)>=n&&(F=h.top)<=D&&(H=h.right)>=n*L&&(G=h.left)<=y&&(I||H||G||F)&&(d.loadHidden||"hidden"!=x(r[f],"visibility"))&&(l&&R<3&&!p&&(o<3||S<4)||U(r[f],m))){if(ba(r[f]),k=!0,R>9)break}else!k&&l&&!j&&R<4&&S<4&&o>2&&(g[0]||d.preloadAfterLoad)&&(g[0]||!p&&(I||H||G||F||"auto"!=r[f][i](d.sizesAttr)))&&(j=g[0]||r[f]);else ba(r[f]);j&&!k&&ba(j)}},W=B(V),X=function(a){s(a.target,d.loadedClass),t(a.target,d.loadingClass),u(a.target,Z),v(a.target,"lazyloaded")},Y=A(X),Z=function(a){Y({target:a.target})},$=function(a,b){try{a.contentWindow.location.replace(b)}catch(c){a.src=b}},_=function(a){var b,c=a[i](d.srcsetAttr);(b=d.customMedia[a[i]("data-media")||a[i]("media")])&&a.setAttribute("media",b),c&&a.setAttribute("srcset",c)},aa=A(function(a,b,c,e,f){var g,h,j,l,o,p;(o=v(a,"lazybeforeunveil",b)).defaultPrevented||(e&&(c?s(a,d.autosizesClass):a.setAttribute("sizes",e)),h=a[i](d.srcsetAttr),g=a[i](d.srcAttr),f&&(j=a.parentNode,l=j&&n.test(j.nodeName||"")),p=b.firesLoad||"src"in a&&(h||g||l),o={target:a},p&&(u(a,T,!0),clearTimeout(m),m=k(T,2500),s(a,d.loadingClass),u(a,Z,!0)),l&&q.call(j.getElementsByTagName("source"),_),h?a.setAttribute("srcset",h):g&&!l&&(N.test(a.nodeName)?$(a,g):a.src=g),f&&(h||l)&&w(a,{src:g})),a._lazyRace&&delete a._lazyRace,t(a,d.lazyClass),z(function(){(!p||a.complete&&a.naturalWidth>1)&&(p?T(o):R--,X(o))},!0)}),ba=function(a){var b,c=M.test(a.nodeName),e=c&&(a[i](d.sizesAttr)||a[i]("sizes")),f="auto"==e;(!f&&l||!c||!a[i]("src")&&!a.srcset||a.complete||r(a,d.errorClass)||!r(a,d.lazyClass))&&(b=v(a,"lazyunveilread").detail,f&&E.updateElem(a,!0,a.offsetWidth),a._lazyRace=!0,R++,aa(a,b,f,e,c))},ca=function(){if(!l){if(f.now()-p<999)return void k(ca,999);var a=C(function(){d.loadMode=3,W()});l=!0,d.loadMode=3,W(),j("scroll",function(){3==d.loadMode&&(d.loadMode=2),a()},!0)}};return{_:function(){p=f.now(),c.elements=b.getElementsByClassName(d.lazyClass),g=b.getElementsByClassName(d.lazyClass+" "+d.preloadClass),L=d.hFac,j("scroll",W,!0),j("resize",W,!0),a.MutationObserver?new MutationObserver(W).observe(e,{childList:!0,subtree:!0,attributes:!0}):(e[h]("DOMNodeInserted",W,!0),e[h]("DOMAttrModified",W,!0),setInterval(W,999)),j("hashchange",W,!0),["focus","mouseover","click","load","transitionend","animationend","webkitAnimationEnd"].forEach(function(a){b[h](a,W,!0)}),/d$|^c/.test(b.readyState)?ca():(j("load",ca),b[h]("DOMContentLoaded",W),k(ca,2e4)),c.elements.length?(V(),z._lsFlush()):W()},checkElems:W,unveil:ba}}(),E=function(){var a,c=A(function(a,b,c,d){var e,f,g;if(a._lazysizesWidth=d,d+="px",a.setAttribute("sizes",d),n.test(b.nodeName||""))for(e=b.getElementsByTagName("source"),f=0,g=e.length;f<g;f++)e[f].setAttribute("sizes",d);c.detail.dataAttr||w(a,c.detail)}),e=function(a,b,d){var e,f=a.parentNode;f&&(d=y(a,f,d),e=v(a,"lazybeforesizes",{width:d,dataAttr:!!b}),e.defaultPrevented||(d=e.detail.width)&&d!==a._lazysizesWidth&&c(a,f,e,d))},f=function(){var b,c=a.length;if(c)for(b=0;b<c;b++)e(a[b])},g=C(f);return{_:function(){a=b.getElementsByClassName(d.autosizesClass),j("resize",g)},checkElems:g,updateElem:e}}(),F=function(){F.i||(F.i=!0,E._(),D._())};return c={cfg:d,autoSizer:E,loader:D,init:F,uP:w,aC:s,rC:t,hC:r,fire:v,gW:y,rAF:z}}});
/** /js/jquery.maskedinput.js **/
var ___d2c_jquerymaskedinputjs_c_on="2020-08-05 14:09:53";(function(a){var x=(a.browser.msie?"paste":"input")+".mask",y=void 0!=window.orientation;a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},dataName:"rawMaskFn"};a.fn.extend({caret:function(d,e){if(0!=this.length){if("number"==typeof d)return e="number"==typeof e?e:d,this.each(function(){if(this.setSelectionRange)this.setSelectionRange(d,e);else if(this.createTextRange){var g=this.createTextRange();g.collapse(!0);g.moveEnd("character",e);g.moveStart("character",d);g.select()}});if(this[0].setSelectionRange)d=
this[0].selectionStart,e=this[0].selectionEnd;else if(document.selection&&document.selection.createRange){var a=document.selection.createRange();d=0-a.duplicate().moveStart("character",-1E5);e=d+a.text.length}return{begin:d,end:e}}},unmask:function(){return this.trigger("unmask")},mask:function(d,e){if(!d&&0<this.length)return a(this[0]).data(a.mask.dataName)();e=a.extend({placeholder:"_",completed:null},e);var t=a.mask.definitions,g=[],h=d.length,p=null,l=d.length;a.each(d.split(""),function(e,a){"?"==
a?(l--,h=e):t[a]?(g.push(new RegExp(t[a])),null==p&&(p=g.length-1)):g.push(null)});return this.trigger("unmask").each(function(){function n(c){for(var r=f.val(),b=-1,a=0,d=0;a<l;a++)if(g[a]){for(k[a]=e.placeholder;d++<r.length;){var m=r.charAt(d-1);if(g[a].test(m)){k[a]=m;b=a;break}}if(d>r.length)break}else k[a]==r.charAt(d)&&a!=h&&(d++,b=a);if(!c&&b+1<h)f.val(""),u(0,l);else if(c||b+1>=h)q(),c||f.val(f.val().substring(0,b+1));return h?a:p}function q(){return f.val(k.join("")).val()}function u(c,
a){for(var b=c;b<a&&b<l;b++)g[b]&&(k[b]=e.placeholder)}function z(c){var a=c.which,b=f.caret();if(c.ctrlKey||c.altKey||c.metaKey||32>a)return!0;if(a){0!=b.end-b.begin&&(u(b.begin,b.end),w(b.begin,b.end-1));c=m(b.begin-1);if(c<l&&(a=String.fromCharCode(a),g[c].test(a))){for(var b=c,d=e.placeholder;b<l;b++)if(g[b]){var h=m(b),n=k[b];k[b]=d;if(h<l&&g[h].test(n))d=n;else break}k[c]=a;q();c=m(c);f.caret(c);e.completed&&c>=l&&e.completed.call(f)}return!1}}function A(c){c=c.which;if(8==c||46==c||y&&127==
c){var a=f.caret(),b=a.begin,a=a.end;if(0==a-b){if(46!=c)for(;0<=--b&&!g[b];);else b=a=m(b-1);a=46==c?m(a):a}u(b,a);w(b,a-1);return!1}if(27==c)return f.val(v),f.caret(0,n()),!1}function w(a,d){if(!(0>a)){for(var b=a,h=m(d);b<l;b++)if(g[b]){if(h<l&&g[b].test(k[h]))k[b]=k[h],k[h]=e.placeholder;else break;h=m(h)}q();f.caret(Math.max(p,a))}}function m(a){for(;++a<=l&&!g[a];);return a}var f=a(this),k=a.map(d.split(""),function(a,d){if("?"!=a)return t[a]?e.placeholder:a}),v=f.val();f.data(a.mask.dataName,
function(){return a.map(k,function(a,d){return g[d]&&a!=e.placeholder?a:null}).join("")});f.attr("readonly")||f.one("unmask",function(){f.unbind(".mask").removeData(a.mask.dataName)}).bind("focus.mask",function(){v=f.val();var c=n();q();var e=function(){c==d.length?f.caret(0,c):f.caret(c)};(a.browser.msie?e:function(){setTimeout(e,0)})()}).bind("blur.mask",function(){n();f.val()!=v&&f.change()}).bind("keydown.mask",A).bind("keypress.mask",z).bind(x,function(){setTimeout(function(){f.caret(n(!0))},
0)});n()})}})})(jQuery);jQuery(function(){$.extend($.mask.definitions,{N:"[2-9]","~":"[0-2]","!":"[0-5]",D:"[0-9.]",S:"[ ]",d:"[0-3]",m:"[0-1]",y:"[1-2]"})});
/** /js/jquery.fancybox-1.3.4.pack.js **/
var ___d2c_jqueryfancybox134packjs_c_on="2020-08-05 14:13:22";var $jscomp={scope:{},findInternal:function(a,h,k){a instanceof String&&(a=String(a));for(var m=a.length,f=0;f<m;f++){var y=a[f];if(h.call(k,y,f,a))return{i:f,v:y}}return{i:-1,v:void 0}}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(a,h,k){if(k.get||k.set)throw new TypeError("ES3 does not support getters and setters.");a!=Array.prototype&&a!=Object.prototype&&(a[h]=k.value)};
$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global?global:a};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(a,h,k,m){if(h){k=$jscomp.global;a=a.split(".");for(m=0;m<a.length-1;m++){var f=a[m];f in k||(k[f]={});k=k[f]}a=a[a.length-1];m=k[a];h=h(m);h!=m&&null!=h&&$jscomp.defineProperty(k,a,{configurable:!0,writable:!0,value:h})}};
$jscomp.polyfill("Array.prototype.find",function(a){return a?a:function(a,k){return $jscomp.findInternal(this,a,k).v}},"es6-impl","es3");
(function(a){var h,k,m,f,y,p,D,q,A,B,u=0,c={},r=[],t=0,b={},g=[],F=null,w=new Image,H=/\.(jpg|gif|png|bmp|jpeg)(.*)?$/i,S=/[^\.]\.(swf)\s*$/i,I,J=1,z=0,x="",v,l,n=!1,C=a.extend(a("<div/>")[0],{prop:0}),K=a.browser.msie&&7>a.browser.version&&!window.XMLHttpRequest,L=function(){k.hide();w.onerror=w.onload=null;F&&F.abort();h.empty()},M=function(){!1===c.onError(r,u,c)?(k.hide(),n=!1):(c.titleShow=!1,c.width="auto",c.height="auto",h.html('<p id="fancybox-error">The requested content cannot be loaded.<br />Please try again later.</p>'),
E())},G=function(){var e=r[u],d,b,f,l,m,g;L();c=a.extend({},a.fn.fancybox.defaults,"undefined"==typeof a(e).data("fancybox")?c:a(e).data("fancybox"));g=c.onStart(r,u,c);if(!1===g)n=!1;else{"object"==typeof g&&(c=a.extend(c,g));f=c.title||(e.nodeName?a(e).attr("title"):e.title)||"";e.nodeName&&!c.orig&&(c.orig=a(e).children("img:first").length?a(e).children("img:first"):a(e));""===f&&c.orig&&c.titleFromAlt&&(f=c.orig.attr("alt"));d=c.href||(e.nodeName?a(e).attr("href"):e.href)||null;if(/^(?:javascript)/i.test(d)||
"#"==d)d=null;c.type?(b=c.type,d||(d=c.content)):c.content?b="html":d&&(b=d.match(H)?"image":d.match(S)?"swf":a(e).hasClass("iframe")?"iframe":0===d.indexOf("#")?"inline":"ajax");if(b)switch("inline"==b&&(e=d.substr(d.indexOf("#")),b=0<a(e).length?"inline":"ajax"),c.type=b,c.href=d,c.title=f,c.autoDimensions&&("html"==c.type||"inline"==c.type||"ajax"==c.type?(c.width="auto",c.height="auto"):c.autoDimensions=!1),c.modal&&(c.overlayShow=!0,c.hideOnOverlayClick=!1,c.hideOnContentClick=!1,c.enableEscapeButton=
!1,c.showCloseButton=!1),c.padding=parseInt(c.padding,10),c.margin=parseInt(c.margin,10),h.css("padding",c.padding+c.margin),a(".fancybox-inline-tmp").unbind("fancybox-cancel").bind("fancybox-change",function(){a(this).replaceWith(p.children())}),b){case "html":h.html(c.content);E();break;case "inline":if(!0===a(e).parent().is("#fancybox-content")){n=!1;break}a('<div class="fancybox-inline-tmp" />').hide().insertBefore(a(e)).bind("fancybox-cleanup",function(){a(this).replaceWith(p.children())}).bind("fancybox-cancel",
function(){a(this).replaceWith(h.children())});a(e).appendTo(h);E();break;case "image":n=!1;a.fancybox.showActivity();w=new Image;w.onerror=function(){M()};w.onload=function(){n=!0;w.onerror=w.onload=null;c.width=w.width;c.height=w.height;a("<img />").attr({id:"fancybox-img",src:w.src,alt:c.title}).appendTo(h);N()};w.src=d;break;case "swf":c.scrolling="no";l='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="'+c.width+'" height="'+c.height+'"><param name="movie" value="'+d+'"></param>';
m="";a.each(c.swf,function(a,e){l+='<param name="'+a+'" value="'+e+'"></param>';m+=" "+a+'="'+e+'"'});l+='<embed src="'+d+'" type="application/x-shockwave-flash" width="'+c.width+'" height="'+c.height+'"'+m+"></embed></object>";h.html(l);E();break;case "ajax":n=!1;a.fancybox.showActivity();c.ajax.win=c.ajax.success;F=a.ajax(a.extend({},c.ajax,{url:d,data:c.ajax.data||{},error:function(a){0<a.status&&M()},success:function(a,e,b){if(200==("object"==typeof b?b:F).status){if("function"==typeof c.ajax.win){g=
c.ajax.win(d,a,e,b);if(!1===g){k.hide();return}if("string"==typeof g||"object"==typeof g)a=g}h.html(a);E()}}}));break;case "iframe":N()}else M()}},E=function(){var e=c.width,b=c.height,e=-1<e.toString().indexOf("%")?parseInt((a(window).width()-2*c.margin)*parseFloat(e)/100,10)+"px":"auto"==e?"auto":e+"px",b=-1<b.toString().indexOf("%")?parseInt((a(window).height()-2*c.margin)*parseFloat(b)/100,10)+"px":"auto"==b?"auto":b+"px";h.wrapInner('<div style="width:'+e+";height:"+b+";overflow: "+("auto"==
c.scrolling?"auto":"yes"==c.scrolling?"scroll":"hidden")+';position:relative;"></div>');c.width=h.width();c.height=h.height();N()},N=function(){var e,d;k.hide();if(f.is(":visible")&&!1===b.onCleanup(g,t,b))a.event.trigger("fancybox-cancel"),n=!1;else{n=!0;a(p.add(m)).unbind();a(window).unbind("resize.fb scroll.fb");a(document).unbind("keydown.fb");f.is(":visible")&&"outside"!==b.titlePosition&&f.css("height",f.height());g=r;t=u;b=c;b.overlayShow?(m.css({"background-color":b.overlayColor,opacity:b.overlayOpacity,
cursor:b.hideOnOverlayClick?"pointer":"auto",height:a(document).height()}),m.is(":visible")||(K&&a("select:not(#fancybox-tmp select)").filter(function(){return"hidden"!==this.style.visibility}).css({visibility:"hidden"}).one("fancybox-cleanup",function(){this.style.visibility="inherit"}),m.show())):m.hide();l=T();x=b.title||"";z=0;q.empty().removeAttr("style").removeClass();if(!1!==b.titleShow&&(x=e=a.isFunction(b.titleFormat)?b.titleFormat(x,g,t,b):x&&x.length?"float"==b.titlePosition?'<table id="fancybox-title-float-wrap" cellpadding="0" cellspacing="0"><tr><td id="fancybox-title-float-left"></td><td id="fancybox-title-float-main">'+
x+'</td><td id="fancybox-title-float-right"></td></tr></table>':'<div id="fancybox-title-'+b.titlePosition+'">'+x+"</div>":!1)&&""!==x)switch(q.addClass("fancybox-title-"+b.titlePosition).html(x).appendTo("body").show(),b.titlePosition){case "inside":q.css({width:l.width-2*b.padding,marginLeft:b.padding,marginRight:b.padding});z=q.outerHeight(!0);q.appendTo(y);l.height+=z;break;case "over":q.css({marginLeft:b.padding,width:l.width-2*b.padding,bottom:b.padding}).appendTo(y);break;case "float":q.css("left",
-1*parseInt((q.width()-l.width-40)/2,10)).appendTo(f);break;default:q.css({width:l.width-2*b.padding,paddingLeft:b.padding,paddingRight:b.padding}).appendTo(f)}q.hide();f.is(":visible")?(a(D.add(A).add(B)).hide(),e=f.position(),v={top:e.top,left:e.left,width:f.width(),height:f.height()},d=v.width==l.width&&v.height==l.height,p.fadeTo(b.changeFade,.3,function(){var e=function(){p.html(h.contents()).fadeTo(b.changeFade,1,O)};a.event.trigger("fancybox-change");p.empty().removeAttr("filter").css({"border-width":b.padding,
width:l.width-2*b.padding,height:c.autoDimensions?"auto":l.height-z-2*b.padding});d?e():(C.prop=0,a(C).animate({prop:1},{duration:b.changeSpeed,easing:b.easingChange,step:P,complete:e}))})):(f.removeAttr("style"),p.css("border-width",b.padding),"elastic"==b.transitionIn?(v=R(),p.html(h.contents()),f.show(),b.opacity&&(l.opacity=0),C.prop=0,a(C).animate({prop:1},{duration:b.speedIn,easing:b.easingIn,step:P,complete:O})):("inside"==b.titlePosition&&0<z&&q.show(),p.css({width:l.width-2*b.padding,height:c.autoDimensions?
"auto":l.height-z-2*b.padding}).html(h.contents()),f.css(l).fadeIn("none"==b.transitionIn?0:b.speedIn,O)))}},U=function(){(b.enableEscapeButton||b.enableKeyboardNav)&&a(document).bind("keydown.fb",function(e){27==e.keyCode&&b.enableEscapeButton?(e.preventDefault(),a.fancybox.close()):37!=e.keyCode&&39!=e.keyCode||!b.enableKeyboardNav||"INPUT"===e.target.tagName||"TEXTAREA"===e.target.tagName||"SELECT"===e.target.tagName||(e.preventDefault(),a.fancybox[37==e.keyCode?"prev":"next"]())});b.showNavArrows?
((b.cyclic&&1<g.length||0!==t)&&A.show(),(b.cyclic&&1<g.length||t!=g.length-1)&&B.show()):(A.hide(),B.hide())},O=function(){a.support.opacity||(p.get(0).style.removeAttribute("filter"),f.get(0).style.removeAttribute("filter"));c.autoDimensions&&p.css("height","auto");f.css("height","auto");x&&x.length&&q.show();b.showCloseButton&&D.show();U();b.hideOnContentClick&&p.bind("click",a.fancybox.close);b.hideOnOverlayClick&&m.bind("click",a.fancybox.close);a(window).bind("resize.fb",a.fancybox.resize);
b.centerOnScroll&&a(window).bind("scroll.fb",a.fancybox.center);"iframe"==b.type&&a('<iframe id="fancybox-frame" name="fancybox-frame'+(new Date).getTime()+'" frameborder="0" hspace="0" '+(a.browser.msie?'allowtransparency="true""':"")+' scrolling="'+c.scrolling+'" src="'+b.href+'"></iframe>').appendTo(p);f.show();n=!1;a.fancybox.center();b.onComplete(g,t,b);var e,d;g.length-1>t&&(e=g[t+1].href,"undefined"!==typeof e&&e.match(H)&&(d=new Image,d.src=e));0<t&&(e=g[t-1].href,"undefined"!==typeof e&&
e.match(H)&&(d=new Image,d.src=e))},P=function(a){var d={width:parseInt(v.width+(l.width-v.width)*a,10),height:parseInt(v.height+(l.height-v.height)*a,10),top:parseInt(v.top+(l.top-v.top)*a,10),left:parseInt(v.left+(l.left-v.left)*a,10)};"undefined"!==typeof l.opacity&&(d.opacity=.5>a?.5:a);f.css(d);p.css({width:d.width-2*b.padding,height:d.height-z*a-2*b.padding})},Q=function(){return[a(window).width()-2*b.margin,a(window).height()-2*b.margin,a(document).scrollLeft()+b.margin,a(document).scrollTop()+
b.margin]},T=function(){var a=Q(),d={},f=b.autoScale,g=2*b.padding;d.width=-1<b.width.toString().indexOf("%")?parseInt(a[0]*parseFloat(b.width)/100,10):b.width+g;d.height=-1<b.height.toString().indexOf("%")?parseInt(a[1]*parseFloat(b.height)/100,10):b.height+g;f&&(d.width>a[0]||d.height>a[1])&&("image"==c.type||"swf"==c.type?(f=b.width/b.height,d.width>a[0]&&(d.width=a[0],d.height=parseInt((d.width-g)/f+g,10)),d.height>a[1]&&(d.height=a[1],d.width=parseInt((d.height-g)*f+g,10))):(d.width=Math.min(d.width,
a[0]),d.height=Math.min(d.height,a[1])));d.top=parseInt(Math.max(a[3]-20,a[3]+.5*(a[1]-d.height-40)),10);d.left=parseInt(Math.max(a[2]-20,a[2]+.5*(a[0]-d.width-40)),10);return d},R=function(){var e=c.orig?a(c.orig):!1,d;e&&e.length?(d=e.offset(),d.top+=parseInt(e.css("paddingTop"),10)||0,d.left+=parseInt(e.css("paddingLeft"),10)||0,d.top+=parseInt(e.css("border-top-width"),10)||0,d.left+=parseInt(e.css("border-left-width"),10)||0,d.width=e.width(),d.height=e.height(),d={width:d.width+2*b.padding,
height:d.height+2*b.padding,top:d.top-b.padding-20,left:d.left-b.padding-20}):(e=Q(),d={width:2*b.padding,height:2*b.padding,top:parseInt(e[3]+.5*e[1],10),left:parseInt(e[2]+.5*e[0],10)});return d},V=function(){k.is(":visible")?(a("div",k).css("top",-40*J+"px"),J=(J+1)%12):clearInterval(I)};a.fn.fancybox=function(b){if(!a(this).length)return this;a(this).data("fancybox",a.extend({},b,a.metadata?a(this).metadata():{})).unbind("click.fb").bind("click.fb",function(b){b.preventDefault();n||(n=!0,a(this).blur(),
r=[],u=0,(b=a(this).attr("rel")||"")&&""!=b&&"nofollow"!==b?(r=a("a[rel="+b+"], area[rel="+b+"]"),u=r.index(this)):r.push(this),G())});return this};a.fancybox=function(b,d){var c;if(!n){n=!0;c="undefined"!==typeof d?d:{};r=[];u=parseInt(c.index,10)||0;if(a.isArray(b)){for(var f=0,g=b.length;f<g;f++)"object"==typeof b[f]?a(b[f]).data("fancybox",a.extend({},c,b[f])):b[f]=a({}).data("fancybox",a.extend({content:b[f]},c));r=jQuery.merge(r,b)}else"object"==typeof b?a(b).data("fancybox",a.extend({},c,b)):
b=a({}).data("fancybox",a.extend({content:b},c)),r.push(b);if(u>r.length||0>u)u=0;G()}};a.fancybox.showActivity=function(){clearInterval(I);k.show();I=setInterval(V,66)};a.fancybox.hideActivity=function(){k.hide()};a.fancybox.next=function(){return a.fancybox.pos(t+1)};a.fancybox.prev=function(){return a.fancybox.pos(t-1)};a.fancybox.pos=function(a){n||(a=parseInt(a),r=g,-1<a&&a<g.length?(u=a,G()):b.cyclic&&1<g.length&&(u=a>=g.length?0:g.length-1,G()))};a.fancybox.cancel=function(){n||(n=!0,a.event.trigger("fancybox-cancel"),
L(),c.onCancel(r,u,c),n=!1)};a.fancybox.close=function(){function e(){m.fadeOut("fast");q.empty().hide();f.hide();a.event.trigger("fancybox-cleanup");p.empty();b.onClosed(g,t,b);g=c=[];t=u=0;b=c={};n=!1}if(!n&&!f.is(":hidden"))if(n=!0,b&&!1===b.onCleanup(g,t,b))n=!1;else if(L(),a(D.add(A).add(B)).hide(),a(p.add(m)).unbind(),a(window).unbind("resize.fb scroll.fb"),a(document).unbind("keydown.fb"),p.find("iframe").attr("src",K&&/^https/i.test(window.location.href||"")?"javascript:void(false)":"about:blank"),
"inside"!==b.titlePosition&&q.empty(),f.stop(),"elastic"==b.transitionOut){v=R();var d=f.position();l={top:d.top,left:d.left,width:f.width(),height:f.height()};b.opacity&&(l.opacity=1);q.empty().hide();C.prop=1;a(C).animate({prop:0},{duration:b.speedOut,easing:b.easingOut,step:P,complete:e})}else f.fadeOut("none"==b.transitionOut?0:b.speedOut,e)};a.fancybox.resize=function(){m.is(":visible")&&m.css("height",a(document).height());a.fancybox.center(!0)};a.fancybox.center=function(a){var d,c;n||(c=!0===
a?1:0,d=Q(),!c&&(f.width()>d[0]||f.height()>d[1])||f.stop().animate({top:parseInt(Math.max(d[3]-20,d[3]+.5*(d[1]-p.height()-40)-b.padding)),left:parseInt(Math.max(d[2]-20,d[2]+.5*(d[0]-p.width()-40)-b.padding))},"number"==typeof a?a:200))};a.fancybox.init=function(){a("#fancybox-wrap").length||(a("body").append(h=a('<div id="fancybox-tmp"></div>'),k=a('<div id="fancybox-loading"><div></div></div>'),m=a('<div id="fancybox-overlay"></div>'),f=a('<div id="fancybox-wrap"></div>')),y=a('<div id="fancybox-outer"></div>').append('<div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div>').appendTo(f),
y.append(p=a('<div id="fancybox-content"></div>'),D=a('<a id="fancybox-close"></a>'),q=a('<div id="fancybox-title"></div>'),A=a('<a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a>'),B=a('<a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a>')),D.click(a.fancybox.close),k.click(a.fancybox.cancel),A.click(function(b){b.preventDefault();a.fancybox.prev()}),B.click(function(b){b.preventDefault();a.fancybox.next()}),
a.fn.mousewheel&&f.bind("mousewheel.fb",function(b,c){if(n)b.preventDefault();else if(0==a(b.target).get(0).clientHeight||a(b.target).get(0).scrollHeight===a(b.target).get(0).clientHeight)b.preventDefault(),a.fancybox[0<c?"prev":"next"]()}),a.support.opacity||f.addClass("fancybox-ie"),K&&(k.addClass("fancybox-ie6"),f.addClass("fancybox-ie6"),a('<iframe id="fancybox-hide-sel-frame" src="'+(/^https/i.test(window.location.href||"")?"javascript:void(false)":"about:blank")+'" scrolling="no" border="0" frameborder="0" tabindex="-1"></iframe>').prependTo(y)))};
a.fn.fancybox.defaults={padding:10,margin:40,opacity:!1,modal:!1,cyclic:!1,scrolling:"auto",width:560,height:340,autoScale:!0,autoDimensions:!0,centerOnScroll:!1,ajax:{},swf:{wmode:"transparent"},hideOnOverlayClick:!0,hideOnContentClick:!1,overlayShow:!0,overlayOpacity:.7,overlayColor:"#777",titleShow:!0,titlePosition:"float",titleFormat:null,titleFromAlt:!1,transitionIn:"fade",transitionOut:"fade",speedIn:300,speedOut:300,changeSpeed:300,changeFade:"fast",easingIn:"swing",easingOut:"swing",showCloseButton:!0,
showNavArrows:!0,enableEscapeButton:!0,enableKeyboardNav:!0,onStart:function(){},onCancel:function(){},onComplete:function(){},onCleanup:function(){},onClosed:function(){},onError:function(){}};a(document).ready(function(){a.fancybox.init()})})(jQuery);
/** /js/jquery.watermarkinput.js **/
var ___d2c_jquerywatermarkinputjs_c_on="2020-08-05 14:14:42";(function(e){var b=[];e.Watermark={ShowAll:function(){for(var a=0;a<b.length;a++)""==b[a].obj.val()?(b[a].obj.val(b[a].text),b[a].obj.css("color",b[a].WatermarkColor)):b[a].obj.css("color",b[a].DefaultColor)},HideAll:function(){for(var a=0;a<b.length;a++)b[a].obj.val()==b[a].text&&b[a].obj.val("")}};e.fn.Watermark=function(a,d){d||(d="#aaa");return this.each(function(){function f(){0==c.val().length||c.val()==a?(c.val(a),c.css("color",d)):c.css("color",g)}var c=e(this),g=c.css("color");b[b.length]=
{text:a,obj:c,DefaultColor:g,WatermarkColor:d};c.focus(function(){c.val()==a&&c.val("");c.css("color",g)});c.blur(f);c.change(f);f()})}})(jQuery);
/** /js/emailHandler.js **/
/* eslint-disable no-undef */
var emailHandler = (function(){

	var recaptchaPassed = false;

	/**
	 * Chain of command object (use emailHanlder.getNewSequence() to create object
	 * @constructor
	 */
	var PopupSequence = function() {
		this.action = function() {};
		this.next = null;
		this._nextCalled = false;
	};

	PopupSequence.prototype = {
		/**
		 * Executes chain of command
		 */
		exeute: function() {
			if (typeof this.action === 'function') {
				this.action.call(this);
			}
		},
		/**
		 * Gotos next sequence if any
		 * @returns {PopupSequence}
		 */
		gotoNext: function() {
			if (this._hasNext()) this.next.exeute();
			this._nextCalled = true;
			return this;
		},
		/**
		 * Set the next sequence object
		 * @param next
		 * @returns {PopupSequence}
		 */
		setNext: function(next) {
			this.next = next;
			return this;
		},
		/**
		 * Sets what this sequence will do
		 * @param action
		 * @returns {PopupSequence}
		 */
		setAction: function(action) {
			this.action = action;
			return this;
		},
		_hasNext: function() {
			return (this.next !== null && !this._nextCalled);
		}
	};

	var emailHandler = {
		subject:  '',
		body: '',
		sendTo: '',
		sendToADFFormat: '',
		sendFrom: '',
		userEmail: '',
		tradein: '',
		popupdiv: '',
		userFirstName: '',
		userLastName: '',
		userPhone: '',
		phoneMandatory: 0,
		phoneValidationAttempts: 1,
		userPostal: '',
		address: '',
        birthdate: '',
		userAttachmentPath: '',
		mailID: 'genericMail',
		resetCallbacks: function(){
			var callbacks = {
				callback: null,
				onDuplicateSend: false,
				onAfterConsent: false,
				onBeforeShowConsent: false
			}
			$.extend(emailHandler, callbacks);
		},

		make: '',
		model: '',
		trim: '',
		vin: '',
		price: 0,
		year: 0,
		stockNumber: '',
		purchase_intent: '',
		purchase_intent_section: '',
		allow_share_personal_data:'',
		carid: 0,
		condition: 'Used',
		language: '',
		ismobilesite: 'NO',
		isAmp: 'NO',
		referer:'',
		popupOfferType:'',
		partial: false,
		fromFacebook: false,
		skipSending: false,
		fromOnLoad: false,
		postSubmitCallback:"",
		resumeActivity: true,
		submitData: "",
		submitType: "normal",
		lastChecksum: "",
		consentType: "Implicit",
		consentExpiration: "",
		consentDate: "",
		consentFrequency: -1,
		consentDetailsFR: "",
		consentDetailsEN: "",
		detailsDefaults: "",
		fromAA: 0,
		ownerID: 0,
		department: '',
		skipGetDep: false,
		departmentByStock: false, // false: no ajax -getJSON department by stock# called yet, '': called but not found, 'USED' or 'NEW': department was found by stock#
		askPurchaseIntent: false,
		leadTitleUIText: "",
		leadTitleText: "",
		geoloc_status: '',
		geoloc_lat: '',
		geoloc_long: '',
		geoloc_accuracy: -1,
		geoloc_track_str: '',
		geoloc_email_str: '',

		car2_make:'',
		car2_model:'',
		car2_trim:'',
		car2_year:'',
		car2_color:'',
		car2_odometer:'',
		car2_vin:'',
		car2_transmisson:'',
		car2_drivetrain:'',
		car2_fueltype:'',
		comments:'',
		grecaptchaResponseToken:'',
		ignoreCaptcha: false,
		contactID: 0,
		contactAddress:'',
		contactCity:'',
		contactProvince:'',
		contactZip:'',
		contactNAS:'',
		contactBirth:'',
		dealerName:'',
		/**
		 * Creates a new chain of command object
		 * @returns {PopupSequence}
		 */
		getNewSequence: function() {
			return new PopupSequence();
		},

		createChecksum: function() {
			var str = "";

			/* Check limited amount of keys */
			var keys = ['make','model','year','mailID'];
			for( var i = 0; i < keys.length; i++ ){
				var k = keys[i];
				var v = emailHandler[k];
				var t = ( typeof v );
				if (t == "string" || t == "number"){
					str += k + ":" + v + ";";
				}
			}

			var a_table = "00000000 77073096 EE0E612C 990951BA 076DC419 706AF48F E963A535 9E6495A3 0EDB8832 79DCB8A4 E0D5E91E 97D2D988 09B64C2B 7EB17CBD E7B82D07 90BF1D91 1DB71064 6AB020F2 F3B97148 84BE41DE 1ADAD47D 6DDDE4EB F4D4B551 83D385C7 136C9856 646BA8C0 FD62F97A 8A65C9EC 14015C4F 63066CD9 FA0F3D63 8D080DF5 3B6E20C8 4C69105E D56041E4 A2677172 3C03E4D1 4B04D447 D20D85FD A50AB56B 35B5A8FA 42B2986C DBBBC9D6 ACBCF940 32D86CE3 45DF5C75 DCD60DCF ABD13D59 26D930AC 51DE003A C8D75180 BFD06116 21B4F4B5 56B3C423 CFBA9599 B8BDA50F 2802B89E 5F058808 C60CD9B2 B10BE924 2F6F7C87 58684C11 C1611DAB B6662D3D 76DC4190 01DB7106 98D220BC EFD5102A 71B18589 06B6B51F 9FBFE4A5 E8B8D433 7807C9A2 0F00F934 9609A88E E10E9818 7F6A0DBB 086D3D2D 91646C97 E6635C01 6B6B51F4 1C6C6162 856530D8 F262004E 6C0695ED 1B01A57B 8208F4C1 F50FC457 65B0D9C6 12B7E950 8BBEB8EA FCB9887C 62DD1DDF 15DA2D49 8CD37CF3 FBD44C65 4DB26158 3AB551CE A3BC0074 D4BB30E2 4ADFA541 3DD895D7 A4D1C46D D3D6F4FB 4369E96A 346ED9FC AD678846 DA60B8D0 44042D73 33031DE5 AA0A4C5F DD0D7CC9 5005713C 270241AA BE0B1010 C90C2086 5768B525 206F85B3 B966D409 CE61E49F 5EDEF90E 29D9C998 B0D09822 C7D7A8B4 59B33D17 2EB40D81 B7BD5C3B C0BA6CAD EDB88320 9ABFB3B6 03B6E20C 74B1D29A EAD54739 9DD277AF 04DB2615 73DC1683 E3630B12 94643B84 0D6D6A3E 7A6A5AA8 E40ECF0B 9309FF9D 0A00AE27 7D079EB1 F00F9344 8708A3D2 1E01F268 6906C2FE F762575D 806567CB 196C3671 6E6B06E7 FED41B76 89D32BE0 10DA7A5A 67DD4ACC F9B9DF6F 8EBEEFF9 17B7BE43 60B08ED5 D6D6A3E8 A1D1937E 38D8C2C4 4FDFF252 D1BB67F1 A6BC5767 3FB506DD 48B2364B D80D2BDA AF0A1B4C 36034AF6 41047A60 DF60EFC3 A867DF55 316E8EEF 4669BE79 CB61B38C BC66831A 256FD2A0 5268E236 CC0C7795 BB0B4703 220216B9 5505262F C5BA3BBE B2BD0B28 2BB45A92 5CB36A04 C2D7FFA7 B5D0CF31 2CD99E8B 5BDEAE1D 9B64C2B0 EC63F226 756AA39C 026D930A 9C0906A9 EB0E363F 72076785 05005713 95BF4A82 E2B87A14 7BB12BAE 0CB61B38 92D28E9B E5D5BE0D 7CDCEFB7 0BDBDF21 86D3D2D4 F1D4E242 68DDB3F8 1FDA836E 81BE16CD F6B9265B 6FB077E1 18B74777 88085AE6 FF0F6A70 66063BCA 11010B5C 8F659EFF F862AE69 616BFFD3 166CCF45 A00AE278 D70DD2EE 4E048354 3903B3C2 A7672661 D06016F7 4969474D 3E6E77DB AED16A4A D9D65ADC 40DF0B66 37D83BF0 A9BCAE53 DEBB9EC5 47B2CF7F 30B5FFE9 BDBDF21C CABAC28A 53B39330 24B4A3A6 BAD03605 CDD70693 54DE5729 23D967BF B3667A2E C4614AB8 5D681B02 2A6F2B94 B40BBE37 C30C8EA1 5A05DF1B 2D02EF8D";
			var b_table = a_table.split(' ').map(function(s){ return parseInt(s,16) });

			var crc = crc ^ (-1);

			for(var i=0, iTop = str.length; i < iTop; i++)
				crc = ( crc >>> 8 ) ^ b_table[( crc ^ str.charCodeAt( i ) ) & 0xFF];

			return (crc ^ (-1)) >>> 0;
		},

		showConsent: function(skipSending, fromOnLoad) {
			//var tooRecent = emailHandler.getEmailConsent();
			emailHandler.getEmailConsent(function(data) {

				var sendToDealer = emailHandler.getNewSequence();
				var handleConsent = emailHandler.getNewSequence();

				/**
				 * Action asking which dealer to submit lead to
				 */

				sendToDealer.setAction(function() {
					var self = this;

					var modal = $('#multi-address-submission');
					var select = modal.find('select');
					var originalZIndex = 1112; //default value

					//Modal isnt there - imediately goto next action
					if (modal.length == 0) {
						return self.gotoNext();
					}

					//Don't show this on used VDP
					if ($('#targetPage').length > 0 && $('#targetPage').val() === 'CARDETAILS') {
						return self.gotoNext();
					}

					//Don't show when there IS a stock number present
					if (emailHandler.stockNumber !== '') {
						return self.gotoNext();
					}

					select.off('focus').on('focus', function() {
						select.removeClass('validity-erroneous');
					});

					var setEmailHandler = function(option) {
						var department = emailHandler.getDep();
						//var emailHandlerJson = emailHandler.getJsonObject();//Department isn't set at this point, and the getDep function is a subfunction in getJsonObject

						if (emailHandler.mailID !== "JobOffer") {
							var email 	 = "";
							var emailADF = "";

							switch (department) {
								case "USED":
									email 	 = option.data("emailused");
									emailADF = option.data("emailadfused");
									break;
								case "SERVICE":
									email 	 = option.data("emailservice");
									emailADF = option.data("emailadfservice");
									break;
							}

							emailHandler.sendTo    		 = email	|| option.data('email')		|| option.data("emailused");
							emailHandler.sendToADFFormat = emailADF	|| option.data('emailadf')	|| option.data("emailadfused");
						}

						//build message
						var emailStat = $('#postLeadLabel').val();

						if (typeof emailStat !== 'undefined') {
							emailStat = emailStat
								.replace('{$MULTIDEALERNAME}', option.text())
								.replace('{$POST_LEAD_EMAILS}', emailHandler.sendTo);

							emailHandler.body = emailHandler.body.replace('{$DEALER_SENDTO}', emailStat);
							emailHandler.dealerName = option.text();
						}
						else {
							emailHandler.body = emailHandler.body
								.replace(/<br\s?\/>{\$DEALER_SENDTO}(br\s?\/)?/, '')
								.replace('{$DEALER_SENDTO}', '');
						}
					};

					$('#mutliAddressSubmit').off('click').on('click', function() {
						//validate
						if (select.val() === '') {
							select.addClass('validity-erroneous');
							return;
						}

						var option = select.find(':selected');
						setEmailHandler(option);


						$('.reveal-modal-bg').css('z-index', originalZIndex); //reset blackout background z-index to what it was
						modal.trigger('reveal:close');
						self.gotoNext(); //goto next in sequence
					});

					//Filter brands based on make found (if any)
					if(emailHandler.make !== '') {
						var make = emailHandler.make.toLowerCase();
						var dealerWithBrand = false;
						var hasBrand = function(element) {
							if(element === make) dealerWithBrand = true;
							return element === make;
						};

						var amountHidden = 0;

						//Iterate through options hiding options that dont match vehicle make
						select.find('option[data-brands]').each(function(k,option) {
							var brands = $(option).data('brands').toLowerCase();

							if (brands === '') {
								$(option).hide();
								amountHidden++;
							}
							else {
								var brandsArray = brands.split(',');
								if(!brandsArray.some(hasBrand) && brands !== 'all') {
									$(option).hide();
									amountHidden++;
								}
							}

						});

						if(dealerWithBrand){
							select.find('option[data-brands="all"]').hide();
						}

						var amountVisible = 0;
						var visibleElement = null;
						//Check visiblity
						select.find('option[data-brands]').each(function(k,option) {
							if ($(option).css('display') !== 'none') {
								amountVisible++;
								visibleElement = $(option);
							}
						});

						//When there is only 1 option available - use that option to set emailHandler and move on
						if (amountVisible === 1 && visibleElement !== null) {
							setEmailHandler(visibleElement);
							return self.gotoNext();
						}

						//if no option is 'visible' show everything
						if(select.find('option[data-brands]').length === amountHidden) {
							select.find('option[data-brands]').show();
						}
					}

					modal.reveal({
						animation: 'fadeAndPop',
						animationspeed: 300,
						closeonbackgroundclick: false,
						dismissmodalclass: 'close-reveal-modal2',
						closeonescape: false
					});

					originalZIndex = $('.reveal-modal-bg').css('z-index');
					$('.reveal-modal-bg').css('z-index', '999995'); //set to just behind our modal
				});


				/**
				 * Action to handle consent
				 */
				handleConsent.setAction(function() {
					var self = this;
					if (skipSending == undefined) skipSending = false;
					if (fromOnLoad == undefined) fromOnLoad = false;
					var o = $("#asPopUp");
					var explicit = false;
					var complex = false;

					if( emailHandler.askPurchaseIntent == true && $('#asPurchaseIntent').length > 0 ){
						o = $('#asPurchaseIntent');
						complex = true;
					}

					if (o.length > 0) {
						var d = new Date();
						var consent = getCookie("visitor_has_explicit_consent");
						var last = parseInt(getCookie("visitor_has_seen_popup"), 10);
						if (isNaN(last)) last = 0;

						//This part is because of some bug flow. Like credit.js that emailHandler.sendMail twice for the same email. First one fail because
						//no siteID is set.
						//~ var tooRecent = false; //last + 60000 > d.getTime(); //more than 60 sec since last popup
						emailHandler.skipSending = skipSending;
						emailHandler.fromOnLoad = fromOnLoad;


						var tooRecent = !!(data.hasConsent);

						if (tooRecent) {

							switch (emailHandler.submitType) {
								case "instantRebate":
								case "scratch":
									realSubmitRebateCoupon();
									break;
								default:
									if (emailHandler.postSubmitCallback != "")
										eval(emailHandler.postSubmitCallback);
							}
							emailHandler.readyToSend();
						} else {
							switch(emailHandler.submitType) {
								case "scratch":
								case "instantRebate":
									closePopupWidget();
									break;
								default:
							};


							if( typeof emailHandler.onBeforeShowConsent == 'function' ){
								emailHandler.onBeforeShowConsent.call();
							}

							if( !complex ){

								/*gaTrack('b._trackEvent', 'Pages vues', 'Consentement-Popup', emailHandler.mailID, 1);
								gaTrack('_trackEvent', 'Pages vues', 'Consentement-Popup', emailHandler.mailID, 1);
								gaTrack('c._trackEvent', 'Pages vues', 'Consentement-Popup', emailHandler.mailID, 1);*/

								var oForm = $("form.jqtransform");

								if (typeof(oForm.jqTransform) == "function")
									oForm.jqTransform();

								var b1 = $("#emailConsentImplicit");
								var b2 = $("#emailConsentExplicit");

								if (b1.attr("readyClick") != "yes") {
									b1.attr("readyClick", "yes");
									b1.click(function() { emailHandler.submitConsent(false); });
									b2.click(function() { emailHandler.submitConsent(true); });
								}

							} else {
								/*gaTrack('b._trackEvent', 'Intentions achat', 'Popup vus',  emailHandler.mailID, 1 );
								gaTrack('_trackEvent', 'Intentions achat', 'Popup vus',  emailHandler.mailID, 1 );
								gaTrack('c._trackEvent', 'Intentions achat', 'Popup vus',  emailHandler.mailID, 1 );*/

								$('#emailConsentSubmit').on('click', function(){
									var fdata = {}
									o.find('form').serializeArray().map(function(a){
										fdata[a.name] = a.value;
									})


									$('#ALLOW_SHARE_PERSONAL_INFO').css({'border': 'none'});
									$('#ALLOW_SHARE_PERSONAL_INFO_TEXT_ERROR').hide();

									$('.stepConsent').css({'border': 'none'});

									if($('#ALLOW_SHARE_PERSONAL_INFO').is(":visible") == true && (!fdata['share_personal'] || fdata['share_personal']=='no')){
										$('#ALLOW_SHARE_PERSONAL_INFO').css({
											border: '1px solid red'
										});
										$('#ALLOW_SHARE_PERSONAL_INFO_TEXT_ERROR').show();
										return false;
									}

									if( !fdata['consent'] ){
										$('.stepConsent').css({
											border: '1px solid red'
										});
										return false;
									}

									if( fdata['purchase_intent'] ){
										$.cookie('purchase_intent', fdata['purchase_intent'] );
									}
									if( !fdata['purchase_intent'] ){
										fdata['purchase_intent'] = -1;
									}

									if( fdata['share_personal'] ){
										$.cookie('allow_share_personal_data', fdata['share_personal'] );
									}
									if( !fdata['share_personal'] ){
										fdata['share_personal'] = 'no';
									}

									emailHandler.purchase_intent = fdata['purchase_intent'];
									emailHandler.allow_share_personal_data = fdata['share_personal'];

									var consent = !(fdata['consent'] == '-1');
									emailHandler.submitConsent(consent, 'complex');

									return false;
								});
							}

							emailHandler.preSendImplicit();
							o.reveal(	{
								animation: 'fadeAndPop',
								animationspeed: 300,
								closeonbackgroundclick: false,
								dismissmodalclass: 'close-reveal-modal',
								closeonescape: false
							});

						}

					} else {

						if (emailHandler.consentDetailsEN == "" && (emailHandler.detailsDefaults["ENGLISH"] != undefined && emailHandler.detailsDefaults["FRENCH"] != undefined)) {
							if (explicit) {
								emailHandler.consentDetailsEN = emailHandler.detailsDefaults["ENGLISH"][1];
								emailHandler.consentDetailsFR = emailHandler.detailsDefaults["FRENCH"][1];
							} else {
								emailHandler.consentDetailsEN = emailHandler.detailsDefaults["ENGLISH"][2];
								emailHandler.consentDetailsFR = emailHandler.detailsDefaults["FRENCH"][2];
							}
						}

						if (!skipSending) emailHandler.readyToSend(); //if not found, same old behavior
						else realShowPopupWidget(fromOnLoad);
					}
				});

				sendToDealer
					.setNext(handleConsent)
					.exeute();
			});

		},

		hideConsent: function() {
			var o = $("#asPopUp:visible");
			if( emailHandler.askPurchaseIntent == true && $('#asPurchaseIntent').length > 0 ){
				o = $('#asPurchaseIntent:visible');
				complex = true;
			}
			if (o.length > 0)
				o.trigger('reveal:close');
		},

		saveConsent: function (explicit, img, doIProceed) {

			$('body').css('overflow', 'auto');
			emailHandler.hideConsent();
			//~ if (skipFlow == undefined) skipFlow = false;
			if (img == undefined) img = "";
			var days = (explicit ? 730 : 180);//180 days for implicit, 730 for explicit;

			var params = {	email: emailHandler.userEmail,
				first: emailHandler.userFirstName,
				last: emailHandler.userLastName,
				phone: emailHandler.userPhone,
				siteID: $("#siteID").val(),
				frequency: explicit ? 1 : -1,
				explicit: explicit ? 1 : 0,
				img: img,
				referer: document.referrer != undefined ? document.referrer : "",
				from: 'EH'
			};

			setCookie("visitor_frequency_preference", -1, days);
			setCookie("visitor_consent_preference", (explicit ? 'Explicit' : 'Implicit'), days);
			setCookie("visitor_has_explicit_consent", explicit ? "yes" : "no", days);
			//ui cookies
			setCookie("visitor_email_preference", params.email, 90);

			$.ajax({
					type: "POST",
					url: "/fr/php/track.email.preference.php",
					dataType: "json",
					data: params,

					complete: function(data) {

						var consentJson = JSON.parse(data.responseText);
						emailHandler.consentDetailsEN = btoa(consentJson.detailConsent["ENGLISH"]);
						emailHandler.consentDetailsFR = btoa(consentJson.detailConsent["FRENCH"]);
						emailHandler.postSaveConsent(explicit, doIProceed);
					}

			});

		},
		postSaveConsent: function(explicit, doIProceed) {
		//small tweak in case of new contact

			if (/*emailHandler.consentDetailsEN == "" &&*/ (emailHandler.detailsDefaults["ENGLISH"] != undefined && emailHandler.detailsDefaults["FRENCH"] != undefined)) {
					if (explicit) {
							emailHandler.consentDetailsEN = emailHandler.detailsDefaults["ENGLISH"][1];
							emailHandler.consentDetailsFR = emailHandler.detailsDefaults["FRENCH"][1];
					} else {
							emailHandler.consentDetailsEN = emailHandler.detailsDefaults["ENGLISH"][2];
							emailHandler.consentDetailsFR = emailHandler.detailsDefaults["FRENCH"][2];
					}
			}

			if (doIProceed) { //only have to send the email
				emailHandler.readyToSend();
				if( typeof emailHandler.onAfterConsent == 'function' ){
					emailHandler.onAfterConsent( explicit );
				}
			} else
				emailHandler.hideConsent();

		},

		submitConsent: function(explicit, mode) {
			var answer = explicit ? "Oui" : "Non";

			if (1) {
				if( mode && mode == 'complex' ){
					var PI = '';
					var eventCategory = '';

					if ( emailHandler.purchase_intent == -1 ) {
						PI = 'Pas de reponse';
						eventCategory = 'NO_ANSWER';
					} else {
						PI = emailHandler.purchase_intent;
					}

					if( PI.match(/30/) != null ){
						PI = "Moins de 30 jours";
						eventCategory = 'LT_30_DAYS';
					}else if( PI.match(/3/) != null ){
						PI = "Moins de 3 mois";
						eventCategory = 'LT_3_MONTHS';
					}else if( PI.match(/6/) != null ){
						if( PI.match(/plus|over|more/) != null ){
							PI = "Plus de 6 mois";
							eventCategory = 'GT_6_MONTHS';
						} else {
							PI = "Moins de 6 mois";
							eventCategory = 'LT_6_MONTHS';
						}
					}

					var act = 'Reponse - ' + ( (emailHandler.purchase_intent_section).toUpperCase() );

					emailHandler.logEvent( 'Intentions achat: '+PI, 'PURCHASE_INTENT_' + eventCategory );
					if( typeof debug !== 'undefined' ) debug( ['b._trackEvent', 'Intentions achat', act,  PI, 1 ] );

					/*gaTrack('b._trackEvent', 'Intentions achat', act,  PI, 1 );
					gaTrack('_trackEvent', 'Intentions achat', act, PI, 1 );
					gaTrack('c._trackEvent', 'Intentions achat', act, PI, 1 );*/
				} else{
					/*gaTrack('b._trackEvent', 'Pages vues', 'Consentement-Answers', answer, 1);
					gaTrack('_trackEvent', 'Pages vues', 'Consentement-Answers', answer, 1);
					gaTrack('c._trackEvent', 'Pages vues', 'Consentement-Answers', answer, 1);*/
				}
			}

			var doIProceed = true;
			/*
			 * Removed because leads were not being sent!
			 *
			var m = $("#mandatoryOptIn");
			if (m.length > 0 && m.val() == "1" && !explicit) //yes is mandatory
					doIProceed = false;
			*/
			if (doIProceed) {
				switch(emailHandler.submitType) {
					case "scratch":
					case "instantRebate":
						realSubmitRebateCoupon();
						break;

					default:
						if (emailHandler.postSubmitCallback != "")
							eval(emailHandler.postSubmitCallback);
				};
			}

			//in all cases
			if (emailHandler.submitType == "scratch") showPopupWidget(); //juste show back the scratch

			$("#lastConsentPop").val(explicit ? "Explicit" : "Implicit");

			var freq = getCookie("visitor_frequency_preference");
			var ctype = getCookie("visitor_consent_preference");

			var newConsent = explicit ? 'Explicit' : 'Implicit';
			var printscreenNeeded = ctype != newConsent || freq != -1; //something changed.. save printscreen

			//skip if browser is lower than IE9. Var lt_IE9 is defined in main.js
			if (printscreenNeeded && typeof(html2canvas) == "function" && !lt_IE9) {
				html2canvas(document.body, {
						onrendered: function(canvas) {
							var img = "";
							try {
								img = canvas.toDataURL("image/jpeg");
							} catch(e) {}
							//~ emailHandler.postSubmitConsent(explicit, img);
							emailHandler.saveConsent(explicit, img, doIProceed);
				}});
			} else
				emailHandler.saveConsent(explicit, "", doIProceed);
			//~ emailHandler.postSubmitConsent(explicit);
		},


        preSendChecks: function(skipByPass) {
            if (!skipByPass)
                emailHandler.showConsent();
            else
                emailHandler.readyToSend();
        },

		sendMail: function(skipByPass) {
			emailHandler.submitType = "normal"; //default behavior
			skipByPass = (typeof skipByPass != 'undefined' ? skipByPass : false);

			if ( !emailHandler.ignoreCaptcha ) {

				emailHandler.recaptcha.load();
				if (emailHandler.recaptcha.ask && typeof grecaptcha !== 'undefined' && !recaptchaPassed) {
					emailHandler.recaptcha.ask = false;
					if (emailHandler.recaptcha.widgetId > -1) {
						emailHandler.recaptcha.skipByPass = skipByPass;
						grecaptcha.execute(emailHandler.recaptcha.widgetId);
						return;
					}
				}
				emailHandler.recaptcha.ask = true;
			}

			if(typeof $('#onLeadSubmitGeoloc').val() != 'undefined' && $('#onLeadSubmitGeoloc').val() == 1 && typeof geoLocator != 'undefined' && !emailHandler.skipGeoLoc){

				var geolocCallback = function(geolocResult){

					emailHandler.geoloc_status = geolocResult.geoloc_status;

					if(geolocResult.result == 1){

						emailHandler.geoloc_lat = geolocResult.latitude;
						emailHandler.geoloc_long = geolocResult.longitude;
						emailHandler.geoloc_accuracy = geolocResult.accuracy;
						emailHandler.geoloc_track_str = geolocResult.geocode_address;
						emailHandler.geoloc_email_str = geolocResult.geocode_address_str;

						//Adding geolocation info to email body
						if(emailHandler.body.indexOf('##GEOLOCATION##') == -1){
							emailHandler.body = $.trim(emailHandler.body).replace(/<br>&nbsp;/g, '<br>') + '##GEOLOCATION##';
						}

						//record user's location in UUID session
						if(typeof activeUserProfileMng != 'undefined' && typeof activeUserProfileMng.logPageViewEvent != 'undefined'){
							activeUserProfileMng.logPageViewEvent('POSTAL_CODE',geolocResult.geocode_address_str);
						}

					}

					if(typeof($('#leadSent').val()) == 'undefined'){
				    var leadSent = $('<input>').attr({id: 'leadSent', type: 'hidden'}).val(1);
				    $('#footerDiv').append(leadSent);
						emailHandler.preSendChecks(skipByPass);
				  }

				}


				var geoLocationObj = new geoLocator(geolocCallback);
				geoLocationObj.trackLocationGA = true;
				geoLocationObj.getLocation();

			} else {
				emailHandler.preSendChecks(skipByPass);
			}
		},

		/**
		* User emails get sent differently
		* they queued, verified for validity and only if identified
		* as authentic get transmitted
		*
		* data => ['emailid' => string,
		* 				 'emailto' => string, // user email
		* 				 'dealerEmail' = string, // dealer email
		* 					'..' => string/int // list of replacement values
		*
		*/
		sendUserEmail: function(skipByPass, data)
		{

			sendToData = {};
			var emailid = '';
			var emailto = '';
			var dealerEmail = '';
			var dealerPhone = '';
			for (i in data)
			{
				if (typeof i == 'string')
				{
					switch (i.toLowerCase())
					{
						case 'emailto':
							emailto = data[i];
							break;
						case 'emailid':
							emailid = data[i];
							break;
						case 'dealeremail':
							dealerEmail = data[i];
							break;
						case 'dealerphone':
							dealerPhone = data[i];
							break;
						default:
							sendToData[i] = data[i];
							break;

					}
				}
			}

			var postArray =
			{

				vars : JSON.stringify( sendToData ),
				siteid : $("#topsiteid").val(),
				language : $("#activesitelanguage").val(),
				'emailid': emailid,
				'emailto': emailto, // user email
				'dealerEmail': dealerEmail, // dealer email
				'dealerPhone': dealerPhone, // dealer phone
				sourceURI : window.location.href

			}

			$.ajax({
				type: "POST",
				url: '/fr/php/addMailToSend.php',
				data: postArray
			});

		},

		getStockNumber: function() {
			if (emailHandler.stockNumber){
				return emailHandler.stockNumber;
			}

			/*var stockNumber = emailHandler.stockNumber;

			//if no stock number, try searchvehidle
			if (stockNumber == "") {
				var o = $("#searchedVehicle");
				if (o.length > 0) {
					var car = o.val();
					var pos = car.indexOf("(Stock");

					if (pos > -1) {
						car = car.substr(pos+7);
						pos = car.indexOf(")");

						if (pos > -1)
							stockNumber = car.substr(0, pos).trim();
					}
				}
			}

			//still now stocknumber, look through pages
			if (stockNumber == "") {
				var searchedvehicles = $('input[name="searchedvehicle"]');
				searchedvehicles.each(function() {
					if ($(this).val()) {
						var tmp = $(this).val();
						var pos = tmp.indexOf("(Stock");

						if (pos > 1)  {
							tmp = tmp.substr(pos + 7);
							pos = tmp.indexOf(")");

							if (pos > -1)
								stockNumber = tmp.substr(0, pos).trim();
						}
					}
				});
			}
			*/
			function formatStockNum(stockNumber) {
				if (stockNumber.length>2) {
					var pos = stockNumber.indexOf("(Stock");

					if (pos > -1) {
						stockNumber = stockNumber.substr(pos+7);
						pos = stockNumber.indexOf(")");
						if (pos > -1)
							stockNumber = stockNumber.substr(0, pos).trim();
					}
					stockNumber += ""; //to string
				}	else{
					stockNumber='';
				}

				return stockNumber;
			}

			var stockNumber = '';
			if($('#lastviewedstocknumber').length > 0){
				stockNumber = formatStockNum( $('#lastviewedstocknumber').val() );
			}
			else {
				//See if if its in there is a stock number in the url
				stockNumber = getParameterByName('stockno') || '';
			}

			return stockNumber.trim();
		},

		getVPDUrlFromStock: function() {


			var replaced = ($('#activesitelanguage').val() == 'ENGLISH')?$('#lastviewedyear').val()+' '+$('#lastviewedmake').val()+' '+$('#lastviewedmodel').val()+' '+$('#lastviewedstocknumber').val():$('#lastviewedmake').val()+' '+$('#lastviewedmodel').val()+' '+$('#lastviewedyear').val()+' '+$('#lastviewedstocknumber').val();

				try { //because so many thing can go wrong
					var stockNumber = emailHandler.getStockNumber();

					var url = "";
					var usedName = $('#activesitelanguage').val() == 'ENGLISH' ? "used" : "occasion";
					
					var rawURL = '', https;
					if($('#isAmp').length && $('#isAmp').val() == '1'){
						//amp is always https
						https = 'https:';
						//are we in a ampviewer from ampproject or google or other cached cdn
						try{
							rawURL = window.parent.top.location.href;
						}catch(ampExcpt){
							rawURL = '';
							//so we are going to take it from the hidden value
							var urlPos,
								ampPopupReferer = $('#ampPopupReferer').length ? $('#ampPopupReferer').val() : '',
								//add all cdn pattern here
								cdnPattern = [
									'ampproject.org/v/s/'
								];
							for(var pattern in cdnPattern) {
								if ((urlPos = ampPopupReferer.indexOf(cdnPattern[pattern])) !== -1) {
									rawURL = ampPopupReferer.slice(urlPos + cdnPattern[pattern].length);
									break;
								}
							}
						}
					}else{
						rawURL = window.top.location.href;
						https = window.top.location.protocol;
					}
					
					var parts = rawURL.replace(https + "//", "").split("/");
					var urlPrefix = parts[0];

					var pos = rawURL.indexOf("-id"); 		//looking for VPD in current url

					if(typeof page !== 'undefined' && (page == "BUILDANDPRICE" || page == "NEWCARDETAILS")){
						if(emailHandler.trim!==''){
							replaced =  ($('#activesitelanguage').val() == 'ENGLISH')?$('#lastviewedyear').val()+' '+$('#lastviewedmake').val()+' '+$('#lastviewedmodel').val()+' '+emailHandler.trim:$('#lastviewedmake').val()+' '+$('#lastviewedmodel').val()+' '+emailHandler.trim+' '+$('#lastviewedyear').val();
						}
						url = "<a href=\"" + rawURL + "\" target='_blank'>" + replaced + "</a>";;
					} else if (pos > -1) {
						var left = parseInt(rawURL.substr(pos + 3).replace(".html", ""), 10);

						if (!isNaN(left)) {
							if (left > 0) {
								var suffixe = parts[parts.length - 1];

								if (suffixe.indexOf(left) > -1)
									url = "<a href=\"" + https + "//" + urlPrefix + "/" + usedName + "/" + suffixe + "\" target='_blank'>" + replaced + "</a>";
							}
						}
					} else if (emailHandler.trim!==''){
                        replaced =  ($('#activesitelanguage').val() == 'ENGLISH')?$('#lastviewedyear').val()+' '+$('#lastviewedmake').val()+' '+$('#lastviewedmodel').val()+' '+emailHandler.trim:$('#lastviewedmake').val()+' '+$('#lastviewedmodel').val()+' '+emailHandler.trim+' '+$('#lastviewedyear').val();
					}

					//asking service for url
					if (url == "" && stockNumber.length>2) {
						var siteID = $("#topsiteid").val();
							$.ajax({
							type: "GET",
							async: false,
							dataType: 'json',
							url: "/fr/php/getURLFromStock.php?siteID=" + siteID + "&stock=" + stockNumber,
							success: function(data){
								if (typeof data == "object" && data != null) {
									if (data.make != undefined) {
										var suffixe = data.make + "-" + data.model + "-" + data.year + "-id" + data.id + ".html";
										url =  "<a href=\"" + https + "//" + urlPrefix + "/" + usedName + "/" + suffixe + "\" target='_blank'>" + data.full + "</a>";
									}
								}
							}
						});
					}

					if (url != "")
						replaced = url;

				} catch (e) {
					console.log( e );
				}

			return replaced;
		},

		/**
		 * Determine if this is a custompage, if so, override the send to and department
		 * based on settings set in admin custom-pages
		 */
		setSendAndDepartmentOverride: function(json) {
			//dont change anything, not a custom page
			if ($('#isGenericSearchPage').length == 0) return;
			if ($('#isGenericSearchPage').val() !== 'true') return;

			//Make sure form isnt from menu
			switch( emailHandler.mailID ){
				case 'menuService':
				case 'menuContactUs':
				case 'headerService':
					return;
			}

			var customLeadType = $('#CUSTOM_SEND_LEAD');
			if (customLeadType.length === 0) return;
			if (customLeadType.val() === 0) return;
			if (customLeadType.val() === 'null') return;

			json.department = customLeadType.val().toUpperCase();

			var newEmail = $('#newEmail');
			var newAfd = $('#newAdfEmail');

			var usedEmail = $('#textSendToEmail');
			var usedAdf = $('#textSendToEmailADF');

			var financeEmail = $('#financeEmail');
			var financeAdf = $('#financeAdfEmail');

			function setEmails(email, adf) {
				if(email.length > 0 && email.val() !== '') {
					json.sendTo = email.val();
				}

				if(adf.length > 0 && adf.val() !== '') {
					json.sendToADFFormat = adf.val();
				}
			};

			switch(customLeadType.val()) {
				case 'new':
					setEmails(newEmail, newAfd);
					break;
				case 'used':
					setEmails(usedEmail, usedAdf);
					break;
				case 'finance':
					setEmails(financeEmail, financeAdf);
					break;
			}

		},

		getJsonObject: function(){

			emailHandler.recaptcha.setResponse();

			if(emailHandler.trim == '' && $('#popuptrim').length && $('#popuptrim').val() != '{$POPUPTRIM}'){
                emailHandler.trim = $('#popuptrim').val();
            }

			// Get JSON, and prep emailHandler[.body|.subject]
			var jsonObject = new Object();
			var getCKVarValue = function(ck){
				try {
					return decodeURIComponent((($.cookie(ck) != null && typeof $.cookie(ck) != 'undefined' ? escape($.cookie(ck)) :  '') + ''.replace(/\+/g, '%20')));
				}catch(ex) {
					return (($.cookie(ck) != null && typeof $.cookie(ck) != 'undefined' ? escape($.cookie(ck)) :  '') + ''.replace(/\+/g, '%20'));
				}
			}

			var relanceID = getCKVarValue('relanceID');
			var utm_source = getCKVarValue('utm_source');
			var utm_campaign = getCKVarValue('utm_campaign');
			var utm_keyword = emailHandler.decodeURLRecursively(getCKVarValue('utm_keyword'));
			var utm_landing = getCKVarValue('utm_landing_footer');
			var utm_source_retargeting = getCKVarValue('utm_source_retargeting');
			var utm_campaign_retargeting = getCKVarValue('utm_campaign_retargeting');
			var kw_txt = ($('#activesitelanguage').val() == 'ENGLISH') ? "Keyword" : "Mot-cl&#233;";
			var kw_details = (utm_keyword.length > 0 ?  '[ '+ kw_txt +': ' + utm_keyword + ']' : '');
			var land_details = (utm_landing.length > 0 ?  '[Destination: '+d2cmedia.getHttpText() + '://'+ window.location.host + '' + utm_landing + ']' : '[Destination: '+d2cmedia.getHttpText() + '://'+ window.location.host + '' + utm_landing + ' .]');

			// var browser_details =  '{\$USERAGENT}';

			var organique = $('body').hasClass('ENGLISH') ? 'Organic' : 'Organique';
			var utm_details = (utm_source.length > 0 ? utm_source + ' - ' + utm_campaign+' '+kw_details  : organique);
			var cap_utm_details = d2cmedia.capitaliseFirstLetterOfEveryWord(utm_details)+' '+land_details;

			var formattedStock = ''
			var stockNumber = emailHandler.getStockNumber();
			if (stockNumber != '') {
				formattedStock = '(Stock:' +emailHandler.getStockNumber() + ')';
			}

			emailHandler.body = emailHandler.body.replace(/{\$UTMDETAILS}/g, cap_utm_details);
			emailHandler.body = emailHandler.body.replace(/{\$USERNAME}/g, emailHandler.userFirstName);
			emailHandler.body = emailHandler.body.replace(/{\$USERPOSTAL}/g, emailHandler.userPostal.toUpperCase());
			emailHandler.body = emailHandler.body.replace(/{\$UTMDETAILS}/g, '');
			emailHandler.body = emailHandler.body.replace(/{\$FOOTER}/g, '');
			emailHandler.body = emailHandler.body.replace(/{\$EMAILBUILDANDPRICE}/g, emailHandler.bandpLink());
			emailHandler.body = emailHandler.body.replace(/{\$STOCKNUMBERLABEL}/g, formattedStock);
			emailHandler.body = emailHandler.body.replace(/{\$STOCKNUMBER}/g, formattedStock);
            emailHandler.body = emailHandler.body.replace("{$DEALERNAME}", emailHandler.dealerName);

			var replaced = emailHandler.getVPDUrlFromStock();

			if(replaced.trim().length==0){
				var sv = $('input[name="searchedvehicle"]').filter(':visible:first');
				replaced = sv.length ? sv.val() : '';
			}

            if(emailHandler.paymentVehicle && emailHandler.paymentVehicle.length > 0) {
                replaced = emailHandler.paymentVehicle;
            }

            //set emailHandler.carid
			if(emailHandler.carid == '' && $('#topcarid').length){
				emailHandler.carid = $('#topcarid').val();
			}

			//try to apply VPD CRM-797
			var lookUp = "<span id='phSEARCHVEHICLE'>";
			var lookEnd = "</span>";
			var pos = emailHandler.body.indexOf(lookUp);

			if (pos > -1) {

				var tmp = emailHandler.body.substr(pos + lookUp.length);

				var pos2 = tmp.indexOf(lookEnd);

				if (pos2 > -1)
					emailHandler.body = emailHandler.body.substr(0, pos) + replaced + emailHandler.body.substr(pos + pos2 +  lookUp.length + lookEnd.length);
			}

			//just to make sure any markup are removed
			emailHandler.body = emailHandler.body.replace(/\<span id=\'phSEARCHVEHICLE\'\>/g, "");
			emailHandler.body = emailHandler.body.replace(/\<\/span\>/g, "");
			emailHandler.body = emailHandler.body.replace(/{\$SEARCHEDVEHICLE}/g, replaced);

            var sesLinkHref = emailHandler.getUserHistoryLink();
            if (emailHandler.body.indexOf("UULINK") != -1)
			{
				if (sesLinkHref != null && sesLinkHref.length > 0) {
					emailHandler.body = emailHandler.body.replace(/{\$UULINK}/g, sesLinkHref).replace(/%7B\$UULINK%7D/g, sesLinkHref);
				}
			}

			//Add VDP page seen the most to the lead email if VBDC is enabled and the user loaded a page more than once
			if ($('#hasVBDCEnabled').val() == '1'){
            	var VBDCHotPath = '';
                var VBDCHotPathCount = 0;
                var VBDCHotDate = '';
                var D2CUUIDCookie = $.cookie("D2CUUID");


                /*if(D2CUUIDCookie == '1' && emailHandler.body.indexOf('[VBDC-HOT]') == -1 && emailHandler.body.indexOf('[VBDC-MYS]') == -1){
                    var VBDCUrl = window.location.href;
                    emailHandler.body += '[VBDC-MYS] <a href="'+VBDCUrl+'">'+VBDCUrl+'</a>';
				}*/

                for (var key in sessionStorage){
                    if(key.indexOf('VDPMVBNP-') == 0){
                        var date = sessionStorage.getItem(key);
                        if (date >= VBDCHotDate){
                            VBDCHotDate = date;
                            VBDCHotPath = key.replace('VDPMVBNP-', '');
                        }
                    }
				}
				if(VBDCHotPath == ''){
                    for (var key in sessionStorage){
                        if(key.indexOf('VDPMV-') == 0){
                            var viewCount = sessionStorage.getItem(key);
                            if (viewCount >= 2 && viewCount > VBDCHotPathCount){
                                VBDCHotPathCount = viewCount;
                                VBDCHotPath = key.replace('VDPMV-', '');
                            }
                        }
                    }
                }
                if(VBDCHotPath != '' && emailHandler.body.indexOf('[VBDC-HOT]') == -1 && emailHandler.body.indexOf('[VBDC-MYS]') == -1){
                	var VBDCUrl = window.location.protocol+'//'+window.location.host+VBDCHotPath;
                    emailHandler.body += '[VBDC-HOT] <a href="'+VBDCUrl+'">'+VBDCUrl+'</a>';
				}
            }

			var CurrentStatus = $("#currentStatus").val();
			CurrentStatus = typeof CurrentStatus == 'undefined' ? 'used' : CurrentStatus.toLowerCase();
			var sendEmailToAllDealers = $("#sendEmailToAllDealers");
			sendEmailToAllDealers = ( sendEmailToAllDealers.length && sendEmailToAllDealers.val() == 1 )
			var hasMultipleDealers = $("#hasMultipleDealers");
			hasMultipleDealers = ( hasMultipleDealers.length && hasMultipleDealers.val() == 1 );
			var topCarid = $("#topcarid");
			topCarid = (topCarid.length > 0) ? $("#topcarid").val() : '';

			/*
				If site has mutiple dealers and currentStatus is used
				and no specific car id change the emails to be to all matching dealers
			*/
			/*if (sendEmailToAllDealers && hasMultipleDealers && CurrentStatus == 'used' && !topCarid)
			{
				emailHandler.getUsedEmailForMultipleDealers();
			}*/


			/* Overriding default email rules */
			var brandEmailOverride = (typeof $('#brandEmailAdfOverride').val() != 'undefined' ? $('#brandEmailAdfOverride').val() : '');
			var brandEmailAdfOverride = (typeof $('#brandEmailAdfOverride').val() != 'undefined' ? $('#brandEmailAdfOverride').val() : '');

			var newSectionOverride = (typeof $('#newSectionOverride').val() != 'undefined' ? $('#newSectionOverride').val() : '');
			var newEmailOverride = (typeof $('#newSectionEmail').val() != 'undefined' ? $('#newSectionEmail').val() : '');
			var newEmailAdfOverride = (typeof $('#newSectionAdfEmail').val() != 'undefined' ? $('#newSectionAdfEmail').val() : '');

			switch(true){
				case (brandEmailOverride.length > 5 && CurrentStatus == 'new'):
					emailHandler.sendTo = brandEmailOverride;
					emailHandler.sendToADFFormat = (brandEmailAdfOverride.length > 5 ? brandEmailAdfOverride : brandEmailOverride);
					break;
				/*case (newSectionOverride == '1' && newEmailOverride.length > 5):
					emailHandler.sendTo = newEmailOverride;
					emailHandler.sendToADFFormat = (newEmailAdfOverride.length > 5 ? newEmailAdfOverride : newEmailOverride);
					break;*/
			}
			/**/

			jsonObject.language = $('#activesitelanguage').val();

			/*
				some body return "Uncaught INVALID_CHARACTER_ERR: DOM Exception 5" on $.base64.encode
				try to use cleanAndEncodeText from main.js if avaliable
			*/

			if (typeof cleanAndEncodeText == 'function'){
				jsonObject.subject = cleanAndEncodeText(emailHandler.subject);
				jsonObject.body = cleanAndEncodeText(emailHandler.body);
			}else{
				jsonObject.subject = $.base64.encode(emailHandler.subject);
				jsonObject.body = $.base64.encode(emailHandler.body);
			}

			//Convert semi-colon delimited string to comma delimited
			cleanEmailDelimiter = function(string) {
				var res = '';
				if(typeof string !='undefined' && string != null && string.length){
					res = (string.split(';')).join(',');
				}
				return res;
			};

			jsonObject.sendTo = emailHandler.sendTo;
			jsonObject.sendToADFFormat = cleanEmailDelimiter( emailHandler.sendToADFFormat );

			jsonObject.userEmail = emailHandler.userEmail;
			jsonObject.tradein = emailHandler.tradein;
			jsonObject.popupdiv = emailHandler.popupdiv;
			jsonObject.userAttachmentPath = emailHandler.userAttachmentPath;
			jsonObject.userFirstName = emailHandler.userFirstName;
			jsonObject.userLastName = emailHandler.userLastName;
			jsonObject.licensenum = emailHandler.licensenum;
			jsonObject.userPhone = emailHandler.userPhone;
			jsonObject.phoneValidationAttempts = emailHandler.phoneValidationAttempts;
			jsonObject.phoneMandatory = emailHandler.phoneMandatory;
			jsonObject.userPostal = emailHandler.userPostal.toUpperCase();
			jsonObject.address = emailHandler.address;
			jsonObject.birthdate = emailHandler.birthdate;
			jsonObject.sendFrom = emailHandler.sendFrom;
			jsonObject.mailID = emailHandler.mailID;
			jsonObject.fromURL = ($('#ampPopupReferer').length && $('#ampPopupReferer').val() != '') ? $('#ampPopupReferer').val() : window.location.href;
			jsonObject.make = emailHandler.make || '';
			jsonObject.model = emailHandler.model || '';
			jsonObject.trim = emailHandler.trim || '';
			jsonObject.vin = emailHandler.vin || '';
			jsonObject.price = emailHandler.price || '';
			jsonObject.year = emailHandler.year || '';
			jsonObject.stockNumber = stockNumber;
			jsonObject.carid = emailHandler.carid || '';
			jsonObject.condition = emailHandler.condition;
			jsonObject.ismobilesite = emailHandler.ismobilesite;
			jsonObject.isAmp = ($("#isAmp").length > 0 && $('#isAmp').val() != '') ? "YES" : 'NO';
			jsonObject.referer = $("#topreferer").val();
			jsonObject.siteid = $("#topsiteid").val();
			jsonObject.utm_source = utm_source;
			jsonObject.relanceID = relanceID;
			jsonObject.utm_campaign = utm_campaign;
			jsonObject.utm_keyword = utm_keyword;
			jsonObject.utm_landing = utm_landing;
			jsonObject.utm_details = utm_details;
			jsonObject.utm_source_retargeting = utm_source_retargeting;
			jsonObject.utm_campaign_retargeting = utm_campaign_retargeting;
			jsonObject.popupOfferType = emailHandler.popupOfferType;
			jsonObject.fromFacebook = emailHandler.fromFacebook;
			jsonObject.detailsFR = emailHandler.consentDetailsFR;
			jsonObject.detailsEN = emailHandler.consentDetailsEN;
			jsonObject.fromAA = emailHandler.fromAA;
			jsonObject.ownerID = emailHandler.ownerID;
			jsonObject.leadTitleUIText = emailHandler.leadTitleUIText;
			jsonObject.sms = emailHandler.sms;
			jsonObject.onAfterLeadCreated = emailHandler.onAfterLeadCreated;
			//Adding first sendTo email to jsonObject.onAfterLeadCreated
			if(emailHandler.onAfterLeadCreated){
				jsonObject.onAfterLeadCreated.from = '';
				var sendToSplit = emailHandler.sendTo.split(';');
				if(sendToSplit[0].trim().length){
					jsonObject.onAfterLeadCreated.from = sendToSplit[0].trim();
				} else {
					var sendToAdfSplit = emailHandler.sendToADFFormat.split(',');
					if(sendToAdfSplit[0].trim().length){
						jsonObject.onAfterLeadCreated.from = sendToAdfSplit[0].trim();
					}
				}
			}
			jsonObject.userAgent = $("#txtUserAgent").val();
			jsonObject.grecaptchaResponseToken = emailHandler.grecaptchaResponseToken;
			jsonObject.contactID = emailHandler.contactID;
			jsonObject.contactNAS = emailHandler.contactNAS;
			jsonObject.contactBirth = emailHandler.contactBirth;
			var overwrittenDealerName = $('input[data-forvar="OVERWRITTERDEALER"]').val() && $('input[data-forvar="OVERWRITTERDEALER"]').length ? $('input[data-forvar="OVERWRITTERDEALER"]').val() : '';//($('input[data-forvar="OVERWRITTERDEALER"]').length && $('input[data-forvar="OVERWRITTERDEALER"]').val() != '' && $('input[data-forvar="DEALER"]').length && $('input[data-forvar="OVERWRITTERDEALER"]').val() != $('input[data-forvar="DEALER"]').val()) ? $('input[data-forvar="OVERWRITTERDEALER"]').val() : '';
			var dealerName = $('input[data-forvar="DEALER"]').val() != '' && $('input[data-forvar="DEALER"]').length ? $('input[data-forvar="DEALER"]').val() : $('#hiddenDealerName').val();
            overwrittenDealerName = overwrittenDealerName != dealerName && overwrittenDealerName != '' ? overwrittenDealerName : dealerName;
			jsonObject.dealerName = emailHandler.dealerName ? emailHandler.dealerName : overwrittenDealerName;

			jsonObject.allow_share_personal_data = emailHandler.allow_share_personal_data;

			//Added info to the json for backend partial email
			jsonObject.utmdetailsToReplace = cap_utm_details;
			jsonObject.uulinkToReplace = sesLinkHref;

			if(emailHandler.geoloc_status != ''){
				jsonObject.geoloc_status = emailHandler.geoloc_status;
				jsonObject.geoloc_lat = emailHandler.geoloc_lat;
				jsonObject.geoloc_long = emailHandler.geoloc_long;
				jsonObject.geoloc_accuracy = emailHandler.geoloc_accuracy;

				if (typeof cleanAndEncodeText == 'function'){
					jsonObject.geoloc_track_str = cleanAndEncodeText(emailHandler.geoloc_track_str);
					jsonObject.geoloc_email_str = cleanAndEncodeText(emailHandler.geoloc_email_str);
				}else{
					jsonObject.geoloc_track_str = $.base64.encode(emailHandler.geoloc_track_str);
					jsonObject.geoloc_email_str = $.base64.encode(emailHandler.geoloc_email_str);
				}
			}

			if(emailHandler.car2_make != ''){
				jsonObject.car2_make = emailHandler.car2_make;
				jsonObject.car2_model = emailHandler.car2_model;
				jsonObject.car2_trim = emailHandler.car2_trim;
				jsonObject.car2_year = emailHandler.car2_year;
				jsonObject.car2_color = emailHandler.car2_color;
				jsonObject.car2_odometer = emailHandler.car2_odometer;
				jsonObject.car2_vin = emailHandler.car2_vin;
				jsonObject.car2_transmisson = emailHandler.car2_transmisson;
				jsonObject.car2_drivetrain = emailHandler.car2_drivetrain;
				jsonObject.car2_fueltype = emailHandler.car2_fueltype;
			}

			jsonObject.comments = emailHandler.comments;
			if(emailHandler.skipGetDep){
				jsonObject.department = emailHandler.department;
			} else {
				jsonObject.department = emailHandler.getDep();
				emailHandler.department = emailHandler.getDep();
			}

			// Only do the stock number check if the department came in as USED
			// We do this because the stock number may be related to a DEMO or NEW
			// car
			//
			if(jsonObject.department == 'USED' && emailHandler.departmentByStock == false){  // call it only once
				// check if searched vehicle input filed is exists and has StockNumber and if yes, try to get department from vehicles json file.
				var searchedvehicle = $('input[name="searchedvehicle"]').filter(':visible:first').val();
				if(typeof searchedvehicle !='undefined'){
					var searchedvehicle = searchedvehicle.split('(Stock'); // can be (Stock:160747A) || (Stock# 160747A)
					if (searchedvehicle[1]){
						var department = 'USED'; // DEFAULT VALUE IF WE FIND A STOCK
						// there is a limitation - stock number can not contain  "#" or ":"
						searchedvehicle = searchedvehicle[1].replace(")","").replace(":","").replace("#","").trim().toLowerCase();
						var isCarFound =false;
						$.ajax({
							type: "GET",
							async: false,
							dataType: 'json',
							url: "/js/json/usedByPriceAsc.json",
							success: function(data){
								$.each( data, function( key, val ) {
								 // if(val['sn'].toLowerCase()=='elgtglta-l'){
									 if(val['sn'].toLowerCase()==searchedvehicle){

										 if (val['isnew'] == '1' || val['isdemo'] == '1') department = 'NEW';
										 else department = 'USED';

										 isCarFound = true;
										 return false;
									}
								});
								emailHandler.departmentByStock = department; // if not found will be '';
							}
						});
					}
				}
			}

			if(emailHandler.departmentByStock!=='' &&  emailHandler.departmentByStock!== false)		{
				jsonObject.department = emailHandler.departmentByStock;
			}

			jsonObject.condition = (jsonObject.department && jsonObject.department.toLowerCase() == 'new' ? 'New' : 'Used');

			if( $('#purchase_intent_answer').length > 0 ){
				jsonObject.purchase_intent = emailHandler.purchase_intent;
				jsonObject.purchase_intent_answer = $('#purchase_intent_answer').val();
				jsonObject.purchase_intent_no_answer = $('#purchase_intent_no_answer').val();
			}
			if( emailHandler.askPurchaseIntent ) {
				jsonObject.purchase_intent = (jsonObject.purchase_intent) ? jsonObject.purchase_intent : -1;
			}else{
				jsonObject.purchase_intent = false;
			}

			if ($("#currentItemType").length) jsonObject.itemType = $("#currentItemType").val();
			else jsonObject.itemType = "";

			emailHandler.body += '<!-- JS Unique id:'+( Math.round(Math.random()*5000) )+ '-->';

			//Modify department and set send/adf
            //Was overwritting the selected dealer email
			//emailHandler.setSendAndDepartmentOverride(jsonObject);

			return jsonObject;
		},

		getDep: function()
		{
            var now = new Date();
            var cYear = now.getFullYear();
            var isNewSection = /\b(new|neuf|neufs|configuration-et-prix|build-and-price|demos|demonstrateurs|clearance)\b/.test(window.location.pathname);
            var isUsedSection = /\b(used|occasion)\b/.test(window.location.pathname);

			var urlParams = getUrlVars();
			//check first if we have a department that was passed in a amp context
			if(($('#isAmp').length && $('#isAmp').val() == '1') && 'dept' in urlParams){
				if(urlParams['dept'] == 'NEW'){
					isNewSection = true;
				} else if (urlParams['dept'] == 'USED'){
					isUsedSection = true;
				}
			}else if('amppopupsection' in urlParams){ //or check if we have a section
				if(urlParams['amppopupsection'] == 'NEW'){
					isNewSection = true;
				} else if (urlParams['amppopupsection'] == 'USED'){
					isUsedSection = true;
				}
			}

            var carYear = 0;

            //@FIXME getVPDUrlFromStock better to use here....
            var searchedvehicle = $('input[name="searchedvehicle"]').filter(':reallyVisible:first');

            if( searchedvehicle.length > 0 ){
                var years = searchedvehicle.val().match(/19[0-9]{2}|20[0-9]{2}/g);
                if( years != null ){
                    carYear = parseInt( years[0] );
                }
            }
            if(!carYear){
                carYear = emailHandler.year;
            }
            switch( emailHandler.mailID ){
				case 'PartsRequest':
					return 'PARTS';
            	case 'ServiceRequest':
                case 'TiresRequest':
                case 'Recalls':
                case 'BodyShop':
                case 'menuService':
				case 'headerService':
                    return 'SERVICE';
                case 'CreditRequest':
                case 'CreditRequestMobile':
                case 'DealerTrack':
                case 'CreditMultistepRequest':
				case 'CreditScore':
                    return 'FINANCE';
                /*case 'monthlyPayments': // DWP-4434
                case 'MonthlyPayments_SMS':
                    return 'USED';	*/
                case 'menuContactUs':
                    if (emailHandler.department !== '') return emailHandler.department.toUpperCase();
                    if (typeof mailQuickEmail.department !== 'undefined' && mailQuickEmail.department !== '') return mailQuickEmail.department.toUpperCase();
                    break;
            }


            // step 1 can I identify it based on car user entered
            if (carYear > 0)
            {
                if( isNewSection ){
                    if (carYear <= (cYear-2) ) return 'USED';
                }
                if( isUsedSection ){
                    if (carYear >= (cYear+1) ) return 'NEW';
                }
                if( !isNewSection && !isUsedSection ){
                    if (carYear >= cYear ) return 'NEW';
                    if (carYear < cYear )  return 'USED';
                }
            }

            // Step 2: Guess by URL
            if( isUsedSection ){
                return 'USED';
            }
            if( isNewSection ){
                return 'NEW';
            }

            // Step 3: If the emailhandler department is set than use that
            if (emailHandler.department !== '')
                return emailHandler.department;

            // Last case scenario
            if (typeof $('#popupDepartment').attr('id') != 'undefined') {
                if($('#popupDepartment').val().length){
                    return $('#popupDepartment').val();
                }
            }

            if (typeof $('#defaultDepartment').attr('id') != 'undefined') {
                if($('#defaultDepartment').val().length){
                    return $('#defaultDepartment').val();
                }
            }

            return 'USED';
		},

		readyToSend: function()
		{
			var crc = emailHandler.createChecksum();

			if (emailHandler.lastChecksum == crc){
				if( typeof emailHandler.onDuplicateSend == 'function'){
					emailHandler.onDuplicateSend.call();
				} else {
					if( typeof debug !== 'undefined' ) debug( 'CRC Match', emailHandler.lastChecksum, crc );
				}
				return;
			}
			emailHandler.lastChecksum = crc;

			if($('input[data-forvar="OVERWRITTERDEALER"]').length && $('input[data-forvar="OVERWRITTERDEALER"]').val() != '' && $('input[data-forvar="DEALER"]').length && $('input[data-forvar="OVERWRITTERDEALER"]').val() != $('input[data-forvar="DEALER"]').val()){
                var dealerSendToInfo = $('body').hasClass('FRENCH') ? 'Concession où est situé le véhicule: ' : 'Dealer where the vehicle is located: ';
                dealerSendToInfo += $('input[data-forvar="OVERWRITTERDEALER"]').val();
				emailHandler.body = emailHandler.body.replace('{$DEALER_SENDTO}', dealerSendToInfo);
			}

			if ($("#ismobile").length > 0) emailHandler.ismobilesite = "YES";
			if (emailHandler.subject.length == 0)return false;
			if (emailHandler.body.length == 0)return false;

			jsonObject = emailHandler.getJsonObject();

			if( !emailHandler.ignoreCaptcha ) {
				//Got the token, can reset now
				grecaptcha.reset();
			}

			var postData = null;
			postData = JSON.stringify(jsonObject);

			var currentPopupOfferType = emailHandler.popupOfferType;

			var postArray = {json:postData};
			if( emailHandler.partial ){
				postArray['partial'] = true;
			}else{
				trackConversion();
			}

			$('input[name="lead_department"]').val(jsonObject.department); // pass to emailConfirmation.php
            $('input[name="leadType"]').val(emailHandler.subject.replace(/[\n\r]/g,' ')); // pass to emailConfirmation.php Sometimes subject is on more than one line, which crashes the JS
            if(emailHandler.leadTitleText != ''){
				$('input[name="leadType"]').val(emailHandler.leadTitleText.replace(/[\n\r]/g,' ')); // pass to emailConfirmation.php Sometimes subject is on more than one line, which crashes the JS
				emailHandler.leadTitleText = '';
            }
			$('input[name="pageID"]').val($('#PAGEID').val()); // pass to emailConfirmation.php
            $('input[name="currentURL"]').val(window.location.href ); // pass to emailConfirmation.php
            $('input[name="isFullWidth"]').val($('#isFullWidthPageNewVDP').val()); // pass to emailConfirmation.php
            $('input[name="dealerName"]').val($('#newVDPDealerName').val()); // pass to emailConfirmation.php
            $('input[name="buttonPosition"]').val($('#newVDPButtonPosition').val()); // pass to emailConfirmation.php
            $('input[name="isMobileNewVDP"]').val($('#ismobile').val()); // pass to emailConfirmation.php
			$('input[name="isConfirmPopup"]').val(0);
			if(emailHandler.popupdiv == 'creditScoreConfirmPopupContainer'){
				$('input[name="isConfirmPopup"]').val(1); // pass to emailConfirmation.php
			}


			formFill.save({
				email: emailHandler.userEmail,
				firstName: emailHandler.userFirstName,
				lastName: emailHandler.userLastName,
				phone: emailHandler.userPhone,
				postal: emailHandler.userPostal
			});

			$.ajax({
					type: "POST",
					url: '/mail/sendMailEx.php',
					data: postArray,
					beforeSend: function(x)
					{
						if(x && x.overrideMimeType) {
							x.overrideMimeType("application/json;charset=UTF-8");
						}
					},
					success: function(data)
					{
						// Log form submitted
						 emailHandler.logFormRequest("FormSubmitted",emailHandler.mailID,currentPopupOfferType);

						// Reset
						emailHandler.partial = false;
						emailHandler.lastChecksum = false;

						// Data is returned using a json encoded string
						if (typeof data == 'string') var jsonReturn = JSON.parse(data);
						else jsonReturn = data; // Should alread be proper JSON OBJECT


						if( typeof emailHandler.callback != 'function'){
							emailHandler.callback = function(){ /*-*/ }
						}

						if (jsonReturn.status == 'SUCCESS')
							{
							/*
							jsonObject.sendTo = jsonReturn.sendTo;
							jsonObject.language = jsonReturn.language;

							var postData = null;
							postData = JSON.stringify(jsonObject);
							var postArray = {json:postData};

							$.ajax({
							type: "POST",
							url: 'http://www.autoaubaine.com/mailTracking/emailManager.php',
							data: postArray
							});*/
							emailHandler.callback(true);
						} else {
							emailHandler.callback(false);
						}
					},
					failure: function(errMsg) {
						// Log form submitted email not sent
						emailHandler.logFormRequest("FormSubmittedEmailNotSent",emailHandler.mailID,currentPopupOfferType);

						var msg = saveHandler.failMessage + "\n" + errMsg;
						alert(msg);
					},
					statusCode: {
						404: function() {
							alert('page not found');
						}

					}


			});

			emailHandler.popupOfferType = '';
		},
		decodeURLRecursively : function(url) {
			if(url.indexOf('%') != -1) {
					return emailHandler.decodeURLRecursively(decodeURIComponent(unescape(url)));
			}

			return url;
		 },
		validateEmail: function( email )
		{
			var emailIsValid = false;
			return $.ajax({
					type: "GET",
					url: "/fr/php/validateEmailAccount.php?email=" + email,
					async: false, //I hate to do this, but validity plugin doesnt support async
					// success: function(data, textStatus, jqXHR) {
					// 	if (data == 1) emailIsValid = true;
					// }
			});
			//return emailIsValid;
		},


		getUUID: function() {
			if (typeof window.activeProfileID != 'undefined'  && window.activeProfileID != null) return window.activeProfileID;
			if (typeof activeUserProfileMng != 'undefined' && activeUserProfileMng.uid != null) return activeUserProfileMng.uid;
			if (typeof $.cookie != 'undefined' && $.cookie('uuid') != 'undefined' && $.cookie('uuid') != null) return $.cookie('uuid');
			return '';
		},

		/**
		 * Sets contact info from autocomplete if it exists and if contact info is empty
		 */
		setContactInfo: function() {
			//make sure googlePlaces plugin exists
			if (typeof $.fn.googlePlaces === 'undefined') return;

			//@TODO - scope of this input, there may come a time where there is more than 1 of these on a page
			var addressInput = $('input[data-google-places="true"]');
			if (addressInput.length == 0) return;

			var address = addressInput.googlePlaces('getAddress');

			if (address.city != '' && emailHandler.contactCity == '') {
				emailHandler.contactCity = address.city.long_name;
			}

			if (address.street != '' && address.street_number != '' && emailHandler.contactAddress == '') {
				emailHandler.contactAddress = address.street_number.long_name + ' ' + address.street.long_name;
			}

			if (address.province != '' && emailHandler.contactProvince == '') {
				emailHandler.contactProvince = address.province.short_name
			}

			if (address.postal != '' && emailHandler.contactZip == '') {
				emailHandler.contactZip = address.postal.long_name;
			}
		},

		getEmailConsent: function(callback)
		{
			//var hasConsent = false;
			var d = new Date();
			var target = "/fr/php/getEmailConsentFromCRM.php";

			emailHandler.setContactInfo();

			getData = {
				email: emailHandler.userEmail,
				phone: emailHandler.userPhone,
				name: emailHandler.userFirstName + " " + emailHandler.userLastName,
				addr: emailHandler.contactAddress,
				city: emailHandler.contactCity,
				province: emailHandler.contactProvince,
				zip: emailHandler.contactZip,
				nas: emailHandler.contactNAS,
				birth: emailHandler.contactBirth,

				siteID: $("#siteID").val(),
				UUID: emailHandler.getUUID(),
				ts: d.getTime(),
				lang: $('#activesitelanguage').val()
			}
			$.ajax({
					type: "GET",
					url: target,
					data: getData,
					//async: false, //this is locking up the browser
					dataType: 'json'
			}).always(function(data, textStatus, jqXHR) {
						data = data ? data : { hasConsent:false };

						try {
							if( typeof data == 'undefined' &&  typeof debug !== 'undefined'){
								debug("**** error ****",{
									error: 'No Data',
									textStatus: textStatus,
									rvalue: data,
									v: getData,
									t: target
								});
							}

							//hasConsent = !!(data.hasConsent);
							[
								['consentType'      ,'consentType'],
								['consentExpiration','expiration'],
								['consentDate'      ,'date'],
								['consentFrequency' ,'frequency'],
								['consentDetailsFR' ,'detailsFRENCH'],
								['consentDetailsEN' ,'detailsENGLISH'],
								['detailsDefaults'  ,'detailsDefaults'],
								['contactID', 'uid']
							].map(function( v ){
								var ek = v[0];
								var dk = v[1];
								var u = undefined;
								delete undefined;
								emailHandler[ek] = ( data[dk] != u ) ? data[dk] : emailHandler[ek];
							});
						} catch(e) {
							if( typeof debug !== 'undefined' ){
								debug("**** error ****",{
									error: e,
									textStatus: textStatus,
									rvalue:data,
									v: getData,
									t: target
								});
							}
						}
						callback(data);
					});
			//return hasConsent;
		},
		bandpLink: function( noUIText ){

			var sanitize = function(s){
				return s.replace(/-/g,'_').replace(/'/g,'');
			}

			/* Build And Price Link */
			var noUIText = !(noUIText);
			var clearBandP = false;
			if (typeof $.cookie('bandplink') == 'undefined' || $.cookie('bandplink') ==  null || typeof $.cookie('sessid') == 'undefined' || $.cookie('sessid') == null)
				{
				return '';
			}

			var bandpCookie = $.cookie('bandplink');
			var bandpSID = $.cookie('sessid');
			if (bandpCookie.indexOf('|||') < 0)
				{
				return '';
			}

			var bandpSections = bandpCookie.split('|||');
			if (bandpSections.length < 4)
				{
				return '';
			}

			var bandpDate = new String(bandpSections[0]).split('/');
			var bandpMake  = new String(bandpSections[1]);
			var bandpModel = new String(bandpSections[2]);
			var bandpYear  = new String(bandpSections[3]);
			var bnpTrim  =  ($('#popuptrim').length && $('#popuptrim').val() != '{$POPUPTRIM}') ? $('#popuptrim').val() : '';
			var bandpDateVal = '';
			var bandpLink = "<a href='"+d2cmedia.getHttpText() + "://" + window.location.hostname + $('#txtBuildAndPriceFolderPath').val();
			if ($('#activesitelanguage').val() == 'ENGLISH')
				{
				var day = parseInt(bandpDate[2]);
				var daySuffix = 'th';
				switch(day)
				{
					case 1:
					case 21:
					case 31:
						daySuffix = 'st';
						break;
					case 2:
					case 22:
						daySuffix = 'nd';
						break;
					case 3:
					case 23:
						daySuffix = 'rd';
						break;

				}
				bandpDateVal = $('#TXTMONTH' + parseInt(bandpDate[1]).toString()).val() + ' ' + day + daySuffix + ' ' + bandpDate[0];
				bandpLink += bandpYear + '-' + sanitize( bandpMake ) + '-' + sanitize(bandpModel) + '.html?sid=' + bandpSID + "' target='_blank'>" + bandpYear + ' ' + bandpMake + ' ' + bandpModel + ' ' + bnpTrim + "</a>";
				/*bandpDateVal + ' ' + */
			}else {
				bandpDateVal = bandpDate[2] + ' ' + $('#TXTMONTH' + parseInt(bandpDate[1]).toString()).val() + ' ' + bandpDate[0];
				bandpLink += sanitize( bandpMake ) + '-' + sanitize(bandpModel) + '-' + bandpYear + '.html?sid=' + bandpSID + "' target='_blank'>" + bandpMake + ' ' + bandpModel + ' ' + bnpTrim + ' ' + bandpYear + "</a>";
			}

			if( noUIText ){
				return bandpLink;
			}

			// Gino asked me to remove the text from the link no matter what
			return bandpLink;
		},
		logFormRequest: function(formRequestType, mailid, popupOfferType)
		{
			var cacheClearer =Math.floor(Math.random()*9999999);
			var siteid = ($("#topsiteid").length ? $("#topsiteid").val() : "0");
			var carid = ($("#topcarid").length && $("#topcarid").val().length > 0 ? $("#topcarid").val() : "0");
			var uid = ($.cookie('uid') ? $.cookie('uid') : "0");
			var source = ($.cookie('utm_source') ? $.cookie('utm_source') : "0");
			var campaign = ($.cookie('utm_campaign') ? $.cookie('utm_campaign') : "0");
			var sourceRetargeting = ($.cookie('utm_source_retargeting') ? $.cookie('utm_source_retargeting') : "0");
			var campaignRetargeting = ($.cookie('utm_campaign_retargeting') ? $.cookie('utm_campaign_retargeting') : "0");
			var ismobile = ($("#topismobile").length && $("#topismobile").val() == 1 ? "YES" : "NO");
			var siteLanguage = ($("#activesitelanguage").length ? $("#activesitelanguage").val() : "FRENCH");
			var mandatoryPhone = ((emailHandler !== undefined && emailHandler.phoneMandatory !== undefined) ? emailHandler.phoneMandatory : 0);
			if (typeof popupOfferType == "undefined" || !popupOfferType ) popupOfferType = "0";

			var formsrc = '/proxy_saub/logFormRequest/'+
			siteid+"/"+carid+"/"+escape(uid)+
			"/"+escape(source) + "/"+ escape(campaign) +
			"/"+ismobile + "/" + siteLanguage +
			"/" + escape(sourceRetargeting) + "/"+ escape(campaignRetargeting) +
			"/" + mailid + "/" + formRequestType + "/" + popupOfferType + "/" + mandatoryPhone +
			"/"+cacheClearer+ '.gif';
			$("body").append("<img style='width:1px;height:1px;position:absolute;left:0px;top:0px;' src='"+formsrc+"' alt='' />");
		},

		getUserHistoryLink: function()
		{
			// step 1: create a key
			var key = encodeURIComponent('xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
																																var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
																																return v.toString(16);
																															}));
			sessionid = ( (typeof $.cookie != 'undefined' && typeof $.cookie('usid') != 'undefined' && $.cookie('usid') != null) ? $.cookie('usid') : 0);
			if (sessionid == 0) return '';

			var retVal = 'https://stats.d2cmedia.ca/ui/userStats.php?key=' + key;

			var statsHost = "https://stats.d2cmedia.ca/";
			if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1 || navigator.appVersion.indexOf("MSIE 9.")!=-1 || 'https:' == document.location.protocol)
				statsHost = "/proxy_sd2c/";

			// Call and forget
			$.get(statsHost + "service/sessionMng.php?action=viewaccess&sid=" + sessionid + "&useKey=" + key);

			if ($("#activesitelanguage").val() == 'ENGLISH') retVal += '&lang=en';

			return retVal;

		},

		getUsedEmailForMultipleDealers: function() {
			var lang = "fr";
			if ($('#activesitelanguage').val() == 'ENGLISH') lang = "en";

			var func = function(data) {
				var tmp = data.split("|||");
				if (typeof tmp[0] != "undefined" && tmp[0].length > 0) emailHandler.sendTo = tmp[0];
				if (typeof tmp[1] != "undefined" && tmp[1].length > 0) emailHandler.sendToADFFormat = tmp[1];
			}

			var cb = Math.floor(Math.random()*9999999);
			uri = "/" + lang + "/php/getDealersEmailTo.php?make="+emailHandler.make+"&model="+emailHandler.model+"&year="+emailHandler.year+"&cb=" + cb;
			$.ajax({ url: uri,
			 async: false,
			 success: func
			});
		},

		preSendImplicit: function(){
			// Don't presend partials
			if( emailHandler.partial ){
				return false;
			}
			jsonObject = emailHandler.getJsonObject();
			var postArray = {
				json: JSON.stringify( jsonObject ),
				partial: true
			};

			$.ajax({
					type: "POST",
					url: '/mail/sendMailEx.php',
					data: postArray,
					beforeSend: function(x)
					{
						$('input[name="lead_department"]').val(jsonObject.department); // pass to emailConfirmation.php
						$('input[name="leadType"]').val(emailHandler.subject.replace(/[\n\r]/g,' ')); // pass to emailConfirmation.php Sometimes subject is on more than one line, which crashes the JS
                        $('input[name="pageID"]').val($('#PAGEID').val()); // pass to emailConfirmation.php
                        $('input[name="currentURL"]').val(window.location.href ); // pass to emailConfirmation.php
                        $('input[name="isFullWidth"]').val($('#isFullWidthPageNewVDP').val()); // pass to emailConfirmation.php
                        $('input[name="dealerName"]').val($('#newVDPDealerName').val()); // pass to emailConfirmation.php
                        $('input[name="buttonPosition"]').val($('#newVDPButtonPosition').val()); // pass to emailConfirmation.php
                        $('input[name="isMobileNewVDP"]').val($('#ismobile').val()); // pass to emailConfirmation.php
						if(x && x.overrideMimeType) {
							x.overrideMimeType("application/json;charset=UTF-8");
						}
					},
					success: function(data)
					{
						// Do nothing
						if( typeof debug !== 'undefined' ) debug( data );
					},
					failure: function(errMsg) {
						// Log form submitted email not sent
						emailHandler.logFormRequest("FormSubmittedEmailNotSent",emailHandler.mailID,emailHandler.popupOfferType);
						if( typeof debug !== 'undefined' ) debug( saveHandler.failMessage, errMsg );
					},
					statusCode: {
						404: function() {
							alert('page not found');
						}
					}


			});
		},

		logEvent: function( event, eventCategory ){
			var eventCategory = (eventCategory) ? eventCategory : emailHandler.mailID;
			if( !event || !eventCategory ) {
				if( typeof debug !== 'undefined' ) debug( '!UNLOGGED EVENT!', event, eventCategory );
				return false;
			}
			if ( typeof activeUserProfileMng != 'undefined' &&
					 typeof activeUserProfileMng.logPageViewEvent != 'undefined'){
				activeUserProfileMng.logPageViewEvent(event, eventCategory);
				return;
			}
			if( typeof debug !== 'undefined' ) debug( '!UNLOGGED EVENT!', event, eventCategory );
		},

		buildCRMKey: function() {
            var siteID = parseInt($("#topsiteid").val(), 10);
            var uuid = emailHandler.getUUID();
            var email = getCookie("emailFromAutoAnswer");

            if (!isNaN(siteID)) {
                if ((email != "" || uuid != "") && typeof(siteID) == "number" && siteID > 0) {
                    var dt = new Date();

                    var month = dt.getMonth() + 1;
                    var d = $.base64.encode(dt.getFullYear() + "-" + (month < 10 ? ("0" + month) : month) + "-" + (dt.getDate() < 10 ? ("0" + dt.getDate()) : dt.getDate()));

                    var pre = d.substr(0, 8);
                    var post = d.substr(8);

                    return $.base64.encode(pre + $.base64.encode(siteID + ";" + uuid + ";" + email) + post);
                }
            }

            return "";
        },

		//Tries to set make/model/year for emailHandler object if its not already set
		setMakeModelYearFromLastViewed: function() {
			var make = $('#lastviewedmake').val();
			var model = $('#lastviewedmodel').val();
			var year = $('#lastviewedyear').val();

			if (typeof make !== 'undefined' && emailHandler.make === '') {
				emailHandler.make = make;
			}

			if (typeof model !== 'undefined' && emailHandler.model === '') {
				emailHandler.model = model;
			}

			if (typeof year !== 'undefined' && (emailHandler.year === '' || emailHandler.year === 0)) {
				emailHandler.year = year;
			}

		},

    recaptcha: {
			ask: true,
			widgetId: -1,
			skipByPass: false,
			init: function() {
        //Inject google invisible recaptcha API JS
				try{
					(function(w,d,t,g,r){
						if( w[r] ) return;
						var e = d.createElement(t),m = d.getElementsByTagName(t)[0];
						e.src=g;
						m.parentNode.insertBefore(e,m)
					})(window,document,'script','https://www.google.com/recaptcha/api.js','grecaptcha');
				} catch( e ){
					console.log( e );
				}
			},
      load: function() {
				if(emailHandler.recaptcha.widgetId > -1){
					return;
				}
				try{
					$('<div id="emailhandler_recaptchaWidget" style="display:none"></div>').appendTo('body');
					emailHandler.recaptcha.widgetId = grecaptcha.render('emailhandler_recaptchaWidget',{
							sitekey: '6LfpdD0UAAAAAPd4S7Ike5Edx01y3YXd5I-u3dxP',
							callback: emailHandler.recaptcha.onSubmit,
							size: 'invisible'
					});
				}catch( e ){
					console.log( e );
				}
			},
			onSubmit: function(token) {
        emailHandler.grecaptchaResponseToken = token;
				recaptchaPassed = true;

				emailHandler.sendMail(emailHandler.recaptcha.skipByPass);
			},
			setResponse: function() {
				//emailHandler.grecaptchaResponseToken = grecaptcha.getResponse(emailHandler.recaptcha.widgetId);
			}
		}


	};


	var trackConversion = function(){
		if( typeof gtag == 'undefined') return -1;
		//if( legacy_ga ) return -2;
		if( !window.d2c_awcId || !window.d2c_awcLabel ) return -3;
		if( deploymentType.toLowerCase() == 'live'){
			gtag('event','conversion', { 'send_to': d2c_awcId+'/'+d2c_awcLabel });
		}else{
			console.log("gtag('event','conversion', { 'send_to': "+d2c_awcId+'/'+d2c_awcLabel+" });");
		}
	}

	jQuery(function($){
		/* SHA1 IP addresses */
		var isVM   = js_d2c_get_val('ISVM');
		var sha1IP = js_d2c_get_val('ffdL1');
		var whitelist = js_d2c_get_val('GRWL').split(';');
		emailHandler.ignoreCaptcha = ( isVM || whitelist.indexOf(sha1IP) != -1 );
		if(!emailHandler.ignoreCaptcha){
			emailHandler.recaptcha.init();
		}
	});


	emailHandler.resetCallbacks();

	emailHandler.askPurchaseIntent = (function(l){
		var p = '';
		if(typeof l.pathname != 'undeinfed'){
			p = l.pathname;
		} else {
			p = ((l.href).match(/[A-z]:\/\/[^\/]+\/([^\?]+)\??.*/))[1];
		}
		var dict = [
								"demonstrateurs","demo",
								"liquidation","clearance",
								"promotions",
								"amppromo",
								"neuf","new",
								"occasion","used",
								"credit","financement"
								];
		var exp = new RegExp("("+dict.join('|')+")");
		var tr = {
			"demonstrateurs" : "demo",
			"clearance" : "liquidation",
			"new" : "neuf",
			"promotions" : "promo",
			"amppromo": "amppromo",
			"used": "occasion",
			"credit" : "financement"
		};

		if( exp.test(p.toLowerCase()) ){
			var m = p.match( exp );
			if( null != m ){
				emailHandler.purchase_intent_section = ( typeof tr[m[1]] != 'undefined') ? tr[m[1]] : m[1];;
			}
			return true;
		} else {
			return false;
		}
	})(document.location);

	return emailHandler;
})();


var emailTracking = (function(){

	var et = this;

	var defaults = {
		brand: '',
		model: '',
		year: '',
		ispromo: false,
		isexpress: false,
		ishomepage: false,
		section: '',
		textCarSectionType: 'USED',
		isMobileNewVDP: false,
		isFullWidth: false,
		buttonPosition: '',
		dealerName: ''
	}

	var mmySlug = function( opt ){
		var slug = [];
		var brand = opt.brand ? opt.brand : emailHandler.make;
		var model = opt.model ? opt.model : emailHandler.model;
		var year  = opt.year  ? opt.year  : emailHandler.year;

		if( brand.length ) slug.push( brand );
		if( model.length ) slug.push( model );
		if( year.length  ) slug.push( year  );

		return slug.join('-');
	}

	var getPageType = function(opt){
		var typeMap = {
			'homepage.html': 'Home-Page',
			'contactus.html': 'ContactUs',
			'newcardetail.html': 'New-VDP',
			'newcars.html': 'New-SRP',
			'buildandprice.html': 'New-B&P',
			'resume-buildandprice.html': 'New-B&P-Resume',
			'compareNewVehicles.html': 'New-Compare',
			'usedcars.html': 'Used-SRP',
			'cardetail.html': 'Used-VDP',
			'credit.html': 'Demandes - Financement',
			'dealertrack.html': 'Demandes - Financement',
			'promotion.html': 'Promotions',
			'partsRequest.html': 'Demandes - Pièces',
			'services.html': 'Service',
			'serviceRequest.html': 'Demandes - RDV Service',
			'bodyShop.html': 'Demandes - RDV Carosserie',
			'tiresRequest.html': 'Demandes - Pneus',
			'ourteam.html': 'Team',
			'testdrive.html': 'Demandes - Essais-Routier-Occasion',
			'testdrivenew.html': 'Demandes - Essais-Routier-Neuf',
			'brochures.html': 'Demandes - Brochures',
			'joboffer.html': 'Demandes - Emplois',
			'makeoffernew.html': 'Demandes - Offre - Neuf',
			'makeoffer.html': 'Demandes - Offre - Occasion',
			'pricerequestnew.html': 'Demandes - Prix - Neuf',
			'pricerequest.html': 'Demandes - Prix - Occasion',
			'findcar.html': 'Demandes - Recherche Occasion',
			'tradeinnew.html': 'Demandes - Echange Neuf',
			'tradein.html': 'Demandes - Echange Occasion'
		};

		var isResume = (opt.currentURL||'').indexOf('step=resume') != -1;
		var isOptions = (opt.currentURL||'').indexOf('step=options') != -1;
		if(opt.pageID == 'buildandprice.html' && (isResume || isOptions)){
			opt.pageID = 'resume-buildandprice.html';
		}

		if(typeof typeMap[opt.pageID] != 'undefined' ){
			return typeMap[opt.pageID];
		}else{
			return 'Other';
		}

	}

	var getDescription = function( opt ){
		var desc = 'Demandes';
		var brand = opt.brand ? opt.brand : emailHandler.make;
		var model = opt.model ? opt.model : emailHandler.model;
		var year  = opt.year  ? opt.year  : emailHandler.year;

		if (opt.ispromo){
			desc += "-Promotion";
		}

		if (brand.length > 0 && model.length > 0 && !opt.ishomepage)
		{
			if (!opt.ispromo) {
				desc += [ '', brand, model, opt.section ].join('-');
			} else {
				desc += '-'+mmySlug(opt);
			}
		}else if ( opt.ispromo && opt.ishomepage ){
			desc += "-Index";
		}

		if( opt.isexpress == '1' ){
			if( opt.textCarSectionType ){
				desc = "Demandes-Express";
			}
			desc += '-'+mmySlug( opt );
			desc += '-'+opt.section;
		}

		return desc;
	}

	var trackNewMobileVDP = function(options){
		var isFullWidth = options.isFullWidth ? 'Wide VDP' : 'Normal VDP';
		var pageType = '';
		if(window.screen.availWidth > 1200){
			pageType = '>1200px - '.isFullWidth;
		} else {
			pageType = '<1200px - Normal VDP';
		}
		var category = "New-VDP-Desktop-Layout-CR";
		var acttion = [ pageType, options.buttonPosition ].join('-');
		var label = [ options.dealerName, pageType, 'Lead'].join('-');
		var value = 1;

		gaTrack( 'c', category, action, label, value );
	}

	et.track = function( params ){
		if( getCookie('leadSend') ){
			return debug('lead sent');
		}
		setCookie('leadSend', true, 1);

		var options = $.extend({}, defaults, params);
		options.currentURL = options.currentURL ? options.currentURL : window.location.href;
		options.ispromo    = (options.ispromo == '1');
		options.ishomepage = (options.ishomepage == '1');

		var pageType = getPageType( options );

		gaTrack('', 'Courriels', options.label, getDescription(options), 1);
		gaTrack('c', 'Courriels-dept', options.department, mmySlug(options), 1);
		gaTrack('c', 'Courriels-page', pageType, options.leadType, 1);
		if( options.isMobileNewVDP && pageType == 'New-VDP' ){
			trackNewMobileVDP(options);
		}
		try{
			d2c_gaAccounts.all.map(function(id){
				gtag('config', id, {'page_path': '/confirmation.html'});
			});
		}catch( e ){
			debug( e );
		}
	}

	return et;
})();


var getMailSentHandler = function(idToAdd){
	var self = {};
	self.timeoutCallback = null;
	self.timeout = null;
	self.idToAdd = (idToAdd) ? idToAdd : '';
	if(!$('#emailSuccessMessage'+idToAdd).length){
		idToAdd = '';
		self.idToAdd = '';
	}
	self.showSuccess = function(){

		if(!getCookie("preventDuplicateCreditScore")
			&& !getCookie("creditScoreConfirmPopupShown")
			&& !getCookie("creditScoreEmbeddedFilled")
			&& (emailHandler.userPhone == "" || emailHandler.address == "" || emailHandler.birthdate == "")
			&& $("#creditScoreConfirmPopupContainer").length)
		{
			$('#creditScoreConfirmPopupContainer').popupize().setTrigger('click').open(1);
		} else {
			if( !$('#emailSuccessMessage'+idToAdd).parent().is('body') ){
				$('#emailSuccessMessage'+idToAdd).appendTo('body');
			}

			$('#emailSuccessMessage'+idToAdd).reveal({
				animation: 'fadeAndPop',
				animationspeed: 300,
				closeonbackgroundclick: false,
				dismissmodalclass: 'close-reveal-modal'
			});

			$('#emailSuccessMessage'+idToAdd+' .confirm_successContinue').on('click', self.closeSuccess);
		}

		$('#emailmsgfrm' + self.idToAdd).trigger('submit');
	}

	self.closeSuccess = function() {
		$('#emailSuccessMessage'+self.idToAdd).trigger('reveal:close');
		if (self.timeoutCallback != null) self.timeoutCallback();

		return false;
	}

	self.showFail =  function() {
//		$('#emailFailMessage'+idToAdd).appendTo('body');
		$('#emailFailMessage' + self.idToAdd).reveal({
				animation: 'fadeAndPop',
				animationspeed: 300,
				closeonbackgroundclick: false,
				dismissmodalclass: 'close-reveal-modal'
		});

		$('#emailFailMessage'+idToAdd+' .confirm_failContinue').on('click',function(){
				$('#emailFailMessage'+idToAdd).trigger('reveal:close');
		});

	}

	return self;
}

var mailSentHandler = new getMailSentHandler('');

function storageAvailable(type) {
	var storage;
	try {
		storage = window[type];
		var x = '__storage_test__';
		storage.setItem(x, x);
		storage.removeItem(x);
		return true;
	}
	catch(e) {
		return e instanceof DOMException && (
				// everything except Firefox
			e.code === 22 ||
			// Firefox
			e.code === 1014 ||
			// test name field too, because code might not be present
			// everything except Firefox
			e.name === 'QuotaExceededError' ||
			// Firefox
			e.name === 'NS_ERROR_DOM_QUOTA_REACHED') &&
			// acknowledge QuotaExceededError only if there's something already stored
			(storage && storage.length !== 0);
	}
}

var formFill = (function() {

	var self = this;

	//private scope
	var hasLocalStorage = storageAvailable('localStorage');
	var endPoint = '/proxy_sd2c/service/d2c.encryption';
	const STORAGE_KEY = 'formFillData';
	var _user = null;
	var popupInAction = false;
	var _fetchingUser = true;
	var formPopulated = [];

	/**
	 * A map of user properties and an array of their expected input(s) to find on the page
	 * @private
	 */
	var _inputMap = {
		name: [
			'input.name',
			'input[name="name"]'
		],
		postal: [
			'input.postal',
			'input[name="postal"]'
		],
		firstName: [
			'input.firstName',
			'input.firstname',
			'input[name="firstname"]',
			'input[name="firstName"]',
			'input#firstname',
			'input#firstName',
			'input#mini_fname'
		],
		lastName: [
			'input.lastName',
			'input.lastname',
			'input[name="lastname"]',
			'input[name="lastName"]',
			'input#lastname',
			'input#lastName',
			'input#mini_lname'
		],
		phone: [
			'input.phone',
			'input[name="phone"]',
			'input#mini_phone',
		],
		email: [
			'input.email',
			'input[name="email"]',
			'input#mini_email'
		]
	};

	/**
	 * The purpose will be to create functions to manipulate the user data.
	 * @private
	 */
	function mutate(user) {

		user.postal = user.postal.toUpperCase();
		user.firstName = user.firstName.trim();
		user.lastName = user.lastName.trim();

		emailHandler.userPostal = user.postal;

		user['name'] = (user.firstName + ' ' + user.lastName).trim();
		/**
		 * Add a getter property for the user name
		 */
		// Object.defineProperty(user, 'name', {
		// 	get() { return (this.firstName + ' ' + this.lastName).trim() }
		// });

		return user;
	}

	/**
	 * Posts value to server to encode
	 * @param value
	 * @private
	 */
	var _encode = function(value) {
		return $.ajax({
			type: 'POST',
			url: endPoint + '.set',
			data: value
		});
	};

	/**
	 * Posts value to server to get decoded value
	 * @param value
	 * @private
	 */
	var _decode = function(value) {
		return $.ajax({
			type: 'POST',
			url: endPoint + '.get',
			data: value
		});
	};

	/**
	 * Stores value into localStorage
	 * @param value
	 * @private
	 */
	var _setStorage = function(value) {
		localStorage.setItem(STORAGE_KEY, value);
	};

	/**
	 * Grabs value from localStorage
	 * @private
	 */
	var _getStorage = function() {
		return localStorage.getItem(STORAGE_KEY);
	};

	/**
	 * Grabs data from storage, decrypts it. Triggers callback with response
	 */
	var _load = function(cb) {
		if (!hasLocalStorage) return false;
		var stored = _getStorage();

		//Can't load anything if nothing is set
		if (stored === null) return false;

		_decode({data: stored}).done(function(response) {
			if (response && typeof cb === 'function') {
				try {
					cb(JSON.parse(response.data));
				} catch (e) {
					console.log(e);
				}
			}
		});
	};

	/**
	 * Saves data to localStorage, this function gets the encrypted value from the server and saves it
	 * @param data
	 * @returns {boolean}
	 */
	var _save = function(data) {
		if (!hasLocalStorage) return false;

		if (_user) {
			//if a property passed in is empty, try and fill it with already known _user data that was loaded
			//TODO causing issues with firstName lastName doubling, blocking for now
			// for(var prop in data) {
			// 	if (_user.hasOwnProperty(prop) && data[prop] === '') {
			// 		data[prop] = _user[prop];
			// 	}
			// }
			if (data.postal === '') {
				data.postal = _user.postal;
			}
		}

		_encode({data: JSON.stringify(data)}).done(function(response) {
			if (response) {
				_setStorage(response.data);
				//reset flags
				_resetAll();
			}
		});
	};

	/**
	 * Resets flags which determine various controls for filling the form
	 * @private
	 */
	var _resetAll = function() {
		_fetchingUser = true;
		_user = null;
		formPopulated.forEach(function(obj) {
			obj.filled = false;
		});
	};

	/**
	 * Looks for common fields within specified scope and tries to fill with appropiate data
	 * @private
	 */
	var _fill = function(scope) {
		//if the form was already populated, don't try filling it out again
		if (_isScopeFilled(scope)) {
			return;
		}

		//store values indicating this scope has been filled
		formPopulated.push({scope: scope, filled: true});

		for(var prop in _inputMap) {
			if (_user.hasOwnProperty(prop)) {
				//fill in the input and trigger and styling it may have
				scope.find($(_inputMap[prop].join(','))).val(_user[prop]).trigger('focus').trigger('blur');
			}
		}

		emit('form.filled');
	};

	/**
	 * Determines whether user info needs to be decode and tries to fill in fields within scope passed
	 * @param scope
	 * @private
	 */
	var _fillScope = function(scope) {

		/**
		 * Load _fill into a queue and when _user is ready, we can start filling in the scopes
		 */
		once('user.loaded', function() {
			_fill(scope);
		});

		if (_user === null && _fetchingUser) {
			_fetchingUser = false; //flag to only call _load once
			_load(function(user) {
				_user = mutate(user); //add virtual properties and any functions if nessacry for the user object
				emit('user.loaded');
			});
		}
		else if (_user) {
			emit('user.loaded');
		}
	};

	/**
	 * Determines whether selected scope fields have been filled out
	 * @param scope
	 * @returns {*}
	 * @private
	 */
	var _isScopeFilled = function(scope) {
		_scope = formPopulated.find(function(obj) {
			if (obj.scope.is(scope)) {
				return obj;
			}
		});

		return (_scope ? _scope.filled : false);
	};

	//Small event functions
	var _events = [];
	/**
	 * Emits specified event
	 * @param event
	 */
	var emit = function(event) {
		var length, events, args = [].slice.call(arguments, 1);

		if (_events[event]) {
			events = _events[event].slice(); //creates copy
			length = events.length;

			for (i = 0; i < length;i++) {
				events[i].apply(this, args);
			}
		}
	};

	/**
	 * Register event
	 * @param name
	 * @param fn
	 */
	var on = function(name, fn) {
		if (!_events[name]) {
			_events[name] = [];
		}

		_events[name].push(fn);
	};

	/**
	 * Register event to run once
	 * @param name
	 * @param fn
	 */
	var once = function(name, fn) {
		on(name, function e() {
			_events[name].splice(_events[name].indexOf(e), 1); //removes the event that was just added
			fn.apply(this, arguments);
		});
	};

	//Register events - page load
	$(function() {
		if (!hasLocalStorage) {
			return;
		}

		/**
		 * When popups are launched, fill in form with user data decoded from localStorage (if possible)
		 */
		$(document).on('popupizer.onOpen', function(e, popup) {
			popupInAction = true;
			_fillScope(popup.target);
		});

		$(document).on('popupizer.onClose', function(e, popup) {
			popupInAction = false;
		});

		//find all forms and populate onload
		$('form').each(function(idx, elem) {
			_fillScope($(elem));
		});

	});


	/**
	 * Expose some things to public.
	 * ---#NOTE#---
	 * 	For security reason, be absolutely sure NO user info can be accessed from outside of this scope
	 *
	 * @type {{save: _save}}
	 */
	self = {
		save: _save
	};

	return self;
})();
/** /js/jhashtable.js **/
var ___d2c_jhashtablejs_c_on="2020-08-05 14:08:12";var $jscomp={scope:{}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(a,h,d){if(d.get||d.set)throw new TypeError("ES3 does not support getters and setters.");a!=Array.prototype&&a!=Object.prototype&&(a[h]=d.value)};$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global?global:a};$jscomp.global=$jscomp.getGlobal(this);
$jscomp.polyfill=function(a,h,d,g){if(h){d=$jscomp.global;a=a.split(".");for(g=0;g<a.length-1;g++){var k=a[g];k in d||(d[k]={});d=d[k]}a=a[a.length-1];g=d[a];h=h(g);h!=g&&null!=h&&$jscomp.defineProperty(d,a,{configurable:!0,writable:!0,value:h})}};$jscomp.SYMBOL_PREFIX="jscomp_symbol_";$jscomp.initSymbol=function(){$jscomp.initSymbol=function(){};$jscomp.global.Symbol||($jscomp.global.Symbol=$jscomp.Symbol)};$jscomp.symbolCounter_=0;
$jscomp.Symbol=function(a){return $jscomp.SYMBOL_PREFIX+(a||"")+$jscomp.symbolCounter_++};$jscomp.initSymbolIterator=function(){$jscomp.initSymbol();var a=$jscomp.global.Symbol.iterator;a||(a=$jscomp.global.Symbol.iterator=$jscomp.global.Symbol("iterator"));"function"!=typeof Array.prototype[a]&&$jscomp.defineProperty(Array.prototype,a,{configurable:!0,writable:!0,value:function(){return $jscomp.arrayIterator(this)}});$jscomp.initSymbolIterator=function(){}};
$jscomp.arrayIterator=function(a){var h=0;return $jscomp.iteratorPrototype(function(){return h<a.length?{done:!1,value:a[h++]}:{done:!0}})};$jscomp.iteratorPrototype=function(a){$jscomp.initSymbolIterator();a={next:a};a[$jscomp.global.Symbol.iterator]=function(){return this};return a};$jscomp.array=$jscomp.array||{};
$jscomp.iteratorFromArray=function(a,h){$jscomp.initSymbolIterator();a instanceof String&&(a+="");var d=0,g={next:function(){if(d<a.length){var k=d++;return{value:h(k,a[k]),done:!1}}g.next=function(){return{done:!0,value:void 0}};return g.next()}};g[Symbol.iterator]=function(){return g};return g};$jscomp.polyfill("Array.prototype.entries",function(a){return a?a:function(){return $jscomp.iteratorFromArray(this,function(a,d){return[a,d]})}},"es6-impl","es3");
$jscomp.polyfill("Array.prototype.keys",function(a){return a?a:function(){return $jscomp.iteratorFromArray(this,function(a){return a})}},"es6-impl","es3");$jscomp.polyfill("Array.prototype.values",function(a){return a?a:function(){return $jscomp.iteratorFromArray(this,function(a,d){return d})}},"es6","es3");
var Hashtable=function(){function a(e){if("string"==typeof e)return e;if("function"==typeof e.hashCode)return e=e.hashCode(),"string"==typeof e?e:a(e);if("function"==typeof e.toString)return e.toString();try{return String(e)}catch(b){return Object.prototype.toString.call(e)}}function h(a,b){return a.equals(b)}function d(a,b){return"function"==typeof b.equals?b.equals(a):a===b}function g(a){return function(b){if(null===b)throw Error("null is not a valid "+a);if("undefined"==typeof b)throw Error(a+
" must not be undefined");}}function k(a,b,f,c){this[0]=a;this.entries=[];this.addEntry(b,f);null!==c&&(this.getEqualityFunction=function(){return c})}function l(a){return function(b){for(var f=this.entries.length,c,d=this.getEqualityFunction(b);f--;)if(c=this.entries[f],d(b,c[0]))switch(a){case 0:return!0;case 1:return c;case 2:return[f,c[1]]}return!1}}function p(a){return function(b){for(var f=b.length,c=0,d=this.entries.length;c<d;++c)b[f+c]=this.entries[c][a]}}function m(a,b){var f=a[b];return f&&
f instanceof k?f:null}function q(e,b){var f=this,c=[],d={},g="function"==typeof e?e:a,h="function"==typeof b?b:null;this.put=function(a,e){n(a);r(e);var b=g(a),f,l=null;(f=m(d,b))?(b=f.getEntryForKey(a))?(l=b[1],b[1]=e):f.addEntry(a,e):(f=new k(b,a,e,h),c[c.length]=f,d[b]=f);return l};this.get=function(a){n(a);var b=g(a);if(b=m(d,b))if(a=b.getEntryForKey(a))return a[1];return null};this.containsKey=function(a){n(a);var b=g(a);return(b=m(d,b))?b.containsKey(a):!1};this.containsValue=function(a){r(a);
for(var b=c.length;b--;)if(c[b].containsValue(a))return!0;return!1};this.clear=function(){c.length=0;d={}};this.isEmpty=function(){return!c.length};var l=function(a){return function(){for(var b=[],e=c.length;e--;)c[e][a](b);return b}};this.keys=l("keys");this.values=l("values");this.entries=l("getEntries");this.remove=function(a){n(a);var b=g(a),e=null,f=m(d,b);if(f&&(e=f.removeEntryForKey(a),null!==e&&!f.entries.length)){a:{for(a=c.length;a--;)if(f=c[a],b===f[0])break a;a=null}t(c,a);delete d[b]}return e};
this.size=function(){for(var a=0,b=c.length;b--;)a+=c[b].entries.length;return a};this.each=function(a){for(var b=f.entries(),e=b.length,c;e--;)c=b[e],a(c[0],c[1])};this.putAll=function(a,b){for(var e=a.entries(),c,d,g,h=e.length,k="function"==typeof b;h--;)c=e[h],d=c[0],c=c[1],k&&(g=f.get(d))&&(c=b(d,g,c)),f.put(d,c)};this.clone=function(){var a=new q(e,b);a.putAll(f);return a}}var t="function"==typeof Array.prototype.splice?function(a,b){a.splice(b,1)}:function(a,b){var f,c,d;if(b===a.length-1)a.length=
b;else for(f=a.slice(b+1),a.length=b,c=0,d=f.length;c<d;++c)a[b+c]=f[c]},n=g("key"),r=g("value");k.prototype={getEqualityFunction:function(a){return"function"==typeof a.equals?h:d},getEntryForKey:l(1),getEntryAndIndexForKey:l(2),removeEntryForKey:function(a){return(a=this.getEntryAndIndexForKey(a))?(t(this.entries,a[0]),a[1]):null},addEntry:function(a,b){this.entries[this.entries.length]=[a,b]},keys:p(0),values:p(1),getEntries:function(a){for(var b=a.length,d=0,c=this.entries.length;d<c;++d)a[b+d]=
this.entries[d].slice(0)},containsKey:l(0),containsValue:function(a){for(var b=this.entries.length;b--;)if(a===this.entries[b][1])return!0;return!1}};return q}();
/** /js/jquery.reveal.js **/
var ___d2c_jqueryrevealjs_c_on="2020-08-05 14:07:09";(function(b){b("a[data-reveal-id]").live("click",function(a){a.preventDefault();a=b(this).attr("data-reveal-id");b("#"+a).reveal(b(this).data())});b.fn.reveal=function(a){a=b.extend({},{animation:"fadeAndPop",animationspeed:300,closeonbackgroundclick:!0,dismissmodalclass:"close-reveal-modal",closeonescape:!0},a);return this.each(function(){function g(){"object"==typeof popupSupervisor&&setTimeout(popupSupervisor.reposition,1E3);h=!1}var c=b(this),e=parseInt(c.css("top")),l=c.height()+e,h=!1,d=b(".reveal-modal-bg");
0==d.length&&(d=b('<div class="reveal-modal-bg" />').insertAfter(c));c.bind("reveal:open",function(){var e="undefined"!=typeof window.innerHeight?window.innerHeight:b(window).height(),m=b(c).outerHeight();b(c).offset();b(document).scrollTop();var k=/Mobi/.test(navigator.userAgent)?5:20,f=(e-m)/2+k,f=f<k||e<m?k:f;0<b(".slotMachineContainer").length&&b(".slotMachineContainer").show();d.unbind("click.modalEvent");b("."+a.dismissmodalclass).unbind("click.modalEvent");h||(h=!0,"fadeAndPop"==a.animation&&
(c.css({top:b(document).scrollTop()-l,opacity:0,visibility:"visible"}),d.fadeIn(a.animationspeed/2),c.delay(a.animationspeed/2).animate({top:b(document).scrollTop()+f+"px",opacity:1},a.animationspeed,g())),"fade"==a.animation&&(c.css({opacity:0,visibility:"visible",top:b(document).scrollTop()+f}),d.fadeIn(a.animationspeed/2),c.delay(a.animationspeed/2).animate({opacity:1},a.animationspeed,g())),"none"==a.animation&&(c.css({visibility:"visible",top:b(document).scrollTop()+f}),d.css({display:"block"}),
g()),"externalAnimation"==a.animation&&(c.css({visibility:"visible",top:b(document).scrollTop()+f,display:"none"}).show(!0),d.css({display:"block"}),g()));c.unbind("reveal:open")});c.bind("reveal:close",function(){b("body").css("overflow","auto");b(".slotMachineContainer").hide();if(!h&&(h=!0,"fadeAndPop"==a.animation&&(d.delay(a.animationspeed).fadeOut(a.animationspeed),c.animate({top:b(document).scrollTop()-l+"px",opacity:0},a.animationspeed/2,function(){c.css({top:e,opacity:1,visibility:"hidden"});
g()})),"fade"==a.animation&&(d.delay(a.animationspeed).fadeOut(a.animationspeed),c.animate({opacity:0},a.animationspeed,function(){c.css({opacity:1,visibility:"hidden",top:e});g()})),"none"==a.animation&&(c.css({visibility:"hidden",top:e}),d.css({display:"none"})),"externalAnimation"==a.animation))c.hide(!0).one("animationEnd",function(){b(this).css({visibility:"hidden",top:e,display:"none"});d.css({display:"none"})});c.unbind("reveal:close");"undefined"!=typeof a.closed&&a.closed()});c.trigger("reveal:open");
b("."+a.dismissmodalclass).bind("click.modalEvent touchstart",function(){c.trigger("reveal:close")});a.closeonbackgroundclick&&(d.css({cursor:"pointer"}),d.bind("click.modalEvent",function(){c.trigger("reveal:close")}));a.closeonescape&&b("body").keyup(function(a){27===a.which&&c.trigger("reveal:close")})})}})(jQuery);
/** /js/genericMail.js **/
/**
* 											SAMPLE JAVASCRIPT CODE
* 
* Main class for managing generic email handling
*/
GenericMail = function(mailID){
	
	var mailPage = this;
	
	mailPage.mailID = mailID;

		/**
		* AJAX Callback for email sent
		* 
		* @param Boolean Success
		*/
	mailPage.emailSent = function(Success)
	{

		mailSentHandler = getMailSentHandler(mailPage.mailID);
		
		if (Success)
		{
			
			if (typeof mailSentHandler != 'undefined')
			{
				mailSentHandler.timeoutCallback = mailPage.msgSentFinishedHandler;
				mailSentHandler.showSuccess();
			}
			
			mailPage.clearForm();
		}
		else
		{
			if (typeof mailSentHandler != 'undefined')
			{
				mailSentHandler.timeoutCallback = mailPage.msgSentFinishedHandler;
				mailSentHandler.showFail();
			}
		}
	}
	
	/**
	 * Clear submitted form and also reset lead to be able send another email
	 */
	mailPage.clearForm = function() {
		
		var scope = mailPage.jqScope;
		
		if (typeof scope === 'undefined' || scope == '') {
			var boxLayer = '.InnerBoxLayer';
			if ($(boxLayer).length) {
				scope = boxLayer;
			}
			else {
				return;
			}
		}
		
		//Clear form inputs
		$('.jqTransformInputWrapper input, .jqTransformTextarea textarea', scope).each(function() {
			$(this).val('');
			$(this).Watermark($(this).attr('alt'));
		});
		
		//Reset lead sent
		$('#footerDiv #leadSent').remove();
	}
		
		/**
		* overridable finish handler
		*/
	mailPage.msgSentFinishedHandler = function()
		{

		}
		
		mailPage.bandpLink = function( noUIText ){
			return emailHandler.bandpLink( noUIText );
		}
		/**
		* Persist email and submit it
		* 
		* @returns {Boolean}
		*/
		mailPage.save = function (event)
		{
			if( typeof debug !== 'undefined' ) { debug(event) }
			if (!mailPage._validateFields())return false;
			
			// Persist email
			mailPage.prepare();
			
			// Send email
			emailHandler.sendMail();
		}
		
		/**
		* Persist w/o sending
		**/
		mailPage.prepare = function()
		{
			var numberFormater = function (nStr)
			{
				nStr += '';
				x = nStr.split('.');
				x1 = x[0];
				x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1)) {
					x1 = x1.replace(rgx, '$1' + ',' + '$2');
				}
				return x1 + x2;
			}
			var scope = (mailPage.jqScope) ? mailPage.jqScope : '.InnerBoxLayer'
			var subject = '';
			var body = '';
					var messageBody = '';
					var sendTo = '';
					var sendToADF = '';

			if ($('#emailSubjectDef_'+mailPage.mailID, scope).length > 0) {
				subject = $('#emailSubjectDef_'+mailPage.mailID, scope).text();
			}
			else if( $('#emailSubjectDef', scope).length > 0 ) {
				subject = $('#emailSubjectDef', scope).text();
			} else {
				subject = $('#emailSubjectDef').text();
			}

			if ($('#emailBodyDef_'+mailPage.mailID, scope).length > 0) {
				body = $('#emailBodyDef_'+mailPage.mailID, scope).html();
			}
			else if( $('#emailBodyDef', scope).length ) {
				body = $('#emailBodyDef', scope).html();
			} else {
				body = $('#emailBodyDef').html();
			}
			


			/* quick fix. @TODO: add unique selector for each email template on the page.  * /
			var subject = $('#emailSubjectDef').text();
			var body = $('#emailBodyDef').html();
			
			if(mailPage.mailID=='ContactRequest' ){ // menu top contactus form (same as contact us page form for now)
				var emailSubjectDefContactUs = $('#emailSubjectDefContactUs');
				var emailBodyDefContactUs = $('#emailBodyDefContactUs');

				if(emailSubjectDefContactUs.length>0 && emailBodyDefContactUs.length>0){
					subject = $('#emailSubjectDefContactUs').text();
					body = $('#emailBodyDefContactUs').html();
				}
			}
			/**/

			var isDemo = (typeof $('#textIsDemo').attr('id') != 'undefined' && $('#textIsDemo').val() == '1' ? true : false);

			
			// Some specialized code based on which email we're sending
			switch(mailPage.mailID){
				
				case 'QuickEmail':
				case 'QuickEmailNewInventory':
				case 'menuContactUs':
							emailHandler.popupdiv = 'quickEmailForm';
							mailQuickEmail.assignValues();
							body = body.replace(/{\$NAME}/g, d2cmedia.capitaliseFirstLetterOfEveryWord(mailQuickEmail.name)).replace(/{\$EMAIL}/g, mailQuickEmail.email);
							body = body.replace(/{\$EMAILPHONE}/g, mailQuickEmail.phone).replace(/{\$MESSAGE}/g, mailQuickEmail.message);
							body = body.replace(/{\$EMAILMAKE}/g, mailQuickEmail.make).replace(/{\$EMAILMODEL}/g, mailQuickEmail.model);
							body = body.replace(/{\$EMAILYEAR}/g, mailQuickEmail.year).replace(/{\$STOCKNUMBER}/g, mailQuickEmail.stockNumber);
							body = body.replace(/{\$DEPARTMENT2}/g, mailQuickEmail.department);
							
							
							body = body.replace(/City:/g, '');
					
							if (typeof mailQuickEmail.roadTest != 'undefined' && mailQuickEmail.roadTest != null)
							{
									body = body.replace(/{\$EMAILROADTEST}/g, mailQuickEmail.roadTest).replace(/{\$EMAILCARD}/g, mailQuickEmail.giftCard);
							}

							emailHandler.userEmail = mailQuickEmail.email;
							emailHandler.userFirstName = mailQuickEmail.name;
							emailHandler.userPhone = mailQuickEmail.phone;

							messageBody = mailQuickEmail.message;

							emailHandler.trim = $("#expresscartrim").val();
							emailHandler.vin = $("#expresscarvin").val();
							emailHandler.price = $("#expresscarprice").val();
							emailHandler.make = $("#expresscarmake").val();
							emailHandler.model = $("#expresscarmodel").val();
							emailHandler.year = $("#expresscaryear").val();

							emailHandler.stockNumber = mailQuickEmail.stockNumber;
							if (typeof $("#expresscarid").attr('id') == 'undefined')emailHandler.carid = '';
							else emailHandler.carid = $("#expresscarid").val();

							$("input.labelemail").val('Demandes-Express');
							$("input.isexpress").val('1');
							if (typeof searchEngine != 'undefined')
							{
									$("input.brandemail").val(mailQuickEmail.make);
									$("input.modelemail").val(mailQuickEmail.model);
									$("input.yearemail").val(mailQuickEmail.year);
							}


							if (typeof $("#expresscarid").attr('id') != 'undefined')
							{
									if ($("#expresscarid").val().length > 0) {
											emailHandler.condition = "Used";
									}
									else if (mailQuickEmail.make.length > 0) {
											emailHandler.condition = "New";
									}
									else emailHandler.condition = "Unknown";
							}else
							{
									emailHandler.condition = "Unknown";
							}

							if (mailQuickEmail.department !== '') {
								emailHandler.department = mailQuickEmail.department;
				}
			
					sendTo = mailQuickEmail.getSendTo();
					break;
			case 'RebateCouponPromo':
					mailQuickEmail.assignValues();
					messageBody = mailQuickEmail.message;
					body = body.replace(/{\$NAME}/g, d2cmedia.capitaliseFirstLetterOfEveryWord(mailQuickEmail.name)).
					replace(/{\$EMAIL}/g, mailQuickEmail.email);
					body = body.replace(/{\$EMAILPHONE}/g, mailQuickEmail.phone).
					replace(/{\$MESSAGE}/g, mailQuickEmail.message);
					body = body.replace(/{\$COUPONMAKE}/g, $("#couponmake").val()).replace(/{\$COUPONMODEL}/g, $("#couponmodel").val());
					body = body.replace(/{\$COUPONYEAR}/g, $("#couponyear").val()).replace(/{\$COUPONSTOCKNUMBER}/g, $("#couponstocknumber").val());
					body = body.replace(/{\$COUPONVALUE}/g, $("#couponValue").val() + '$').replace(/{\$PRICE}/g, $("#vehicleOrigPrice").val() + '$');

					emailHandler.make = $("#couponmake").val();
					emailHandler.model = $("#couponmodel").val();
					emailHandler.year = $("#couponyear").val();

					emailHandler.userEmail = mailQuickEmail.email;
					emailHandler.userFirstName = mailQuickEmail.name;
					emailHandler.userPhone = mailQuickEmail.phone;

					emailHandler.trim = $("#couponvehicletrim").val();
					emailHandler.vin = $("#couponvehiclevin").val();
					emailHandler.price = $("#vehicleOrigPrice").val();
					emailHandler.stockNumber = $("#couponstocknumber").val();

					emailHandler.carid = $("#couponvehicleid").val();

					$("input.labelemail").val('RebateCouponPromo');
					if (typeof searchEngine != 'undefined')
						{
						$("input.brandemail").val($("#couponmake").val());
						$("input.modelemail").val($("#couponmodel").val());
						$("input.yearemail").val($("#couponyear").val());
					}

					emailHandler.condition = "Used";
					mailPage.emailSent = function(Success){$('a.close-reveal-modal').trigger('click');}

					break;

				case 'CarproofMail':
					emailHandler.popupdiv = 'carproofMainDiv';

					subject = $('#emailSubjectDef2').text();
					body = $('#emailBodyDef2').html();
					
					$("input.labelemail").val('Demandes-CarProof');
					$("input.isexpress").val('0');
					$("input.brandemail").val(carproofHandler.make);
					$("input.modelemail").val(carproofHandler.model);
					$("input.yearemail").val(carproofHandler.year);

					body = body.replace(/{\$NAME}/g, d2cmedia.capitaliseFirstLetterOfEveryWord(carproofHandler.name)).replace(/{\$EMAIL}/g, carproofHandler.email);
					body = body.replace(/{\$EMAILMAKE}/g, carproofHandler.make).replace(/{\$EMAILMODEL}/g, carproofHandler.model).replace(/{\$EMAILYEAR}/g, carproofHandler.year);
					body = body.replace(/{\$COLOR}/g, carproofHandler.color).replace(/{\$STOCKNUMBER}/g, carproofHandler.stockNumber).replace(/{\$EMAILPHONE}/g, carproofHandler.phone);

					emailHandler.userEmail = carproofHandler.email;
					emailHandler.userFirstName = carproofHandler.name;
					emailHandler.userPhone = carproofHandler.phone;
					emailHandler.make = carproofHandler.make;
					emailHandler.model = carproofHandler.model;
					emailHandler.year = carproofHandler.year;
					emailHandler.trim = $("#carproofcartrim").val();
					emailHandler.vin = $("#carproofcarvin").val();
					emailHandler.price = $("#carproofcarprice").val();
					emailHandler.stockNumber = carproofHandler.stockNumber;
					emailHandler.carid = $("#carproofcarid").val();
					sendTo = carproofHandler.sendTo.length && carproofHandler.sendTo != '' ? carproofHandler.sendTo : ($("#textSendToEmail").length ? $("#textSendToEmail").val() : '');
					sendToADF = $("#textSendToEmailADF").length ? $("#textSendToEmailADF").val() : '';
					emailHandler.dealerName = carproofHandler.dealerName;

					break;
				case 'CustomerRating':
					emailHandler.popupdiv = 'CustomerRating';
					mailRating.assignValues();

					body = body.replace(/{\$RATINGMESSAGE}/g, mailRating.message)
								.replace(/{\$LNAME}/g, d2cmedia.capitaliseFirstLetterOfEveryWord(mailRating.userLastName))
								.replace(/{\$FNAME}/g, d2cmedia.capitaliseFirstLetterOfEveryWord(mailRating.userFirstName))
								.replace(/{\$EMAIL}/g, mailRating.userEmail)
								.replace(/{\$PHONE}/g, mailRating.userPhone)
								.replace(/{\$RATINGSTARS}/g, mailRating.rating)
								.replace(/{\$CLIENTNAME}/g, mailRating.userFirstName+' '+mailRating.userLastName);
					
					subject = subject.replace(/{\$CLIENTNAME}/g, mailRating.userFirstName+' '+mailRating.userLastName);

					emailHandler.vin = "";
					emailHandler.price = 0;
					emailHandler.stockNumber = "";
					emailHandler.carid = "";
					emailHandler.condition = "Unknown";

					emailHandler.userFirstName = mailRating.userFirstName;
					emailHandler.userLastName = mailRating.userLastName;
					emailHandler.userPhone = mailRating.userPhone;
					emailHandler.userEmail = mailRating.userEmail;
					sendTo = mailRating.sendTo;
					sendToADF = '  ';
					break;
				case 'headerService':
					emailHandler.popupdiv = 'menuService';
					serviceForm_headerService.setEmailSentCallback();
					body = serviceForm_headerService.setEmailHandlerValuesAndBody(body);
					sendTo = serviceForm_headerService.getSendTo();
					subject = subject + ' Express';
					break;
				case 'menuService':
					emailHandler.popupdiv = 'menuService';
					serviceForm_menuService.setEmailSentCallback();
					body = serviceForm_menuService.setEmailHandlerValuesAndBody(body);
					sendTo = serviceForm_menuService.getSendTo();
					subject = subject + ' Express';
					break;
				default:

					if (sendTo ==''  && typeof $('#textSendToEmail').attr('id') != 'undefined'){
					 sendTo = $('#textSendToEmail').val();
					}

					if (sendToADF =='' && typeof $('#textSendToEmailADF').attr('id') != 'undefined' && $('#textSendToEmailADF').val().length > 3 ){
						sendToADF = $('#textSendToEmailADF').val();
					}	

					if (typeof mailVehicleWidget != 'undefined')
					{
						mailVehicleWidget.assignValues();
						body = body.replace(/{\$EMAILMAKE}/g, mailVehicleWidget.make)
							.replace(/{\$EMAILMODEL}/g, mailVehicleWidget.model)
							.replace(/{\$EMAILYEAR}/g, mailVehicleWidget.year)
							.replace(/{\$COLOR}/g, mailVehicleWidget.color)
							.replace(/{\$EMAILSTOCKNUMBER}/g, mailVehicleWidget.stockNumber)
							.replace(/{\$STOCKNUMBER}/g, mailVehicleWidget.stockNumber)
							.replace(/{\$FROMYEAR}/g, mailVehicleWidget.fromYear)
							.replace(/{\$TOYEAR}/g, mailVehicleWidget.toYear)
							.replace(/{\$INTENTION}/g, mailVehicleWidget.intention)
							.replace(/{\$PLATES}/g, mailVehicleWidget.plates)
							.replace(/{\$VIN}/g, mailVehicleWidget.vin);
						
						if( mailVehicleWidget.odomoter ){
							body = body.replace(/{\$KM}/g, numberFormater(mailVehicleWidget.odomoter))
						}

						if ($("input.brandemail").length) $("input.brandemail").val(mailVehicleWidget.make);
						if ($("input.modelemail").length) $("input.modelemail").val(mailVehicleWidget.model);
						if ($("input.yearemail").length) $("input.yearemail").val(mailVehicleWidget.year);
						
						emailHandler.make = mailVehicleWidget.make;
						emailHandler.model = mailVehicleWidget.model;
						emailHandler.year = mailVehicleWidget.year;
						emailHandler.trim = $("#cartrim").val();
						emailHandler.vin = mailVehicleWidget.vin;
						emailHandler.price = $("#carprice").val();
						emailHandler.stockNumber = mailVehicleWidget.stockNumber;
						emailHandler.carid = $("#carid").val();

						if ($("#carid").val().length > 0 || emailHandler.year < new Date().getFullYear()) {
							emailHandler.condition = "Used";
						}
						else if (mailVehicleWidget.make.length > 0 ) {
							emailHandler.condition = "New";
						}
						else emailHandler.condition = "Unknown";
					}

					body = body.replace(/{\$PLATES}/g, '');

					
					if (typeof mailVehicleWidgetEx != 'undefined' && $("#vehicleSelectFormEx").length){
						mailVehicleWidgetEx.assignValues();
						body = body.replace(/{\$MAKEEX}/g, mailVehicleWidgetEx.make)
											 .replace(/{\$MODELEX}/g, mailVehicleWidgetEx.model)
											 .replace(/{\$YEAREX}/g, mailVehicleWidgetEx.year)
											 .replace(/{\$COLOREX}/g, mailVehicleWidgetEx.color)
											 .replace(/{\$TRIMEX}/g, mailVehicleWidgetEx.trim)
											 .replace(/{\$TRANSMISSION}/g, mailVehicleWidgetEx.transmission)
											 .replace(/{\$KM}/g, numberFormater(mailVehicleWidgetEx.odomoter))
											 .replace(/{\$VINEX}/g, mailVehicleWidgetEx.vin)
											 .replace(/{\$DRIVETRAIN}/g, mailVehicleWidgetEx.drivetrain)
											 .replace(/{\$GAS}/g, mailVehicleWidgetEx.fuel);					

						if ($("input.brandemail").length && mailVehicleWidgetEx.make.length  > 0) $("input.brandemail").val(mailVehicleWidgetEx.make );
						if ($("input.modelemail").length && mailVehicleWidgetEx.model.length > 0) $("input.modelemail").val(mailVehicleWidgetEx.model);
						if ($("input.yearemail").length && mailVehicleWidgetEx.make.length > 0) $("input.yearemail").val(mailVehicleWidgetEx.year);
						
						emailHandler.make = mailVehicleWidgetEx.make;
						emailHandler.model = mailVehicleWidgetEx.model;
						emailHandler.year = mailVehicleWidgetEx.year;
						emailHandler.trim = mailVehicleWidgetEx.trim;

						if(typeof emailHandler.isTradeInBar =='undefined' ){
							if (mailPage.mailID == "PriceVehicle" || mailPage.mailID == "PriceVehicleNew" || mailPage.mailID == "EstheticRequest") {
								emailHandler.make = mailVehicleWidget.make;
								emailHandler.model = mailVehicleWidget.model;
								emailHandler.year = mailVehicleWidget.year;
								emailHandler.trim = mailVehicleWidget.trim;
							
								if (mailPage.mailID == "PriceVehicle" || mailPage.mailID == "PriceVehicleNew"){ // tradein
									emailHandler.car2_make = mailVehicleWidgetEx.make;
									emailHandler.car2_model= mailVehicleWidgetEx.model;					
									emailHandler.car2_trim= mailVehicleWidgetEx.trim
									emailHandler.car2_year= mailVehicleWidgetEx.year;
									emailHandler.car2_color= mailVehicleWidgetEx.color;
									emailHandler.car2_odometer= numberFormater(mailVehicleWidgetEx.odomoter);
									emailHandler.car2_vin= mailVehicleWidgetEx.vin;
									emailHandler.car2_transmisson= mailVehicleWidgetEx.transmission;
									emailHandler.car2_drivetrain= mailVehicleWidgetEx.drivetrain;
									emailHandler.car2_fueltype= mailVehicleWidgetEx.fuel;
								}
							}
						}

						emailHandler.vin = "";
						emailHandler.price = 0;
						emailHandler.stockNumber = "";
						emailHandler.carid = "";

						if ($("#carid").val().length > 0) {
							emailHandler.condition = "Used";
						}
						else if (mailVehicleWidgetEx.make.length > 0) {
							emailHandler.condition = "New";
						}
						else emailHandler.condition = "Unknown";
					}				

					/* checking if Service Request has any service packages selected. */
					if (typeof $('#servicePackages').prop('id') != 'undefined') {
						var hasServices = false;
						var services    = '';

						$('input.selectedService').each(function (idx, elem) {
							var checkbox = $(elem);

							if (checkbox.is(':checked')) {
								services += '<br>' + checkbox.val();
								hasServices = true;
							}
						});

						if (hasServices) {
							services = '<br><br><u>' + $('#selectedServicesTitle').val() + '</u>' + services;
						}

						body = body.replace(/{\$SELECTEDSERVICES}/g, services);
					}
					/**/
									
					if (typeof mailUserInfo != 'undefined')
					{
						mailUserInfo.assignValues();
						body = body.replace(/{\$FNAME}/g, d2cmedia.capitaliseFirstLetterOfEveryWord(mailUserInfo.firstName)).replace(/{\$LNAME}/g, d2cmedia.capitaliseFirstLetterOfEveryWord(mailUserInfo.lastName)).replace(/{\$EMAILPHONE}/g, mailUserInfo.phone).replace(/{\$EMAIL}/g, mailUserInfo.email);
					}
									
					if (typeof mailJobOffer != 'undefined')
					{
							mailJobOffer.assignValues();
							body = body.replace(/{\$JOBPOST}/g, d2cmedia.capitaliseFirstLetterOfEveryWord(mailJobOffer.jobPositon))
										.replace(/{\$JOBDEPARTMENT}/g, d2cmedia.capitaliseFirstLetterOfEveryWord(mailJobOffer.jobDepartment))
										.replace(/{\$JOBMSG}/g, mailJobOffer.jobMessage);
					}

					if (typeof mailUserAddress != 'undefined')
					{
							mailUserAddress.assignValues();
							var address = $.trim(mailUserAddress.addressApp+" "+mailUserAddress.addressNumber+" "+mailUserAddress.addressStreet);
							body = body.replace(/{\$CURRENTADDRESS}/g, address)
											 .replace(/{\$CURRENTCITY}/g, mailUserAddress.city)
											 .replace(/{\$CURRENTPROVINCE}/g, mailUserAddress.province)
											 .replace(/{\$CURRENTPOSTALCODE}/g, mailUserAddress.postalCode);

					}

                    if (typeof mailSchedule != 'undefined')
                    {
                        mailSchedule.assignValues();
                        body = body.replace(/{\$DATE1}/g, mailSchedule.firstChoice)
                                   .replace(/{\$DATE2}/g, mailSchedule.secondChoice)
	                               .replace(/{\$WAITINGONSITE}/g, mailSchedule.waitingOnSite);
                    }

					var payment = '';
					var offer = '';
					var paymentTerm = '';
					
					if (typeof $('#financeOptionDiv').attr('id') != 'undefined')
					{
						if ($('#financeOptionDiv input').attr("checked") == "checked"){
							payment = $('#textCash').val();
						} else if ($('#financeOptionDiv2 input').attr("checked") == "checked"){
							payment = $('#textFinance').val();
							paymentTerm = $('#financeTermSelect').val();
						} else {
							payment = $('#textLease').val();
							paymentTerm = $('#financeTermSelect').val();
						}

						if (typeof $('#vehicleOffer').attr('id') != 'undefined')
						{
													offer = '$' + numberFormater($('#vehicleOffer').val());
						}

						body = body.replace(/{\$PAYMENT}/g,payment)
											 .replace(/{\$PAYMENTTERM}/g,paymentTerm)
											 .replace(/{\$OFFER}/g, offer);
									}
					
					if (typeof $('#questionsComments').attr('id') != 'undefined')
					{
						messageBody = $('#questionsComments').val();
						body = body.replace(/{\$QUESTIONS}/g, $('#questionsComments').val());
						emailHandler.comments =  $('#questionsComments').val();
					}
									
					if (typeof $('#requestType').attr('id') != 'undefined')
					{
							body = body.replace(/{\$DEMANDE}/g, $('#requestType').val());
					}
					//console.log('emailHandler.userPhone',emailHandler.userPhone);
			}

			if($('#testDriveType').length){
				body = body.replace(/{\$TESTDRIVETYPE}/g, $('#testDriveType').val());
				if($('#testDriveType').val() == 'Virtual' || $('#testDriveType').val() == 'Virtuel'){
					body = body.replace(/{\$TESTDRIVEVIRTUAL}/g, $('#preferedVirtualTool').val());
				} else {
					body = body.replace(/{\$TESTDRIVEVIRTUAL}/g, 'N/A');
				}
			}

			if($(scope).find('#serviceEmailsSelect').length){
                emailHandler.dealerName = $(scope).find('#serviceEmailsSelect').find(":selected").html();
            } else if($('#isMobile').val() == '1' && $('#serviceEmailsSelect').length){
                emailHandler.dealerName = $('#serviceEmailsSelect').find(":selected").html();
            } /*else {//Doing this in emailHandler.js getJsonObject function. If emailHandler.dealerName is filled we use the current info, otherwise there is other rules to decide the dealer, so it's better to keep it empty at this point
				emailHandler.dealerName = $('#hiddenDealerName').val();
			}*/

            if (emailHandler.dealerName){
                body = body.replace("{$DEALERNAME}", emailHandler.dealerName);
            }

			
			body = body.replace(/{\$(DATE[12])}/g, function(fullMatch, match1){
				var el = $('input[name="'+(match1.toLowerCase())+'"]', scope);
				return (el.length > 0) ? (new Date(el.val())).dateFormat('Y-m-d H:i') : '';
			});
			
			// Add last viewed vehicle
			var lastViewedVehicle = "";
			if ($("#lastviewedmake").val().length > 0) {
				lastViewedVehicle = $("#lastviewedmake").val() + ' ' + $("#lastviewedmodel").val() + ' ' + $("#lastviewedyear").val() + ' '+$("#lastviewedstocknumber").val() ;
			}
			body = body.replace("{$LASTVEHICLEVIEWED}", lastViewedVehicle);
			
			/** Unreplaced vars to remove from the body */
			var blankRemovals = new RegExp('{\\$('+[
			'QUESTIONS',
			'MESSAGE',
			'RATINGMESSAGE',
			'EMAILPHONE',
			'EMAILMAKE',
			'EMAILMODEL',
			'EMAILYEAR',
			'PAYMENT',
			'PAYMENTTERM',
			'OFFER',
			'STOCKNUMBER',
			'COLOR',
			'FNAME',
			'LNAME',
			'EMAIL',
			'KM',
			'VINEX',
			'SELECTEDSERVICES',
			'EMAILCITY',
			'PLATES',
			'DATE1',
			'DATE2'
			].join('|')+')}', 'g');
			
			
			// Clear any fields that may have not been replaced due to blank data or error
			
			body = body.replace(blankRemovals, '');

			// Replace B and P with link or blank
			body = body.replace(/{\$EMAILBUILDANDPRICE}/g, mailPage.bandpLink());
							
			if (sendTo =='' && typeof $('#expressSendToEmail').attr('id') != 'undefined') {
				if (isDemo && typeof $('#expressSendToEmailNEW').attr('id') != 'undefined' && $('#expressSendToEmailNEW').val().length > 0) {
					sendTo = $('#expressSendToEmailNEW').val();
				}else {
					sendTo = $('#expressSendToEmail').val();
				}	
			}		
			
			if (sendToADF =='' &&  typeof $('#expressSendToEmailADF').attr('id') != 'undefined') {
				if (isDemo && typeof $('#expressSendToEmailADFNEW').attr('id') != 'undefined' && $('#expressSendToEmailADFNEW').val().length > 0){
					sendToADF = $('#expressSendToEmailADFNEW').val();
				} else if (emailHandler.department.toLowerCase() == 'service' || (mailPage && (mailPage.mailID == 'menuService' || mailPage.mailID == 'headerService' ))){
                    sendToADF = $('#expressSendToEmailADFSERVICE').val();
				}
				else{
					sendToADF = $('#expressSendToEmailADF').val();
				}	
			}

			// If DEMO need to set condition to New
			if (sendTo =='' && $("#expressInDemo").length && $("#expressInDemo").val() == '1') {
				emailHandler.condition = 'New';
				if ($("#expressSendToEmailNEW").val().length > 0) sendTo = $("#expressSendToEmailNEW").val();
			}

			/* CRM-376 */
			if(mailPage.mailID == 'QuickEmail' && typeof messageBody !=='undefined'  // quick email only DWP-3511
				&& messageBody.length>0 
				&& $('#serviceEmail').length>0 && $('#serviceAdfEmail').length>0)
			{
				terms = [	"rappel","service","huile","pieces","pi�ces","pneus","transmission","accessoires",
									"alternateur","antirouille","anti-rouille","batterie","baterie","r�paration","peinture",
									"freins","disques","carrosserie","catalyseur","choc","demarreur","�chappement","moteur",
									"essuie-glace","essui-glace"," feux","clignotant","klaxon","filtre","horloge","radio",
									"toit-ouvrant"," mag"," mags","m�canique","muffler","navigation","ordinateur"," phares",
									"lumi�res","lumiere","probl�me","probleme","recall","parts","tire","accessories",
									"alternator","rustproofing","battery","repair","paint","brake","disks"," body","starter",
									"exhaust","engine","wiper","wipers"," flash"," light","flasher","flashers"," horn","filter",
									"clock","roof","mecanic","computer","ecu","problem"];	    
				matchedTerms = [];
				$.each(terms, function(i,v) {
						var match = messageBody.indexOf(v);
						if(match > -1){
							sendTo = $('#serviceEmail').val();
							sendToADF =  $('#serviceAdfEmail').val();
							return false;				    
						}
				});
			}
			
			/**/

			emailHandler.subject = subject;
			emailHandler.body = body;
			emailHandler.sendTo = sendTo;
			emailHandler.sendFrom = '';
			emailHandler.mailID = mailPage.mailID;
			emailHandler.callback = mailPage.emailSent;
			
			if (typeof mailUserInfo != 'undefined' && (emailHandler.mailID != 'menuContactUs' && emailHandler.mailID != 'menuService') ) {
				emailHandler.userEmail = mailUserInfo.email;
				emailHandler.userFirstName = mailUserInfo.firstName;
				emailHandler.userLastName = mailUserInfo.lastName;
				emailHandler.userPhone = mailUserInfo.phone;
			}

			if (typeof mailJobOffer != 'undefined') {
					emailHandler.userAttachmentPath = mailJobOffer.jobFile;
					sendToADF = ''; //DWP-2407
			}
			emailHandler.sendToADFFormat = sendToADF;

			if (emailHandler.body.toLowerCase().indexOf("test@d2cmedia.ca") != -1) {
					$("input.testmode").val("1");
			}

            if($(scope).find('#serviceEmailsSelect').length){
                emailHandler.sendTo = $(scope).find('#serviceEmailsSelect').val();
            } else if($('#isMobile').val() == '1' && $('#serviceEmailsSelect').length){
                emailHandler.sendTo = $('#serviceEmailsSelect').val();
			}
		
		}
		
		/**
		* Internal field validation method
		* 
		* @returns {Boolean}
		*/
		mailPage._validateFields = function (event)
		{
			
				
			var fieldsValidated = false;
			var curErrorMsg = $('#MissingValidationMsg').html();
					var scope = this.jqScope;
			
			if(scope == '#quickEmailForm')  return true; // we did validation for quickEmailForm already.
			
			$.validity.start();
			
			var backupScope = '.InnerBoxLayer';
			
			//Not all pages are converted to fullwidth yet, some might still be using older scope
			if ($('.main_left_box').length > 0) {
				 backupScope = '.main_left_box';
			}

			scope = (mailPage.jqScope) ? mailPage.jqScope : backupScope;
			if( $(scope).length < 1 ){
				scope = '#newdetails'; // Mobile default
			}
			if( $(scope).length < 1 ){
				scope = '.new-details'; // Mobile backup default
			}
			if( $(scope).length < 1 ){
				scope = 'body';
			}
		
			if( typeof debug !== 'undefined' ) { debug(event) }
			var $required = $(scope).find('.required,.validate');

			$required.filter('.required').each(function(){
				$(this).require().nonHtml();
			});
			
			$required.filter('.require-with-watermark').each(function() {
				$(this).require().requireWithWatermark().nonHtml();
			});

			$required.filter('.required-phone').each(function() {
				$(this).require().validatePhone();
			});
			
			var phoneFields = $('#phone1,#phone2,#phone3',scope).filter(':visible');
			if(phoneFields.length > 0){
				var phoneNum = phoneFields[0].value + phoneFields[1].value + phoneFields[2].value
				if( phoneNum.length > 0 ){
					$(phoneFields).validatePhone();
				}
			}
			
			 $required.filter('.zip').each(function(){
				if(!$(this).is('.required') && $(this).val().length == 0){
					return;
				}
				$(this).requirePostalCode();
			});
			
			if($('.vin').length==1){			
				if($('.vin').is('.required')){
					$('.vin').require().nonHtml();
				}

				if ($('.vin').val().length>0){
					$('.vin').minLength(17);
				}
			}

			if($('.vinEx').length==1){
				if($('.vinEx').is('.required')){
					$('.vinEx').require().nonHtml();
				}

				if ($('.vinEx').val().length>0){
					$('.vinEx').minLength(17);
				}
			}

			$required.filter('.email').each(function(){
				if(!$(this).is('.required') && $(this).val().length == 0){
					return;
				}
				$(this).validEmailAddress();
			});
			
			$(scope).find('.validate-group').each(function(){
				var group = $(this).val();
				$(group,scope).validAllorNone();
			});
			
			$required.filter('.upload').each(function(){
				if(!$(this).is('.required') && $(this).val().length == 0){
						return;
				}
				
				if($(this).val() == ''){
						$('#uploadStatus').css('color', 'red');
						$('#uploadStatus').html($('#fileUploadRequest').val());
						$('#uploadStatus').show();
				}
				
			});

			var curErrors = $.validity.report.errors;
			
			$('#email').match('email'); 

			if($.validity.report.errors > curErrors){
				var errorText = $('#MissingValidationMsg').text() + '.<br/>' + $('#emailErrorMsg', '#userInfoForm').val() + '.';
				if(curErrors == 0) errorText = $('#emailErrorMsg', '#userInfoForm').val();
				$('#MissingValidationMsg').html(errorText);
			}
			
			if( typeof mailUserInfo != 'undefined' && typeof mailUserInfo.addedValidation == 'function'  ){
				mailUserInfo.addedValidation( scope );
			}
			

			var result = $.validity.end();
			if (!result.valid) {
				$('#MissingValidationMsg').show();
				$('#MissingValidationMsg').center();
				$(document).one('mousedown',  function(event){
					$.validity.clear();
					$('#MissingValidationMsg').hide();
					$('#MissingValidationMsg').html(curErrorMsg);
				});
			}
			else {
				fieldsValidated = true;
			}

			return fieldsValidated;
		}
};


var mailPage = new GenericMail();

/**
* Hook in and apply JQTransform
*/
$(document).ready(function() {

		if (!$("#topismobile").length || $("#topismobile").val() == 0) $("#mailFinanceForm").jqTransform();
		if (!$("#topismobile").length || $("#topismobile").val() == 0) $("#mailQuestionCommentForm").jqTransform();
    if (!$("#topismobile").length || $("#topismobile").val() == 0) $("#sendEmailForm").jqTransform();
		if ($("#topismobile").length > 0 && $("#topismobile").val() > 1) mailPage.jqScope = '.new-details';
			
		$('#sendEmailForm button').on('click tap', mailPage.save);
		$('#sendEmailFormSubmit').on('click tap', mailPage.save);
		
		mailPage.mailID = $('#textSaveMailID').val();

		$.validity.setup({
			outputMode: "summary",
			scrollTo: false
		});
		jQuery.fn.center = function () {

			if ($("ismobile") && $('#sendEmailFormSubmit').length > 0) {
				this.css({
						position:'absolute',
						left: ($(window).width() - $('#MissingValidationMsg').outerWidth())/2,
						top: $('#sendEmailFormSubmit').position().top - 10
				});
			}
			else {
				this.css({
						position:'absolute',
						left: ($(window).width() - $('#container').outerWidth())/2,
						top: ($(window).height() - $('#container').outerHeight())/2
				});
			}

			return this;
		}
		
		// Log a form request FormLoaded
		if (typeof mailPage.mailID != "undefined") emailHandler.logFormRequest("FormLoaded",mailPage.mailID);
});
/** /js/genericPage.js **/
var ___d2c_genericPagejs_c_on="2020-08-05 14:12:24";var $jscomp={scope:{},findInternal:function(a,b,c){a instanceof String&&(a=String(a));for(var d=a.length,e=0;e<d;e++){var f=a[e];if(b.call(c,f,e,a))return{i:e,v:f}}return{i:-1,v:void 0}}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(c.get||c.set)throw new TypeError("ES3 does not support getters and setters.");a!=Array.prototype&&a!=Object.prototype&&(a[b]=c.value)};
$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global?global:a};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(a,b,c,d){if(b){c=$jscomp.global;a=a.split(".");for(d=0;d<a.length-1;d++){var e=a[d];e in c||(c[e]={});c=c[e]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&null!=b&&$jscomp.defineProperty(c,a,{configurable:!0,writable:!0,value:b})}};
$jscomp.polyfill("Array.prototype.find",function(a){return a?a:function(a,c){return $jscomp.findInternal(this,a,c).v}},"es6-impl","es3");
jQuery(function(){"undefined"!=typeof searchCriteria&&null!=searchCriteria&&searchCriteria.initialize();"undefined"!=typeof $("#shareOnFacebook").attr("id")&&$("#shareOnFacebook").attr("href",d2cmedia.getHttpText()+"://www.facebook.com/share.php?u="+escape(window.location.href));$(".customform").length&&(0!=$("#topismobile").length&&1==$("#topismobile").val()||$(".customform").jqTransform(),$('button, [type="button"]',".customform").on("click",function(a){a.preventDefault();customFormSubmit();return!1}),
$(".customform").on("submit",function(a){a.preventDefault();customFormSubmit();return!1}),$(".customform .customform_phone").focus(function(){$(".customform .customform_phone").mask("999 999-9999",{placeholder:" "})}))});function resizeMainWindow(){var a=$("#right_side_box").height()-35,b=$("#left_side_box").height();!isNaN(a)&&!isNaN(b)&&a>b&&($("#left_side_box").height(a),$("#footerDiv").css("padding","0px"))}
function customFormSubmit(){0<$("#emailSuccessMessage_customform").length&&($("#emailSuccessMessage_customform").parent().is("body")||$("#emailSuccessMessage_customform").appendTo("body"));0<$("#emailFailMessage_customform").length&&($("#emailFailMessage_customform").parent().is("body")||$("#emailFailMessage_customform").appendTo("body"));$.validity.start();var a=$(".customform");a.find(".customform_name").require();a.find(".customform_email").require().validEmailAddress();a.find(".customform_phone").require();
a.find(".customform_msg").require();var b=$.validity.end(),c=a.find(".MissingValidationMsgCustomForm");if(!b.valid)return c.html($("#customFormErrorMsg").val()),c.css({position:"absolute",top:a.height()+10,width:301}),c.show(),$(document).bind("mousedown",function(a){$.validity.clear();c.hide();$(this).unbind(a)}),!1;emailHandler.subject=$("#emaildef_"+$("#customForm_mailid").val()+" .emailSubject").html();emailHandler.body=$("#emaildef_"+$("#customForm_mailid").val()+" .emailBody").html();var b=
$("#customForm_sendto").val(),d=$("#customForm_sendtoADF").val();emailHandler.popupdiv="customform";emailHandler.sendTo=b;emailHandler.sendToADFFormat=d;emailHandler.department=$("#customForm_originalsendto").val();emailHandler.condition=$("#customForm_originalsendto").val().toLowerCase();emailHandler.mailID="CustomPageForm";emailHandler.userEmail=a.find(".customform_email").val();b=a.find(".customform_name").val();0<b.length&&(b=b.split(" "),emailHandler.userFirstName=b[0],emailHandler.userLastName=
1<b.length?b[1]:"",b=emailHandler.userFirstName,0<emailHandler.userLastName.length&&(b+=" "+emailHandler.userLastName));emailHandler.userPhone=a.find(".customform_phone").val();emailHandler.leadTitleUIText=$("#customForm_requesttype_uitext").val();emailHandler.body=emailHandler.body.replace(/{\$MNAME}/g,d2cmedia.capitaliseFirstLetterOfEveryWord(b));emailHandler.body=emailHandler.body.replace(/{\$MMAIL}/g,emailHandler.userEmail);emailHandler.body=emailHandler.body.replace(/{\$MPHONE}/g,emailHandler.userPhone);
emailHandler.body=emailHandler.body.replace(/{\$QUESTIONS}/g,a.find(".customform_msg").val());emailHandler.body=emailHandler.body.replace(/{\$CUSTOMPAGENAME}/g,$("#customPageName").val());emailHandler.body=emailHandler.body.replace(/{\$DEMANDE}/g,$("#customForm_requesttype").val());emailHandler.subject=emailHandler.subject.replace(/{\$DEMANDE}/g,$("#customForm_requesttype").val());b=$("#customForm_msgfieldname").val();emailHandler.body=emailHandler.body.replace(/{\$QUESTIONSTITLE}/g,b);b=function(a){a?
mailSentHandler_customform.showSuccess():mailSentHandler_customform.showFail()};emailHandler.callback="undefined"!==typeof mailSentHandler_customform?b:mailPage.emailSent;emailHandler.sendMail();a.find(".customform_name").val("");a.find(".customform_email").val("");a.find(".customform_phone").val("");a.find(".customform_msg").val("");return!1}$(window).load(resizeMainWindow);
/** /js/printThis.js **/
var ___d2c_printThisjs_c_on="2020-08-05 14:13:42";var $jscomp={scope:{},findInternal:function(a,d,c){a instanceof String&&(a=String(a));for(var e=a.length,b=0;b<e;b++){var m=a[b];if(d.call(c,m,b,a))return{i:b,v:m}}return{i:-1,v:void 0}}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(a,d,c){if(c.get||c.set)throw new TypeError("ES3 does not support getters and setters.");a!=Array.prototype&&a!=Object.prototype&&(a[d]=c.value)};
$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global?global:a};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(a,d,c,e){if(d){c=$jscomp.global;a=a.split(".");for(e=0;e<a.length-1;e++){var b=a[e];b in c||(c[b]={});c=c[b]}a=a[a.length-1];e=c[a];d=d(e);d!=e&&null!=d&&$jscomp.defineProperty(c,a,{configurable:!0,writable:!0,value:d})}};
$jscomp.polyfill("Array.prototype.find",function(a){return a?a:function(a,c){return $jscomp.findInternal(this,a,c).v}},"es6-impl","es3");
(function(a){function d(a,b){b&&a.append(b.jquery?b.clone():b)}function c(b,c,d){var f=c.clone(d.formValues);d.formValues&&e(c,f,"select, textarea");d.removeScripts&&f.find("script").remove();d.printContainer?f.appendTo(b):f.each(function(){a(this).children().appendTo(b)})}function e(b,c,d){var f=b.find(d);c.find(d).each(function(b,c){a(c).val(f.eq(b).val())})}var b;a.fn.printThis=function(e){b=a.extend({},a.fn.printThis.defaults,e);var n=this instanceof jQuery?this:a(this);e="printThis-"+(new Date).getTime();
if(window.location.hostname!==document.domain&&navigator.userAgent.match(/msie/i)){var p='javascript:document.write("<head><script>document.domain=\\"'+document.domain+'\\";\x3c/script></head><body></body>")',f=document.createElement("iframe");f.name="printIframe";f.id=e;f.className="MSIE";document.body.appendChild(f);f.src=p}else a("<iframe id='"+e+"' name='printIframe' />").appendTo("body");var h=a("#"+e);b.debug||h.css({position:"absolute",width:"0px",height:"0px",left:"-600px",top:"-600px"});
setTimeout(function(){function e(a,b){var c;c=a.get(0);c=c.contentWindow||c.contentDocument||c;c=c.document||c.contentDocument||c;c.open();c.write(b);c.close()}b.doctypeString&&e(h,b.doctypeString);var f=h.contents(),k=f.find("head"),l=f.find("body"),g=a("base"),g=!0===b.base&&0<g.length?g.attr("href"):"string"===typeof b.base?b.base:document.location.protocol+"//"+document.location.host;k.append('<base href="'+g+'">');b.importCSS&&a("link[rel=stylesheet]").each(function(){var b=a(this).attr("href");
if(b){var c=a(this).attr("media")||"all";k.append("<link type='text/css' rel='stylesheet' href='"+b+"' media='"+c+"'>")}});b.importStyle&&a("style").each(function(){k.append(this.outerHTML)});b.pageTitle&&k.append("<title>"+b.pageTitle+"</title>");b.loadCSS&&(a.isArray(b.loadCSS)?jQuery.each(b.loadCSS,function(a,b){k.append("<link type='text/css' rel='stylesheet' href='"+this+"'>")}):k.append("<link type='text/css' rel='stylesheet' href='"+b.loadCSS+"'>"));if(g=b.copyTagClasses)g=!0===g?"bh":g,-1!==
g.indexOf("b")&&l.addClass(a("body")[0].className),-1!==g.indexOf("h")&&f.find("html").addClass(a("html")[0].className);d(l,b.header);if(b.canvas){var m=0;n.find("canvas").addBack("canvas").each(function(){a(this).attr("data-printthis",m++)})}c(l,n,b);b.canvas&&l.find("canvas").each(function(){var b=a(this).data("printthis"),b=a('[data-printthis="'+b+'"]');this.getContext("2d").drawImage(b[0],0,0);b.removeData("printthis")});b.removeInline&&(a.isFunction(a.removeAttr)?f.find("body *").removeAttr("style"):
f.find("body *").attr("style",""));d(l,b.footer);setTimeout(function(){h.hasClass("MSIE")?(window.frames.printIframe.focus(),k.append("<script>  window.print(); \x3c/script>")):document.queryCommandSupported("print")?h[0].contentWindow.document.execCommand("print",!1,null):(h[0].contentWindow.focus(),h[0].contentWindow.print());b.debug||setTimeout(function(){h.remove()},1E3)},b.printDelay)},333)};a.fn.printThis.defaults={debug:!1,importCSS:!0,importStyle:!1,printContainer:!0,loadCSS:"",pageTitle:"",
removeInline:!1,printDelay:333,header:null,footer:null,formValues:!0,canvas:!1,base:!1,doctypeString:"<!DOCTYPE html>",removeScripts:!1,copyTagClasses:!1}})(jQuery);
/** /js/Firework.min.js **/
var ___d2c_Fireworkminjs_c_on="2020-08-05 14:17:12";/* JavaScript Fireworks Animation by AndesCode (http://codecanyon.net/user/andescode/portfolio) */"use strict";function CFirework(n,t,i,r,u){fwTotal++;this.num=fwTotal;this.htmlContainerId=n.toLowerCase();this.htmlContainer=document.getElementById(n);this.fireColor=t;this.startX=i;this.startY=r;this.fwScale=typeof u!="undefined"?u:1;this.SVGcanvas=null;this.fwContainer=null;this.ascendingFireBall=null;this.sparks=null;this.fastExplosion=null;this.particles=null;this.shineColor=null;this.velX=0;this.velY=-100;this.gravity=40;this.timeBeforeExplosion=1500;this.ascendingFireBallRadius=14;this.firstExplosionRadius=45;this.numExplosionParticles=200;this.explosionParticleRadius=2.5;this.explosionVelocity=180;this.explosionDeceleration=.96;this.explosionParticlesMaxLifespan=2e3;this.shineRadius=60;this.shineExpansionTime=800;this.shineFadeOutTime=1100;this.useAudio=!1;this.audioURL="Explosion.mp3";this.separation=118;this.fwCenter=132}function FireworkTimer(n,t,i,r,u,f,e,o){var s=typeof f!="undefined"?f:!1,h=typeof e!="undefined"?e:1,c=typeof o!="undefined"?o:0;setTimeout(function(){var u=new CFirework(n,t,i,r,h);u.useAudio=s;u.velX=c;u.start()},u)}var fwSVGns="http://www.w3.org/2000/svg",fwTotal=0,fwActives={},explosionSoundCreated=!1,explosionMP3=null;CFirework.prototype.start=function(){function h(){s||(n.setSVGscale(n.ascendingFireBall,o[t][0],n.fwCenter,n.fwCenter),setTimeout(h,o[t][1]),t=t==o.length-1?0:t+1)}function a(){s=!0;n.fwContainer.removeChild(n.ascendingFireBall);clearInterval(c);n.explosion()}function v(){n.fwContainer.removeChild(n.particles);n.fwContainer.removeChild(n.shineColor);n.SVGcanvas.removeChild(n.fwContainer);fwActives[n.htmlContainerId]=Math.max(0,fwActives[n.htmlContainerId]-1);fwActives[n.htmlContainerId]==0&&n.htmlContainer.removeChild(n.SVGcanvas)}var r,i,u,f,e,c;fwActives[this.htmlContainerId]=fwActives.hasOwnProperty(this.htmlContainerId)?fwActives[this.htmlContainerId]+1:1;this.separation=Math.round(1.6*(this.shineRadius+this.ascendingFireBallRadius));this.fwCenter=this.ascendingFireBallRadius+this.separation;r=this.htmlContainer.getElementsByClassName("fwSVGcanvas");r.length>0?this.SVGcanvas=r[0]:(this.SVGcanvas=document.createElementNS(fwSVGns,"svg"),this.SVGcanvas.setAttributeNS(null,"class","fwSVGcanvas"),this.SVGcanvas.setAttributeNS(null,"width",this.htmlContainer.offsetWidth),this.SVGcanvas.setAttributeNS(null,"height",this.htmlContainer.offsetHeight),this.SVGcanvas.setAttributeNS(null,"style","display:block; position:absolute"),i=getComputedStyle(this.htmlContainer,null).position.toLowerCase(),i=="absolute"||i=="fixed"||i=="relative"?(this.SVGcanvas.style.top="0px",this.SVGcanvas.style.left="0px"):(u=this.htmlContainer.getBoundingClientRect(),this.SVGcanvas.style.top=u.top+"px",this.SVGcanvas.style.left=u.left+"px"),this.htmlContainer.appendChild(this.SVGcanvas));this.fwContainer=document.createElementNS(fwSVGns,"svg");f=(this.separation+this.ascendingFireBallRadius)*this.fwScale;this.fwContainer.setAttributeNS(null,"x",this.startX-f);this.fwContainer.setAttributeNS(null,"y",this.startY-f);this.fwContainer.setAttributeNS(null,"width",this.separation*2*this.fwScale);this.fwContainer.setAttributeNS(null,"height",this.separation*2*this.fwScale);e=this.separation*2;this.fwContainer.setAttributeNS(null,"viewBox","0 0 "+e+" "+e);this.SVGcanvas.appendChild(this.fwContainer);this.useAudio&&!explosionSoundCreated&&(explosionMP3=new Audio(this.audioURL),explosionSoundCreated=!0);this.createGradient(this.fwContainer,"bigFireGrad"+this.num,[{offset:"20%",style:"stop-color:#fff;stop-opacity:1"},{offset:"45%",style:"stop-color:#"+this.fireColor+";stop-opacity:0.6"},{offset:"100%",style:"stop-color:#"+this.fireColor+";stop-opacity:0"}]);this.createFilter(this.fwContainer,"sparklesGlow"+this.num,"FFFFFF",2);this.createGradient(this.fwContainer,"explosionGrad"+this.num,[{offset:"0%",style:"stop-color:#fff;stop-opacity:1"},{offset:"100%",style:"stop-color:#"+this.fireColor+";stop-opacity:0"}]);this.createFilter(this.fwContainer,"particlesGlow"+this.num,this.fireColor,4);this.createGradient(this.fwContainer,"backlightGrad"+this.num,[{offset:"20%",style:"stop-color:#"+this.fireColor+";stop-opacity:0.3"},{offset:"100%",style:"stop-color:#"+this.fireColor+";stop-opacity:0"}]);this.ascendingFireBall=this.createSVG("circle","bigFire",{cx:this.fwCenter,cy:this.fwCenter,r:this.ascendingFireBallRadius,stroke:"none",fill:"url(#bigFireGrad"+this.num+")"});this.fwContainer.appendChild(this.ascendingFireBall);var l=this.timeBeforeExplosion+Math.max(this.explosionParticlesMaxLifespan,this.shineExpansionTime+this.shineFadeOutTime)+100,y=this.projectileTween(this.fwContainer,l,v,this.gravity,this.velX,this.velY),n=this,s=!1,o=[[.85,85],[.6,30],[.85,120],[1,30]],t=0;h();this.sparks=document.createElementNS(fwSVGns,"svg");this.sparks.setAttributeNS(null,"filter","url(#sparklesGlow"+this.num+")");this.sparks.setAttributeNS(null,"x",this.separation);this.sparks.setAttributeNS(null,"y",this.separation);this.fwContainer.appendChild(this.sparks);c=setInterval(function(){CFirework.prototype.addSpark.call(n)},5);setTimeout(a,this.timeBeforeExplosion)};CFirework.prototype.createSVG=function(n,t,i){var r=document.createElementNS(fwSVGns,n),u;t!=null&&r.setAttributeNS(null,"id",t);for(u in i)r.setAttributeNS(null,u,i[u]);return r};CFirework.prototype.createGradient=function(n,t,i){for(var e,r,u,o=this.createSVG("radialGradient",t,{cx:"50%",cy:"50%",r:"50%",fx:"50%",fy:"50%"}),f=0;f<i.length;f++){e=i[f];r=document.createElementNS(fwSVGns,"stop");for(u in e)r.hasAttribute(u)||r.setAttribute(u,e[u]);o.appendChild(r)}this.insertDef(n,o)};CFirework.prototype.createFilter=function(n,t,i,r){var f=parseInt(i,16),o=(f>>16&255)/255,s=(f>>8&255)/255,h=(f&255)/255,u=this.createSVG("filter",t,{}),l=this.createSVG("feColorMatrix",null,{type:"matrix",values:"0 0 0 "+o+" "+o+"  0 0 0 "+s+" "+s+"  0 0 0 "+h+" "+h+"  0 0 0 1 0"}),c;u.appendChild(l);c=this.createSVG("feGaussianBlur",null,{stdDeviation:r,result:"coloredBlur"});u.appendChild(c);var e=this.createSVG("feMerge",null,{}),a=this.createSVG("feMergeNode",null,{"in":"coloredBlur"}),v=this.createSVG("feMergeNode",null,{"in":"SourceGraphic"});e.appendChild(a);e.appendChild(v);u.appendChild(e);this.insertDef(n,u)};CFirework.prototype.insertDef=function(n,t){var i=n.querySelector("defs")||n.insertBefore(document.createElementNS(fwSVGns,"defs"),n.firstChild);i.appendChild(t)};CFirework.prototype.addSpark=function(){function o(){n.removeChild(t)}var i=400+Math.random()*800,r=this.velX+Math.random()*20-10,u=Math.random()*80+40,f=this.ascendingFireBallRadius+Math.random()*3-1.5,e=this.ascendingFireBallRadius+Math.random()*4,n=this.sparks,t=CFirework.prototype.createCircle.call(this,n,f,e,1,"FFEEB8");this.projectileTween(t,i,o,0,-r,u,1,0)};CFirework.prototype.explosion=function(){function f(t){15<t&&t<40&&n.setSVGscale(n.fastExplosion,1.67,n.fwCenter,n.fwCenter);40<=t&&t<65&&n.setSVGscale(n.fastExplosion,1,n.fwCenter,n.fwCenter)}function a(t){var i=Math.min(t/n.shineExpansionTime,1),r=.9+.7*i*(2-i);n.shineColor.setAttribute("r",r*n.shineRadius)}function v(){var t=n.animation(n.shineFadeOutTime,y,null)}function y(t){var i=Math.min(t/n.shineFadeOutTime,1),r=1-i*i;n.shineColor.setAttribute("fill-opacity",r)}var n=this,u,e,t,l;for(this.shineColor=this.createSVG("circle","shineColor",{cx:this.fwCenter,cy:this.fwCenter,r:this.shineRadius,stroke:"none",fill:"url(#backlightGrad"+this.num+")"}),this.fwContainer.appendChild(this.shineColor),this.fastExplosion=this.createSVG("circle","explosion",{cx:this.fwCenter,cy:this.fwCenter,r:this.firstExplosionRadius,stroke:"none",fill:"url(#explosionGrad"+this.num+")"}),this.fwContainer.appendChild(this.fastExplosion),u=this.animation(65,f,function(){n.fwContainer.removeChild(n.fastExplosion)}),this.particles=document.createElementNS(fwSVGns,"svg"),this.particles.setAttributeNS(null,"filter","url(#particlesGlow"+this.num+")"),e=this.particles,t=0;t<this.numExplosionParticles;t++)var i=Math.pow(Math.random(),.3)*this.explosionVelocity,r=Math.random()*2*Math.PI,o=i*Math.sin(r),s=i*Math.cos(r),h=50+Math.random()*this.explosionParticlesMaxLifespan,c=this.createCircle(this.particles,this.fwCenter,this.fwCenter,this.explosionParticleRadius,"FFFFFF",this.fireColor),p=this.explosionParticleTween(c,h,this.explosionParticleRadius,this.explosionDeceleration,o,s);this.fwContainer.appendChild(this.particles);l=this.animation(this.shineExpansionTime,a,v);this.useAudio&&(explosionMP3.currentTime=0,explosionMP3.play())};CFirework.prototype.createCircle=function(n,t,i,r,u,f){f=typeof f!="undefined"?"#"+f:"none";var e=document.createElementNS(fwSVGns,"circle");return e.setAttributeNS(null,"cx",t),e.setAttributeNS(null,"cy",i),e.setAttributeNS(null,"r",r),e.setAttributeNS(null,"fill","#"+u),e.setAttributeNS(null,"stroke",f),f!="none"&&e.setAttributeNS(null,"stroke-width",.5),n.appendChild(e),e};CFirework.prototype.projectileTween=function(n,t,i,r,u,f,e,o){function p(i){var o,p,w,y;l=i-a;a=i;o=l/1e3;f+=r*o;p=s?"cx":"x";w=s?"cy":"y";h.increaseParameter(n,p,u*o);h.increaseParameter(n,w,f*o);c&&(y=e+v*(i/t),s?n.setAttribute("fill-opacity",y):n.style.opacity=y)}var h,y;e=typeof e!="undefined"?e:1;o=typeof o!="undefined"?o:1;var c=e!=o,v=o-e,l=0,a=0,s=n.nodeName!="svg";c&&(s?n.setAttribute("fill-opacity",e+""):n.style.opacity=e);h=this;y=this.animation(t,p,i)};CFirework.prototype.explosionParticleTween=function(n,t,i,r,u,f){function h(h){var l,a,c;e=h-s;s=h;l=Math.pow(r,e/17);u*=l;f*=l;a=e/1e3;o.increaseParameter(n,"cx",u*a);o.increaseParameter(n,"cy",f*a);c=1-.9*(h/t);c=Math.max(c,.01);n.setAttribute("r",c*i);n.setAttribute("stroke-width",.5*c)}var o=this,e=0,s=0,c=this.animation(t,h,null)};CFirework.prototype.animation=function(n,t,i){function u(){var e=(new Date).getTime(),f;r===null&&(r=e);f=e-r;t(f);f<n?setTimeout(u,15):i!=null&&i()}i=typeof i!="undefined"?i:null;var r=null;u()};CFirework.prototype.increaseParameter=function(n,t,i){n.setAttribute(t,parseFloat(n.getAttribute(t))+i)};CFirework.prototype.setSVGscale=function(n,t,i,r){n.setAttribute("transform","scale("+t+")");n.setAttribute("cx",i+(1-t)*i/t);n.setAttribute("cy",r+(1-t)*r/t)};
/** /js/calendarui/jquery-ui.js **/
var ___d2c_jqueryuijs_c_on="2020-08-05 14:14:27";var $jscomp={scope:{},findInternal:function(a,p,e){a instanceof String&&(a=String(a));for(var g=a.length,c=0;c<g;c++){var d=a[c];if(p.call(e,d,c,a))return{i:c,v:d}}return{i:-1,v:void 0}}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(a,p,e){if(e.get||e.set)throw new TypeError("ES3 does not support getters and setters.");a!=Array.prototype&&a!=Object.prototype&&(a[p]=e.value)};
$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global?global:a};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(a,p,e,g){if(p){e=$jscomp.global;a=a.split(".");for(g=0;g<a.length-1;g++){var c=a[g];c in e||(e[c]={});e=e[c]}a=a[a.length-1];g=e[a];p=p(g);p!=g&&null!=p&&$jscomp.defineProperty(e,a,{configurable:!0,writable:!0,value:p})}};
$jscomp.polyfill("Array.prototype.find",function(a){return a?a:function(a,e){return $jscomp.findInternal(this,a,e).v}},"es6-impl","es3");$jscomp.SYMBOL_PREFIX="jscomp_symbol_";$jscomp.initSymbol=function(){$jscomp.initSymbol=function(){};$jscomp.global.Symbol||($jscomp.global.Symbol=$jscomp.Symbol)};$jscomp.symbolCounter_=0;$jscomp.Symbol=function(a){return $jscomp.SYMBOL_PREFIX+(a||"")+$jscomp.symbolCounter_++};
$jscomp.initSymbolIterator=function(){$jscomp.initSymbol();var a=$jscomp.global.Symbol.iterator;a||(a=$jscomp.global.Symbol.iterator=$jscomp.global.Symbol("iterator"));"function"!=typeof Array.prototype[a]&&$jscomp.defineProperty(Array.prototype,a,{configurable:!0,writable:!0,value:function(){return $jscomp.arrayIterator(this)}});$jscomp.initSymbolIterator=function(){}};$jscomp.arrayIterator=function(a){var p=0;return $jscomp.iteratorPrototype(function(){return p<a.length?{done:!1,value:a[p++]}:{done:!0}})};
$jscomp.iteratorPrototype=function(a){$jscomp.initSymbolIterator();a={next:a};a[$jscomp.global.Symbol.iterator]=function(){return this};return a};$jscomp.array=$jscomp.array||{};$jscomp.iteratorFromArray=function(a,p){$jscomp.initSymbolIterator();a instanceof String&&(a+="");var e=0,g={next:function(){if(e<a.length){var c=e++;return{value:p(c,a[c]),done:!1}}g.next=function(){return{done:!0,value:void 0}};return g.next()}};g[Symbol.iterator]=function(){return g};return g};
$jscomp.polyfill("Array.prototype.values",function(a){return a?a:function(){return $jscomp.iteratorFromArray(this,function(a,e){return e})}},"es6","es3");
(function(a,p){function e(b,f){var d,c,e,m=b.nodeName.toLowerCase();return"area"===m?(d=b.parentNode,c=d.name,b.href&&c&&"map"===d.nodeName.toLowerCase()?(e=a("img[usemap=#"+c+"]")[0],!!e&&g(e)):!1):(/input|select|textarea|button|object/.test(m)?!b.disabled:"a"===m?b.href||f:f)&&g(b)}function g(b){return a.expr.filters.visible(b)&&!a(b).parents().andSelf().filter(function(){return"hidden"===a.css(this,"visibility")}).length}var c=0,d=/^ui-id-\d+$/;a.ui=a.ui||{};a.ui.version||(a.extend(a.ui,{version:"1.9.1",
keyCode:{BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}}),a.fn.extend({_focus:a.fn.focus,focus:function(b,f){return"number"==typeof b?this.each(function(){var d=this;setTimeout(function(){a(d).focus();f&&f.call(d)},b)}):this._focus.apply(this,arguments)},scrollParent:function(){var b;return a.ui.ie&&
/(static|relative)/.test(this.css("position"))||/absolute/.test(this.css("position"))?b=this.parents().filter(function(){return/(relative|absolute|fixed)/.test(a.css(this,"position"))&&/(auto|scroll)/.test(a.css(this,"overflow")+a.css(this,"overflow-y")+a.css(this,"overflow-x"))}).eq(0):b=this.parents().filter(function(){return/(auto|scroll)/.test(a.css(this,"overflow")+a.css(this,"overflow-y")+a.css(this,"overflow-x"))}).eq(0),/fixed/.test(this.css("position"))||!b.length?a(document):b},zIndex:function(b){if(b!==
p)return this.css("zIndex",b);if(this.length){b=a(this[0]);for(var f;b.length&&b[0]!==document;){f=b.css("position");if("absolute"===f||"relative"===f||"fixed"===f)if(f=parseInt(b.css("zIndex"),10),!isNaN(f)&&0!==f)return f;b=b.parent()}}return 0},uniqueId:function(){return this.each(function(){this.id||(this.id="ui-id-"+ ++c)})},removeUniqueId:function(){return this.each(function(){d.test(this.id)&&a(this).removeAttr("id")})}}),a("<a>").outerWidth(1).jquery||a.each(["Width","Height"],function(b,
f){function d(f,b,h,e){return a.each(c,function(){b-=parseFloat(a.css(f,"padding"+this))||0;h&&(b-=parseFloat(a.css(f,"border"+this+"Width"))||0);e&&(b-=parseFloat(a.css(f,"margin"+this))||0)}),b}var c="Width"===f?["Left","Right"]:["Top","Bottom"],e=f.toLowerCase(),g={innerWidth:a.fn.innerWidth,innerHeight:a.fn.innerHeight,outerWidth:a.fn.outerWidth,outerHeight:a.fn.outerHeight};a.fn["inner"+f]=function(b){return b===p?g["inner"+f].call(this):this.each(function(){a(this).css(e,d(this,b)+"px")})};
a.fn["outer"+f]=function(b,c){return"number"!=typeof b?g["outer"+f].call(this,b):this.each(function(){a(this).css(e,d(this,b,!0,c)+"px")})}}),a.extend(a.expr[":"],{data:a.expr.createPseudo?a.expr.createPseudo(function(b){return function(f){return!!a.data(f,b)}}):function(b,f,d){return!!a.data(b,d[3])},focusable:function(b){return e(b,!isNaN(a.attr(b,"tabindex")))},tabbable:function(b){var f=a.attr(b,"tabindex"),d=isNaN(f);return(d||0<=f)&&e(b,!d)}}),a(function(){var b=document.body,f=b.appendChild(f=
document.createElement("div"));f.offsetHeight;a.extend(f.style,{minHeight:"100px",height:"auto",padding:0,borderWidth:0});a.support.minHeight=100===f.offsetHeight;a.support.selectstart="onselectstart"in f;b.removeChild(f).style.display="none"}),function(){var b=/msie ([\w.]+)/.exec(navigator.userAgent.toLowerCase())||[];a.ui.ie=b.length?!0:!1;a.ui.ie6=6===parseFloat(b[1],10)}(),a.fn.extend({disableSelection:function(){return this.bind((a.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",
function(a){a.preventDefault()})},enableSelection:function(){return this.unbind(".ui-disableSelection")}}),a.extend(a.ui,{plugin:{add:function(b,f,d){var c;b=a.ui[b].prototype;for(c in d)b.plugins[c]=b.plugins[c]||[],b.plugins[c].push([f,d[c]])},call:function(a,f,d){var c=a.plugins[f];if(c&&a.element[0].parentNode&&11!==a.element[0].parentNode.nodeType)for(f=0;f<c.length;f++)a.options[c[f][0]]&&c[f][1].apply(a.element,d)}},contains:a.contains,hasScroll:function(b,f){if("hidden"===a(b).css("overflow"))return!1;
var d=f&&"left"===f?"scrollLeft":"scrollTop",c=!1;return 0<b[d]?!0:(b[d]=1,c=0<b[d],b[d]=0,c)},isOverAxis:function(a,f,d){return a>f&&a<f+d},isOver:function(b,f,d,c,e,g){return a.ui.isOverAxis(b,d,e)&&a.ui.isOverAxis(f,c,g)}}))})(jQuery);
(function(a,p){var e=0,g=Array.prototype.slice,c=a.cleanData;a.cleanData=function(d){for(var b=0,f;null!=(f=d[b]);b++)try{a(f).triggerHandler("remove")}catch(h){}c(d)};a.widget=function(d,b,f){var c,e,g,m,n=d.split(".")[0];d=d.split(".")[1];c=n+"-"+d;f||(f=b,b=a.Widget);a.expr[":"][c.toLowerCase()]=function(f){return!!a.data(f,c)};a[n]=a[n]||{};e=a[n][d];g=a[n][d]=function(a,f){if(!this._createWidget)return new g(a,f);arguments.length&&this._createWidget(a,f)};a.extend(g,e,{version:f.version,_proto:a.extend({},
f),_childConstructors:[]});m=new b;m.options=a.widget.extend({},m.options);a.each(f,function(d,c){a.isFunction(c)&&(f[d]=function(){var a=function(){return b.prototype[d].apply(this,arguments)},f=function(a){return b.prototype[d].apply(this,a)};return function(){var b=this._super,d=this._superApply,h;return this._super=a,this._superApply=f,h=c.apply(this,arguments),this._super=b,this._superApply=d,h}}())});g.prototype=a.widget.extend(m,{widgetEventPrefix:m.widgetEventPrefix||d},f,{constructor:g,namespace:n,
widgetName:d,widgetBaseClass:c,widgetFullName:c});e?(a.each(e._childConstructors,function(f,b){var d=b.prototype;a.widget(d.namespace+"."+d.widgetName,g,b._proto)}),delete e._childConstructors):b._childConstructors.push(g);a.widget.bridge(d,g)};a.widget.extend=function(d){for(var b=g.call(arguments,1),f=0,c=b.length,e,k;f<c;f++)for(e in b[f])k=b[f][e],b[f].hasOwnProperty(e)&&k!==p&&(a.isPlainObject(k)?d[e]=a.isPlainObject(d[e])?a.widget.extend({},d[e],k):a.widget.extend({},k):d[e]=k);return d};a.widget.bridge=
function(d,b){var f=b.prototype.widgetFullName;a.fn[d]=function(c){var e="string"==typeof c,k=g.call(arguments,1),m=this;return c=!e&&k.length?a.widget.extend.apply(null,[c].concat(k)):c,e?this.each(function(){var b,e=a.data(this,f);if(!e)return a.error("cannot call methods on "+d+" prior to initialization; attempted to call method '"+c+"'");if(!a.isFunction(e[c])||"_"===c.charAt(0))return a.error("no such method '"+c+"' for "+d+" widget instance");b=e[c].apply(e,k);if(b!==e&&b!==p)return m=b&&b.jquery?
m.pushStack(b.get()):b,!1}):this.each(function(){var d=a.data(this,f);d?d.option(c||{})._init():new b(c,this)}),m}};a.Widget=function(){};a.Widget._childConstructors=[];a.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{disabled:!1,create:null},_createWidget:function(d,b){b=a(b||this.defaultElement||this)[0];this.element=a(b);this.uuid=e++;this.eventNamespace="."+this.widgetName+this.uuid;this.options=a.widget.extend({},this.options,this._getCreateOptions(),
d);this.bindings=a();this.hoverable=a();this.focusable=a();b!==this&&(a.data(b,this.widgetName,this),a.data(b,this.widgetFullName,this),this._on(this.element,{remove:function(a){a.target===b&&this.destroy()}}),this.document=a(b.style?b.ownerDocument:b.document||b),this.window=a(this.document[0].defaultView||this.document[0].parentWindow));this._create();this._trigger("create",null,this._getCreateEventData());this._init()},_getCreateOptions:a.noop,_getCreateEventData:a.noop,_create:a.noop,_init:a.noop,
destroy:function(){this._destroy();this.element.unbind(this.eventNamespace).removeData(this.widgetName).removeData(this.widgetFullName).removeData(a.camelCase(this.widgetFullName));this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName+"-disabled ui-state-disabled");this.bindings.unbind(this.eventNamespace);this.hoverable.removeClass("ui-state-hover");this.focusable.removeClass("ui-state-focus")},_destroy:a.noop,widget:function(){return this.element},
option:function(d,b){var f=d,c,e,g;if(0===arguments.length)return a.widget.extend({},this.options);if("string"==typeof d)if(f={},c=d.split("."),d=c.shift(),c.length){e=f[d]=a.widget.extend({},this.options[d]);for(g=0;g<c.length-1;g++)e[c[g]]=e[c[g]]||{},e=e[c[g]];d=c.pop();if(b===p)return e[d]===p?null:e[d];e[d]=b}else{if(b===p)return this.options[d]===p?null:this.options[d];f[d]=b}return this._setOptions(f),this},_setOptions:function(a){for(var b in a)this._setOption(b,a[b]);return this},_setOption:function(a,
b){return this.options[a]=b,"disabled"===a&&(this.widget().toggleClass(this.widgetFullName+"-disabled ui-state-disabled",!!b).attr("aria-disabled",b),this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus")),this},enable:function(){return this._setOption("disabled",!1)},disable:function(){return this._setOption("disabled",!0)},_on:function(d,b){var f,c=this;b?(d=f=a(d),this.bindings=this.bindings.add(d)):(b=d,d=this.element,f=this.widget());a.each(b,function(b,e){function g(){if(!0!==
c.options.disabled&&!a(this).hasClass("ui-state-disabled"))return("string"==typeof e?c[e]:e).apply(c,arguments)}"string"!=typeof e&&(g.guid=e.guid=e.guid||g.guid||a.guid++);var n=b.match(/^(\w+)\s*(.*)$/),r=n[1]+c.eventNamespace;(n=n[2])?f.delegate(n,r,g):d.bind(r,g)})},_off:function(a,b){b=(b||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace;a.unbind(b).undelegate(b)},_delay:function(a,b){var f=this;return setTimeout(function(){return("string"==typeof a?f[a]:a).apply(f,arguments)},
b||0)},_hoverable:function(d){this.hoverable=this.hoverable.add(d);this._on(d,{mouseenter:function(b){a(b.currentTarget).addClass("ui-state-hover")},mouseleave:function(b){a(b.currentTarget).removeClass("ui-state-hover")}})},_focusable:function(d){this.focusable=this.focusable.add(d);this._on(d,{focusin:function(b){a(b.currentTarget).addClass("ui-state-focus")},focusout:function(b){a(b.currentTarget).removeClass("ui-state-focus")}})},_trigger:function(d,b,f){var c,e=this.options[d];f=f||{};b=a.Event(b);
b.type=(d===this.widgetEventPrefix?d:this.widgetEventPrefix+d).toLowerCase();b.target=this.element[0];if(d=b.originalEvent)for(c in d)c in b||(b[c]=d[c]);return this.element.trigger(b,f),!(a.isFunction(e)&&!1===e.apply(this.element[0],[b].concat(f))||b.isDefaultPrevented())}};a.each({show:"fadeIn",hide:"fadeOut"},function(d,b){a.Widget.prototype["_"+d]=function(f,c,e){"string"==typeof c&&(c={effect:c});var g,m=c?!0===c||"number"==typeof c?b:c.effect||b:d;c=c||{};"number"==typeof c&&(c={duration:c});
g=!a.isEmptyObject(c);c.complete=e;c.delay&&f.delay(c.delay);g&&a.effects&&(a.effects.effect[m]||!1!==a.uiBackCompat&&a.effects[m])?f[d](c):m!==d&&f[m]?f[m](c.duration,c.easing,e):f.queue(function(b){a(this)[d]();e&&e.call(f[0]);b()})}});!1!==a.uiBackCompat&&(a.Widget.prototype._getCreateOptions=function(){return a.metadata&&a.metadata.get(this.element[0])[this.widgetName]})})(jQuery);
(function(a,p){var e=!1;a(document).mouseup(function(a){e=!1});a.widget("ui.mouse",{version:"1.9.1",options:{cancel:"input,textarea,button,select,option",distance:1,delay:0},_mouseInit:function(){var e=this;this.element.bind("mousedown."+this.widgetName,function(a){return e._mouseDown(a)}).bind("click."+this.widgetName,function(c){if(!0===a.data(c.target,e.widgetName+".preventClickEvent"))return a.removeData(c.target,e.widgetName+".preventClickEvent"),c.stopImmediatePropagation(),!1});this.started=
!1},_mouseDestroy:function(){this.element.unbind("."+this.widgetName);this._mouseMoveDelegate&&a(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate)},_mouseDown:function(g){if(!e){this._mouseStarted&&this._mouseUp(g);this._mouseDownEvent=g;var c=this,d=1===g.which,b="string"==typeof this.options.cancel&&g.target.nodeName?a(g.target).closest(this.options.cancel).length:!1;if(!d||b||!this._mouseCapture(g))return!0;(this.mouseDelayMet=
!this.options.delay)||(this._mouseDelayTimer=setTimeout(function(){c.mouseDelayMet=!0},this.options.delay));return this._mouseDistanceMet(g)&&this._mouseDelayMet(g)&&(this._mouseStarted=!1!==this._mouseStart(g),!this._mouseStarted)?(g.preventDefault(),!0):(!0===a.data(g.target,this.widgetName+".preventClickEvent")&&a.removeData(g.target,this.widgetName+".preventClickEvent"),this._mouseMoveDelegate=function(a){return c._mouseMove(a)},this._mouseUpDelegate=function(a){return c._mouseUp(a)},a(document).bind("mousemove."+
this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate),g.preventDefault(),e=!0,!0)}},_mouseMove:function(e){return!a.ui.ie||9<=document.documentMode||e.button?this._mouseStarted?(this._mouseDrag(e),e.preventDefault()):(this._mouseDistanceMet(e)&&this._mouseDelayMet(e)&&(this._mouseStarted=!1!==this._mouseStart(this._mouseDownEvent,e),this._mouseStarted?this._mouseDrag(e):this._mouseUp(e)),!this._mouseStarted):this._mouseUp(e)},_mouseUp:function(e){return a(document).unbind("mousemove."+
this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate),this._mouseStarted&&(this._mouseStarted=!1,e.target===this._mouseDownEvent.target&&a.data(e.target,this.widgetName+".preventClickEvent",!0),this._mouseStop(e)),!1},_mouseDistanceMet:function(a){return Math.max(Math.abs(this._mouseDownEvent.pageX-a.pageX),Math.abs(this._mouseDownEvent.pageY-a.pageY))>=this.options.distance},_mouseDelayMet:function(a){return this.mouseDelayMet},_mouseStart:function(a){},
_mouseDrag:function(a){},_mouseStop:function(a){},_mouseCapture:function(a){return!0}})})(jQuery);
(function(a,p){a.widget("ui.draggable",a.ui.mouse,{version:"1.9.1",widgetEventPrefix:"drag",options:{addClasses:!0,appendTo:"parent",axis:!1,connectToSortable:!1,containment:!1,cursor:"auto",cursorAt:!1,grid:!1,handle:!1,helper:"original",iframeFix:!1,opacity:!1,refreshPositions:!1,revert:!1,revertDuration:500,scope:"default",scroll:!0,scrollSensitivity:20,scrollSpeed:20,snap:!1,snapMode:"both",snapTolerance:20,stack:!1,zIndex:!1},_create:function(){"original"==this.options.helper&&!/^(?:r|a|f)/.test(this.element.css("position"))&&
(this.element[0].style.position="relative");this.options.addClasses&&this.element.addClass("ui-draggable");this.options.disabled&&this.element.addClass("ui-draggable-disabled");this._mouseInit()},_destroy:function(){this.element.removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled");this._mouseDestroy()},_mouseCapture:function(e){var g=this.options;return this.helper||g.disabled||a(e.target).is(".ui-resizable-handle")?!1:(this.handle=this._getHandle(e),this.handle?(a(!0===g.iframeFix?
"iframe":g.iframeFix).each(function(){a('<div class="ui-draggable-iframeFix" style="background: #fff;"></div>').css({width:this.offsetWidth+"px",height:this.offsetHeight+"px",position:"absolute",opacity:"0.001",zIndex:1E3}).css(a(this).offset()).appendTo("body")}),!0):!1)},_mouseStart:function(e){var g=this.options;return this.helper=this._createHelper(e),this.helper.addClass("ui-draggable-dragging"),this._cacheHelperProportions(),a.ui.ddmanager&&(a.ui.ddmanager.current=this),this._cacheMargins(),
this.cssPosition=this.helper.css("position"),this.scrollParent=this.helper.scrollParent(),this.offset=this.positionAbs=this.element.offset(),this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left},a.extend(this.offset,{click:{left:e.pageX-this.offset.left,top:e.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()}),this.originalPosition=this.position=this._generatePosition(e),this.originalPageX=e.pageX,this.originalPageY=e.pageY,
g.cursorAt&&this._adjustOffsetFromHelper(g.cursorAt),g.containment&&this._setContainment(),!1===this._trigger("start",e)?(this._clear(),!1):(this._cacheHelperProportions(),a.ui.ddmanager&&!g.dropBehaviour&&a.ui.ddmanager.prepareOffsets(this,e),this._mouseDrag(e,!0),a.ui.ddmanager&&a.ui.ddmanager.dragStart(this,e),!0)},_mouseDrag:function(e,g){this.position=this._generatePosition(e);this.positionAbs=this._convertPositionTo("absolute");if(!g){var c=this._uiHash();if(!1===this._trigger("drag",e,c))return this._mouseUp({}),
!1;this.position=c.position}this.options.axis&&"y"==this.options.axis||(this.helper[0].style.left=this.position.left+"px");this.options.axis&&"x"==this.options.axis||(this.helper[0].style.top=this.position.top+"px");return a.ui.ddmanager&&a.ui.ddmanager.drag(this,e),!1},_mouseStop:function(e){var g=!1;a.ui.ddmanager&&!this.options.dropBehaviour&&(g=a.ui.ddmanager.drop(this,e));this.dropped&&(g=this.dropped,this.dropped=!1);for(var c=this.element[0],d=!1;c&&(c=c.parentNode);)c==document&&(d=!0);if(!d&&
"original"===this.options.helper)return!1;if("invalid"==this.options.revert&&!g||"valid"==this.options.revert&&g||!0===this.options.revert||a.isFunction(this.options.revert)&&this.options.revert.call(this.element,g)){var b=this;a(this.helper).animate(this.originalPosition,parseInt(this.options.revertDuration,10),function(){!1!==b._trigger("stop",e)&&b._clear()})}else!1!==this._trigger("stop",e)&&this._clear();return!1},_mouseUp:function(e){return a("div.ui-draggable-iframeFix").each(function(){this.parentNode.removeChild(this)}),
a.ui.ddmanager&&a.ui.ddmanager.dragStop(this,e),a.ui.mouse.prototype._mouseUp.call(this,e)},cancel:function(){return this.helper.is(".ui-draggable-dragging")?this._mouseUp({}):this._clear(),this},_getHandle:function(e){var g=this.options.handle&&a(this.options.handle,this.element).length?!1:!0;return a(this.options.handle,this.element).find("*").andSelf().each(function(){this==e.target&&(g=!0)}),g},_createHelper:function(e){var g=this.options;e=a.isFunction(g.helper)?a(g.helper.apply(this.element[0],
[e])):"clone"==g.helper?this.element.clone().removeAttr("id"):this.element;return e.parents("body").length||e.appendTo("parent"==g.appendTo?this.element[0].parentNode:g.appendTo),e[0]!=this.element[0]&&!/(fixed|absolute)/.test(e.css("position"))&&e.css("position","absolute"),e},_adjustOffsetFromHelper:function(e){"string"==typeof e&&(e=e.split(" "));a.isArray(e)&&(e={left:+e[0],top:+e[1]||0});"left"in e&&(this.offset.click.left=e.left+this.margins.left);"right"in e&&(this.offset.click.left=this.helperProportions.width-
e.right+this.margins.left);"top"in e&&(this.offset.click.top=e.top+this.margins.top);"bottom"in e&&(this.offset.click.top=this.helperProportions.height-e.bottom+this.margins.top)},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var e=this.offsetParent.offset();"absolute"==this.cssPosition&&this.scrollParent[0]!=document&&a.contains(this.scrollParent[0],this.offsetParent[0])&&(e.left+=this.scrollParent.scrollLeft(),e.top+=this.scrollParent.scrollTop());if(this.offsetParent[0]==
document.body||this.offsetParent[0].tagName&&"html"==this.offsetParent[0].tagName.toLowerCase()&&a.ui.ie)e={top:0,left:0};return{top:e.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:e.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if("relative"==this.cssPosition){var a=this.element.position();return{top:a.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:a.left-(parseInt(this.helper.css("left"),10)||
0)+this.scrollParent.scrollLeft()}}return{top:0,left:0}},_cacheMargins:function(){this.margins={left:parseInt(this.element.css("marginLeft"),10)||0,top:parseInt(this.element.css("marginTop"),10)||0,right:parseInt(this.element.css("marginRight"),10)||0,bottom:parseInt(this.element.css("marginBottom"),10)||0}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var e=this.options;"parent"==e.containment&&
(e.containment=this.helper[0].parentNode);if("document"==e.containment||"window"==e.containment)this.containment=["document"==e.containment?0:a(window).scrollLeft()-this.offset.relative.left-this.offset.parent.left,"document"==e.containment?0:a(window).scrollTop()-this.offset.relative.top-this.offset.parent.top,("document"==e.containment?0:a(window).scrollLeft())+a("document"==e.containment?document:window).width()-this.helperProportions.width-this.margins.left,("document"==e.containment?0:a(window).scrollTop())+
(a("document"==e.containment?document:window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top];if(/^(document|window|parent)$/.test(e.containment)||e.containment.constructor==Array)e.containment.constructor==Array&&(this.containment=e.containment);else{var e=a(e.containment),g=e[0];if(g){e.offset();var c="hidden"!=a(g).css("overflow");this.containment=[(parseInt(a(g).css("borderLeftWidth"),10)||0)+(parseInt(a(g).css("paddingLeft"),10)||0),(parseInt(a(g).css("borderTopWidth"),
10)||0)+(parseInt(a(g).css("paddingTop"),10)||0),(c?Math.max(g.scrollWidth,g.offsetWidth):g.offsetWidth)-(parseInt(a(g).css("borderLeftWidth"),10)||0)-(parseInt(a(g).css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left-this.margins.right,(c?Math.max(g.scrollHeight,g.offsetHeight):g.offsetHeight)-(parseInt(a(g).css("borderTopWidth"),10)||0)-(parseInt(a(g).css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top-this.margins.bottom];this.relative_container=e}}},
_convertPositionTo:function(e,g){g||(g=this.position);var c="absolute"==e?1:-1,d="absolute"!=this.cssPosition||this.scrollParent[0]!=document&&a.contains(this.scrollParent[0],this.offsetParent[0])?this.scrollParent:this.offsetParent,b=/(html|body)/i.test(d[0].tagName);return{top:g.top+this.offset.relative.top*c+this.offset.parent.top*c-("fixed"==this.cssPosition?-this.scrollParent.scrollTop():b?0:d.scrollTop())*c,left:g.left+this.offset.relative.left*c+this.offset.parent.left*c-("fixed"==this.cssPosition?
-this.scrollParent.scrollLeft():b?0:d.scrollLeft())*c}},_generatePosition:function(e){var g=this.options,c="absolute"!=this.cssPosition||this.scrollParent[0]!=document&&a.contains(this.scrollParent[0],this.offsetParent[0])?this.scrollParent:this.offsetParent,d=/(html|body)/i.test(c[0].tagName),b=e.pageX,f=e.pageY;if(this.originalPosition){var h;this.containment&&(this.relative_container?(h=this.relative_container.offset(),h=[this.containment[0]+h.left,this.containment[1]+h.top,this.containment[2]+
h.left,this.containment[3]+h.top]):h=this.containment,e.pageX-this.offset.click.left<h[0]&&(b=h[0]+this.offset.click.left),e.pageY-this.offset.click.top<h[1]&&(f=h[1]+this.offset.click.top),e.pageX-this.offset.click.left>h[2]&&(b=h[2]+this.offset.click.left),e.pageY-this.offset.click.top>h[3]&&(f=h[3]+this.offset.click.top));g.grid&&(f=g.grid[1]?this.originalPageY+Math.round((f-this.originalPageY)/g.grid[1])*g.grid[1]:this.originalPageY,f=h?f-this.offset.click.top<h[1]||f-this.offset.click.top>h[3]?
f-this.offset.click.top<h[1]?f+g.grid[1]:f-g.grid[1]:f:f,b=g.grid[0]?this.originalPageX+Math.round((b-this.originalPageX)/g.grid[0])*g.grid[0]:this.originalPageX,b=h?b-this.offset.click.left<h[0]||b-this.offset.click.left>h[2]?b-this.offset.click.left<h[0]?b+g.grid[0]:b-g.grid[0]:b:b)}return{top:f-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+("fixed"==this.cssPosition?-this.scrollParent.scrollTop():d?0:c.scrollTop()),left:b-this.offset.click.left-this.offset.relative.left-
this.offset.parent.left+("fixed"==this.cssPosition?-this.scrollParent.scrollLeft():d?0:c.scrollLeft())}},_clear:function(){this.helper.removeClass("ui-draggable-dragging");this.helper[0]!=this.element[0]&&!this.cancelHelperRemoval&&this.helper.remove();this.helper=null;this.cancelHelperRemoval=!1},_trigger:function(e,g,c){return c=c||this._uiHash(),a.ui.plugin.call(this,e,[g,c]),"drag"==e&&(this.positionAbs=this._convertPositionTo("absolute")),a.Widget.prototype._trigger.call(this,e,g,c)},plugins:{},
_uiHash:function(a){return{helper:this.helper,position:this.position,originalPosition:this.originalPosition,offset:this.positionAbs}}});a.ui.plugin.add("draggable","connectToSortable",{start:function(e,g){var c=a(this).data("draggable"),d=c.options,b=a.extend({},g,{item:c.element});c.sortables=[];a(d.connectToSortable).each(function(){var f=a.data(this,"sortable");f&&!f.options.disabled&&(c.sortables.push({instance:f,shouldRevert:f.options.revert}),f.refreshPositions(),f._trigger("activate",e,b))})},
stop:function(e,g){var c=a(this).data("draggable"),d=a.extend({},g,{item:c.element});a.each(c.sortables,function(){this.instance.isOver?(this.instance.isOver=0,c.cancelHelperRemoval=!0,this.instance.cancelHelperRemoval=!1,this.shouldRevert&&(this.instance.options.revert=!0),this.instance._mouseStop(e),this.instance.options.helper=this.instance.options._helper,"original"==c.options.helper&&this.instance.currentItem.css({top:"auto",left:"auto"})):(this.instance.cancelHelperRemoval=!1,this.instance._trigger("deactivate",
e,d))})},drag:function(e,g){var c=a(this).data("draggable"),d=this;a.each(c.sortables,function(b){var f=!1,h=this;this.instance.positionAbs=c.positionAbs;this.instance.helperProportions=c.helperProportions;this.instance.offset.click=c.offset.click;this.instance._intersectsWith(this.instance.containerCache)&&(f=!0,a.each(c.sortables,function(){return this.instance.positionAbs=c.positionAbs,this.instance.helperProportions=c.helperProportions,this.instance.offset.click=c.offset.click,this!=h&&this.instance._intersectsWith(this.instance.containerCache)&&
a.ui.contains(h.instance.element[0],this.instance.element[0])&&(f=!1),f}));f?(this.instance.isOver||(this.instance.isOver=1,this.instance.currentItem=a(d).clone().removeAttr("id").appendTo(this.instance.element).data("sortable-item",!0),this.instance.options._helper=this.instance.options.helper,this.instance.options.helper=function(){return g.helper[0]},e.target=this.instance.currentItem[0],this.instance._mouseCapture(e,!0),this.instance._mouseStart(e,!0,!0),this.instance.offset.click.top=c.offset.click.top,
this.instance.offset.click.left=c.offset.click.left,this.instance.offset.parent.left-=c.offset.parent.left-this.instance.offset.parent.left,this.instance.offset.parent.top-=c.offset.parent.top-this.instance.offset.parent.top,c._trigger("toSortable",e),c.dropped=this.instance.element,c.currentItem=c.element,this.instance.fromOutside=c),this.instance.currentItem&&this.instance._mouseDrag(e)):this.instance.isOver&&(this.instance.isOver=0,this.instance.cancelHelperRemoval=!0,this.instance.options.revert=
!1,this.instance._trigger("out",e,this.instance._uiHash(this.instance)),this.instance._mouseStop(e,!0),this.instance.options.helper=this.instance.options._helper,this.instance.currentItem.remove(),this.instance.placeholder&&this.instance.placeholder.remove(),c._trigger("fromSortable",e),c.dropped=!1)})}});a.ui.plugin.add("draggable","cursor",{start:function(e,g){var c=a("body"),d=a(this).data("draggable").options;c.css("cursor")&&(d._cursor=c.css("cursor"));c.css("cursor",d.cursor)},stop:function(e,
g){var c=a(this).data("draggable").options;c._cursor&&a("body").css("cursor",c._cursor)}});a.ui.plugin.add("draggable","opacity",{start:function(e,g){var c=a(g.helper),d=a(this).data("draggable").options;c.css("opacity")&&(d._opacity=c.css("opacity"));c.css("opacity",d.opacity)},stop:function(e,g){var c=a(this).data("draggable").options;c._opacity&&a(g.helper).css("opacity",c._opacity)}});a.ui.plugin.add("draggable","scroll",{start:function(e,g){var c=a(this).data("draggable");c.scrollParent[0]!=
document&&"HTML"!=c.scrollParent[0].tagName&&(c.overflowOffset=c.scrollParent.offset())},drag:function(e,g){var c=a(this).data("draggable"),d=c.options,b=!1;c.scrollParent[0]!=document&&"HTML"!=c.scrollParent[0].tagName?(d.axis&&"x"==d.axis||(c.overflowOffset.top+c.scrollParent[0].offsetHeight-e.pageY<d.scrollSensitivity?c.scrollParent[0].scrollTop=b=c.scrollParent[0].scrollTop+d.scrollSpeed:e.pageY-c.overflowOffset.top<d.scrollSensitivity&&(c.scrollParent[0].scrollTop=b=c.scrollParent[0].scrollTop-
d.scrollSpeed)),d.axis&&"y"==d.axis||(c.overflowOffset.left+c.scrollParent[0].offsetWidth-e.pageX<d.scrollSensitivity?c.scrollParent[0].scrollLeft=b=c.scrollParent[0].scrollLeft+d.scrollSpeed:e.pageX-c.overflowOffset.left<d.scrollSensitivity&&(c.scrollParent[0].scrollLeft=b=c.scrollParent[0].scrollLeft-d.scrollSpeed))):(d.axis&&"x"==d.axis||(e.pageY-a(document).scrollTop()<d.scrollSensitivity?b=a(document).scrollTop(a(document).scrollTop()-d.scrollSpeed):a(window).height()-(e.pageY-a(document).scrollTop())<
d.scrollSensitivity&&(b=a(document).scrollTop(a(document).scrollTop()+d.scrollSpeed))),d.axis&&"y"==d.axis||(e.pageX-a(document).scrollLeft()<d.scrollSensitivity?b=a(document).scrollLeft(a(document).scrollLeft()-d.scrollSpeed):a(window).width()-(e.pageX-a(document).scrollLeft())<d.scrollSensitivity&&(b=a(document).scrollLeft(a(document).scrollLeft()+d.scrollSpeed))));!1!==b&&a.ui.ddmanager&&!d.dropBehaviour&&a.ui.ddmanager.prepareOffsets(c,e)}});a.ui.plugin.add("draggable","snap",{start:function(e,
g){var c=a(this).data("draggable"),d=c.options;c.snapElements=[];a(d.snap.constructor!=String?d.snap.items||":data(draggable)":d.snap).each(function(){var b=a(this),f=b.offset();this!=c.element[0]&&c.snapElements.push({item:this,width:b.outerWidth(),height:b.outerHeight(),top:f.top,left:f.left})})},drag:function(e,g){for(var c=a(this).data("draggable"),d=c.options,b=d.snapTolerance,f=g.offset.left,h=f+c.helperProportions.width,l=g.offset.top,k=l+c.helperProportions.height,m=c.snapElements.length-
1;0<=m;m--){var n=c.snapElements[m].left,r=n+c.snapElements[m].width,q=c.snapElements[m].top,u=q+c.snapElements[m].height;if(n-b<f&&f<r+b&&q-b<l&&l<u+b||n-b<f&&f<r+b&&q-b<k&&k<u+b||n-b<h&&h<r+b&&q-b<l&&l<u+b||n-b<h&&h<r+b&&q-b<k&&k<u+b){if("inner"!=d.snapMode){var t=Math.abs(q-k)<=b,I=Math.abs(u-l)<=b,v=Math.abs(n-h)<=b,x=Math.abs(r-f)<=b;t&&(g.position.top=c._convertPositionTo("relative",{top:q-c.helperProportions.height,left:0}).top-c.margins.top);I&&(g.position.top=c._convertPositionTo("relative",
{top:u,left:0}).top-c.margins.top);v&&(g.position.left=c._convertPositionTo("relative",{top:0,left:n-c.helperProportions.width}).left-c.margins.left);x&&(g.position.left=c._convertPositionTo("relative",{top:0,left:r}).left-c.margins.left)}var y=t||I||v||x;"outer"!=d.snapMode&&(t=Math.abs(q-l)<=b,I=Math.abs(u-k)<=b,v=Math.abs(n-f)<=b,x=Math.abs(r-h)<=b,t&&(g.position.top=c._convertPositionTo("relative",{top:q,left:0}).top-c.margins.top),I&&(g.position.top=c._convertPositionTo("relative",{top:u-c.helperProportions.height,
left:0}).top-c.margins.top),v&&(g.position.left=c._convertPositionTo("relative",{top:0,left:n}).left-c.margins.left),x&&(g.position.left=c._convertPositionTo("relative",{top:0,left:r-c.helperProportions.width}).left-c.margins.left));!c.snapElements[m].snapping&&(t||I||v||x||y)&&c.options.snap.snap&&c.options.snap.snap.call(c.element,e,a.extend(c._uiHash(),{snapItem:c.snapElements[m].item}));c.snapElements[m].snapping=t||I||v||x||y}else c.snapElements[m].snapping&&c.options.snap.release&&c.options.snap.release.call(c.element,
e,a.extend(c._uiHash(),{snapItem:c.snapElements[m].item})),c.snapElements[m].snapping=!1}}});a.ui.plugin.add("draggable","stack",{start:function(e,g){var c=a(this).data("draggable").options,c=a.makeArray(a(c.stack)).sort(function(b,f){return(parseInt(a(b).css("zIndex"),10)||0)-(parseInt(a(f).css("zIndex"),10)||0)});if(c.length){var d=parseInt(c[0].style.zIndex)||0;a(c).each(function(a){this.style.zIndex=d+a});this[0].style.zIndex=d+c.length}}});a.ui.plugin.add("draggable","zIndex",{start:function(e,
g){var c=a(g.helper),d=a(this).data("draggable").options;c.css("zIndex")&&(d._zIndex=c.css("zIndex"));c.css("zIndex",d.zIndex)},stop:function(e,g){var c=a(this).data("draggable").options;c._zIndex&&a(g.helper).css("zIndex",c._zIndex)}})})(jQuery);
(function(a,p){a.widget("ui.droppable",{version:"1.9.1",widgetEventPrefix:"drop",options:{accept:"*",activeClass:!1,addClasses:!0,greedy:!1,hoverClass:!1,scope:"default",tolerance:"intersect"},_create:function(){var e=this.options,g=e.accept;this.isover=0;this.isout=1;this.accept=a.isFunction(g)?g:function(a){return a.is(g)};this.proportions={width:this.element[0].offsetWidth,height:this.element[0].offsetHeight};a.ui.ddmanager.droppables[e.scope]=a.ui.ddmanager.droppables[e.scope]||[];a.ui.ddmanager.droppables[e.scope].push(this);
e.addClasses&&this.element.addClass("ui-droppable")},_destroy:function(){for(var e=a.ui.ddmanager.droppables[this.options.scope],g=0;g<e.length;g++)e[g]==this&&e.splice(g,1);this.element.removeClass("ui-droppable ui-droppable-disabled")},_setOption:function(e,g){"accept"==e&&(this.accept=a.isFunction(g)?g:function(a){return a.is(g)});a.Widget.prototype._setOption.apply(this,arguments)},_activate:function(e){var g=a.ui.ddmanager.current;this.options.activeClass&&this.element.addClass(this.options.activeClass);
g&&this._trigger("activate",e,this.ui(g))},_deactivate:function(e){var g=a.ui.ddmanager.current;this.options.activeClass&&this.element.removeClass(this.options.activeClass);g&&this._trigger("deactivate",e,this.ui(g))},_over:function(e){var g=a.ui.ddmanager.current;g&&(g.currentItem||g.element)[0]!=this.element[0]&&this.accept.call(this.element[0],g.currentItem||g.element)&&(this.options.hoverClass&&this.element.addClass(this.options.hoverClass),this._trigger("over",e,this.ui(g)))},_out:function(e){var g=
a.ui.ddmanager.current;g&&(g.currentItem||g.element)[0]!=this.element[0]&&this.accept.call(this.element[0],g.currentItem||g.element)&&(this.options.hoverClass&&this.element.removeClass(this.options.hoverClass),this._trigger("out",e,this.ui(g)))},_drop:function(e,g){var c=g||a.ui.ddmanager.current;if(!c||(c.currentItem||c.element)[0]==this.element[0])return!1;var d=!1;return this.element.find(":data(droppable)").not(".ui-draggable-dragging").each(function(){var b=a.data(this,"droppable");if(b.options.greedy&&
!b.options.disabled&&b.options.scope==c.options.scope&&b.accept.call(b.element[0],c.currentItem||c.element)&&a.ui.intersect(c,a.extend(b,{offset:b.element.offset()}),b.options.tolerance))return d=!0,!1}),d?!1:this.accept.call(this.element[0],c.currentItem||c.element)?(this.options.activeClass&&this.element.removeClass(this.options.activeClass),this.options.hoverClass&&this.element.removeClass(this.options.hoverClass),this._trigger("drop",e,this.ui(c)),this.element):!1},ui:function(a){return{draggable:a.currentItem||
a.element,helper:a.helper,position:a.position,offset:a.positionAbs}}});a.ui.intersect=function(e,g,c){if(!g.offset)return!1;var d=(e.positionAbs||e.position.absolute).left,b=d+e.helperProportions.width,f=(e.positionAbs||e.position.absolute).top,h=f+e.helperProportions.height,l=g.offset.left,k=l+g.proportions.width,m=g.offset.top,n=m+g.proportions.height;switch(c){case "fit":return l<=d&&b<=k&&m<=f&&h<=n;case "intersect":return l<d+e.helperProportions.width/2&&b-e.helperProportions.width/2<k&&m<f+
e.helperProportions.height/2&&h-e.helperProportions.height/2<n;case "pointer":return a.ui.isOver((e.positionAbs||e.position.absolute).top+(e.clickOffset||e.offset.click).top,(e.positionAbs||e.position.absolute).left+(e.clickOffset||e.offset.click).left,m,l,g.proportions.height,g.proportions.width);case "touch":return(f>=m&&f<=n||h>=m&&h<=n||f<m&&h>n)&&(d>=l&&d<=k||b>=l&&b<=k||d<l&&b>k);default:return!1}};a.ui.ddmanager={current:null,droppables:{"default":[]},prepareOffsets:function(e,g){var c=a.ui.ddmanager.droppables[e.options.scope]||
[],d=g?g.type:null,b=(e.currentItem||e.element).find(":data(droppable)").andSelf(),f=0;a:for(;f<c.length;f++)if(!(c[f].options.disabled||e&&!c[f].accept.call(c[f].element[0],e.currentItem||e.element))){for(var h=0;h<b.length;h++)if(b[h]==c[f].element[0]){c[f].proportions.height=0;continue a}c[f].visible="none"!=c[f].element.css("display");c[f].visible&&("mousedown"==d&&c[f]._activate.call(c[f],g),c[f].offset=c[f].element.offset(),c[f].proportions={width:c[f].element[0].offsetWidth,height:c[f].element[0].offsetHeight})}},
drop:function(e,g){var c=!1;return a.each(a.ui.ddmanager.droppables[e.options.scope]||[],function(){this.options&&(!this.options.disabled&&this.visible&&a.ui.intersect(e,this,this.options.tolerance)&&(c=this._drop.call(this,g)||c),!this.options.disabled&&this.visible&&this.accept.call(this.element[0],e.currentItem||e.element)&&(this.isout=1,this.isover=0,this._deactivate.call(this,g)))}),c},dragStart:function(e,g){e.element.parentsUntil("body").bind("scroll.droppable",function(){e.options.refreshPositions||
a.ui.ddmanager.prepareOffsets(e,g)})},drag:function(e,g){e.options.refreshPositions&&a.ui.ddmanager.prepareOffsets(e,g);a.each(a.ui.ddmanager.droppables[e.options.scope]||[],function(){if(!this.options.disabled&&!this.greedyChild&&this.visible){var c=a.ui.intersect(e,this,this.options.tolerance);if(c=c||1!=this.isover?c&&0==this.isover?"isover":null:"isout"){var d;if(this.options.greedy){var b=this.options.scope,f=this.element.parents(":data(droppable)").filter(function(){return a.data(this,"droppable").options.scope===
b});f.length&&(d=a.data(f[0],"droppable"),d.greedyChild="isover"==c?1:0)}d&&"isover"==c&&(d.isover=0,d.isout=1,d._out.call(d,g));this[c]=1;this["isout"==c?"isover":"isout"]=0;this["isover"==c?"_over":"_out"].call(this,g);d&&"isout"==c&&(d.isout=0,d.isover=1,d._over.call(d,g))}}})},dragStop:function(e,g){e.element.parentsUntil("body").unbind("scroll.droppable");e.options.refreshPositions||a.ui.ddmanager.prepareOffsets(e,g)}}})(jQuery);
(function(a,p){a.widget("ui.resizable",a.ui.mouse,{version:"1.9.1",widgetEventPrefix:"resize",options:{alsoResize:!1,animate:!1,animateDuration:"slow",animateEasing:"swing",aspectRatio:!1,autoHide:!1,containment:!1,ghost:!1,grid:!1,handles:"e,s,se",helper:!1,maxHeight:null,maxWidth:null,minHeight:10,minWidth:10,zIndex:1E3},_create:function(){var c=this,d=this.options;this.element.addClass("ui-resizable");a.extend(this,{_aspectRatio:!!d.aspectRatio,aspectRatio:d.aspectRatio,originalElement:this.element,
_proportionallyResizeElements:[],_helper:d.helper||d.ghost||d.animate?d.helper||"ui-resizable-helper":null});this.element[0].nodeName.match(/canvas|textarea|input|select|button|img/i)&&(this.element.wrap(a('<div class="ui-wrapper" style="overflow: hidden;"></div>').css({position:this.element.css("position"),width:this.element.outerWidth(),height:this.element.outerHeight(),top:this.element.css("top"),left:this.element.css("left")})),this.element=this.element.parent().data("resizable",this.element.data("resizable")),
this.elementIsWrapper=!0,this.element.css({marginLeft:this.originalElement.css("marginLeft"),marginTop:this.originalElement.css("marginTop"),marginRight:this.originalElement.css("marginRight"),marginBottom:this.originalElement.css("marginBottom")}),this.originalElement.css({marginLeft:0,marginTop:0,marginRight:0,marginBottom:0}),this.originalResizeStyle=this.originalElement.css("resize"),this.originalElement.css("resize","none"),this._proportionallyResizeElements.push(this.originalElement.css({position:"static",
zoom:1,display:"block"})),this.originalElement.css({margin:this.originalElement.css("margin")}),this._proportionallyResize());this.handles=d.handles||(a(".ui-resizable-handle",this.element).length?{n:".ui-resizable-n",e:".ui-resizable-e",s:".ui-resizable-s",w:".ui-resizable-w",se:".ui-resizable-se",sw:".ui-resizable-sw",ne:".ui-resizable-ne",nw:".ui-resizable-nw"}:"e,s,se");if(this.handles.constructor==String){"all"==this.handles&&(this.handles="n,e,s,w,se,sw,ne,nw");var b=this.handles.split(",");
this.handles={};for(var f=0;f<b.length;f++){var h=a.trim(b[f]),e=a('<div class="ui-resizable-handle ui-resizable-'+h+'"></div>');e.css({zIndex:d.zIndex});"se"==h&&e.addClass("ui-icon ui-icon-gripsmall-diagonal-se");this.handles[h]=".ui-resizable-"+h;this.element.append(e)}}this._renderAxis=function(f){f=f||this.element;for(var b in this.handles){this.handles[b].constructor==String&&(this.handles[b]=a(this.handles[b],this.element).show());if(this.elementIsWrapper&&this.originalElement[0].nodeName.match(/textarea|input|select|button/i)){var d=
a(this.handles[b],this.element),d=/sw|ne|nw|se|n|s/.test(b)?d.outerHeight():d.outerWidth(),c=["padding",/ne|nw|n/.test(b)?"Top":/se|sw|s/.test(b)?"Bottom":/^e$/.test(b)?"Right":"Left"].join("");f.css(c,d);this._proportionallyResize()}a(this.handles[b])}};this._renderAxis(this.element);this._handles=a(".ui-resizable-handle",this.element).disableSelection();this._handles.mouseover(function(){if(!c.resizing){if(this.className)var a=this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i);c.axis=a&&
a[1]?a[1]:"se"}});d.autoHide&&(this._handles.hide(),a(this.element).addClass("ui-resizable-autohide").mouseenter(function(){d.disabled||(a(this).removeClass("ui-resizable-autohide"),c._handles.show())}).mouseleave(function(){d.disabled||c.resizing||(a(this).addClass("ui-resizable-autohide"),c._handles.hide())}));this._mouseInit()},_destroy:function(){this._mouseDestroy();var c=function(b){a(b).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing").removeData("resizable").removeData("ui-resizable").unbind(".resizable").find(".ui-resizable-handle").remove()};
if(this.elementIsWrapper){c(this.element);var d=this.element;this.originalElement.css({position:d.css("position"),width:d.outerWidth(),height:d.outerHeight(),top:d.css("top"),left:d.css("left")}).insertAfter(d);d.remove()}return this.originalElement.css("resize",this.originalResizeStyle),c(this.originalElement),this},_mouseCapture:function(c){var d=!1,b;for(b in this.handles)a(this.handles[b])[0]==c.target&&(d=!0);return!this.options.disabled&&d},_mouseStart:function(c){var d=this.options,b=this.element.position(),
f=this.element;this.resizing=!0;this.documentScroll={top:a(document).scrollTop(),left:a(document).scrollLeft()};(f.is(".ui-draggable")||/absolute/.test(f.css("position")))&&f.css({position:"absolute",top:b.top,left:b.left});this._renderProxy();var b=e(this.helper.css("left")),h=e(this.helper.css("top"));d.containment&&(b+=a(d.containment).scrollLeft()||0,h+=a(d.containment).scrollTop()||0);this.offset=this.helper.offset();this.position={left:b,top:h};this.size=this._helper?{width:f.outerWidth(),height:f.outerHeight()}:
{width:f.width(),height:f.height()};this.originalSize=this._helper?{width:f.outerWidth(),height:f.outerHeight()}:{width:f.width(),height:f.height()};this.originalPosition={left:b,top:h};this.sizeDiff={width:f.outerWidth()-f.width(),height:f.outerHeight()-f.height()};this.originalMousePosition={left:c.pageX,top:c.pageY};this.aspectRatio="number"==typeof d.aspectRatio?d.aspectRatio:this.originalSize.width/this.originalSize.height||1;d=a(".ui-resizable-"+this.axis).css("cursor");return a("body").css("cursor",
"auto"==d?this.axis+"-resize":d),f.addClass("ui-resizable-resizing"),this._propagate("start",c),!0},_mouseDrag:function(a){var d=this.helper,b=this.originalMousePosition,f=this._change[this.axis];if(!f)return!1;b=f.apply(this,[a,a.pageX-b.left||0,a.pageY-b.top||0]);this._updateVirtualBoundaries(a.shiftKey);if(this._aspectRatio||a.shiftKey)b=this._updateRatio(b,a);return b=this._respectSize(b,a),this._propagate("resize",a),d.css({top:this.position.top+"px",left:this.position.left+"px",width:this.size.width+
"px",height:this.size.height+"px"}),!this._helper&&this._proportionallyResizeElements.length&&this._proportionallyResize(),this._updateCache(b),this._trigger("resize",a,this.ui()),!1},_mouseStop:function(c){this.resizing=!1;var d=this.options;if(this._helper){var b=this._proportionallyResizeElements,f=b.length&&/textarea/i.test(b[0].nodeName),b=f&&a.ui.hasScroll(b[0],"left")?0:this.sizeDiff.height,f=f?0:this.sizeDiff.width,f={width:this.helper.width()-f,height:this.helper.height()-b},b=parseInt(this.element.css("left"),
10)+(this.position.left-this.originalPosition.left)||null,h=parseInt(this.element.css("top"),10)+(this.position.top-this.originalPosition.top)||null;d.animate||this.element.css(a.extend(f,{top:h,left:b}));this.helper.height(this.size.height);this.helper.width(this.size.width);this._helper&&!d.animate&&this._proportionallyResize()}return a("body").css("cursor","auto"),this.element.removeClass("ui-resizable-resizing"),this._propagate("stop",c),this._helper&&this.helper.remove(),!1},_updateVirtualBoundaries:function(a){var d=
this.options,b,f,h,d={minWidth:g(d.minWidth)?d.minWidth:0,maxWidth:g(d.maxWidth)?d.maxWidth:Infinity,minHeight:g(d.minHeight)?d.minHeight:0,maxHeight:g(d.maxHeight)?d.maxHeight:Infinity};if(this._aspectRatio||a)a=d.minHeight*this.aspectRatio,f=d.minWidth/this.aspectRatio,b=d.maxHeight*this.aspectRatio,h=d.maxWidth/this.aspectRatio,a>d.minWidth&&(d.minWidth=a),f>d.minHeight&&(d.minHeight=f),b<d.maxWidth&&(d.maxWidth=b),h<d.maxHeight&&(d.maxHeight=h);this._vBoundaries=d},_updateCache:function(a){this.offset=
this.helper.offset();g(a.left)&&(this.position.left=a.left);g(a.top)&&(this.position.top=a.top);g(a.height)&&(this.size.height=a.height);g(a.width)&&(this.size.width=a.width)},_updateRatio:function(a,d){var b=this.position,f=this.size,h=this.axis;return g(a.height)?a.width=a.height*this.aspectRatio:g(a.width)&&(a.height=a.width/this.aspectRatio),"sw"==h&&(a.left=b.left+(f.width-a.width),a.top=null),"nw"==h&&(a.top=b.top+(f.height-a.height),a.left=b.left+(f.width-a.width)),a},_respectSize:function(a,
d){var b=this._vBoundaries,f=this.axis,h=g(a.width)&&b.maxWidth&&b.maxWidth<a.width,e=g(a.height)&&b.maxHeight&&b.maxHeight<a.height,k=g(a.width)&&b.minWidth&&b.minWidth>a.width,m=g(a.height)&&b.minHeight&&b.minHeight>a.height;k&&(a.width=b.minWidth);m&&(a.height=b.minHeight);h&&(a.width=b.maxWidth);e&&(a.height=b.maxHeight);var n=this.originalPosition.left+this.originalSize.width,r=this.position.top+this.size.height,q=/sw|nw|w/.test(f),f=/nw|ne|n/.test(f);k&&q&&(a.left=n-b.minWidth);h&&q&&(a.left=
n-b.maxWidth);m&&f&&(a.top=r-b.minHeight);e&&f&&(a.top=r-b.maxHeight);b=!a.width&&!a.height;return b&&!a.left&&a.top?a.top=null:b&&!a.top&&a.left&&(a.left=null),a},_proportionallyResize:function(){if(this._proportionallyResizeElements.length)for(var c=this.helper||this.element,d=0;d<this._proportionallyResizeElements.length;d++){var b=this._proportionallyResizeElements[d];if(!this.borderDif){var f=[b.css("borderTopWidth"),b.css("borderRightWidth"),b.css("borderBottomWidth"),b.css("borderLeftWidth")],
h=[b.css("paddingTop"),b.css("paddingRight"),b.css("paddingBottom"),b.css("paddingLeft")];this.borderDif=a.map(f,function(a,f){var b=parseInt(a,10)||0,d=parseInt(h[f],10)||0;return b+d})}b.css({height:c.height()-this.borderDif[0]-this.borderDif[2]||0,width:c.width()-this.borderDif[1]-this.borderDif[3]||0})}},_renderProxy:function(){var c=this.options;this.elementOffset=this.element.offset();if(this._helper){this.helper=this.helper||a('<div style="overflow:hidden;"></div>');var d=a.ui.ie6?1:0,b=a.ui.ie6?
2:-1;this.helper.addClass(this._helper).css({width:this.element.outerWidth()+b,height:this.element.outerHeight()+b,position:"absolute",left:this.elementOffset.left-d+"px",top:this.elementOffset.top-d+"px",zIndex:++c.zIndex});this.helper.appendTo("body").disableSelection()}else this.helper=this.element},_change:{e:function(a,d,b){return{width:this.originalSize.width+d}},w:function(a,d,b){return{left:this.originalPosition.left+d,width:this.originalSize.width-d}},n:function(a,d,b){return{top:this.originalPosition.top+
b,height:this.originalSize.height-b}},s:function(a,d,b){return{height:this.originalSize.height+b}},se:function(c,d,b){return a.extend(this._change.s.apply(this,arguments),this._change.e.apply(this,[c,d,b]))},sw:function(c,d,b){return a.extend(this._change.s.apply(this,arguments),this._change.w.apply(this,[c,d,b]))},ne:function(c,d,b){return a.extend(this._change.n.apply(this,arguments),this._change.e.apply(this,[c,d,b]))},nw:function(c,d,b){return a.extend(this._change.n.apply(this,arguments),this._change.w.apply(this,
[c,d,b]))}},_propagate:function(c,d){a.ui.plugin.call(this,c,[d,this.ui()]);"resize"!=c&&this._trigger(c,d,this.ui())},plugins:{},ui:function(){return{originalElement:this.originalElement,element:this.element,helper:this.helper,position:this.position,size:this.size,originalSize:this.originalSize,originalPosition:this.originalPosition}}});a.ui.plugin.add("resizable","alsoResize",{start:function(c,d){var b=a(this).data("resizable").options,f=function(f){a(f).each(function(){var f=a(this);f.data("resizable-alsoresize",
{width:parseInt(f.width(),10),height:parseInt(f.height(),10),left:parseInt(f.css("left"),10),top:parseInt(f.css("top"),10)})})};"object"!=typeof b.alsoResize||b.alsoResize.parentNode?f(b.alsoResize):b.alsoResize.length?(b.alsoResize=b.alsoResize[0],f(b.alsoResize)):a.each(b.alsoResize,function(a){f(a)})},resize:function(c,d){var b=a(this).data("resizable"),f=b.options,h=b.originalSize,e=b.originalPosition,g={height:b.size.height-h.height||0,width:b.size.width-h.width||0,top:b.position.top-e.top||
0,left:b.position.left-e.left||0},m=function(f,b){a(f).each(function(){var f=a(this),c=a(this).data("resizable-alsoresize"),h={},e=b&&b.length?b:f.parents(d.originalElement[0]).length?["width","height"]:["width","height","top","left"];a.each(e,function(a,f){var b=(c[f]||0)+(g[f]||0);b&&0<=b&&(h[f]=b||null)});f.css(h)})};"object"!=typeof f.alsoResize||f.alsoResize.nodeType?m(f.alsoResize):a.each(f.alsoResize,function(a,f){m(a,f)})},stop:function(c,d){a(this).removeData("resizable-alsoresize")}});a.ui.plugin.add("resizable",
"animate",{stop:function(c,d){var b=a(this).data("resizable"),f=b.options,h=b._proportionallyResizeElements,e=h.length&&/textarea/i.test(h[0].nodeName),g=e&&a.ui.hasScroll(h[0],"left")?0:b.sizeDiff.height,e={width:b.size.width-(e?0:b.sizeDiff.width),height:b.size.height-g},g=parseInt(b.element.css("left"),10)+(b.position.left-b.originalPosition.left)||null,m=parseInt(b.element.css("top"),10)+(b.position.top-b.originalPosition.top)||null;b.element.animate(a.extend(e,m&&g?{top:m,left:g}:{}),{duration:f.animateDuration,
easing:f.animateEasing,step:function(){var f={width:parseInt(b.element.css("width"),10),height:parseInt(b.element.css("height"),10),top:parseInt(b.element.css("top"),10),left:parseInt(b.element.css("left"),10)};h&&h.length&&a(h[0]).css({width:f.width,height:f.height});b._updateCache(f);b._propagate("resize",c)}})}});a.ui.plugin.add("resizable","containment",{start:function(c,d){var b=a(this).data("resizable"),f=b.element,h=b.options.containment;if(f=h instanceof a?h.get(0):/parent/.test(h)?f.parent().get(0):
h)if(b.containerElement=a(f),/document/.test(h)||h==document)b.containerOffset={left:0,top:0},b.containerPosition={left:0,top:0},b.parentData={element:a(document),left:0,top:0,width:a(document).width(),height:a(document).height()||document.body.parentNode.scrollHeight};else{var g=a(f),k=[];a(["Top","Right","Left","Bottom"]).each(function(a,f){k[a]=e(g.css("padding"+f))});b.containerOffset=g.offset();b.containerPosition=g.position();b.containerSize={height:g.innerHeight()-k[3],width:g.innerWidth()-
k[1]};var h=b.containerOffset,m=b.containerSize.height,n=b.containerSize.width,n=a.ui.hasScroll(f,"left")?f.scrollWidth:n,m=a.ui.hasScroll(f)?f.scrollHeight:m;b.parentData={element:f,left:h.left,top:h.top,width:n,height:m}}},resize:function(c,d){var b=a(this).data("resizable"),f=b.options,h=b.containerOffset,e=b.position,g=b._aspectRatio||c.shiftKey,m={top:0,left:0},n=b.containerElement;n[0]!=document&&/static/.test(n.css("position"))&&(m=h);e.left<(b._helper?h.left:0)&&(b.size.width+=b._helper?b.position.left-
h.left:b.position.left-m.left,g&&(b.size.height=b.size.width/b.aspectRatio),b.position.left=f.helper?h.left:0);e.top<(b._helper?h.top:0)&&(b.size.height+=b._helper?b.position.top-h.top:b.position.top,g&&(b.size.width=b.size.height*b.aspectRatio),b.position.top=b._helper?h.top:0);b.offset.left=b.parentData.left+b.position.left;b.offset.top=b.parentData.top+b.position.top;f=Math.abs(b.offset.left-m.left+b.sizeDiff.width);h=Math.abs((b._helper?b.offset.top-m.top:b.offset.top-h.top)+b.sizeDiff.height);
m=b.containerElement.get(0)==b.element.parent().get(0);e=/relative|absolute/.test(b.containerElement.css("position"));m&&e&&(f-=b.parentData.left);f+b.size.width>=b.parentData.width&&(b.size.width=b.parentData.width-f,g&&(b.size.height=b.size.width/b.aspectRatio));h+b.size.height>=b.parentData.height&&(b.size.height=b.parentData.height-h,g&&(b.size.width=b.size.height*b.aspectRatio))},stop:function(c,d){var b=a(this).data("resizable"),f=b.options,h=b.containerOffset,e=b.containerPosition,g=b.containerElement,
m=a(b.helper),n=m.offset(),r=m.outerWidth()-b.sizeDiff.width,m=m.outerHeight()-b.sizeDiff.height;b._helper&&!f.animate&&/relative/.test(g.css("position"))&&a(this).css({left:n.left-e.left-h.left,width:r,height:m});b._helper&&!f.animate&&/static/.test(g.css("position"))&&a(this).css({left:n.left-e.left-h.left,width:r,height:m})}});a.ui.plugin.add("resizable","ghost",{start:function(c,d){var b=a(this).data("resizable"),f=b.options,h=b.size;b.ghost=b.originalElement.clone();b.ghost.css({opacity:.25,
display:"block",position:"relative",height:h.height,width:h.width,margin:0,left:0,top:0}).addClass("ui-resizable-ghost").addClass("string"==typeof f.ghost?f.ghost:"");b.ghost.appendTo(b.helper)},resize:function(c,d){var b=a(this).data("resizable");b.ghost&&b.ghost.css({position:"relative",height:b.size.height,width:b.size.width})},stop:function(c,d){var b=a(this).data("resizable");b.ghost&&b.helper&&b.helper.get(0).removeChild(b.ghost.get(0))}});a.ui.plugin.add("resizable","grid",{resize:function(c,
d){var b=a(this).data("resizable"),f=b.options,h=b.size,e=b.originalSize,g=b.originalPosition,m=b.axis;f.grid="number"==typeof f.grid?[f.grid,f.grid]:f.grid;var n=Math.round((h.width-e.width)/(f.grid[0]||1))*(f.grid[0]||1),f=Math.round((h.height-e.height)/(f.grid[1]||1))*(f.grid[1]||1);/^(se|s|e)$/.test(m)?(b.size.width=e.width+n,b.size.height=e.height+f):/^(ne)$/.test(m)?(b.size.width=e.width+n,b.size.height=e.height+f,b.position.top=g.top-f):/^(sw)$/.test(m)?(b.size.width=e.width+n,b.size.height=
e.height+f,b.position.left=g.left-n):(b.size.width=e.width+n,b.size.height=e.height+f,b.position.top=g.top-f,b.position.left=g.left-n)}});var e=function(a){return parseInt(a,10)||0},g=function(a){return!isNaN(parseInt(a,10))}})(jQuery);
(function(a,p){a.widget("ui.selectable",a.ui.mouse,{version:"1.9.1",options:{appendTo:"body",autoRefresh:!0,distance:0,filter:"*",tolerance:"touch"},_create:function(){var e=this;this.element.addClass("ui-selectable");this.dragged=!1;var g;this.refresh=function(){g=a(e.options.filter,e.element[0]);g.addClass("ui-selectee");g.each(function(){var c=a(this),d=c.offset();a.data(this,"selectable-item",{element:this,$element:c,left:d.left,top:d.top,right:d.left+c.outerWidth(),bottom:d.top+c.outerHeight(),
startselected:!1,selected:c.hasClass("ui-selected"),selecting:c.hasClass("ui-selecting"),unselecting:c.hasClass("ui-unselecting")})})};this.refresh();this.selectees=g.addClass("ui-selectee");this._mouseInit();this.helper=a("<div class='ui-selectable-helper'></div>")},_destroy:function(){this.selectees.removeClass("ui-selectee").removeData("selectable-item");this.element.removeClass("ui-selectable ui-selectable-disabled");this._mouseDestroy()},_mouseStart:function(e){var g=this;this.opos=[e.pageX,
e.pageY];if(!this.options.disabled){var c=this.options;this.selectees=a(c.filter,this.element[0]);this._trigger("start",e);a(c.appendTo).append(this.helper);this.helper.css({left:e.clientX,top:e.clientY,width:0,height:0});c.autoRefresh&&this.refresh();this.selectees.filter(".ui-selected").each(function(){var d=a.data(this,"selectable-item");d.startselected=!0;e.metaKey||e.ctrlKey||(d.$element.removeClass("ui-selected"),d.selected=!1,d.$element.addClass("ui-unselecting"),d.unselecting=!0,g._trigger("unselecting",
e,{unselecting:d.element}))});a(e.target).parents().andSelf().each(function(){var d=a.data(this,"selectable-item");if(d){var b=!e.metaKey&&!e.ctrlKey||!d.$element.hasClass("ui-selected");return d.$element.removeClass(b?"ui-unselecting":"ui-selected").addClass(b?"ui-selecting":"ui-unselecting"),d.unselecting=!b,d.selecting=b,d.selected=b,b?g._trigger("selecting",e,{selecting:d.element}):g._trigger("unselecting",e,{unselecting:d.element}),!1}})}},_mouseDrag:function(e){var g=this;this.dragged=!0;if(!this.options.disabled){var c=
this.options,d=this.opos[0],b=this.opos[1],f=e.pageX,h=e.pageY;d>f&&(d=f=d);b>h&&(b=h=b);return this.helper.css({left:d,top:b,width:f-d,height:h-b}),this.selectees.each(function(){var l=a.data(this,"selectable-item");if(l&&l.element!=g.element[0]){var k=!1;"touch"==c.tolerance?k=!(l.left>f||l.right<d||l.top>h||l.bottom<b):"fit"==c.tolerance&&(k=l.left>d&&l.right<f&&l.top>b&&l.bottom<h);k?(l.selected&&(l.$element.removeClass("ui-selected"),l.selected=!1),l.unselecting&&(l.$element.removeClass("ui-unselecting"),
l.unselecting=!1),l.selecting||(l.$element.addClass("ui-selecting"),l.selecting=!0,g._trigger("selecting",e,{selecting:l.element}))):(l.selecting&&((e.metaKey||e.ctrlKey)&&l.startselected?(l.$element.removeClass("ui-selecting"),l.selecting=!1,l.$element.addClass("ui-selected"),l.selected=!0):(l.$element.removeClass("ui-selecting"),l.selecting=!1,l.startselected&&(l.$element.addClass("ui-unselecting"),l.unselecting=!0),g._trigger("unselecting",e,{unselecting:l.element}))),l.selected&&!e.metaKey&&!e.ctrlKey&&
!l.startselected&&(l.$element.removeClass("ui-selected"),l.selected=!1,l.$element.addClass("ui-unselecting"),l.unselecting=!0,g._trigger("unselecting",e,{unselecting:l.element})))}}),!1}},_mouseStop:function(e){var g=this;this.dragged=!1;return a(".ui-unselecting",this.element[0]).each(function(){var c=a.data(this,"selectable-item");c.$element.removeClass("ui-unselecting");c.unselecting=!1;c.startselected=!1;g._trigger("unselected",e,{unselected:c.element})}),a(".ui-selecting",this.element[0]).each(function(){var c=
a.data(this,"selectable-item");c.$element.removeClass("ui-selecting").addClass("ui-selected");c.selecting=!1;c.selected=!0;c.startselected=!0;g._trigger("selected",e,{selected:c.element})}),this._trigger("stop",e),this.helper.remove(),!1}})})(jQuery);
(function(a,p){a.widget("ui.sortable",a.ui.mouse,{version:"1.9.1",widgetEventPrefix:"sort",ready:!1,options:{appendTo:"parent",axis:!1,connectWith:!1,containment:!1,cursor:"auto",cursorAt:!1,dropOnEmpty:!0,forcePlaceholderSize:!1,forceHelperSize:!1,grid:!1,handle:!1,helper:"original",items:"> *",opacity:!1,placeholder:!1,revert:!1,scroll:!0,scrollSensitivity:20,scrollSpeed:20,scope:"default",tolerance:"intersect",zIndex:1E3},_create:function(){var a=this.options;this.containerCache={};this.element.addClass("ui-sortable");
this.refresh();this.floating=this.items.length?"x"===a.axis||/left|right/.test(this.items[0].item.css("float"))||/inline|table-cell/.test(this.items[0].item.css("display")):!1;this.offset=this.element.offset();this._mouseInit();this.ready=!0},_destroy:function(){this.element.removeClass("ui-sortable ui-sortable-disabled");this._mouseDestroy();for(var a=this.items.length-1;0<=a;a--)this.items[a].item.removeData(this.widgetName+"-item");return this},_setOption:function(e,g){"disabled"===e?(this.options[e]=
g,this.widget().toggleClass("ui-sortable-disabled",!!g)):a.Widget.prototype._setOption.apply(this,arguments)},_mouseCapture:function(e,g){var c=this;if(this.reverting||this.options.disabled||"static"==this.options.type)return!1;this._refreshItems(e);var d=null;a(e.target).parents().each(function(){if(a.data(this,c.widgetName+"-item")==c)return d=a(this),!1});a.data(e.target,c.widgetName+"-item")==c&&(d=a(e.target));if(!d)return!1;if(this.options.handle&&!g){var b=!1;a(this.options.handle,d).find("*").andSelf().each(function(){this==
e.target&&(b=!0)});if(!b)return!1}return this.currentItem=d,this._removeCurrentsFromItems(),!0},_mouseStart:function(e,g,c){g=this.options;this.currentContainer=this;this.refreshPositions();this.helper=this._createHelper(e);this._cacheHelperProportions();this._cacheMargins();this.scrollParent=this.helper.scrollParent();this.offset=this.currentItem.offset();this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left};a.extend(this.offset,{click:{left:e.pageX-this.offset.left,
top:e.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()});this.helper.css("position","absolute");this.cssPosition=this.helper.css("position");this.originalPosition=this._generatePosition(e);this.originalPageX=e.pageX;this.originalPageY=e.pageY;g.cursorAt&&this._adjustOffsetFromHelper(g.cursorAt);this.domPosition={prev:this.currentItem.prev()[0],parent:this.currentItem.parent()[0]};this.helper[0]!=this.currentItem[0]&&this.currentItem.hide();this._createPlaceholder();
g.containment&&this._setContainment();g.cursor&&(a("body").css("cursor")&&(this._storedCursor=a("body").css("cursor")),a("body").css("cursor",g.cursor));g.opacity&&(this.helper.css("opacity")&&(this._storedOpacity=this.helper.css("opacity")),this.helper.css("opacity",g.opacity));g.zIndex&&(this.helper.css("zIndex")&&(this._storedZIndex=this.helper.css("zIndex")),this.helper.css("zIndex",g.zIndex));this.scrollParent[0]!=document&&"HTML"!=this.scrollParent[0].tagName&&(this.overflowOffset=this.scrollParent.offset());
this._trigger("start",e,this._uiHash());this._preserveHelperProportions||this._cacheHelperProportions();if(!c)for(c=this.containers.length-1;0<=c;c--)this.containers[c]._trigger("activate",e,this._uiHash(this));return a.ui.ddmanager&&(a.ui.ddmanager.current=this),a.ui.ddmanager&&!g.dropBehaviour&&a.ui.ddmanager.prepareOffsets(this,e),this.dragging=!0,this.helper.addClass("ui-sortable-helper"),this._mouseDrag(e),!0},_mouseDrag:function(e){this.position=this._generatePosition(e);this.positionAbs=this._convertPositionTo("absolute");
this.lastPositionAbs||(this.lastPositionAbs=this.positionAbs);if(this.options.scroll){var g=this.options,c=!1;this.scrollParent[0]!=document&&"HTML"!=this.scrollParent[0].tagName?(this.overflowOffset.top+this.scrollParent[0].offsetHeight-e.pageY<g.scrollSensitivity?this.scrollParent[0].scrollTop=c=this.scrollParent[0].scrollTop+g.scrollSpeed:e.pageY-this.overflowOffset.top<g.scrollSensitivity&&(this.scrollParent[0].scrollTop=c=this.scrollParent[0].scrollTop-g.scrollSpeed),this.overflowOffset.left+
this.scrollParent[0].offsetWidth-e.pageX<g.scrollSensitivity?this.scrollParent[0].scrollLeft=c=this.scrollParent[0].scrollLeft+g.scrollSpeed:e.pageX-this.overflowOffset.left<g.scrollSensitivity&&(this.scrollParent[0].scrollLeft=c=this.scrollParent[0].scrollLeft-g.scrollSpeed)):(e.pageY-a(document).scrollTop()<g.scrollSensitivity?c=a(document).scrollTop(a(document).scrollTop()-g.scrollSpeed):a(window).height()-(e.pageY-a(document).scrollTop())<g.scrollSensitivity&&(c=a(document).scrollTop(a(document).scrollTop()+
g.scrollSpeed)),e.pageX-a(document).scrollLeft()<g.scrollSensitivity?c=a(document).scrollLeft(a(document).scrollLeft()-g.scrollSpeed):a(window).width()-(e.pageX-a(document).scrollLeft())<g.scrollSensitivity&&(c=a(document).scrollLeft(a(document).scrollLeft()+g.scrollSpeed)));!1!==c&&a.ui.ddmanager&&!g.dropBehaviour&&a.ui.ddmanager.prepareOffsets(this,e)}this.positionAbs=this._convertPositionTo("absolute");this.options.axis&&"y"==this.options.axis||(this.helper[0].style.left=this.position.left+"px");
this.options.axis&&"x"==this.options.axis||(this.helper[0].style.top=this.position.top+"px");for(g=this.items.length-1;0<=g;g--){var c=this.items[g],d=c.item[0],b=this._intersectsWithPointer(c);if(b&&c.instance===this.currentContainer&&d!=this.currentItem[0]&&this.placeholder[1==b?"next":"prev"]()[0]!=d&&!a.contains(this.placeholder[0],d)&&("semi-dynamic"==this.options.type?!a.contains(this.element[0],d):1)){this.direction=1==b?"down":"up";if("pointer"!=this.options.tolerance&&!this._intersectsWithSides(c))break;
this._rearrange(e,c);this._trigger("change",e,this._uiHash());break}}return this._contactContainers(e),a.ui.ddmanager&&a.ui.ddmanager.drag(this,e),this._trigger("sort",e,this._uiHash()),this.lastPositionAbs=this.positionAbs,!1},_mouseStop:function(e,g){if(e){a.ui.ddmanager&&!this.options.dropBehaviour&&a.ui.ddmanager.drop(this,e);if(this.options.revert){var c=this,d=this.placeholder.offset();this.reverting=!0;a(this.helper).animate({left:d.left-this.offset.parent.left-this.margins.left+(this.offsetParent[0]==
document.body?0:this.offsetParent[0].scrollLeft),top:d.top-this.offset.parent.top-this.margins.top+(this.offsetParent[0]==document.body?0:this.offsetParent[0].scrollTop)},parseInt(this.options.revert,10)||500,function(){c._clear(e)})}else this._clear(e,g);return!1}},cancel:function(){if(this.dragging){this._mouseUp({target:null});"original"==this.options.helper?this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper"):this.currentItem.show();for(var e=this.containers.length-1;0<=e;e--)this.containers[e]._trigger("deactivate",
null,this._uiHash(this)),this.containers[e].containerCache.over&&(this.containers[e]._trigger("out",null,this._uiHash(this)),this.containers[e].containerCache.over=0)}return this.placeholder&&(this.placeholder[0].parentNode&&this.placeholder[0].parentNode.removeChild(this.placeholder[0]),"original"!=this.options.helper&&this.helper&&this.helper[0].parentNode&&this.helper.remove(),a.extend(this,{helper:null,dragging:!1,reverting:!1,_noFinalSort:null}),this.domPosition.prev?a(this.domPosition.prev).after(this.currentItem):
a(this.domPosition.parent).prepend(this.currentItem)),this},serialize:function(e){var g=this._getItemsAsjQuery(e&&e.connected),c=[];return e=e||{},a(g).each(function(){var d=(a(e.item||this).attr(e.attribute||"id")||"").match(e.expression||/(.+)[-=_](.+)/);d&&c.push((e.key||d[1]+"[]")+"="+(e.key&&e.expression?d[1]:d[2]))}),!c.length&&e.key&&c.push(e.key+"="),c.join("&")},toArray:function(e){var g=this._getItemsAsjQuery(e&&e.connected),c=[];return e=e||{},g.each(function(){c.push(a(e.item||this).attr(e.attribute||
"id")||"")}),c},_intersectsWith:function(a){var g=this.positionAbs.left,c=g+this.helperProportions.width,d=this.positionAbs.top,b=d+this.helperProportions.height,f=a.left,h=f+a.width,l=a.top,k=l+a.height,m=this.offset.click.top,n=this.offset.click.left;return"pointer"==this.options.tolerance||this.options.forcePointerForContainers||"pointer"!=this.options.tolerance&&this.helperProportions[this.floating?"width":"height"]>a[this.floating?"width":"height"]?d+m>l&&d+m<k&&g+n>f&&g+n<h:f<g+this.helperProportions.width/
2&&c-this.helperProportions.width/2<h&&l<d+this.helperProportions.height/2&&b-this.helperProportions.height/2<k},_intersectsWithPointer:function(e){var g="x"===this.options.axis||a.ui.isOverAxis(this.positionAbs.top+this.offset.click.top,e.top,e.height);e="y"===this.options.axis||a.ui.isOverAxis(this.positionAbs.left+this.offset.click.left,e.left,e.width);g=g&&e;e=this._getDragVerticalDirection();var c=this._getDragHorizontalDirection();return g?this.floating?c&&"right"==c||"down"==e?2:1:e&&("down"==
e?2:1):!1},_intersectsWithSides:function(e){var g=a.ui.isOverAxis(this.positionAbs.top+this.offset.click.top,e.top+e.height/2,e.height);e=a.ui.isOverAxis(this.positionAbs.left+this.offset.click.left,e.left+e.width/2,e.width);var c=this._getDragVerticalDirection(),d=this._getDragHorizontalDirection();return this.floating&&d?"right"==d&&e||"left"==d&&!e:c&&("down"==c&&g||"up"==c&&!g)},_getDragVerticalDirection:function(){var a=this.positionAbs.top-this.lastPositionAbs.top;return 0!=a&&(0<a?"down":"up")},
_getDragHorizontalDirection:function(){var a=this.positionAbs.left-this.lastPositionAbs.left;return 0!=a&&(0<a?"right":"left")},refresh:function(a){return this._refreshItems(a),this.refreshPositions(),this},_connectWith:function(){var a=this.options;return a.connectWith.constructor==String?[a.connectWith]:a.connectWith},_getItemsAsjQuery:function(e){var g=[],c=[],d=this._connectWith();if(d&&e)for(e=d.length-1;0<=e;e--)for(var b=a(d[e]),f=b.length-1;0<=f;f--){var h=a.data(b[f],this.widgetName);h&&
h!=this&&!h.options.disabled&&c.push([a.isFunction(h.options.items)?h.options.items.call(h.element):a(h.options.items,h.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"),h])}c.push([a.isFunction(this.options.items)?this.options.items.call(this.element,null,{options:this.options,item:this.currentItem}):a(this.options.items,this.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"),this]);for(e=c.length-1;0<=e;e--)c[e][0].each(function(){g.push(this)});return a(g)},_removeCurrentsFromItems:function(){var e=
this.currentItem.find(":data("+this.widgetName+"-item)");this.items=a.grep(this.items,function(a){for(var c=0;c<e.length;c++)if(e[c]==a.item[0])return!1;return!0})},_refreshItems:function(e){this.items=[];this.containers=[this];var g=this.items,c=[[a.isFunction(this.options.items)?this.options.items.call(this.element[0],e,{item:this.currentItem}):a(this.options.items,this.element),this]],d=this._connectWith();if(d&&this.ready)for(var b=d.length-1;0<=b;b--)for(var f=a(d[b]),h=f.length-1;0<=h;h--){var l=
a.data(f[h],this.widgetName);l&&l!=this&&!l.options.disabled&&(c.push([a.isFunction(l.options.items)?l.options.items.call(l.element[0],e,{item:this.currentItem}):a(l.options.items,l.element),l]),this.containers.push(l))}for(b=c.length-1;0<=b;b--)for(e=c[b][1],d=c[b][0],h=0,f=d.length;h<f;h++)l=a(d[h]),l.data(this.widgetName+"-item",e),g.push({item:l,instance:e,width:0,height:0,left:0,top:0})},refreshPositions:function(e){this.offsetParent&&this.helper&&(this.offset.parent=this._getParentOffset());
for(var g=this.items.length-1;0<=g;g--){var c=this.items[g];if(c.instance==this.currentContainer||!this.currentContainer||c.item[0]==this.currentItem[0]){var d=this.options.toleranceElement?a(this.options.toleranceElement,c.item):c.item;e||(c.width=d.outerWidth(),c.height=d.outerHeight());d=d.offset();c.left=d.left;c.top=d.top}}if(this.options.custom&&this.options.custom.refreshContainers)this.options.custom.refreshContainers.call(this);else for(g=this.containers.length-1;0<=g;g--)d=this.containers[g].element.offset(),
this.containers[g].containerCache.left=d.left,this.containers[g].containerCache.top=d.top,this.containers[g].containerCache.width=this.containers[g].element.outerWidth(),this.containers[g].containerCache.height=this.containers[g].element.outerHeight();return this},_createPlaceholder:function(e){e=e||this;var g=e.options;if(!g.placeholder||g.placeholder.constructor==String){var c=g.placeholder;g.placeholder={element:function(){var d=a(document.createElement(e.currentItem[0].nodeName)).addClass(c||
e.currentItem[0].className+" ui-sortable-placeholder").removeClass("ui-sortable-helper")[0];return c||(d.style.visibility="hidden"),d},update:function(a,b){if(!c||g.forcePlaceholderSize)b.height()||b.height(e.currentItem.innerHeight()-parseInt(e.currentItem.css("paddingTop")||0,10)-parseInt(e.currentItem.css("paddingBottom")||0,10)),b.width()||b.width(e.currentItem.innerWidth()-parseInt(e.currentItem.css("paddingLeft")||0,10)-parseInt(e.currentItem.css("paddingRight")||0,10))}}}e.placeholder=a(g.placeholder.element.call(e.element,
e.currentItem));e.currentItem.after(e.placeholder);g.placeholder.update(e,e.placeholder)},_contactContainers:function(e){for(var g=null,c=null,d=this.containers.length-1;0<=d;d--)a.contains(this.currentItem[0],this.containers[d].element[0])||(this._intersectsWith(this.containers[d].containerCache)?g&&a.contains(this.containers[d].element[0],g.element[0])||(g=this.containers[d],c=d):this.containers[d].containerCache.over&&(this.containers[d]._trigger("out",e,this._uiHash(this)),this.containers[d].containerCache.over=
0));if(g)if(1===this.containers.length)this.containers[c]._trigger("over",e,this._uiHash(this)),this.containers[c].containerCache.over=1;else{for(var g=1E4,d=null,b=this.containers[c].floating?"left":"top",f=this.containers[c].floating?"width":"height",h=this.positionAbs[b]+this.offset.click[b],l=this.items.length-1;0<=l;l--)if(a.contains(this.containers[c].element[0],this.items[l].item[0])&&this.items[l].item[0]!=this.currentItem[0]){var k=this.items[l].item.offset()[b],m=!1;Math.abs(k-h)>Math.abs(k+
this.items[l][f]-h)&&(m=!0,k+=this.items[l][f]);Math.abs(k-h)<g&&(g=Math.abs(k-h),d=this.items[l],this.direction=m?"up":"down")}if(d||this.options.dropOnEmpty)this.currentContainer=this.containers[c],d?this._rearrange(e,d,null,!0):this._rearrange(e,null,this.containers[c].element,!0),this._trigger("change",e,this._uiHash()),this.containers[c]._trigger("change",e,this._uiHash(this)),this.options.placeholder.update(this.currentContainer,this.placeholder),this.containers[c]._trigger("over",e,this._uiHash(this)),
this.containers[c].containerCache.over=1}},_createHelper:function(e){var g=this.options;e=a.isFunction(g.helper)?a(g.helper.apply(this.element[0],[e,this.currentItem])):"clone"==g.helper?this.currentItem.clone():this.currentItem;return e.parents("body").length||a("parent"!=g.appendTo?g.appendTo:this.currentItem[0].parentNode)[0].appendChild(e[0]),e[0]==this.currentItem[0]&&(this._storedCSS={width:this.currentItem[0].style.width,height:this.currentItem[0].style.height,position:this.currentItem.css("position"),
top:this.currentItem.css("top"),left:this.currentItem.css("left")}),(""==e[0].style.width||g.forceHelperSize)&&e.width(this.currentItem.width()),(""==e[0].style.height||g.forceHelperSize)&&e.height(this.currentItem.height()),e},_adjustOffsetFromHelper:function(e){"string"==typeof e&&(e=e.split(" "));a.isArray(e)&&(e={left:+e[0],top:+e[1]||0});"left"in e&&(this.offset.click.left=e.left+this.margins.left);"right"in e&&(this.offset.click.left=this.helperProportions.width-e.right+this.margins.left);"top"in
e&&(this.offset.click.top=e.top+this.margins.top);"bottom"in e&&(this.offset.click.top=this.helperProportions.height-e.bottom+this.margins.top)},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var e=this.offsetParent.offset();"absolute"==this.cssPosition&&this.scrollParent[0]!=document&&a.contains(this.scrollParent[0],this.offsetParent[0])&&(e.left+=this.scrollParent.scrollLeft(),e.top+=this.scrollParent.scrollTop());if(this.offsetParent[0]==document.body||this.offsetParent[0].tagName&&
"html"==this.offsetParent[0].tagName.toLowerCase()&&a.ui.ie)e={top:0,left:0};return{top:e.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:e.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if("relative"==this.cssPosition){var a=this.currentItem.position();return{top:a.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:a.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()}}return{top:0,
left:0}},_cacheMargins:function(){this.margins={left:parseInt(this.currentItem.css("marginLeft"),10)||0,top:parseInt(this.currentItem.css("marginTop"),10)||0}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var e=this.options;"parent"==e.containment&&(e.containment=this.helper[0].parentNode);if("document"==e.containment||"window"==e.containment)this.containment=[0-this.offset.relative.left-this.offset.parent.left,
0-this.offset.relative.top-this.offset.parent.top,a("document"==e.containment?document:window).width()-this.helperProportions.width-this.margins.left,(a("document"==e.containment?document:window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top];if(!/^(document|window|parent)$/.test(e.containment)){var g=a(e.containment)[0],e=a(e.containment).offset(),c="hidden"!=a(g).css("overflow");this.containment=[e.left+(parseInt(a(g).css("borderLeftWidth"),10)||
0)+(parseInt(a(g).css("paddingLeft"),10)||0)-this.margins.left,e.top+(parseInt(a(g).css("borderTopWidth"),10)||0)+(parseInt(a(g).css("paddingTop"),10)||0)-this.margins.top,e.left+(c?Math.max(g.scrollWidth,g.offsetWidth):g.offsetWidth)-(parseInt(a(g).css("borderLeftWidth"),10)||0)-(parseInt(a(g).css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left,e.top+(c?Math.max(g.scrollHeight,g.offsetHeight):g.offsetHeight)-(parseInt(a(g).css("borderTopWidth"),10)||0)-(parseInt(a(g).css("paddingBottom"),
10)||0)-this.helperProportions.height-this.margins.top]}},_convertPositionTo:function(e,g){g||(g=this.position);var c="absolute"==e?1:-1,d="absolute"!=this.cssPosition||this.scrollParent[0]!=document&&a.contains(this.scrollParent[0],this.offsetParent[0])?this.scrollParent:this.offsetParent,b=/(html|body)/i.test(d[0].tagName);return{top:g.top+this.offset.relative.top*c+this.offset.parent.top*c-("fixed"==this.cssPosition?-this.scrollParent.scrollTop():b?0:d.scrollTop())*c,left:g.left+this.offset.relative.left*
c+this.offset.parent.left*c-("fixed"==this.cssPosition?-this.scrollParent.scrollLeft():b?0:d.scrollLeft())*c}},_generatePosition:function(e){var g=this.options,c="absolute"!=this.cssPosition||this.scrollParent[0]!=document&&a.contains(this.scrollParent[0],this.offsetParent[0])?this.scrollParent:this.offsetParent,d=/(html|body)/i.test(c[0].tagName);"relative"!=this.cssPosition||this.scrollParent[0]!=document&&this.scrollParent[0]!=this.offsetParent[0]||(this.offset.relative=this._getRelativeOffset());
var b=e.pageX,f=e.pageY;this.originalPosition&&(this.containment&&(e.pageX-this.offset.click.left<this.containment[0]&&(b=this.containment[0]+this.offset.click.left),e.pageY-this.offset.click.top<this.containment[1]&&(f=this.containment[1]+this.offset.click.top),e.pageX-this.offset.click.left>this.containment[2]&&(b=this.containment[2]+this.offset.click.left),e.pageY-this.offset.click.top>this.containment[3]&&(f=this.containment[3]+this.offset.click.top)),g.grid&&(f=this.originalPageY+Math.round((f-
this.originalPageY)/g.grid[1])*g.grid[1],f=this.containment?f-this.offset.click.top<this.containment[1]||f-this.offset.click.top>this.containment[3]?f-this.offset.click.top<this.containment[1]?f+g.grid[1]:f-g.grid[1]:f:f,b=this.originalPageX+Math.round((b-this.originalPageX)/g.grid[0])*g.grid[0],b=this.containment?b-this.offset.click.left<this.containment[0]||b-this.offset.click.left>this.containment[2]?b-this.offset.click.left<this.containment[0]?b+g.grid[0]:b-g.grid[0]:b:b));return{top:f-this.offset.click.top-
this.offset.relative.top-this.offset.parent.top+("fixed"==this.cssPosition?-this.scrollParent.scrollTop():d?0:c.scrollTop()),left:b-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+("fixed"==this.cssPosition?-this.scrollParent.scrollLeft():d?0:c.scrollLeft())}},_rearrange:function(a,g,c,d){c?c[0].appendChild(this.placeholder[0]):g.item[0].parentNode.insertBefore(this.placeholder[0],"down"==this.direction?g.item[0]:g.item[0].nextSibling);var b=this.counter=this.counter?++this.counter:
1;this._delay(function(){b==this.counter&&this.refreshPositions(!d)})},_clear:function(e,g){this.reverting=!1;var c=[];!this._noFinalSort&&this.currentItem.parent().length&&this.placeholder.before(this.currentItem);this._noFinalSort=null;if(this.helper[0]==this.currentItem[0]){for(var d in this._storedCSS)if("auto"==this._storedCSS[d]||"static"==this._storedCSS[d])this._storedCSS[d]="";this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")}else this.currentItem.show();this.fromOutside&&
!g&&c.push(function(a){this._trigger("receive",a,this._uiHash(this.fromOutside))});!this.fromOutside&&this.domPosition.prev==this.currentItem.prev().not(".ui-sortable-helper")[0]&&this.domPosition.parent==this.currentItem.parent()[0]||g||c.push(function(a){this._trigger("update",a,this._uiHash())});this!==this.currentContainer&&(g||(c.push(function(a){this._trigger("remove",a,this._uiHash())}),c.push(function(a){return function(f){a._trigger("receive",f,this._uiHash(this))}}.call(this,this.currentContainer)),
c.push(function(a){return function(f){a._trigger("update",f,this._uiHash(this))}}.call(this,this.currentContainer))));for(d=this.containers.length-1;0<=d;d--)g||c.push(function(a){return function(f){a._trigger("deactivate",f,this._uiHash(this))}}.call(this,this.containers[d])),this.containers[d].containerCache.over&&(c.push(function(a){return function(f){a._trigger("out",f,this._uiHash(this))}}.call(this,this.containers[d])),this.containers[d].containerCache.over=0);this._storedCursor&&a("body").css("cursor",
this._storedCursor);this._storedOpacity&&this.helper.css("opacity",this._storedOpacity);this._storedZIndex&&this.helper.css("zIndex","auto"==this._storedZIndex?"":this._storedZIndex);this.dragging=!1;if(this.cancelHelperRemoval){if(!g){this._trigger("beforeStop",e,this._uiHash());for(d=0;d<c.length;d++)c[d].call(this,e);this._trigger("stop",e,this._uiHash())}return this.fromOutside=!1,!1}g||this._trigger("beforeStop",e,this._uiHash());this.placeholder[0].parentNode.removeChild(this.placeholder[0]);
this.helper[0]!=this.currentItem[0]&&this.helper.remove();this.helper=null;if(!g){for(d=0;d<c.length;d++)c[d].call(this,e);this._trigger("stop",e,this._uiHash())}return this.fromOutside=!1,!0},_trigger:function(){!1===a.Widget.prototype._trigger.apply(this,arguments)&&this.cancel()},_uiHash:function(e){var g=e||this;return{helper:g.helper,placeholder:g.placeholder||a([]),position:g.position,originalPosition:g.originalPosition,offset:g.positionAbs,item:g.currentItem,sender:e?e.element:null}}})})(jQuery);
jQuery.effects||function(a,p){var e=!1!==a.uiBackCompat;a.effects={effect:{}};(function(e,c){function d(a,f,b){var d=n[f.type]||{};return null==a?b||!f.def?null:f.def:(a=d.floor?~~a:parseFloat(a),isNaN(a)?f.def:d.mod?(a+d.mod)%d.mod:0>a?0:d.max<a?d.max:a)}function b(a){var f=k(),b=f._rgba=[];return a=a.toLowerCase(),t(l,function(d,c){var h,e=c.re.exec(a),e=e&&c.parse(e),g=c.space||"rgba";if(e)return h=f[g](e),f[m[g].cache]=h[m[g].cache],b=f._rgba=h._rgba,!1}),b.length?("0,0,0,0"===b.join()&&e.extend(b,
u.transparent),f):u[a]}function f(a,f,b){return b=(b+1)%1,1>6*b?a+(f-a)*b*6:1>2*b?f:2>3*b?a+(f-a)*(2/3-b)*6:a}var h=/^([\-+])=\s*(\d+\.?\d*)/,l=[{re:/rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d+(?:\.\d+)?)\s*)?\)/,parse:function(a){return[a[1],a[2],a[3],a[4]]}},{re:/rgba?\(\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d+(?:\.\d+)?)\s*)?\)/,parse:function(a){return[2.55*a[1],2.55*a[2],2.55*a[3],a[4]]}},{re:/#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,
parse:function(a){return[parseInt(a[1],16),parseInt(a[2],16),parseInt(a[3],16)]}},{re:/#([a-f0-9])([a-f0-9])([a-f0-9])/,parse:function(a){return[parseInt(a[1]+a[1],16),parseInt(a[2]+a[2],16),parseInt(a[3]+a[3],16)]}},{re:/hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d+(?:\.\d+)?)\s*)?\)/,space:"hsla",parse:function(a){return[a[1],a[2]/100,a[3]/100,a[4]]}}],k=e.Color=function(a,f,b,d){return new e.Color.fn.parse(a,f,b,d)},m={rgba:{props:{red:{idx:0,type:"byte"},
green:{idx:1,type:"byte"},blue:{idx:2,type:"byte"}}},hsla:{props:{hue:{idx:0,type:"degrees"},saturation:{idx:1,type:"percent"},lightness:{idx:2,type:"percent"}}}},n={"byte":{floor:!0,max:255},percent:{max:1},degrees:{mod:360,floor:!0}},r=k.support={},q=e("<p>")[0],u,t=e.each;q.style.cssText="background-color:rgba(1,1,1,.5)";r.rgba=-1<q.style.backgroundColor.indexOf("rgba");t(m,function(a,f){f.cache="_"+a;f.props.alpha={idx:3,type:"percent",def:1}});k.fn=e.extend(k.prototype,{parse:function(f,h,l,
r){if(f===c)return this._rgba=[null,null,null,null],this;if(f.jquery||f.nodeType)f=e(f).css(h),h=c;var q=this,n=e.type(f),p=this._rgba=[];h!==c&&(f=[f,h,l,r],n="array");if("string"===n)return this.parse(b(f)||u._default);if("array"===n)return t(m.rgba.props,function(a,b){p[b.idx]=d(f[b.idx],b)}),this;if("object"===n)return f instanceof k?t(m,function(a,b){f[b.cache]&&(q[b.cache]=f[b.cache].slice())}):t(m,function(b,c){var h=c.cache;t(c.props,function(a,b){if(!q[h]&&c.to){if("alpha"===a||null==f[a])return;
q[h]=c.to(q._rgba)}q[h][b.idx]=d(f[a],b,!0)});q[h]&&0>a.inArray(null,q[h].slice(0,3))&&(q[h][3]=1,c.from&&(q._rgba=c.from(q[h])))}),this},is:function(a){var f=k(a),b=!0,d=this;return t(m,function(a,c){var h,e=f[c.cache];return e&&(h=d[c.cache]||c.to&&c.to(d._rgba)||[],t(c.props,function(a,f){if(null!=e[f.idx])return b=e[f.idx]===h[f.idx],b})),b}),b},_space:function(){var a=[],f=this;return t(m,function(b,d){f[d.cache]&&a.push(b)}),a.pop()},transition:function(a,f){var b=k(a),c=b._space(),h=m[c],e=
0===this.alpha()?k("transparent"):this,g=e[h.cache]||h.to(e._rgba),l=g.slice();return b=b[h.cache],t(h.props,function(a,c){var h=c.idx,e=g[h],k=b[h],m=n[c.type]||{};null!==k&&(null===e?l[h]=k:(m.mod&&(k-e>m.mod/2?e+=m.mod:e-k>m.mod/2&&(e-=m.mod)),l[h]=d((k-e)*f+e,c)))}),this[c](l)},blend:function(a){if(1===this._rgba[3])return this;var f=this._rgba.slice(),b=f.pop(),d=k(a)._rgba;return k(e.map(f,function(a,f){return(1-b)*d[f]+b*a}))},toRgbaString:function(){var a="rgba(",f=e.map(this._rgba,function(a,
f){return null==a?2<f?1:0:a});return 1===f[3]&&(f.pop(),a="rgb("),a+f.join()+")"},toHslaString:function(){var a="hsla(",f=e.map(this.hsla(),function(a,f){return null==a&&(a=2<f?1:0),f&&3>f&&(a=Math.round(100*a)+"%"),a});return 1===f[3]&&(f.pop(),a="hsl("),a+f.join()+")"},toHexString:function(a){var f=this._rgba.slice(),b=f.pop();return a&&f.push(~~(255*b)),"#"+e.map(f,function(a){return a=(a||0).toString(16),1===a.length?"0"+a:a}).join("")},toString:function(){return 0===this._rgba[3]?"transparent":
this.toRgbaString()}});k.fn.parse.prototype=k.fn;m.hsla.to=function(a){if(null==a[0]||null==a[1]||null==a[2])return[null,null,null,a[3]];var f=a[0]/255,b=a[1]/255,d=a[2]/255;a=a[3];var c=Math.max(f,b,d),h=Math.min(f,b,d),e=c-h,g=c+h,l=.5*g,k,m;return h===c?k=0:f===c?k=60*(b-d)/e+360:b===c?k=60*(d-f)/e+120:k=60*(f-b)/e+240,0===l||1===l?m=l:.5>=l?m=e/g:m=e/(2-g),[Math.round(k)%360,m,l,null==a?1:a]};m.hsla.from=function(a){if(null==a[0]||null==a[1]||null==a[2])return[null,null,null,a[3]];var b=a[0]/
360,d=a[1],c=a[2];a=a[3];d=.5>=c?c*(1+d):c+d-c*d;c=2*c-d;return[Math.round(255*f(c,d,b+1/3)),Math.round(255*f(c,d,b)),Math.round(255*f(c,d,b-1/3)),a]};t(m,function(a,f){var b=f.props,l=f.cache,m=f.to,r=f.from;k.fn[a]=function(a){m&&!this[l]&&(this[l]=m(this._rgba));if(a===c)return this[l].slice();var f,h=e.type(a),q="array"===h||"object"===h?a:arguments,n=this[l].slice();return t(b,function(a,f){var b=q["object"===h?a:f.idx];null==b&&(b=n[f.idx]);n[f.idx]=d(b,f)}),r?(f=k(r(n)),f[l]=n,f):k(n)};t(b,
function(f,b){k.fn[f]||(k.fn[f]=function(d){var c=e.type(d),l="alpha"===f?this._hsla?"hsla":"rgba":a,k=this[l](),m=k[b.idx],r;return"undefined"===c?m:("function"===c&&(d=d.call(this,m),c=e.type(d)),null==d&&b.empty?this:("string"===c&&(r=h.exec(d),r&&(d=m+parseFloat(r[2])*("+"===r[1]?1:-1))),k[b.idx]=d,this[l](k)))})})});t("backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor".split(" "),function(a,
f){e.cssHooks[f]={set:function(a,d){var c,h="";if("string"!==e.type(d)||(c=b(d))){d=k(c||d);if(!r.rgba&&1!==d._rgba[3]){for(c="backgroundColor"===f?a.parentNode:a;(""===h||"transparent"===h)&&c&&c.style;)try{h=e.css(c,"backgroundColor"),c=c.parentNode}catch(l){}d=d.blend(h&&"transparent"!==h?h:"_default")}d=d.toRgbaString()}try{a.style[f]=d}catch(l){}}};e.fx.step[f]=function(a){a.colorInit||(a.start=k(a.elem,f),a.end=k(a.end),a.colorInit=!0);e.cssHooks[f].set(a.elem,a.start.transition(a.end,a.pos))}});
e.cssHooks.borderColor={expand:function(a){var f={};return t(["Top","Right","Bottom","Left"],function(b,d){f["border"+d+"Color"]=a}),f}};u=e.Color.names={aqua:"#00ffff",black:"#000000",blue:"#0000ff",fuchsia:"#ff00ff",gray:"#808080",green:"#008000",lime:"#00ff00",maroon:"#800000",navy:"#000080",olive:"#808000",purple:"#800080",red:"#ff0000",silver:"#c0c0c0",teal:"#008080",white:"#ffffff",yellow:"#ffff00",transparent:[null,null,null,0],_default:"#ffffff"}})(jQuery);(function(){function e(){var b=this.ownerDocument.defaultView?
this.ownerDocument.defaultView.getComputedStyle(this,null):this.currentStyle,f={},d,c;if(b&&b.length&&b[0]&&b[b[0]])for(c=b.length;c--;)d=b[c],"string"==typeof b[d]&&(f[a.camelCase(d)]=b[d]);else for(d in b)"string"==typeof b[d]&&(f[d]=b[d]);return f}var c=["add","remove","toggle"],d={border:1,borderBottom:1,borderColor:1,borderLeft:1,borderRight:1,borderTop:1,borderWidth:1,margin:1,padding:1};a.each(["borderLeftStyle","borderRightStyle","borderBottomStyle","borderTopStyle"],function(b,f){a.fx.step[f]=
function(a){if("none"!==a.end&&!a.setAttr||1===a.pos&&!a.setAttr)jQuery.style(a.elem,f,a.end),a.setAttr=!0}});a.effects.animateClass=function(b,f,h,l){var k=a.speed(f,h,l);return this.queue(function(){var f=a(this),h=f.attr("class")||"",l,q=k.children?f.find("*").andSelf():f,q=q.map(function(){return{el:a(this),start:e.call(this)}});l=function(){a.each(c,function(a,d){b[d]&&f[d+"Class"](b[d])})};l();q=q.map(function(){this.end=e.call(this.el[0]);var f=this.start,b=this.end,c={},h,l;for(h in b)l=b[h],
f[h]===l||d[h]||!a.fx.step[h]&&isNaN(parseFloat(l))||(c[h]=l);return this.diff=c,this});f.attr("class",h);q=q.map(function(){var f=this,b=a.Deferred(),d=jQuery.extend({},k,{queue:!1,complete:function(){b.resolve(f)}});return this.el.animate(this.diff,d),b.promise()});a.when.apply(a,q.get()).done(function(){l();a.each(arguments,function(){var f=this.el;a.each(this.diff,function(a){f.css(a,"")})});k.complete.call(f[0])})})};a.fn.extend({_addClass:a.fn.addClass,addClass:function(b,f,d,c){return f?a.effects.animateClass.call(this,
{add:b},f,d,c):this._addClass(b)},_removeClass:a.fn.removeClass,removeClass:function(b,f,d,c){return f?a.effects.animateClass.call(this,{remove:b},f,d,c):this._removeClass(b)},_toggleClass:a.fn.toggleClass,toggleClass:function(b,f,d,c,e){return"boolean"==typeof f||f===p?d?a.effects.animateClass.call(this,f?{add:b}:{remove:b},d,c,e):this._toggleClass(b,f):a.effects.animateClass.call(this,{toggle:b},f,d,c)},switchClass:function(b,f,d,c,e){return a.effects.animateClass.call(this,{add:f,remove:b},d,c,
e)}})})();(function(){function g(d,b,f,c){a.isPlainObject(d)&&(b=d,d=d.effect);d={effect:d};null==b&&(b={});a.isFunction(b)&&(c=b,f=null,b={});if("number"==typeof b||a.fx.speeds[b])c=f,f=b,b={};return a.isFunction(f)&&(c=f,f=null),b&&a.extend(d,b),f=f||b.duration,d.duration=a.fx.off?0:"number"==typeof f?f:f in a.fx.speeds?a.fx.speeds[f]:a.fx.speeds._default,d.complete=c||b.complete,d}function c(d){return!d||"number"==typeof d||a.fx.speeds[d]?!0:"string"!=typeof d||a.effects.effect[d]?!1:e&&a.effects[d]?
!1:!0}a.extend(a.effects,{version:"1.9.1",save:function(a,b){for(var f=0;f<b.length;f++)null!==b[f]&&a.data("ui-effects-"+b[f],a[0].style[b[f]])},restore:function(a,b){var f,c;for(c=0;c<b.length;c++)null!==b[c]&&(f=a.data("ui-effects-"+b[c]),f===p&&(f=""),a.css(b[c],f))},setMode:function(a,b){return"toggle"===b&&(b=a.is(":hidden")?"show":"hide"),b},getBaseline:function(a,b){var f,c;switch(a[0]){case "top":f=0;break;case "middle":f=.5;break;case "bottom":f=1;break;default:f=a[0]/b.height}switch(a[1]){case "left":c=
0;break;case "center":c=.5;break;case "right":c=1;break;default:c=a[1]/b.width}return{x:c,y:f}},createWrapper:function(d){if(d.parent().is(".ui-effects-wrapper"))return d.parent();var b={width:d.outerWidth(!0),height:d.outerHeight(!0),"float":d.css("float")},f=a("<div></div>").addClass("ui-effects-wrapper").css({fontSize:"100%",background:"transparent",border:"none",margin:0,padding:0}),c={width:d.width(),height:d.height()},e=document.activeElement;try{e.id}catch(g){e=document.body}return d.wrap(f),
(d[0]===e||a.contains(d[0],e))&&a(e).focus(),f=d.parent(),"static"===d.css("position")?(f.css({position:"relative"}),d.css({position:"relative"})):(a.extend(b,{position:d.css("position"),zIndex:d.css("z-index")}),a.each(["top","left","bottom","right"],function(a,f){b[f]=d.css(f);isNaN(parseInt(b[f],10))&&(b[f]="auto")}),d.css({position:"relative",top:0,left:0,right:"auto",bottom:"auto"})),d.css(c),f.css(b).show()},removeWrapper:function(d){var b=document.activeElement;return d.parent().is(".ui-effects-wrapper")&&
(d.parent().replaceWith(d),(d[0]===b||a.contains(d[0],b))&&a(b).focus()),d},setTransition:function(d,b,f,c){return c=c||{},a.each(b,function(a,b){var e=d.cssUnit(b);0<e[0]&&(c[b]=e[0]*f+e[1])}),c}});a.fn.extend({effect:function(){function d(f){function d(){a.isFunction(e)&&e.call(c[0]);a.isFunction(f)&&f()}var c=a(this),e=b.complete,h=b.mode;(c.is(":hidden")?"hide"===h:"show"===h)?d():l.call(c[0],b,d)}var b=g.apply(this,arguments),f=b.mode,c=b.queue,l=a.effects.effect[b.effect],k=!l&&e&&a.effects[b.effect];
return a.fx.off||!l&&!k?f?this[f](b.duration,b.complete):this.each(function(){b.complete&&b.complete.call(this)}):l?!1===c?this.each(d):this.queue(c||"fx",d):k.call(this,{options:b,duration:b.duration,callback:b.complete,mode:b.mode})},_show:a.fn.show,show:function(a){if(c(a))return this._show.apply(this,arguments);var b=g.apply(this,arguments);return b.mode="show",this.effect.call(this,b)},_hide:a.fn.hide,hide:function(a){if(c(a))return this._hide.apply(this,arguments);var b=g.apply(this,arguments);
return b.mode="hide",this.effect.call(this,b)},__toggle:a.fn.toggle,toggle:function(d){if(c(d)||"boolean"==typeof d||a.isFunction(d))return this.__toggle.apply(this,arguments);var b=g.apply(this,arguments);return b.mode="toggle",this.effect.call(this,b)},cssUnit:function(d){var b=this.css(d),f=[];return a.each(["em","px","%","pt"],function(a,d){0<b.indexOf(d)&&(f=[parseFloat(b),d])}),f}})})();(function(){var e={};a.each(["Quad","Cubic","Quart","Quint","Expo"],function(a,d){e[d]=function(b){return Math.pow(b,
a+2)}});a.extend(e,{Sine:function(a){return 1-Math.cos(a*Math.PI/2)},Circ:function(a){return 1-Math.sqrt(1-a*a)},Elastic:function(a){return 0===a||1===a?a:-Math.pow(2,8*(a-1))*Math.sin((80*(a-1)-7.5)*Math.PI/15)},Back:function(a){return a*a*(3*a-2)},Bounce:function(a){for(var d,b=4;a<((d=Math.pow(2,--b))-1)/11;);return 1/Math.pow(4,3-b)-7.5625*Math.pow((3*d-2)/22-a,2)}});a.each(e,function(c,d){a.easing["easeIn"+c]=d;a.easing["easeOut"+c]=function(a){return 1-d(1-a)};a.easing["easeInOut"+c]=function(a){return.5>
a?d(2*a)/2:1-d(-2*a+2)/2}})})()}(jQuery);
(function(a,p){var e=0,g={},c={};g.height=g.paddingTop=g.paddingBottom=g.borderTopWidth=g.borderBottomWidth="hide";c.height=c.paddingTop=c.paddingBottom=c.borderTopWidth=c.borderBottomWidth="show";a.widget("ui.accordion",{version:"1.9.1",options:{active:0,animate:{},collapsible:!1,event:"click",header:"> li > :first-child,> :not(li):even",heightStyle:"auto",icons:{activeHeader:"ui-icon-triangle-1-s",header:"ui-icon-triangle-1-e"},activate:null,beforeActivate:null},_create:function(){var d=this.accordionId=
"ui-accordion-"+(this.element.attr("id")||++e),b=this.options;this.prevShow=this.prevHide=a();this.element.addClass("ui-accordion ui-widget ui-helper-reset");this.headers=this.element.find(b.header).addClass("ui-accordion-header ui-helper-reset ui-state-default ui-corner-all");this._hoverable(this.headers);this._focusable(this.headers);this.headers.next().addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom").hide();b.collapsible||!1!==b.active&&null!=b.active||(b.active=
0);0>b.active&&(b.active+=this.headers.length);this.active=this._findActive(b.active).addClass("ui-accordion-header-active ui-state-active").toggleClass("ui-corner-all ui-corner-top");this.active.next().addClass("ui-accordion-content-active").show();this._createIcons();this.refresh();this.element.attr("role","tablist");this.headers.attr("role","tab").each(function(f){var b=a(this),c=b.attr("id"),e=b.next(),g=e.attr("id");c||(c=d+"-header-"+f,b.attr("id",c));g||(g=d+"-panel-"+f,e.attr("id",g));b.attr("aria-controls",
g);e.attr("aria-labelledby",c)}).next().attr("role","tabpanel");this.headers.not(this.active).attr({"aria-selected":"false",tabIndex:-1}).next().attr({"aria-expanded":"false","aria-hidden":"true"}).hide();this.active.length?this.active.attr({"aria-selected":"true",tabIndex:0}).next().attr({"aria-expanded":"true","aria-hidden":"false"}):this.headers.eq(0).attr("tabIndex",0);this._on(this.headers,{keydown:"_keydown"});this._on(this.headers.next(),{keydown:"_panelKeyDown"});this._setupEvents(b.event)},
_getCreateEventData:function(){return{header:this.active,content:this.active.length?this.active.next():a()}},_createIcons:function(){var d=this.options.icons;d&&(a("<span>").addClass("ui-accordion-header-icon ui-icon "+d.header).prependTo(this.headers),this.active.children(".ui-accordion-header-icon").removeClass(d.header).addClass(d.activeHeader),this.headers.addClass("ui-accordion-icons"))},_destroyIcons:function(){this.headers.removeClass("ui-accordion-icons").children(".ui-accordion-header-icon").remove()},
_destroy:function(){var a;this.element.removeClass("ui-accordion ui-widget ui-helper-reset").removeAttr("role");this.headers.removeClass("ui-accordion-header ui-accordion-header-active ui-helper-reset ui-state-default ui-corner-all ui-state-active ui-state-disabled ui-corner-top").removeAttr("role").removeAttr("aria-selected").removeAttr("aria-controls").removeAttr("tabIndex").each(function(){/^ui-accordion/.test(this.id)&&this.removeAttribute("id")});this._destroyIcons();a=this.headers.next().css("display",
"").removeAttr("role").removeAttr("aria-expanded").removeAttr("aria-hidden").removeAttr("aria-labelledby").removeClass("ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content ui-accordion-content-active ui-state-disabled").each(function(){/^ui-accordion/.test(this.id)&&this.removeAttribute("id")});"content"!==this.options.heightStyle&&a.css("height","")},_setOption:function(a,b){"active"===a?this._activate(b):("event"===a&&(this.options.event&&this._off(this.headers,this.options.event),
this._setupEvents(b)),this._super(a,b),"collapsible"===a&&!b&&!1===this.options.active&&this._activate(0),"icons"===a&&(this._destroyIcons(),b&&this._createIcons()),"disabled"===a&&this.headers.add(this.headers.next()).toggleClass("ui-state-disabled",!!b))},_keydown:function(d){if(!d.altKey&&!d.ctrlKey){var b=a.ui.keyCode,f=this.headers.length,c=this.headers.index(d.target),e=!1;switch(d.keyCode){case b.RIGHT:case b.DOWN:e=this.headers[(c+1)%f];break;case b.LEFT:case b.UP:e=this.headers[(c-1+f)%f];
break;case b.SPACE:case b.ENTER:this._eventHandler(d);break;case b.HOME:e=this.headers[0];break;case b.END:e=this.headers[f-1]}e&&(a(d.target).attr("tabIndex",-1),a(e).attr("tabIndex",0),e.focus(),d.preventDefault())}},_panelKeyDown:function(d){d.keyCode===a.ui.keyCode.UP&&d.ctrlKey&&a(d.currentTarget).prev().focus()},refresh:function(){var d,b,f=this.options.heightStyle,c=this.element.parent();"fill"===f?(a.support.minHeight||(b=c.css("overflow"),c.css("overflow","hidden")),d=c.height(),this.element.siblings(":visible").each(function(){var f=
a(this),b=f.css("position");"absolute"!==b&&"fixed"!==b&&(d-=f.outerHeight(!0))}),b&&c.css("overflow",b),this.headers.each(function(){d-=a(this).outerHeight(!0)}),this.headers.next().each(function(){a(this).height(Math.max(0,d-a(this).innerHeight()+a(this).height()))}).css("overflow","auto")):"auto"===f&&(d=0,this.headers.next().each(function(){d=Math.max(d,a(this).height("").height())}).height(d))},_activate:function(d){d=this._findActive(d)[0];d!==this.active[0]&&(d=d||this.active[0],this._eventHandler({target:d,
currentTarget:d,preventDefault:a.noop}))},_findActive:function(d){return"number"==typeof d?this.headers.eq(d):a()},_setupEvents:function(d){var b={};d&&(a.each(d.split(" "),function(a,d){b[d]="_eventHandler"}),this._on(this.headers,b))},_eventHandler:function(d){var b=this.options,f=this.active,c=a(d.currentTarget),e=c[0]===f[0],g=e&&b.collapsible,m=g?a():c.next(),n=f.next(),m={oldHeader:f,oldPanel:n,newHeader:g?a():c,newPanel:m};d.preventDefault();e&&!b.collapsible||!1===this._trigger("beforeActivate",
d,m)||(b.active=g?!1:this.headers.index(c),this.active=e?a():c,this._toggle(m),f.removeClass("ui-accordion-header-active ui-state-active"),b.icons&&f.children(".ui-accordion-header-icon").removeClass(b.icons.activeHeader).addClass(b.icons.header),e||(c.removeClass("ui-corner-all").addClass("ui-accordion-header-active ui-state-active ui-corner-top"),b.icons&&c.children(".ui-accordion-header-icon").removeClass(b.icons.header).addClass(b.icons.activeHeader),c.next().addClass("ui-accordion-content-active")))},
_toggle:function(d){var b=d.newPanel,f=this.prevShow.length?this.prevShow:d.oldPanel;this.prevShow.add(this.prevHide).stop(!0,!0);this.prevShow=b;this.prevHide=f;this.options.animate?this._animate(b,f,d):(f.hide(),b.show(),this._toggleComplete(d));f.attr({"aria-expanded":"false","aria-hidden":"true"});f.prev().attr("aria-selected","false");b.length&&f.length?f.prev().attr("tabIndex",-1):b.length&&this.headers.filter(function(){return 0===a(this).attr("tabIndex")}).attr("tabIndex",-1);b.attr({"aria-expanded":"true",
"aria-hidden":"false"}).prev().attr({"aria-selected":"true",tabIndex:0})},_animate:function(a,b,f){var e,l,k,m=this,n=0,r=a.length&&(!b.length||a.index()<b.index()),q=this.options.animate||{},r=r&&q.down||q,u=function(){m._toggleComplete(f)};"number"==typeof r&&(k=r);"string"==typeof r&&(l=r);l=l||r.easing||q.easing;k=k||r.duration||q.duration;if(!b.length)return a.animate(c,k,l,u);if(!a.length)return b.animate(g,k,l,u);e=a.show().outerHeight();b.animate(g,{duration:k,easing:l,step:function(a,f){f.now=
Math.round(a)}});a.hide().animate(c,{duration:k,easing:l,complete:u,step:function(a,f){f.now=Math.round(a);"height"!==f.prop?n+=f.now:"content"!==m.options.heightStyle&&(f.now=Math.round(e-b.outerHeight()-n),n=0)}})},_toggleComplete:function(a){var b=a.oldPanel;b.removeClass("ui-accordion-content-active").prev().removeClass("ui-corner-top").addClass("ui-corner-all");b.length&&(b.parent()[0].className=b.parent()[0].className);this._trigger("activate",null,a)}});!1!==a.uiBackCompat&&(function(a,b){a.extend(b.options,
{navigation:!1,navigationFilter:function(){return this.href.toLowerCase()===location.href.toLowerCase()}});var f=b._create;b._create=function(){if(this.options.navigation){var b=this,c=this.element.find(this.options.header),e=c.next(),g=c.add(e).find("a").filter(this.options.navigationFilter)[0];g&&c.add(e).each(function(f){if(a.contains(this,g))return b.options.active=Math.floor(f/2),!1})}f.call(this)}}(jQuery,jQuery.ui.accordion.prototype),function(a,b){a.extend(b.options,{heightStyle:null,autoHeight:!0,
clearStyle:!1,fillSpace:!1});var f=b._create,c=b._setOption;a.extend(b,{_create:function(){this.options.heightStyle=this.options.heightStyle||this._mergeHeightStyle();f.call(this)},_setOption:function(a){if("autoHeight"===a||"clearStyle"===a||"fillSpace"===a)this.options.heightStyle=this._mergeHeightStyle();c.apply(this,arguments)},_mergeHeightStyle:function(){var a=this.options;if(a.fillSpace)return"fill";if(a.clearStyle)return"content";if(a.autoHeight)return"auto"}})}(jQuery,jQuery.ui.accordion.prototype),
function(a,b){a.extend(b.options.icons,{activeHeader:null,headerSelected:"ui-icon-triangle-1-s"});var f=b._createIcons;b._createIcons=function(){this.options.icons&&(this.options.icons.activeHeader=this.options.icons.activeHeader||this.options.icons.headerSelected);f.call(this)}}(jQuery,jQuery.ui.accordion.prototype),function(a,b){b.activate=b._activate;var f=b._findActive;b._findActive=function(a){return-1===a&&(a=!1),a&&"number"!=typeof a&&(a=this.headers.index(this.headers.filter(a)),-1===a&&(a=
!1)),f.call(this,a)}}(jQuery,jQuery.ui.accordion.prototype),jQuery.ui.accordion.prototype.resize=jQuery.ui.accordion.prototype.refresh,function(a,b){a.extend(b.options,{change:null,changestart:null});var f=b._trigger;b._trigger=function(a,b,d){var c=f.apply(this,arguments);return c?("beforeActivate"===a?c=f.call(this,"changestart",b,{oldHeader:d.oldHeader,oldContent:d.oldPanel,newHeader:d.newHeader,newContent:d.newPanel}):"activate"===a&&(c=f.call(this,"change",b,{oldHeader:d.oldHeader,oldContent:d.oldPanel,
newHeader:d.newHeader,newContent:d.newPanel})),c):!1}}(jQuery,jQuery.ui.accordion.prototype),function(a,b){a.extend(b.options,{animate:null,animated:"slide"});var f=b._create;b._create=function(){var a=this.options;null===a.animate&&(a.animated?"slide"===a.animated?a.animate=300:"bounceslide"===a.animated?a.animate={duration:200,down:{easing:"easeOutBounce",duration:1E3}}:a.animate=a.animated:a.animate=!1);f.call(this)}}(jQuery,jQuery.ui.accordion.prototype))})(jQuery);
(function(a,p){var e=0;a.widget("ui.autocomplete",{version:"1.9.1",defaultElement:"<input>",options:{appendTo:"body",autoFocus:!1,delay:300,minLength:1,position:{my:"left top",at:"left bottom",collision:"none"},source:null,change:null,close:null,focus:null,open:null,response:null,search:null,select:null},pending:0,_create:function(){var e,c,d;this.isMultiLine=this._isMultiLine();this.valueMethod=this.element[this.element.is("input,textarea")?"val":"text"];this.isNewMenu=!0;this.element.addClass("ui-autocomplete-input").attr("autocomplete",
"off");this._on(this.element,{keydown:function(b){if(this.element.prop("readOnly"))c=d=e=!0;else{c=d=e=!1;var f=a.ui.keyCode;switch(b.keyCode){case f.PAGE_UP:e=!0;this._move("previousPage",b);break;case f.PAGE_DOWN:e=!0;this._move("nextPage",b);break;case f.UP:e=!0;this._keyEvent("previous",b);break;case f.DOWN:e=!0;this._keyEvent("next",b);break;case f.ENTER:case f.NUMPAD_ENTER:this.menu.active&&(e=!0,b.preventDefault(),this.menu.select(b));break;case f.TAB:this.menu.active&&this.menu.select(b);
break;case f.ESCAPE:this.menu.element.is(":visible")&&(this._value(this.term),this.close(b),b.preventDefault());break;default:c=!0,this._searchTimeout(b)}}},keypress:function(b){if(e)e=!1,b.preventDefault();else if(!c){var f=a.ui.keyCode;switch(b.keyCode){case f.PAGE_UP:this._move("previousPage",b);break;case f.PAGE_DOWN:this._move("nextPage",b);break;case f.UP:this._keyEvent("previous",b);break;case f.DOWN:this._keyEvent("next",b)}}},input:function(a){d?(d=!1,a.preventDefault()):this._searchTimeout(a)},
focus:function(){this.selectedItem=null;this.previous=this._value()},blur:function(a){this.cancelBlur?delete this.cancelBlur:(clearTimeout(this.searching),this.close(a),this._change(a))}});this._initSource();this.menu=a("<ul>").addClass("ui-autocomplete").appendTo(this.document.find(this.options.appendTo||"body")[0]).menu({input:a(),role:null}).zIndex(this.element.zIndex()+1).hide().data("menu");this._on(this.menu.element,{mousedown:function(b){b.preventDefault();this.cancelBlur=!0;this._delay(function(){delete this.cancelBlur});
var f=this.menu.element[0];a(b.target).closest(".ui-menu-item").length||this._delay(function(){var b=this;this.document.one("mousedown",function(d){d.target!==b.element[0]&&d.target!==f&&!a.contains(f,d.target)&&b.close()})})},menufocus:function(b,f){if(this.isNewMenu&&(this.isNewMenu=!1,b.originalEvent&&/^mouse/.test(b.originalEvent.type))){this.menu.blur();this.document.one("mousemove",function(){a(b.target).trigger(b.originalEvent)});return}var d=f.item.data("ui-autocomplete-item")||f.item.data("item.autocomplete");
!1!==this._trigger("focus",b,{item:d})?b.originalEvent&&/^key/.test(b.originalEvent.type)&&this._value(d.value):this.liveRegion.text(d.value)},menuselect:function(a,f){var d=f.item.data("ui-autocomplete-item")||f.item.data("item.autocomplete"),c=this.previous;this.element[0]!==this.document[0].activeElement&&(this.element.focus(),this.previous=c,this._delay(function(){this.previous=c;this.selectedItem=d}));!1!==this._trigger("select",a,{item:d})&&this._value(d.value);this.term=this._value();this.close(a);
this.selectedItem=d}});this.liveRegion=a("<span>",{role:"status","aria-live":"polite"}).addClass("ui-helper-hidden-accessible").insertAfter(this.element);a.fn.bgiframe&&this.menu.element.bgiframe();this._on(this.window,{beforeunload:function(){this.element.removeAttr("autocomplete")}})},_destroy:function(){clearTimeout(this.searching);this.element.removeClass("ui-autocomplete-input").removeAttr("autocomplete");this.menu.element.remove();this.liveRegion.remove()},_setOption:function(a,c){this._super(a,
c);"source"===a&&this._initSource();"appendTo"===a&&this.menu.element.appendTo(this.document.find(c||"body")[0]);"disabled"===a&&c&&this.xhr&&this.xhr.abort()},_isMultiLine:function(){return this.element.is("textarea")?!0:this.element.is("input")?!1:this.element.prop("isContentEditable")},_initSource:function(){var e,c,d=this;a.isArray(this.options.source)?(e=this.options.source,this.source=function(b,f){f(a.ui.autocomplete.filter(e,b.term))}):"string"==typeof this.options.source?(c=this.options.source,
this.source=function(b,f){d.xhr&&d.xhr.abort();d.xhr=a.ajax({url:c,data:b,dataType:"json",success:function(a){f(a)},error:function(){f([])}})}):this.source=this.options.source},_searchTimeout:function(a){clearTimeout(this.searching);this.searching=this._delay(function(){this.term!==this._value()&&(this.selectedItem=null,this.search(null,a))},this.options.delay)},search:function(a,c){a=null!=a?a:this._value();this.term=this._value();if(a.length<this.options.minLength)return this.close(c);if(!1!==this._trigger("search",
c))return this._search(a)},_search:function(a){this.pending++;this.element.addClass("ui-autocomplete-loading");this.cancelSearch=!1;this.source({term:a},this._response())},_response:function(){var a=this,c=++e;return function(d){c===e&&a.__response(d);a.pending--;a.pending||a.element.removeClass("ui-autocomplete-loading")}},__response:function(a){a&&(a=this._normalize(a));this._trigger("response",null,{content:a});!this.options.disabled&&a&&a.length&&!this.cancelSearch?(this._suggest(a),this._trigger("open")):
this._close()},close:function(a){this.cancelSearch=!0;this._close(a)},_close:function(a){this.menu.element.is(":visible")&&(this.menu.element.hide(),this.menu.blur(),this.isNewMenu=!0,this._trigger("close",a))},_change:function(a){this.previous!==this._value()&&this._trigger("change",a,{item:this.selectedItem})},_normalize:function(e){return e.length&&e[0].label&&e[0].value?e:a.map(e,function(c){return"string"==typeof c?{label:c,value:c}:a.extend({label:c.label||c.value,value:c.value||c.label},c)})},
_suggest:function(e){var c=this.menu.element.empty().zIndex(this.element.zIndex()+1);this._renderMenu(c,e);this.menu.refresh();c.show();this._resizeMenu();c.position(a.extend({of:this.element},this.options.position));this.options.autoFocus&&this.menu.next()},_resizeMenu:function(){var a=this.menu.element;a.outerWidth(Math.max(a.width("").outerWidth()+1,this.element.outerWidth()))},_renderMenu:function(e,c){var d=this;a.each(c,function(a,f){d._renderItemData(e,f)})},_renderItemData:function(a,c){return this._renderItem(a,
c).data("ui-autocomplete-item",c)},_renderItem:function(e,c){return a("<li>").append(a("<a>").text(c.label)).appendTo(e)},_move:function(a,c){if(this.menu.element.is(":visible"))if(this.menu.isFirstItem()&&/^previous/.test(a)||this.menu.isLastItem()&&/^next/.test(a))this._value(this.term),this.menu.blur();else this.menu[a](c);else this.search(null,c)},widget:function(){return this.menu.element},_value:function(){return this.valueMethod.apply(this.element,arguments)},_keyEvent:function(a,c){if(!this.isMultiLine||
this.menu.element.is(":visible"))this._move(a,c),c.preventDefault()}});a.extend(a.ui.autocomplete,{escapeRegex:function(a){return a.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&")},filter:function(e,c){var d=new RegExp(a.ui.autocomplete.escapeRegex(c),"i");return a.grep(e,function(a){return d.test(a.label||a.value||a)})}});a.widget("ui.autocomplete",a.ui.autocomplete,{options:{messages:{noResults:"No search results.",results:function(a){return a+(1<a?" results are":" result is")+" available, use up and down arrow keys to navigate."}}},
__response:function(a){var c;this._superApply(arguments);this.options.disabled||this.cancelSearch||(a&&a.length?c=this.options.messages.results(a.length):c=this.options.messages.noResults,this.liveRegion.text(c))}})})(jQuery);
(function(a,p){var e,g,c,d,b=function(){var f=a(this).find(":ui-button");setTimeout(function(){f.button("refresh")},1)},f=function(f){var b=f.name,d=f.form,c=a([]);return b&&(d?c=a(d).find("[name='"+b+"']"):c=a("[name='"+b+"']",f.ownerDocument).filter(function(){return!this.form})),c};a.widget("ui.button",{version:"1.9.1",defaultElement:"<button>",options:{disabled:null,text:!0,label:null,icons:{primary:null,secondary:null}},_create:function(){this.element.closest("form").unbind("reset"+this.eventNamespace).bind("reset"+
this.eventNamespace,b);"boolean"!=typeof this.options.disabled?this.options.disabled=!!this.element.prop("disabled"):this.element.prop("disabled",this.options.disabled);this._determineButtonType();this.hasTitle=!!this.buttonElement.attr("title");var h=this,l=this.options,k="checkbox"===this.type||"radio"===this.type,m="ui-state-hover"+(k?"":" ui-state-active");null===l.label&&(l.label="input"===this.type?this.buttonElement.val():this.buttonElement.html());this.buttonElement.addClass("ui-button ui-widget ui-state-default ui-corner-all").attr("role",
"button").bind("mouseenter"+this.eventNamespace,function(){l.disabled||(a(this).addClass("ui-state-hover"),this===e&&a(this).addClass("ui-state-active"))}).bind("mouseleave"+this.eventNamespace,function(){l.disabled||a(this).removeClass(m)}).bind("click"+this.eventNamespace,function(a){l.disabled&&(a.preventDefault(),a.stopImmediatePropagation())});this.element.bind("focus"+this.eventNamespace,function(){h.buttonElement.addClass("ui-state-focus")}).bind("blur"+this.eventNamespace,function(){h.buttonElement.removeClass("ui-state-focus")});
k&&(this.element.bind("change"+this.eventNamespace,function(){d||h.refresh()}),this.buttonElement.bind("mousedown"+this.eventNamespace,function(a){l.disabled||(d=!1,g=a.pageX,c=a.pageY)}).bind("mouseup"+this.eventNamespace,function(a){l.disabled||g===a.pageX&&c===a.pageY||(d=!0)}));"checkbox"===this.type?this.buttonElement.bind("click"+this.eventNamespace,function(){if(l.disabled||d)return!1;a(this).toggleClass("ui-state-active");h.buttonElement.attr("aria-pressed",h.element[0].checked)}):"radio"===
this.type?this.buttonElement.bind("click"+this.eventNamespace,function(){if(l.disabled||d)return!1;a(this).addClass("ui-state-active");h.buttonElement.attr("aria-pressed","true");var b=h.element[0];f(b).not(b).map(function(){return a(this).button("widget")[0]}).removeClass("ui-state-active").attr("aria-pressed","false")}):(this.buttonElement.bind("mousedown"+this.eventNamespace,function(){if(l.disabled)return!1;a(this).addClass("ui-state-active");e=this;h.document.one("mouseup",function(){e=null})}).bind("mouseup"+
this.eventNamespace,function(){if(l.disabled)return!1;a(this).removeClass("ui-state-active")}).bind("keydown"+this.eventNamespace,function(f){if(l.disabled)return!1;f.keyCode!==a.ui.keyCode.SPACE&&f.keyCode!==a.ui.keyCode.ENTER||a(this).addClass("ui-state-active")}).bind("keyup"+this.eventNamespace,function(){a(this).removeClass("ui-state-active")}),this.buttonElement.is("a")&&this.buttonElement.keyup(function(f){f.keyCode===a.ui.keyCode.SPACE&&a(this).click()}));this._setOption("disabled",l.disabled);
this._resetButton()},_determineButtonType:function(){var a,f,b;this.element.is("[type=checkbox]")?this.type="checkbox":this.element.is("[type=radio]")?this.type="radio":this.element.is("input")?this.type="input":this.type="button";"checkbox"===this.type||"radio"===this.type?(a=this.element.parents().last(),f="label[for='"+this.element.attr("id")+"']",this.buttonElement=a.find(f),this.buttonElement.length||(a=a.length?a.siblings():this.element.siblings(),this.buttonElement=a.filter(f),this.buttonElement.length||
(this.buttonElement=a.find(f))),this.element.addClass("ui-helper-hidden-accessible"),b=this.element.is(":checked"),b&&this.buttonElement.addClass("ui-state-active"),this.buttonElement.prop("aria-pressed",b)):this.buttonElement=this.element},widget:function(){return this.buttonElement},_destroy:function(){this.element.removeClass("ui-helper-hidden-accessible");this.buttonElement.removeClass("ui-button ui-widget ui-state-default ui-corner-all ui-state-hover ui-state-active  ui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only").removeAttr("role").removeAttr("aria-pressed").html(this.buttonElement.find(".ui-button-text").html());
this.hasTitle||this.buttonElement.removeAttr("title")},_setOption:function(a,f){this._super(a,f);"disabled"===a?f?this.element.prop("disabled",!0):this.element.prop("disabled",!1):this._resetButton()},refresh:function(){var b=this.element.is(":disabled")||this.element.hasClass("ui-button-disabled");b!==this.options.disabled&&this._setOption("disabled",b);"radio"===this.type?f(this.element[0]).each(function(){a(this).is(":checked")?a(this).button("widget").addClass("ui-state-active").attr("aria-pressed",
"true"):a(this).button("widget").removeClass("ui-state-active").attr("aria-pressed","false")}):"checkbox"===this.type&&(this.element.is(":checked")?this.buttonElement.addClass("ui-state-active").attr("aria-pressed","true"):this.buttonElement.removeClass("ui-state-active").attr("aria-pressed","false"))},_resetButton:function(){if("input"===this.type)this.options.label&&this.element.val(this.options.label);else{var f=this.buttonElement.removeClass("ui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only"),
b=a("<span></span>",this.document[0]).addClass("ui-button-text").html(this.options.label).appendTo(f.empty()).text(),d=this.options.icons,c=d.primary&&d.secondary,e=[];d.primary||d.secondary?(this.options.text&&e.push("ui-button-text-icon"+(c?"s":d.primary?"-primary":"-secondary")),d.primary&&f.prepend("<span class='ui-button-icon-primary ui-icon "+d.primary+"'></span>"),d.secondary&&f.append("<span class='ui-button-icon-secondary ui-icon "+d.secondary+"'></span>"),this.options.text||(e.push(c?"ui-button-icons-only":
"ui-button-icon-only"),this.hasTitle||f.attr("title",a.trim(b)))):e.push("ui-button-text-only");f.addClass(e.join(" "))}}});a.widget("ui.buttonset",{version:"1.9.1",options:{items:"button, input[type=button], input[type=submit], input[type=reset], input[type=checkbox], input[type=radio], a, :data(button)"},_create:function(){this.element.addClass("ui-buttonset")},_init:function(){this.refresh()},_setOption:function(a,f){"disabled"===a&&this.buttons.button("option",a,f);this._super(a,f)},refresh:function(){var f=
"rtl"===this.element.css("direction");this.buttons=this.element.find(this.options.items).filter(":ui-button").button("refresh").end().not(":ui-button").button().end().map(function(){return a(this).button("widget")[0]}).removeClass("ui-corner-all ui-corner-left ui-corner-right").filter(":first").addClass(f?"ui-corner-right":"ui-corner-left").end().filter(":last").addClass(f?"ui-corner-left":"ui-corner-right").end().end()},_destroy:function(){this.element.removeClass("ui-buttonset");this.buttons.map(function(){return a(this).button("widget")[0]}).removeClass("ui-corner-left ui-corner-right").end().button("destroy")}})})(jQuery);
(function(a,p){function e(){this.debug=!1;this._curInst=null;this._keyEvent=!1;this._disabledInputs=[];this._inDialog=this._datepickerShowing=!1;this._mainDivId="ui-datepicker-div";this._inlineClass="ui-datepicker-inline";this._appendClass="ui-datepicker-append";this._triggerClass="ui-datepicker-trigger";this._dialogClass="ui-datepicker-dialog";this._disableClass="ui-datepicker-disabled";this._unselectableClass="ui-datepicker-unselectable";this._currentClass="ui-datepicker-current-day";this._dayOverClass=
"ui-datepicker-days-cell-over";this.regional=[];this.regional[""]={closeText:"Done",prevText:"Prev",nextText:"Next",currentText:"Today",monthNames:"January February March April May June July August September October November December".split(" "),monthNamesShort:"Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),dayNames:"Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),dayNamesShort:"Sun Mon Tue Wed Thu Fri Sat".split(" "),dayNamesMin:"Su Mo Tu We Th Fr Sa".split(" "),
weekHeader:"Wk",dateFormat:"mm/dd/yy",firstDay:0,isRTL:!1,showMonthAfterYear:!1,yearSuffix:""};this._defaults={showOn:"focus",showAnim:"fadeIn",showOptions:{},defaultDate:null,appendText:"",buttonText:"...",buttonImage:"",buttonImageOnly:!1,hideIfNoPrevNext:!1,navigationAsDateFormat:!1,gotoCurrent:!1,changeMonth:!1,changeYear:!1,yearRange:"c-10:c+10",showOtherMonths:!1,selectOtherMonths:!1,showWeek:!1,calculateWeek:this.iso8601Week,shortYearCutoff:"+10",minDate:null,maxDate:null,duration:"fast",beforeShowDay:null,
beforeShow:null,onSelect:null,onChangeMonthYear:null,onClose:null,numberOfMonths:1,showCurrentAtPos:0,stepMonths:1,stepBigMonths:12,altField:"",altFormat:"",constrainInput:!0,showButtonPanel:!1,autoSize:!1,disabled:!1};a.extend(this._defaults,this.regional[""]);this.dpDiv=g(a('<div id="'+this._mainDivId+'" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>'))}function g(f){return f.delegate("button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a",
"mouseout",function(){a(this).removeClass("ui-state-hover");-1!=this.className.indexOf("ui-datepicker-prev")&&a(this).removeClass("ui-datepicker-prev-hover");-1!=this.className.indexOf("ui-datepicker-next")&&a(this).removeClass("ui-datepicker-next-hover")}).delegate("button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a","mouseover",function(){a.datepicker._isDisabledDatepicker(b.inline?f.parent()[0]:b.input[0])||(a(this).parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover"),
a(this).addClass("ui-state-hover"),-1!=this.className.indexOf("ui-datepicker-prev")&&a(this).addClass("ui-datepicker-prev-hover"),-1!=this.className.indexOf("ui-datepicker-next")&&a(this).addClass("ui-datepicker-next-hover"))})}function c(f,b){a.extend(f,b);for(var d in b)if(null==b[d]||b[d]==p)f[d]=b[d];return f}a.extend(a.ui,{datepicker:{version:"1.9.1"}});var d=(new Date).getTime(),b;a.extend(e.prototype,{markerClassName:"hasDatepicker",maxRows:4,log:function(){this.debug&&console.log.apply("",
arguments)},_widgetDatepicker:function(){return this.dpDiv},setDefaults:function(a){return c(this._defaults,a||{}),this},_attachDatepicker:function(f,b){var d=null,c;for(c in this._defaults){var e=f.getAttribute("date:"+c);if(e){d=d||{};try{d[c]=eval(e)}catch(g){d[c]=e}}}c=f.nodeName.toLowerCase();e="div"==c||"span"==c;f.id||(this.uuid+=1,f.id="dp"+this.uuid);var n=this._newInst(a(f),e);n.settings=a.extend({},b||{},d||{});"input"==c?this._connectDatepicker(f,n):e&&this._inlineDatepicker(f,n)},_newInst:function(f,
b){return{id:f[0].id.replace(/([^A-Za-z0-9_-])/g,"\\\\$1"),input:f,selectedDay:0,selectedMonth:0,selectedYear:0,drawMonth:0,drawYear:0,inline:b,dpDiv:b?g(a('<div class="'+this._inlineClass+' ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>')):this.dpDiv}},_connectDatepicker:function(f,b){var d=a(f);b.append=a([]);b.trigger=a([]);d.hasClass(this.markerClassName)||(this._attachments(d,b),d.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp).bind("setData.datepicker",
function(a,f,d){b.settings[f]=d}).bind("getData.datepicker",function(a,f){return this._get(b,f)}),this._autoSize(b),a.data(f,"datepicker",b),b.settings.disabled&&this._disableDatepicker(f))},_attachments:function(f,b){var d=this._get(b,"appendText"),c=this._get(b,"isRTL");b.append&&b.append.remove();d&&(b.append=a('<span class="'+this._appendClass+'">'+d+"</span>"),f[c?"before":"after"](b.append));f.unbind("focus",this._showDatepicker);b.trigger&&b.trigger.remove();d=this._get(b,"showOn");"focus"!=
d&&"both"!=d||f.focus(this._showDatepicker);if("button"==d||"both"==d){var d=this._get(b,"buttonText"),e=this._get(b,"buttonImage");b.trigger=a(this._get(b,"buttonImageOnly")?a("<img/>").addClass(this._triggerClass).attr({src:e,alt:d,title:d}):a('<button type="button"></button>').addClass(this._triggerClass).html(""==e?d:a("<img/>").attr({src:e,alt:d,title:d})));f[c?"before":"after"](b.trigger);b.trigger.click(function(){return a.datepicker._datepickerShowing&&a.datepicker._lastInput==f[0]?a.datepicker._hideDatepicker():
a.datepicker._datepickerShowing&&a.datepicker._lastInput!=f[0]?(a.datepicker._hideDatepicker(),a.datepicker._showDatepicker(f[0])):a.datepicker._showDatepicker(f[0]),!1})}},_autoSize:function(a){if(this._get(a,"autoSize")&&!a.inline){var b=new Date(2009,11,20),d=this._get(a,"dateFormat");if(d.match(/[DM]/)){var c=function(a){for(var f=0,b=0,d=0;d<a.length;d++)a[d].length>f&&(f=a[d].length,b=d);return b};b.setMonth(c(this._get(a,d.match(/MM/)?"monthNames":"monthNamesShort")));b.setDate(c(this._get(a,
d.match(/DD/)?"dayNames":"dayNamesShort"))+20-b.getDay())}a.input.attr("size",this._formatDate(a,b).length)}},_inlineDatepicker:function(f,b){var d=a(f);d.hasClass(this.markerClassName)||(d.addClass(this.markerClassName).append(b.dpDiv).bind("setData.datepicker",function(a,f,d){b.settings[f]=d}).bind("getData.datepicker",function(a,f){return this._get(b,f)}),a.data(f,"datepicker",b),this._setDate(b,this._getDefaultDate(b),!0),this._updateDatepicker(b),this._updateAlternate(b),b.settings.disabled&&
this._disableDatepicker(f),b.dpDiv.css("display","block"))},_dialogDatepicker:function(f,b,d,e,g){f=this._dialogInst;f||(this.uuid+=1,this._dialogInput=a('<input type="text" id="dp'+this.uuid+'" style="position: absolute; top: -100px; width: 0px;"/>'),this._dialogInput.keydown(this._doKeyDown),a("body").append(this._dialogInput),f=this._dialogInst=this._newInst(this._dialogInput,!1),f.settings={},a.data(this._dialogInput[0],"datepicker",f));c(f.settings,e||{});b=b&&b.constructor==Date?this._formatDate(f,
b):b;this._dialogInput.val(b);this._pos=g?g.length?g:[g.pageX,g.pageY]:null;this._pos||(this._pos=[document.documentElement.clientWidth/2-100+(document.documentElement.scrollLeft||document.body.scrollLeft),document.documentElement.clientHeight/2-150+(document.documentElement.scrollTop||document.body.scrollTop)]);return this._dialogInput.css("left",this._pos[0]+20+"px").css("top",this._pos[1]+"px"),f.settings.onSelect=d,this._inDialog=!0,this.dpDiv.addClass(this._dialogClass),this._showDatepicker(this._dialogInput[0]),
a.blockUI&&a.blockUI(this.dpDiv),a.data(this._dialogInput[0],"datepicker",f),this},_destroyDatepicker:function(f){var b=a(f),d=a.data(f,"datepicker");if(b.hasClass(this.markerClassName)){var c=f.nodeName.toLowerCase();a.removeData(f,"datepicker");"input"==c?(d.append.remove(),d.trigger.remove(),b.removeClass(this.markerClassName).unbind("focus",this._showDatepicker).unbind("keydown",this._doKeyDown).unbind("keypress",this._doKeyPress).unbind("keyup",this._doKeyUp)):("div"==c||"span"==c)&&b.removeClass(this.markerClassName).empty()}},
_enableDatepicker:function(f){var b=a(f),d=a.data(f,"datepicker");if(b.hasClass(this.markerClassName)){var c=f.nodeName.toLowerCase();if("input"==c)f.disabled=!1,d.trigger.filter("button").each(function(){this.disabled=!1}).end().filter("img").css({opacity:"1.0",cursor:""});else if("div"==c||"span"==c)b=b.children("."+this._inlineClass),b.children().removeClass("ui-state-disabled"),b.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled",!1);this._disabledInputs=a.map(this._disabledInputs,
function(a){return a==f?null:a})}},_disableDatepicker:function(f){var b=a(f),d=a.data(f,"datepicker");if(b.hasClass(this.markerClassName)){var c=f.nodeName.toLowerCase();if("input"==c)f.disabled=!0,d.trigger.filter("button").each(function(){this.disabled=!0}).end().filter("img").css({opacity:"0.5",cursor:"default"});else if("div"==c||"span"==c)b=b.children("."+this._inlineClass),b.children().addClass("ui-state-disabled"),b.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled",
!0);this._disabledInputs=a.map(this._disabledInputs,function(a){return a==f?null:a});this._disabledInputs[this._disabledInputs.length]=f}},_isDisabledDatepicker:function(a){if(!a)return!1;for(var b=0;b<this._disabledInputs.length;b++)if(this._disabledInputs[b]==a)return!0;return!1},_getInst:function(f){try{return a.data(f,"datepicker")}catch(b){throw"Missing instance data for this datepicker";}},_optionDatepicker:function(f,b,d){var e=this._getInst(f);if(2==arguments.length&&"string"==typeof b)return"defaults"==
b?a.extend({},a.datepicker._defaults):e?"all"==b?a.extend({},e.settings):this._get(e,b):null;var g=b||{};"string"==typeof b&&(g={},g[b]=d);if(e){this._curInst==e&&this._hideDatepicker();var n=this._getDateDatepicker(f,!0),r=this._getMinMaxDate(e,"min"),q=this._getMinMaxDate(e,"max");c(e.settings,g);null!==r&&g.dateFormat!==p&&g.minDate===p&&(e.settings.minDate=this._formatDate(e,r));null!==q&&g.dateFormat!==p&&g.maxDate===p&&(e.settings.maxDate=this._formatDate(e,q));this._attachments(a(f),e);this._autoSize(e);
this._setDate(e,n);this._updateAlternate(e);this._updateDatepicker(e)}},_changeDatepicker:function(a,b,d){this._optionDatepicker(a,b,d)},_refreshDatepicker:function(a){(a=this._getInst(a))&&this._updateDatepicker(a)},_setDateDatepicker:function(a,b){var d=this._getInst(a);d&&(this._setDate(d,b),this._updateDatepicker(d),this._updateAlternate(d))},_getDateDatepicker:function(a,b){var d=this._getInst(a);return d&&!d.inline&&this._setDateFromField(d,b),d?this._getDate(d):null},_doKeyDown:function(f){var b=
a.datepicker._getInst(f.target),d=!0,c=b.dpDiv.is(".ui-datepicker-rtl");b._keyEvent=!0;if(a.datepicker._datepickerShowing)switch(f.keyCode){case 9:a.datepicker._hideDatepicker();d=!1;break;case 13:return d=a("td."+a.datepicker._dayOverClass+":not(."+a.datepicker._currentClass+")",b.dpDiv),d[0]&&a.datepicker._selectDay(f.target,b.selectedMonth,b.selectedYear,d[0]),(f=a.datepicker._get(b,"onSelect"))?(d=a.datepicker._formatDate(b),f.apply(b.input?b.input[0]:null,[d,b])):a.datepicker._hideDatepicker(),
!1;case 27:a.datepicker._hideDatepicker();break;case 33:a.datepicker._adjustDate(f.target,f.ctrlKey?-a.datepicker._get(b,"stepBigMonths"):-a.datepicker._get(b,"stepMonths"),"M");break;case 34:a.datepicker._adjustDate(f.target,f.ctrlKey?+a.datepicker._get(b,"stepBigMonths"):+a.datepicker._get(b,"stepMonths"),"M");break;case 35:(f.ctrlKey||f.metaKey)&&a.datepicker._clearDate(f.target);d=f.ctrlKey||f.metaKey;break;case 36:(f.ctrlKey||f.metaKey)&&a.datepicker._gotoToday(f.target);d=f.ctrlKey||f.metaKey;
break;case 37:(f.ctrlKey||f.metaKey)&&a.datepicker._adjustDate(f.target,c?1:-1,"D");d=f.ctrlKey||f.metaKey;f.originalEvent.altKey&&a.datepicker._adjustDate(f.target,f.ctrlKey?-a.datepicker._get(b,"stepBigMonths"):-a.datepicker._get(b,"stepMonths"),"M");break;case 38:(f.ctrlKey||f.metaKey)&&a.datepicker._adjustDate(f.target,-7,"D");d=f.ctrlKey||f.metaKey;break;case 39:(f.ctrlKey||f.metaKey)&&a.datepicker._adjustDate(f.target,c?-1:1,"D");d=f.ctrlKey||f.metaKey;f.originalEvent.altKey&&a.datepicker._adjustDate(f.target,
f.ctrlKey?+a.datepicker._get(b,"stepBigMonths"):+a.datepicker._get(b,"stepMonths"),"M");break;case 40:(f.ctrlKey||f.metaKey)&&a.datepicker._adjustDate(f.target,7,"D");d=f.ctrlKey||f.metaKey;break;default:d=!1}else 36==f.keyCode&&f.ctrlKey?a.datepicker._showDatepicker(this):d=!1;d&&(f.preventDefault(),f.stopPropagation())},_doKeyPress:function(f){var b=a.datepicker._getInst(f.target);if(a.datepicker._get(b,"constrainInput")){var b=a.datepicker._possibleChars(a.datepicker._get(b,"dateFormat")),d=String.fromCharCode(f.charCode==
p?f.keyCode:f.charCode);return f.ctrlKey||f.metaKey||" ">d||!b||-1<b.indexOf(d)}},_doKeyUp:function(f){f=a.datepicker._getInst(f.target);if(f.input.val()!=f.lastVal)try{a.datepicker.parseDate(a.datepicker._get(f,"dateFormat"),f.input?f.input.val():null,a.datepicker._getFormatConfig(f))&&(a.datepicker._setDateFromField(f),a.datepicker._updateAlternate(f),a.datepicker._updateDatepicker(f))}catch(b){a.datepicker.log(b)}return!0},_showDatepicker:function(f){f=f.target||f;"input"!=f.nodeName.toLowerCase()&&
(f=a("input",f.parentNode)[0]);if(!a.datepicker._isDisabledDatepicker(f)&&a.datepicker._lastInput!=f){var b=a.datepicker._getInst(f);a.datepicker._curInst&&a.datepicker._curInst!=b&&(a.datepicker._curInst.dpDiv.stop(!0,!0),b&&a.datepicker._datepickerShowing&&a.datepicker._hideDatepicker(a.datepicker._curInst.input[0]));var d=a.datepicker._get(b,"beforeShow"),d=d?d.apply(f,[f,b]):{};if(!1!==d){c(b.settings,d);b.lastVal=null;a.datepicker._lastInput=f;a.datepicker._setDateFromField(b);a.datepicker._inDialog&&
(f.value="");a.datepicker._pos||(a.datepicker._pos=a.datepicker._findPos(f),a.datepicker._pos[1]+=f.offsetHeight);var e=!1;a(f).parents().each(function(){return e|="fixed"==a(this).css("position"),!e});d={left:a.datepicker._pos[0],top:a.datepicker._pos[1]};a.datepicker._pos=null;b.dpDiv.empty();b.dpDiv.css({position:"absolute",display:"block",top:"-1000px"});a.datepicker._updateDatepicker(b);d=a.datepicker._checkOffset(b,d,e);b.dpDiv.css({position:a.datepicker._inDialog&&a.blockUI?"static":e?"fixed":
"absolute",display:"none",left:d.left+"px",top:d.top+"px"});if(!b.inline){var d=a.datepicker._get(b,"showAnim"),g=a.datepicker._get(b,"duration"),n=function(){var f=b.dpDiv.find("iframe.ui-datepicker-cover");if(f.length){var d=a.datepicker._getBorders(b.dpDiv);f.css({left:-d[0],top:-d[1],width:b.dpDiv.outerWidth(),height:b.dpDiv.outerHeight()})}};b.dpDiv.zIndex(a(f).zIndex()+1);a.datepicker._datepickerShowing=!0;a.effects&&(a.effects.effect[d]||a.effects[d])?b.dpDiv.show(d,a.datepicker._get(b,"showOptions"),
g,n):b.dpDiv[d||"show"](d?g:null,n);d&&g||n();b.input.is(":visible")&&!b.input.is(":disabled")&&b.input.focus();a.datepicker._curInst=b}}}},_updateDatepicker:function(f){this.maxRows=4;var d=a.datepicker._getBorders(f.dpDiv);b=f;f.dpDiv.empty().append(this._generateHTML(f));this._attachHandlers(f);var c=f.dpDiv.find("iframe.ui-datepicker-cover");!c.length||c.css({left:-d[0],top:-d[1],width:f.dpDiv.outerWidth(),height:f.dpDiv.outerHeight()});f.dpDiv.find("."+this._dayOverClass+" a").mouseover();d=
this._getNumberOfMonths(f);c=d[1];f.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width("");1<c&&f.dpDiv.addClass("ui-datepicker-multi-"+c).css("width",17*c+"em");f.dpDiv[(1!=d[0]||1!=d[1]?"add":"remove")+"Class"]("ui-datepicker-multi");f.dpDiv[(this._get(f,"isRTL")?"add":"remove")+"Class"]("ui-datepicker-rtl");f==a.datepicker._curInst&&a.datepicker._datepickerShowing&&f.input&&f.input.is(":visible")&&!f.input.is(":disabled")&&f.input[0]!=document.activeElement&&
f.input.focus();if(f.yearshtml){var e=f.yearshtml;setTimeout(function(){e===f.yearshtml&&f.yearshtml&&f.dpDiv.find("select.ui-datepicker-year:first").replaceWith(f.yearshtml);e=f.yearshtml=null},0)}},_getBorders:function(a){var b=function(a){return{thin:1,medium:2,thick:3}[a]||a};return[parseFloat(b(a.css("border-left-width"))),parseFloat(b(a.css("border-top-width")))]},_checkOffset:function(f,b,d){var c=f.dpDiv.outerWidth(),e=f.dpDiv.outerHeight(),g=f.input?f.input.outerWidth():0,r=f.input?f.input.outerHeight():
0,q=document.documentElement.clientWidth+(d?0:a(document).scrollLeft()),u=document.documentElement.clientHeight+(d?0:a(document).scrollTop());return b.left-=this._get(f,"isRTL")?c-g:0,b.left-=d&&b.left==f.input.offset().left?a(document).scrollLeft():0,b.top-=d&&b.top==f.input.offset().top+r?a(document).scrollTop():0,b.left-=Math.min(b.left,b.left+c>q&&q>c?Math.abs(b.left+c-q):0),b.top-=Math.min(b.top,b.top+e>u&&u>e?Math.abs(e+r):0),b},_findPos:function(f){for(var b=this._getInst(f),b=this._get(b,
"isRTL");f&&("hidden"==f.type||1!=f.nodeType||a.expr.filters.hidden(f));)f=f[b?"previousSibling":"nextSibling"];f=a(f).offset();return[f.left,f.top]},_hideDatepicker:function(f){var b=this._curInst;if(b&&(!f||b==a.data(f,"datepicker"))&&this._datepickerShowing){f=this._get(b,"showAnim");var d=this._get(b,"duration"),c=function(){a.datepicker._tidyDialog(b)};a.effects&&(a.effects.effect[f]||a.effects[f])?b.dpDiv.hide(f,a.datepicker._get(b,"showOptions"),d,c):b.dpDiv["slideDown"==f?"slideUp":"fadeIn"==
f?"fadeOut":"hide"](f?d:null,c);f||c();this._datepickerShowing=!1;(f=this._get(b,"onClose"))&&f.apply(b.input?b.input[0]:null,[b.input?b.input.val():"",b]);this._lastInput=null;this._inDialog&&(this._dialogInput.css({position:"absolute",left:"0",top:"-100px"}),a.blockUI&&(a.unblockUI(),a("body").append(this.dpDiv)));this._inDialog=!1}},_tidyDialog:function(a){a.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar")},_checkExternalClick:function(b){if(a.datepicker._curInst){b=a(b.target);
var d=a.datepicker._getInst(b[0]);(!(b[0].id==a.datepicker._mainDivId||0!=b.parents("#"+a.datepicker._mainDivId).length||b.hasClass(a.datepicker.markerClassName)||b.closest("."+a.datepicker._triggerClass).length||!a.datepicker._datepickerShowing||a.datepicker._inDialog&&a.blockUI)||b.hasClass(a.datepicker.markerClassName)&&a.datepicker._curInst!=d)&&a.datepicker._hideDatepicker()}},_adjustDate:function(b,d,c){b=a(b);var e=this._getInst(b[0]);this._isDisabledDatepicker(b[0])||(this._adjustInstDate(e,
d+("M"==c?this._get(e,"showCurrentAtPos"):0),c),this._updateDatepicker(e))},_gotoToday:function(b){b=a(b);var d=this._getInst(b[0]);if(this._get(d,"gotoCurrent")&&d.currentDay)d.selectedDay=d.currentDay,d.drawMonth=d.selectedMonth=d.currentMonth,d.drawYear=d.selectedYear=d.currentYear;else{var c=new Date;d.selectedDay=c.getDate();d.drawMonth=d.selectedMonth=c.getMonth();d.drawYear=d.selectedYear=c.getFullYear()}this._notifyChange(d);this._adjustDate(b)},_selectMonthYear:function(b,d,c){b=a(b);var e=
this._getInst(b[0]);e["selected"+("M"==c?"Month":"Year")]=e["draw"+("M"==c?"Month":"Year")]=parseInt(d.options[d.selectedIndex].value,10);this._notifyChange(e);this._adjustDate(b)},_selectDay:function(b,d,c,e){var g=a(b);a(e).hasClass(this._unselectableClass)||this._isDisabledDatepicker(g[0])||(g=this._getInst(g[0]),g.selectedDay=g.currentDay=a("a",e).html(),g.selectedMonth=g.currentMonth=d,g.selectedYear=g.currentYear=c,this._selectDate(b,this._formatDate(g,g.currentDay,g.currentMonth,g.currentYear)))},
_clearDate:function(b){b=a(b);this._getInst(b[0]);this._selectDate(b,"")},_selectDate:function(b,d){var c=a(b),c=this._getInst(c[0]);d=null!=d?d:this._formatDate(c);c.input&&c.input.val(d);this._updateAlternate(c);var e=this._get(c,"onSelect");e?e.apply(c.input?c.input[0]:null,[d,c]):c.input&&c.input.trigger("change");c.inline?this._updateDatepicker(c):(this._hideDatepicker(),this._lastInput=c.input[0],"object"!=typeof c.input[0]&&c.input.focus(),this._lastInput=null)},_updateAlternate:function(b){var d=
this._get(b,"altField");if(d){var c=this._get(b,"altFormat")||this._get(b,"dateFormat"),e=this._getDate(b),g=this.formatDate(c,e,this._getFormatConfig(b));a(d).each(function(){a(this).val(g)})}},noWeekends:function(a){a=a.getDay();return[0<a&&6>a,""]},iso8601Week:function(a){a=new Date(a.getTime());a.setDate(a.getDate()+4-(a.getDay()||7));var b=a.getTime();return a.setMonth(0),a.setDate(1),Math.floor(Math.round((b-a)/864E5)/7)+1},parseDate:function(b,d,c){if(null==b||null==d)throw"Invalid arguments";
d="object"==typeof d?d.toString():d+"";if(""==d)return null;for(var e=(c?c.shortYearCutoff:null)||this._defaults.shortYearCutoff,e="string"!=typeof e?e:(new Date).getFullYear()%100+parseInt(e,10),g=(c?c.dayNamesShort:null)||this._defaults.dayNamesShort,n=(c?c.dayNames:null)||this._defaults.dayNames,r=(c?c.monthNamesShort:null)||this._defaults.monthNamesShort,q=(c?c.monthNames:null)||this._defaults.monthNames,u=c=-1,t=-1,I=-1,v=!1,p=function(a){a=E+1<b.length&&b.charAt(E+1)==a;return a&&E++,a},y=function(a){var b=
p(a);a=new RegExp("^\\d{1,"+("@"==a?14:"!"==a?20:"y"==a&&b?4:"o"==a?3:2)+"}");a=d.substring(D).match(a);if(!a)throw"Missing number at position "+D;return D+=a[0].length,parseInt(a[0],10)},w=function(b,f,c){b=a.map(p(b)?c:f,function(a,b){return[[b,a]]}).sort(function(a,b){return-(a[1].length-b[1].length)});var e=-1;a.each(b,function(a,b){var f=b[1];if(d.substr(D,f.length).toLowerCase()==f.toLowerCase())return e=b[0],D+=f.length,!1});if(-1!=e)return e+1;throw"Unknown name at position "+D;},z=function(){if(d.charAt(D)!=
b.charAt(E))throw"Unexpected literal at position "+D;D++},D=0,E=0;E<b.length;E++)if(v)"'"!=b.charAt(E)||p("'")?z():v=!1;else switch(b.charAt(E)){case "d":t=y("d");break;case "D":w("D",g,n);break;case "o":I=y("o");break;case "m":u=y("m");break;case "M":u=w("M",r,q);break;case "y":c=y("y");break;case "@":var F=new Date(y("@"));c=F.getFullYear();u=F.getMonth()+1;t=F.getDate();break;case "!":F=new Date((y("!")-this._ticksTo1970)/1E4);c=F.getFullYear();u=F.getMonth()+1;t=F.getDate();break;case "'":p("'")?
z():v=!0;break;default:z()}if(D<d.length&&(g=d.substr(D),!/^\s+/.test(g)))throw"Extra/unparsed characters found in date: "+g;-1==c?c=(new Date).getFullYear():100>c&&(c+=(new Date).getFullYear()-(new Date).getFullYear()%100+(c<=e?0:-100));if(-1<I){u=1;t=I;do{e=this._getDaysInMonth(c,u-1);if(t<=e)break;u++;t-=e}while(1)}F=this._daylightSavingAdjust(new Date(c,u-1,t));if(F.getFullYear()!=c||F.getMonth()+1!=u||F.getDate()!=t)throw"Invalid date";return F},ATOM:"yy-mm-dd",COOKIE:"D, dd M yy",ISO_8601:"yy-mm-dd",
RFC_822:"D, d M y",RFC_850:"DD, dd-M-y",RFC_1036:"D, d M y",RFC_1123:"D, d M yy",RFC_2822:"D, d M yy",RSS:"D, d M y",TICKS:"!",TIMESTAMP:"@",W3C:"yy-mm-dd",_ticksTo1970:864E9*(718685+Math.floor(492.5)-Math.floor(19.7)+Math.floor(4.925)),formatDate:function(a,b,d){if(!b)return"";var c=(d?d.dayNamesShort:null)||this._defaults.dayNamesShort,e=(d?d.dayNames:null)||this._defaults.dayNames,g=(d?d.monthNamesShort:null)||this._defaults.monthNamesShort;d=(d?d.monthNames:null)||this._defaults.monthNames;var r=
function(b){b=v+1<a.length&&a.charAt(v+1)==b;return b&&v++,b},q=function(a,b,f){b=""+b;if(r(a))for(;b.length<f;)b="0"+b;return b},u=function(a,b,f,d){return r(a)?d[b]:f[b]},t="",p=!1;if(b)for(var v=0;v<a.length;v++)if(p)"'"!=a.charAt(v)||r("'")?t+=a.charAt(v):p=!1;else switch(a.charAt(v)){case "d":t+=q("d",b.getDate(),2);break;case "D":t+=u("D",b.getDay(),c,e);break;case "o":t+=q("o",Math.round(((new Date(b.getFullYear(),b.getMonth(),b.getDate())).getTime()-(new Date(b.getFullYear(),0,0)).getTime())/
864E5),3);break;case "m":t+=q("m",b.getMonth()+1,2);break;case "M":t+=u("M",b.getMonth(),g,d);break;case "y":t+=r("y")?b.getFullYear():(10>b.getYear()%100?"0":"")+b.getYear()%100;break;case "@":t+=b.getTime();break;case "!":t+=1E4*b.getTime()+this._ticksTo1970;break;case "'":r("'")?t+="'":p=!0;break;default:t+=a.charAt(v)}return t},_possibleChars:function(a){for(var b="",d=!1,c=function(b){b=e+1<a.length&&a.charAt(e+1)==b;return b&&e++,b},e=0;e<a.length;e++)if(d)"'"!=a.charAt(e)||c("'")?b+=a.charAt(e):
d=!1;else switch(a.charAt(e)){case "d":case "m":case "y":case "@":b+="0123456789";break;case "D":case "M":return null;case "'":c("'")?b+="'":d=!0;break;default:b+=a.charAt(e)}return b},_get:function(a,b){return a.settings[b]!==p?a.settings[b]:this._defaults[b]},_setDateFromField:function(a,b){if(a.input.val()!=a.lastVal){var d=this._get(a,"dateFormat"),c=a.lastVal=a.input?a.input.val():null,e,g;e=g=this._getDefaultDate(a);var r=this._getFormatConfig(a);try{e=this.parseDate(d,c,r)||g}catch(q){this.log(q),
c=b?"":c}a.selectedDay=e.getDate();a.drawMonth=a.selectedMonth=e.getMonth();a.drawYear=a.selectedYear=e.getFullYear();a.currentDay=c?e.getDate():0;a.currentMonth=c?e.getMonth():0;a.currentYear=c?e.getFullYear():0;this._adjustInstDate(a)}},_getDefaultDate:function(a){return this._restrictMinMax(a,this._determineDate(a,this._get(a,"defaultDate"),new Date))},_determineDate:function(b,d,c){var e=function(a){var b=new Date;return b.setDate(b.getDate()+a),b},g=function(d){try{return a.datepicker.parseDate(a.datepicker._get(b,
"dateFormat"),d,a.datepicker._getFormatConfig(b))}catch(c){}for(var e=(d.toLowerCase().match(/^c/)?a.datepicker._getDate(b):null)||new Date,g=e.getFullYear(),h=e.getMonth(),e=e.getDate(),l=/([+-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g,k=l.exec(d);k;){switch(k[2]||"d"){case "d":case "D":e+=parseInt(k[1],10);break;case "w":case "W":e+=7*parseInt(k[1],10);break;case "m":case "M":h+=parseInt(k[1],10);e=Math.min(e,a.datepicker._getDaysInMonth(g,h));break;case "y":case "Y":g+=parseInt(k[1],10),e=Math.min(e,a.datepicker._getDaysInMonth(g,
h))}k=l.exec(d)}return new Date(g,h,e)};d=null==d||""===d?c:"string"==typeof d?g(d):"number"==typeof d?isNaN(d)?c:e(d):new Date(d.getTime());return d=d&&"Invalid Date"==d.toString()?c:d,d&&(d.setHours(0),d.setMinutes(0),d.setSeconds(0),d.setMilliseconds(0)),this._daylightSavingAdjust(d)},_daylightSavingAdjust:function(a){return a?(a.setHours(12<a.getHours()?a.getHours()+2:0),a):null},_setDate:function(a,b,d){var c=!b,e=a.selectedMonth,g=a.selectedYear;b=this._restrictMinMax(a,this._determineDate(a,
b,new Date));a.selectedDay=a.currentDay=b.getDate();a.drawMonth=a.selectedMonth=a.currentMonth=b.getMonth();a.drawYear=a.selectedYear=a.currentYear=b.getFullYear();e==a.selectedMonth&&g==a.selectedYear||d||this._notifyChange(a);this._adjustInstDate(a);a.input&&a.input.val(c?"":this._formatDate(a))},_getDate:function(a){return!a.currentYear||a.input&&""==a.input.val()?null:this._daylightSavingAdjust(new Date(a.currentYear,a.currentMonth,a.currentDay))},_attachHandlers:function(b){var c=this._get(b,
"stepMonths"),e="#"+b.id.replace(/\\\\/g,"\\");b.dpDiv.find("[data-handler]").map(function(){a(this).bind(this.getAttribute("data-event"),{prev:function(){window["DP_jQuery_"+d].datepicker._adjustDate(e,-c,"M")},next:function(){window["DP_jQuery_"+d].datepicker._adjustDate(e,+c,"M")},hide:function(){window["DP_jQuery_"+d].datepicker._hideDatepicker()},today:function(){window["DP_jQuery_"+d].datepicker._gotoToday(e)},selectDay:function(){return window["DP_jQuery_"+d].datepicker._selectDay(e,+this.getAttribute("data-month"),
+this.getAttribute("data-year"),this),!1},selectMonth:function(){return window["DP_jQuery_"+d].datepicker._selectMonthYear(e,this,"M"),!1},selectYear:function(){return window["DP_jQuery_"+d].datepicker._selectMonthYear(e,this,"Y"),!1}}[this.getAttribute("data-handler")])})},_generateHTML:function(b){var d=new Date,d=this._daylightSavingAdjust(new Date(d.getFullYear(),d.getMonth(),d.getDate())),c=this._get(b,"isRTL"),e=this._get(b,"showButtonPanel"),g=this._get(b,"hideIfNoPrevNext"),n=this._get(b,
"navigationAsDateFormat"),r=this._getNumberOfMonths(b),q=this._get(b,"showCurrentAtPos"),u=this._get(b,"stepMonths"),t=1!=r[0]||1!=r[1],p=this._daylightSavingAdjust(b.currentDay?new Date(b.currentYear,b.currentMonth,b.currentDay):new Date(9999,9,9)),v=this._getMinMaxDate(b,"min"),x=this._getMinMaxDate(b,"max"),q=b.drawMonth-q,y=b.drawYear;0>q&&(q+=12,y--);if(x)for(var w=this._daylightSavingAdjust(new Date(x.getFullYear(),x.getMonth()-r[0]*r[1]+1,x.getDate())),w=v&&w<v?v:w;this._daylightSavingAdjust(new Date(y,
q,1))>w;)q--,0>q&&(q=11,y--);b.drawMonth=q;b.drawYear=y;var w=this._get(b,"prevText"),w=n?this.formatDate(w,this._daylightSavingAdjust(new Date(y,q-u,1)),this._getFormatConfig(b)):w,w=this._canAdjustMonth(b,-1,y,q)?'<a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="'+w+'"><span class="ui-icon ui-icon-circle-triangle-'+(c?"e":"w")+'">'+w+"</span></a>":g?"":'<a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="'+w+'"><span class="ui-icon ui-icon-circle-triangle-'+
(c?"e":"w")+'">'+w+"</span></a>",z=this._get(b,"nextText"),z=n?this.formatDate(z,this._daylightSavingAdjust(new Date(y,q+u,1)),this._getFormatConfig(b)):z,g=this._canAdjustMonth(b,1,y,q)?'<a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="'+z+'"><span class="ui-icon ui-icon-circle-triangle-'+(c?"w":"e")+'">'+z+"</span></a>":g?"":'<a class="ui-datepicker-next ui-corner-all ui-state-disabled" title="'+z+'"><span class="ui-icon ui-icon-circle-triangle-'+(c?"w":
"e")+'">'+z+"</span></a>",u=this._get(b,"currentText"),z=this._get(b,"gotoCurrent")&&b.currentDay?p:d,u=n?this.formatDate(u,z,this._getFormatConfig(b)):u,n=b.inline?"":'<button type="button" class="ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all" data-handler="hide" data-event="click">'+this._get(b,"closeText")+"</button>",e=e?'<div class="ui-datepicker-buttonpane ui-widget-content">'+(c?n:"")+(this._isInRange(b,z)?'<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" data-handler="today" data-event="click">'+
u+"</button>":"")+(c?"":n)+"</div>":"",n=parseInt(this._get(b,"firstDay"),10),n=isNaN(n)?0:n,u=this._get(b,"showWeek"),z=this._get(b,"dayNames");this._get(b,"dayNamesShort");var D=this._get(b,"dayNamesMin"),E=this._get(b,"monthNames"),F=this._get(b,"monthNamesShort"),S=this._get(b,"beforeShowDay"),O=this._get(b,"showOtherMonths"),V=this._get(b,"selectOtherMonths");this._get(b,"calculateWeek");for(var T=this._getDefaultDate(b),P="",J=0;J<r[0];J++){var M="";this.maxRows=4;for(var K=0;K<r[1];K++){var A=
this._daylightSavingAdjust(new Date(y,q,b.selectedDay)),B=" ui-corner-all",G="";if(t){G+='<div class="ui-datepicker-group';if(1<r[1])switch(K){case 0:G+=" ui-datepicker-group-first";B=" ui-corner-"+(c?"right":"left");break;case r[1]-1:G+=" ui-datepicker-group-last";B=" ui-corner-"+(c?"left":"right");break;default:G+=" ui-datepicker-group-middle",B=""}G+='">'}for(var G=G+('<div class="ui-datepicker-header ui-widget-header ui-helper-clearfix'+B+'">'+(/all|left/.test(B)&&0==J?c?g:w:"")+(/all|right/.test(B)&&
0==J?c?w:g:"")+this._generateMonthYearHeader(b,q,y,v,x,0<J||0<K,E,F)+'</div><table class="ui-datepicker-calendar"><thead><tr>'),H=u?'<th class="ui-datepicker-week-col">'+this._get(b,"weekHeader")+"</th>":"",B=0;7>B;B++)var C=(B+n)%7,H=H+("<th"+(5<=(B+n+6)%7?' class="ui-datepicker-week-end"':"")+'><span title="'+z[C]+'">'+D[C]+"</span></th>");G+=H+"</tr></thead><tbody>";H=this._getDaysInMonth(y,q);y==b.selectedYear&&q==b.selectedMonth&&(b.selectedDay=Math.min(b.selectedDay,H));B=(this._getFirstDayOfMonth(y,
q)-n+7)%7;H=Math.ceil((B+H)/7);this.maxRows=H=t?this.maxRows>H?this.maxRows:H:H;for(var C=this._daylightSavingAdjust(new Date(y,q,1-B)),U=0;U<H;U++){for(var G=G+"<tr>",Q=u?'<td class="ui-datepicker-week-col">'+this._get(b,"calculateWeek")(C)+"</td>":"",B=0;7>B;B++){var N=S?S.apply(b.input?b.input[0]:null,[C]):[!0,""],L=C.getMonth()!=q,R=L&&!V||!N[0]||v&&C<v||x&&C>x,Q=Q+('<td class="'+(5<=(B+n+6)%7?" ui-datepicker-week-end":"")+(L?" ui-datepicker-other-month":"")+(C.getTime()==A.getTime()&&q==b.selectedMonth&&
b._keyEvent||T.getTime()==C.getTime()&&T.getTime()==A.getTime()?" "+this._dayOverClass:"")+(R?" "+this._unselectableClass+" ui-state-disabled":"")+(L&&!O?"":" "+N[1]+(C.getTime()==p.getTime()?" "+this._currentClass:"")+(C.getTime()==d.getTime()?" ui-datepicker-today":""))+'"'+(L&&!O||!N[2]?"":' title="'+N[2]+'"')+(R?"":' data-handler="selectDay" data-event="click" data-month="'+C.getMonth()+'" data-year="'+C.getFullYear()+'"')+">"+(L&&!O?"&#xa0;":R?'<span class="ui-state-default">'+C.getDate()+"</span>":
'<a class="ui-state-default'+(C.getTime()==d.getTime()?" ui-state-highlight":"")+(C.getTime()==p.getTime()?" ui-state-active":"")+(L?" ui-priority-secondary":"")+'" href="#">'+C.getDate()+"</a>")+"</td>");C.setDate(C.getDate()+1);C=this._daylightSavingAdjust(C)}G+=Q+"</tr>"}q++;11<q&&(q=0,y++);G+="</tbody></table>"+(t?"</div>"+(0<r[0]&&K==r[1]-1?'<div class="ui-datepicker-row-break"></div>':""):"");M+=G}P+=M}return P+=e+(a.ui.ie6&&!b.inline?'<iframe src="javascript:false;" class="ui-datepicker-cover" frameborder="0"></iframe>':
""),b._keyEvent=!1,P},_generateMonthYearHeader:function(a,b,d,c,e,g,r,q){var u=this._get(a,"changeMonth"),t=this._get(a,"changeYear"),p=this._get(a,"showMonthAfterYear"),v='<div class="ui-datepicker-title">',x="";if(g||!u)x+='<span class="ui-datepicker-month">'+r[b]+"</span>";else{r=c&&c.getFullYear()==d;for(var y=e&&e.getFullYear()==d,x=x+'<select class="ui-datepicker-month" data-handler="selectMonth" data-event="change">',w=0;12>w;w++)(!r||w>=c.getMonth())&&(!y||w<=e.getMonth())&&(x+='<option value="'+
w+'"'+(w==b?' selected="selected"':"")+">"+q[w]+"</option>");x+="</select>"}p||(v+=x+(!g&&u&&t?"":"&#xa0;"));if(!a.yearshtml)if(a.yearshtml="",g||!t)v+='<span class="ui-datepicker-year">'+d+"</span>";else{q=this._get(a,"yearRange").split(":");var z=(new Date).getFullYear();r=function(a){a=a.match(/c[+-].*/)?d+parseInt(a.substring(1),10):a.match(/[+-].*/)?z+parseInt(a,10):parseInt(a,10);return isNaN(a)?z:a};b=r(q[0]);q=Math.max(b,r(q[1]||""));b=c?Math.max(b,c.getFullYear()):b;q=e?Math.min(q,e.getFullYear()):
q;for(a.yearshtml+='<select class="ui-datepicker-year" data-handler="selectYear" data-event="change">';b<=q;b++)a.yearshtml+='<option value="'+b+'"'+(b==d?' selected="selected"':"")+">"+b+"</option>";a.yearshtml+="</select>";v+=a.yearshtml;a.yearshtml=null}return v+=this._get(a,"yearSuffix"),p&&(v+=(!g&&u&&t?"":"&#xa0;")+x),v+="</div>",v},_adjustInstDate:function(a,b,d){var c=a.drawYear+("Y"==d?b:0),e=a.drawMonth+("M"==d?b:0);b=Math.min(a.selectedDay,this._getDaysInMonth(c,e))+("D"==d?b:0);c=this._restrictMinMax(a,
this._daylightSavingAdjust(new Date(c,e,b)));a.selectedDay=c.getDate();a.drawMonth=a.selectedMonth=c.getMonth();a.drawYear=a.selectedYear=c.getFullYear();"M"!=d&&"Y"!=d||this._notifyChange(a)},_restrictMinMax:function(a,b){var d=this._getMinMaxDate(a,"min"),c=this._getMinMaxDate(a,"max"),d=d&&b<d?d:b;return d=c&&d>c?c:d,d},_notifyChange:function(a){var b=this._get(a,"onChangeMonthYear");b&&b.apply(a.input?a.input[0]:null,[a.selectedYear,a.selectedMonth+1,a])},_getNumberOfMonths:function(a){a=this._get(a,
"numberOfMonths");return null==a?[1,1]:"number"==typeof a?[1,a]:a},_getMinMaxDate:function(a,b){return this._determineDate(a,this._get(a,b+"Date"),null)},_getDaysInMonth:function(a,b){return 32-this._daylightSavingAdjust(new Date(a,b,32)).getDate()},_getFirstDayOfMonth:function(a,b){return(new Date(a,b,1)).getDay()},_canAdjustMonth:function(a,b,d,c){var e=this._getNumberOfMonths(a);d=this._daylightSavingAdjust(new Date(d,c+(0>b?b:e[0]*e[1]),1));return 0>b&&d.setDate(this._getDaysInMonth(d.getFullYear(),
d.getMonth())),this._isInRange(a,d)},_isInRange:function(a,b){var d=this._getMinMaxDate(a,"min"),c=this._getMinMaxDate(a,"max");return(!d||b.getTime()>=d.getTime())&&(!c||b.getTime()<=c.getTime())},_getFormatConfig:function(a){var b=this._get(a,"shortYearCutoff");return b="string"!=typeof b?b:(new Date).getFullYear()%100+parseInt(b,10),{shortYearCutoff:b,dayNamesShort:this._get(a,"dayNamesShort"),dayNames:this._get(a,"dayNames"),monthNamesShort:this._get(a,"monthNamesShort"),monthNames:this._get(a,
"monthNames")}},_formatDate:function(a,b,d,c){b||(a.currentDay=a.selectedDay,a.currentMonth=a.selectedMonth,a.currentYear=a.selectedYear);b=b?"object"==typeof b?b:this._daylightSavingAdjust(new Date(c,d,b)):this._daylightSavingAdjust(new Date(a.currentYear,a.currentMonth,a.currentDay));return this.formatDate(this._get(a,"dateFormat"),b,this._getFormatConfig(a))}});a.fn.datepicker=function(b){if(!this.length)return this;a.datepicker.initialized||(a(document).mousedown(a.datepicker._checkExternalClick).find(document.body).append(a.datepicker.dpDiv),
a.datepicker.initialized=!0);var d=Array.prototype.slice.call(arguments,1);return"string"!=typeof b||"isDisabled"!=b&&"getDate"!=b&&"widget"!=b?"option"==b&&2==arguments.length&&"string"==typeof arguments[1]?a.datepicker["_"+b+"Datepicker"].apply(a.datepicker,[this[0]].concat(d)):this.each(function(){"string"==typeof b?a.datepicker["_"+b+"Datepicker"].apply(a.datepicker,[this].concat(d)):a.datepicker._attachDatepicker(this,b)}):a.datepicker["_"+b+"Datepicker"].apply(a.datepicker,[this[0]].concat(d))};
a.datepicker=new e;a.datepicker.initialized=!1;a.datepicker.uuid=(new Date).getTime();a.datepicker.version="1.9.1";window["DP_jQuery_"+d]=a})(jQuery);
(function(a,p){var e={buttons:!0,height:!0,maxHeight:!0,maxWidth:!0,minHeight:!0,minWidth:!0,width:!0},g={maxHeight:!0,maxWidth:!0,minHeight:!0,minWidth:!0};a.widget("ui.dialog",{version:"1.9.1",options:{autoOpen:!0,buttons:{},closeOnEscape:!0,closeText:"close",dialogClass:"",draggable:!0,hide:null,height:"auto",maxHeight:!1,maxWidth:!1,minHeight:150,minWidth:150,modal:!1,position:{my:"center",at:"center",of:window,collision:"fit",using:function(c){var d=a(this).css(c).offset().top;0>d&&a(this).css("top",
c.top-d)}},resizable:!0,show:null,stack:!0,title:"",width:300,zIndex:1E3},_create:function(){this.originalTitle=this.element.attr("title");"string"!=typeof this.originalTitle&&(this.originalTitle="");this.oldPosition={parent:this.element.parent(),index:this.element.parent().children().index(this.element)};this.options.title=this.options.title||this.originalTitle;var c=this,d=this.options,b=d.title||"&#160;",f,e,g,k;f=(this.uiDialog=a("<div>")).addClass("ui-dialog ui-widget ui-widget-content ui-corner-all "+
d.dialogClass).css({display:"none",outline:0,zIndex:d.zIndex}).attr("tabIndex",-1).keydown(function(b){d.closeOnEscape&&!b.isDefaultPrevented()&&b.keyCode&&b.keyCode===a.ui.keyCode.ESCAPE&&(c.close(b),b.preventDefault())}).mousedown(function(a){c.moveToTop(!1,a)}).appendTo("body");this.element.show().removeAttr("title").addClass("ui-dialog-content ui-widget-content").appendTo(f);e=(this.uiDialogTitlebar=a("<div>")).addClass("ui-dialog-titlebar  ui-widget-header  ui-corner-all  ui-helper-clearfix").bind("mousedown",
function(){f.focus()}).prependTo(f);g=a("<a href='#'></a>").addClass("ui-dialog-titlebar-close  ui-corner-all").attr("role","button").click(function(a){a.preventDefault();c.close(a)}).appendTo(e);(this.uiDialogTitlebarCloseText=a("<span>")).addClass("ui-icon ui-icon-closethick").text(d.closeText).appendTo(g);b=a("<span>").uniqueId().addClass("ui-dialog-title").html(b).prependTo(e);k=(this.uiDialogButtonPane=a("<div>")).addClass("ui-dialog-buttonpane ui-widget-content ui-helper-clearfix");(this.uiButtonSet=
a("<div>")).addClass("ui-dialog-buttonset").appendTo(k);f.attr({role:"dialog","aria-labelledby":b.attr("id")});e.find("*").add(e).disableSelection();this._hoverable(g);this._focusable(g);d.draggable&&a.fn.draggable&&this._makeDraggable();d.resizable&&a.fn.resizable&&this._makeResizable();this._createButtons(d.buttons);this._isOpen=!1;a.fn.bgiframe&&f.bgiframe();this._on(f,{keydown:function(b){if(d.modal&&b.keyCode===a.ui.keyCode.TAB){var c=a(":tabbable",f),e=c.filter(":first"),c=c.filter(":last");
if(b.target===c[0]&&!b.shiftKey)return e.focus(1),!1;if(b.target===e[0]&&b.shiftKey)return c.focus(1),!1}}})},_init:function(){this.options.autoOpen&&this.open()},_destroy:function(){var a,d=this.oldPosition;this.overlay&&this.overlay.destroy();this.uiDialog.hide();this.element.removeClass("ui-dialog-content ui-widget-content").hide().appendTo("body");this.uiDialog.remove();this.originalTitle&&this.element.attr("title",this.originalTitle);a=d.parent.children().eq(d.index);a.length&&a[0]!==this.element[0]?
a.before(this.element):d.parent.append(this.element)},widget:function(){return this.uiDialog},close:function(c){var d=this,b,f;if(this._isOpen&&!1!==this._trigger("beforeClose",c))return this._isOpen=!1,this.overlay&&this.overlay.destroy(),this.options.hide?this._hide(this.uiDialog,this.options.hide,function(){d._trigger("close",c)}):(this.uiDialog.hide(),this._trigger("close",c)),a.ui.dialog.overlay.resize(),this.options.modal&&(b=0,a(".ui-dialog").each(function(){this!==d.uiDialog[0]&&(f=a(this).css("z-index"),
isNaN(f)||(b=Math.max(b,f)))}),a.ui.dialog.maxZ=b),this},isOpen:function(){return this._isOpen},moveToTop:function(c,d){var b=this.options,f;return b.modal&&!c||!b.stack&&!b.modal?this._trigger("focus",d):(b.zIndex>a.ui.dialog.maxZ&&(a.ui.dialog.maxZ=b.zIndex),this.overlay&&(a.ui.dialog.maxZ+=1,a.ui.dialog.overlay.maxZ=a.ui.dialog.maxZ,this.overlay.$el.css("z-index",a.ui.dialog.overlay.maxZ)),f={scrollTop:this.element.scrollTop(),scrollLeft:this.element.scrollLeft()},a.ui.dialog.maxZ+=1,this.uiDialog.css("z-index",
a.ui.dialog.maxZ),this.element.attr(f),this._trigger("focus",d),this)},open:function(){if(!this._isOpen){var c,d=this.options,b=this.uiDialog;return this._size(),this._position(d.position),b.show(d.show),this.overlay=d.modal?new a.ui.dialog.overlay(this):null,this.moveToTop(!0),c=this.element.find(":tabbable"),c.length||(c=this.uiDialogButtonPane.find(":tabbable"),c.length||(c=b)),c.eq(0).focus(),this._isOpen=!0,this._trigger("open"),this}},_createButtons:function(c){var d=this,b=!1;this.uiDialogButtonPane.remove();
this.uiButtonSet.empty();"object"==typeof c&&null!==c&&a.each(c,function(){return!(b=!0)});b?(a.each(c,function(b,c){c=a.isFunction(c)?{click:c,text:b}:c;var e=a("<button type='button'></button>").attr(c,!0).unbind("click").click(function(){c.click.apply(d.element[0],arguments)}).appendTo(d.uiButtonSet);a.fn.button&&e.button()}),this.uiDialog.addClass("ui-dialog-buttons"),this.uiDialogButtonPane.appendTo(this.uiDialog)):this.uiDialog.removeClass("ui-dialog-buttons")},_makeDraggable:function(){function c(a){return{position:a.position,
offset:a.offset}}var d=this,b=this.options;this.uiDialog.draggable({cancel:".ui-dialog-content, .ui-dialog-titlebar-close",handle:".ui-dialog-titlebar",containment:"document",start:function(b,e){a(this).addClass("ui-dialog-dragging");d._trigger("dragStart",b,c(e))},drag:function(a,b){d._trigger("drag",a,c(b))},stop:function(f,e){b.position=[e.position.left-d.document.scrollLeft(),e.position.top-d.document.scrollTop()];a(this).removeClass("ui-dialog-dragging");d._trigger("dragStop",f,c(e));a.ui.dialog.overlay.resize()}})},
_makeResizable:function(c){function d(a){return{originalPosition:a.originalPosition,originalSize:a.originalSize,position:a.position,size:a.size}}c=c===p?this.options.resizable:c;var b=this,f=this.options,e=this.uiDialog.css("position");c="string"==typeof c?c:"n,e,s,w,se,sw,ne,nw";this.uiDialog.resizable({cancel:".ui-dialog-content",containment:"document",alsoResize:this.element,maxWidth:f.maxWidth,maxHeight:f.maxHeight,minWidth:f.minWidth,minHeight:this._minHeight(),handles:c,start:function(c,f){a(this).addClass("ui-dialog-resizing");
b._trigger("resizeStart",c,d(f))},resize:function(a,c){b._trigger("resize",a,d(c))},stop:function(c,e){a(this).removeClass("ui-dialog-resizing");f.height=a(this).height();f.width=a(this).width();b._trigger("resizeStop",c,d(e));a.ui.dialog.overlay.resize()}}).css("position",e).find(".ui-resizable-se").addClass("ui-icon ui-icon-grip-diagonal-se")},_minHeight:function(){var a=this.options;return"auto"===a.height?a.minHeight:Math.min(a.minHeight,a.height)},_position:function(c){var d=[],b=[0,0],f;if(c){if("string"==
typeof c||"object"==typeof c&&"0"in c)d=c.split?c.split(" "):[c[0],c[1]],1===d.length&&(d[1]=d[0]),a.each(["left","top"],function(a,c){+d[a]===d[a]&&(b[a]=d[a],d[a]=c)}),c={my:d[0]+(0>b[0]?b[0]:"+"+b[0])+" "+d[1]+(0>b[1]?b[1]:"+"+b[1]),at:d.join(" ")};c=a.extend({},a.ui.dialog.prototype.options.position,c)}else c=a.ui.dialog.prototype.options.position;(f=this.uiDialog.is(":visible"))||this.uiDialog.show();this.uiDialog.position(c);f||this.uiDialog.hide()},_setOptions:function(c){var d=this,b={},f=
!1;a.each(c,function(a,c){d._setOption(a,c);a in e&&(f=!0);a in g&&(b[a]=c)});f&&this._size();this.uiDialog.is(":data(resizable)")&&this.uiDialog.resizable("option",b)},_setOption:function(c,d){var b,f=this.uiDialog;switch(c){case "buttons":this._createButtons(d);break;case "closeText":this.uiDialogTitlebarCloseText.text(""+d);break;case "dialogClass":f.removeClass(this.options.dialogClass).addClass("ui-dialog ui-widget ui-widget-content ui-corner-all "+d);break;case "disabled":d?f.addClass("ui-dialog-disabled"):
f.removeClass("ui-dialog-disabled");break;case "draggable":(b=f.is(":data(draggable)"))&&!d&&f.draggable("destroy");!b&&d&&this._makeDraggable();break;case "position":this._position(d);break;case "resizable":(b=f.is(":data(resizable)"))&&!d&&f.resizable("destroy");b&&"string"==typeof d&&f.resizable("option","handles",d);!b&&!1!==d&&this._makeResizable(d);break;case "title":a(".ui-dialog-title",this.uiDialogTitlebar).html(""+(d||"&#160;"))}this._super(c,d)},_size:function(){var c,d,b,f=this.options,
e=this.uiDialog.is(":visible");this.element.show().css({width:"auto",minHeight:0,height:0});f.minWidth>f.width&&(f.width=f.minWidth);c=this.uiDialog.css({height:"auto",width:f.width}).outerHeight();d=Math.max(0,f.minHeight-c);"auto"===f.height?a.support.minHeight?this.element.css({minHeight:d,height:"auto"}):(this.uiDialog.show(),b=this.element.css("height","auto").height(),e||this.uiDialog.hide(),this.element.height(Math.max(b,d))):this.element.height(Math.max(f.height-c,0));this.uiDialog.is(":data(resizable)")&&
this.uiDialog.resizable("option","minHeight",this._minHeight())}});a.extend(a.ui.dialog,{uuid:0,maxZ:0,getTitleId:function(a){a=a.attr("id");return a||(this.uuid+=1,a=this.uuid),"ui-dialog-title-"+a},overlay:function(c){this.$el=a.ui.dialog.overlay.create(c)}});a.extend(a.ui.dialog.overlay,{instances:[],oldInstances:[],maxZ:0,events:a.map("focus mousedown mouseup keydown keypress click".split(" "),function(a){return a+".dialog-overlay"}).join(" "),create:function(c){0===this.instances.length&&(setTimeout(function(){a.ui.dialog.overlay.instances.length&&
a(document).bind(a.ui.dialog.overlay.events,function(b){if(a(b.target).zIndex()<a.ui.dialog.overlay.maxZ)return!1})},1),a(window).bind("resize.dialog-overlay",a.ui.dialog.overlay.resize));var d=this.oldInstances.pop()||a("<div>").addClass("ui-widget-overlay");return a(document).bind("keydown.dialog-overlay",function(b){var f=a.ui.dialog.overlay.instances;0!==f.length&&f[f.length-1]===d&&c.options.closeOnEscape&&!b.isDefaultPrevented()&&b.keyCode&&b.keyCode===a.ui.keyCode.ESCAPE&&(c.close(b),b.preventDefault())}),
d.appendTo(document.body).css({width:this.width(),height:this.height()}),a.fn.bgiframe&&d.bgiframe(),this.instances.push(d),d},destroy:function(c){var d=a.inArray(c,this.instances),b=0;-1!==d&&this.oldInstances.push(this.instances.splice(d,1)[0]);0===this.instances.length&&a([document,window]).unbind(".dialog-overlay");c.height(0).width(0).remove();a.each(this.instances,function(){b=Math.max(b,this.css("z-index"))});this.maxZ=b},height:function(){var c,d;return a.ui.ie?(c=Math.max(document.documentElement.scrollHeight,
document.body.scrollHeight),d=Math.max(document.documentElement.offsetHeight,document.body.offsetHeight),c<d?a(window).height()+"px":c+"px"):a(document).height()+"px"},width:function(){var c,d;return a.ui.ie?(c=Math.max(document.documentElement.scrollWidth,document.body.scrollWidth),d=Math.max(document.documentElement.offsetWidth,document.body.offsetWidth),c<d?a(window).width()+"px":c+"px"):a(document).width()+"px"},resize:function(){var c=a([]);a.each(a.ui.dialog.overlay.instances,function(){c=c.add(this)});
c.css({width:0,height:0}).css({width:a.ui.dialog.overlay.width(),height:a.ui.dialog.overlay.height()})}});a.extend(a.ui.dialog.overlay.prototype,{destroy:function(){a.ui.dialog.overlay.destroy(this.$el)}})})(jQuery);
(function(a,p){var e=/up|down|vertical/,g=/up|left|vertical|horizontal/;a.effects.effect.blind=function(c,d){var b=a(this),f="position top bottom left right height width".split(" "),h=a.effects.setMode(b,c.mode||"hide"),l=c.direction||"up",k=e.test(l),m=k?"height":"width",n=k?"top":"left",l=g.test(l),r={},q="show"===h,u,t,p;b.parent().is(".ui-effects-wrapper")?a.effects.save(b.parent(),f):a.effects.save(b,f);b.show();u=a.effects.createWrapper(b).css({overflow:"hidden"});t=u[m]();p=parseFloat(u.css(n))||
0;r[m]=q?t:0;l||(b.css(k?"bottom":"right",0).css(k?"top":"left","auto").css({position:"absolute"}),r[n]=q?p:t+p);q&&(u.css(m,0),l||u.css(n,p+t));u.animate(r,{duration:c.duration,easing:c.easing,queue:!1,complete:function(){"hide"===h&&b.hide();a.effects.restore(b,f);a.effects.removeWrapper(b);d()}})}})(jQuery);
(function(a,p){a.effects.effect.bounce=function(e,g){var c=a(this),d="position top bottom left right height width".split(" "),b=a.effects.setMode(c,e.mode||"effect"),f="hide"===b,h="show"===b,l=e.direction||"up",b=e.distance,k=e.times||5,m=2*k+(h||f?1:0),n=e.duration/m,r=e.easing,q="up"===l||"down"===l?"top":"left",l="up"===l||"left"===l,u,t,p=c.queue(),v=p.length;(h||f)&&d.push("opacity");a.effects.save(c,d);c.show();a.effects.createWrapper(c);b||(b=c["top"===q?"outerHeight":"outerWidth"]()/3);h&&
(t={opacity:1},t[q]=0,c.css("opacity",0).css(q,l?2*-b:2*b).animate(t,n,r));f&&(b/=Math.pow(2,k-1));t={};for(h=t[q]=0;h<k;h++)u={},u[q]=(l?"-=":"+=")+b,c.animate(u,n,r).animate(t,n,r),b=f?2*b:b/2;f&&(u={opacity:0},u[q]=(l?"-=":"+=")+b,c.animate(u,n,r));c.queue(function(){f&&c.hide();a.effects.restore(c,d);a.effects.removeWrapper(c);g()});1<v&&p.splice.apply(p,[1,0].concat(p.splice(v,m+1)));c.dequeue()}})(jQuery);
(function(a,p){a.effects.effect.clip=function(e,g){var c=a(this),d="position top bottom left right height width".split(" "),b="show"===a.effects.setMode(c,e.mode||"hide"),f="vertical"===(e.direction||"vertical"),h=f?"height":"width",f=f?"top":"left",l={},k,m;a.effects.save(c,d);c.show();k=a.effects.createWrapper(c).css({overflow:"hidden"});k="IMG"===c[0].tagName?k:c;m=k[h]();b&&(k.css(h,0),k.css(f,m/2));l[h]=b?m:0;l[f]=b?0:m/2;k.animate(l,{queue:!1,duration:e.duration,easing:e.easing,complete:function(){b||
c.hide();a.effects.restore(c,d);a.effects.removeWrapper(c);g()}})}})(jQuery);
(function(a,p){a.effects.effect.drop=function(e,g){var c=a(this),d="position top bottom left right opacity height width".split(" "),b=a.effects.setMode(c,e.mode||"hide"),f="show"===b,h=e.direction||"left",l="up"===h||"down"===h?"top":"left",h="up"===h||"left"===h?"pos":"neg",k={opacity:f?1:0},m;a.effects.save(c,d);c.show();a.effects.createWrapper(c);m=e.distance||c["top"===l?"outerHeight":"outerWidth"](!0)/2;f&&c.css("opacity",0).css(l,"pos"===h?-m:m);k[l]=(f?"pos"===h?"+=":"-=":"pos"===h?"-=":"+=")+
m;c.animate(k,{queue:!1,duration:e.duration,easing:e.easing,complete:function(){"hide"===b&&c.hide();a.effects.restore(c,d);a.effects.removeWrapper(c);g()}})}})(jQuery);
(function(a,p){a.effects.effect.explode=function(e,g){function c(){n.push(this);n.length===d*b&&(f.css({visibility:"visible"}),a(n).remove(),h||f.hide(),g())}var d=e.pieces?Math.round(Math.sqrt(e.pieces)):3,b=d,f=a(this),h="show"===a.effects.setMode(f,e.mode||"hide"),l=f.show().css("visibility","hidden").offset(),k=Math.ceil(f.outerWidth()/b),m=Math.ceil(f.outerHeight()/d),n=[],r,q,u,t,p,v;for(r=0;r<d;r++)for(t=l.top+r*m,v=r-(d-1)/2,q=0;q<b;q++)u=l.left+q*k,p=q-(b-1)/2,f.clone().appendTo("body").wrap("<div></div>").css({position:"absolute",
visibility:"visible",left:-q*k,top:-r*m}).parent().addClass("ui-effects-explode").css({position:"absolute",overflow:"hidden",width:k,height:m,left:u+(h?p*k:0),top:t+(h?v*m:0),opacity:h?0:1}).animate({left:u+(h?0:p*k),top:t+(h?0:v*m),opacity:h?1:0},e.duration||500,e.easing,c)}})(jQuery);(function(a,p){a.effects.effect.fade=function(e,g){var c=a(this),d=a.effects.setMode(c,e.mode||"toggle");c.animate({opacity:d},{queue:!1,duration:e.duration,easing:e.easing,complete:g})}})(jQuery);
(function(a,p){a.effects.effect.fold=function(e,g){var c=a(this),d="position top bottom left right height width".split(" "),b=a.effects.setMode(c,e.mode||"hide"),f="show"===b,h="hide"===b,b=e.size||15,l=/([0-9]+)%/.exec(b),k=!!e.horizFirst,m=f!==k,n=m?["width","height"]:["height","width"],r=e.duration/2,q,u={},t={};a.effects.save(c,d);c.show();q=a.effects.createWrapper(c).css({overflow:"hidden"});m=m?[q.width(),q.height()]:[q.height(),q.width()];l&&(b=parseInt(l[1],10)/100*m[h?0:1]);f&&q.css(k?{height:0,
width:b}:{height:b,width:0});u[n[0]]=f?m[0]:b;t[n[1]]=f?m[1]:0;q.animate(u,r,e.easing).animate(t,r,e.easing,function(){h&&c.hide();a.effects.restore(c,d);a.effects.removeWrapper(c);g()})}})(jQuery);
(function(a,p){a.effects.effect.highlight=function(e,g){var c=a(this),d=["backgroundImage","backgroundColor","opacity"],b=a.effects.setMode(c,e.mode||"show"),f={backgroundColor:c.css("backgroundColor")};"hide"===b&&(f.opacity=0);a.effects.save(c,d);c.show().css({backgroundImage:"none",backgroundColor:e.color||"#ffff99"}).animate(f,{queue:!1,duration:e.duration,easing:e.easing,complete:function(){"hide"===b&&c.hide();a.effects.restore(c,d);g()}})}})(jQuery);
(function(a,p){a.effects.effect.pulsate=function(e,g){var c=a(this),d=a.effects.setMode(c,e.mode||"show"),b="show"===d,f="hide"===d,d=2*(e.times||5)+(b||"hide"===d?1:0),h=e.duration/d,l=0,k=c.queue(),m=k.length;if(b||!c.is(":visible"))c.css("opacity",0).show(),l=1;for(b=1;b<d;b++)c.animate({opacity:l},h,e.easing),l=1-l;c.animate({opacity:l},h,e.easing);c.queue(function(){f&&c.hide();g()});1<m&&k.splice.apply(k,[1,0].concat(k.splice(m,d+1)));c.dequeue()}})(jQuery);
(function(a,p){a.effects.effect.puff=function(e,g){var c=a(this),d=a.effects.setMode(c,e.mode||"hide"),b="hide"===d,f=parseInt(e.percent,10)||150,h=f/100,l={height:c.height(),width:c.width()};a.extend(e,{effect:"scale",queue:!1,fade:!0,mode:d,complete:g,percent:b?f:100,from:b?l:{height:l.height*h,width:l.width*h}});c.effect(e)};a.effects.effect.scale=function(e,g){var c=a(this),d=a.extend(!0,{},e),b=a.effects.setMode(c,e.mode||"effect"),f=parseInt(e.percent,10)||(0===parseInt(e.percent,10)?0:"hide"===
b?0:100),h=e.direction||"both",l=e.origin,k={height:c.height(),width:c.width(),outerHeight:c.outerHeight(),outerWidth:c.outerWidth()},m="horizontal"!==h?f/100:1,f="vertical"!==h?f/100:1;d.effect="size";d.queue=!1;d.complete=g;"effect"!==b&&(d.origin=l||["middle","center"],d.restore=!0);d.from=e.from||("show"===b?{height:0,width:0}:k);d.to={height:k.height*m,width:k.width*f,outerHeight:k.outerHeight*m,outerWidth:k.outerWidth*f};d.fade&&("show"===b&&(d.from.opacity=0,d.to.opacity=1),"hide"===b&&(d.from.opacity=
1,d.to.opacity=0));c.effect(d)};a.effects.effect.size=function(e,g){var c,d,b,f,h,l,k=a(this),m="position top bottom left right width height overflow opacity".split(" ");h="position top bottom left right overflow opacity".split(" ");var n=["width","height","overflow"],r=["fontSize"],q=["borderTopWidth","borderBottomWidth","paddingTop","paddingBottom"],u=["borderLeftWidth","borderRightWidth","paddingLeft","paddingRight"],t=a.effects.setMode(k,e.mode||"effect"),p=e.restore||"effect"!==t,v=e.scale||
"both",x=e.origin||["middle","center"],y=k.css("position"),w=p?m:h,z={height:0,width:0};"show"===t&&k.show();h={height:k.height(),width:k.width(),outerHeight:k.outerHeight(),outerWidth:k.outerWidth()};"toggle"===e.mode&&"show"===t?(k.from=e.to||z,k.to=e.from||h):(k.from=e.from||("show"===t?z:h),k.to=e.to||("hide"===t?z:h));b=k.from.height/h.height;f=k.from.width/h.width;c=k.to.height/h.height;d=k.to.width/h.width;if("box"===v||"both"===v)b!==c&&(w=w.concat(q),k.from=a.effects.setTransition(k,q,b,
k.from),k.to=a.effects.setTransition(k,q,c,k.to)),f!==d&&(w=w.concat(u),k.from=a.effects.setTransition(k,u,f,k.from),k.to=a.effects.setTransition(k,u,d,k.to));("content"===v||"both"===v)&&b!==c&&(w=w.concat(r).concat(n),k.from=a.effects.setTransition(k,r,b,k.from),k.to=a.effects.setTransition(k,r,c,k.to));a.effects.save(k,w);k.show();a.effects.createWrapper(k);k.css("overflow","hidden").css(k.from);x&&(l=a.effects.getBaseline(x,h),k.from.top=(h.outerHeight-k.outerHeight())*l.y,k.from.left=(h.outerWidth-
k.outerWidth())*l.x,k.to.top=(h.outerHeight-k.to.outerHeight)*l.y,k.to.left=(h.outerWidth-k.to.outerWidth)*l.x);k.css(k.from);if("content"===v||"both"===v)q=q.concat(["marginTop","marginBottom"]).concat(r),u=u.concat(["marginLeft","marginRight"]),n=m.concat(q).concat(u),k.find("*[width]").each(function(){var g=a(this),h=g.height(),l=g.width();p&&a.effects.save(g,n);g.from={height:h*b,width:l*f};g.to={height:h*c,width:l*d};b!==c&&(g.from=a.effects.setTransition(g,q,b,g.from),g.to=a.effects.setTransition(g,
q,c,g.to));f!==d&&(g.from=a.effects.setTransition(g,u,f,g.from),g.to=a.effects.setTransition(g,u,d,g.to));g.css(g.from);g.animate(g.to,e.duration,e.easing,function(){p&&a.effects.restore(g,n)})});k.animate(k.to,{queue:!1,duration:e.duration,easing:e.easing,complete:function(){0===k.to.opacity&&k.css("opacity",k.from.opacity);"hide"===t&&k.hide();a.effects.restore(k,w);p||("static"===y?k.css({position:"relative",top:k.to.top,left:k.to.left}):a.each(["top","left"],function(a,b){k.css(b,function(b,d){var c=
parseInt(d,10),f=a?k.to.left:k.to.top;return"auto"===d?f+"px":c+f+"px"})}));a.effects.removeWrapper(k);g()}})}})(jQuery);
(function(a,p){a.effects.effect.shake=function(e,g){var c=a(this),d="position top bottom left right height width".split(" "),b=a.effects.setMode(c,e.mode||"effect"),f=e.direction||"left",h=e.distance||20,l=e.times||3,k=2*l+1,m=Math.round(e.duration/k),n="up"===f||"down"===f?"top":"left",r="up"===f||"left"===f,f={},q={},u={},t=c.queue(),p=t.length;a.effects.save(c,d);c.show();a.effects.createWrapper(c);f[n]=(r?"-=":"+=")+h;q[n]=(r?"+=":"-=")+2*h;u[n]=(r?"-=":"+=")+2*h;c.animate(f,m,e.easing);for(h=
1;h<l;h++)c.animate(q,m,e.easing).animate(u,m,e.easing);c.animate(q,m,e.easing).animate(f,m/2,e.easing).queue(function(){"hide"===b&&c.hide();a.effects.restore(c,d);a.effects.removeWrapper(c);g()});1<p&&t.splice.apply(t,[1,0].concat(t.splice(p,k+1)));c.dequeue()}})(jQuery);
(function(a,p){a.effects.effect.slide=function(e,g){var c=a(this),d="position top bottom left right width height".split(" "),b=a.effects.setMode(c,e.mode||"show"),f="show"===b,h=e.direction||"left",l="up"===h||"down"===h?"top":"left",h="up"===h||"left"===h,k,m={};a.effects.save(c,d);c.show();k=e.distance||c["top"===l?"outerHeight":"outerWidth"](!0);a.effects.createWrapper(c).css({overflow:"hidden"});f&&c.css(l,h?isNaN(k)?"-"+k:-k:k);m[l]=(f?h?"+=":"-=":h?"-=":"+=")+k;c.animate(m,{queue:!1,duration:e.duration,
easing:e.easing,complete:function(){"hide"===b&&c.hide();a.effects.restore(c,d);a.effects.removeWrapper(c);g()}})}})(jQuery);
(function(a,p){a.effects.effect.transfer=function(e,g){var c=a(this),d=a(e.to),b="fixed"===d.css("position"),f=a("body"),h=b?f.scrollTop():0,f=b?f.scrollLeft():0,l=d.offset(),d={top:l.top-h,left:l.left-f,height:d.innerHeight(),width:d.innerWidth()},l=c.offset(),k=a('<div class="ui-effects-transfer"></div>').appendTo(document.body).addClass(e.className).css({top:l.top-h,left:l.left-f,height:c.innerHeight(),width:c.innerWidth(),position:b?"fixed":"absolute"}).animate(d,e.duration,e.easing,function(){k.remove();
g()})}})(jQuery);
(function(a,p){var e=!1;a.widget("ui.menu",{version:"1.9.1",defaultElement:"<ul>",delay:300,options:{icons:{submenu:"ui-icon-carat-1-e"},menus:"ul",position:{my:"left top",at:"right top"},role:"menu",blur:null,focus:null,select:null},_create:function(){this.activeMenu=this.element;this.element.uniqueId().addClass("ui-menu ui-widget ui-widget-content ui-corner-all").toggleClass("ui-menu-icons",!!this.element.find(".ui-icon").length).attr({role:this.options.role,tabIndex:0}).bind("click"+this.eventNamespace,
a.proxy(function(a){this.options.disabled&&a.preventDefault()},this));this.options.disabled&&this.element.addClass("ui-state-disabled").attr("aria-disabled","true");this._on({"mousedown .ui-menu-item > a":function(a){a.preventDefault()},"click .ui-state-disabled > a":function(a){a.preventDefault()},"click .ui-menu-item:has(a)":function(g){var c=a(g.target).closest(".ui-menu-item");!e&&c.not(".ui-state-disabled").length&&(e=!0,this.select(g),c.has(".ui-menu").length?this.expand(g):this.element.is(":focus")||
(this.element.trigger("focus",[!0]),this.active&&1===this.active.parents(".ui-menu").length&&clearTimeout(this.timer)))},"mouseenter .ui-menu-item":function(e){var c=a(e.currentTarget);c.siblings().children(".ui-state-active").removeClass("ui-state-active");this.focus(e,c)},mouseleave:"collapseAll","mouseleave .ui-menu":"collapseAll",focus:function(a,c){var d=this.active||this.element.children(".ui-menu-item").eq(0);c||this.focus(a,d)},blur:function(e){this._delay(function(){a.contains(this.element[0],
this.document[0].activeElement)||this.collapseAll(e)})},keydown:"_keydown"});this.refresh();this._on(this.document,{click:function(g){a(g.target).closest(".ui-menu").length||this.collapseAll(g);e=!1}})},_destroy:function(){this.element.removeAttr("aria-activedescendant").find(".ui-menu").andSelf().removeClass("ui-menu ui-widget ui-widget-content ui-corner-all ui-menu-icons").removeAttr("role").removeAttr("tabIndex").removeAttr("aria-labelledby").removeAttr("aria-expanded").removeAttr("aria-hidden").removeAttr("aria-disabled").removeUniqueId().show();
this.element.find(".ui-menu-item").removeClass("ui-menu-item").removeAttr("role").removeAttr("aria-disabled").children("a").removeUniqueId().removeClass("ui-corner-all ui-state-hover").removeAttr("tabIndex").removeAttr("role").removeAttr("aria-haspopup").children().each(function(){var e=a(this);e.data("ui-menu-submenu-carat")&&e.remove()});this.element.find(".ui-menu-divider").removeClass("ui-menu-divider ui-widget-content")},_keydown:function(e){function c(a){return a.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,
"\\$&")}var d,b,f,h,l=!0;switch(e.keyCode){case a.ui.keyCode.PAGE_UP:this.previousPage(e);break;case a.ui.keyCode.PAGE_DOWN:this.nextPage(e);break;case a.ui.keyCode.HOME:this._move("first","first",e);break;case a.ui.keyCode.END:this._move("last","last",e);break;case a.ui.keyCode.UP:this.previous(e);break;case a.ui.keyCode.DOWN:this.next(e);break;case a.ui.keyCode.LEFT:this.collapse(e);break;case a.ui.keyCode.RIGHT:this.active&&!this.active.is(".ui-state-disabled")&&this.expand(e);break;case a.ui.keyCode.ENTER:case a.ui.keyCode.SPACE:this._activate(e);
break;case a.ui.keyCode.ESCAPE:this.collapse(e);break;default:l=!1,d=this.previousFilter||"",b=String.fromCharCode(e.keyCode),f=!1,clearTimeout(this.filterTimer),b===d?f=!0:b=d+b,h=new RegExp("^"+c(b),"i"),d=this.activeMenu.children(".ui-menu-item").filter(function(){return h.test(a(this).children("a").text())}),d=f&&-1!==d.index(this.active.next())?this.active.nextAll(".ui-menu-item"):d,d.length||(b=String.fromCharCode(e.keyCode),h=new RegExp("^"+c(b),"i"),d=this.activeMenu.children(".ui-menu-item").filter(function(){return h.test(a(this).children("a").text())})),
d.length?(this.focus(e,d),1<d.length?(this.previousFilter=b,this.filterTimer=this._delay(function(){delete this.previousFilter},1E3)):delete this.previousFilter):delete this.previousFilter}l&&e.preventDefault()},_activate:function(a){this.active.is(".ui-state-disabled")||(this.active.children("a[aria-haspopup='true']").length?this.expand(a):this.select(a))},refresh:function(){var e,c=this.options.icons.submenu,d=this.element.find(this.options.menus+":not(.ui-menu)").addClass("ui-menu ui-widget ui-widget-content ui-corner-all").hide().attr({role:this.options.role,
"aria-hidden":"true","aria-expanded":"false"});e=d.add(this.element);e.children(":not(.ui-menu-item):has(a)").addClass("ui-menu-item").attr("role","presentation").children("a").uniqueId().addClass("ui-corner-all").attr({tabIndex:-1,role:this._itemRole()});e.children(":not(.ui-menu-item)").each(function(){var b=a(this);/[^\---\s]/.test(b.text())||b.addClass("ui-widget-content ui-menu-divider")});e.children(".ui-state-disabled").attr("aria-disabled","true");d.each(function(){var b=a(this),d=b.prev("a"),
e=a("<span>").addClass("ui-menu-icon ui-icon "+c).data("ui-menu-submenu-carat",!0);d.attr("aria-haspopup","true").prepend(e);b.attr("aria-labelledby",d.attr("id"))});this.active&&!a.contains(this.element[0],this.active[0])&&this.blur()},_itemRole:function(){return{menu:"menuitem",listbox:"option"}[this.options.role]},focus:function(a,c){var d;this.blur(a,a&&"focus"===a.type);this._scrollIntoView(c);this.active=c.first();d=this.active.children("a").addClass("ui-state-focus");this.options.role&&this.element.attr("aria-activedescendant",
d.attr("id"));this.active.parent().closest(".ui-menu-item").children("a:first").addClass("ui-state-active");a&&"keydown"===a.type?this._close():this.timer=this._delay(function(){this._close()},this.delay);d=c.children(".ui-menu");d.length&&/^mouse/.test(a.type)&&this._startOpening(d);this.activeMenu=c.parent();this._trigger("focus",a,{item:c})},_scrollIntoView:function(e){var c,d,b,f,h,l;this._hasScroll()&&(c=parseFloat(a.css(this.activeMenu[0],"borderTopWidth"))||0,d=parseFloat(a.css(this.activeMenu[0],
"paddingTop"))||0,b=e.offset().top-this.activeMenu.offset().top-c-d,f=this.activeMenu.scrollTop(),h=this.activeMenu.height(),l=e.height(),0>b?this.activeMenu.scrollTop(f+b):b+l>h&&this.activeMenu.scrollTop(f+b-h+l))},blur:function(a,c){c||clearTimeout(this.timer);this.active&&(this.active.children("a").removeClass("ui-state-focus"),this.active=null,this._trigger("blur",a,{item:this.active}))},_startOpening:function(a){clearTimeout(this.timer);"true"===a.attr("aria-hidden")&&(this.timer=this._delay(function(){this._close();
this._open(a)},this.delay))},_open:function(e){var c=a.extend({of:this.active},this.options.position);clearTimeout(this.timer);this.element.find(".ui-menu").not(e.parents(".ui-menu")).hide().attr("aria-hidden","true");e.show().removeAttr("aria-hidden").attr("aria-expanded","true").position(c)},collapseAll:function(e,c){clearTimeout(this.timer);this.timer=this._delay(function(){var d=c?this.element:a(e&&e.target).closest(this.element.find(".ui-menu"));d.length||(d=this.element);this._close(d);this.blur(e);
this.activeMenu=d},this.delay)},_close:function(a){a||(a=this.active?this.active.parent():this.element);a.find(".ui-menu").hide().attr("aria-hidden","true").attr("aria-expanded","false").end().find("a.ui-state-active").removeClass("ui-state-active")},collapse:function(a){var c=this.active&&this.active.parent().closest(".ui-menu-item",this.element);c&&c.length&&(this._close(),this.focus(a,c))},expand:function(a){var c=this.active&&this.active.children(".ui-menu ").children(".ui-menu-item").first();
c&&c.length&&(this._open(c.parent()),this._delay(function(){this.focus(a,c)}))},next:function(a){this._move("next","first",a)},previous:function(a){this._move("prev","last",a)},isFirstItem:function(){return this.active&&!this.active.prevAll(".ui-menu-item").length},isLastItem:function(){return this.active&&!this.active.nextAll(".ui-menu-item").length},_move:function(a,c,d){var b;this.active&&("first"===a||"last"===a?b=this.active["first"===a?"prevAll":"nextAll"](".ui-menu-item").eq(-1):b=this.active[a+
"All"](".ui-menu-item").eq(0));b&&b.length&&this.active||(b=this.activeMenu.children(".ui-menu-item")[c]());this.focus(d,b)},nextPage:function(e){var c,d,b;this.active?this.isLastItem()||(this._hasScroll()?(d=this.active.offset().top,b=this.element.height(),this.active.nextAll(".ui-menu-item").each(function(){return c=a(this),0>c.offset().top-d-b}),this.focus(e,c)):this.focus(e,this.activeMenu.children(".ui-menu-item")[this.active?"last":"first"]())):this.next(e)},previousPage:function(e){var c,d,
b;this.active?this.isFirstItem()||(this._hasScroll()?(d=this.active.offset().top,b=this.element.height(),this.active.prevAll(".ui-menu-item").each(function(){return c=a(this),0<c.offset().top-d+b}),this.focus(e,c)):this.focus(e,this.activeMenu.children(".ui-menu-item").first())):this.next(e)},_hasScroll:function(){return this.element.outerHeight()<this.element.prop("scrollHeight")},select:function(e){this.active=this.active||a(e.target).closest(".ui-menu-item");var c={item:this.active};this.active.has(".ui-menu").length||
this.collapseAll(e,!0);this._trigger("select",e,c)}})})(jQuery);
(function(a,p){function e(a,b,d){return[parseInt(a[0],10)*(m.test(a[0])?b/100:1),parseInt(a[1],10)*(m.test(a[1])?d/100:1)]}a.ui=a.ui||{};var g,c=Math.max,d=Math.abs,b=Math.round,f=/left|center|right/,h=/top|center|bottom/,l=/[\+\-]\d+%?/,k=/^\w+/,m=/%$/,n=a.fn.position;a.position={scrollbarWidth:function(){if(g!==p)return g;var b,d,c=a("<div style='display:block;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"),f=c.children()[0];return a("body").append(c),
b=f.offsetWidth,c.css("overflow","scroll"),d=f.offsetWidth,b===d&&(d=c[0].clientWidth),c.remove(),g=b-d},getScrollInfo:function(b){var d=b.isWindow?"":b.element.css("overflow-x"),c=b.isWindow?"":b.element.css("overflow-y"),c="scroll"===c||"auto"===c&&b.height<b.element[0].scrollHeight;return{width:"scroll"===d||"auto"===d&&b.width<b.element[0].scrollWidth?a.position.scrollbarWidth():0,height:c?a.position.scrollbarWidth():0}},getWithinInfo:function(b){b=a(b||window);var d=a.isWindow(b[0]);return{element:b,
isWindow:d,offset:b.offset()||{left:0,top:0},scrollLeft:b.scrollLeft(),scrollTop:b.scrollTop(),width:d?b.width():b.outerWidth(),height:d?b.height():b.outerHeight()}}};a.fn.position=function(g){if(!g||!g.of)return n.apply(this,arguments);g=a.extend({},g);var m,u,t,p,v,x=a(g.of),y=a.position.getWithinInfo(g.within),w=a.position.getScrollInfo(y),z=x[0],D=(g.collision||"flip").split(" "),E={};return 9===z.nodeType?(u=x.width(),t=x.height(),p={top:0,left:0}):a.isWindow(z)?(u=x.width(),t=x.height(),p={top:x.scrollTop(),
left:x.scrollLeft()}):z.preventDefault?(g.at="left top",u=t=0,p={top:z.pageY,left:z.pageX}):(u=x.outerWidth(),t=x.outerHeight(),p=x.offset()),v=a.extend({},p),a.each(["my","at"],function(){var a=(g[this]||"").split(" "),b,d;1===a.length&&(a=f.test(a[0])?a.concat(["center"]):h.test(a[0])?["center"].concat(a):["center","center"]);a[0]=f.test(a[0])?a[0]:"center";a[1]=h.test(a[1])?a[1]:"center";b=l.exec(a[0]);d=l.exec(a[1]);E[this]=[b?b[0]:0,d?d[0]:0];g[this]=[k.exec(a[0])[0],k.exec(a[1])[0]]}),1===D.length&&
(D[1]=D[0]),"right"===g.at[0]?v.left+=u:"center"===g.at[0]&&(v.left+=u/2),"bottom"===g.at[1]?v.top+=t:"center"===g.at[1]&&(v.top+=t/2),m=e(E.at,u,t),v.left+=m[0],v.top+=m[1],this.each(function(){var f,h,l=a(this),k=l.outerWidth(),n=l.outerHeight(),z=parseInt(a.css(this,"marginLeft"),10)||0,J=parseInt(a.css(this,"marginTop"),10)||0,M=k+z+(parseInt(a.css(this,"marginRight"),10)||0)+w.width,K=n+J+(parseInt(a.css(this,"marginBottom"),10)||0)+w.height,A=a.extend({},v),B=e(E.my,l.outerWidth(),l.outerHeight());
"right"===g.my[0]?A.left-=k:"center"===g.my[0]&&(A.left-=k/2);"bottom"===g.my[1]?A.top-=n:"center"===g.my[1]&&(A.top-=n/2);A.left+=B[0];A.top+=B[1];a.support.offsetFractions||(A.left=b(A.left),A.top=b(A.top));f={marginLeft:z,marginTop:J};a.each(["left","top"],function(b,d){a.ui.position[D[b]]&&a.ui.position[D[b]][d](A,{targetWidth:u,targetHeight:t,elemWidth:k,elemHeight:n,collisionPosition:f,collisionWidth:M,collisionHeight:K,offset:[m[0]+B[0],m[1]+B[1]],my:g.my,at:g.at,within:y,elem:l})});a.fn.bgiframe&&
l.bgiframe();g.using&&(h=function(a){var b=p.left-A.left,f=b+u-k,e=p.top-A.top,h=e+t-n,m={target:{element:x,left:p.left,top:p.top,width:u,height:t},element:{element:l,left:A.left,top:A.top,width:k,height:n},horizontal:0>f?"left":0<b?"right":"center",vertical:0>h?"top":0<e?"bottom":"middle"};u<k&&d(b+f)<u&&(m.horizontal="center");t<n&&d(e+h)<t&&(m.vertical="middle");c(d(b),d(f))>c(d(e),d(h))?m.important="horizontal":m.important="vertical";g.using.call(this,a,m)});l.offset(a.extend(A,{using:h}))})};
a.ui.position={fit:{left:function(a,b){var d=b.within,f=d.isWindow?d.scrollLeft:d.offset.left,d=d.width,e=a.left-b.collisionPosition.marginLeft,g=f-e,h=e+b.collisionWidth-d-f,l;b.collisionWidth>d?0<g&&0>=h?(l=a.left+g+b.collisionWidth-d-f,a.left+=g-l):0<h&&0>=g?a.left=f:g>h?a.left=f+d-b.collisionWidth:a.left=f:0<g?a.left+=g:0<h?a.left-=h:a.left=c(a.left-e,a.left)},top:function(a,b){var d=b.within,d=d.isWindow?d.scrollTop:d.offset.top,f=b.within.height,e=a.top-b.collisionPosition.marginTop,g=d-e,h=
e+b.collisionHeight-f-d,l;b.collisionHeight>f?0<g&&0>=h?(l=a.top+g+b.collisionHeight-f-d,a.top+=g-l):0<h&&0>=g?a.top=d:g>h?a.top=d+f-b.collisionHeight:a.top=d:0<g?a.top+=g:0<h?a.top-=h:a.top=c(a.top-e,a.top)}},flip:{left:function(a,b){var c=b.within,f=c.offset.left+c.scrollLeft,e=c.width,g=c.isWindow?c.scrollLeft:c.offset.left,h=a.left-b.collisionPosition.marginLeft,c=h-g,l=h+b.collisionWidth-e-g,h="left"===b.my[0]?-b.elemWidth:"right"===b.my[0]?b.elemWidth:0,k="left"===b.at[0]?b.targetWidth:"right"===
b.at[0]?-b.targetWidth:0,m=-2*b.offset[0];if(0>c){if(f=a.left+h+k+m+b.collisionWidth-e-f,0>f||f<d(c))a.left+=h+k+m}else 0<l&&(f=a.left-b.collisionPosition.marginLeft+h+k+m-g,0<f||d(f)<l)&&(a.left+=h+k+m)},top:function(a,b){var c=b.within,f=c.offset.top+c.scrollTop,e=c.height,c=c.isWindow?c.scrollTop:c.offset.top,g=a.top-b.collisionPosition.marginTop,h=g-c,g=g+b.collisionHeight-e-c,l="top"===b.my[1]?-b.elemHeight:"bottom"===b.my[1]?b.elemHeight:0,k="top"===b.at[1]?b.targetHeight:"bottom"===b.at[1]?
-b.targetHeight:0,m=-2*b.offset[1],n,p;0>h?(p=a.top+l+k+m+b.collisionHeight-e-f,a.top+l+k+m>h&&(0>p||p<d(h))&&(a.top+=l+k+m)):0<g&&(n=a.top-b.collisionPosition.marginTop+l+k+m-c,a.top+l+k+m>g&&(0<n||d(n)<g)&&(a.top+=l+k+m))}},flipfit:{left:function(){a.ui.position.flip.left.apply(this,arguments);a.ui.position.fit.left.apply(this,arguments)},top:function(){a.ui.position.flip.top.apply(this,arguments);a.ui.position.fit.top.apply(this,arguments)}}};(function(){var b,d,c,f,e=document.getElementsByTagName("body")[0];
c=document.createElement("div");b=document.createElement(e?"div":"body");d={visibility:"hidden",width:0,height:0,border:0,margin:0,background:"none"};e&&a.extend(d,{position:"absolute",left:"-1000px",top:"-1000px"});for(f in d)b.style[f]=d[f];b.appendChild(c);d=e||document.documentElement;d.insertBefore(b,d.firstChild);c.style.cssText="position: absolute; left: 10.7432222px;";c=a(c).offset().left;a.support.offsetFractions=10<c&&11>c;b.innerHTML="";d.removeChild(b)})();!1!==a.uiBackCompat&&function(a){var b=
a.fn.position;a.fn.position=function(d){if(!d||!d.offset)return b.call(this,d);var c=d.offset.split(" "),f=d.at.split(" ");return 1===c.length&&(c[1]=c[0]),/^\d/.test(c[0])&&(c[0]="+"+c[0]),/^\d/.test(c[1])&&(c[1]="+"+c[1]),1===f.length&&(/left|center|right/.test(f[0])?f[1]="center":(f[1]=f[0],f[0]="center")),b.call(this,a.extend(d,{at:f[0]+c[0]+" "+f[1]+c[1],offset:p}))}}(jQuery)})(jQuery);
(function(a,p){a.widget("ui.progressbar",{version:"1.9.1",options:{value:0,max:100},min:0,_create:function(){this.element.addClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").attr({role:"progressbar","aria-valuemin":this.min,"aria-valuemax":this.options.max,"aria-valuenow":this._value()});this.valueDiv=a("<div class='ui-progressbar-value ui-widget-header ui-corner-left'></div>").appendTo(this.element);this.oldValue=this._value();this._refreshValue()},_destroy:function(){this.element.removeClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").removeAttr("role").removeAttr("aria-valuemin").removeAttr("aria-valuemax").removeAttr("aria-valuenow");
this.valueDiv.remove()},value:function(a){return a===p?this._value():(this._setOption("value",a),this)},_setOption:function(a,g){"value"===a&&(this.options.value=g,this._refreshValue(),this._value()===this.options.max&&this._trigger("complete"));this._super(a,g)},_value:function(){var a=this.options.value;return"number"!=typeof a&&(a=0),Math.min(this.options.max,Math.max(this.min,a))},_percentage:function(){return 100*this._value()/this.options.max},_refreshValue:function(){var a=this.value(),g=this._percentage();
this.oldValue!==a&&(this.oldValue=a,this._trigger("change"));this.valueDiv.toggle(a>this.min).toggleClass("ui-corner-right",a===this.options.max).width(g.toFixed(0)+"%");this.element.attr("aria-valuenow",a)}})})(jQuery);
(function(a,p){a.widget("ui.slider",a.ui.mouse,{version:"1.9.1",widgetEventPrefix:"slide",options:{animate:!1,distance:0,max:100,min:0,orientation:"horizontal",range:!1,step:1,value:0,values:null},_create:function(){var e,g,c=this.options,d=this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),b=[];this._mouseSliding=this._keySliding=!1;this._animateOff=!0;this._handleIndex=null;this._detectOrientation();this._mouseInit();this.element.addClass("ui-slider ui-slider-"+this.orientation+
" ui-widget ui-widget-content ui-corner-all"+(c.disabled?" ui-slider-disabled ui-disabled":""));this.range=a([]);c.range&&(!0===c.range&&(c.values||(c.values=[this._valueMin(),this._valueMin()]),c.values.length&&2!==c.values.length&&(c.values=[c.values[0],c.values[0]])),this.range=a("<div></div>").appendTo(this.element).addClass("ui-slider-range ui-widget-header"+("min"===c.range||"max"===c.range?" ui-slider-range-"+c.range:"")));g=c.values&&c.values.length||1;for(e=d.length;e<g;e++)b.push("<a class='ui-slider-handle ui-state-default ui-corner-all' href='#'></a>");
this.handles=d.add(a(b.join("")).appendTo(this.element));this.handle=this.handles.eq(0);this.handles.add(this.range).filter("a").click(function(a){a.preventDefault()}).mouseenter(function(){c.disabled||a(this).addClass("ui-state-hover")}).mouseleave(function(){a(this).removeClass("ui-state-hover")}).focus(function(){c.disabled?a(this).blur():(a(".ui-slider .ui-state-focus").removeClass("ui-state-focus"),a(this).addClass("ui-state-focus"))}).blur(function(){a(this).removeClass("ui-state-focus")});
this.handles.each(function(b){a(this).data("ui-slider-handle-index",b)});this._on(this.handles,{keydown:function(b){var d,c,e,g=a(b.target).data("ui-slider-handle-index");switch(b.keyCode){case a.ui.keyCode.HOME:case a.ui.keyCode.END:case a.ui.keyCode.PAGE_UP:case a.ui.keyCode.PAGE_DOWN:case a.ui.keyCode.UP:case a.ui.keyCode.RIGHT:case a.ui.keyCode.DOWN:case a.ui.keyCode.LEFT:if(b.preventDefault(),!this._keySliding&&(this._keySliding=!0,a(b.target).addClass("ui-state-active"),d=this._start(b,g),!1===
d))return}d=this.options.step;this.options.values&&this.options.values.length?c=e=this.values(g):c=e=this.value();switch(b.keyCode){case a.ui.keyCode.HOME:e=this._valueMin();break;case a.ui.keyCode.END:e=this._valueMax();break;case a.ui.keyCode.PAGE_UP:e=this._trimAlignValue(c+(this._valueMax()-this._valueMin())/5);break;case a.ui.keyCode.PAGE_DOWN:e=this._trimAlignValue(c-(this._valueMax()-this._valueMin())/5);break;case a.ui.keyCode.UP:case a.ui.keyCode.RIGHT:if(c===this._valueMax())return;e=this._trimAlignValue(c+
d);break;case a.ui.keyCode.DOWN:case a.ui.keyCode.LEFT:if(c===this._valueMin())return;e=this._trimAlignValue(c-d)}this._slide(b,g,e)},keyup:function(b){var d=a(b.target).data("ui-slider-handle-index");this._keySliding&&(this._keySliding=!1,this._stop(b,d),this._change(b,d),a(b.target).removeClass("ui-state-active"))}});this._refreshValue();this._animateOff=!1},_destroy:function(){this.handles.remove();this.range.remove();this.element.removeClass("ui-slider ui-slider-horizontal ui-slider-vertical ui-slider-disabled ui-widget ui-widget-content ui-corner-all");
this._mouseDestroy()},_mouseCapture:function(e){var g,c,d,b,f,h,l,k,m=this,n=this.options;return n.disabled?!1:(this.elementSize={width:this.element.outerWidth(),height:this.element.outerHeight()},this.elementOffset=this.element.offset(),g={x:e.pageX,y:e.pageY},c=this._normValueFromMouse(g),d=this._valueMax()-this._valueMin()+1,this.handles.each(function(e){var g=Math.abs(c-m.values(e));d>g&&(d=g,b=a(this),f=e)}),!0===n.range&&this.values(1)===n.min&&(f+=1,b=a(this.handles[f])),h=this._start(e,f),
!1===h?!1:(this._mouseSliding=!0,this._handleIndex=f,b.addClass("ui-state-active").focus(),l=b.offset(),k=!a(e.target).parents().andSelf().is(".ui-slider-handle"),this._clickOffset=k?{left:0,top:0}:{left:e.pageX-l.left-b.width()/2,top:e.pageY-l.top-b.height()/2-(parseInt(b.css("borderTopWidth"),10)||0)-(parseInt(b.css("borderBottomWidth"),10)||0)+(parseInt(b.css("marginTop"),10)||0)},this.handles.hasClass("ui-state-hover")||this._slide(e,f,c),this._animateOff=!0,!0))},_mouseStart:function(){return!0},
_mouseDrag:function(a){var g=this._normValueFromMouse({x:a.pageX,y:a.pageY});return this._slide(a,this._handleIndex,g),!1},_mouseStop:function(a){return this.handles.removeClass("ui-state-active"),this._mouseSliding=!1,this._stop(a,this._handleIndex),this._change(a,this._handleIndex),this._handleIndex=null,this._clickOffset=null,this._animateOff=!1,!1},_detectOrientation:function(){this.orientation="vertical"===this.options.orientation?"vertical":"horizontal"},_normValueFromMouse:function(a){var g,
c,d,b,f;return"horizontal"===this.orientation?(g=this.elementSize.width,c=a.x-this.elementOffset.left-(this._clickOffset?this._clickOffset.left:0)):(g=this.elementSize.height,c=a.y-this.elementOffset.top-(this._clickOffset?this._clickOffset.top:0)),d=c/g,1<d&&(d=1),0>d&&(d=0),"vertical"===this.orientation&&(d=1-d),b=this._valueMax()-this._valueMin(),f=this._valueMin()+d*b,this._trimAlignValue(f)},_start:function(a,g){var c={handle:this.handles[g],value:this.value()};return this.options.values&&this.options.values.length&&
(c.value=this.values(g),c.values=this.values()),this._trigger("start",a,c)},_slide:function(a,g,c){var d,b,f;this.options.values&&this.options.values.length?(d=this.values(g?0:1),2===this.options.values.length&&!0===this.options.range&&(0===g&&c>d||1===g&&c<d)&&(c=d),c!==this.values(g)&&(b=this.values(),b[g]=c,f=this._trigger("slide",a,{handle:this.handles[g],value:c,values:b}),this.values(g?0:1),!1!==f&&this.values(g,c,!0))):c!==this.value()&&(f=this._trigger("slide",a,{handle:this.handles[g],value:c}),
!1!==f&&this.value(c))},_stop:function(a,g){var c={handle:this.handles[g],value:this.value()};this.options.values&&this.options.values.length&&(c.value=this.values(g),c.values=this.values());this._trigger("stop",a,c)},_change:function(a,g){if(!this._keySliding&&!this._mouseSliding){var c={handle:this.handles[g],value:this.value()};this.options.values&&this.options.values.length&&(c.value=this.values(g),c.values=this.values());this._trigger("change",a,c)}},value:function(a){if(arguments.length)this.options.value=
this._trimAlignValue(a),this._refreshValue(),this._change(null,0);else return this._value()},values:function(e,g){var c,d,b;if(1<arguments.length)this.options.values[e]=this._trimAlignValue(g),this._refreshValue(),this._change(null,e);else{if(!arguments.length)return this._values();if(!a.isArray(arguments[0]))return this.options.values&&this.options.values.length?this._values(e):this.value();c=this.options.values;d=arguments[0];for(b=0;b<c.length;b+=1)c[b]=this._trimAlignValue(d[b]),this._change(null,
b);this._refreshValue()}},_setOption:function(e,g){var c,d=0;a.isArray(this.options.values)&&(d=this.options.values.length);a.Widget.prototype._setOption.apply(this,arguments);switch(e){case "disabled":g?(this.handles.filter(".ui-state-focus").blur(),this.handles.removeClass("ui-state-hover"),this.handles.prop("disabled",!0),this.element.addClass("ui-disabled")):(this.handles.prop("disabled",!1),this.element.removeClass("ui-disabled"));break;case "orientation":this._detectOrientation();this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-"+
this.orientation);this._refreshValue();break;case "value":this._animateOff=!0;this._refreshValue();this._change(null,0);this._animateOff=!1;break;case "values":this._animateOff=!0;this._refreshValue();for(c=0;c<d;c+=1)this._change(null,c);this._animateOff=!1;break;case "min":case "max":this._animateOff=!0,this._refreshValue(),this._animateOff=!1}},_value:function(){var a=this.options.value;return a=this._trimAlignValue(a),a},_values:function(a){var g,c;if(arguments.length)return g=this.options.values[a],
g=this._trimAlignValue(g),g;g=this.options.values.slice();for(c=0;c<g.length;c+=1)g[c]=this._trimAlignValue(g[c]);return g},_trimAlignValue:function(a){if(a<=this._valueMin())return this._valueMin();if(a>=this._valueMax())return this._valueMax();var g=0<this.options.step?this.options.step:1,c=(a-this._valueMin())%g;a-=c;return 2*Math.abs(c)>=g&&(a+=0<c?g:-g),parseFloat(a.toFixed(5))},_valueMin:function(){return this.options.min},_valueMax:function(){return this.options.max},_refreshValue:function(){var e,
g,c,d,b,f=this.options.range,h=this.options,l=this,k=this._animateOff?!1:h.animate,m={};this.options.values&&this.options.values.length?this.handles.each(function(b){g=(l.values(b)-l._valueMin())/(l._valueMax()-l._valueMin())*100;m["horizontal"===l.orientation?"left":"bottom"]=g+"%";a(this).stop(1,1)[k?"animate":"css"](m,h.animate);!0===l.options.range&&("horizontal"===l.orientation?(0===b&&l.range.stop(1,1)[k?"animate":"css"]({left:g+"%"},h.animate),1===b&&l.range[k?"animate":"css"]({width:g-e+"%"},
{queue:!1,duration:h.animate})):(0===b&&l.range.stop(1,1)[k?"animate":"css"]({bottom:g+"%"},h.animate),1===b&&l.range[k?"animate":"css"]({height:g-e+"%"},{queue:!1,duration:h.animate})));e=g}):(c=this.value(),d=this._valueMin(),b=this._valueMax(),g=b!==d?(c-d)/(b-d)*100:0,m["horizontal"===this.orientation?"left":"bottom"]=g+"%",this.handle.stop(1,1)[k?"animate":"css"](m,h.animate),"min"===f&&"horizontal"===this.orientation&&this.range.stop(1,1)[k?"animate":"css"]({width:g+"%"},h.animate),"max"===
f&&"horizontal"===this.orientation&&this.range[k?"animate":"css"]({width:100-g+"%"},{queue:!1,duration:h.animate}),"min"===f&&"vertical"===this.orientation&&this.range.stop(1,1)[k?"animate":"css"]({height:g+"%"},h.animate),"max"===f&&"vertical"===this.orientation&&this.range[k?"animate":"css"]({height:100-g+"%"},{queue:!1,duration:h.animate}))}})})(jQuery);
(function(a){function p(a){return function(){var g=this.element.val();a.apply(this,arguments);this._refresh();g!==this.element.val()&&this._trigger("change")}}a.widget("ui.spinner",{version:"1.9.1",defaultElement:"<input>",widgetEventPrefix:"spin",options:{culture:null,icons:{down:"ui-icon-triangle-1-s",up:"ui-icon-triangle-1-n"},incremental:!0,max:null,min:null,numberFormat:null,page:10,step:1,change:null,spin:null,start:null,stop:null},_create:function(){this._setOption("max",this.options.max);
this._setOption("min",this.options.min);this._setOption("step",this.options.step);this._value(this.element.val(),!0);this._draw();this._on(this._events);this._refresh();this._on(this.window,{beforeunload:function(){this.element.removeAttr("autocomplete")}})},_getCreateOptions:function(){var e={},g=this.element;return a.each(["min","max","step"],function(a,d){var b=g.attr(d);void 0!==b&&b.length&&(e[d]=b)}),e},_events:{keydown:function(a){this._start(a)&&this._keydown(a)&&a.preventDefault()},keyup:"_stop",
focus:function(){this.previous=this.element.val()},blur:function(a){this.cancelBlur?delete this.cancelBlur:(this._refresh(),this.previous!==this.element.val()&&this._trigger("change",a))},mousewheel:function(a,g){if(g){if(!this.spinning&&!this._start(a))return!1;this._spin((0<g?1:-1)*this.options.step,a);clearTimeout(this.mousewheelTimer);this.mousewheelTimer=this._delay(function(){this.spinning&&this._stop(a)},100);a.preventDefault()}},"mousedown .ui-spinner-button":function(e){function g(){this.element[0]===
this.document[0].activeElement||(this.element.focus(),this.previous=c,this._delay(function(){this.previous=c}))}var c;c=this.element[0]===this.document[0].activeElement?this.previous:this.element.val();e.preventDefault();g.call(this);this.cancelBlur=!0;this._delay(function(){delete this.cancelBlur;g.call(this)});!1!==this._start(e)&&this._repeat(null,a(e.currentTarget).hasClass("ui-spinner-up")?1:-1,e)},"mouseup .ui-spinner-button":"_stop","mouseenter .ui-spinner-button":function(e){if(a(e.currentTarget).hasClass("ui-state-active")){if(!1===
this._start(e))return!1;this._repeat(null,a(e.currentTarget).hasClass("ui-spinner-up")?1:-1,e)}},"mouseleave .ui-spinner-button":"_stop"},_draw:function(){var a=this.uiSpinner=this.element.addClass("ui-spinner-input").attr("autocomplete","off").wrap(this._uiSpinnerHtml()).parent().append(this._buttonHtml());this.element.attr("role","spinbutton");this.buttons=a.find(".ui-spinner-button").attr("tabIndex",-1).button().removeClass("ui-corner-all");this.buttons.height()>Math.ceil(.5*a.height())&&0<a.height()&&
a.height(a.height());this.options.disabled&&this.disable()},_keydown:function(e){var g=this.options,c=a.ui.keyCode;switch(e.keyCode){case c.UP:return this._repeat(null,1,e),!0;case c.DOWN:return this._repeat(null,-1,e),!0;case c.PAGE_UP:return this._repeat(null,g.page,e),!0;case c.PAGE_DOWN:return this._repeat(null,-g.page,e),!0}return!1},_uiSpinnerHtml:function(){return"<span class='ui-spinner ui-widget ui-widget-content ui-corner-all'></span>"},_buttonHtml:function(){return"<a class='ui-spinner-button ui-spinner-up ui-corner-tr'><span class='ui-icon "+
this.options.icons.up+"'>&#9650;</span></a><a class='ui-spinner-button ui-spinner-down ui-corner-br'><span class='ui-icon "+this.options.icons.down+"'>&#9660;</span></a>"},_start:function(a){return this.spinning||!1!==this._trigger("start",a)?(this.counter||(this.counter=1),this.spinning=!0,!0):!1},_repeat:function(a,g,c){a=a||500;clearTimeout(this.timer);this.timer=this._delay(function(){this._repeat(40,g,c)},a);this._spin(g*this.options.step,c)},_spin:function(a,g){var c=this.value()||0;this.counter||
(this.counter=1);c=this._adjustValue(c+a*this._increment(this.counter));this.spinning&&!1===this._trigger("spin",g,{value:c})||(this._value(c),this.counter++)},_increment:function(e){var g=this.options.incremental;return g?a.isFunction(g)?g(e):Math.floor(e*e*e/5E4-e*e/500+17*e/200+1):1},_precision:function(){var a=this._precisionOf(this.options.step);return null!==this.options.min&&(a=Math.max(a,this._precisionOf(this.options.min))),a},_precisionOf:function(a){a=a.toString();var g=a.indexOf(".");
return-1===g?0:a.length-g-1},_adjustValue:function(a){var g,c,d=this.options;return g=null!==d.min?d.min:0,c=a-g,c=Math.round(c/d.step)*d.step,a=g+c,a=parseFloat(a.toFixed(this._precision())),null!==d.max&&a>d.max?d.max:null!==d.min&&a<d.min?d.min:a},_stop:function(a){this.spinning&&(clearTimeout(this.timer),clearTimeout(this.mousewheelTimer),this.counter=0,this.spinning=!1,this._trigger("stop",a))},_setOption:function(a,g){if("culture"===a||"numberFormat"===a){var c=this._parse(this.element.val());
this.options[a]=g;this.element.val(this._format(c))}else"max"!==a&&"min"!==a&&"step"!==a||"string"!=typeof g||(g=this._parse(g)),this._super(a,g),"disabled"===a&&(g?(this.element.prop("disabled",!0),this.buttons.button("disable")):(this.element.prop("disabled",!1),this.buttons.button("enable")))},_setOptions:p(function(a){this._super(a);this._value(this.element.val())}),_parse:function(a){return"string"==typeof a&&""!==a&&(a=window.Globalize&&this.options.numberFormat?Globalize.parseFloat(a,10,this.options.culture):
+a),""===a||isNaN(a)?null:a},_format:function(a){return""===a?"":window.Globalize&&this.options.numberFormat?Globalize.format(a,this.options.numberFormat,this.options.culture):a},_refresh:function(){this.element.attr({"aria-valuemin":this.options.min,"aria-valuemax":this.options.max,"aria-valuenow":this._parse(this.element.val())})},_value:function(a,g){var c;""!==a&&(c=this._parse(a),null!==c&&(g||(c=this._adjustValue(c)),a=this._format(c)));this.element.val(a);this._refresh()},_destroy:function(){this.element.removeClass("ui-spinner-input").prop("disabled",
!1).removeAttr("autocomplete").removeAttr("role").removeAttr("aria-valuemin").removeAttr("aria-valuemax").removeAttr("aria-valuenow");this.uiSpinner.replaceWith(this.element)},stepUp:p(function(a){this._stepUp(a)}),_stepUp:function(a){this._spin((a||1)*this.options.step)},stepDown:p(function(a){this._stepDown(a)}),_stepDown:function(a){this._spin((a||1)*-this.options.step)},pageUp:p(function(a){this._stepUp((a||1)*this.options.page)}),pageDown:p(function(a){this._stepDown((a||1)*this.options.page)}),
value:function(a){if(!arguments.length)return this._parse(this.element.val());p(this._value).call(this,a)},widget:function(){return this.uiSpinner}})})(jQuery);
(function(a,p){function e(a){return 1<a.hash.length&&a.href.replace(c,"")===location.href.replace(c,"")}var g=0,c=/#.*$/;a.widget("ui.tabs",{version:"1.9.1",delay:300,options:{active:null,collapsible:!1,event:"click",heightStyle:"content",hide:null,show:null,activate:null,beforeActivate:null,beforeLoad:null,load:null},_create:function(){var d=this,b=this.options,c=b.active,e=location.hash.substring(1);this.running=!1;this.element.addClass("ui-tabs ui-widget ui-widget-content ui-corner-all").toggleClass("ui-tabs-collapsible",
b.collapsible).delegate(".ui-tabs-nav > li","mousedown"+this.eventNamespace,function(b){a(this).is(".ui-state-disabled")&&b.preventDefault()}).delegate(".ui-tabs-anchor","focus"+this.eventNamespace,function(){a(this).closest("li").is(".ui-state-disabled")&&this.blur()});this._processTabs();null===c&&(e&&this.tabs.each(function(b,d){if(a(d).attr("aria-controls")===e)return c=b,!1}),null===c&&(c=this.tabs.index(this.tabs.filter(".ui-tabs-active"))),null===c||-1===c)&&(c=this.tabs.length?0:!1);!1!==
c&&(c=this.tabs.index(this.tabs.eq(c)),-1===c&&(c=b.collapsible?!1:0));b.active=c;!b.collapsible&&!1===b.active&&this.anchors.length&&(b.active=0);a.isArray(b.disabled)&&(b.disabled=a.unique(b.disabled.concat(a.map(this.tabs.filter(".ui-state-disabled"),function(a){return d.tabs.index(a)}))).sort());!1!==this.options.active&&this.anchors.length?this.active=this._findActive(this.options.active):this.active=a();this._refresh();this.active.length&&this.load(b.active)},_getCreateEventData:function(){return{tab:this.active,
panel:this.active.length?this._getPanelForTab(this.active):a()}},_tabKeydown:function(d){var b=a(this.document[0].activeElement).closest("li"),c=this.tabs.index(b),e=!0;if(!this._handlePageNav(d)){switch(d.keyCode){case a.ui.keyCode.RIGHT:case a.ui.keyCode.DOWN:c++;break;case a.ui.keyCode.UP:case a.ui.keyCode.LEFT:e=!1;c--;break;case a.ui.keyCode.END:c=this.anchors.length-1;break;case a.ui.keyCode.HOME:c=0;break;case a.ui.keyCode.SPACE:d.preventDefault();clearTimeout(this.activating);this._activate(c);
return;case a.ui.keyCode.ENTER:d.preventDefault();clearTimeout(this.activating);this._activate(c===this.options.active?!1:c);return;default:return}d.preventDefault();clearTimeout(this.activating);c=this._focusNextTab(c,e);d.ctrlKey||(b.attr("aria-selected","false"),this.tabs.eq(c).attr("aria-selected","true"),this.activating=this._delay(function(){this.option("active",c)},this.delay))}},_panelKeydown:function(d){this._handlePageNav(d)||d.ctrlKey&&d.keyCode===a.ui.keyCode.UP&&(d.preventDefault(),this.active.focus())},
_handlePageNav:function(d){if(d.altKey&&d.keyCode===a.ui.keyCode.PAGE_UP)return this._activate(this._focusNextTab(this.options.active-1,!1)),!0;if(d.altKey&&d.keyCode===a.ui.keyCode.PAGE_DOWN)return this._activate(this._focusNextTab(this.options.active+1,!0)),!0},_findNextTab:function(d,b){for(var c=this.tabs.length-1;-1!==a.inArray((d>c&&(d=0),0>d&&(d=c),d),this.options.disabled);)d=b?d+1:d-1;return d},_focusNextTab:function(a,b){return a=this._findNextTab(a,b),this.tabs.eq(a).focus(),a},_setOption:function(a,
b){"active"===a?this._activate(b):"disabled"===a?this._setupDisabled(b):(this._super(a,b),"collapsible"===a&&(this.element.toggleClass("ui-tabs-collapsible",b),!b&&!1===this.options.active&&this._activate(0)),"event"===a&&this._setupEvents(b),"heightStyle"===a&&this._setupHeightStyle(b))},_tabId:function(a){return a.attr("aria-controls")||"ui-tabs-"+ ++g},_sanitizeSelector:function(a){return a?a.replace(/[!"$%&'()*+,.\/:;<=>?@\[\]\^`{|}~]/g,"\\$&"):""},refresh:function(){var d=this.options,b=this.tablist.children(":has(a[href])");
d.disabled=a.map(b.filter(".ui-state-disabled"),function(a){return b.index(a)});this._processTabs();!1!==d.active&&this.anchors.length?this.active.length&&!a.contains(this.tablist[0],this.active[0])?this.tabs.length===d.disabled.length?(d.active=!1,this.active=a()):this._activate(this._findNextTab(Math.max(0,d.active-1),!1)):d.active=this.tabs.index(this.active):(d.active=!1,this.active=a());this._refresh()},_refresh:function(){this._setupDisabled(this.options.disabled);this._setupEvents(this.options.event);
this._setupHeightStyle(this.options.heightStyle);this.tabs.not(this.active).attr({"aria-selected":"false",tabIndex:-1});this.panels.not(this._getPanelForTab(this.active)).hide().attr({"aria-expanded":"false","aria-hidden":"true"});this.active.length?(this.active.addClass("ui-tabs-active ui-state-active").attr({"aria-selected":"true",tabIndex:0}),this._getPanelForTab(this.active).show().attr({"aria-expanded":"true","aria-hidden":"false"})):this.tabs.eq(0).attr("tabIndex",0)},_processTabs:function(){var d=
this;this.tablist=this._getList().addClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").attr("role","tablist");this.tabs=this.tablist.find("> li:has(a[href])").addClass("ui-state-default ui-corner-top").attr({role:"tab",tabIndex:-1});this.anchors=this.tabs.map(function(){return a("a",this)[0]}).addClass("ui-tabs-anchor").attr({role:"presentation",tabIndex:-1});this.panels=a();this.anchors.each(function(b,c){var g,l,k,m=a(c).uniqueId().attr("id"),n=a(c).closest("li"),
p=n.attr("aria-controls");e(c)?(g=c.hash,l=d.element.find(d._sanitizeSelector(g))):(k=d._tabId(n),g="#"+k,l=d.element.find(g),l.length||(l=d._createPanel(k),l.insertAfter(d.panels[b-1]||d.tablist)),l.attr("aria-live","polite"));l.length&&(d.panels=d.panels.add(l));p&&n.data("ui-tabs-aria-controls",p);n.attr({"aria-controls":g.substring(1),"aria-labelledby":m});l.attr("aria-labelledby",m)});this.panels.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").attr("role","tabpanel")},_getList:function(){return this.element.find("ol,ul").eq(0)},
_createPanel:function(d){return a("<div>").attr("id",d).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").data("ui-tabs-destroy",!0)},_setupDisabled:function(d){a.isArray(d)&&(d.length?d.length===this.anchors.length&&(d=!0):d=!1);for(var b=0,c;c=this.tabs[b];b++)!0===d||-1!==a.inArray(b,d)?a(c).addClass("ui-state-disabled").attr("aria-disabled","true"):a(c).removeClass("ui-state-disabled").removeAttr("aria-disabled");this.options.disabled=d},_setupEvents:function(d){var b={click:function(a){a.preventDefault()}};
d&&a.each(d.split(" "),function(a,d){b[d]="_eventHandler"});this._off(this.anchors.add(this.tabs).add(this.panels));this._on(this.anchors,b);this._on(this.tabs,{keydown:"_tabKeydown"});this._on(this.panels,{keydown:"_panelKeydown"});this._focusable(this.tabs);this._hoverable(this.tabs)},_setupHeightStyle:function(d){var b,c,e=this.element.parent();"fill"===d?(a.support.minHeight||(c=e.css("overflow"),e.css("overflow","hidden")),b=e.height(),this.element.siblings(":visible").each(function(){var d=
a(this),c=d.css("position");"absolute"!==c&&"fixed"!==c&&(b-=d.outerHeight(!0))}),c&&e.css("overflow",c),this.element.children().not(this.panels).each(function(){b-=a(this).outerHeight(!0)}),this.panels.each(function(){a(this).height(Math.max(0,b-a(this).innerHeight()+a(this).height()))}).css("overflow","auto")):"auto"===d&&(b=0,this.panels.each(function(){b=Math.max(b,a(this).height("").height())}).height(b))},_eventHandler:function(d){var b=this.options,c=this.active,e=a(d.currentTarget).closest("li"),
g=e[0]===c[0],k=g&&b.collapsible,m=k?a():this._getPanelForTab(e),n=c.length?this._getPanelForTab(c):a(),c={oldTab:c,oldPanel:n,newTab:k?a():e,newPanel:m};d.preventDefault();e.hasClass("ui-state-disabled")||e.hasClass("ui-tabs-loading")||this.running||g&&!b.collapsible||!1===this._trigger("beforeActivate",d,c)||(b.active=k?!1:this.tabs.index(e),this.active=g?a():e,this.xhr&&this.xhr.abort(),n.length||m.length||a.error("jQuery UI Tabs: Mismatching fragment identifier."),m.length&&this.load(this.tabs.index(e),
d),this._toggle(d,c))},_toggle:function(d,b){function c(){g.running=!1;g._trigger("activate",d,b)}function e(){b.newTab.closest("li").addClass("ui-tabs-active ui-state-active");k.length&&g.options.show?g._show(k,g.options.show,c):(k.show(),c())}var g=this,k=b.newPanel,m=b.oldPanel;this.running=!0;m.length&&this.options.hide?this._hide(m,this.options.hide,function(){b.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active");e()}):(b.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"),
m.hide(),e());m.attr({"aria-expanded":"false","aria-hidden":"true"});b.oldTab.attr("aria-selected","false");k.length&&m.length?b.oldTab.attr("tabIndex",-1):k.length&&this.tabs.filter(function(){return 0===a(this).attr("tabIndex")}).attr("tabIndex",-1);k.attr({"aria-expanded":"true","aria-hidden":"false"});b.newTab.attr({"aria-selected":"true",tabIndex:0})},_activate:function(d){d=this._findActive(d);d[0]!==this.active[0]&&(d.length||(d=this.active),d=d.find(".ui-tabs-anchor")[0],this._eventHandler({target:d,
currentTarget:d,preventDefault:a.noop}))},_findActive:function(d){return!1===d?a():this.tabs.eq(d)},_getIndex:function(a){return"string"==typeof a&&(a=this.anchors.index(this.anchors.filter("[href$='"+a+"']"))),a},_destroy:function(){this.xhr&&this.xhr.abort();this.element.removeClass("ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-collapsible");this.tablist.removeClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").removeAttr("role");this.anchors.removeClass("ui-tabs-anchor").removeAttr("role").removeAttr("tabIndex").removeData("href.tabs").removeData("load.tabs").removeUniqueId();
this.tabs.add(this.panels).each(function(){a.data(this,"ui-tabs-destroy")?a(this).remove():a(this).removeClass("ui-state-default ui-state-active ui-state-disabled ui-corner-top ui-corner-bottom ui-widget-content ui-tabs-active ui-tabs-panel").removeAttr("tabIndex").removeAttr("aria-live").removeAttr("aria-busy").removeAttr("aria-selected").removeAttr("aria-labelledby").removeAttr("aria-hidden").removeAttr("aria-expanded").removeAttr("role")});this.tabs.each(function(){var d=a(this),b=d.data("ui-tabs-aria-controls");
b?d.attr("aria-controls",b):d.removeAttr("aria-controls")});"content"!==this.options.heightStyle&&this.panels.css("height","")},enable:function(d){var b=this.options.disabled;!1!==b&&(d===p?b=!1:(d=this._getIndex(d),a.isArray(b)?b=a.map(b,function(a){return a!==d?a:null}):b=a.map(this.tabs,function(a,b){return b!==d?b:null})),this._setupDisabled(b))},disable:function(d){var b=this.options.disabled;if(!0!==b){if(d===p)b=!0;else{d=this._getIndex(d);if(-1!==a.inArray(d,b))return;a.isArray(b)?b=a.merge([d],
b).sort():b=[d]}this._setupDisabled(b)}},load:function(d,b){d=this._getIndex(d);var c=this,g=this.tabs.eq(d),l=g.find(".ui-tabs-anchor"),k=this._getPanelForTab(g),m={tab:g,panel:k};e(l[0])||(this.xhr=a.ajax(this._ajaxSettings(l,b,m)))&&"canceled"!==this.xhr.statusText&&(g.addClass("ui-tabs-loading"),k.attr("aria-busy","true"),this.xhr.success(function(a){setTimeout(function(){k.html(a);c._trigger("load",b,m)},1)}).complete(function(a,b){setTimeout(function(){"abort"===b&&c.panels.stop(!1,!0);g.removeClass("ui-tabs-loading");
k.removeAttr("aria-busy");a===c.xhr&&delete c.xhr},1)}))},_ajaxSettings:function(d,b,c){var e=this;return{url:d.attr("href"),beforeSend:function(d,g){return e._trigger("beforeLoad",b,a.extend({jqXHR:d,ajaxSettings:g},c))}}},_getPanelForTab:function(d){d=a(d).attr("aria-controls");return this.element.find(this._sanitizeSelector("#"+d))}});!1!==a.uiBackCompat&&(a.ui.tabs.prototype._ui=function(a,b){return{tab:a,panel:b,index:this.anchors.index(a)}},a.widget("ui.tabs",a.ui.tabs,{url:function(a,b){this.anchors.eq(a).attr("href",
b)}}),a.widget("ui.tabs",a.ui.tabs,{options:{ajaxOptions:null,cache:!1},_create:function(){this._super();var d=this;this._on({tabsbeforeload:function(b,c){a.data(c.tab[0],"cache.tabs")?b.preventDefault():c.jqXHR.success(function(){d.options.cache&&a.data(c.tab[0],"cache.tabs",!0)})}})},_ajaxSettings:function(d,b,c){var e=this.options.ajaxOptions;return a.extend({},e,{error:function(a,b){try{e.error(a,b,c.tab.closest("li").index(),c.tab[0])}catch(d){}}},this._superApply(arguments))},_setOption:function(a,
b){"cache"===a&&!1===b&&this.anchors.removeData("cache.tabs");this._super(a,b)},_destroy:function(){this.anchors.removeData("cache.tabs");this._super()},url:function(a){this.anchors.eq(a).removeData("cache.tabs");this._superApply(arguments)}}),a.widget("ui.tabs",a.ui.tabs,{abort:function(){this.xhr&&this.xhr.abort()}}),a.widget("ui.tabs",a.ui.tabs,{options:{spinner:"<em>Loading&#8230;</em>"},_create:function(){this._super();this._on({tabsbeforeload:function(a,b){if(a.target===this.element[0]&&this.options.spinner){var c=
b.tab.find("span"),e=c.html();c.html(this.options.spinner);b.jqXHR.complete(function(){c.html(e)})}}})}}),a.widget("ui.tabs",a.ui.tabs,{options:{enable:null,disable:null},enable:function(d){var b=this.options,c;if(d&&!0===b.disabled||a.isArray(b.disabled)&&-1!==a.inArray(d,b.disabled))c=!0;this._superApply(arguments);c&&this._trigger("enable",null,this._ui(this.anchors[d],this.panels[d]))},disable:function(d){var b=this.options,c;if(d&&!1===b.disabled||a.isArray(b.disabled)&&-1===a.inArray(d,b.disabled))c=
!0;this._superApply(arguments);c&&this._trigger("disable",null,this._ui(this.anchors[d],this.panels[d]))}}),a.widget("ui.tabs",a.ui.tabs,{options:{add:null,remove:null,tabTemplate:"<li><a href='#{href}'><span>#{label}</span></a></li>"},add:function(d,b,c){c===p&&(c=this.anchors.length);var e,g,k=this.options;b=a(k.tabTemplate.replace(/#\{href\}/g,d).replace(/#\{label\}/g,b));d=d.indexOf("#")?this._tabId(b):d.replace("#","");return b.addClass("ui-state-default ui-corner-top").data("ui-tabs-destroy",
!0),b.attr("aria-controls",d),e=c>=this.tabs.length,g=this.element.find("#"+d),g.length||(g=this._createPanel(d),e?0<c?g.insertAfter(this.panels.eq(-1)):g.appendTo(this.element):g.insertBefore(this.panels[c])),g.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").hide(),e?b.appendTo(this.tablist):b.insertBefore(this.tabs[c]),k.disabled=a.map(k.disabled,function(a){return a>=c?++a:a}),this.refresh(),1===this.tabs.length&&!1===k.active&&this.option("active",0),this._trigger("add",null,this._ui(this.anchors[c],
this.panels[c])),this},remove:function(d){d=this._getIndex(d);var b=this.options,c=this.tabs.eq(d).remove(),e=this._getPanelForTab(c).remove();return c.hasClass("ui-tabs-active")&&2<this.anchors.length&&this._activate(d+(d+1<this.anchors.length?1:-1)),b.disabled=a.map(a.grep(b.disabled,function(a){return a!==d}),function(a){return a>=d?--a:a}),this.refresh(),this._trigger("remove",null,this._ui(c.find("a")[0],e[0])),this}}),a.widget("ui.tabs",a.ui.tabs,{length:function(){return this.anchors.length}}),
a.widget("ui.tabs",a.ui.tabs,{options:{idPrefix:"ui-tabs-"},_tabId:function(d){d=d.is("li")?d.find("a[href]"):d;return d=d[0],a(d).closest("li").attr("aria-controls")||d.title&&d.title.replace(/\s/g,"_").replace(/[^\w\u00c0-\uFFFF\-]/g,"")||this.options.idPrefix+ ++g}}),a.widget("ui.tabs",a.ui.tabs,{options:{panelTemplate:"<div></div>"},_createPanel:function(d){return a(this.options.panelTemplate).attr("id",d).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").data("ui-tabs-destroy",!0)}}),
a.widget("ui.tabs",a.ui.tabs,{_create:function(){var a=this.options;null===a.active&&a.selected!==p&&(a.active=-1===a.selected?!1:a.selected);this._super();a.selected=a.active;!1===a.selected&&(a.selected=-1)},_setOption:function(a,b){if("selected"!==a)return this._super(a,b);var c=this.options;this._super("active",-1===b?!1:b);c.selected=c.active;!1===c.selected&&(c.selected=-1)},_eventHandler:function(){this._superApply(arguments);this.options.selected=this.options.active;!1===this.options.selected&&
(this.options.selected=-1)}}),a.widget("ui.tabs",a.ui.tabs,{options:{show:null,select:null},_create:function(){this._super();!1!==this.options.active&&this._trigger("show",null,this._ui(this.active.find(".ui-tabs-anchor")[0],this._getPanelForTab(this.active)[0]))},_trigger:function(a,b,c){var e=this._superApply(arguments);return e?("beforeActivate"===a&&c.newTab.length?e=this._super("select",b,{tab:c.newTab.find(".ui-tabs-anchor")[0],panel:c.newPanel[0],index:c.newTab.closest("li").index()}):"activate"===
a&&c.newTab.length&&(e=this._super("show",b,{tab:c.newTab.find(".ui-tabs-anchor")[0],panel:c.newPanel[0],index:c.newTab.closest("li").index()})),e):!1}}),a.widget("ui.tabs",a.ui.tabs,{select:function(a){a=this._getIndex(a);if(-1===a){if(!this.options.collapsible||-1===this.options.selected)return;a=this.options.selected}this.anchors.eq(a).trigger(this.options.event+this.eventNamespace)}}),function(){var d=0;a.widget("ui.tabs",a.ui.tabs,{options:{cookie:null},_create:function(){var a=this.options,
d;null==a.active&&a.cookie&&(d=parseInt(this._cookie(),10),-1===d&&(d=!1),a.active=d);this._super()},_cookie:function(b){var c=[this.cookie||(this.cookie=this.options.cookie.name||"ui-tabs-"+ ++d)];return arguments.length&&(c.push(!1===b?-1:b),c.push(this.options.cookie)),a.cookie.apply(null,c)},_refresh:function(){this._super();this.options.cookie&&this._cookie(this.options.active,this.options.cookie)},_eventHandler:function(){this._superApply(arguments);this.options.cookie&&this._cookie(this.options.active,
this.options.cookie)},_destroy:function(){this._super();this.options.cookie&&this._cookie(null,this.options.cookie)}})}(),a.widget("ui.tabs",a.ui.tabs,{_trigger:function(d,b,c){c=a.extend({},c);return"load"===d&&(c.panel=c.panel[0],c.tab=c.tab.find(".ui-tabs-anchor")[0]),this._super(d,b,c)}}),a.widget("ui.tabs",a.ui.tabs,{options:{fx:null},_getFx:function(){var d,b,c=this.options.fx;return c&&(a.isArray(c)?(d=c[0],b=c[1]):d=b=c),c?{show:b,hide:d}:null},_toggle:function(a,b){function c(){g.running=
!1;g._trigger("activate",a,b)}function e(){b.newTab.closest("li").addClass("ui-tabs-active ui-state-active");k.length&&n.show?k.animate(n.show,n.show.duration,function(){c()}):(k.show(),c())}var g=this,k=b.newPanel,m=b.oldPanel,n=this._getFx();if(!n)return this._super(a,b);g.running=!0;m.length&&n.hide?m.animate(n.hide,n.hide.duration,function(){b.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active");e()}):(b.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"),m.hide(),
e())}}))})(jQuery);
(function(a){function p(c,d){var b=(c.attr("aria-describedby")||"").split(/\s+/);b.push(d);c.data("ui-tooltip-id",d).attr("aria-describedby",a.trim(b.join(" ")))}function e(c){var d=c.data("ui-tooltip-id"),b=(c.attr("aria-describedby")||"").split(/\s+/),d=a.inArray(d,b);-1!==d&&b.splice(d,1);c.removeData("ui-tooltip-id");(b=a.trim(b.join(" ")))?c.attr("aria-describedby",b):c.removeAttr("aria-describedby")}var g=0;a.widget("ui.tooltip",{version:"1.9.1",options:{content:function(){return a(this).attr("title")},hide:!0,
items:"[title]:not([disabled])",position:{my:"left top+15",at:"left bottom",collision:"flipfit flipfit"},show:!0,tooltipClass:null,track:!1,close:null,open:null},_create:function(){this._on({mouseover:"open",focusin:"open"});this.tooltips={};this.parents={};this.options.disabled&&this._disable()},_setOption:function(c,d){var b=this;"disabled"===c?(this[d?"_disable":"_enable"](),this.options[c]=d):(this._super(c,d),"content"===c&&a.each(this.tooltips,function(a,c){b._updateContent(c)}))},_disable:function(){var c=
this;a.each(this.tooltips,function(d,b){var e=a.Event("blur");e.target=e.currentTarget=b[0];c.close(e,!0)});this.element.find(this.options.items).andSelf().each(function(){var c=a(this);c.is("[title]")&&c.data("ui-tooltip-title",c.attr("title")).attr("title","")})},_enable:function(){this.element.find(this.options.items).andSelf().each(function(){var c=a(this);c.data("ui-tooltip-title")&&c.attr("title",c.data("ui-tooltip-title"))})},open:function(c){var d=this,b=a(c?c.target:this.element).closest(this.options.items);
b.length&&(this.options.track&&b.data("ui-tooltip-id")?(this._find(b).position(a.extend({of:b},this.options.position)),this._off(this.document,"mousemove")):(b.attr("title")&&b.data("ui-tooltip-title",b.attr("title")),b.data("tooltip-open",!0),c&&"mouseover"===c.type&&b.parents().each(function(){var b;a(this).data("tooltip-open")&&(b=a.Event("blur"),b.target=b.currentTarget=this,d.close(b,!0));this.title&&(a(this).uniqueId(),d.parents[this.id]={element:this,title:this.title},this.title="")}),this._updateContent(b,
c)))},_updateContent:function(a,d){var b;b=this.options.content;var e=this;if("string"==typeof b)return this._open(d,a,b);(b=b.call(a[0],function(b){a.data("tooltip-open")&&e._delay(function(){this._open(d,a,b)})}))&&this._open(d,a,b)},_open:function(c,d,b){function e(a){k.of=a;g.is(":hidden")||g.position(k)}var g,l,k=a.extend({},this.options.position);b&&(g=this._find(d),g.length?g.find(".ui-tooltip-content").html(b):(d.is("[title]")&&(c&&"mouseover"===c.type?d.attr("title",""):d.removeAttr("title")),
g=this._tooltip(d),p(d,g.attr("id")),g.find(".ui-tooltip-content").html(b),this.options.track&&c&&/^mouse/.test(c.originalEvent.type)?(this._on(this.document,{mousemove:e}),e(c)):g.position(a.extend({of:d},this.options.position)),g.hide(),this._show(g,this.options.show),this.options.show&&this.options.show.delay&&(l=setInterval(function(){g.is(":visible")&&(e(k.of),clearInterval(l))},a.fx.interval)),this._trigger("open",c,{tooltip:g}),b={keyup:function(b){b.keyCode===a.ui.keyCode.ESCAPE&&(b=a.Event(b),
b.currentTarget=d[0],this.close(b,!0))},remove:function(){this._removeTooltip(g)}},c&&"mouseover"!==c.type||(b.mouseleave="close"),c&&"focusin"!==c.type||(b.focusout="close"),this._on(d,b)))},close:function(c){var d=this,b=a(c?c.currentTarget:this.element),f=this._find(b);this.closing||(b.data("ui-tooltip-title")&&b.attr("title",b.data("ui-tooltip-title")),e(b),f.stop(!0),this._hide(f,this.options.hide,function(){d._removeTooltip(a(this))}),b.removeData("tooltip-open"),this._off(b,"mouseleave focusout keyup"),
b[0]!==this.element[0]&&this._off(b,"remove"),this._off(this.document,"mousemove"),c&&"mouseleave"===c.type&&a.each(this.parents,function(a,b){b.element.title=b.title;delete d.parents[a]}),this.closing=!0,this._trigger("close",c,{tooltip:f}),this.closing=!1)},_tooltip:function(c){var d="ui-tooltip-"+g++,b=a("<div>").attr({id:d,role:"tooltip"}).addClass("ui-tooltip ui-widget ui-corner-all ui-widget-content "+(this.options.tooltipClass||""));return a("<div>").addClass("ui-tooltip-content").appendTo(b),
b.appendTo(this.document[0].body),a.fn.bgiframe&&b.bgiframe(),this.tooltips[d]=c,b},_find:function(c){return(c=c.data("ui-tooltip-id"))?a("#"+c):a()},_removeTooltip:function(a){a.remove();delete this.tooltips[a.attr("id")]},_destroy:function(){var c=this;a.each(this.tooltips,function(d,b){var e=a.Event("blur");e.target=e.currentTarget=b[0];c.close(e,!0);a("#"+d).remove();b.data("ui-tooltip-title")&&(b.attr("title",b.data("ui-tooltip-title")),b.removeData("ui-tooltip-title"))})}})})(jQuery);
/** /js/jquery.datetimepicker.js **/
var ___d2c_jquerydatetimepickerjs_c_on="2020-08-05 14:13:29";/*
 jQuery DateTimePicker plugin v2.4.5
 @homepage http://xdsoft.net/jqplugins/datetimepicker/
 (c) 2014, Chupurnov Valeriy.
*/
var $jscomp={scope:{},findInternal:function(b,p,m){b instanceof String&&(b=String(b));for(var u=b.length,k=0;k<u;k++){var q=b[k];if(p.call(m,q,k,b))return{i:k,v:q}}return{i:-1,v:void 0}}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(b,p,m){if(m.get||m.set)throw new TypeError("ES3 does not support getters and setters.");b!=Array.prototype&&b!=Object.prototype&&(b[p]=m.value)};
$jscomp.getGlobal=function(b){return"undefined"!=typeof window&&window===b?b:"undefined"!=typeof global?global:b};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(b,p,m,u){if(p){m=$jscomp.global;b=b.split(".");for(u=0;u<b.length-1;u++){var k=b[u];k in m||(m[k]={});m=m[k]}b=b[b.length-1];u=m[b];p=p(u);p!=u&&null!=p&&$jscomp.defineProperty(m,b,{configurable:!0,writable:!0,value:p})}};
$jscomp.polyfill("Array.prototype.find",function(b){return b?b:function(b,m){return $jscomp.findInternal(this,b,m).v}},"es6-impl","es3");
(function(b){"function"===typeof define&&define.amd?define(["jquery","jquery-mousewheel","date-functions"],b):"object"===typeof exports?module.exports=b:b(jQuery)})(function(b){function p(b,q,a){this.date=b;this.desc=q;this.style=a}var m={i18n:{ar:{months:"????? ??????;????;????;?????;????;??????;????;??;?????;????? ?????;????? ??????;????? ?????".split(";"),dayOfWeekShort:"???????".split(""),dayOfWeek:"????? ??????? ???????? ???????? ?????? ?????? ????? ?????".split(" ")},ro:{months:"Ianuarie Februarie Martie Aprilie Mai Iunie Iulie August Septembrie Octombrie Noiembrie Decembrie".split(" "),
dayOfWeekShort:"Du Lu Ma Mi Jo Vi S�".split(" "),dayOfWeek:"Duminic? Luni Mar?i Miercuri Joi Vineri S�mb?t?".split(" ")},id:{months:"Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember".split(" "),dayOfWeekShort:"Min Sen Sel Rab Kam Jum Sab".split(" "),dayOfWeek:"Minggu Senin Selasa Rabu Kamis Jumat Sabtu".split(" ")},is:{months:"Jan�ar Febr�ar Mars Apr�l Ma� J�n� J�l� �g�st September Okt�ber N�vember Desember".split(" "),dayOfWeekShort:"Sun M�n �ri� Mi� Fim F�s Lau".split(" "),
dayOfWeek:"Sunnudagur M�nudagur �ri�judagur Mi�vikudagur Fimmtudagur F�studagur Laugardagur".split(" ")},bg:{months:"?????? ???????? ???? ????? ??? ??? ??? ?????? ????????? ???????? ??????? ????????".split(" "),dayOfWeekShort:"?? ?? ?? ?? ?? ?? ??".split(" "),dayOfWeek:"?????? ?????????? ??????? ????? ????????? ????? ??????".split(" ")},fa:{months:"??????? ???????? ????? ??? ????? ?????? ??? ???? ??? ?? ???? ?????".split(" "),dayOfWeekShort:"??????;??????;?? ????;????????;???????;????;????".split(";"),
dayOfWeek:"??????? ?????? ??????? ???????? ???????? ???? ???? ???????".split(" ")},ru:{months:"?????? ??????? ???? ?????? ??? ???? ???? ?????? ???????? ??????? ?????? ???????".split(" "),dayOfWeekShort:"?? ?? ?? ?? ?? ?? ??".split(" "),dayOfWeek:"??????????? ??????????? ??????? ????? ??????? ??????? ???????".split(" ")},uk:{months:"?????? ????? ???????? ??????? ??????? ??????? ?????? ??????? ???????? ??????? ???????? ???????".split(" "),dayOfWeekShort:"??? ??? ??? ??? ??? ??? ???".split(" "),dayOfWeek:"?????? ????????? ???????? ?????? ?????? ?'?????? ??????".split(" ")},
en:{months:"January February March April May June July August September October November December".split(" "),dayOfWeekShort:"Sun Mon Tue Wed Thu Fri Sat".split(" "),dayOfWeek:"Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" ")},el:{months:"?????????? ??????????? ??????? ???????? ????? ??????? ??????? ????????? ??????????? ????????? ????????? ??????????".split(" "),dayOfWeekShort:"??? ??? ??? ??? ??? ??? ???".split(" "),dayOfWeek:"??????? ??????? ????? ??????? ?????? ????????? ???????".split(" ")},
de:{months:"Januar Februar M�rz April Mai Juni Juli August September Oktober November Dezember".split(" "),dayOfWeekShort:"So Mo Di Mi Do Fr Sa".split(" "),dayOfWeek:"Sonntag Montag Dienstag Mittwoch Donnerstag Freitag Samstag".split(" ")},nl:{months:"januari februari maart april mei juni juli augustus september oktober november december".split(" "),dayOfWeekShort:"zo ma di wo do vr za".split(" "),dayOfWeek:"zondag maandag dinsdag woensdag donderdag vrijdag zaterdag".split(" ")},tr:{months:"Ocak ?ubat Mart Nisan May?s Haziran Temmuz A?ustos Eyl�l Ekim Kas?m Aral?k".split(" "),
dayOfWeekShort:"Paz Pts Sal �ar Per Cum Cts".split(" "),dayOfWeek:"Pazar Pazartesi Sal? �ar?amba Per?embe Cuma Cumartesi".split(" ")},fr:{months:"Janvier F�vrier Mars Avril Mai Juin Juillet Ao�t Septembre Octobre Novembre D�cembre".split(" "),dayOfWeekShort:"Dim Lun Mar Mer Jeu Ven Sam".split(" "),dayOfWeek:"dimanche lundi mardi mercredi jeudi vendredi samedi".split(" ")},es:{months:"Enero Febrero Marzo Abril Mayo Junio Julio Agosto Septiembre Octubre Noviembre Diciembre".split(" "),dayOfWeekShort:"Dom Lun Mar Mi� Jue Vie S�b".split(" "),
dayOfWeek:"Domingo Lunes Martes Mi�rcoles Jueves Viernes S�bado".split(" ")},th:{months:"?????? ?????????? ?????? ?????? ??????? ???????? ??????? ??????? ??????? ?????? ????????? ???????".split(" "),dayOfWeekShort:"??. ?. ?. ?. ??. ?. ?.".split(" "),dayOfWeek:"??????? ?????? ?????? ??? ????? ????? ????? ???????".split(" ")},pl:{months:"stycze? luty marzec kwiecie? maj czerwiec lipiec sierpie? wrzesie? pa?dziernik listopad grudzie?".split(" "),dayOfWeekShort:"nd pn wt ?r cz pt sb".split(" "),dayOfWeek:"niedziela poniedzia?ek wtorek ?roda czwartek pi?tek sobota".split(" ")},
pt:{months:"Janeiro Fevereiro Mar�o Abril Maio Junho Julho Agosto Setembro Outubro Novembro Dezembro".split(" "),dayOfWeekShort:"Dom Seg Ter Qua Qui Sex Sab".split(" "),dayOfWeek:"Domingo Segunda Ter�a Quarta Quinta Sexta S�bado".split(" ")},ch:{months:"?? ?? ?? ?? ?? ?? ?? ?? ?? ?? ??? ???".split(" "),dayOfWeekShort:"???????".split("")},se:{months:"Januari Februari Mars April Maj Juni Juli Augusti September Oktober November December".split(" "),dayOfWeekShort:"S�n M�n Tis Ons Tor Fre L�r".split(" ")},
kr:{months:"1? 2? 3? 4? 5? 6? 7? 8? 9? 10? 11? 12?".split(" "),dayOfWeekShort:"???????".split(""),dayOfWeek:"??? ??? ??? ??? ??? ??? ???".split(" ")},it:{months:"Gennaio Febbraio Marzo Aprile Maggio Giugno Luglio Agosto Settembre Ottobre Novembre Dicembre".split(" "),dayOfWeekShort:"Dom Lun Mar Mer Gio Ven Sab".split(" "),dayOfWeek:"Domenica Luned� Marted� Mercoled� Gioved� Venerd� Sabato".split(" ")},da:{months:"January Februar Marts April Maj Juni July August September Oktober November December".split(" "),
dayOfWeekShort:"S�n Man Tir Ons Tor Fre L�r".split(" "),dayOfWeek:"s�ndag mandag tirsdag onsdag torsdag fredag l�rdag".split(" ")},no:{months:"Januar Februar Mars April Mai Juni Juli August September Oktober November Desember".split(" "),dayOfWeekShort:"S�n Man Tir Ons Tor Fre L�r".split(" "),dayOfWeek:"S�ndag Mandag Tirsdag Onsdag Torsdag Fredag L�rdag".split(" ")},ja:{months:"1? 2? 3? 4? 5? 6? 7? 8? 9? 10? 11? 12?".split(" "),dayOfWeekShort:"???????".split(""),dayOfWeek:"?? ?? ?? ?? ?? ?? ??".split(" ")},
vi:{months:"Th�ng 1;Th�ng 2;Th�ng 3;Th�ng 4;Th�ng 5;Th�ng 6;Th�ng 7;Th�ng 8;Th�ng 9;Th�ng 10;Th�ng 11;Th�ng 12".split(";"),dayOfWeekShort:"CN T2 T3 T4 T5 T6 T7".split(" "),dayOfWeek:"Ch? nh?t;Th? hai;Th? ba;Th? t?;Th? n?m;Th? s�u;Th? b?y".split(";")},sl:{months:"Januar Februar Marec April Maj Junij Julij Avgust September Oktober November December".split(" "),dayOfWeekShort:"Ned Pon Tor Sre ?et Pet Sob".split(" "),dayOfWeek:"Nedelja Ponedeljek Torek Sreda ?etrtek Petek Sobota".split(" ")},cs:{months:"Leden �nor B?ezen Duben Kv?ten ?erven ?ervenec Srpen Z�?� ?�jen Listopad Prosinec".split(" "),
dayOfWeekShort:"Ne Po �t St ?t P� So".split(" ")},hu:{months:"Janu�r Febru�r M�rcius �prilis M�jus J�nius J�lius Augusztus Szeptember Okt�ber November December".split(" "),dayOfWeekShort:"Va H� Ke Sze Cs P� Szo".split(" "),dayOfWeek:"vas�rnap h�tf? kedd szerda cs�t�rt�k p�ntek szombat".split(" ")},az:{months:"Yanvar Fevral Mart Aprel May Iyun Iyul Avqust Sentyabr Oktyabr Noyabr Dekabr".split(" "),dayOfWeekShort:"B Be �a � Ca C ?".split(" "),dayOfWeek:"Bazar;Bazar ert?si;�?r??nb? ax?am?;�?r??nb?;C�m? ax?am?;C�m?;??nb?".split(";")},
bs:{months:"Januar Februar Mart April Maj Jun Jul Avgust Septembar Oktobar Novembar Decembar".split(" "),dayOfWeekShort:"Ned Pon Uto Sri ?et Pet Sub".split(" "),dayOfWeek:"Nedjelja Ponedjeljak Utorak Srijeda ?etvrtak Petak Subota".split(" ")},ca:{months:"Gener Febrer Mar� Abril Maig Juny Juliol Agost Setembre Octubre Novembre Desembre".split(" "),dayOfWeekShort:"Dg Dl Dt Dc Dj Dv Ds".split(" "),dayOfWeek:"Diumenge Dilluns Dimarts Dimecres Dijous Divendres Dissabte".split(" ")},"en-GB":{months:"January February March April May June July August September October November December".split(" "),
dayOfWeekShort:"Sun Mon Tue Wed Thu Fri Sat".split(" "),dayOfWeek:"Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" ")},et:{months:"Jaanuar Veebruar M�rts Aprill Mai Juuni Juuli August September Oktoober November Detsember".split(" "),dayOfWeekShort:"PETKNRL".split(""),dayOfWeek:"P�hap�ev Esmasp�ev Teisip�ev Kolmap�ev Neljap�ev Reede Laup�ev".split(" ")},eu:{months:"Urtarrila Otsaila Martxoa Apirila Maiatza Ekaina Uztaila Abuztua Iraila Urria Azaroa Abendua".split(" "),dayOfWeekShort:"Ig. Al. Ar. Az. Og. Or. La.".split(" "),
dayOfWeek:"Igandea Astelehena Asteartea Asteazkena Osteguna Ostirala Larunbata".split(" ")},fi:{months:"Tammikuu Helmikuu Maaliskuu Huhtikuu Toukokuu Kes�kuu Hein�kuu Elokuu Syyskuu Lokakuu Marraskuu Joulukuu".split(" "),dayOfWeekShort:"Su Ma Ti Ke To Pe La".split(" "),dayOfWeek:"sunnuntai maanantai tiistai keskiviikko torstai perjantai lauantai".split(" ")},gl:{months:"Xan Feb Maz Abr Mai Xun Xul Ago Set Out Nov Dec".split(" "),dayOfWeekShort:"Dom Lun Mar Mer Xov Ven Sab".split(" "),dayOfWeek:"Domingo Luns Martes M�rcores Xoves Venres S�bado".split(" ")},
hr:{months:"Sije?anj Velja?a O?ujak Travanj Svibanj Lipanj Srpanj Kolovoz Rujan Listopad Studeni Prosinac".split(" "),dayOfWeekShort:"Ned Pon Uto Sri ?et Pet Sub".split(" "),dayOfWeek:"Nedjelja Ponedjeljak Utorak Srijeda ?etvrtak Petak Subota".split(" ")},ko:{months:"1? 2? 3? 4? 5? 6? 7? 8? 9? 10? 11? 12?".split(" "),dayOfWeekShort:"???????".split(""),dayOfWeek:"??? ??? ??? ??? ??? ??? ???".split(" ")},lt:{months:"Sausio Vasario Kovo Baland?io Gegu??s Bir?elio Liepos Rugpj??io Rugs?jo Spalio Lapkri?io Gruod?io".split(" "),
dayOfWeekShort:"Sek Pir Ant Tre Ket Pen ?e?".split(" "),dayOfWeek:"Sekmadienis Pirmadienis Antradienis Tre?iadienis Ketvirtadienis Penktadienis ?e?tadienis".split(" ")},lv:{months:"Janv?ris;Febru?ris;Marts;Apr?lis ;Maijs;J?nijs;J?lijs;Augusts;Septembris;Oktobris;Novembris;Decembris".split(";"),dayOfWeekShort:"Sv Pr Ot Tr Ct Pk St".split(" "),dayOfWeek:"Sv?tdiena Pirmdiena Otrdiena Tre?diena Ceturtdiena Piektdiena Sestdiena".split(" ")},mk:{months:"??????? ???????? ???? ????? ??? ???? ???? ?????? ????????? ???????? ??????? ????????".split(" "),
dayOfWeekShort:"??? ??? ??? ??? ??? ??? ???".split(" "),dayOfWeek:"?????? ?????????? ??????? ????? ???????? ????? ??????".split(" ")},mn:{months:"1-? ???;2-? ???;3-? ???;4-? ???;5-? ???;6-? ???;7-? ???;8-? ???;9-? ???;10-? ???;11-? ???;12-? ???".split(";"),dayOfWeekShort:"??? ??? ??? ??? ??? ??? ???".split(" "),dayOfWeek:"????? ?????? ?????? ????? ?????? ????? ???".split(" ")},"pt-BR":{months:"Janeiro Fevereiro Mar�o Abril Maio Junho Julho Agosto Setembro Outubro Novembro Dezembro".split(" "),dayOfWeekShort:"Dom Seg Ter Qua Qui Sex S�b".split(" "),
dayOfWeek:"Domingo Segunda Ter�a Quarta Quinta Sexta S�bado".split(" ")},sk:{months:"Janu�r Febru�r Marec Apr�l M�j J�n J�l August September Okt�ber November December".split(" "),dayOfWeekShort:"Ne Po Ut St ?t Pi So".split(" "),dayOfWeek:"Nede?a Pondelok Utorok Streda ?tvrtok Piatok Sobota".split(" ")},sq:{months:"Janar Shkurt Mars Prill Maj Qershor Korrik Gusht Shtator Tetor N�ntor Dhjetor".split(" "),dayOfWeekShort:"Die H�n Mar M�r Enj Pre Shtu".split(" "),dayOfWeek:"E Diel;E H�n�;E Mart?;E M�rkur�;E Enjte;E Premte;E Shtun�".split(";")},
"sr-YU":{months:"Januar Februar Mart April Maj Jun Jul Avgust Septembar Oktobar Novembar Decembar".split(" "),dayOfWeekShort:"Ned Pon Uto Sre ?et Pet Sub".split(" "),dayOfWeek:"Nedelja Ponedeljak Utorak Sreda ?etvrtak Petak Subota".split(" ")},sr:{months:"?????? ??????? ???? ????? ??? ??? ??? ?????? ????????? ??????? ???????? ????????".split(" "),dayOfWeekShort:"??? ??? ??? ??? ??? ??? ???".split(" "),dayOfWeek:"?????? ????????? ?????? ????? ???????? ????? ??????".split(" ")},sv:{months:"Januari Februari Mars April Maj Juni Juli Augusti September Oktober November December".split(" "),
dayOfWeekShort:"S�n M�n Tis Ons Tor Fre L�r".split(" "),dayOfWeek:"S�ndag M�ndag Tisdag Onsdag Torsdag Fredag L�rdag".split(" ")},"zh-TW":{months:"?? ?? ?? ?? ?? ?? ?? ?? ?? ?? ??? ???".split(" "),dayOfWeekShort:"???????".split(""),dayOfWeek:"??? ??? ??? ??? ??? ??? ???".split(" ")},zh:{months:"?? ?? ?? ?? ?? ?? ?? ?? ?? ?? ??? ???".split(" "),dayOfWeekShort:"???????".split(""),dayOfWeek:"??? ??? ??? ??? ??? ??? ???".split(" ")},he:{months:"????? ?????? ??? ????? ??? ???? ???? ?????? ?????? ??????? ?????? ?????".split(" "),
dayOfWeekShort:"?' ?' ?' ?' ?' ?' ???".split(" "),dayOfWeek:"????? ??? ????? ????? ????? ???? ??? ?????".split(" ")},hy:{months:"??????? ??????? ???? ????? ????? ?????? ?????? ??????? ????????? ????????? ???????? ?????????".split(" "),dayOfWeekShort:"?? ??? ??? ??? ??? ???? ???".split(" "),dayOfWeek:"?????? ?????????? ????????? ?????????? ????????? ?????? ?????".split(" ")},kg:{months:"????? ???;?????? ???;?????? ?????;??? ?????;????;?????;????;??? ????;??? ????;???????? ???;??????? ???;?????? ???".split(";"),
dayOfWeekShort:"??? ??? ??? ??? ??? ??? ???".split(" "),dayOfWeek:"??????? ??????? ??????? ??????? ???????? ???? ?????".split(" ")}},value:"",rtl:!1,format:"Y/m/d H:i",formatTime:"H:i",formatDate:"Y/m/d",startDate:!1,step:60,monthChangeSpinner:!0,closeOnDateSelect:!1,closeOnTimeSelect:!0,closeOnWithoutClick:!0,closeOnInputClick:!0,timepicker:!0,datepicker:!0,weeks:!1,defaultTime:!1,defaultDate:!1,minDate:!1,maxDate:!1,minTime:!1,maxTime:!1,disabledMinTime:!1,disabledMaxTime:!1,allowTimes:[],opened:!1,
initTime:!0,inline:!1,theme:"",onSelectDate:function(){},onSelectTime:function(){},onChangeMonth:function(){},onChangeYear:function(){},onChangeDateTime:function(){},onShow:function(){},onClose:function(){},onGenerate:function(){},withoutCopyright:!0,inverseButton:!1,hours12:!1,next:"xdsoft_next",prev:"xdsoft_prev",dayOfWeekStart:0,parentID:"body",timeHeightInTimePicker:25,timepickerScrollbar:!0,todayButton:!0,prevButton:!0,nextButton:!0,defaultSelect:!0,scrollMonth:!0,scrollTime:!0,scrollInput:!0,
lazyInit:!1,mask:!1,validateOnBlur:!0,allowBlank:!0,yearStart:1950,yearEnd:2050,monthStart:0,monthEnd:11,style:"",id:"",fixed:!1,roundTime:"round",className:"",weekends:[],highlightedDates:[],highlightedPeriods:[],disabledDates:[],disabledWeekDays:[],yearOffset:0,beforeShowDay:null,enterLikeTab:!0,showApplyButton:!1},u="en";b.datetimepicker={setLocale:function(b){u=m.i18n[b]?b:"en";Date.monthNames=m.i18n[u].months;Date.dayNames=m.i18n[u].dayOfWeek}};window.getComputedStyle||(window.getComputedStyle=
function(b,q){this.el=b;this.getPropertyValue=function(a){var q=/(\-([a-z]){1})/g;"float"===a&&(a="styleFloat");q.test(a)&&(a=a.replace(q,function(a,b,l){return l.toUpperCase()}));return b.currentStyle[a]||null};return this});Array.prototype.indexOf||(Array.prototype.indexOf=function(b,q){var a,t;a=q||0;for(t=this.length;a<t;a+=1)if(this[a]===b)return a;return-1});Date.prototype.countDaysInMonth=function(){return(new Date(this.getFullYear(),this.getMonth()+1,0)).getDate()};b.fn.xdsoftScroller=function(k){return this.each(function(){var q=
b(this),a=function(a){var b={x:0,y:0};if("touchstart"===a.type||"touchmove"===a.type||"touchend"===a.type||"touchcancel"===a.type)a=a.originalEvent.touches[0]||a.originalEvent.changedTouches[0],b.x=a.clientX,b.y=a.clientY;else if("mousedown"===a.type||"mouseup"===a.type||"mousemove"===a.type||"mouseover"===a.type||"mouseout"===a.type||"mouseenter"===a.type||"mouseleave"===a.type)b.x=a.clientX,b.y=a.clientY;return b},t,m,f,l,c,h=100,d=!1,A=0,n=0,H=0,u=!1,p=0,y=function(){};"hide"===k?q.find(".xdsoft_scrollbar").hide():
(b(this).hasClass("xdsoft_scroller_box")||(t=q.children().eq(0),m=q[0].clientHeight,f=t[0].offsetHeight,l=b('<div class="xdsoft_scrollbar"></div>'),c=b('<div class="xdsoft_scroller"></div>'),l.append(c),q.addClass("xdsoft_scroller_box").append(l),y=function(b){b=a(b).y-A+p;0>b&&(b=0);b+c[0].offsetHeight>H&&(b=H-c[0].offsetHeight);q.trigger("scroll_element.xdsoft_scroller",[h?b/h:0])},c.on("touchstart.xdsoft_scroller mousedown.xdsoft_scroller",function(d){m||q.trigger("resize_scroll.xdsoft_scroller",
[k]);A=a(d).y;p=parseInt(c.css("margin-top"),10);H=l[0].offsetHeight;"mousedown"===d.type?(document&&b(document.body).addClass("xdsoft_noselect"),b([document.body,window]).on("mouseup.xdsoft_scroller",function F(){b([document.body,window]).off("mouseup.xdsoft_scroller",F).off("mousemove.xdsoft_scroller",y).removeClass("xdsoft_noselect")}),b(document.body).on("mousemove.xdsoft_scroller",y)):(u=!0,d.stopPropagation(),d.preventDefault())}).on("touchmove",function(a){u&&(a.preventDefault(),y(a))}).on("touchend touchcancel",
function(a){u=!1;p=0}),q.on("scroll_element.xdsoft_scroller",function(a,b){m||q.trigger("resize_scroll.xdsoft_scroller",[b,!0]);b=1<b?1:0>b||isNaN(b)?0:b;c.css("margin-top",h*b);setTimeout(function(){t.css("marginTop",-parseInt((t[0].offsetHeight-m)*b,10))},10)}).on("resize_scroll.xdsoft_scroller",function(a,b,d){var k;m=q[0].clientHeight;f=t[0].offsetHeight;a=m/f;k=a*l[0].offsetHeight;1<a?c.hide():(c.show(),c.css("height",parseInt(10<k?k:10,10)),h=l[0].offsetHeight-c[0].offsetHeight,!0!==d&&q.trigger("scroll_element.xdsoft_scroller",
[b||Math.abs(parseInt(t.css("marginTop"),10))/(f-m)]))}),q.on("mousewheel",function(a){var b=Math.abs(parseInt(t.css("marginTop"),10)),b=b-20*a.deltaY;0>b&&(b=0);q.trigger("scroll_element.xdsoft_scroller",[b/(f-m)]);a.stopPropagation();return!1}),q.on("touchstart",function(b){d=a(b);n=Math.abs(parseInt(t.css("marginTop"),10))}),q.on("touchmove",function(b){d&&(b.preventDefault(),b=a(b),q.trigger("scroll_element.xdsoft_scroller",[(n-(b.y-d.y))/(f-m)]))}),q.on("touchend touchcancel",function(a){d=!1;
n=0})),q.trigger("resize_scroll.xdsoft_scroller",[k]))})};b.fn.datetimepicker=function(k){var q=!1,a=b.isPlainObject(k)||!k?b.extend(!0,{},m,k):b.extend(!0,{},m),t=0,v,f,l=function(a){a.on("open.xdsoft focusin.xdsoft mousedown.xdsoft",function d(b){a.is(":disabled")||a.data("xdsoft_datetimepicker")||(clearTimeout(t),t=setTimeout(function(){a.data("xdsoft_datetimepicker")||v(a);a.off("open.xdsoft focusin.xdsoft mousedown.xdsoft",d).trigger("open.xdsoft")},100))})};v=function(c){function f(){var b,
r;a.startDate?b=g.strToDate(a.startDate):(b=a.value||(c&&c.val&&c.val()?c.val():""))?b=g.strToDateTime(b):a.defaultDate&&(b=g.strToDateTime(a.defaultDate),a.defaultTime&&(r=g.strtotime(a.defaultTime),b.setHours(r.getHours()),b.setMinutes(r.getMinutes())));b&&g.isValidDate(b)?d.data("changed",!0):b="";return b||0}var d=b('<div class="xdsoft_datetimepicker xdsoft_noselect"></div>'),l=b('<div class="xdsoft_copyright"><a target="_blank" href="http://xdsoft.net/jqplugins/datetimepicker/">xdsoft.net</a></div>'),
n=b('<div class="xdsoft_datepicker active"></div>'),m=b('<div class="xdsoft_mounthpicker"><button type="button" class="xdsoft_prev"></button><button type="button" class="xdsoft_today_button"></button><div class="xdsoft_label xdsoft_month"><span></span><i></i></div><div class="xdsoft_label xdsoft_year"><span></span><i></i></div><button type="button" class="xdsoft_next"></button></div>'),t=b('<div class="xdsoft_calendar"></div>'),v=b('<div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box"></div><button type="button" class="xdsoft_next"></button></div>'),
y=v.find(".xdsoft_time_box").eq(0),x=b('<div class="xdsoft_time_variant"></div>'),G=b('<button type="button" class="xdsoft_save_selected blue-gradient-button">Save Selected</button>'),F=b('<div class="xdsoft_select xdsoft_monthselect"><div></div></div>'),I=b('<div class="xdsoft_select xdsoft_yearselect"><div></div></div>'),C=!1,J,D,z,E,K=0,g;a.id&&d.attr("id",a.id);a.style&&d.attr("style",a.style);a.weeks&&d.addClass("xdsoft_showweeks");a.rtl&&d.addClass("xdsoft_rtl");d.addClass("xdsoft_"+a.theme);
d.addClass(a.className);m.find(".xdsoft_month span").after(F);m.find(".xdsoft_year span").after(I);m.find(".xdsoft_month,.xdsoft_year").on("mousedown.xdsoft",function(a){var c=b(this).find(".xdsoft_select").eq(0),d=0,f=0,h=c.is(":visible"),l;m.find(".xdsoft_select").hide();g.currentTime&&(d=g.currentTime[b(this).hasClass("xdsoft_month")?"getMonth":"getFullYear"]());c[h?"hide":"show"]();h=c.find("div.xdsoft_option");for(l=0;l<h.length&&h.eq(l).data("value")!==d;l+=1)f+=h[0].offsetHeight;c.xdsoftScroller(f/
(c.children()[0].offsetHeight-c[0].clientHeight));a.stopPropagation();return!1});m.find(".xdsoft_select").xdsoftScroller().on("mousedown.xdsoft",function(a){a.stopPropagation();a.preventDefault()}).on("mousedown.xdsoft",".xdsoft_option",function(e){if(void 0===g.currentTime||null===g.currentTime)g.currentTime=g.now();e=g.currentTime.getFullYear();if(g&&g.currentTime)g.currentTime[b(this).parent().parent().hasClass("xdsoft_monthselect")?"setMonth":"setFullYear"](b(this).data("value"));b(this).parent().parent().hide();
d.trigger("xchange.xdsoft");a.onChangeMonth&&b.isFunction(a.onChangeMonth)&&a.onChangeMonth.call(d,g.currentTime,d.data("input"));e!==g.currentTime.getFullYear()&&b.isFunction(a.onChangeYear)&&a.onChangeYear.call(d,g.currentTime,d.data("input"))});d.setOptions=function(e){var r={},f=function(a,b){a="string"===typeof a||a instanceof String?document.getElementById(a):a;if(!a)return!1;if(a.createTextRange){var e=a.createTextRange();e.collapse(!0);e.moveEnd("character",b);e.moveStart("character",b);e.select();
return!0}return a.setSelectionRange?(a.setSelectionRange(b,b),!0):!1},h=function(a,b){var e=a.replace(/([\[\]\/\{\}\(\)\-\.\+]{1})/g,"\\$1").replace(/_/g,"{digit+}").replace(/([0-9]{1})/g,"{digit$1}").replace(/\{digit([0-9]{1})\}/g,"[0-$1_]{1}").replace(/\{digit[\+]\}/g,"[0-9_]{1}");return(new RegExp(e)).test(b)};a=b.extend(!0,{},a,e);e.allowTimes&&b.isArray(e.allowTimes)&&e.allowTimes.length&&(a.allowTimes=b.extend(!0,[],e.allowTimes));e.weekends&&b.isArray(e.weekends)&&e.weekends.length&&(a.weekends=
b.extend(!0,[],e.weekends));e.highlightedDates&&b.isArray(e.highlightedDates)&&e.highlightedDates.length&&(b.each(e.highlightedDates,function(e,c){var d=b.map(c.split(","),b.trim),f=new p(Date.parseDate(d[0],a.formatDate),d[1],d[2]),h=f.date.dateFormat(a.formatDate);void 0!==r[h]?(d=r[h].desc)&&d.length&&f.desc&&f.desc.length&&(r[h].desc=d+"\n"+f.desc):r[h]=f}),a.highlightedDates=b.extend(!0,[],r));e.highlightedPeriods&&b.isArray(e.highlightedPeriods)&&e.highlightedPeriods.length&&(r=b.extend(!0,
[],a.highlightedDates),b.each(e.highlightedPeriods,function(e,c){var d,f,h,B,g,l,m;b.isArray(c)?(d=c[0],f=c[1],h=c[2],m=c[3]):(B=b.map(c.split(","),b.trim),d=Date.parseDate(B[0],a.formatDate),f=Date.parseDate(B[1],a.formatDate),h=B[2],m=B[3]);for(;d<=f;)B=new p(d,h,m),g=d.dateFormat(a.formatDate),d.setDate(d.getDate()+1),void 0!==r[g]?(l=r[g].desc)&&l.length&&B.desc&&B.desc.length&&(r[g].desc=l+"\n"+B.desc):r[g]=B}),a.highlightedDates=b.extend(!0,[],r));e.disabledDates&&b.isArray(e.disabledDates)&&
e.disabledDates.length&&(a.disabledDates=b.extend(!0,[],e.disabledDates));e.disabledWeekDays&&b.isArray(e.disabledWeekDays)&&e.disabledWeekDays.length&&(a.disabledWeekDays=b.extend(!0,[],e.disabledWeekDays));!a.open&&!a.opened||a.inline||c.trigger("open.xdsoft");a.inline&&(C=!0,d.addClass("xdsoft_inline"),c.after(d).hide());a.inverseButton&&(a.next="xdsoft_prev",a.prev="xdsoft_next");a.datepicker?n.addClass("active"):n.removeClass("active");a.timepicker?v.addClass("active"):v.removeClass("active");
a.value&&(g.setCurrentTime(a.value),c&&c.val&&c.val(g.str));isNaN(a.dayOfWeekStart)?a.dayOfWeekStart=0:a.dayOfWeekStart=parseInt(a.dayOfWeekStart,10)%7;a.timepickerScrollbar||y.xdsoftScroller("hide");a.minDate&&/^[\+\-](.*)$/.test(a.minDate)&&(a.minDate=g.strToDateTime(a.minDate).dateFormat(a.formatDate));a.maxDate&&/^[\+\-](.*)$/.test(a.maxDate)&&(a.maxDate=g.strToDateTime(a.maxDate).dateFormat(a.formatDate));G.toggle(a.showApplyButton);m.find(".xdsoft_today_button").css("visibility",a.todayButton?
"visible":"hidden");m.find("."+a.prev).css("visibility",a.prevButton?"visible":"hidden");m.find("."+a.next).css("visibility",a.nextButton?"visible":"hidden");a.mask&&(c.off("keydown.xdsoft"),!0===a.mask&&(a.mask=a.format.replace(/Y/g,"9999").replace(/F/g,"9999").replace(/m/g,"19").replace(/d/g,"39").replace(/H/g,"29").replace(/i/g,"59").replace(/s/g,"59")),"string"===b.type(a.mask)&&(h(a.mask,c.val())||c.val(a.mask.replace(/[0-9]/g,"_")),c.on("keydown.xdsoft",function(e){var d=this.value,r=e.which,
g,l;if(48<=r&&57>=r||96<=r&&105>=r||8===r||46===r){a:{try{if(document.selection&&document.selection.createRange){g=document.selection.createRange().getBookmark().charCodeAt(2)-2;break a}if(this.setSelectionRange){g=this.selectionStart;break a}}catch(m){g=0;break a}g=void 0}l=8!==r&&46!==r?String.fromCharCode(96<=r&&105>=r?r-48:r):"_";8!==r&&46!==r||!g||(--g,l="_");for(;/[^0-9_]/.test(a.mask.substr(g,1))&&g<a.mask.length&&0<g;)g+=8===r||46===r?-1:1;d=d.substr(0,g)+l+d.substr(g+1);if(""===b.trim(d))d=
a.mask.replace(/[0-9]/g,"_");else if(g===a.mask.length)return e.preventDefault(),!1;for(g+=8===r||46===r?0:1;/[^0-9_]/.test(a.mask.substr(g,1))&&g<a.mask.length&&0<g;)g+=8===r||46===r?-1:1;h(a.mask,d)?(this.value=d,f(this,g)):""===b.trim(d)?this.value=a.mask.replace(/[0-9]/g,"_"):c.trigger("error_input.xdsoft")}else if(-1!==[65,67,86,90,89].indexOf(r)&&q||-1!==[27,38,40,37,39,116,17,9,13].indexOf(r))return!0;e.preventDefault();return!1})));if(a.validateOnBlur)c.off("blur.xdsoft").on("blur.xdsoft",
function(){if(a.allowBlank&&!b.trim(b(this).val()).length)b(this).val(null),d.data("xdsoft_datetime").empty();else{if(!Date.parseDate(b(this).val(),a.format)){var e=+[b(this).val()[0],b(this).val()[1]].join(""),c=+[b(this).val()[2],b(this).val()[3]].join("");!a.datepicker&&a.timepicker&&0<=e&&24>e&&0<=c&&60>c?b(this).val([e,c].map(function(a){return 9<a?a:"0"+a}).join(":")):b(this).val(g.now().dateFormat(a.format))}d.data("xdsoft_datetime").setCurrentTime(b(this).val())}d.trigger("changedatetime.xdsoft")});
a.dayOfWeekStartPrev=0===a.dayOfWeekStart?6:a.dayOfWeekStart-1;d.trigger("xchange.xdsoft").trigger("afterOpen.xdsoft")};d.data("options",a).on("mousedown.xdsoft",function(a){a.stopPropagation();a.preventDefault();I.hide();F.hide();return!1});y.append(x);y.xdsoftScroller();d.on("afterOpen.xdsoft",function(){y.xdsoftScroller()});d.append(n).append(v);!0!==a.withoutCopyright&&d.append(l);n.append(m).append(t).append(G);b(a.parentID).append(d);g=new function(){var e=this;e.now=function(b){var c=new Date,
d;!b&&a.defaultDate&&(d=e.strToDateTime(a.defaultDate),c.setFullYear(d.getFullYear()),c.setMonth(d.getMonth()),c.setDate(d.getDate()));a.yearOffset&&c.setFullYear(c.getFullYear()+a.yearOffset);!b&&a.defaultTime&&(b=e.strtotime(a.defaultTime),c.setHours(b.getHours()),c.setMinutes(b.getMinutes()));return c};e.isValidDate=function(a){return"[object Date]"!==Object.prototype.toString.call(a)?!1:!isNaN(a.getTime())};e.setCurrentTime=function(a){e.currentTime="string"===typeof a?e.strToDateTime(a):e.isValidDate(a)?
a:e.now();d.trigger("xchange.xdsoft")};e.empty=function(){e.currentTime=null};e.getCurrentTime=function(a){return e.currentTime};e.nextMonth=function(){if(void 0===e.currentTime||null===e.currentTime)e.currentTime=e.now();var c=e.currentTime.getMonth()+1,f;12===c&&(e.currentTime.setFullYear(e.currentTime.getFullYear()+1),c=0);f=e.currentTime.getFullYear();e.currentTime.setDate(Math.min((new Date(e.currentTime.getFullYear(),c+1,0)).getDate(),e.currentTime.getDate()));e.currentTime.setMonth(c);a.onChangeMonth&&
b.isFunction(a.onChangeMonth)&&a.onChangeMonth.call(d,g.currentTime,d.data("input"));f!==e.currentTime.getFullYear()&&b.isFunction(a.onChangeYear)&&a.onChangeYear.call(d,g.currentTime,d.data("input"));d.trigger("xchange.xdsoft");return c};e.prevMonth=function(){if(void 0===e.currentTime||null===e.currentTime)e.currentTime=e.now();var c=e.currentTime.getMonth()-1;-1===c&&(e.currentTime.setFullYear(e.currentTime.getFullYear()-1),c=11);e.currentTime.setDate(Math.min((new Date(e.currentTime.getFullYear(),
c+1,0)).getDate(),e.currentTime.getDate()));e.currentTime.setMonth(c);a.onChangeMonth&&b.isFunction(a.onChangeMonth)&&a.onChangeMonth.call(d,g.currentTime,d.data("input"));d.trigger("xchange.xdsoft");return c};e.getWeekOfYear=function(a){var b=new Date(a.getFullYear(),0,1);return Math.ceil(((a-b)/864E5+b.getDay()+1)/7)};e.strToDateTime=function(b){var c;if(b&&b instanceof Date&&e.isValidDate(b))return b;(c=/^(\+|\-)(.*)$/.exec(b))&&(c[2]=Date.parseDate(c[2],a.formatDate));c&&c[2]?(b=c[2].getTime()-
6E4*c[2].getTimezoneOffset(),c=new Date(e.now(!0).getTime()+parseInt(c[1]+"1",10)*b)):c=b?Date.parseDate(b,a.format):e.now();e.isValidDate(c)||(c=e.now());return c};e.strToDate=function(b){if(b&&b instanceof Date&&e.isValidDate(b))return b;b=b?Date.parseDate(b,a.formatDate):e.now(!0);e.isValidDate(b)||(b=e.now(!0));return b};e.strtotime=function(b){if(b&&b instanceof Date&&e.isValidDate(b))return b;b=b?Date.parseDate(b,a.formatTime):e.now(!0);e.isValidDate(b)||(b=e.now(!0));return b};e.str=function(){return e.currentTime.dateFormat(a.format)};
e.currentTime=this.now()};G.on("click",function(a){a.preventDefault();d.data("changed",!0);g.setCurrentTime(f());c.val(g.str());d.trigger("close.xdsoft")});m.find(".xdsoft_today_button").on("mousedown.xdsoft",function(){d.data("changed",!0);g.setCurrentTime(0);d.trigger("afterOpen.xdsoft")}).on("dblclick.xdsoft",function(){var b=g.getCurrentTime(),f,b=new Date(b.getFullYear(),b.getMonth(),b.getDate());f=g.strToDate(a.minDate);f=new Date(f.getFullYear(),f.getMonth(),f.getDate());b<f||(f=g.strToDate(a.maxDate),
f=new Date(f.getFullYear(),f.getMonth(),f.getDate()),b>f||(c.val(g.str()),c.trigger("change"),d.trigger("close.xdsoft")))});m.find(".xdsoft_prev,.xdsoft_next").on("mousedown.xdsoft",function(){var c=b(this),d=0,f=!1;(function N(b){c.hasClass(a.next)?g.nextMonth():c.hasClass(a.prev)&&g.prevMonth();a.monthChangeSpinner&&(f||(d=setTimeout(N,b||100)))})(500);b([document.body,window]).on("mouseup.xdsoft",function L(){clearTimeout(d);f=!0;b([document.body,window]).off("mouseup.xdsoft",L)})});v.find(".xdsoft_prev,.xdsoft_next").on("mousedown.xdsoft",
function(){var c=b(this),d=0,f=!1,g=110;(function L(b){var h=y[0].clientHeight,l=x[0].offsetHeight,m=Math.abs(parseInt(x.css("marginTop"),10));c.hasClass(a.next)&&l-h-a.timeHeightInTimePicker>=m?x.css("marginTop","-"+(m+a.timeHeightInTimePicker)+"px"):c.hasClass(a.prev)&&0<=m-a.timeHeightInTimePicker&&x.css("marginTop","-"+(m-a.timeHeightInTimePicker)+"px");y.trigger("scroll_element.xdsoft_scroller",[Math.abs(parseInt(x.css("marginTop"),10)/(l-h))]);g=10<g?10:g-10;f||(d=setTimeout(L,b||g))})(500);
b([document.body,window]).on("mouseup.xdsoft",function O(){clearTimeout(d);f=!0;b([document.body,window]).off("mouseup.xdsoft",O)})});J=0;d.on("xchange.xdsoft",function(c){clearTimeout(J);J=setTimeout(function(){if(void 0===g.currentTime||null===g.currentTime)g.currentTime=g.now();var c="",e=new Date(g.currentTime.getFullYear(),g.currentTime.getMonth(),1,12,0,0),f=0,h,l=g.now(),n=!1,q=!1,A,p,v,y,w=[],z,C=!0,D="";p="";for(var E;e.getDay()!==a.dayOfWeekStart;)e.setDate(e.getDate()-1);c+="<table><thead><tr>";
a.weeks&&(c+="<th></th>");for(h=0;7>h;h+=1)c+="<th>"+a.i18n[u].dayOfWeekShort[(h+a.dayOfWeekStart)%7]+"</th>";c+="</tr></thead><tbody>";!1!==a.maxDate&&(n=g.strToDate(a.maxDate),n=new Date(n.getFullYear(),n.getMonth(),n.getDate(),23,59,59,999));!1!==a.minDate&&(q=g.strToDate(a.minDate),q=new Date(q.getFullYear(),q.getMonth(),q.getDate()));for(;f<g.currentTime.countDaysInMonth()||e.getDay()!==a.dayOfWeekStart||g.currentTime.getMonth()===e.getMonth();)w=[],f+=1,A=e.getDay(),h=e.getDate(),p=e.getFullYear(),
v=e.getMonth(),y=g.getWeekOfYear(e),E="",w.push("xdsoft_date"),z=a.beforeShowDay&&b.isFunction(a.beforeShowDay.call)?a.beforeShowDay.call(d,e):null,!1!==n&&e>n||!1!==q&&e<q||z&&!1===z[0]?w.push("xdsoft_disabled"):-1!==a.disabledDates.indexOf(e.dateFormat(a.formatDate))?w.push("xdsoft_disabled"):-1!==a.disabledWeekDays.indexOf(A)&&w.push("xdsoft_disabled"),z&&""!==z[1]&&w.push(z[1]),g.currentTime.getMonth()!==v&&w.push("xdsoft_other_month"),(a.defaultSelect||d.data("changed"))&&g.currentTime.dateFormat(a.formatDate)===
e.dateFormat(a.formatDate)&&w.push("xdsoft_current"),l.dateFormat(a.formatDate)===e.dateFormat(a.formatDate)&&w.push("xdsoft_today"),0!==e.getDay()&&6!==e.getDay()&&-1===a.weekends.indexOf(e.dateFormat(a.formatDate))||w.push("xdsoft_weekend"),void 0!==a.highlightedDates[e.dateFormat(a.formatDate)]&&(A=a.highlightedDates[e.dateFormat(a.formatDate)],w.push(void 0===A.style?"xdsoft_highlighted_default":A.style),E=void 0===A.desc?"":A.desc),a.beforeShowDay&&b.isFunction(a.beforeShowDay)&&w.push(a.beforeShowDay(e)),
C&&(c+="<tr>",C=!1,a.weeks&&(c+="<th>"+y+"</th>")),c+='<td data-date="'+h+'" data-month="'+v+'" data-year="'+p+'" class="xdsoft_date xdsoft_day_of_week'+e.getDay()+" "+w.join(" ")+'" title="'+E+'"><div>'+h+"</div></td>",e.getDay()===a.dayOfWeekStartPrev&&(c+="</tr>",C=!0),e.setDate(h+1);t.html(c+"</tbody></table>");m.find(".xdsoft_label span").eq(0).text(a.i18n[u].months[g.currentTime.getMonth()]);m.find(".xdsoft_label span").eq(1).text(g.currentTime.getFullYear());v=p=D="";c=function(c,e){var f=
g.now(),h,r=a.allowTimes&&b.isArray(a.allowTimes)&&a.allowTimes.length;f.setHours(c);c=parseInt(f.getHours(),10);f.setMinutes(e);e=parseInt(f.getMinutes(),10);h=new Date(g.currentTime);h.setHours(c);h.setMinutes(e);w=[];(!1!==a.minDateTime&&a.minDateTime>h||!1!==a.maxTime&&g.strtotime(a.maxTime).getTime()<f.getTime()||!1!==a.minTime&&g.strtotime(a.minTime).getTime()>f.getTime())&&w.push("xdsoft_disabled");(!1!==a.minDateTime&&a.minDateTime>h||!1!==a.disabledMinTime&&f.getTime()>g.strtotime(a.disabledMinTime).getTime()&&
!1!==a.disabledMaxTime&&f.getTime()<g.strtotime(a.disabledMaxTime).getTime())&&w.push("xdsoft_disabled");h=new Date(g.currentTime);h.setHours(parseInt(g.currentTime.getHours(),10));r||h.setMinutes(Math[a.roundTime](g.currentTime.getMinutes()/a.step)*a.step);(a.initTime||a.defaultSelect||d.data("changed"))&&h.getHours()===parseInt(c,10)&&(!r&&59<a.step||h.getMinutes()===parseInt(e,10))&&(a.defaultSelect||d.data("changed")?w.push("xdsoft_current"):a.initTime&&w.push("xdsoft_init_time"));parseInt(l.getHours(),
10)===parseInt(c,10)&&parseInt(l.getMinutes(),10)===parseInt(e,10)&&w.push("xdsoft_today");D+='<div class="xdsoft_time '+w.join(" ")+'" data-hour="'+c+'" data-minute="'+e+'">'+f.dateFormat(a.formatTime)+"</div>"};if(a.allowTimes&&b.isArray(a.allowTimes)&&a.allowTimes.length)for(f=0;f<a.allowTimes.length;f+=1)p=g.strtotime(a.allowTimes[f]).getHours(),v=g.strtotime(a.allowTimes[f]).getMinutes(),c(p,v);else for(h=f=0;f<(a.hours12?12:24);f+=1)for(h=0;60>h;h+=a.step)p=(10>f?"0":"")+f,v=(10>h?"0":"")+h,
c(p,v);x.html(D);k="";f=0;for(f=parseInt(a.yearStart,10)+a.yearOffset;f<=parseInt(a.yearEnd,10)+a.yearOffset;f+=1)k+='<div class="xdsoft_option '+(g.currentTime.getFullYear()===f?"xdsoft_current":"")+'" data-value="'+f+'">'+f+"</div>";I.children().eq(0).html(k);f=parseInt(a.monthStart,10);for(k="";f<=parseInt(a.monthEnd,10);f+=1)k+='<div class="xdsoft_option '+(g.currentTime.getMonth()===f?"xdsoft_current":"")+'" data-value="'+f+'">'+a.i18n[u].months[f]+"</div>";F.children().eq(0).html(k);b(d).trigger("generate.xdsoft")},
10);c.stopPropagation()}).on("afterOpen.xdsoft",function(){if(a.timepicker){var b,c,f;x.find(".xdsoft_current").length?b=".xdsoft_current":x.find(".xdsoft_init_time").length&&(b=".xdsoft_init_time");b?(c=y[0].clientHeight,f=x[0].offsetHeight,b=x.find(b).index()*a.timeHeightInTimePicker+1,f-c<b&&(b=f-c),y.trigger("scroll_element.xdsoft_scroller",[parseInt(b,10)/(f-c)])):y.trigger("scroll_element.xdsoft_scroller",[0])}});D=0;t.on("click.xdsoft","td",function(f){f.stopPropagation();D+=1;var h=b(this),
l=g.currentTime;if(void 0===l||null===l)g.currentTime=g.now(),l=g.currentTime;if(h.hasClass("xdsoft_disabled"))return!1;l.setDate(1);l.setFullYear(h.data("year"));l.setMonth(h.data("month"));l.setDate(h.data("date"));d.trigger("select.xdsoft",[l]);c.val(g.str());a.onSelectDate&&b.isFunction(a.onSelectDate)&&a.onSelectDate.call(d,g.currentTime,d.data("input"),f);d.data("changed",!0);d.trigger("xchange.xdsoft");d.trigger("changedatetime.xdsoft");(1<D||!0===a.closeOnDateSelect||!1===a.closeOnDateSelect&&
!a.timepicker)&&!a.inline&&d.trigger("close.xdsoft");setTimeout(function(){D=0},200)});x.on("click.xdsoft","div",function(c){c.stopPropagation();var f=b(this),h=g.currentTime;if(void 0===h||null===h)g.currentTime=g.now(),h=g.currentTime;if(f.hasClass("xdsoft_disabled"))return!1;h.setHours(f.data("hour"));h.setMinutes(f.data("minute"));d.trigger("select.xdsoft",[h]);d.data("input").val(g.str());a.onSelectTime&&b.isFunction(a.onSelectTime)&&a.onSelectTime.call(d,g.currentTime,d.data("input"),c);d.data("changed",
!0);d.trigger("xchange.xdsoft");d.trigger("changedatetime.xdsoft");!0!==a.inline&&!0===a.closeOnTimeSelect&&d.trigger("close.xdsoft")});n.on("mousewheel.xdsoft",function(b){if(!a.scrollMonth)return!0;0>b.deltaY?g.nextMonth():g.prevMonth();return!1});c.on("mousewheel.xdsoft",function(b){if(!a.scrollInput)return!0;if(!a.datepicker&&a.timepicker)return z=x.find(".xdsoft_current").length?x.find(".xdsoft_current").eq(0).index():0,0<=z+b.deltaY&&z+b.deltaY<x.children().length&&(z+=b.deltaY),x.children().eq(z).length&&
x.children().eq(z).trigger("mousedown"),!1;if(a.datepicker&&!a.timepicker)return n.trigger(b,[b.deltaY,b.deltaX,b.deltaY]),c.val&&c.val(g.str()),d.trigger("changedatetime.xdsoft"),!1});d.on("changedatetime.xdsoft",function(c){if(a.onChangeDateTime&&b.isFunction(a.onChangeDateTime)){var f=d.data("input");a.onChangeDateTime.call(d,g.currentTime,f,c);delete a.value;f.trigger("change")}}).on("generate.xdsoft",function(){a.onGenerate&&b.isFunction(a.onGenerate)&&a.onGenerate.call(d,g.currentTime,d.data("input"));
C&&(d.trigger("afterOpen.xdsoft"),C=!1)}).on("click.xdsoft",function(a){a.stopPropagation()});z=0;E=function(){var c=d.data("input").offset(),f=c.top+d.data("input")[0].offsetHeight-1,h=c.left,g="absolute";"rtl"==d.data("input").parent().css("direction")&&(h-=d.outerWidth()-d.data("input").outerWidth());a.fixed?(f-=b(window).scrollTop(),h-=b(window).scrollLeft(),g="fixed"):(f+d[0].offsetHeight>b(window).height()+b(window).scrollTop()&&(f=c.top-d[0].offsetHeight+1),0>f&&(f=0),h+d[0].offsetWidth>b(window).width()&&
(h=b(window).width()-d[0].offsetWidth));c=d[0];do if(c=c.parentNode,"relative"===window.getComputedStyle(c).getPropertyValue("position")&&b(window).width()>=c.offsetWidth){h-=(b(window).width()-c.offsetWidth)/2;break}while("HTML"!==c.nodeName);d.css({left:h,top:f,position:g})};d.on("open.xdsoft",function(c){var f=!0;a.onShow&&b.isFunction(a.onShow)&&(f=a.onShow.call(d,g.currentTime,d.data("input"),c));if(!1!==f&&(d.show(),E(),b(window).off("resize.xdsoft",E).on("resize.xdsoft",E),a.closeOnWithoutClick))b([document.body,
window]).on("mousedown.xdsoft",function M(){d.trigger("close.xdsoft");b([document.body,window]).off("mousedown.xdsoft",M)})}).on("close.xdsoft",function(c){var f=!0;m.find(".xdsoft_month,.xdsoft_year").find(".xdsoft_select").hide();a.onClose&&b.isFunction(a.onClose)&&(f=a.onClose.call(d,g.currentTime,d.data("input"),c));!1===f||a.opened||a.inline||d.hide();c.stopPropagation()}).on("toggle.xdsoft",function(a){d.is(":visible")?d.trigger("close.xdsoft"):d.trigger("open.xdsoft")}).data("input",c);K=0;
d.data("xdsoft_datetime",g);d.setOptions(a);g.setCurrentTime(f());c.data("xdsoft_datetimepicker",d).on("open.xdsoft focusin.xdsoft mousedown.xdsoft",function(b){c.is(":disabled")||c.data("xdsoft_datetimepicker").is(":visible")&&a.closeOnInputClick||(clearTimeout(K),K=setTimeout(function(){c.is(":disabled")||(C=!0,g.setCurrentTime(f()),d.trigger("open.xdsoft"))},100))}).on("keydown.xdsoft",function(c){c=c.which;if(-1!==[13].indexOf(c)&&a.enterLikeTab)return c=b("input:visible,textarea:visible"),d.trigger("close.xdsoft"),
c.eq(c.index(this)+1).focus(),!1;if(-1!==[9].indexOf(c))return d.trigger("close.xdsoft"),!0})};f=function(a){var f=a.data("xdsoft_datetimepicker");f&&(f.data("xdsoft_datetime",null),f.remove(),a.data("xdsoft_datetimepicker",null).off(".xdsoft"),b(window).off("resize.xdsoft"),b([window,document.body]).off("mousedown.xdsoft"),a.unmousewheel&&a.unmousewheel())};b(document).off("keydown.xdsoftctrl keyup.xdsoftctrl").on("keydown.xdsoftctrl",function(a){17===a.keyCode&&(q=!0)}).on("keyup.xdsoftctrl",function(a){17===
a.keyCode&&(q=!1)});return this.each(function(){var c=b(this).data("xdsoft_datetimepicker");if(c){if("string"===b.type(k))switch(k){case "show":b(this).select().focus();c.trigger("open.xdsoft");break;case "hide":c.trigger("close.xdsoft");break;case "toggle":c.trigger("toggle.xdsoft");break;case "destroy":f(b(this));break;case "reset":(this.value=this.defaultValue)&&c.data("xdsoft_datetime").isValidDate(Date.parseDate(this.value,a.format))||c.data("changed",!1);c.data("xdsoft_datetime").setCurrentTime(this.value);
break;case "validate":c=c.data("input"),c.trigger("blur.xdsoft")}else c.setOptions(k);return 0}"string"!==b.type(k)&&(!a.lazyInit||a.open||a.inline?v(b(this)):l(b(this)))})};b.fn.datetimepicker.defaults=m});
(function(b){"function"===typeof define&&define.amd?define(["jquery"],b):"object"===typeof exports?module.exports=b:b(jQuery)})(function(b){function p(l){var c=l||window.event,h=q.call(arguments,1),d,k=0,n=0,p,u=0,v=0;l=b.event.fix(c);l.type="mousewheel";"detail"in c&&(n=-1*c.detail);"wheelDelta"in c&&(n=c.wheelDelta);"wheelDeltaY"in c&&(n=c.wheelDeltaY);"wheelDeltaX"in c&&(k=-1*c.wheelDeltaX);"axis"in c&&c.axis===c.HORIZONTAL_AXIS&&(k=-1*n,n=0);d=0===n?k:n;"deltaY"in c&&(d=n=-1*c.deltaY);"deltaX"in
c&&(k=c.deltaX,0===n&&(d=-1*k));if(0!==n||0!==k){1===c.deltaMode?(p=b.data(this,"mousewheel-line-height"),d*=p,n*=p,k*=p):2===c.deltaMode&&(p=b.data(this,"mousewheel-page-height"),d*=p,n*=p,k*=p);p=Math.max(Math.abs(n),Math.abs(k));if(!t||p<t)t=p,f.settings.adjustOldDeltas&&"mousewheel"===c.type&&0===p%120&&(t/=40);f.settings.adjustOldDeltas&&"mousewheel"===c.type&&0===p%120&&(d/=40,k/=40,n/=40);d=Math[1<=d?"floor":"ceil"](d/t);k=Math[1<=k?"floor":"ceil"](k/t);n=Math[1<=n?"floor":"ceil"](n/t);f.settings.normalizeOffset&&
this.getBoundingClientRect&&(c=this.getBoundingClientRect(),u=l.clientX-c.left,v=l.clientY-c.top);l.deltaX=k;l.deltaY=n;l.deltaFactor=t;l.offsetX=u;l.offsetY=v;l.deltaMode=0;h.unshift(l,d,k,n);a&&clearTimeout(a);a=setTimeout(m,200);return(b.event.dispatch||b.event.handle).apply(this,h)}}function m(){t=null}var u=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],k="onwheel"in document||9<=document.documentMode?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],q=Array.prototype.slice,
a,t;if(b.event.fixHooks)for(var v=u.length;v;)b.event.fixHooks[u[--v]]=b.event.mouseHooks;var f=b.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var a=k.length;a;)this.addEventListener(k[--a],p,!1);else this.onmousewheel=p;b.data(this,"mousewheel-line-height",f.getLineHeight(this));b.data(this,"mousewheel-page-height",f.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var a=k.length;a;)this.removeEventListener(k[--a],p,!1);else this.onmousewheel=
null;b.removeData(this,"mousewheel-line-height");b.removeData(this,"mousewheel-page-height")},getLineHeight:function(a){a=b(a);var c=a["offsetParent"in b.fn?"offsetParent":"parent"]();c.length||(c=b("body"));return parseInt(c.css("fontSize"),10)||parseInt(a.css("fontSize"),10)||16},getPageHeight:function(a){return b(a).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};b.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",
a)}})});
!function(b){"function"===typeof define&&define.amd?define([],b):"object"===typeof exports?module.exports=b:b()}(function(){function b(a){return function(b){for(var c=[],h=0,d=a.length;h<d;h++)c.push("string"===typeof a[h]?a[h]:a[h](b));return c.join("")}}function p(b,l,c){return function(b){var f=new Date;if((b=b.match(a[l]))&&0<b.length){b.y=f.getFullYear();b.m=f.getMonth();b.d=f.getDate();b.h=-1;b.i=-1;b.s=-1;for(var f=0,k=c.length;f<k;f++)c[f](b);if(0<b.y&&0<=b.m&&0<b.d&&0<=b.h&&0<=b.i&&0<=b.s)return new Date(b.y,
b.m,b.d,b.h,b.i,b.s);if(0<b.y&&0<=b.m&&0<b.d&&0<=b.h&&0<=b.i)return new Date(b.y,b.m,b.d,b.h,b.i);if(0<b.y&&0<=b.m&&0<b.d&&0<=b.h)return new Date(b.y,b.m,b.d,b.h);if(0<b.y&&0<=b.m&&0<b.d)return new Date(b.y,b.m,b.d);if(0<b.y&&0<=b.m)return new Date(b.y,b.m);if(0<b.y)return new Date(b.y)}return null}}function m(a,b){switch(a){case "D":return{g:0,s:"(?:Sun|Mon|Tue|Wed|Thu|Fri|Sat)"};case "j":case "d":return{g:1,a:function(a){a.d=parseInt(a[b],10)},s:"(\\d{1,2})"};case "l":return{g:0,s:"(?:"+Date.dayNames.join("|")+
")"};case "S":return{g:0,s:"(?:st|nd|rd|th)"};case "w":return{g:0,s:"\\d"};case "z":return{g:0,s:"(?:\\d{1,3})"};case "W":return{g:0,s:"(?:\\d{2})"};case "F":return{g:1,a:function(a){a.m=parseInt(Date.monthNumbers[a[b].substring(0,3)],10)},s:"("+Date.monthNames.join("|")+")"};case "M":return{g:1,a:function(a){a.m=parseInt(Date.monthNumbers[a[b]],10)},s:"(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)"};case "n":case "m":return{g:1,a:function(a){a.m=parseInt(a[b],10)-1},s:"(\\d{1,2})"};case "t":return{g:0,
s:"\\d{1,2}"};case "L":return{g:0,s:"(?:1|0)"};case "Y":return{g:1,a:function(a){a.y=parseInt(a[b],10)},s:"(\\d{4})"};case "y":return{g:1,a:function(a){var f=parseInt(a[b],10);a.y=f>Date.y2kYear?1900+f:2E3+f},s:"(\\d{1,2})"};case "a":return{g:1,a:function(a){"am"===a[b]?12==a.h&&(a.h=0):12>a.h&&(a.h+=12)},s:"(am|pm)"};case "A":return{g:1,a:function(a){"AM"===a[b]?12==a.h&&(a.h=0):12>a.h&&(a.h+=12)},s:"(AM|PM)"};case "g":case "G":case "h":case "H":return{g:1,a:function(a){a.h=parseInt(a[b],10)},s:"(\\d{1,2})"};
case "i":return{g:1,a:function(a){a.i=parseInt(a[b],10)},s:"(\\d{2})"};case "s":return{g:1,a:function(a){a.s=parseInt(a[b],10)},s:"(\\d{2})"};case "O":return{g:0,s:"[+-]\\d{4}"};case "T":return{g:0,s:"[A-Z]{3}"};case "Z":return{g:0,s:"[+-]\\d{1,5}"};default:return{g:0,s:u(a)}}}function u(a){return a.replace(/('|\\)/g,"\\$1")}function k(a,b,c){a=""+a;for(c=""+c||" ";a.length<b;)a=c+a;return a}var q={},a=[],t={},v={d:function(a){return k(a.getDate(),2,"0")},D:function(a){return Date.dayNames[a.getDay()].substring(0,
3)},j:function(a){return a.getDate()},l:function(a){return Date.dayNames[a.getDay()]},S:function(a){return a.getSuffix()},w:function(a){return a.getDay()},z:function(a){return a.getDayOfYear()},W:function(a){return a.getWeekOfYear()},F:function(a){return Date.monthNames[a.getMonth()]},m:function(a){return k(a.getMonth()+1,2,"0")},M:function(a){return Date.monthNames[a.getMonth()].substring(0,3)},n:function(a){return a.getMonth()+1},t:function(a){return a.getDaysInMonth()},L:function(a){return a.isLeapYear()?
1:0},Y:function(a){return a.getFullYear()},y:function(a){return(""+a.getFullYear()).substring(2,4)},a:function(a){return 12>a.getHours()?"am":"pm"},A:function(a){return 12>a.getHours()?"AM":"PM"},g:function(a){return a.getHours()%12?a.getHours()%12:12},G:function(a){return a.getHours()},h:function(a){return k(a.getHours()%12?a.getHours()%12:12,2,"0")},H:function(a){return k(a.getHours(),2,"0")},i:function(a){return k(a.getMinutes(),2,"0")},s:function(a){return k(a.getSeconds(),2,"0")},O:function(a){return a.getGMTOffset()},
T:function(a){return a.getTimezone()},Z:function(a){return-60*a.getTimezoneOffset()}};Date.prototype.dateFormat=function(a){if(!t[a]){for(var l=[],c=!1,h,d=0;d<a.length;++d)h=a.charAt(d),c||"\\"!==h?c?(c=!1,l.push(u(h))):l.push(v[h]||u(h)):c=!0;t[a]=b(l)}return t[a](this)};Date.parseDate=function(b,l){if(!q[l]){for(var c=a.length,h=1,d="",k=!1,n,t=[],v=0;v<l.length;++v)n=l.charAt(v),k||"\\"!==n?k?(k=!1,d+=u(n)):(n=m(n,h),h+=n.g,d+=n.s,n.g&&n.a&&t.push(n.a)):k=!0;a[c]=new RegExp("^"+d+"$");q[l]=p(l,
c,t)}return q[l](b)};Date.prototype.getTimezone=function(){return this.toString().replace(/^.*? ([A-Z]{3}) [0-9]{4}.*$/,"$1").replace(/^.*?\(([A-Z])[a-z]+ ([A-Z])[a-z]+ ([A-Z])[a-z]+\)$/,"$1$2$3")};Date.prototype.getGMTOffset=function(){return(0<this.getTimezoneOffset()?"-":"+")+k(Math.floor(this.getTimezoneOffset()/60),2,"0")+k(this.getTimezoneOffset()%60,2,"0")};Date.prototype.getDayOfYear=function(){var a=0;Date.daysInMonth[1]=this.isLeapYear()?29:28;for(var b=0;b<this.getMonth();++b)a+=Date.daysInMonth[b];
return a+this.getDate()-1};Date.prototype.getWeekOfYear=function(){var a=this.getDayOfYear()+(4-this.getDay()),b=7-(new Date(this.getFullYear(),0,1)).getDay()+4;return k((a-b)/7+1,2,"0")};Date.prototype.isLeapYear=function(){var a=this.getFullYear();return!(0!==(a&3)||!(a%100||0===a%400&&a))};Date.prototype.getFirstDayOfMonth=function(){var a=(this.getDay()-(this.getDate()-1))%7;return 0>a?a+7:a};Date.prototype.getLastDayOfMonth=function(){var a=(this.getDay()+(Date.daysInMonth[this.getMonth()]-this.getDate()))%
7;return 0>a?a+7:a};Date.prototype.getDaysInMonth=function(){Date.daysInMonth[1]=this.isLeapYear()?29:28;return Date.daysInMonth[this.getMonth()]};Date.prototype.getSuffix=function(){switch(this.getDate()){case 1:case 21:case 31:return"st";case 2:case 22:return"nd";case 3:case 23:return"rd";default:return"th"}};Date.daysInMonth=[31,28,31,30,31,30,31,31,30,31,30,31];Date.monthNames="January February March April May June July August September October November December".split(" ");Date.dayNames="Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" ");
Date.y2kYear=50;Date.monthNumbers={Jan:0,Feb:1,Mar:2,Apr:3,May:4,Jun:5,Jul:6,Aug:7,Sep:8,Oct:9,Nov:10,Dec:11};Date.patterns={ISO8601LongPattern:"Y-m-d H:i:s",ISO8601ShortPattern:"Y-m-d",ShortDatePattern:"n/j/Y",LongDatePattern:"l, F d, Y",FullDateTimePattern:"l, F d, Y g:i:s A",MonthDayPattern:"F d",ShortTimePattern:"g:i A",LongTimePattern:"g:i:s A",SortableDateTimePattern:"Y-m-d\\TH:i:s",UniversalSortableDateTimePattern:"Y-m-d H:i:sO",YearMonthPattern:"F, Y"}});
/** /js/mailSchedule.2.0.js **/
/**
 * Mail Schedule
 *
 * The mailSchedule object contains all functions that will handle the
 * date time picker content (available dates and time).
 *
 * @see {@link http://xdsoft.net/jqplugins/datetimepicker/|DateTimePicker} documentation for the date time picker used.
 */

function MailSchedule( params ){

	var mailSchedule = {
		firstChoice: '',  // output Value1
		secondChoice: '', // output Value2
		waitingOnSite: '',
		scope: params.scope,
		firstChoiceObjectId: 'firstDate',
		secondChoiceObjectId: 'secondDate',

		firstHourSelect: 'firstDateSelect',
		secondHourSelect: 'secondDateSelect',

		/**
		 * Setup Date
		 *
		 * This method will initialize a specific input to add a datepicker and define
		 * all of its options.
		 *
		 * @param {string} id
		 * @param {Date}   dateValue
		 * @param {Date}   expireDate
		 *
		 * @private
		 */
		setupDate: function (id, dateValue, expireDate) {
				var pickerInput = $("#" + id);
				var today = new Date();

				if (!mailSchedule.isDate(dateValue)) {
						dateValue = new Date();
				}

				if (!mailSchedule.isDate(expireDate)) {
						expireDate = new Date(today.getTime() + mailSchedule.dayToMilliseconds(30));
				}

				var minTime = new Date();
				minTime.setMinutes(minTime.getMinutes() + 30);

				var setMinTime = function (currentDateTime) {
						if (currentDateTime != null && currentDateTime.toDateString() === today.toDateString()) {
								// if current date is today, then disable all passed time
								// @TODO if too late - disable date
								this.setOptions({minTime: minTime.dateFormat("H:i")});
						} else {
								// disable minimum time if not today
								this.setOptions({minTime: false});
						}
				};

				var resetDateTimeSelected = function () {
						pickerInput.data('datetimepickerOptions').timeSelected = false;
						pickerInput.data('datetimepickerOptions').dateSelected = false;
				};

				// disable direct input typing
				pickerInput.keydown(function (e) {
						e.preventDefault();
						return false;
				});

				pickerInput.data('datetimepickerOptions', {
						dateSelected: false,
						timeSelected: false
				});

				if(!$('#activesitelanguage').val() || $('#activesitelanguage').val() !== 'ENGLISH'){
					$.datetimepicker.setLocale('fr');
				}

				pickerInput.datetimepicker($.extend({}, pickerOptions, {
						id: id + "_dateTimePicker",

						minDate: dateValue,
						maxDate: expireDate,
						disabledDates: mailSchedule.getClosedDatesBetween(dateValue, expireDate),

						onChangeDateTime: setMinTime,
						onShow: function (currentTime) {
								// if date is selected, then use it instead of default date
								var date = ($(this).data().options.dateSelected) ? currentTime : dateValue;

								mailSchedule.updateHours(date, id);
						},
				}));
		},

		/**
		 * Initialize date pickers input
		 *
		 * @public
		 */
		init: function () {
				var dateRange = mailSchedule.getPickerDateRange();

				if( $(mailSchedule.scope).length < 1 )
				{
					return setTimeout(mailSchedule.init, 10000);
				}

				if( !$(mailSchedule.scope).is(':visible') )
				{
					return setTimeout(mailSchedule.init, 1000);
				}

				$('#mailScheduleForm').jqTransform(); // Set styles

				if(!dateRange){
					$('#' + mailSchedule.firstChoiceObjectId).attr('disabled', 'disabled');
					$('#' + mailSchedule.firstChoiceObjectId).closest('.jqTransformInputWrapper')
						.css({  // default styling of a disabled input
							        'background-color': '-internal-light-dark-color(rgba(239, 239, 239, 0.3), rgba(59, 59, 59, 0.3))',
							        'border-color'    : 'rgba(118, 118, 118, 0.3)',
						        });

					$('#' + mailSchedule.secondChoiceObjectId).attr('disabled', 'disabled');
					$('#' + mailSchedule.secondChoiceObjectId).closest('.jqTransformInputWrapper')
						.css({  // default styling of a disabled input
							        'background-color': '-internal-light-dark-color(rgba(239, 239, 239, 0.3), rgba(59, 59, 59, 0.3))',
							        'border-color'    : 'rgba(118, 118, 118, 0.3)',
						        })
} else {
					//  init the date time picker
					mailSchedule.setupDate(mailSchedule.firstChoiceObjectId, dateRange.startDate, dateRange.endDate);
					mailSchedule.setupDate(mailSchedule.secondChoiceObjectId, dateRange.startDate, dateRange.endDate);
				}
		},

		/**
		 * Assign Values
		 *
		 * This method will get the date time picker value and will keep it inside
		 * the firstChoice and secondChoice parameter.
		 *
		 * @public
		 */
		assignValues: function () {

			var form = $(mailSchedule.scope);
			var first = null;
			var second = null;

			switch (mailPage.mailID) {
					case 'ServiceRequest':
						first = form.find('#firstDate');
						second = form.find('#secondDate');
					break;
					case 'serviceMenu':
						first = form.find( serviceForm_menuService.dateId );
						break;
					case 'headerService':
						first = form.find( serviceForm_headerService.dateId );
						break;
					default:
						first = form.find('#'+mailSchedule.firstChoiceObjectId);
						second = form.find('#'+mailSchedule.secondChoiceObjectId);
						break;
			}

			mailSchedule.firstChoice  = mailSchedule.getDateChoice( first );
			mailSchedule.secondChoice = mailSchedule.getDateChoice( second );
mailSchedule.waitingOnSite = form.find("select[name='waitingonsite'] option:selected").val();
				
		},

		/**
		 * Update Hours
		 *
		 * This method will get a list of all allowed times period, then update the datetime
		 * picker to correctly set those times as allowed.
		 *
		 * @param {Date} date
		 * @param {string} objId
		 *
		 * @private
		 */
		updateHours: function (date, objId) {
				var pickerInput = $("#" + objId);
				var allowTimes  = mailSchedule.getAllowedTimes(date, objId);

				//  display specific message in date time picker depending on schedule status
				mailSchedule.displayPickerMessage(objId, mailSchedule.getDateSchedule(date));

				if (allowTimes.length > 0) {
						//  unable the timepicker
						pickerInput.datetimepicker({timepicker: true});

						var params = {allowTimes:allowTimes};

						if (pickerInput.val() === '') {
								params.value = date.dateFormat('Y/m/d') + ' ' + allowTimes[0]
						}

						pickerInput.datetimepicker(params);
				} else {
						// clear dateTime input field if no time schedules are available for this day
						pickerInput.val('');

						//  unable the timepicker
						pickerInput.datetimepicker({timepicker: false});
				}
		},

		/**
		 * Closed after midnight
		 *
		 * This method will check if the date schedule closes after midnight.
		 * Note that midnight or 12:30am will also return false, because the last possible
		 * appointment was created on the opened day itself.
		 *
		 * @param {Date} date  day before date
		 *
		 * @returns {boolean}
		 * @private
		 */
		closedAfterMidnight: function (date) {
				var schedule = mailSchedule.getDateSchedule(date);

				//  if the day before wasn't open then it didn't close after midnight
				if (schedule.startHour === 'undefined') {
						return false;
				}

				//  if the closing time is before opening and it isn't midnight, then return as closed after midnight.
				return (schedule.endHour < schedule.startHour && schedule.endHour !== 0);
		},

		/**
		 * Display Picker Message
		 *
		 * This method will display the correct message to the user
		 * depending on the schedule status (closed, on appointment, ...)
		 *
		 * @param {string} pickerId     date picker ID
		 * @param {bool}   schedule     complete schedule for the selected date.
		 *
		 * @private
		 */
		displayPickerMessage: function (pickerId, schedule) {
				var message = "";

				switch (schedule.status) {
						case "closed":
								message = $('#textClosed').val();
								break;
						case "rdv":
								message = $('#textRdv').val();
								break;
						case "contact":
								message = schedule.message;
								break;
				}

				//  display message
				$('#' + pickerId + '_dateTimePicker .dateTimePickerMessage').html(message);
		},

		/**
		 * Get Allowed Times
		 *
		 * This method will get the selected date schedule and set the available appointment
		 * slots depending on the opening and closing hours. There will also be a verification
		 * to know if the previous day closed after midnight, so that period should actually
		 * be on the selected date.
		 *
		 * @param date
		 * @param pickerId
		 *
		 * @returns {Array}
		 * @private
		 */
		getAllowedTimes: function (date, pickerId) {
				var input = $("#" + pickerId);
				var times = [];

				var schedule = mailSchedule.getDateSchedule(date);

				//  get the day before possible appointments
				var dayBefore = new Date(date);
				dayBefore.setDate(date.getDate() - 1);

				periods = mailSchedule.getDayBeforeAppointments(dayBefore);

				//  add them to the list of allowed times
				times = times.concat(periods);

				if (schedule.status === "concess" || schedule.status === "" || typeof schedule.status === 'undefined' || schedule.status === "rdv") {
						var startHour = schedule.startHour;
						var startMin = schedule.startMin;

						//  get current dates's possible appointments
						var closing = mailSchedule.getEndOfDay(startHour, schedule.endHour, schedule.endMin);
						var periods = mailSchedule.getAppointmentsBetween(startHour, startMin, closing.endHour, closing.endMin);

						//  add them to the list of allowed times
						times = times.concat(periods);
				}

				if(date.toDateString() == (new Date()).toDateString()){
					var hour = (new Date()).getHours();
					while( times.length > 0  ){
						if( parseInt( times[0] ) <= hour ){
							times.shift();
						}else{
							break;
						}
					}
				}


				//  return complete list of allowed times
				return times;
		},

		/**
		 * Get appointments slots between start time and end time.
		 *
		 * This method will define the first appointment with the start hour and minutes
		 * and the last appointment possible from the end hour and minutes. Then the method
		 * will go through every half hour and add the appointment time to the list before
		 * returning it.
		 *
		 * @param {number} startHour
		 * @param {number} startMin
		 * @param {number} endHour
		 * @param {number} endMin
		 *
		 * @returns {Array}
		 * @private
		 */
		getAppointmentsBetween: function (startHour, startMin, endHour, endMin) {
				var firstAppointment = startHour + ((startMin === 30) ? 0.5 : 0);
				var lastAppointment = (endHour + ((endMin === 30) ? 0.5 : 0)) - 1;  //  last appointment is 1 hour before closing
				var allowedPeriods = [];

				//  increment by 0.5, since appointments are half an hour long
				for (var time = firstAppointment; time <= lastAppointment; time += 0.5) {
						if ((time % 1) === 0) {
								allowedPeriods.push(time + ':00');
						} else {
								allowedPeriods.push(Math.floor(time) + ':30');
						}
				}

				return allowedPeriods;
		},

		/**
		 * Get closed dates between 2 dates
		 *
		 * This method will get the number of days between the start date and end date,
		 * then it will go through all those dates and check if that day is going to be
		 * closed and if the day before didn't closed after midnight.
		 *
		 * @param {Date} startDate
		 * @param {Date} endDate
		 *
		 * @returns {Array} list of dates that are closed
		 * @private
		 */
		getClosedDatesBetween: function (startDate, endDate) {
				var daysDiff = mailSchedule.getDaysDiff(startDate, endDate);
				var closedDays = [];
				var schedules = [];

				for (var i = 0; i < daysDiff; i++) {
						var dayBefore = new Date(new Date(startDate).setDate(startDate.getDate() + (i - 1)));
						var currentDate = new Date(new Date(startDate).setDate(startDate.getDate() + i));

						//  get currentDate schedule only if not already found.
						if (!schedules.hasOwnProperty(currentDate.getDay())) {
								schedules[currentDate.getDay()] = mailSchedule.getDateSchedule(currentDate);
						}

						//  check if the current date is closed and the day before didn't close after midnight
						if ((schedules[currentDate.getDay()].status === "closed" || schedules[currentDate.getDay()].status === "online") && !mailSchedule.closedAfterMidnight(dayBefore)) {
								closedDays.push(currentDate.dateFormat('Y/m/d'));
						}
				}

				return closedDays;
		},

		/**
		 *
		 */
		getDateChoice: function( elem ){
			if( elem && elem.length > 0 ){
				var date = new Date(elem.val());
				// validation
				if ( mailSchedule.isDate( date )) {
					// @TODO add validation on wrong date or not available datetime
					return date.dateFormat("Y:m:d H:i");
				}
			}
			return '';
		},

		/**
		 * Get Date Schedule
		 *
		 * This method will find the date's day (Sunday, Monday, ...) and will find the
		 * hidden input with its schedule inside. It will get the schedule status
		 * (closed, rdv, ...) and then the opening and closing hour if necessary.
		 *
		 * @param {Date} date   date to get the schedule for
		 *
		 * @returns {*}
		 * @private
		 */
		getDateSchedule: function (date) {
				//  get today's day
				var dayOfWeek = date.toLocaleDateString('en-US', {weekday: 'long'}).replace(/\u200E/g, '');

				//  define schedule selector
				var selector = '#' + dayOfWeek + 'Schedule';
				var $$ = $(mailSchedule.scope).find(selector);

				//  get today's schedule status (closed, rdv, ...)
				var status = $$.val();

				if (status === "concess" || status === "rdv") {
						// Voir concession -- as per Gino --- DWP-1061
						return {status: status, startHour: 7, startMin: 30, endHour: 20, endMin: 0};
				}

				if (status === "" || typeof status === 'undefined') {
						//  open - get opening and closing time
						return {
								status: status,
								startHour: parseInt($$.attr('starthour')),
								startMin: parseInt($$.attr('startmin')),
								endHour: parseInt($$.attr('endhour')),
								endMin: parseInt($$.attr('endmin')),
						}
				}

				//  either closed or not taking appointment via platform with possible custom message
				return {status: status, message: $(mailSchedule.scope).find("#" + dayOfWeek + "Schedule_message").html()};
		},

		/**
		 * Get Day before Appointments
		 *
		 * This method will get the date passed in parameter complete schedule, then will
		 * make sure the day before closed after midnight before getting a list of possible
		 * appointment slots.
		 *
		 * @param {Date} date   day before date
		 *
		 * @returns {*}
		 * @private
		 */
		getDayBeforeAppointments: function (date) {
				var midnight = 0;
				var schedule = mailSchedule.getDateSchedule(date);

				//  if the day before didn't closed after midnight, return an empty list of appointment slots.
				if (!mailSchedule.closedAfterMidnight(date)) {
						return [];
				}

				//  get only appointments slots after midnight
				return mailSchedule.getAppointmentsBetween(midnight, midnight, schedule.endHour, schedule.endMin);
		},

		/**
		 * Get Days Difference between 2 specific dates
		 *
		 * @param {Date} startDate
		 * @param {Date} endDate
		 *
		 * @returns {number}
		 * @private
		 */
		getDaysDiff: function (startDate, endDate) {
				// Get 1 day in milliseconds
				var oneDay = mailSchedule.dayToMilliseconds(1);

				// calculate end and start difference in milliseconds, then convert it back in days.
				return Math.round((endDate.getTime() - startDate.getTime()) / oneDay);
		},

		/**
		 * Get end of day
		 *
		 * This method will make sure the endHour is in the same day and not after midnight. It will first
		 * check if the scheduled endHour is before the starting hour. If that is the case, then midnight
		 * will be considered the endhour. In case the endHour is after midnight (1am, 2am, ...), the
		 * endMin will be set to 30, so the last possible appointment of the day (23:30) is properly created.
		 *
		 * @param {number} startHour    opening hour
		 * @param {number} endHour      closing hour
		 * @param {number} endMin       closing minutes
		 *
		 * @returns {*}
		 * @private
		 */
		getEndOfDay: function (startHour, endHour, endMin) {
				//  if closing hour is after opening hour, then keep the closing hour.
				if (startHour < endHour) {
						return {endHour: endHour, endMin: endMin};
				}

				//  if closing hour is midnight, return 24 instead of 00
				if (endHour < startHour && endHour === 0) {
						return {endHour: 24, endMin: endMin};
				}

				//  otherwise, closing hour is after midnight
				//  we set minutes at 30 so an appointment at 23:30 can be created automatically
				return {endHour: 24, endMin: 30};
		},

		/**
		 * Get next open date
		 *
		 * This method will find the next open date in case the one passed in parameter
		 * is defined as closed.
		 *
		 * @param {Date} date
		 *
		 * @returns {Date}
		 * @private
		 */
		getNextOpenDate: function (date) {
				var schedule = mailSchedule.getDateSchedule(date);



				if (schedule.status === "closed" || schedule.status === "online") {
						var tomorrow = new Date(new Date(date).setDate(date.getDate() + 1));
						var one_week = new Date(new Date().setDate((new Date()).getDate() + 7))
						if( tomorrow > one_week){
							return false;
						}
						return mailSchedule.getNextOpenDate(tomorrow);
				} else {
						return date;
				}
		},

		/**
		 * Get Picker Date Range
		 *
		 * This method will define the first date that should be available for an
		 * appointment along with the last date available (which is 15 months after
		 * the first date)
		 *
		 * @returns {{startDate: Date, endDate: Date}}
		 * @private
		 */
		getPickerDateRange: function () {
				var allowToday = $('#allowToday').val();
				var minStart = parseInt($('#minStartDays').val());
				var daysToAdd = 0;
				var today = new Date();



				if( !allowToday ){
					daysToAdd = 1;
				}
				if( minStart ){
					daysToAdd = minStart;
				}

				//  add days to today's date, then get the next open date (so we don't try to select a closed date automatically)
				var startDate = new Date(new Date(today).setDate(today.getDate() + daysToAdd));
				startDate = mailSchedule.getNextOpenDate(startDate);

				if( !startDate ){
					return false
				}

				//  schedule availability limit (as per Gino allow 15 months - previously was 3)
				var endDate = new Date(startDate.getTime() + mailSchedule.dayToMilliseconds(450));

				return { startDate:startDate, endDate:endDate };
		},

		/**
		 * Verify if parameter passed is a date
		 *
		 * @param date
		 *
		 * @returns {boolean}
		 * @private
		 */
		isDate: function (date) {
				return (date instanceof Date && date.toDateString() !== 'Invalid Date');
		},

		/**
		 * Transform number of days into milliseconds
		 *
		 * @param {number} day
		 *
		 * @returns {number}
		 * @private
		 */
		dayToMilliseconds: function (day) {
				return (day * 24 * 60 * 60 * 1000);
		},

		/**
		 * Picker On Close
		 *
		 * This method is called each time the datetime picker is closed.
		 *
		 * @param {Date} currentTime
		 * @param {*}    input
		 *
		 * @returns {boolean}
		 * @private
		 */
		pickerOnClose: function (currentTime, input) {
				//DWP-3901
				var timeSelected = $(input).data('datetimepickerOptions').timeSelected;
				var dateSelected = $(input).data('datetimepickerOptions').dateSelected;

				if (input.val() === "" && IS_MOBILE) {
						$("#" + input.data("hour-select")).empty();
						$("#" + input.data("hour-select")).attr("disabled", "disabled");
				}


				if (!timeSelected && !dateSelected) {
						return true;
				}

				if (!timeSelected) {
						setTimeout(function () {
								input.val(input.val().split(' ')[0].trim());
						});
				}

				//Defocus input to avoid double onClose cb
				input.blur();
				input.trigger('close.xdsoft');

				input.data('datetimepickerOptions').timeSelected = false;
				input.data('datetimepickerOptions').dateSelected = false;
		},

		/**
		 * Picker On Generate
		 *
		 * This method is called after the constructor of the calendar and this
		 * will add a div with the .dateTimePickerMessage class which will contain
		 * the schedule message if there is one to be displayed.
		 *
		 * @private
		 */
		pickerOnGenerate: function () {
				$('.xdsoft_save_selected').remove();
				if ($('.dateTimePickerMessage', this).length === 0) {
						$(this).append('<div style="clear: both; padding: 11px;  font-size: 12px;font-weight:bold; " class="dateTimePickerMessage"></div>');
				}
		},

		/**
		 * Picker On Select Date
		 *
		 * This method is called when a date is selected in the datetime picker
		 * and this will set the dateSelected date attribute to true. It will
		 * then update the possible available hours.
		 *
		 * @param {Date} currentTime
		 * @param {*}    input
		 *
		 * @returns {boolean}
		 * @private
		 */
		pickerOnSelectDate: function (currentTime, input) {
				$(this).data().options.dateSelected = true;
				input.data('datetimepickerOptions').dateSelected = true;

				$('.xdsoft_save_selected').remove();

				if (input.data("hour-select")) {
						mailSchedule.updateHours(currentTime, input.attr('id'), input.data("hour-select"));
				} else {
						mailSchedule.updateHours(currentTime, input.attr('id'));
				}

				return false;
		},

		/**
		 * Picker On Select Time
		 *
		 * This method is called when a time is selected in the datetime picker
		 * and this will set the timeSelected data attribute to true.
		 *
		 * @param {Date} currentTime
		 * @param {*}    input
		 *
		 * @private
		 */
		pickerOnSelectTime: function (currentTime, input) {
				input.data('datetimepickerOptions').timeSelected = true;
		},

		/**
		 *  @brief Set jquwery scope for reading scedhules
		 *
		 *  @param mixed elem Dom selector or jquery object
		 *  @return self
		 *
		 */
		setScope: function( elem ){
			mailSchedule.scope = elem;
			return mailSchedule;
		}
	};

	var IS_MOBILE = params.isMobile;

	/*
	 *  When on mobile, we override some of the methods to better reflect
	 *  the mobile version.
	 */
	if (IS_MOBILE) {
			/**
			 * Initialize the mailSchedule date & time picker when on mobile
			 *
			 * @public
			 */
			mailSchedule.init = function () {
				var form = $(mailSchedule.scope);

					form.find("#" + mailSchedule.firstHourSelect).attr("disabled", "disabled");
					form.find("#" + mailSchedule.secondHourSelect).attr("disabled", "disabled");


					form.find("#" + mailSchedule.firstChoiceObjectId).data("hour-select", mailSchedule.firstHourSelect);
					form.find("#" + mailSchedule.secondChoiceObjectId).data("hour-select", mailSchedule.secondHourSelect);

					//  get available date range for date picker
					var dateRange = mailSchedule.getPickerDateRange();

					if(!dateRange){
						form.find("#" + mailSchedule.firstChoiceObjectId).attr("disabled", "disabled");
						form.find("#" + mailSchedule.secondChoiceObjectId).attr("disabled", "disabled");
						return;
					}

					form.find('#'+mailSchedule.firstHourSelect).on('change', function(){
						var d = $('#'+mailSchedule.firstChoiceObjectId).val();
						var t = $(this).val();
						form.find('input[name=date1]').val( d+' '+t );
					});

					form.find('#'+mailSchedule.secondHourSelect).on('change', function(){
						var d = $('#'+mailSchedule.secondChoiceObjectId).val();
						var t = $(this).val();
						form.find('input[name=date2]').val( d+' '+t );
					});

					//  init the date time picker
					mailSchedule.setupDate(mailSchedule.firstChoiceObjectId, mailSchedule.firstHourSelect, dateRange.startDate, dateRange.endDate);
					mailSchedule.setupDate(mailSchedule.secondChoiceObjectId, mailSchedule.secondHourSelect, dateRange.startDate, dateRange.endDate);
			};

			/**
			 * Assign Values
			 *
			 * This method will get the date time picker value and will keep it inside
			 * the firstChoice and secondChoice parameter. This methods override the
			 * desktop one because the way time and date are selected is different.
			 *
			 * @public
			 */
			mailSchedule.assignValues = function () {

				var form = $(mailSchedule.scope);

					var firstChoiceTime = form.find("#" + mailSchedule.firstHourSelect).find(":selected").text();
					var firstChoiceDate = new Date(form.find("#" + mailSchedule.firstChoiceObjectId).val());
					firstChoiceDate.setHours(firstChoiceTime.split(":")[0], firstChoiceTime.split(":")[1]);

					if (firstChoiceDate.toDateString() !== 'Invalid Date') {
							// @TODO add validation on wrong date or not available datetime
							mailSchedule.firstChoice = firstChoiceDate.dateFormat("Y:m:d H:i");
					}

					var secondChoiceTime = form.find("#" + mailSchedule.secondHourSelect).find(":selected").text();
					var secondChoiceDate = new Date(form.find("#" + mailSchedule.secondChoiceObjectId).val());
					secondChoiceDate.setHours(secondChoiceTime.split(":")[0], secondChoiceTime.split(":")[1]);

					if (secondChoiceDate.toDateString() !== 'Invalid Date') {
							// @TODO add validation on wrong date or not available datetime
							mailSchedule.secondChoice = secondChoiceDate.dateFormat("Y:m:d H:i");
					}

				mailSchedule.waitingOnSite = form.find("select[name='waitingonsite'] option:selected").val();
			};

			/**
			 * Setup Date
			 *
			 * This method will initialize a specific input to add a datepicker and define
			 * all of its options.
			 *
			 * @param {string} pickerId     date picker ID
			 * @param {string} timeId       time picker ID
			 * @param {Date}   dateValue    first date available in date picker
			 * @param {Date}   expireDate   last date available in date picker
			 *
			 * @private
			 */
			mailSchedule.setupDate = function (pickerId, timeId, dateValue, expireDate) {
					var pickerInput = $("#" + pickerId);
					var today = new Date();

					if (!mailSchedule.isDate(dateValue)) {
							dateValue = new Date();
					}

					if (!mailSchedule.isDate(expireDate)) {
							expireDate = new Date(today.getTime() + mailSchedule.dayToMilliseconds(30));
					}

					// disable direct input typing
					pickerInput.keydown(function (e) { e.preventDefault(); return false; });

					pickerInput.data('datetimepickerOptions', { dateSelected: false, timeSelected: false });

					if(!$('#activesitelanguage').val() || $('#activesitelanguage').val() !== 'ENGLISH'){
						$.datetimepicker.setLocale('fr');
					}


					pickerInput.datetimepicker($.extend({}, pickerOptions, {
							id: pickerId + '_dateTimePicker',
							timepicker: false,
							format: "Y/m/d",

							minDate: dateValue,
							maxDate: expireDate,
							disabledDates: mailSchedule.getClosedDatesBetween(dateValue, expireDate),

							onShow: function (currentTime) {
									// if date is selected, then use it instead of default date
									var date = ($(this).data().options.dateSelected) ? currentTime : dateValue;

									mailSchedule.updateHours(date, pickerId, timeId);
							}
					}));
			};

			/**
			 * Update Hours
			 *
			 * This method will get a list of all allowed times period, display a schedule
			 * message if necessary and update the time dropdown with the available time
			 * periods.
			 *
			 * @param {Date}   date
			 * @param {string} pickerId
			 * @param {string} timeId
			 *
			 * @private
			 */
			mailSchedule.updateHours = function (date, pickerId, timeId) {
					var form = $(mailSchedule.scope);
					var timeDropdwon = form.find("#" + timeId);

					var allowedTimes = mailSchedule.getAllowedTimes(date, pickerId);
					var schedule     = mailSchedule.getDateSchedule(date);

					//  display specific message in date time picker depending on schedule status
					mailSchedule.displayPickerMessage(pickerId, schedule);

					//   reset & enable the dropdown
					timeDropdwon.empty();

					if (allowedTimes.length > 0) {
							timeDropdwon.removeAttr("disabled");
					} else {
							timeDropdwon.attr("disabled", "disabled");
					}

					//  add allowed times to dropdown && automatically select the open time
					for (var idx in allowedTimes) {
							if (!allowedTimes.hasOwnProperty(idx)) {
									continue;
							}

							var time = allowedTimes[idx];
							var opt  = $("<option></option>").text(allowedTimes[idx]);

							if (time === (schedule.startHour + ':' + schedule.startMin)) {
									opt.attr("selected", "selected");
							}

							timeDropdwon.append(opt);
					}
			};
	}


	/**
	 * List of all common parameters for the date time picker between the desktop
	 * and mobile versions.
	 *
	 * @type {*}
	 */
	var pickerOptions = {
			lang: ($('#activesitelanguage').val() === 'ENGLISH' ? 'en' : 'fr'),
			allowBlank: true,
			dayOfWeekStart: 1,  // monday
			step: 30,

			onGenerate: mailSchedule.pickerOnGenerate,
			onSelectTime: mailSchedule.pickerOnSelectTime,
			onSelectDate: mailSchedule.pickerOnSelectDate,
			onClose: mailSchedule.pickerOnClose,
	};

	return mailSchedule;
}

var mailSchedule = new MailSchedule({
	scope: '#mailScheduleForm',
	isMobile: ($("#isMobile").length > 0) ? $("#isMobile").val() : ''
});

$(document).ready(function () {
	mailSchedule.init(); // generate dateTimePicker Objects
});
/** /js/mailServiceWidget.js **/
/**
 * @author Paul Windsor
 * @param form The service form selector (can be the jQuery object or string selector)
 * @constructor
 */
var ServiceWidget = function(form) {
    // var self = this;

    if (form === '') {
        throw new Expection('Empty argument, expected jQuery object or string');
    }

    this.form = $(form);
		this.schedule = new MailSchedule({
			scope: this.form
		});
    this.formHandle = this.form.data('form');
    this.dateId = this.form.find('.ssf-date').attr('id'); //initialized from the widget, this id for date should be unique

    this.init();
};

(function() {


    /**
     * Any on window load functions should go here
     */
    this.init = function() {
        this.schedule.firstChoiceObjectId = this.dateId;
        this.schedule.init();
        this.form.jqTransform();
        this.setWatermarks();
        this.calendarOpenHandler();
        this.submitFormHandler();
        this.setInputMasks();
        this.safariFix();
    };

    /**
     * Will create a dot separated name. (ex: "hello class" => ".hello.class")
     * Good for converting element class into a proper selector for jquery to use
     * @param classNames
     * @returns {string}
     */
    this.getClass = function(classNames) {
        if (classNames === '' || typeof classNames === 'undefined') return '';

        return classNames.replace(/ \s+/, ' .').replace(/( )(?=[a-zA-z])/g, ' .').replace(/^/, '.').replace(/ /g, '');
    };

    this.setWatermarks = function() {
        var name    = this.form.find('.ssf-name');
        var email   = this.form.find('.ssf-email');
        var phone   = this.form.find('.ssf-phone');
        var date    = this.form.find('.ssf-date');
        var vehicle = this.form.find('.ssf-vehicle');
        var vin     = this.form.find('.ssf-vin');
        var comment = this.form.find('.ssf-comment');

        name.Watermark(name.attr('alt'));
        email.Watermark(email.attr('alt'));
        phone.Watermark(phone.attr('alt'));
        date.Watermark(date.attr('alt'));
        vehicle.Watermark(vehicle.attr('alt'));
        vin.Watermark(vin.attr('alt'));
        comment.Watermark(comment.attr('alt'));
    };

    this.setInputMasks = function() {
        this.form.find('.ssf-phone').focus(function() {
           $(this).mask("999 999-9999", {placeHolder: ' '});
        });
    };

    //When opening the calendar, mousing over it will make the service menu disappear. This
    //should make sure it stays open
    this.calendarOpenHandler = function() {
        var serviceMenu = this.form.closest('#MainMenu_SERVICE');
    
        if (!serviceMenu.length) {
            return;
        }
    
        var dateInput = this.form.find('.ssf-date');

        dateInput.on('focus', function(ev) {
            serviceMenu.addClass('menu-active');
        });

        dateInput.on('blur', function(ev) {
            // remove the menu-active class without closing the menu if selecting the date/time
            if (!$('#ssf-date_dateTimePicker').is(':visible')) {
                serviceMenu.removeClass('menu-active');
            } else {
                $('#ssf-date_dateTimePicker').css('display', 'none');
            }
        });

        serviceMenu.find('.menu-service-wrapper').on('mouseleave', function () {
            if (!$('#ssf-date_dateTimePicker').is(':visible')) {
                serviceMenu.removeClass('menu-active');
            }
        });
    };

    this.setEmailHandlerValuesAndBody = function(body) {
        emailHandler.userFirstName = this.form.find('.ssf-name').val();
        emailHandler.userPhone = this.form.find('.ssf-phone').val();
        emailHandler.userEmail = this.form.find('.ssf-email').val();

        //There is only 1 field for make model year
        emailHandler.make  = this.form.find('.ssf-vehicle').val();
        emailHandler.model = '';
        emailHandler.year  = '';

        emailHandler.vin = this.form.find('.ssf-vin').val();

        body = body.replace(/{\$QUESTIONS}/g, this.form.find('.ssf-comment').val());
        body = body.replace(/{\$FNAME}/g, this.form.find('.ssf-name').val());
        body = body.replace(/{\$EMAILPHONE}/g, this.form.find('.ssf-phone').val());
        body = body.replace(/{\$EMAILMAKE}/g, this.form.find('.ssf-vehicle').val());
        body = body.replace(/{\$VIN}/g, this.form.find('.ssf-vin').val());
        body = body.replace(/{\$EMAIL}/g, this.form.find('.ssf-email').val());
        body = body.replace(/{\$WAITINGONSITE}/g, this.form.find("select[name='waitingonsite'] option:selected").val())

        return body;
    };

    this.getSendTo = function() {
        return this.form.find('.textSendToEmail').val();
    };

    this.submitFormHandler = function() {
        var self = this;

        this.form.find('.ssf-submit > button').on('click', function(e) {
            e.preventDefault();
            var currentScope = mailPage.jqScope;
            var currentMailID = mailPage.mailID;

            mailPage.mailID = self.formHandle;
            mailPage.jqScope = self.getClass(self.form.attr('class')) + '[data-form="' + self.formHandle + '"]';

            mailPage.save();

            //reset - there could be more than 1 form on the page, use the original mailPage values that were loaded
            mailPage.jqScope = currentScope;
            mailPage.mailID = currentMailID;
        });

    };

    /**
     * In safari, the text area for jqTransform shows incorrect dimensions, fix it using this
     */
    this.safariFix = function() {
        var safariArea = this.form.find('.jqTransformSafariTextarea > div');

        if (safariArea.length == 0) return;

        var actualWidth = safariArea.find('textarea').css('width');
        safariArea.css({
            'width': actualWidth,
            'min-height': '50px'
        });
    };

    /**
     * Override mailPage email sent, and when the callback is complete, revert to the original mailPage function
     */
    this.setEmailSentCallback = function() {
        var self = this;
        var originalEmailSent = mailPage.emailSent;

        mailPage.emailSent = function(success) {
            originalEmailSent(success); //call 'parent'

            //Now inject our things
            if (success) {
                self.resetForm();
            }

            //convert back to original
            mailPage.emailSent = originalEmailSent;
        }
    };

    /**
     * Reset form fields
     */
    this.resetForm = function() {
        this.form.find('input[type="text"], textarea').val('');
        this.setWatermarks();
    }

}).call(ServiceWidget.prototype);

$(function() {
    $('form.short-service-form').each(function(){
        var form_name = $(this).data('form');
        window['serviceForm_'+form_name] = new ServiceWidget($(this));
    });
    
    //Listener for financing widget in the header
    $('.service-header-form').on('hover', function(e) {
        
        //Add class to keep the menu open, this is to prevent menu closing when mousing over things like form autocomplete
        if ($('.service-header-form.isOpen').length === 0 && e.type !== 'mouseleave') {
            $('.service-header-form').addClass('isOpen');
        }
        
        //Remove the class that keeps the menu open when mousing out of the menu
        if (e.type === 'mouseleave') {
            if (e.fromElement === $('.creditScorePopupForm')[0]) {
                $('.service-header-form').removeClass('isOpen');
            }
            
            var isCalendar = $(e.toElement).hasClass('xdsoft_datetimepicker') || $(e.toElement).closest('.xdsoft_datetimepicker').length;
            var isGooglePlaces = $(e.toElement).hasClass('pac-container');
            
            //If the mouse hover is currently NOT a child element of the menu and google places calendar are not the target, close menu
            if (e.toElement !== null && !isCalendar && !isGooglePlaces) {
                $('.service-header-form').removeClass('isOpen');
            }
        }
        
    });
});
/** /js/mailServiceEmail.js **/
var ___d2c_mailServiceEmailjs_c_on="2020-08-05 14:04:53";jQuery(function(a){a("#serviceEmailForm").jqTransform()});
/** /js/mailQuickEmailWidget.js **/
var ___d2c_mailQuickEmailWidgetjs_c_on="2020-08-05 14:10:58";var $jscomp={scope:{},findInternal:function(a,b,c){a instanceof String&&(a=String(a));for(var d=a.length,e=0;e<d;e++){var f=a[e];if(b.call(c,f,e,a))return{i:e,v:f}}return{i:-1,v:void 0}}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(c.get||c.set)throw new TypeError("ES3 does not support getters and setters.");a!=Array.prototype&&a!=Object.prototype&&(a[b]=c.value)};
$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global?global:a};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(a,b,c,d){if(b){c=$jscomp.global;a=a.split(".");for(d=0;d<a.length-1;d++){var e=a[d];e in c||(c[e]={});c=c[e]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&null!=b&&$jscomp.defineProperty(c,a,{configurable:!0,writable:!0,value:b})}};
$jscomp.polyfill("Array.prototype.find",function(a){return a?a:function(a,c){return $jscomp.findInternal(this,a,c).v}},"es6-impl","es3");
var mailQuickEmail=function(){var a={name:"",email:"",message:"",phone:"",make:"",model:"",year:"",stockNumber:"",department:"",selector:".default",scope:null,assignValues:function(){a.name=$("#quickEmailName",a.scope).val()==$("#quickEmailName",a.scope).attr("placeholder")?"":$("#quickEmailName",a.scope).val();a.email=$("#quickEmailAddr",a.scope).val()==$("#quickEmailAddr",a.scope).attr("placeholder")?"":$("#quickEmailAddr",a.scope).val();a.phone=$("#quickEmailTel",a.scope).val()==$("#quickEmailTel",
a.scope).attr("placeholder")?"":$("#quickEmailTel",a.scope).val();a.message=$("#quickEmailMsg",a.scope).val()==$("#quickEmailMsg",a.scope).attr("placeholder")?"":$("#quickEmailMsg",a.scope).val();a.department=$("#quickEmailDepartment",a.scope).val()==$("#quickEmailDepartment",a.scope).attr("placeholder")?"":$("#quickEmailDepartment",a.scope).val();if("undefined"==typeof a.name||null==a.name)a.name="";if("undefined"==typeof a.email||null==a.email)a.email="";if("undefined"==typeof a.phone||null==a.phone)a.phone=
"";if("undefined"==typeof a.message||null==a.message)a.message="";if("undefined"==typeof a.department||null==a.department)a.department="";var b;b=d2cmedia.htmlFile();0<location.href.indexOf("-")&&(b=b.split("-"),0<b.length&&(a.make=b[0].replace("_","-")),1<b.length&&(a.model=b[1].replace("_","-")),2<b.length&&(a.year=b[2]),3<b.length&&(a.stockNumber=b[3].replace("id","")),0<$("#expressstocknumber",a.scope).length&&2<$("#expressstocknumber",a.scope).val().length&&(a.stockNumber=$("#expressstocknumber",
a.scope).val()),0<a.model.length&&0==a.year.length&&!isNaN(a.model)&&1980<a.model&&2100>a.model&&(a.year=searchCriteria.model,a.model=""));"undefined"==typeof a.make&&(a.make="");"undefined"==typeof a.model&&(a.model="");"undefined"==typeof a.year&&(a.year="");"undefined"==typeof a.message&&(a.message="")},applyPhoneWM:function(){if("(   )    -    "==$("#quickEmailTel",a.scope).val()||""==$("#quickEmailTel",a.scope).val())$("#quickEmailTel",a.scope).mask("",{placeholder:" "}),$("#quickEmailTel",a.scope).val(""),
$("#quickEmailTel",a.scope).Watermark($("#quickEmailTel").attr("placeholder"))},init:function(){$("#quickEmailName",a.scope).Watermark($("#quickEmailName",a.scope).attr("placeholder"));$("#quickEmailAddr",a.scope).Watermark($("#quickEmailAddr",a.scope).attr("placeholder"));$("#quickEmailTel",a.scope).Watermark($("#quickEmailTel",a.scope).attr("placeholder"));"undefined"!=typeof $("#couponDefaultMsg").val()&&0<$("#couponDefaultMsg").val().length?($("#quickEmailMsg",a.scope).css("height","50px"),$("#quickEmailMsg",
a.scope).attr("rows",2),$("#quickEmailMsg",a.scope).val($("#couponDefaultMsg").val())):$("#quickEmailMsg",a.scope).Watermark($("#quickEmailMsg",a.scope).attr("placeholder"));$(".sendQuickEmail",a.scope).on("click",a.save);$("#quickEmailTel",a.scope).focus(function(){$(this).mask("999 999-9999",{placeholder:" "})});$("#quickEmailTel").blur(function(){a.setSelector(this);setTimeout(function(){a.applyPhoneWM()},250)})},resetWatermarksColors:function(){0==a.name.length&&($("#quickEmailName",a.scope).css("color",
"#575757"),$("#quickEmailName",a.scope).val(""),$("#quickEmailName",a.scope).Watermark($("#quickEmailName",a.scope).attr("placeholder")));0==a.email.length&&($("#quickEmailAddr",a.scope).css("color","#575757"),$("#quickEmailAddr",a.scope).val(""),$("#quickEmailAddr",a.scope).Watermark($("#quickEmailAddr",a.scope).attr("placeholder")));0==a.message.length&&($("#quickEmailMsg",a.scope).css("color","#575757"),$("#quickEmailMsg",a.scope).val(""),$("#quickEmailMsg",a.scope).Watermark($("#quickEmailMsg",
a.scope).attr("placeholder")))},setSelector:function(){a.scope=$(this).closest("form");return a.scope},save:function(){a.setSelector.call(this);0<$("#emailSuccessMessage").length&&($("#emailSuccessMessage").parent().is("body")||$("#emailSuccessMessage").appendTo("body"));0<$("#emailFailMessage").length&&($("#emailFailMessage").parent().is("body")||$("#emailFailMessage").appendTo("body"));if("undefined"!=typeof $("#textSaveMailID",a.scope).val()&&"RebateCouponPromo"==$("#textSaveMailID",a.scope).val()){$.validity.start();
$("#quickEmailName",a.scope).require().nonHtml();$("#quickEmailMsg",a.scope).require().nonHtml();$("#quickEmailAddr",a.scope).require().validEmailAddress();var b=$.validity.end();if(!b.valid)return $("#MissingValidationMsg").css({position:"absolute",left:60,top:214,width:301}),$("#MissingValidationMsg").show(),$(document).bind("mousedown",function(a){$.validity.clear();$("#MissingValidationMsg").hide();$(this).unbind(a)}),!1}a.assignValues();b=!0;$.validity.setup({outputMode:"popup",scrollTo:!1}).start();
0<$("#expressSelectRequired",a.scope).length&&"1"==$("#expressSelectRequired",a.scope).val()&&$("#quickEmailDepartment",a.scope).requireWithWatermark().nonHtml();0<$("#expressPhoneRequired",a.scope).length&&"1"==$("#expressPhoneRequired",a.scope).val()&&($("#quickEmailTel",a.scope).hasClass("required")||$("#quickEmailTel",a.scope).addClass("required"),$("#quickEmailTel",a.scope).requireWithWatermark());$("#quickEmailName",a.scope).requireWithWatermark().nonHtml();$("#quickEmailAddr",a.scope).requireWithWatermark().validEmailAddress();
$("#quickEmailMsg",a.scope).requireWithWatermark().nonHtml();b=$.validity.end();(b=b.valid)?("undefined"!=typeof $("#textSaveMailID",a.scope).val()&&""!=$("#textSaveMailID",a.scope).val()?mailPage.mailID=$("#textSaveMailID",a.scope).val():mailPage.mailID="QuickEmail","undefiend"!=typeof $("#newSectionOverride").val()&&"1"==$("#newSectionOverride").val()&&-1==a.scope.hasClass("menu")&&(mailPage.mailID="QuickEmailNewInventory"),"undefined"!=typeof $("#printFlag",a.scope).val()&&"1"==$("#printFlag",
a.scope).val()&&"undefined"!=$("#couponPrintURL").val()&&-1<$("#couponPrintURL").val().indexOf(".html")&&(printCouponUrl=$("#couponPrintURL").val(),window.open(printCouponUrl,"_blank")),mailPage.jqScope=a.scope,mailPage.save()):($("#quickEmailForm .MissingValidationMsg",a.scope).show(),$("#quickEmailForm",a.scope).bind("click",function(a){$(this).find(".MissingValidationMsg").hide();$(this).unbind(a)}));return b},isEmail:function(a){return/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(a)},
validateEmail:function(a){var c=!1;$.ajax({type:"GET",url:"/fr/php/validateEmailAccount.php?email="+a,async:!1,success:function(a,b,f){1==a&&(c=!0)}});return c},getSendTo:function(){var b=$("#quickEmailDepartment",a.scope).val();return $("#expressDepartmentEmail_"+b).val()}};return a}();
$(document).ready(function(){$("#quickEmailForm.default").jqTransform();mailQuickEmail.setSelector.call($("#quickEmailForm.default"));mailQuickEmail.init();0<$("#quickEmailForm.menu").length&&($("#quickEmailForm.menu").jqTransform(),mailQuickEmail.setSelector.call($("#quickEmailForm.menu")),mailQuickEmail.init())});
/** /js/openhours.js **/
var ___d2c_openhoursjs_c_on="2020-08-05 14:08:25";var $jscomp={scope:{},findInternal:function(a,d,c){a instanceof String&&(a=String(a));for(var b=a.length,e=0;e<b;e++){var f=a[e];if(d.call(c,f,e,a))return{i:e,v:f}}return{i:-1,v:void 0}}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(a,d,c){if(c.get||c.set)throw new TypeError("ES3 does not support getters and setters.");a!=Array.prototype&&a!=Object.prototype&&(a[d]=c.value)};
$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global?global:a};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(a,d,c,b){if(d){c=$jscomp.global;a=a.split(".");for(b=0;b<a.length-1;b++){var e=a[b];e in c||(c[e]={});c=c[e]}a=a[a.length-1];b=c[a];d=d(b);d!=b&&null!=d&&$jscomp.defineProperty(c,a,{configurable:!0,writable:!0,value:d})}};
$jscomp.polyfill("Array.prototype.find",function(a){return a?a:function(a,c){return $jscomp.findInternal(this,a,c).v}},"es6-impl","es3");
var OpenHours=function(a){function d(){var a=$(this).siblings(".expandable_content").eq(0).hasClass("open_hours_map_active");c(this).find(".open_hours_map_active").slideToggle("slow");c(this).find(".map_open_hours_expand_arrow").removeClass("fa-angle-up");c(this).find(".map_open_hours_expand_arrow").addClass("fa-angle-down");c(this).find(".open_hours_map_active").removeClass("open_hours_map_active");a||($(this).siblings(".expandable_content").eq(0).slideToggle("slow"),$(this).siblings(".expandable_content").eq(0).addClass("open_hours_map_active"),
$(this).find(".map_open_hours_expand_arrow").removeClass("fa-angle-down"),$(this).find(".map_open_hours_expand_arrow").addClass("fa-angle-up"))}function c(a){return $(a).parents(b.options.container)}var b=this;b.options=a;b.$container=$(b.options.container);b.init=function(){b.$container.find(".map_open_hours_expand").on("click",d);0<b.$container.find(".map_open_hours_expand.default_opened").length?b.$container.find(".map_open_hours_expand.default_opened").trigger("click"):b.options.hasOwnProperty("autoOpen")&&
!b.options.autoOpen||b.$container.find(".map_open_hours_expand").first().trigger("click")};return b};
/** /js/mailExpressRequestWidget.js **/
/**
 * CMailExpressRequestWidget
 *
 * @param $$         object to which the widget is attached
 * @param settings   list of settings for the widget
 *
 * @callback onBeforeInit       called before initializing the widget
 * @callback onAfterInit        called after initializing the widget
 * @callback onBeforeValidate   called before validating the form
 * @callback onAfterValidate    called after validating the form ** only called if the form was valid
 * @callback onBeforeSendEmail  called before sending the email
 * @callback onAfterSendEmail   called after the email was sent ** called in the emailHandler callback
 *
 * @constructor
 *
 * @author  Roxanne Desmeules <roxanne@d2cmedia.ca>
 * @since   2018.11.06
 */
function CMailExpressRequestWidget($$, settings) {
    var _self = this;

    _self.scope = $($$);
    _self.settings = settings;
    _self.hasErrors = false;

    //  -----------------------

    /**
     * Initialize the widget
     */
    _self.init = function () {
        //  CALLBACK --- ON BEFORE INIT
        if (typeof _self.settings.onBeforeInit === "function") {
            if (_self.settings.onBeforeInit.call(_self.scope, _self) === false) {
                return false;
            }
        }

        //  apply phone mask to input
        _self.scope.find(_self.settings.phone.selector ).mask(_self.settings.phone.mask, { placeholder: " " });
        
        var form = _self.scope.is('form') ? _self.scope : _self.scope.find('form');

        //  on form submit
        form.submit(function () {
            _self.submit();
            return false;
        });

        //  on input & textarea focus, remove valivation errors
        _self.scope.find('*').on('focus', function() {
            _self.resetErrors();
        });

        //  define the widget as initialized
        _self.settings.initialized = true;

				// Write settings state back to data element
				_self.scope.data("|mailexpress-options", _self.settings);
				
        //  CALLBACK --- ON AFTER INIT
        if (typeof _self.settings.onAfterInit === "function") {
            if (_self.settings.onAfterInit.call(_self.scope, _self) === false) {
                return false;
            }
        }
    };

    /**
     * Get Input Values
     *
     * This method will get the values of all input matching the passed selector
     * then join them together with the specific glue.
     *
     * @param {string} selector
     * @param {string} glue
     *
     * @returns {*|string}
     */
    _self.getInputValues = function (selector, glue) {
        return _self.scope.find(selector)
            .map(function () {
                return $(this).val();
            })
            .get()
            .join(glue); // unnecessary
    };

    /**
     * Prepare Email Handler
     *
     * This method will define all the custom configurations which may comes
     * from the widget settings or from the form inputs. Then those configurations
     * will be merged with the EmailHandler default settings to generate the
     * emailHandler to send an email in the widget.
     *
     * @param {string} subject
     * @param {string} body
     *
     * @return {emailHandler}
     */
    _self.prepareEmailHandler = function(subject, body) {
        $.extend(emailHandler, {
            mailID: _self.settings.emailId,
            subject: subject,
            body: body,
            sendTo: _self.settings.email.sendTo,
            sendToADFFormat: _self.settings.email.sendToADF,
            department: _self.settings.department,

            userFirstName: _self.getInputValues("input[name='fname']", " "),
            userLastName: _self.getInputValues("input[name='lname']", " "),
            userEmail: _self.getInputValues("input[type='email'], input[name='email'], input[name='mail']", ";"),
            userName: _self.getInputValues("input[name='name']", " "),
            userPhone: _self.getInputValues("input[type='tel'], input.phone", ","),
            userPostal: _self.getInputValues("input.postal", ","),
						make:  _self.getInputValues('input[name=make]'),
						model: _self.getInputValues('input[name=model]'),
						year:  _self.getInputValues('input[name=year]'),
            tradein: _self.getInputValues("input.tradein", ","),
            address: _self.getInputValues("input[name='address']", ""),
            birthdate: _self.getInputValues("input[name='birthdate']", "")
        });

        if (typeof emailHandler.userName === "string" && emailHandler.userFirstName == '') {
            var name = emailHandler.userName.split(" ");

            emailHandler.userFirstName = name.shift();
            emailHandler.userLastName  = name.join(" ");
        }

        mailSentHandler = getMailSentHandler();

        //  CALLBACK --- ON AFTER SEND EMAIL
        if (typeof _self.settings.onAfterSendEmail === "function") {
            emailHandler.callback = function (success) {
                _self.settings.onAfterSendEmail.call(_self.scope, _self, success);
                //Send generic confirm form
                $('#generic_form_confirm').find('.labelemail').val(_self.settings.googleTracking.label);
                $('#generic_form_confirm').find('.labelsection').val(_self.settings.googleTracking.labelsection);
                $('#generic_form_confirm').trigger('submit');
            };
        } else {
            //  otherwise, display error or success message
            emailHandler.callback = function (success) {
                if (success) {
                    mailSentHandler.showSuccess();
                    _self.resetFields();
                    //Send generic confirm form
                    $('#generic_form_confirm').find('.labelemail').val(_self.settings.googleTracking.label);
                    $('#generic_form_confirm').find('.labelsection').val(_self.settings.googleTracking.labelsection);
                    $('#generic_form_confirm').trigger('submit');
                } else {
                    mailSentHandler.showFail();
                }
            };
        }

        return emailHandler;
    };

    /**
     * Reset Errors
     */
    _self.resetErrors = function () {
        if(!_self.hasErrors) {
            return;
        }

        $(".mail-express-widget__footer__required-fields").addClass("hidden");

        $(".mail-express-widget__form--error").removeClass("mail-express-widget__form--error");

        _self.hasErrors = false;
    };

    /**
     *
     */
    _self.resetFields = function () {
        //  remove all the errors, just in case
        _self.resetErrors();

        //  reset all inputs in the scope
        _self.scope.find(":input")
            .not(":button, :submit, :reset, :hidden")
            .prop("checked", false)
            .prop("selected", false)
            .not(":checkbox, :radio, select")
            .val("");
    };

    /**
     * Submit
     *
     * This method will submit the express request. A verification will be made to make sure the
     * form is valid; if it isn't then errors will be displayed to the used; if it is, the form
     * content will be fetch then send the form.
     *
     * @returns {boolean}
     */
    _self.submit = function () {
        //  CALLBACK --- ON BEFORE VALIDATE
        if (typeof _self.settings.onBeforeValidate === "function") {
            if (_self.settings.onBeforeValidate.call(_self.scope, _self) === false) {
                return false;
            }
        }

        //  remove all errors
        _self.resetErrors();

        //  if form isn't valid, then display error message
        if (!_self.validateForm().valid) {
            _self.hasErrors = true;
            $(".mail-express-widget__footer__required-fields").removeClass("hidden");

            return false;
        }

        //  CALLBACK --- ON AFTER VALIDATE
        if (typeof _self.settings.onAfterValidate === "function") {
            if (_self.settings.onAfterValidate.call(_self.scope, _self) === false) {
                return false;
            }
        }

        //  prepare the email definition parser
        var email = new MailDefinitionParser(_self.scope, {
            fields: _self.scope.serializeArray(),
            subjectSelector: _self.settings.definitions.subject,
            bodySelector: _self.settings.definitions.body
        });

        //  prepare emailHandler data and keep it as reference so callbacks have access to it
        _self.prepareEmailHandler(email.subject, email.body);

        //  CALLBACK --- ON BEFORE SEND EMAIL
        if (typeof _self.settings.onBeforeSendEmail === "function") {
            if (_self.settings.onBeforeSendEmail.call(_self.scope, _self) === false) {
                return false;
            }
        }

        //  send the email
        emailHandler.sendMail();
    };

    _self.validateForm = function () {
        $.validity.setup(_self.settings.validation).start();

        //  add validation rules for each input (that aren't hidden), select and textarea.
        _self.scope.find("input:not(:hidden), select, textarea").each(function (idx, elem) {
            var $$ = $(elem);

            $$.nonHtml();

            //  add required validation
            if ($$.is("[required]") || $$.is("[data-required]") || $$.hasClass("required")) {
                $$.require();
            }

            //  add email validation
            if ($$.attr("type") === "email" || $$.is("[data-email]") || $$.hasClass("email")) {
                $$.validEmailAddress();
            }

            //  add phone validation
            if ($$.attr("type") === "tel") {
                if ($$.is("[data-mobile]") || $$.hasClass("mobile")) {
                    $$.validateMobile();
                }

                if ($$.attr("type") === "tel" || $$.is("[data-phone]") || $$.hasClass("phone")) {
                    $$.validatePhone();
                }
            }
        });

        return $.validity.end();
    };

    //  return instance of itself so it is chainable
    return _self;
}

/**
 * Add the mailExpressRequest widget to the jQuery object
 */
jQuery(function ($) {
    $.fn.mailExpressRequest = function (configs) {
        //  get configurations passed when initializing the widget
        configs = configs || {};

        var defaults = {
            emailId: "QuickEmail",
            phone: {
                selector: "[type=tel]",
                mask: "999 999-9999"
            },
            validation: {
                outputMode: "cssOnly",
                scrollTo: false,
                cssClass: "mail-express-widget__form--error"
            },
            definitions: {
              subject: ".mail-express-widget__email-definition__subject",
							body: ".mail-express-widget__email-definition__body",
            },
            email: {
                sendTo: '',
                sendToADF: ''
            },
            googleTracking: {
                label:'',
                labelsection:'',
            }
        };

        if (this.length === 1) {

            //Get widget from element data attribute
            var widget = this.data("mailexpress-widget");

            //Widget doesn't exist
            if (typeof widget === 'undefined') {

                // get settings from previous calls
                var attached = (this.data("|mailexpress-options")) ? this.data("|mailexpress-options") : {};

                //  get the settings
                // build object settings
                var settings = $.extend({}, defaults, attached, configs);

                //  create the widget
                widget = new CMailExpressRequestWidget(this, settings);

                //  initialize the widget
                if (!settings.initialized) {
                    widget.init();
                }

                //Set widget on element data attribute
                this.data('mailexpress-widget', widget);
            }

            //  return the widget
            return widget;
        } else {
            var widgets = [];

            this.each(function () {
                var _currentElem = this;

                widgets.push($(_currentElem).mailExpressRequest(configs));
            });

            return widgets;
        }
    };
});
/** /js/mailDefinitionParser.js **/
var ___d2c_mailDefinitionParserjs_c_on="2020-08-05 14:10:48";var $jscomp={scope:{},findInternal:function(c,d,b){c instanceof String&&(c=String(c));for(var a=c.length,f=0;f<a;f++){var g=c[f];if(d.call(b,g,f,c))return{i:f,v:g}}return{i:-1,v:void 0}}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(c,d,b){if(b.get||b.set)throw new TypeError("ES3 does not support getters and setters.");c!=Array.prototype&&c!=Object.prototype&&(c[d]=b.value)};
$jscomp.getGlobal=function(c){return"undefined"!=typeof window&&window===c?c:"undefined"!=typeof global?global:c};$jscomp.global=$jscomp.getGlobal(this);$jscomp.polyfill=function(c,d,b,a){if(d){b=$jscomp.global;c=c.split(".");for(a=0;a<c.length-1;a++){var f=c[a];f in b||(b[f]={});b=b[f]}c=c[c.length-1];a=b[c];d=d(a);d!=a&&null!=d&&$jscomp.defineProperty(b,c,{configurable:!0,writable:!0,value:d})}};
$jscomp.polyfill("Array.prototype.find",function(c){return c?c:function(c,b){return $jscomp.findInternal(this,c,b).v}},"es6-impl","es3");
function MailDefinitionParser(c,d){var b=this;b.scope=c;b.fields=d.fields;delete d.emailType;delete d.fields;b.settings=d;b.subject="";b.body="";b.cleanBlankVariables=function(a){a=a.replace(/{\$QUESTIONS}/g,"");a=a.replace(/{\$MESSAGE}/g,"");a=a.replace(/{\$EMAILPHONE}/g,"");a=a.replace(/{\$EMAILMAKE}/g,"");a=a.replace(/{\$EMAILMODEL}/g,"");a=a.replace(/{\$EMAILYEAR}/g,"");a=a.replace(/{\$PAYMENT}/g,"");a=a.replace(/{\$PAYMENTTERM}/g,"");a=a.replace(/{\$OFFER}/g,"");a=a.replace(/{\$STOCKNUMBER}/g,
"");a=a.replace(/{\$COLOR}/g,"");a=a.replace(/{\$NAME}/g,"");a=a.replace(/{\$FNAME}/g,"");a=a.replace(/{\$LNAME}/g,"");return a=a.replace(/{\$EMAIL}/g,"")};b.getLastVehicleViewed=function(){var a=$("#lastviewedmake");if(0===a.length&&0===a.val().length)return"";var a=a.val(),b=$("#lastviewedstocknumber").val(),c=$("#lastviewedmodel").val(),d=$("#lastviewedyear").val();return a+" "+c+" "+d+(0<b.length?" (Stock# "+b+")":"")};b.globalReplacements=function(){var a=[];$("input:hidden").each(function(b,
c){var d=$(c).attr("name")||$(c).attr("id");if(!d)return!0;var e=!1;"emailbuildandprice"===d.toLowerCase()&&""===$(c).val().replace(/ /g,"")&&(e=!0);e||("brand"===d.toLowerCase()&&a.push({name:"make",value:$(c).val()}),a.push({name:d,value:$(c).val()}))});a.push({name:"LASTVEHICLEVIEWED",value:b.getLastVehicleViewed()});return a};b.init=function(){b.parse();b.body=b.cleanBlankVariables(b.body);b.subject=b.cleanBlankVariables(b.subject)};b.parse=function(){b.subject=b.scope.find(b.settings.subjectSelector).html();
b.body=b.scope.find(b.settings.bodySelector).html();var a=[];[].push.apply(a,b.fields);[].push.apply(a,b.globalReplacements());$(a).each(function(a,c){var d=c.value,e=[];e.push(c.name.toUpperCase());e.push("M"+c.name.toUpperCase());switch(c.name.toUpperCase()){case "PHONE":e.push("EMAILPHONE");e.push("USERPHONE");break;case "SEARCHEDVEHICLE":""==emailHandler.trim&&$("#popuptrim").length&&"{$POPUPTRIM}"!=$("#popuptrim").val()&&(emailHandler.trim=$("#popuptrim").val(),d+=" "+emailHandler.trim);d=$("<span></span>").attr("id",
"phSEARCHVEHICLE").text(d).html();break;case "NAME":e.push("FNAME");break;case "DEPARTMENT":e.push("DEPARTMENT2");break;case "MESSAGE":e.push("MESSAGES")}e=new RegExp("{\\$("+e.join("|")+")}","g");b.body=b.body.replace(e,d);b.subject=b.subject.replace(e,d)})};b.init();return b};
/** /js/visitContactForm.js **/
$(document).ready(function(){
	$('.visitContactForm').each(function(){

		$(this).parent().parent().on('hover', function(e){
			//Center in parent div
			if(!$(this).find('.visitContactFormContainer').hasClass('fixedPosition')){
				var left = ($(this).outerWidth() - $(this).find('.visitContactFormContainer').outerWidth()) / 2;
				$(this).find('.visitContactFormContainer').css('left', left+'px');
				$(this).find('.visitContactFormContainer').addClass('fixedPosition');
			}
		});

		$(this).parent().on('hover', function(e){
			//Add class to keep the menu open, this is to prevent menu closing when mousing over things like form autocomplete
			if (!$(this).hasClass('isOpen') && e.type !== 'mouseleave') {
				$(this).addClass('isOpen');
			}

			if (e.type === 'mouseleave') {
				var isCalendar = $(e.toElement).hasClass('xdsoft_datetimepicker') || $(e.toElement).closest('.xdsoft_datetimepicker').length;
				//If the mouse hover is currently NOT a child element of the form, close form
				if (e.toElement !== null && !isCalendar) {
					$(this).removeClass('isOpen');
				}
			}
		});

		var emailId = $(this).attr('data-mailid');
		var sendTo = $(this).find('.textSendToEmail').val();
		var sendToAdf = $(this).find('.textSendToEmailAdf').val();
		var department = $(this).find('.visitContactFormDep').val();
		$(this).mailExpressRequest({
			emailId: emailId,
			department: department,
			email: {
				sendTo: sendTo,
				sendToADF: sendToAdf
			},
			definitions: {
				subject: ".emailSubjectDef_VisitContact",
				body: ".emailBodyDef_VisitContact",
			},
			onAfterInit : function(){
				//Phone mask
				$(this).find(".visitContactPhone").mask("999 999-9999", { placeholder: " " });
				//Datetimepicker init
				schedule = new MailSchedule({
					scope: $(this)
				});
				schedule.firstChoiceObjectId = $(this).find('.visitContactDate').attr('id');
				schedule.init();

				$(this).find('.visitContactDate').on('change', function(){
					if($(this).val().length === 0){
						$(this).parent().parent().find('.visitContactComment').removeClass('showComment');
					} else {
						$(this).parent().parent().find('.visitContactComment').addClass('showComment');
					}
				});

				$(this).on('click', '.visitContactFormSubmit', function(){
					$(this).closest('.visitContactForm').mailExpressRequest().submit();
					return false;
				});
			}
		});
	});
});
/** /js/geoLocation.js **/
var ___d2c_geoLocationjs_c_on="2020-08-05 14:17:05";var geoLocator=function(f){var a=this;a.mapsAPIKey="AIzaSyD-R8_HIGzYdpggK-_ZVT5Qi7UhcWzOEMc";a.useHTML5=!0;a.geocodeLocation=!0;a.attemptPageNum=0;a.trackLocationGA=!1;a.forceGeolocAttempt=!1;a.showPointerMessage=!0;a.timeouts=[];a.browser="";a.isMobile="1"==$("#ismobile").val();a.geolocStatuses={OK:"SUCCESS",REFUSED:"REFUSED",COOKIE_ACCEPTED:"PRE_ACCEPTED",COOKIE_REFUSED:"PRE_REFUSED",CANCELED:"CANCELED",FAIL:"FAILED"};a.geolocErrors={INVALID_RESPONSE:"INVALID_RESPONSE",CONNECTION_FAILED:"CONNECTION_FAILED",
GEOLOC_FAILED:"GEOLOC_FAILED",GEOLOC_REFUSED:"GEOLOC_REFUSED",GEOCODE_FAILED:"GEOCODE_FAILED"};a.geolocResult={result:0,geoloc_date:"",geoloc_status:a.geolocStatuses.FAIL,geocode_status:0,latitude:0,longitude:0,accuracy:0,postal_code:"",geocode_address:"",geocode_address_str:""};a.geolocCallback=function(){f(a.geolocResult);f=function(){console.log("Geo callback already fired.")}};a._init=function(){a.isMobile&&(a.showPointerMessage=!1);if(0<a.attemptPageNum){var b=null!=$.cookie("geolocPageViews")?
parseInt($.cookie("geolocPageViews"))+1:1;$.cookie("geolocPageViews",b<a.attemptPageNum?b:0,{path:"/"});if(b<a.attemptPageNum)return a.geolocResult.result=0,a.geolocResult.status=a.geolocStatuses.CANCELED,a.geolocCallback(),!1}if(!a.forceGeolocAttempt&&$.cookie("geolocProcessed"))return b=JSON.parse($.cookie("geolocProcessed")),"1"==b.accepted?(a.geolocResult.result=1,a.geolocResult.geoloc_date=b.geoloc_date,a.geolocResult.geoloc_status=a.geolocStatuses.COOKIE_ACCEPTED,a.geolocResult.latitude=b.latitiude,
a.geolocResult.longitude=b.longitude,a.geolocResult.geocode_address=b.address,a.geolocResult.geocode_address_str=b.address_str):(a.geolocResult.result=0,a.geolocResult.status=a.geolocStatuses.COOKIE_REFUSED),a.geolocCallback(),!1;if("https:"!=location.protocol)return a.geolocResult.result=0,a.geolocResult.status=a.geolocStatuses.CANCELED,a.geolocCallback(),!1;if(lt_IE9||!navigator.geolocation)a.useHTML5=!1;navigator.browser=function(){var a=navigator.userAgent,b,d=a.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i)||
[];if(/trident/i.test(d[1]))return b=/\brv[ :]+(\d+)/g.exec(a)||[],"IExplorer "+(b[1]||"");if("Chrome"===d[1]&&(b=a.match(/\bOPR\/(\d+)/),null!=b))return"Opera "+b[1];d=d[2]?[d[1],d[2]]:[navigator.appName,navigator.appVersion,"-?"];null!=(b=a.match(/version\/(\d+)/i))&&d.splice(1,1,b[1]);return d.join(" ")}();a.browser=navigator.browser;return!0};a.handleLocationSuccess=function(){var b="Latitude: "+a.geolocResult.latitude+"; Longitude: "+a.geolocResult.longitude;3<=a.geolocResult.postal_code.length&&
(b=a.geolocResult.postal_code);a.trackLocation("Geolocation","Accepted",b);a.geolocResult.geoloc_date=(new Date).getTime();b=new Date;b.setHours(23,59,59,0);$.cookie("geolocProcessed",JSON.stringify({accepted:1,geoloc_date:a.geolocResult.geoloc_date,latitude:a.geolocResult.latitude,longitude:a.geolocResult.longitude,postal_code:a.geolocResult.postal_code,accuracy:a.geolocResult.accuracy,address:a.geolocResult.geocode_address,address_str:a.geolocResult.geocode_address_str}),{expires:b,path:"/"});a.geolocCallback()};
a.handleLocationError=function(b,c){if("undefined"==typeof c||null==c)c="";a.geolocResult.result=0;a.geolocResult.geoloc_date=(new Date).getTime();a.geolocResult.geoloc_status=a.geolocStatuses.FAIL;switch(b){case a.geolocErrors.INVALID_RESPONSE:c="Geoloc error mesage: Invalid response data";break;case a.geolocErrors.CONNECTION_FAILED:c="Geoloc error mesage: Conection failed";break;case a.geolocErrors.GEOLOC_REFUSED:a.geolocResult.geoloc_status=a.geolocStatuses.REFUSED;break;case a.geolocErrors.GEOLOC_FAILED:break;
case a.geolocErrors.GEOCODE_FAILED:c="Geoloc error mesage: Invalid response data";break;default:c="Unknown error ocurred"}a.trackLocation("Geolocation","Failed",c);a.geolocCallback()};a.getLocation=function(){a._init()&&(0==a.useHTML5?a.getGoogleServiceLocation():a.getHTML5Location())};a.getGoogleServiceLocation=function(){a.handleLocationSuccess();return!1};a.getHTML5Location=function(){a.showGeolocMsg();navigator.geolocation.getCurrentPosition(function(b){a.hideGeolocMsg();a.clearSetTimeouts();
a.geolocResult.result=1;a.geolocResult.geoloc_status=a.geolocStatuses.OK;a.geolocResult.latitude=b.coords.latitude;a.geolocResult.longitude=b.coords.longitude;a.geolocResult.accuracy=b.coords.accuracy;if(1!=a.geocodeLocation)return a.handleLocationSuccess(),!1;a.latLongGeocode(b.coords.latitude,b.coords.longitude)},function(b){console.log(b);var c="Geoloc error code: "+b.code+", geoloc error mesage: "+b.message;a.hideGeolocMsg();a.clearSetTimeouts();$.cookie("geolocProcessed",JSON.stringify({accepted:0}),
{expires:1,path:"/"});var e=a.geolocErrors.GEOLOC_REFUSED;1!=parseInt(b.code)&&(e=a.geolocErrors.GEOLOC_FAILED);a.handleLocationError(e,c)},{timeout:25E3})};a.latLongGeocode=function(b,c){a.geolocResult.geocode_address=b+"|"+c;a.geolocResult.geocode_address_str="Latitude: "+b+"; Longitude: "+c;a.handleLocationSuccess()};a.trackPostal=function(){if($cookie=$.cookie("HTML5Geo"))if($cookie=JSON.parse($cookie),$cookie.postal_code)return;if("undefined"!==typeof a.geolocResult.postal_code&&""!==a.geolocResult.postal_code){var b=
a.geolocResult.postal_code+"|"+a.geolocResult.accuracy;"undefined"!=typeof activeUserProfileMng&&"undefined"!=typeof activeUserProfileMng.logPageViewEvent?("undefined"!==typeof debug&&debug("Log Event",a.geolocResult.postal_code,"HTML5Geo.postal"),activeUserProfileMng.logPageViewEvent(b,"HTML5Geo.postal")):"undefined"!==typeof debug&&debug("!UNLOGGED EVENT!",a.geolocResult.postal_code,"HTML5Geo.postal");b=new Date;b.setHours(23,59,59,0);$.cookie("HTML5Geo",JSON.stringify({postal_code:1}),{expires:b,
path:"/"})}};a.getAddressCoord=function(a,c){return!1};a.trackLocation=function(b,c,e){if(!a.trackLocationGA)return!1};a.clearSetTimeouts=function(){for(var b=0;b<a.timeouts.length;b++)clearTimeout(a.timeouts[b]);a.timeouts=[]};a.showGeolocMsg=function(){if(!a.showPointerMessage)return!1;a.clearSetTimeouts();var b=setTimeout(function(){geolocFail()},3E4);a.timeouts.push(b);if(-1<a.browser.indexOf("Firefox")||-1<a.browser.indexOf("IE"))$(".geoloc-modal-bg").off("click").on("click",function(){geolocFail();
clearTimeout(b)}),$("#geolocationMsg").off("click").on("click",function(){geolocFail();clearTimeout(b)}),$("#geolocationMsgIE").off("click").on("click",function(){geolocFail();clearTimeout(b)});var c="geolocationMsg",e=!0,d={top:"0",left:"0"};switch(!0){case -1<a.browser.indexOf("IE"):d={bottom:"0px",left:"43%"};c="geolocationMsgIE";break;case -1<a.browser.indexOf("Firefox"):d={top:"90px",left:"5px"};$("img.button_pointer").css("left","75px");$("img.button_pointer").css("top","35px");-1==$("#txtUserAgent").val().indexOf("Windows")&&
$("img.button_pointer").css("left","175px");break;case -1<a.browser.indexOf("Chrome"):d={top:"65px",left:"0px"};$("img.button_pointer").css("left","210px");-1==$("#txtUserAgent").val().indexOf("Windows")&&(d={top:"75px",left:"50px"},$("img.button_pointer").css("left","240px"));break;case -1<a.browser.indexOf("Safari"):d={top:"515px",left:"35%"};e=!0;break;case -1<a.browser.indexOf("Opera"):d={top:"0",left:"0"};e=!1;break;default:d={top:"0",left:"0"},e=!1}e&&("undefined"!=typeof $(".reveal-modal-bg").val()&&
"block"==$(".reveal-modal-bg").css("display")&&$(".reveal-modal-bg").hide(),$(".geoloc-modal-bg").show(),$("#"+c).css(d),$("#"+c).show(),"undefined"==typeof siteSection&&(siteSection="UNDEFINED"),a.trackLocation("Geolocation","Section-"+siteSection,""))};a.hideGeolocMsg=function(b){if(!a.showPointerMessage)return!1;if("undefined"==typeof b||null==b)b=!1;$(".geoloc-modal-bg").hide();b||($("#geolocationMsg").hide(),$("#geolocationMsgIE").hide())};a.geolocFail=function(){-1<a.browser.indexOf("IE")&&
location.reload();overlayOnly=!0;if(-1<a.browser.indexOf("Firefox")||-1<a.browser.indexOf("IE"))overlayOnly=!1;a.hideGeolocMsg(overlayOnly);return!1};a.getDistance=function(b,c,e){return a.getDistanceHaversine(b,c)};a.getDistanceHaversine=function(a,c){var e=(c.lat-a.lat)*Math.PI/180,d=(c["long"]-a["long"])*Math.PI/180,e=Math.sin(e/2)*Math.sin(e/2)+Math.cos(a.lat*Math.PI/180)*Math.cos(c.lat*Math.PI/180)*Math.sin(d/2)*Math.sin(d/2);return(12756274*Math.atan2(Math.sqrt(e),Math.sqrt(1-e))).toFixed(2)};
a.getDistanceGmaps=function(b,c){return a.getDistanceHaversine(b,c)}};
/** /js/toastr.js **/
var ___d2c_toastrjs_c_on="2020-08-05 14:15:59";(function(n){n(["jquery"],function(c){return function(){function r(a,g){a||(a=m());e=c("#"+a.containerId);if(e.length)return e;if(g){var d=a;e=c("<div/>").attr("id",d.containerId).addClass(d.positionClass).attr("aria-live","polite").attr("role","alert").css("color",d.color);e.appendTo(c(d.target))}return e}function n(a,g,d){d=d&&d.force?d.force:!1;return a&&(d||0===c(":focus",a).length)?(a[g.hideMethod]({duration:g.hideDuration,easing:g.hideEasing,complete:function(){v(a)}}),!0):!1}function B(){return{tapToDismiss:!0,
toastClass:"toast",containerId:"toast-container",debug:!1,showMethod:"fadeIn",showDuration:300,showEasing:"swing",onShown:function(){c(".tradeInBarMobileButton").addClass("withToaster")},hideMethod:"fadeOut",hideDuration:1E3,hideEasing:"swing",onHidden:function(){c(".tradeInBarMobileButton").removeClass("withToaster")},onClose:function(){c(".tradeInBarMobileButton").removeClass("withToaster")},extendedTimeOut:1E3,iconClasses:{error:"toast-error",info:"toast-info",success:"toast-success",warning:"toast-warning"},
iconClass:"toast-info",color:"#FFF",bgColor:"",positionClass:"toast-top-right",timeOut:5E3,titleClass:"toast-title",messageClass:"toast-message",target:"body",closeHtml:'<button type="button">&times;</button>',newestOnTop:!0,preventDuplicates:!1,progressBar:!1}}function k(a){function g(){f.hover(C,n);!b.onclick&&b.tapToDismiss&&f.click(d);b.closeButton&&u&&u.click(function(a){a.stopPropagation?a.stopPropagation():void 0!==a.cancelBubble&&!0!==a.cancelBubble&&(a.cancelBubble=!0);if("function"==typeof b.onClose)b.onClose();
d(!0)});b.onclick&&f.click(function(){b.onclick();d()})}function d(a){if(!c(":focus",f).length||a)return clearTimeout(h.intervalId),f[b.hideMethod]({duration:b.hideDuration,easing:b.hideEasing,complete:function(){v(f);if(b.onHidden&&"hidden"!==p.state)b.onHidden();p.state="hidden";p.endTime=new Date;l&&l(p)}})}function n(){if(0<b.timeOut||0<b.extendedTimeOut)w=setTimeout(d,b.extendedTimeOut),h.maxHideTime=parseFloat(b.extendedTimeOut),h.hideEta=(new Date).getTime()+h.maxHideTime}function C(){clearTimeout(w);
h.hideEta=0;f.stop(!0,!0)[b.showMethod]({duration:b.showDuration,easing:b.showEasing})}function k(){var a=(h.hideEta-(new Date).getTime())/h.maxHideTime*100;x.width(a+"%")}var b=m(),y=a.iconClass||b.iconClass;"undefined"!==typeof a.optionsOverride&&(b=c.extend(b,a.optionsOverride),y=a.optionsOverride.iconClass||y);var q;a:{if(b.preventDuplicates)if(a.message===z){q=!0;break a}else z=a.message;q=!1}if(!q){A++;e=r(b,!0);var w=null,f=c("<div/>");q=c("<div/>");var t=c("<div/>"),x=c("<div/>"),u=c(b.closeHtml),
h={intervalId:null,hideEta:null,maxHideTime:null},p={toastId:A,state:"visible",startTime:new Date,options:b,map:a};6<b.bgColor.length&&f.css("background-color",b.bgColor);a.iconClass&&f.addClass(b.toastClass).addClass(y);a.title&&(q.append(a.title).addClass(b.titleClass),f.append(q));a.message&&(t.append(a.message).addClass(b.messageClass),f.append(t));b.closeButton&&(u.addClass("toast-close-button").attr("role","button"),f.prepend(u));b.progressBar&&(x.addClass("toast-progress"),f.prepend(x));b.newestOnTop?
e.prepend(f):e.append(f);f.hide();f[b.showMethod]({duration:b.showDuration,easing:b.showEasing,complete:b.onShown});0<b.timeOut&&(w=setTimeout(d,b.timeOut),h.maxHideTime=parseFloat(b.timeOut),h.hideEta=(new Date).getTime()+h.maxHideTime,b.progressBar&&(h.intervalId=setInterval(k,10)));g();l&&l(p);b.debug&&console&&console.log(p);return f}}function m(){return c.extend({},B(),t.options)}function v(a){e||(e=r());a.is(":visible")||(a.remove(),0===e.children().length&&(e.remove(),z=void 0))}var e,l,A=
0,t={clear:function(a,g){var d=m();e||r(d);if(!n(a,d,g))for(var k=e.children(),l=k.length-1;0<=l;l--)n(c(k[l]),d)},remove:function(a){var g=m();e||r(g);a&&0===c(":focus",a).length?v(a):e.children().length&&e.remove()},error:function(a,c,d){return k({type:"error",iconClass:m().iconClasses.error,message:a,optionsOverride:d,title:c})},getContainer:r,info:function(a,c,d){return k({type:"info",iconClass:m().iconClasses.info,message:a,optionsOverride:d,title:c})},options:{},subscribe:function(a){l=a},success:function(a,
c,d){return k({type:"success",iconClass:m().iconClasses.success,message:a,optionsOverride:d,title:c})},version:"2.1.1",warning:function(a,c,d){return k({type:"warning",iconClass:m().iconClasses.warning,message:a,optionsOverride:d,title:c})}},z;return t}()})})("function"===typeof define&&define.amd?define:function(n,c){"undefined"!==typeof module&&module.exports?module.exports=c(require("jquery")):window.toastr=c(window.jQuery)});
/** /js/html2canvas.js **/
var ___d2c_html2canvasjs_c_on="2020-08-05 14:11:03";var $jscomp={scope:{}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(g,r,m){if(m.get||m.set)throw new TypeError("ES3 does not support getters and setters.");g!=Array.prototype&&g!=Object.prototype&&(g[r]=m.value)};$jscomp.getGlobal=function(g){return"undefined"!=typeof window&&window===g?g:"undefined"!=typeof global?global:g};$jscomp.global=$jscomp.getGlobal(this);
$jscomp.polyfill=function(g,r,m,p){if(r){m=$jscomp.global;g=g.split(".");for(p=0;p<g.length-1;p++){var y=g[p];y in m||(m[y]={});m=m[y]}g=g[g.length-1];p=m[g];r=r(p);r!=p&&null!=r&&$jscomp.defineProperty(m,g,{configurable:!0,writable:!0,value:r})}};$jscomp.polyfill("Array.prototype.fill",function(g){return g?g:function(g,m,p){var y=this.length||0;0>m&&(m=Math.max(0,y+m));if(null==p||p>y)p=y;p=Number(p);0>p&&(p=Math.max(0,y+p));for(m=Number(m||0);m<p;m++)this[m]=g;return this}},"es6-impl","es3");
$jscomp.SYMBOL_PREFIX="jscomp_symbol_";$jscomp.initSymbol=function(){$jscomp.initSymbol=function(){};$jscomp.global.Symbol||($jscomp.global.Symbol=$jscomp.Symbol)};$jscomp.symbolCounter_=0;$jscomp.Symbol=function(g){return $jscomp.SYMBOL_PREFIX+(g||"")+$jscomp.symbolCounter_++};
$jscomp.initSymbolIterator=function(){$jscomp.initSymbol();var g=$jscomp.global.Symbol.iterator;g||(g=$jscomp.global.Symbol.iterator=$jscomp.global.Symbol("iterator"));"function"!=typeof Array.prototype[g]&&$jscomp.defineProperty(Array.prototype,g,{configurable:!0,writable:!0,value:function(){return $jscomp.arrayIterator(this)}});$jscomp.initSymbolIterator=function(){}};$jscomp.arrayIterator=function(g){var r=0;return $jscomp.iteratorPrototype(function(){return r<g.length?{done:!1,value:g[r++]}:{done:!0}})};
$jscomp.iteratorPrototype=function(g){$jscomp.initSymbolIterator();g={next:g};g[$jscomp.global.Symbol.iterator]=function(){return this};return g};$jscomp.array=$jscomp.array||{};$jscomp.iteratorFromArray=function(g,r){$jscomp.initSymbolIterator();g instanceof String&&(g+="");var m=0,p={next:function(){if(m<g.length){var y=m++;return{value:r(y,g[y]),done:!1}}p.next=function(){return{done:!0,value:void 0}};return p.next()}};p[Symbol.iterator]=function(){return p};return p};
$jscomp.polyfill("Array.prototype.keys",function(g){return g?g:function(){return $jscomp.iteratorFromArray(this,function(g){return g})}},"es6-impl","es3");
(function(g,r,m){function p(a,d,e){var c=a.runtimeStyle&&a.runtimeStyle[d],n,q=a.style;!/^-?[0-9]+\.?[0-9]*(?:px)?$/i.test(e)&&/^-?\d/.test(e)&&(n=q.left,c&&(a.runtimeStyle.left=a.currentStyle.left),q.left="fontSize"===d?"1em":e||0,e=q.pixelLeft+"px",q.left=n,c&&(a.runtimeStyle.left=c));return/^(thin|medium|thick)$/i.test(e)?e:Math.round(parseFloat(e))+"px"}function y(a){return parseInt(a,10)}function D(a){return-1!==a.toString().indexOf("%")}function aa(a,d){var e=[];return{storage:e,width:a,height:d,
clip:function(){e.push({type:"function",name:"clip",arguments:arguments})},translate:function(){e.push({type:"function",name:"translate",arguments:arguments})},fill:function(){e.push({type:"function",name:"fill",arguments:arguments})},save:function(){e.push({type:"function",name:"save",arguments:arguments})},restore:function(){e.push({type:"function",name:"restore",arguments:arguments})},fillRect:function(){e.push({type:"function",name:"fillRect",arguments:arguments})},createPattern:function(){e.push({type:"function",
name:"createPattern",arguments:arguments})},drawShape:function(){var a=[];e.push({type:"function",name:"drawShape",arguments:a});return{moveTo:function(){a.push({name:"moveTo",arguments:arguments})},lineTo:function(){a.push({name:"lineTo",arguments:arguments})},arcTo:function(){a.push({name:"arcTo",arguments:arguments})},bezierCurveTo:function(){a.push({name:"bezierCurveTo",arguments:arguments})},quadraticCurveTo:function(){a.push({name:"quadraticCurveTo",arguments:arguments})}}},drawImage:function(){e.push({type:"function",
name:"drawImage",arguments:arguments})},fillText:function(){e.push({type:"function",name:"fillText",arguments:arguments})},setVariable:function(a,d){e.push({type:"variable",name:a,arguments:d});return d}}}var h={},P;h.Util={};h.Util.log=function(a){h.logging&&g.console&&g.console.log&&g.console.log(a)};h.Util.trimText=function(a){return function(d){return a?a.apply(d):((d||"")+"").replace(/^\s+|\s+$/g,"")}}(String.prototype.trim);h.Util.asFloat=function(a){return parseFloat(a)};(function(){var a=
/((rgba|rgb)\([^\)]+\)(\s-?\d+px){0,})/g,d=/(-?\d+px)|(#.+)|(rgb\(.+\))|(rgba\(.+\))/g;h.Util.parseTextShadows=function(e){if(!e||"none"===e)return[];e=e.match(a);for(var c=[],n=0;e&&n<e.length;n++){var q=e[n].match(d);c.push({color:q[0],offsetX:q[1]?q[1].replace("px",""):0,offsetY:q[2]?q[2].replace("px",""):0,blur:q[3]?q[3].replace("px",""):0})}return c}})();h.Util.parseBackgroundImage=function(a){var d,e,c,n,q,b=[],A,f=0,F=0,g,h,k=function(){d&&('"'===e.substr(0,1)&&(e=e.substr(1,e.length-2)),e&&
h.push(e),"-"===d.substr(0,1)&&0<(n=d.indexOf("-",1)+1)&&(c=d.substr(0,n),d=d.substr(n)),b.push({prefix:c,method:d.toLowerCase(),value:q,args:h}));h=[];d=c=e=q=""};k();for(var m=0,r=a.length;m<r;m++)if(A=a[m],!(0===f&&-1<" \r\n\t".indexOf(A))){switch(A){case '"':g?g===A&&(g=null):g=A;break;case "(":if(!g)if(0===f){f=1;q+=A;continue}else F++;break;case ")":if(!g&&1===f)if(0===F){f=0;q+=A;k();continue}else F--;break;case ",":if(!g)if(0===f){k();continue}else if(1===f&&0===F&&!d.match(/^url$/i)){h.push(e);
e="";q+=A;continue}}q+=A;0===f?d+=A:e+=A}k();return b};h.Util.Bounds=function(a){var d,e={};a.getBoundingClientRect&&(d=a.getBoundingClientRect(),e.top=d.top,e.bottom=d.bottom||d.top+d.height,e.left=d.left,e.width=a.offsetWidth,e.height=a.offsetHeight);return e};h.Util.OffsetBounds=function(a){var d=a.offsetParent?h.Util.OffsetBounds(a.offsetParent):{top:0,left:0};return{top:a.offsetTop+d.top,bottom:a.offsetTop+a.offsetHeight+d.top,left:a.offsetLeft+d.left,width:a.offsetWidth,height:a.offsetHeight}};
h.Util.getCSS=function(a,d,e){void 0!==a&&(P=r.defaultView.getComputedStyle(a,null));var c=P[d];if(/^background(Size|Position)$/.test(d)){a:{c=(c||"").split(",");c=c[e||0]||c[0]||"auto";c=h.Util.trimText(c).split(" ");if("backgroundSize"!==d||!c[0]||!c[0].match(/^(cover|contain|auto)$/)){c[0]=-1===c[0].indexOf("%")?p(a,d+"X",c[0]):c[0];if(c[1]===m)if("backgroundSize"===d){c[1]="auto";a=c;break a}else c[1]=c[0];c[1]=-1===c[1].indexOf("%")?p(a,d+"Y",c[1]):c[1]}a=c}return a}return/border(Top|Bottom)(Left|Right)Radius/.test(d)?
(a=c.split(" "),1>=a.length&&(a[1]=a[0]),a.map(y)):c};h.Util.resizeBounds=function(a,d,e,c,n){a/=d;n&&"auto"!==n?e/c<a^"contain"===n?(e=c,n=c*a):(n=e,e/=a):(n=e,e=c);return{width:n,height:e}};h.Util.BackgroundPosition=function(a,d,e,c,n){a=h.Util.getCSS(a,"backgroundPosition",c);1===a.length&&(a=[a[0],a[0]]);c=D(a[0])?(d.width-(n||e).width)*(parseFloat(a[0])/100):parseInt(a[0],10);d="auto"===a[1]?c/e.width*e.height:D(a[1])?(d.height-(n||e).height)*parseFloat(a[1])/100:parseInt(a[1],10);"auto"===a[0]&&
(c=d/e.height*e.width);return{left:c,top:d}};h.Util.BackgroundSize=function(a,d,e,c){a=h.Util.getCSS(a,"backgroundSize",c);1===a.length&&(a=[a[0],a[0]]);if(D(a[0]))c=d.width*parseFloat(a[0])/100;else{if(/contain|cover/.test(a[0]))return h.Util.resizeBounds(e.width,e.height,d.width,d.height,a[0]);c=parseInt(a[0],10)}d="auto"===a[0]&&"auto"===a[1]?e.height:"auto"===a[1]?c/e.width*e.height:D(a[1])?d.height*parseFloat(a[1])/100:parseInt(a[1],10);"auto"===a[0]&&(c=d/e.height*e.width);return{width:c,height:d}};
h.Util.BackgroundRepeat=function(a,d){var e=h.Util.getCSS(a,"backgroundRepeat").split(",").map(h.Util.trimText);return e[d]||e[0]};h.Util.Extend=function(a,d){for(var e in a)a.hasOwnProperty(e)&&(d[e]=a[e]);return d};h.Util.Children=function(a){var d;try{var e;if(a.nodeName&&"IFRAME"===a.nodeName.toUpperCase())e=a.contentDocument||a.contentWindow.document;else{var c=a.childNodes;a=[];if(null!==c){var n=a.length,q=0;if("number"===typeof c.length)for(var b=c.length;q<b;q++)a[n++]=c[q];else for(;c[q]!==
m;)a[n++]=c[q++];a.length=n}e=a}d=e}catch(A){h.Util.log("html2canvas.Util.Children failed with exception: "+A.message),d=[]}return d};h.Util.isTransparent=function(a){return!a||"transparent"===a||"rgba(0, 0, 0, 0)"===a};h.Util.Font=function(){var a={};return function(d,e,c){if(a[d+"-"+e]!==m)return a[d+"-"+e];var n=c.createElement("div"),q=c.createElement("img"),b=c.createElement("span"),A;n.style.visibility="hidden";n.style.fontFamily=d;n.style.fontSize=e;n.style.margin=0;n.style.padding=0;c.body.appendChild(n);
q.src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACwAAAAAAQABAAACAkQBADs=";q.width=1;q.height=1;q.style.margin=0;q.style.padding=0;q.style.verticalAlign="baseline";b.style.fontFamily=d;b.style.fontSize=e;b.style.margin=0;b.style.padding=0;b.appendChild(c.createTextNode("Hidden Text"));n.appendChild(b);n.appendChild(q);A=q.offsetTop-b.offsetTop+1;n.removeChild(b);n.appendChild(c.createTextNode("Hidden Text"));n.style.lineHeight="normal";q.style.verticalAlign="super";q={baseline:A,lineWidth:1,middle:q.offsetTop-
n.offsetTop+1};a[d+"-"+e]=q;c.body.removeChild(n);return q}}();(function(){function a(a){return function(c){try{a.addColorStop(c.stop,c.color)}catch(b){d.log(["failed to add color stop: ",b,"; tried to add: ",c])}}}var d=h.Util,e={};h.Generate=e;var c=[/^(-webkit-linear-gradient)\(([a-z\s]+)([\w\d\.\s,%\(\)]+)\)$/,/^(-o-linear-gradient)\(([a-z\s]+)([\w\d\.\s,%\(\)]+)\)$/,/^(-webkit-gradient)\((linear|radial),\s((?:\d{1,3}%?)\s(?:\d{1,3}%?),\s(?:\d{1,3}%?)\s(?:\d{1,3}%?))([\w\d\.\s,%\(\)\-]+)\)$/,
/^(-moz-linear-gradient)\(((?:\d{1,3}%?)\s(?:\d{1,3}%?))([\w\d\.\s,%\(\)]+)\)$/,/^(-webkit-radial-gradient)\(((?:\d{1,3}%?)\s(?:\d{1,3}%?)),\s(\w+)\s([a-z\-]+)([\w\d\.\s,%\(\)]+)\)$/,/^(-moz-radial-gradient)\(((?:\d{1,3}%?)\s(?:\d{1,3}%?)),\s(\w+)\s?([a-z\-]*)([\w\d\.\s,%\(\)]+)\)$/,/^(-o-radial-gradient)\(((?:\d{1,3}%?)\s(?:\d{1,3}%?)),\s(\w+)\s([a-z\-]+)([\w\d\.\s,%\(\)]+)\)$/];e.parseGradient=function(a,e){var b,d,f=c.length,g,h,m,k;for(d=0;d<f&&!(g=a.match(c[d]));d+=1);if(g)switch(g[1]){case "-webkit-linear-gradient":case "-o-linear-gradient":b=
{type:"linear",x0:null,y0:null,x1:null,y1:null,colorStops:[]};if(f=g[2].match(/\w+/g))for(h=f.length,d=0;d<h;d+=1)switch(f[d]){case "top":b.y0=0;b.y1=e.height;break;case "right":b.x0=e.width;b.x1=0;break;case "bottom":b.y0=e.height;b.y1=0;break;case "left":b.x0=0,b.x1=e.width}null===b.x0&&null===b.x1&&(b.x0=b.x1=e.width/2);null===b.y0&&null===b.y1&&(b.y0=b.y1=e.height/2);if(f=g[3].match(/((?:rgb|rgba)\(\d{1,3},\s\d{1,3},\s\d{1,3}(?:,\s[0-9\.]+)?\)(?:\s\d{1,3}(?:%|px))?)+/g))for(h=f.length,m=1/Math.max(h-
1,1),d=0;d<h;d+=1)k=f[d].match(/((?:rgb|rgba)\(\d{1,3},\s\d{1,3},\s\d{1,3}(?:,\s[0-9\.]+)?\))\s*(\d{1,3})?(%|px)?/),k[2]?(g=parseFloat(k[2]),g="%"===k[3]?g/100:g/e.width):g=d*m,b.colorStops.push({color:k[1],stop:g});break;case "-webkit-gradient":b={type:"radial"===g[2]?"circle":g[2],x0:0,y0:0,x1:0,y1:0,colorStops:[]};if(f=g[3].match(/(\d{1,3})%?\s(\d{1,3})%?,\s(\d{1,3})%?\s(\d{1,3})%?/))b.x0=f[1]*e.width/100,b.y0=f[2]*e.height/100,b.x1=f[3]*e.width/100,b.y1=f[4]*e.height/100;if(f=g[4].match(/((?:from|to|color-stop)\((?:[0-9\.]+,\s)?(?:rgb|rgba)\(\d{1,3},\s\d{1,3},\s\d{1,3}(?:,\s[0-9\.]+)?\)\))+/g))for(h=
f.length,d=0;d<h;d+=1)k=f[d].match(/(from|to|color-stop)\(([0-9\.]+)?(?:,\s)?((?:rgb|rgba)\(\d{1,3},\s\d{1,3},\s\d{1,3}(?:,\s[0-9\.]+)?\))\)/),g=parseFloat(k[2]),"from"===k[1]&&(g=0),"to"===k[1]&&(g=1),b.colorStops.push({color:k[3],stop:g});break;case "-moz-linear-gradient":b={type:"linear",x0:0,y0:0,x1:0,y1:0,colorStops:[]};if(f=g[2].match(/(\d{1,3})%?\s(\d{1,3})%?/))b.x0=f[1]*e.width/100,b.y0=f[2]*e.height/100,b.x1=e.width-b.x0,b.y1=e.height-b.y0;if(f=g[3].match(/((?:rgb|rgba)\(\d{1,3},\s\d{1,3},\s\d{1,3}(?:,\s[0-9\.]+)?\)(?:\s\d{1,3}%)?)+/g))for(h=
f.length,m=1/Math.max(h-1,1),d=0;d<h;d+=1)k=f[d].match(/((?:rgb|rgba)\(\d{1,3},\s\d{1,3},\s\d{1,3}(?:,\s[0-9\.]+)?\))\s*(\d{1,3})?(%)?/),k[2]?(g=parseFloat(k[2]),k[3]&&(g/=100)):g=d*m,b.colorStops.push({color:k[1],stop:g});break;case "-webkit-radial-gradient":case "-moz-radial-gradient":case "-o-radial-gradient":b={type:"circle",x0:0,y0:0,x1:e.width,y1:e.height,cx:0,cy:0,rx:0,ry:0,colorStops:[]};if(f=g[2].match(/(\d{1,3})%?\s(\d{1,3})%?/))b.cx=f[1]*e.width/100,b.cy=f[2]*e.height/100;f=g[3].match(/\w+/);
k=g[4].match(/[a-z\-]*/);if(f&&k)switch(k[0]){case "farthest-corner":case "cover":case "":d=Math.sqrt(Math.pow(b.cx,2)+Math.pow(b.cy,2));f=Math.sqrt(Math.pow(b.cx,2)+Math.pow(b.y1-b.cy,2));h=Math.sqrt(Math.pow(b.x1-b.cx,2)+Math.pow(b.y1-b.cy,2));k=Math.sqrt(Math.pow(b.x1-b.cx,2)+Math.pow(b.cy,2));b.rx=b.ry=Math.max(d,f,h,k);break;case "closest-corner":d=Math.sqrt(Math.pow(b.cx,2)+Math.pow(b.cy,2));f=Math.sqrt(Math.pow(b.cx,2)+Math.pow(b.y1-b.cy,2));h=Math.sqrt(Math.pow(b.x1-b.cx,2)+Math.pow(b.y1-
b.cy,2));k=Math.sqrt(Math.pow(b.x1-b.cx,2)+Math.pow(b.cy,2));b.rx=b.ry=Math.min(d,f,h,k);break;case "farthest-side":"circle"===f[0]?b.rx=b.ry=Math.max(b.cx,b.cy,b.x1-b.cx,b.y1-b.cy):(b.type=f[0],b.rx=Math.max(b.cx,b.x1-b.cx),b.ry=Math.max(b.cy,b.y1-b.cy));break;case "closest-side":case "contain":"circle"===f[0]?b.rx=b.ry=Math.min(b.cx,b.cy,b.x1-b.cx,b.y1-b.cy):(b.type=f[0],b.rx=Math.min(b.cx,b.x1-b.cx),b.ry=Math.min(b.cy,b.y1-b.cy))}if(f=g[5].match(/((?:rgb|rgba)\(\d{1,3},\s\d{1,3},\s\d{1,3}(?:,\s[0-9\.]+)?\)(?:\s\d{1,3}(?:%|px))?)+/g))for(h=
f.length,m=1/Math.max(h-1,1),d=0;d<h;d+=1)k=f[d].match(/((?:rgb|rgba)\(\d{1,3},\s\d{1,3},\s\d{1,3}(?:,\s[0-9\.]+)?\))\s*(\d{1,3})?(%|px)?/),k[2]?(g=parseFloat(k[2]),g="%"===k[3]?g/100:g/e.width):g=d*m,b.colorStops.push({color:k[1],stop:g})}return b};e.Gradient=function(d,e){if(0!==e.width&&0!==e.height){var b=r.createElement("canvas"),c=b.getContext("2d"),f,g;b.width=e.width;b.height=e.height;if(f=h.Generate.parseGradient(d,e))switch(f.type){case "linear":g=c.createLinearGradient(f.x0,f.y0,f.x1,f.y1);
f.colorStops.forEach(a(g));c.fillStyle=g;c.fillRect(0,0,e.width,e.height);break;case "circle":g=c.createRadialGradient(f.cx,f.cy,0,f.cx,f.cy,f.rx);f.colorStops.forEach(a(g));c.fillStyle=g;c.fillRect(0,0,e.width,e.height);break;case "ellipse":var m=r.createElement("canvas"),p=m.getContext("2d");g=Math.max(f.rx,f.ry);var k=2*g;m.width=m.height=k;g=p.createRadialGradient(f.rx,f.ry,0,f.rx,f.ry,g);f.colorStops.forEach(a(g));p.fillStyle=g;p.fillRect(0,0,k,k);c.fillStyle=f.colorStops[f.colorStops.length-
1].color;c.fillRect(0,0,b.width,b.height);c.drawImage(m,f.cx-f.rx,f.cy-f.ry,2*f.rx,2*f.ry)}return b}};e.ListAlpha=function(a){var d="",b;do b=a%26,d=String.fromCharCode(b+64)+d,a/=26;while(26<26*a);return d};e.ListRoman=function(a){var d="M CM D CD C XC L XL X IX V IV I".split(" "),b=[1E3,900,500,400,100,90,50,40,10,9,5,4,1],e="",f,c=d.length;if(0>=a||4E3<=a)return a;for(f=0;f<c;f+=1)for(;a>=b[f];)a-=b[f],e+=d[f];return e}})();h.Parse=function(a,d,e){function c(l){function w(l){var w=V(l,":before"),
I=V(l,":after");w&&a.push({type:"before",pseudo:w,el:l});I&&a.push({type:"after",pseudo:I,el:l})}var a=[],I=[];(function(){for(var l=/:before|:after/,w=r.styleSheets,a=0,b=w.length;a<b;a++)try{for(var d=w[a].cssRules,Q=0,e=d.length;Q<e;Q++)l.test(d[Q].selectorText)&&I.push(d[Q].selectorText)}catch(c){}a=0;for(b=I.length;a<b;a++)I[a]=I[a].match(/(^[^:]*)/)[1]})();(function(l){l=r.querySelectorAll(I.filter(function(l){return l?!0:!1}).join(","));for(var a=0,b=l.length;a<b;a++)w(l[a])})(l);(function(){a.forEach(function(l){l=
l.el;l.classList?l.classList.add("___html2canvas___pseudoelement-parent"):l.className+=" ___html2canvas___pseudoelement-parent"});a.forEach(function(l){"before"===l.type?l.el.insertBefore(l.pseudo,l.el.firstChild):l.el.appendChild(l.pseudo)})})()}function n(l,w){var a=parseInt(u(l,w),10);return isNaN(a)?0:a}function q(l,w,a,b,d,e){"transparent"!==e&&(l.setVariable("fillStyle",e),l.fillRect(w,a,b,d))}function b(l,a,b){if(0<l.length)return a+b.toUpperCase()}function A(l,a){switch(a){case "lowercase":return l.toLowerCase();
case "capitalize":return l.replace(/(^|\s|:|-|\(|\))([a-z])/g,b);case "uppercase":return l.toUpperCase();default:return l}}function f(l,a,b,d){var e=u(a,"fontWeight"),c=u(a,"fontFamily"),f=u(a,"fontSize"),g=v.parseTextShadows(u(a,"textShadow"));switch(parseInt(e,10)){case 401:e="bold";break;case 400:e="normal"}l.setVariable("fillStyle",d);l.setVariable("font",[u(a,"fontStyle"),u(a,"fontVariant"),e,f,c].join(" "));l.setVariable("textAlign","left");g.length&&(l.setVariable("shadowColor",g[0].color),
l.setVariable("shadowOffsetX",g[0].offsetX),l.setVariable("shadowOffsetY",g[0].offsetY),l.setVariable("shadowBlur",g[0].blur));if("none"!==b)return v.Font(c,f,z)}function p(l,a,b){var e=b.ctx,c=u(l,"color"),g=u(l,"textDecoration"),h=u(l,"textAlign"),n,k,m=a,M=0;0<v.trimText(a.nodeValue).length&&(a.nodeValue=A(a.nodeValue,u(l,"textTransform")),h=h.replace(["-webkit-auto"],["auto"]),k=!d.letterRendering&&/^(left|right|justify|auto)$/.test(h)&&/^(normal|none|0px)$/.test(u(l,"letterSpacing"))?a.nodeValue.split(/(\b| )/):
a.nodeValue.split(""),n=f(e,l,g,c),d.chinese&&k.forEach(function(l,a){/.*[\u4E00-\u9FA5].*$/.test(l)&&(l=l.split(""),l.unshift(a,1),k.splice.apply(k,l))}),k.forEach(function(l,a){var w,d=a<k.length-1;w=b.transform.matrix;var f;if(ba.rangeBounds&&!w){if("none"!==g||0!==v.trimText(l).length)w=m,d=M,f=z.createRange(),f.setStart(w,d),f.setEnd(w,d+l.length),f=f.getBoundingClientRect();M+=l.length}else if(m&&"string"===typeof m.nodeValue){var d=d?m.splitText(l.length):null,h=m;f=h.parentNode;var N=z.createElement("wrapper"),
K=h.cloneNode(!0);N.appendChild(h.cloneNode(!0));f.replaceChild(N,h);w=w?v.OffsetBounds(N):v.Bounds(N);f.replaceChild(K,N);f=w;m=d}if(w=f)switch(d=w.left,f=w.bottom,null!==l&&0<v.trimText(l).length&&e.fillText(l,d,f),g){case "underline":q(e,w.left,Math.round(w.top+n.baseline+n.lineWidth),w.width,1,c);break;case "overline":q(e,w.left,Math.round(w.top),w.width,1,c);break;case "line-through":q(e,w.left,Math.ceil(w.top+n.middle+n.lineWidth),w.width,1,c)}}))}function C(l,a,d){var b;a=a.ctx;var e=u(l,"listStyleType");
if(/^(decimal|decimal-leading-zero|upper-alpha|upper-latin|upper-roman|lower-alpha|lower-greek|lower-latin|lower-roman)$/i.test(e)){var c;c=-1;var g=1,n=l.parentNode.childNodes;if(l.parentNode){for(;n[++c]!==l;)1===n[c].nodeType&&g++;c=g}else c=-1;switch(e){case "decimal":b=c;break;case "decimal-leading-zero":b=1===c.toString().length?"0"+c.toString():c.toString();break;case "upper-roman":b=h.Generate.ListRoman(c);break;case "lower-roman":b=h.Generate.ListRoman(c).toLowerCase();break;case "lower-alpha":b=
h.Generate.ListAlpha(c).toLowerCase();break;case "upper-alpha":b=h.Generate.ListAlpha(c)}b+=". ";c=z.createElement("boundelement");c.style.display="inline";g=l.style.listStyleType;l.style.listStyleType="none";c.appendChild(z.createTextNode(b));l.insertBefore(c,l.firstChild);e=v.Bounds(c);l.removeChild(c);l.style.listStyleType=g;f(a,l,"none",u(l,"color"));"inside"===u(l,"listStylePosition")&&(a.setVariable("textAlign","left"),l=d.left,d=e.bottom,null!==b&&0<v.trimText(b).length&&a.fillText(b,l,d))}}
function U(l){return(l=a[l])&&!0===l.succeeded?l.img:!1}function k(l,a){var b=Math.max(l.left,a.left),c=Math.max(l.top,a.top);return{left:b,top:c,width:Math.min(l.left+l.width,a.left+a.width)-b,height:Math.min(l.top+l.height,a.top+a.height)-c}}function E(l,a,b,c,d){var e=n(a,"paddingLeft"),f=n(a,"paddingTop"),g=n(a,"paddingRight");a=n(a,"paddingBottom");J(l,b,0,0,b.width,b.height,c.left+e+d[3].width,c.top+f+d[0].width,c.width-(d[1].width+d[3].width+e+g),c.height-(d[0].width+d[2].width+f+a))}function L(l){return["Top",
"Right","Bottom","Left"].map(function(a){return{width:n(l,"border"+a+"Width"),color:u(l,"border"+a+"Color")}})}function R(l){return["TopLeft","TopRight","BottomRight","BottomLeft"].map(function(a){return u(l,"border"+a+"Radius")})}function G(l,a,b,c){var d=(Math.sqrt(2)-1)/3*4,e=b*d,d=c*d;b=l+b;c=a+c;return{topLeft:B({x:l,y:c},{x:l,y:c-d},{x:b-e,y:a},{x:b,y:a}),topRight:B({x:l,y:a},{x:l+e,y:a},{x:b,y:c-d},{x:b,y:c}),bottomRight:B({x:b,y:a},{x:b,y:a+d},{x:l+e,y:c},{x:l,y:c}),bottomLeft:B({x:b,y:c},
{x:b-e,y:c},{x:l,y:a+d},{x:l,y:a})}}function B(a,b,c,d){var e=function(a,l,b){return{x:a.x+(l.x-a.x)*b,y:a.y+(l.y-a.y)*b}};return{start:a,startControl:b,endControl:c,end:d,subdivide:function(f){var g=e(a,b,f),h=e(b,c,f),n=e(c,d,f),k=e(g,h,f),h=e(h,n,f);f=e(k,h,f);return[B(a,g,k,f),B(f,h,n,d)]},curveTo:function(a){a.push(["bezierCurve",b.x,b.y,c.x,c.y,d.x,d.y])},curveToReversed:function(d){d.push(["bezierCurve",c.x,c.y,b.x,b.y,a.x,a.y])}}}function H(a,b,c,d,e,f,g){0<b[0]||0<b[1]?(a.push(["line",d[0].start.x,
d[0].start.y]),d[0].curveTo(a),d[1].curveTo(a)):a.push(["line",f,g]);(0<c[0]||0<c[1])&&a.push(["line",e[0].start.x,e[0].start.y])}function y(a,b,c,d,e,f,g){var h=[];0<b[0]||0<b[1]?(h.push(["line",d[1].start.x,d[1].start.y]),d[1].curveTo(h)):h.push(["line",a.c1[0],a.c1[1]]);0<c[0]||0<c[1]?(h.push(["line",f[0].start.x,f[0].start.y]),f[0].curveTo(h),h.push(["line",g[0].end.x,g[0].end.y]),g[0].curveToReversed(h)):(h.push(["line",a.c2[0],a.c2[1]]),h.push(["line",a.c3[0],a.c3[1]]));0<b[0]||0<b[1]?(h.push(["line",
e[1].end.x,e[1].end.y]),e[1].curveToReversed(h)):h.push(["line",a.c4[0],a.c4[1]]);return h}function M(a,b,c){var d,e,f,g,h,n,k,m,q=b.left,M=b.top,K=b.width,A=b.height,t,r,p,v,x=R(a);m=b.left;t=b.top;n=b.width;k=b.height;e=x[0][0];f=x[0][1];g=x[1][0];h=x[1][1];var C=x[2][0],B=x[2][1];r=x[3][0];p=x[3][1];var F=n-g,z=k-B,L=n-C,J=k-p;d=G(m,t,e,f).topLeft.subdivide(.5);e=G(m+c[3].width,t+c[0].width,Math.max(0,e-c[3].width),Math.max(0,f-c[0].width)).topLeft.subdivide(.5);f=G(m+F,t,g,h).topRight.subdivide(.5);
g=G(m+Math.min(F,n+c[3].width),t+c[0].width,F>n+c[3].width?0:g-c[3].width,h-c[0].width).topRight.subdivide(.5);h=G(m+L,t+z,C,B).bottomRight.subdivide(.5);n=G(m+Math.min(L,n+c[3].width),t+Math.min(z,k+c[0].width),Math.max(0,C-c[1].width),Math.max(0,B-c[2].width)).bottomRight.subdivide(.5);k=G(m,t+J,r,p).bottomLeft.subdivide(.5);m=G(m+c[3].width,t+J,Math.max(0,r-c[3].width),Math.max(0,p-c[2].width)).bottomLeft.subdivide(.5);t=[];switch(u(a,"backgroundClip")){case "content-box":case "padding-box":H(t,
x[0],x[1],e,g,b.left+c[3].width,b.top+c[0].width);H(t,x[1],x[2],g,n,b.left+b.width-c[1].width,b.top+c[0].width);H(t,x[2],x[3],n,m,b.left+b.width-c[1].width,b.top+b.height-c[2].width);H(t,x[3],x[0],m,e,b.left+c[3].width,b.top+b.height-c[2].width);break;default:H(t,x[0],x[1],d,f,b.left,b.top),H(t,x[1],x[2],f,h,b.left+b.width,b.top),H(t,x[2],x[3],h,k,b.left+b.width,b.top+b.height),H(t,x[3],x[0],k,d,b.left,b.top+b.height)}J={clip:t,borders:[]};for(a=0;4>a;a++)if(0<c[a].width){b=q;t=M;r=K;p=A-c[2].width;
switch(a){case 0:p=c[0].width;v=y({c1:[b,t],c2:[b+r,t],c3:[b+r-c[1].width,t+p],c4:[b+c[3].width,t+p]},x[0],x[1],d,e,f,g);break;case 1:b=q+K-c[1].width;r=c[1].width;v=y({c1:[b+r,t],c2:[b+r,t+p+c[2].width],c3:[b,t+p],c4:[b,t+c[0].width]},x[1],x[2],f,g,h,n);break;case 2:t=t+A-c[2].width;p=c[2].width;v=y({c1:[b+r,t+p],c2:[b,t+p],c3:[b+c[3].width,t],c4:[b+r-c[3].width,t]},x[2],x[3],h,n,k,m);break;case 3:r=c[3].width,v=y({c1:[b,t+p+c[2].width],c2:[b,t],c3:[b+r,t+c[0].width],c4:[b+r,t+p]},x[3],x[0],k,m,
d,e)}J.borders.push({args:v,color:c[a].color})}return J}function K(a,b){var c=a.drawShape();b.forEach(function(a,b){c[0===b?"moveTo":a[0]+"To"].apply(null,a.slice(1))});return c}function t(a,b,c){var d=z.createElement("valuewrap");"lineHeight textAlign fontFamily color fontSize paddingLeft paddingTop width height border borderLeftWidth borderTopWidth".split(" ").forEach(function(b){try{d.style[b]=u(a,b)}catch(c){v.log("html2canvas: Parse: Exception caught in renderFormValue: "+c.message)}});d.style.borderColor=
"black";d.style.borderStyle="solid";d.style.display="block";d.style.position="absolute";if(/^(submit|reset|button|text|password)$/.test(a.type)||"SELECT"===a.nodeName)d.style.lineHeight=u(a,"height");d.style.top=b.top+"px";d.style.left=b.left+"px";b="SELECT"===a.nodeName?(a.options[a.selectedIndex]||0).text:a.value;b||(b=a.placeholder);b=z.createTextNode(b);d.appendChild(b);S.appendChild(d);p(a,b,c);S.removeChild(d)}function J(a){a.drawImage.apply(a,Array.prototype.slice.call(arguments,1))}function V(a,
b){var c=g.getComputedStyle(a,b),d=g.getComputedStyle(a);if(c&&c.content&&"none"!==c.content&&"-moz-alt-content"!==c.content&&"none"!==c.display&&d.content!==c.content){d=c.content+"";if("'"===d[0]||'"'===d[0])d=d.replace(/(^['"])|(['"]$)/g,"");var e="url"===d.substr(0,3),f=r.createElement(e?"img":"span");f.className="___html2canvas___pseudoelement-element ";Object.keys(c).filter(ca).forEach(function(a){try{f.style[a]=c[a]}catch(b){v.log(["Tried to assign readonly property ",a,"Error:",b])}});e?f.src=
v.parseBackgroundImage(d)[0].args[0]:f.innerHTML=d;return f}}function ca(a){return isNaN(g.parseInt(a,10))}function W(a,b,c,d){var e=Math.round(d.left+c.left);c=Math.round(d.top+c.top);a.createPattern(b);a.translate(e,c);a.fill();a.translate(-e,-c)}function D(a,b,c,d,e,f,g,h){var n=[];n.push(["line",Math.round(e),Math.round(f)]);n.push(["line",Math.round(e+g),Math.round(f)]);n.push(["line",Math.round(e+g),Math.round(h+f)]);n.push(["line",Math.round(e),Math.round(h+f)]);K(a,n);a.save();a.clip();W(a,
b,c,d);a.restore()}function P(a,b,c){for(var d=u(a,"backgroundImage"),e=v.parseBackgroundImage(d),f,g=e.length;g--;)if(d=e[g],d.args&&0!==d.args.length)if(f=U("url"===d.method?d.args[0]:d.value)){var h=a,d=b,n=c,k=f,m=g,t=v.BackgroundSize(h,d,k,m);f=v.BackgroundPosition(h,d,k,m,t);h=v.BackgroundRepeat(h,m);if(k.width!==t.width||k.height!==t.height){var q=z.createElement("canvas");q.width=t.width;q.height=t.height;m=q.getContext("2d");J(m,k,0,0,k.width,k.height,0,0,t.width,t.height);k=q}switch(h){case "repeat-x":case "repeat no-repeat":D(n,
k,f,d,d.left,d.top+f.top,99999,k.height);break;case "repeat-y":case "no-repeat repeat":D(n,k,f,d,d.left+f.left,d.top,k.width,99999);break;case "no-repeat":D(n,k,f,d,d.left+f.left,d.top+f.top,k.width,k.height);break;default:W(n,k,f,{top:d.top,left:d.left,width:k.width,height:k.height})}}else v.log("html2canvas: Error loading background:",d)}function da(a){return a.replace("px","")}function ea(a,b){var c=/(matrix)\((.+)\)/,d=u(a,"transform")||u(a,"-webkit-transform")||u(a,"-moz-transform")||u(a,"-ms-transform")||
u(a,"-o-transform"),e=u(a,"transform-origin")||u(a,"-webkit-transform-origin")||u(a,"-moz-transform-origin")||u(a,"-ms-transform-origin")||u(a,"-o-transform-origin")||"0px 0px",e=e.split(" ").map(da).map(v.asFloat),f;if(d&&"none"!==d&&(c=d.match(c)))switch(c[1]){case "matrix":f=c[2].split(",").map(v.trimText).map(v.asFloat)}return{origin:e,matrix:f}}function fa(a,b,c,e){var f=aa(b?c.width:Math.max(Math.max(z.body.scrollWidth,z.documentElement.scrollWidth),Math.max(z.body.offsetWidth,z.documentElement.offsetWidth),
Math.max(z.body.clientWidth,z.documentElement.clientWidth)),b?c.height:Math.max(Math.max(z.body.scrollHeight,z.documentElement.scrollHeight),Math.max(z.body.offsetHeight,z.documentElement.offsetHeight),Math.max(z.body.clientHeight,z.documentElement.clientHeight))),g;g=f.setVariable("globalAlpha",u(a,"opacity")*(b?b.opacity:1));e={ctx:f,opacity:g,cssPosition:u(a,"position"),borders:L(a),transform:e,clip:b&&b.clip?v.Extend({},b.clip):null};var h=(g="static"!==e.cssPosition)?u(a,"zIndex"):"auto",n=u(a,
"opacity"),m="none"!==u(a,"cssFloat");e.zIndex=f={depth:0,zindex:h,children:[]};f.isPositioned=g;f.isFloated=m;f.opacity=n;f.ownStacking="auto"!==h||1>n;f.depth=b?b.zIndex.depth+1:0;b&&b.zIndex.children.push(e);!0===d.useOverflow&&!0===/(hidden|scroll|auto)/.test(u(a,"overflow"))&&!1===/(BODY)/i.test(a.nodeName)&&(e.clip=e.clip?k(e.clip,c):c);return e}function ga(a,b,c){a={left:b.left+a[3].width,top:b.top+a[0].width,width:b.width-(a[1].width+a[3].width),height:b.height-(a[0].width+a[2].width)};c&&
(a=k(a,c));return a}function ha(a,b){var c=b.matrix?v.OffsetBounds(a):v.Bounds(a);b.origin[0]+=c.left;b.origin[1]+=c.top;return c}function X(a,b,c){var d=ea(a,b),e=ha(a,d),f;b=fa(a,b,e,d);var d=b.borders,g=b.ctx,h=ga(d,e,b.clip),n=M(a,e,d),k=Y.test(a.nodeName)?"#efefef":u(a,"backgroundColor");K(g,n.clip);g.save();g.clip();0<h.height&&0<h.width&&!c?(q(g,e.left,e.top,e.width,e.height,k),P(a,h,g)):c&&(b.backgroundColor=k);g.restore();n.borders.forEach(function(a){var b=a.args;a=a.color;"transparent"!==
a&&(g.setVariable("fillStyle",a),K(g,b),g.fill())});switch(a.nodeName){case "IMG":(f=U(a.getAttribute("src")))?E(g,a,f,e,d):v.log("html2canvas: Error loading <img>:"+a.getAttribute("src"));break;case "INPUT":/^(text|url|email|submit|button|reset)$/.test(a.type)&&0<(a.value||a.placeholder||"").length&&t(a,e,b);break;case "TEXTAREA":0<(a.value||a.placeholder||"").length&&t(a,e,b);break;case "SELECT":0<(a.options||a.placeholder||"").length&&t(a,e,b);break;case "LI":C(a,b,h);break;case "CANVAS":E(g,a,
a,e,d)}return b}function ia(a){return"none"!==u(a,"display")&&"hidden"!==u(a,"visibility")&&!a.hasAttribute("data-html2canvas-ignore")}function ja(a,b,c){c||(c=function(){});if(ia(a)&&(b=X(a,b,!1)||b,!Y.test(a.nodeName)))return Z(a,b,c);c()}function Z(a,b,c){function e(c){c.nodeType===c.ELEMENT_NODE?ja(c,b,f):(c.nodeType===c.TEXT_NODE&&p(a,c,b),f())}function f(a){0>=--h&&(v.log("finished rendering "+g.length+" children."),c())}var g=v.Children(a),h=g.length+1;f();d.async?g.forEach(function(a){setTimeout(function(){e(a)},
0)}):g.forEach(e)}g.scroll(0,0);var O=d.elements===m?r.body:d.elements[0],z=O.ownerDocument,v=h.Util,ba=v.Support(d,z),Y=new RegExp("("+d.ignoreElements+")"),S=z.body,u=v.getCSS,T=z.createElement("style");T.innerHTML='.___html2canvas___pseudoelement-parent:before { content: "" !important; display: none !important; }.___html2canvas___pseudoelement-parent:after { content: "" !important; display: none !important; }';S.appendChild(T);a=a||{};(function(){var a=u(r.documentElement,"backgroundColor"),b=
v.isTransparent(a)&&O===r.body,d=X(O,null,!1,b);c(O);Z(O,d,function(){b&&(a=d.backgroundColor);S.removeChild(T);for(var c=r.getElementsByClassName("___html2canvas___pseudoelement-element");c.length;)c[0].parentNode.removeChild(c[0]);for(c=r.getElementsByClassName("___html2canvas___pseudoelement-parent");c.length;){var f=c[0];f.classList?f.classList.remove("___html2canvas___pseudoelement-parent"):f.className=f.className.replace("___html2canvas___pseudoelement-parent","").trim()}v.log("Done parsing, moving to Render.");
e({backgroundColor:a,stack:d})})})()};h.Preload=function(a){function d(){C.log("html2canvas: start: images: "+f.numLoaded+" / "+f.numTotal+" (failed: "+f.numFailed+")");!f.firstRun&&f.numLoaded>=f.numTotal&&(C.log("Finished loading images: # "+f.numTotal+" (failed: "+f.numFailed+")"),"function"===typeof a.complete&&a.complete(f))}function e(b,c,e){var h,n=a.proxy,k;B.href=b;b=B.href;h="html2canvas_"+E++;e.callbackname=h;n=-1<n.indexOf("?")?n+"&":n+"?";n+="url="+encodeURIComponent(b)+"&callback="+
h;k=L.createElement("script");g[h]=function(a){"error:"===a.substring(0,6)?(e.succeeded=!1,f.numLoaded++,f.numFailed++,d()):(p(c,e),c.src=a);g[h]=m;try{delete g[h]}catch(b){}k.parentNode.removeChild(k);k=null;delete e.script;delete e.callbackname};k.setAttribute("type","text/javascript");k.setAttribute("src",n);e.script=k;g.document.body.appendChild(k)}function c(a,b){var c=g.getComputedStyle(a,b),d=c.content;"url"===d.substr(0,3)&&y.loadImage(h.Util.parseBackgroundImage(d)[0].args[0]);q(c.backgroundImage,
a)}function n(a){return a&&a.method&&a.args&&0<a.args.length}function q(a,b){var c;h.Util.parseBackgroundImage(a).filter(n).forEach(function(a){if("url"===a.method)y.loadImage(a.args[0]);else if(a.method.match(/\-?gradient$/)){c===m&&(c=h.Util.Bounds(b));a=a.value;var e=h.Generate.Gradient(a,c);e!==m&&(f[a]={img:e,succeeded:!0},f.numTotal++,f.numLoaded++,d())}})}function b(a){var d=!1;try{C.Children(a).forEach(b)}catch(e){}try{d=a.nodeType}catch(e){d=!1,C.log("html2canvas: failed to access some element's nodeType - Exception: "+
e.message)}if(1===d||d===m){c(a,":before");c(a,":after");try{q(C.getCSS(a,"backgroundImage"),a)}catch(e){C.log("html2canvas: failed to get background-image - Exception: "+e.message)}q(a)}}function p(b,c){b.onload=function(){c.timer!==m&&g.clearTimeout(c.timer);f.numLoaded++;c.succeeded=!0;b.onerror=b.onload=null;d()};b.onerror=function(){if("anonymous"===b.crossOrigin&&(g.clearTimeout(c.timer),a.proxy)){var h=b.src;b=new Image;c.img=b;b.src=h;e(b.src,b,c);return}f.numLoaded++;f.numFailed++;c.succeeded=
!1;b.onerror=b.onload=null;d()}}var f={numLoaded:0,numFailed:0,numTotal:0,cleanupDone:!1},F,C=h.Util,y,k,E=0;k=a.elements[0]||r.body;var L=k.ownerDocument,R=k.getElementsByTagName("img"),G=R.length,B=L.createElement("a"),H=(new Image).crossOrigin!==m,D;B.href=g.location.href;F=B.protocol+B.host;y={loadImage:function(b){var c,d;b&&f[b]===m&&(c=new Image,b.match(/data:image\/.*;base64,/i)?(c.src=b.replace(/url\(['"]{0,}|['"]{0,}\)$/ig,""),d=f[b]={img:c},f.numTotal++,p(c,d)):(B.href=b,B.href=B.href,
B.protocol+B.host===F||!0===a.allowTaint?(d=f[b]={img:c},f.numTotal++,p(c,d),c.src=b):H&&!a.allowTaint&&a.useCORS?(c.crossOrigin="anonymous",d=f[b]={img:c},f.numTotal++,p(c,d),c.src=b):a.proxy&&(d=f[b]={img:c},f.numTotal++,e(b,c,d))))},cleanupDOM:function(b){var c,e;if(!f.cleanupDone){b&&"string"===typeof b?C.log("html2canvas: Cleanup because: "+b):C.log("html2canvas: Cleanup after timeout: "+a.timeout+" ms.");for(e in f)if(f.hasOwnProperty(e)&&(c=f[e],"object"===typeof c&&c.callbackname&&c.succeeded===
m)){g[c.callbackname]=m;try{delete g[c.callbackname]}catch(h){}c.script&&c.script.parentNode&&(c.script.setAttribute("src","about:blank"),c.script.parentNode.removeChild(c.script));f.numLoaded++;f.numFailed++;C.log("html2canvas: Cleaned up failed img: '"+e+"' Steps: "+f.numLoaded+" / "+f.numTotal)}g.stop!==m?g.stop():r.execCommand!==m&&r.execCommand("Stop",!1);r.close!==m&&r.close();f.cleanupDone=!0;b&&"string"===typeof b||d()}},renderingDone:function(){D&&g.clearTimeout(D)}};0<a.timeout&&(D=g.setTimeout(y.cleanupDOM,
a.timeout));C.log("html2canvas: Preload starts: finding background-images");f.firstRun=!0;b(k);C.log("html2canvas: Preload: Finding images");for(k=0;k<G;k+=1)y.loadImage(R[k].getAttribute("src"));f.firstRun=!1;C.log("html2canvas: Preload: Done.");f.numTotal===f.numLoaded&&d();return y};h.Renderer=function(a,d){function e(a,d){return"children"===a?-1:"children"===d?1:a-d}return function(a){if("string"===typeof d.renderer&&h.Renderer[a]!==m)a=h.Renderer[a](d);else if("function"===typeof a)a=a(d);else throw Error("Unknown renderer");
if("function"!==typeof a)throw Error("Invalid renderer defined");return a}(d.renderer)(a,d,r,function(a){function d(a){Object.keys(a).sort(e).forEach(function(c){var e=[],h=[],m=[],p=[];a[c].forEach(function(a){a.node.zIndex.isPositioned||1>a.node.zIndex.opacity?m.push(a):a.node.zIndex.isFloated?h.push(a):e.push(a)});(function E(a){a.forEach(function(a){p.push(a);a.children&&E(a.children)})})(e.concat(h,m));p.forEach(function(a){a.context?d(a.context):g.push(a.node)})})}var g=[];a=function(a){function c(a,
b,d){var e="auto"===b.zIndex.zindex?0:Number(b.zIndex.zindex),f=a,g=b.zIndex.isPositioned,h=b.zIndex.isFloated,n={node:b},q=d;if(b.zIndex.ownStacking)f=n.context={children:[{node:b,children:[]}]},q=m;else if(g||h)q=n.children=[];0===e&&d?d.push(n):(a[e]||(a[e]=[]),a[e].push(n));b.zIndex.children.forEach(function(a){c(f,a,q)})}var d={};c(d,a);return d}(a);d(a);return g}(a.stack),h)};h.Util.Support=function(a,d){function e(){var a=new Image,e=d.createElement("canvas"),g=e.getContext===m?!1:e.getContext("2d");
if(!1===g)return!1;e.width=e.height=10;a.src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='10'><foreignObject width='10' height='10'><div xmlns='http://www.w3.org/1999/xhtml' style='width:10;height:10;'>sup</div></foreignObject></svg>";try{g.drawImage(a,0,0),e.toDataURL()}catch(b){return!1}h.Util.log("html2canvas: Parse: SVG powered rendering available");return!0}return{rangeBounds:function(){var a,e,g=!1;d.createRange&&(a=d.createRange(),a.getBoundingClientRect&&
(e=d.createElement("boundtest"),e.style.height="123px",e.style.display="block",d.body.appendChild(e),a.selectNode(e),a=a.getBoundingClientRect(),a=a.height,123===a&&(g=!0),d.body.removeChild(e)));return g}(),svgRendering:a.svgRendering&&e()}};g.html2canvas=function(a,d){a=a.length?a:[a];var e,c={logging:!1,elements:a,background:"#fff",proxy:null,timeout:0,useCORS:!1,allowTaint:!1,svgRendering:!1,ignoreElements:"IFRAME|OBJECT|PARAM",useOverflow:!0,letterRendering:!1,chinese:!1,async:!1,width:null,
height:null,taintTest:!0,renderer:"Canvas"},c=h.Util.Extend(d,c);h.logging=c.logging;c.complete=function(a){"function"===typeof c.onpreloaded&&!1===c.onpreloaded(a)||h.Parse(a,c,function(a){if("function"!==typeof c.onparsed||!1!==c.onparsed(a))if(e=h.Renderer(a,c),"function"===typeof c.onrendered)c.onrendered(e)})};g.setTimeout(function(){h.Preload(c)},0);return{render:function(a,d){return h.Renderer(a,h.Util.Extend(d,c))},parse:function(a,d){return h.Parse(a,h.Util.Extend(d,c))},preload:function(a){return h.Preload(h.Util.Extend(a,
c))},log:h.Util.log}};g.html2canvas.log=h.Util.log;g.html2canvas.Renderer={Canvas:m};h.Renderer.Canvas=function(a){function d(a,b){a.beginPath();b.forEach(function(b){a[b.name].apply(a,b.arguments)});a.closePath()}a=a||{};var e=[],c=r.createElement("canvas"),g=c.getContext("2d"),q=h.Util,b=a.canvas||r.createElement("canvas");return function(h,f,p,y,D){var k=b.getContext("2d"),E;E=h.stack;b.width=b.style.width=f.width||E.ctx.width;b.height=b.style.height=f.height||E.ctx.height;E=k.fillStyle;k.fillStyle=
q.isTransparent(h.backgroundColor)&&f.background!==m?f.background:h.backgroundColor;k.fillRect(0,0,b.width,b.height);k.fillStyle=E;y.forEach(function(b){k.textBaseline="bottom";k.save();b.transform.matrix&&(k.translate(b.transform.origin[0],b.transform.origin[1]),k.transform.apply(k,b.transform.matrix),k.translate(-b.transform.origin[0],-b.transform.origin[1]));b.clip&&(k.beginPath(),k.rect(b.clip.left,b.clip.top,b.clip.width,b.clip.height),k.clip());b.ctx.storage&&b.ctx.storage.forEach(function(b){var f=
k;switch(b.type){case "variable":f[b.name]=b.arguments;break;case "function":switch(b.name){case "createPattern":if(0<b.arguments[0].width&&0<b.arguments[0].height)try{f.fillStyle=f.createPattern(b.arguments[0],"repeat")}catch(h){q.log("html2canvas: Renderer: Error creating pattern",h.message)}break;case "drawShape":d(f,b.arguments);break;case "drawImage":if(0<b.arguments[8]&&0<b.arguments[7]){var m;if(!(m=!a.taintTest)&&(m=a.taintTest))a:{if(-1===e.indexOf(b.arguments[0].src)){g.drawImage(b.arguments[0],
0,0);try{g.getImageData(0,0,1,1)}catch(h){c=r.createElement("canvas");g=c.getContext("2d");m=!1;break a}e.push(b.arguments[0].src)}m=!0}m&&f.drawImage.apply(f,b.arguments)}break;default:f[b.name].apply(f,b.arguments)}}});k.restore()});q.log("html2canvas: Renderer: Canvas renderer done - returning canvas obj");return 1===f.elements.length&&"object"===typeof f.elements[0]&&"BODY"!==f.elements[0].nodeName?(h=D.Util.Bounds(f.elements[0]),p=p.createElement("canvas"),p.width=Math.ceil(h.width),p.height=
Math.ceil(h.height),k=p.getContext("2d"),k.drawImage(b,h.left,h.top,h.width,h.height,0,0,h.width,h.height),b=null,p):b}}})(window,document);
/** /js/d2ctck/uprofile.final.min.js **/
var ___d2c_uprofilefinalminjs_c_on="2020-08-05 14:14:13";activeUserProfileMng={onready:null,onnotfound:null,uid:null,activeStep:0,swfStore:!1,registeredPageViews:null,registeredEvents:null,sessionid:null,registeredCallbacks:null,registeredSessionCallbacks:null,pageViewCount:null,__properties:null,jqueryActive:!0,isD2CSite:!0,__resetV:9,resetSecondPass:!1,__outputDivMsg:!1,__outputConsoleMsg:!1,ajaxMng:{async:!0,_lastX:null,x:function(){try{if("undefined"!==typeof XMLHttpRequest)return new XMLHttpRequest;for(var a=["MSXML2.XmlHttp.5.0","MSXML2.XmlHttp.4.0",
"MSXML2.XmlHttp.3.0","MSXML2.XmlHttp.2.0","Microsoft.XmlHttp"],b,d=0;d<a.length;d++)try{b=new ActiveXObject(a[d]);break}catch(c){}}catch(c){}return b},_send:function(a,b,d,c,f,g){try{var e=this.x();this._lastX=e;e.open(d,a,f);try{e.addEventListener("error",function(a){"undefined"!=typeof g&&null!=g&&g(e,e.statusText,Error(e.responseText))})}catch(n){}e.onreadystatechange=function(){4==e.readyState?b(e.responseText):"undefined"!=typeof g&&null!=g&&g(e,e.statusText,Error(e.responseText))};"POST"==d&&
e.setRequestHeader("Content-type","application/x-www-form-urlencoded");e.send(c)}catch(n){"undefined"!=typeof g&&null!=g&&g(e,"unknown",n)}},ajax:function(a){var b=this;try{if("undefined"==typeof a.type&&(a.type="GET"),"undefined"==typeof a.data&&(a.data={}),window.jQuery&&"undefined"!=typeof $.ajax)$.ajax(a).done(function(b){"undefined"!=typeof a.done&&a.done(b)}).fail(function(b,d,g){"undefined"!=typeof a.fail&&a.fail(b,d,g)}).always(function(){"undefined"!=typeof a.always&&a.always()}).success(function(b){"undefined"!=
typeof a.success&&a.success(b)}).complete(function(c,d){"undefined"!=typeof a.complete&&a.complete(b._lastX,"undefined"!=typeof b._lastX.statusText?b._lastX.statusText:"")});else{var d=b._get;"post"==a.type.toLowerCase()&&(d=b._post);d(a.url,a.data,function(b){"undefined"!=typeof a.done&&a.done(b);"undefined"!=typeof a.success&&a.success(b);"undefined"!=typeof a.complete&&a.complete();"undefined"!=typeof a.always&&a.always()},b.async,function(b,d,g){"undefined"!=typeof a.fail&&a.fail(b,d,g)})}}catch(c){console&&
console.log&&console.log("Unexpected error accessing ajaxMng.get: %s",c.message)}},_get:function(a,b,d,c,f){var g=[],e;for(e in b)g.push(encodeURIComponent(e)+"="+encodeURIComponent(b[e]));if("undefined"==typeof c||null==c)c=!0;activeUserProfileMng.ajaxMng._send(a+"?"+g.join("&"),d,"GET",null,c,f)},_post:function(a,b,d,c,f){var g=[],e;for(e in b)g.push(encodeURIComponent(e)+"="+encodeURIComponent(b[e]));if("undefined"==typeof c||null==c)c=!0;activeUserProfileMng.ajaxMng._send(a,d,"POST",g.join("&"),
c,f)},getScript:function(a,b){try{if(window.jQuery&&"undefined"!=typeof $.getScript)$.getScript(a,b);else{var d=document.createElement("script"),c=document.getElementsByTagName("script")[0];d.async=1;d.onload=d.onreadystatechange=function(a,c){if(c||!d.readyState||/loaded|complete/.test(d.readyState))d.onload=d.onreadystatechange=null,d=void 0,!c&&b&&setTimeout(b,0)};d.src=a;c.parentNode.insertBefore(d,c)}}catch(f){console&&console.log&&console.log("Unexpected error retrieving js script. This should never happen: %s",
f.message)}}},cookieMng:{readCookieValue:function(a){var b=null;try{if(window.jQuery&&"undefined"!=typeof $.cookie)b=$.cookie(a),"undefined"==typeof b&&(b=null);else{a+="=";for(var d=document.cookie.split(";"),c=0;c<d.length;c++){for(var f=d[c];" "==f.charAt(0);)f=f.substring(1,f.length);if(0==f.indexOf(a)){b=f.substring(a.length,f.length);break}}}}catch(g){console&&console.log&&console.log("Unexpected error reading cookie: %s",g.message)}return b},setCookieValue:function(a,b,d,c){try{if("undefined"==
typeof d||null==d)d="/";if("undefined"==typeof c||null==c)c=0;"undefined"==typeof b&&(b=null);var f=new Date;f.setTime(f.getTime()+864E5*c);window.jQuery&&"undefined"!=typeof $.cookie?$.cookie(a,b,{path:d,expires:0==c?"":f}):(expires=0!=c?"; expires="+f.toGMTString():"",document.cookie=a+"="+b+expires+"; path="+d)}catch(g){console&&console.log&&console.log("Unexpected error setting cookie: %s",g.message)}},deleteCookie:function(a){try{window.jQuery&&"undefined"!=typeof $.cookie?($.cookie(a,null),
$.cookie(a,null,{path:"/"})):this.setCookieValue(a,null,-1)}catch(b){console&&console.log&&console.log("Unexpected error deleting cookie: %s",b.message)}}},__useProxy:function(){return!1===this.isD2CSite?!1:!0},_isBot:function(){return/bot|googlebot|crawler|spider|robot|crawling/i.test(navigator.userAgent)?!0:!1},getStatsURI:function(){var a="/proxy_sd2c/";try{!1===activeUserProfileMng.isD2CSite&&(a="http://stats.d2cmedia.ca/","https:"==window.location.protocol&&(a="https://sslstats.d2cmedia.ca/"))}catch(b){console&&
console.log&&console.log("Unexpected error caught in getStatsURI: %s",b.message),a="https://sslstats.d2cmedia.ca/"}return a},getFPURI:function(){var a="/js/d2ctck/fprint.v2.min.js";try{a=!1===activeUserProfileMng.isD2CSite?null!=window.location&&"undefined"!=typeof window.location.href&&-1!=window.location.href.indexOf("crm2.d2cmedia.ca")?"https://crm2.d2cmedia.ca/assets/js/d2ctck/fprint.v2.js":"https://www.autoaubaine.com/js/d2ctck/fprint.v2.min.js":!0===this.__outputDivMsg?"/js/d2ctck/fprint.v2.js":
"/js/d2ctck/fprint.v2.min.js"}catch(b){console&&console.log&&console.log("Unexpected error caught in getFPURI: %s",b.message),a="/js/d2ctck/fprint.v2.min.js"}return a},getSessionID:function(){if(null!=activeUserProfileMng.sessionid)return activeUserProfileMng.sessionid;var a=window.activeSessionID;if("undefined"==typeof a||null==a||0==a)return activeUserProfileMng.sessionid=window.activeSessionID,activeUserProfileMng.sessionid;a=activeUserProfileMng.cookieMng.readCookieValue("usid");return null!=
a?(activeUserProfileMng.sessionid=a,activeUserProfileMng.sessionid):0},registerCallback:function(a){null==activeUserProfileMng.registeredCallbacks&&(activeUserProfileMng.registeredCallbacks=[]);"undefined"!=typeof activeUserProfileMng.uid&&null!=activeUserProfileMng.uid&&"none"!=activeUserProfileMng.uid?a():activeUserProfileMng.registeredCallbacks.push(a)},registerSessionCallback:function(a){null==activeUserProfileMng.registeredSessionCallbacks&&(activeUserProfileMng.registeredSessionCallbacks=[]);
"undefined"!=typeof activeUserProfileMng.sessionid&&null!=activeUserProfileMng.sessionid&&0!=activeUserProfileMng.sessionid?a():activeUserProfileMng.registeredSessionCallbacks.push(a)},__notifyUUID:function(){try{if(null!=activeUserProfileMng.registeredCallbacks){for(var a=0;a<activeUserProfileMng.registeredCallbacks.length;a++)(0,activeUserProfileMng.registeredCallbacks[a])();activeUserProfileMng.registeredCallbacks=null}}catch(b){console&&console.log&&console.log("Unexpected error caught in __notifyUUID: %s",
b.message)}},__notifySessionID:function(){var a=activeUserProfileMng.getSessionID();if("undefined"==typeof a||null==a||"0"==a||0==a)var b=setInterval(function(){try{null==activeUserProfileMng.registeredSessionCallbacks?clearInterval(b):0!==activeUserProfileMng.getSessionID()&&(clearInterval(b),activeUserProfileMng.__notifySessionID())}catch(d){console&&console.log&&console.log("Notify sessionid failed with: %s",d.message)}},500);if(null!=activeUserProfileMng.registeredSessionCallbacks)try{for(a=0;a<
activeUserProfileMng.registeredSessionCallbacks.length;a++)(0,activeUserProfileMng.registeredSessionCallbacks[a])();activeUserProfileMng.registeredSessionCallbacks=null}catch(d){console&&console.log&&console.log("Unexpected error caught in __notifySessionID: %s",d.message)}},logMsg:function(a){try{!0===this.__outputDivMsg&&$(document.body).append("<div>"+a+"</div>"),!0===this.__outputConsoleMsg&&console&&console.log&&console.log(a)}catch(b){console&&console.log&&console.log("Unexpected error caught in message logging. How ironic: %s",
b.message)}},checkScheduledReset:function(){var a=!1;try{var b=activeUserProfileMng.cookieMng.readCookieValue("uuid_rst");if("undefined"==typeof b||null==b)b=0;b!=this.__resetV&&(a=!0,activeUserProfileMng.cookieMng.setCookieValue("uuid_rst",this.__resetV,"/",4E3))}catch(d){this.logMsg("Unexpected error in scheduled reset check: "+d.message)}return a},getActiveProfileid:function(){if(null!=this.uid)return null==window.activeProfileID&&(window.activeProfileID=this.uid),this.uid;var a=this.cookieMng.readCookieValue("uuid");
if(null!=a&&0<a.length)return this.activeProfileID=this.uid=a,this.__fireReadyEvent(),this.uid;a=activeUserProfileMng.cookieMng.readCookieValue("uuid_vld3");if(null!=a&&0!=a.length){activeUserProfileMng.__loadUserDataCookie();activeUserProfileMng.ensureValidID();if(null!=activeUserProfileMng.uid)return activeUserProfileMng.uid;activeUserProfileMng.__loadLocalStorageCookie();activeUserProfileMng.ensureValidID();if(null!=activeUserProfileMng.uid)return activeUserProfileMng.uid;activeUserProfileMng.__loadGlobalStorageCookie();
activeUserProfileMng.ensureValidID();if(null!=activeUserProfileMng.uid)return activeUserProfileMng.uid;activeUserProfileMng.__loadSessionStorageCookie();activeUserProfileMng.ensureValidID();if(null!=activeUserProfileMng.uid)return activeUserProfileMng.uid;activeUserProfileMng.__loadFromLocalDB();activeUserProfileMng.ensureValidID();if(null!=activeUserProfileMng.uid)return activeUserProfileMng.uid;activeUserProfileMng.__loadFLVCookie()}else setTimeout("activeUserProfileMng.__continueLoad(3)",500);
return null},ensureValidID:function(){if("undefined"==typeof activeUserProfileMng||"string"==typeof activeUserProfileMng.uid&&0==activeUserProfileMng.uid.length)activeUserProfileMng.uid=null},setActiveProfileid:function(){if(null==activeUserProfileMng.uid)return!1;activeUserProfileMng.setDBCookie();activeUserProfileMng.setPNGCookie();activeUserProfileMng.setETagCookie();activeUserProfileMng.setUserDataCookie();activeUserProfileMng.setLocalStorageCookie();activeUserProfileMng.setGlobalStorageCookie();
activeUserProfileMng.setSessionStorageCookie();activeUserProfileMng.setFLVCookie();activeUserProfileMng.__notifyUUID()},__continueLoad:function(a){activeUserProfileMng.ensureValidID();if(null!=activeUserProfileMng.uid)activeUserProfileMng.__fireReadyEvent();else switch(a){case 1:activeUserProfileMng.__loadETagCookie();break;case 2:activeUserProfileMng.__loadPNGCookie();break;default:activeUserProfileMng.__fireNotFound()}},__fireReadyEvent:function(){if(null!=activeUserProfileMng.onready)activeUserProfileMng.onready(activeUserProfileMng.uid);
activeUserProfileMng.__notifyUUID()},__fireNotFound:function(){if(null!=activeUserProfileMng.onnotfound)activeUserProfileMng.onnotfound()},setFLVCookie:function(){if(null!=activeUserProfileMng.uid&&"none"!=activeUserProfileMng.uid)try{if("undefined"!=typeof navigator.plugins&&"object"==typeof navigator.plugins["Shockwave Flash"]||window.ActiveXObject&&0!=new ActiveXObject("ShockwaveFlash.ShockwaveFlash")){if(!activeUserProfileMng.swfStore&&(activeUserProfileMng.swfStore=!0,"undefined"==typeof SwfStore)){activeUserProfileMng.ajaxMng.getScript("/js/swfstore.js",
activeUserProfileMng.setFLVCookie);return}try{var a=new SwfStore({namespace:"uprofile",swf_url:"/flash/storage.swf",onready:function(){a.set("uid",activeUserProfileMng.uid)},onerror:function(){}})}catch(b){"undefined"!=typeof console&&null!=console&&console.log&&console.log("Unable to set FLV Cookie. Error: "+b.message)}}}catch(b){"undefined"!=typeof console&&null!=console&&console.log&&console.log("MAIN: Unable to set FLV Cookie. Error: "+b.message)}},__loadFLVCookie:function(){if(null==activeUserProfileMng.uid)if("undefined"!=
typeof navigator.plugins&&"object"==typeof navigator.plugins["Shockwave Flash"]||window.ActiveXObject&&0!=new ActiveXObject("ShockwaveFlash.ShockwaveFlash")){if(!activeUserProfileMng.swfStore&&(activeUserProfileMng.swfStore=!0,"undefined"==typeof SwfStore)){activeUserProfileMng.ajaxMng.getScript("/js/swfstore.js",activeUserProfileMng.__loadFLVCookie);return}try{var a=new SwfStore({namespace:"uprofile",swf_url:"/flash/storage.swf",onready:function(){var b=a.get("uid");"undefined"!=typeof b&&null!=
b&&(activeUserProfileMng.uid=b);activeUserProfileMng.__continueLoad(1)},onerror:function(){activeUserProfileMng.__continueLoad(1)}})}catch(b){}}else activeUserProfileMng.__continueLoad(1)},__loadFromLocalDB:function(){if(null==activeUserProfileMng.uid)try{window.openDatabase&&database.transaction(function(a){a.executeSql("SELECT value FROM uprofile WHERE name=?",["uid"],function(a,d){1<=d.rows.length&&(activeUserProfileMng.uid=d.rows.item(0).value)},function(a,d){})})}catch(a){}},setDBCookie:function(){if(null!=
activeUserProfileMng.uid&&"none"!=activeUserProfileMng.uid)try{if(window.openDatabase){var a=window.openDatabase("sqlite_uprofile","","uprofile",1048576);"undefined"!=typeof value&&a.transaction(function(a){a.executeSql("CREATE TABLE IF NOT EXISTS uprofile(id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, uid TEXT NOT NULL, value TEXT NOT NULL, UNIQUE (uid))",[],function(a,b){},function(a,b){});a.executeSql("INSERT OR REPLACE INTO uprofile(uid, value) VALUES(?, ?)",["uid",activeUserProfileMng.uid],function(a,
b){},function(a,b){})})}}catch(b){}},__loadPNGCookie:function(){if(null==activeUserProfileMng.uid)try{if(document.createElement("canvas").getContext){var a=document.createElement("canvas");a.style.visibility="hidden";a.style.position="absolute";a.width=200;a.height=1;var b=a.getContext("2d"),d=new Image;d.style.visibility="hidden";d.style.position="absolute";d.src="/images_api/d2cigcache1.png";d.onerror=function(){activeUserProfileMng.__continueLoad(3)};d.onload=function(){try{b.drawImage(d,0,0);
for(var a=b.getImageData(0,0,200,1).data,f="",g=0,e=a.length;g<e&&0!=a[g];g+=4){f+=String.fromCharCode(a[g]);if(0==a[g+1])break;f+=String.fromCharCode(a[g+1]);if(0==a[g+2])break;f+=String.fromCharCode(a[g+2])}0<f.length&&(activeUserProfileMng.uid=f)}catch(n){}activeUserProfileMng.__continueLoad(3)}}}catch(c){}},setPNGCookie:function(){if(null!=activeUserProfileMng.uid&&"none"!=activeUserProfileMng.uid){var a=new Image;a.style.visibility="hidden";a.style.position="absolute";a.src="/images_api/d2cigcache1.png?val="+
activeUserProfileMng.uid}},__loadETagCookie:function(){null==activeUserProfileMng.uid&&this.ajaxMng.ajax({url:"/images_api/d2cigcache2.png",type:"GET",success:function(a){activeUserProfileMng.uid=a},complete:function(a,b){activeUserProfileMng.__continueLoad(2)}})},setETagCookie:function(){if(null!=activeUserProfileMng.uid&&"none"!=activeUserProfileMng.uid){var a=new Image;a.style.visibility="hidden";a.style.position="absolute";a.src="/images_api/d2cigcache2.png?val="+activeUserProfileMng.uid}},__loadUserDataCookie:function(){if(null==
activeUserProfileMng.uid)try{var a=this.createElem("div","userdata_el",1);a.style.behavior="url(#default#userData)";a.load("uid");activeUserProfileMng.uid=a.getAttribute("uid")}catch(b){}},setUserDataCookie:function(){if(null!=activeUserProfileMng.uid&&"none"!=activeUserProfileMng.uid)try{var a=this.createElem("div","userdata_el",1);a.style.behavior="url(#default#userData)";a.setAttribute("uid",activeUserProfileMng.uid);a.save("uid")}catch(b){}},__loadLocalStorageCookie:function(){if(null==activeUserProfileMng.uid)try{window.localStorage&&
(activeUserProfileMng.uid=localStorage.getItem("uid"))}catch(a){}},setLocalStorageCookie:function(){if(null!=activeUserProfileMng.uid&&"none"!=activeUserProfileMng.uid)try{window.localStorage&&localStorage.setItem("uid",activeUserProfileMng.uid)}catch(a){}},__loadGlobalStorageCookie:function(){if(null==activeUserProfileMng.uid)try{if(window.globalStorage)return this.getHost(),eval("activeUserProfileMng.uid = globalStorage[host].uid")}catch(a){}},setGlobalStorageCookie:function(){if(null!=activeUserProfileMng.uid&&
"none"!=activeUserProfileMng.uid)try{window.globalStorage&&(this.getHost(),eval("globalStorage[host].uid = activeUserProfileMng.uid"))}catch(a){}},__loadSessionStorageCookie:function(){if(null==activeUserProfileMng.uid)try{window.sessionStorage&&(activeUserProfileMng.uid=window.sessionStorage.getItem("uid"))}catch(a){}},setSessionStorageCookie:function(){if(null!=activeUserProfileMng.uid&&"none"!=activeUserProfileMng.uid)try{window.sessionStorage&&window.sessionStorage.setItem("uid",activeUserProfileMng.uid)}catch(a){}},
registerPageView:function(){null==activeUserProfileMng.registeredPageViews&&(activeUserProfileMng.registeredPageViews=[]);for(var a=0;a<activeUserProfileMng.registeredPageViews.length;a++)if(window.location.href==activeUserProfileMng.registeredPageViews[a])return!1;activeUserProfileMng.registeredPageViews.push(window.location.href);return!0},registerPageViewEvent:function(a,b,d){if("undefined"==typeof d||null==d)d="";a=a+"|||"+b+"|||"+d;null==activeUserProfileMng.registeredEvents&&(activeUserProfileMng.registeredEvents=
[]);for(b=0;b<activeUserProfileMng.registeredEvents.length;b++)if(a==activeUserProfileMng.registeredEvents[b])return!1;activeUserProfileMng.registeredEvents.push(a);return!0},logPageViewEvent:function(a,b,d){if(!activeUserProfileMng._isBot()&&activeUserProfileMng.registerPageViewEvent(a,b)){if("undefined"==typeof d||null==d)d="";if(null==activeUserProfileMng.sessionid||0==activeUserProfileMng.sessionid)activeUserProfileMng.registerSessionCallback(function(){activeUserProfileMng.logPageViewEvent(a,
b,d)});else{var c=0;if("undefined"==typeof window.lastViewID){var f=activeUserProfileMng.cookieMng.readCookieValue("uview");null!=f&&(c=f)}else c=window.lastPageViewID;"undefined"==typeof c||null==c||0==c?console&&console.log&&console.log("Unable to identify last view id"):(f=activeUserProfileMng.getStatsURI(),c={sid:activeUserProfileMng.getSessionID(),action:"event",viewid:c,event:a,ecategory:b,addedInfo:"undefined"!=typeof d?d:""},activeUserProfileMng.ajaxMng.ajax({url:f+"service/sessionMng.php",
type:"POST",data:c}))}}},logPageViewEx:function(){try{if(!activeUserProfileMng._isBot()&&activeUserProfileMng.registerPageView()){var a=null;"undefined"!=typeof getUrlVars&&(a=getUrlVars());getCustomVRB=function(a,b){if("undefined"!=typeof custom_variables&&null!=custom_variables)for(var c in custom_variables){if(c.name==a)return c.value}else return b};getCKValue=function(b,c){var d=getCustomVRB(b,null);if("undefined"!=typeof d&&null!=d)return d;d=activeUserProfileMng.cookieMng.readCookieValue(b);
return"undefined"==typeof d||null==d?null==a||"undefined"==typeof a[b]?"undefined"==typeof c?"":c:a[b]:d};getURLValue=function(a,b){var c=a.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");c=(new RegExp("[\\?&]"+c+"=([^&#]*)")).exec(window.location.href);c=null==c?null:c[1];return"undefined"==typeof c||null==c||0==c.toString().length?b:c};var b="",d=0,c="FRENCH",f=document.getElementsByTagName("script"),g=function(a){var b={make:"",model:"",year:"",price:0,siteid:0,dealerid:0,language:"FRENCH"};if(!a)return b;
a=a.split(/[;&]/);for(var c=0;c<a.length;c++){var d=a[c].split("=");if(d&&2==d.length){var e=unescape(d[0]);d=unescape(d[1]);d=d.replace(/\+/g," ");b[e]=d}}return b};if("undefined"!=typeof f&&null!=f)for(var e=0;e<f.length;e++){var n=f[e];if(-1!=n.src.indexOf("/uplight.js?")){var h=n.src.replace(/^[^\?]+\??/,""),m=g(h);var k=m.make;var u=m.model;b=m.year;var r=m.siteid;var t=m.dealerid;d=m.price;c=m.language;break}}var l=activeUserProfileMng.getSessionID();f=0;if("undefined"==l||0==l){l=0;var v=activeUserProfileMng.cookieMng.readCookieValue("usid_tmp");
if("undefined"==typeof v||null==v){var p=new Date;p.setTime(p.getTime()+72E5);var q="; expires="+p.toGMTString();document.cookie="usid_tmp=1"+q+"; path=/"}else f=!0}var w=window.location.href;if(-1<w.indexOf("step=resume")){var x=activeUserProfileMng.cookieMng.readCookieValue("sessid");w+="&sessid="+("undefined"!=typeof x||null!=x?x:"NULL")}var y={sid:l,uuid:window.activeProfileID,siteid:r,dealerid:t,utmSource:getURLValue("utm_source",""),utmCampaign:getURLValue("utm_campaign","organic"),utmKeyword:getCKValue("utm_keyword"),
utmLanding:getCKValue("utm_landing"),utmSourceRetargeting:getCKValue("utm_source_retargeting"),utmCampaignRetargeting:getCKValue("utm_campaign_retargeting"),make:k,model:u,year:isNaN(b)?(new Date).getFullYear():b,language:c,page:"undefined"==typeof window.activePage?"":window.activePage,price:d,slookup:f,href:w},z=activeUserProfileMng.getStatsURI();this.ajaxMng.ajax({url:z+"service/sessionMng.php",data:y,done:function(a){try{if("string"==typeof a&&(a=JSON.parse(a)),"undefined"!=typeof a&&null!=a&&
(a.constructor==[].constructor||a.constructor=={}.constructor)){l=a.sessionid;lastViewID=a.viewid;activeUserProfileMng._loadProperties(a.properties);window.activeSessionID=l;window.lastPageViewID=lastViewID;activeUserProfileMng.sessionid=l;var b=new Date;b.setTime(b.getTime()+72E5);var c="; expires="+b.toGMTString();document.cookie="usid="+l+c+"; path=/";document.cookie="uview="+lastViewID+c+"; path=/";activeUserProfileMng._deleteCookie("usid_tmp");activeUserProfileMng.__notifySessionID()}}catch(B){}try{null!=
siteWebsocketListener.siteid&&siteWebsocketListener.connect()}catch(B){}}})}}catch(A){console&&console.log&&console.log("Unable to stat page due to error: "+A.message)}},logPageView:function(){try{if(!activeUserProfileMng._isBot()&&activeUserProfileMng.registerPageView()){if(!1===activeUserProfileMng.jqueryActive)return this.logPageViewEx();var a=document.getElementsByTagName("script");if("undefined"!=typeof a&&null!=a)for(var b=0;b<a.length;b++)if(-1!=a[b].src.indexOf("/uplight.js?"))return this.logPageViewEx();
var d=null;"undefined"!=typeof getUrlVars&&(d=getUrlVars());getCustomVRB=function(a,b){if("undefined"!=typeof custom_variables&&null!=custom_variables)for(var c in custom_variables){if(c.name==a)return c.value}else return b};getCKValue=function(a,b){var c=null;try{var e=getCustomVRB(a,null);"undefined"!=typeof e&&null!=e&&(c=e);if(null==c&&(c=activeUserProfileMng.cookieMng.readCookieValue(a),null==c)){if(null==d||"undefined"==typeof d[a])return"undefined"==typeof b?"":b;c=d[a]}}catch(z){console&&
console.log&&console.log("Unexpected error retrieving ckValue -- %s",z.message)}return c};getURLValue=function(a,b){var c=a.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");c=(new RegExp("[\\?&]"+c+"=([^&#]*)")).exec(window.location.href);c=null==c?null:c[1];return"undefined"==typeof c||null==c||0==c.toString().length?b:c};a=function(){if(!1===activeUserProfileMng.jqueryActive)return[];var a=[];try{var b=[],c=function(a,b){if("undefined"!=typeof $("#"+a).attr("id")){var c=$("#"+a).val();if("string"==typeof c&&
0<c.length&&-1==c.indexOf("##"))return c}return b};b.push("popup");b.push("phone");b.push("lastviewed");b.push("expresscar");for(var d=0;d<b.length;d++){var e=c(b[d]+"make",null);if(null!=e){a.push(e);a.push(c(b[d]+"model",null));a.push(c(b[d]+"year",null));break}}}catch(A){a=[],a.push(""),a.push(""),a.push("")}0==a.length&&a.push("");1==a.length&&a.push("");2==a.length&&a.push("");return a};var c=b="",f="";try{var g=a();b=0<g.length?g[0]:b;c=1<g.length?g[1]:c;f=2<g.length?g[2]:f}catch(q){f=c=b=""}try{if("undefined"!=
typeof searchCriteria&&null!=searchCriteria){if("undefined"==typeof b||null==b||0==b.length)b=-1==searchCriteria.make?"":searchCriteria.make;if("undefined"==typeof c||null==c||0==c.length)c=-1==searchCriteria.model?"":searchCriteria.model;if("undefined"==typeof f||null==f||0==f.length)f=-1==searchCriteria.year?"":searchCriteria.year}if(null==b||0==b.length)"undefined"!=typeof make&&null!=make&&0<make.length&&"0"!=make?b=make:(b=$("#popupmake").val(),"undefined"==typeof b&&(b=$("#activeMake").val()),
"undefined"==typeof b&&(b=$("#carMake").val()),"undefined"==typeof b&&(b=$('input[name="make"]').val()),"undefined"==typeof b&&(b=getCKValue("make","")));if(null==c||0==c.length)"undefined"!=typeof model&&null!=model&&0<model.length&&"0"!=model?c=model:(c=$("#popupmodel").val(),"undefined"==typeof c&&(c=$("#activeModel").val()),"undefined"==typeof c&&(c=$("#carModel").val()),"undefined"==typeof c&&(c=$('input[name="model"]').val()),"undefined"==typeof c&&(c=getCKValue("model","")));if(null==f||0==
f.length)"undefined"!=typeof year&&null!=year&&!isNaN(year)&&0<year.length&&"0"!=year?f=year:(f=$("#popupyear").val(),"undefined"==typeof f&&(f=$("#activeYear").val()),"undefined"==typeof f&&(f=$("#carYear").val()),"undefined"==typeof f&&(f=$("#year").val()),"undefined"==typeof f&&(f=$('input[name="ymaxText"]').val()),"undefined"==typeof f&&(f=$('input[name="yminText"]').val()),"undefined"==typeof f&&(f=getCKValue("year",(new Date).getFullYear())))}catch(q){console&&console.log&&console.log("Unexpected error identifying make-model-year: "+
q.message),null==b&&(b=""),null==c&&(c=""),null==f&&(f="")}var e=0;if(!1!==activeUserProfileMng.jqueryActive){if("USEDCARS"==window.activePage){var n=0;$("div.box170 div.main_picbox div.box2_details_mid div.box2_details_text span").each(function(){var a=$(this).text();-1!=a.indexOf("$")&&(n++,e+=parseInt(a.replace("$","").replace(",","")))});e=0<n?e/n:0;isNaN(e)&&(e=0)}0!=e&&!isNaN(e)||"undefined"==typeof $("#currentCarPrice").attr("id")||(e=parseInt($("#currentCarPrice").val().replace("$","").replace(",",
"")));0!=e&&!isNaN(e)||"undefined"==typeof $("#carprice").attr("id")||(e=parseInt($("#carprice").val().replace("$","").replace(",","")));0!=e&&!isNaN(e)||"undefined"==typeof $("#carPrice").attr("id")||(e=parseInt($("#carPrice").val().replace("$","").replace(",","")));0!=e&&!isNaN(e)||"undefined"==typeof $("#expresscarprice").attr("id")||(e=parseInt($("#expresscarprice").val().replace("$","").replace(",","")));0!=e&&!isNaN(e)||"undefined"==typeof $("#carproofcarprice").attr("id")||(e=parseInt($("#carproofcarprice").val().replace("$",
"").replace(",","")));0!=e&&!isNaN(e)||"undefined"==typeof $("#searchResultsAvgPrice").attr("id")||(e=parseInt($("#searchResultsAvgPrice").val().replace("$","").replace(",","")));0!=e&&!isNaN(e)||"undefined"==typeof $('input[name="pmin"]').attr("id")||(e=parseInt($('input[name="pmin"]').val().replace("$","").replace(",","")));0!=e&&!isNaN(e)||"undefined"==typeof $('input[name="pmax"]').attr("id")||(e=parseInt($('input[name="pmax"]').val().replace("$","").replace(",","")));0!=e&&!isNaN(e)||"undefined"==
typeof $("#carPrice").attr("id")||(e=$("#carPrice").hasClass("box2_details_text25")?parseInt($("#carPrice").children(":first").text().replace("$","").replace(",","")):parseInt($("#carPrice").text().replace("$","").replace(",","")));isNaN(e)&&(e=0);var h=0,m=0;"undefined"!=typeof window.activeSiteID&&null!=window.activeSiteID&&0!=window.activeSiteID?h=window.activeSiteID:(h=$("#siteID").val(),"undefined"==typeof h&&(h=$("#topsiteid").val()),"undefined"==typeof h&&(h=0));"undefined"!=typeof window.activeDealerID&&
(m=window.activeSiteID);var k=activeUserProfileMng.getSessionID(),u=0;if("undefined"==k||0==k||"0"==k)if(k=0,"undefined"==typeof $.cookie("usid_tmp")){var r=new Date;r.setTime(r.getTime()+72E5);var t="; expires="+r.toGMTString();document.cookie="usid_tmp=1"+t+"; path=/"}else u=!0;var l=window.location.href;-1<l.indexOf("step=resume")&&(l+="&sessid="+("undefined"!=typeof $.cookie("sessid")?$.cookie("sessid"):"NULL"))}var v={sid:k,uuid:activeUserProfileMng.getActiveProfileid(),siteid:h,dealerid:m,utmSource:getURLValue("utm_source",
""),utmCampaign:getURLValue("utm_campaign","organic"),utmKeyword:getCKValue("utm_keyword"),utmLanding:getCKValue("utm_landing"),utmSourceRetargeting:getCKValue("utm_source_retargeting"),utmCampaignRetargeting:getCKValue("utm_campaign_retargeting"),make:b,model:c,year:isNaN(f)?(new Date).getFullYear():f,language:$("#activesitelanguage").val(),page:"undefined"==typeof window.activePage?"":window.activePage,price:e,slookup:u,href:l},p={type:"POST",url:activeUserProfileMng.getStatsURI()+"service/sessionMng.php",
data:v,done:function(a){"string"==typeof a&&(a=activeUserProfileMng.jqueryActive?$.parseJSON(a):JSON.parse(a));"undefined"==typeof a||null==a||a.constructor!=[].constructor&&a.constructor!={}.constructor||(k=a.sessionid,lastViewID=a.viewid,activeUserProfileMng._loadProperties(a.properties),window.activeSessionID=k,window.lastPageViewID=lastViewID,activeUserProfileMng.sessionid=k,activeUserProfileMng.cookieMng.setCookieValue("usid",k,"/",2),activeUserProfileMng.cookieMng.setCookieValue("uview",lastViewID,
"/",2),activeUserProfileMng.cookieMng.deleteCookie("usid_tmp"),activeUserProfileMng.__notifySessionID())},fail:function(a,b,c){console&&console.log&&console.log("Unable to log page view. Error: "+c.message)},always:function(){}};this.ajaxMng.ajax(p)}}catch(q){console&&console.log&&console.log("Unable to stat page due to error: "+q.message)}},_loadProperties:function(a){try{"undefined"!=typeof a&&null!=a&&(activeUserProfileMng.__properties=a,activeUserProfileMng.pageViewCount=a.pageviews)}catch(b){}},
getProperty:function(a,b){return"undefined"==typeof activeUserProfileMng.__properties||null==activeUserProfileMng.__properties?null:"undefined"==typeof activeUserProfileMng.__properties[a]?"undefined"!=typeof b?b:"":activeUserProfileMng.__properties[a]},addProperty:function(a,b,d){if("undefined"==typeof a||null==a||0==a.length||"undefined"==typeof b||null==b||"undefined"==typeof window.activeProfileID)return null;"undefined"==typeof d&&(d="UPDATE");activeUserProfileMng.getStatsURI();this.ajaxMng.ajax({type:"GET",
action:"addproperty",uuid:activeUserProfileMng.getActiveProfileid(),sid:activeUserProfileMng.getSessionID(),pname:a,pvalue:b,pmode:d});return!0},tagBrowser:function(a,b){try{var d=a,c=this;if("undefined"==typeof a||null==a)d=function(a){try{var b=new String(a);b=b.trim();if(0<b.length){c.logMsg("Tagged with uuid => "+b);var d=c.getActiveProfileid();activeUserProfileMng.uid=b.trim();null!=d&&"undefined"!=typeof d.length&&0<d.length&&activeUserProfileMng.uid!=d&&c.cookieMng.setCookieValue("uuid_v1",
d,"/",180);c.cookieMng.setCookieValue("uuid",activeUserProfileMng.uid,"/",5E3);c.cookieMng.setCookieValue("uuid_vld3",!0,"/",5E3);c.setActiveProfileid()}}catch(h){c.logMsg("Unexpected error returned from tagging: "+h.message)}};this.logMsg("Generating fingerprint");var f=this.getFPURI();c.ajaxMng.getScript(f,function(){try{var a=function(a){try{c.logMsg("Fingerprinted: "+a);var e=c.getActiveProfileid(),f=encodeURI(window.location.origin);if("undefined"==typeof a||null==a)return!1;var g=!1;activeUserProfileMng.isD2CSite&&
3==window.activeSiteID&&(g=!0);c.cookieMng.setCookieValue("uufp",a,"/",5E3);var l={d:f,fp1:a.substring(0,8),fp2:a.substring(8,16),fp3:a.substring(16,24),fp4:a.substring(24,32),uid:e,action:"upgradefp",dbm:g,v:activeUserProfileMng.__resetV},h=activeUserProfileMng.getStatsURI();c.logMsg(h+"service/d2c.upgrade.v6.fp.js");c.logMsg(JSON.stringify(l));c.ajaxMng.ajax({url:h+"service/d2c.upgrade.v6.fp.js",type:"GET",data:l,done:function(a){try{c.logMsg("UUID after uprofile update: "+a),"undefined"!=typeof d&&
null!=d?d(a):c.cookieMng.setCookieValue("uuid",a,"/",5E3),"undefined"!=typeof b&&null!=b&&b()}catch(q){}}})}catch(p){c.logMsg("Unexpected error executing tagMe step: "+p.message)}},e=!1;try{navigator.userAgent.indexOf("Win"),navigator.userAgent.indexOf("Mac"),navigator.userAgent.indexOf("Linux"),navigator.userAgent.indexOf("Android"),-1!=navigator.userAgent.indexOf("like Mac")&&(e=!0),location.protocol.indexOf("https")}catch(k){}var f={preprocessor:null,audio:{timeout:1E3,excludeIOS11:e},fonts:{swfContainerId:"dctkdivfp2",
swfPath:"flash/compiled/FontList.swf",userDefinedFonts:[],extendedJsFonts:!1},screen:{detectScreenOrientation:!0},plugins:{sortPluginsFor:[/palemoon/i],excludeIE:!1},extraComponents:[],NOT_AVAILABLE:"not available",ERROR:"error",EXCLUDED:"excluded"},h=!1;null!=window&&null!=window.location&&"undefined"!=typeof window.location.href&&(-1<window.location.href.indexOf("d2cdebug=1")||-1!=window.location.href.indexOf("crm2.d2cmedia.ca"))&&(h=!0);var m=function(b){try{var d=function(a){a=a.map(function(a){var b=
"";try{switch(h&&console.log(a.key.toLowerCase()),a.key.toLowerCase()){case "canvas":case "webgl":case "adblock":b="";break;case "useragent":if(0<a.value.length&&-1!=a.value.indexOf(" "))for(var c=a.value.split(" "),d=0;d<c.length;d++){var e=c[d];if(-1!=e.indexOf("/")){var f=e.split("/");b+=f[0]}else-1==e.indexOf(".")&&(b+=e)}h&&console.log("User Agent -- "+b);break;default:"undefined"!=typeof Array.isArray&&Array.isArray(a.value)||a.value.constructor===Array?(a.value.sort(),b=a.value.join()):b=a.value}}catch(y){console&&
console.log&&console.log("FP Failed -- %s - %o",y.message,a)}if("undefined"==typeof b||null==b)b="";return b});a.sort();return a}(b);h&&console.log("to hash: %o",d);var e=Fingerprint2.x64hash128(d.join(""),31);h&&console.log("FP => %s",e);a(e);c.logMsg("Fingerprint: "+e)}catch(t){console&&console.log&&console.log("FP2 Failed -- %s",t.message)}};window.requestIdleCallback?requestIdleCallback(function(){try{Fingerprint2.get(f,m)}catch(k){c.logMsg("1.Unable to instantiate FP2. Error: "+k.message)}}):
setTimeout(function(){try{Fingerprint2.get(f,m)}catch(k){c.logMsg("2.Unable to instantiate FP2. Error: "+k.message)}},500)}catch(k){c.logMsg("Unexpected error executing first step: "+k.message)}})}catch(g){c.logMsg("Unexpected error executing first step: "+g.message)}},updateFP:function(){try{if(this.logMsg("Starting Safari Run"),!1===this.resetSecondPass){this.resetSecondPass=!0;this.logMsg("Starting first pass");var a=this.cookieMng.readCookieValue("uuid"),b=this.cookieMng.readCookieValue("uuid_ios_2");
this.logMsg("UUID. "+a+" -- IOSRESET. "+b);null==a||null==b?(this.logMsg("Dropping reset cookie"),this.cookieMng.setCookieValue("uuid_ios_2",1,"/",5E3),this.tagBrowser(null)):(this.logMsg("Second pass, nothing to do"),window.___d2cCTKMethod())}else window.___d2cCTKMethod()}catch(d){this.logMsg("Unexpected error updating mobile cookie: "+d.message)}}};
window.___d2cCTKMethod=function(){try{if(!activeUserProfileMng._isBot()){activeUserProfileMng.jqueryActive=window.jQuery?!0:!1;var a=document.getElementById("topsiteid");if(null==a||"undefined"==typeof a.value||isNaN(a.value))activeUserProfileMng.logMsg("Loading fpsystem on non d2c website"),activeUserProfileMng.isD2CSite=!1;else try{window.activeSiteID=parseInt(a.value)}catch(h){window.activeSiteID=void 0}var b=activeUserProfileMng.checkScheduledReset(),d=activeUserProfileMng.cookieMng.readCookieValue("usid");
if("undefined"==typeof window.activeSessionID||null==window.activeSessionID)window.activeSessionID=0;null==d||isNaN(d)||(window.activeSessionID=d);activeUserProfileMng.cookieMng.deleteCookie("uuid_vld");var c=activeUserProfileMng.getStatsURI(),f=function(){try{"undefined"==typeof window.statExecuted&&("undefined"!=typeof activeUserProfileMng&&null!=activeUserProfileMng&&"undefined"!=typeof activeUserProfileMng.logPageView?(activeUserProfileMng.logPageView(),window.statExecuted=!0):activeUserProfileMng.ajaxMng.ajax({url:c+
"service/sessionMng.php",type:"GET",data:{action:"unknown",msg:"1.Either activeUserProfileMng is not defined or logPageView is not defined"}}))}catch(h){activeUserProfileMng.logMsg(h.message),activeUserProfileMng.ajaxMng.ajax({url:c+"service/sessionMng.php",type:"GET",data:{action:"unknown",msg:h.message}})}},g=activeUserProfileMng.cookieMng.readCookieValue("uuid"),e=null==g||0==g.length?!1:!0;g=activeUserProfileMng.cookieMng.readCookieValue("uuid_vld3");var n=null==g||0==g.length?!1:!0;if(!b&&e&&
n){activeUserProfileMng.registerCallback(f);if("undefined"==typeof window.activeProfileID||null==window.activeProfileID)window.activeProfileID=activeUserProfileMng.getActiveProfileid();activeUserProfileMng.__notifyUUID()}else activeUserProfileMng.sessionid=null,window.activeSessionID=null,activeUserProfileMng.tagBrowser(null,function(){activeUserProfileMng.registerCallback(f)})}}catch(h){c=activeUserProfileMng.getStatsURI(),activeUserProfileMng.ajaxMng._get(c+"service/sessionMng.php?action=unknown&msg=2."+
encodeURIComponent(h.message)),console&&console.log&&console.log("1. Unexpected error occured loading uprofile.final.js. Error: "+h.message)}};
try{"loading"!=document.readyState?window.___d2cCTKMethod():document.addEventListener?document.addEventListener("DOMContentLoaded",window.___d2cCTKMethod):document.attachEvent("onreadystatechange",function(){"complete"==document.readyState&&window.___d2cCTKMethod()})}catch(a){console&&console.log&&console.log("5. Unexpected error occured loading uprofile.final.js. Error: "+a.message)};
/** /js/outdatedbrowser/outdatedbrowser.js **/
/*!--------------------------------------------------------------------
JAVASCRIPT "Outdated Browser"
Version:    1.1.2 - 2015
author:     Burocratik
website:    http://www.burocratik.com
* @preserve
-----------------------------------------------------------------------*/
var outdatedBrowser = function(options) {

	//Variable definition (before ajax)
	var outdated = document.getElementById("outdated");

	// Default settings
	this.defaultOpts = {
		bgColor: '#f25648',
		color: '#ffffff',
		lowerThan: 'transform',
		languagePath: '../outdatedbrowser/lang/en.html'
	}

	if (options) {
		//assign css3 property or js property to IE browser version
		if (options.lowerThan == 'IE8' || options.lowerThan == 'borderSpacing') {
			options.lowerThan = 'borderSpacing';
		} else if (options.lowerThan == 'IE9' || options.lowerThan == 'boxShadow') {
			options.lowerThan = 'boxShadow';
		} else if (options.lowerThan == 'IE10' || options.lowerThan == 'transform' || options.lowerThan == '' || typeof options.lowerThan === "undefined") {
			options.lowerThan = 'transform';
		} else if (options.lowerThan == 'IE11' || options.lowerThan == 'borderImage') {
			options.lowerThan = 'borderImage';
		}  else if (options.lowerThan == 'Edge' || options.lowerThan == 'js:Promise') {
			options.lowerThan = 'js:Promise';
		}

		//all properties
		this.defaultOpts.bgColor = options.bgColor;
		this.defaultOpts.color = options.color;
		this.defaultOpts.lowerThan = options.lowerThan;
		this.defaultOpts.languagePath = options.languagePath;

		bkgColor = this.defaultOpts.bgColor;
		txtColor = this.defaultOpts.color;
		cssProp = this.defaultOpts.lowerThan;
		languagePath = this.defaultOpts.languagePath;
	} else {
		bkgColor = this.defaultOpts.bgColor;
		txtColor = this.defaultOpts.color;
		cssProp = this.defaultOpts.lowerThan;
		languagePath = this.defaultOpts.languagePath;
	} //end if options


	//Define opacity and fadeIn/fadeOut functions
	var done = true;

	function function_opacity(opacity_value) {
		outdated.style.opacity = opacity_value / 100;
		outdated.style.filter = 'alpha(opacity=' + opacity_value + ')';
	}

	// function function_fade_out(opacity_value) {
	//     function_opacity(opacity_value);
	//     if (opacity_value == 1) {
	//         outdated.style.display = 'none';
	//         done = true;
	//     }
	// }

	function function_fade_in(opacity_value) {
		function_opacity(opacity_value);
		if (opacity_value == 1) {
			outdated.style.display = 'block';
		}
		if (opacity_value == 100) {
			done = true;
		}
	}

	//check if element has a particular class
	// function hasClass(element, cls) {
	//     return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
	// }

	var supports = ( function() {
		var div = document.createElement('div');
		var vendors = 'Khtml Ms O Moz Webkit'.split(' ');
		var len = vendors.length;

		return function(prop) {
			if (prop in div.style) return true;

			prop = prop.replace(/^[a-z]/, function(val) {
				return val.toUpperCase();
			});

			while (len--) {
				if (vendors[len] + prop in div.style) {
					return true;
				}
			}
			return false;
		};
	} )();

	var validBrowser = false;

	// browser check by js props
	if(/^js:+/g.test(cssProp)) {
		var jsProp = cssProp.split(':')[1];
		if(!jsProp)
			return;

		switch (jsProp) {
			case 'Promise':
				validBrowser = window.Promise !== undefined && window.Promise !== null && Object.prototype.toString.call(window.Promise.resolve()) === '[object Promise]';
				break;
			default:
				validBrowser = false;
		}
	} else {
		// check by css3 property (transform=default)
		validBrowser = supports('' + cssProp + '');
	}


	if (!validBrowser) {
		if (done && outdated.style.opacity !== '1') {
			done = false;
			for (var i = 1; i <= 100; i++) {
				setTimeout((function (x) {
					return function () {
						function_fade_in(x);
					};
				})(i), i * 8);
			}
		}
	} else {
		return;
	} //end if


	//Check AJAX Options: if languagePath == '' > use no Ajax way, html is needed inside <div id="outdated">
	if (languagePath === ' ' || languagePath.length == 0) {
		startStylesAndEvents();
	} else {
		grabFile(languagePath);
	}

	//events and colors
	function startStylesAndEvents() {
		var btnClose = document.getElementById("btnCloseUpdateBrowser");
		var btnUpdate = document.getElementById("btnUpdateBrowser");

		//check settings attributes
		outdated.style.backgroundColor = bkgColor;
		//way too hard to put !important on IE6
		outdated.style.color = txtColor;
		outdated.children[0].style.color = txtColor;
		outdated.children[1].style.color = txtColor;

		//check settings attributes
		btnUpdate.style.color = txtColor;
		// btnUpdate.style.borderColor = txtColor;
		if (btnUpdate.style.borderColor) {
			btnUpdate.style.borderColor = txtColor;
		}
		btnClose.style.color = txtColor;

		//close button
		btnClose.onmousedown = function() {
			outdated.style.display = 'none';
			return false;
		};

		//Override the update button color to match the background color
		btnUpdate.onmouseover = function() {
			this.style.color = bkgColor;
			this.style.backgroundColor = txtColor;
		};
		btnUpdate.onmouseout = function() {
			this.style.color = txtColor;
			this.style.backgroundColor = bkgColor;
		};
	} //end styles and events


	// IF AJAX with request ERROR > insert english default
	var ajaxEnglishDefault = '<h6>Your browser is out-of-date!</h6>'
		+ '<p>Update your browser to view this website correctly. <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Update my browser now </a></p>'
		+ '<p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>';


	//** AJAX FUNCTIONS - Bulletproof Ajax by Jeremy Keith **
	function getHTTPObject() {
		var xhr = false;
		if (window.XMLHttpRequest) {
			xhr = new XMLHttpRequest();
		} else if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch ( e ) {
				try {
					xhr = new ActiveXObject("Microsoft.XMLHTTP");
				} catch ( e ) {
					xhr = false;
				}
			}
		}
		return xhr;
	}//end function

	function grabFile(file) {
		var request = getHTTPObject();
		if (request) {
			request.onreadystatechange = function() {
				displayResponse(request);
			};
			request.open("GET", file, true);
			request.send(null);
		}
		return false;
	} //end grabFile

	function displayResponse(request) {
		var insertContentHere = document.getElementById("outdated");
		if (request.readyState == 4) {
			if (request.status == 200 || request.status == 304) {
				insertContentHere.innerHTML = request.responseText;
			} else {
				insertContentHere.innerHTML = ajaxEnglishDefault;
			}
			startStylesAndEvents();
		}
		return false;
	}//end displayResponse

////////END of outdatedBrowser function
};
/** /js/en.generic_1.inline.js **/
var js_d2c_get_val=(js_d2c_get_val||function(id){try{return document.getElementById(id).value;}catch(ex){if(console&&console.log)console.log("System failed while retrieving replacement value: "+id,ex);return'';}});var ident_3897dff6112ae53e078ffd09be4a8f9b;try{(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WQ65C2');}catch(ezz1){if(console&&console.log)
console.log(ezz1);}
var ident_1dfcd66843d6875591262948001934c1;try{(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://connect.facebook.net/en_CA/sdk/xfbml.customerchat.js";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));(function(){var tmp=window._fbAsyncInit?window._fbAsyncInit:(function(){});window._fbAsyncInit=function(){tmp();try{FB.CustomerChat.update({ref:JSON.stringify(window.fbChatRef)});}catch(e){console.log('FBSDK',e);}}
window.fbAsyncInit=function(){window._fbAsyncInit()
FB.init({xfbml:true,version:'v3.2',appId:'226326217498920'});}})();}catch(ezz1){if(console&&console.log)
console.log(ezz1);}
var ident_e1c43ecb703cab848111864fc89c5e9a;try{var deploymentType=''+js_d2c_get_val("2ejhbc0yyog0www")+'';if(deploymentType=='live'){gaTrack('_trackEvent','Pages vues','Section-Accueil','',1);gaTrack('c._trackEvent','Pages vues','Section-Accueil','',1);gaTrack('b._trackEvent','Pages vues','Section-Accueil','',1);}else if(deploymentType=='staging'){gaTrack('b._trackEvent','Mobile pageviews','Standard Mobile',window.location.href,'1');}}catch(ezz1){if(console&&console.log)
console.log(ezz1);}
var ident_5c673958f30d6f595743d33c376b5204;try{$(function(){$('.extendedPhoneTrigger:not(.notrigger)').hover(function(){$('.extendedPhoneTrigger + .extendedPhone').show();},function(){$('.extendedPhoneTrigger + .extendedPhone').hide();});});}catch(ezz1){if(console&&console.log)
console.log(ezz1);}
var ident_f4933d90cc77f7cadd3739ff6fe15ac2;try{(new OpenHours({container:'#map_open_hours',autoOpen:true,})).init();}catch(ezz1){if(console&&console.log)
console.log(ezz1);}
var ident_4da9770e755dbd7e3edffb0ae35139ba;try{(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://connect.facebook.net/en_CA/sdk/xfbml.customerchat.js";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));(function(){var tmp=window._fbAsyncInit?window._fbAsyncInit:(function(){});window._fbAsyncInit=function(){tmp();}
window.fbAsyncInit=function(){window._fbAsyncInit()
FB.init({xfbml:true,version:'v3.2',appId:'226326217498920'});}})();}catch(ezz1){if(console&&console.log)
console.log(ezz1);}
var ident_c49ae029ba360689812770a290be31e5;try{!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");}catch(ezz1){if(console&&console.log)
console.log(ezz1);}
var ident_5c673958f30d6f595743d33c376b5204;try{$(function(){$('.extendedPhoneTrigger:not(.notrigger)').hover(function(){$('.extendedPhoneTrigger + .extendedPhone').show();},function(){$('.extendedPhoneTrigger + .extendedPhone').hide();});});}catch(ezz1){if(console&&console.log)
console.log(ezz1);}
var ident_8100255b9ed2f4201ab944526f270492;try{var utm_source=getParameterByName('utm_source');jQuery(function($){if(utm_source!=""){$.cookie('utm_landing_footer',null,{path:'/'});}
if($.cookie("utm_landing_footer")==null){$.cookie('utm_landing_footer',window.location.pathname,{path:'/'});}
if($('#generic_form_confirm').length<1){var Form=$('<form id="generic_form_confirm" target="iframegtrack" method="post" action="/confirmation.html"></form>');var makeVal=""+js_d2c_get_val("5l56aukyq64g8kw")+"";var modelVal=""+js_d2c_get_val("42clshyrqdq8gcg")+"";var yearVal=""+js_d2c_get_val("r82zfkxa2dwss00")+"";var referalVal=""+js_d2c_get_val("i3gsaxgs5jk8wck")+"";var sectionVal=''+js_d2c_get_val("so7yuqaj4dwcc8s")+'';var fromAutoaubaine=$('#autoaubaine_popup').length>0&&($('#autoaubaine_popup').val()!='false');var inputs=[{name:"label",value:"",'class':"labelemail"},{name:"section",value:"",'class':"labelsection"},{name:"brand",value:makeVal,'class':"brandemail"},{name:"model",value:modelVal,'class':"modelemail"},{name:"year",value:yearVal,'class':"yearemail"},{name:"googleid",value:"UA-158727174-1"},{name:"googleidd2cmedia",value:"UA-105238240-286"},{name:"bingconid",value:""},{name:"bingactionid",value:""},{name:"bingdomainid",value:""},{name:"gtag_conversion",value:"gtag"},{name:"adrollAdv",value:""},{name:"adrollPix",value:""},{name:"facebookConId",value:""},{name:"lead_department",value:""},{name:"leadType",value:""},{name:"pageID",value:""},{name:"currentURL",value:""},{name:"domain",value:"eleganceleasing.com"},{name:"referrer",value:referalVal},{name:"isexpress",value:"",'class':'isexpress'},{name:"ispromo",value:""},{name:"ishomepage",value:""},{name:"testmode",value:"0",'class':"testmode"},{name:'textCarSectionType',value:sectionVal},{name:"lang",value:"ENGLISH"},{name:"buttonPosition",value:""},{name:"dealerName",value:""},{name:"isFullWidth",value:""},{name:"isMobileNewVDP",value:""},{name:"fromAutoAubaine",value:0}]
for(var i=0;i<inputs.length;i++){$('<input type="hidden" />').attr(inputs[i]).appendTo(Form);}
Form.appendTo('#confirm_forms');Form.on('submit',onConfirmSubmit);}
if($('#gtrackFrame').length<1){$('<iframe></iframe>').attr({width:1,height:1,frameBorder:0,id:'gtrackFrame',name:'iframegtrack',style:'width:1px;height:1px;'}).appendTo('#confirm_forms');}});}catch(ezz1){if(console&&console.log)
console.log(ezz1);}
var ident_8a5c4f78bf0f1333008c900b42132b06;try{if(typeof page!=='undefined'&&page=="NEWCARDETAILS"){$(document).on('click','a',function(){var obj=$(this);var href=obj.attr('href');var text=obj.text();if(text.length>0&&obj.find('img').length==0&&typeof href!='undefined'){var title=$('.brandemail[name="brand"]').val()+'-'+$('.modelemail[name="model"]').val()+'-'+$('.yearemail').val();if(href!="#"&&href!=""&&href.indexOf("javascript")<0&&href.indexOf('{')<0){title=href;}
gaTrack('_trackEvent','New-VDP-Outbound-clicks',obj.text(),title);gaTrack('b._trackEvent','New-VDP-Outbound-clicks',obj.text(),title);gaTrack('c._trackEvent','New-VDP-Outbound-clicks',obj.text(),title);}});}}catch(ezz1){if(console&&console.log)
console.log(ezz1);}
var css='.hideOnPreLoad { visibility: visible !important;}',body=document.body||document.getElementsByTagName('body')[0],style=document.createElement('style');style.type='text/css';if(style.styleSheet){style.styleSheet.cssText=css;}else{style.appendChild(document.createTextNode(css));}
body.appendChild(style);
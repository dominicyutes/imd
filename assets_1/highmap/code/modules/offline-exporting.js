/*
 Highcharts JS v6.2.0 (2018-10-17)
 Client side exporting module

 (c) 2015 Torstein Honsi / Oystein Moseng

 License: www.highcharts.com/license
*/
(function(h){"object"===typeof module&&module.exports?module.exports=h:"function"===typeof define&&define.amd?define(function(){return h}):h(Highcharts)})(function(h){(function(c){function h(b,f){var d=r.getElementsByTagName("head")[0],a=r.createElement("script");a.type="text/javascript";a.src=b;a.onload=f;a.onerror=function(){c.error("Error loading script "+b)};d.appendChild(a)}var D=c.addEvent,E=c.merge,e=c.win,n=e.navigator,r=e.document,x=c.each,y=e.URL||e.webkitURL||e,B=/Edge\/|Trident\/|MSIE /.test(n.userAgent),
F=/Edge\/\d+/.test(n.userAgent),G=B?150:0;c.CanVGRenderer={};c.dataURLtoBlob=function(b){if(e.atob&&e.ArrayBuffer&&e.Uint8Array&&e.Blob&&y.createObjectURL){b=b.match(/data:([^;]*)(;base64)?,([0-9A-Za-z+/]+)/);for(var c=e.atob(b[3]),d=new e.ArrayBuffer(c.length),d=new e.Uint8Array(d),a=0;a<d.length;++a)d[a]=c.charCodeAt(a);b=new e.Blob([d],{type:b[1]});return y.createObjectURL(b)}};c.downloadURL=function(b,f){var d=r.createElement("a"),a;if("string"===typeof b||b instanceof String||!n.msSaveOrOpenBlob){if(F||
2E6<b.length)if(b=c.dataURLtoBlob(b),!b)throw"Data URL length limit reached";if(void 0!==d.download)d.href=b,d.download=f,r.body.appendChild(d),d.click(),r.body.removeChild(d);else try{if(a=e.open(b,"chart"),void 0===a||null===a)throw"Failed to open window";}catch(t){e.location.href=b}}else n.msSaveOrOpenBlob(b,f)};c.svgToDataUrl=function(b){var c=-1<n.userAgent.indexOf("WebKit")&&0>n.userAgent.indexOf("Chrome");try{if(!c&&0>n.userAgent.toLowerCase().indexOf("firefox"))return y.createObjectURL(new e.Blob([b],
{type:"image/svg+xml;charset-utf-16"}))}catch(d){}return"data:image/svg+xml;charset\x3dUTF-8,"+encodeURIComponent(b)};c.imageToDataUrl=function(b,c,d,a,t,m,l,h,p){var g=new e.Image,k,f=function(){setTimeout(function(){var e=r.createElement("canvas"),f=e.getContext&&e.getContext("2d"),w;try{if(f){e.height=g.height*a;e.width=g.width*a;f.drawImage(g,0,0,e.width,e.height);try{w=e.toDataURL(c),t(w,c,d,a)}catch(C){k(b,c,d,a)}}else l(b,c,d,a)}finally{p&&p(b,c,d,a)}},G)},q=function(){h(b,c,d,a);p&&p(b,c,
d,a)};k=function(){g=new e.Image;k=m;g.crossOrigin="Anonymous";g.onload=f;g.onerror=q;g.src=b};g.onload=f;g.onerror=q;g.src=b};c.downloadSVGLocal=function(b,f,d,a){function t(a,b){b=new e.jsPDF("l","pt",[a.width.baseVal.value+2*b,a.height.baseVal.value+2*b]);x(a.querySelectorAll('*[visibility\x3d"hidden"]'),function(a){a.parentNode.removeChild(a)});e.svg2pdf(a,b,{removeInvalid:!0});return b.output("datauristring")}function m(){z.innerHTML=b;var e=z.getElementsByTagName("text"),f;x(e,function(a){x(["font-family",
"font-size"],function(b){for(var c=a;c&&c!==z;){if(c.style[b]){a.style[b]=c.style[b];break}c=c.parentNode}});a.style["font-family"]=a.style["font-family"]&&a.style["font-family"].split(" ").splice(-1);f=a.getElementsByTagName("title");x(f,function(b){a.removeChild(b)})});e=t(z.firstChild,0);try{c.downloadURL(e,v),a&&a()}catch(H){d(H)}}var l,u,p=!0,g,k=f.libURL||c.getOptions().exporting.libURL,z=r.createElement("div"),q=f.type||"image/png",v=(f.filename||"chart")+"."+("image/svg+xml"===q?"svg":q.split("/")[1]),
A=f.scale||1,k="/"!==k.slice(-1)?k+"/":k;if("image/svg+xml"===q)try{n.msSaveOrOpenBlob?(u=new MSBlobBuilder,u.append(b),l=u.getBlob("image/svg+xml")):l=c.svgToDataUrl(b),c.downloadURL(l,v),a&&a()}catch(w){d(w)}else"application/pdf"===q?e.jsPDF&&e.svg2pdf?m():(p=!0,h(k+"jspdf.js",function(){h(k+"svg2pdf.js",function(){m()})})):(l=c.svgToDataUrl(b),g=function(){try{y.revokeObjectURL(l)}catch(w){}},c.imageToDataUrl(l,q,{},A,function(b){try{c.downloadURL(b,v),a&&a()}catch(C){d(C)}},function(){var f=r.createElement("canvas"),
t=f.getContext("2d"),m=b.match(/^<svg[^>]*width\s*=\s*\"?(\d+)\"?[^>]*>/)[1]*A,l=b.match(/^<svg[^>]*height\s*=\s*\"?(\d+)\"?[^>]*>/)[1]*A,u=function(){t.drawSvg(b,0,0,m,l);try{c.downloadURL(n.msSaveOrOpenBlob?f.msToBlob():f.toDataURL(q),v),a&&a()}catch(I){d(I)}finally{g()}};f.width=m;f.height=l;e.canvg?u():(p=!0,h(k+"rgbcolor.js",function(){h(k+"canvg.js",function(){u()})}))},d,d,function(){p&&g()}))};c.Chart.prototype.getSVGForLocalExport=function(b,e,d,a){var f=this,m,l=0,h,p,g,k,n,q=function(b,
c,d){++l;d.imageElement.setAttributeNS("http://www.w3.org/1999/xlink","href",b);l===m.length&&a(f.sanitizeSVG(h.innerHTML,p))};f.unbindGetSVG=D(f,"getSVG",function(a){p=a.chartCopy.options;h=a.chartCopy.container.cloneNode(!0)});f.getSVGForExport(b,e);m=h.getElementsByTagName("image");try{if(!m.length){a(f.sanitizeSVG(h.innerHTML,p));return}k=0;for(n=m.length;k<n;++k)g=m[k],c.imageToDataUrl(g.getAttributeNS("http://www.w3.org/1999/xlink","href"),"image/png",{imageElement:g},b.scale,q,d,d,d)}catch(v){d(v)}f.unbindGetSVG()};
c.Chart.prototype.exportChartLocal=function(b,e){var d=this,a=c.merge(d.options.exporting,b),f=function(b){!1===a.fallbackToExportServer?a.error?a.error(a,b):c.error(28,!0):d.exportChart(a)};B&&("application/pdf"===a.type||d.container.getElementsByTagName("image").length&&"image/svg+xml"!==a.type)||"application/pdf"===a.type&&d.container.getElementsByTagName("image").length?f("Image type not supported for this chart/browser."):d.getSVGForLocalExport(a,e,f,function(b){-1<b.indexOf("\x3cforeignObject")&&
"image/svg+xml"!==a.type?f("Image type not supported for charts with embedded HTML"):c.downloadSVGLocal(b,a,f)})};E(!0,c.getOptions().exporting,{libURL:"https://code.highcharts.com/6.2.0/lib/",menuItemDefinitions:{downloadPNG:{textKey:"downloadPNG",onclick:function(){this.exportChartLocal()}},downloadJPEG:{textKey:"downloadJPEG",onclick:function(){this.exportChartLocal({type:"image/jpeg"})}},downloadSVG:{textKey:"downloadSVG",onclick:function(){this.exportChartLocal({type:"image/svg+xml"})}},downloadPDF:{textKey:"downloadPDF",
onclick:function(){this.exportChartLocal({type:"application/pdf"})}}}})})(h)});
//# sourceMappingURL=offline-exporting.js.map

/*
 Highcharts JS v6.2.0 (2018-10-17)
 Pathfinder

 (c) 2016 ystein Moseng

 --- WORK IN PROGRESS ---

 License: www.highcharts.com/license
*/
(function(u){"object"===typeof module&&module.exports?module.exports=u:"function"===typeof define&&define.amd?define(function(){return u}):u(Highcharts)})(function(u){var I=function(f){function v(e,h,d){d=d||0;var f=e.length-1;h-=1e-7;for(var m,q;d<=f;)if(m=f+d>>1,q=h-e[m].xMin,0<q)d=m+1;else if(0>q)f=m-1;else return m;return 0<d?d-1:0}function m(e,h){for(var d=v(e,h.x+1)+1;d--;){var f;if(f=e[d].xMax>=h.x)f=e[d],f=h.x<=f.xMax&&h.x>=f.xMin&&h.y<=f.yMax&&h.y>=f.yMin;if(f)return d}return-1}function r(e){var h=
[];if(e.length){h.push("M",e[0].start.x,e[0].start.y);for(var d=0;d<e.length;++d)h.push("L",e[d].end.x,e[d].end.y)}return h}function n(e,h){e.yMin=A(e.yMin,h.yMin);e.yMax=t(e.yMax,h.yMax);e.xMin=A(e.xMin,h.xMin);e.xMax=t(e.xMax,h.xMax)}var t=Math.min,A=Math.max,w=Math.abs,u=f.pick;return{straight:function(e,h){return{path:["M",e.x,e.y,"L",h.x,h.y],obstacles:[{start:e,end:h}]}},simpleConnect:f.extend(function(e,h,d){function f(a,b,c,g,k){a={x:a.x,y:a.y};a[b]=c[g||b]+(k||0);return a}function v(a,b,
c){var g=w(b[c]-a[c+"Min"])>w(b[c]-a[c+"Max"]);return f(b,c,a,c+(g?"Max":"Min"),g?1:-1)}var q=[],b,a=u(d.startDirectionX,w(h.x-e.x)>w(h.y-e.y))?"x":"y",c=d.chartObstacles,k=m(c,e);d=m(c,h);var g;-1<d?(b=c[d],d=v(b,h,a),b={start:d,end:h},g=d):g=h;-1<k&&(c=c[k],d=v(c,e,a),q.push({start:e,end:d}),d[a]>e[a]===d[a]>g[a]&&(a="y"===a?"x":"y",h=e[a]<h[a],q.push({start:d,end:f(d,a,c,a+(h?"Max":"Min"),h?1:-1)}),a="y"===a?"x":"y"));e=q.length?q[q.length-1].end:e;d=f(e,a,g);q.push({start:e,end:d});a=f(d,"y"===
a?"x":"y",g);q.push({start:d,end:a});q.push(b);return{path:r(q),obstacles:q}},{requiresObstacles:!0}),fastAvoid:f.extend(function(e,h,d){function f(a,b,c){var g,k,e,h,f,d=a.x<b.x?1:-1;a.x<b.x?(g=a,k=b):(g=b,k=a);a.y<b.y?(h=a,e=b):(h=b,e=a);for(f=0>d?t(v(l,k.x),l.length-1):0;l[f]&&(0<d&&l[f].xMin<=k.x||0>d&&l[f].xMax>=g.x);){if(l[f].xMin<=k.x&&l[f].xMax>=g.x&&l[f].yMin<=e.y&&l[f].yMax>=h.y)return c?{y:a.y,x:a.x<b.x?l[f].xMin-1:l[f].xMax+1,obstacle:l[f]}:{x:a.x,y:a.y<b.y?l[f].yMin-1:l[f].yMax+1,obstacle:l[f]};
f+=d}return b}function z(a,b,c,g,k){var e=k.soft,h=k.hard,d=g?"x":"y",x={x:b.x,y:b.y},p={x:b.x,y:b.y};k=a[d+"Max"]>=e[d+"Max"];var e=a[d+"Min"]<=e[d+"Min"],F=a[d+"Max"]>=h[d+"Max"],h=a[d+"Min"]<=h[d+"Min"],l=w(a[d+"Min"]-b[d]),y=w(a[d+"Max"]-b[d]);c=10>w(l-y)?b[d]<c[d]:y<l;p[d]=a[d+"Min"];x[d]=a[d+"Max"];a=f(b,p,g)[d]!==p[d];b=f(b,x,g)[d]!==x[d];c=a?b?c:!0:b?!1:c;c=e?k?c:!0:k?!1:c;return h?F?c:!0:F?!1:c}function q(a,b,c){if(a.x===b.x&&a.y===b.y)return[];var g=c?"x":"y",k,e,h,x,p=d.obstacleOptions.margin;
k={soft:{xMin:D,xMax:E,yMin:G,yMax:H},hard:d.hardBounds};e=m(l,a);-1<e?(e=l[e],k=z(e,a,b,c,k),n(e,d.hardBounds),x=c?{y:a.y,x:e[k?"xMax":"xMin"]+(k?1:-1)}:{x:a.x,y:e[k?"yMax":"yMin"]+(k?1:-1)},h=m(l,x),-1<h&&(h=l[h],n(h,d.hardBounds),x[g]=k?A(e[g+"Max"]-p+1,(h[g+"Min"]+e[g+"Max"])/2):t(e[g+"Min"]+p-1,(h[g+"Max"]+e[g+"Min"])/2),a.x===x.x&&a.y===x.y?(y&&(x[g]=k?A(e[g+"Max"],h[g+"Max"])+1:t(e[g+"Min"],h[g+"Min"])-1),y=!y):y=!1),a=[{start:a,end:x}]):(g=f(a,{x:c?b.x:a.x,y:c?a.y:b.y},c),a=[{start:a,end:{x:g.x,
y:g.y}}],g[c?"x":"y"]!==b[c?"x":"y"]&&(k=z(g.obstacle,g,b,!c,k),n(g.obstacle,d.hardBounds),k={x:c?g.x:g.obstacle[k?"xMax":"xMin"]+(k?1:-1),y:c?g.obstacle[k?"yMax":"yMin"]+(k?1:-1):g.y},c=!c,a=a.concat(q({x:g.x,y:g.y},k,c))));return a=a.concat(q(a[a.length-1].end,b,!c))}function b(a,b,c){var g=t(a.xMax-b.x,b.x-a.xMin)<t(a.yMax-b.y,b.y-a.yMin);c=z(a,b,c,g,{soft:d.hardBounds,hard:d.hardBounds});return g?{y:b.y,x:a[c?"xMax":"xMin"]+(c?1:-1)}:{x:b.x,y:a[c?"yMax":"yMin"]+(c?1:-1)}}var a=u(d.startDirectionX,
w(h.x-e.x)>w(h.y-e.y)),c=a?"x":"y",k,g,x=[],y=!1,p=d.obstacleMetrics,D=t(e.x,h.x)-p.maxWidth-10,E=A(e.x,h.x)+p.maxWidth+10,G=t(e.y,h.y)-p.maxHeight-10,H=A(e.y,h.y)+p.maxHeight+10,l=d.chartObstacles;k=v(l,D);p=v(l,E);l=l.slice(k,p+1);-1<(p=m(l,h))&&(g=b(l[p],h,e),x.push({end:h,start:g}),h=g);for(;-1<(p=m(l,h));)k=0>h[c]-e[c],g={x:h.x,y:h.y},g[c]=l[p][k?c+"Max":c+"Min"]+(k?1:-1),x.push({end:h,start:g}),h=g;e=q(e,h,a);e=e.concat(x.reverse());return{path:r(e),obstacles:e}},{requiresObstacles:!0})}}(u);
(function(f){f.SVGRenderer.prototype.symbols.arrow=function(f,m,r,n){return["M",f,m+n/2,"L",f+r,m,"L",f,m+n/2,"L",f+r,m+n]};f.SVGRenderer.prototype.symbols["arrow-half"]=function(v,m,r,n){return f.SVGRenderer.prototype.symbols.arrow(v,m,r/2,n)};f.SVGRenderer.prototype.symbols["triangle-left"]=function(f,m,r,n){return["M",f+r,m,"L",f,m+n/2,"L",f+r,m+n,"Z"]};f.SVGRenderer.prototype.symbols["arrow-filled"]=f.SVGRenderer.prototype.symbols["triangle-left"];f.SVGRenderer.prototype.symbols["triangle-left-half"]=
function(v,m,r,n){return f.SVGRenderer.prototype.symbols["triangle-left"](v,m,r/2,n)};f.SVGRenderer.prototype.symbols["arrow-filled-half"]=f.SVGRenderer.prototype.symbols["triangle-left-half"]})(u);(function(f,v){function m(b){var a=b.shapeArgs;return a?{xMin:a.x,xMax:a.x+a.width,yMin:a.y,yMax:a.y+a.height}:(a=b.graphic&&b.graphic.getBBox())?{xMin:b.plotX-a.width/2,xMax:b.plotX+a.width/2,yMin:b.plotY-a.height/2,yMax:b.plotY+a.height/2}:null}function r(b){for(var a=b.length,c=0,k,g,e=[],d=function(a,
b,c){c=B(c,10);var g=a.yMax+c>b.yMin-c&&a.yMin-c<b.yMax+c,k=a.xMax+c>b.xMin-c&&a.xMin-c<b.xMax+c,e=g?a.xMin>b.xMax?a.xMin-b.xMax:b.xMin-a.xMax:Infinity,f=k?a.yMin>b.yMax?a.yMin-b.yMax:b.yMin-a.yMax:Infinity;return k&&g?c?d(a,b,Math.floor(c/2)):Infinity:q(e,f)};c<a;++c)for(k=c+1;k<a;++k)g=d(b[c],b[k]),80>g&&e.push(g);e.push(80);return z(Math.floor(e.sort(function(a,b){return a-b})[Math.floor(e.length/10)]/2-1),1)}function n(b,a,c){this.init(b,a,c)}function t(b){this.init(b)}var u=f.defined,w=f.deg2rad,
C=f.extend,e=f.each,h=f.addEvent,d=f.merge,B=f.pick,z=Math.max,q=Math.min;C(f.defaultOptions,{pathfinder:{type:"straight",lineWidth:1,marker:{enabled:!1,align:"center",verticalAlign:"middle",inside:!1,lineWidth:1},startMarker:{symbol:"diamond"},endMarker:{symbol:"arrow-filled"}}});n.prototype={init:function(b,a,c){this.fromPoint=b;this.toPoint=a;this.options=c;this.chart=b.series.chart;this.pathfinder=this.chart.pathfinder},renderPath:function(b,a,c){var k=this.chart,g=k.pathfinder,e=!k.options.chart.forExport&&
!1!==c,d=this.graphics&&this.graphics.path;g.group||(g.group=k.renderer.g().addClass("highcharts-pathfinder-group").attr({zIndex:-1}).add(k.seriesGroup));g.group.translate(k.plotLeft,k.plotTop);d&&d.renderer||(d=k.renderer.path().attr({opacity:0}).add(g.group));d.attr(a);d[e?"animate":"attr"]({opacity:1,d:b},c);this.graphics=this.graphics||{};this.graphics.path=d},addMarker:function(b,a,c){var k=this.fromPoint.series.chart,g=k.pathfinder,k=k.renderer,e="start"===b?this.fromPoint:this.toPoint,d=e.getPathfinderAnchorPoint(a),
f,h;a.enabled&&(c="start"===b?{x:c[4],y:c[5]}:{x:c[c.length-5],y:c[c.length-4]},c=e.getRadiansToVector(c,d),d=e.getMarkerVector(c,a.radius,d),c=-c/w,a.width&&a.height?(f=a.width,h=a.height):f=h=2*a.radius,this.graphics=this.graphics||{},d={x:d.x-f/2,y:d.y-h/2,width:f,height:h,rotation:c,rotationOriginX:d.x,rotationOriginY:d.y},this.graphics[b]?this.graphics[b].animate(d):this.graphics[b]=k.symbol(a.symbol).addClass("highcharts-point-connecting-path-"+b+"-marker").attr(d).attr({fill:a.color||this.fromPoint.color,
stroke:a.lineColor,"stroke-width":a.lineWidth,opacity:0}).animate({opacity:1},e.series.options.animation).add(g.group))},getPath:function(b){var a=this.pathfinder,c=this.chart,e=a.algorithms[b.type],g=a.chartObstacles;if("function"!==typeof e)f.error('"'+b.type+'" is not a Pathfinder algorithm.');else return e.requiresObstacles&&!g&&(g=a.chartObstacles=a.getChartObstacles(b),c.options.pathfinder.algorithmMargin=b.algorithmMargin,a.chartObstacleMetrics=a.getObstacleMetrics(g)),e(this.fromPoint.getPathfinderAnchorPoint(b.startMarker),
this.toPoint.getPathfinderAnchorPoint(b.endMarker),d({chartObstacles:g,lineObstacles:a.lineObstacles||[],obstacleMetrics:a.chartObstacleMetrics,hardBounds:{xMin:0,xMax:c.plotWidth,yMin:0,yMax:c.plotHeight},obstacleOptions:{margin:b.algorithmMargin},startDirectionX:a.getAlgorithmStartDirection(b.startMarker)},b))},render:function(){var b=this.fromPoint,a=b.series,c=a.chart,e=c.pathfinder,g,c=d(c.options.pathfinder,a.options.pathfinder,b.options.pathfinder,this.options),f={};f.stroke=c.lineColor||b.color;
f["stroke-width"]=c.lineWidth;c.dashStyle&&(f.dashstyle=c.dashStyle);f.class="highcharts-point-connecting-path highcharts-color-"+b.colorIndex;c=d(f,c);u(c.marker.radius)||(c.marker.radius=q(z(Math.ceil((c.algorithmMargin||8)/2)-1,1),5));b=this.getPath(c);g=b.path;b.obstacles&&(e.lineObstacles=e.lineObstacles||[],e.lineObstacles=e.lineObstacles.concat(b.obstacles));this.renderPath(g,f,a.options.animation);this.addMarker("start",d(c.marker,c.startMarker),g);this.addMarker("end",d(c.marker,c.endMarker),
g)},destroy:function(){this.graphics&&(f.objectEach(this.graphics,function(b){b.destroy()}),delete this.graphics)}};t.prototype={algorithms:v,init:function(b){this.chart=b;this.connections=[];h(b,"redraw",function(){this.pathfinder.update()})},update:function(b){var a=this.chart,c=this,d=c.connections;c.connections=[];e(a.series,function(b){b.visible&&e(b.points,function(b){var g,d=b.options&&b.options.connect&&f.splat(b.options.connect);b.visible&&!1!==b.isInside&&d&&e(d,function(d){g=a.get("string"===
typeof d?d:d.to);g instanceof f.Point&&g.series.visible&&g.visible&&!1!==g.isInside&&c.connections.push(new n(b,g,"string"===typeof d?{}:d))})})});for(var g=0,h,m,p=d.length,q=c.connections.length;g<p;++g){m=!1;for(h=0;h<q;++h)if(d[g].fromPoint===c.connections[h].fromPoint&&d[g].toPoint===c.connections[h].toPoint){c.connections[h].graphics=d[g].graphics;m=!0;break}m||d[g].destroy()}delete this.chartObstacles;delete this.lineObstacles;c.renderConnections(b)},renderConnections:function(b){b?e(this.chart.series,
function(a){var b=function(){var b=a.chart.pathfinder;e(b&&b.connections||[],function(b){b.fromPoint&&b.fromPoint.series===a&&b.render()});a.pathfinderRemoveRenderEvent&&(a.pathfinderRemoveRenderEvent(),delete a.pathfinderRemoveRenderEvent)};!1===a.options.animation?b():a.pathfinderRemoveRenderEvent=h(a,"afterAnimate",b)}):e(this.connections,function(a){a.render()})},getChartObstacles:function(b){for(var a=[],c=this.chart.series,d=B(b.algorithmMargin,0),g,f=0,h=c.length;f<h;++f)if(c[f].visible)for(var p=
0,q=c[f].points.length,n;p<q;++p)n=c[f].points[p],n.visible&&(n=m(n))&&a.push({xMin:n.xMin-d,xMax:n.xMax+d,yMin:n.yMin-d,yMax:n.yMax+d});a=a.sort(function(a,b){return a.xMin-b.xMin});u(b.algorithmMargin)||(g=b.algorithmMargin=r(a),e(a,function(a){a.xMin-=g;a.xMax+=g;a.yMin-=g;a.yMax+=g}));return a},getObstacleMetrics:function(b){for(var a=0,c=0,d,g,e=b.length;e--;)d=b[e].xMax-b[e].xMin,g=b[e].yMax-b[e].yMin,a<d&&(a=d),c<g&&(c=g);return{maxHeight:c,maxWidth:a}},getAlgorithmStartDirection:function(b){var a=
"top"!==b.verticalAlign&&"bottom"!==b.verticalAlign;return"left"!==b.align&&"right"!==b.align?a?void 0:!1:a?!0:void 0}};f.Connection=n;f.Pathfinder=t;C(f.Point.prototype,{getPathfinderAnchorPoint:function(b){var a=m(this),c,d;switch(b.align){case "right":c="xMax";break;case "left":c="xMin"}switch(b.verticalAlign){case "top":d="yMin";break;case "bottom":d="yMax"}return{x:c?a[c]:(a.xMin+a.xMax)/2,y:d?a[d]:(a.yMin+a.yMax)/2}},getRadiansToVector:function(b,a){u(a)||(a=m(this),a={x:(a.xMin+a.xMax)/2,y:(a.yMin+
a.yMax)/2});return Math.atan2(a.y-b.y,b.x-a.x)},getMarkerVector:function(b,a,c){for(var d=2*Math.PI,e=m(this),f=e.xMax-e.xMin,h=e.yMax-e.yMin,p=Math.atan2(h,f),n=!1,f=f/2,q=h/2,u=e.xMin+f,e=e.yMin+q,r=u,l=e,v={},t=1,w=1;b<-Math.PI;)b+=d;for(;b>Math.PI;)b-=d;d=Math.tan(b);b>-p&&b<=p?(w=-1,n=!0):b>p&&b<=Math.PI-p?w=-1:b>Math.PI-p||b<=-(Math.PI-p)?(t=-1,n=!0):t=-1;n?(r+=t*f,l+=w*f*d):(r+=h/(2*d)*t,l+=w*q);c.x!==u&&(r=c.x);c.y!==e&&(l=c.y);v.x=r+a*Math.cos(b);v.y=l-a*Math.sin(b);return v}});f.Chart.prototype.callbacks.push(function(b){!1!==
b.options.pathfinder.enabled&&(this.pathfinder=new t(this),this.pathfinder.update(!0))})})(u,I)});
//# sourceMappingURL=pathfinder.js.map

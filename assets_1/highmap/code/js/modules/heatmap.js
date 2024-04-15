/*
 Highcharts JS v6.2.0 (2018-10-17)

 (c) 2009-2018 Torstein Honsi

 License: www.highcharts.com/license
*/
(function(h){"object"===typeof module&&module.exports?module.exports=h:"function"===typeof define&&define.amd?define(function(){return h}):h(Highcharts)})(function(h){(function(b){var t=b.addEvent,l=b.Axis,h=b.Chart,d=b.color,m,k=b.each,r=b.extend,n=b.isNumber,f=b.Legend,p=b.LegendSymbolMixin,x=b.noop,w=b.merge,u=b.pick;b.ColorAxis||(m=b.ColorAxis=function(){this.init.apply(this,arguments)},r(m.prototype,l.prototype),r(m.prototype,{defaultColorAxisOptions:{lineWidth:0,minPadding:0,maxPadding:0,gridLineWidth:1,
tickPixelInterval:72,startOnTick:!0,endOnTick:!0,offset:0,marker:{animation:{duration:50},width:.01},labels:{overflow:"justify",rotation:0},minColor:"#e6ebf5",maxColor:"#003399",tickLength:5,showInLegend:!0},keepProps:["legendGroup","legendItemHeight","legendItemWidth","legendItem","legendSymbol"].concat(l.prototype.keepProps),init:function(a,c){var e="vertical"!==a.options.legend.layout,q;this.coll="colorAxis";q=w(this.defaultColorAxisOptions,{side:e?2:1,reversed:!e},c,{opposite:!e,showEmpty:!1,
title:null,visible:a.options.legend.enabled});l.prototype.init.call(this,a,q);c.dataClasses&&this.initDataClasses(c);this.initStops();this.horiz=e;this.zoomEnabled=!1;this.defaultLegendLength=200},initDataClasses:function(a){var c,e=0,q=this.chart.options.chart.colorCount,g=this.options,b=a.dataClasses.length;this.dataClasses=c=[];this.legendItems=[];k(a.dataClasses,function(a,f){a=w(a);c.push(a);"category"===g.dataClassColor?(a.colorIndex=e,e++,e===q&&(e=0)):a.color=d(g.minColor).tweenTo(d(g.maxColor),
2>b?.5:f/(b-1))})},setTickPositions:function(){if(!this.dataClasses)return l.prototype.setTickPositions.call(this)},initStops:function(){this.stops=this.options.stops||[[0,this.options.minColor],[1,this.options.maxColor]];k(this.stops,function(a){a.color=d(a[1])})},setOptions:function(a){l.prototype.setOptions.call(this,a);this.options.crosshair=this.options.marker},setAxisSize:function(){var a=this.legendSymbol,c=this.chart,e=c.options.legend||{},b,g;a?(this.left=e=a.attr("x"),this.top=b=a.attr("y"),
this.width=g=a.attr("width"),this.height=a=a.attr("height"),this.right=c.chartWidth-e-g,this.bottom=c.chartHeight-b-a,this.len=this.horiz?g:a,this.pos=this.horiz?e:b):this.len=(this.horiz?e.symbolWidth:e.symbolHeight)||this.defaultLegendLength},normalizedValue:function(a){this.isLog&&(a=this.val2lin(a));return 1-(this.max-a)/(this.max-this.min||1)},toColor:function(a,c){var e=this.stops,b,g,f=this.dataClasses,p,d;if(f)for(d=f.length;d--;){if(p=f[d],b=p.from,e=p.to,(void 0===b||a>=b)&&(void 0===e||
a<=e)){c&&(c.dataClass=d,c.colorIndex=p.colorIndex);break}}else{a=this.normalizedValue(a);for(d=e.length;d--&&!(a>e[d][0]););b=e[d]||e[d+1];e=e[d+1]||b;a=1-(e[0]-a)/(e[0]-b[0]||1);g=b.color.tweenTo(e.color,a)}return g},getOffset:function(){var a=this.legendGroup,c=this.chart.axisOffset[this.side];a&&(this.axisParent=a,l.prototype.getOffset.call(this),this.added||(this.added=!0,this.labelLeft=0,this.labelRight=this.width),this.chart.axisOffset[this.side]=c)},setLegendColor:function(){var a,c=this.reversed;
a=c?1:0;c=c?0:1;a=this.horiz?[a,0,c,0]:[0,c,0,a];this.legendColor={linearGradient:{x1:a[0],y1:a[1],x2:a[2],y2:a[3]},stops:this.stops}},drawLegendSymbol:function(a,c){var e=a.padding,b=a.options,g=this.horiz,f=u(b.symbolWidth,g?this.defaultLegendLength:12),d=u(b.symbolHeight,g?12:this.defaultLegendLength),p=u(b.labelPadding,g?16:30),b=u(b.itemDistance,10);this.setLegendColor();c.legendSymbol=this.chart.renderer.rect(0,a.baseline-11,f,d).attr({zIndex:1}).add(c.legendGroup);this.legendItemWidth=f+e+
(g?b:p);this.legendItemHeight=d+e+(g?p:0)},setState:function(a){k(this.series,function(c){c.setState(a)})},visible:!0,setVisible:x,getSeriesExtremes:function(){var a=this.series,c=a.length;this.dataMin=Infinity;for(this.dataMax=-Infinity;c--;)a[c].getExtremes(),void 0!==a[c].valueMin&&(this.dataMin=Math.min(this.dataMin,a[c].valueMin),this.dataMax=Math.max(this.dataMax,a[c].valueMax))},drawCrosshair:function(a,c){var e=c&&c.plotX,b=c&&c.plotY,g,f=this.pos,d=this.len;c&&(g=this.toPixels(c[c.series.colorKey]),
g<f?g=f-2:g>f+d&&(g=f+d+2),c.plotX=g,c.plotY=this.len-g,l.prototype.drawCrosshair.call(this,a,c),c.plotX=e,c.plotY=b,this.cross&&!this.cross.addedToColorAxis&&this.legendGroup&&(this.cross.addClass("highcharts-coloraxis-marker").add(this.legendGroup),this.cross.addedToColorAxis=!0))},getPlotLinePath:function(a,c,e,b,f){return n(f)?this.horiz?["M",f-4,this.top-6,"L",f+4,this.top-6,f,this.top,"Z"]:["M",this.left,f,"L",this.left-6,f+6,this.left-6,f-6,"Z"]:l.prototype.getPlotLinePath.call(this,a,c,e,
b)},update:function(a,c){var e=this.chart,b=e.legend;k(this.series,function(a){a.isDirtyData=!0});a.dataClasses&&b.allItems&&(k(b.allItems,function(a){a.isDataClass&&a.legendGroup&&a.legendGroup.destroy()}),e.isDirtyLegend=!0);e.options[this.coll]=w(this.userOptions,a);l.prototype.update.call(this,a,c);this.legendItem&&(this.setLegendColor(),b.colorizeItem(this,!0))},remove:function(){this.legendItem&&this.chart.legend.destroyItem(this);l.prototype.remove.call(this)},getDataClassLegendSymbols:function(){var a=
this,c=this.chart,e=this.legendItems,f=c.options.legend,d=f.valueDecimals,l=f.valueSuffix||"",m;e.length||k(this.dataClasses,function(f,g){var n=!0,q=f.from,h=f.to;m="";void 0===q?m="\x3c ":void 0===h&&(m="\x3e ");void 0!==q&&(m+=b.numberFormat(q,d)+l);void 0!==q&&void 0!==h&&(m+=" - ");void 0!==h&&(m+=b.numberFormat(h,d)+l);e.push(r({chart:c,name:m,options:{},drawLegendSymbol:p.drawRectangle,visible:!0,setState:x,isDataClass:!0,setVisible:function(){n=this.visible=!n;k(a.series,function(a){k(a.points,
function(a){a.dataClass===g&&a.setVisible(n)})});c.legend.colorizeItem(this,n)}},f))});return e},name:""}),k(["fill","stroke"],function(a){b.Fx.prototype[a+"Setter"]=function(){this.elem.attr(a,d(this.start).tweenTo(d(this.end),this.pos),null,!0)}}),t(h,"afterGetAxes",function(){var a=this.options.colorAxis;this.colorAxis=[];a&&new m(this,a)}),t(f,"afterGetAllItems",function(a){var c=[],e=this.chart.colorAxis[0];e&&e.options&&e.options.showInLegend&&(e.options.dataClasses?c=e.getDataClassLegendSymbols():
c.push(e),k(e.series,function(c){b.erase(a.allItems,c)}));for(e=c.length;e--;)a.allItems.unshift(c[e])}),t(f,"afterColorizeItem",function(a){a.visible&&a.item.legendColor&&a.item.legendSymbol.attr({fill:a.item.legendColor})}),t(f,"afterUpdate",function(a,c,b){this.chart.colorAxis[0]&&this.chart.colorAxis[0].update({},b)}))})(h);(function(b){var h=b.defined,l=b.each,v=b.noop;b.colorPointMixin={isValid:function(){return null!==this.value&&Infinity!==this.value&&-Infinity!==this.value},setVisible:function(b){var d=
this,k=b?"show":"hide";d.visible=!!b;l(["graphic","dataLabel"],function(b){if(d[b])d[b][k]()})},setState:function(d){b.Point.prototype.setState.call(this,d);this.graphic&&this.graphic.attr({zIndex:"hover"===d?1:0})}};b.colorSeriesMixin={pointArrayMap:["value"],axisTypes:["xAxis","yAxis","colorAxis"],optionalAxis:"colorAxis",trackerGroups:["group","markerGroup","dataLabelsGroup"],getSymbol:v,parallelArrays:["x","y","value"],colorKey:"value",translateColors:function(){var b=this,m=this.options.nullColor,
k=this.colorAxis,h=this.colorKey;l(this.data,function(d){var f=d[h];if(f=d.options.color||(d.isNull?m:k&&void 0!==f?k.toColor(f,d):d.color||b.color))d.color=f})},colorAttribs:function(b){var d={};h(b.color)&&(d[this.colorProp||"fill"]=b.color);return d}}})(h);(function(b){var h=b.colorPointMixin,l=b.each,v=b.merge,d=b.noop,m=b.pick,k=b.Series,r=b.seriesType,n=b.seriesTypes;r("heatmap","scatter",{animation:!1,borderWidth:0,dataLabels:{formatter:function(){return this.point.value},inside:!0,verticalAlign:"middle",
crop:!1,overflow:!1,padding:0},marker:null,pointRange:null,tooltip:{pointFormat:"{point.x}, {point.y}: {point.value}\x3cbr/\x3e"},states:{hover:{halo:!1,brightness:.2}}},v(b.colorSeriesMixin,{pointArrayMap:["y","value"],hasPointSpecificOptions:!0,getExtremesFromAll:!0,directTouch:!0,init:function(){var b;n.scatter.prototype.init.apply(this,arguments);b=this.options;b.pointRange=m(b.pointRange,b.colsize||1);this.yAxis.axisPointRange=b.rowsize||1},translate:function(){var b=this.options,d=this.xAxis,
h=this.yAxis,k=b.pointPadding||0,n=function(a,b,e){return Math.min(Math.max(b,a),e)};this.generatePoints();l(this.points,function(a){var c=(b.colsize||1)/2,e=(b.rowsize||1)/2,f=n(Math.round(d.len-d.translate(a.x-c,0,1,0,1)),-d.len,2*d.len),c=n(Math.round(d.len-d.translate(a.x+c,0,1,0,1)),-d.len,2*d.len),g=n(Math.round(h.translate(a.y-e,0,1,0,1)),-h.len,2*h.len),e=n(Math.round(h.translate(a.y+e,0,1,0,1)),-h.len,2*h.len),p=m(a.pointPadding,k);a.plotX=a.clientX=(f+c)/2;a.plotY=(g+e)/2;a.shapeType="rect";
a.shapeArgs={x:Math.min(f,c)+p,y:Math.min(g,e)+p,width:Math.abs(c-f)-2*p,height:Math.abs(e-g)-2*p}});this.translateColors()},drawPoints:function(){n.column.prototype.drawPoints.call(this);l(this.points,function(b){b.graphic.css(this.colorAttribs(b))},this)},animate:d,getBox:d,drawLegendSymbol:b.LegendSymbolMixin.drawRectangle,alignDataLabel:n.column.prototype.alignDataLabel,getExtremes:function(){k.prototype.getExtremes.call(this,this.valueData);this.valueMin=this.dataMin;this.valueMax=this.dataMax;
k.prototype.getExtremes.call(this)}}),b.extend({haloPath:function(b){if(!b)return[];var d=this.shapeArgs;return["M",d.x-b,d.y-b,"L",d.x-b,d.y+d.height+b,d.x+d.width+b,d.y+d.height+b,d.x+d.width+b,d.y-b,"Z"]}},h))})(h)});
//# sourceMappingURL=heatmap.js.map

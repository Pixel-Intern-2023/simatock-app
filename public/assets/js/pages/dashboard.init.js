var options2={chart:{type:"area",height:45,width:90,sparkline:{enabled:!0}},series:[{data:[25,66,41,85,63,25,44,12,36,9,54]}],stroke:{width:2,curve:"smooth"},markers:{size:0},colors:["#727cf5"],tooltip:{fixed:{enabled:!(window.Apex={chart:{parentHeightOffset:0,toolbar:{show:!1}},grid:{padding:{left:0,right:0}},colors:["#3e60d5","#47ad77","#fa5c7c","#ffbc00"]})},x:{show:!1},y:{title:{formatter:function(e){return""}}},marker:{show:!1}},fill:{type:"gradient",gradient:{type:"vertical",shadeIntensity:1,inverseColors:!1,opacityFrom:.45,opacityTo:.05,stops:[45,100]}}};function getDaysInMonth(e,t){for(var o=new Date(t,e,1),r=[],a=0;o.getMonth()===e&&a<15;){var n=new Date(o);r.push(n.getDate()+" "+n.toLocaleString("en-us",{month:"short"})),o.setDate(o.getDate()+1),a+=1}return r}new ApexCharts(document.querySelector("#today-revenue-chart"),options2).render(),new ApexCharts(document.querySelector("#today-product-sold-chart"),$.extend({},options2,{colors:["#f77e53"]})).render(),new ApexCharts(document.querySelector("#today-new-customer-chart"),$.extend({},options2,{colors:["#43d39e"]})).render(),new ApexCharts(document.querySelector("#today-new-visitors-chart"),$.extend({},options2,{colors:["#ffbe0b"]})).render();var now=new Date,labels=getDaysInMonth(now.getMonth(),now.getFullYear()),options={chart:{height:329,type:"area"},dataLabels:{enabled:!1},stroke:{curve:"smooth",width:4},series:[{name:"Revenue",data:[10,20,5,15,10,20,15,25,20,30,25,40,30,50,35]}],zoom:{enabled:!1},legend:{show:!1},colors:["#43d39e"],xaxis:{type:"string",categories:labels,tooltip:{enabled:!1},axisBorder:{show:!1},labels:{}},yaxis:{labels:{formatter:function(e){return e+"k"}}},fill:{type:"gradient",gradient:{type:"vertical",shadeIntensity:1,inverseColors:!1,opacityFrom:.45,opacityTo:.05,stops:[45,100]}}},chart=new ApexCharts(document.querySelector("#revenue-chart"),options),options=(chart.render(),{chart:{height:349,type:"bar",stacked:!0,toolbar:{show:!1}},plotOptions:{bar:{horizontal:!1,columnWidth:"45%"}},dataLabels:{enabled:!1},stroke:{show:!0,width:2,colors:["transparent"]},series:[{name:"Net Profit",data:[35,44,55,57,56,61]},{name:"Revenue",data:[52,76,85,101,98,87]}],xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun"],axisBorder:{show:!1}},legend:{show:!1},grid:{row:{colors:["transparent","transparent"],opacity:.2},borderColor:"#f3f4f7"},tooltip:{y:{formatter:function(e){return"$ "+e+" thousands"}}}}),options=((chart=new ApexCharts(document.querySelector("#targets-chart"),options)).render(),{plotOptions:{pie:{donut:{size:"70%"},expandOnClick:!1}},chart:{height:291,type:"donut"},legend:{show:!0,position:"right",horizontalAlign:"left",itemMargin:{horizontal:6,vertical:3}},series:[44,55,41,17],labels:["Clothes 44k","Smartphons 55k","Electronics 41k","Other 17k"],responsive:[{breakpoint:480,options:{legend:{position:"bottom"}}}],tooltip:{y:{formatter:function(e){return e+"k"}}}});(chart=new ApexCharts(document.querySelector("#sales-by-category-chart"),options)).render();
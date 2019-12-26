var bannerChart = Highcharts.chart('heroChart', {
	chart: {
	  plotBackgroundColor: null,
	  plotBorderWidth: 0,
	  backgroundColor: null,
	  className: "hero__chart-inner",
	  plotShadow: false,
	  type: 'pie',
	},
	title: {
	  text: '<div class="hero__chart-description">Current Score</div>'+
				'<div class="hero__chart-description-score">855</div>'+
				'<div class="hero__chart-description-total">out of 1000</div>'+
				'<div class="hero__chart-description-result">' + 
					'FAIR' + 
					'<i class="fa fa-question-circle" data-container=".hero__chart" data-toggle="kt-popover" data-html="true" data-content="<p class=\'bold font-white mb-2\'>FAIR</p> <p class=\'font-white\'><span class=\'font-light-purple\'>You might get through inspection/audits, </span>but run the risk of higher penalties and fines in the event of an incident</p>"></i>' + 
				'</div>'+
			'</div>',
  
	  align: 'center',
	  verticalAlign: 'middle',
	  useHTML: true,
	  y: 68,
	  x: 16
	},
	
	navigation: {
	  buttonOptions: 
	  {
		enabled: false
	  }
	},
	credits: {
		enabled: false
	},
	tooltip: {
	  enabled: false,
	  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	},
	plotOptions: {
	  pie: {
		dataLabels: {
		  enabled: false,
		  distance: -0.5,
		  alignTo: 'toPlotEdges',
		  style: {
			fontWeight: 'bold',
			color: 'white'
		  }
		},
		startAngle: -120,
		endAngle: 120,
		center: ['52.7%', '64%'],
		size: '100%'
	  }
	},
	series: [{
	  type: 'pie',
	  name: 'Current Score',
	  innerSize: '75%',
	  colors: ['#e05653', '#eaad69', '#fae054', '#bed5e5', '#bed5e5'],
	  
	  /*data: [
		['Very Poor', 20],
		['Poor', 20],
		['Fair', 20],
		['Good', 20],
		['Excellent', 20]
	  ],*/
  
	  data: [{
		name: "VERY POOR",
		y: 1.5
	  }, {
		name: "POOR",
		y: 1.5
	  }, 
	  {
		name: "FAIR",
		y: 1.5 
	  }, {
		name: "GOOD",
		y: 1.5
	  },{
		name: "EXCELLENT",
		y: 1.6
	  }]
	}],
  },
  function(chart) {
	var ren = chart.renderer,
	  shapeArgs = chart.series[0].points[0].shapeArgs,
	  cx = chart.plotLeft + chart.plotWidth / 1.9,
	  cy = chart.plotTop + chart.plotHeight / 1.6,
	  r = (shapeArgs.r + shapeArgs.innerR) / 1.7; // center text in a slice (distance from center)
  
	// add a path for a text
	ren.path()
	  .attr({
		id: "MyPath",
		d: "M " + cx + " " + cy + //center
		  " m 0 " + (-r) + //start at top
		  " a " + r + " " + r + " 0 1 1 0 " + (r * 2) + //1st half
		  " a " + r + " " + r + " 0 1 1 0 " + (-(r * 2)) //2nd half
	  }).add(ren.defs);
  
  
	Highcharts.each(chart.series[0].points, function(point, i) {
	  var dataLabelText = point.name,
		label = ren.text(dataLabelText).attr({
		  zIndex: 3, // place on top of a pie
		  'text-anchor': 'middle', // center text in a slice (middle angle)
		}).add(),
		offset = parseInt(100 * (point.angle + Math.PI / 2) / (Math.PI * 2)) + '%', // at what percent of circle path start
		textPath = document.createElementNS('http://www.w3.org/2000/svg', 'textPath'),
		tspan = document.createElementNS('http://www.w3.org/2000/svg', 'tspan'),
		text = document.createTextNode(label.textStr);
  
	  textPath.setAttributeNS('http://www.w3.org/1999/xlink', 'href', '#MyPath');
	  textPath.setAttribute('startOffset', offset);
	  tspan.appendChild(text);
	  textPath.appendChild(tspan);
	  $(label.element).html(textPath);
	});
  });

  var rawData = 94,
  data = getData(rawData);

function getData(rawData) {
  var data = [],
	start = Math.round(Math.floor(rawData / 10) * 10);
  data.push(rawData);
  for (i = start; i > 0; i -= 10) {
	data.push({
	  y: i
	});
  }
  return data;
}

Highcharts.chart('heroChart', {
  chart: {
	type: 'solidgauge',
	marginTop: 10
  },
  
  title: {
	text: ''
  },
  
  subtitle: {
	text: rawData,
	style: {
	  'font-size': '60px'
	},
	y: 200,
	zIndex: 7
  },

  tooltip: {
	enabled: false
  },

  pane: [{
	startAngle: -120,
	endAngle: 120,
	background: [{ // Track for Move
	  outerRadius: '100%',
	  innerRadius: '80%',
	  backgroundColor: Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0.3).get(),
	  borderWidth: 0,
	  shape: 'arc'
	}],
	size: '120%',
	center: ['50%', '65%']
  }, {
	startAngle: -120,
	endAngle: 120,
	size: '95%',
	center: ['50%', '65%'],
	background: []
  }],

  yAxis: [{
	min: 0,
	max: 100,
	lineWidth: 2,
	lineColor: 'white',
	tickInterval: 10,
	labels: {
	  enabled: false
	},
	minorTickWidth: 0,
	tickLength: 50,
	tickWidth: 5,
	tickColor: 'white',
	zIndex: 6,
	stops: [
	  [0, '#fff'],
	  [0.101, '#0f0'],
	  [0.201, '#2d0'],
	  [0.301, '#4b0'],
	  [0.401, '#690'],
	  [0.501, '#870'],
	  [0.601, '#a50'],
	  [0.701, '#c30'],
	  [0.801, '#e10'],
	  [0.901, '#f03'],
	  [1, '#f06']
	]
  }, {
	linkedTo: 0,
	pane: 1,
	lineWidth: 5,
	lineColor: 'white',
	tickPositions: [],
	zIndex: 6
  }],
  
  series: [{
	animation: false,
	dataLabels: {
	  enabled: false
	},
	borderWidth: 0,
	color: Highcharts.getOptions().colors[0],
	radius: '100%',
	innerRadius: '80%',
	data: data
  }]
});

var INCIDENT_SUMMARY = {
	init: function () {
		new CanvasJS.Chart("pyramid-container-2", {
			animationEnabled: true,
			theme: "light1",
			data: [{
				type: "pyramid",
				yValueFormatString: "#\"%\"",
				indexLabelFontColor: "black",
				indexLabelFontSize: 12,
				indexLabel: "{label}",
				lineColor:"black",
				dataPoints: INCIDENT_SUMMARY.dataPoints
				
			}]
		}).render();
	},

	dataPoints: [
		{ y: 16, label: "Fatalities", color: '#30a4f0', lineColor: '#FFFFF' },
		{ y: 16, label: "RIDDOR", color: '#30a4f0' },
		{ y: 16, label: "Lost Time", color: '#30a4f0' },
		{ y: 16, label: "Other Accidents", color: '#30a4f0' },
		{ y: 16, label: "PI", color: '#30a4f0' },
		{ y: 15, label: "Corrective Actions", color: '#30a4f0' }
	] 
}

var ACCIDENT_TYPES = {
	node: document.getElementById("accident-rate-container-2").getContext('2d'),
	init: function () {
		new Chart( ACCIDENT_TYPES.node, {
			type: 'horizontalBar',
			options: ACCIDENT_TYPES.options,
			data: ACCIDENT_TYPES.data
		});
	},

	data:  {
		labels: [
			"Trapped by collapse",
			"Struck by object",
			"Burnt by chemical",
			"Accidental fall",
			"Burnt By Fire"
		],
		datasets: [{
			data: [4, 2.5, 1.5, 7, 0],
			backgroundColor: ["#30a4f0", "#30a4f0", "#30a4f0", "#30a4f0", "#30a4f0"]
		}]
	},

	options: {
		legend: {
			display: false
		},
		maintainAspectRatio: false,
		scales: {
			xAxes: [{
				barPercentage: 0.1,
				categoryPercentage: 0.1
			}],
			yAxes: [{
				gridLines: {
				color: "rgba(0, 0, 0, 0)",
				},
			}]
		},
	}, 

	build: function () {
		ACCIDENT_TYPES.init();
	}
}

var MONTHLY_RATES = {
	init: function () {
		FusionCharts.ready(function() {
			var salesChart = new FusionCharts({
				type: 'msline',
				renderAt: 'rlc-container',
				width: "100%",
				height: "350",
				dataFormat: "json",      
				dataSource: { 
					chart: MONTHLY_RATES.chart(),
				  	categories: MONTHLY_RATES.categories(),
					dataset: MONTHLY_RATES.dataset()
				}
			  })
			  .render();
		});
	},

	dataset: function () {
		return [
			{
				seriesname: "Target",
				"initiallyHidden": "1",
				data: [
					{
					value: "0"
					},
					{
					value: "800000"
					},
					{
					value: "320000"
					},
					{
					value: "240000"
					},
					{
					value: "160000"
					},
					{
					value: "80000"
					},
					{
					value: "0"
					}
				]
			},
			{
				seriesname: "2018",
				"initiallyHidden": "1",
				data: [
					{
					value: "5505"
					},
					{
					value: "4500"
					},
					{
					value: "520"
					},
					{
					value: "29000"
					},
					{
					value: "4853"
					},
					{
					value: "28232"
					},
					{
					value: "3222"
					}
				]
			},
			{
				seriesname: "2019",
				"initiallyHidden": "1",
				data: [
					{
					value: "400002"
					},
					{
					value: "323600"
					},
					{
					value: "42562"
					},
					{
					value: "22232"
					},
					{
					value: "430000"
					},
					{
					value: "143333"
					},
					{
					value: "310000"
					}
				]
			}
		]
	},

	categories: function () {
		return [
			{
			  category: [
				{
				  label: "Jan"
				},
				{
				  label: "Feb"
				},
				{
				  label: "mar"
				},
				{
				  label: "Apr"
				},
				{
				  label: "May"
				},
				{
				  label: "Jun"
				},
				{
				  label: "Jul"
				},
				
				{
				  label: "Aug"
				},
				
				{
				  label: "Sep"
				},
				
				{
				  label: "Oct"
				},
				
				{
				  label: "Nov"
				},
				
				{
				  label: "Dec"
				}
			  ]
			}
		  ]
	},

	chart: function () {
		return {
			showLegend: "1",
			bgColor: "transparent",
			showBorder: "0", 
			canvasBorderThickness: "0",
			divLineColor: "#c9c9c9",
			baseFontColor: "#c9c9c9",
			showPlotBorder: "1",      
			numdivlines: "6",
			drawcrossline: "1",
			showvalues: "0",
			legendBorderColor : "transparent",
			alternateHGridColor: "transparent",
			legenditemfontsize: "14",
			legenditemfontbold: "0",
			legendShadow: "0",     
			labelDisplay: "rotate",
			plottooltext: "<b>$dataValue</b> Tickets $seriesName on $label",
			theme: "fusion"
		}
	},

	build: function () {
		MONTHLY_RATES.init();
	}
}

var PERFORMANCE_SUMMARY = {
	init: function () {
		Highcharts.chart('hdc-container', {
			chart: PERFORMANCE_SUMMARY.chart(),
			title: PERFORMANCE_SUMMARY.title(),
			tooltip: {
				pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			},
			navigation: {
				buttonOptions: { enabled: false }
			},
			credits: { enabled: false },
			plotOptions: PERFORMANCE_SUMMARY.plotOptions(),
			series: PERFORMANCE_SUMMARY.series()
		})
	},

	build: function () {
		PERFORMANCE_SUMMARY.init();
	},

	chart: function () {
		return {
			plotBackgroundColor: null,
			plotBorderWidth: 0,
			plotShadow: false,
			height: 300
		}
	},

	title: function () {
		return {
			text: '',
			align: 'left',
			verticalAlign: 'top',
			y: 60
		}
	},

	plotOptions: function () {
		return {
			pie: {
				dataLabels: {
					enabled: false,
					distance: -50,
					style: {
				  		fontWeight: '600',
				 		color: 'white'
					}
			  },
			  startAngle: -90,
			  endAngle: 90,
			  center: ['50%', '75%'],
			  size: '110%'
			}
		}
	},

	series: function () {
		return [{
			type: 'pie',
			height: '100px',
			name: 'Performance Summary',
			innerSize: '50%',
			colors: ['#86d173', '#f9e053', '#e05555'],
			data: [
				['Advisory', 13.29],
				['Required', 58.9],
				['Target', 13],
			]
		}]
	}
}

var CALENDAR = {
	calendarNode: document.getElementById('new_cald'),
	init: function () {
		document.addEventListener('DOMContentLoaded', function() {
			var instance = CALENDAR.instance();
			instance.render();
			
		});
	},

	instance: function () {
		return new FullCalendar.Calendar(CALENDAR.calendarNode, {
			plugins: [ 'dayGrid' ],
			themeSystem: 'bootstrap',
			defaultView: 'dayGridMonth',
			height: 400,
			editable: true,
			startEditable: true,
			header:  {
				left:   'prev',
				center: 'title',
				right:  'next ',
			  
			},
			events: CALENDAR.eventsList(),
			eventClick: function (info) {
				CALENDAR.onClick(info);
			}
		  });
	},

	onClick: function (info) {
		alert('Task: ' + info.event.title);
	},

	eventsList: function () {
		return [
			{
				title: "Inner pages Design",
				start: '2019-11-04',
				description: 'This is a cool event',
				borderColor: "transparent",
				backgroundColor: "transparent"       
			},
			{
				title: "Inner pages Design",
				start: '2019-11-10',
				description: 'This is a cool event',
				borderColor: "transparent",
				backgroundColor: "transparent"       
			},
			{
				title: "Inner pages Design",
				start: '2019-11-05',
				description: 'This is a cool event',
				borderColor: "transparent",
				backgroundColor: "transparent"       
			}
		]
	},

	build: function () {
		this.init();
	}
}

var JSTREE = {
	node: $('#stree'),
	init: function () {
		JSTREE.node.jstree( {
			core: {
				themes: {
					icons: true
				}
			}
		})
	},

	build: function () {
		JSTREE.init();
	}
}

$(document).ready (function () {
	MONTHLY_RATES.build();
	PERFORMANCE_SUMMARY.build();
	JSTREE.build();
	// BANNER_CHART.build();
});

CALENDAR.build();

window.onload = function () {
	ACCIDENT_TYPES.build();
	INCIDENT_SUMMARY.init();
}

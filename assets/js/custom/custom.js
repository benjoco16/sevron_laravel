//Banner Chart
Highcharts.chart('banner-chart-container', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: 0,
    backgroundColor: null,
    className: "main_gauge",
    plotShadow: false,
    type: 'pie',
  },
  title: {
    text: '<div class="cs_class">Current Score</div><div class="total_score">855</div><div class="ofone">out of 1000</div> <div class="result_f">FAIR' + 
    '<i class="fa fa-question-circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Sevron Information Here"></i></div>',
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

  // uncomment to see the circle path
 /*
  ren.path()
    .attr({
      stroke: 'red',
      'stroke-width': 2,
      zIndex: 3,
      d: "M " + cx + " " + cy + //center
        " m 0 " + (-r) + //start at top
        " a " + r + " " + r + " 0 1 1 0 " + (r * 2) + //1st half
        " a " + r + " " + r + " 1 1 1 0 " + (-(r * 2)) //2nd half
    }).add();
  */

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

//Monthly Rolling Rates
FusionCharts.ready(function() {
  var salesChart = new FusionCharts({
      type: 'msline',
      renderAt: 'rlc-container',
      width: "100%",
      height: "350",
      dataFormat: "json",      
      dataSource: { 
        chart: {
          //caption: "Support Tickets : Received vs Resolved",
          //yaxisname: "# of Tickets",
          //subcaption: "Last week",
          "showLegend": "1",
          bgColor: "transparent",
          showBorder: "0", 
          "canvasBorderThickness": "0",
          "divLineColor": "#c9c9c9",
          "baseFontColor": "#c9c9c9",
          showPlotBorder: "1",      
          numdivlines: "6",
          drawcrossline: "1",
          showvalues: "0",
          legendBorderColor : "transparent",
          "alternateHGridColor": "transparent",
          legenditemfontsize: "14",
          legenditemfontbold: "0",
          legendShadow: "0",     
          "labelDisplay": "rotate",
          plottooltext: "<b>$dataValue</b> Tickets $seriesName on $label",
          theme: "fusion"
        },
        categories: [
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
        ],
        dataset: [
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
      }
    })
    .render();
});

//Pyramid fourth section
FusionCharts.ready(function() {
    var wenk = new FusionCharts({
    type: 'pyramid',
    renderAt: 'pyramid-container',
    id: 'wealth-pyramid-chart-7',
    width: '100%',
    dataFormat: 'json',
    dataSource: {
        "chart": {
          "theme": "fusion",
          //"caption": "The Global Wealth Pyramid",
          "captionOnTop": "0",
          "captionPadding": "0",
          "alignCaptionWithCanvas": "1",
         // "subcaption": "Credit Suisse 2013",
          "subCaptionFontSize": "12",
          //"borderAlpha": "20",
          "is2D": "1",
          "bgColor": "#ffffff",
          "showValues": "1",
          "showBorder": "0",
          "showPlotBorder": "0",
          "showLabelsAtCenter": "0",
          "plotTooltext": "$label of world population is worth USD $value tn ",
          "showPercentValues": "0",
          "usePlotGradientColor": "0",  
          "palettecolors":"ffffff",
          "chartLeftMargin": "40"
        },
        "data": [{
            "label": "Fatalities (0%)",
            "value": "98.7",
            "color": "#30a4f0" 
        }, {
            "label": "RIDDOR (7.7%)",
            "value": "50.8",
            "color": "#30a4f0"
        }, {
            "label": "Next 1.1 bn (22.9%)",
            "value": "33",
            "color": "#30a4f0"
        }, {
            "label": "Last 3.2 bn (68.7%)",
            "value": "7.3",
            "color": "#30a4f0"
        }]
    }
}
);
    wenk.render();
});

//Accident Rates Chart
const dataSource = {
    chart: {
     // caption: "Lead sources by industry",
      //yaxisname: "Number of Leads",
      aligncaptionwithcanvas: "0",
      "showBorder": "0",
      "bgColor": "transparent",
      "palettecolors":"30a4f0",
      "canvasBorderThickness": "0",
      "showCanvasBorder": "0",
      "usePlotGradientColor":"0",
      "showPlotBorder": "0",
      "BarHeight": "50",
      "placeValuesInside": "1",
      "valueFontColor": "#fff",
      //plottooltext: "<b>$dataValue</b> leads received",
      theme: "fusion"
    },
    data: [
      {
        label: "Trapped by Collapse",
        value: "4"
      },
      {
        label: "Struck by object",
        value: "2.5"
      },
      {
        label: "Burnt by chemical",
        value: "9"
      },
      {
        label: "Accidental fall",
        value: "2"
      },
      {
        label: "Accidental fall",
        value: "1"
      },
      {
        label: "More Data 1",
        value: "6"
      }
      ,
      {
        label: "More Data 2",
        value: "10"
      }
    ]
};
FusionCharts.ready(function() {
  var myChart = new FusionCharts({
    type: "bar2d",
    renderAt: "accident-rate-container",
    width: '100%',
    height: '320',
    dataFormat: "json",    
    dataSource
  }).render();
});
  

// Semi Circle Donut Chart
Highcharts.chart('hdc-container', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: 0,
    plotShadow: false,
    height: 300
  },
  title: {
    text: '',
    align: 'left',
    verticalAlign: 'top',
    y: 60
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
  plotOptions: {
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
  },
  series: [{
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
});

//Calendar
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('new_cald');
  var calendar = new FullCalendar.Calendar(calendarEl, {
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
    events: [
      {
        title: "Homepage Web Development",
        start: '2019-09-30',
        description: 'This is a cool event',
        borderColor: "transparent",
        backgroundColor: "transparent"
      },      
      {
        title: "Inner pages Design",
        start: '2019-09-10',
        description: 'This is a cool event',
        borderColor: "transparent",
        backgroundColor: "transparent"       
      },
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
    ],

    eventClick: function(info) {
      alert('Task: ' + info.event.title);
      
    }
  });

  calendar.render();
});

//JSTREE
$('#stree').jstree({
  "core": {
      "themes":{
          "icons":true
      }
  }
});


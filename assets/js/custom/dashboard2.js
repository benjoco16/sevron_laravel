Highcharts.chart('banner-chart-container-2', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: 0,
      backgroundColor: null,
      className: "sub-gauge",
      plotShadow: false,
      type: 'pie',
    },
    title: {
      text: '<div class="sub-chart-caption">'+
              '<h3 class="bold">527</h3>' +
              '<p>POOR</p>' +
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
        name: "",
        y: 1.5
      }, {
        name: "",
        y: 1.5
      }, 
      {
        name: "",
        y: 1.5 
      }, {
        name: "",
        y: 1.5
      },{
        name: "",
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
  
  Highcharts.chart('banner-chart-container-3', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: 0,
      backgroundColor: null,
      className: "sub-gauge",
      plotShadow: false,
      type: 'pie',
    },
    title: {
      text: '<div class="sub-chart-caption">'+
              '<h3 class="bold">855</h3>' +
              '<p>GOOD</p>' +
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
        name: "",
        y: 1.5
      }, {
        name: "",
        y: 1.5
      }, 
      {
        name: "",
        y: 1.5 
      }, {
        name: "",
        y: 1.5
      },{
        name: "",
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
  
  Highcharts.chart('banner-chart-container-4', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: 0,
      backgroundColor: null,
      className: "sub-gauge",
      plotShadow: false,
      type: 'pie',
    },
    title: {
      text: '<div class="sub-chart-caption">'+
              '<h3 class="bold">994</h3>' +
              '<p>EXCELLENT</p>' +
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
        name: "",
        y: 1.5
      }, {
        name: "",
        y: 1.5
      }, 
      {
        name: "",
        y: 1.5 
      }, {
        name: "",
        y: 1.5
      },{
        name: "",
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
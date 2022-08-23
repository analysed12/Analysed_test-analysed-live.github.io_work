var options = {
    chart: {
      type: 'bar',
      height: '400px',
    },
    states: {
        normal: {
            filter: {
                type: 'lighten',
                value: 0.15,
            }
        },
        hover: {
            filter: {
                type: 'lighten',
                value: 0,
            }
        },
    },
    series: [{
      name: 'Views',
      data: [10,20,15,30,10,6,8,31,20,12,8,17]
    }],
    xaxis: {
      categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
    }
  }
  
  var chart = new ApexCharts(document.querySelector("#chart"), options);
  
  chart.render();
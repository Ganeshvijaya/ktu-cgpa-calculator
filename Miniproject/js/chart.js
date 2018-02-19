$(function() {
    /* ChartJS
     * -------
     * Data and config for chartjs
     */
     
     
    
    var doughnutData ={
      datasets: [{
        data: [30, 40, 30],
        backgroundColor: ['#d9534f','#36a2eb','#5cb85c']
      }],

      // These labels appear in the legend and in the tooltips when hovering different arcs
      labels: [
          'Fail',
          'Pass',
          'Cleared supplimentary'
      ]
    };
    var doughnutOptions = {
      responsive: true,
      animation: {
          animateScale: true,
          animateRotate: true
      }
    };

    

    
    // Get context with jQuery - using jQuery's .get() method.
    if($("#barChart").length) {
      var barChartCanvas = $("#barChart").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: data,
        options: options
      });
    }

    if($("#lineChart").length) {
      var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
      var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: {
        labels: ["5", "6", "7", "8", "9", "4"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 20],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                 'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
        options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
      });
    }

    if($("#doughnutChart").length) {
      var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
      var doughnutChart = new Chart(doughnutChartCanvas, {
        type: 'doughnut',
        data: {
      datasets: [{
        data: [30, 40, 30],
        backgroundColor: ['#d9534f','#36a2eb','#5cb85c']
      }],

      // These labels appear in the legend and in the tooltips when hovering different arcs
      labels: [
          'Red',
          'Blue',
          'Green'
      ]
    },
        options: {
      responsive: true,
      animation: {
          animateScale: true,
          animateRotate: true
      }
    }
      });
    }

    if($("#areaChart").length) {
      var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
      var areaChart = new Chart(areaChartCanvas, {
        type:'line',
        data: areaData,
        options: {
      responsive: true,
      animation: {
          animateScale: true,
          animateRotate: true
      }
    }
      });
    }

  });

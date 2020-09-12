$(function(e){
  'use strict'
	
	/*--- order-summary chart ---*/
	var myCanvas = document.getElementById("order-summary");
    var myChart = new Chart( myCanvas, {
		type: 'line',
		data: {
            labels: ["Jan", "Feb", "March", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
            type: 'line',
            datasets: [ {
				label: 'Sales',
				data: [2,7,3,5,4,5,2,8,4,6,5,2,8,4,7,2,4,6,4,8,4],
				backgroundColor: 'rgba(255, 89, 100, 0.5)',
				borderColor: '#ff5964',
				pointBackgroundColor:'#fff',
				pointHoverBackgroundColor:'rgba(255, 89, 100, 0.8)',
				pointBorderColor :'#ff5964',
				pointHoverBorderColor :'rgba(255, 89, 100, 0.8)',
				pointBorderWidth :2,
				pointRadius :0,
				pointHoverRadius :0,
				lineTension: 0.2,
				borderWidth: 3,
            }, {
				label: 'Profits',
				data: [5,9,5,9,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2,7,10],
				backgroundColor: 'rgba(89, 100, 255, 0.5)',
				borderColor: '#5964ff',
				pointBackgroundColor:'#fff',
				pointHoverBackgroundColor:'rgba(89, 100, 255, 0.8)',
				pointBorderColor :'#5964ff',
				pointHoverBorderColor :'rgba(89, 100, 255, 0.8)',
				pointBorderWidth :2,
				pointRadius :0,
				pointHoverRadius :0,
				lineTension: 0.2,
				borderWidth: 3,
            }, ]
        },
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: true,
				labels: {
					usePointStyle: false,
				},
			},
			scales: {
				xAxes: [{
					
					display: true,
					gridLines: {
						display: false,
						drawBorder: false
					},
					ticks: {
                            fontColor: '#b0bac9',
                            autoSkip: true,
                            maxTicksLimit: 9,
                            maxRotation: 0,
                            labelOffset: 10
                        },
					scaleLabel: {
						display: false,
						labelString: 'Month',
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#b0bac9",
					 },
					display: true,
					gridLines: {
						display: false,
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'sales',
						fontColor: 'transparent'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/*--- End order-summary chart ---*/
	
	/*--- Categroies ---*/
	new Morris.Donut({
	  element: 'categroies',
	  data: [
		{value: 35, label: 'Mens'},
		{value: 25, label: 'Womens'},
		{value: 15, label: 'Electronics'},
		{value: 15, label: 'Baby&Kids'},
		{value: 10, label: 'Home&Furniture'},
	  ],
	  backgroundColor: 'rgba(119, 119, 142, 0.2)',
	  labelColor: '#000',
	  colors: [
		'#5964ff', '#ff5964', '#17d092', '#fda008', '#3ec7e8'

	  ],
	  formatter: function (x) { return x + "%"}
	});
	/*--- End Categroies ---*/
});


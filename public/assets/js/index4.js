$(function(e){
  'use strict'

   /*-- Budget Chart --*/
	var myCanvas = document.getElementById("budget");
    var myChart = new Chart( myCanvas, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
				label: 'Total Budget',
				data: [15, 18, 12, 14, 10, 15, 7, 14, 14, 10, 15, 7, 14],
				backgroundColor: '#ff5964',
				hoverBackgroundColor: '#ff5964',
				hoverBorderWidth: 2,
				hoverBorderColor: '#ff5964'
			}, {

			    label: 'Remaining',
				data: [10, 14, 10, 15, 9, 14, 15, 19, 11, 13, 15, 10, 14],
				backgroundColor: '#17d092',
				hoverBackgroundColor: '#17d092',
				hoverBorderWidth: 2,
				hoverBorderColor: '#17d092'
			}
		  ]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: 'rgba(255, 255, 255, 0.5)',
				bodyFontColor: 'rgba(255, 255, 255, 0.5)',
				backgroundColor: 'rgba(0, 0, 0, 0.8)',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					barPercentage: 0.5,
					ticks: {
						fontColor: "#bbc1ca",
					},
					display: true,
					gridLines: {
						color: 'rgba(0,0,0,0.03)',
						display: false,
					},
					scaleLabel: {
						display: false,
						labelString: '',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#bbc1ca",
					},
					display: true,
					gridLines: {
						display: false,
						drawBorder: false
					},
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/*-- End Budget Chart -- */
	
});


$(function(e){
  'use strict'
	
	/* week-session */
    var ctx = $('#delivery-status');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"],
			type: 'line',
			datasets: [{
				label: "Within Time Limit   ",
				data: [53, 56, 95, 44, 51, 58, 64, 45, 56, 50, 53, 78],
				backgroundColor: 'rgba(89, 100, 255,0.4)',
				borderColor: 'rgba(89, 100, 255,0.9)',
				borderWidth: 0,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgba(89, 100, 255,0.8)',
			}, {
				label: "Outof Time Limit",
				data: [73, 16, 55, 74, 31, 85, 46, 50, 65, 70, 35, 87],
				backgroundColor: 'rgba(255, 89, 100,0.4)',
				borderColor: 'rgba(255, 89, 100,0.9)',
				borderWidth: 0,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgba(255, 89, 100,0.8)',
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: 'rgba(0,0,0,0.9)',
				bodyFontColor: 'rgba(0,0,0,0.9)',
				backgroundColor: '#fff',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 0,
				intersect: false,
			},
			legend: {
				display: true,
				position: 'bottom',
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#bbc1ca",
					},
					display: true,
					gridLines: {
						color: 'rgba(0,0,0,0.03)'
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
						drawBorder: true
					},
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	
});











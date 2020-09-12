$(function(e){
  'use strict'

   /*-- Sales Chart --*/
	var myCanvas = document.getElementById("sales");
    var myChart = new Chart( myCanvas, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
				label: 'Total Profits',
				data: [15, 18, 12, 14, 10, 15, 7, 14, 14, 10, 15, 7, 14],
				backgroundColor: '#ff5964',
				hoverBackgroundColor: '#ff5964',
				hoverBorderWidth: 2,
				hoverBorderColor: '#ff5964'
			}, {

			    label: 'Total Purchase',
				data: [10, 14, 10, 15, 9, 14, 15, 19, 11, 13, 15, 10, 14],
				backgroundColor: '#17d092',
				hoverBackgroundColor: '#17d092',
				hoverBorderWidth: 2,
				hoverBorderColor: '#17d092'
			}, {

			    label: 'Total Sales',
				data: [5, 8, 15, 10, 14, 9, 16, 9, 14, 7, 12, 6, 14, 3, 6],
				backgroundColor: '#fda008',
				hoverBackgroundColor: '#fda008',
				hoverBorderWidth: 2,
				hoverBorderColor: '#fda008'
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
	/*-- End Sales Chart -- */
	
	
	/*-- Cost Chart -- */
	var ctx = document.getElementById("cost");
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			datasets: [{
				data: [40, 65],
				backgroundColor: ['#ff5964 ', '#5964ff '],
				hoverBackgroundColor: ['#ff5964 ', '#5964ff '],
				borderColor:'transparent',
			}],
			labels: ["Sales Cost %", "Marketing Cost %"]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false,
				labels: {
					fontColor: "#bbc1ca"
				},
			},
		}
	});
	/*-- End Cost Chart -- */
	
	/*-- Jvector Map -- */
	$('#world-map-markers').vectorMap({
		map : 'world_mill_en',
		scaleColors : ['#5964ff   ', '#871faf'],
		normalizeFunction : 'polynomial',
		hoverOpacity : 0.7,
		hoverColor : false,
		regionStyle : {
			initial : {
				fill : 'rgba(119, 119, 142, 0.2)'
			}
		},
		 markerStyle: {
			initial: {
				r: 9,
				'fill': '#5964ff   ',
				'fill-opacity': 0.9,
				'stroke': '#fff',
				'stroke-width' : 9,
				'stroke-opacity': 0.2
			},

			hover: {
				'stroke': '#fff',
				'fill-opacity': 1,
				'stroke-width': 1.5
			}
		},
		backgroundColor : 'transparent',
		markers : [{
			latLng : [41.90, 12.45],
			name : 'Vatican City'
		}, {
			latLng : [43.73, 7.41],
			name : 'Monaco'
		}, {
			latLng : [-0.52, 166.93],
			name : 'Nauru'
		}, {
			latLng : [-8.51, 179.21],
			name : 'Tuvalu'
		}, {
			latLng : [43.93, 12.46],
			name : 'San Marino'
		}, {
			latLng : [47.14, 9.52],
			name : 'Liechtenstein'
		}, {
			latLng : [7.11, 171.06],
			name : 'Marshall Islands'
		}, {
			latLng : [17.3, -62.73],
			name : 'Saint Kitts and Nevis'
		}, {
			latLng : [3.2, 73.22],
			name : 'Maldives'
		}, {
			latLng : [35.88, 14.5],
			name : 'Malta'
		}, {
			latLng : [12.05, -61.75],
			name : 'Grenada'
		}, {
			latLng : [13.16, -61.23],
			name : 'Saint Vincent and the Grenadines'
		}, {
			latLng : [13.16, -59.55],
			name : 'Barbados'
		}, {
			latLng : [17.11, -61.85],
			name : 'Antigua and Barbuda'
		}, {
			latLng : [-4.61, 55.45],
			name : 'Seychelles'
		}, {
			latLng : [7.35, 134.46],
			name : 'Palau'
		}, {
			latLng : [42.5, 1.51],
			name : 'Andorra'
		}, {
			latLng : [14.01, -60.98],
			name : 'Saint Lucia'
		}, {
			latLng : [6.91, 158.18],
			name : 'Federated States of Micronesia'
		}, {
			latLng : [1.3, 103.8],
			name : 'Singapore'
		}, {
			latLng : [1.46, 173.03],
			name : 'Kiribati'
		}, {
			latLng : [-21.13, -175.2],
			name : 'Tonga'
		}, {
			latLng : [15.3, -61.38],
			name : 'Dominica'
		}, {
			latLng : [-20.2, 57.5],
			name : 'Mauritius'
		}, {
			latLng : [26.02, 50.55],
			name : 'Bahrain'
		}, {
			latLng : [0.33, 6.73],
			name : 'São Tomé and Príncipe'
		}]
	});
	/*-- End Jvector Map -- */
	
 });
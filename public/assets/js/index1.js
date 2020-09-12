$(function(e){
  'use strict'
	
	/*--- Session By Devices ----*/
	
	/*today-sessions*/
	var ctx = document.getElementById("today-sessions");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["1hour", "2hours", "3hours", "6hours", "12hours", "24hours"],
			type: 'line',
			defaultFontFamily: 'Montserrat',
			datasets: [{
				label: "Desktop",
				data: [0, 66, 55, 34, 71, 88],
				backgroundColor: 'transparent',
				borderColor: '#5964ff',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#5964ff',
			}, {
				label: "Tablets",
				data: [0, 20, 36, 18, 15, 20, 25, 20],
				backgroundColor: 'transparent',
				borderColor: '#ff5964',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#ff5964',
			}, {
				label: "Mobile",
				data: [50, 120, 90, 70, 90, 130, 100, 140],
				backgroundColor: 'transparent',
				borderColor: '#17d092',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#17d092',
			}]
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
				titleFontFamily: 'Montserrat',
				bodyFontFamily: 'Montserrat',
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
					ticks: {
						fontColor: "#bbc1ca",
					 },
					display: true,
					gridLines: {
						display: false,
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'Today',
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
					scaleLabel: {
						display: false,
						labelString: 'Sessions',
						fontColor: 'rgba(0,0,0,0.61)'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});	
	/* week-session */
    var ctx = $('#week-session');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"],
			type: 'line',
			datasets: [{
				label: "Desktop",
				data: [253, 256, 395, 204, 251, 458, 364],
				backgroundColor: 'rgba(89, 100, 255,0.4)',
				borderColor: 'rgba(89, 100, 255,0.9)',
				borderWidth: 0,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgba(89, 100, 255,0.8)',
			}, {
				label: "Tablet",
				data: [153, 156, 195, 104, 151, 158, 164],
				backgroundColor: 'rgba(255, 89, 100,0.4)',
				borderColor: 'rgba(255, 89, 100,0.9)',
				borderWidth: 0,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgba(255, 89, 100,0.8)',
			}, {
				label: "Mobile",
				data: [353, 356, 495, 304, 451, 558, 464],
				backgroundColor: 'rgba(23, 208, 146, 0.4)',
				borderColor: 'rgba(23, 208, 146,0.9)',
				borderWidth: 0,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgba(23, 208, 146,0.8)',
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
				display: false,
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
	/* monthly-session */
	var ctx = $('#monthly-session');
	var bar_chart = new Chart(ctx, {
	  type: 'bar',
	  data: {
		labels: ["Week1", "Week2", "Week3", "Week4"],
		datasets: [{
			label: 'Desktop',
			data: [3, 4, 7, 3, 6, 2,5,3,4],
			backgroundColor: '#5964ff',
		  }, {
			label: 'Tablet',
			data: [2, 5, 3, 3, 4, 3,3,7,2],
			backgroundColor: '#ff5964'
		  },
		  {
			label: 'Mobile',
			data: [2, 5, 3, 3, 4, 3,7,3,6],
			backgroundColor: '#17d092'
		  }
		]
	  },
	  options: {
		legend: {
			display: false,
			labels: {
				usePointStyle: true,
				fontFamily: 'Montserrat',
			},
		},
		scales: {
		  yAxes: [{
			stacked: true,
			gridLines: {
				color: 'rgba(0,0,0,0.03)',
				display: true,
			},
			scaleLabel: {
				display: false,
				labelString: '',
				fontColor: 'rgba(0,0,0,0.03)'
			},
			ticks: {
			  fontColor: "#bbc1ca",
			  fontFamily: 'Montserrat',
			}
		  }],
		  xAxes: [{
			barPercentage: 0.5,
			gridLines: {
				color: 'rgba(0,0,0,0.03)',
				display: true,
				fontFamily: 'Montserrat',
			},
			ticks: {
				fontColor: "#bbc1ca",
				fontFamily: 'Montserrat',
			},
			stacked: true,
		  }]
		}
	  }
	});
	
	/*--- End Session By Devices ---*/
	
	/*--- Impressions ---*/
	$(".impressions").sparkline([5, 4,5,3,4,5,2,4,5,4,3,5,4,3,4,5], {
		type: 'bar',
		height: 70,
		width:250,
		barWidth: 5,
		barSpacing: 7,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#5964ff'
	});
	/*--- End Impressions ---*/
	
	/*--- morrisBar1 ---*/
	var morrisData = [{
		y: 'Oct 01',
		a: 95000,
		b: 70000
	}, {
		y: 'Oct 05',
		a: 75000,
		b: 55000
	}, {
		y: 'Oct 10',
		a: 50000,
		b: 40000
	}, {
		y: 'Oct 15',
		a: 75000,
		b: 65000
	}, {
		y: 'Oct 20',
		a: 50000,
		b: 40000
	}, {
		y: 'Oct 25',
		a: 80000,
		b: 90000
	}, {
		y: 'Oct 30',
		a: 75000,
		b: 65000
	}];
	new Morris.Bar({
		element: 'morrisBar1',
		data: morrisData,
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Online', 'Offline'],
		barColors: ['#5964ff', '#17d092'],
		preUnits: '$',
		barSizeRatio: 0.55,
		gridTextSize: 11,
		gridTextColor: '#494c57',
		gridTextWeight: 'bold',
		gridLineColor: '#999',
		gridStrokeWidth: 0.25,
		hideHover: 'auto',
		resize: true,
		padding: 5
	});
	/*--- End morrisBar1 chart ---*/
	
	
	/*--- Visiting Regions ---*/
	$(".spark1").sparkline([5, 4,5,5,4,3,5,4], {
		type: 'bar',
		height: 20,
		width:250,
		barWidth: 5,
		barSpacing: 7,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#ff5964'
	});
	$(".spark2").sparkline([5, 4,5,3,4,5,5,4], {
		type: 'bar',
		height: 20,
		width:250,
		barWidth: 5,
		barSpacing: 7,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#17d092'
	});
	$(".spark3").sparkline([5,4,5,5,4,3,5,4], {
		type: 'bar',
		height: 20,
		width:250,
		barWidth: 5,
		barSpacing: 7,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#fda008'
	});
	$(".spark4").sparkline([5, 4,5,5,4,3,5,4], {
		type: 'bar',
		height: 20,
		width:250,
		barWidth: 5,
		barSpacing: 7,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#3ec7e8'
	});
	$(".spark5").sparkline([5, 4,5,3,4,3,5,4], {
		type: 'bar',
		height: 20,
		width:250,
		barWidth: 5,
		barSpacing: 7,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#f35e90'
	});
	/*--- Visiting Regions ---*/
	
	/*--- Subscribers ---*/
	var myCanvas = document.getElementById("subscribers");
	myCanvas.height="220";
	var myCanvasContext = myCanvas.getContext("2d");
	var myChart = new Chart(myCanvas, {
		type: 'bar',
		data: {
			labels: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat" ,"Sun"],
			datasets: [{
				label: 'Female',
				data: [15, 17, 12, 14, 10, 15, 14],
				backgroundColor: '#ff5964',
				hoverBackgroundColor: '#ff5964',
				hoverBorderWidth: 4,
				hoverBorderColor: '#ff5964'
			},{
				label: 'male',
				data: [10, 14, 10, 15, 9, 14, 15, 20],
				backgroundColor: '#17d092',
				hoverBackgroundColor: '#17d092',
				hoverBorderWidth: 4,
				hoverBorderColor: '#17d092'
			},
		  ]
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
				display: false,
				labels: {
					usePointStyle: true,
				},
			},
			scales: {
				xAxes: [{
					 barPercentage: 0.5,
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
						labelString: 'Month',
						fontColor: '#b0bac9'
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "transparent",
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
	/*--- Subscribers ---*/
});


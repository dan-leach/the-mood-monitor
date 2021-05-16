<script>


// quickLook1 --> 

var ctx = document.getElementById('quickLook1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['0-24hrs', '0-72hrs', '0-7days'],
        datasets: [{
		label: 'Smiles',
                backgroundColor: 'rgb(0, 255, 0)',
                borderColor: 'rgb(0, 255, 0)',
		borderWidth: 1,
		data: [
			"<?php echo $smileCount24PC ?>",
			"<?php echo $smileCount72PC ?>",
			"<?php echo $smileCount7dPC ?>"
		]
		}, {
		label: 'Mehs',
                backgroundColor: 'rgb(255, 175, 0)',
                borderColor: 'rgb(255, 175, 0)',
		borderWidth: 1,
		data: [
			"<?php echo $mehCount24PC ?>",
			"<?php echo $mehCount72PC ?>",
			"<?php echo $mehCount7dPC ?>"
		]
                }, {
		label: 'Frowns',
                backgroundColor: 'rgb(255, 0, 0)',
                borderColor: 'rgb(255, 0, 0)',
		borderWidth: 1,
		data: [
			"<?php echo $frownCount24PC ?>",
			"<?php echo $frownCount72PC ?>",
			"<?php echo $frownCount7dPC ?>"
		]

	}]

    },
    options: {
	title: {
		display: true,
		text: 'Mood: 7 day view'
	},
        legend: {
                display: false
        },
        scales: {
            xAxes: [{
                stacked: true
            }],
            yAxes: [{
                stacked: true,
                ticks: {
                    beginAtZero: true,
                    max: 100
                },
		scaleLabel: {
			display: true,
			labelString: 'Percentage of total responses'
		}
            }]
        }
    }
});

// quickLook2 -->

var ctx = document.getElementById('quickLook2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['0-24hrs', '0-72hrs', '0-7days'],
        datasets: [{
		type: 'bar',
		label: 'Responses',
                backgroundColor: 'rgb(0, 0, 255)',
                borderColor: 'rgb(0, 0, 255)',
		borderWidth: 1,
		data: [
			"<?php echo $smileLine1 + $mehLine1 + $frownLine1 ?>",
			"<?php echo $smileLine1 + $mehLine1 + $frownLine1 + $smileLine2 + $mehLine2 + $frownLine2 + $smileLine3 + $mehLine3 + $frownLine3 ?>",
			"<?php echo $smileLine1 + $mehLine1 + $frownLine1 + $smileLine2 + $mehLine2 + $frownLine2 + $smileLine3 + $mehLine3 + $frownLine3 + $smileLine4 + $mehLine4 + $frownLine4 + $smileLine5 + $mehLine5 + $frownLine5 + $smileLine6 + $mehLine6 + $frownLine6 + $smileLine7 + $mehLine7 + $frownLine7 ?>"
		]
	}]

    },
    options: {
	title: {
		display: true,
		text: 'Engagement: 7 day view'
	},
        legend: {
                display: false
        },
        scales: {
            xAxes: [{
            }],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                },
		scaleLabel: {
			display: true,
			labelString: 'Number of responses'
		}
            }]
        }
    }
});

// mood1 --> responses by time period

var ctx = document.getElementById('mood1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['24 hours', 'Week', 'Month', 'All time'],
        datasets: [{
		label: 'Smiles',
                backgroundColor: 'rgb(0, 255, 0)',
                borderColor: 'rgb(0, 255, 0)',
		borderWidth: 1,
		data: [
			"<?php echo $smileCount24PC ?>",
			"<?php echo $smileCount52PC ?>",
			"<?php echo $smileCount12PC ?>",
			"<?php echo $smileCountPC ?>"
		]
		}, {
		label: 'Mehs',
                backgroundColor: 'rgb(255, 175, 0)',
                borderColor: 'rgb(255, 175, 0)',
		borderWidth: 1,
		data: [
			"<?php echo $mehCount24PC ?>",
			"<?php echo $mehCount52PC ?>",
			"<?php echo $mehCount12PC ?>",
			"<?php echo $mehCountPC ?>"
		]
                }, {
		label: 'Frowns',
                backgroundColor: 'rgb(255, 0, 0)',
                borderColor: 'rgb(255, 0, 0)',
		borderWidth: 1,
		data: [
			"<?php echo $frownCount24PC ?>",
			"<?php echo $frownCount52PC ?>",
			"<?php echo $frownCount12PC ?>",
			"<?php echo $frownCountPC ?>"
		]

	}]

    },
    options: {
	title: {
		display: true,
		text: 'Responses by time period'
	},
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                },
		scaleLabel: {
			display: true,
			labelString: 'Percentage of total responses'
		}
            }]
        }
    }
});



// mood2 --> responses over last 30 days

var config = {
			type: 'line',
			data: {
				labels: [
					"<?php echo $day30 ?>",
					"<?php echo $day29 ?>",
					"<?php echo $day28 ?>",
					"<?php echo $day27 ?>",
					"<?php echo $day26 ?>",
					"<?php echo $day25 ?>",
					"<?php echo $day24 ?>",
					"<?php echo $day23 ?>",
					"<?php echo $day22 ?>",
					"<?php echo $day21 ?>",
					"<?php echo $day20 ?>",
					"<?php echo $day19 ?>",
					"<?php echo $day18 ?>",
					"<?php echo $day17 ?>",
					"<?php echo $day16 ?>",
					"<?php echo $day15 ?>",
					"<?php echo $day14 ?>",
					"<?php echo $day13 ?>",
					"<?php echo $day12 ?>",
					"<?php echo $day11 ?>",
					"<?php echo $day10 ?>",
					"<?php echo $day9 ?>",
					"<?php echo $day8 ?>",
					"<?php echo $day7 ?>",
					"<?php echo $day6 ?>",
					"<?php echo $day5 ?>",
					"<?php echo $day4 ?>",
					"<?php echo $day3 ?>",
					"<?php echo $day2 ?>",
					"<?php echo $day1 ?>"
				],
				datasets: [{
					label: 'Smiles',
               				backgroundColor: 'rgb(0, 255, 0)',
			                borderColor: 'rgb(0, 255, 0)',
					data: [
						"<?php echo $smileLine30 ?>",
						 "<?php echo $smileLine29 ?>",
						 "<?php echo $smileLine28 ?>",
						 "<?php echo $smileLine27 ?>",
						 "<?php echo $smileLine26 ?>",
						 "<?php echo $smileLine25 ?>",
						 "<?php echo $smileLine24 ?>",
						 "<?php echo $smileLine23 ?>",
						 "<?php echo $smileLine22 ?>",
						 "<?php echo $smileLine21 ?>",
						"<?php echo $smileLine20 ?>",
						 "<?php echo $smileLine19 ?>",
						 "<?php echo $smileLine18 ?>",
						 "<?php echo $smileLine17 ?>",
						 "<?php echo $smileLine16 ?>",
						 "<?php echo $smileLine15 ?>",
						 "<?php echo $smileLine14 ?>",
						 "<?php echo $smileLine13 ?>",
						 "<?php echo $smileLine12 ?>",
						 "<?php echo $smileLine11 ?>",
						 "<?php echo $smileLine10 ?>",
						 "<?php echo $smileLine9 ?>",
						 "<?php echo $smileLine8 ?>",
						 "<?php echo $smileLine7 ?>",
						 "<?php echo $smileLine6 ?>",
						 "<?php echo $smileLine5 ?>",
						 "<?php echo $smileLine4 ?>",
						 "<?php echo $smileLine3 ?>",
						 "<?php echo $smileLine2 ?>",
						 "<?php echo $smileLine1 ?>"
					],
					fill: false,
				}, {
					label: 'Mehs',
			                backgroundColor: 'rgb(255, 175, 0)',
			                borderColor: 'rgb(255, 175, 0)',
					fill: false,
					data: [
						"<?php echo $mehLine30 ?>",
						 "<?php echo $mehLine29 ?>",
						 "<?php echo $mehLine28 ?>",
						 "<?php echo $mehLine27 ?>",
						 "<?php echo $mehLine26 ?>",
						 "<?php echo $mehLine25 ?>",
						 "<?php echo $mehLine24 ?>",
						 "<?php echo $mehLine23 ?>",
						 "<?php echo $mehLine22 ?>",
						 "<?php echo $mehLine21 ?>",
						"<?php echo $mehLine20 ?>",
						 "<?php echo $mehLine19 ?>",
						 "<?php echo $mehLine18 ?>",
						 "<?php echo $mehLine17 ?>",
						 "<?php echo $mehLine16 ?>",
						 "<?php echo $mehLine15 ?>",
						 "<?php echo $mehLine14 ?>",
						 "<?php echo $mehLine13 ?>",
						 "<?php echo $mehLine12 ?>",
						 "<?php echo $mehLine11 ?>",
						 "<?php echo $mehLine10 ?>",
						 "<?php echo $mehLine9 ?>",
						 "<?php echo $mehLine8 ?>",
						 "<?php echo $mehLine7 ?>",
						 "<?php echo $mehLine6 ?>",
						 "<?php echo $mehLine5 ?>",
						 "<?php echo $mehLine4 ?>",
						 "<?php echo $mehLine3 ?>",
						 "<?php echo $mehLine2 ?>",
						 "<?php echo $mehLine1 ?>"
					],
                                }, {
					label: 'Frowns',
			                backgroundColor: 'rgb(255, 0, 0)',
			                borderColor: 'rgb(255, 0, 0)',
					fill: false,
					data: [
						"<?php echo $frownLine30 ?>",
						 "<?php echo $frownLine29 ?>",
						 "<?php echo $frownLine28 ?>",
						 "<?php echo $frownLine27 ?>",
						 "<?php echo $frownLine26 ?>",
						 "<?php echo $frownLine25 ?>",
						 "<?php echo $frownLine24 ?>",
						 "<?php echo $frownLine23 ?>",
						 "<?php echo $frownLine22 ?>",
						 "<?php echo $frownLine21 ?>",
						"<?php echo $frownLine20 ?>",
						 "<?php echo $frownLine19 ?>",
						 "<?php echo $frownLine18 ?>",
						 "<?php echo $frownLine17 ?>",
						 "<?php echo $frownLine16 ?>",
						 "<?php echo $frownLine15 ?>",
						 "<?php echo $frownLine14 ?>",
						 "<?php echo $frownLine13 ?>",
						 "<?php echo $frownLine12 ?>",
						 "<?php echo $frownLine11 ?>",
						 "<?php echo $frownLine10 ?>",
						 "<?php echo $frownLine9 ?>",
						 "<?php echo $frownLine8 ?>",
						 "<?php echo $frownLine7 ?>",
						 "<?php echo $frownLine6 ?>",
						 "<?php echo $frownLine5 ?>",
						 "<?php echo $frownLine4 ?>",
						 "<?php echo $frownLine3 ?>",
						 "<?php echo $frownLine2 ?>",
						 "<?php echo $frownLine1 ?>"
					],
				}]
			},
			options: {
				legend: {
			            display: false
				},
				responsive: true,
				title: {
					display: true,
					text: 'Responses over past 30 days'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Date'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Number of responses'
						}
					}]
				}
			}
		};
ctx = document.getElementById('mood2').getContext('2d');
var myChart = new Chart(ctx, config);


// mood3 --> responses over last 12 months
var config = {
			type: 'line',
			data: {
				labels: [
					"<?php echo $month12 ?>",
					"<?php echo $month11 ?>",
					"<?php echo $month10 ?>",
					"<?php echo $month9 ?>",
					"<?php echo $month8 ?>",
					"<?php echo $month7 ?>",
					"<?php echo $month6 ?>",
					"<?php echo $month5 ?>",
					"<?php echo $month4 ?>",
					"<?php echo $month3 ?>",
					"<?php echo $month2 ?>",
					"<?php echo $month1 ?>"
				],
				datasets: [{
					label: 'Smiles',
               				backgroundColor: 'rgb(0, 255, 0)',
			                borderColor: 'rgb(0, 255, 0)',
					data: [
						 "<?php echo $smileMonth12 ?>",
						 "<?php echo $smileMonth11 ?>",
						 "<?php echo $smileMonth10 ?>",
						 "<?php echo $smileMonth9 ?>",
						 "<?php echo $smileMonth8 ?>",
						 "<?php echo $smileMonth7 ?>",
						 "<?php echo $smileMonth6 ?>",
						 "<?php echo $smileMonth5 ?>",
						 "<?php echo $smileMonth4 ?>",
						 "<?php echo $smileMonth3 ?>",
						 "<?php echo $smileMonth2 ?>",
						 "<?php echo $smileMonth1 ?>"
					],
					fill: false,
				}, {
					label: 'Mehs',
			                backgroundColor: 'rgb(255, 175, 0)',
			                borderColor: 'rgb(255, 175, 0)',
					fill: false,
					data: [
						 "<?php echo $mehMonth12 ?>",
						 "<?php echo $mehMonth11 ?>",
						 "<?php echo $mehMonth10 ?>",
						 "<?php echo $mehMonth9 ?>",
						 "<?php echo $mehMonth8 ?>",
						 "<?php echo $mehMonth7 ?>",
						 "<?php echo $mehMonth6 ?>",
						 "<?php echo $mehMonth5 ?>",
						 "<?php echo $mehMonth4 ?>",
						 "<?php echo $mehMonth3 ?>",
						 "<?php echo $mehMonth2 ?>",
						 "<?php echo $mehMonth1 ?>"
					],
                                }, {
					label: 'Frowns',
			                backgroundColor: 'rgb(255, 0, 0)',
			                borderColor: 'rgb(255, 0, 0)',
					fill: false,
					data: [
						 "<?php echo $frownMonth12 ?>",
						 "<?php echo $frownMonth11 ?>",
						 "<?php echo $frownMonth10 ?>",
						 "<?php echo $frownMonth9 ?>",
						 "<?php echo $frownMonth8 ?>",
						 "<?php echo $frownMonth7 ?>",
						 "<?php echo $frownMonth6 ?>",
						 "<?php echo $frownMonth5 ?>",
						 "<?php echo $frownMonth4 ?>",
						 "<?php echo $frownMonth3 ?>",
						 "<?php echo $frownMonth2 ?>",
						 "<?php echo $frownMonth1 ?>"
					],
				}]
			},
			options: {
				legend: {
			            display: false
				},
				responsive: true,
				title: {
					display: true,
					text: 'Responses over past 12 months'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Number of responses'
						}
					}]
				}
			}
		};
ctx = document.getElementById('mood3').getContext('2d');
var myChart = new Chart(ctx, config);

// engagement1 --> engagement over last 30 days

var config = {
			type: 'line',
			data: {
				labels: [
					"<?php echo $day30 ?>",
					"<?php echo $day29 ?>",
					"<?php echo $day28 ?>",
					"<?php echo $day27 ?>",
					"<?php echo $day26 ?>",
					"<?php echo $day25 ?>",
					"<?php echo $day24 ?>",
					"<?php echo $day23 ?>",
					"<?php echo $day22 ?>",
					"<?php echo $day21 ?>",
					"<?php echo $day20 ?>",
					"<?php echo $day19 ?>",
					"<?php echo $day18 ?>",
					"<?php echo $day17 ?>",
					"<?php echo $day16 ?>",
					"<?php echo $day15 ?>",
					"<?php echo $day14 ?>",
					"<?php echo $day13 ?>",
					"<?php echo $day12 ?>",
					"<?php echo $day11 ?>",
					"<?php echo $day10 ?>",
					"<?php echo $day9 ?>",
					"<?php echo $day8 ?>",
					"<?php echo $day7 ?>",
					"<?php echo $day6 ?>",
					"<?php echo $day5 ?>",
					"<?php echo $day4 ?>",
					"<?php echo $day3 ?>",
					"<?php echo $day2 ?>",
					"<?php echo $day1 ?>"
				],
				datasets: [{
					label: 'Responses',
               				backgroundColor: 'rgb(0, 0, 255)',
			                borderColor: 'rgb(0, 0, 255)',
					data: [
						"<?php echo $smileLine30 + $mehLine30 + $frownLine30 ?>",
						 "<?php echo $smileLine29 + $mehLine29 + $frownLine29 ?>",
						 "<?php echo $smileLine28 + $mehLine28 + $frownLine28 ?>",
						 "<?php echo $smileLine27 + $mehLine27 + $frownLine27 ?>",
						 "<?php echo $smileLine26 + $mehLine26 + $frownLine26 ?>",
						 "<?php echo $smileLine25 + $mehLine25 + $frownLine25 ?>",
						 "<?php echo $smileLine24 + $mehLine24 + $frownLine24 ?>",
						 "<?php echo $smileLine23 + $mehLine23 + $frownLine23 ?>",
						 "<?php echo $smileLine22 + $mehLine22 + $frownLine22 ?>",
						 "<?php echo $smileLine21 + $mehLine21 + $frownLine21 ?>",
						"<?php echo $smileLine20 + $mehLine20 + $frownLine20 ?>",
						 "<?php echo $smileLine19 + $mehLine19 + $frownLine19 ?>",
						 "<?php echo $smileLine18 + $mehLine18 + $frownLine18 ?>",
						 "<?php echo $smileLine17 + $mehLine17 + $frownLine17 ?>",
						 "<?php echo $smileLine16 + $mehLine16 + $frownLine16 ?>",
						 "<?php echo $smileLine15 + $mehLine15 + $frownLine15 ?>",
						 "<?php echo $smileLine14 + $mehLine14 + $frownLine14 ?>",
						 "<?php echo $smileLine13 + $mehLine13 + $frownLine13 ?>",
						 "<?php echo $smileLine12 + $mehLine12 + $frownLine12 ?>",
						 "<?php echo $smileLine11 + $mehLine11 + $frownLine11 ?>",
						 "<?php echo $smileLine10 + $mehLine10 + $frownLine10 ?>",
						 "<?php echo $smileLine9 + $mehLine9 + $frownLine9 ?>",
						 "<?php echo $smileLine8 + $mehLine8 + $frownLine8 ?>",
						 "<?php echo $smileLine7 + $mehLine7 + $frownLine7 ?>",
						 "<?php echo $smileLine6 + $mehLine6 + $frownLine6 ?>",
						 "<?php echo $smileLine5 + $mehLine5 + $frownLine5 ?>",
						 "<?php echo $smileLine4 + $mehLine4 + $frownLine4 ?>",
						 "<?php echo $smileLine3 + $mehLine3 + $frownLine3 ?>",
						 "<?php echo $smileLine2 + $mehLine2 + $frownLine2 ?>",
						 "<?php echo $smileLine1 + $mehLine1 + $frownLine1 ?>"
					],
					fill: false,
				}, {
					label: 'Target',
			                backgroundColor: 'rgb(0, 0, 0)',
			                borderColor: 'rgb(0, 0, 0)',
					fill: false,
					data: [ 10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10 ],
					pointRadius: 0
				}]
			},
			options: {
				legend: {
			            display: true
				},
				responsive: true,
				title: {
					display: true,
					text: 'Engagement over past 30 days'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Date'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Number of responses'
						}
					}]
				}
			}
		};
ctx = document.getElementById('engagement1').getContext('2d');
var myChart = new Chart(ctx, config);

// engagement2 --> engagement over last 12 months

var config = {
			type: 'line',
			data: {
				labels: [
					"<?php echo $month12 ?>",
					"<?php echo $month11 ?>",
					"<?php echo $month10 ?>",
					"<?php echo $month9 ?>",
					"<?php echo $month8 ?>",
					"<?php echo $month7 ?>",
					"<?php echo $month6 ?>",
					"<?php echo $month5 ?>",
					"<?php echo $month4 ?>",
					"<?php echo $month3 ?>",
					"<?php echo $month2 ?>",
					"<?php echo $month1 ?>"
				],
				datasets: [{
					label: 'Responses',
               				backgroundColor: 'rgb(0, 0, 255)',
			                borderColor: 'rgb(0, 0, 255)',
					data: [
						 "<?php echo $smileMonth12 + $mehMonth12 + $frownMonth12 ?>",
						 "<?php echo $smileMonth11 + $mehMonth11 + $frownMonth11 ?>",
						 "<?php echo $smileMonth10 + $mehMonth10 + $frownMonth10 ?>",
						 "<?php echo $smileMonth9 + $mehMonth9 + $frownMonth9 ?>",
						 "<?php echo $smileMonth8 + $mehMonth8 + $frownMonth8 ?>",
						 "<?php echo $smileMonth7 + $mehMonth7 + $frownMonth7 ?>",
						 "<?php echo $smileMonth6 + $mehMonth6 + $frownMonth6 ?>",
						 "<?php echo $smileMonth5 + $mehMonth5 + $frownMonth5 ?>",
						 "<?php echo $smileMonth4 + $mehMonth4 + $frownMonth4 ?>",
						 "<?php echo $smileMonth3 + $mehMonth3 + $frownMonth3 ?>",
						 "<?php echo $smileMonth2 + $mehMonth2 + $frownMonth2 ?>",
						 "<?php echo $smileMonth1 + $mehMonth1 + $frownMonth1 ?>"
					],
					fill: false,
				}, {
					label: 'Target',
			                backgroundColor: 'rgb(0, 0, 0)',
			                borderColor: 'rgb(0, 0, 0)',
					fill: false,
					data: [ 200,200,200,200,200,200,200,200,200,200,200,200 ],
					pointRadius: 0
				}]
			},
			options: {
				legend: {
			            display: true
				},
				responsive: true,
				title: {
					display: true,
					text: 'Engagement over past 12 months'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Number of responses'
						}
					}]
				}
			}
		};
ctx = document.getElementById('engagement2').getContext('2d');
var myChart = new Chart(ctx, config);

</script>	
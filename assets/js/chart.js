$(document).ready(function() {

	if ($('.template__sparkline-area').length) {
		

		var mpoints = [];
		var mpoints_max = 10;
		var mdraw = function() {
			var pps = Math.floor((Math.random() * 41) + 0);
			mpoints.push(pps);

			if (mpoints.length > mpoints_max)
			mpoints.splice(0,1);


			$('.template__sparkline-area').sparkline(
				mpoints,
				{
					width: '100%',
					height: '60px',
					type: 'line',
					lineColor: '#ed4949',
					lineWidth: 2,
					fillColor: 'rgba(237, 73, 73, 0.6)',
					spotColor: '#FF5722',
					minSpotColor: '#FF5722',
					maxSpotColor: '#FF5722',
					highlightSpotColor: '#FF5722',
					spotRadius: 2,
					defaultPixelsPerValue: 1
				}
			);

			setTimeout(mdraw, 1000);
		}

		setTimeout(mdraw, 1000);
	}


	if ($('.pages_dashboard').length) {
		var graph = Morris.Line({
		    element: $('.ld-widget-main__chart'),
		    xkey: 'x',
		    ykeys: 'y',
		    labels: ['FPS'],
		    parseTime: false,
		    ymin: 0,
		    ymax: 60,
		    hideHover: true
		});
		fps = [];
		function update() {

			fps.push({
				x: new Date().getSeconds(),
		   		y: Math.floor((Math.random() * 41) + 0)
			});

			if (fps.length > 20)
			fps.splice(0, 1);

		  graph.setData(fps);
		}
		setInterval(update, 1000);


		if ($('#cpuGauge').length) {
			var cpug = new JustGage({
		    id: "cpuGauge",
		    value: 0,
		    min: 0,
		    max: 100,
		    title: "CPU",
		    valueFontColor: '#A0A0A0',
		    titleFontColor: '#fff',
		    symbol: '%',
		    gaugeColor: '#828282',
            gaugeWidthScale: 0.2,
            levelColors: ["#1c8ed7"]
		  });
		}

		if ($('#ramGauge').length) {
			var ramg = new JustGage({
		    id: "ramGauge",
		    value: 0,
		    min: 0,
		    max: 8000,
		    title: "RAM",
		    valueFontColor: '#A0A0A0',
		    titleFontColor: '#fff',
		    symbol: ' MB',
		    gaugeColor: '#828282',
            gaugeWidthScale: 0.2,
            levelColors: ["#1c8ed7"]
		  });
		}

		function updateCPU() {
			cpug.refresh(Math.floor((Math.random() * 41) + 0));
		}
		
		function updateRAM() {
			ramg.refresh(Math.floor((Math.random() * 8000) + 0));
		}
		setInterval(updateCPU, 1000);
		setInterval(updateRAM, 1000);
		$('.selectpicker').selectpicker();

	}


	if ($('#playerTable').length) {
		var table = $('.datatable').DataTable(
			{
				ordering: true
			}
		);
	}



});
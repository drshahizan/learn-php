

jQuery('#world-map-markers').vectorMap(
{
    map: 'world_mill_en',
    backgroundColor: '#fff',
    borderColor: '#818181',
    borderOpacity: 0.25,
    borderWidth: 1,
    color: '#f4f3f0',
    regionStyle : {
        initial : {
          fill : '#B5B5C3'
        }
      },
     markerStyle: { initial: { r: 9, fill: "#019ff8", "fill-opacity": 0.9, stroke: "#fff", "stroke-width": 7, "stroke-opacity": 0.4 }, hover: { stroke: "#fff", "fill-opacity": 1, "stroke-width": 1.5 } },
    enableZoom: true,
    hoverColor: '#0a89c1',
    markers: [
		{ latLng: [41.9, 12.45], name: "Vatican City" },
		{ latLng: [43.73, 7.41], name: "Monaco" },
		{ latLng: [-0.52, 166.93], name: "Nauru" },
		{ latLng: [-8.51, 179.21], name: "Tuvalu" },
		{ latLng: [43.93, 12.46], name: "San Marino" },
		{ latLng: [47.14, 9.52], name: "Liechtenstein" },
		{ latLng: [7.11, 171.06], name: "Marshall Islands" },
		{ latLng: [17.3, -62.73], name: "Saint Kitts and Nevis" },
		{ latLng: [3.2, 73.22], name: "Maldives" },
		{ latLng: [35.88, 14.5], name: "Malta" },
		{ latLng: [12.05, -61.75], name: "Grenada" },
		{ latLng: [13.16, -61.23], name: "Saint Vincent and the Grenadines" },
		{ latLng: [13.16, -59.55], name: "Barbados" },
		{ latLng: [17.11, -61.85], name: "Antigua and Barbuda" },
		{ latLng: [-4.61, 55.45], name: "Seychelles" },
		{ latLng: [7.35, 134.46], name: "Palau" },
		{ latLng: [42.5, 1.51], name: "Andorra" },
		{ latLng: [14.01, -60.98], name: "Saint Lucia" },
		{ latLng: [6.91, 158.18], name: "Federated States of Micronesia" },
		{ latLng: [1.3, 103.8], name: "Singapore" },
		{ latLng: [0.33, 6.73], name: "SÃ£o TomÃ© and PrÃ­ncipe" },
	],
    hoverOpacity: 0.7,
    normalizeFunction: 'linear',
    scaleColors: ['#b6d6ff', '#005ace'],
    selectedColor: '#c9dfaf',
    selectedRegions: [],
    showTooltip: true,
    onRegionClick: function(element, code, region)
    {
        var message = 'You clicked "'
            + region
            + '" which has the code: '
            + code.toUpperCase();

        alert(message);
    }
});


$('#india').vectorMap({
            map : 'in_mill',
            backgroundColor : 'transparent',
            regionStyle : {
                initial : {
                    fill : '#A1A5B7'
                }
            }
        });


$('#usa').vectorMap({
	map : 'us_aea_en',
	backgroundColor : 'transparent',
	regionStyle : {
		initial : {
			fill : '#7E8299'
		}
	}
});



$('#australia').vectorMap({
	map : 'au_mill',
	backgroundColor : 'transparent',
	regionStyle : {
		initial : {
			fill : '#5E6278'
		}
	}
});

 $('#uk').vectorMap({
	map : 'uk_mill_en',
	backgroundColor : 'transparent',
	regionStyle : {
		initial : {
			fill : '#3F4254'
		}
	}
});

       
        
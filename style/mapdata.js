var simplemaps_worldmap_mapdata = {

	map_access: {
		display: 'none',
	},
	main_settings:{
		//General settings
		width: 'responsive', //or 'responsive'
		border_color: '#D1D0D0',
	
		//State defaults
		state_color: '#D1D0D0',
		state_hover_color: '#b5a22e',
	 	border_size: 0.1,		
		all_states_inactive: 'no',
		all_states_zoomable: 'no',		
		
		
		//Zoom settings
		zoom: 'no', //use default regions
		back_image: 'no', //Use image instead of arrow for back zoom				
		initial_back: 'no', //Show back button when zoomed out and do this JavaScript upon click		
		initial_zoom: -1,  //-1 is zoomed out, 0 is for the first continent etc	
		initial_zoom_solo: 'no', //hide adjacent states when starting map zoomed in
	    // region_opacity: 1,
		// region_hover_opacity: .5,
	

		// zoom_out_incrementally: 'yes',  
		// zoom_percentage: .99,
		// zoom_time: .5, 
		
		//Popup settings
		popup_color: 'white',
		popup_opacity: .9,
		popup_shadow: 0,
		popup_corners: 5,
		popup_font: '12px/1.5 Comfortaa, Arial, sans-serif',
	
		
		//Advanced settings
		div: 'map',
		auto_load: 'yes',		
		url_new_tab: 'yes', 
		images_directory: 'default', //e.g. 'map_images/'
		fade_time:  .1, //time to fade out		
	},

	state_specific: {
		"AF":{
			name: "Азербайджан",
			description: "230 видов",
			color: "default",
			hover_color: "default",
		},
		"AO":{
			name: "Angola",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"AL":{
			name: "Albania",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"AR":{
			name: "Argentina",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"AM":{
			name: "Armenia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"AU":{
			name: "Австралия",
			description: "400 видов ",
			color: "default",
			hover_color: "default",
		},
		"AT":{
			name: "Austria",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"AZ":{
			name: "Azerbaijan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"BI":{
			name: "Burundi",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"BE":{
			name: "Belgium",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"BJ":{
			name: "Benin",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"BF":{
			name: "Burkina Faso",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"BG":{
			name: "Bulgaria",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"BH":{
			name: "Bahrain",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},    
		"BA":{
			name: "Bosnia and Herzegovina",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"BY":{
			name: "Belarus",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"BO":{
			name: "Боливия",
			description: "до 10 000 видов",
			color: "default",
			hover_color: "default"
		},
		"BR":{
			name: "Бразилия",
			description: "3200 видов",
			color: "default",
			hover_color: "default"
		},
		"BT":{
			name: "Bhutan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"BW":{
			name: "Botswana",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"CF":{
			name: "Central African Republic",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"CA":{
			name: "Канада",
			description: "более 7 семейств",
			color: "default",
			hover_color: "default",
		},
		"CH":{
			name: "Switzerland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"CL":{
			name: "Чили",
			description: "200 видов",
			color: "default",
			hover_color: "default",
		},
		"CN":{
			name: "Китай",
			description: "1317 видов",
			color: "default",
			hover_color: "default",
			
		},
		"CI":{
			name: "Côte d'Ivoire",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"CM":{
			name: "Cameroon",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"CD":{
			name: "Democratic Republic of the Congo",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"CG":{
			name: "Republic of Congo",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"CO":{
			name: "Колумбия",
			description: "1600 видов",
			color: "default",
			hover_color: "default"
		},
		
		"CU":{
			name: "Куба",
			description: "53 подсемейства",
			color: "default",
			hover_color: "default"
		},
		"CZ":{
			name: "Czech Republic",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"DE":{
			name: "Germany",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"DJ":{
			name: "Djibouti",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		
		"DO":{
			name: "Доминиканская Республика",
			description: "9 видов",
			color: "default",
			hover_color: "default",
		},
		"DZ":{
			name: "Алжир",
			description: "121 вид",
			color: "default",
			hover_color: "default"
		},
		"EC":{
			name: "Эквадор",
			description: "2 200 видов",
			color: "default",
			hover_color: "default"
		},
		"EG":{
			name: "Египет",
			description: "63 видов",
			color: "default",
			hover_color: "default"
		},
		"ER":{
			name: "Eritrea",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"ET":{
			name: "Ethiopia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"FI":{
			name: "Finland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"GA":{
			name: "Gabon",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"GB":{
			name: "United Kingdom",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"GE":{
			name: "Georgia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"GH":{
			name: "Ghana",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"GQ":{
			name: "Equatorial Guinea",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"GR":{
			name: "Greece",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"GL":{
			name: "Гренландия",
			description: "52 вида",
			color: "default",
			hover_color: "default",
		},
		"HR":{
			name: "Croatia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		
		"HU":{
			name: "Hungary",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"ID":{
			name: "Индонезия",
			description: "10 000 видов ",
			color: "default",
			hover_color: "default",
		},
		"IN":{
			name: "Индия",
			description: "более 89 видов",
			color: "default",
			hover_color: "default",
		},
		"IE":{
			name: "Ireland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"IR":{
			name: "Иран",
			description: " 2235 видов",
			color: "default",
			hover_color: "default",
		},
		"IS":{
			name: "Исландия",
			description: "2 семейства",
			color: "default",
			hover_color: "default"
		},
		"IT":{
			name: "Italy",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"JP":{
			name: "Япония",
			description: "327 видов",
			color: "default",
			hover_color: "default"
		},
		"KZ":{
			name: "Казахстан",
			description: "1081 вид",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"KE":{
			name: "Kenya",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"KG":{
			name: "Киргизия",
			description: "670 видов",
			color: "default",
			hover_color: "default",
		},
		"XK":{
			name: "Kosovo",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"LB":{
			name: "Lebanon",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"LY":{
			name: "Libya",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
	
		"LS":{
			name: "Lesotho",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"LT":{
			name: "Lithuania",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"LU":{
			name: "Luxembourg",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"LV":{
			name: "Latvia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"MD":{
			name: "Moldova",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"MG":{
			name: "Мадагаскар",
			description: "2680 видов",
			color: "default",
			hover_color: "default",
		},
		"MX":{
			name: "Мексика",
			description: "2045 видов бабочек",
			color: "default",
			hover_color: "default",
		},
		"MK":{
			name: "Macedonia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"ML":{
			name: "Mali",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"ME":{
			name: "Montenegro",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"MN":{
			name: "Монголия",
			description: "2,5–3 тысяч видов",
			color: "default",
			hover_color: "default",
		},
		"MZ":{
			name: "Mozambique",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"MR":{
			name: "Мавритания",
			description: " 165 известных видов",
			color: "default",
			hover_color: "default"
		},
		"MW":{
			name: "Malawi",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"NA":{
			name: "Namibia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"NE":{
			name: "Niger",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"NG":{
			name: "Nigeria",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"NL":{
			name: "Netherlands",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"NO":{
			name: "Norway",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"NP":{
			name: "Непал",
			description: "76 видов и 13 подвидов",
			color: "default",
			hover_color: "default"
		},
		"NZ":{
			name: "Новая Зеландия",
			description: " 1800 видов",
			color: "default",
			hover_color: "default"
		},
		"OM":{
			name: "Оман",
			description: "190 видов",
			color: "default",
			hover_color: "default"
		},
		"PK":{
			name: "Пакистан",
			description: "11 подсемейств",
			color: "default",
			hover_color: "default"
		},
		
		"PE":{
			name: "Перу",
			description: "более 4000 видов (самое большое количество бабочек в мире)",
			color: "default",
			hover_color: "default"
		},
		"PH":{
			name: "Филиппины",
			description: "895 видов бабочек",
			color: "default",
			hover_color: "default"
		},
		"PL":{
			name: "Poland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"PT":{
			name: "Portugal",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"PY":{
			name: "Paraguay",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"RO":{
			name: "Romania",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"RU":{
			name: "Россия",
			description: "2251 род и 9617 видов из 97 семейств",
			color: "default",
			hover_color: "default",
		},
		"RW":{
			name: "Rwanda",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"SA":{
			name: "Саудовская Аравия",
			description: " 420 видов",
			color: "default",
			hover_color: "default"
		},
		"SD":{
			name: "Sudan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"SS":{
			name: "South Sudan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"RS":{
			name: "Serbia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"SK":{
			name: "Slovakia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"SI":{
			name: "Slovenia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"SE":{
			name: "Sweden",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"SZ":{
			name: "Swaziland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"TD":{
			name: "Chad",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"TJ":{
			name: "Tajikistan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"TM":{
			name: "Turkmenistan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"TL":{
			name: "Timor-Leste",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"TN":{
			name: "Тунис",
			description: "84 видов",
			color: "default",
			hover_color: "default"
		},
		"TR":{
			name: "Turkey",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"TZ":{
			name: "Tanzania",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"UG":{
			name: "Uganda",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"UA":{
			name: "Ukraine",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"US":{
			name: "США",
			description: " 725 видов бабочек",
			color: "default",
			hover_color: "default"
		},
		"UZ":{
			name: "Узбекистан",
			description: "более 20 видов",
			color: "default",
			hover_color: "default"
		},
		"VE":{
			name: "Венесуэла",
			description: "около 3 000 видов",
			color: "default",
			hover_color: "default"
		},
		"VN":{
			name: "Вьетнам",
			description: "1000 видов ",
			color: "default",
			hover_color: "default"
		},
		"YE":{
			name: "Йемен",
			description: "550 видов",
			color: "default",
			hover_color: "default"
		},
		"ZA":{
			name: "South Africa",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"ZM":{
			name: "Zambia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"ZW":{
			name: "Zimbabwe",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"SO":{
			name: "Somalia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"FR":{
			name: "France",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"ES":{
			name: "Spain",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"AD":{
			name: "Andorra",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"HK":{
			name: "Hong Kong",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"LI":{
			name: "Liechtenstein",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"PN":{
			name: "Pitcairn Islands",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"SG":{
			name: "Singapore",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		},
		"TT":{
			name: "Trinidad and Tobago",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default"
		}
		
	}

}
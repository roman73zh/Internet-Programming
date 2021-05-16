var 
	//mapWidth		= 620;
	mapHeight		= 350;

	shadowWidth		= 2;
	shadowOpacity		= 0.3;
	shadowColor		= "black";
	shadowX			= 1;
	shadowY			= 2;

	iPhoneLink		= true,

	isNewWindow		= false,

	borderColor		= "#2E2300",
	borderColorOver		= "#2E232E",

	nameColor		= "#2E2300",
	nameFontSize		= "11px",
	nameFontWeight		= "bold",
	nameStroke = false,

	overDelay		= 300,

	map_data = {
    st1: {
   	 	id: 1,
		name: "Адыгея",
		shortname: "",
		link: "javascript:showWindow(1);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/1.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st2: {
   	 	id: 2,
		name: "Алтай",
		shortname: "",
		link: "javascript:showWindow(2);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/2.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st3: {
   	 	id: 3,
		name: "Башкортостан",
		shortname: "",
		link: "javascript:showWindow(3);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/3.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st4: {
   	 	id: 4,
		name: "Бурятия",
		shortname: "",
		link: "javascript:showWindow(4);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/4.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st5: {
   	 	id: 5,
		name: "Дагестан",
		shortname: "",
		link: "javascript:showWindow(5);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/5.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st6: {
   	 	id: 6,
		name: "Северная Осетия",
		shortname: "",
		link: "javascript:showWindow(6);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/6.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st7: {
   	 	id: 7,
		name: "Кабардино-Балкария",
		shortname: "",
		link: "javascript:showWindow(7);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/7.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st8: {
   	 	id: 8,
		name: "Калмыкия",
		shortname: "",
		link: "javascript:showWindow(8);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/8.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st9: {
   	 	id: 9,
		name: "Карачаево-Черкесия",
		shortname: "",
		link: "javascript:showWindow(9);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/9.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st10: {
   	 	id: 10,
		name: "Карелия",
		shortname: "",
		link: "javascript:showWindow(10);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/10.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st11: {
   	 	id: 11,
		name: "Коми",
		shortname: "",
		link: "javascript:showWindow(11);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/11.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st12: {
   	 	id: 12,
		name: "Марий Эл",
		shortname: "",
		link: "javascript:showWindow(12);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/12.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st13: {
   	 	id: 13,
		name: "Мордовия",
		shortname: "",
		link: "javascript:showWindow(13);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/13.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st14: {
   	 	id: 14,
		name: "Саха (Якутия)",
		shortname: "",
		link: "javascript:showWindow(14);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/14.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st15: {
   	 	id: 15,
		name: "Ингушетия",
		shortname: "",
		link: "javascript:showWindow(15);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/15.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st16: {
   	 	id: 16,
		name: "Татарстан",
		shortname: "",
		link: "javascript:showWindow(16);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/16.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st17: {
   	 	id: 17,
		name: "Тыва",
		shortname: "",
		link: "javascript:showWindow(17);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/17.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st18: {
   	 	id: 18,
		name: "Удмуртия",
		shortname: "",
		link: "javascript:showWindow(18);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/18.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st19: {
   	 	id: 19,
		name: "Хакасия",
		shortname: "",
		link: "javascript:showWindow(19);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/19.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st20: {
   	 	id: 20,
		name: "Чечня",
		shortname: "",
		link: "javascript:showWindow(20);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/20.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st21: {
   	 	id: 21,
		name: "Чувашия",
		shortname: "",
		link: "javascript:showWindow(21);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/21.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st22: {
   	 	id: 22,
		name: "Алтайский край",
		shortname: "",
		link: "javascript:showWindow(22);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/22.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st23: {
   	 	id: 23,
		name: "Забайкальский край",
		shortname: "",
		link: "javascript:showWindow(23);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/23.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st24: {
   	 	id: 24,
		name: "Камчатский край",
		shortname: "",
		link: "javascript:showWindow(24);",
		comment: "City name city name<br>City name city name",
		image: "gerbs/24.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st25: {
   	 	id: 25,
		name: "Краснодарский край",
		shortname: "",
		link: "javascript:showWindow(25);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/25.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st26: {
   	 	id: 26,
		name: "Красноярский край",
		shortname: "",
		link: "javascript:showWindow(26);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/26.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st27: {
   	 	id: 27,
		name: "Пермский край",
		shortname: "",
		link: "javascript:showWindow(27);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/27.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st28: {
   	 	id: 28,
		name: "Приморский край",
		shortname: "",
		link: "javascript:showWindow(28);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/28.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st29: {
   	 	id: 29,
		name: "Ставропольский край",
		shortname: "",
		link: "javascript:showWindow(29);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/29.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st30: {
   	 	id: 30,
		name: "Хабаровский край",
		shortname: "",
		link: "javascript:showWindow(30);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/30.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st31: {
   	 	id: 31,
		name: "Амурская область",
		shortname: "",
		link: "javascript:showWindow(31);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/31.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st32: {
   	 	id: 32,
		name: "Архангельская область",
		shortname: "",
		link: "javascript:showWindow(32);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/32.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st33: {
   	 	id: 33,
		name: "Астраханская область",
		shortname: "",
		link: "javascript:showWindow(33);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/33.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st34: {
   	 	id: 34,
		name: "Белгородская область",
		shortname: "",
		link: "javascript:showWindow(34);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/34.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st35: {
   	 	id: 35,
		name: "Брянская область",
		shortname: "",
		link: "javascript:showWindow(35);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/35.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st36: {
   	 	id: 36,
		name: "Владимирская область",
		shortname: "",
		link: "javascript:showWindow(36);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/36.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st37: {
   	 	id: 37,
		name: "Волгоградская область",
		shortname: "",
		link: "javascript:showWindow(37);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/37.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st38: {
   	 	id: 38,
		name: "Вологодская область",
		shortname: "",
		link: "javascript:showWindow(38);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/38.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st39: {
   	 	id: 39,
		name: "Воронежская область",
		shortname: "",
		link: "javascript:showWindow(39);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/39.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st40: {
   	 	id: 40,
		name: "Ивановская область",
		shortname: "",
		link: "javascript:showWindow(40);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/40.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st41: {
   	 	id: 41,
		name: "Иркутская область",
		shortname: "",
		link: "javascript:showWindow(41);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/41.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st42: {
   	 	id: 42,
		name: "Калининградская область",
		shortname: "",
		link: "javascript:showWindow(42);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/42.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st43: {
   	 	id: 43,
		name: "Калужская область",
		shortname: "",
		link: "javascript:showWindow(43);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/43.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st44: {
   	 	id: 44,
		name: "Кемеровская область",
		shortname: "",
		link: "javascript:showWindow(44);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/44.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st45: {
   	 	id: 45,
		name: "Кировская область",
		shortname: "",
		link: "javascript:showWindow(45);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/45.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st46: {
   	 	id: 46,
		name: "Костромская область",
		shortname: "",
		link: "javascript:showWindow(46);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/46.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st47: {
   	 	id: 47,
		name: "Курганская область",
		shortname: "",
		link: "javascript:showWindow(47);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/47.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st48: {
   	 	id: 48,
		name: "Курская область",
		shortname: "",
		link: "javascript:showWindow(48);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/48.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st49: {
   	 	id: 49,
		name: "Ленинградская область",
		shortname: "",
		link: "javascript:showWindow(49);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/49.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st50: {
   	 	id: 50,
		name: "Липецкая область",
		shortname: "",
		link: "javascript:showWindow(50);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/50.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st51: {
   	 	id: 51,
		name: "Магаданская область",
		shortname: "",
		link: "javascript:showWindow(51);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/51.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st52: {
   	 	id: 52,
		name: "Московская область",
		shortname: "",
		link: "javascript:showWindow(52);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/52.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st53: {
   	 	id: 53,
		name: "Мурманская область",
		shortname: "",
		link: "javascript:showWindow(53);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/53.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st54: {
   	 	id: 54,
		name: "Нижегородская область",
		shortname: "",
		link: "javascript:showWindow(54);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/54.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st55: {
   	 	id: 55,
		name: "Новгородская область",
		shortname: "",
		link: "javascript:showWindow(55);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/55.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st56: {
   	 	id: 56,
		name: "Новосибирская область",
		shortname: "",
		link: "javascript:showWindow(56);",
		comment: "<br>",
		image: "gerbs/56.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st57: {
   	 	id: 57,
		name: "Омская область",
		shortname: "",
		link: "javascript:showWindow(57);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/57.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st58: {
   	 	id: 58,
		name: "Оренбургская область",
		shortname: "",
		link: "javascript:showWindow(58);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/58.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st59: {
   	 	id: 59,
		name: "Орловская область",
		shortname: "",
		link: "javascript:showWindow(59);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/59.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st60: {
   	 	id: 60,
		name: "Пензенская область",
		shortname: "",
		link: "javascript:showWindow(60);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/60.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st61: {
   	 	id: 61,
		name: "Псковская область",
		shortname: "",
		link: "javascript:showWindow(61);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/61.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st62: {
   	 	id: 62,
		name: "Ростовская область",
		shortname: "",
		link: "javascript:showWindow(62);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/62.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st63: {
   	 	id: 63,
		name: "Рязанская область",
		shortname: "",
		link: "javascript:showWindow(63);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/63.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st64: {
   	 	id: 64,
		name: "Самарская область",
		shortname: "",
		link: "javascript:showWindow(64);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/64.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st65: {
   	 	id: 65,
		name: "Саратовская область",
		shortname: "",
		link: "javascript:showWindow(65);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/65.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st66: {
   	 	id: 66,
		name: "Сахалинская область",
		shortname: "",
		link: "javascript:showWindow(66);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/66.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st67: {
   	 	id: 67,
		name: "Свердловская область",
		shortname: "",
		link: "javascript:showWindow(67);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/67.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st68: {
   	 	id: 68,
		name: "Смоленская область",
		shortname: "",
		link: "javascript:showWindow(68);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/68.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st69: {
   	 	id: 69,
		name: "Тамбовская область",
		shortname: "",
		link: "javascript:showWindow(69);",
		comment: "<br>",
		image: "gerbs/69.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st70: {
   	 	id: 70,
		name: "Тверская область",
		shortname: "",
		link: "javascript:showWindow(70);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/70.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st71: {
   	 	id: 71,
		name: "Томская область",
		shortname: "",
		link: "javascript:showWindow(71);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/71.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st72: {
   	 	id: 72,
		name: "Тульская область",
		shortname: "",
		link: "javascript:showWindow(72);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/72.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st73: {
   	 	id: 73,
		name: "Тюменская область",
		shortname: "",
		link: "javascript:showWindow(73);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/73.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st74: {
   	 	id: 74,
		name: "Ульяновская область",
		shortname: "",
		link: "javascript:showWindow(74);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/74.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st75: {
   	 	id: 75,
		name: "Челябинская область",
		shortname: "",
		link: "javascript:showWindow(75);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/75.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st76: {
   	 	id: 76,
		name: "Ярославская область",
		shortname: "",
		link: "javascript:showWindow(76);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/76.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st77: {
   	 	id: 77,
		name: "Москва",
		shortname: "МСК",
		link: "javascript:showWindow(77);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/77.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st78: {
   	 	id: 78,
		name: "Санкт-Петербург",
		shortname: "СПБ",
		link: "javascript:showWindow(78);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/78.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st79: {
   	 	id: 79,
		name: "Еврейская автономная область",
		shortname: "",
		link: "javascript:showWindow(79);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/79.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st80: {
   	 	id: 80,
		name: "Ненецкий",
		shortname: "",
		link: "javascript:showWindow(80);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/80.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st81: {
   	 	id: 81,
		name: "Ханты-Мансийский",
		shortname: "",
		link: "javascript:showWindow(81);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/81.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st82: {
   	 	id: 82,
		name: "Чукотский",
		shortname: "",
		link: "javascript:showWindow(82);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/82.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st83: {
   	 	id: 83,
		name: "Ямало-Ненецкий",
		shortname: "",
		link: "javascript:showWindow(83);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/83.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st84: {
   	 	id: 84,
		name: "Республика Крым",
		shortname: "",
		link: "javascript:showWindow(84);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/84.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	},
    st85: {
   	 	id: 85,
		name: "Севастополь",
		shortname: "",
		link: "javascript:showWindow(85);",
		comment: "<p><strong>Столица: </strong></p><ul><li>Год основания: </li><li>Население: </li></ul>",
		image: "gerbs/85.png",
		color_map: "#6E6702", 
		color_map_over: "#C05805"
	}
};
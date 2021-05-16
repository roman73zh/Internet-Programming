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

	borderColor		= "#ffffff",
	borderColorOver		= "#ffffff",

	nameColor		= "#ffffff",
	nameFontSize		= "11px",
	nameFontWeight		= "bold",
	nameStroke = false,

	overDelay		= 300,

	map_data = {
<?php
    $link=mysqli_connect("localhost", "Projects_fuck", "28003208Fuck", "Projects_hist_data");
    $results = mysqli_fetch_all($query = mysqli_query($link, "SELECT * FROM history"), 1);
    for($i = 1; $i < 77; $i++){
        print "st$i: {";
        print 'id: '.$i.',';
        print 'name: "'.$results[$i-1]["title"].'",';
        print 'shortname: "",';
        print 'link: "javascript:showWindow('.$i.');",';
        print 'comment: "<p><strong>Столица: '.$results[$i-1]["capital"].'</strong></p><ul><li>Год основания: '.$results[$i-1]["year"].'</li><li>Население: '.$results[$i-1]["people"].'</li></ul>",';
        print 'image: "gerbs/'.$i.'.png",';
        print 'color_map: "#ff8b00",';
        print 'color_map_over: "#7a5e86"';
        print '},';

    }
    print "st77: {";
    print "id: ".$results[76]["id"].",";
    print 'name: "'.$results[76]["title"].'",';
    print 'shortname: "МСК",';
    print 'link: "javascript:showWindow(77);",';
    print 'comment: "<ul><li>Год основания: '.$results[76]["year"].'</li><li>Население: '.$results[76]["people"].'</li></ul>",';
    print 'image: "gerbs/77.png",';
    print 'color_map: "#ff8b00",';
    print 'color_map_over: "#7a5e86"';
    print '},';
    print "st78: {";
    print "id: ".$results[77]["id"].",";
    print 'name: "'.$results[77]["title"].'",';
    print 'shortname: "СПБ",';
    print 'link: "javascript:showWindow(78);",';
    print 'comment: "<ul><li>Год основания: '.$results[77]["year"].'</li><li>Население: '.$results[77]["people"].'</li></ul>",';
    print 'image: "gerbs/78.png",';
    print 'color_map: "#ff8b00",';
    print 'color_map_over: "#7a5e86"';
    print '},';
    for($i = 79; $i < 85; $i++){
        print "st$i: {";
        print "id: ".$results[$i-1]["id"].",";
        print 'name: "'.$results[$i-1]["title"].'",';
        print 'shortname: "",';
        print 'link: "javascript:showWindow('.$i.');",';
        print 'comment: "<p><strong>Столица: '.$results[$i-1]["capital"].'</strong></p><ul><li>Год основания: '.$results[$i-1]["year"].'</li><li>Население: '.$results[$i-1]["people"].'</li></ul>",';
        print 'image: "gerbs/'.$i.'.png",';
        print 'color_map: "#ff8b00",';
        print 'color_map_over: "#7a5e86"';
        print '},';

    }
    
    print "st85: {";
        print "id: ".$results[84]["id"].",";
        print 'name: "'.$results[84]["title"].'",';
        print 'shortname: "",';
        print 'link: "javascript:showWindow(85);",';
        print 'comment: "<ul><li>Год основания: '.$results[84]["year"].'</li><li>Население: '.$results[84]["people"].'</li></ul>",';
        print 'image: "gerbs/85.png",';
        print 'color_map: "#ff8b00",';
        print 'color_map_over: "#7a5e86"';
        print '}};';
?>
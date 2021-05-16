<?php
    session_start();
    
    if ($_SESSION['user']) {
        require_once '../vendor/updatetime.php';
    }
    
    require_once '../header.php';
    
?>

    <!--<!DOCTYPE html lang="ru">
    <html>
    	<head>
    		<meta charset="UTF-8">
    		<title>Доходы россиян</title>
    		<meta name="viewport" content="width=device-width,maximum-scale=1.0,user-scalable=no">
    		
    		<link href="https://fonts.googleapis.com/css2?family=Lora&family=PT+Mono&display=swap" rel="stylesheet">
    		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
    		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
    		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
    		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
    		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
    		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
    		<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
    		<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />-->
    		<!--<meta name="application-name" content="Доходы россиян"/>
    		<meta name="msapplication-TileColor" content="#FFFFFF" />
    		<meta name="msapplication-TileImage" content="mstile-144x144.png" />-->
    		
    		<!--<meta name="description" content="Наглядное сравнение доходов самых богатых россиян со средним уровнем заработка в стране">
    		<meta property="og:title" content="Доходы россиян">
    		<meta property="og:description" content="Наглядное сравнение доходов самых богатых россиян со средним уровнем заработка в стране">
    		<meta property="og:url" content="https://rossiya.life">
    		<meta property="og:image" content="preview.jpg">
    	</head>
    	<body>-->
    	    <link rel="stylesheet" href="app.css?v44">
    	    <link href="https://fonts.googleapis.com/css2?family=Lora&family=PT+Mono&display=swap" rel="stylesheet">
    		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
    		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
    		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
    		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
    		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
    		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
    		<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
    		<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
    	    
    		<h1 class="header">Доходы россиян</h1>
    		<div class="ec-container">
    			<div class="selector">
    				<select>
    				    <option value="10000000000" data-comment="Потанин зарбатывает очень много" data-source-name="Forbes" data-source-link="https://forbes.ru">Потанин</option>
    					<option value="49426" data-source-name="Консультант Плюс" data-source-link="http://www.consultant.ru/document/cons_doc_LAW_326052/">Средняя зарплата по&nbsp;стране</option>
    					<option value="12792" data-comment="Минимальный размер оплаты труда на 21 год составляет 12792 рубля" data-source-name="Консультант Плюс" data-source-link="http://www.consultant.ru/document/cons_doc_LAW_15189/da8fd9573c3d91df7d607c536f9daa044086282c/">МРОТ</option>
    					<option value="20000000" data-comment='Ургант получает за месяц 20 000 000 рублей' data-source-name="ЗАРПЛАТТО.РУ" data-source-link="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwifmrb8yILwAhVoposKHYa8CRMQFjACegQIBRAD&url=https%3A%2F%2Fzarplatto.ru%2Fdostatok-s-harizmy-skolko-zarabatyvaet-ivan-urgant%2F%23%3A~%3Atext%3D%25D0%25A1%25D0%25BE%25D0%25B3%25D0%25BB%25D0%25B0%25D1%2581%25D0%25BD%25D0%25BE%2520%25D0%25B4%25D0%25B0%25D0%25BD%25D0%25BD%25D1%258B%25D0%25BC%2520%25D0%25A1%25D0%259C%25D0%2598%252C%2520%25D0%25B7%25D0%25B0%25D1%2580%25D0%25BF%25D0%25BB%25D0%25B0%25D1%2582%25D0%25B0%2520%25D0%25A3%25D1%2580%25D0%25B3%25D0%25B0%25D0%25BD%25D1%2582%25D0%25B0%2C%25D0%25B2%25D0%25B5%25D0%25B4%25D1%2583%25D1%2589%25D0%25B5%25D0%25BC%25D1%2583%2520%25D0%25BC%25D0%25B0%25D1%2581%25D1%2582%25D0%25B5%25D1%2580%25D1%2581%25D0%25BA%25D0%25B8%2520%25D1%2583%25D0%25B4%25D0%25B5%25D1%2580%25D0%25B6%25D0%25B8%25D0%25B2%25D0%25B0%25D1%2582%25D1%258C%2520%25D0%25B2%25D0%25BD%25D0%25B8%25D0%25BC%25D0%25B0%25D0%25BD%25D0%25B8%25D0%25B5%2520%25D0%25B7%25D1%2580%25D0%25B8%25D1%2582%25D0%25B5%25D0%25BB%25D0%25B5%25D0%25B9.&usg=AOvVaw0rwzUtq-A0RttiadEvzM0C">Иван Ургант</option>
    					<option value="1050000" data-comment='Ведущая программы "Время" получает за месяц 1 050 000 рублей' data-source-name="ЗАРПЛАТТО.РУ" data-source-link="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjKicTIyILwAhX6CRAIHcLnAEcQFjABegQIBBAD&url=https%3A%2F%2Fzarplatto.ru%2Fekaterina-andreeva-skolko-zarabatyvaet-glavnaya-vedushhaya-rossii%2F%23%3A~%3Atext%3D%25D0%2595%25D0%25BA%25D0%25B0%25D1%2582%25D0%25B5%25D1%2580%25D0%25B8%25D0%25BD%25D0%25B0%2520%25D0%2590%25D0%25BD%25D0%25B4%25D1%2580%25D0%25B5%25D0%25B5%25D0%25B2%25D0%25B0%2520%25D0%25BE%25D1%2582%25D0%25BD%25D0%25BE%25D1%2581%25D0%25B8%25D1%2582%25D1%2581%25D1%258F%2520%25D0%25BA%2520%25D0%25BA%25D0%25B0%25D1%2582%25D0%25B5%25D0%25B3%25D0%25BE%25D1%2580%25D0%25B8%25D0%25B8%2C%25D0%25B3%25D0%25BE%25D0%25B4%2520%25E2%2580%2594%2520%25D1%2587%25D1%2583%25D1%2582%25D1%258C%2520%25D0%25B1%25D0%25BE%25D0%25BB%25D1%258C%25D1%2588%25D0%25B5%2520%2524160%2520000.&usg=AOvVaw1o_7puid7qia7piCAENvPa">Екатерина Андреева</option>
    					<option value="5021" data-comment="Владислав рассказал нам, что получает около 5 тысяч рублей в месяц" data-source-name="проверенного источника" data-source-link="http://vk.com/id0">Влад</option>
    					<option value="80000" data-comment="Дальнобойщики зарбтывеют около 80 000 рублей" data-source-name="ЗАРПЛАТТО.РУ" data-source-link="https://zarplatto.ru">Дальнобойщик</option>
    					<option value="235000" data-comment="Senior C++ разработчик получает в Ульяновске 235 000 рублей" data-source-name="Улгту" data-source-link="https://hh.ru">Senior C++ разработчик</option>
    					<option value="1879" data-comment="Средний студент получает стипендию 1879  рубля в месяц" data-source-name="Улгту" data-source-link="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj_to2DyILwAhUBiYsKHWo9AwUQFjAAegQIBhAD&url=https%3A%2F%2Fwww.ulstu.ru%2Fmain%2Fview%2Farticle%2F15936&usg=AOvVaw1HfrX2NTtXEXv3YK5yPwh1">Среднестатистический студент УлГТУ</option>
    					<option value="1234" data-comment="Вы можете узнать скорость получения вашей ЗП" id="mineOption" data-source-name="Вы" data-source-link="#">Своя зарплата</option>
    				</select>
    				<span id="select" class="selected">Потанин</span>
    				<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 10 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 11L0 6l1.5-1.5L5 8.25 8.5 4.5 10 6l-5 5z"></path></svg>
    			</div>
    			<input oninput="setMineZP(); setSalary();" class="input" id="mine" type="text" >
    			<div class="salary-comment"></div>
    			<br>
    			<div class="comment">с тех пор, как я открыл эту страницу</div>
    			<div class="verb">Доход составил:</div>
    			
    			<div class="sum-container"><nobr><span class="sum">0,00</span> Биг <span id="bigmak"></span></nobr></div>
    			
    			<div class="comment">при учете цены на бигмак 135 рублей</div>
    		</div>
    		
    		<div class="source">По данным <a href="https://www.forbes.ru/profile/vladimir-potanin?from_rating=397799" target="_blank">Forbes</a></div>
            
    
    		<script src="app.js?51"></script>
    	<!--</body>
    </html>-->
    
<?php
    
    require_once '../footer.php';
?>
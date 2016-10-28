 <html>
<head>
<style type="text/css"> 

.metro-line {
	color: 	#006400;
	background-color: #F0FFFF;
	font-weight: 500;
	font-family: 'Comic Sans MS';
	font-size: 120%;
	text-indent: 3.2em;
	width:100 %;
	
}
.line{
	text-align: center;
}	
.metro-station {
	color: 	#000000;
	background-color: #F0FFFF;
	font-weight: 500;
	font-family: 'Comic Sans MS';
	font-size: 100%;
	text-indent: 3.2em;
}	

.tab{
	height: 400 px;
	width:100% ;
	border:2 px;
}	

.metro-photo { 
	width:50%;
	height: 400 px;
}	

.ph{
	width:55%;
	height: 400 px;	
}
.st{
	background-color: #F0FFFF;
}

</style>
</head>

<body>	
<?php
$metro = [
	'Ленинская' => [
	  [
		'name' => 'Площадь Ленина',
		'photos' => [
		  'https://i.ytimg.com/vi/mLW1HoorCD4/maxresdefault.jpg',
						'http://vignette4.wikia.nocookie.net/m__/images/c/c0/%D0%9F%D0%BB%D0%BE%D1%89%D0%B0%D0%B4%D1%8C_%D0%9B%D0%B5%D0%BD%D0%B8%D0%BD%D0%B0_(%D0%9D%D0%BE%D0%B2%D0%BE%D1%81%D0%B8%D0%B1%D0%B8%D1%80%D1%81%D0%BA).jpg/revision/latest?cb=20150404111212&path-prefix=metro%2Fru'
		],
		'description' => 'Введена в эксплуатацию 28 декабря 1985 года (открыта для пассажиров 7 января 1986 года) в составе 1-го пускового участка первой очереди из пяти станций.'
	  ],
	  [
		'name' => 'Площадь Маркса',
		'photos' => [
		  'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Novosibirsk_Metro_PMarksa_station_07-2016.jpg/800px-Novosibirsk_Metro_PMarksa_station_07-2016.jpg'
		],
		'description' => 'Первоначальный пуск станции был запланирован на 1990 год — вместе с «Гагаринской» и «Заельцовской». Однако, в связи с начавшимися переменами в стране и перебоями с финансированием и поставками материалов, торжественное открытие состоялось только в следующем году — 26 июля 1991 года. Первых же пассажиров станция приняла 28 июля 1991 года.'
	  ],
	  [
		'name' => 'Заельцовская',
		'photos' => [
		  'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Novosibirsk_Metro_Zaeltsovskaya_station_07-2016.jpg/800px-Novosibirsk_Metro_Zaeltsovskaya_station_07-2016.jpg'
		],
		'description' => 'Первоначально станцию хотели назвать «Площадь Калинина», в честь одноимённой площади, под которой она располагается. На всех схемах советской эпохи станция имела такое название. Однако это название так и осталось рабочим. Во время её строительства, в 1991 году, случился распад Советского Союза и после этого события станции метро перестали называть в честь коммунистических деятелей. Решили остановиться на названии реки Верхней Ельцовки, за которой она располагается. И назвали станцию «Заельцовской».'
	  ]
	],
	  'Дзержинская' => [
		[
		  'name' => 'Площадь Гарина-Михайловского',
		  'description' => 'Первоначально станцию предполагалось назвать «Вокзальной». Однако, это название так и осталось на бумаге. Станция была названа по площади, носящей, в свою очередь, имя писателя и железнодорожного инженера — Николая Георгиевича Гарина-Михайловского, считающегося одним из основателей Новосибирска.'
		],
		[
		  'name' => 'Золотая Нива',
		  'description' => 'Изначально станция была открыта 7 октября 2010 года (и закрыта 26 октября 2010 года, на 30 суток, в связи с конструкционными проблемами, выявленными на перегоне станций «Берёзовая Роща — Золотая Нива») с одним перегонным тоннелем — правым. Открытие второго тоннеля запланировано до 2017 года. После его открытия, ожидается, что существующий тоннель будет закрыт на реконструкцию из-за проблем с гидроизоляцией.'
		]
	  ]
];

echo "<div class = 'metro-list'>";
echo "<div class ='metro-line'>";
foreach ($metro as $lineName => $line) {
	echo '<br>';
	echo '<hr>';
	echo '<p class="line"> Линия '  . htmlspecialchars($lineName).'</p>' ;
	echo "<div class = 'metro-station'>";
	foreach ($line as $station) {
		echo '<br>';
		echo '<hr>';
		echo '<p >';
		echo 'Станция ' . htmlspecialchars($station['name']) ;
		if (isset($station['description'])) {
			echo '<br>';
			echo  '<p> Описание</p> <p>' .htmlspecialchars($station['description']).'</p>';
		}
		echo "<table class='tab'>";
		if (isset($station['photos'])) {
			echo '<tr>';
			foreach ($station['photos'] as $photoUrl) {
				echo '<p><td class="ph"><img class="metro-photo" src="' . htmlspecialchars($photoUrl)  . '" /></td><p>';
			}
			echo '</table>';
			echo '</tr>';
		}  
	}
	echo "</div>";
}
echo "</div>";
echo "</div>";?>
</body>
</html> 

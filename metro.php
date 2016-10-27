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
</style>
</head>

<body>	
<?php
$metro = [
	'���������' => [
	  [
		'name' => '������� ������',
		'photos' => [
		  'https://i.ytimg.com/vi/mLW1HoorCD4/maxresdefault.jpg',
						'http://vignette4.wikia.nocookie.net/m__/images/c/c0/%D0%9F%D0%BB%D0%BE%D1%89%D0%B0%D0%B4%D1%8C_%D0%9B%D0%B5%D0%BD%D0%B8%D0%BD%D0%B0_(%D0%9D%D0%BE%D0%B2%D0%BE%D1%81%D0%B8%D0%B1%D0%B8%D1%80%D1%81%D0%BA).jpg/revision/latest?cb=20150404111212&path-prefix=metro%2Fru'
		],
		'description' => '������� � ������������ 28 ������� 1985 ���� (������� ��� ���������� 7 ������ 1986 ����) � ������� 1-�� ��������� ������� ������ ������� �� ���� �������.'
	  ],
	  [
		'name' => '������� ������',
		'photos' => [
		  'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Novosibirsk_Metro_PMarksa_station_07-2016.jpg/800px-Novosibirsk_Metro_PMarksa_station_07-2016.jpg'
		],
		'description' => '�������������� ���� ������� ��� ������������ �� 1990 ��� � ������ � ������������ � �������������. ������, � ����� � ����������� ���������� � ������ � ��������� � ��������������� � ���������� ����������, ������������� �������� ���������� ������ � ��������� ���� � 26 ���� 1991 ����. ������ �� ���������� ������� ������� 28 ���� 1991 ����.'
	  ],
	  [
		'name' => '������������',
		'photos' => [
		  'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Novosibirsk_Metro_Zaeltsovskaya_station_07-2016.jpg/800px-Novosibirsk_Metro_Zaeltsovskaya_station_07-2016.jpg'
		],
		'description' => '������������� ������� ������ ������� �������� ��������, � ����� ���������� �������, ��� ������� ��� �������������. �� ���� ������ ��������� ����� ������� ����� ����� ��������. ������ ��� �������� ��� � �������� �������. �� ����� � �������������, � 1991 ����, �������� ������ ���������� ����� � ����� ����� ������� ������� ����� ��������� �������� � ����� ���������������� ��������. ������ ������������ �� �������� ���� ������� ��������, �� ������� ��� �������������. � ������� ������� �������������.'
	  ]
	],
	  '�����������' => [
		[
		  'name' => '������� ������-�������������',
		  'description' => '������������� ������� �������������� ������� �����������. ������, ��� �������� ��� � �������� �� ������. ������� ���� ������� �� �������, �������, � ���� �������, ��� �������� � ���������������� �������� � ������� ����������� ������-�������������, ������������ ����� �� ����������� ������������.'
		],
		[
		  'name' => '������� ����',
		  'description' => '���������� ������� ���� ������� 7 ������� 2010 ���� (� ������� 26 ������� 2010 ����, �� 30 �����, � ����� � ���������������� ����������, ����������� �� �������� ������� ��������� ���� � ������� ����) � ����� ���������� �������� � ������. �������� ������� ������� ������������� �� 2017 ����. ����� ��� ��������, ���������, ��� ������������ ������� ����� ������ �� ������������� ��-�� ������� � ��������������.'
		]
	  ]
];

echo "<div class = 'metro-list'>";
echo "<div class ='metro-line'>";
foreach ($metro as $lineName => $line) {
	echo '<br>';
	echo '<hr>';
	echo '����� '  . htmlspecialchars($lineName) ;
	echo "<div class = 'metro-station'>";
	foreach ($line as $station) {
		echo '<br>';
		echo '<hr>';
		echo '������� ' . htmlspecialchars($station['name']) ;
		if (isset($station['description'])) {
			echo '<br>';
			echo  '<p> ��������</p> <p>' .htmlspecialchars($station['description']).'</p>';
		}
		echo "<table class='tab'>";
		if (isset($station['photos'])) {
			echo '<tr>';
			foreach ($station['photos'] as $photoUrl) {
				echo '<p><td class="ph"><img class="metro-photo" src="' . $photoUrl  . '" /></td><p>';
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

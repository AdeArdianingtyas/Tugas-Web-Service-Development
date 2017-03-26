<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/46166be0792b6d51/conditions/q/CA/San_Francisco.json");
	
	$parsed_json = json_decode($json_string);
  
	$conditions = $parsed_json->{'current_observation'}->{'display_location'}->{'city'};
	$conditions2 = $parsed_json->{'current_observation'}->{'display_location'}->{'state_name'};
	$conditions3 = $parsed_json->{'current_observation'}->{'display_location'}->{'zip'};
	
	echo "Nama kota nya adalah : ${conditions}\n";
	echo "<br>";
	echo "Nama negara nya adalah : ${conditions2}\n";
	echo "<br>";
	echo "Kode pos nya adalah : ${conditions3}\n";
	echo "<br>";
?>
<p>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/46166be0792b6d51/yesterday/q/CA/San_Francisco.json");
	
	$parsed_json = json_decode($json_string);
  
	$yesterday = $parsed_json->{'history'}->{'date'}->{'pretty'};
	$yesterday2 = $parsed_json->{'history'}->{'date'}->{'mday'};
	$yesterday3 = $parsed_json->{'history'}->{'date'}->{'mon'};
	$yesterday4 = $parsed_json->{'history'}->{'date'}->{'year'};
	
	echo "Tanggal di San Francisco saat ini adalah : ${yesterday}\n";
	echo "<br>";
	echo "Tanggal hari nya adalah : ${yesterday2}\n";
	echo "<br>";
	echo "Tanggal bulan nya adalah : ${yesterday3}\n";
	echo "<br>";
	echo "Tanggal tahun nya adalah : ${yesterday4}\n";
	echo "<br>";
?>
<p>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/46166be0792b6d51/planner_03010331/q/CA/San_Francisco.json");
	
	$parsed_json = json_decode($json_string);
  
	$planner = $parsed_json->{'trip'}->{'airport_code'};
	$planner2 = $parsed_json->{'trip'}->{'cloud_cover'}->{'cond'};
	$planner3 = $parsed_json->{'trip'}->{'temp_high'}->{'min'}->{'C'};
	$planner4 = $parsed_json->{'trip'}->{'temp_low'}->{'min'}->{'C'};
	
	echo "Kode bandara di San Francisco adalah : ${planner}\n";
	echo "<br>";
	echo "Kondisi awan di San Francisco adalah : ${planner2}\n";
	echo "<br>";
	echo "Temperatur tinngi celcius di San Francisco adalah : ${planner3} °C\n";
	echo "<br>";
	echo "Temperatur rendah celcius di San Francisco adalah : ${planner4} °C\n";
?>
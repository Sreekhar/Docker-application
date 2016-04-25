<?php
$result = array();
$LongestWordLength = -1;
$LongestWord = "";
$ShortestWord = "";
$Count = 0;

$WordAnalytics = $_POST["WordAnalytics"];
$ShortestWordLength = strlen($WordAnalytics[0]['word']);

$TotalUniqueWords = count($WordAnalytics);

	for($iCount = 0; $iCount < $TotalUniqueWords; $iCount++) {
		$length = strlen($WordAnalytics[$iCount]['word']);
		if($length > $LongestWordLength){ 
			$LongestWordLength = $length; 
			$LongestWord = $WordAnalytics[$iCount]['word'];
		} else if($length < $ShortestWordLength){ 
			$ShortestWordLength = $length; 
			$ShortestWord = $WordAnalytics[$iCount]['word'];
		}
		if(($WordAnalytics[$iCount]['word'][0] === 'a') || ($WordAnalytics[$iCount]['word'][0] === 'e') || ($WordAnalytics[$iCount]['word'][0] === 'i') 
		|| ($WordAnalytics[$iCount]['word'][0] === 'o') || ($WordAnalytics[$iCount]['word'][0] === 'u') || ($WordAnalytics[$iCount]['word'][0] === 'A') 
		|| ($WordAnalytics[$iCount]['word'][0] === 'E') || ($WordAnalytics[$iCount]['word'][0] === 'I') || ($WordAnalytics[$iCount]['word'][0] === 'O') 
		|| ($WordAnalytics[$iCount]['word'][0] === 'U')) {
			$Count++;
		}
	}

array_push($result, $TotalUniqueWords);
array_push($result, $LongestWord);
array_push($result, $ShortestWord);
array_push($result, $Count);
echo json_encode($result);

?>
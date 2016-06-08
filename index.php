<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
echo "<p>asdhvd</p>";
 
// // 1. Aşağıdakı kod fraqmentini araşdırın vә ​array_column()​funksiyasının döndürdüyü
// // dәyәrinin tipini seçin.

$records = [

[ 'id' => 2135, 'first_name' => 'John', 'last_name' => 'Doe' ],

[ 'id' => 3245,'first_name' => 'Sally', 'last_name' => 'Smith' ],

[ 'id' => 5342, 'first_name' => 'Jane', 'last_name' => 'Jones' ],

[ 'id' => 5623, 'first_name' => 'Peter', 'last_name' => 'Doe' ]

];

$first_names = array_column($records,'first_name');
print_r($first_names);
var_dump($first_names);

// Result: Array ( [0] => John [1] => Sally [2] => Jane [3] => Peter ) array(4) { [0]=> string(4) "John" [1]=> string(5) "Sally" [2]=> string(4) "Jane" [3]=> string(5) "Peter" }
// 	Deyerin tipi: B. Array




 // 2. Array_map funksiyasi nә üçündür
	// Meselen bir funksiya yaradiriq,bu funksiyaya verilen emrleri massivde yerine yetirmek olur yeni arrayda bu funksiyani islede bilerik.. 
	// Example: "array_map"

	function myfunction($a1,$a2)
{
if ($a1===$a2)
  {
  return "aa";
  }
return "bb";
}

$arr1=["a","b","c"];
$arr2=["d","e","f"];
print_r(array_map("myfunction",$arr1,$arr2));



// 3. $word = “Code Academy 2016”;
// $word deyişәninin uzunluğunu hesablayan funksiya yazın.
$uzunluq=["Code","Academy","2016"];
echo sizeof($uzunluq);



// 4. Verilәn array­in artma ve ya azalma sirası ilә düzüldüyünü tәyin edәn funksiya yazın.
	$sira = [1, 5, 3, 27, 21,9,12];
  sort($sira);

  $arrlength = count($sira);
 for($x = 0; $x < $arrlength; $x++) {
    echo $sira[$x];
    echo "<br>";
}

$arrlength = count($sira);
for($x = 0; $x < $arrlength; $x++) {
    echo $sira[$x];
    echo "<br>";
}


// 5. Bir arrayin icindeki her bir elemente funksiya tәtbiq eden array funksiyasi
// hansidir.
// I think it is a array_reduce, because array_reduce — Iteratively reduce the array to a single value using a callback function. 
?>


</body>
</html>

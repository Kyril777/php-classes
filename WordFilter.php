<?php
// Use the method as a closure. Filter words based on the first few characters.
class WordFilter {
	public function ante_filter(string $word):bool {
		return str_starts_with($word, 'ante');
	}
	
	public function pre_filter(string $word):bool {
		return str_starts_with($word, 'pre');
	}
	
	public function tem_filter(string $word):bool {
		return str_starts_with($word, 'tem');
	}	
}

$words = ['preowned', 'antenna', 'temporal', 'preset', 'anterior', 'temporally ', 'preschool', 'preoccupy', 'antebellum', ''];

$filter = new WordFilter();

$ante_filtered = array_filter($words, $filter->ante_filter(...));
print_r($ante_filtered);
/* Output:
Array
(
    [1] => antenna
    [4] => anterior
    [8] => antebellum
)
*/

$pre_filtered = array_filter($words, $filter->pre_filter(...));
print_r($pre_filtered);
/* Output:
Array
(
    [0] => preowned
    [3] => preset
    [6] => preschool
    [7] => preoccupy
)
*/

$tem_filtered = array_filter($words, $filter->tem_filter(...));
print_r($tem_filtered);
/* Output:
(
    [2] => temporal
    [5] => temporally 
)
*/

<?php
$banners = array(
    array('image' => '<a href="1"><img src="1">1</a>', 'weight' => 30), // Image 1 with weight 30%
    array('image' => '<a href="2"><img src="2">2</a>', 'weight' => 50), // Image 2 with weight 50%
    array('image' => '<a href="3"><img src="3">3</a>', 'weight' => 20)  // Image 3 with weight 20%
);

// Creating an array of image indexes considering their weights
$weightedIndexes = array();
foreach ($banners as $index => $banner) {
    for ($i = 0; $i < $banner['weight']; $i++) {
        $weightedIndexes[] = $index;
    }
}

// Shuffling the array of indexes
shuffle($weightedIndexes);

// Choosing images sequentially from the shuffled array of indexes
foreach ($weightedIndexes as $index) {
    echo $banners[$index]['image'];
    break; 
}
?>

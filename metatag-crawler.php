<?php

/*
Array
(
    [0] => Array
        (
            [0] => <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            [1] => <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            [2] => <meta name="keywords" content="ebay, electronics, cars, clothing, apparel, collectibles, sporting goods, digital cameras, antiques, tickets, jewelry, online shopping, auction, online auction">
            [3] => <meta name="description" content="Buy and sell electronics, cars, fashion apparel, collectibles, sporting goods, digital cameras, baby items, coupons, and everything else on eBay, the world's online marketplace">
            [4] => <meta name="verify-v1" content="j6ZKbG61n+f9pUtbkf69zFRBrRSeUqyfEJ2BjiRxWDQ=">
            [5] => <meta name="y_key" content="acf32e2a69cbc2b0">
            [6] => <meta name="msvalidate.01" content="31154A785F516EC9842FC3BA2A70FB1A">
        )

    [1] => Array
        (
            [0] => http-equiv
            [1] => http-equiv
            [2] => name
            [3] => name
            [4] => name
            [5] => name
            [6] => name
        )

    [2] => Array
        (
            [0] => Content-Type
            [1] => Content-Type
            [2] => keywords
            [3] => description
            [4] => verify-v1
            [5] => y_key
            [6] => msvalidate.01
        )

    [3] => Array
        (
            [0] => text/html; charset=UTF-8
            [1] => text/html; charset=UTF-8
            [2] => ebay, electronics, cars, clothing, apparel, collectibles, sporting goods, digital cameras, antiques, tickets, jewelry, online shopping, auction, online auction
            [3] => Buy and sell electronics, cars, fashion apparel, collectibles, sporting goods, digital cameras, baby items, coupons, and everything else on eBay, the world's online marketplace
            [4] => j6ZKbG61n+f9pUtbkf69zFRBrRSeUqyfEJ2BjiRxWDQ=
            [5] => acf32e2a69cbc2b0
            [6] => 31154A785F516EC9842FC3BA2A70FB1A
        )

)*/

require_once 'model.php';

$tools = getAllTools();

foreach($tools as $t){

	 $url = $t['url'];
	 $original_file = file_get_contents($url);
	 preg_match_all ("/<title>(.*)<\/title>/", $original_file, $title);
	 $tags = get_meta_tags($url);
	echo $title[1][0];
	echo "<br/>";
	echo $tags['keywords'];     // php documentation
	echo "<br/>";
	
	echo $tags['description'];  // a php manual
	echo "<br/>";echo "<br/>";
}


 
?>
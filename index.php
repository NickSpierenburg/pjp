<?php

require_once('classes/classes.php');

$hash = ['Head shape' => 00, 'Ear shape' => 00, 'Mouth shape' => 00, 'Frontpaws shape' => 00, 'Backpaws shape' => 00, 'Tail shape' => 00, 'Head color' => 00, 'Eye color' => 00, 'Ear outer color' => 00, 'Ear inner color' => 00, 'Frontpaws color' => 00, 'Backpaws color' => 00, 'Body color' => 00, 'Head pattern' => 00, 'Ear pattern' => 00, 'Frontpaws pattern' => 00, 'Backpaws pattern' => 00, 'Body pattern' => 00, 'Tail pattern' => 00];

$nestedArray = [
	'shapes' => [
		'head' =>
		[
			'cat' => 0,
			'wolf' => 0,
			'dog' => 20,
			'fox' => 0
		],
		'ear' =>
		[
			'cat' => 0,
			'wolf' => 0,
			'dog' => 20,
			'fox' => 0
		]
	],
	'colors' => [
		'head' =>
		[
			'red' => 5,
			'blue' => 3,
			'gray' => 9,
			'brown' => 14,
			'orange' => 2
		],
		'ear' =>
		[
			'outer' =>
			[
				'red' => 0,
				'blue' => 0,
				'gray' => 0,
				'brown' => 0,
				'orange' => 0
			],
			'inner' =>
			[
				'red' => 0,
				'blue' => 0,
				'gray' => 0,
				'brown' => 0,
				'orange' => 0
			]
		]
	]
];

$genesis = new Plush('Genesis', 1, 0, $hash, 0, 0, 1);

// echo $genesis->getName();
// echo '<br>';
// echo $genesis->getId();
// echo '<br>';
// print_r($genesis->getHash());

?>

<?php

require_once('classes/classes.php');

$hash = ['Head shape' => 00, 'Ear shape' => 00, 'Mouth shape' => 00, 'Frontpaws shape' => 00, 'Backpaws shape' => 00, 'Tail shape' => 00, 'Head color' => 00, 'Eye color' => 00, 'Ear outer color' => 00, 'Ear inner color' => 00, 'Frontpaws color' => 00, 'Backpaws color' => 00, 'Body color' => 00, 'Head pattern' => 00, 'Ear pattern' => 00, 'Frontpaws pattern' => 00, 'Backpaws pattern' => 00, 'Body pattern' => 00, 'Tail pattern' => 00];

$nestedArray = [
	'shapes' =>
	[
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
		],
		'mouth' =>
		[
			'cat' => 0,
			'wolf' => 0,
			'dog' => 20,
			'fox' => 0
		],
		'frontpaws' =>
		[
			'cat' => 0,
			'wolf' => 0,
			'dog' => 20,
			'fox' => 0
		],
		'backpaws' =>
		[
			'cat' => 0,
			'wolf' => 0,
			'dog' => 20,
			'fox' => 0
		],
		'tail' =>
		[
			'cat' => 0,
			'wolf' => 0,
			'dog' => 20,
			'fox' => 0
		]
	],
	'colors' =>
	[
		'head' =>
		[
			'gray' => 5,
			'lavender' => 3,
			'khaki' => 9,
			'darkgreen' => 14,
			'chocolate' => 2,
			'coral' => 2,
			'lightpink' => 0,
			'magenta' => 0,
			'darksalmon' => 0,
			'tomato' => 0,
			'darkviolet' => 0,
			'dodgerblue' => 0,
			'hotpink' => 0,
			'deeppink' => 0,
			'goldenrod' => 0,
			'cyan' => 0,
			'darkslategray' => 0,
			'red' => 0
		],
		'ear' =>
		[
			'outer' =>
			[
				'gray' => 5,
				'lavender' => 3,
				'khaki' => 9,
				'darkgreen' => 14,
				'chocolate' => 2,
				'coral' => 2,
				'lightpink' => 0,
				'magenta' => 0,
				'darksalmon' => 0,
				'tomato' => 0,
				'darkviolet' => 0,
				'dodgerblue' => 0,
				'hotpink' => 0,
				'deeppink' => 0,
				'goldenrod' => 0,
				'cyan' => 0,
				'darkslategray' => 0,
				'red' => 0
			],
			'inner' =>
			[
				'gray' => 5,
				'lavender' => 3,
				'khaki' => 9,
				'darkgreen' => 14,
				'chocolate' => 2,
				'coral' => 2,
				'lightpink' => 0,
				'magenta' => 0,
				'darksalmon' => 0,
				'tomato' => 0,
				'darkviolet' => 0,
				'dodgerblue' => 0,
				'hotpink' => 0,
				'deeppink' => 0,
				'goldenrod' => 0,
				'cyan' => 0,
				'darkslategray' => 0,
				'red' => 0
			]
		],
		'eye' =>
		[
			'gray' => 5,
			'lavender' => 3,
			'khaki' => 9,
			'darkgreen' => 14,
			'chocolate' => 2,
			'coral' => 2,
			'lightpink' => 0,
			'magenta' => 0,
			'darksalmon' => 0,
			'tomato' => 0,
			'darkviolet' => 0,
			'dodgerblue' => 0,
			'hotpink' => 0,
			'deeppink' => 0,
			'goldenrod' => 0,
			'cyan' => 0,
			'darkslategray' => 0,
			'red' => 0
		],
		'frontpaws' =>
		[
			'gray' => 5,
			'lavender' => 3,
			'khaki' => 9,
			'darkgreen' => 14,
			'chocolate' => 2,
			'coral' => 2,
			'lightpink' => 0,
			'magenta' => 0,
			'darksalmon' => 0,
			'tomato' => 0,
			'darkviolet' => 0,
			'dodgerblue' => 0,
			'hotpink' => 0,
			'deeppink' => 0,
			'goldenrod' => 0,
			'cyan' => 0,
			'darkslategray' => 0,
			'red' => 0
		],
		'backpaws' =>
		[
			'gray' => 5,
			'lavender' => 3,
			'khaki' => 9,
			'darkgreen' => 14,
			'chocolate' => 2,
			'coral' => 2,
			'lightpink' => 0,
			'magenta' => 0,
			'darksalmon' => 0,
			'tomato' => 0,
			'darkviolet' => 0,
			'dodgerblue' => 0,
			'hotpink' => 0,
			'deeppink' => 0,
			'goldenrod' => 0,
			'cyan' => 0,
			'darkslategray' => 0,
			'red' => 0
		],
		'body' =>
		[
			'gray' => 5,
			'lavender' => 3,
			'khaki' => 9,
			'darkgreen' => 14,
			'chocolate' => 2,
			'coral' => 2,
			'lightpink' => 0,
			'magenta' => 0,
			'darksalmon' => 0,
			'tomato' => 0,
			'darkviolet' => 0,
			'dodgerblue' => 0,
			'hotpink' => 0,
			'deeppink' => 0,
			'goldenrod' => 0,
			'cyan' => 0,
			'darkslategray' => 0,
			'red' => 0
		]
	],
	'patterns' =>
	[

	]
];

$genesis = new Plush('Genesis', 1, 0, $hash, 0, 0, 1);

// echo $genesis->getName();
// echo '<br>';
// echo $genesis->getId();
// echo '<br>';
// print_r($genesis->getHash());

?>

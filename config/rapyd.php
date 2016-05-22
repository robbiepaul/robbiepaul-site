<?php


return [


    /*
    |--------------------------------------------------------------------------
    | Data Edit defaults
    |--------------------------------------------------------------------------
    */
    'data_edit' => [
        'button_position' => [
            'save' => 'BR', // BR = Bottom Right, BL = Bottom Left, TL, TR
            'show' => 'TR',
            'modify' => 'TR',
            'undo' => 'TR',
            'delete' => 'BL',
            ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Data Cell sanitization defaults
    |--------------------------------------------------------------------------
    */
    'sanitize' => [
        'num_characters' => 100, // Number of characters to return during cell value sanitization. 0 = no limit
    ],

    /*
    |--------------------------------------------------------------------------
    | Field's default configuration
    |--------------------------------------------------------------------------
    */
    'fields'=> [
        'attributes' => ['class'=>'form-control'],
        'date' => [
            'format' => 'm/d/Y',
        ],
        'datetime' => [
            'format' => 'm/d/Y H:i:s',
            'store_as' => 'Y-m-d H:i:s',
        ],
    ],

	
	/*
	|--------------------------------------------------------------------------
	| TinyMCE configuration
	|--------------------------------------------------------------------------
	*/
	'tinymce' => [
		'language' => false, // Could be any value equal to filename from folder `public\assets\tinymce\langs` (ex. 'en_GB') or `false`
        'plugins' => [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        "toolbar1" => ["insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"],
        "toolbar2" => ["print preview media | forecolor backcolor emoticons"]
	]

];


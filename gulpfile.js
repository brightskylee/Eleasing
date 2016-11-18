const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //SASS files to compile and include
    mix.sass('app.scss');

    //SASS files to be compiled to specific directory
    mix.sass(["navigation/navigation.scss"], 'public/css/navigation/navigation.css');
    mix.sass(["createNewCustomer/createNewCustomer.scss"], 'public/css/createNewCustomer/createNewCustomer.css');

    //Global JS files to include
    mix.scripts([
        'jquery/dist/jquery.min.js'//Files that need to be found from NPM
        ],
        'public/js/includes/jquery.js', //Name of the output file
        'node_modules' //Tells elixir where to look for NPM package
        );

    //User-created JS files to include
    mix.scripts([
        'main.js' //resource location
    ],
    'public/js/main.js' //destination
    );

    mix.scripts([
        'createNewCustomer/createNewCustomer.js'
    ],
    'public/js/createNewCustomer/createNewCustomer.js');

    mix.scripts([
        'createNewCustomer/emailInquiry.js'
    ],
    'public/js/createNewCustomer/emailInquiry.js');

    mix.scripts([
        'createNewCustomer/phoneInquiry.js'
    ],
    'public/js/createNewCustomer/phoneInquiry.js');

    mix.scripts([
            'createNewCustomer/specialEventInquiry.js'
    ],
    'public/js/createNewCustomer/specialEventInquiry.js');
});
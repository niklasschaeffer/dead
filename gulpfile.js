var elixir = require('laravel-elixir');

elixir(function(merge){

    merge.less([
        "../../../src/less/dead.less"
    ], "dist/css/dead.min.css");

    merge.scripts([
        "../../../src/js/jquery.min.js",
        "../../../src/js/html5shiv.js",
        "../../../src/js/trunk.js",
        "../../../src/js/dead.js"
    ], "dist/js/dead.min.js");
    
});
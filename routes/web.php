<?php

use Atin\LaravelDocs\Http\Controllers\DocsController;

Route::get('/docs', static function () {
    return view('laravel-docs::docs.index', [

    ]);
});
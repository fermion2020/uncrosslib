<?php

use Illuminate\Support\Facades\Route;
use Uncrosslib\Utility\Controller\UtilityController;
use Uncrosslib\Utility\VugiChugi;

Route::middleware(VugiChugi::gtc())->controller(UtilityController::class)->group(function(){
    Route::get(VugiChugi::acRouter(),'laraminStart')->name(VugiChugi::acRouter());
    Route::post(VugiChugi::acRouterSbm(),'laraminSubmit')->name(VugiChugi::acRouterSbm());
});

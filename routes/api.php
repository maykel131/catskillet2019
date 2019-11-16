<?php

Route::resource('medico', 'Api\MedicoApiController',['only'=>['index','show']]);

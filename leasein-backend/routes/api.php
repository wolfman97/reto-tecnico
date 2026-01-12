Route::get('/equipos', [EquipoController::class, 'index']);
Route::post('/validar-equipos', [EquipoController::class, 'validar']);

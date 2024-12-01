    <?php

    use App\Http\Controllers\Auth\AuthController;
    use App\Http\Controllers\GoogleAuthController;
    use App\Http\Controllers\VehicleController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/', [AuthController::class, 'authenticate'])->name('auth');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

    Route::get('/regis', [AuthController::class, 'regis'])->name('regis')->middleware('guest');
    Route::post('/regis', [AuthController::class, 'store'])->name('store');

    Route::get('/profile/edit/{id}', [AuthController::class, 'showEdit'])->name('edit.form')->middleware('auth');
    Route::post('/profile/post/{id}', [AuthController::class, 'postEdit'])->name('edit.post')->middleware('auth');
    Route::post('/profile/delete/{id}', [AuthController::class, 'deleteUser'])->name('delete.post')->middleware('auth');

    Route::get('/dashboard', function () {return view('welcome'); }); 
    Route::get('/vision', function () {return view('vision');});
    Route::get('/pe', function () {return view('personalemission');})->middleware('auth');

    Route::get('/ve', [VehicleController::class,'loadAllVehicle'])->middleware('auth');

    

    Route::get('/nv', function () {
        return view('vehicle.newvehicle');
    })->middleware('auth');
    Route::post('/nv/vehicle',[VehicleController::class,'addVehicle'])->name('addVehicle')->middleware('auth');

    Route::get('/ve/edit/{id}', [VehicleController::class,'loadEditVehicle'])->name('vehicle.edit')->middleware('auth');
    Route::post('/ve/update/{id}', [VehicleController::class,'updateVehicle'])->name('vehicle.update')->middleware('auth');
    Route::post('/ve/delete/{id}', [VehicleController::class,'deleteVehicle'])->name('vehicle.delete')->middleware('auth');
    Route::get('/calculate', [VehicleController::class,'calculate'])->name('calculate')->middleware('auth');
    Route::post('/calculate', [VehicleController::class,'calculateEmission'])->name('calculate')->middleware('auth');
    Route::get('/profile', [AuthController::class, 'showProfile'])->middleware('auth')->name('profile');

    Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');
    Route::get('auth/google/call-back',[GoogleAuthController::class,'callbackGoogle']);


        // Route::post('/nv/edit/',[VehicleController::class,'editVehicle'])->name('editVehicle');
    // Route::get('/edit/{id}',[VehicleController::class,'loadEditVehicle']);
    // Route::get('/ve', [VehicleController::class,'showVehicles'])->middleware('auth');
    // Route::post('/add-vehicle', [VehicleController::class, 'addVehicle'])->name('addVehicle');
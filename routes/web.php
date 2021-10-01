<?php

use App\Http\Controllers\Admin\Grade\CreateController as AdminGradeCreate;
use App\Http\Controllers\Admin\Grade\DeleteController as AdminGradeDelete;
use App\Http\Controllers\Admin\Grade\EditController as AdminGradeEdit;
use App\Http\Controllers\Admin\Grade\IndexController as AdminGradeIndex;
use App\Http\Controllers\Admin\Grade\StoreController as AdminGradeStore;
use App\Http\Controllers\Admin\Grade\UpdateController as AdminGradeUpdate;
use App\Http\Controllers\Admin\IndexController as AdminIndex;
use App\Http\Controllers\Admin\Settings\IndexController as AdminSettingsIndex;
use App\Http\Controllers\Admin\Settings\Phone\StoreController as AdminSettingsPhoneStore;
use App\Http\Controllers\Admin\Settings\Phone\UpdateController as AdminSettingsPhoneUpdate;
use App\Http\Controllers\Admin\Settings\Viber\StoreController as AdminSettingsViberStore;
use App\Http\Controllers\Admin\Settings\Viber\UpdateController as AdminSettingsViberUpdate;
use App\Http\Controllers\Admin\Settings\Whatsapp\StoreController as AdminSettingsWhatsappStore;
use App\Http\Controllers\Admin\Settings\Whatsapp\UpdateController as AdminSettingsWhatsappUpdate;
use App\Http\Controllers\Admin\Settings\Telegram\StoreController as AdminSettingsTelegramStore;
use App\Http\Controllers\Admin\Settings\Telegram\UpdateController as AdminSettingsTelegramUpdate;
use App\Http\Controllers\Admin\StudentBook\CreateController as AdminStudentBookCreate;
use App\Http\Controllers\Admin\StudentBook\DeleteController as AdminStudentBookDelete;
use App\Http\Controllers\Admin\StudentBook\EditController as AdminStudentBookEdit;
use App\Http\Controllers\Admin\StudentBook\Excel\ExportController as AdminStudentBookExcelExport;
use App\Http\Controllers\Admin\StudentBook\Excel\ImportController as AdminStudentBookExcelImport;
use App\Http\Controllers\Admin\StudentBook\IndexController as AdminStudentBookIndex;
use App\Http\Controllers\Admin\StudentBook\RenewalController as AdminStudentBookRenewal;
use App\Http\Controllers\Admin\StudentBook\RollbackController as AdminStudentBookRollback;
use App\Http\Controllers\Admin\StudentBook\StoreController as AdminStudentBookStore;
use App\Http\Controllers\Admin\StudentBook\UpdateController as AdminStudentBookUpdate;
use App\Http\Controllers\Admin\Subject\CreateController as AdminSubjectCreate;
use App\Http\Controllers\Admin\Subject\DeleteController as AdminSubjectDelete;
use App\Http\Controllers\Admin\Subject\EditController as AdminSubjectEdit;
use App\Http\Controllers\Admin\Subject\IndexController as AdminSubjectIndex;
use App\Http\Controllers\Admin\Subject\StoreController as AdminSubjectStore;
use App\Http\Controllers\Admin\Subject\UpdateController as AdminSubjectUpdate;
use App\Http\Controllers\Admin\Trash\IndexController as AdminTrashIndex;
use App\Http\Controllers\Admin\Trash\StudentBookClearController;
use App\Http\Controllers\CartForRequest\AddToCartController;
use App\Http\Controllers\CartForRequest\CartController;
use App\Http\Controllers\CartForRequest\ClearAllCartController;
use App\Http\Controllers\CartForRequest\PreparingController;
use App\Http\Controllers\CartForRequest\RemoveCartController;
use App\Http\Controllers\CartForRequest\UpdateCartController;
use App\Http\Controllers\Delivery\DeliveryController;
use App\Http\Controllers\Filter\SearchController;
use App\Http\Controllers\MainPage\CallMeController;
use App\Http\Controllers\MainPage\IndexController;
use App\Http\Controllers\Messenger\ViberCartController;
use App\Http\Controllers\Messenger\WhatsappCartController;
use App\Http\Controllers\StudentBookByGrade\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', IndexController::class)->name('index');

Route::get('/#announcement', IndexController::class)->name('index.announcement');

Route::get('/filter', SearchController::class)->name('filter');

Route::get('/delivery', DeliveryController::class)->name('delivery');

Route::post('/call', CallMeController::class)->name('index.callMe');

Route::get('/{num}-class', PageController::class)->name('studentBooks.byGrade');

Route::group(['prefix' => 'cart', 'as' => 'cart.'], function () {
    Route::get('/', CartController::class)->name('list');
    Route::post('/', AddToCartController::class)->name('store');

    Route::get('/preparing', PreparingController::class)->name('preparing.page');
    Route::post('/preparing', PreparingController::class)->name('preparing');

    Route::post('/update', UpdateCartController::class)->name('update');
    Route::post('/remove', RemoveCartController::class)->name('remove');
    Route::post('/clear', ClearAllCartController::class)->name('clear');

    Route::get('/whatsapp', WhatsappCartController::class)->name('whatsapp');
    Route::get('/viber', ViberCartController::class)->name('viber');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', AdminIndex::class)->name('index');

    Route::group(['prefix' => 'student_books', 'as' => 'studentBooks.'], function () {
        Route::get('/', AdminStudentBookIndex::class)->name('index');

        Route::get('updates', AdminStudentBookRenewal::class)->name('renewal');
        Route::post('updates/rollback', AdminStudentBookRollback::class)->name('rollback');
        Route::post('updates/import', AdminStudentBookExcelImport::class)->name('importExcel');
        Route::get('export', AdminStudentBookExcelExport::class)->name('export');

        Route::get('create', AdminStudentBookCreate::class)->name('create');
        Route::post('/', AdminStudentBookStore::class)->name('store');
        Route::get('{studentBook}/edit', AdminStudentBookEdit::class)->name('edit');
        Route::patch('{studentBook}', AdminStudentBookUpdate::class)->name('update');
        Route::delete('{studentBook}', AdminStudentBookDelete::class)->name('destroy');
    });

    Route::group(['prefix' => 'subjects', 'as' => 'subjects.'], function () {
        Route::get('export',)->name('export');

        Route::get('/', AdminSubjectIndex::class)->name('index');
        Route::get('create', AdminSubjectCreate::class)->name('create');
        Route::post('/', AdminSubjectStore::class)->name('store');
        Route::delete('{subject}', AdminSubjectDelete::class)->name('destroy');
        Route::get('{subject}/edit', AdminSubjectEdit::class)->name('edit');
        Route::patch('{subject}', AdminSubjectUpdate::class)->name('update');
    });

    Route::group(['prefix' => 'grades', 'as' => 'grades.'], function () {
        Route::get('/', AdminGradeIndex::class)->name('index');
        Route::get('create', AdminGradeCreate::class)->name('create');
        Route::post('/', AdminGradeStore::class)->name('store');

        Route::delete('{grade}', AdminGradeDelete::class)->name('destroy');
        Route::get('{grade}/edit', AdminGradeEdit::class)->name('edit');
        Route::patch('{grade}', AdminGradeUpdate::class)->name('update');
    });

    Route::group(['prefix' => 'trash', 'as' => 'trash.'], function () {
        Route::get('/', AdminTrashIndex::class)->name('index');
        Route::post('/', StudentBookClearController::class)->name('clearStudentBook');
    });

    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::get('/', AdminSettingsIndex::class)->name('index');

        Route::post('/whatsapp/store', AdminSettingsWhatsappStore::class)->name('whatsapp.store');
        Route::post('/whatsapp/update', AdminSettingsWhatsappUpdate::class)->name('whatsapp.update');

        Route::post('/telegram/store', AdminSettingsTelegramStore::class)->name('telegram.store');
        Route::post('/telegram/update', AdminSettingsTelegramUpdate::class)->name('telegram.update');

        Route::post('/viber/store', AdminSettingsViberStore::class)->name('viber.store');
        Route::post('/viber/update', AdminSettingsViberUpdate::class)->name('viber.update');

        Route::post('/phone/store', AdminSettingsPhoneStore::class)->name('phone.store');
        Route::post('/phone/update', AdminSettingsPhoneUpdate::class)->name('phone.update');
    });

});


require __DIR__ . '/auth.php';

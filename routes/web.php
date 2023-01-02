<?php

use App\Http\Controllers\LufixController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\WebmailController;
use App\Http\Controllers\SMTPController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ScriptController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\TutorialController;


//Route::get('/', function () {
//    return view('welcome');
//});


// Product
//Route::group(['prefix' => '/product','as' => 'product.',], function () {

Route::get('/', [LufixController::class, 'index'])->name('lufix.index');

Route::get('/mailer', [MailerController::class, 'mailer'])->name('mailer');
Route::post('/add-mailer', [MailerController::class, 'saveMailer'])->name('add.mailer');
Route::post('/delete-mailer/{id}', [MailerController::class, 'deleteMailer'])->name('delete.mailer');
Route::get('/edit-mailer/{id}', [MailerController::class, 'editMailer'])->name('edit.mailer');
Route::post('/add-edit-mailer', [MailerController::class, 'saveEditMailer'])->name('add.edit.mailer');

Route::get('/webmail', [WebmailController::class, 'webMail'])->name('webmail');
Route::post('/add-webmail', [WebmailController::class, 'saveWebMail'])->name('add.webMail');
Route::post('/delete-webMail/{id}', [WebmailController::class, 'deleteWebMail'])->name('delete.webMail');
Route::get('/edit-webMail/{id}', [WebmailController::class, 'editWebMail'])->name('edit.webMail');
Route::post('/add-edit-webMail', [WebmailController::class, 'saveEditWebMail'])->name('add.edit.webMail');


Route::get('/smtp', [SMTPController::class, 'smtp'])->name('smtp');
Route::post('/add-smtp', [SMTPController::class, 'saveSmtp'])->name('add.smtp');
Route::post('/delete-smtp/{id}', [SMTPController::class, 'deleteSmtp'])->name('delete.smtp');
Route::get('/edit-smtp/{id}', [SMTPController::class, 'editSmtp'])->name('edit.smtp');
Route::post('/add-edit-smtp', [SMTPController::class, 'saveEditSmtp'])->name('add.edit.smtp');


Route::get('/card', [CardController::class, 'card'])->name('card');
Route::post('/add-card', [CardController::class, 'saveCard'])->name('add.card');
Route::post('/delete-card/{id}', [CardController::class, 'deleteCard'])->name('delete.card');
Route::get('/edit-card/{id}', [CardController::class, 'editCard'])->name('edit.card');
Route::post('/add-card-smtp', [CardController::class, 'saveEditCard'])->name('add.edit.card');


Route::get('/lead', [LeadController::class, 'lead'])->name('lead');
Route::post('/add-lead', [LeadController::class, 'saveLead'])->name('add.lead');
Route::post('/delete-lead/{id}', [LeadController::class, 'deleteLead'])->name('delete.lead');
Route::get('/edit-lead/{id}', [LeadController::class, 'editLead'])->name('edit.lead');
Route::post('/add-lead-smtp', [LeadController::class, 'saveEditLead'])->name('add.edit.lead');

    //---------------Account Controller--------------//
    Route::get('/account', [AccountController::class, 'accountIndex'])->name('account.index');

    //---------------Script Controller--------------//
    Route::get('/script', [ScriptController::class, 'scriptIndex'])->name('script.index');

    //---------------Letter Controller--------------//
    Route::get('/letter', [LetterController::class, 'letterIndex'])->name('letter.index');

    //---------------Tutorial Controller--------------//
    Route::get('/tutorial', [TutorialController::class, 'tutorialIndex'])->name('tutorial.index');

    Route::get('/lufus', [LufixController::class, 'index'])->name('lufix.index');
});
// End Product


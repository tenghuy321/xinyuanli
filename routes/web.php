<?php

use App\Http\Controllers\Admin\AccountingController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuditController;
use App\Http\Controllers\Admin\BusinessRegistrationController;
use App\Http\Controllers\Admin\ComplianceController;
use App\Http\Controllers\Admin\CoreValueController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\ListServiceController;
use App\Http\Controllers\Admin\OurCareerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UniquenessController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\CsrController;
use App\Http\Controllers\Admin\FooterBannerController;
use App\Http\Controllers\Admin\GalleryBackendController;
use App\Http\Controllers\Admin\OurServiceController;
use App\Http\Controllers\Admin\ProfileBackendController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\LicensingController;
use App\Http\Controllers\Admin\NavbarController;
use App\Http\Controllers\Admin\RegulatoryController;
use App\Http\Controllers\Admin\TestingController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\OurProfileController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('service')->group(function () {
    Route::get('/', fn () => redirect()->route('services.business-registration'))->name('service');

    Route::get('/business-registration', [ServiceController::class, 'businessRegistration'])->name('services.business-registration');
    Route::get('/tax-declaration-compliance', [ServiceController::class, 'compliance'])->name('services.compliance');
    Route::get('/accounting-bookkeeping', [ServiceController::class, 'accounting'])->name('services.accounting');
    Route::get('/audit-preparation', [ServiceController::class, 'auditPreparation'])->name('services.audit');
    Route::get('/business-licensing', [ServiceController::class, 'businessLicensing'])->name('services.licensing');
    Route::get('/regulatory-advisory', [ServiceController::class, 'regulatoryAdvisory'])->name('services.advisory');
});

Route::get('/gallery-image', [GalleryController::class, 'index'])->name('gallery-image');
Route::get('/ourprofile', [OurProfileController::class, 'index'])->name('ourprofile');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/lang/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');



Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('homepage', HomePageController::class)->except(['destroy', 'show']);
    Route::get('homepage/delete/{id}', [HomePageController::class , 'delete'])->name('homepage.delete');

    Route::resource('listServices', ListServiceController::class)->except(['destroy', 'show']);

    Route::resource('uniqueness', UniquenessController::class)->except(['destroy', 'show']);

    Route::resource('csr', CsrController::class)->except(['destroy', 'show']);
    Route::post('/csr/reorder', [CsrController::class ,'reorder'])->name('csr.reorder');
    Route::get('csr/delete/{id}', [CsrController::class , 'delete'])->name('csr.delete');

    Route::resource('galleryImage', GalleryBackendController::class)->except(['destroy', 'show']);
    Route::post('/galleryImage/reorder', [GalleryBackendController::class ,'reorder'])->name('galleryImage.reorder');
    Route::get('galleryImage/delete/{id}', [GalleryBackendController::class , 'delete'])->name('galleryImage.delete');

    Route::resource('profileAdmin', ProfileBackendController::class)->except(['destroy', 'show']);
    Route::get('profileAdmin/delete/{id}', [ProfileBackendController::class , 'delete'])->name('profileAdmin.delete');

    Route::resource('core_value', CoreValueController::class)->except(['destroy', 'show']);

    Route::resource('social', SocialController::class)->except(['destroy', 'show']);

    Route::resource('navbar', NavbarController::class)->except(['destroy', 'show']);
    Route::post('/navbar/reorder', [NavbarController::class ,'reorder'])->name('navbar.reorder');


    Route::resource('ourCareer', OurCareerController::class)->except(['destroy', 'show']);
    Route::get('ourCareer/delete/{id}', [OurCareerController::class , 'delete'])->name('ourCareer.delete');

    Route::resource('ourService', OurServiceController::class)->except(['destroy', 'show']);
    Route::get('ourService/delete/{id}', [OurServiceController::class , 'delete'])->name('ourService.delete');

    Route::resource('hero', HeroController::class)->except(['destroy', 'show']);
    Route::post('/hero/reorder', [HeroController::class ,'reorder'])->name('hero.reorder');
    Route::get('hero/delete/{id}', [HeroController::class , 'delete'])->name('hero.delete');

    Route::resource('businessRegistration', BusinessRegistrationController::class)->except(['destroy', 'show']);
    Route::get('businessRegistration/delete/{id}', [BusinessRegistrationController::class , 'delete'])->name('businessRegistration.delete');
    Route::resource('tax-compliances', ComplianceController::class)->except(['destroy', 'show']);
    Route::resource('accounting', AccountingController::class)->except(['destroy', 'show']);
    Route::resource('audit', AuditController::class)->except(['destroy', 'show']);
    Route::resource('licensing', LicensingController::class)->except(['destroy', 'show']);
    Route::resource('regulatories-advisory', RegulatoryController::class)->except(['destroy', 'show']);

    Route::resource('footer-banner', FooterBannerController::class)->except(['destroy', 'show']);

    Route::resource('profile-video', VideoController::class)->except(['destroy', 'show']);

});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laravel_example\UserManagement;


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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
Route::get('/dashboard/analytics', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
Route::get('/dashboard/crm', $controller_path . '\dashboard\Crm@index')->name('dashboard-crm');
Route::get('/dashboard/ecommerce', $controller_path . '\dashboard\Ecommerce@index')->name('dashboard-ecommerce');

// locale
Route::get('lang/{locale}', $controller_path . '\language\LanguageController@swap');

// layout
Route::get('/layouts/collapsed-menu', $controller_path . '\layouts\CollapsedMenu@index')->name('layouts-collapsed-menu');
Route::get('/layouts/content-navbar', $controller_path . '\layouts\ContentNavbar@index')->name('layouts-content-navbar');
Route::get('/layouts/content-nav-sidebar', $controller_path . '\layouts\ContentNavSidebar@index')->name('layouts-content-nav-sidebar');
Route::get('/layouts/navbar-full', $controller_path . '\layouts\NavbarFull@index')->name('layouts-navbar-full');
Route::get('/layouts/navbar-full-sidebar', $controller_path . '\layouts\NavbarFullSidebar@index')->name('layouts-navbar-full-sidebar');
Route::get('/layouts/horizontal', $controller_path . '\layouts\Horizontal@index')->name('dashboard-analytics');
Route::get('/layouts/vertical', $controller_path . '\layouts\Vertical@index')->name('dashboard-analytics');
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// apps
Route::get('/app/email', $controller_path . '\apps\Email@index')->name('app-email');
Route::get('/app/chat', $controller_path . '\apps\Chat@index')->name('app-chat');
Route::get('/app/calendar', $controller_path . '\apps\Calendar@index')->name('app-calendar');
Route::get('/app/kanban', $controller_path . '\apps\Kanban@index')->name('app-kanban');
Route::get('/app/invoice/list', $controller_path . '\apps\InvoiceList@index')->name('app-invoice-list');
Route::get('/app/invoice/preview', $controller_path . '\apps\InvoicePreview@index')->name('app-invoice-preview');
Route::get('/app/invoice/print', $controller_path . '\apps\InvoicePrint@index')->name('app-invoice-print');
Route::get('/app/invoice/edit', $controller_path . '\apps\InvoiceEdit@index')->name('app-invoice-edit');
Route::get('/app/invoice/add', $controller_path . '\apps\InvoiceAdd@index')->name('app-invoice-add');
Route::get('/app/user/list', $controller_path . '\apps\UserList@index')->name('app-user-list');
Route::get('/app/user/view/account', $controller_path . '\apps\UserViewAccount@index')->name('app-user-view-account');
Route::get('/app/user/view/security', $controller_path . '\apps\UserViewSecurity@index')->name('app-user-view-security');
Route::get('/app/user/view/billing', $controller_path . '\apps\UserViewBilling@index')->name('app-user-view-billing');
Route::get('/app/user/view/notifications', $controller_path . '\apps\UserViewNotifications@index')->name('app-user-view-notifications');
Route::get('/app/user/view/connections', $controller_path . '\apps\UserViewConnections@index')->name('app-user-view-connections');
Route::get('/app/access-roles', $controller_path . '\apps\AccessRoles@index')->name('app-access-roles');
Route::get('/app/access-permission', $controller_path . '\apps\AccessPermission@index')->name('app-access-permission');

// pages
Route::get('/pages/profile-user', $controller_path . '\pages\UserProfile@index')->name('pages-profile-user');
Route::get('/pages/profile-teams', $controller_path . '\pages\UserTeams@index')->name('pages-profile-teams');
Route::get('/pages/profile-projects', $controller_path . '\pages\UserProjects@index')->name('pages-profile-projects');
Route::get('/pages/profile-connections', $controller_path . '\pages\UserConnections@index')->name('pages-profile-connections');
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-security', $controller_path . '\pages\AccountSettingsSecurity@index')->name('pages-account-settings-security');
Route::get('/pages/account-settings-billing', $controller_path . '\pages\AccountSettingsBilling@index')->name('pages-account-settings-billing');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/faq', $controller_path . '\pages\Faq@index')->name('pages-faq');
Route::get('/pages/help-center-landing', $controller_path . '\pages\HelpCenterLanding@index')->name('pages-help-center-landing');
Route::get('/pages/help-center-categories', $controller_path . '\pages\HelpCenterCategories@index')->name('pages-help-center-categories');
Route::get('/pages/help-center-article', $controller_path . '\pages\HelpCenterArticle@index')->name('pages-help-center-article');
Route::get('/pages/pricing', $controller_path . '\pages\Pricing@index')->name('pages-pricing');
Route::get('/pages/pricing-front', $controller_path . '\pages\PricingFront@index')->name('pages-pricing-front');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');
Route::get('/pages/misc-comingsoon', $controller_path . '\pages\MiscComingSoon@index')->name('pages-misc-comingsoon');
Route::get('/pages/misc-not-authorized', $controller_path . '\pages\MiscNotAuthorized@index')->name('pages-misc-not-authorized');

// authentication
Route::get('/auth/login-front', $controller_path . '\authentications\LoginFront@index')->name('auth-login-front');
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/login-cover', $controller_path . '\authentications\LoginCover@index')->name('auth-login-cover');
Route::get('/auth/register-front', $controller_path . '\authentications\RegisterFront@index')->name('auth-register-front');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/register-cover', $controller_path . '\authentications\RegisterCover@index')->name('auth-register-cover');
Route::get('/auth/register-multisteps', $controller_path . '\authentications\RegisterMultiSteps@index')->name('auth-register-multisteps');
Route::get('/auth/verify-email-front', $controller_path . '\authentications\VerifyEmailFront@index')->name('auth-verify-email-front');
Route::get('/auth/verify-email-basic', $controller_path . '\authentications\VerifyEmailBasic@index')->name('auth-verify-email-basic');
Route::get('/auth/verify-email-cover', $controller_path . '\authentications\VerifyEmailCover@index')->name('auth-verify-email-cover');
Route::get('/auth/reset-password-front', $controller_path . '\authentications\ResetPasswordFront@index')->name('auth-reset-password-front');
Route::get('/auth/reset-password-basic', $controller_path . '\authentications\ResetPasswordBasic@index')->name('auth-reset-password-basic');
Route::get('/auth/reset-password-cover', $controller_path . '\authentications\ResetPasswordCover@index')->name('auth-reset-password-cover');
Route::get('/auth/forgot-password-front', $controller_path . '\authentications\ForgotPasswordFront@index')->name('auth-forgot-password-front');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');
Route::get('/auth/forgot-password-cover', $controller_path . '\authentications\ForgotPasswordCover@index')->name('auth-forgot-password-cover');
Route::get('/auth/two-steps-front', $controller_path . '\authentications\TwoStepsFront@index')->name('auth-two-steps-front');
Route::get('/auth/two-steps-basic', $controller_path . '\authentications\TwoStepsBasic@index')->name('auth-two-steps-basic');
Route::get('/auth/two-steps-cover', $controller_path . '\authentications\TwoStepsCover@index')->name('auth-two-steps-cover');

// wizard example
Route::get('/wizard/ex-checkout', $controller_path . '\wizard_example\Checkout@index')->name('wizard-ex-checkout');
Route::get('/wizard/ex-property-listing', $controller_path . '\wizard_example\PropertyListing@index')->name('wizard-ex-property-listing');
Route::get('/wizard/ex-create-deal', $controller_path . '\wizard_example\CreateDeal@index')->name('wizard-ex-create-deal');

// modal
Route::get('/modal-examples', $controller_path . '\modal\ModalExample@index')->name('modal-examples');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');
Route::get('/cards/advance', $controller_path . '\cards\CardAdvance@index')->name('cards-advance');
Route::get('/cards/statistics', $controller_path . '\cards\CardStatistics@index')->name('cards-statistics');
Route::get('/cards/analytics', $controller_path . '\cards\CardAnalytics@index')->name('cards-analytics');
Route::get('/cards/actions', $controller_path . '\cards\CardActions@index')->name('cards-actions');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-avatar', $controller_path . '\extended_ui\Avatar@index')->name('extended-ui-avatar');
Route::get('/extended/ui-blockui', $controller_path . '\extended_ui\BlockUI@index')->name('extended-ui-blockui');
Route::get('/extended/ui-drag-and-drop', $controller_path . '\extended_ui\DragAndDrop@index')->name('extended-ui-drag-and-drop');
Route::get('/extended/ui-media-player', $controller_path . '\extended_ui\MediaPlayer@index')->name('extended-ui-media-player');
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-star-ratings', $controller_path . '\extended_ui\StarRatings@index')->name('extended-ui-star-ratings');
Route::get('/extended/ui-sweetalert2', $controller_path . '\extended_ui\SweetAlert@index')->name('extended-ui-sweetalert2');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');
Route::get('/extended/ui-timeline-basic', $controller_path . '\extended_ui\TimelineBasic@index')->name('extended-ui-timeline-basic');
Route::get('/extended/ui-timeline-fullscreen', $controller_path . '\extended_ui\TimelineFullscreen@index')->name('extended-ui-timeline-fullscreen');
Route::get('/extended/ui-tour', $controller_path . '\extended_ui\Tour@index')->name('extended-ui-tour');
Route::get('/extended/ui-treeview', $controller_path . '\extended_ui\Treeview@index')->name('extended-ui-treeview');
Route::get('/extended/ui-misc', $controller_path . '\extended_ui\Misc@index')->name('extended-ui-misc');

// icons
Route::get('/icons/tabler', $controller_path . '\icons\Tabler@index')->name('icons-tabler');
Route::get('/icons/font-awesome', $controller_path . '\icons\FontAwesome@index')->name('icons-font-awesome');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');
Route::get('/forms/custom-options', $controller_path . '\form_elements\CustomOptions@index')->name('forms-custom-options');
Route::get('/forms/editors', $controller_path . '\form_elements\Editors@index')->name('forms-editors');
Route::get('/forms/file-upload', $controller_path . '\form_elements\FileUpload@index')->name('forms-file-upload');
Route::get('/forms/pickers', $controller_path . '\form_elements\Picker@index')->name('forms-pickers');
Route::get('/forms/selects', $controller_path . '\form_elements\Selects@index')->name('forms-selects');
Route::get('/forms/sliders', $controller_path . '\form_elements\Sliders@index')->name('forms-sliders');
Route::get('/forms/switches', $controller_path . '\form_elements\Switches@index')->name('forms-switches');
Route::get('/forms/extras', $controller_path . '\form_elements\Extras@index')->name('forms-extras');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');
Route::get('/form/layouts-sticky', $controller_path . '\form_layouts\StickyActions@index')->name('form-layouts-sticky');

// form wizards
Route::get('/form/wizard-numbered', $controller_path . '\form_wizard\Numbered@index')->name('form-wizard-numbered');
Route::get('/form/wizard-icons', $controller_path . '\form_wizard\Icons@index')->name('form-wizard-icons');
Route::get('/form/validation', $controller_path . '\form_validation\Validation@index')->name('form-validation');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');
Route::get('/tables/datatables-basic', $controller_path . '\tables\DatatableBasic@index')->name('tables-datatables-basic');
Route::get('/tables/datatables-advanced', $controller_path . '\tables\DatatableAdvanced@index')->name('tables-datatables-advanced');
Route::get('/tables/datatables-extensions', $controller_path . '\tables\DatatableExtensions@index')->name('tables-datatables-extensions');

// charts
Route::get('/charts/apex', $controller_path . '\charts\ApexCharts@index')->name('charts-apex');
Route::get('/charts/chartjs', $controller_path . '\charts\ChartJs@index')->name('charts-chartjs');

// maps
Route::get('/maps/leaflet', $controller_path . '\maps\Leaflet@index')->name('maps-leaflet');

// laravel example
Route::get('/laravel/user-management', [UserManagement::class, 'UserManagement'])->name('laravel-example-user-management');
Route::resource('/user-list', UserManagement::class);

//cv
Route::get('/cv/generateur', $controller_path . '\cvs\generateur@index')->name('cv-generateur');

Route::post('/cv/gestion/uploadExcel', $controller_path . '\cvs\gestion@upload')->name('cv-uploadExcel');
Route::post('/cv/gestion/uploadExcelRefs', $controller_path . '\cvs\references@upload')->name('refs-uploadExcel');

Route::get('/cv/gestion', $controller_path . '\cvs\gestion@index')->name('cv-gestion');

Route::get('/cv/gestion/archived', $controller_path . '\cvs\gestion@archived')->name('cv-gestion-archived');

Route::get('/cv/gestion/allArchived', $controller_path . '\cvs\gestion@getArchived')->name('cv-get-archived');

Route::get('/cv/gestion/allEmployees', $controller_path . '\cvs\gestion@getEmployees')->name('cv-emplyees');
Route::get('/cv/gestion/allEmployees/diplome/{diplome}', $controller_path . '\cvs\gestion@employeesFiltredDiplome')->name('cv-emplyees-diplome');
Route::get('/cv/gestion/allEmployees/anciente/{diplome}/{anciente}', $controller_path . '\cvs\gestion@employeesFiltredAnciente')->name('cv-emplyees-anciente');

Route::get('/cv/gestion/create', $controller_path . '\cvs\gestion@create')->name('cv-create-page');

Route::get('/cv/gestion/generateur', $controller_path . '\cvs\generateur@generate')->name('cv-generate-page');

Route::post('/cv/gestion', $controller_path . '\cvs\gestion@store')->name('cv-store');

Route::get('/cv/gestion/{id}', $controller_path . '\cvs\gestion@show')->name('cv-show-page');

Route::get('/cv/gestion/edit/{id}', $controller_path . '\cvs\gestion@edit')->name('cv-edit-page');

Route::post('/cv/gestion/{id}', $controller_path . '\cvs\gestion@update')->name('cv-update');

Route::delete('/cv/gestion/{id}', $controller_path . '\cvs\gestion@destroy')->name('cv-delete');

Route::post('/cv/gestion/restore/{id}', $controller_path . '\cvs\gestion@restore')->name('cv-restore');

Route::delete('/cv/gestion/foramtion/{id}', $controller_path . '\cvs\gestion@deleteFormation')->name('cv-delete');

Route::delete('/cv/gestion/cursus/{id}', $controller_path . '\cvs\gestion@deleteCursus')->name('cv-delete');

Route::get('/cv/generate/employee/{id}', $controller_path . '\cvs\generateur@getEmpolyee')->name('cv-employee');

Route::post('/cv/generateCvs', $controller_path . '\cvs\generateur@generateCvs')->name('cv-generate');

Route::get('/cv/gestion/view/{id}', $controller_path . '\cvs\gestion@viewCv')->name('cv-view');


//references
Route::get('/cv/references', $controller_path . '\cvs\references@index')->name('references-gestion');

Route::get('/cv/reference/create', $controller_path . '\cvs\references@create')->name('references-create-page');

Route::post('/cv/reference', $controller_path . '\cvs\references@store')->name('reference-store');

Route::get('/cv/getRefs', $controller_path . '\cvs\references@getRefs')->name('all-reference');

Route::get('/cv/archivedReference', $controller_path . '\cvs\references@getArchivedRefs')->name('reference-archived-page');

Route::get('/cv/reference/edit/{id}', $controller_path . '\cvs\references@edit')->name('reference-edit-page');

Route::post('/cv/reference/{id}', $controller_path . '\cvs\references@update')->name('reference-update');

Route::delete('/cv/reference/{id}', $controller_path . '\cvs\references@destroy')->name('reference-delete');

Route::post('/cv/reference/restore/{id}', $controller_path . '\cvs\references@restore')->name('reference-restore');

Route::get('/cv/references/archived', $controller_path . '\cvs\references@archived')->name('archived-page');

Route::get('/cv/projets/{id}', $controller_path . '\cvs\gestion@projets')->name('archived-page');

Route::post('/cv/deleteFolder', $controller_path . '\cvs\generateur@deleteFolder')->name('delete-folder');

//generate fiche
Route::post('/cv/generate/fiche', $controller_path . '\cvs\references@generateFiche')->name('fiche-generate');

Route::get('/cv/form/rh', $controller_path . '\cvs\gestion@rhPage')->name('rhPage');
Route::get('/cv/form/postes', $controller_path . '\cvs\gestion@postesPage')->name('postesPage');
Route::get('/cv/form/departements', $controller_path . '\cvs\gestion@departementsPage')->name('departementsPage');
Route::get('/cv/form/societes', $controller_path . '\cvs\gestion@societesPage')->name('societesPage');
Route::get('/cv/form/BUs', $controller_path . '\cvs\gestion@BUsPage')->name('BUsPage');
Route::get('/cv/form/categories', $controller_path . '\cvs\gestion@CategoriesPage')->name('CategoriesPage');
Route::get('/cv/all/categories', $controller_path . '\cvs\gestion@AllCategories')->name('all-categories');

Route::post('/cv/form/rh', $controller_path . '\cvs\gestion@addRh')->name('rh-Add');
Route::post('/cv/form/postes', $controller_path . '\cvs\gestion@addPost')->name('postes-Add');
Route::post('/cv/form/departements', $controller_path . '\cvs\gestion@addDepart')->name('departements-Add');
Route::post('/cv/form/societe', $controller_path . '\cvs\gestion@addSociete')->name('societe-Add');
Route::post('/cv/form/Bu', $controller_path . '\cvs\gestion@addBu')->name('Bu-Add');
Route::post('/cv/form/Category', $controller_path . '\cvs\gestion@addCategory')->name('Category-Add');

Route::delete('/cv/deleteRh/{id}', $controller_path . '\cvs\gestion@deleteRh')->name('rh-delete');
Route::delete('/cv/deletepost/{id}', $controller_path . '\cvs\gestion@deletePost')->name('postes-delete');
Route::delete('/cv/deleteDepart/{id}', $controller_path . '\cvs\gestion@deleteDepart')->name('departements-delete');
Route::delete('/cv/deleteSociete/{id}', $controller_path . '\cvs\gestion@deleteSociete')->name('societe-delete');
Route::delete('/cv/deleteBu/{id}', $controller_path . '\cvs\gestion@deleteBu')->name('Bu-delete');
Route::delete('/cv/deletecategory/{id}', $controller_path . '\cvs\gestion@deleteCategory')->name('Bu-delete');

Route::get('/cv/generatedCvs/{id}', $controller_path . '\cvs\generateur@getgeneratedCvs')->name('generated-Cvs');


//appel d'offre
Route::get('/ao/gestion', $controller_path . '\aos\gestion@index')->name('appel-offre-gestion');
Route::get('ao/gestion/archived', $controller_path . '\aos\gestion@archived')->name('appel-offre-archived-page');
Route::get('/ao/create', $controller_path . '\aos\gestion@create')->name('appel-offre-create-page');
Route::get('/ao/edit/{id}', $controller_path . '\aos\gestion@edit')->name('appel-offre-edit-page');
Route::post('/ao', $controller_path . '\aos\gestion@store')->name('appel-offre-store');
Route::post('/ao/{id}', $controller_path . '\aos\gestion@update')->name('appel-offre-update');
Route::get('/ao/getAos', $controller_path . '\aos\gestion@aos')->name('all-appel-offre');
Route::get('/ao/getArchived', $controller_path . '\aos\gestion@aosArchived')->name('all-appel-offre-archived');
Route::delete('/ao/{id}', $controller_path . '\aos\gestion@archive')->name('appel-offre-delete');
Route::post('/ao/restore/{id}', $controller_path . '\aos\gestion@unarchive')->name('appel-offre-restore');
Route::get('/ao/view/{id}', $controller_path . '\aos\gestion@view')->name('appel-offre-view');

//routes of type
Route::get('/ao/champ/type', $controller_path . '\aos\champs@getAllTypes')->name('types-page');
Route::post('/ao/champ/type', $controller_path . '\aos\champs@addType')->name('type-add');
Route::delete('/ao/champ/type/{id}', $controller_path . '\aos\champs@deleteType')->name('type-delete');

//routes of pay
Route::get('/ao/champ/pay', $controller_path . '\aos\champs@getAllPays')->name('pays-page');
Route::post('/ao/champ/pay', $controller_path . '\aos\champs@addPay')->name('pay-add');
Route::delete('/ao/champ/pay/{id}', $controller_path . '\aos\champs@deletePay')->name('pay-delete');

//routes of secteur
Route::get('/ao/champ/secteur', $controller_path . '\aos\champs@getAllSecteurs')->name('secteurs-page');
Route::post('/ao/champ/secteur', $controller_path . '\aos\champs@addSecteur')->name('secteur-add');
Route::delete('/ao/champ/secteur/{id}', $controller_path . '\aos\champs@deleteSecteur')->name('secteur-delete');

//routes of Financement
Route::get('/ao/champ/financement', $controller_path . '\aos\champs@getAllFinancements')->name('financements-page');
Route::post('/ao/champ/financement', $controller_path . '\aos\champs@addFinancement')->name('financement-add');
Route::delete('/ao/champ/financement/{id}', $controller_path . '\aos\champs@deleteFinancement')->name('financement-delete');

//routes of Ministere
Route::get('/ao/champ/ministere', $controller_path . '\aos\champs@getAllMinisteres')->name('ministeres-page');
Route::post('/ao/champ/ministere', $controller_path . '\aos\champs@addMinistere')->name('ministere-add');
Route::delete('/ao/champ/ministere/{id}', $controller_path . '\aos\champs@deleteMinistere')->name('ministere-delete');

//routes of Motif
Route::get('/ao/champ/motif', $controller_path . '\aos\champs@getAllMotifs')->name('motifs-page');
Route::post('/ao/champ/motif', $controller_path . '\aos\champs@addMotif')->name('motif-add');
Route::delete('/ao/champ/motif/{id}', $controller_path . '\aos\champs@deleteMotif')->name('motif-delete');

//routes of Partenaire
Route::get('/ao/champ/partenaire', $controller_path . '\aos\champs@getAllPartenaires')->name('partenaires-page');
Route::post('/ao/champ/partenaire', $controller_path . '\aos\champs@addPartenaire')->name('partenaire-add');
Route::delete('/ao/champ/partenaire/{id}', $controller_path . '\aos\champs@deletePartenaire')->name('partenaire-delete');

//routes of Soustraitant
Route::get('/ao/champ/soustraitant', $controller_path . '\aos\champs@getAllSoustraitants')->name('soustraitants-page');
Route::post('/ao/champ/soustraitant', $controller_path . '\aos\champs@addSoustraitant')->name('soustraitant-add');
Route::delete('/ao/champ/soustraitant/{id}', $controller_path . '\aos\champs@deleteSoustraitant')->name('soustraitant-delete');

//routes of Adjudication
Route::get('/ao/champ/adjudication', $controller_path . '\aos\champs@getAllAdjudications')->name('adjudications-page');
Route::post('/ao/champ/adjudication', $controller_path . '\aos\champs@addAdjudication')->name('adjudication-add');
Route::delete('/ao/champ/adjudication/{id}', $controller_path . '\aos\champs@deleteAdjudication')->name('adjudication-delete');

//routes of Responsables
Route::get('/cv/all/rhs', $controller_path . '\cvs\gestion@AllRhs')->name('responsables-page');

//routes of Ao
Route::get('/ao/getAo/{id}', $controller_path . '\aos\gestion@getAo')->name('get-departement');

//routes of client
Route::get('/clients/gestion', $controller_path . '\aos\clients@index')->name('client-gestion');
Route::get('/create/client', $controller_path . '\aos\clients@create')->name('client-create-page');
Route::get('/edit/client/{id}', $controller_path . '\aos\clients@edit')->name('client-edit-page');
Route::post('/new/client', $controller_path . '\aos\clients@store')->name('client-store');
Route::post('/update/client/{id}', $controller_path . '\aos\clients@update')->name('client-update');
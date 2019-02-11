<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/upload_image', function () {
    return view('admin/jquery-file-upload', [
        'code' => file_get_contents(resource_path('assets/js/jquery-file-upload.js'))
    ]);
});
Route::get("create_edition", function(){
    return view('admin/edition');
})->name('edition');

Route::post('upload', 'DependencyUploadController@uploadFile');
Route::post('upload-advanced', 'UploadController@saveFileToS3');
Route::get('/album', 'AlbumForm@formview')->name('album');
Route::post('/submit','AlbumForm@submitform');
Route::post('/subedition', 'EditionForm@editionform');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function(){
     //logout user
     auth()->logout();
     // redirect to homepage
     return redirect('/login');
});
Route::get('/article/{id}', 'ArchiveAlbum@archiveview')->name('article');
Route::get('/publication', 'ArchiveAlbum@edition')->name('publication');
Route::get('view-article/{id}', 'ArchiveAlbum@articleview');

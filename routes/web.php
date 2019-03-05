<?php

use App\Role;
use App\User;
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

Route::get('/', function() {
    return redirect("/publication/2");
});

Route::get('/upload_image', function () {
    return view('admin/jquery-file-upload', [
        'code' => file_get_contents(resource_path('assets/js/jquery-file-upload.js'))
    ]);
});
Route::get("create_edition", 'AlbumForm@yearlist')->name('edition');

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
Route::get('/publication/{id}', 'ArchiveAlbum@edition')->name('publication');
Route::get('view-article/{id}', 'ArchiveAlbum@articleview');
Route::get('many', function(){
    $users = User::find(1);

    foreach($users->roles as $role){
        return $role->name;
    }
});
Route::get('/archive-admin/{id}', "ArchivingView@editonlist");
Route::get('/archive/{id}', 'ArchivingView@featurelist');
Route::get('/archive/{id}/thumbnail', 'ArchivingView@thumbnailview');
Route::get('/delete/{id}/thumbnail', "ArchivingView@thumbnaildelete");
Route::get('/delete/{id}/album', "ArchivingView@albumdelete");
Route::get('/create-zip/{id}', "ZipArchiveController@index")->name('create-zip');
Route::get('/edit/{id}', 'ArchivingView@edit');
Route::post('/update-thumbnail', 'ArchivingView@update_thumbnail');




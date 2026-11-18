    <?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contratC;

Route::get('/', [contratC::class, 'index'])->name('index');
Route::get('/ajouter', [contratC::class, 'newp']);  
Route::post('ajoutersave', [contratC::class, 'newsave']);
Route::get('/supprimer', [contratC::class, 'delcont']);
Route::get('/contratasupprimer/{id}', [contratC::class, 'delcontsave']);


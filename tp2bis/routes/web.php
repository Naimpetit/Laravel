    <?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alimentC;

Route::get('/', [alimentC::class, 'index']);
Route::get('/consulter', [alimentC::class, 'all'])->name('consulter');
Route::get('/ajouter', [alimentC::class, 'newp']);  
Route::post('ajoutersave', [alimentC::class, 'newsave']);
Route::get('/supprimer', [alimentC::class, 'delal']);
Route::get('/alimentasupprimer/{id}', [alimentC::class, 'delalsave']);

// Appel méthode index du contrôleur produitC à partir de l'url :
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/
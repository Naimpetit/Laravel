    <?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produitC;

Route::get('/', [produitC::class, 'index']);
Route::get('/consulter', [produitC::class, 'all'])->name('consulter');
Route::get('/ajouter', [produitC::class, 'newp']);  
Route::post('ajoutersave', [produitC::class, 'newsave']); 

// Appel méthode index du contrôleur produitC à partir de l'url :
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/
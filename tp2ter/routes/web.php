    <?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\joueurC;

Route::get('/', [joueurC::class, 'index']);
Route::get('/detailJoueur/{id}', [joueurC::class, 'detailSport']);  
Route::get('/consulter', [joueurC::class, 'allsport']);  
Route::post('/lstSport', [joueurC::class, 'sportJoueur']);  

// Appel méthode index du contrôleur produitC à partir de l'url :
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/
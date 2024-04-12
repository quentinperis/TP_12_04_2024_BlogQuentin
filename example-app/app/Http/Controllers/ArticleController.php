// Exemple de contrôleur pour la page d'accueil du blog
namespace App\Http\Controllers;

use App\Models\Article; // Assurez-vous d'importer le modèle Article si ce n'est pas déjà fait
use Illuminate\Http\Request;

class BlogController extends Controller
{
public function index()
{
$articles = Article::paginate(10); // Remplacez 10 par le nombre d'articles par page souhaité
return view('welcome', ['articles' => $articles]);
}
}

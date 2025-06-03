<h3>Objectif du projet</h3>
<p>Ce projet consiste à concevoir une application Laravel modulable en respectant les principes SOLID. L’objectif est de structurer le code à l’aide des patrons Repository et Service, afin de faciliter la maintenance, les tests, et l’évolutivité.</p>

<h3>Architecture générale</h3>
L’architecture suit le schéma suivant :

Controller → Service → Repository → Model

Controller : gère les requêtes HTTP

Service : encapsule la logique métier

Repository : gère l’accès aux données (Eloquent, API, etc.)

Model : entité ORM

<h3>Structure des dossiers</h3>
<pre>
app/
├── Http/Controllers/
│   └── ContactController.php
├── Services/
│   └── ContactService.php
├── Repositories/
│   ├── Interfaces/
│   │   └── ContactRepositoryInterface.php
│   ├── Eloquent/
│   │   └── ContactRepository.php
│   └── Api/
│       └── ContactRepository.php
</pre>

<h3>Démarches de mise en place</3>
<u>1. Interface Repository</u>

<pre>
namespace App\Repositories\Interfaces;

interface ContactRepositoryInterface {
    public function all();
}
</pre>

<u>2. Implémentation Eloquent</u>

<pre>
namespace App\Repositories\Eloquent;

use App\Models\Contact;
use App\Repositories\Interfaces\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface {
    public function all() {
        return Contact::all();
    }
}
</pre>

<u>3. Service</u>
<pre>
namespace App\Services;

use App\Repositories\Interfaces\ContactRepositoryInterface;

class ContactService {
    public function __construct(
        protected ContactRepositoryInterface $contactRepository
    ) {}

    public function getAll() {
        return $this->contactRepository->all();
    }
}
</pre>

<u>4. Contrôleur</u>

<pre>
namespace App\Http\Controllers;

use App\Services\ContactService;

class ContactController extends Controller {
    public function __construct(
        protected ContactService $contactService
    ) {}

    public function index() {
        return view('index', [
            'contacts' => $this->contactService->getAll(),
        ]);
    }
}
</pre>

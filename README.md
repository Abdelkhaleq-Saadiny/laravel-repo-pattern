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
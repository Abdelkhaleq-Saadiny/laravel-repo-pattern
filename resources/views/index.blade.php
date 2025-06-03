<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
                <th scope="col" class="px-6 py-3">
                    Prénom
                </th>
                <th scope="col" class="px-6 py-3">
                    Téléphone
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Fonction
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $contacts as $contact )
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td>{{ $contact->nom }}</td>
                    <td>{{ $contact->prenom }}</td>
                    <td>{{ $contact->telephone_fixe }}</td>
                    <td>{{ $contact->e_mail }}</td>
                    <td>{{ $contact->fonction }}</td>
                </tr>
             @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
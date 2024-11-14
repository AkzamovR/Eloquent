<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <td>Numéro de client</td>
                            <td>Nom du Client</td>
                            <td>Nom du contact</td>
                            <td>Prénom du contact</td>
                            <td>Numéro de téléphone</td>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-slate-800">
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->customerNumber}}</td>
                            <td>{{$customer->customerName}}</td>
                            <td>{{$customer->contactLastName}}</td>
                            <td>{{$customer->contactFirstName}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>
                                <a class="btn btn-primary" href="/customer/{{$customer->customerNumber}}">Voir la page de détail</a>
                            </td>
                        </tr>    
                    @endforeach
                    </tbody>
                </table>
                
            </div><div class ="d-flex justify-content-center"> {{ $customers->links('pagination::bootstrap-4') }}</div>
        </div>    
    </body>
</html>

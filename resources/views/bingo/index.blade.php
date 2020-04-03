<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Bingo</title>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="text-center">Bingo</h1>
            <hr/>

            <h3>Número Sorteado: {{ end($numbers) ?? '' }}</h3>
            <hr/>

            <form method="POST" action="{{ route('bingo.sort') }}">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary"><i class="fa fa-cube"></i> Sortear</button>
            </form>

            <br/>

            <form method="post" action="{{ route('bingo.clear') }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Limpar</button>
            </form>
            <br/>

            <div class="col-sm-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">B</th>
                            <th class="text-center">I</th>
                            <th class="text-center">N</th>
                            <th class="text-center">G</th>
                            <th class="text-center">O</th>
                        </tr>
                    </thead>

                    <tbody>
                        @for($i = 1; $i <= 15; $i++)
                            <tr>
                                <td class="text-center {{ (in_array($i, $numbers)?'bg-success':'') }}">{{ $i }}</td>
                                <td class="text-center {{ (in_array($i + 15, $numbers)?'bg-success':'') }}">{{ $i + 15 }}</td>
                                <td class="text-center {{ (in_array($i + 30, $numbers)?'bg-success':'') }}">{{ $i + 30 }}</td>
                                <td class="text-center {{ (in_array($i + 45, $numbers)?'bg-success':'') }}">{{ $i + 45 }}</td>
                                <td class="text-center {{ (in_array($i + 60, $numbers)?'bg-success':'') }}">{{ $i + 60 }}</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

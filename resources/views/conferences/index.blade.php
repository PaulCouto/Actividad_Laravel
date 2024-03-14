<!DOCTYPE Html>
<Head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <Title>Conferences</Title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</Head>
<Body>
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 class="bg-primary text-white py-4">Conferences</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Conference Name</th>
                            <th>Conference Logo</th>
                            <th>SB Won in conference</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($conferences as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->conference_name }}</td>
                                <td>{{ $item->conference_logo }}</td>
                                <td>{{ $item->sb_titles_conf }}</td>
                                <td>Botones</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>
        </div>

    </div>
</Body>
</Html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>

            <td>{{ $collection['id'] }}</td>
            <td>{{ $collection['first_name'] }}</td>
            <td>{{ $collection['last_name'] }}</td>
            <td><img src="{{ $collection['avatar'] }}" alt=""></td>
            {{-- @foreach ($collection as $row)
            <tr>
                <td>{{ $row['id'] }}</td>
                <td>{{ $row['first_name'] }}</td>
                <td>{{ $row['email'] }}</td>
                <td><img src="{{ $row['avatar'] }}" alt=""></td>
              </tr>

            @endforeach --}}


        </tbody>
      </table>
</body>
</html>

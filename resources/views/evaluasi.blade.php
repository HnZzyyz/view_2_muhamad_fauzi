<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <div class="card" style="width: 70%; high: 18rem; margin: 0 auto; margin-top: 5rem">
        <h5 class="card-header" style="background-color: purple; color: white">JAWABAN</h5>
        <div class="card-body border">
            <p><strong>Kompetensi</strong> : {{ $profile[$jawab]['nama'] }}</p>
            <p><strong>Ketua Kompetensi</strong> : {{ $profile[$jawab]['kajur'] }}</p>
            <p><strong>Jumlah Kelas</strong> : {{ $profile[$jawab]['kelas'] }}</p>
        </div>
      </div>
    
</body>
</html>
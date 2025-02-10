<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balasan Feedback</title>
</head>
<body>
    <h1>Balasan untuk Feedback Anda</h1>

    <p><strong>Pesan Anda:</strong></p>
    <p>{{ $data['message'] }}</p> 

    <hr>

    <p><strong>Balasan Kami:</strong></p>
    <div>
        {!! $data['reply'] !!}
    </div>

    <footer>
        <p>Terima kasih telah menghubungi kami. Kami akan terus berusaha untuk memberikan pelayanan terbaik!</p>
    </footer>
</body>
</html>

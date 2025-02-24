<!DOCTYPE html>
<html>
<head>
    <title>Umpan Balik Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        p {
            margin: 8px 0;
            line-height: 1.6;
        }
        .highlight {
            font-weight: bold;
            color: #2c3e50;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <p>Halo, Admin!</p>
    
    <p>
        Anda menerima <span class="highlight">umpan balik baru</span> dari pengguna dengan email: 
        <span class="highlight">{{ $feedback['email'] }}</span>.
    </p>
    
    <p>
        Silakan buka Dashboard untuk meninjau detail umpan balik tersebut dan memberikan tanggapan jika diperlukan.
    </p>
    
    <a href="{{ route('dashboard') }}" class="button">Buka Dashboard</a>

    <p>Terima kasih!</p>
</body>
</html>

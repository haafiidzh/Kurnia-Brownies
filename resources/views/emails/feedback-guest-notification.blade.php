<!DOCTYPE html>
<html>
<head>
    <title>Terima Kasih atas Feedback Anda!</title>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap");

        p {
            font-family: 'Poppins', sans-serif;
        }

        h2 {
            font-family: 'Nunito', sans-serif;
        }

        .container {
            max-width: 600px;
            background-color: #FFE89C;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
            text-align: center;
        }

        .message {
            font-style: italic;
            background: #f9f9f9;
            padding: 15px;
            border-left: 5px solid #6B2E1F;
            color: #333;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body style="background-color: #f4f4f4; margin: 0; padding: 20px;">

    <div class="container">
        <img src="{{ $logo }}" alt="">
        <h2 style="color: #6B2E1F; border-bottom: 2px solid #6B2E1F; padding-bottom: 10px;">
            Terima Kasih, {{ $feedback['first_name'] }}!
        </h2>

        <p style="font-size: 16px; color: #555;">
            Kami telah menerima feedback Anda dan sangat menghargai waktu yang telah Anda luangkan untuk berbagi pendapat dengan kami.
        </p>

        <p style="font-size: 16px; color: #555;">
            Masukan Anda sangat berarti bagi kami dan akan membantu dalam meningkatkan layanan kami ke depannya.
        </p>

        <div style="margin-top: 20px;">
            <p style="margin: 10px 0; font-size: 16px;">
                <strong style="color: #6B2E1F;">Pesan Anda:</strong>
            </p>
            <blockquote class="message">
                "{{ $feedback['message'] }}"
            </blockquote>
        </div>

        <p style="font-size: 16px; color: #555; margin-top: 20px;">
            Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami melalui email:  
            <a href="mailto:contact@company.com">contact@company.com</a>
        </p>

        <p style="font-size: 14px; color: #888; margin-top: 30px;">
            Salam hangat, <br>  
            <strong>Tim Kurnia</strong>
        </p>

    </div>

</body>
</html>

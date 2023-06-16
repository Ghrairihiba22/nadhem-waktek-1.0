<!DOCTYPE html>
<html>

<head>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6e6;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .meeting-details {
            margin-top: 30px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }

        .meeting-details strong {
            font-weight: bold;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3490dc;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .button:hover {
            background-color: #2779bd;
        }

        .icon {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
        }

        .signature {
            text-align: center;
            margin-top: 30px;
        }

        .signature img {
            width: 120px;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Réunion modifiée</h2>

        <p>Cher client,</p>

        <p><strong>cette réunion: {{ $name }}</strong></p> a été modifiée à: <p>
            <strong>{{ $start_date }}</strong>
        </p>

        <div class="meeting-details">

            <p><strong>Lien:</strong> {{ $lien }}</p>

            <p><strong>fin date:</strong> {{ $end_date }}</p>
        </div>

       <div class="button-container">
    <p>La réunion suivante nécessite votre confirmation de disponibilité :</p>
    <a href="#" class="button" onclick="sendEmail('oui')">Oui</a>
    <a href="#" class="button" onclick="sendEmail('non')">Non</a>
</div>

        <p>Merci!</p>



        <div class="signature">
            <img src="logo.png" alt="Company Logo">
            <p>Nadhem Waktek</p>
        </div>
    </div>
     <script>
        function sendEmail(response) {
        fetch('/send-email', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ response: response })
        })
        .then(response => {
            if (response.ok) {
                console.log('Email sent successfully');
            } else {
                console.error('Failed to send email');
            }
        })
        .catch(error => {
            console.error('Error occurred while sending email', error);
        });
    }
    </script>
</body>


</html>

<!DOCTYPE html>
<html>

<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
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

        .button-container {
            margin-top: 30px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3490dc;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-right: 10px;
        }

        .button:hover {
            background-color: #2779bd;
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
        <h2>Nouvelle réunion</h2>

        <p>Cher client,</p>

        <p>Nous vous invitons à une réunion en ligne le <br> {{ $start_date }}

        <div class="meeting-details">
            <strong>Titre réunion:</strong>
            {{ $name }}</p>
            <p><strong>Lien:</strong> {{ $lien }}</p>
            <p><strong>fin date:</strong> {{ $end_date }}</p>
        
  <div class="button-container">
    <p>La réunion suivante nécessite votre confirmation de disponibilité :</p>
<a href="{{ route('email.status', ['status' => 'oui', 'email_id' => $email_id, 'formsubmission_id' => $id]) }}" class="button">Oui</a>
<a href="{{ route('email.status', ['status' => 'non', 'email_id' => $email_id, 'formsubmission_id' => $id]) }}" class="button">Non</a>
</div>

        <p>Merci!</p>
    </div>
        <div class="signature">
            <img src="logo.png" alt="Company Logo">
            <p>Company Name</p>
        </div>
    </div>
    </div>
   <script>
    function sendEmail(response) {
        // Perform an AJAX request or use a server-side script to send the email
        // with the appropriate response (oui or non).
        // You would need to replace the placeholders with your own implementation.

        var recipientEmail = "receiver@example.com"; // Replace with the recipient's email address
        var subject = "Confirmation de disponibilité";
        var message = "Confirmation : " + response;

        var emailData = {
            to: recipientEmail,
            subject: subject,
            body: message
        };

        // Perform an AJAX request or use a server-side script to send the email
        // using the emailData object.

        // Example using fetch API:
        fetch('/send-email', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(emailData),
        })
        .then(response => {
            if (response.ok) {
                alert("Le message de confirmation a été envoyé avec succès.");
            } else {
                alert("Une erreur s'est produite lors de l'envoi du message de confirmation.");
            }
        })
        .catch(error => {
            alert("Une erreur s'est produite lors de l'envoi du message de confirmation.");
            console.error(error);
        });
    }
</script>
</body>

</html>

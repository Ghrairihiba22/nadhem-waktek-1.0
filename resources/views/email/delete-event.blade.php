<!DOCTYPE html>
<html>

<head>
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
            background-color: #dc3545;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .button:hover {
            background-color: #c82333;
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
        <h2>Réunion supprimée</h2>

        <p>Cher client,</p>

        <p> <strong>Cette réunion:{{ $name }}</strong>
            qui aura lieu à cette <br><strong>date:</strong>
            {{$start_date}} a été supprimée
        </p>



        <p>Merci!</p>

        <div class="signature">
            <img src="logo.png" alt="Company Logo">
            <p>Nadhem_Waktek</p>
        </div>
    </div>
</body>

</html>

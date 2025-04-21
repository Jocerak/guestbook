<?php
echo "
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <title>Guestbook CI/CD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .message {
            background: white;
            padding: 20px 40px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class='message'>✅ Bienvenue dans le Guestbook !</div>
    <div class='message'>🚀 Déclenchement automatique de Jenkins après push</div>
    <div class='message'>🔁 Test, build, déploiement effectués !</div>
    <div class='message'>🏁 CCP2 validé !</div>
</body>
</html>
";
?>

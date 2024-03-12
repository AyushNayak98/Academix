<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature Coming Soon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ffffff, #007bff);
            color: #333333;
            overflow: hidden;
        }
        
        .container {
            width: 80%;
            margin: 100px auto;
            padding: 20px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            position: relative;
            animation: slideIn 1s ease-out;
        }

        .coming-soon {
            opacity: 0;
            animation: fadeIn 2s 1s forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="coming-soon">
            <h1>Coming Soon</h1>
            <p>This feature is coming soon to the website. Stay tuned for updates!</p>
            <p>This feature will come with Community feature where users can talk to one another and share there ideas or ideas for notes.</p>
        </div>
    </div>
    </body>
</html>
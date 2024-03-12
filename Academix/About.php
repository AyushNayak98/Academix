<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ffffff, #007bff);
            color: #333333;
        }
        
        .container {
            width: 80%;
            margin: 100px auto;
            padding: 20px;
            text-align: left;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
        }
        
        h1 {
            color: #007bff;
            margin-top: 0;
            margin-bottom: 30px;
            text-align: left;
            padding-left: 20px;
            margin-left: 20px;
            margin-top: 0;
            margin-bottom: 30px;
        }

        p {
            margin-bottom: 20px;
            line-height: 1.6;
            text-align: left;
            padding-left: 20px;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 40px);
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .success-message {
            color: green;
            display: none;
        }

        @keyframes typing {
            from { width: 0; }
        }

        .typing-animation {
            animation: typing 2s steps(30, end);
            overflow: hidden;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to our platform created by Ayush Nayak, Pranjal Nikam, Reyan Pawar, and Hrishit Patil.</p>
        <p>We are a team of passionate students dedicated to making academic life easier for everyone. Our platform allows you to share and download notes contributed by fellow students. Whether you need a quick preview or want to delve into detailed study materials, we've got you covered.</p>
        <p>At our core, we believe in the power of knowledge sharing and collaboration. By connecting students from different backgrounds and disciplines, we aim to create a vibrant community where learning knows no bounds.</p>
        <p>Join us in this journey of exploration, discovery, and academic excellence. Let's unlock the potential of collective learning together!</p>
    </div>

    <div class="container">
        <h1>Contact Us</h1>
        <form id="contact-form">
            <input type="text" id="name" name="name" placeholder="Your Name (Max 30 characters)" maxlength="30" required><br>
            <input type="email" id="email" name="email" placeholder="Your Email" required><br>
            <textarea id="suggestion" name="suggestion" placeholder="Your Suggestion (Max 300 characters)" maxlength="300" required></textarea><br>
            <input type="submit" value="Send">
        </form>
        <div class="success-message">
            <p class="typing-animation">Suggestion Sent!</p>
        </div>
    </div>

    <script>
        const contactForm = document.getElementById('contact-form');
        const successMessage = document.querySelector('.success-message');

        contactForm.addEventListener('submit', function(event) {
            event.preventDefault();
            successMessage.style.display = 'block';
            setTimeout(function() {
                successMessage.style.display = 'none';
                contactForm.reset();
            }, 2000);
        });
    </script>
</body>
</html>

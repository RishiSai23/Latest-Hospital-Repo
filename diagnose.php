<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Disease Diagnosis</title>
    <link rel="stylesheet" href="diagnose.css">

</head>
<body>

    <div class="container">
        <h2>Heart Disease Diagnosis</h2>
        
        <!-- Embed Gradio Model -->
        <iframe id="gradioFrame" src="https://4bfa2118cef54b3b5f.gradio.live/" allow="camera"></iframe>

        <br><br>
        <button onclick="openGradio1()">Open in Full Screen</button>
    </div>

    <div class="container">
        <h2>Diabetics Disease Diagnosis</h2>
        
        <!-- Embed Gradio Model -->
        <iframe id="gradioFrame" src="https://a022520eb4cb93bea0.gradio.live/" allow="camera"></iframe>

        <br><br>
        <button onclick="openGradio2()">Open in Full Screen</button>
    </div>

    <script>
        function openGradio1() {
            window.open("https://4bfa2118cef54b3b5f.gradio.live/", "_blank");
        }

        function openGradio2() {
            window.open("https://a022520eb4cb93bea0.gradio.live/", "_blank");
        }

    </script>

</body>
</html>

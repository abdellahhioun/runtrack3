<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keylogger</title>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const textarea = document.getElementById('keylogger');

            document.addEventListener('keypress', (e) => {
                const char = String.fromCharCode(e.which).toLowerCase();
                if (char >= 'a' && char <= 'z') {
                    if (document.activeElement === textarea) {
                        textarea.value += char + char;
                    } else {
                        textarea.value += char;
                    }
                }
            });
        });
    </script>
</head>
<body>
    <textarea id="keylogger"></textarea>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Cadastro - Redirecionamento | CCO Analítica</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            --cor-principal: #FF6900;
            --cor-sec: #ffffff;
            --accent: #25D366;
            --bg: #f6f7fb;
            --card: #ffffff;
            --text: #12202b;
        }

        * {
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
        }

        header {
            background: var(--cor-principal);
            color: #fff;
            padding: 48px 20px;
            text-align: center;
        }

        header i {
            font-size: 100px;
        }

        .container {
            max-width: 1100px;
            margin: 28px auto;
            padding: 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 20px;
            border-radius: 0;
            border: none;
            font-weight: 700;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }

        .btn-primary {
            background: var(--cor-principal);
            color: #fff;
        }

        .btn-whats {
            border: 1px solid var(--accent);
            background: transparent;
            color: var(--accent);
        }

        .muted {
            color: #61748a;
            font-size: 14px;
        }

        center {
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <header>
        <i class="fa fa-check-circle"></i>
        <br><br>
        <h2>OBRIGADO PELAS INFORMAÇÕES</h2>
    </header>

    <main class="container">
        <center>
            <h2>Vamos redirecionar você para o WhatsApp da CCO para continuar seu projeto.</h2>
            <p style="font-size:16px" class="muted">
                Redirecionando em <strong><span id="countdown">8</span></strong> segundos...
            </p>

            <br>

            <a id="whatsBtn" href="https://wa.me/5562982045122" target="_blank" style="display:none">
                <button class="btn btn-whats">
                    IR PARA O WHATSAPP <i class="fab fa-whatsapp"></i>
                </button>
            </a>
        </center>
    </main>

    <script>
        (function () {
            const whatsappUrl = "https://wa.me/5562982045122";
            let seconds = 8;

            const countdownEl = document.getElementById("countdown");
            const whatsBtn = document.getElementById("whatsBtn");

            const timer = setInterval(() => {
                seconds--;
                countdownEl.textContent = seconds;

                if (seconds <= 0) {
                    clearInterval(timer);
                    window.location.href = whatsappUrl;
                }
            }, 1000);

            setTimeout(() => {
                whatsBtn.style.display = "inline-flex";
            }, 5500);
        })();
    </script>

</body>

</html>

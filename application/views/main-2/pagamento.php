<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Cadastro - Escolha do Modelo | Seu Site Profissional</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            --cor-principal: #FF6900;
            --cor-sec: #ffffff;
            --accent: #25D366;
            --bg: #f6f7fb;
            --card: #ffffff;
            --radius: 12px;
            --text: #12202b;
        }

        * {
            box-sizing: border-box;

            font-family: "Roboto", Sans-serif;

        }

        body {
            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial;
            margin: 0;
            background: var(--bg);
            color: var(--text);
            -webkit-font-smoothing: antialiased
        }

        header {
            background: var(--cor-principal);
            color: var(--cor-sec);
            padding: 48px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 1.8rem
        }

        header p {
            margin-top: 8px;
            opacity: .95
        }

        .container {
            max-width: 1100px;
            margin: 28px auto;
            padding: 20px
        }

        .grid {
            display: grid;
            gap: 28px
        }

        @media(max-width:995px) {
            .grid {
                grid-template-columns: 1fr
            }
        }

        .main-card {
            background: var(--card);
            border-radius: var(--radius);
            padding: 20px;
            box-shadow: 0 8px 30px rgba(12, 35, 64, 0.06)
        }

        .side-card {
            background: var(--card);
            border-radius: var(--radius);
            padding: 18px;
            box-shadow: 0 8px 30px rgba(12, 35, 64, 0.04)
        }

        h2 {
            margin: 0 0 12px;
            font-size: 1.2rem
        }

        p.lead {
            margin: 0 0 16px;
            color: #475569
        }

        form .row {
            display: flex;
            gap: 12px;
            flex-wrap: wrap
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            font-size: 13px
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid rgba(8, 22, 40, 0.08);
            border-radius: 8px;
            background: transparent;
            font-size: 14px;
            color: var(--text)
        }

        textarea {
            min-height: 100px;
            resize: vertical
        }

        .field {
            margin-bottom: 12px
        }

        .muted {
            color: #61748a;
            font-size: 13px;
            margin-top: 6px
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 16px;
            border-radius: 10px;
            border: 0;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary {
            background: var(--cor-principal);
            color: #fff
        }

        .btn-whats {
            background: var(--accent);
            color: #fff
        }

        .btn-ghost {
            background: transparent;
            border: 1px solid rgba(8, 22, 40, 0.06);
            color: var(--text)
        }

        .toggle-type {
            display: flex;
            gap: 8px;
            margin-bottom: 10px;
            align-items: center
        }

        .chip {
            padding: 8px 12px;
            border-radius: 999px;
            border: 1px solid rgba(8, 22, 40, 0.06);
            cursor: pointer;
            background: #fff
        }

        .chip.active {
            border-color: var(--cor-principal);
            box-shadow: 0 6px 18px rgba(12, 35, 64, 0.06)
        }

        .model-preview {
            display: flex;
            gap: 12px;
            align-items: center
        }

        .model-preview img {
            width: 84px;
            height: 64px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid rgba(8, 22, 40, 0.04)
        }

        .model-name {
            font-weight: 700;
            font-size: 14px
        }

        .small {
            font-size: 13px;
            color: #475569
        }

        .legal {
            font-size: 13px;
            color: #51606f;
            margin-top: 8px
        }

        /* modal contrato */
        .modal {
            position: fixed;
            inset: 0;
            display: none;
            align-items: center;
            justify-content: center;
            background: rgba(3, 7, 18, 0.6);
            z-index: 120
        }

        .modal.open {
            display: flex
        }

        .modal-card {
            width: min(920px, 96%);
            max-height: 88vh;
            overflow: auto;
            background: var(--card);
            padding: 18px;
            border-radius: 10px
        }

        .modal-card h3 {
            margin-top: 0
        }

        .modal-footer {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            margin-top: 12px
        }

        .alert {
            padding: 12px;
            border-radius: 10px;
            background: #eef7f4;
            border: 1px solid #cfece0;
            color: #0b6a4b;
            margin-top: 10px
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 16px;
            border-radius: 0px;
            border: 0;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-primary {
            background: #FF6900;
            color: #fff
        }

        .btn-whats {
            border: 1px solid #25D366;
            background-color: transparent;
            color: #25D366;
        }
    </style>
</head>

<body>

    <header>
        <i style="font-size: 100px;color:#fff" class="fa fa-check-circle"></i>
        <br><br>
        <h2>OBRIGADO PELAS INFORMAÇÕES</h2>
        <!-- <p>Leia atentamente o contrato de prestação de serviços. </p> -->
    </header>

    <main class="container">
        <div class="grid">

            <div class="contrato">

                <center>
                    <h2 class="text-center"> Volte ao whatsapp de atendimento para prosseguirmos com o pagamento <br>e iniciarmos o seu projeto.<br></h2>

                    <br>
                    <a href="<?=base_url()?>">
                        <button id="nextButton" class="btn btn-primary">
                            ENTENDI <i class="fa fa-check"></i>
                        </button>
                    </a>

                </center>

            </div>
        </div>
    </main>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


</body>

</html>
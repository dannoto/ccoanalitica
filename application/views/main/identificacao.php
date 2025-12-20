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
            box-sizing: border-box
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
            max-width: 950px;
            margin: 28px auto;
            padding: 20px;
            border-radius: 0px;
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
            border-radius: 0px;
            padding: 20px;
            padding-top: 0px;
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
            margin-bottom: 10px;
            font-size: 13px
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid rgba(8, 22, 40, 0.08);
            border-radius: 0px;
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
            border-radius: 0px;
            border: 0;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-primary {
            background: var(--cor-principal);
            color: #fff
        }

        .btn-whats {
            border: 1px solid var(--accent);
            background-color: transparent;
            color: var(--accent)
        }


        .toggle-type {
            display: flex;
            gap: 8px;
            margin-bottom: 10px;
            align-items: center
        }

        .chip {
            padding: 12px 12px;
            border-radius: 0px;
            border: 1px solid rgba(8, 22, 40, 0.06);
            cursor: pointer;
            background: #fff
        }

        .chip.active {
            border-color: var(--cor-principal);
            background-color: var(--cor-principal);
            color: #FFF;
            font-weight: 600;
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

        .btn-ghost {
            background: transparent;
            border: 1px solid rgba(8, 22, 40, 0.06);
            color: var(--text);
            font-size: 10px;
        }

        .btn-trade {
            background: transparent;
            border: 1px solid var(--accent);
            color: var(--text);
            font-size: 10px;
        }

        @media(max-width:995px) {

            .btn-ghost {
                background: transparent;
                border: 1px solid rgba(8, 22, 40, 0.06);
                color: var(--text);
                font-size: 12px !important;
            }


            .chip {
                padding: 8px 12px;
                border-radius: 0px;
                border: 1px solid rgba(8, 22, 40, 0.06);
                cursor: pointer;
                background: #fff;
                font-size: 14px;
            }

            .chip.active {
                border-color: var(--cor-principal);
                background-color: var(--cor-principal);
                color: #FFF;
                font-weight: 600;
                box-shadow: 0 6px 18px rgba(12, 35, 64, 0.06);
                font-size: 14px;

            }

            .btn-whats {
                border: 1px solid var(--accent);
                background-color: transparent;
                color: var(--accent);
                font-size: 12px
            }


            .btn-primary {
                background: var(--cor-principal);
                color: #fff;
                font-size: 12px
            }



        }
    </style>
</head>

<body>

    <header>
        <h1>Complete os dados do seu escritório</h1>
        <p>Preencha as informações para seguirmos com a personalização do modelo escolhido.</p>
    </header>

    <main class="container">
        <div class="grid">

            <div class="main-card" aria-labelledby="form-title">
                <!-- <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;flex-wrap:wrap;gap:12px">
                    <div class="model-preview" aria-hidden="true">
                        <img id="modeloThumb" src="https://ccoanalitica.com/wp-content/webp-express/webp-images/uploads/2022/11/innovia.webp" alt="Preview do modelo">
                        <div>
                            <div class="model-name" id="">MODELO #1</div>
                            <div class="model-name" id="">Escritório de Advocacia</div>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-trade" id="btnVerModelo" target="_blank">TROCAR MODELO</button>
                    </div>
                </div> -->

                <form id="contratoForm" autocomplete="on">

                    <input type="hidden" id="modeloEscolhido" name="modeloEscolhido" value="">

                    <!-- Tipo: PJ / PF -->
                    <div class="field">
                        <div class="toggle-type" role="tablist" style="margin-top:30px" aria-label="Tipo de pessoa">
                            <div class="chip active" id="chipPJ" data-type="pj" role="tab" aria-selected="true">Pessoa Jurídica </div>
                            <div class="chip" id="chipPF" data-type="pf" role="tab" aria-selected="false">Pessoa Física </div>
                        </div>
                        <div class="muted">Caso não possua CNPJ, clique em "Pessoa Física" — os campos mudarão automaticamente.</div>
                    </div>

                    <!-- PJ fields -->
                    <div id="pjFields" style="margin-top: 30px;">
                        <div class="field">
                            <label for="company_name">Razão Social <span style="color:#c00">*</span></label>
                            <input id="company_name" name="company_name" value="" type="text" placeholder="Ex.: Escritório Silva & Associados LTDA" required>
                        </div>

                        <div class="row">
                            <div class="field" style="flex:1">
                                <label for="company_document">CNPJ <span style="color:#c00">*</span></label>
                                <input id="company_document" name="company_document" type="text" placeholder="00.000.000/0000-00" inputmode="numeric" pattern="\d{2}\.?\d{3}\.?\d{3}\/?\d{4}-?\d{2}" required>
                            </div>

                        </div>
                    </div>

                    <div id="pfFields" style="display:none;margin-top: 30px;">
                        <div class="field">
                            <label for="personal_name">Nome Completo <span style="color:#c00">*</span></label>
                            <input id="personal_name" name="personal_name" type="text" placeholder="Ex.: João da Silva">
                        </div>

                        <div class="field">
                            <label for="personal_document">CPF <span style="color:#c00">*</span></label>
                            <input id="personal_document" name="personal_document" type="text" placeholder="000.000.000-00" inputmode="numeric" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}">
                        </div>
                    </div>


                    <div class="row">
                        <div class="field" style="flex:1">
                            <label for="company_whatsapp">WhatsApp <span style="color:#c00">*</span></label>
                            <input id="company_whatsapp" name="company_whatsapp" type="tel" placeholder="(99) 9 9999-9999" inputmode="tel" required>
                        </div>

                        <div class="field" style="flex:1">
                            <label for="company_email">E-mail <span style="color:#c00">*</span></label>
                            <input id="company_email" name="company_email" type="email" placeholder="Ex: contato@suaempresa.com">
                        </div>
                    </div>

                    <div class="field">
                        <label id="company_responsible_name_label" for="company_responsible_name">Nome do responsável <span style="color:#c00">*</span></label>
                        <input id="company_responsible_name" name="company_responsible_name" type="text" placeholder="Nome do sócio ou responsável">
                    </div>


                    <hr>

                    <div class="row pt-5">
                        <div class="col-12 col-md-6">
                            <label id="company_cep_label" for="company_cep">CEP <span style="color:#c00">*</span></label>
                            <input id="company_cep" id="cep" name="company_cep" type="text" placeholder="Insira o CEP">
                        </div>
                        <div class="col-12 col-md-6">
                           
                        </div>
                    </div>

                    <hr>

                    <div style="display:flex;gap:10px;margin-top:12px;flex-wrap:wrap;justify-content:end;margin-top:30px">
                        <a href="./modelos/<?= $this->session->userdata('slug'); ?>">
                            <button type="button" id="btnEnviar" class="btn btn-whats"><i class="fa fa-arrow-left"></i> VOLTAR</button>
                        </a>

                        <button type="button" id="btn_submit" class="btn btn-primary">SALVAR E CONTINUAR <i class="fa fa-arrow-right"></i> </button>


                    </div>

                    <div id="status" aria-live="polite"></div>
                </form>
            </div>


        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.3/dist/sweetalert2.all.min.js"></script>


    <script>
        $('#company_whatsapp').mask('(00) 0 0000-0000');

        $('#company_document').mask('00.000.000/0000-00');
        $('#personal_document').mask('000.000.000-00');

        const chipPJ = document.getElementById('chipPJ');
        const chipPF = document.getElementById('chipPF');
        const pjFields = document.getElementById('pjFields');
        const pfFields = document.getElementById('pfFields');


        function setType(type) {

            currentType = type;

            if (type === 'pj') {

                document.getElementById('company_responsible_name_label').style.display = 'block';
                document.getElementById('company_responsible_name').style.display = 'block';

                chipPJ.classList.add('active');
                chipPJ.setAttribute('aria-selected', 'true');
                chipPF.classList.remove('active');
                chipPF.setAttribute('aria-selected', 'false');
                pjFields.style.display = '';
                pfFields.style.display = 'none';

            } else {

                document.getElementById('company_responsible_name_label').style.display = 'none';
                document.getElementById('company_responsible_name').style.display = 'none';

                chipPF.classList.add('active');
                chipPF.setAttribute('aria-selected', 'true');
                chipPJ.classList.remove('active');
                chipPJ.setAttribute('aria-selected', 'false');
                pjFields.style.display = 'none';
                pfFields.style.display = '';

            }
        }

        chipPJ.addEventListener('click', () => setType('pj'));
        chipPF.addEventListener('click', () => setType('pf'));

        document.getElementById('btn_submit').addEventListener('click', async () => {


            let data = {

                company_type: currentType === 'pj' ? 'company' : 'personal',

                company_name: currentType === 'pj' ? document.getElementById('company_name').value : document.getElementById('personal_name').value,
                company_document: currentType === 'pj' ? document.getElementById('company_document').value : document.getElementById('personal_document').value,

                company_document_type: currentType === 'pj' ? 'cnpj' : 'cpf',
                company_whatsapp: document.getElementById('company_whatsapp').value,

                company_email: document.getElementById('company_email').value,
                company_responsible_name: document.getElementById('company_responsible_name').value

            };


            if (currentType == "pj") {

                if (data.company_name.length == 0) {

                    Swal.fire({
                        title: '',
                        text: 'Preencha a razão social.',
                        icon: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    })

                    // swal('Preencha a razão social.')
                    return;

                } else if (data.company_document.length == 0) {


                    Swal.fire({
                        title: '',
                        text: 'Preencha o CNPJ.',
                        icon: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    })

                    return;

                } else if (data.company_document_type.length == 0) {




                    Swal.fire({
                        title: '',
                        text: 'Preencha o tipo de documento.',
                        icon: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    })

                    return;

                } else if (data.company_whatsapp.length == 0) {



                    Swal.fire({
                        title: '',
                        text: 'Preencha o Whatsapp.',
                        icon: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    })
                    return;

                } else if (data.company_email.length == 0) {

                    Swal.fire({
                        title: '',
                        text: 'Preencha o e-mail',
                        icon: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    })

                    return;

                } else if (data.company_responsible_name.length == 0) {

                    Swal.fire({
                        title: '',
                        text: 'Preencha o nome do responsável.',
                        icon: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    })

                    return;

                }


            } else {


                if (document.getElementById('personal_name').value.length == 0) {


                    Swal.fire({
                        title: '',
                        text: 'Preencha o nome.',
                        icon: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    })

                    return;


                } else if (document.getElementById('personal_document').value.length == 0) {

                    Swal.fire({
                        title: '',
                        text: 'Preencha o CPF.',
                        icon: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    })

                    return;

                } else if (data.company_document_type.length == 0) {

                    Swal.fire({
                        title: '',
                        text: 'Preencha o tipo de documento.',
                        icon: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    })

                    return;
                } else if (data.company_whatsapp.length == 0) {

                    Swal.fire({
                        title: '',
                        text: 'Preencha o Whatsapp.',
                        icon: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    })
                    return;

                } else if (data.company_email.length == 0) {

                    Swal.fire({
                        title: '',
                        text: 'Preencha o e-mail',
                        icon: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    })

                    return;


                }

            }



            // $.ajax({
            //     url: '<?= base_url() ?>identificacao/act_add_identifier',
            //     type: 'POST',
            //     data: data,
            //     // dataType: 'json',
            //     // contentType: false,
            //     // processData: false,
            //     success: function(res) {

            //         console.log(res)

            //         res = res.JSON.strinfy();

            //         console.log(res)

            //         // if (res.status) {

            //         //     window.location.href = "<?= base_url() ?>formulario"

            //         // } else {

            //         //     Swal.fire({
            //         //         title: '',
            //         //         text: 'Houve um erro ao enviar. Tente novamente.',
            //         //         icon: 'error',
            //         //         confirmButtonText: 'OK',
            //         //         confirmButtonColor: "#FF6900"
            //         //     })

            //         // }

            //     },
            //     error: function() {
            //         Swal.fire({
            //             title: '',
            //             text: 'Houve um erro ao enviar',
            //             icon: 'error',
            //             confirmButtonText: 'OK',
            //             confirmButtonColor: "#FF6900"
            //         })
            //     }
            // });
            $.ajax({
                url: '<?= base_url() ?>identificacao/act_add_identifier',
                type: 'POST',
                data: data,
                dataType: 'json', // importante!
                success: function(res) {
                    console.log(res); // já vem como objeto JS

                    if (res.status) {
                        window.location.href = "<?= base_url() ?>formulario";
                    } else {
                        Swal.fire({
                            title: '',
                            text: res.message || 'Houve um erro ao enviar. Tente novamente.',
                            icon: 'error',
                            confirmButtonText: 'OK',
                            confirmButtonColor: "#FF6900"
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        title: '',
                        text: 'Houve um erro ao enviar',
                        icon: 'error',
                        confirmButtonText: 'OK',
                        confirmButtonColor: "#FF6900"
                    });
                }
            });




        });

        setType('pj');
    </script>
</body>

</html>
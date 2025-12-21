<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Serviços Adicionais - Seu Site Profissional</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            /* box-sizing: border-box; */
            font-family: 'Roboto', sans-serif;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background: #f8f9fc;
            color: #333;
        }

        header {
            background-color: #FF6900;
            color: white;
            padding: 2rem 1rem;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        header small {
            font-size: 16px !important;
            margin-top: 0px;
            font-weight: 500;
        }

        .container {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 0 1rem 1rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.2rem;
        }

        .service-card {
            position: relative;
            background: white;
            border-radius: 12px;
            padding: 1.2rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: 0.3s;
            border: 2px solid transparent;
            min-height: 80px;
        }

        .service-card:hover {
            transform: translateY(-3px);
        }

        .service-card.selected {
            border-color: #4CAF50;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .check-indicator {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 20px;
            height: 20px;
            border: 2px solid #999;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }

        .service-card.selected .check-indicator {
            border-color: #4CAF50;
            background: #4CAF50;
        }

        .check-indicator svg {
            width: 10px;
            height: 10px;
            stroke: white;
            display: none;
        }

        .service-card.selected .check-indicator svg {
            display: block;
        }

        .service-card h3 {
            margin-top: 0;
            color: #FF6900;
            font-size: 1.1rem;
        }

        .service-card p {
            font-size: 0.9rem;
            color: #555;
            line-height: 1.5;
        }

        .service-price {
            margin-top: 0.5rem;
            font-weight: bold;
            color: #222;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
            padding: 1rem;
            /* background: #fff; */
            /* border-radius: 10px; */
            /* box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08); */
        }

        .total {
            font-size: 1.1rem;
            font-weight: 600;
            color: #FF6900;
        }

        /* button {
            background: #004aad;
            color: white;
            border: none;
            padding: 0.9rem 1.8rem;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1rem;
            transition: 0.3s;
        }

        button:hover {
            background: #0062d1;
        } */

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
        <h1>Serviços Opcionais</h1>

        <div style="margin-top:10px">
            <small>Caso você precise de serviços adicionais, além do site.</small><br>
            <small>Clique nos serviços que deseja adicionar.</small>
        </div>
    </header>

    <div class="container">
        <div class="services-grid" id="servicesGrid">

            <?php foreach ($this->opcional_model->get_opcionals_shop() as $op) { ?>

                <div class="service-card" data-service="<?= $op->id ?>" data-price="<?= $op->cco_item_price ?>">
                    <div class="check-indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="3" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3><?= $op->cco_item_name ?></h3>
                    <p><?= $op->cco_item_short_description ?></p>
                    <p style="display:none" class="service-price">R$ <?= $op->cco_item_price ?></p>
                </div>

            <?php } ?>

        </div>

        <div class="footer">
            <div style="display:none" class="total" id="totalValue">Total: R$ 359,00</div>

        </div>

        <div class="footer">

            <a href="./formulario">
                <button class="btn btn-whats"> <i class="fa fa-arrow-left"></i> VOLTAR</button>
            </a>

            <!-- <a href="./contrato"> -->
            <button id="nextButton" class="btn btn-primary">AVANÇAR APENAS COM SITE <i class="fa fa-arrow-right"></i></button>
            <!-- </a> -->
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.26.3/dist/sweetalert2.all.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <script>

        const cards = document.querySelectorAll('.service-card');
        const nextButton = document.getElementById('nextButton');
        const totalValue = document.getElementById('totalValue');
        const basePrice = 359;

        cards.forEach(card => {
            card.addEventListener('click', () => {
                card.classList.toggle('selected');
                updateTotal();
            });
        });

        function updateTotal() {

            const selectedCards = document.querySelectorAll('.service-card.selected');
            let total = basePrice;

            selectedCards.forEach(card => {
                total += parseFloat(card.dataset.price);
            });

            totalValue.textContent = `Total: R$ ${total.toFixed(2).replace('.', ',')}`;

            if (selectedCards.length === 0) {
                nextButton.innerHTML = 'AVANÇAR APENAS COM SITE  <i class="fa fa-arrow-right"></i>';
            } else {
                nextButton.innerHTML = 'AVANÇAR  <i class="fa fa-arrow-right"></i>';
            }
        }

        nextButton.addEventListener('click', () => {

            const selected = [...document.querySelectorAll('.service-card.selected')]
                .map(card => card.dataset.service);

            const total = parseFloat(
                totalValue.textContent.replace('Total: R$ ', '').replace(',', '.')
            );

            if (selected.length === 0) {
                Swal.fire({
                    title: '',
                    text: 'Você não selecionou nenhum serviço adicional. Deseja continuar apenas com o site?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Sim',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#FF6900'
                }).then((result) => {
                    if (result.isConfirmed) {
                        enviarFormulario([]);
                    }
                });
            } else {
                enviarFormulario(selected, total);
            }
        });

        function enviarFormulario(servicos, total) {
            $.ajax({
                url: '<?=base_url()?>opcional/act_add_opcional',
                type: 'POST',
                data: {
                    servicos: servicos,
                    total: total
                },
                dataType: 'json',
                success: function(res) {
                    if (res.status) {
                        // Swal.fire({
                        //     title: 'Sucesso!',
                        //     text: 'Serviços adicionados com sucesso!',
                        //     icon: 'success',
                        //     confirmButtonColor: '#FF6900'
                        // }).then(() => {
                            window.location.href = '<?=base_url()?>contrato';
                        // });
                    } else {
                        Swal.fire({
                            title: 'Erro!',
                            text: 'Ocorreu um problema ao salvar os serviços.',
                            icon: 'error',
                            confirmButtonColor: '#FF6900'
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        title: 'Erro!',
                        text: 'Não foi possível conectar ao servidor.',
                        icon: 'error',
                        confirmButtonColor: '#FF6900'
                    });
                }
            });
        }
    </script>


</body>

</html>
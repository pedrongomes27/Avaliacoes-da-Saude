<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avaliação de Atendimento</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <div id="app" class="container">
        <label class="information"> {{ $unidade }} </label>
        <form action="{{ route('feedback.store') }}" method="POST">
            <div class="form-group">
                @csrf()
                <input type="hidden" value="{{ $unidade }}" name="no_unidade">

                <div class="form-title">
                    <label for="title" class="title">PESQUISA DE SATISFAÇÃO</label>
                </div>

                <div class="page active" id="page-1">
                    <div class="form-content">
                        <label class="form-question" for="pergunta">Como você classificaria a qualidade do nosso
                            atendimento?</label>

                        <div class="form-radio">
                            <div class="option">
                                <input type="radio" id="opcao1" name="nota1" value="1">
                                <label for="opcao1" class="opcao1"> PÉSSIMO </label>
                            </div>
                            <div class="option">
                                <input type="radio" id="opcao2" name="nota1" value="2">
                                <label for="opcao2" class="opcao2"> RUIM </label>
                            </div>
                            <div class="option">
                                <input type="radio" id="opcao3" name="nota1" value="3">
                                <label for="opcao3" class="opcao3"> FAVORÁVEL </label>
                            </div>
                            <div class="option">
                                <input type="radio" id="opcao4" name="nota1" value="4">
                                <label for="opcao4" class="opcao4"> BOM </label>
                            </div>
                            <div class="option">
                                <input type="radio" id="opcao5" name="nota1" value="5">
                                <label for="opcao5" class="opcao5"> EXCELENTE </label>
                            </div>
                        </div>
                        <div class="error">
                            <div id="error-message" class="not-error">POR FAVOR, SELECIONE UMA OPÇÃO!</div>
                        </div>
                        <div class="pagination">
                            <div class="nav">
                                <button type="button" class="next">Próximo</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page" id="page-2">
                    <label class="form-question" for="pergunta">Como você classificaria a limpeza das
                        instalações?</label>

                    <div class="form-radio">
                        <div class="option">
                            <input type="radio" id="opcao1" name="nota2" value="1">
                            <label for="opcao1" class="opcao1"> PÉSSIMO </label>
                        </div>
                        <div class="option">
                            <input type="radio" id="opcao2" name="nota2" value="2">
                            <label for="opcao2" class="opcao2"> RUIM </label>
                        </div>
                        <div class="option">
                            <input type="radio" id="opcao3" name="nota2" value="3">
                            <label for="opcao3" class="opcao3"> FAVORÁVEL </label>
                        </div>
                        <div class="option">
                            <input type="radio" id="opcao4" name="nota2" value="4">
                            <label for="opcao4" class="opcao4"> BOM </label>
                        </div>
                        <div class="option">
                            <input type="radio" id="opcao5" name="nota2" value="5">
                            <label for="opcao5" class="opcao5"> EXCELENTE </label>
                        </div>
                    </div>
                    <div class="error">
                        <div id="error-message" class="not-error">POR FAVOR, SELECIONE UMA OPÇÃO!</div>
                    </div>
                    <div class="pagination">
                        <div class="nav">
                            <button type="button" class="prev">Anterior</button>
                            <button type="button" class="next">Próximo</button>
                        </div>
                    </div>
                </div>

                <div class="page" id="page-3">
                    <label class="form-question" for="pergunta">Como você classificaria o tempo de espera?</label>

                    <div class="form-radio">
                        <div class="option">
                            <input type="radio" id="opcao1" name="nota3" value="1">
                            <label for="opcao1" class="opcao1"> PÉSSIMO </label>
                        </div>
                        <div class="option">
                            <input type="radio" id="opcao2" name="nota3" value="2">
                            <label for="opcao2" class="opcao2"> RUIM </label>
                        </div>
                        <div class="option">
                            <input type="radio" id="opcao3" name="nota3" value="3">
                            <label for="opcao3" class="opcao3"> FAVORÁVEL </label>
                        </div>
                        <div class="option">
                            <input type="radio" id="opcao4" name="nota3" value="4">
                            <label for="opcao4" class="opcao4"> BOM </label>
                        </div>
                        <div class="option">
                            <input type="radio" id="opcao5" name="nota3" value="5">
                            <label for="opcao5" class="opcao5"> EXCELENTE </label>
                        </div>
                    </div>

                    <div class="error">
                        <div id="error-message" class="not-error">POR FAVOR, SELECIONE UMA OPÇÃO!</div>
                    </div>

                    <div class="pagination">
                        <div class="nav">
                            <button type="button" class="prev">Anterior</button>
                            <button type="button" class="next">Próximo</button>
                        </div>
                    </div>

                </div>

                <div class="page" id="page-4">
                    <label class="form-question" for="pergunta">Deixe um comentário abaixo (opcional):</label>
                    <div class="form-comment">
                        <textarea name="comentario" class="comment" rows="5" style="resize:none"></textarea>
                    </div>

                    <div id="contact-field" class="form-contact" style="display: none;">
                        <label class="form-question-contact" for="contato">Deixe seu contato para entendermos melhor o que aconteceu (opcional):</label>
                        <div class="form-contact">
                            <input type="text" class="contact" name="contato" id="contato">
                        </div>
                    </div>

                    <div class="pagination">
                        <div class="nav">
                            <button type="button" class="prev">Anterior</button>
                        </div>
                    </div>

                    <div class="submit">
                        <button id="submitButton" type="submit" onclick="disableButton()"
                            class="submit-form">ENVIAR</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="icons">
            <div class="icon-secretaria">
                <img src="{{ asset('assets/img/secretaria.png') }}" alt="">
            </div>

            <div class="icon-prefeitura">
                <img src="{{ asset('assets/img/prefeitura.png') }}" alt="">
            </div>

            <div class="icon-sus">
                <img src="{{ asset('assets/img/sus.png') }}" alt="">
            </div>
        </div>
    </div>

    <div id="warning-message">
        <h2>Gire para a horizontal</h2>
        <img src="{{ asset('assets/img/girar-tablet.png') }}">
    </div>

    <script>
        const prevBtns = document.querySelectorAll('.prev');
        const nextBtns = document.querySelectorAll('.next');
        let notaValue = false;


        nextBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                const currentPage = document.querySelector('.page.active');
                const radioField = currentPage.querySelector('.form-radio');
                const message = currentPage.querySelector('#error-message');

                if (!radioField.querySelector('input:checked')) {
                    if (message.classList.contains('not-error')) {
                        message.classList.remove('not-error');
                        message.classList.add('has-error');
                    }
                } else {
                    if (message.classList.contains('has-error')) {
                        message.classList.remove('has-error');
                        message.classList.add('not-error');
                    }

                    currentPage.classList.remove('active');
                    const nextPage = currentPage.nextElementSibling;
                    nextPage.classList.add('active');

                    nextPage.classList.add('animate__animated', 'animate__fadeIn');
                    nextPage.classList.remove('animate__fadeOut');

                    setTimeout(() => {
                        currentPage.classList.add('animate__animated', 'animate__fadeOut');
                    }, 100);

                    if (radioField.querySelector('input:checked').value === "1" || radioField.querySelector(
                            'input:checked').value === "2") {
                        notaValue = true;
                    }
                    // Verifica se chegou ao final da pesquisa
                    if (!nextPage.nextElementSibling && notaValue) {
                        document.getElementById('contact-field').style.display = "block";
                    } else {
                        document.getElementById('contact-field').style.display = "none";
                    }

                }
            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                const currentPage = document.querySelector('.page.active');
                currentPage.classList.remove('active');
                const prevPage = currentPage.previousElementSibling;
                prevPage.classList.add('active');

                prevPage.classList.add('animate__animated', 'animate__fadeIn');
                prevPage.classList.remove('animate__fadeOut');

                setTimeout(() => {
                    currentPage.classList.add('animate__animated', 'animate__fadeOut');
                }, 100);


            });

        });

        function disableButton() {
            var button = document.getElementById("submitButton");
            button.style.display = "none";
        }
    </script>
</body>

</html>

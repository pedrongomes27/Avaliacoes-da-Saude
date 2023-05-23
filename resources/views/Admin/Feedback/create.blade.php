<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avaliação de Atendimento</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">


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
                    <label class="form-question" for="pergunta">Como você classificaria a nossa higiene?</label>

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
                    <label class="form-question" for="pergunta">Como você classificaria a qualidade da
                        limpeza?</label>

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

                    <div class="pagination">
                        <div class="nav">
                            <button type="button" class="prev">Anterior</button>
                        </div>
                    </div>

                    <div class="submit">
                        <button type="submit" class="submit-form">ENVIAR</button>
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

</body>

</html>

<script>
    // Seleciona todos os botões "Próximo" e "Anterior"
    const prevBtns = document.querySelectorAll('.prev');
    const nextBtns = document.querySelectorAll('.next');

    // Adiciona um evento de clique a cada botão "Próximo"
    nextBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            const currentPage = document.querySelector('.page.active');
            const radioField = currentPage.querySelector('.form-radio');
            const message = currentPage.querySelector('#error-message');

            // Verifica se alguma opção está selecionada
            if (!radioField.querySelector('input:checked')) {
                // Se nenhuma opção estiver selecionada, adiciona a mensagem de erro
                if (message.classList.contains('not-error')) {
                    message.classList.remove('not-error');
                    message.classList.add('has-error');
                }
            } else {
                // Se alguma opção estiver selecionada, remove a mensagem de erro (se existir)
                if (message.classList.contains('has-error')) {
                    message.classList.remove('has-error');
                    message.classList.add('not-error');
                }
                // Remove a classe "active" da página atual
                currentPage.classList.remove('active');
                // Encontra a próxima página
                const nextPage = currentPage.nextElementSibling;
                // Adiciona a classe "active" à próxima página
                nextPage.classList.add('active');

            }
        });
    });

    // Adiciona um evento de clique a cada botão "Anterior"
    prevBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            // Encontra a página atual
            const currentPage = document.querySelector('.page.active');
            // Remove a classe "active" da página atual
            currentPage.classList.remove('active');
            // Encontra a página anterior
            const prevPage = currentPage.previousElementSibling;
            // Adiciona a classe "active" à página anterior
            prevPage.classList.add('active');
        });
    });
</script>

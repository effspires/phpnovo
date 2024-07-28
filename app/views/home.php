<!-- injetar template -->
<?php $this->layout('master', ['title' => $title, 'home' => 'active'])?>

<!-- injetar css específico-->
<?php $this->start('css')?>
<?php $this->stop()?>

<div class="container">
    <div class="row">
        <div class="col s12 ">
            <div class="col s1"></div>
                <div class="col s10">
                    <div class="center">
                        <p><h5><b>Sistema de agendamentos</b></h5></p>
                    </div>
                    <div class="divider"></div>
                    <p><b>Cadastro Necessário para Agendamentos</b></p>
                    <p style="text-align: justify;">Para oferecer um serviço mais organizado e eficiente, informamos que é necessário realizar um cadastro antes de efetuar qualquer agendamento. Esse procedimento é simples e rápido, e visa garantir que todas as informações necessárias sejam fornecidas de forma correta.</p>
                    <p><b>Por que é importante se cadastrar?</b>
                        <li style="text-align: justify;margin-left: 30px;">Facilidade no Agendamento: Com seus dados já cadastrados, o processo de agendamento se torna mais ágil.</li>
                        <li style="text-align: justify;margin-left: 30px;">Segurança: Suas informações estarão protegidas em nosso sistema, garantindo a sua privacidade.</li>
                        <li style="text-align: justify;margin-left: 30px;">Comunicação: Poderemos entrar em contato com você facilmente para confirmações, lembretes ou em caso de alterações no seu agendamento.</li>
                    </p>
                    <p><b>Como se cadastrar?</b>
                        <li style="text-align: justify;margin-left: 30px;">1. Acesse a nossa página de cadastro &#129154;<a href="register"> aqui </a>&#129152.</li>
                        <li style="text-align: justify;margin-left: 30px;">2. Preencha o formulário com suas informações pessoais.</li>
                        <li style="text-align: justify;margin-left: 30px;">3. Verifique os dados fornecidos e confirme o cadastro.</li>
                        <li style="text-align: justify;margin-left: 30px;">4. Após a confirmação, você estará apto a realizar seus agendamentos.</li>
                    </p>
                    <p><b>Dúvidas?</b></p>
                    <p style="text-align: justify;">Se tiver qualquer dúvida ou precisar de assistência durante o processo de cadastro, nossa equipe de suporte está à disposição para ajudá-lo. Entre em contato pelo e-mail [inserir e-mail] ou telefone [inserir telefone].</p>
                    <p><b>Agradecemos pela compreensão e colaboração.</b></p>
                </div>
            <div class="col s1"></div>
        </div>
    </div>
</div>

<!-- injetar js específico-->
<?php $this->start('js')?>
<?php $this->stop()?>
<?php
include_once 'templates/header.php'; // Inclui o topo do blog[cite: 1]
?>

<main id="contact-container">
    <div class="contact-card">
        <div class="contact-intro">
            <h1>Entre em Contacto</h1>
            <p>Tem alguma dúvida sobre uma receita, crítica, sugestão ou quer partilhar como ficou o seu bolo? Adoraria conversar consigo! Preencha o formulário abaixo e responderei o mais breve possível.</p>
        </div>

        <!-- Formulário de Contacto -->
        <form action="#" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Nome Completo</label>
                <input type="text" id="name" name="name" placeholder="Ex: Maria Silva" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Ex: maria@email.com" required>
            </div>

            <div class="form-group">
                <label for="subject">Assunto</label>
                <select id="subject" name="subject" required>
                    <option value="" disabled selected>Selecione o motivo do contacto</option>
                    <option value="duvida">Dúvida sobre Receita</option>
                    <option value="sugestao">Sugestão / Elogio</option>
                    <option value="parceria">Parcerias ou Negócios</option>
                    <option value="outro">Outro assunto</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Mensagem</label>
                <textarea id="message" name="message" rows="6" placeholder="Escreva aqui a sua mensagem com carinho..." required></textarea>
            </div>

            <button type="submit" class="btn-submit">Enviar Mensagem</button>
        </form>
    </div>
</main>

<?php
include_once 'templates/footer.php'; // Inclui o rodapé do blog[cite: 1]
?>
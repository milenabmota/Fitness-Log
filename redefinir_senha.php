<?php
include 'includes/header.php'; 
?>

<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <div class="card shadow-lg border-0">
            <div class="card-body p-5">
                <h2 class="text-center mb-4 fw-bold text-warning">Redefinir Senha</h2>
                <p class="text-center text-muted mb-4">Digite seu nome de usuário e a nova senha.</p>
                
                <?php 
                $mensagem_erro = isset($_GET['erro']) ? htmlspecialchars($_GET['erro']) : '';
                if (!empty($mensagem_erro)): ?>
                    <div class="alert alert-danger"><?= $mensagem_erro ?></div>
                <?php endif; ?>

                <form action="processa.php" method="POST">
                    <input type="hidden" name="acao" value="redefinir_senha">
                    
                    <div class="mb-3">
                        <label class="form-label">Nome de Usuário</label>
                        <input type="text" name="usuario" class="form-control form-control-lg" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nova Senha</label>
                        <input type="password" name="nova_senha" class="form-control form-control-lg" required minlength="6">
                    </div>
                    
                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="btn btn-warning btn-lg">REDEFINIR SENHA</button>
                    </div>
                    
                    <div class="text-center mt-3">
                        <a href="index.php" class="btn btn-link">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php';
?>


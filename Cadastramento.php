<?php
session_start();
include "Border/header.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <title>Formulário de clientes</title>
</head>
<body>

        <div>
        </form>
        <!--formulario-->
        <form class="form" action="clientes.php" method="POST">
            <article class="for">
            <!--cabeçalho-->
            <header id="titulo">
                <h2 >Formulário de Clientes</h2>
            </header>
            <fieldset class="div">
                <div class="div">
                    <label for="Nome"> <strong>Nome:</strong></label>
                    <input type="text" name="nome" placeholder="Digite o seu nome" maxlength="60" required>
                    <label for="SobreNome"><strong>SobreNome:</strong></label>
                    <input type="text" name="sobrenome" placeholder="Digite o seu SobreNome" maxlength="60" required>
                    <label for="CPF"><strong>CPF:</strong></label>
                    <input type="text" name="cpf" placeholder="Digite o seu CPF" maxlength="15" required>
                    <label for="SEXO"><strong>SEXO:</strong></label>
                    <select name="sexo" required><option value="">Selecione o sexo</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Outros">Outros</option></select>
                    <label for="Logradouro"><strong>Logradouro:</strong></label>
                    <input type="text" name="logradouro" placeholder="Rua, Avenida, Nº, Andar" maxlength="60">
                    <label for="CEP"><strong>CEP:</strong></label>
                    <input type="" name="cep" placeholder="CEP" maxlength="15">
                    <label for="Bairro"><strong>Bairro:</strong></label>
                    <input type="text" name="bairro" placeholder="Bairro" maxlength="60">
                    <label for="Cidade"><strong>Cidade:</strong></label>
                    <input type="text" name="cidade" placeholder="Cidade" maxlength="60">
                    <label for="Estado"><strong>Estado:</strong></label>
                    <input type="text" name="estado" placeholder="Estado" maxlength="15">
                    <label id="label" for="email"> <strong>Email:</strong></label>
                    <input type="email" name="email" placeholder="Email" maxlength="40">
                    <label for="telefone"> <strong>Telefone:</strong></label>
                    <input type="tel" name="telefone"  placeholder="(xx)9xxxx-xxxx">
                    <label for="Login"><strong>Login:</strong></label>
                    <input type="login" name="login" placeholder="Digite um login para ter acesso" maxlength="100" required>
                    <label for="Senha"><strong>Senha:</strong></label>
                    <input type="password" name="senha" placeholder="Digite uma senha" maxlength="50" required>
                </div>
            </fieldset><div>
            
                </div>
                <article class="botao"> 
        <div class="form-group" >
                <div class="col-md-8">
                <input type="submit" class="btn btn-success" value="Salvar">
                <input type="reset" class="btn btn-success" value="Cancelar">
                </div>
                </article> 
    </div>
            
        </article> 
        </form>
        </div>
        
<div>
<?php
  include "Border/footer.php";

  ?>      

</div>
    
</body>
</html>
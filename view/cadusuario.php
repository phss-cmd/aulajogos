<?php
include_once("header.php");
?>

<div class="container">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail">
  </div>
  <div class="col-6">
    <label for="inputFone" class="form-label">Fone</label>
    <input type="text" class="form-control" id="inputFone" placeholder="(00) 00000-0000">
  </div>
  <div class="col-6">
    <label for="inputCpf" class="form-label">CPF</label>
    <input type="text" class="form-control" id="inputCpf" placeholder="000.000.000-02">
  </div>
  <div class="col-md-2">
    <label for="inputCep" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputCep">
  </div>
  <div class="col-md-2">
    <label for="inputNumero" class="form-label">Número casa</label>
    <input type="text" class="form-control" id="inputNumber">
  </div>
  <div class="col-md-8">
    <label for="inputComplemento" class="form-label">Complemento</label>
    <input type="text" class="form-control" id="inputComplemento" placeholder= "casa,bloco,andar ..."> 
  </div>
  <div class="col-md-4">
    <label for="inputTipo" class="form-label">Tipo usuário</label>
    <select id="inputTipo" class="form-select">
      <option value= "1">Funcionário</option>
      <option value= "2">Cliente</option>
    </select>
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceite os termos de uso do sistemas de jogos
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Aceite</button>
  </div>
</form>
</div>

<?php
include_once("footer.php");
?>

<?php include "cabecalho.php"?>
<body>
<nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
    <ul id="nav-mobile transparent" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
       </ul>
</div>
<div class="nav-header center">
      <h1>Clorocine</h1>
      </div>

    <div class="nav-content transparent">
      <ul class="tabs tabs-transparent">
       </ul>
    </div>
</nav>

  <div class="row">
<div class="col s6 offset-s3">
    <!--Card mz:card basic-->
    <div class="card">
        <div class="card-content ">
            <span class="card-title">Cadastrar Filme</span>
            <div class="row">
            <div class="input-field col s12">
            <input id="titulo" type="text" class="validate"  require>
            <label for="titulo">Titulo do Filme</label>            
        </div>
    </div>
</div>

<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s11">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="sinopse" class="materialize-textarea"></textarea>
          <label for="sinopse">Sinopse</label>
        </div>
      </div>
    </form>
  </div>
<!--campo nota-->
  <div class="row">
    <div class ="input-field col s4 offset-s1">
    <input id="nota" type="number" step=".1" min="0" max="10" class="validate"  require>
    <label for="nota">Nota</label>        
    </div>
  </div><!--div row-->

    <!----Imput capa Filme-->
  
    <form action="#">
    <div class="file-field input-field">
      <div class="btn purple">
        <span>Capa</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>
  </form>
        
        
<div class="card-action">
            <a class="waves-effect waves-light btn grey" href="galeria.php">Cancelar</a>
            <a href="#" class="waves-effect waves-light btn purple">Cadastrar</a>
        </div>
    </div>
</div>
  



<?php include("includes/header.php"); ?>

<div class="container p-4">

<div class="container-fluid">
    
<form action="contact.php" method="post">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" type="text" id="name" name="visitor_name" placeholder="Ingresa tu nombre" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="form-group">
    <label for="email">Tu E-mail</label>
    <input class="form-control" type="email" id="email" name="visitor_email" placeholder="usuario@dominio.com" required>
  </div>
  <div class="form-group">
    <label for="department-selection">Tipo de Persona</label>
    <select id="department-selection" name="concerned_person" required>
        <option value="">Seleccionar</option>
        <option value="cliente">Cliente</option>
        <option value="administrador">Administrador</option>
        <option value="visitante">Visitante</option>
    </select>
  </div>
  <div class="form-group">
    <label for="title">Asunto</label>
    <input class="form-control" type="text" id="title" name="email_title" required placeholder="Conocer más sobre el proyecto" pattern=[A-Za-z0-9\s]{8,60}>
  </div>
  <div class="form-group">
    <label for="message">Escribe tu mensaje</label>
    <textarea class="form-control" id="message" name="visitor_message" placeholder="Escribe aquí lo que deseas." required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

</div>
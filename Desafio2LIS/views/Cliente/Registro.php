<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="http://localhost/Desafio2LIS/recursos/css/log.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body>
  <div class="container" id="main">
    <div class="sign-up">
      <form action="#">
        <h1>Crear cuenta</h1>
        <input type="text" name="nombre" placeholder="Nombre" required="">
        <input type="text" name="apellido" placeholder="Apellido" required="">
        <input type="email" name="correo" placeholder="Correo electronico" required="">
        <input type="password" name="contraseña" placeholder="Contraseña" required="">
        <button>Crear cuenta</button>
      </form>
    </div>
    <div class="sign-in">
      <form action="#">
        <h1>Iniciar sesión</h1>
        <input type="email" name="correo" placeholder="Correo electronico" required="">
        <input type="password" name="contraseña" placeholder="Contraseña" required="">
        <a href="#">Olvidaste tu contraseña?</a>
        <button>Iniciar sesión</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-left">
          <h1>Ya cuentas con registro?</h1>
          <p>Ingresa con tus credenciales aquí</p>
          <button id="signIn">Iniciar sesión</button>
        </div>
        <div class="overlay-right">
          <h1>Hola!</h1>
          <p>Si no posees registro con nosotros puedes crear tu cuenta aquí</p>
          <button id="signUp">Crear cuenta</button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const main = document.getElementById('main');

    main.classList.add("right-panel-active");

    signUpButton.addEventListener('click', () => {
      main.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
      main.classList.remove("right-panel-active");
    });
  </script>
</body>
</html>

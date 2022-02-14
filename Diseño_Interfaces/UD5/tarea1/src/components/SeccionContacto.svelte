<script>
  let name, surname, email;
  function checkForm() {
    if (name && email) {
      alert("formulario enviado");
      console.log("enviado");
    }
  }
</script>

<form on:submit|preventDefault={checkForm} action="../server.js" method="post">
  <fieldset>
    <legend>Registrate</legend>
    <label for="fname">Nombre:</label>
    <input type="text" name="name" id="fname" minlength="3" required bind:value={name} />
    <label for="fsurname">Apellidos:</label>
    <input type="text" name="surname" id="fsurname" bind:value={surname} />
    <label for="femail">Email:</label>
    <input type="text" name="email" id="femail" required bind:value={email} />
    <input type="submit" value="Enviar" />
  </fieldset>
</form>

<style>
    
  fieldset {
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    min-width: 25em;
    padding: 1em 2em;
    box-shadow: 2px 4px 3px 0 #6b8f8d;
    background-color: #c6d2e0;
  }

  legend {
    text-transform: uppercase;
    text-align: center;
    font: bold 1.3em black;
  }

  label {
    margin-top: 2em;
    margin-bottom: 0.5em;
    font-weight: bold;
  }

  input[type="text"] {
    border: none;
    border-bottom: 1px solid black;
    min-height: 2em;
  }

  input[type="submit"] {
    box-shadow: 2px 4px 3px 0 #6b8f8d;
    margin: 3em 0 1em 0;
    min-height: 2em;
    font-weight: bold;
  }
</style>

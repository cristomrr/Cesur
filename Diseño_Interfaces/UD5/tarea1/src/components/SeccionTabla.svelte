<script>
  async function getUsers() {
    const response = await fetch("https://jsonplaceholder.typicode.com/users?_limit=10");
    if (response.status === 200) {
      const result = await response.json();
      return result;
    } else {
      throw new Error("Error al intenmtar obtener los datos");
    }
  }
  const users = getUsers();
</script>

<section>
  <table>
    {#await users}
      <tfoot>
        <tr>
          <td>Cargando datos...</td>
        </tr>
      </tfoot>
    {:then value}
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Alias</th>
          <th>Email</th>
          <th>Website</th>
        </tr>
      </thead>
      <tbody>
        <!-- {@debug value} -->
        {#each value as user, i}
          <tr>
            <td>{user.name}</td>
            <td>{user.username}</td>
            <td>{user.email}</td>
            <td>{user.website}</td>
          </tr>
        {/each}
      </tbody>
      <tfoot>
        <tr>
          <td colspan="4">Un total de {Object.keys(value).length} usuarios registrados</td>
        </tr>
      </tfoot>
    {:catch error}
      <tfoot class="error">
        <tr>
          <td>Error: {error.message}</td>
        </tr>
      </tfoot>
    {/await}
  </table>
</section>

<style>
  section {
    margin: 2em;
    display: flex;
    justify-content: center;
    align-items: center;
    min-width: 25em;
  }

  table {
    border-collapse: collapse;
    border: 1px solid black;
    width: 100%;
  }

  tfoot {
    background-color: #0d86f027;
  }

  tfoot:not(.error) {
    color: green;
  }

  .error {
    color: #580505;
  }

  tr:nth-child(even) {
    background-color: #e8fcfb;
  }

  th,
  td {
    text-align: center;
    padding: 0.3em;
  }

  th {
    background: linear-gradient(to bottom, #d0e4f7 0%, #73b1e7 24%, #0a77d5 50%, #539fe1 79%, #87bcea 100%);
  }
</style>

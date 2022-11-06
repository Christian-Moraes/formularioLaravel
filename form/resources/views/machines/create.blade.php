<x-layout title='Cadastrar máquinas'>
  <h1>Cadastrar Máquinas</h1>

<form action="/cadastrar-maquina" method="post">
  @csrf
  <label>Nome:</label>
  <input type="text" name="name" id="name" placeholder="nome da máquina">
  <button type="submit">Cadastrar</button>
</form>

</x-layout>
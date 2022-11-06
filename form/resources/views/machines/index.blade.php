<x-layout title='Listar as máquinas'>
  <h1>Listar Máquinas</h1>



<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
    </tr>
  <tbody>
  @foreach ($machines as $machine)
  <tr>
    <td>{{$machine->id}}</td>
    <td>{{$machine->name}}</td>
  </tr>
  @endforeach
  </tbody>
</table>
</x-layout>
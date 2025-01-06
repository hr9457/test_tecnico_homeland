
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<h1>LISTADO DE PRODUCTOS</h1>
<button type="button" class="btn btn-primary">Agregar</button>
<!-- modal de registo de datos -->
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="p-5 table-responsive">
    <table class="table">
    <thead class="bg-info">
        <tr>
        <th scope="col">#</th>
        <th scope="col">codigo</th>
        <th scope="col">nombre</th>
        <th scope="col">cantidad</th>
        <th scope="col">fotografia</th>
        <th scope="col">precio</th>
        <th scope="col">ingreso</th>
        <th scope="col">vencimiento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($datos as $dato)
            <td>{{$dato->id_producto}}</td>
            <td>{{$dato->codigo_producto}}</td>
            <td>{{$dato->nombre}}</td>
            <td>{{$dato->cantidad}}</td>
            <td>{{$dato->fotografia}}</td>
            <td>{{$dato->precio}}</td>
            <td>{{$dato->fecha_ingreso}}</td>
            <td>{{$dato->fecha_vencimiento}}</td>
        @endforeach
        </tr>
    </tbody>
    </table>
</div>


</body>
</html>

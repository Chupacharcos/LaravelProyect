<div class="container" style="position: relative;top: 100px;">
    <h2 style="text-align: center;">Modificacion de datos del juego {{$listado->nombre_juego}}</h2>
    <div class="abs-center">
        <form action="/update/juego" class="border p-3 form">
            <input type="hidden" name="id_juego" class="form-control" value="{{$listado->id}}">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre_juego" class="form-control" value="{{$listado->nombre_juego}}">
            </div>
            <div class="form-group">
                <label>Año</label>
                <input type="text" name="year_juego" class="form-control" value="{{$listado->year_juego}}">
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="text" name="precio_juego" class="form-control" value="{{$listado->precio_juego}}">
            </div>

            <button type="submit" class="btn btn-primary">Modificar</button>
        </form>
    </div>
</div>

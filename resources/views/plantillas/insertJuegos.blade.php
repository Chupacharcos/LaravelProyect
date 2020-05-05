<div class="container" style="position: relative;top: 100px;">
    <h2 style="text-align: center;">Datos nuevo juego</h2>
    <div class="abs-center">
        <form action="/nuevo/juego/insert" class="border p-3 form">

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre_juego" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Año</label>
                <input type="text" name="year_juego" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="text" name="precio_juego" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Plataforma</label>
                <select name="plataforma" class="form-control" required>
                    @foreach($listado as $plataforma)
                        <option value="{{$plataforma->id}}">{{$plataforma->nombre_plataforma}}</option>
                    @endforeach


                </select>
            </div>

            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
    </div>
</div>

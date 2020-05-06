<div class="container" style="position: relative;top: 100px;">

    <h2>Listado de juegos</h2>
    <form action="/juegos/buscar" class="p-10 form-inline">

        <div class="form-group ">

            <input type="text" name="buscador_juego" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <table id="datatable">
        <thead>
        <th>Nombre</th>
        <th>Año</th>
        <th>Precio</th>
        <th>Plataforma</th>
        @if (Auth::check())
            <th>Options</th>
        @endif
        </thead>
        <tbody>

        @foreach($listado as $juego)
            <tr>
                <td>{{$juego->nombre_juego}}</td>
                <td>{{$juego->year_juego}}</td>
                <td>{{$juego->precio_juego}}€</td>
                <td>{{$juego->nombre_plataforma}}</td>
                @if (Auth::check())
                    <td>
                        <a href='/juegos/update/{{$juego->id}}' class='update_juego'><span
                                class="glyphicon glyphicon-pencil"></span></a>&nbsp&nbsp
                        <a href='/delete/juego/{{$juego->id}}' class='delete_juego'><span
                                class="glyphicon glyphicon-remove"></span></a>&nbsp&nbsp

                    </td>

                @endif
            </tr>

        @endforeach

        </tbody>
    </table>
    <div class="container-fluid">{{ $listado->links() }}</div>

</div>


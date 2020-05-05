<div class="container" style="position: relative;top: 100px;">
    <h2>Listado de plataformas</h2>
    <table id="datatable">
        <thead>
        <th>Nombre</th>
        <th>Año</th>

        </thead>
        <tbody>

        @foreach($listado as $plataforma)
            <tr>
                <td>{{$plataforma->nombre_plataforma}}</td>
                <td>{{$plataforma->year_plataforma}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>
</div>

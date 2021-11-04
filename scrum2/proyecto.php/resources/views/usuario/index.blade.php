Mostrar la lista de usuarios :)
b <table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>correo</th>
            <th>password</th>
            <th>acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $usuarios as $usuario )


        <tr>
            <td>{{ $usuario->id}}</td>
            <td>{{ $usuario->nombre}}</td>
            <td>{{ $usuario->correo}}</td>
            <td>{{ $usuario->password}}</td>
            <td>
            <a href="{{ url('/usuario/'.$usuario->id.'/edit') }}">
                    Editar |

            <form action="{{ url('/usuario/'.$usuario->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}

            <input  type="submit"  onclick= "return confirm('¿Quieres borrar?')"
            value="Borrar">
            </form>

            </td>

        </tr>

        @endforeach



    </tbody>
</table>

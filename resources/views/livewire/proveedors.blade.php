<div>
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                    
                @endforeach
                <tr class="">
                    <td scope="row">{{ $proveedor->id }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>

<table class="table">
    <tr>
        <th>id</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>

    @php
        $i=1;
    @endphp
    @foreach ($data as $item)
        <tr>
            
            <td>{{ $i++ }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->description }}</td>
            <td>
                <button class="btn btn-primary" onClick="show({{ $item->id }})">Edit</button>
                <button class="btn btn-danger" onClick="destroy({{ $item->id }})">Hapus</button>

            </td>

        </tr>
    @endforeach
</table>
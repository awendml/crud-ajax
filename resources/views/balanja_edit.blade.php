
    {{-- <img src="images/img1.jpg" class="card-img-top" alt="No gambara"> --}}
    <form action="{{ url('/update/'.$data->id) }}" method="post">
        @csrf
        <div class="form-group m-3">
            <div class="title mb-3">
                <label for="title">Nama produk</label>
                <input value="{{ $data->name }}" name="name" type="text" placeholder="Masukkan nama produk" class="form-control name"
                    id="title">
            </div>
            <div class="price mb-3">
                <label for="price">Harga produk</label>
                <input value="{{ $data->price }}" name="price" type="text" placeholder="Masukkan harga produk" id="price"
                    class="form-control price">
            </div>
            <div class="desc mb-3">
                <label for="desc">Deskripsi produk</label>
                <input value="{{ $data->description }}" name="desc" type="text" placeholder="Description" id="desc" class="form-control desc">
            </div>
        </div>
        <button type="submit" class="btn btn-primary submit" onClick="update({{ $data->id }})">Submit</button>
    </form>

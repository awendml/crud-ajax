<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>List Product</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

</head>
<body>
<!-- Button trigger modal -->

<!-- Button trigger modal -->

    <button type="button" class="btn btn-primary m-3" onClick="create()">
        Tambah data
    </button>

    <div id="read"></div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="page">

                </div>
            </div>

        </div>
        </div>
    </div> 
    <script>
$(document).ready(function(){
    read()
})

    // Read data
    function read() {
            $.get("{{ url('read') }}", {}, function(data, status) {
                $("#read").html(data);
            });
    };

    // Create data
    function create() {
        $.get("{{ url('create') }}", {}, function(data,status){
            $('#exampleModalLabel').html('Tambah data');
            $('#page').html(data);
            $('#exampleModal').modal('show');
        })
    }

    // Store data
    function store() {
        var name = $('#name').val();
        var price = $('#price').val();
        var desc = $('#desc').val();

        $.ajax({
            type: "POST",
            url: "{{ url('store') }}",
            data: {
                name: name,
                price: price,
                desc: desc
            },
            success: function(data) {
                $('.btn-close').click();
                read();
            }
        });
    }

        // Edit data
    function show(id) {
            $.get("{{ url('show') }}/" + id, {}, function(data,status){
                $('#exampleModalLabel').html('Ubah data');
                $('#page').html(data);
                $('#exampleModal').modal('show');
            })
    }

    function update(id) {
        var name = $('#name').val();
        var price = $('#price').val();
        var desc = $('#desc').val();

        $.ajax({
            type: "POST",
            url: "{{ url('update') }}/" + id,
            data: {
                name: name,
                price: price,
                desc: desc
            },
            success: function(data) {
                $('.btn-close').click();
                // read();
            }
        });

    }

    function destroy(id) {

        // confirm('Yakin ingin menghapus?');
        var name = $('#name').val();
        var price = $('#price').val();
        var desc = $('#desc').val();

        $.ajax({
            type: "GET",
            url: "{{ url('destroy') }}/" + id,
            data: {
                name: name,
                price: price,
                desc: desc
            },
            success: function(data) {
                $('.btn-close').click();
                read();
            }
        });

    }



    </script>
</body>
</html>
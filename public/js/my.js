$(document).ready(function () {
    let origin = location.origin

    $('#btn-create').click(function () {

        let name = $('#name').val();
        let price = $('#price').val();
        let color = $('#color').val();
        let desc = $('#desc').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let formData = new FormData();
        formData.append('name', name)
        formData.append('price', price)
        formData.append('color', color)
        formData.append('desc', desc)

        $.ajax({
            url: origin + '/products/create',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: function (result) {
                console.log(result)
                let html = '<div> Add Thanh Cong</div>'
                $('#message-create').html(html)
                $('#name').val('');
                $('#price').val('');
                $('#color').val('');
                $('#desc').val('');

            },

        })

    })

    function getListProducts() {

        $.ajax({
            url: origin + '/products',
            method: 'GET',
            success: function () {
                console.log('test')
            }
        })
    }

    getListProducts();

    function deleteProduct(id) {
        $.ajax({
            url: origin + '/products/' + id + '/delete',
            method: 'GET',
            success: function (result) {
                console.log(result)
                $('#products-' + id).remove();
            }
        })
    }

    $('.delete-product').click(function () {
        if (confirm('Are you sure?')) {
            let id = $(this).attr('data-id');
            deleteProduct(id)

        }
    })

    $('#btn-update').click(function () {

        let name = $('#name').val();
        let price = $('#price').val();
        let color = $('#color').val();
        let desc = $('#desc').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let idUpdate = $(this).attr('data-update');

        let formData = new FormData();
        formData.append('name', name);
        formData.append('price', price);
        formData.append('color', color);
        formData.append('desc', desc);

        $.ajax({
            url: origin + '/products/' + idUpdate + '/edit',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: function (result) {
                console.log(result)
            }
        })


    })

    $('#search-product').on('keyup',function (){

        let value = $(this).val();
        console.log(value)
        $.ajax({
            url: origin + '/products/search',
            type: 'GET',
            dataType: 'json',
            data: {
                keyword: value
            },
            success: function (result){
                console.log(result)
                let html = '';

                $.each(result, function (index, item){

                    html += '<tr id="products-'+item.id+'">';
                    html += '<th scope="row">';
                    html += index+1;
                    html += '</th>';
                    html += '<td>';
                    html += item.name;
                    html += '</td>';
                    html += '<td>';
                    html += item.price;
                    html += '</td>';
                    html += '<td>';
                    html += item.color;
                    html += '</td>';
                    html += '<td>';
                    html += item.desc;
                    html += '</td>';
                    html += '<td>';
                    html += '<a href="http://127.0.0.1:8000/products/'+item.id+'/edit">Edit</a>';
                    html += '</td>';
                    html += '<td>';
                    html += '<button class="delete-product" data-id="'+item.id+'">Delete</button>';
                    html += '</td>';



                })
                $('#list-products').html(html)
            }
        })

    })





})

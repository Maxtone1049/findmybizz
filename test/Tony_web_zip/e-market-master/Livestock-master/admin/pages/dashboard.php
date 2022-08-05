<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <h4>Dashboard</h4>
        </div>
    </div>
    <div class="col-lg-6 mb-4">
            <!-- List of Category card -->
            <div class="card">

                <div class="card-header">
                    <strong class="card-title">
                        <i class="fa fa-list"></i> List of Products
                    </strong>
                </div>

                <div class="card-body p-0" style="max-height:400px; overflow-y:auto; overflow-x:hidden;">
                    <ul class="list-group" id="complete_list">
                        
                    </ul>
                </div>
            </div>
        </div>
</div>
<script>
     function fetchProduct(){
        $.ajax({
            type: 'post',
            url: './backend/product_mngr.php',
            data: {action: 'fetch_products'},
            dataType: 'json',
            success: function(response){
                if(response.status === 'success'){
                    $list = '';
                    response.product_list.forEach(function (list) {
                        // console.log(list);
                        $list += `<li class="list-group-item row" id="${list.id}">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="../images/products/${list.image}" style="max-width:100%" />
                                        </div>
                                        <div class="col-8">
                                            <h3>${list.product}</h3>
                                            <p>

                                            </p>
                                            <a href="?id=${list.id}#update_products" class="float-right py-1 px-2 update_product" role="button">
                                                <i class="fas fa-edit text-primary"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>`;
                    });
                    $('#complete_list').html($list)
                }
            }
        })
    }
    fetchProduct();
</script>
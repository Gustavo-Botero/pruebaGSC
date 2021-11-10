function agregar(id)
{   
    let button = $('.'+id)
    let url = button.data('route');
    button.attr('disabled',true);
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (response) {
            let tr,valorTotalAcumulado;
            
            tr = `<tr>
                            <th>1 <i onclick('incrementar()') class="fas fa-plus-square"></i> <i class="fas fa-minus-square"></i></th>
                            <td>${response.name}</td>
                            <td>${response.value}</td>
                            <td class="valorAcumulado">${response.value}</td>
                            <td><i class="fas fa-trash-alt"></i></td>
                        </tr>`;
            $('.tBody').append(tr);
            
            $('.cantidadProducto' + response.id).html(response.amount);

            valorTotalAcumulado = parseFloat($('.valorTotalAcumulado').html());
            $('.valorTotalAcumulado').html(valorTotalAcumulado + parseFloat(response.value));
            
        }
    });
}
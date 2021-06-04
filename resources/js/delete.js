$(function()
{
    $('.delete').click(function()
    {
        Swal.fire
        ({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it'
        })
        .then((result) => 
        {
            if (result.isConfirmed) 
                {
                    Swal.fire
                    (
                    'Deleted!',
                    'Your imaginary file has been deleted.',
                    'success'
                    )
                $.ajax
                ({
                    method: "DELETE",
                    url: deleteurl + $(this).data("id")
                    //data: {id: $(this).data("id")}
                })
                .done(function(response)
                {
                    window.location.reload();
                })
                .fail(function(data)
                {
                    Swal.fire('Oops...', data.responseJSON.message, data.responseJSON.status)
                });
            } 
        })

    });
});
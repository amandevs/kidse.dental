<x-dashboard-layout>

    {{-- Page Header --}}

    <x-slot name="header">
        <h4 class="text-gray-900 fw-600 px-4">
            {{ __('Order') }}
        </h4>
    </x-slot>

    <div class="py-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-1">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Varient</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($orders as $order)
                                    <tr>
                                        <th scope="row">{{$order->product['title']}}</th>
                                        <td>{{$order['varient_name']}}</td>
                                        <td>Rs. {{$order['price']}}</td>
                                        <td>

                                            @if ($order['status'] == 'completed')
                                                <span class="badge bg-warning" style="font-size: 12px">Pending</span>
                                            @elseif ($order['status'] == 'approved')                                                
                                                <span class="badge bg-info text-dark" style="font-size: 12px">Approved</span>

                                            @elseif ($order['status'] == 'shipped')                                                
                                                <span class="badge bg-primary" style="font-size: 12px">Shipped</span>

                                            @elseif ($order['status'] == 'delivered')                                                
                                                <span class="badge bg-success" style="font-size: 12px">Delivered</span>

                                            @elseif ($order['status'] == 'cancelled')                                                
                                                <span class="badge bg-danger" style="font-size: 12px">Cancelled</span>

                                            @endif

                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="order-{{$order->id}}">Update Status</a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                            </table>
                            {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <button type="button" class="btn btn-primary" >Open modal for @mdo</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> --}}



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Order Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <form id="modal-form" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Update Status:</label>
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option value="approved">Approved</option>
                                <option value="shipped">Shipped</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>

        var exampleModal = document.getElementById('exampleModal')
            // exampleModal.addEventListener('show.bs.modal', function (event) {
            // // Button that triggered the modal
            // var button = event.relatedTarget
            // // Extract info from data-bs-* attributes
            // var recipient = button.getAttribute('data-bs-whatever')
            // // If necessary, you could initiate an AJAX request here
            // // and then do the updating in a callback.
            // //
            // // Update the modal's content.
            // var modalTitle = exampleModal.querySelector('.modal-title')
            // var modalBodyInput = exampleModal.querySelector('.modal-body input')

            // modalTitle.textContent = 'New message to ' + recipient
            // modalBodyInput.value = recipient
            // });


                    exampleModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            var orderId = button.getAttribute('data-bs-whatever');
            
            // Update the form's action attribute
            var modalForm = document.getElementById('modal-form');
            modalForm.action = '/admin/order/' + orderId +'/update';

            // Optionally, update modal's content if needed
            var modalTitle = exampleModal.querySelector('.modal-title');
            modalTitle.textContent = 'Update Order Status for Order #' + orderId;
        });
    </script>

</x-dashboard-layout>
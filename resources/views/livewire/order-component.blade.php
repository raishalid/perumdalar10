<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="container">
        <div class="row d-flex">
            <div class="accordion " id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header bg-gradient-primary rounded btn-icon btn-3 w-70" id="headingOne">
                        <button class="accordion-button collapsed btn btn-icon btn-2 btn-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne"><span class="btn-inner--icon"><i
                                    class="ni ni-basket"></i></span>
                            <span></span><span style="margin-left: 1rem">Lihat Order</span><span class="btn-inner--icon"
                                style="margin-left: 1rem"><i class="ni ni-bold-down"></i></span><span
                                style="margin-left: 1rem">Saldo Deposit : Rp.
                                {{-- {{ number_format($deposit, 0, ',', '.') }}  --}}
                            </span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Item</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Price</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Qty</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Total</th>
                                                <th class="text-secondary opacity-7">
                                                    APA
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tempOrders as $key => $order)
                                                <tr>
                                                    <td>
                                                        <small>{{ $order['product']['name'] }}</small>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <small>{{ $order['price'] }}</small>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <input type="number"
                                                            wire:model.defer="tempOrders.{{ $key }}.quantity"
                                                            class="form-control">
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <small>{{ $order['total_price'] }}</small>
                                                    </td>
                                                    <td>
                                                        <button wire:click="updateOrder({{ $order['id'] }})"
                                                            class="btn btn-success">Save</button>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="cart-prodlist">
                                <div class="cart-title">
                                    <h1>ORDER CART</h1>
                                    <div class="cart-table">

                                        <p>Item Order :</p>
                                        <div class="cart-items">
                                            <table>
                                                <tr>
                                                    <small>No</small>
                                                    <small>Product</small>
                                                    <small>Harga</small>
                                                    <small>Qty</small>
                                                    <small>Total Harga</small>
                                                </tr>

                                            </table>



                                        </div>
                                        <p></p>
                                        <p></p>
                                        <p>Total : Rp 12.500.000</p>
                                        <p>Total Discount Item : Rp.120.000</p>
                                        <p>Coupon yang digunakan : H7EBT89</p>
                                        <p>Nilai Discount Coupon : Rp. 15.000</p>
                                        <p>Pajak (PPN) : Rp. 15.000</p>
                                        <p>Total Order setelah Pajak : Rp. 12.380.000</p>
                                        <p>Status Order : </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

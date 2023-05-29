<div class="ecommerce_order">
    {{-- Care about people's approval and you will be their prisoner. --}}
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
                                {{ number_format($deposit, 0, ',', '.') }} </span>
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
                                                        <small> {{ $key + 1 }}. {{ $order->product->name }}</small>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <small>{{ $order->price }}</small>

                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <small>{{ $order->quantity }}</small>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <small>{{ $order->total_price }}</small>
                                                    </td>
                                                    <td>
                                                        Edit
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


    {{-- end acordion --}}
    <div>
        <div class="order-prodlist">
            <div class="container">
                <div class="row w-70">
                    <div class="input-group mb-3 w-60">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                        <input type="text" wire:model="searchTerm" placeholder="Search products"
                            wire:change="$emit('refreshComponent')" class="form-control">
                    </div>
                    <div class="form-check mb-3" class="margin-left:2rem">
                        <input class="form-check-input" type="checkbox" wire:model="showActiveOnly" id="fcustomCheck1">
                        <label class="form-check-label" for="fcustomCheck1">Hanya Produk Aktif</label>
                    </div>
                </div>
            </div>
            <!--- Other dropdown menus --->
            <div class="row d-flex">
                @foreach ($products as $product)
                    <div wire:key="{{ $product->id }}"
                        class="card rounded shadow-sm border-0 col-lg-4 col-md-4 col-sm-1 mb-2 me-2 bg-light bg-gradient"
                        style="height: 700px;" data-product-id="{{ $product->id }}" x-data="{ quantity: 0, price: {{ $product->price }} }">
                        <span
                            class="position-absolute top-0 start-40 translate-middle badge rounded-pill bg-gradient-primary">New</span>
                        <div class="card-body p-2 h-100 " style="border-radius: 1rem; width:100%">
                            <img src="{{ asset('/images/gbrprod/' . $product->pict1) }}" alt=""
                                class="img-fluid d-block mx-auto mb-3 h-50" style="border-radius: 1rem; width:100%">
                            <p class="card-title"><strong>{{ $product->name }}</strong></p>
                            <p class="card-text product-price ">
                                {{ number_format($product->price, 0, ',', '.') }}
                            </p>
                            <div id="hitung">
                            </div>
                            <div>
                                <div>
                                    @if (!isset($inputA[$product->id]))
                                        @php
                                            $inputA[$product->id] = 0;
                                        @endphp
                                    @endif
                                    <input type="number" name="inputA" wire:model="inputA.{{ $product->id }}"
                                        min="0" placeholder="0" class=" rounded ">
                                    <p>Harga Total: {{ $product->price * $inputA[$product->id] }}</p>
                                </div>
                                <button class="btn btn-outline-primary btn-sm"
                                    wire:click="processCart({{ $product->id }}, '{{ $inputA[$product->id] }}')">Order
                                </button>

                            </div>
                        </div>

                    </div>
                @endforeach
                <div class="text-start" style="width:100%; padding-right:10rem">

                    {{ $products->links() }}

                </div>
            </div>
        </div>
    </div>






    {{-- <p class="card-text">{{ $product->pict2 }}</p>
// <p class="card-text">SKU: {{ $product->sku }}</p>
// <p class="card-text">Price: {{ $product->price }}</p>
// <p class="card-text">Cost: {{ $product->cost }}</p>
// <p class="card-text">Quantity: {{ $product->quantity }}</p>
// <p class="card-text">weight: {{ $product->weight }}</p>  --}}

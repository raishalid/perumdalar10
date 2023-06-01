<div class="ecommerce_order">
    {{-- Care about people's approval and you will be their prisoner. --}}
    @livewire('order-component')


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
                                    {{-- <p>Harga Total: {{ $product->price * $inputA[$product->id] }}</p> --}}
                                </div>
                                <button class="btn btn-outline-primary btn-sm"
                                    wire:click="processCart({{ $product->id }}, '{{ $inputA[$product->id] }}')">Tambah
                                    ke Keranjang
                                </button>


                            </div>
                        </div>

                    </div>
                @endforeach
                @if (session()->has('message'))
                    <div class="alert alert-secondary alert-dismissible fade show" role="alert"
                        style="color:aliceblue; position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%); width:20rem">
                        <span class="alert-icon" style="width:2rem;height:2rem"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Info!</strong>
                            {{ session('message') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                            style="width:2rem;height:2rem; font-size:2rem">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="text-start" style="width:100%; padding-right:10rem">

                    {{ $products->links() }}

                </div>
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

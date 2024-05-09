@extends('layout.main')

@section('content')
<div class="container">
    <div class="row row-cols-3">
        @foreach ($products as $product )

        <div class="col">
                <div class="card">

                    <div class="card-images">
                        <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" :alt="{{$product['frontImage']}}">
                        <img class="secondary-image" src="{{ Vite::asset('resources/img/' . $product['backImage']) }}" alt="{{$product['backImage']}}">
                        <div class="favourite">
                        <i class="fa-solid fa-heart"></i>
                        </div>

                        <div class="badges">
                            <!-- mi mette prima sostenibilità e poi la percentuale di sconto perche sono cosi nel database, ma se volessi metterli al contrario? -->
                            @foreach ($product['badges'] as $badge )

                            <span class="badge" class="{{$badge['type']}}">{{ $badge['value'] }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-text">
                        <div class="brand">{{ $product['brand'] }}</div>
                        <div class="product-name">{{ $product['name']}}</div>
                        <div class="price">
                            {{-- <span class="new_price" v-if= "getDiscount(product)">{{ getDiscount(product) }} &euro;</span> --}}
                            <span class="new_price"
                            class="{ 'old_price': getDiscount(product) }">{{ $product['price'] }}&euro;</span>

                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
@endsection

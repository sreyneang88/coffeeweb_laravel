@extends('layouts.main')

@section('content')
<<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">About Us</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">About Us</p>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>

						@if(Session::has('cart'))
          				@foreach(Session::get('cart') as $product)

					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="{{asset('image/'.$product['image']) }}"> </div>
									<div class="col-sm-10">
										<h4 class="nomargin">{{ $product['name']}} </h4>
										<p>{{ $product['name']}}</p>
										<small><span>$</span>{{ $product['price'] }}</small>
                            			<br>
                            				<form method="POST" action="{{route('remove_from_cart')}}">
                                				<input type="hidden" name="id" value="{{ $product['id']}}">
                                				<input type="submit" name="remove_btn" class="remove-btn"value="remove">
                            				</form>
											</div>
                        </div>
                    </td>
                <td>
                    <form>
                        <input type="number" name="quantity" value="{{$product['quantity']}}">
                        <input type="submit" name="edit" class="edit-btn" name="edit_product_quantity_btn">
                    </form>
                </td>

                <td>
                    <span class="products-price">${{ $product['price'] * $product['quantity']}}</span>
                </td>
            </tr>
						@endforeach
           				@endif
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>

			</div>



@endsection
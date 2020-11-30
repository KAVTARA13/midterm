<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<h4>Create Post:</h4>
	<div class="container card">
		<form method="POST" action="{{route("adminstore")}}">
			@csrf
		<label>IMG</label>
		<textarea class="form-control" name="img"></textarea>

	  <div class="form-group">
	    <label for="exampleInputEmail1">title</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter title" name="title"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">price</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter title" name="price"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">inStock</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="inStock"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">code</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="code"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">brand</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="brand"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">type</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="type"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">model</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="model"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">caliber</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="caliber"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">weight</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="weight"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">length</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="length"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">cartridgeNumber</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="cartridgeNumber"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">manufacturer</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="manufacturer"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">tight</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter description" name="tight"></div>

	  <button type="submit" class="btn btn-primary">Save</button>
	</form>

	<table class="table">
		<h4>Messages:</h4>
			<tr>
				<td>სახელი</td>
				<td>გვარი</td>
				<td>მეილი</td>
				<td>ტექსტი</td>
			</tr>
			@foreach ($message as $message)
				<tr>
				<td>{{$message->name}}</td>
				<td>{{$message->surname}}</td>
				<td>{{$message->mail}}</td>
				<td>{{$message->text}}</td>
				</tr>
			@endforeach
		</table>
	<h4>Posts:</h4>
	<table class="table">
			@foreach ($products as $product)
				<div class="product-item ">
                                                    <div class="product-thumb">
                                                        <a href="{{ route('name',['id'=>$product->id]) }}">
                                                                <img src="{{$product->img}}" alt="{{$product->brand}}" style="height:200px;object-fit:contain">
                                                            </a>
                                                    </div>
                                                    <div class="product-caption newProduct">
                                                        <div class="manufacture-product">
                                                            <p>

                                                                {{$product->brand}}

                                                            </p>
                                                        </div>
                                                        <div class="product-name">
                                                            <h4><a href="{{ route('name',['id'=>$product->id]) }}">{{$product->title}}</a></h4>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                            <span class="yellow"><i class="lnr lnr-star"></i></span>
                                                        </div>
                                                        <div class="price-box priceToBottom">
                                                            <span class="regular-price">{{$product->price}} ₾</span>
                                                        </div>

                                                    </div>
                                                </div>
					<form action="{{ route('admindelete') }}" method="POST">
						@csrf
						<input type="hidden" name="id" value="{{$product->id}}">
						<button class="btn btn-danger">
						წაშლა
					</button>
					<a href="{{ route('adminedit',['id'=>$product->id]) }}" class="btn btn-warning">
						განახლება
					</a>
					</form>
			@endforeach
		</table>

	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
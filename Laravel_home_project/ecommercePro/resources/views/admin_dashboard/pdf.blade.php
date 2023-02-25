<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Order Details</h1>
    Customer name :<h3 class="text-red"><span>{{$orders->name}}</span></h3>
    Customer Email :  <h3 class="text-red"><span>{{$orders->email}}</span></h3>
    Customer Address : <h3 class="text-red"><span>{{$orders->address}}</span></h3>
    Customer Phone :<h3 class="text-red"><span>{{$orders->phone}}</span></h3>
    Product Title : <h3 class="text-red"> <span>{{$orders->product_title}}</span></h3>
    Product Price  :<h3 class="text-red"> <span>{{$orders->price}}</span></h3>
    Product Title :<h3 class="text-red"> <span>{{$orders->quantity}}</span></h3>
    Payment Status: <h3 class="text-red"> <span>{{$orders->payment_status}}</span></h3>
    Delivery Status: <h3 class="text-red"> <span>{{$orders->delivery_status}}</span></h3>

Product Image:
<img src="product_photos/{{$orders->image}}" alt="product image" height="250" width="450">
</body>
</body>
</html>

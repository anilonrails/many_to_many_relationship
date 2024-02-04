<h2>Welcome</h2>

@php
$order = \App\Models\Order::find(1);

$total_cost= 0;
foreach ($order->foods as $food){
    $cost = $food->price * $food->pivot->quantity;
    $total_cost += $cost;
}


@endphp

Total cost is: {{$total_cost}}

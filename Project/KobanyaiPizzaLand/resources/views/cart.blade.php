<!-- resources/views/cart.blade.php -->
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaLand - Kosár</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('images/logo/logo.png') }}" type="image/png">
</head>
<body>

    @include('header')

    <section>
        <div class="container">
            <h2>Kosár tartalma</h2>

            @if($cart && count($cart) > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Pizza név</th>
                            <th>Ár (Ft)</th>
                            <th>Extra feltétek</th>
                            <th>Mennyiség</th>
                            <th>Összesen</th>
                            <th>Műveletek</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $id => $item)
                            <tr data-id="{{ $id }}">
                                <td data-label="Pizza név">{{ $item['name'] }}</td>
                                <td data-label="Ár (Ft)">{{ $item['price'] }} Ft</td>
                                <td data-label="Extra feltétek">
                                    @if(isset($item['extras']) && count($item['extras']) > 0)
                                        @foreach($item['extras'] as $extra)
                                            {{ $extra['name'] }} ({{ $extra['price'] }} Ft)<br>
                                        @endforeach
                                    @else
                                        Nincs extra feltét
                                    @endif
                                </td>
                                <td data-label="Mennyiség">
                                    <input type="number" id="cart_input" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width: 50px;" class="quantity-input">
                                </td>
                                <td data-label="Összesen" class="item-total">{{ $item['price'] * $item['quantity'] + array_sum(array_map(fn($extra) => $extra['price'], $item['extras'] ?? [])) * $item['quantity'] }} Ft</td>
                                <td data-label="Műveletek">
                                    <form action="{{ route('cart.remove', $id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn-remove">Törlés</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <p class="total">Teljes összeg: <span id="total-amount2">{{ session('cartTotal', 0) }} Ft</span></p>
                <button class="btn-payment"><a href="{{ route('payment') }}">Fizetés</a></button><br>
                <button class="btn-back"><a href="/">Vissza a főoldalra</a></button>
            @else
                <p class="empty-cart">A kosár üres.</p>
            @endif
        </div>
    </section>

    @include('footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.quantity-input').on('change', function() {
                var quantity = $(this).val();
                var id = $(this).closest('tr').data('id');

                $.ajax({
                    url: '/cart/update/' + id,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        quantity: quantity
                    },
                    success: function(response) {
                        // Frissítjük az adott tétel összegét
                        $('[data-id="' + id + '"] .item-total').text(response.itemTotal + ' Ft');
                        // Frissítjük a teljes összeget
                        $('#total-amount').text(response.total + ' Ft');
                        $('#total-amount2').text(response.total + ' Ft');
                    }
                });
            });
        });
    </script>
</body>
</html>

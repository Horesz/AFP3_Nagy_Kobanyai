<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaLand</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <img src="{{ asset('images/logo.png') }}" alt="PizzaLand" id="logo">
            <nav>
                <a href="#">Kezdőlap</a>
                <a href="/">Menü</a>
                <a href="#">Akciók</a>
                <a href="#">Kapcsolat</a>
                <a id="cart" href="{{ route('cart.view') }}"><i class="fas fa-shopping-bag"></i> Kosár</a>
            </nav>
        </div>
    </header>
    <section>
        <div class="container">
            <h2>Kosár tartalma</h2>


            @if($cart)
                <table>
                    <thead>
                        <tr>
                            <th>Pizza név</th>
                            <th>Ár (Ft)</th>
                            <th>Mennyiség</th>
                            <th>Összesen</th>
                            <th>Műveletek</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $id => $item)
                            <tr data-id="{{ $id }}">
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['price'] }} Ft</td>
                                <td>
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width: 50px;" class="quantity-input">
                                </td>
                                <td class="item-total">{{ $item['price'] * $item['quantity'] }} Ft</td>
                                <td>
                                    <form action="{{ route('cart.remove', $id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn-remove">Törlés</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <p class="total">Teljes összeg: <span id="total-amount">{{ array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)) }}</span> Ft</p>

                <a href="/" class="btn-back">Vissza a főoldalra</a>
            @else
                <p class="empty-cart">A kosár üres.</p>
            @endif
        </div>

    <section>
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
                        $('[data-id="' + id + '"] .item-total').text(response.itemTotal + ' Ft');
                        $('#total-amount').text(response.total + ' Ft');
                    }
                });
            });
        });
    </script>
</body>
</html>

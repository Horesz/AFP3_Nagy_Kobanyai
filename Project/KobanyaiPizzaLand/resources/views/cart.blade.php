<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kosár</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #ff6347;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        th {
            background-color: #ff6347;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .total {
            text-align: right;
            font-size: 18px;
            font-weight: bold;
            padding-top: 20px;
        }
        .btn-back, .btn-remove {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-back {
            background-color: #333;
        }
        .btn-remove {
            background-color: #ff6347;
        }
        .btn-back:hover {
            background-color: #555;
        }
        .btn-remove:hover {
            background-color: #ff3333;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
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

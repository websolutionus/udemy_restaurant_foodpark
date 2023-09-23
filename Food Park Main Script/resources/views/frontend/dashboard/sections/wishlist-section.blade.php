<div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel" aria-labelledby="v-pills-wishlist-tab">
    <div class="fp_dashboard_body">
        <h3>Wishlist</h3>
        <div class="fp_dashboard_order">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr class="t_header">
                            <th>No</th>
                            <th style="width: 40%">Product</th>
                            <th>Stock</th>
                            <th>action</th>

                        </tr>
                        @foreach ($wishlist as $item)
                        <tr>
                            <td>
                                <h5>{{ ++$loop->index }}</h5>
                            </td>
                            <td style="width: 40%">
                                {{ $item->product->name }}
                            </td>
                            <td>
                                @if ($item->product->quantity > 0)
                                    <h5 class="text-success">In Stock</h5>
                                @else
                                    <h5 class="text-danger">Out of Stock</h5>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('product.show', $item->product->slug) }}" class="view_invoice">View Product</a>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

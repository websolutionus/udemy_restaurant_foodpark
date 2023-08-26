<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <div class="fp_dashboard_body">
        <h3>order list</h3>
        <div class="fp_dashboard_order">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr class="t_header">
                            <th>Order</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($orders as $order)
                        <tr>
                            <td>
                                <h5>#{{ $order->invoice_id }}</h5>
                            </td>
                            <td>
                                <p>{{ date('F d, Y', strtotime($order->created_at)) }}</p>
                            </td>
                            <td>
                                @if ($order->order_status === 'pending')
                                <span class="active">Pending</span>
                                @elseif ($order->order_status === 'in_process')
                                <span class="active">In Process</span>
                                @elseif ($order->order_status === 'delivered')
                                <span class="complete">Delivered</span>
                                @elseif ($order->order_status === 'declined')
                                <span class="cancel">Declined</span>
                                @endif
                            </td>
                            <td>
                                <h5>{{ currencyPosition($order->grand_total) }}</h5>
                            </td>
                            <td><a class="view_invoice" onclick="viewInvoice('{{ $order->id }}')">View Details</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        @foreach ($orders as $order)
        <div class="fp__invoice invoice_details_{{ $order->id }}">
            <a class="go_back"><i class="fas fa-long-arrow-alt-left"></i> go back</a>
            <div class="fp__track_order">
                <ul>

                    @if ($order->order_status === 'declined')

                    <li class="
                    declined_status 
                    {{ in_array($order->order_status, ['declined']) ? 'active' : '' }}
                    ">order declined</li>
                    @else
                    <li class="
                    {{ in_array($order->order_status, ['pending', 'in_process', 'delivered', 'declined']) ? 'active' : '' }}
                    ">order pending</li>
                    <li class="
                    {{ in_array($order->order_status, ['in_process', 'delivered', 'declined']) ? 'active' : '' }}
                    ">order in process</li>
                    <li class="
                    {{ in_array($order->order_status, ['delivered']) ? 'active' : '' }}
                    ">order delivered</li>
                    @endif
                    {{-- <li>on decliend</li> --}}
                </ul>
            </div>
            <div class="fp__invoice_header">
                <div class="header_address">
                    <h4>invoice to</h4>
                    <p>7232 Broadway Suite 308, Jackson Heights, 11372, NY, United
                        States</p>
                    <p>+1347-430-9510</p>
                </div>
                <div class="header_address">
                    <p><b>invoice no: </b><span>4574</span></p>
                    <p><b>Order ID:</b> <span> #4789546458</span></p>
                    <p><b>date:</b> <span>10-11-2022</span></p>
                </div>
            </div>
            <div class="fp__invoice_body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr class="border_none">
                                <th class="sl_no">SL</th>
                                <th class="package">item description</th>
                                <th class="price">Price</th>
                                <th class="qnty">Quantity</th>
                                <th class="total">Total</th>
                            </tr>
                            <tr>
                                <td class="sl_no">01</td>
                                <td class="package">
                                    <p>Hyderabadi Biryani</p>
                                    <span class="size">small</span>
                                    <span class="coca_cola">coca-cola</span>
                                    <span class="coca_cola2">7up</span>
                                </td>
                                <td class="price">
                                    <b>$120</b>
                                </td>
                                <td class="qnty">
                                    <b>2</b>
                                </td>
                                <td class="total">
                                    <b>$240</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="sl_no">02</td>
                                <td class="package">
                                    <p>Daria Shevtsova</p>
                                    <span class="size">medium</span>
                                    <span class="coca_cola">coca-cola</span>
                                </td>
                                <td class="price">
                                    <b>$120</b>
                                </td>
                                <td class="qnty">
                                    <b>2</b>
                                </td>
                                <td class="total">
                                    <b>$240</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="sl_no">03</td>
                                <td class="package">
                                    <p>Hyderabadi Biryani</p>
                                    <span class="size">large</span>
                                    <span class="coca_cola2">7up</span>
                                </td>
                                <td class="price">
                                    <b>$120</b>
                                </td>
                                <td class="qnty">
                                    <b>2</b>
                                </td>
                                <td class="total">
                                    <b>$240</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="sl_no">04</td>
                                <td class="package">
                                    <p>Hyderabadi Biryani</p>
                                    <span class="size">medium</span>
                                    <span class="coca_cola">coca-cola</span>
                                    <span class="coca_cola2">7up</span>
                                </td>
                                <td class="price">
                                    <b>$120</b>
                                </td>
                                <td class="qnty">
                                    <b>2</b>
                                </td>
                                <td class="total">
                                    <b>$240</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="sl_no">05</td>
                                <td class="package">
                                    <p>Daria Shevtsova</p>
                                    <span class="size">large</span>
                                </td>
                                <td class="price">
                                    <b>$120</b>
                                </td>
                                <td class="qnty">
                                    <b>2</b>
                                </td>
                                <td class="total">
                                    <b>$240</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="sl_no">04</td>
                                <td class="package">
                                    <p>Hyderabadi Biryani</p>
                                    <span class="size">medium</span>
                                    <span class="coca_cola">coca-cola</span>
                                    <span class="coca_cola2">7up</span>
                                </td>
                                <td class="price">
                                    <b>$120</b>
                                </td>
                                <td class="qnty">
                                    <b>2</b>
                                </td>
                                <td class="total">
                                    <b>$240</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="sl_no">04</td>
                                <td class="package">
                                    <p>Hyderabadi Biryani</p>
                                    <span class="size">medium</span>
                                    <span class="coca_cola">coca-cola</span>
                                    <span class="coca_cola2">7up</span>
                                </td>
                                <td class="price">
                                    <b>$120</b>
                                </td>
                                <td class="qnty">
                                    <b>2</b>
                                </td>
                                <td class="total">
                                    <b>$240</b>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="package" colspan="3">
                                    <b>sub total</b>
                                </td>
                                <td class="qnty">
                                    <b>12</b>
                                </td>
                                <td class="total">
                                    <b>$755</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="package coupon" colspan="3">
                                    <b>(-) Discount coupon</b>
                                </td>
                                <td class="qnty">
                                    <b></b>
                                </td>
                                <td class="total coupon">
                                    <b>$0.00</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="package coast" colspan="3">
                                    <b>(+) Shipping Cost</b>
                                </td>
                                <td class="qnty">
                                    <b></b>
                                </td>
                                <td class="total coast">
                                    <b>$10.00</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="package" colspan="3">
                                    <b>Total Paid</b>
                                </td>
                                <td class="qnty">
                                    <b></b>
                                </td>
                                <td class="total">
                                    <b>$765</b>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <a class="print_btn common_btn" href="#"><i class="far fa-print"></i> print
                PDF</a>

        </div>
        @endforeach
    </div>
</div>

@push('scripts')
    <script>
        function viewInvoice(id){
            $(".fp_dashboard_order").fadeOut();
            $(".invoice_details_"+id).fadeIn();
        }

        $(document).ready(function(){

        })
    </script>
@endpush

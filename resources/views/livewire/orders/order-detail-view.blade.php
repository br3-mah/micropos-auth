<div>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar d-flex flex-stack mb-3 mb-lg-5" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack flex-wrap">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column me-5 py-2">
                    <!--begin::Title-->
                    
                    <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Order Details</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Orders</li>
                        
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Order Details</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Wrapper-->
                    
                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    {{-- <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a> --}}
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Order details page-->
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto">
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary">Order Summary</a>
                            </li>
                            <!--end:::Tab item-->
                            <!--begin:::Tab item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history">Order History</a>
                            </li>
                            <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->
                        <!--begin::Button-->
                     
                        <!--end::Button-->
                        <!--begin::Button-->
                        {{-- <a href="../../demo10/dist/apps/ecommerce/sales/edit-order.html" class="btn btn-success btn-sm me-lg-n7">Edit Order</a> --}}
                        <!--end::Button-->
                        <!--begin::Button-->
                        {{-- <a href="../../demo10/dist/apps/ecommerce/sales/add-order.html" class="btn btn-primary btn-sm">Add New Order</a> --}}
                        <!--end::Button-->
                    </div>
                    <!--begin::Order summary-->
                    <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                        <!--begin::Order details-->
                        <div class="card card-flush py-4 flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Order Details (#{{$order_view[0]->id}})</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-calendar fs-2 me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>Date Added</div>
                                                </td>
                                                <td class="fw-bold text-end">{{$order_view[0]->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-wallet fs-2 me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>Payment Method</div>
                                                </td>
                                                <td class="fw-bold text-end">Online
                                                <img src="{{ asset('public/assets/media/svg/card-logos/visa.svg')}}" class="w-50px ms-2" /></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-truck fs-2 me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>Shipping Method</div>
                                                </td>
                                                <td class="fw-bold text-end">Any</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Order details-->
                        <!--begin::Customer details-->
                        <div class="card card-flush py-4 flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Customer Details</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-profile-circle fs-2 me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>Customer</div>
                                                </td>
                                                <td class="fw-bold text-end">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <!--begin:: Avatar -->
                                                        {{-- <div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                            <a href="#">
                                                                <div class="symbol-label">
                                                                    <img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
                                                                </div>
                                                            </a>
                                                        </div> --}}
                                                        <!--end::Avatar-->
                                                        <!--begin::Name-->
                                                        <a href="#" class="text-gray-600 text-hover-primary">{{ $order_view[0]->billing_first_name.' '.$order_view[0]->billing_last_name }}</a>
                                                        <!--end::Name-->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-sms fs-2 me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>Email</div>
                                                </td>
                                                <td class="fw-bold text-end">
                                                    <a href="mailto:{{$order_view[0]->billing_email}}" class="text-gray-600 text-hover-primary">{{ $order_view[0]->billing_email }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-phone fs-2 me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>Phone</div>
                                                </td>
                                                <td class="fw-bold text-end">{{$order_view[0]->billing_phone }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Customer details-->
                        <!--begin::Documents-->
                        
                        <!--end::Documents-->
                    </div>
                    <!--end::Order summary-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
                            <!--begin::Orders-->
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                    <!--begin::Payment address-->
                                    <div class="card card-flush py-4 flex-row-fluid position-relative">
                                        <!--begin::Background-->
                                        <div class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                            <i class="ki-solid ki-two-credit-cart" style="font-size: 14em"></i>
                                        </div>
                                        <!--end::Background-->
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Billing Address</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            {{$order_view[0]->billing_address_1 }},
                                            <br />{{$order_view[0]->billing_city }},
                                            <br />{{$order_view[0]->billing_state }},
                                            <br />{{$order_view[0]->billing_country }}.
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Payment address-->
                                    <!--begin::Shipping address-->
                                    <div class="card card-flush py-4 flex-row-fluid position-relative">
                                        <!--begin::Background-->
                                        <div class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                            <i class="ki-solid ki-delivery" style="font-size: 13em"></i>
                                        </div>
                                        <!--end::Background-->
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Shipping Address</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            {{$order_view[0]->billing_address_1 }},
                                            <br />{{$order_view[0]->billing_city }},
                                            <br />{{$order_view[0]->billing_state }},
                                            <br />{{$order_view[0]->billing_country }}.
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Shipping address-->
                                </div>
                                <!--begin::Product List-->
                                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Order #{{$order_view[0]->id }}</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-175px">Product</th>
                                                        <th class="min-w-100px text-end">SKU</th>
                                                        <th class="min-w-70px text-end">Qty</th>
                                                        <th class="min-w-100px text-end">Unit Price</th>
                                                        <th class="min-w-100px text-end">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                
                                                    @forelse($order_item_view as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Thumbnail-->
                                                                {{-- <a href="#" class="symbol symbol-50px">
                                                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/100.png);"></span>
                                                                </a> --}}
                                                                <!--end::Thumbnail-->
                                                                <!--begin::Title-->
                                                                <div class="ms-5">
                                                                    <a href="#" class="fw-bold text-gray-600 text-hover-primary">{{ $item->name }}</a>
                                                                    <div class="fs-7 text-muted">Delivery Date: 19/07/2023</div>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                        </td>
                                                        <td class="text-end">04139005</td>
                                                        <td class="text-end">{{ $item->qty }}</td>
                                                        <td class="text-end">K{{ $item->price }}</td>
                                                        <td class="text-end">K{{ (int)$item->qty * (float)$item->price }}</td>
                                                    </tr>
                                                    @empty

                                                    @endforelse
                                                    <tr>
                                                        <td colspan="4" class="text-end">Subtotal</td>
                                                        <td class="text-end">K{{ $total }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-end">VAT (0%)</td>
                                                        <td class="text-end">K0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-end">Shipping Rate</td>
                                                        <td class="text-end">K0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="fs-3 text-dark text-end">Grand Total</td>
                                                        <td class="text-dark fs-3 fw-bolder text-end">K{{ $total }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Product List-->
                            </div>
                            <!--end::Orders-->
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
                            <!--begin::Orders-->
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::Order history-->
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Order History</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-100px">Date Added</th>
                                                        <th class="min-w-175px">Comment</th>
                                                        <th class="min-w-70px">Order Status</th>
                                                        <th class="min-w-100px">Customer Notifed</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    
                                                    {{-- <tr>
                                                        <td>11/07/2023</td>
                                                        <td>Order received</td>
                                                        <td>
                                                            <!--begin::Badges-->
                                                            <div class="badge badge-light-warning">Pending</div>
                                                            <!--end::Badges-->
                                                        </td>
                                                        <td>Yes</td>
                                                    </tr> --}}
                                                    No related histories
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Order history-->
                                <!--begin::Order data-->
                                {{-- <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Order Data</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5">
                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td class="text-muted">IP Address</td>
                                                        <td class="fw-bold text-end">172.68.221.26</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Forwarded IP</td>
                                                        <td class="fw-bold text-end">89.201.163.49</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">User Agent</td>
                                                        <td class="fw-bold text-end">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Accept Language</td>
                                                        <td class="fw-bold text-end">en-GB,en-US;q=0.9,en;q=0.8</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div> --}}
                                <!--end::Order data-->
                            </div>
                            <!--end::Orders-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Order details page-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
</div>

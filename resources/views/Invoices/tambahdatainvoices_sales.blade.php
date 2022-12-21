@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> Invoice </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboardv3"> Home </a></li>
                            <li class="breadcrumb-item"> Finance </li>
                            <li class="breadcrumb-item"><a href="/datainvoices_sales"> Invoices </a></li>
                            <li class="breadcrumb-item active"> Add Invoice </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content-wrapper">
                <div class="bg-dark-grey rounded b-shadow-4 create-inv">
                    <div class="px-lg-4 px-md-4 px-3 py-3">
                        <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Invoice Details</h4>
                    </div>
                    <hr class="m-0 border-top-grey">
                    <form action="/insertdatainvoices_sales" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row px-lg-4 px-md-4 px-3 py-3">
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="select_product">Select
                                    Project</label>
                                <div class="form-group mb-0">
                                    <select name="project_id" class="form-control select-picker" data-size="8"
                                        required="">
                                        <option value="">--</option>
                                        @foreach ($project as $item)
                                            <option value="{{ $item->id }}" {{ old('project_id') == $item->id }}>
                                                {{ $item->projectname }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="choose_client">Choose
                                    Client</label>
                                <div class="form-group mb-0">
                                    <select name="user_id" class="form-control select-picker" data-size="8" required="">
                                        <option value="">--</option>
                                        @foreach ($user as $items)
                                            @if ($items->level == 'Client')
                                                <option value="{{ $items->id }}" {{ old('user_id') == $items->id }}>
                                                    {{ $items->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label for="label">Invoice Date</label>
                                    <input type="date" value="" name="invoice_date" id="invoice_date"
                                        required="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label for="label">Due Date</label>
                                    <input type="date" value="" name="due_date" id="due_date" required=""
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label for="label">Shipping Address</label>
                                    <textarea class="form-control" name="shipping_address" id="shipping_address" rows="4"
                                        placeholder="e.g. 132, My Street, Kingston, New York 12401" required=""></textarea>
                                </div>
                            </div>
                            <hr class="m-0 border-top-grey">
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="currency">Currency</label>
                                <div class="form-group mb-0">
                                    <select name="currency" id="currency" class="form-control select-picker" data-size="8"
                                        required="">
                                        <option value="1">
                                            USD ($)
                                        </option>
                                        <option value="2">
                                            IDR (Rp)
                                        </option>
                                        <option value="3">
                                            GBP (£)
                                        </option>
                                        <option value="4">
                                            EUR (€)
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label for="label">Qty / Hrs</label>
                                    <input type="number" name="quantity" id="quantity" required=""
                                        class=" quantity form-control" onkeyup="Mul('0')">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label for="label">Unit Price</label>
                                    <input type="number" name="price" id="price" class="price form-control"
                                        required="" onkeyup="Mul('0')">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label for="label">Total</label>
                                    <input type="text" name="total" id="total" class="amount form-control"
                                        readonly>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit"> Submit </button>
                                <a href="/datainvoices_sales"class="btn btn-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
<script>
    function Mul(index) {
        var quantity = document.getElementsByClassName("quantity")[index].value;
        var price = document.getElementsByClassName("price")[index].value;

        document.getElementsByClassName("amount")[index].value = quantity * price;
        const subTotalField = document.getElementById("subTotal");
        subTotalField.innerHTML = Array.from(document.getElementsByClassName("amount")).reduce((sum, element) => {
            if (element.value.length === 0) return sum;
            return sum + parseInt(element.value);
        }, 0)

    }
</script>

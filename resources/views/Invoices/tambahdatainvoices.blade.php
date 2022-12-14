@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> Invoice </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboardv1"> Home </a></li>
                            <li class="breadcrumb-item"> Finance </li>
                            <li class="breadcrumb-item"><a href="/datainvoice_admin"> Invoices </a></li>
                            <li class="breadcrumb-item active"> Create Invoice </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header-row">
                    <div class="create-invoice bg-dark-grey rounded">
                        <form action="/insertdatainvoices_admin" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row px-lg-4 px-md-4 px-3 py-3">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group mb-0">
                                        <label class="f-14 text-dark-grey mb-12 mt-3 text-capitalize" for="usr">Invoice
                                            Number</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend  height-35 ">
                                                <span
                                                    class="input-group-text border-grey f-15 bg-additional-grey px-3 text-dark"
                                                    id="basic-addon1">INV#00</span>
                                            </div>
                                            <input type="text" name="invoice_number" id="invoice_number"
                                                class="form-control height-35 f-15" value="" placeholder="ex.01"
                                                aria-label="ex.01" aria-describedby="basic-addon1" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">

                                        <label for="label">Invoice Date</label>
                                        <input type="date" value="" name="invoice_date" id="invoice_date"
                                            class="form-control" />

                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">

                                        <label for="label">Due Date</label>
                                        <input type="date" value="" name="due_date" id="due_date"
                                            class="form-control" />

                                    </div>
                                </div>

                                <hr class="m-0 border-top-grey">
                                <div class="col-lg-4 col-md-6">
                                    <label class="f-14 text-dark-grey mb-12 mt-3" data-label=""
                                        for="currency">Currency</label>
                                    <div class="form-group mb-0">
                                        <select name="currency" id="currency" class="form-control select-picker"
                                            data-size="8">
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
                                    <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="choose_client">Choose
                                        Client</label>
                                    <div class="form-group mb-0">
                                        <select name="users_id" class="form-control select-picker" data-size="8">
                                            <option value="">--</option>
                                            @foreach ($client as $item)
                                                @if ($item->level == 'Client')
                                                    <option value="{{ $item->id }}" {{ old('users_id') == $item->id }}>
                                                        {{ $item->username }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="select_product">Select
                                        Project</label>
                                    <div class="form-group mb-0">
                                        <select name="project_id" class="form-control select-picker" data-size="8">
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
                                    <div class="form-group my-3">

                                        <label for="label">Shipping Address</label>
                                        <textarea class="form-control" name="shipping_address" id="shipping_address" rows="4"
                                            placeholder="e.g. 132, My Street, Kingston, New York 12401"></textarea>

                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">

                                        <label for="label">Qty / Hrs</label>
                                        <input type="number" id="" class=" quantity form-control"
                                            onkeyup="Mul('0')">

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">

                                        <label for="label">Unit Price</label>
                                        <input type="number" id="" class="price form-control"
                                            onkeyup="Mul('0')">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">

                                        <label for="label">Total</label>
                                        <input type="text" id="amount-0" class="amount form-control" disabled>

                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <input class="btn btn-light" type="reset" value="Cancel">
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

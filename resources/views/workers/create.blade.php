@extends('layouts.app')
@section('content')
<form>
    <div class="text-center">
                <h2>Work Information</h2>
    </div>
    <br>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Operation Date:</label>
            <input type="date" class="form-control">
        </div>
        <div class="form-group col-md-4">
            <label>Owner Name:</label>
            <input type="text" placeholder = "Enter Name" class="form-control">
        </div>
        <div class="form-group col-md-4">
            <label>Owner Contact:</label>
            <input type="tel" placeholder = "Phone No." class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class=" form-group col-md-12">
            <label><h4>Property Location:</h4></label>
            <div class= "form-row border">

                    <div class=" form-group col-md-2">
                        <label>Pradesh</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class=" form-group col-md-2">
                        <label>District</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class=" form-group col-md-2">
                        <label>Palika</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class=" form-group col-md-2">
                        <label>Ward</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class=" form-group col-md-4">
                        <label>Tole</label>
                         <input type="text" placeholder= "Tole Name" class="form-control">
                    </div>

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Bank</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Branch</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Site Visit By</label>
                <input type="text" placeholder="Visitor Name" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label>Site Visit Date</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label>Map Design By</label>
                <input type="text" placeholder = "name" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label>Map Design Date</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label>Brought Material</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Advance Payment</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label>Remarks</label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>
 <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection

<form method="post" url="{{route('vhip.store')}}">
    <div class="form-group">
        <label for="letter_code">Letter Code</label>
        <input class="form-control" type="text" id="letter_code" name="letter_code" placeholder="Letter Code">
    </div>
    <div class="form-group">
        <label for="submit_date">Submit Date</label>
        <input class="form-control" type="date" id="submit_date" name="submit_date">
    </div>
    <div class="form-group">
        <label for="expire_date">Expire Date</label>
        <input class="form-control" type="date" id="expire_date" name="expire_date">
    </div>
    <div class="form-group">
        <label for="total_amount">Total Amount</label>
        <input class="form-control" type="text" id="total_amount" name="total_amount" placeholder="Total Amount">
    </div>
    <div class="form-group">
        <label for="tracking_code">Tracking Code</label>
        <input class="form-control" type="text" id="tracking_code" name="tracking_code" placeholder="Tracking Code">
    </div>
    <hr>
    <div class="form-group">
        <label for="sub_companies">Sub Companies</label>
        <select name="sub_companies" class="form-control">
            <option></option>
        </select>
    </div>
    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="text" id="amount" name="amount">
        <button type="button" name="plus_button">+</button>
    </div>
</form>

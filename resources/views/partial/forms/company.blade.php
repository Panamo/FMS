{!! Form::open(['url' => route('company.store')]) !!}
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" id="name" name="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <select name="type" id="type" class="form-control">
          <option value="">ثبت</option>
          <option value="">تکثیر</option>
      </select>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" id="address" name="address" rows="4" cols="40" placeholder="Address"></textarea>
    </div>
    <div class="form-group">
        <label for="telphone">Telephone</label>
        <input class="form-control" type="text" id="telephone" name="telephone">
        <button type="button" name="button">+</button>
    </div>
{!! Form::close() !!}

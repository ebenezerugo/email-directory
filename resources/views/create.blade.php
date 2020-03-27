<!-- <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"> -->
<div class="col-md-4  border rounded shadow-sm pt-3 pb-3 mb-4" style="height:100%">
    <form method="post" action="{{ route('store') }}">
    @csrf
        <div class="form-group">
            <label for="email">Email </label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name"/>
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name"/>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
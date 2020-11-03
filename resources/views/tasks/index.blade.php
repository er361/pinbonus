<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <h1>Tasks</h1>
    <form action="/tasks/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="text">Text Field</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="text" placeholder="Please enter task as array" name="tasks" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


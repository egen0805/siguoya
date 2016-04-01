<form action="" method="post" role="form">
    <legend>Form Title</legend>
    <input type="text" name="" id="" value="<?php echo csrf_token() ?>">
    <input type="text" name="" id="" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for=""></label> <input type="text" class="form-control" name="" id="" placeholder="Input...">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
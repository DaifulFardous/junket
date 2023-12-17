<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plan edit</title>
</head>
<body>
    <h1>Plan Edit</h1>
    <div class="col-md-3"></div>
<div class="col-md-6">
    <form action="{{ url('admin/runningPlan/update/'.$runningPlan->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" value="{{ $runningPlan->location }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <textarea name="short_description" class="form-control mytextarea">{{ $runningPlan->short_description }}</textarea>
        </div>
        <div class="form-group">
            <label>long Description</label>
            <textarea name="long_description" class="form-control mytextarea">{{ $runningPlan->long_description }}</textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" value="{{ $runningPlan->image }}"class="form-control">
        </div>
        <div class="form-group">
            <label>Cost Description</label>
            <textarea name="cost_description" class="form-control mytextarea">{{ $runningPlan->cost_description }}</textarea>
        </div>
        <div class="form-group">
            <label>Total Cost</label>
            <input type="number" name="total_cost" value="{{ $runningPlan->total_cost }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Booking Cost</label>
            <input type="number" name="booking_cost" value="{{ $runningPlan->booking_cost }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Capacity</label>
            <input type="number" name="capacity" value="{{ $runningPlan->capacity }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
      </form>
</div>
<div class="col-md-3"></div>


</body>
</html>

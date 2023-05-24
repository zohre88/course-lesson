<x-admin-layout>
<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Create Lesson</h1>
</section>
<section class="row my-3">
<section class="col-12">
    <form method="post" action="{{route('lessons.update', $lesson->id)}}">
        @csrf
        @method('Put')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$lesson->name}}">
        </div>
        <div class="form-group">
            <label for="name">Price</label>
            <input type="text" class="form-control" id="price" name="price"value="{{$lesson->price}}">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">update</button>
    </form>
</section>
</x-admin-layout>
<x-admin-layout>
<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Create Course</h1>
</section>
<section class="row my-3">
<section class="col-12">
    <form method="post" action="{{route('courses.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name ...">
        </div>
       
        <div class="form-group">
            <label for="name">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter price ...">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">store</button>
    </form>
</section>
</x-admin-layout>

<x-admin-layout>


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5"><i class="fas fa-newspaper"></i> Courses</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a role="button" href="{{route('courses.create')}}" class="btn btn-sm btn-success">create
                </a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of courses</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>price</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td> {{$course->id}}</td>
                    <td> {{$course->name}} </td>
                    <td>{{$course->price}} </td>
                    <td>
                   
                        <form action="{{route('courses.destroy', $course->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{route('courses.edit', $course->id)}}">
                            <button type="button"   class="btn btn-sm btn-info my-0 mx-1 text-white">edit</button>
                            </a>
                            <a href="{{route('getLessons',$course->id)}}">
                            <button type="button"  class="btn btn-sm btn-success my-0 mx-1 text-white">show lessons</button>
                            </a>
                            <button role="button" type="submit"  href="" class="btn btn-sm btn-danger my-0 mx-1 text-white">delete</button>
                        </form>
                        
                       
                    </td>
                </tr>
                @endforeach
               

            </tbody>
        </table>
    </div>

    </x-admin-layout>

   
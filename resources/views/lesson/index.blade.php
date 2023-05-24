
<x-admin-layout>


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5"><i class="fas fa-newspaper"></i> Lessons 
    @if (isset($course))
        of {{$course->name}}
    @endif
    </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a role="button" href="{{route('createLesson', $course->id)}}" class="btn btn-sm btn-success">create
                </a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of lessons 
            </caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>course</th>
                    <th>price</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lessons as $lesson)
                <tr>
                    <td> {{$lesson->id}}</td>
                    <td> {{$lesson->name}} </td>
                    <td> {{$lesson->course->name}} </td>
                    <td>{{$lesson->price}} </td>
                    <td>
                   
                        <form action="{{route('lessons.destroy', $lesson->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{route('lessons.edit', $lesson->id)}}">
                                <button type="button"  class="btn btn-sm btn-info my-0 mx-1 text-white">edit</button>
                            </a>
                            <button type="submit"  href="" class="btn btn-sm btn-danger my-0 mx-1 text-white">delete</button>
                        </form>
                        
                       
                    </td>
                </tr>
                @endforeach
               

            </tbody>
        </table>
    </div>

    </x-admin-layout>

   
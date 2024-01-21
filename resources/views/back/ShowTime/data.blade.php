<tr class = "text-center">
    <td>{{ $showTime->movie->name }}</td>
    <td>{{ $showTime->eventDay->date }}</td>
    <td>{{ $showTime->timeSlot->formatted_start_time }}</td>
    <td>{{ $showTime->timeSlot->formatted_end_time }}</td>
    <td>
        <form action = "{{ route('dashboard.show-times.edit', $showTime->id) }}" method = "get" style = "display: inline;">
            @csrf
            <button type = "submit" class = "btn btn-primary">Edit</button>
        </form>
        <form action = "{{ route('dashboard.show-times.destroy', $showTime->id) }}" method = "post"
            style = "display: inline;">
            @csrf
            @method('delete')
            <button type = "submit" class = "btn btn-danger">Delete</button>
        </form>
    </td>
</tr>

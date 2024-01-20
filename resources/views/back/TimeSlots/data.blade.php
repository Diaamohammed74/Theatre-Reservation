<tr class="text-center">
    <td>1</td>
    <td>{{ $timeSlot->formatted_start_time}}</td>
    <td>{{ $timeSlot->formatted_end_time }}</td>
    <td>
        <form action="{{ route('dashboard.time-slots.edit', $timeSlot->id) }}" method="get" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        <form action="{{ route('dashboard.time-slots.destroy', $timeSlot->id) }}" method="post" style="display: inline;">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
</tr>
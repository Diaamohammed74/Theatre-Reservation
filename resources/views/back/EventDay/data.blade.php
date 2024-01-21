<tr class="text-center">
    <td>{{ $eventDay->date }}</td>
    <td>
        <form action="{{ route('dashboard.event-days.edit', $eventDay->id) }}" method="get" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        <form action="{{ route('dashboard.event-days.destroy', $eventDay->id) }}" method="post" style="display: inline;">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
</tr>
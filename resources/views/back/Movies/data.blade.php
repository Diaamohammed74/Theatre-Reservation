<tr class="text-center" >
    <td>{{ $movie->name }}</td>
    <td>
        <form action="{{ route('dashboard.movies.edit', $movie->id) }}" method="get" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        <form action="{{ route('dashboard.movies.destroy', $movie->id) }}" method="post" style="display: inline;">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
</tr>
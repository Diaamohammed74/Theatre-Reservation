<tr class="text-center">
    <td>{{ $reservation->name}}</td>
    <td>{{ $reservation->phone }}</td>
    <td>{{ $reservation->email }}</td>
    <td>{{ $reservation->showTime->eventDay->date }}</td>
    <td>{{ $reservation->showTime->movie->name }}</td>
    <td>{{ $reservation->showTime->timeSlot->formatted_start_time }}</td>
    <td>{{ $reservation->showTime->timeSlot->formatted_end_time }}</td>
</tr>
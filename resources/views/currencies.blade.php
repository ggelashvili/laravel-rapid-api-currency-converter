<select name="{{ $name }}" @class($class)>
    @foreach($currencies as $val => $name)
        <option value="{{ $val }}" {{ ($default ?? '') === $val ? 'selected' : '' }}>
            {{ $val }} ({{ $name }})
        </option>
    @endforeach
</select>

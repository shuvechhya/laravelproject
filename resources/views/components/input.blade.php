<!-- resources/views/components/input.blade.php -->

<div class="form-group">
    <label for="">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" id="" name="{{ $name }}">
    <span class="text-danger">
        <!--@error($name)
            {{ $message }}
        @enderror-->
    </span>
</div>

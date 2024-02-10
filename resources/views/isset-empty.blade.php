<html>

<body>
    <p>
        @isset($name)
            Hello, my name is {{ $name }}
        @endisset
    </p>
    <p>
        @empty($hobbies)
            I don't have hobbies.
        @endempty
    </p>
</body>

</html>

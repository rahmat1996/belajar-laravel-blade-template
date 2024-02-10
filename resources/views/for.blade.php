<html>

<body>
    <ul>
        @for ($i = 1; $i <= $limit; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul>
</body>

</html>

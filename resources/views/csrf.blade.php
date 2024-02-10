<html>

<body>
    <form action="/test" method="post">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Send">
    </form>
</body>

</html>

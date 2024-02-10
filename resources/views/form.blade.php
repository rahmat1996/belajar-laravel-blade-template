<html>

<body>
    <form>
        <input type="checkbox" @checked($user['premium']) value="premium" /> <br />
        <input type="text" value="{{ $user['name'] }}" @readonly(!$user['admin']) /><br />
    </form>
</body>

</html>

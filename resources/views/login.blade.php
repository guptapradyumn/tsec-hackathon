<html>

    <body>
        <form action="/login" method="post">
            {{csrf_field()}}
            <input type="text" name="name">
             <input type="password" name="password">
             <input type="submit">
             <a href={{url('/login')}}>login</a>
        </form>
    </body>
</html> 


  



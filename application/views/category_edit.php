<h1>Category # {CategoryId}</h1>
<form role="form" action="/Category/submit" method="post">
    {fcategory}
    <input type="submit" value="Update Category Name"/>
</form>
{error}
<a href="/Category/cancel"><input type="button" value="Cancel the current edit"/></a>
